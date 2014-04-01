<?php
// src/PPE/GSBBundle/Entity/VisiteurRepository.php
namespace PPE\GSBBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class VisiteurRepository extends EntityRepository implements UserProviderInterface
{
	/**
	 * \brief
	 * 		Retourne un utilisateur (Visiteur) d'apres son nom d'utilisateur
	 * 		(Prenom.Nom)
	 * \param 
	 * 		string $username
	 * \throws 
	 * 		UsernameNotFoundException
	 * \return 
	 * 		PPE\GSBBundle\Entity\Visiteur
	 */
    public function loadUserByUsername($username)
    {
    	$nompren = preg_split("/\./", $username);
    	$prenom = $nompren[0];
    	$nom = $nompren[1];
    	
        $q = $this->_em->createQuery('
        		SELECT vis 
        		FROM PPE\GSBBundle\Entity\Visiteur vis, PPE\GSBBundle\Entity\Collaborateur c 
        		WHERE vis.matriculeColVis = c.matriculeCol
        		AND	  c.nomCol = :nom
        		AND	  c.prenomCol = :prenom	
        		')->setParameters( array('nom' => $nom, 'prenom' => $prenom) );

        try
        {
            $user = $q->getSingleResult();
        }
        catch (NoResultException $e)
        {
            throw new UsernameNotFoundException(sprintf('Unable to find an active admin AcmeUserBundle:User object identified by "%s".', $username), 0, $e);
        }

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class))
        {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        }
        
		//var_dump($user->getUsername());
        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        //return $this->getEntityName() === $class || is_subclass_of($class, $this->getEntityName());
    	return $class === 'PPE\GSBBundle\Entity\Visiteur';
    }
}
?>
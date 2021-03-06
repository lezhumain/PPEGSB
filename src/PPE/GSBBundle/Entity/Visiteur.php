<?php
// src/Acme/UserBundle/Entity/Visiteur.php
namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use Symfony\Component\Security\Core\User\EquatableInterface;

/**
 * Visiteur
 *
 * @ORM\Table(name="VISITEUR", indexes={@ORM\Index(name="IDX_88961BF470E4A9D4", columns={"code_region"})})
 * @ORM\Entity(repositoryClass="PPE\GSBBundle\Entity\VisiteurRepository")
 */
class Visiteur implements AdvancedUserInterface //, \Serializable
{
    /**
     * @var \PPE\GSBBundle\Entity\Collaborateur
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_col_vis", referencedColumnName="matricule_col", unique=true)
     * })

     */
    private $matriculeColVis;

    /**
     * @var \PPE\GSBBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_region", referencedColumnName="code_region")
     * })
     */
    private $codeRegion;



    /**
     * Set matriculeColVis
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColVis
     * @return Visiteur
     */
    public function setMatriculeColVis(\PPE\GSBBundle\Entity\Collaborateur $matriculeColVis = null)
    {
        $this->matriculeColVis = $matriculeColVis;

        return $this;
    }

    /**
     * Get matriculeColVis
     *
     * @return \PPE\GSBBundle\Entity\Collaborateur 
     */
    public function getMatriculeColVis()
    {
        return $this->matriculeColVis;
    }
    
    /**
     * \brief Retourne le matricule du Visiteur
     *
     * \return int matricule
     */
    public function getMatricule()
    {
    	return $this->matriculeColVis->getMatriculeCol();
    }

    /**
     * Set codeRegion
     *
     * @param \PPE\GSBBundle\Entity\Region $codeRegion
     * @return Visiteur
     */
    public function setCodeRegion(\PPE\GSBBundle\Entity\Region $codeRegion = null)
    {
        $this->codeRegion = $codeRegion;

        return $this;
    }

    /**
     * Get codeRegion
     *
     * @return \PPE\GSBBundle\Entity\Region 
     */
    public function getCodeRegion()
    {
        return $this->codeRegion;
    }
    
    public function toString()
    {
    	return 	"[VISITEUR]" .
    			$this->matriculeColVis->getPrenomCol() . " " .
				$this->matriculeColVis->getNomCol() . ", n°" .
				$this->matriculeColVis->getMatriculeCol();
    }

    public function isEqualTo(UserInterface $user)
    {
    	return $this->getUsername() === $user->getUsername();
    }

    
    /*****************************/
    /* methode de user interface */
    /*****************************/
    
 	/**
 	 * \brief
 	 * 		Retourne le nom d'utilisateur (contenu dans Collaborateur)
 	 * \return
 	 * 		"prenom.nom"
 	 */
    public function getUsername()
    {
    	return $this->matriculeColVis->getPrenomCol() . "." . $this->matriculeColVis->getNomCol();
    }

    /**
     * \brief
     * 		Retourne le salt (contenu dans Collaborateur)
     */
    public function getSalt()
    {
    	return $this->matriculeColVis->getSaltCol();
    }
    
    /**
     * \brief
     * 		Retourne le mot de passe (contenu dans Collaborateur)
     */
    public function getPassword()
    {
    	return $this->matriculeColVis->getMdpCol();
    }
    
    public function setPassword($pass)
    {
    	return $this->matriculeColVis->setMdpCol($pass);
    }
    
    
    public function getRoles()
    {
    	return array('ROLE_USER');
    }
    
    public function eraseCredentials()
    {
    }
    
    /*****************************/
    /*****************************/
    /*****************************/
    
    /*****************************/
    /*    methode de Advanced    */
    /*****************************/
    public function isAccountNonExpired()
    {
    	return true;
    }
    
    public function isAccountNonLocked()
    {
    	return true;
    }
    
    public function isCredentialsNonExpired()
    {
    	return true;
    }
    
    public function isEnabled()
    {
    	/*
    	if( !$this->isActive || !$this->estValideMembre )
    		return false;
    	else
    	*/
    	return true;
    }
    
    /*****************************/
    /*****************************/
    /*****************************/
    
    /*****************************/
    /*   methode de \Serialize   */
    /*****************************/
    
    public function serialize()
    {
    	return serialize(array(
    			$this->matriculeColVis
    	));
    }
    
    
    /*
     * see \Serializable::unserialize()
     */
    
    public function unserialize($serialized)
    {
    	list (
    			$this->matriculeColVis
    	) = unserialize($serialized);
    }
    
    
    /*****************************/
    /*****************************/
    /*****************************/
}

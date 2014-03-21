<?php
// src/PPE/GSBBundle/Security/User/UserProvider.php
namespace PPE\GSBBundle\Security\User;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;

class GSBUserProvider implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        // effectuez un appel à votre service web ici
        $repo = $this->get('doctrine')
        			 ->getManager()
                   	 ->getRepository('SdzBlogBundle:Article');
        
        if ($userData) {
            $password = '...';

            // ...

            return new GSBUser($username, $password, $salt, $roles);
        }

        throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $username));
    }

    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof WebserviceUser) {
            throw new UnsupportedUserException(sprintf('Instances of "%s" are not supported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class)
    {
        return $class === 'Acme\WebserviceUserBundle\Security\User\WebserviceUser';
    }
}
?>
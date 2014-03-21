<?php
// src/PPE/GSBBundle/Security/User/User.php
namespace PPE\GSBBundle\Security\User;

use Symfony\Component\Security\Core\User\UserInterface;

class GSBUser implements UserInterface
{
	private $username;
	private $password;
	private $salt;
	private $roles;

	public function __construct($username, $password, $salt, array $roles)
	{
		$this->username = $username;
		$this->password = $password;
		$this->salt = $salt;
		$this->roles = $roles;
	}

	public function getRoles()
	{
		return $this->roles;
	}

	public function getPassword()
	{
		return $this->password;
	}

	public function getSalt()
	{
		return $this->salt;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function eraseCredentials()
	{
	}

	public function equals(UserInterface $user)
	{
		if (!$user instanceof GSBUser)
			return false;

		if ($this->password !== $user->getPassword()) {
			return false;
		}

		if ($this->getSalt() !== $user->getSalt()) {
			return false;
		}

		if ($this->username !== $user->getUsername()) {
			return false;
		}

		return true;
	}
}
?>
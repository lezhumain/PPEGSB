<?php
// src/Acme/UserBundle/Entity/VisiteurRepository.php
namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\EntityRepository;

class VisiteurRepository extends EntityRepository
{
	public function myFindAll()
	{
	    //$queryBuilder = $this->createQueryBuilder('a');
	    $queryBuilder = $this->_em->createQueryBuilder()
	                              ->select('a')
	                              ->from($this->_entityName, 'a');
	      // $this->_entityName : namespace de l'entité geree
	
	    $query = $queryBuilder->getQuery();
	
	    $resultats = $query->getResult();
	
	    return $resultats;
  	}
}
?>
<?php

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
     *@ORM\Id
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
}

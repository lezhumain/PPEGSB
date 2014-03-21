<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Composant
 *
 * @ORM\Table(name="COMPOSANT")
 * @ORM\Entity
 */
class Composant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_comp", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeComp;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_comp", type="string", length=250, nullable=false)
     */
    private $libelleComp;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Medicament", mappedBy="codeComp")
     */
    private $depotLegalConstituer;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->depotLegalConstituer = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codeComp
     *
     * @return integer 
     */
    public function getCodeComp()
    {
        return $this->codeComp;
    }

    /**
     * Set libelleComp
     *
     * @param string $libelleComp
     * @return Composant
     */
    public function setLibelleComp($libelleComp)
    {
        $this->libelleComp = $libelleComp;

        return $this;
    }

    /**
     * Get libelleComp
     *
     * @return string 
     */
    public function getLibelleComp()
    {
        return $this->libelleComp;
    }

    /**
     * Add depotLegalConstituer
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalConstituer
     * @return Composant
     */
    public function addDepotLegalConstituer(\PPE\GSBBundle\Entity\Medicament $depotLegalConstituer)
    {
        $this->depotLegalConstituer[] = $depotLegalConstituer;

        return $this;
    }

    /**
     * Remove depotLegalConstituer
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalConstituer
     */
    public function removeDepotLegalConstituer(\PPE\GSBBundle\Entity\Medicament $depotLegalConstituer)
    {
        $this->depotLegalConstituer->removeElement($depotLegalConstituer);
    }

    /**
     * Get depotLegalConstituer
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepotLegalConstituer()
    {
        return $this->depotLegalConstituer;
    }
}

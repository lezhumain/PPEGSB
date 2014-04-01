<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Specialite
 *
 * @ORM\Table(name="SPECIALITE")
 * @ORM\Entity
 */
class Specialite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_spec", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeSpec;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_spec", type="string", length=250, nullable=false)
     */
    private $libelleSpec;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Praticien", inversedBy="codeSpec")
     * @ORM\JoinTable(name="posseder",
     *   joinColumns={
     *     @ORM\JoinColumn(name="code_spec", referencedColumnName="code_spec")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="matricule_praticien", referencedColumnName="matricule_praticien")
     *   }
     * )
     */
    private $matriculePraticien;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matriculePraticien = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get codeSpec
     *
     * @return integer 
     */
    public function getCodeSpec()
    {
        return $this->codeSpec;
    }

    /**
     * Set libelleSpec
     *
     * @param string $libelleSpec
     * @return Specialite
     */
    public function setLibelleSpec($libelleSpec)
    {
        $this->libelleSpec = $libelleSpec;
    
        return $this;
    }

    /**
     * Get libelleSpec
     *
     * @return string 
     */
    public function getLibelleSpec()
    {
        return $this->libelleSpec;
    }

    /**
     * Add matriculePraticien
     *
     * @param \PPE\GSBBundle\Entity\Praticien $matriculePraticien
     * @return Specialite
     */
    public function addMatriculePraticien(\PPE\GSBBundle\Entity\Praticien $matriculePraticien)
    {
        $this->matriculePraticien[] = $matriculePraticien;
    
        return $this;
    }

    /**
     * Remove matriculePraticien
     *
     * @param \PPE\GSBBundle\Entity\Praticien $matriculePraticien
     */
    public function removeMatriculePraticien(\PPE\GSBBundle\Entity\Praticien $matriculePraticien)
    {
        $this->matriculePraticien->removeElement($matriculePraticien);
    }

    /**
     * Get matriculePraticien
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatriculePraticien()
    {
        return $this->matriculePraticien;
    }
}

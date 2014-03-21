<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prescrire
 *
 * @ORM\Table(name="PRESCRIRE", indexes={@ORM\Index(name="IDX_905658D21C5F7A71", columns={"depot_legal_prescr"}), @ORM\Index(name="IDX_905658D261B89203", columns={"code_dosage"}), @ORM\Index(name="IDX_905658D2A76557E5", columns={"code_individu"})})
 * @ORM\Entity
 */
class Prescrire
{
    /**
     * @var string
     *
     * @ORM\Column(name="posologie", type="string", length=25, nullable=false)
     */
    private $posologie;

    /**
     * @var \PPE\GSBBundle\Entity\Medicament
     *
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Medicament")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="depot_legal_prescr", referencedColumnName="depot_legal", unique=true)
     * })
     */
    private $depotLegalPrescr;

    /**
     * @var \PPE\GSBBundle\Entity\Dosage
     *
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Dosage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_dosage", referencedColumnName="code_dosage", unique=true)
     * })
     */
    private $codeDosage;

    /**
     * @var \PPE\GSBBundle\Entity\TypeIndividu
     *
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\TypeIndividu")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_individu", referencedColumnName="code_individu", unique=true)
     * })
     */
    private $codeIndividu;



    /**
     * Set posologie
     *
     * @param string $posologie
     * @return Prescrire
     */
    public function setPosologie($posologie)
    {
        $this->posologie = $posologie;

        return $this;
    }

    /**
     * Get posologie
     *
     * @return string 
     */
    public function getPosologie()
    {
        return $this->posologie;
    }

    /**
     * Set depotLegalPrescr
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalPrescr
     * @return Prescrire
     */
    public function setDepotLegalPrescr(\PPE\GSBBundle\Entity\Medicament $depotLegalPrescr = null)
    {
        $this->depotLegalPrescr = $depotLegalPrescr;

        return $this;
    }

    /**
     * Get depotLegalPrescr
     *
     * @return \PPE\GSBBundle\Entity\Medicament 
     */
    public function getDepotLegalPrescr()
    {
        return $this->depotLegalPrescr;
    }

    /**
     * Set codeDosage
     *
     * @param \PPE\GSBBundle\Entity\Dosage $codeDosage
     * @return Prescrire
     */
    public function setCodeDosage(\PPE\GSBBundle\Entity\Dosage $codeDosage = null)
    {
        $this->codeDosage = $codeDosage;

        return $this;
    }

    /**
     * Get codeDosage
     *
     * @return \PPE\GSBBundle\Entity\Dosage 
     */
    public function getCodeDosage()
    {
        return $this->codeDosage;
    }

    /**
     * Set codeIndividu
     *
     * @param \PPE\GSBBundle\Entity\TypeIndividu $codeIndividu
     * @return Prescrire
     */
    public function setCodeIndividu(\PPE\GSBBundle\Entity\TypeIndividu $codeIndividu = null)
    {
        $this->codeIndividu = $codeIndividu;

        return $this;
    }

    /**
     * Get codeIndividu
     *
     * @return \PPE\GSBBundle\Entity\TypeIndividu 
     */
    public function getCodeIndividu()
    {
        return $this->codeIndividu;
    }
}

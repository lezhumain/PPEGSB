<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Dosage
 *
 * @ORM\Table(name="DOSAGE")
 * @ORM\Entity
 */
class Dosage
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_dosage", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeDosage;

    /**
     * @var string
     *
     * @ORM\Column(name="unite_dosage", type="string", length=25, nullable=false)
     */
    private $uniteDosage;

    /**
     * @var float
     *
     * @ORM\Column(name="quantite_dosage", type="float", precision=53, scale=0, nullable=false)
     */
    private $quantiteDosage;



    /**
     * Get codeDosage
     *
     * @return integer 
     */
    public function getCodeDosage()
    {
        return $this->codeDosage;
    }

    /**
     * Set uniteDosage
     *
     * @param string $uniteDosage
     * @return Dosage
     */
    public function setUniteDosage($uniteDosage)
    {
        $this->uniteDosage = $uniteDosage;
    
        return $this;
    }

    /**
     * Get uniteDosage
     *
     * @return string 
     */
    public function getUniteDosage()
    {
        return $this->uniteDosage;
    }

    /**
     * Set quantiteDosage
     *
     * @param float $quantiteDosage
     * @return Dosage
     */
    public function setQuantiteDosage($quantiteDosage)
    {
        $this->quantiteDosage = $quantiteDosage;
    
        return $this;
    }

    /**
     * Get quantiteDosage
     *
     * @return float 
     */
    public function getQuantiteDosage()
    {
        return $this->quantiteDosage;
    }
}

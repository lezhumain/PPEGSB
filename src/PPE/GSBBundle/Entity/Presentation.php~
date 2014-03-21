<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Presentation
 *
 * @ORM\Table(name="PRESENTATION")
 * @ORM\Entity
 */
class Presentation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_present", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codePresent;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_present", type="string", length=25, nullable=false)
     */
    private $libellePresent;

    /**
     * @var string
     *
     * @ORM\Column(name="depot_legal_present", type="string", length=25, nullable=false)
     */
    private $depotLegalPresent;



    /**
     * Get codePresent
     *
     * @return integer 
     */
    public function getCodePresent()
    {
        return $this->codePresent;
    }

    /**
     * Set libellePresent
     *
     * @param string $libellePresent
     * @return Presentation
     */
    public function setLibellePresent($libellePresent)
    {
        $this->libellePresent = $libellePresent;

        return $this;
    }

    /**
     * Get libellePresent
     *
     * @return string 
     */
    public function getLibellePresent()
    {
        return $this->libellePresent;
    }

    /**
     * Set depotLegalPresent
     *
     * @param string $depotLegalPresent
     * @return Presentation
     */
    public function setDepotLegalPresent($depotLegalPresent)
    {
        $this->depotLegalPresent = $depotLegalPresent;

        return $this;
    }

    /**
     * Get depotLegalPresent
     *
     * @return string 
     */
    public function getDepotLegalPresent()
    {
        return $this->depotLegalPresent;
    }
}

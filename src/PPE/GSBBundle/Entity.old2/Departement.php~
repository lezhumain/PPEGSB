<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="DEPARTEMENT", indexes={@ORM\Index(name="IDX_4C75C98B70E4A9D4", columns={"code_region"})})
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_dep", type="string", length=4)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeDep;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_dep", type="string", length=25, nullable=false)
     */
    private $libelleDep;

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
     * Get codeDep
     *
     * @return string 
     */
    public function getCodeDep()
    {
        return $this->codeDep;
    }

    /**
     * Set libelleDep
     *
     * @param string $libelleDep
     * @return Departement
     */
    public function setLibelleDep($libelleDep)
    {
        $this->libelleDep = $libelleDep;

        return $this;
    }

    /**
     * Get libelleDep
     *
     * @return string 
     */
    public function getLibelleDep()
    {
        return $this->libelleDep;
    }

    /**
     * Set codeRegion
     *
     * @param \PPE\GSBBundle\Entity\Region $codeRegion
     * @return Departement
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

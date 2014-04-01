<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commune
 *
 * @ORM\Table(name="COMMUNE", indexes={@ORM\Index(name="IDX_DDA72FF41030639A", columns={"code_dep"})})
 * @ORM\Entity(repositoryClass="PPE\GSBBundle\Repository\CommuneRepository")
 */
class Commune
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_commune", type="string", length=25)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $codeCommune;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_commun", type="string", length=25, nullable=false)
     */
    protected $libelleCommun;

    /**
     * @var \PPE\GSBBundle\Entity\Departement
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_dep", referencedColumnName="code_dep")
     * })
     */
    protected $codeDep;



    /**
     * Get codeCommune
     *
     * @return string 
     */
    public function getCodeCommune()
    {
        return $this->codeCommune;
    }

    /**
     * Set libelleCommun
     *
     * @param string $libelleCommun
     * @return Commune
     */
    public function setLibelleCommun($libelleCommun)
    {
        $this->libelleCommun = $libelleCommun;

        return $this;
    }

    /**
     * Get libelleCommun
     *
     * @return string 
     */
    public function getLibelleCommun()
    {
        return $this->libelleCommun;
    }

    /**
     * Set codeDep
     *
     * @param \PPE\GSBBundle\Entity\Departement $codeDep
     * @return Commune
     */
    public function setCodeDep(\PPE\GSBBundle\Entity\Departement $codeDep = null)
    {
        $this->codeDep = $codeDep;

        return $this;
    }

    /**
     * Get codeDep
     *
     * @return \PPE\GSBBundle\Entity\Departement 
     */
    public function getCodeDep()
    {
        return $this->codeDep;
    }
}

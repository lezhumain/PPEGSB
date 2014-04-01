<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="REGION", indexes={@ORM\Index(name="IDX_FF9A36F0B8E26183", columns={"code_secteur"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_region", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_region", type="string", length=50, nullable=false)
     */
    private $nomRegion;

    /**
     * @var \PPE\GSBBundle\Entity\Secteur
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Secteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_secteur", referencedColumnName="code_secteur")
     * })
     */
    private $codeSecteur;



    /**
     * Get codeRegion
     *
     * @return string 
     */
    public function getCodeRegion()
    {
        return $this->codeRegion;
    }

    /**
     * Set nomRegion
     *
     * @param string $nomRegion
     * @return Region
     */
    public function setNomRegion($nomRegion)
    {
        $this->nomRegion = $nomRegion;
    
        return $this;
    }

    /**
     * Get nomRegion
     *
     * @return string 
     */
    public function getNomRegion()
    {
        return $this->nomRegion;
    }

    /**
     * Set codeSecteur
     *
     * @param \PPE\GSBBundle\Entity\Secteur $codeSecteur
     * @return Region
     */
    public function setCodeSecteur(\PPE\GSBBundle\Entity\Secteur $codeSecteur = null)
    {
        $this->codeSecteur = $codeSecteur;
    
        return $this;
    }

    /**
     * Get codeSecteur
     *
     * @return \PPE\GSBBundle\Entity\Secteur 
     */
    public function getCodeSecteur()
    {
        return $this->codeSecteur;
    }
}

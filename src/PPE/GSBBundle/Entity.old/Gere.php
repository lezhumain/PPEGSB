<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gere
 *
 * @ORM\Table(name="GERE", indexes={@ORM\Index(name="IDX_DFED7A7AD703BC08", columns={"matricule_col_ger"}), @ORM\Index(name="IDX_DFED7A7A70E4A9D4", columns={"code_region"}), @ORM\Index(name="IDX_DFED7A7A8602054F", columns={"JJMMAAAA_DEB"})})
 * @ORM\Entity
 */
class Gere
{
    /**
     * @var \DateTime
     *@ORM\Id
     * @ORM\Column(name="JJMMAAAA_FIN", type="datetime", nullable=false)
     */
    private $jjmmaaaaFin;

    /**
     * @var \PPE\GSBBundle\Entity\Collaborateur
     *@ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_col_ger", referencedColumnName="matricule_col", unique=true)
     * })
     */
    private $matriculeColGer;

    /**
     * @var \PPE\GSBBundle\Entity\Region
     *@ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_region", referencedColumnName="code_region", unique=true)
     * })
     */
    private $codeRegion;

    /**
     * @var \PPE\GSBBundle\Entity\Calendrier
     *
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Calendrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="JJMMAAAA_DEB", referencedColumnName="JJMMAAAA_DEB", unique=true)
     * })
     */
    private $jjmmaaaaDeb;



    /**
     * Set jjmmaaaaFin
     *
     * @param \DateTime $jjmmaaaaFin
     * @return Gere
     */
    public function setJjmmaaaaFin($jjmmaaaaFin)
    {
        $this->jjmmaaaaFin = $jjmmaaaaFin;
    
        return $this;
    }

    /**
     * Get jjmmaaaaFin
     *
     * @return \DateTime 
     */
    public function getJjmmaaaaFin()
    {
        return $this->jjmmaaaaFin;
    }

    /**
     * Set matriculeColGer
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColGer
     * @return Gere
     */
    public function setMatriculeColGer(\PPE\GSBBundle\Entity\Collaborateur $matriculeColGer = null)
    {
        $this->matriculeColGer = $matriculeColGer;
    
        return $this;
    }

    /**
     * Get matriculeColGer
     *
     * @return \PPE\GSBBundle\Entity\Collaborateur 
     */
    public function getMatriculeColGer()
    {
        return $this->matriculeColGer;
    }

    /**
     * Set codeRegion
     *
     * @param \PPE\GSBBundle\Entity\Region $codeRegion
     * @return Gere
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

    /**
     * Set jjmmaaaaDeb
     *
     * @param \PPE\GSBBundle\Entity\Calendrier $jjmmaaaaDeb
     * @return Gere
     */
    public function setJjmmaaaaDeb(\PPE\GSBBundle\Entity\Calendrier $jjmmaaaaDeb = null)
    {
        $this->jjmmaaaaDeb = $jjmmaaaaDeb;
    
        return $this;
    }

    /**
     * Get jjmmaaaaDeb
     *
     * @return \PPE\GSBBundle\Entity\Calendrier 
     */
    public function getJjmmaaaaDeb()
    {
        return $this->jjmmaaaaDeb;
    }
}

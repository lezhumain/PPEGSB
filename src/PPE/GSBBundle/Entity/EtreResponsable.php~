<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EtreResponsable
 *
 * @ORM\Table(name="ETRE_RESPONSABLE", indexes={@ORM\Index(name="IDX_2087271E875E4B76", columns={"matricule_col_etr"}), @ORM\Index(name="IDX_2087271E8602054F", columns={"JJMMAAAA_DEB"}), @ORM\Index(name="IDX_2087271EB8E26183", columns={"code_secteur"})})
 * @ORM\Entity
 */
class EtreResponsable
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="JJMMAAAA_FIN", type="datetime", nullable=false)
     */
    private $jjmmaaaaFin;

    /**
     * @var \PPE\GSBBundle\Entity\Collaborateur
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_col_etr", referencedColumnName="matricule_col", unique=true)
     * })
     */
    private $matriculeColEtr;

    /**
     * @var \PPE\GSBBundle\Entity\Calendrier
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Calendrier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="JJMMAAAA_DEB", referencedColumnName="JJMMAAAA_DEB", unique=true)
     * })
     */
    private $jjmmaaaaDeb;

    /**
     * @var \PPE\GSBBundle\Entity\Secteur
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Secteur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_secteur", referencedColumnName="code_secteur", unique=true)
     * })
     */
    private $codeSecteur;



    /**
     * Set jjmmaaaaFin
     *
     * @param \DateTime $jjmmaaaaFin
     * @return EtreResponsable
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
     * Set matriculeColEtr
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColEtr
     * @return EtreResponsable
     */
    public function setMatriculeColEtr(\PPE\GSBBundle\Entity\Collaborateur $matriculeColEtr = null)
    {
        $this->matriculeColEtr = $matriculeColEtr;

        return $this;
    }

    /**
     * Get matriculeColEtr
     *
     * @return \PPE\GSBBundle\Entity\Collaborateur 
     */
    public function getMatriculeColEtr()
    {
        return $this->matriculeColEtr;
    }

    /**
     * Set jjmmaaaaDeb
     *
     * @param \PPE\GSBBundle\Entity\Calendrier $jjmmaaaaDeb
     * @return EtreResponsable
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

    /**
     * Set codeSecteur
     *
     * @param \PPE\GSBBundle\Entity\Secteur $codeSecteur
     * @return EtreResponsable
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

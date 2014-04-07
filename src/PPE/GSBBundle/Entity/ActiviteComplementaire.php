<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ActiviteComplementaire
 *
 * @ORM\Table(name="ACTIVITE_COMPLEMENTAIRE", indexes={@ORM\Index(name="IDX_A6C0FC196CB7C209", columns={"matricule_col_act"})})
 * @ORM\Entity
 */
class ActiviteComplementaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_act", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $numAct;

    /**
     * @var string
     *
     * @ORM\Column(name="theme_act", type="string", length=150, nullable=false)
     */
    protected $themeAct;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_act", type="string", length=25, nullable=false)
     */
    protected $montantAct;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_act", type="datetime", nullable=false)
     */
    protected $dateAct;

    /**
     * @var string
     *
     * @ORM\Column(name="lieu_act", type="string", length=300, nullable=false)
     */
    protected $lieuAct;

    /**
     * @var \PPE\GSBBundle\Entity\Collaborateur
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_col_act", referencedColumnName="matricule_col")
     * })
     */
    protected $matriculeColAct;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Collaborateur", mappedBy="numAct")
     */
    protected $matriculeColOrg;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Praticien", inversedBy="numAct")
     * @ORM\JoinTable(name="participe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="num_act", referencedColumnName="num_act")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="matricule_praticien", referencedColumnName="matricule_praticien")
     *   }
     * )
     */
    protected $matriculePraticien;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->matriculeColOrg = new \Doctrine\Common\Collections\ArrayCollection();
        $this->matriculePraticien = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get numAct
     *
     * @return integer 
     */
    public function getNumAct()
    {
        return $this->numAct;
    }

    /**
     * Set themeAct
     *
     * @param string $themeAct
     * @return ActiviteComplementaire
     */
    public function setThemeAct($themeAct)
    {
        $this->themeAct = $themeAct;

        return $this;
    }

    /**
     * Get themeAct
     *
     * @return string 
     */
    public function getThemeAct()
    {
        return $this->themeAct;
    }

    /**
     * Set montantAct
     *
     * @param string $montantAct
     * @return ActiviteComplementaire
     */
    public function setMontantAct($montantAct)
    {
        $this->montantAct = $montantAct;

        return $this;
    }

    /**
     * Get montantAct
     *
     * @return string 
     */
    public function getMontantAct()
    {
        return $this->montantAct;
    }

    /**
     * Set dateAct
     *
     * @param \DateTime $dateAct
     * @return ActiviteComplementaire
     */
    public function setDateAct($dateAct)
    {
        $this->dateAct = $dateAct;

        return $this;
    }

    /**
     * Get dateAct
     *
     * @return \DateTime 
     */
    public function getDateAct()
    {
        return $this->dateAct;
    }

    /**
     * Set lieuAct
     *
     * @param string $lieuAct
     * @return ActiviteComplementaire
     */
    public function setLieuAct($lieuAct)
    {
        $this->lieuAct = $lieuAct;

        return $this;
    }

    /**
     * Get lieuAct
     *
     * @return string 
     */
    public function getLieuAct()
    {
        return $this->lieuAct;
    }

    /**
     * Set matriculeColAct
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColAct
     * @return ActiviteComplementaire
     */
    public function setMatriculeColAct(\PPE\GSBBundle\Entity\Collaborateur $matriculeColAct = null)
    {
        $this->matriculeColAct = $matriculeColAct;

        return $this;
    }

    /**
     * Get matriculeColAct
     *
     * @return \PPE\GSBBundle\Entity\Collaborateur 
     */
    public function getMatriculeColAct()
    {
        return $this->matriculeColAct;
    }

    /**
     * Add matriculeColOrg
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColOrg
     * @return ActiviteComplementaire
     */
    public function addMatriculeColOrg(\PPE\GSBBundle\Entity\Collaborateur $matriculeColOrg)
    {
        $this->matriculeColOrg[] = $matriculeColOrg;

        return $this;
    }

    /**
     * Remove matriculeColOrg
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColOrg
     */
    public function removeMatriculeColOrg(\PPE\GSBBundle\Entity\Collaborateur $matriculeColOrg)
    {
        $this->matriculeColOrg->removeElement($matriculeColOrg);
    }

    /**
     * Get matriculeColOrg
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getMatriculeColOrg()
    {
        return $this->matriculeColOrg;
    }

    /**
     * Add matriculePraticien
     *
     * @param \PPE\GSBBundle\Entity\Praticien $matriculePraticien
     * @return ActiviteComplementaire
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

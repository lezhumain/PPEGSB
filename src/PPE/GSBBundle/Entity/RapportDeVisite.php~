<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RapportDeVisite
 *
 * @ORM\Table(name="RAPPORT_DE_VISITE", indexes={@ORM\Index(name="IDX_72BDCB1B6B866EF7", columns={"code_motif"}), @ORM\Index(name="IDX_72BDCB1BD3000B9", columns={"matricule_praticien"})})
 * @ORM\Entity
 */
class RapportDeVisite
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_rapport", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $numRapport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_rapport", type="datetime", nullable=false)
     */
    protected $dateRapport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_visite", type="datetime", nullable=false)
     */
    protected $dateVisite;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan_visite", type="text", length=16, nullable=false)
     */
    protected $bilanVisite;

    /**
     * @var \PPE\GSBBundle\Entity\Motif
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Motif")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_motif", referencedColumnName="code_motif")
     * })
     */
    protected $codeMotif;

    /**
     * @var \PPE\GSBBundle\Entity\Praticien
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Praticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_praticien", referencedColumnName="matricule_praticien")
     * })
     */
    protected $matriculePraticien;

   /**
    * @ORM\OneToMany(targetEntity="Offre", mappedBy="numRapportOffre")
    */
    protected $numRapportOffre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Medicament", inversedBy="numRapportPresente")
     * @ORM\JoinTable(name="presente",
     *   joinColumns={
     *     @ORM\JoinColumn(name="num_rapport_presente", referencedColumnName="num_rapport")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="depot_legal_pres", referencedColumnName="depot_legal")
     *   }
     * )
     */
    protected $depotLegalPres;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->depotLegalOffre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->depotLegalPres = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get numRapport
     *
     * @return integer 
     */
    public function getNumRapport()
    {
        return $this->numRapport;
    }

    /**
     * Set dateRapport
     *
     * @param \DateTime $dateRapport
     * @return RapportDeVisite
     */
    public function setDateRapport($dateRapport)
    {
        $this->dateRapport = $dateRapport;

        return $this;
    }

    /**
     * Get dateRapport
     *
     * @return \DateTime 
     */
    public function getDateRapport()
    {
        return $this->dateRapport;
    }

    /**
     * Set dateVisite
     *
     * @param \DateTime $dateVisite
     * @return RapportDeVisite
     */
    public function setDateVisite($dateVisite)
    {
        $this->dateVisite = $dateVisite;

        return $this;
    }

    /**
     * Get dateVisite
     *
     * @return \DateTime 
     */
    public function getDateVisite()
    {
        return $this->dateVisite;
    }

    /**
     * Set bilanVisite
     *
     * @param string $bilanVisite
     * @return RapportDeVisite
     */
    public function setBilanVisite($bilanVisite)
    {
        $this->bilanVisite = $bilanVisite;

        return $this;
    }

    /**
     * Get bilanVisite
     *
     * @return string 
     */
    public function getBilanVisite()
    {
        return $this->bilanVisite;
    }

    /**
     * Set codeMotif
     *
     * @param \PPE\GSBBundle\Entity\Motif $codeMotif
     * @return RapportDeVisite
     */
    public function setCodeMotif(\PPE\GSBBundle\Entity\Motif $codeMotif = null)
    {
        $this->codeMotif = $codeMotif;

        return $this;
    }

    /**
     * Get codeMotif
     *
     * @return \PPE\GSBBundle\Entity\Motif 
     */
    public function getCodeMotif()
    {
        return $this->codeMotif;
    }

    /**
     * Set matriculePraticien
     *
     * @param \PPE\GSBBundle\Entity\Praticien $matriculePraticien
     * @return RapportDeVisite
     */
    public function setMatriculePraticien(\PPE\GSBBundle\Entity\Praticien $matriculePraticien = null)
    {
        $this->matriculePraticien = $matriculePraticien;

        return $this;
    }

    /**
     * Get matriculePraticien
     *
     * @return \PPE\GSBBundle\Entity\Praticien 
     */
    public function getMatriculePraticien()
    {
        return $this->matriculePraticien;
    }

    /**
     * Add depotLegalOffre
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalOffre
     * @return RapportDeVisite
     */
    public function addDepotLegalOffre(\PPE\GSBBundle\Entity\Medicament $depotLegalOffre)
    {
        $this->depotLegalOffre[] = $depotLegalOffre;

        return $this;
    }

    /**
     * Remove depotLegalOffre
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalOffre
     */
    public function removeDepotLegalOffre(\PPE\GSBBundle\Entity\Medicament $depotLegalOffre)
    {
        $this->depotLegalOffre->removeElement($depotLegalOffre);
    }

    /**
     * Get depotLegalOffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepotLegalOffre()
    {
        return $this->depotLegalOffre;
    }

    /**
     * Add depotLegalPres
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalPres
     * @return RapportDeVisite
     */
    public function addDepotLegalPre(\PPE\GSBBundle\Entity\Medicament $depotLegalPres)
    {
        $this->depotLegalPres[] = $depotLegalPres;

        return $this;
    }

    /**
     * Remove depotLegalPres
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalPres
     */
    public function removeDepotLegalPre(\PPE\GSBBundle\Entity\Medicament $depotLegalPres)
    {
        $this->depotLegalPres->removeElement($depotLegalPres);
    }

    /**
     * Get depotLegalPres
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepotLegalPres()
    {
        return $this->depotLegalPres;
    }
}

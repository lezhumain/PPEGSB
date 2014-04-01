<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="MEDICAMENT", indexes={@ORM\Index(name="IDX_91036F051CD4B68F", columns={"code_famille"}), @ORM\Index(name="IDX_91036F05C51BEA8B", columns={"code_present"})})
 * @ORM\Entity
 */
class Medicament
{
    /**
     * @var string
     *
     * @ORM\Column(name="depot_legal", type="string", length=25)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $depotLegal;

    /**
     * @var string
     *
     * @ORM\Column(name="composition", type="text", length=-1, nullable=false)
     */
    private $composition;

    /**
     * @var string
     *
     * @ORM\Column(name="effet", type="text", length=-1, nullable=false)
     */
    private $effet;

    /**
     * @var string
     *
     * @ORM\Column(name="contreindic", type="text", length=-1, nullable=false)
     */
    private $contreindic;

    /**
     * @var float
     *
     * @ORM\Column(name="prixechantillon", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixechantillon;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=250, nullable=true)
     */
    private $nom;

    /**
     * @var \PPE\GSBBundle\Entity\Famille
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Famille")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_famille", referencedColumnName="code_famille")
     * })
     */
    private $codeFamille;

    /**
     * @var \PPE\GSBBundle\Entity\Presentation
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Presentation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="code_present", referencedColumnName="code_present")
     * })
     */
    private $codePresent;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Composant", inversedBy="depotLegalConstituer")
     * @ORM\JoinTable(name="constituer",
     *   joinColumns={
     *     @ORM\JoinColumn(name="depot_legal_constituer", referencedColumnName="depot_legal")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="code_comp", referencedColumnName="code_comp")
     *   }
     * )
     */
    private $codeComp;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\RapportDeVisite", mappedBy="depotLegalOffre")
     */
    private $numRapportOffre;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\Medicament", inversedBy="depotLegalPerturbant")
     * @ORM\JoinTable(name="perturbe",
     *   joinColumns={
     *     @ORM\JoinColumn(name="depot_legal_perturbant", referencedColumnName="depot_legal")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="depot_legal_perturbe", referencedColumnName="depot_legal")
     *   }
     * )
     */
    private $depotLegalPerturbe;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\RapportDeVisite", mappedBy="depotLegalPres")
     */
    private $numRapportPresente;

    /**
    * @ORM\OneToMany(targetEntity="Avoir", mappedBy="depotLegalAvoir")
    */
    private $depotLegalAvo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->codeComp = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numRapportOffre = new \Doctrine\Common\Collections\ArrayCollection();
        $this->depotLegalPerturbe = new \Doctrine\Common\Collections\ArrayCollection();
        $this->numRapportPresente = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get depotLegal
     *
     * @return string 
     */
    public function getDepotLegal()
    {
        return $this->depotLegal;
    }

    /**
     * Set composition
     *
     * @param string $composition
     * @return Medicament
     */
    public function setComposition($composition)
    {
        $this->composition = $composition;
    
        return $this;
    }

    /**
     * Get composition
     *
     * @return string 
     */
    public function getComposition()
    {
        return $this->composition;
    }

    /**
     * Set effet
     *
     * @param string $effet
     * @return Medicament
     */
    public function setEffet($effet)
    {
        $this->effet = $effet;
    
        return $this;
    }

    /**
     * Get effet
     *
     * @return string 
     */
    public function getEffet()
    {
        return $this->effet;
    }

    /**
     * Set contreindic
     *
     * @param string $contreindic
     * @return Medicament
     */
    public function setContreindic($contreindic)
    {
        $this->contreindic = $contreindic;
    
        return $this;
    }

    /**
     * Get contreindic
     *
     * @return string 
     */
    public function getContreindic()
    {
        return $this->contreindic;
    }

    /**
     * Set prixechantillon
     *
     * @param float $prixechantillon
     * @return Medicament
     */
    public function setPrixechantillon($prixechantillon)
    {
        $this->prixechantillon = $prixechantillon;
    
        return $this;
    }

    /**
     * Get prixechantillon
     *
     * @return float 
     */
    public function getPrixechantillon()
    {
        return $this->prixechantillon;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Medicament
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set codeFamille
     *
     * @param \PPE\GSBBundle\Entity\Famille $codeFamille
     * @return Medicament
     */
    public function setCodeFamille(\PPE\GSBBundle\Entity\Famille $codeFamille = null)
    {
        $this->codeFamille = $codeFamille;
    
        return $this;
    }

    /**
     * Get codeFamille
     *
     * @return \PPE\GSBBundle\Entity\Famille 
     */
    public function getCodeFamille()
    {
        return $this->codeFamille;
    }

    /**
     * Set codePresent
     *
     * @param \PPE\GSBBundle\Entity\Presentation $codePresent
     * @return Medicament
     */
    public function setCodePresent(\PPE\GSBBundle\Entity\Presentation $codePresent = null)
    {
        $this->codePresent = $codePresent;
    
        return $this;
    }

    /**
     * Get codePresent
     *
     * @return \PPE\GSBBundle\Entity\Presentation 
     */
    public function getCodePresent()
    {
        return $this->codePresent;
    }

    /**
     * Add codeComp
     *
     * @param \PPE\GSBBundle\Entity\Composant $codeComp
     * @return Medicament
     */
    public function addCodeComp(\PPE\GSBBundle\Entity\Composant $codeComp)
    {
        $this->codeComp[] = $codeComp;
    
        return $this;
    }

    /**
     * Remove codeComp
     *
     * @param \PPE\GSBBundle\Entity\Composant $codeComp
     */
    public function removeCodeComp(\PPE\GSBBundle\Entity\Composant $codeComp)
    {
        $this->codeComp->removeElement($codeComp);
    }

    /**
     * Get codeComp
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCodeComp()
    {
        return $this->codeComp;
    }

    /**
     * Add numRapportOffre
     *
     * @param \PPE\GSBBundle\Entity\RapportDeVisite $numRapportOffre
     * @return Medicament
     */
    public function addNumRapportOffre(\PPE\GSBBundle\Entity\RapportDeVisite $numRapportOffre)
    {
        $this->numRapportOffre[] = $numRapportOffre;
    
        return $this;
    }

    /**
     * Remove numRapportOffre
     *
     * @param \PPE\GSBBundle\Entity\RapportDeVisite $numRapportOffre
     */
    public function removeNumRapportOffre(\PPE\GSBBundle\Entity\RapportDeVisite $numRapportOffre)
    {
        $this->numRapportOffre->removeElement($numRapportOffre);
    }

    /**
     * Get numRapportOffre
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumRapportOffre()
    {
        return $this->numRapportOffre;
    }

    /**
     * Add depotLegalPerturbe
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalPerturbe
     * @return Medicament
     */
    public function addDepotLegalPerturbe(\PPE\GSBBundle\Entity\Medicament $depotLegalPerturbe)
    {
        $this->depotLegalPerturbe[] = $depotLegalPerturbe;
    
        return $this;
    }

    /**
     * Remove depotLegalPerturbe
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalPerturbe
     */
    public function removeDepotLegalPerturbe(\PPE\GSBBundle\Entity\Medicament $depotLegalPerturbe)
    {
        $this->depotLegalPerturbe->removeElement($depotLegalPerturbe);
    }

    /**
     * Get depotLegalPerturbe
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getDepotLegalPerturbe()
    {
        return $this->depotLegalPerturbe;
    }

    /**
     * Add numRapportPresente
     *
     * @param \PPE\GSBBundle\Entity\RapportDeVisite $numRapportPresente
     * @return Medicament
     */
    public function addNumRapportPresente(\PPE\GSBBundle\Entity\RapportDeVisite $numRapportPresente)
    {
        $this->numRapportPresente[] = $numRapportPresente;
    
        return $this;
    }

    /**
     * Remove numRapportPresente
     *
     * @param \PPE\GSBBundle\Entity\RapportDeVisite $numRapportPresente
     */
    public function removeNumRapportPresente(\PPE\GSBBundle\Entity\RapportDeVisite $numRapportPresente)
    {
        $this->numRapportPresente->removeElement($numRapportPresente);
    }

    /**
     * Get numRapportPresente
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNumRapportPresente()
    {
        return $this->numRapportPresente;
    }
}

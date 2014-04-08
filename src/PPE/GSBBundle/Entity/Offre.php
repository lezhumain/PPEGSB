<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offre
 *
 * @ORM\Table(name="offre", indexes={@ORM\Index(name="IDX_659B1A433999159F23", columns={"num_rapport_offre"}), @ORM\Index(name="IDX_659B1A43D167EDF123", columns={"depot_legal_offre"})})
 * @ORM\Entity
 */
class Offre
{
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Medicament", inversedBy="depotLegalOffre")
    * @ORM\JoinColumn(name="depot_legal_offre", referencedColumnName="depot_legal")
    */
    protected $depotLegalOffre;

    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="RapportDeVisite", inversedBy="numRapportOffre")
    * @ORM\JoinColumn(name="num_rapport_offre", referencedColumnName="num_rapport")
    */
    protected $numRapportOffre;

    /**
     * @var integer
     * @ORM\Column(name="qte_offre", type="integer", nullable=false)
     */
    protected $qteOffre;


    /**
     * Set qteOffre
     *
     * @param integer $qteOffre
     * @return Offre
     */
    public function setQteOffre($qteOffre)
    {
        $this->qteOffre = $qteOffre;
    
        return $this;
    }

    /**
     * Get qteOffre
     *
     * @return integer 
     */
    public function getQteOffre()
    {
        return $this->qteOffre;
    }

    /**
     * Set depotLegalOffre
     *
     * @param \PPE\GSBBundle\Entity\Medicament $depotLegalOffre
     * @return Offre
     */
    public function setDepotLegalOffre(\PPE\GSBBundle\Entity\Medicament $depotLegalOffre)
    {
        $this->depotLegalOffre = $depotLegalOffre;
    
        return $this;
    }

    /**
     * Get depotLegalOffre
     *
     * @return \PPE\GSBBundle\Entity\Medicament 
     */
    public function getDepotLegalOffre()
    {
        return $this->depotLegalOffre;
    }

    /**
     * Set numRapportOffre
     *
     * @param \PPE\GSBBundle\Entity\RapportDeVisite $numRapportOffre
     * @return Offre
     */
    public function setNumRapportOffre(\PPE\GSBBundle\Entity\RapportDeVisite $numRapportOffre)
    {
        $this->numRapportOffre = $numRapportOffre;
    
        return $this;
    }

    /**
     * Get numRapportOffre
     *
     * @return \PPE\GSBBundle\Entity\RapportDeVisite 
     */
    public function getNumRapportOffre()
    {
        return $this->numRapportOffre;
    }
}

<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avoir
 *
 * @ORM\Table(name="avoir", indexes={@ORM\Index(name="IDX_659B1A433999159F", columns={"depot_legal_avoir"}), @ORM\Index(name="IDX_659B1A43D167EDF1", columns={"matricule_col_avo"})})
 * @ORM\Entity
 */
class Avoir
{
    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Medicament", inversedBy="depotLegalAvo")
    * @ORM\JoinColumn(name="depot_legal_avoir", referencedColumnName="depot_legal")
    */
    protected $depotLegalAvoir;

    /**
    * @ORM\Id
    * @ORM\ManyToOne(targetEntity="Collaborateur", inversedBy="matriculeColAvo")
    * @ORM\JoinColumn(name="matricule_col_avo", referencedColumnName="matricule_col")
    */
    protected $matriculeColAvo;

    /**
     * @var integer
     *
     * @ORM\Column(name="qte_avoir", type="integer", nullable=false)
     */
    protected $qteAvoir;



    /**
     * Set depotLegalAvoir
     *
     * @param string $depotLegalAvoir
     * @return Avoir
     */
    public function setDepotLegalAvoir($depotLegalAvoir)
    {
        $this->depotLegalAvoir = $depotLegalAvoir;
    
        return $this;
    }

    /**
     * Get depotLegalAvoir
     *
     * @return string 
     */
    public function getDepotLegalAvoir()
    {
        return $this->depotLegalAvoir;
    }

    /**
     * Set matriculeColAvo
     *
     * @param integer $matriculeColAvo
     * @return Avoir
     */
    public function setMatriculeColAvo($matriculeColAvo)
    {
        $this->matriculeColAvo = $matriculeColAvo;
    
        return $this;
    }

    /**
     * Get matriculeColAvo
     *
     * @return integer 
     */
    public function getMatriculeColAvo()
    {
        return $this->matriculeColAvo;
    }

    /**
     * Set qteAvoir
     *
     * @param integer $qteAvoir
     * @return Avoir
     */
    public function setQteAvoir($qteAvoir)
    {
        $this->qteAvoir = $qteAvoir;
    
        return $this;
    }

    /**
     * Get qteAvoir
     *
     * @return integer 
     */
    public function getQteAvoir()
    {
        return $this->qteAvoir;
    }
}

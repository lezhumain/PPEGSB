<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypePraticien
 *
 * @ORM\Table(name="TYPE_PRATICIEN")
 * @ORM\Entity
 */
class TypePraticien
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_type", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeType;

    /**
     * @var string
     *
     * @ORM\Column(name="type_lieu", type="string", length=250, nullable=false)
     */
    private $typeLieu;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_type", type="string", length=250, nullable=false)
     */
    private $libelleType;



    /**
     * Get codeType
     *
     * @return integer 
     */
    public function getCodeType()
    {
        return $this->codeType;
    }

    /**
     * Set typeLieu
     *
     * @param string $typeLieu
     * @return TypePraticien
     */
    public function setTypeLieu($typeLieu)
    {
        $this->typeLieu = $typeLieu;
    
        return $this;
    }

    /**
     * Get typeLieu
     *
     * @return string 
     */
    public function getTypeLieu()
    {
        return $this->typeLieu;
    }

    /**
     * Set libelleType
     *
     * @param string $libelleType
     * @return TypePraticien
     */
    public function setLibelleType($libelleType)
    {
        $this->libelleType = $libelleType;
    
        return $this;
    }

    /**
     * Get libelleType
     *
     * @return string 
     */
    public function getLibelleType()
    {
        return $this->libelleType;
    }
}

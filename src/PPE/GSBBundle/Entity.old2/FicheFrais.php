<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheFrais
 *
 * @ORM\Table(name="FICHE_FRAIS", indexes={@ORM\Index(name="IDX_D56F317910C4B9C1", columns={"matricule_col_fic"})})
 * @ORM\Entity
 */
class FicheFrais
{
    /**
     * @var string
     *
     * @ORM\Column(name="ff_mois", type="string", length=25)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $ffMois;

    /**
     * @var string
     *
     * @ORM\Column(name="ff_NBHorsClassif", type="string", length=25, nullable=true)
     */
    private $ffNbhorsclassif;

    /**
     * @var string
     *
     * @ORM\Column(name="ff_MontantHorsClassif", type="string", length=25, nullable=true)
     */
    private $ffMontanthorsclassif;

    /**
     * @var \PPE\GSBBundle\Entity\Collaborateur
     *
     * @ORM\ManyToOne(targetEntity="PPE\GSBBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_col_fic", referencedColumnName="matricule_col")
     * })
     */
    private $matriculeColFic;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="PPE\GSBBundle\Entity\TypeFrais", inversedBy="ffMois")
     * @ORM\JoinTable(name="inclure",
     *   joinColumns={
     *     @ORM\JoinColumn(name="ff_mois", referencedColumnName="ff_mois")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="tf_Code", referencedColumnName="tf_Code")
     *   }
     * )
     */
    private $tfCode;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->tfCode = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get ffMois
     *
     * @return string 
     */
    public function getFfMois()
    {
        return $this->ffMois;
    }

    /**
     * Set ffNbhorsclassif
     *
     * @param string $ffNbhorsclassif
     * @return FicheFrais
     */
    public function setFfNbhorsclassif($ffNbhorsclassif)
    {
        $this->ffNbhorsclassif = $ffNbhorsclassif;

        return $this;
    }

    /**
     * Get ffNbhorsclassif
     *
     * @return string 
     */
    public function getFfNbhorsclassif()
    {
        return $this->ffNbhorsclassif;
    }

    /**
     * Set ffMontanthorsclassif
     *
     * @param string $ffMontanthorsclassif
     * @return FicheFrais
     */
    public function setFfMontanthorsclassif($ffMontanthorsclassif)
    {
        $this->ffMontanthorsclassif = $ffMontanthorsclassif;

        return $this;
    }

    /**
     * Get ffMontanthorsclassif
     *
     * @return string 
     */
    public function getFfMontanthorsclassif()
    {
        return $this->ffMontanthorsclassif;
    }

    /**
     * Set matriculeColFic
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColFic
     * @return FicheFrais
     */
    public function setMatriculeColFic(\PPE\GSBBundle\Entity\Collaborateur $matriculeColFic = null)
    {
        $this->matriculeColFic = $matriculeColFic;

        return $this;
    }

    /**
     * Get matriculeColFic
     *
     * @return \PPE\GSBBundle\Entity\Collaborateur 
     */
    public function getMatriculeColFic()
    {
        return $this->matriculeColFic;
    }

    /**
     * Add tfCode
     *
     * @param \PPE\GSBBundle\Entity\TypeFrais $tfCode
     * @return FicheFrais
     */
    public function addTfCode(\PPE\GSBBundle\Entity\TypeFrais $tfCode)
    {
        $this->tfCode[] = $tfCode;

        return $this;
    }

    /**
     * Remove tfCode
     *
     * @param \PPE\GSBBundle\Entity\TypeFrais $tfCode
     */
    public function removeTfCode(\PPE\GSBBundle\Entity\TypeFrais $tfCode)
    {
        $this->tfCode->removeElement($tfCode);
    }

    /**
     * Get tfCode
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTfCode()
    {
        return $this->tfCode;
    }
}

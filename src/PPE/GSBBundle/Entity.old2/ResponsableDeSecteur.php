<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ResponsableDeSecteur
 *
 * @ORM\Table(name="RESPONSABLE_DE_SECTEUR")
 * @ORM\Entity
 */
class ResponsableDeSecteur
{
    /**
     * @var \PPE\GSBBundle\Entity\Collaborateur
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_col_res", referencedColumnName="matricule_col", unique=true)
     * })
     */
    private $matriculeColRes;



    /**
     * Set matriculeColRes
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColRes
     * @return ResponsableDeSecteur
     */
    public function setMatriculeColRes(\PPE\GSBBundle\Entity\Collaborateur $matriculeColRes = null)
    {
        $this->matriculeColRes = $matriculeColRes;

        return $this;
    }

    /**
     * Get matriculeColRes
     *
     * @return \PPE\GSBBundle\Entity\Collaborateur 
     */
    public function getMatriculeColRes()
    {
        return $this->matriculeColRes;
    }
}

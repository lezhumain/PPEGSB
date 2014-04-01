<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DirecteurRegional
 *
 * @ORM\Table(name="DIRECTEUR_REGIONAL")
 * @ORM\Entity
 */
class DirecteurRegional
{
    /**
     * @var \PPE\GSBBundle\Entity\Collaborateur
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Collaborateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_col_dir", referencedColumnName="matricule_col", unique=true)
     * })
     */
    private $matriculeColDir;



    /**
     * Set matriculeColDir
     *
     * @param \PPE\GSBBundle\Entity\Collaborateur $matriculeColDir
     * @return DirecteurRegional
     */
    public function setMatriculeColDir(\PPE\GSBBundle\Entity\Collaborateur $matriculeColDir = null)
    {
        $this->matriculeColDir = $matriculeColDir;

        return $this;
    }

    /**
     * Get matriculeColDir
     *
     * @return \PPE\GSBBundle\Entity\Collaborateur 
     */
    public function getMatriculeColDir()
    {
        return $this->matriculeColDir;
    }
}

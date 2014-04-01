<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motif
 *
 * @ORM\Table(name="MOTIF")
 * @ORM\Entity
 */
class Motif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_motif", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $codeMotif;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_motif", type="string", length=250, nullable=false)
     */
    protected $libelleMotif;



    /**
     * Get codeMotif
     *
     * @return integer 
     */
    public function getCodeMotif()
    {
        return $this->codeMotif;
    }

    /**
     * Set libelleMotif
     *
     * @param string $libelleMotif
     * @return Motif
     */
    public function setLibelleMotif($libelleMotif)
    {
        $this->libelleMotif = $libelleMotif;

        return $this;
    }

    /**
     * Get libelleMotif
     *
     * @return string 
     */
    public function getLibelleMotif()
    {
        return $this->libelleMotif;
    }
}

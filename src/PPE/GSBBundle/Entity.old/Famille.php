<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Famille
 *
 * @ORM\Table(name="FAMILLE")
 * @ORM\Entity
 */
class Famille
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_famille", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeFamille;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_famille", type="string", length=250, nullable=false)
     */
    private $libelleFamille;



    /**
     * Get codeFamille
     *
     * @return integer 
     */
    public function getCodeFamille()
    {
        return $this->codeFamille;
    }

    /**
     * Set libelleFamille
     *
     * @param string $libelleFamille
     * @return Famille
     */
    public function setLibelleFamille($libelleFamille)
    {
        $this->libelleFamille = $libelleFamille;
    
        return $this;
    }

    /**
     * Get libelleFamille
     *
     * @return string 
     */
    public function getLibelleFamille()
    {
        return $this->libelleFamille;
    }
}

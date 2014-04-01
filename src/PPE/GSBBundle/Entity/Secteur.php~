<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Secteur
 *
 * @ORM\Table(name="SECTEUR")
 * @ORM\Entity
 */
class Secteur
{
    /**
     * @var string
     *
     * @ORM\Column(name="code_secteur", type="string", length=1)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $codeSecteur;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_secteur", type="string", length=50, nullable=false)
     */
    protected $libelleSecteur;



    /**
     * Get codeSecteur
     *
     * @return string 
     */
    public function getCodeSecteur()
    {
        return $this->codeSecteur;
    }

    /**
     * Set libelleSecteur
     *
     * @param string $libelleSecteur
     * @return Secteur
     */
    public function setLibelleSecteur($libelleSecteur)
    {
        $this->libelleSecteur = $libelleSecteur;

        return $this;
    }

    /**
     * Get libelleSecteur
     *
     * @return string 
     */
    public function getLibelleSecteur()
    {
        return $this->libelleSecteur;
    }
}

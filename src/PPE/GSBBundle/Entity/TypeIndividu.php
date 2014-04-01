<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TypeIndividu
 *
 * @ORM\Table(name="TYPE_INDIVIDU")
 * @ORM\Entity
 */
class TypeIndividu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code_individu", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $codeIndividu;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_individu", type="string", length=250, nullable=false)
     */
    protected $libelleIndividu;



    /**
     * Get codeIndividu
     *
     * @return integer 
     */
    public function getCodeIndividu()
    {
        return $this->codeIndividu;
    }

    /**
     * Set libelleIndividu
     *
     * @param string $libelleIndividu
     * @return TypeIndividu
     */
    public function setLibelleIndividu($libelleIndividu)
    {
        $this->libelleIndividu = $libelleIndividu;

        return $this;
    }

    /**
     * Get libelleIndividu
     *
     * @return string 
     */
    public function getLibelleIndividu()
    {
        return $this->libelleIndividu;
    }
}

<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remplace
 *
 * @ORM\Table(name="REMPLACE", indexes={@ORM\Index(name="IDX_92BF0EDE8A7617B8", columns={"matricule_praticien_remplace"}), @ORM\Index(name="IDX_92BF0EDE4509622E", columns={"matricule_praticien_remplacant"}), @ORM\Index(name="IDX_92BF0EDE94E879DC", columns={"JJMMAAAA"})})
 * @ORM\Entity
 */
class Remplace
{
    /**
     * @var \PPE\GSBBundle\Entity\Praticien
     *
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Praticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_praticien_remplace", referencedColumnName="matricule_praticien", unique=true)
     * })
     */
    private $matriculePraticienRemplace;

    /**
     * @var \PPE\GSBBundle\Entity\Praticien
     *
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Praticien")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="matricule_praticien_remplacant", referencedColumnName="matricule_praticien", unique=true)
     * })
     */
    private $matriculePraticienRemplacant;

    /**
     * @var \PPE\GSBBundle\Entity\Date
     *
     * @ORM\OneToOne(targetEntity="PPE\GSBBundle\Entity\Date")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="JJMMAAAA", referencedColumnName="JJMMAAAA", unique=true)
     * })
     */
    private $jjmmaaaa;



    /**
     * Set matriculePraticienRemplace
     *
     * @param \PPE\GSBBundle\Entity\Praticien $matriculePraticienRemplace
     * @return Remplace
     */
    public function setMatriculePraticienRemplace(\PPE\GSBBundle\Entity\Praticien $matriculePraticienRemplace = null)
    {
        $this->matriculePraticienRemplace = $matriculePraticienRemplace;

        return $this;
    }

    /**
     * Get matriculePraticienRemplace
     *
     * @return \PPE\GSBBundle\Entity\Praticien 
     */
    public function getMatriculePraticienRemplace()
    {
        return $this->matriculePraticienRemplace;
    }

    /**
     * Set matriculePraticienRemplacant
     *
     * @param \PPE\GSBBundle\Entity\Praticien $matriculePraticienRemplacant
     * @return Remplace
     */
    public function setMatriculePraticienRemplacant(\PPE\GSBBundle\Entity\Praticien $matriculePraticienRemplacant = null)
    {
        $this->matriculePraticienRemplacant = $matriculePraticienRemplacant;

        return $this;
    }

    /**
     * Get matriculePraticienRemplacant
     *
     * @return \PPE\GSBBundle\Entity\Praticien 
     */
    public function getMatriculePraticienRemplacant()
    {
        return $this->matriculePraticienRemplacant;
    }

    /**
     * Set jjmmaaaa
     *
     * @param \PPE\GSBBundle\Entity\Date $jjmmaaaa
     * @return Remplace
     */
    public function setJjmmaaaa(\PPE\GSBBundle\Entity\Date $jjmmaaaa = null)
    {
        $this->jjmmaaaa = $jjmmaaaa;

        return $this;
    }

    /**
     * Get jjmmaaaa
     *
     * @return \PPE\GSBBundle\Entity\Date 
     */
    public function getJjmmaaaa()
    {
        return $this->jjmmaaaa;
    }
}

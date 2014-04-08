<?php

namespace PPE\GSBBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Calendrier
 *
 * @ORM\Table(name="CALENDRIER")
 * @ORM\Entity(repositoryClass="PPE\GSBBundle\Repository\CalendrierRepository")
 */
class Calendrier
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="JJMMAAAA_DEB", type="datetime")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $jjmmaaaaDeb;



    /**
     * Get jjmmaaaaDeb
     *
     * @return \DateTime 
     */
    public function getJjmmaaaaDeb()
    {
        return $this->jjmmaaaaDeb;
    }
}

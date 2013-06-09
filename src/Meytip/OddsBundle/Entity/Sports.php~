<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sports
 *
 * @ORM\Table(name="sports")
 * @ORM\Entity
 */
class Sports
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sportid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=30, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_verified", type="datetime", nullable=true)
     */
    private $lastVerified;



    /**
     * Get sportid
     *
     * @return integer 
     */
    public function getSportid()
    {
        return $this->sportid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Sports
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set lastVerified
     *
     * @param \DateTime $lastVerified
     * @return Sports
     */
    public function setLastVerified($lastVerified)
    {
        $this->lastVerified = $lastVerified;
    
        return $this;
    }

    /**
     * Get lastVerified
     *
     * @return \DateTime 
     */
    public function getLastVerified()
    {
        return $this->lastVerified;
    }
}
<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer
     *
     * @ORM\Column(name="code", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=8, nullable=true)
     */
    private $group;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=50, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=15, nullable=true)
     */
    private $sport;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="verified", type="datetime", nullable=true)
     */
    private $verified;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=false)
     */
    private $sportid;



    /**
     * Get code
     *
     * @return integer 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set group
     *
     * @param string $group
     * @return Groups
     */
    public function setGroup($group)
    {
        $this->group = $group;
    
        return $this;
    }

    /**
     * Get group
     *
     * @return string 
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Groups
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set sport
     *
     * @param string $sport
     * @return Groups
     */
    public function setSport($sport)
    {
        $this->sport = $sport;
    
        return $this;
    }

    /**
     * Get sport
     *
     * @return string 
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set verified
     *
     * @param \DateTime $verified
     * @return Groups
     */
    public function setVerified($verified)
    {
        $this->verified = $verified;
    
        return $this;
    }

    /**
     * Get verified
     *
     * @return \DateTime 
     */
    public function getVerified()
    {
        return $this->verified;
    }

    /**
     * Set sportid
     *
     * @param integer $sportid
     * @return Groups
     */
    public function setSportid($sportid)
    {
        $this->sportid = $sportid;
    
        return $this;
    }

    /**
     * Get sportid
     *
     * @return integer 
     */
    public function getSportid()
    {
        return $this->sportid;
    }
}
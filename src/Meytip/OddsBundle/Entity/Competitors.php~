<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Competitors
 *
 * @ORM\Table(name="competitors")
 * @ORM\Entity
 */
class Competitors
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="teamname", type="string", length=50, nullable=false)
     */
    private $teamname;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=50, nullable=true)
     */
    private $alias;

    /**
     * @var string
     *
     * @ORM\Column(name="shortcode", type="string", length=4, nullable=true)
     */
    private $shortcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=true)
     */
    private $sportid;

    /**
     * @var integer
     *
     * @ORM\Column(name="countryid", type="integer", nullable=true)
     */
    private $countryid;

    /**
     * @var string
     *
     * @ORM\Column(name="group", type="string", length=15, nullable=true)
     */
    private $group;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_verified", type="datetime", nullable=true)
     */
    private $lastVerified;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set teamname
     *
     * @param string $teamname
     * @return Competitors
     */
    public function setTeamname($teamname)
    {
        $this->teamname = $teamname;
    
        return $this;
    }

    /**
     * Get teamname
     *
     * @return string 
     */
    public function getTeamname()
    {
        return $this->teamname;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Competitors
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * Set shortcode
     *
     * @param string $shortcode
     * @return Competitors
     */
    public function setShortcode($shortcode)
    {
        $this->shortcode = $shortcode;
    
        return $this;
    }

    /**
     * Get shortcode
     *
     * @return string 
     */
    public function getShortcode()
    {
        return $this->shortcode;
    }

    /**
     * Set sportid
     *
     * @param integer $sportid
     * @return Competitors
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

    /**
     * Set countryid
     *
     * @param integer $countryid
     * @return Competitors
     */
    public function setCountryid($countryid)
    {
        $this->countryid = $countryid;
    
        return $this;
    }

    /**
     * Get countryid
     *
     * @return integer 
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set group
     *
     * @param string $group
     * @return Competitors
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
     * Set lastVerified
     *
     * @param \DateTime $lastVerified
     * @return Competitors
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
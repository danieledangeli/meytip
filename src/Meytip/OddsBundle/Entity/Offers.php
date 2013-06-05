<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offers
 *
 * @ORM\Table(name="offers")
 * @ORM\Entity
 */
class Offers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offer_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offerId;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     */
    private $bid;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=true)
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=true)
     */
    private $lastUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=false)
     */
    private $sportid;

    /**
     * @var integer
     *
     * @ORM\Column(name="matchid", type="integer", nullable=false)
     */
    private $matchid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change", type="datetime", nullable=false)
     */
    private $lastChange;

    /**
     * @var integer
     *
     * @ORM\Column(name="ot", type="integer", nullable=false)
     */
    private $ot;

    /**
     * @var string
     *
     * @ORM\Column(name="bmoid", type="string", length=30, nullable=true)
     */
    private $bmoid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starting_time", type="datetime", nullable=true)
     */
    private $startingTime;



    /**
     * Get offerId
     *
     * @return integer 
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     * @return Offers
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    
        return $this;
    }

    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return Offers
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean 
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return Offers
     */
    public function setLastUpdated($lastUpdated)
    {
        $this->lastUpdated = $lastUpdated;
    
        return $this;
    }

    /**
     * Get lastUpdated
     *
     * @return \DateTime 
     */
    public function getLastUpdated()
    {
        return $this->lastUpdated;
    }

    /**
     * Set sportid
     *
     * @param integer $sportid
     * @return Offers
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
     * Set matchid
     *
     * @param integer $matchid
     * @return Offers
     */
    public function setMatchid($matchid)
    {
        $this->matchid = $matchid;
    
        return $this;
    }

    /**
     * Get matchid
     *
     * @return integer 
     */
    public function getMatchid()
    {
        return $this->matchid;
    }

    /**
     * Set lastChange
     *
     * @param \DateTime $lastChange
     * @return Offers
     */
    public function setLastChange($lastChange)
    {
        $this->lastChange = $lastChange;
    
        return $this;
    }

    /**
     * Get lastChange
     *
     * @return \DateTime 
     */
    public function getLastChange()
    {
        return $this->lastChange;
    }

    /**
     * Set ot
     *
     * @param integer $ot
     * @return Offers
     */
    public function setOt($ot)
    {
        $this->ot = $ot;
    
        return $this;
    }

    /**
     * Get ot
     *
     * @return integer 
     */
    public function getOt()
    {
        return $this->ot;
    }

    /**
     * Set bmoid
     *
     * @param string $bmoid
     * @return Offers
     */
    public function setBmoid($bmoid)
    {
        $this->bmoid = $bmoid;
    
        return $this;
    }

    /**
     * Get bmoid
     *
     * @return string 
     */
    public function getBmoid()
    {
        return $this->bmoid;
    }

    /**
     * Set startingTime
     *
     * @param \DateTime $startingTime
     * @return Offers
     */
    public function setStartingTime($startingTime)
    {
        $this->startingTime = $startingTime;
    
        return $this;
    }

    /**
     * Get startingTime
     *
     * @return \DateTime 
     */
    public function getStartingTime()
    {
        return $this->startingTime;
    }
}
<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutrightOdds
 *
 * @ORM\Table(name="outright_odds")
 * @ORM\Entity
 */
class OutrightOdds
{
    /**
     * @var string
     *
     * @ORM\Column(name="uniqueid", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueid;

    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid;

    /**
     * @var string
     *
     * @ORM\Column(name="compname", type="string", length=30, nullable=true)
     */
    private $compname;

    /**
     * @var integer
     *
     * @ORM\Column(name="compid", type="integer", nullable=true)
     */
    private $compid;

    /**
     * @var float
     *
     * @ORM\Column(name="o1", type="float", nullable=true)
     */
    private $o1;

    /**
     * @var integer
     *
     * @ORM\Column(name="marketid", type="integer", nullable=true)
     */
    private $marketid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=true)
     */
    private $lastUpdated;



    /**
     * Get uniqueid
     *
     * @return string 
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set bid
     *
     * @param integer $bid
     * @return OutrightOdds
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
     * Set compname
     *
     * @param string $compname
     * @return OutrightOdds
     */
    public function setCompname($compname)
    {
        $this->compname = $compname;
    
        return $this;
    }

    /**
     * Get compname
     *
     * @return string 
     */
    public function getCompname()
    {
        return $this->compname;
    }

    /**
     * Set compid
     *
     * @param integer $compid
     * @return OutrightOdds
     */
    public function setCompid($compid)
    {
        $this->compid = $compid;
    
        return $this;
    }

    /**
     * Get compid
     *
     * @return integer 
     */
    public function getCompid()
    {
        return $this->compid;
    }

    /**
     * Set o1
     *
     * @param float $o1
     * @return OutrightOdds
     */
    public function setO1($o1)
    {
        $this->o1 = $o1;
    
        return $this;
    }

    /**
     * Get o1
     *
     * @return float 
     */
    public function getO1()
    {
        return $this->o1;
    }

    /**
     * Set marketid
     *
     * @param integer $marketid
     * @return OutrightOdds
     */
    public function setMarketid($marketid)
    {
        $this->marketid = $marketid;
    
        return $this;
    }

    /**
     * Get marketid
     *
     * @return integer 
     */
    public function getMarketid()
    {
        return $this->marketid;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return OutrightOdds
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
}
<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StdoddsMoves
 *
 * @ORM\Table(name="stdodds_moves")
 * @ORM\Entity
 */
class StdoddsMoves
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
     * @ORM\Column(name="bid", type="integer", nullable=true)
     */
    private $bid;

    /**
     * @var string
     *
     * @ORM\Column(name="hcapgroup", type="string", length=20, nullable=true)
     */
    private $hcapgroup;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=false)
     */
    private $lastUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=true)
     */
    private $sportid;

    /**
     * @var float
     *
     * @ORM\Column(name="o1", type="float", nullable=true)
     */
    private $o1;

    /**
     * @var float
     *
     * @ORM\Column(name="o2", type="float", nullable=true)
     */
    private $o2;

    /**
     * @var float
     *
     * @ORM\Column(name="o3", type="float", nullable=true)
     */
    private $o3;



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
     * @return StdoddsMoves
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
     * Set hcapgroup
     *
     * @param string $hcapgroup
     * @return StdoddsMoves
     */
    public function setHcapgroup($hcapgroup)
    {
        $this->hcapgroup = $hcapgroup;
    
        return $this;
    }

    /**
     * Get hcapgroup
     *
     * @return string 
     */
    public function getHcapgroup()
    {
        return $this->hcapgroup;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return StdoddsMoves
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
     * @return StdoddsMoves
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
     * Set o1
     *
     * @param float $o1
     * @return StdoddsMoves
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
     * Set o2
     *
     * @param float $o2
     * @return StdoddsMoves
     */
    public function setO2($o2)
    {
        $this->o2 = $o2;
    
        return $this;
    }

    /**
     * Get o2
     *
     * @return float 
     */
    public function getO2()
    {
        return $this->o2;
    }

    /**
     * Set o3
     *
     * @param float $o3
     * @return StdoddsMoves
     */
    public function setO3($o3)
    {
        $this->o3 = $o3;
    
        return $this;
    }

    /**
     * Get o3
     *
     * @return float 
     */
    public function getO3()
    {
        return $this->o3;
    }
}
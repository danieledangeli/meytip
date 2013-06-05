<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Fgsodds
 *
 * @ORM\Table(name="fgsodds")
 * @ORM\Entity
 */
class Fgsodds
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $bid;

    /**
     * @var integer
     *
     * @ORM\Column(name="matchid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $matchid;

    /**
     * @var string
     *
     * @ORM\Column(name="outcome", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $outcome;

    /**
     * @var float
     *
     * @ORM\Column(name="o1", type="float", nullable=true)
     */
    private $o1;

    /**
     * @var string
     *
     * @ORM\Column(name="o1dir", type="string", length=1, nullable=true)
     */
    private $o1dir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change", type="datetime", nullable=false)
     */
    private $lastChange;

    /**
     * @var string
     *
     * @ORM\Column(name="bmoid", type="string", length=50, nullable=true)
     */
    private $bmoid;



    /**
     * Set bid
     *
     * @param integer $bid
     * @return Fgsodds
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
     * Set matchid
     *
     * @param integer $matchid
     * @return Fgsodds
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
     * Set outcome
     *
     * @param string $outcome
     * @return Fgsodds
     */
    public function setOutcome($outcome)
    {
        $this->outcome = $outcome;
    
        return $this;
    }

    /**
     * Get outcome
     *
     * @return string 
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * Set o1
     *
     * @param float $o1
     * @return Fgsodds
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
     * Set o1dir
     *
     * @param string $o1dir
     * @return Fgsodds
     */
    public function setO1dir($o1dir)
    {
        $this->o1dir = $o1dir;
    
        return $this;
    }

    /**
     * Get o1dir
     *
     * @return string 
     */
    public function getO1dir()
    {
        return $this->o1dir;
    }

    /**
     * Set lastChange
     *
     * @param \DateTime $lastChange
     * @return Fgsodds
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
     * Set bmoid
     *
     * @param string $bmoid
     * @return Fgsodds
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
}
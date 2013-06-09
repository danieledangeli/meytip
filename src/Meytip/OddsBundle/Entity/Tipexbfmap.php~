<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipexbfmap
 *
 * @ORM\Table(name="tipexbfmap")
 * @ORM\Entity
 */
class Tipexbfmap
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bfmarketid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bfmarketid;

    /**
     * @var integer
     *
     * @ORM\Column(name="matchid", type="integer", nullable=true)
     */
    private $matchid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ot", type="integer", nullable=true)
     */
    private $ot;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=true)
     */
    private $lastUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="spid", type="integer", nullable=true)
     */
    private $spid;

    /**
     * @var string
     *
     * @ORM\Column(name="line", type="string", length=30, nullable=true)
     */
    private $line;



    /**
     * Get bfmarketid
     *
     * @return integer 
     */
    public function getBfmarketid()
    {
        return $this->bfmarketid;
    }

    /**
     * Set matchid
     *
     * @param integer $matchid
     * @return Tipexbfmap
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
     * Set ot
     *
     * @param integer $ot
     * @return Tipexbfmap
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
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return Tipexbfmap
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
     * Set spid
     *
     * @param integer $spid
     * @return Tipexbfmap
     */
    public function setSpid($spid)
    {
        $this->spid = $spid;
    
        return $this;
    }

    /**
     * Get spid
     *
     * @return integer 
     */
    public function getSpid()
    {
        return $this->spid;
    }

    /**
     * Set line
     *
     * @param string $line
     * @return Tipexbfmap
     */
    public function setLine($line)
    {
        $this->line = $line;
    
        return $this;
    }

    /**
     * Get line
     *
     * @return string 
     */
    public function getLine()
    {
        return $this->line;
    }
}
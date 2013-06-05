<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Corrections
 *
 * @ORM\Table(name="corrections")
 * @ORM\Entity
 */
class Corrections
{
    /**
     * @var integer
     *
     * @ORM\Column(name="index", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $index;

    /**
     * @var integer
     *
     * @ORM\Column(name="matchid", type="integer", nullable=false)
     */
    private $matchid;

    /**
     * @var integer
     *
     * @ORM\Column(name="xsid", type="integer", nullable=false)
     */
    private $xsid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=false)
     */
    private $lastUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_hscore", type="integer", nullable=true)
     */
    private $lastHscore;

    /**
     * @var integer
     *
     * @ORM\Column(name="last_ascore", type="integer", nullable=true)
     */
    private $lastAscore;

    /**
     * @var integer
     *
     * @ORM\Column(name="hscore", type="integer", nullable=true)
     */
    private $hscore;

    /**
     * @var integer
     *
     * @ORM\Column(name="ascore", type="integer", nullable=true)
     */
    private $ascore;

    /**
     * @var string
     *
     * @ORM\Column(name="matchstatus", type="string", length=30, nullable=true)
     */
    private $matchstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;



    /**
     * Get index
     *
     * @return integer 
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * Set matchid
     *
     * @param integer $matchid
     * @return Corrections
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
     * Set xsid
     *
     * @param integer $xsid
     * @return Corrections
     */
    public function setXsid($xsid)
    {
        $this->xsid = $xsid;
    
        return $this;
    }

    /**
     * Get xsid
     *
     * @return integer 
     */
    public function getXsid()
    {
        return $this->xsid;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return Corrections
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
     * Set lastHscore
     *
     * @param integer $lastHscore
     * @return Corrections
     */
    public function setLastHscore($lastHscore)
    {
        $this->lastHscore = $lastHscore;
    
        return $this;
    }

    /**
     * Get lastHscore
     *
     * @return integer 
     */
    public function getLastHscore()
    {
        return $this->lastHscore;
    }

    /**
     * Set lastAscore
     *
     * @param integer $lastAscore
     * @return Corrections
     */
    public function setLastAscore($lastAscore)
    {
        $this->lastAscore = $lastAscore;
    
        return $this;
    }

    /**
     * Get lastAscore
     *
     * @return integer 
     */
    public function getLastAscore()
    {
        return $this->lastAscore;
    }

    /**
     * Set hscore
     *
     * @param integer $hscore
     * @return Corrections
     */
    public function setHscore($hscore)
    {
        $this->hscore = $hscore;
    
        return $this;
    }

    /**
     * Get hscore
     *
     * @return integer 
     */
    public function getHscore()
    {
        return $this->hscore;
    }

    /**
     * Set ascore
     *
     * @param integer $ascore
     * @return Corrections
     */
    public function setAscore($ascore)
    {
        $this->ascore = $ascore;
    
        return $this;
    }

    /**
     * Get ascore
     *
     * @return integer 
     */
    public function getAscore()
    {
        return $this->ascore;
    }

    /**
     * Set matchstatus
     *
     * @param string $matchstatus
     * @return Corrections
     */
    public function setMatchstatus($matchstatus)
    {
        $this->matchstatus = $matchstatus;
    
        return $this;
    }

    /**
     * Get matchstatus
     *
     * @return string 
     */
    public function getMatchstatus()
    {
        return $this->matchstatus;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Corrections
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }
}
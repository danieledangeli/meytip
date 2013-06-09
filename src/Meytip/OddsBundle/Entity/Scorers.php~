<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scorers
 *
 * @ORM\Table(name="scorers")
 * @ORM\Entity
 */
class Scorers
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
     * @ORM\Column(name="matchid", type="integer", nullable=false)
     */
    private $matchid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="period", type="integer", nullable=true)
     */
    private $period;

    /**
     * @var integer
     *
     * @ORM\Column(name="teamid", type="integer", nullable=false)
     */
    private $teamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="scoretime", type="integer", nullable=false)
     */
    private $scoretime;

    /**
     * @var string
     *
     * @ORM\Column(name="scoretype", type="string", length=20, nullable=true)
     */
    private $scoretype;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timelogged", type="datetime", nullable=true)
     */
    private $timelogged;



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
     * Set matchid
     *
     * @param integer $matchid
     * @return Scorers
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
     * Set name
     *
     * @param string $name
     * @return Scorers
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
     * Set period
     *
     * @param integer $period
     * @return Scorers
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    
        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set teamid
     *
     * @param integer $teamid
     * @return Scorers
     */
    public function setTeamid($teamid)
    {
        $this->teamid = $teamid;
    
        return $this;
    }

    /**
     * Get teamid
     *
     * @return integer 
     */
    public function getTeamid()
    {
        return $this->teamid;
    }

    /**
     * Set scoretime
     *
     * @param integer $scoretime
     * @return Scorers
     */
    public function setScoretime($scoretime)
    {
        $this->scoretime = $scoretime;
    
        return $this;
    }

    /**
     * Get scoretime
     *
     * @return integer 
     */
    public function getScoretime()
    {
        return $this->scoretime;
    }

    /**
     * Set scoretype
     *
     * @param string $scoretype
     * @return Scorers
     */
    public function setScoretype($scoretype)
    {
        $this->scoretype = $scoretype;
    
        return $this;
    }

    /**
     * Get scoretype
     *
     * @return string 
     */
    public function getScoretype()
    {
        return $this->scoretype;
    }

    /**
     * Set timelogged
     *
     * @param \DateTime $timelogged
     * @return Scorers
     */
    public function setTimelogged($timelogged)
    {
        $this->timelogged = $timelogged;
    
        return $this;
    }

    /**
     * Get timelogged
     *
     * @return \DateTime 
     */
    public function getTimelogged()
    {
        return $this->timelogged;
    }
}
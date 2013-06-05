<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Matches
 *
 * @ORM\Table(name="matches")
 * @ORM\Entity
 */
class Matches
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matchid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $matchid;

    /**
     * @var string
     *
     * @ORM\Column(name="matchname", type="string", length=50, nullable=false)
     */
    private $matchname;

    /**
     * @var string
     *
     * @ORM\Column(name="eventname", type="string", length=50, nullable=false)
     */
    private $eventname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="starttime", type="datetime", nullable=false)
     */
    private $starttime;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timelogged", type="datetime", nullable=false)
     */
    private $timelogged;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=20, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="league", type="string", length=30, nullable=false)
     */
    private $league;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="integer", nullable=false)
     */
    private $groupid;

    /**
     * @var integer
     *
     * @ORM\Column(name="leagueid", type="integer", nullable=false)
     */
    private $leagueid;

    /**
     * @var integer
     *
     * @ORM\Column(name="xsid", type="integer", nullable=true)
     */
    private $xsid;

    /**
     * @var string
     *
     * @ORM\Column(name="matchstatus", type="string", length=10, nullable=true)
     */
    private $matchstatus;

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
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=false)
     */
    private $sportid;

    /**
     * @var integer
     *
     * @ORM\Column(name="hteamid", type="integer", nullable=false)
     */
    private $hteamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ateamid", type="integer", nullable=false)
     */
    private $ateamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccid", type="integer", nullable=false)
     */
    private $ccid;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsmid", type="integer", nullable=true)
     */
    private $gsmid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="scores_updated", type="datetime", nullable=false)
     */
    private $scoresUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="match_time", type="string", length=8, nullable=true)
     */
    private $matchTime;

    /**
     * @var string
     *
     * @ORM\Column(name="gsmlive", type="string", length=1, nullable=true)
     */
    private $gsmlive;

    /**
     * @var string
     *
     * @ORM\Column(name="service_level", type="string", length=5, nullable=true)
     */
    private $serviceLevel;



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
     * Set matchname
     *
     * @param string $matchname
     * @return Matches
     */
    public function setMatchname($matchname)
    {
        $this->matchname = $matchname;
    
        return $this;
    }

    /**
     * Get matchname
     *
     * @return string 
     */
    public function getMatchname()
    {
        return $this->matchname;
    }

    /**
     * Set eventname
     *
     * @param string $eventname
     * @return Matches
     */
    public function setEventname($eventname)
    {
        $this->eventname = $eventname;
    
        return $this;
    }

    /**
     * Get eventname
     *
     * @return string 
     */
    public function getEventname()
    {
        return $this->eventname;
    }

    /**
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return Matches
     */
    public function setStarttime($starttime)
    {
        $this->starttime = $starttime;
    
        return $this;
    }

    /**
     * Get starttime
     *
     * @return \DateTime 
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Set timelogged
     *
     * @param \DateTime $timelogged
     * @return Matches
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

    /**
     * Set country
     *
     * @param string $country
     * @return Matches
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set league
     *
     * @param string $league
     * @return Matches
     */
    public function setLeague($league)
    {
        $this->league = $league;
    
        return $this;
    }

    /**
     * Get league
     *
     * @return string 
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return Matches
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;
    
        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set leagueid
     *
     * @param integer $leagueid
     * @return Matches
     */
    public function setLeagueid($leagueid)
    {
        $this->leagueid = $leagueid;
    
        return $this;
    }

    /**
     * Get leagueid
     *
     * @return integer 
     */
    public function getLeagueid()
    {
        return $this->leagueid;
    }

    /**
     * Set xsid
     *
     * @param integer $xsid
     * @return Matches
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
     * Set matchstatus
     *
     * @param string $matchstatus
     * @return Matches
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
     * Set hscore
     *
     * @param integer $hscore
     * @return Matches
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
     * @return Matches
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
     * Set sportid
     *
     * @param integer $sportid
     * @return Matches
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
     * Set hteamid
     *
     * @param integer $hteamid
     * @return Matches
     */
    public function setHteamid($hteamid)
    {
        $this->hteamid = $hteamid;
    
        return $this;
    }

    /**
     * Get hteamid
     *
     * @return integer 
     */
    public function getHteamid()
    {
        return $this->hteamid;
    }

    /**
     * Set ateamid
     *
     * @param integer $ateamid
     * @return Matches
     */
    public function setAteamid($ateamid)
    {
        $this->ateamid = $ateamid;
    
        return $this;
    }

    /**
     * Get ateamid
     *
     * @return integer 
     */
    public function getAteamid()
    {
        return $this->ateamid;
    }

    /**
     * Set ccid
     *
     * @param integer $ccid
     * @return Matches
     */
    public function setCcid($ccid)
    {
        $this->ccid = $ccid;
    
        return $this;
    }

    /**
     * Get ccid
     *
     * @return integer 
     */
    public function getCcid()
    {
        return $this->ccid;
    }

    /**
     * Set gsmid
     *
     * @param integer $gsmid
     * @return Matches
     */
    public function setGsmid($gsmid)
    {
        $this->gsmid = $gsmid;
    
        return $this;
    }

    /**
     * Get gsmid
     *
     * @return integer 
     */
    public function getGsmid()
    {
        return $this->gsmid;
    }

    /**
     * Set scoresUpdated
     *
     * @param \DateTime $scoresUpdated
     * @return Matches
     */
    public function setScoresUpdated($scoresUpdated)
    {
        $this->scoresUpdated = $scoresUpdated;
    
        return $this;
    }

    /**
     * Get scoresUpdated
     *
     * @return \DateTime 
     */
    public function getScoresUpdated()
    {
        return $this->scoresUpdated;
    }

    /**
     * Set matchTime
     *
     * @param string $matchTime
     * @return Matches
     */
    public function setMatchTime($matchTime)
    {
        $this->matchTime = $matchTime;
    
        return $this;
    }

    /**
     * Get matchTime
     *
     * @return string 
     */
    public function getMatchTime()
    {
        return $this->matchTime;
    }

    /**
     * Set gsmlive
     *
     * @param string $gsmlive
     * @return Matches
     */
    public function setGsmlive($gsmlive)
    {
        $this->gsmlive = $gsmlive;
    
        return $this;
    }

    /**
     * Get gsmlive
     *
     * @return string 
     */
    public function getGsmlive()
    {
        return $this->gsmlive;
    }

    /**
     * Set serviceLevel
     *
     * @param string $serviceLevel
     * @return Matches
     */
    public function setServiceLevel($serviceLevel)
    {
        $this->serviceLevel = $serviceLevel;
    
        return $this;
    }

    /**
     * Get serviceLevel
     *
     * @return string 
     */
    public function getServiceLevel()
    {
        return $this->serviceLevel;
    }
}
<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmEvents
 *
 * @ORM\Table(name="gsm_events")
 * @ORM\Entity
 */
class GsmEvents
{
    /**
     * @var integer
     *
     * @ORM\Column(name="eventid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $eventid;

    /**
     * @var string
     *
     * @ORM\Column(name="event_type", type="string", length=30, nullable=true)
     */
    private $eventType;

    /**
     * @var integer
     *
     * @ORM\Column(name="matchid", type="integer", nullable=true)
     */
    private $matchid;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsmid", type="integer", nullable=true)
     */
    private $gsmid;

    /**
     * @var string
     *
     * @ORM\Column(name="code", type="string", length=30, nullable=true)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="person", type="string", length=100, nullable=true)
     */
    private $person;

    /**
     * @var integer
     *
     * @ORM\Column(name="person_id", type="integer", nullable=true)
     */
    private $personId;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_id", type="integer", nullable=true)
     */
    private $teamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsm_team_id", type="integer", nullable=true)
     */
    private $gsmTeamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="minute", type="integer", nullable=true)
     */
    private $minute;

    /**
     * @var integer
     *
     * @ORM\Column(name="minute_extra", type="integer", nullable=true)
     */
    private $minuteExtra;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=true)
     */
    private $lastUpdated;



    /**
     * Get eventid
     *
     * @return integer 
     */
    public function getEventid()
    {
        return $this->eventid;
    }

    /**
     * Set eventType
     *
     * @param string $eventType
     * @return GsmEvents
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    
        return $this;
    }

    /**
     * Get eventType
     *
     * @return string 
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Set matchid
     *
     * @param integer $matchid
     * @return GsmEvents
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
     * Set gsmid
     *
     * @param integer $gsmid
     * @return GsmEvents
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
     * Set code
     *
     * @param string $code
     * @return GsmEvents
     */
    public function setCode($code)
    {
        $this->code = $code;
    
        return $this;
    }

    /**
     * Get code
     *
     * @return string 
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return GsmEvents
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
     * Set person
     *
     * @param string $person
     * @return GsmEvents
     */
    public function setPerson($person)
    {
        $this->person = $person;
    
        return $this;
    }

    /**
     * Get person
     *
     * @return string 
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Set personId
     *
     * @param integer $personId
     * @return GsmEvents
     */
    public function setPersonId($personId)
    {
        $this->personId = $personId;
    
        return $this;
    }

    /**
     * Get personId
     *
     * @return integer 
     */
    public function getPersonId()
    {
        return $this->personId;
    }

    /**
     * Set teamId
     *
     * @param integer $teamId
     * @return GsmEvents
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    
        return $this;
    }

    /**
     * Get teamId
     *
     * @return integer 
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * Set gsmTeamId
     *
     * @param integer $gsmTeamId
     * @return GsmEvents
     */
    public function setGsmTeamId($gsmTeamId)
    {
        $this->gsmTeamId = $gsmTeamId;
    
        return $this;
    }

    /**
     * Get gsmTeamId
     *
     * @return integer 
     */
    public function getGsmTeamId()
    {
        return $this->gsmTeamId;
    }

    /**
     * Set minute
     *
     * @param integer $minute
     * @return GsmEvents
     */
    public function setMinute($minute)
    {
        $this->minute = $minute;
    
        return $this;
    }

    /**
     * Get minute
     *
     * @return integer 
     */
    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * Set minuteExtra
     *
     * @param integer $minuteExtra
     * @return GsmEvents
     */
    public function setMinuteExtra($minuteExtra)
    {
        $this->minuteExtra = $minuteExtra;
    
        return $this;
    }

    /**
     * Get minuteExtra
     *
     * @return integer 
     */
    public function getMinuteExtra()
    {
        return $this->minuteExtra;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return GsmEvents
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
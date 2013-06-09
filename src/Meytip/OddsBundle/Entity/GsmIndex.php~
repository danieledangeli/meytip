<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmIndex
 *
 * @ORM\Table(name="gsm_index")
 * @ORM\Entity
 */
class GsmIndex
{
    /**
     * @var string
     *
     * @ORM\Column(name="unique_id", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueId;

    /**
     * @var integer
     *
     * @ORM\Column(name="event_id", type="integer", nullable=true)
     */
    private $eventId;

    /**
     * @var integer
     *
     * @ORM\Column(name="competition_id", type="integer", nullable=true)
     */
    private $competitionId;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=50, nullable=true)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=false)
     */
    private $lastUpdated;

    /**
     * @var string
     *
     * @ORM\Column(name="params", type="string", length=100, nullable=true)
     */
    private $params;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="gsm_lu", type="datetime", nullable=true)
     */
    private $gsmLu;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm_file", type="string", length=255, nullable=true)
     */
    private $gsmFile;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_processed", type="datetime", nullable=true)
     */
    private $lastProcessed;



    /**
     * Get uniqueId
     *
     * @return string 
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Set eventId
     *
     * @param integer $eventId
     * @return GsmIndex
     */
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    
        return $this;
    }

    /**
     * Get eventId
     *
     * @return integer 
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Set competitionId
     *
     * @param integer $competitionId
     * @return GsmIndex
     */
    public function setCompetitionId($competitionId)
    {
        $this->competitionId = $competitionId;
    
        return $this;
    }

    /**
     * Get competitionId
     *
     * @return integer 
     */
    public function getCompetitionId()
    {
        return $this->competitionId;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return GsmIndex
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

    /**
     * Set sport
     *
     * @param string $sport
     * @return GsmIndex
     */
    public function setSport($sport)
    {
        $this->sport = $sport;
    
        return $this;
    }

    /**
     * Get sport
     *
     * @return string 
     */
    public function getSport()
    {
        return $this->sport;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return GsmIndex
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return GsmIndex
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
     * Set params
     *
     * @param string $params
     * @return GsmIndex
     */
    public function setParams($params)
    {
        $this->params = $params;
    
        return $this;
    }

    /**
     * Get params
     *
     * @return string 
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * Set gsmLu
     *
     * @param \DateTime $gsmLu
     * @return GsmIndex
     */
    public function setGsmLu($gsmLu)
    {
        $this->gsmLu = $gsmLu;
    
        return $this;
    }

    /**
     * Get gsmLu
     *
     * @return \DateTime 
     */
    public function getGsmLu()
    {
        return $this->gsmLu;
    }

    /**
     * Set gsmFile
     *
     * @param string $gsmFile
     * @return GsmIndex
     */
    public function setGsmFile($gsmFile)
    {
        $this->gsmFile = $gsmFile;
    
        return $this;
    }

    /**
     * Get gsmFile
     *
     * @return string 
     */
    public function getGsmFile()
    {
        return $this->gsmFile;
    }

    /**
     * Set lastProcessed
     *
     * @param \DateTime $lastProcessed
     * @return GsmIndex
     */
    public function setLastProcessed($lastProcessed)
    {
        $this->lastProcessed = $lastProcessed;
    
        return $this;
    }

    /**
     * Get lastProcessed
     *
     * @return \DateTime 
     */
    public function getLastProcessed()
    {
        return $this->lastProcessed;
    }
}
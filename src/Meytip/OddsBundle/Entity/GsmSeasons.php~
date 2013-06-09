<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmSeasons
 *
 * @ORM\Table(name="gsm_seasons")
 * @ORM\Entity
 */
class GsmSeasons
{
    /**
     * @var integer
     *
     * @ORM\Column(name="season_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seasonId;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $sportid;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="end_date", type="date", nullable=false)
     */
    private $endDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="service_level", type="integer", nullable=false)
     */
    private $serviceLevel;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=false)
     */
    private $lastUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="comp_id", type="integer", nullable=false)
     */
    private $compId;



    /**
     * Set seasonId
     *
     * @param integer $seasonId
     * @return GsmSeasons
     */
    public function setSeasonId($seasonId)
    {
        $this->seasonId = $seasonId;
    
        return $this;
    }

    /**
     * Get seasonId
     *
     * @return integer 
     */
    public function getSeasonId()
    {
        return $this->seasonId;
    }

    /**
     * Set sportid
     *
     * @param integer $sportid
     * @return GsmSeasons
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
     * Set name
     *
     * @param string $name
     * @return GsmSeasons
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
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return GsmSeasons
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    
        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return GsmSeasons
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    
        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set serviceLevel
     *
     * @param integer $serviceLevel
     * @return GsmSeasons
     */
    public function setServiceLevel($serviceLevel)
    {
        $this->serviceLevel = $serviceLevel;
    
        return $this;
    }

    /**
     * Get serviceLevel
     *
     * @return integer 
     */
    public function getServiceLevel()
    {
        return $this->serviceLevel;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return GsmSeasons
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
     * Set compId
     *
     * @param integer $compId
     * @return GsmSeasons
     */
    public function setCompId($compId)
    {
        $this->compId = $compId;
    
        return $this;
    }

    /**
     * Get compId
     *
     * @return integer 
     */
    public function getCompId()
    {
        return $this->compId;
    }
}
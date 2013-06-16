<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmLeagues
 *
 * @ORM\Table(name="gsm_leagues")
 * @ORM\Entity
 */
class GsmLeagues
{
    /**
     * @var string
     *
     * @ORM\Column(name="uniq", type="string", length=30, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniq;

    /**
     * @var integer
     *
     * @ORM\Column(name="leagueid", type="integer", nullable=true)
     */
    private $leagueid;

    /**
     * @var string
     *
     * @ORM\Column(name="area_name", type="string", length=50, nullable=true)
     */
    private $areaName;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsm_comp_id", type="integer", nullable=true)
     */
    private $gsmCompId;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm_comp_name", type="string", length=50, nullable=true)
     */
    private $gsmCompName;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsm_round_id", type="integer", nullable=true)
     */
    private $gsmRoundId;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm_round_name", type="string", length=50, nullable=true)
     */
    private $gsmRoundName;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsm_group_id", type="integer", nullable=true)
     */
    private $gsmGroupId;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm_group_name", type="string", length=50, nullable=true)
     */
    private $gsmGroupName;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsm_season_id", type="integer", nullable=true)
     */
    private $gsmSeasonId;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm_season_name", type="string", length=50, nullable=true)
     */
    private $gsmSeasonName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timelogged", type="datetime", nullable=true)
     */
    private $timelogged;



    /**
     * Get unique
     *
     * @return string 
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * Set leagueid
     *
     * @param integer $leagueid
     * @return GsmLeagues
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
     * Set areaName
     *
     * @param string $areaName
     * @return GsmLeagues
     */
    public function setAreaName($areaName)
    {
        $this->areaName = $areaName;
    
        return $this;
    }

    /**
     * Get areaName
     *
     * @return string 
     */
    public function getAreaName()
    {
        return $this->areaName;
    }

    /**
     * Set gsmCompId
     *
     * @param integer $gsmCompId
     * @return GsmLeagues
     */
    public function setGsmCompId($gsmCompId)
    {
        $this->gsmCompId = $gsmCompId;
    
        return $this;
    }

    /**
     * Get gsmCompId
     *
     * @return integer 
     */
    public function getGsmCompId()
    {
        return $this->gsmCompId;
    }

    /**
     * Set gsmCompName
     *
     * @param string $gsmCompName
     * @return GsmLeagues
     */
    public function setGsmCompName($gsmCompName)
    {
        $this->gsmCompName = $gsmCompName;
    
        return $this;
    }

    /**
     * Get gsmCompName
     *
     * @return string 
     */
    public function getGsmCompName()
    {
        return $this->gsmCompName;
    }

    /**
     * Set gsmRoundId
     *
     * @param integer $gsmRoundId
     * @return GsmLeagues
     */
    public function setGsmRoundId($gsmRoundId)
    {
        $this->gsmRoundId = $gsmRoundId;
    
        return $this;
    }

    /**
     * Get gsmRoundId
     *
     * @return integer 
     */
    public function getGsmRoundId()
    {
        return $this->gsmRoundId;
    }

    /**
     * Set gsmRoundName
     *
     * @param string $gsmRoundName
     * @return GsmLeagues
     */
    public function setGsmRoundName($gsmRoundName)
    {
        $this->gsmRoundName = $gsmRoundName;
    
        return $this;
    }

    /**
     * Get gsmRoundName
     *
     * @return string 
     */
    public function getGsmRoundName()
    {
        return $this->gsmRoundName;
    }

    /**
     * Set gsmGroupId
     *
     * @param integer $gsmGroupId
     * @return GsmLeagues
     */
    public function setGsmGroupId($gsmGroupId)
    {
        $this->gsmGroupId = $gsmGroupId;
    
        return $this;
    }

    /**
     * Get gsmGroupId
     *
     * @return integer 
     */
    public function getGsmGroupId()
    {
        return $this->gsmGroupId;
    }

    /**
     * Set gsmGroupName
     *
     * @param string $gsmGroupName
     * @return GsmLeagues
     */
    public function setGsmGroupName($gsmGroupName)
    {
        $this->gsmGroupName = $gsmGroupName;
    
        return $this;
    }

    /**
     * Get gsmGroupName
     *
     * @return string 
     */
    public function getGsmGroupName()
    {
        return $this->gsmGroupName;
    }

    /**
     * Set gsmSeasonId
     *
     * @param integer $gsmSeasonId
     * @return GsmLeagues
     */
    public function setGsmSeasonId($gsmSeasonId)
    {
        $this->gsmSeasonId = $gsmSeasonId;
    
        return $this;
    }

    /**
     * Get gsmSeasonId
     *
     * @return integer 
     */
    public function getGsmSeasonId()
    {
        return $this->gsmSeasonId;
    }

    /**
     * Set gsmSeasonName
     *
     * @param string $gsmSeasonName
     * @return GsmLeagues
     */
    public function setGsmSeasonName($gsmSeasonName)
    {
        $this->gsmSeasonName = $gsmSeasonName;
    
        return $this;
    }

    /**
     * Get gsmSeasonName
     *
     * @return string 
     */
    public function getGsmSeasonName()
    {
        return $this->gsmSeasonName;
    }

    /**
     * Set timelogged
     *
     * @param \DateTime $timelogged
     * @return GsmLeagues
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
     * Get uniq
     *
     * @return string 
     */
    public function getUniq()
    {
        return $this->uniq;
    }
}
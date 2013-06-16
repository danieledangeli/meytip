<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmTablesEntries
 *
 * @ORM\Table(name="gsm_tables_entries")
 * @ORM\Entity
 */
class GsmTablesEntries
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
     * @ORM\Column(name="table_id", type="integer", nullable=true)
     */
    private $tableId;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank", type="integer", nullable=true)
     */
    private $rank;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank_last", type="integer", nullable=true)
     */
    private $rankLast;

    /**
     * @var integer
     *
     * @ORM\Column(name="rank_total", type="integer", nullable=true)
     */
    private $rankTotal;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsm_team_id", type="integer", nullable=true)
     */
    private $gsmTeamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="played", type="integer", nullable=true)
     */
    private $played;

    /**
     * @var integer
     *
     * @ORM\Column(name="won", type="integer", nullable=true)
     */
    private $won;

    /**
     * @var integer
     *
     * @ORM\Column(name="lost", type="integer", nullable=true)
     */
    private $lost;

    /**
     * @var integer
     *
     * @ORM\Column(name="drawn", type="integer", nullable=true)
     */
    private $drawn;

    /**
     * @var integer
     *
     * @ORM\Column(name="for", type="integer", nullable=true)
     */
    private $for;

    /**
     * @var integer
     *
     * @ORM\Column(name="against", type="integer", nullable=true)
     */
    private $against;

    /**
     * @var integer
     *
     * @ORM\Column(name="points", type="integer", nullable=true)
     */
    private $points;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=true)
     */
    private $lastUpdated;



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
     * Set tableId
     *
     * @param integer $tableId
     * @return GsmTablesEntries
     */
    public function setTableId($tableId)
    {
        $this->tableId = $tableId;
    
        return $this;
    }

    /**
     * Get tableId
     *
     * @return integer 
     */
    public function getTableId()
    {
        return $this->tableId;
    }

    /**
     * Set rank
     *
     * @param integer $rank
     * @return GsmTablesEntries
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    
        return $this;
    }

    /**
     * Get rank
     *
     * @return integer 
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * Set rankLast
     *
     * @param integer $rankLast
     * @return GsmTablesEntries
     */
    public function setRankLast($rankLast)
    {
        $this->rankLast = $rankLast;
    
        return $this;
    }

    /**
     * Get rankLast
     *
     * @return integer 
     */
    public function getRankLast()
    {
        return $this->rankLast;
    }

    /**
     * Set rankTotal
     *
     * @param integer $rankTotal
     * @return GsmTablesEntries
     */
    public function setRankTotal($rankTotal)
    {
        $this->rankTotal = $rankTotal;
    
        return $this;
    }

    /**
     * Get rankTotal
     *
     * @return integer 
     */
    public function getRankTotal()
    {
        return $this->rankTotal;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return GsmTablesEntries
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
     * Set gsmTeamId
     *
     * @param integer $gsmTeamId
     * @return GsmTablesEntries
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
     * Set played
     *
     * @param integer $played
     * @return GsmTablesEntries
     */
    public function setPlayed($played)
    {
        $this->played = $played;
    
        return $this;
    }

    /**
     * Get played
     *
     * @return integer 
     */
    public function getPlayed()
    {
        return $this->played;
    }

    /**
     * Set won
     *
     * @param integer $won
     * @return GsmTablesEntries
     */
    public function setWon($won)
    {
        $this->won = $won;
    
        return $this;
    }

    /**
     * Get won
     *
     * @return integer 
     */
    public function getWon()
    {
        return $this->won;
    }

    /**
     * Set lost
     *
     * @param integer $lost
     * @return GsmTablesEntries
     */
    public function setLost($lost)
    {
        $this->lost = $lost;
    
        return $this;
    }

    /**
     * Get lost
     *
     * @return integer 
     */
    public function getLost()
    {
        return $this->lost;
    }

    /**
     * Set drawn
     *
     * @param integer $drawn
     * @return GsmTablesEntries
     */
    public function setDrawn($drawn)
    {
        $this->drawn = $drawn;
    
        return $this;
    }

    /**
     * Get drawn
     *
     * @return integer 
     */
    public function getDrawn()
    {
        return $this->drawn;
    }

    /**
     * Set for
     *
     * @param integer $for
     * @return GsmTablesEntries
     */
    public function setFor($for)
    {
        $this->for = $for;
    
        return $this;
    }

    /**
     * Get for
     *
     * @return integer 
     */
    public function getFor()
    {
        return $this->for;
    }

    /**
     * Set against
     *
     * @param integer $against
     * @return GsmTablesEntries
     */
    public function setAgainst($against)
    {
        $this->against = $against;
    
        return $this;
    }

    /**
     * Get against
     *
     * @return integer 
     */
    public function getAgainst()
    {
        return $this->against;
    }

    /**
     * Set points
     *
     * @param integer $points
     * @return GsmTablesEntries
     */
    public function setPoints($points)
    {
        $this->points = $points;
    
        return $this;
    }

    /**
     * Get points
     *
     * @return integer 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return GsmTablesEntries
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
     * Get uniq
     *
     * @return string 
     */
    public function getUniq()
    {
        return $this->uniq;
    }
}
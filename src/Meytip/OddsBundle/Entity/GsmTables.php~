<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmTables
 *
 * @ORM\Table(name="gsm_tables")
 * @ORM\Entity
 */
class GsmTables
{
    /**
     * @var integer
     *
     * @ORM\Column(name="unique_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uniqueId;

    /**
     * @var integer
     *
     * @ORM\Column(name="round_id", type="integer", nullable=true)
     */
    private $roundId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=100, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="table_type", type="string", length=20, nullable=true)
     */
    private $tableType;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_updated", type="datetime", nullable=false)
     */
    private $lastUpdated;

    /**
     * @var integer
     *
     * @ORM\Column(name="season_id", type="integer", nullable=true)
     */
    private $seasonId;



    /**
     * Get uniqueId
     *
     * @return integer 
     */
    public function getUniqueId()
    {
        return $this->uniqueId;
    }

    /**
     * Set roundId
     *
     * @param integer $roundId
     * @return GsmTables
     */
    public function setRoundId($roundId)
    {
        $this->roundId = $roundId;
    
        return $this;
    }

    /**
     * Get roundId
     *
     * @return integer 
     */
    public function getRoundId()
    {
        return $this->roundId;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return GsmTables
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
     * Set tableType
     *
     * @param string $tableType
     * @return GsmTables
     */
    public function setTableType($tableType)
    {
        $this->tableType = $tableType;
    
        return $this;
    }

    /**
     * Get tableType
     *
     * @return string 
     */
    public function getTableType()
    {
        return $this->tableType;
    }

    /**
     * Set lastUpdated
     *
     * @param \DateTime $lastUpdated
     * @return GsmTables
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
     * Set seasonId
     *
     * @param integer $seasonId
     * @return GsmTables
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
}
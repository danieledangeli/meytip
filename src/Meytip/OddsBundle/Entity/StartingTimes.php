<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StartingTimes
 *
 * @ORM\Table(name="starting_times")
 * @ORM\Entity
 */
class StartingTimes
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
     * @var \DateTime
     *
     * @ORM\Column(name="starttime", type="datetime", nullable=true)
     */
    private $starttime;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=5, nullable=true)
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="median_time", type="datetime", nullable=true)
     */
    private $medianTime;

    /**
     * @var integer
     *
     * @ORM\Column(name="no_of_times", type="integer", nullable=true)
     */
    private $noOfTimes;



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
     * Set starttime
     *
     * @param \DateTime $starttime
     * @return StartingTimes
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
     * Set type
     *
     * @param string $type
     * @return StartingTimes
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
     * Set medianTime
     *
     * @param \DateTime $medianTime
     * @return StartingTimes
     */
    public function setMedianTime($medianTime)
    {
        $this->medianTime = $medianTime;
    
        return $this;
    }

    /**
     * Get medianTime
     *
     * @return \DateTime 
     */
    public function getMedianTime()
    {
        return $this->medianTime;
    }

    /**
     * Set noOfTimes
     *
     * @param integer $noOfTimes
     * @return StartingTimes
     */
    public function setNoOfTimes($noOfTimes)
    {
        $this->noOfTimes = $noOfTimes;
    
        return $this;
    }

    /**
     * Get noOfTimes
     *
     * @return integer 
     */
    public function getNoOfTimes()
    {
        return $this->noOfTimes;
    }
}
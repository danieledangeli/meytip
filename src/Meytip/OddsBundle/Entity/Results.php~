<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Results
 *
 * @ORM\Table(name="results")
 * @ORM\Entity
 */
class Results
{
    /**
     * @var integer
     *
     * @ORM\Column(name="matchid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $matchid;

    /**
     * @var integer
     *
     * @ORM\Column(name="resultsid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $resultsid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timelogged", type="datetime", nullable=true)
     */
    private $timelogged;

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
     * @ORM\Column(name="name", type="string", length=30, nullable=true)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="homeid", type="integer", nullable=true)
     */
    private $homeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="awayid", type="integer", nullable=true)
     */
    private $awayid;



    /**
     * Set matchid
     *
     * @param integer $matchid
     * @return Results
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
     * Set resultsid
     *
     * @param integer $resultsid
     * @return Results
     */
    public function setResultsid($resultsid)
    {
        $this->resultsid = $resultsid;
    
        return $this;
    }

    /**
     * Get resultsid
     *
     * @return integer 
     */
    public function getResultsid()
    {
        return $this->resultsid;
    }

    /**
     * Set timelogged
     *
     * @param \DateTime $timelogged
     * @return Results
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
     * Set hscore
     *
     * @param integer $hscore
     * @return Results
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
     * @return Results
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
     * Set name
     *
     * @param string $name
     * @return Results
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
     * Set homeid
     *
     * @param integer $homeid
     * @return Results
     */
    public function setHomeid($homeid)
    {
        $this->homeid = $homeid;
    
        return $this;
    }

    /**
     * Get homeid
     *
     * @return integer 
     */
    public function getHomeid()
    {
        return $this->homeid;
    }

    /**
     * Set awayid
     *
     * @param integer $awayid
     * @return Results
     */
    public function setAwayid($awayid)
    {
        $this->awayid = $awayid;
    
        return $this;
    }

    /**
     * Get awayid
     *
     * @return integer 
     */
    public function getAwayid()
    {
        return $this->awayid;
    }
}
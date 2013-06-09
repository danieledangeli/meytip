<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Periods
 *
 * @ORM\Table(name="periods")
 * @ORM\Entity
 */
class Periods
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
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=12, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="detail", type="string", length=12, nullable=true)
     */
    private $detail;

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
     * Set matchid
     *
     * @param integer $matchid
     * @return Periods
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
     * Set id
     *
     * @param integer $id
     * @return Periods
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Periods
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
     * Set detail
     *
     * @param string $detail
     * @return Periods
     */
    public function setDetail($detail)
    {
        $this->detail = $detail;
    
        return $this;
    }

    /**
     * Get detail
     *
     * @return string 
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * Set timelogged
     *
     * @param \DateTime $timelogged
     * @return Periods
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
     * @return Periods
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
     * @return Periods
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
}
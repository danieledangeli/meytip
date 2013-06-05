<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DuplicateMatches
 *
 * @ORM\Table(name="duplicate_matches")
 * @ORM\Entity
 */
class DuplicateMatches
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
     * @var integer
     *
     * @ORM\Column(name="xsid", type="integer", nullable=true)
     */
    private $xsid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time_logged", type="datetime", nullable=false)
     */
    private $timeLogged;



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
     * Set xsid
     *
     * @param integer $xsid
     * @return DuplicateMatches
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
     * Set timeLogged
     *
     * @param \DateTime $timeLogged
     * @return DuplicateMatches
     */
    public function setTimeLogged($timeLogged)
    {
        $this->timeLogged = $timeLogged;
    
        return $this;
    }

    /**
     * Get timeLogged
     *
     * @return \DateTime 
     */
    public function getTimeLogged()
    {
        return $this->timeLogged;
    }
}
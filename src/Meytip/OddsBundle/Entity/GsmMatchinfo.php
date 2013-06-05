<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmMatchinfo
 *
 * @ORM\Table(name="gsm_matchinfo")
 * @ORM\Entity
 */
class GsmMatchinfo
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
     * @ORM\Column(name="gsmid", type="integer", nullable=true)
     */
    private $gsmid;

    /**
     * @var integer
     *
     * @ORM\Column(name="venue_id", type="integer", nullable=true)
     */
    private $venueId;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_id", type="integer", nullable=true)
     */
    private $areaId;

    /**
     * @var integer
     *
     * @ORM\Column(name="referee_id", type="integer", nullable=true)
     */
    private $refereeId;

    /**
     * @var string
     *
     * @ORM\Column(name="referee_name", type="string", length=50, nullable=true)
     */
    private $refereeName;

    /**
     * @var integer
     *
     * @ORM\Column(name="attendance", type="integer", nullable=true)
     */
    private $attendance;



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
     * @return GsmMatchinfo
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
     * Set venueId
     *
     * @param integer $venueId
     * @return GsmMatchinfo
     */
    public function setVenueId($venueId)
    {
        $this->venueId = $venueId;
    
        return $this;
    }

    /**
     * Get venueId
     *
     * @return integer 
     */
    public function getVenueId()
    {
        return $this->venueId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return GsmMatchinfo
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
     * Set city
     *
     * @param string $city
     * @return GsmMatchinfo
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set areaId
     *
     * @param integer $areaId
     * @return GsmMatchinfo
     */
    public function setAreaId($areaId)
    {
        $this->areaId = $areaId;
    
        return $this;
    }

    /**
     * Get areaId
     *
     * @return integer 
     */
    public function getAreaId()
    {
        return $this->areaId;
    }

    /**
     * Set refereeId
     *
     * @param integer $refereeId
     * @return GsmMatchinfo
     */
    public function setRefereeId($refereeId)
    {
        $this->refereeId = $refereeId;
    
        return $this;
    }

    /**
     * Get refereeId
     *
     * @return integer 
     */
    public function getRefereeId()
    {
        return $this->refereeId;
    }

    /**
     * Set refereeName
     *
     * @param string $refereeName
     * @return GsmMatchinfo
     */
    public function setRefereeName($refereeName)
    {
        $this->refereeName = $refereeName;
    
        return $this;
    }

    /**
     * Get refereeName
     *
     * @return string 
     */
    public function getRefereeName()
    {
        return $this->refereeName;
    }

    /**
     * Set attendance
     *
     * @param integer $attendance
     * @return GsmMatchinfo
     */
    public function setAttendance($attendance)
    {
        $this->attendance = $attendance;
    
        return $this;
    }

    /**
     * Get attendance
     *
     * @return integer 
     */
    public function getAttendance()
    {
        return $this->attendance;
    }
}
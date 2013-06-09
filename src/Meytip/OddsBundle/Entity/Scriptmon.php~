<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Scriptmon
 *
 * @ORM\Table(name="scriptmon")
 * @ORM\Entity
 */
class Scriptmon
{
    /**
     * @var string
     *
     * @ORM\Column(name="scriptid", type="string", length=20, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $scriptid;

    /**
     * @var string
     *
     * @ORM\Column(name="sport", type="string", length=10, nullable=true)
     */
    private $sport;

    /**
     * @var string
     *
     * @ORM\Column(name="oddstype", type="string", length=20, nullable=true)
     */
    private $oddstype;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_run", type="datetime", nullable=true)
     */
    private $lastRun;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_ended", type="datetime", nullable=true)
     */
    private $lastEnded;

    /**
     * @var string
     *
     * @ORM\Column(name="desc", type="string", length=100, nullable=true)
     */
    private $desc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fullrefresh", type="datetime", nullable=true)
     */
    private $fullrefresh;

    /**
     * @var string
     *
     * @ORM\Column(name="refresh", type="string", length=20, nullable=true)
     */
    private $refresh;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="runat", type="time", nullable=true)
     */
    private $runat;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=20, nullable=true)
     */
    private $type;



    /**
     * Get scriptid
     *
     * @return string 
     */
    public function getScriptid()
    {
        return $this->scriptid;
    }

    /**
     * Set sport
     *
     * @param string $sport
     * @return Scriptmon
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
     * Set oddstype
     *
     * @param string $oddstype
     * @return Scriptmon
     */
    public function setOddstype($oddstype)
    {
        $this->oddstype = $oddstype;
    
        return $this;
    }

    /**
     * Get oddstype
     *
     * @return string 
     */
    public function getOddstype()
    {
        return $this->oddstype;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Scriptmon
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
     * Set lastRun
     *
     * @param \DateTime $lastRun
     * @return Scriptmon
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;
    
        return $this;
    }

    /**
     * Get lastRun
     *
     * @return \DateTime 
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set lastEnded
     *
     * @param \DateTime $lastEnded
     * @return Scriptmon
     */
    public function setLastEnded($lastEnded)
    {
        $this->lastEnded = $lastEnded;
    
        return $this;
    }

    /**
     * Get lastEnded
     *
     * @return \DateTime 
     */
    public function getLastEnded()
    {
        return $this->lastEnded;
    }

    /**
     * Set desc
     *
     * @param string $desc
     * @return Scriptmon
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;
    
        return $this;
    }

    /**
     * Get desc
     *
     * @return string 
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set fullrefresh
     *
     * @param \DateTime $fullrefresh
     * @return Scriptmon
     */
    public function setFullrefresh($fullrefresh)
    {
        $this->fullrefresh = $fullrefresh;
    
        return $this;
    }

    /**
     * Get fullrefresh
     *
     * @return \DateTime 
     */
    public function getFullrefresh()
    {
        return $this->fullrefresh;
    }

    /**
     * Set refresh
     *
     * @param string $refresh
     * @return Scriptmon
     */
    public function setRefresh($refresh)
    {
        $this->refresh = $refresh;
    
        return $this;
    }

    /**
     * Get refresh
     *
     * @return string 
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * Set runat
     *
     * @param \DateTime $runat
     * @return Scriptmon
     */
    public function setRunat($runat)
    {
        $this->runat = $runat;
    
        return $this;
    }

    /**
     * Get runat
     *
     * @return \DateTime 
     */
    public function getRunat()
    {
        return $this->runat;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Scriptmon
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
}
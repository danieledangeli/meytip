<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stdodds
 *
 * @ORM\Table(name="stdodds")
 * @ORM\Entity
 */
class Stdodds
{
    /**
     * @var integer
     *
     * @ORM\Column(name="offer_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $offerId;

    /**
     * @var string
     *
     * @ORM\Column(name="hcapgroup", type="string", length=20, nullable=true)
     */
    private $hcapgroup;

    /**
     * @var float
     *
     * @ORM\Column(name="o1", type="float", nullable=true)
     */
    private $o1;

    /**
     * @var float
     *
     * @ORM\Column(name="o2", type="float", nullable=true)
     */
    private $o2;

    /**
     * @var float
     *
     * @ORM\Column(name="o3", type="float", nullable=true)
     */
    private $o3;

    /**
     * @var string
     *
     * @ORM\Column(name="o1dir", type="string", length=1, nullable=true)
     */
    private $o1dir;

    /**
     * @var string
     *
     * @ORM\Column(name="o2dir", type="string", length=1, nullable=true)
     */
    private $o2dir;

    /**
     * @var string
     *
     * @ORM\Column(name="o3dir", type="string", length=1, nullable=true)
     */
    private $o3dir;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_change", type="datetime", nullable=true)
     */
    private $lastChange;



    /**
     * Get offerId
     *
     * @return integer 
     */
    public function getOfferId()
    {
        return $this->offerId;
    }

    /**
     * Set hcapgroup
     *
     * @param string $hcapgroup
     * @return Stdodds
     */
    public function setHcapgroup($hcapgroup)
    {
        $this->hcapgroup = $hcapgroup;
    
        return $this;
    }

    /**
     * Get hcapgroup
     *
     * @return string 
     */
    public function getHcapgroup()
    {
        return $this->hcapgroup;
    }

    /**
     * Set o1
     *
     * @param float $o1
     * @return Stdodds
     */
    public function setO1($o1)
    {
        $this->o1 = $o1;
    
        return $this;
    }

    /**
     * Get o1
     *
     * @return float 
     */
    public function getO1()
    {
        return $this->o1;
    }

    /**
     * Set o2
     *
     * @param float $o2
     * @return Stdodds
     */
    public function setO2($o2)
    {
        $this->o2 = $o2;
    
        return $this;
    }

    /**
     * Get o2
     *
     * @return float 
     */
    public function getO2()
    {
        return $this->o2;
    }

    /**
     * Set o3
     *
     * @param float $o3
     * @return Stdodds
     */
    public function setO3($o3)
    {
        $this->o3 = $o3;
    
        return $this;
    }

    /**
     * Get o3
     *
     * @return float 
     */
    public function getO3()
    {
        return $this->o3;
    }

    /**
     * Set o1dir
     *
     * @param string $o1dir
     * @return Stdodds
     */
    public function setO1dir($o1dir)
    {
        $this->o1dir = $o1dir;
    
        return $this;
    }

    /**
     * Get o1dir
     *
     * @return string 
     */
    public function getO1dir()
    {
        return $this->o1dir;
    }

    /**
     * Set o2dir
     *
     * @param string $o2dir
     * @return Stdodds
     */
    public function setO2dir($o2dir)
    {
        $this->o2dir = $o2dir;
    
        return $this;
    }

    /**
     * Get o2dir
     *
     * @return string 
     */
    public function getO2dir()
    {
        return $this->o2dir;
    }

    /**
     * Set o3dir
     *
     * @param string $o3dir
     * @return Stdodds
     */
    public function setO3dir($o3dir)
    {
        $this->o3dir = $o3dir;
    
        return $this;
    }

    /**
     * Get o3dir
     *
     * @return string 
     */
    public function getO3dir()
    {
        return $this->o3dir;
    }

    /**
     * Set lastChange
     *
     * @param \DateTime $lastChange
     * @return Stdodds
     */
    public function setLastChange($lastChange)
    {
        $this->lastChange = $lastChange;
    
        return $this;
    }

    /**
     * Get lastChange
     *
     * @return \DateTime 
     */
    public function getLastChange()
    {
        return $this->lastChange;
    }
}
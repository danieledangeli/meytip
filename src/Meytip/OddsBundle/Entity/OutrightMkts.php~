<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutrightMkts
 *
 * @ORM\Table(name="outright_mkts")
 * @ORM\Entity
 */
class OutrightMkts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="marketid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $marketid;

    /**
     * @var string
     *
     * @ORM\Column(name="marketname", type="string", length=50, nullable=true)
     */
    private $marketname;

    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="integer", nullable=true)
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="groupname", type="string", length=50, nullable=true)
     */
    private $groupname;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="integer", nullable=true)
     */
    private $typeid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="bfstarttime", type="datetime", nullable=true)
     */
    private $bfstarttime;

    /**
     * @var string
     *
     * @ORM\Column(name="active", type="string", length=10, nullable=true)
     */
    private $active;



    /**
     * Get marketid
     *
     * @return integer 
     */
    public function getMarketid()
    {
        return $this->marketid;
    }

    /**
     * Set marketname
     *
     * @param string $marketname
     * @return OutrightMkts
     */
    public function setMarketname($marketname)
    {
        $this->marketname = $marketname;
    
        return $this;
    }

    /**
     * Get marketname
     *
     * @return string 
     */
    public function getMarketname()
    {
        return $this->marketname;
    }

    /**
     * Set groupid
     *
     * @param integer $groupid
     * @return OutrightMkts
     */
    public function setGroupid($groupid)
    {
        $this->groupid = $groupid;
    
        return $this;
    }

    /**
     * Get groupid
     *
     * @return integer 
     */
    public function getGroupid()
    {
        return $this->groupid;
    }

    /**
     * Set groupname
     *
     * @param string $groupname
     * @return OutrightMkts
     */
    public function setGroupname($groupname)
    {
        $this->groupname = $groupname;
    
        return $this;
    }

    /**
     * Get groupname
     *
     * @return string 
     */
    public function getGroupname()
    {
        return $this->groupname;
    }

    /**
     * Set typeid
     *
     * @param integer $typeid
     * @return OutrightMkts
     */
    public function setTypeid($typeid)
    {
        $this->typeid = $typeid;
    
        return $this;
    }

    /**
     * Get typeid
     *
     * @return integer 
     */
    public function getTypeid()
    {
        return $this->typeid;
    }

    /**
     * Set bfstarttime
     *
     * @param \DateTime $bfstarttime
     * @return OutrightMkts
     */
    public function setBfstarttime($bfstarttime)
    {
        $this->bfstarttime = $bfstarttime;
    
        return $this;
    }

    /**
     * Get bfstarttime
     *
     * @return \DateTime 
     */
    public function getBfstarttime()
    {
        return $this->bfstarttime;
    }

    /**
     * Set active
     *
     * @param string $active
     * @return OutrightMkts
     */
    public function setActive($active)
    {
        $this->active = $active;
    
        return $this;
    }

    /**
     * Get active
     *
     * @return string 
     */
    public function getActive()
    {
        return $this->active;
    }
}
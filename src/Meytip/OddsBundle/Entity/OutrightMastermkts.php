<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OutrightMastermkts
 *
 * @ORM\Table(name="outright_mastermkts")
 * @ORM\Entity
 */
class OutrightMastermkts
{
    /**
     * @var integer
     *
     * @ORM\Column(name="groupid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $groupid;

    /**
     * @var string
     *
     * @ORM\Column(name="marketname", type="string", length=50, nullable=true)
     */
    private $marketname;

    /**
     * @var integer
     *
     * @ORM\Column(name="typeid", type="integer", nullable=true)
     */
    private $typeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="status", type="integer", nullable=true)
     */
    private $status;

    /**
     * @var string
     *
     * @ORM\Column(name="subscribe", type="string", length=1, nullable=true)
     */
    private $subscribe;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccid", type="integer", nullable=true)
     */
    private $ccid;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30, nullable=true)
     */
    private $country;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=true)
     */
    private $sportid;



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
     * Set marketname
     *
     * @param string $marketname
     * @return OutrightMastermkts
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
     * Set typeid
     *
     * @param integer $typeid
     * @return OutrightMastermkts
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
     * Set status
     *
     * @param integer $status
     * @return OutrightMastermkts
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return integer 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set subscribe
     *
     * @param string $subscribe
     * @return OutrightMastermkts
     */
    public function setSubscribe($subscribe)
    {
        $this->subscribe = $subscribe;
    
        return $this;
    }

    /**
     * Get subscribe
     *
     * @return string 
     */
    public function getSubscribe()
    {
        return $this->subscribe;
    }

    /**
     * Set ccid
     *
     * @param integer $ccid
     * @return OutrightMastermkts
     */
    public function setCcid($ccid)
    {
        $this->ccid = $ccid;
    
        return $this;
    }

    /**
     * Get ccid
     *
     * @return integer 
     */
    public function getCcid()
    {
        return $this->ccid;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return OutrightMastermkts
     */
    public function setCountry($country)
    {
        $this->country = $country;
    
        return $this;
    }

    /**
     * Get country
     *
     * @return string 
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set sportid
     *
     * @param integer $sportid
     * @return OutrightMastermkts
     */
    public function setSportid($sportid)
    {
        $this->sportid = $sportid;
    
        return $this;
    }

    /**
     * Get sportid
     *
     * @return integer 
     */
    public function getSportid()
    {
        return $this->sportid;
    }
}
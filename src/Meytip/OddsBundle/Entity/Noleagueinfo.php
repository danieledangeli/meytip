<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Noleagueinfo
 *
 * @ORM\Table(name="noleagueinfo")
 * @ORM\Entity
 */
class Noleagueinfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="codeid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $codeid;

    /**
     * @var integer
     *
     * @ORM\Column(name="lid", type="integer", nullable=true)
     */
    private $lid;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=20, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="subleague", type="string", length=50, nullable=true)
     */
    private $subleague;

    /**
     * @var string
     *
     * @ORM\Column(name="league", type="string", length=50, nullable=true)
     */
    private $league;

    /**
     * @var string
     *
     * @ORM\Column(name="uniqueid", type="string", length=30, nullable=true)
     */
    private $uniqueid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="when_found", type="datetime", nullable=true)
     */
    private $whenFound;



    /**
     * Get codeid
     *
     * @return integer 
     */
    public function getCodeid()
    {
        return $this->codeid;
    }

    /**
     * Set lid
     *
     * @param integer $lid
     * @return Noleagueinfo
     */
    public function setLid($lid)
    {
        $this->lid = $lid;
    
        return $this;
    }

    /**
     * Get lid
     *
     * @return integer 
     */
    public function getLid()
    {
        return $this->lid;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Noleagueinfo
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
     * Set subleague
     *
     * @param string $subleague
     * @return Noleagueinfo
     */
    public function setSubleague($subleague)
    {
        $this->subleague = $subleague;
    
        return $this;
    }

    /**
     * Get subleague
     *
     * @return string 
     */
    public function getSubleague()
    {
        return $this->subleague;
    }

    /**
     * Set league
     *
     * @param string $league
     * @return Noleagueinfo
     */
    public function setLeague($league)
    {
        $this->league = $league;
    
        return $this;
    }

    /**
     * Get league
     *
     * @return string 
     */
    public function getLeague()
    {
        return $this->league;
    }

    /**
     * Set uniqueid
     *
     * @param string $uniqueid
     * @return Noleagueinfo
     */
    public function setUniqueid($uniqueid)
    {
        $this->uniqueid = $uniqueid;
    
        return $this;
    }

    /**
     * Get uniqueid
     *
     * @return string 
     */
    public function getUniqueid()
    {
        return $this->uniqueid;
    }

    /**
     * Set whenFound
     *
     * @param \DateTime $whenFound
     * @return Noleagueinfo
     */
    public function setWhenFound($whenFound)
    {
        $this->whenFound = $whenFound;
    
        return $this;
    }

    /**
     * Get whenFound
     *
     * @return \DateTime 
     */
    public function getWhenFound()
    {
        return $this->whenFound;
    }
}
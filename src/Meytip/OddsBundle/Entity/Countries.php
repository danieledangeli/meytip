<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Countries
 *
 * @ORM\Table(name="countries")
 * @ORM\Entity
 */
class Countries
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ccode", type="string", length=15, nullable=true)
     */
    private $ccode;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="last_verified", type="string", length=30, nullable=true)
     */
    private $lastVerified;

    /**
     * @var string
     *
     * @ORM\Column(name="alias", type="string", length=30, nullable=true)
     */
    private $alias;



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
     * Set ccode
     *
     * @param string $ccode
     * @return Countries
     */
    public function setCcode($ccode)
    {
        $this->ccode = $ccode;
    
        return $this;
    }

    /**
     * Get ccode
     *
     * @return string 
     */
    public function getCcode()
    {
        return $this->ccode;
    }

    /**
     * Set country
     *
     * @param string $country
     * @return Countries
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
     * Set lastVerified
     *
     * @param string $lastVerified
     * @return Countries
     */
    public function setLastVerified($lastVerified)
    {
        $this->lastVerified = $lastVerified;
    
        return $this;
    }

    /**
     * Get lastVerified
     *
     * @return string 
     */
    public function getLastVerified()
    {
        return $this->lastVerified;
    }

    /**
     * Set alias
     *
     * @param string $alias
     * @return Countries
     */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    
        return $this;
    }

    /**
     * Get alias
     *
     * @return string 
     */
    public function getAlias()
    {
        return $this->alias;
    }
}
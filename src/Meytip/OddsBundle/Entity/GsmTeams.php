<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GsmTeams
 *
 * @ORM\Table(name="gsm_teams")
 * @ORM\Entity
 */
class GsmTeams
{
    /**
     * @var integer
     *
     * @ORM\Column(name="teamid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamid;

    /**
     * @var integer
     *
     * @ORM\Column(name="gsm_teamid", type="integer", nullable=false)
     */
    private $gsmTeamid;

    /**
     * @var string
     *
     * @ORM\Column(name="gsm_team_name", type="string", length=50, nullable=true)
     */
    private $gsmTeamName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timelogged", type="datetime", nullable=true)
     */
    private $timelogged;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255, nullable=true)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=30, nullable=true)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="teamtype", type="string", length=30, nullable=true)
     */
    private $teamtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="area_id", type="integer", nullable=true)
     */
    private $areaId;

    /**
     * @var string
     *
     * @ORM\Column(name="official_name", type="string", length=50, nullable=true)
     */
    private $officialName;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=30, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="address_number", type="string", length=30, nullable=true)
     */
    private $addressNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="address_extra", type="string", length=100, nullable=true)
     */
    private $addressExtra;

    /**
     * @var string
     *
     * @ORM\Column(name="address_zip", type="string", length=50, nullable=true)
     */
    private $addressZip;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_address", type="string", length=255, nullable=true)
     */
    private $postalAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_number", type="string", length=30, nullable=true)
     */
    private $postalNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_extra", type="string", length=100, nullable=true)
     */
    private $postalExtra;

    /**
     * @var string
     *
     * @ORM\Column(name="postal_zip", type="string", length=50, nullable=true)
     */
    private $postalZip;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=50, nullable=true)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="founded", type="string", length=12, nullable=true)
     */
    private $founded;

    /**
     * @var string
     *
     * @ORM\Column(name="club_colors", type="string", length=100, nullable=true)
     */
    private $clubColors;

    /**
     * @var string
     *
     * @ORM\Column(name="clothing", type="string", length=50, nullable=true)
     */
    private $clothing;

    /**
     * @var string
     *
     * @ORM\Column(name="sponsor", type="string", length=50, nullable=true)
     */
    private $sponsor;

    /**
     * @var string
     *
     * @ORM\Column(name="details", type="string", length=100, nullable=true)
     */
    private $details;

    /**
     * @var string
     *
     * @ORM\Column(name="soccertype", type="string", length=30, nullable=true)
     */
    private $soccertype;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=30, nullable=true)
     */
    private $fax;

    /**
     * @var integer
     *
     * @ORM\Column(name="sportid", type="integer", nullable=true)
     */
    private $sportid;

    /**
     * @var string
     *
     * @ORM\Column(name="mapped", type="string", length=1, nullable=true)
     */
    private $mapped;



    /**
     * Get teamid
     *
     * @return integer 
     */
    public function getTeamid()
    {
        return $this->teamid;
    }

    /**
     * Set gsmTeamid
     *
     * @param integer $gsmTeamid
     * @return GsmTeams
     */
    public function setGsmTeamid($gsmTeamid)
    {
        $this->gsmTeamid = $gsmTeamid;
    
        return $this;
    }

    /**
     * Get gsmTeamid
     *
     * @return integer 
     */
    public function getGsmTeamid()
    {
        return $this->gsmTeamid;
    }

    /**
     * Set gsmTeamName
     *
     * @param string $gsmTeamName
     * @return GsmTeams
     */
    public function setGsmTeamName($gsmTeamName)
    {
        $this->gsmTeamName = $gsmTeamName;
    
        return $this;
    }

    /**
     * Get gsmTeamName
     *
     * @return string 
     */
    public function getGsmTeamName()
    {
        return $this->gsmTeamName;
    }

    /**
     * Set timelogged
     *
     * @param \DateTime $timelogged
     * @return GsmTeams
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
     * Set logo
     *
     * @param string $logo
     * @return GsmTeams
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    
        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return GsmTeams
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

    /**
     * Set teamtype
     *
     * @param string $teamtype
     * @return GsmTeams
     */
    public function setTeamtype($teamtype)
    {
        $this->teamtype = $teamtype;
    
        return $this;
    }

    /**
     * Get teamtype
     *
     * @return string 
     */
    public function getTeamtype()
    {
        return $this->teamtype;
    }

    /**
     * Set areaId
     *
     * @param integer $areaId
     * @return GsmTeams
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
     * Set officialName
     *
     * @param string $officialName
     * @return GsmTeams
     */
    public function setOfficialName($officialName)
    {
        $this->officialName = $officialName;
    
        return $this;
    }

    /**
     * Get officialName
     *
     * @return string 
     */
    public function getOfficialName()
    {
        return $this->officialName;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return GsmTeams
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
     * Set country
     *
     * @param string $country
     * @return GsmTeams
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
     * Set address
     *
     * @param string $address
     * @return GsmTeams
     */
    public function setAddress($address)
    {
        $this->address = $address;
    
        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set addressNumber
     *
     * @param string $addressNumber
     * @return GsmTeams
     */
    public function setAddressNumber($addressNumber)
    {
        $this->addressNumber = $addressNumber;
    
        return $this;
    }

    /**
     * Get addressNumber
     *
     * @return string 
     */
    public function getAddressNumber()
    {
        return $this->addressNumber;
    }

    /**
     * Set addressExtra
     *
     * @param string $addressExtra
     * @return GsmTeams
     */
    public function setAddressExtra($addressExtra)
    {
        $this->addressExtra = $addressExtra;
    
        return $this;
    }

    /**
     * Get addressExtra
     *
     * @return string 
     */
    public function getAddressExtra()
    {
        return $this->addressExtra;
    }

    /**
     * Set addressZip
     *
     * @param string $addressZip
     * @return GsmTeams
     */
    public function setAddressZip($addressZip)
    {
        $this->addressZip = $addressZip;
    
        return $this;
    }

    /**
     * Get addressZip
     *
     * @return string 
     */
    public function getAddressZip()
    {
        return $this->addressZip;
    }

    /**
     * Set postalAddress
     *
     * @param string $postalAddress
     * @return GsmTeams
     */
    public function setPostalAddress($postalAddress)
    {
        $this->postalAddress = $postalAddress;
    
        return $this;
    }

    /**
     * Get postalAddress
     *
     * @return string 
     */
    public function getPostalAddress()
    {
        return $this->postalAddress;
    }

    /**
     * Set postalNumber
     *
     * @param string $postalNumber
     * @return GsmTeams
     */
    public function setPostalNumber($postalNumber)
    {
        $this->postalNumber = $postalNumber;
    
        return $this;
    }

    /**
     * Get postalNumber
     *
     * @return string 
     */
    public function getPostalNumber()
    {
        return $this->postalNumber;
    }

    /**
     * Set postalExtra
     *
     * @param string $postalExtra
     * @return GsmTeams
     */
    public function setPostalExtra($postalExtra)
    {
        $this->postalExtra = $postalExtra;
    
        return $this;
    }

    /**
     * Get postalExtra
     *
     * @return string 
     */
    public function getPostalExtra()
    {
        return $this->postalExtra;
    }

    /**
     * Set postalZip
     *
     * @param string $postalZip
     * @return GsmTeams
     */
    public function setPostalZip($postalZip)
    {
        $this->postalZip = $postalZip;
    
        return $this;
    }

    /**
     * Get postalZip
     *
     * @return string 
     */
    public function getPostalZip()
    {
        return $this->postalZip;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return GsmTeams
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    
        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return GsmTeams
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return GsmTeams
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set founded
     *
     * @param string $founded
     * @return GsmTeams
     */
    public function setFounded($founded)
    {
        $this->founded = $founded;
    
        return $this;
    }

    /**
     * Get founded
     *
     * @return string 
     */
    public function getFounded()
    {
        return $this->founded;
    }

    /**
     * Set clubColors
     *
     * @param string $clubColors
     * @return GsmTeams
     */
    public function setClubColors($clubColors)
    {
        $this->clubColors = $clubColors;
    
        return $this;
    }

    /**
     * Get clubColors
     *
     * @return string 
     */
    public function getClubColors()
    {
        return $this->clubColors;
    }

    /**
     * Set clothing
     *
     * @param string $clothing
     * @return GsmTeams
     */
    public function setClothing($clothing)
    {
        $this->clothing = $clothing;
    
        return $this;
    }

    /**
     * Get clothing
     *
     * @return string 
     */
    public function getClothing()
    {
        return $this->clothing;
    }

    /**
     * Set sponsor
     *
     * @param string $sponsor
     * @return GsmTeams
     */
    public function setSponsor($sponsor)
    {
        $this->sponsor = $sponsor;
    
        return $this;
    }

    /**
     * Get sponsor
     *
     * @return string 
     */
    public function getSponsor()
    {
        return $this->sponsor;
    }

    /**
     * Set details
     *
     * @param string $details
     * @return GsmTeams
     */
    public function setDetails($details)
    {
        $this->details = $details;
    
        return $this;
    }

    /**
     * Get details
     *
     * @return string 
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Set soccertype
     *
     * @param string $soccertype
     * @return GsmTeams
     */
    public function setSoccertype($soccertype)
    {
        $this->soccertype = $soccertype;
    
        return $this;
    }

    /**
     * Get soccertype
     *
     * @return string 
     */
    public function getSoccertype()
    {
        return $this->soccertype;
    }

    /**
     * Set fax
     *
     * @param string $fax
     * @return GsmTeams
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    
        return $this;
    }

    /**
     * Get fax
     *
     * @return string 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set sportid
     *
     * @param integer $sportid
     * @return GsmTeams
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

    /**
     * Set mapped
     *
     * @param string $mapped
     * @return GsmTeams
     */
    public function setMapped($mapped)
    {
        $this->mapped = $mapped;
    
        return $this;
    }

    /**
     * Get mapped
     *
     * @return string 
     */
    public function getMapped()
    {
        return $this->mapped;
    }
}
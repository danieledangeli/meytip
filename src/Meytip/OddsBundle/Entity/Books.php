<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Books
 *
 * @ORM\Table(name="books")
 * @ORM\Entity
 */
class Books
{
    /**
     * @var integer
     *
     * @ORM\Column(name="bid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bid;

    /**
     * @var string
     *
     * @ORM\Column(name="brokername", type="string", length=50, nullable=true)
     */
    private $brokername;

    /**
     * @var string
     *
     * @ORM\Column(name="affiliate_link", type="string", length=999, nullable=true)
     */
    private $affiliateLink;



    /**
     * Get bid
     *
     * @return integer 
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * Set brokername
     *
     * @param string $brokername
     * @return Books
     */
    public function setBrokername($brokername)
    {
        $this->brokername = $brokername;
    
        return $this;
    }

    /**
     * Get brokername
     *
     * @return string 
     */
    public function getBrokername()
    {
        return $this->brokername;
    }

    /**
     * Set affiliateLink
     *
     * @param string $affiliateLink
     * @return Books
     */
    public function setAffiliateLink($affiliateLink)
    {
        $this->affiliateLink = $affiliateLink;
    
        return $this;
    }

    /**
     * Get affiliateLink
     *
     * @return string 
     */
    public function getAffiliateLink()
    {
        return $this->affiliateLink;
    }
}
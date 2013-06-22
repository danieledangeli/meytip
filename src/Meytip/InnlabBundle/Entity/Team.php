<?php


namespace Meytip\InnlabBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Exclude;

/**
 * @ORM\Entity
 * @ORM\Table(name="team")
 */
class Team {

    public function  __construct()
    {
        $this->quotes = new ArrayCollection();
    }
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $logopath;

    /**
     * @ORM\Column(type="string", length=200)
     */
    protected $tagline;

    /**
     * @ORM\Column(type="string", length=240)
     */
    protected $teewtidea;


    /**
     * @Exclude
     * @ORM\OneToMany(targetEntity="Quote", mappedBy="team")
     */
    protected $quotes;

    /**
     * @ORM\Column(type="string", length=240, nullable=true)
     */
    protected $esito;


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
     * Set name
     *
     * @param string $name
     * @return Team
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
     * Set logopath
     *
     * @param string $logopath
     * @return Team
     */
    public function setLogopath($logopath)
    {
        $this->logopath = $logopath;
    
        return $this;
    }

    /**
     * Get logopath
     *
     * @return string 
     */
    public function getLogopath()
    {
        return $this->logopath;
    }

    /**
     * Set tagline
     *
     * @param string $tagline
     * @return Team
     */
    public function setTagline($tagline)
    {
        $this->tagline = $tagline;
    
        return $this;
    }

    /**
     * Get tagline
     *
     * @return string 
     */
    public function getTagline()
    {
        return $this->tagline;
    }

    /**
     * Set teewtidea
     *
     * @param string $teewtidea
     * @return Team
     */
    public function setTeewtidea($teewtidea)
    {
        $this->teewtidea = $teewtidea;
    
        return $this;
    }

    /**
     * Get teewtidea
     *
     * @return string 
     */
    public function getTeewtidea()
    {
        return $this->teewtidea;
    }

    /**
     * Add quotes
     *
     * @param \Meytip\InnlabBundle\Entity\Quote $quotes
     * @return Team
     */
    public function addQuote(\Meytip\InnlabBundle\Entity\Quote $quotes)
    {
        $this->quotes[] = $quotes;
    
        return $this;
    }

    /**
     * Remove quotes
     *
     * @param \Meytip\InnlabBundle\Entity\Quote $quotes
     */
    public function removeQuote(\Meytip\InnlabBundle\Entity\Quote $quotes)
    {
        $this->quotes->removeElement($quotes);
    }

    /**
     * Get quotes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuotes()
    {
        return $this->quotes;
    }

    public function __toString(){

        return $this->getName();
    }

    /**
     * Set esito
     *
     * @param string $esito
     * @return Team
     */
    public function setEsito($esito)
    {
        $this->esito = $esito;
    
        return $this;
    }

    /**
     * Get esito
     *
     * @return string 
     */
    public function getEsito()
    {
        return $this->esito;
    }
}
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 06/06/13
 * Time: 10.48
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\InnlabBundle\Entity;


use JMS\Serializer\Annotation\Exclude;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="quote")
 */
class Quote {

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="float")
     */
    protected $final;

    /**
     * @ORM\Column(type="float")
     */
    protected $nofinal;

   
    /**
     *
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="quotes")
     * @ORM\JoinColumn(name="team_id", referencedColumnName="id")
     */
    protected $team;


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
     * Set final
     *
     * @param float $final
     * @return Quote
     */
    public function setFinal($final)
    {
        $this->final = $final;
    
        return $this;
    }

    /**
     * Get final
     *
     * @return float 
     */
    public function getFinal()
    {
        return $this->final;
    }

    /**
     * Set nofinal
     *
     * @param float $nofinal
     * @return Quote
     */
    public function setNofinal($nofinal)
    {
        $this->nofinal = $nofinal;
    
        return $this;
    }

    /**
     * Get nofinal
     *
     * @return float 
     */
    public function getNofinal()
    {
        return $this->nofinal;
    }

    /**
     * Set team
     *
     * @param \Meytip\InnlabBundle\Entity\Team $team
     * @return Quote
     */
    public function setTeam(\Meytip\InnlabBundle\Entity\Team $team = null)
    {
        $this->team = $team;
    
        return $this;
    }

    /**
     * Get team
     *
     * @return \Meytip\InnlabBundle\Entity\Team 
     */
    public function getTeam()
    {
        return $this->team;
    }
}
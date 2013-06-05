<?php

namespace Meytip\OddsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Deloddsid
 *
 * @ORM\Table(name="deloddsid")
 * @ORM\Entity
 */
class Deloddsid
{
    /**
     * @var integer
     *
     * @ORM\Column(name="oddsid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $oddsid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime", nullable=true)
     */
    private $time;



    /**
     * Get oddsid
     *
     * @return integer 
     */
    public function getOddsid()
    {
        return $this->oddsid;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     * @return Deloddsid
     */
    public function setTime($time)
    {
        $this->time = $time;
    
        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime 
     */
    public function getTime()
    {
        return $this->time;
    }
}
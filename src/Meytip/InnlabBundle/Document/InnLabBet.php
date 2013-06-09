<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 06/06/13
 * Time: 14.28
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\InnlabBundle\Document;


use JMS\Serializer\Annotation\Exclude;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class InnLabBet
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     * @MongoDB\Index(unique=false)
     */
    protected $eventid;


    /**
     * @MongoDB\Float
     */
    protected $odds;

    /**
     * @MongoDB\String
     */
    protected $prono;

    /**
     * @MongoDB\String
     */
    protected $eventname;


    /**
     * @MongoDB\Date
     */
    protected $createdAt;


    /**
     * @Exclude
     * @var
     * @MongoDB\ReferenceOne(targetDocument="InnLabSched", inversedBy="eventbets")
     */
    private $sched;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set eventid
     *
     * @param string $eventid
     * @return self
     */
    public function setEventid($eventid)
    {
        $this->eventid = $eventid;
        return $this;
    }

    /**
     * Get eventid
     *
     * @return string $eventid
     */
    public function getEventid()
    {
        return $this->eventid;
    }

    /**
     * Set odds
     *
     * @param float $odds
     * @return self
     */
    public function setOdds($odds)
    {
        $this->odds = $odds;
        return $this;
    }

    /**
     * Get odds
     *
     * @return float $odds
     */
    public function getOdds()
    {
        return $this->odds;
    }

    /**
     * Set prono
     *
     * @param string $prono
     * @return self
     */
    public function setProno($prono)
    {
        $this->prono = $prono;
        return $this;
    }

    /**
     * Get prono
     *
     * @return string $prono
     */
    public function getProno()
    {
        return $this->prono;
    }

    /**
     * Set sched
     *
     * @param Meytip\InnlabBundle\Document\InnLabSched $sched
     * @return self
     */
    public function setSched(InnLabSched $sched)
    {
        $this->sched = $sched;
        return $this;
    }

    /**
     * Get sched
     *
     * @return Meytip\InnlabBundle\Document\InnLabSched $sched
     */
    public function getSched()
    {
        return $this->sched;
    }

    /**
     * Set eventname
     *
     * @param string $eventname
     * @return self
     */
    public function setEventname($eventname)
    {
        $this->eventname = $eventname;
        return $this;
    }

    /**
     * Get eventname
     *
     * @return string $eventname
     */
    public function getEventname()
    {
        return $this->eventname;
    }

    /**
     * Set createdAt
     *
     * @param date $createdAt
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return date $createdAt
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}

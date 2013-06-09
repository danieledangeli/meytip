<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 06/06/13
 * Time: 14.28
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\InnlabBundle\Document;


use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Meytip\InnLabBundle\Document\InnLabBet;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Expose;

/**
 * @MongoDB\Document
 */
class InnLabSched {

    public function __construct()
    {
        $this->eventbets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->moltiplicatore = 1;
    }


    /**
     * @var
     * @Groups({"login","feed"})
     * @MongoDB\ReferenceOne(targetDocument="User", inversedBy="scheds")
     */
    private $user;
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\ReferenceMany(targetDocument="InnLabBet", mappedBy="sched")
     * @Groups({"feed"})
     * @var eventbets[]
     */
    protected $eventbets;

    /**
     * @MongoDB\Float
     * @Groups({"feed"})
     */
    protected $moltiplicatore;

    /**
     * @MongoDB\Float
     * @Groups({"login","feed"})
     */
    protected $amount;

    /**
     * @MongoDB\Date
     */
    protected $createdAt;

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
     * Add eventbets
     *
     * @param Meytip\PendingbetBundle\Document\InnLabBet $eventbets
     */
    public function addEventbet(InnLabBet $eventbets)
    {
        $this->eventbets[] = $eventbets;
        $this->moltiplicatore = $eventbets->getOdds() * $this->moltiplicatore;
    }

    /**
    * Remove eventbets
    *
    * @param <variableType$eventbets
    */
    public function removeEventbet(InnLabBet $eventbets)
    {
        $this->eventbets->removeElement($eventbets);
    }

    /**
     * Get eventbets
     *
     * @return Doctrine\Common\Collections\Collection $eventbets
     */
    public function getEventbets()
    {
        return $this->eventbets;
    }

    /**
     * Set moltiplicatore
     *
     * @param float $moltiplicatore
     * @return self
     */
    public function setMoltiplicatore($moltiplicatore)
    {
        $this->moltiplicatore = $moltiplicatore;
        return $this;
    }

    /**
     * Get moltiplicatore
     *
     * @return float $moltiplicatore
     */
    public function getMoltiplicatore()
    {
        return $this->moltiplicatore;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return self
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float $amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set user
     *
     * @param Meytip\InnlabBundle\Document\User $user
     * @return self
     */
    public function setUser(\Meytip\InnlabBundle\Document\User $user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Meytip\InnlabBundle\Document\User $user
     */
    public function getUser()
    {
        return $this->user;
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

<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 08/06/13
 * Time: 12.19
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\InnlabBundle\Document;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\Expose;

/**
 * @MongoDB\Document
 */
class User extends BaseUser
{
    /**
     * @MongoDB\Id(strategy="auto")
     * @Groups({"admin"})
     */
    protected $id;

    /**
     * @MongoDB\String
     * @Groups({"login"})
     */
    protected $facebookid;


    /**
     * @MongoDB\String
     * @Groups({"login"})
     */
    protected $facebooklink;

    /**
     * @MongoDB\String
     * @Groups({"login"})
     */
    protected $name;

    /**
     * @MongoDB\ReferenceMany(targetDocument="InnLabSched", mappedBy="user")
     * @Groups({"details"})
     * @var scheds[]
     */
    protected $scheds;

    /**
     * @param mixed $leaverage
     */
    public function setLeaverage($leaverage)
    {
        $this->leaverage = $leaverage;
    }

    /**
     * @return mixed
     */
    public function getLeaverage()
    {
        return $this->leaverage;
    }

    /**
     * @Expose
     * @Groups({"login"})
     */
    protected $pending;

    /**
     * @Groups({"login"})
     */
    protected $challenge;

    /**
     * @MongoDB\Float
     * @Groups({"login"})
     */
    protected $cash;


    /**
     * @MongoDB\Float
     * @Groups({"login"})
     */
    protected $leaverage;


    public function __construct()
    {
        parent::__construct();
        $this->scheds = new ArrayCollection();
        $this->cash = 100;
        $this->challenge = 0;
        $this->pending = sizeof($this->scheds);
        // your own logic
    }

  

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
     * Set facebookid
     *
     * @param string $facebookid
     * @return self
     */
    public function setFacebookid($facebookid)
    {
        $this->facebookid = $facebookid;
        return $this;
    }

    /**
     * Get facebookid
     *
     * @return string $facebookid
     */
    public function getFacebookid()
    {
        return $this->facebookid;
    }

    /**
     * Get pending
     *
     * @return string $pending
     */
    public function getPending()
    {
        return $this->pending;
    }


    /**
     * Set pensing
     * @return self
     */
    public function setPending()
    {
        $this->pending = sizeof($this->getScheds());
        return $this;
    }
    /**
     * Set facebooklink
     *
     * @param string $facebooklink
     * @return self
     */
    public function setFacebooklink($facebooklink)
    {
        $this->facebooklink = $facebooklink;
        return $this;
    }

    /**
     * Get facebooklink
     *
     * @return string $facebooklink
     */
    public function getFacebooklink()
    {
        return $this->facebooklink;
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
     * Add scheds
     *
     * @param Meytip\InnlabBundle\Document\InnLabSched $scheds
     */
    public function addSched(\Meytip\InnlabBundle\Document\InnLabSched $scheds)
    {
        $this->scheds[] = $scheds;
    }

    /**
    * Remove scheds
    *
    * @param <variableType$scheds
    */
    public function removeSched(\Meytip\InnlabBundle\Document\InnLabSched $scheds)
    {
        $this->scheds->removeElement($scheds);
    }

    /**
     * Get scheds
     *
     * @return Doctrine\Common\Collections\Collection $scheds
     */
    public function getScheds()
    {
        return $this->scheds;
    }

    /**
     * Set cash
     *
     * @param float $cash
     * @return self
     */
    public function setCash($cash)
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * Get cash
     *
     * @return float $cash
     */
    public function getCash()
    {
        return $this->cash;
    }

    public function incrementCash($cash)
    {
        $this->cash = $cash + $this->cash;
    }
}

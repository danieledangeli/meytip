<?php

namespace Meytip\UserBundle\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use FOS\UserBundle\Model\User as BaseUser;
use Meytip\TournamentBundle\Model\BaseTournament;
use Doctrine\ORM\Mapping as ORM;

/**
 * Meytip Base User
 * @ORM\Entity
 * @ORM\Table(name="meytipuser")
 */
class User extends BaseUser {


    public function __construct() {
        $this->stats = new ArrayCollection();
        $this->tournaments = new ArrayCollection();
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $stats
     */
    public function setStats($stats)
    {
        $this->stats = $stats;
    }

    /**
     * @return mixed
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param mixed $tournaments
     */
    public function setTournaments($tournaments)
    {
        $this->tournaments = $tournaments;
    }

    /**
     * @return mixed
     */
    public function getTournaments()
    {
        return $this->tournaments;
    }

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="Meytip\StatsBundle\Entity\Statistic", mappedBy="user")
     */
    protected $stats;

    /**
     * @ORM\OneToMany(targetEntity="Meytip\TournamentBundle\Entity\TournamentUser", mappedBy="user")
     */
    protected $tournaments;



}
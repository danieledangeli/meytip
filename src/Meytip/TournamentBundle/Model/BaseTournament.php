<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 17/07/13
 * Time: 23.39
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\TournamentBundle\Model;
use Meytip\TournamentBundle\Exception\TournamentMaxUserReachedException;
use Meytip\UserBundle\Entity\User;
use Doctrine\ORM\Mapping as ORM;

abstract class BaseTournament {

    const STATE_OPEN = 'open'; //Available for change
    const STATE_LOCKED = 'locked'; //Locked for processing
    const STATE_CLOSED = 'closed'; //Closed after processing
    const STATE_EXPIRED = 'expired'; //Unprocessed and expired

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @var \DateTime $expiration
     *
     * @ORM\Column(name="expiration_date", type="datetime", nullable=true)
     */
    protected $expiration;

    /**
     * @var String $tournamentName
     *
     * @ORM\Column(name="tournament_name", type="string", nullable=false)
     */
    protected $tournamentName;

    /**
     * @var int $maxUsers
     *
     * @ORM\Column(name="max_user", type="string", nullable=true)
     */
    protected $maxUsers;

    /**
     * @ORM\Column(type="decimal", precision=8, scale=2, nullable=false)
     */
    protected $startCash;

    /**
     * @param int $maxUsers
     */
    public function setMaxUsers($maxUsers)
    {
        $this->maxUsers = $maxUsers;
    }

    /**
     * @param mixed $startCash
     */
    public function setStartCash($startCash)
    {
        $this->startCash = $startCash;
    }

    /**
     * @return mixed
     */
    public function getStartCash()
    {
        return $this->startCash;
    }

    /**
     * @return int
     */
    public function getMaxUsers()
    {
        return $this->maxUsers;
    }


    /**
     * @ORM\Column(type="datetime", name="created_at", nullable=true)
     *
     * @var \DateTime $createdAt
     */
    protected $createdAt;


    /**
     * @ORM\OneToMany(targetEntity="TournamentUser", mappedBy="tournament")
     */
    protected $tournamentUsers;

    /**
     * @param String $tournamentName
     */
    public function setTournamentName($tournamentName)
    {
        $this->tournamentName = $tournamentName;
    }

    /**
     * @return String
     */
    public function getTournamentName()
    {
        return $this->tournamentName;
    }


    /**
     * @param mixed $tournamentUsers
     */
    public function setTournamentUsers($tournamentUsers)
    {
        $this->tournamentUsers = $tournamentUsers;
    }

    /**
     * @return mixed
     */
    public function getTournamentsUser()
    {
        return $this->tournamentUsers;
    }


    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return \Meytip\TournamentBundle\Model\DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $expiration
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;
    }

    /**
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
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

    public function addTournamentUser($user)
    {
        if($this->maxUsers == null || $this->maxUsers > count($this->tournamentUsers)) {
            $this->tournamentUsers[] = $user;
        }
        else {
            throw new TournamentMaxUserReachedException('number of max user reached');
        }

    }

    public function isExpired()
    {
        if($this->getExpiration() > new \DateTime()) {

            return false;
        }

        return true;
    }

}
<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 18/07/13
 * Time: 1.10
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\TournamentBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Meytip Tournament User
 * @ORM\Entity
 * @ORM\Table(name="tournament_has_user")
 */
class TournamentUser {

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Meytip\UserBundle\Entity\User", inversedBy="stats")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\ManyToOne(targetEntity="Meytip\TournamentBundle\Entity\Tournament", inversedBy="tournamentUsers")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    protected $tournament;

    /**
     * @var integer $CASH
     *
     * @ORM\Column(name="CASH", type="float", nullable=false)
     */
    protected $cash;

    /**
     * @param int $cash
     */
    public function setCash($cash)
    {
        $this->cash = $cash;
    }

    /**
     * @return int
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * @param mixed $tournament
     */
    public function setTournament($tournament)
    {
        $this->tournament = $tournament;
    }

    /**
     * @return mixed
     */
    public function getTournament()
    {
        return $this->tournament;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

}
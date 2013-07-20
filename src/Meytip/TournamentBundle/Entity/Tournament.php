<?php

namespace Meytip\TournamentBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Meytip\TournamentBundle\Model\BaseTournament;
use Doctrine\ORM\Mapping as ORM;


/**
 * Meytip ClassicTournament
 * @ORM\Entity
 * @ORM\Table(name="tournament")
 */
class Tournament extends BaseTournament {

    public function __construct()
    {
        $this->tournamentUsers = new ArrayCollection();
    }
}
<?php

namespace Meytip\TournamentBundle\Manager;


use Meytip\TournamentBundle\Model\BaseTournament;
use Meytip\UserBundle\Entity\User;

class TournamentManager{

    public function getTournamentUserOrderByCash(BaseTournament $tournament)
    {
        return $tournament->getTournamentsUser();
    }

    public function addUserInTournament(User $user, BaseTournament $tournament) {

    }
}
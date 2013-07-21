<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 21/07/13
 * Time: 14.25
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\TournamentBundle\Service;


use Meytip\TournamentBundle\Entity\Tournament;
use Meytip\TournamentBundle\Entity\TournamentUser;
use Meytip\TournamentBundle\Model\BaseTournament;
use Meytip\UserBundle\Entity\User;

class TournamentUserFactory {

    public function createTournamentUser(BaseTournament $tournament, User $user)
    {
        $tournamentUser = new TournamentUser();
        $tournamentUser->setCash($tournament->getStartCash());
        $tournamentUser->setUser($user);
        $tournamentUser->setTournament($tournament);

        return $tournamentUser;
    }
}
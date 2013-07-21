<?php

namespace Meytip\TournamentBundle\Manager;

use Doctrine\Common\Persistence\ObjectManager;
use Meytip\TournamentBundle\Exception\TournamentMaxUserReachedException;
use Meytip\TournamentBundle\Exception\UserAlreadyEnrollTournamentException;
use Meytip\TournamentBundle\Model\BaseTournament;
use Meytip\TournamentBundle\Service\TournamentUserFactory;
use Meytip\UserBundle\Entity\User;

class TournamentManager {

    protected $em;
    protected $tournamentUserFactory;

    public function __construct(ObjectManager $em, TournamentUserFactory $tournamentUserFactory)
    {
        $this->em = $em;
        $this->tournamentUserFactory = $tournamentUserFactory;
    }

    public function getTournamentUserOrderByCash(BaseTournament $tournament)
    {
        return $tournament->getTournamentsUser();
    }

    public function addUserInTournament(User $user, BaseTournament $tournament)
    {
        $tournamentUserRepo = $this->em->getRepository('MeytipTournamentBundle:TournamentUser');
        $tournamentUser = $tournamentUserRepo
            ->findOneBy(array('user' => $user, 'tournament' => $tournament));
        if($tournamentUser == null) {
            $tournamentUser = $this->tournamentUserFactory->createTournamentUser($tournament,$user);
            try {
                $tournament->addTournamentUser($user);
                $this->em->persist($tournamentUser);
                $this->em->flush();

                return $tournamentUser;
            }catch (TournamentMaxUserReachedException $e)
            {
                return null;
            }

        }

        throw new UserAlreadyEnrollTournamentException;
    }
}
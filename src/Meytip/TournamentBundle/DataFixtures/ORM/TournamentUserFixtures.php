<?php


namespace Meytip\TournamentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Meytip\TournamentBundle\Entity\TournamentUser;

class TournamentUserFixtures extends AbstractFixture implements OrderedFixtureInterface{

    function load(ObjectManager $manager)
    {
        $tournamentUser = new TournamentUser();
        $tournamentUser->setCash(100);
        $tournamentUser->setUser($this->getReference('user1'));
        $tournamentUser->setTournament($this->getReference(('baseTournament')));
        $manager->persist($tournamentUser);

        $tournamentUser = new TournamentUser();
        $tournamentUser->setCash(100);
        $tournamentUser->setUser($this->getReference('user2'));
        $tournamentUser->setTournament($this->getReference(('baseTournament')));
        $manager->persist($tournamentUser);

        $manager->flush();
    }

    function getOrder()
    {
        return "5";
    }
}
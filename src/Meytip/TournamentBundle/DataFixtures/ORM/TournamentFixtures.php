<?php

namespace Meytip\TournamentBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\Doctrine;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Meytip\TournamentBundle\Entity\Tournament;

class TournamentFixtures extends AbstractFixture implements OrderedFixtureInterface {


    function load(ObjectManager $manager)
    {
        $tournament = new Tournament();
        $tournament->setCreatedAt(new \DateTime('2013-11-11'));
        $tournament->setExpiration(new \DateTime('2013-12-12'));
        $tournament->setTournamentName('Serie A league');
        $manager->persist($tournament);
        $this->addReference('baseTournament', $tournament);
        $manager->flush();
    }

    function getOrder()
    {
       return 2;
    }
}
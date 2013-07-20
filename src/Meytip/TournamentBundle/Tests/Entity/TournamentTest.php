<?php


class TournamentTest extends \PHPUnit_Framework_TestCase {

    public function testIsNotExpired()
    {
        $tournament = new \Meytip\TournamentBundle\Entity\Tournament();
        $tournament->setExpiration(new \DateTime('2013-07-20'));
        $this->assertEquals($tournament->isExpired() ,true);
    }
}
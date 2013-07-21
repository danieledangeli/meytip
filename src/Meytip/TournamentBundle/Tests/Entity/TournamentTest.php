<?php
namespace Meytip\TournamentBundle\Tests\Entity;

class TournamentTest extends \PHPUnit_Framework_TestCase {

    /**
     * @dataProvider getExpirationDate
     */
    public function testIsNotExpired(\DateTime $expiration, $expected)
    {
        $tournament = new \Meytip\TournamentBundle\Entity\Tournament();
        $tournament->setExpiration($expiration);
        $this->assertEquals($tournament->isExpired() ,$expected);
    }

    public function getExpirationDate()
    {
        return
        array(
            array(
                new \DateTime('2014-01-01'),
                false
            ),
            array(
                new \DateTime('2012-01-01'),
                true
            )
        );
    }

    public function testMaxUser()
    {
       $tournamentUser = $this->getMockBuilder('\Meytip\TournamentBundle\Entity\TournamentUser')
            ->disableOriginalConstructor()
            ->getMock();
        $tournament = new \Meytip\TournamentBundle\Entity\Tournament();
        $tournament->setMaxUsers(20);
        $tournament->addTournamentUser($tournamentUser);
        $this->assertEquals(1,count($tournament->getTournamentsUser()));
    }

    /**
     * @expectedException \Meytip\TournamentBundle\Exception\TournamentMaxUserReachedException
     */
    public function testMaxUserKO()
    {
        $tournamentUser = $this->getMockBuilder('\Meytip\TournamentBundle\Entity\TournamentUser')
            ->disableOriginalConstructor()
            ->getMock();
        $tournament = new \Meytip\TournamentBundle\Entity\Tournament();
        $tournament->setMaxUsers(1);
        $tournament->addTournamentUser($tournamentUser);
        $this->assertEquals(1,count($tournament->getTournamentsUser()));
        $tournament->addTournamentUser($tournamentUser);
        $this->assertEquals(1,count($tournament->getTournamentsUser()));
    }
}
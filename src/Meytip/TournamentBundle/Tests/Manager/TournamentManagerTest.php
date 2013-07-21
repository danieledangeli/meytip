<?php
namespace Meytip\TournamentBundle\Tests\Manager;

class TournamentManagerTest extends \PHPUnit_Framework_TestCase{

    protected $tournamentManager;
    protected $entityRepositoryMock;
    protected $tournamentUserFactoryMock;
    protected $entityManagerMock;

    public function setUp()
    {
        $this->entityManagerMock = $this->getMockBuilder('\Doctrine\Common\Persistence\ObjectManager')
            ->disableOriginalConstructor()
            ->getMock();
        $this->entityRepositoryMock = $this
            ->getMockBuilder('\Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $this->entityManagerMock
            ->expects($this->any())
            ->method('getRepository')
            ->will($this->returnValue($this->entityRepositoryMock));
        $this->tournamentUserFactoryMock = $this
            ->getMockBuilder('Meytip\TournamentBundle\Service\TournamentUserFactory')
            ->getMock();
        $this->tournamentManager =
            new \Meytip\TournamentBundle\Manager\TournamentManager($this->entityManagerMock, $this->tournamentUserFactoryMock);

    }
    public function testAddUserInTournament()
    {
        $that = $this;
        $userMock = $this->getMockBuilder('Meytip\UserBundle\Entity\User')
            ->getMock();
        $userMock->expects($this->once())
            ->method('getUsername')
            ->will($this->returnValue('daniele'));
        $tournamentMock = $this->getMockBuilder('Meytip\TournamentBundle\Entity\Tournament')
            ->getMock();
        $tournamentUserMock = $this->getMockBuilder('Meytip\TournamentBundle\Entity\TournamentUser')
            ->getMock();
        $tournamentUserMock->expects($this->once())
            ->method('getCash')
            ->will($this->returnValue(2000));
        $this->entityRepositoryMock
            ->expects($this->once())
            ->method('findOneBy')
            ->will($this->returnValue(null));
        $this->tournamentUserFactoryMock
            ->expects($this->once())
            ->method('createTournamentUser')
            ->will($this->returnValue($tournamentUserMock));
        $tournamentUserMock->expects($this->once())
            ->method('getUser')
            ->will($this->returnValue($userMock));
       $this->entityManagerMock->expects($this->once())
           ->method('persist')
           ->will($this->returnCallback(
               function($tournamentUserPersisted) use($that)
               {
                   $that->assertEquals(2000,$tournamentUserPersisted->getCash());
                   $that->assertEquals('daniele',$tournamentUserPersisted->getUser()->getUsername());
               }
           ));
       $this->tournamentManager
            ->addUserInTournament($userMock, $tournamentMock);
    }

    /**
     * @expectedException \Meytip\TournamentBundle\Exception\UserAlreadyEnrollTournamentException
     */
    public function testAddUserInTournamentKO()
    {
        $userMock = $this->getMockBuilder('Meytip\UserBundle\Entity\User')
            ->getMock();
        $userMock->expects($this->any())
            ->method('getUsername')
            ->will($this->returnValue('daniele'));
        $tournamentMock = $this->getMockBuilder('Meytip\TournamentBundle\Entity\Tournament')
            ->getMock();
        $tournamentUserMock = $this->getMockBuilder('Meytip\TournamentBundle\Entity\TournamentUser')
            ->getMock();
        $tournamentUserMock->expects($this->any())
            ->method('getCash')
            ->will($this->returnValue(2000));
        $this->entityRepositoryMock
            ->expects($this->once())
            ->method('findOneBy')
            ->will($this->returnValue($tournamentUserMock));
        $this->tournamentUserFactoryMock
            ->expects($this->any())
            ->method('createTournamentUser')
            ->will($this->returnValue($tournamentUserMock));
        $tournamentUserMock->expects($this->any())
            ->method('getUser')
            ->will($this->returnValue($userMock));

        $this->tournamentManager
            ->addUserInTournament($userMock, $tournamentMock);
    }
}
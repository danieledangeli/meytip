<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 16/06/13
 * Time: 17.23
 * To change this template use File | Settings | File Templates.
 */

use Meytip\InnlabBundle\Services\UpdateUser;
class UpdateUserTest extends  \PHPUnit_Framework_TestCase {


    public function testUserScheds()
    {

        $team= $this->getMock('\Meytip\InnlabBundle\Entity\Team');
        $team->expects($this->atLeastOnce())
            ->method('getEsito')
            ->will($this->returnValue("finale sì"));


        // Now, mock the repository so it returns the mock of the employee
        $teamRepository = $this->getMockBuilder('\Doctrine\ORM\EntityRepository')
            ->disableOriginalConstructor()
            ->getMock();
        $teamRepository->expects($this->atLeastOnce())
            ->method('find')
            ->will($this->returnValue($team));

        $entityManagerMock = $this->getMockBuilder('Doctrine\ORM\EntityManager')
            ->disableOriginalConstructor()
            ->getMock();
        $entityManagerMock->expects($this->atLeastOnce())
            ->method('getRepository')
            ->will($this->returnValue($teamRepository));

        $eventCalc = new \Meytip\InnlabBundle\Services\EventCalc($entityManagerMock);

        $updateUserHelper = new \Meytip\InnlabBundle\Services\SchedHelper($entityManagerMock,$eventCalc);

        $user = new \Meytip\InnlabBundle\Document\User();
        $user->setCash(34);

        $bet = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet->setEventid(2);
        $bet->setProno("finale sì");

        $bet2 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet2->setEventid(2);
        $bet2->setProno("finale sì");


        $sched = new \Meytip\InnlabBundle\Document\InnLabSched();
        $sched->addEventbet($bet);
        $sched->addEventbet($bet2);
        $sched->setMoltiplicatore(32);
        $sched->setAmount(2);

        $bet = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet->setEventid(2);
        $bet->setProno("finale no");

        $bet2 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet2->setEventid(2);
        $bet2->setProno("finale sì");

        $sched2 = new \Meytip\InnlabBundle\Document\InnLabSched();
        $sched2->addEventbet($bet);
        $sched2->addEventbet($bet2);
        $sched2->setMoltiplicatore(32);
        $sched2->setAmount(2);


        $user->addSched($sched);
        $user->addSched($sched2);
        $updateUserHelper->updateUserScheds($user);
        $this->assertEquals(98,$user->getCash());
        $this->assertTrue($user->getScheds()[0]->getWin());
        $this->assertFalse($user->getScheds()[1]->getWin());
    }

}

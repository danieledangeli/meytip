<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 16/06/13
 * Time: 17.23
 * To change this template use File | Settings | File Templates.
 */


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
class EventCalcTest extends WebTestCase  {

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * {@inheritDoc}
     */
    public function setUp()
    {
        static::$kernel = static::createKernel();
        static::$kernel->boot();
        $this->em = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
    }
    public function testBet()
    {
        $bet = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet->setEventid(1);
        $bet->setProno("finale sì");

        $bet2 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet2->setEventid(1);
        $bet2->setProno("finale sì");

        $sched = new \Meytip\InnlabBundle\Document\InnLabSched();
        $sched->addEventbet($bet);
        $sched->addEventbet($bet2);

        $helper = new \Meytip\InnlabBundle\Services\EventCalc($this->em);
        $bets = $helper->calculateInnLabEvents($sched->getEventbets());

        $this->assertEquals($bets[0]->getChecked(),"true");
        $this->assertEquals($bets[1]->getChecked(),"false");

    }
    public function testSched()
    {
        $bet = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet->setEventid(1);
        $bet->setProno("finale sì");

        $bet2 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet2->setEventid(1);
        $bet2->setProno("finale sì");

        $bet3 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet3->setEventid(1);
        $bet3->setProno("finale no");

        $bet4 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet4->setEventid(1);
        $bet4->setProno("finale sì");

        $sched = new \Meytip\InnlabBundle\Document\InnLabSched();
        $sched->addEventbet($bet);
        $sched->addEventbet($bet2);

        $sched2 = new \Meytip\InnlabBundle\Document\InnLabSched();
        $sched2->addEventbet($bet3);
        $sched2->addEventbet($bet4);

        $helper = new \Meytip\InnlabBundle\Services\EventCalc($this->em);
        $helper->calculateInnLabEvents($sched->getEventbets());
        $helper->calculateInnLabEvents($sched2->getEventbets());

        $this->assertTrue($helper->checkSched($sched));
        $this->assertFalse($helper->checkSched($sched2));

    }

    public function testSchedCompleted()
    {
        $bet = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet->setEventid(1);
        $bet->setProno("finale sì");

        $bet2 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet2->setEventid(1);
        $bet2->setProno("finale sì");

        $bet3 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet3->setEventid(1);
        $bet3->setProno("finale no");

        $bet4 = new \Meytip\InnlabBundle\Document\InnLabBet();
        $bet4->setEventid(1);
        $bet4->setProno("finale sì");

        $sched = new \Meytip\InnlabBundle\Document\InnLabSched();
        $sched->addEventbet($bet);
        $sched->addEventbet($bet2);

        $sched2 = new \Meytip\InnlabBundle\Document\InnLabSched();
        $sched2->addEventbet($bet3);
        $sched2->addEventbet($bet4);

        $helper = new \Meytip\InnlabBundle\Services\EventCalc($this->em);
        $helper->calculateInnLabEvents($sched->getEventbets());

        $this->assertTrue($helper->isSchedCompleted($sched));
        $this->assertFalse($helper->isSchedCompleted($sched2));

    }


    /**
     * {@inheritDoc}
     */
    public function tearDown()
    {
        parent::tearDown();
        $this->em->close();
    }
}

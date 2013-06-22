<?php
/**
 * Created by JetBrains PhpStorm.
 * User: erlangb
 * Date: 16/06/13
 * Time: 17.13
 * To change this template use File | Settings | File Templates.
 */

namespace Meytip\InnlabBundle\Services;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Meytip\InnlabBundle\Document\InnLabBet;
use Meytip\InnlabBundle\Document\InnLabSched;
use Meytip\InnlabBundle\Document\User;

class SchedHelper {

    private $em;
    private $helperEvent;
    public function __construct(EntityManager $em, EventCalc $helperEvent)
    {
        $this->em = $em;
        $this->helperEvent = $helperEvent;
    }


    public function updateUserScheds(User $user)
    {
        $userScheds = $user->getScheds();


        foreach($userScheds as $sched){


            if(!is_null($sched->getWin()))
            {

            $this->helperEvent->calculateInnLabEvents($sched->getEventbets());



             if($this->helperEvent->isSchedCompleted($sched))
             {

                if($this->helperEvent->checkSched($sched)){

                    $moltiplicatore = $sched->getMoltiplicatore();
                    $amount = $sched->getAmount();
                    $vincita = $moltiplicatore*$amount;
                    $sched->setWin(true);
                    $user->incrementCash($vincita);

                }
                else{
                    $sched->setWin(false);

                }
               }
                //anyway remove from Mongodb??
            }
        }

    }

}
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

class EventCalc {

    private $em;
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    /**
     * Prende in input gli eventi di una schedina e setta se sono stati presi o non presi
     * @param $bets
     * @return $updated bets
     */
    public function calculateInnLabEvents($bets)
    {
        foreach($bets as $bet)
        {
            $eventId = $bet->getEventId();
            $team = $this->em->getRepository('MeytipInnlabBundle:Team')->find($eventId);

            if($team != null)
            {
                if($team->getEsito() != null)
                {
                    $prono = $bet->getProno();
                    if($prono == $team->getEsito())
                    {
                        $bet->setChecked("true");

                    }
                    else{

                        $bet->setChecked("false");
                    }
                }
            }
        }

        return $bets;


    }

    public function checkSched(InnLabSched $sched)
    {
        foreach($sched->getEventbets() as $bet)
        {
            if($bet->getChecked() == null) return false;
            if($bet->getChecked() == "false")
            {
                return false;
            }
        }

        return true;
     }

    public function isSchedCompleted(InnLabSched $sched)
    {
        foreach($sched->getEventbets() as $bet)
        {
            if(is_null($bet->getChecked())) return false;


        }

        return true;
    }


}
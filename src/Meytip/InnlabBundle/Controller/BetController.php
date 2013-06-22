<?php

namespace Meytip\InnlabBundle\Controller;

use FOS\RestBundle\View\View;
use JMS\Serializer\SerializationContext;
use Meytip\InnlabBundle\Document\InnLabSched;
use Meytip\InnlabBundle\Form\InnLabBetType;
use MongoDBODMProxies\__CG__\Meytip\PendingbetBundle\Document\InnLabBet;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;

class BetController extends Controller
{
    /**
     * Collection post action
     * @var Request $request
     * @return View|array
     */
    public function postBetAction(Request $request)
    {
        $content =  $this->getRequest()->getContent();

        if (!empty($content))
        {
            $params = json_decode($content, true); // 2nd param to get as array
        }

        $amount = intval($params['amount']);
        $checked = false;
        if(is_int($amount))
        {
            if($amount > 0) $checked = true;
        }


        $dm = $this->get('doctrine_mongodb')->getManager();
        $fbid = $params['user'];
        $user = $dm->getRepository('MeytipInnlabBundle:User')->findOneBy(array('facebookid' => $fbid));

        if(!$checked || is_null($user) || $user->getCash() < $amount)
        {
            $view = View::create()->
                setStatusCode(200)->
                setFormat('json')->
                setData('errorcash');
            return $this->get('fos_rest.view_handler')->handle($view);
        }
        else{
            $sched = new InnLabSched();
            $time = new \DateTime();
            $sched->setCreatedAt($time);
            $sched->setAmount($amount);

            $user->setCash($user->getCash() - $sched->getAmount());
            $user->setPending();
            $sched->setUser($user);



        $bets = $params['bets'];
        foreach($bets as $bet)
        {
            $inbet = new \Meytip\InnlabBundle\Document\InnLabBet();
            $inbet->setOdds($bet['odds']);
            $inbet->setEventid($bet['eventid']);
            $inbet->setProno($bet['prono']);
            $inbet->setCreatedAt($time);
            $sched->addEventbet($inbet);
            $inbet->setSched($sched);

            $dm->persist($inbet);
        }

        $dm->persist($sched);
        $dm->flush();

        $contest = new SerializationContext();
        $contest->setGroups(array('login'));
        $view = View::create()->
            setStatusCode(200)->
            setFormat('json')->
            setSerializationContext($contest)->
            setData($sched);
        return $this->get('fos_rest.view_handler')->handle($view);
        }
    }

}

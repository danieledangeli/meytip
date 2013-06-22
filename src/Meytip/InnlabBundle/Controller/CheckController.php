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
use Symfony\Component\HttpFoundation\Response;

class CheckController extends Controller
{
    public function checkAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $users_mongo = $dm->getRepository('MeytipInnlabBundle:User')->findAll();
        $users = array();
        $users = $users_mongo;

        $ret = array();

        foreach($users as $u)
        {
            $oldcash = $u->getCash();
            $this->container->get('user_helper_calc')->updateUserScheds($u);
            $ret[] = array("user" => $u->getName(), "cash" => $u->getCash(), "oldcash" => $oldcash);
        }


        $dm->flush();
        return new Response(json_encode($ret));


    }

    public function resultAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $users_mongo = $this->get('doctrine_mongodb')
            ->getManager()
            ->createQueryBuilder('MeytipInnlabBundle:User')
            ->sort('cash', 'DESC')
            ->getQuery()
            ->execute();

        $users = array();
        $users = $users_mongo;

        $i = 1;
        foreach($users as $u)
        {
           echo $i.") ".$u->getName()." ".(int)$u->getCash()."\n";
           $i++;
        }



        return new Response();


    }
    public function repairAction()
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $users_mongo = $dm->getRepository('MeytipInnlabBundle:User')->findAll();
        $users = array();
        $users = $users_mongo;


        foreach($users as $u)
        {
            $u->setEmail($u->getUsername());
        }


        $dm->flush();
        return new Response(json_encode('flushed'));


    }

}

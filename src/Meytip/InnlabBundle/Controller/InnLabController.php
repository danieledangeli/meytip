<?php

namespace Meytip\InnlabBundle\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class InnLabController extends Controller
{
    public function innlabStandsAction()
    {

        $users_mongo = $this->get('doctrine_mongodb')
            ->getManager()
            ->createQueryBuilder('MeytipInnlabBundle:User')
            ->sort('leaverage', 'DESC')
            ->getQuery()
            ->execute();

        $users = array();

        foreach($users_mongo as $us){

            $us->setCash((int)$us->getCash());
            $users[] = $us;
        }


        $contest = new SerializationContext();
        $contest->setGroups(array('login'));
        $view = \FOS\RestBundle\View\View::create()->
            setStatusCode(200)->
            setFormat('json')->
            setSerializationContext($contest)->
            setData($users);
        return $this->get('fos_rest.view_handler')->handle($view);


    }



}

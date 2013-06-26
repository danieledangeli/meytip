<?php

namespace Meytip\InnlabBundle\Controller;
use FOS\RestBundle\Controller\Annotations\View;
use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;

class InnLabController extends Controller
{
    public function eventsAction()
    {
        $authuser = $this->container->get('security.context')->getToken()->getUser();
        $quotes = array();

        if(!is_null($authuser))
        {
            $em = $this->getDoctrine()->getManager();

            $entities = $em->getRepository('MeytipInnlabBundle:QuoteFinale')->findAll();

            foreach($entities as $entity)
            {
                $quotes[] = $entity;

            }

        }
        else{

            $url = $this->container->get('router')->generate('fos_user_security_login');

            return new RedirectResponse($url);
        }

        return $this->render('MeytipInnlabBundle:Innlab:index.html.twig', array(
            'quotes' => $quotes,
            'user' => $authuser,
        ));


    }

    public function innlabfeedAction()
    {
        $authuser = $this->container->get('security.context')->getToken()->getUser();
        $quotes = array();

        if(!is_null($authuser))
        {
            $feeds = $this->feeds();
            //$userfeeds = $this->getUserFeed();
        }
        else{

            $url = $this->container->get('router')->generate('fos_user_security_login');

            return new RedirectResponse($url);
        }

        return $this->render('MeytipInnlabBundle:Innlab:feed.html.twig', array(
            'feeds' => $feeds,
            'user' => $authuser,
            'userfeeds' => array(),
        ));


    }


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

    public function feeds()
    {
        $repository = $this->get('doctrine.odm.mongodb.document_manager')
            ->getRepository('MeytipInnlabBundle:InnLabSched');
        $feeds = $repository->findAll();
        $em = $this->getDoctrine()->getManager();

        $entities = array();



        foreach($feeds as $f) {
            $bets =  $f->getEventbets();

            $data = array();
            $data['feed'] = $f->getId();
            $data['moltiplicatore'] = $f->getMoltiplicatore();
            $data['amount'] = $f->getAmount();
            $data['vincita'] = $f->getMoltiplicatore() * $f->getAmount();
            $data['username'] = $f->getUser()->getUserName();

            //$data->feed = $f;
            $quotes = array();
            foreach($bets as $bet) {

                $eventbet = array();
                $event = $em->getRepository('MeytipInnlabBundle:Team')->find($bet->getEventid());

                $eventbet['name'] = $event->getName();
                if($bet->getProno() == 'finale sì' || $bet->getProno() == 'finale no' )
                {
                    $eventbet['quote'] = $event->getQuotes()[0];
                }
                else{
                    $eventbet['quote'] = $event->getFinalequote()[0];
                    $eventbet['eventid'] = $bet->getEventid();
                    $eventbet['odds'] = $bet->getOdds();
                    $eventbet['prono'] = $bet->getProno();

                    $quotes[] = $eventbet;
                }



            }
            $data['quote'] = $quotes;

            $entities[] = $data;
        }

        return $entities;
    }

    public function getUserFeed($fbid)
    {
        $dm = $this->get('doctrine_mongodb')->getManager();
        $em = $this->getDoctrine()->getManager();
        $user = $dm->getRepository('MeytipInnlabBundle:User')->findOneBy(array('facebookid' => $fbid));

        $feeds = $user->getScheds();
        $entities = array();
        foreach($feeds as $f) {
            if($f->getAmount() > 0)
            {
                $bets =  $f->getEventbets();

                $data = array();
                $data['feed'] = $f->getId();
                $data['moltiplicatore'] = $f->getMoltiplicatore();
                $data['amount'] = $f->getAmount();
                $data['vincita'] = $f->getMoltiplicatore() * $f->getAmount();


                //$data->feed = $f;
                $quotes = array();
                foreach($bets as $bet) {

                    $eventbet = array();
                    $event = $em->getRepository('MeytipInnlabBundle:Team')->find($bet->getEventid());

                    $eventbet['name'] = $event->getName();
                    if($bet->getProno() == 'finale sì' || $bet->getProno() == 'finale no' )
                    {
                        $eventbet['quote'] = $event->getQuotes()[0];
                    }
                    else{
                        $eventbet['quote'] = $event->getFinalequote()[0];
                    }
                    $eventbet['eventid'] = $bet->getEventid();
                    $eventbet['odds'] = $bet->getOdds();
                    $eventbet['prono'] = $bet->getProno();

                    $quotes[] = $eventbet;


                }
                $data['quote'] = $quotes;

                $entities[] = $data;
            }
        }

        return $entities;

    }

}

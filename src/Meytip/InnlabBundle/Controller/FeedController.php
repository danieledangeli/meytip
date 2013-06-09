<?php

namespace Meytip\InnlabBundle\Controller;

use FOS\RestBundle\View\View;
use JMS\Serializer\SerializationContext;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToStringTransformer;

class FeedController extends Controller
{

    /**
     * @Rest\View
     */
    public function getFeedsAction()
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

            //$data->feed = $f;
            $quotes = array();
            foreach($bets as $bet) {

                $eventbet = array();
                $event = $em->getRepository('MeytipInnlabBundle:Team')->find($bet->getEventid());

                $eventbet['name'] = $event->getName();
                $eventbet['quote'] = $event->getQuotes()[0];
                $eventbet['eventid'] = $bet->getEventid();
                $eventbet['odds'] = $bet->getOdds();
                $eventbet['prono'] = $bet->getProno();

                $quotes[] = $eventbet;


            }
            $data['quote'] = $quotes;

            $entities[] = $data;
        }
        $view = View::create()->
            setStatusCode(200)->
            setFormat('json')->
            //setSerializationContext($contest)->
            setData($entities);
        return $this->get('fos_rest.view_handler')->handle($view);

        
    } // "get_feeds"   [GET] /feeds

    /**
     * @Rest\View
     */
    public function getFeedAction($offsetsup)
    {

        $repository = $this->get('doctrine.odm.mongodb.document_manager')
            ->getRepository('MeytipInnlabBundle:InnLabSched');
        $feeds = $this->get('doctrine_mongodb')
            ->getManager()
            ->createQueryBuilder('MeytipInnlabBundle:InnLabSched')
            ->limit($offsetsup)
            ->skip($offsetsup - 10)
            ->sort('createdAt','DESC')
            ->getQuery()
            ->execute();

        $em = $this->getDoctrine()->getManager();

        $entities = array();



        foreach($feeds as $f) {
            $bets =  $f->getEventbets();

            $data = array();
            $data['feed'] = $f->getId();
            $data['fbid'] = $f->getUser()->getFacebookid();
            $data['name'] = $f->getUser()->getName();
            $format = new DateTimeToStringTransformer("F j, Y, g:i a");

            $data['createdAt'] = $format->transform($f->getCreatedAt());

            //$data->feed = $f;
            $quotes = array();
            foreach($bets as $bet) {

                $eventbet = array();
                $event = $em->getRepository('MeytipInnlabBundle:Team')->find($bet->getEventid());

                $eventbet['name'] = $event->getName();
                $eventbet['quote'] = $event->getQuotes()[0];
                $eventbet['eventid'] = $bet->getEventid();
                $eventbet['odds'] = $bet->getOdds();
                $eventbet['prono'] = $bet->getProno();

                $quotes[] = $eventbet;


            }
            $data['quote'] = $quotes;

            $entities[] = $data;
        }

        $view = View::create()->
            setStatusCode(200)->
            setFormat('json')->

            setData($entities);
        return $this->get('fos_rest.view_handler')->handle($view);


    } // "get_feeds"   [GET] /feeds/$min/$sup/


}

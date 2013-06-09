<?php

namespace Meytip\PendingbetBundle\Controller;

use Meytip\PendingbetBundle\Document\InnLabBet;
use Meytip\PendingbetBundle\Document\InnLabSched;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        $repository = $this->get('doctrine.odm.mongodb.document_manager')
            ->getRepository('MeytipInnlabBundle:InnLabSched');
        $val = $repository->findAll();

        foreach($val as $v)
        {
            echo 'molt'. $v->getMoltiplicatore();
        }
        
        return new Response('Created product id ');
       // return $this->render('MeytipPendingbetBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Meytip\OddsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        //$matches = $this->getDoctrine()->getRepository('MeytipOddsBundle:Matches')->findAll();
        $leagues = $this->container->get('odds_filter')->getMatchesCountry('Italy');

        die(var_dump($leagues));
        return $this->render('MeytipOddsBundle:Default:index.html.twig', array('name' => $name));
    }
}

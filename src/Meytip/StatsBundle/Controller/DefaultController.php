<?php

namespace Meytip\StatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MeytipStatsBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Meytip\TournamentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MeytipTournamentBundle:Default:index.html.twig', array('name' => $name));
    }
}

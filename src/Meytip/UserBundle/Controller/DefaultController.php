<?php

namespace Meytip\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MeytipUserBundle:Default:index.html.twig', array('name' => $name));
    }
}

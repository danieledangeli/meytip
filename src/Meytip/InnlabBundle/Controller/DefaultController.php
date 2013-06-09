<?php

namespace Meytip\InnlabBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {

        return $this->render('MeytipInnlabBundle:Default:index.html.twig', array('name' => $name));
    }
}

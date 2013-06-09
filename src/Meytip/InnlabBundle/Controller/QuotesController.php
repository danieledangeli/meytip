<?php

namespace Meytip\InnlabBundle\Controller;

use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

class QuotesController extends Controller
{

    /**
     * @Rest\View
     */
    public function getQuotesAction()
    {
        $entities = $this->getDoctrine()->getRepository('MeytipInnlabBundle:Quote')->findAll();
        $view = View::create()->
            setStatusCode(200)->
            setFormat('json')->
            setData($entities);
        return $this->get('fos_rest.view_handler')->handle($view);

    } // "get_quotes"   [GET] /quotes


}

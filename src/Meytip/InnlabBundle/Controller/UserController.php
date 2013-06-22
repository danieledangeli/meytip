<?php

namespace Meytip\InnlabBundle\Controller;


use FOS\RestBundle\View\View;
use FOS\RestBundle\View\ViewHandler;
use JMS\Serializer\SerializationContext;
use Meytip\InnlabBundle\Document\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;

use Symfony\Component\BrowserKit\Request;

class UserController extends Controller
{

    /**
     * Collection post action
     * @var Request $request
     * @return View|array
     */
    public function postLoginAction()
    {

        $content =  $this->getRequest()->getContent();

        if (!empty($content))
        {
            $params = json_decode($content, true); // 2nd param to get as array
        }
        $user = null;
        if(isset($params['username'])){

            $userManager = $this->container->get('fos_user.user_manager');
            $user = $userManager->findUserByUsernameOrEmail($params['username']);

            if($user == null)
            {


                $user = $userManager->createUser();
                $user->setUsername($params['username']);
                $user->setEmail($params['username']);
                $user->setPassword('fakepwd');
                $user->setFacebookid($params['id']);
                $user->setFacebooklink($params['link']);
                $user->setName($params['name']);
                $dm = $this->get('doctrine_mongodb')->getManager();
                $dm->persist($user);
                $dm->flush();


            }

            $user->setPending();

            $contest = new SerializationContext();
            $contest->setGroups(array('login'));
            $view = View::create()->
                setStatusCode(200)->
                setFormat('json')->
                setSerializationContext($contest)->
                setData($user);
            return $this->get('fos_rest.view_handler')->handle($view);


        }


        $view = View::create()->
            setStatusCode(200)->
            setFormat('json')->
            setData(array('error' => 'mail not setted'));
        return $this->get('fos_rest.view_handler')->handle($view);

    }
}

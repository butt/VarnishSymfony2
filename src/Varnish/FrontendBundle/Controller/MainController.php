<?php

namespace Varnish\FrontendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MainController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        $response = $this->render('VarnishFrontendBundle:Main:index.html.twig');
        $response->setSharedMaxAge(600);

        return $response;
    }
    /**
     * @Route("/news",name="newsView")
     */
    public function newsViewAction()
    {
        $response = $this->render('VarnishFrontendBundle:Main:newsView.html.twig');
        $response->setSharedMaxAge(60);

        return $response;
    }

}

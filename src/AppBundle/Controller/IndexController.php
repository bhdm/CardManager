<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IndexController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Template("AppBundle:Index:index.html.twig")
     */
    public function indexAction(Request $request)
    {
        return [];
    }

    /**
     * @Route("/register-card/skzi")
     */
    public function registerCardSkziAction(){

    }
}

<?php

namespace LoginBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('LoginBundle:Default:index.html.twig');
    }

    /**
     * @Route("/principal")
     */

    public function dashboardAction()
    {
    	return $this->render('LoginBundle:Default:dashboard.html.twig');
    }
 
}

<?php

namespace ItechSup\NotationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/default/")
     */
    public function indexAction()
    {
        return $this->render('ItechSupNotationBundle:Default:index.html.twig');
    }
}

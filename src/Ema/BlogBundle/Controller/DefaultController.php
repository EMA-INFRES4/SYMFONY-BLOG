<?php

namespace Ema\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EmaBlogBundle:Default:index.html.twig', array('name' => $name));
    }
}

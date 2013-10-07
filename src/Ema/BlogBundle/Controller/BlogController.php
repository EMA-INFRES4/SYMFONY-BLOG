<?php

namespace Ema\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Ema\EmaBlogBundle\Entity\Post;

class BlogController extends Controller
{
    public function indexAction()
    {
        return $this->render('EmaBlogBundle:Blog:index.html.twig');
    }

    public function postAction($id)
    {
		$post = $this->getDoctrine()
			->getRepository('EmaBlogBundle:Post')
			->find($id);
        return $this->render('EmaBlogBundle:Blog:post.html.twig' , array('post' => $post));
    }
}

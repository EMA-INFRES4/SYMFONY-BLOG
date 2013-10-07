<?php

namespace Ema\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Ema\BlogBundle\Entity\Post;
use JMS\SecurityExtraBundle\Annotation\Secure;

class BlogController extends Controller
{
	public function indexAction()
    {
		return $this->render('EmaBlogBundle:Blog:index.html.php');
    }

    public function listAction()
    {
		$posts = $this->getDoctrine()->getManager()
			->createQuery('SELECT p FROM EmaBlogBundle:Post p')
			->execute();

		return $this->render(
			'EmaBlogBundle:Blog:list.html.twig',
			array('posts' => $posts)
        );
    }

	public function postAction($id)
	{
        return $this->render('EmaBlogBundle:Blog:post.html.twig' , array('post' => $this->_getAPost($id)));
	}

	public function editAction($id)
	{
		$post = $this->_getAPost($id);
		$form = $this->createFormBuilder($post)
			->add('titre' , 'text')
			->add('url_alias' , 'text')
			->add('content' , 'text')
			->add('save' , 'submit')
			->getForm();
        return $this->render('EmaBlogBundle:Blog:edit.html.twig' , array('form' => $form->createView()));
	}

	private function _getAPost($id)
	{
		return $this->getDoctrine()
			->getRepository('EmaBlogBundle:Post')
			->find($id);
	}
}

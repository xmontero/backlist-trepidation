<?php

namespace Xmontero\BacklistTrepidationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
	public function indexAction()
	{
		return $this->render( 'XmonteroBacklistTrepidationBundle:Default:index.html.twig' );
	}
}

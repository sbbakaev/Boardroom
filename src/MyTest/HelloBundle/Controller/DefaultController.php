<?php

namespace MyTest\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('MyTestHelloBundle:Default:index.html.twig', array('name' => $name));
    }
}

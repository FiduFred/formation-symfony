<?php

namespace ParkBundle2\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ParkBundle:Default:index.html.twig', array('name' => $name));
    }

    public function totoAction($name)
    {
        return $this->render('ParkBundle:Default:index.html.twig', array('name' => $name));
    }

}



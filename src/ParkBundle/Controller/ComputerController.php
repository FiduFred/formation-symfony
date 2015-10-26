<?php

namespace ParkBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ComputerController extends Controller
{
    /**
     * @Route("/list")
     * @Template()
     */
    public function listAction()
    {
        return $this->render('ParkBundle:Computer:list.html.twig', array('computerlist' =>$this->getlistAction()));
    }


    private function getlistAction()
    {
        return array(
            array('id' => 1,
                'name' => 'Ordinateur 1',
                'ip' => '192.168.0.1',
                'enabled' => true),
            array('id' => 2,
                'name' => 'Ordinateur 2',
                'ip' => '192.168.0.2',
                'enabled' => true),
            array('id' => 3,
                'name' => 'Ordinateur 3',
                'ip' => '192.168.0.3',
                'enabled' => false),
            array('id' => 4,
                'name' => 'Ordinateur 4',
                'ip' => '192.168.0.4',
                'enabled' => true)
        );
    }
}

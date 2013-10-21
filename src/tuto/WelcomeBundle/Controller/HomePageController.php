<?php

namespace tuto\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('tutoWelcomeBundle:Homepage:index.html.twig', array('name' => $name));
    }
}

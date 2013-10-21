<?php

namespace tuto\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomepageController extends Controller
{
    public function indexAction($page)
    {

        return $this->render('tutoWelcomeBundle:Homepage:index.html.twig', array('page' => $page));
    }
}

<?php

namespace tuto\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomepageController extends Controller
{
    /**
     * @param $page
     * @return \Symfony\Component\HttpFoundation\Response
     * @Template()
     */
    public function indexAction($page)
    {
        $this->get('session')->getFlashBag()->add('nom', $this->get('session')->get('user_name'));
       // return $this->render('tutoWelcomeBundle:Homepage:index.html.twig', array('page' => $page));
    }

    /**
     * @param $nom
     */
    public function whoAmIAction($nom)
    {
        $session = $this->get('session');
        $session->set('user_name',$nom);
        return $this->redirect($this->generateUrl('homepage'));

    }
}

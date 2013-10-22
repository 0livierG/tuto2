<?php

namespace tuto\WelcomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use tuto\WelcomeBundle\Form\Type\ContactType;
use tuto\WelcomeBundle\Form\Handler\ContactHandler;


class ContactController extends Controller
{
    public function indexAction(){
        $form = $this->get('form.factory')->create(new ContactType());
        $request=$this->getRequest();

        $handler=new ContactHandler($form, $request, $this->get('mailer'));

        $process=$handler->process();
        if($process){
            $this->get('session')->getFlashBag()->add('notice', 'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.');
        }


        return $this->render('tutoWelcomeBundle:Contact:index.html.twig',array('form'=>$form->createView()));
    }
}

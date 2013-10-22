<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Utilisateur
 * Date: 22/10/13
 * Time: 07:41
 * To change this template use File | Settings | File Templates.
 */

namespace tuto\WelcomeBundle\Form\Handler;
use Symfony\Component\Form\Form;
use Symfony\Component\HttpFoundation\Request;

class ContactHandler {

    protected $form;
    protected $request;
    protected $mailer;

    /**
     * @param Form $form
     * @param Request $request
     * @param $mailer
     */
    public function __construct(Form $form, Request $request, $mailer){
        $this->form = $form;
        $this->request = $request;
        $this->mailer = $mailer;
    }

    /**
     * @return bool
     */
    public function process(){
        if($this->request->getMethod()=="POST"){
            $this->form->submit($this->request);
            $data=$this->form->getData();
            $this->onSuccess($data);
            return true;
        }
        return false;
    }

    protected function onSuccess($data){
        $message = \Swift_Message::newInstance()
            ->setContentType('text/html')
            ->setSubject($data['subject'])
            ->setFrom($data['email'])
            ->setTo('xxxxxx@gmail.com')
            ->setBody($data['content']);

        $this->mailer->send($message);
    }
}
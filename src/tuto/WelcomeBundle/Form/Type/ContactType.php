<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Utilisateur
 * Date: 21/10/13
 * Time: 16:05
 * To change this template use File | Settings | File Templates.
 */

namespace tuto\WelcomeBundle\Form\Type;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


class ContactType extends  AbstractType{


    public function buildForm(FormBuilderInterface $builder, array $options){
        $builder->add('email', 'email')
            ->add('subject', 'text')
            ->add('content', 'textarea');
    }




    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'Contact';
    }
}
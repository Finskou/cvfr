<?php

namespace App\Controller;

use App\Entity\Form;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use App\Entity\Contact;


class PageController extends AbstractController
{
    /**
     * @Route("/", name="page")
     */
    public function index()
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

   
    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('page/apropos.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function createAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createFormBuilder($contact)
            ->add('Name', TextType::class, array('label' => 'name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('Email', TextType::class, array('label' => 'email', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('Sujet', TextType::class, array('label' => 'sujet', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')))
            ->add('Message', TextareaType::class, array('label' => 'message', 'attr' => array('class' => 'form-control')))
            ->add('Envoyer', SubmitType::class, array('label' => 'submit', 'attr' => array('class' => 'btn btn-dark', 'style' => 'margin-top:15px')))
            ->getForm();

            $form->handleRequest($request);

        return $this->render('page/contact.html.twig', [ 
            'form' => $form]);
    }

    /**
     * @Route("/education", name="education")
     */
    public function edu() 
    {
        return $this->render('page/education.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }
   
     /**
     * @Route("/login", name="login") 
     */
    public function login() 
    {
        return $this->render('security/login.html.twig');
    }

}

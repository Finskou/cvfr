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
    public function new(Request $request)
    {
        $foorm = new Form();
        // $foorm -> setTitle('Titre');
        // $foorm -> setContent('Votre message');
        // $foorm -> setEmail('Votre e-mail');
    
        // $form = $this->createFormBuilder($foorm)
        //                 ->add('title', TextType::class, ['label' => 'Titre'])
        //                 ->add('content', TextareaType::class, ['label' => 'Votre message'])
        //                 ->add('email', EmailType::class, ['label' => 'E-mail'])
        //                 ->add('send', SubmitType::class, ['label' => 'Envoyer'])
        //                 ->getForm();

        return $this->render('page/contact.html.twig');
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

<?php
namespace App\Controller;//va siempre para poder usar el use

use Symfony\Component\HttpFoundation\Response;//use App\Controller\TestController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Entity\Persona;

class UsuarioController extends Controller
{
    /**
    * @Route("/usuario_new")
    */
    public function new()
    {
        $em = $this->getDoctrine()->getManager();
        $user= new Usuario();
        $user->setUserbame();
        $user->setLastname();
        $user->setFirstname();
        $user->setEmail();

        $em->persist($persona);
        $em->flush();
         return $this->render('TestController/personas.html.twig', array( 'var' => "personas en la BD", 'persons'=>$persons));
        
    }
    /**
    * @Route("/usuario_update")
    */
    /**
    * @Route("/usuario_destroy")
    */
  
}

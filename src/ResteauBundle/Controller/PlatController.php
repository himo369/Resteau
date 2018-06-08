<?php

namespace ResteauBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use ResteauBundle\Entity\Plat;
class PlatController extends Controller
{
    public function ajoutAction(Request $request)
    {
       $plat=new Plat();
       $form=$this->createForm('ResteauBundle\Form\PlatType',$plat);
       $form->handlerequest($request);
       if($form->isSubmitted() && $form->isValid()){
           $em=$this->getDoctrine()->getManager();
           $em->persist($plat);
           $em->flush($plat);   
       }
       return $this->render('ResteauBundle::ajoutPlat.html.twig',array(
           'plat' =>$plat,
           'form' =>$form->CreateView(),
       ));
    }
}

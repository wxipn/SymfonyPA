<?php
namespace Annonces\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoriesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('AnnoncesBundle:Categories')->findAll();   
        
        return $this->render('AnnoncesBundle:Default:categories/modulesUsed/menu.html.twig', array('categories' => $categories));
    }
}


<?php

namespace Annonces\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AnnoncesController extends Controller
{
    
    public function categorieAction($categorie)
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AnnoncesBundle:Annonces')->byCategorie($categorie);
        
        return $this->render('AnnoncesBundle:Default:annonces/layout/annoncecategorie.html.twig', array('annonces' => $annonces));
    }
    
    public function indexAction()
    {
        return $this->render('AnnoncesBundle:Default:index.html.twig');
    }
    
    public function annonceListeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $annonces = $em->getRepository('AnnoncesBundle:Annonces')->findAll();

        
        return $this->render('AnnoncesBundle:Default:annonces/layout/annoncecategorie.html.twig', array('annonces' => $annonces));
    }
    
    public function annonceAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $annonce = $em->getRepository('AnnoncesBundle:Annonces')->find($id);
        
        return $this->render('AnnoncesBundle:Default:annonce.html.twig', array('annonce' => $annonce));
    }
    
    public function contactAction()
    {
        return $this->render('AnnoncesBundle:Default:contact.html.twig');
    }
    
}

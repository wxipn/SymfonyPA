<?php
namespace Annonces\AnnoncesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PlanController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnnoncesBundle:Default:plan.html.twig');
    }
}


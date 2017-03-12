<?php
namespace Annonces\AnnoncesBundle\Controller;

use Annonces\AnnoncesBundle\Entity\Annonces;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Annonces\AnnoncesBundle\Form\publicationType;
use Symfony\Component\HttpFoundation\Request;


class PublicationController extends Controller
{
    public function publicationFormulaireAction(Request $request){
        $annonce = new Annonces();
        $form = $this->createForm(publicationType::class, $annonce);
            
       
        if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            if($request->isMethod('POST'))
            {
                $form->handleRequest($request);

                $em = $this->getDoctrine()->getManager();
                $annonce->setUtilisateur($this->getUser());

                $em->persist($annonce);
                $em->flush();

                $this->addFlash('notice', 'Votre annonce a bien été enregistrée !');
                return $this->redirectToRoute('annonces_unite', array('id' => $annonce->getId()));

            }
        }else{
            return $this->redirectToRoute('fos_user_registration_register');
        }
        return $this->render('AnnoncesBundle:Default:publication.html.twig', array('form' => $form->createView()));
    }
}


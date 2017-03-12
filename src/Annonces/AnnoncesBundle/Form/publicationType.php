<?php
namespace Annonces\AnnoncesBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class publicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options) {
        parent::buildForm($builder, $options);
     
            $builder->add('categorie', EntityType::class, array('class' => 'Annonces\AnnoncesBundle\Entity\Categories'))
                    ->add('titre', TextType::class)
                    ->add('Description', TextareaType::class)
                    ->add('envoyer', SubmitType::class)
                    ->getForm();
    }
    
    public function getName(){
        return 'annonces_annoncesbundle_publication';
    }
}

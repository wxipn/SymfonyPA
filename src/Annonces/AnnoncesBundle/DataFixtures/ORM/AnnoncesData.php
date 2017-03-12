<?php
// src/AppBundle/DataFixtures/ORM/LoadUserData.php
namespace Utilisateurs\UtilisateursBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Annonces\AnnoncesBundle\Entity\Annonces;


class AnnoncesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $annonce = new Annonces();
        $annonce->setTitre('Titre annonce 1');
        $annonce->setDescription('Une rapide description de l\'annonce numéro 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.');
        $annonce->setImage('');
        $annonce->setCategorie($this->getReference('categorie1'));
        $annonce->setUtilisateur($this->getReference('utilisateur1'));
        $manager->persist($annonce);
        
        $annonce2 = new Annonces();
        $annonce2->setTitre('Titre annonce 2');
        $annonce2->setDescription('Une rapide description de l\'annonce numéro 2. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.');
        $annonce2->setImage('');
        $annonce2->setCategorie($this->getReference('categorie2'));
        $annonce2->setUtilisateur($this->getReference('utilisateur2'));
        $manager->persist($annonce2);
        
        $annonce3 = new Annonces();
        $annonce3->setTitre('Titre annonce 3');
        $annonce3->setDescription('Une rapide description de l\'annonce numéro 3. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.');
        $annonce3->setImage('');
        $annonce3->setCategorie($this->getReference('categorie3'));
        $annonce3->setUtilisateur($this->getReference('utilisateur3'));
        $manager->persist($annonce3);
        
        $annonce4 = new Annonces();
        $annonce4->setTitre('Titre annonce 4');
        $annonce4->setDescription('Une rapide description de l\'annonce numéro 4. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.');
        $annonce4->setImage('');
        $annonce4->setCategorie($this->getReference('categorie4'));
        $annonce4->setUtilisateur($this->getReference('utilisateur4'));
        $manager->persist($annonce4);
        
        $annonce5 = new Annonces();
        $annonce5->setTitre('Titre annonce 5');
        $annonce5->setDescription('Une rapide description de l\'annonce numéro 5. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a tortor vitae ante luctus interdum sit amet eu sapien.');
        $annonce5->setImage('');
        $annonce5->setCategorie($this->getReference('categorie5'));
        $annonce5->setUtilisateur($this->getReference('utilisateur5'));
        $manager->persist($annonce5);
        
        $manager->flush();
    }
    
    public function getOrder()
    {
        return 3;
    }
}
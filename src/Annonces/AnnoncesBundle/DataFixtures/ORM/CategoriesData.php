<?php
// src/AppBundle/DataFixtures/ORM/LoadUserData.php
namespace Annonces\AnnoncesBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Annonces\AnnoncesBundle\Entity\Categories;

class CategoriesData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $categorie = new Categories();
        $categorie->setNom('Category 1');
        $manager->persist($categorie);
        
        $categorie2 = new Categories();
        $categorie2->setNom('Dapibus ac facilisis in');
        $manager->persist($categorie2);
        
        $categorie3 = new Categories();
        $categorie3->setNom('Morbi leo risus');
        $manager->persist($categorie3);
        
        $categorie4 = new Categories();
        $categorie4->setNom('Porta ac consectetur ac');
        $manager->persist($categorie4);
        
        $categorie5 = new Categories();
        $categorie5->setNom('Vestibulum at eros');
        $manager->persist($categorie5);
        
        $manager->flush();
        
        $this->addReference('categorie1', $categorie);
        $this->addReference('categorie2', $categorie2);
        $this->addReference('categorie3', $categorie3);
        $this->addReference('categorie4', $categorie4);
        $this->addReference('categorie5', $categorie5);
    }
    
    public function getOrder()
    {
        return 2;
    }
}
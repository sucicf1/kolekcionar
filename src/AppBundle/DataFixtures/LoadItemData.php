<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class LoadItemData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
    {
        $item1=new \AppBundle\Entity\Item();
        $item1->setName('predmet1');
        $item1->setPrice(423);
        $item1->setQualityPercent(40);
        $item1->setUser($this->getReference('korisnik1'));
        $manager->persist($item1);
        
        $item2=new \AppBundle\Entity\Item();
        $item2->setName('predmet2');
        $item2->setPrice(7575);
        $item2->setQualityPercent(34);
        $item2->setUser($this->getReference('korisnik2'));
        $manager->persist($item2);
        
        $manager->flush();
    }
    
    public function getOrder() 
    {
        return 2;
    }
}

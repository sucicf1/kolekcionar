<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadUserData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager) 
    {
        $user1=new \AppBundle\Entity\User();
        $user1->setEmail('korisnik1@korisnik1.com');
        $user1->setUsername('korisnik1');
        $user1->setPassword('korisnik1');
        $user1->setName('korisnik1');
        $user1->setSurname('nesto');
        
        $user2=new \AppBundle\Entity\User();
        $user2->setEmail('korisnik2@korisnik2.com');
        $user2->setUsername('korisnik2');
        $user2->setPassword('korisnik2');
        $user2->setName('korisnik2');
        $user2->setSurname('prezime');
        
        $manager->persist($user1);
        $manager->persist($user2);
        $manager->flush();
        
        $this->addReference('korisnik1', $user1);
        $this->addReference('korisnik2', $user2);
    }
    
    public function getOrder() 
    {
        return 1;
    }
}

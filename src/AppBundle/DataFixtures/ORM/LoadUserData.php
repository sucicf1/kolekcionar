<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;


class LoadUserData extends AbstractFixture implements OrderedFixtureInterface,  ContainerAwareInterface
{
    private $container;
    
    public function setContainer(ContainerInterface $container=null) 
    {
        $this->container=$container;
    }

    public function load(ObjectManager $manager) 
    {
        $userManager=$this->container->get('fos_user.user_manager');
        
        $user1=$userManager->createUser();
        $user1->setEmail('korisnik1@korisnik1.com');
        $user1->setUsername('korisnik1');
        $user1->setPlainPassword('korisnik1');
        $user1->setName('korisnik1');
        $user1->setSurname('nesto');
        $user1->setEnabled(true);
        $user1->setRoles(array('ROLE_USER'));
        
        $user2=$userManager->createUser();
        $user2->setEmail('korisnik2@korisnik2.com');
        $user2->setUsername('korisnik2');
        $user2->setPlainPassword('korisnik2');
        $user2->setName('korisnik2');
        $user2->setSurname('prezime');
        $user2->setEnabled(true);
        $user2->setRoles(array('ROLE_USER'));
        
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

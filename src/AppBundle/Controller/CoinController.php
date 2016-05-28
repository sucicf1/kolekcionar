<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CoinController extends Controller
{
    public function indexAction() 
    {
        $coins = $this->getDoctrine()->getRepository('AppBundle:Coin')
                ->findBy(array('user'=> $this->getUser()));
        
        return $this->render('Coin/index.html.twig', array('coins'=>$coins));
    }
}

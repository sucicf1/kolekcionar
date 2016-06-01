<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Coin;

use AppBundle\Form\CoinType;

class CoinController extends Controller
{
    public function indexAction() 
    {
        $coins = $this->getDoctrine()->getRepository('AppBundle:Coin')
                ->findBy(array('user'=> $this->getUser()));
        
        return $this->render('Coin/index.html.twig', array('coins'=>$coins));
    }
    
    public function indexSortAction($ascOrDesc, $orderParameter) 
    {   
        if ($orderParameter!='id' && $orderParameter!='name'
            && $orderParameter!='price' && $orderParameter!='productionDate' 
            && $orderParameter!='qualityPercent' && $orderParameter!='printedValue'
            && $orderParameter!='isCurrentlyInUse' && $orderParameter!='isRare'
            && $orderParameter!='productionMaterial') 
                throw new \Exception('Coin can not be ordered by '.$orderParameter);
        
        $coins = $this->getDoctrine()->getRepository('AppBundle:Coin')
                ->findBy(array('user'=> $this->getUser()),
                        array($orderParameter => $ascOrDesc));
        
        return $this->render('Coin/index.html.twig', array('coins'=>$coins));
    }
    
    public function coinAddAction(Request $request) 
    {
        $coin=new Coin();
        $form= $this->createForm(CoinType::class, $coin);
                
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $coin->setUser($this->getUser());
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($coin);
            $em->flush();
            
            return $this->redirectToRoute('coin_index');
        }
        
        return $this->render('coin/add.html.twig', array('form'=> $form->createView()));
    }
    
    public function coinEditAction(Request $request,$id) 
    {
        $em=$this->getDoctrine()->getManager();
        
        $coin = $em->getRepository('AppBundle:Coin')
                ->find($id);
        
        if (!$coin)
        {
            throw $this->createNotFoundException();
        }
        
        $form= $this->createForm(CoinType::class, $coin);
        $form->handleRequest($request);
        
        if($coin->getUser()!=$this->getUser())
                throw new \Exception('AccessDenied');
        
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            
            return $this->redirectToRoute('coin_index');
        }
        
        return $this->render('coin/add.html.twig', array('form'=> $form->createView()));
    }
}

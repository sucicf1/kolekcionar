<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Item;

use AppBundle\Form\ItemType;

class ItemController extends Controller
{
    public function indexAction() 
    {
        $items = $this->getUser()->getItems();
        
        return $this->render('Item/index.html.twig', array('items'=>$items));
    }
    
    public function indexSortAction($ascOrDesc, $orderParameter) 
    {   
        if ($orderParameter!='id' && $orderParameter!='name'
            && $orderParameter!='price' && $orderParameter!='productionDate' 
            && $orderParameter!='qualityPercent') 
                throw new \Exception('Item can not be ordered by '.$orderParameter);
        
        $items = $this->getDoctrine()->getRepository('AppBundle:Item')
                ->findBy(array('user'=> $this->getUser()),
                        array($orderParameter => $ascOrDesc));
        
        return $this->render('Item/index.html.twig', array('items'=>$items));
    }
    
    public function itemAddAction(Request $request) 
    {
        $item=new Item();
        $form= $this->createForm(ItemType::class, $item);
                
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $item->setUser($this->getUser());
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();
            
            return $this->redirectToRoute('item_index');
        }
        
        return $this->render('item/add.html.twig', array('form'=> $form->createView()));
    }
    
    public function itemEditAction(Request $request,$id) 
    {
        $em=$this->getDoctrine()->getManager();
        
        $item = $em->getRepository('AppBundle:Item')
                ->find($id);
        
        if (!$item)
        {
            throw $this->createNotFoundException();
        }
        
        $form= $this->createForm(ItemType::class, $item);
        $form->handleRequest($request);
        
        if($item->getUser()!=$this->getUser())
                throw new \Exception('AccessDenied');
        
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            
            return $this->redirectToRoute('item_index');
        }
        
        return $this->render('item/add.html.twig', array('form'=> $form->createView()));
    }
}

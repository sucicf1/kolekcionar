<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
                throw new \Exception('Item can not be ordered by'.$orderParameter);
        
        $items = $this->getDoctrine()->getRepository('AppBundle:Item')
                ->findBy(array('user'=> $this->getUser()),
                        array($orderParameter => $ascOrDesc));
        
        return $this->render('Item/index.html.twig', array('items'=>$items));
    }
}

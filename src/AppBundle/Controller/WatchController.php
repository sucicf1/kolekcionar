<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Watch;

use AppBundle\Form\WatchType;

class WatchController extends Controller
{
    public function indexAction() 
    {
        $watchs = $this->getDoctrine()->getRepository('AppBundle:Watch')
                ->findBy(array('user'=> $this->getUser()));
        
        return $this->render('Watch/index.html.twig', array('watchs'=>$watchs));
    }
    
    public function indexSortAction($ascOrDesc, $orderParameter) 
    {   
        if ($orderParameter!='id' && $orderParameter!='name'
            && $orderParameter!='price' && $orderParameter!='productionDate' 
            && $orderParameter!='qualityPercent' && $orderParameter!='model'
            && $orderParameter!='isMechanical' && $orderParameter!='isDigital'
            && $orderParameter!='maxDepthWaterResistant' 
            && $orderParameter!='isDisplayingCurrentDate'
            && $orderParameter!='isDisplayingDayName' && $orderParameter!='batteryType') 
                throw new \Exception('Watch can not be ordered by '.$orderParameter);
        
        $watchs = $this->getDoctrine()->getRepository('AppBundle:Watch')
                ->findBy(array('user'=> $this->getUser()),
                        array($orderParameter => $ascOrDesc));
        
        return $this->render('Watch/index.html.twig', array('watchs'=>$watchs));
    }
    
    public function watchAddAction(Request $request) 
    {
        $watch=new Watch();
        $form= $this->createForm(WatchType::class, $watch);
                
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid())
        {
            $watch->setUser($this->getUser());
            
            $em=$this->getDoctrine()->getManager();
            $em->persist($watch);
            $em->flush();
            
            return $this->redirectToRoute('watch_index');
        }
        
        return $this->render('watch/add.html.twig', array('form'=> $form->createView()));
    }
    
    public function watchEditAction(Request $request,$id) 
    {
        $em=$this->getDoctrine()->getManager();
        
        $watch = $em->getRepository('AppBundle:Watch')
                ->find($id);
        
        if (!$watch)
        {
            throw $this->createNotFoundException();
        }
        
        $form= $this->createForm(WatchType::class, $watch);
        $form->handleRequest($request);
        
        if($watch->getUser()!=$this->getUser())
                throw new \Exception('AccessDenied');
        
        if($form->isSubmitted() && $form->isValid())
        {
            $em->flush();
            
            return $this->redirectToRoute('watch_index');
        }
        
        return $this->render('watch/add.html.twig', array('form'=> $form->createView()));
    }
}

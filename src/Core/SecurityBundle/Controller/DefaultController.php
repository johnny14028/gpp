<?php

namespace Core\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $request = $this->get('request');
        //echo $request->getLocale();
        //$this->vd($this->get('translator'));
         $translated = $this->get('translator')->trans('Symfony2 is great');
         //var_dump($translated);
        //return $this->render('CoreSecurityBundle:Default:index.html.twig');
         return new Response($translated);
    }
    
    public function vd($var){
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }
}

<?php

namespace Core\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller {

    public function indexAction() {
        $request = $this->get('request');
        //echo $request->getLocale();
        //$this->vd($this->get('translator'));
        $name = 'Susy';
        //$translated = $this->get('translator')->trans('Hello '.name,array('%name%' => $name));
        $translated1 = $this->get('translator')->trans('Hello %name%', array('%name%' => $name),'messages');
        
$translated = $this->get('translator')->transChoice(
        'Hay una manzana|Hay %count% manzanas',
        2,
        array('%count%' => 2)
    );        
        return $this->render('CoreSecurityBundle:Default:index.html.twig', array('text' => $translated, 'name'=>$name, 'saludo'=>$translated1));
    }

    public function vd($var) {
        echo "<pre>";
        print_r($var);
        echo "</pre>";
    }

}

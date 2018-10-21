<?php

namespace AccesoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AccesoBundle:Default:index.html.twig');
    }

    public function dashboardAction(){
      
        return $this->render('AccesoBundle:Default:dashboard.html.twig' );
    }

    /*public function tecnicoPrincipalAction(){
      
        return $this->render('LoginBundle:Default:tecnico_principal.html.twig' );
    }

    public function administradorPrincipalAction(){

    	return $this->render('LoginBundle:Default:admin_principal.html.twig');
    }

    public function reportesAction(){

        return $this->render('LoginBundle:Default:reportes.html.twig');
    }

    public function atencionAction(){

        return $this->render('LoginBundle:Default:atenciones.html.twig');
    }

    public function historialAction(){
        return $this->render('LoginBundle:Default:historial.html.twig');
    }
   
    public function atencionTecnicoAction(){
        return $this->render('LoginBundle:Default:atencion_tecnico.html.twig');
    }*/
}

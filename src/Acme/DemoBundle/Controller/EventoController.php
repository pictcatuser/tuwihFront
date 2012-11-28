<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class EventoController extends Controller
{
    public function mostrarAction($slug)
    {
		$evento=$slug;
        return $this->render('AcmeDemoBundle:Evento:evento.html.twig', array('evento'=>$evento));
    }
}
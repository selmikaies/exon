<?php

namespace ExonBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ExonBundle:Default:index.html.twig');
    }

    public function adminindexAction()
    {
        return $this->render('ExonBundle:admin:homepage.html.twig');
    }





}

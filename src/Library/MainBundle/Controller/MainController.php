<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        return $this->render('LibraryMainBundle:Main:index.html.twig');
    }
    
    public function adminAction() {
        return $this->render('LibraryMainBundle:Main:adminPanel.html.twig');
    }
}

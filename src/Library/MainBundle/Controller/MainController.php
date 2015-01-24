<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{
    /**
     * Renders a homepage' view
     * @return Response
     */
    public function indexAction()
    {
        return $this->render('LibraryMainBundle:Main:index.html.twig');
    }
}

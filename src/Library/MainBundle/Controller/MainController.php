<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Renders homepage
 * @author Piotrek
 */
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
    
    /**
     * Used when user without permission tries to access admin panel
     * @return Response
     */
    public function notAdminAction() {
        $this->get('session')->getFlashBag()->add('info', 'Nie masz uprawnien administratora!');
        return $this->redirect($this->generateUrl('homepage'));
    }
}

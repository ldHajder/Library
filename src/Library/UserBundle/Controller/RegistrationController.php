<?php

namespace Library\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegistrationController extends Controller
{
    public function indexAction()
    {
        return $this->render('LibraryUserBundle:Registration:index.html.twig');
    }
}

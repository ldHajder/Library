<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Controller bound with books actions
 * @author Piotrek
 */
class BookController extends Controller
{
    /**
     * Shows one page of books
     * @param integer $page
     * @return Response
     */
    public function showBooksAction($page) {
        $agent = $this->get('library.book_agent');
        $onePage = $agent->showAllBooks($page);
        if($onePage != null) {
            return $this->render('LibraryMainBundle:Book:showBooks.html.twig',
                array('page' => $onePage));
        } else {
            return $this->redirect($this->generateUrl('not_found'));
        }
    }
    
    /**
     * View generated when properly book is not found
     * @return Response
     */
    public function notFoundAction() {
        return $this->render('LibraryMainBundle:Book:notFound.html.twig');
    }
}

<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Library\MainBundle\Model\OnePage;

class BookController extends Controller
{
    public function showBooksAction($page) {
        $count = $this->getBooksCount();
        $maxPage = ceil( $count / OnePage::MAX_SIZE );
        if($maxPage != 0) {
            $allBooks = $this->getDoctrine()->getManager()
                    ->getRepository("LibraryMainBundle:Book")
                    ->findAll();
            if($page > 0 && $page <= $maxPage) {
                $onePage = new OnePage($page, $allBooks, $maxPage);
                return $this->render('LibraryMainBundle:Book:showBooks.html.twig',
                    array('page' => $onePage));
            }
            else {
                return new Response('Blad 404.');
            }
        } else {
            return $this->redirect($this->generateUrl('not_found'));
        }
    }
    
    public function notFoundAction() {
        return $this->render('LibraryMainBundle:Book:notFound.html.twig');
    }
    
    private function getBooksCount() {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT(u.id) FROM Library\MainBundle\Entity\Book u');
        return intval($query->getSingleScalarResult());
    }
}
<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Library\MainBundle\Model\OnePage;
use Library\MainBundle\Form\Type\BookFormType;

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
    
    public function addBookAction(Request $request) {
        $form = $this->createForm(new BookFormType());
        $form->handleRequest($request);
        if($form->isValid()) {
            $book = $form->getData();
            
            $em = $this->getDoctrine()->getManager();
            $em->persist($book);
            $em->flush();
            
            return $this->redirect($this->generateUrl('add_another'));
        }
        return $this->render('LibraryMainBundle:Book:addBook.html.twig', array('form' => $form->createView()));
    }
    
    public function showRemovalAction($page) {
        $count = $this->getBooksCount();
        $maxPage = ceil( $count / OnePage::MAX_SIZE );
        if($maxPage != 0) {
            $allBooks = $this->getDoctrine()->getManager()
                    ->getRepository("LibraryMainBundle:Book")
                    ->findAll();
            if($page > 0 && $page <= $maxPage) {
                $onePage = new OnePage($page, $allBooks, $maxPage);
                return $this->render('LibraryMainBundle:Book:removeBook.html.twig',
                    array('page' => $onePage));
            }
            else {
                return new Response('Blad 404.');
            }
        } else {
            return $this->redirect($this->generateUrl('not_found'));
        }
    }
    
    public function removeBookAction($id) {
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('LibraryMainBundle:Book')->find($id);
        $libraryCards = $em->getPartialReference('Library\MainBundle\Entity\LibraryCard', array('book' => $id));
        $em->remove($libraryCards);
        $em->remove($book);
        $em->flush();
        
        return $this->render('LibraryMainBundle:Book:bookRemoved.html.twig');
    }
    
    public function notFoundAction() {
        return $this->render('LibraryMainBundle:Book:notFound.html.twig');
    }
    
    /**
     * TO REMOVE!!!!!
     * 
     */
    public function anotherAction() {
        return $this->render('LibraryMainBundle:Book:another.html.twig');
    }
    
    private function getBooksCount() {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery('SELECT COUNT(u.id) FROM Library\MainBundle\Entity\Book u');
        return intval($query->getSingleScalarResult());
    }
}

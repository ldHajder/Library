<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Library\MainBundle\Entity\LibraryCard;

class LibraryCardController extends Controller
{
    /**
     * Renders view of user's library card
     * @return Response
     */
    public function showAction() {
        $usr= $this->get('security.context')->getToken()->getUser();
        if($usr != null) {
            $libraryCard = $usr->getLibraryCard();
            if(count($libraryCard) > 0) {
                return $this->render('LibraryMainBundle:LibraryCard:show.html.twig', array('card' => $libraryCard));
            } else {
                return $this->render('LibraryMainBundle:LibraryCard:empty.html.twig');
            }
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
    }
    
    /**
     * Add to db record with borrowing parameters
     * @param integer $id
     * @return Response
     */
    public function borrowAction($id) {
        $em = $this->getDoctrine()->getManager();
        $book = $em->getRepository('LibraryMainBundle:Book')->find($id);
        
        $borrowed = new LibraryCard();
        $borrowed->setBook($book);
        $usr= $this->get('security.context')->getToken()->getUser();
        if($usr != null) {
            $borrowed->setUser($usr);
            
            $em->persist($borrowed);
            $em->flush();
            return $this->redirect($this->generateUrl('borrow_confirmed', array('id' => $id)));
        } else {
            return $this->render('LibraryUserBundle:Security:notLogged.html.twig');
        }
    }
    
    /**
     * Renders view if user had borrowed a book with id = $id
     * @param integer $id
     * @return Response
     */
    public function succesfullAction($id) {
        $book = $this->getDoctrine()->getManager()->getRepository('LibraryMainBundle:Book')->find($id);
        return $this->render('LibraryMainBundle:LibraryCard:succesfull.html.twig', array('book' => $book));
    }
    
    /**
     * Returns book to library with given id
     * @param integer $cardId
     * @return Response
     */
    public function returnBookAction($cardId) {
        $usr = $this->get('security.context')->getToken()->getUser();
        if($usr != null) {
            $em = $this->getDoctrine()->getManager();
            $libraryCard = $usr->getLibraryCard();
            foreach($libraryCard as $one) {
                if($one->getId() == $cardId) {
                    $one->bookReturned();
                    $em->flush();
                    return $this->redirect($this->generateUrl('returned'));
                }
            }
            return $this->render('LibraryMainBundle:LibraryCard:error.html.twig');
        } else {
            return $this->redirect($this->generateUrl('fos_user_security_login'));
        }
    }
    
    /**
     * Renders view at successfully returning of book
     * @return Response
     */
    public function returnedAction() {
        return $this->render('LibraryMainBundle:LibraryCard:returned.html.twig');
    }
}

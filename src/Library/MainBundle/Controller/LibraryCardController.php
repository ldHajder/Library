<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Library\MainBundle\Entity\LibraryCard;

class LibraryCardController extends Controller
{
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
    
    public function succesfullAction($id) {
        $book = $this->getDoctrine()->getManager()->getRepository('LibraryMainBundle:Book')->find($id);
        return $this->render('LibraryMainBundle:LibraryCard:succesfull.html.twig', array('book' => $book));
    }
    
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
    
    public function returnedAction() {
        return $this->render('LibraryMainBundle:LibraryCard:returned.html.twig');
    }
}

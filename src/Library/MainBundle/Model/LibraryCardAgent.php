<?php

namespace Library\MainBundle\Model;

/**
 * LibraryCardAgent
 * Borrowing, returning and showing actually borrowed books
 * @author Piotr
 */
class LibraryCardAgent {
    private $em;
    
    /**
     * Constructor
     * @param \Doctrine\ORM\EntityManager $em
     */
    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }
    
    /**
     * Gets users' library card
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return array
     */
    public function getUsersLibraryCard(\Application\Sonata\UserBundle\Entity\User $user) {
        return $user->getLibraryCard();
    }
    
    /**
     * 
     * @param integer $id
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return boolean
     */
    public function borrowBook($id, $user) {
        if($user != null) {
            $book = $this->em->getRepository('LibraryMainBundle:Book')->find($id);
            $borrowed = new \Library\MainBundle\Entity\LibraryCard();
            $borrowed->setBook($book);
            $borrowed->setUser($user);
            
            $this->em->persist($borrowed);
            $this->em->flush();
            
            return true;
        }
        return false;
    }
    
    /**
     * Returns selected book
     * @param integer $cardId
     * @param \Application\Sonata\UserBundle\Entity\User $user
     * @return boolean
     */
    public function returnBook($cardId, $user) {
        if($user != null) {
            $libraryCard = $user->getLibraryCard();
            foreach($libraryCard as $one) {
                if($one->getId() == $cardId) {
                    $one->bookReturned();
                    $this->em->flush();
                    return true;
                }
            }
            return null;
        }
        return false;
    }
}

<?php

namespace Library\MainBundle\Agent;

use Library\MainBundle\Model\OnePage;
use Library\MainBundle\Model\BaseAgent;
/**
 * Selecting and searching books
 * @author Piotr
 */
class BookAgent extends BaseAgent {
    
    /**
     * Constructs parents' field
     * @param \Doctrine\ORM\EntityManager $em
     */
    public function __construct(\Doctrine\ORM\EntityManager $em) {
        parent::__construct($em);
    }
    
    /**
     * Generates one page of books
     * @param integer $page
     * @return OnePage
     */
    public function showAllBooks($page) {
        $count = $this->getBooksCount();
        $maxPage = ceil( $count / OnePage::MAX_SIZE );
        if($maxPage != 0) {
            $allBooks = $this->em->getRepository("LibraryMainBundle:Book")->findAll();
            if($page > 0 && $page <= $maxPage) {
                $onePage = new OnePage($page, $allBooks, $maxPage);
            } else {
                $this->showAllBooks(1);
            }
        } else {
            $onePage = null;
        }
        return $onePage;
    }
    
    /**
     * Returns number of books
     * @return integer
     */
    private function getBooksCount() {
        $query = $this->em->createQuery('SELECT COUNT(u.id) FROM Library\MainBundle\Entity\Book u');
        return intval($query->getSingleScalarResult());
    }
}

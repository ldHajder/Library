<?php

namespace Library\MainBundle\Agent;

use Library\MainBundle\Model\OnePage;
use Library\MainBundle\Model\BaseAgent;

/**
 * Finds books by criteria and show the result
 * @author Piotrek
 */
class FindBookAgent extends BaseAgent {
    
    /**
     * Generates one page of found records
     * @param Form $data
     * @param integer $page
     * @return OnePage
     */
    public function showFound($data, $page) {
        if(count($data) > 0) {
            $count = count($data[0]);
            $maxPage = ceil( $count / OnePage::MAX_SIZE );
            if($page > 0 & $page <= $maxPage) {
                $onePage = new OnePage($page, $data[0], $maxPage);
            } else {
                $this->showFound($data, 1);
            }
            return $onePage;
        } else {
            return null;
        }
    }
    
     /**
     * Searches recipts by ONE of criteries
     * 
     * @param Form $data
     * @return array
     */
    public function searcher($data) {
        $arr = [];
        $repo = $this->em->getRepository('LibraryMainBundle:Book');
        $i = 0;
        if($data['title'] != null) {
            $hits = $repo->findBy(array('name' => $data['title']));
            foreach($hits as $hit) {
                $arr[$i++] = $hit;
            }
        } elseif($data['author'] != null) {
            $hits = $repo->findBy(array('author' => $data['author']));
            foreach($hits as $hit) {
                $arr[$i++] = $hit;
            }
        } elseif($data['publishing'] != null) {
            $hits = $repo->findBy(array('publishing' => $data['publishing']));
            foreach($hits as $hit) {
                $arr[$i++] = $hit;
            }
        } elseif($data['category'] != null) {
            $repo = $this->em->getRepository('LibraryMainBundle:Category');
            $hits = $repo->findOneBy(array('name' => $data['category']->getName()))->getBooks();
            foreach($hits as $hit) {
                $arr[$i++] = $hit;
            }
        } else {
            return null;
        }
        return $arr;
    }
}

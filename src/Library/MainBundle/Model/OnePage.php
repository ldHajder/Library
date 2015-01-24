<?php

namespace Library\MainBundle\Model;

/**
 * OnePage
 * Tool class. Helps to render one page of books
 * @author Piotrek
 */
class OnePage {
    
    /**
     * Maximum number of recipts at one page
     */
    const MAX_SIZE = 4;
    /**
     *
     * @var ArrayCollection
     */
    private $books;
    
    /**
     *
     * @var int
     */
    private $pageNum;
    
    /**
     *
     * @var int
     */
    private $maxPage;
    
    /**
     *
     * @var array
     */
    private $paginator;
    
    /**
     * 
     * @param integer $page
     * @param array $books
     * @param integer $maxPage
     */
    public function __construct($page, $books, $maxPage) {
        $this->pageNum = $page;
        $this->maxPage = $maxPage;
        $count = count($books);
        
        $i=0;
        for($index=self::MAX_SIZE*($page-1); $index<$count && $index < (self::MAX_SIZE*($page)); $index++) {
            $this->books[$i++] = $books[$index];
        }
        $this->buildPaginator($page);
    }
    
    /**
     * Builds paginator for current page
     * @param integer $page
     */
    private function buildPaginator($page) {
        if($this->maxPage > 5) {
            if($page < 4) {
                $i = 1;
                while($i <= 5) {
                    $this->paginator[$i-1] = $i;
                    $i++;
                }
            } elseif($page > $this->maxPage - 3) {
                $i = $this->maxPage - 4;
                $j = 0;
                while($i <= $this->maxPage) {
                    $this->paginator[$j++] = $i++;
                }
            } else {
                $i = $page - 2;
                $j = 0;
                while($i <= $page + 2) {
                    $this->paginator[$j++] = $i++;
                }
            }
        } else {
            $i = 1;
            while($i <= $this->maxPage) {
                $this->paginator[$i-1] = $i;
                $i++;
            }
        }
    }
    
    /**
     * Books getter
     * @return array
     */
    public function getBooks() {
        return $this->books;
    }
    
    /**
     * Max page getter
     * @return integer
     */
    public function getMaxPage() {
        return $this->maxPage;
    }
    
    /**
     * Paginator getter
     * @return array
     */
    public function getPaginator() {
        return $this->paginator;
    }
    
    /**
     * Current page number getter
     * @return integer
     */
    public function getPageNum() {
        return $this->pageNum;
    }
}

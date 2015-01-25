<?php

namespace Library\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Library\MainBundle\Form\Type\SearchFormType;

/**
 * Controller bound with books finding actions
 * @author Lucy
 */
class FindBooksController extends Controller
{
    /**
     * Renders search form and if any books were found - redirects do another action
     * @param Request $request
     * @return Response
     */
    public function findAction(Request $request) {
        $this->get('session')->getFlashBag()->clear();
        $form = $this->createForm(new SearchFormType());
        $form->handleRequest($request);
        if($form->isValid()) {
            $found = $this->get('library.findbook_agent')->searcher($form->getData());
            if(count($found) > 0) {
                $this->get('session')->getFlashBag()->add('search_data', $found);
                return $this->redirect($this->generateUrl('show_search_result', array('page' => 1)));
            } else {
                return $this->render('LibraryMainBundle:FindBooks:notFound.html.twig');
            }
        }
        return $this->render('LibraryMainBundle:FindBooks:search.html.twig', array('form' => $form->createView()));
    }
    
    /**
     * Shows view with found books.
     * @param integer $page
     * @return Response
     */
    public function showSearchResultAction($page) {
        $onePage = $this->get('library.findbook_agent')->showFound($this->get('session')->getFlashBag()->get('search_data'), $page);
        if($onePage != null) {
            return $this->render('LibraryMainBundle:FindBooks:showSearchResult.html.twig',
                    array('page' => $onePage));
        }
        return $this->redirect($this->generateUrl('search_recipt'));
    }
}

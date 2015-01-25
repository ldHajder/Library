<?php

namespace Library\MainBundle\Model;

/**
 * BaseAgent
 * Base class for agents
 * @author Piotrek
 */
abstract class BaseAgent {
    
    /**
     *
     * @var \Doctrine\ORM\EntityManager
     */
    protected $em;
    
    /**
     * 
     * @param \Doctrine\ORM\EntityManager $em
     */
    public function __construct(\Doctrine\ORM\EntityManager $em) {
        $this->em = $em;
    }
}

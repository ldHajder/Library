<?php

/* LibraryMainBundle:LibraryCard:returned.html.twig */
class __TwigTemplate_3cc77c867888b329114ae0a449ac4ba6278fa36fe35471ae98fb6a9ea13fc739 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LibraryMainBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LibraryMainBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <p>Gratulacje, pomyslnie oddano jedna z wypozyczonych ksiazek</p>
    <p><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Wroc na strone glowna</a></p>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:LibraryCard:returned.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 5,  31 => 4,  28 => 3,);
    }
}

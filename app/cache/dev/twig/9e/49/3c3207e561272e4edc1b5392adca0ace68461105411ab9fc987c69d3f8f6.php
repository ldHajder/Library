<?php

/* LibraryMainBundle:LibraryCard:error.html.twig */
class __TwigTemplate_9e493c3207e561272e4edc1b5392adca0ace68461105411ab9fc987c69d3f8f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LibraryMainbundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LibraryMainbundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <p>Wystapil blad podczas oddawania ksiazki. Przepraszamy!</p>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:LibraryCard:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}

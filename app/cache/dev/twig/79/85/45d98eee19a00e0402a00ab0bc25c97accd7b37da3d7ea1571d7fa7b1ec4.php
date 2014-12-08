<?php

/* LibraryMainBundle:Book:another.html.twig */
class __TwigTemplate_798545d98eee19a00e0402a00ab0bc25c97accd7b37da3d7ea1571d7fa7b1ec4 extends Twig_Template
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
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("add_book");
        echo "\">Dodaj nowa ksiazke</a>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:Book:another.html.twig";
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

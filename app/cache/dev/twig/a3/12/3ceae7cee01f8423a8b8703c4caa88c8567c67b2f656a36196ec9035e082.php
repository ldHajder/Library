<?php

/* LibraryMainBundle:FindBooks:notFound.html.twig */
class __TwigTemplate_a3123ceae7cee01f8423a8b8703c4caa88c8567c67b2f656a36196ec9035e082 extends Twig_Template
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
        echo "    <p>Niestety nie znaleziono ksiazek o podanych parametrach</p>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:FindBooks:notFound.html.twig";
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

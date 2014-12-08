<?php

/* LibraryMainBundle:Book:bookRemoved.html.twig */
class __TwigTemplate_ecbdb3ed257fbe1f7fa8c342bb527e5cf2768d5df8715c1ebbbbf836f2477b3c extends Twig_Template
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
        echo "    <p>Pomyslnie usunieto wybrana ksiazke.</p>
    <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Wroc na strone glowna</a>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:Book:bookRemoved.html.twig";
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

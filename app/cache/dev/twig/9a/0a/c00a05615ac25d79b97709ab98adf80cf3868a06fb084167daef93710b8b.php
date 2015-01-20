<?php

/* LibraryMainBundle:Main:adminPanel.html.twig */
class __TwigTemplate_9a0ac00a05615ac25d79b97709ab98adf80cf3868a06fb084167daef93710b8b extends Twig_Template
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
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("add_book");
        echo "\">Dodaj ksiazke</a>
    </li>
    <li>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("show_removal");
        echo "\">Usun ksiazke</a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:Main:adminPanel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 8,  34 => 5,  31 => 4,  28 => 3,);
    }
}

<?php

/* LibraryMainBundle:Book:removeBook.html.twig */
class __TwigTemplate_bd43547ed73bd76699ff4729650bce13710295e76a8a189a027943f7c3a0ea8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LibraryMainBundle:Book:showBooks.html.twig");

        $this->blocks = array(
            'button' => array($this, 'block_button'),
            'paginator' => array($this, 'block_paginator'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LibraryMainBundle:Book:showBooks.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_button($context, array $blocks = array())
    {
        // line 4
        echo "    <a class=\"btn btn-primary\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("remove_book", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()))), "html", null, true);
        echo "\">Usun ksiazke</a>
";
    }

    // line 6
    public function block_paginator($context, array $blocks = array())
    {
        // line 7
        echo "    <li>
        <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("show_removal");
        echo "\">&laquo;</a>
    </li>
    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "paginator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 11
            echo "        ";
            if (($context["i"] == $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNum", array()))) {
                // line 12
                echo "            <li class=\"active\">
                <a href=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_removal", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
            </li>
        ";
            } else {
                // line 16
                echo "            <li>
                <a href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_removal", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 20
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    <li>
        <a href=\" ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_removal", array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "maxPage", array()))), "html", null, true);
        echo " \">&raquo;</a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:Book:removeBook.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 22,  85 => 21,  79 => 20,  71 => 17,  68 => 16,  60 => 13,  57 => 12,  54 => 11,  50 => 10,  45 => 8,  42 => 7,  39 => 6,  32 => 4,  29 => 3,);
    }
}

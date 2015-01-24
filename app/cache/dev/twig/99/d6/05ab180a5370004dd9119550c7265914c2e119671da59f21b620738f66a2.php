<?php

/* LibraryMainBundle:FindBooks:showSearchResult.html.twig */
class __TwigTemplate_99d605ab180a5370004dd9119550c7265914c2e119671da59f21b620738f66a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("LibraryMainBundle:Book:showBooks.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
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
    public function block_paginator($context, array $blocks = array())
    {
        // line 4
        echo "    <li>
        <a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("show_search_result", array("page" => 1));
        echo "\">&laquo;</a>
    </li>
    ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "paginator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 8
            echo "        ";
            if (($context["i"] == $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNum", array()))) {
                // line 9
                echo "            <li class=\"active\">
                <a href=\"";
                // line 10
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_search_result", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
            </li>
        ";
            } else {
                // line 13
                echo "            <li>
                <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_search_result", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
            </li>
        ";
            }
            // line 17
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    <li>
        <a href=\" ";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_search_result", array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "maxPage", array()))), "html", null, true);
        echo " \">&raquo;</a>
    </li>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:FindBooks:showSearchResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  82 => 18,  76 => 17,  68 => 14,  65 => 13,  57 => 10,  54 => 9,  51 => 8,  47 => 7,  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}

<?php

/* LibraryMainBundle:Book:showBooks.html.twig */
class __TwigTemplate_bf27ffb090a6885788cd86817d17a62db78291c6b03a142d8fe12551e762fac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LibraryMainBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'button' => array($this, 'block_button'),
            'paginator' => array($this, 'block_paginator'),
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
        echo "    <div class=\"container\">

        <!-- Page Heading/Breadcrumbs -->
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h1 class=\"page-header\">One Column Portfolio
                    <small>Subheading</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "books", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 17
            echo "            <div class=\"row\">
                <div class=\"col-md-7\">
                    <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["book"], "getWebPath", array())), "html", null, true);
            echo "\">
                        <img class=\"img-responsive img-hover\" src=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["book"], "getWebPath", array())), "html", null, true);
            echo "\" alt=\"\">
                    </a>
                </div>
                <div class=\"col-md-5\">
                    <h2>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "name", array()), "html", null, true);
            echo "</h2>
                    <h3>Autor: ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "author", array()), "html", null, true);
            echo "</h3>
                    <h4>Wydawnictwo ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "publishing", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "year", array()), "html", null, true);
            echo "</h4>
                    <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "description", array()), "html", null, true);
            echo "</p>
                    ";
            // line 28
            $this->displayBlock('button', $context, $blocks);
            // line 35
            echo "                </div>
            </div>
            
            <hr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        <!-- Pagination -->
        <div class=\"row text-center\">
            <div class=\"col-lg-12\">
                <ul class=\"pagination\">
                    ";
        // line 45
        $this->displayBlock('paginator', $context, $blocks);
        // line 64
        echo "                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>
";
    }

    // line 28
    public function block_button($context, array $blocks = array())
    {
        // line 29
        echo "                        ";
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())))) {
            // line 30
            echo "                            <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("borrow_book", array("id" => $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "id", array()))), "html", null, true);
            echo "\">Wypozycz</a>
                        ";
        } else {
            // line 32
            echo "                            <p><strong>Aby wypozyczyc ksiazke musisz byc zalogowany!</strong></p>
                        ";
        }
        // line 34
        echo "                    ";
    }

    // line 45
    public function block_paginator($context, array $blocks = array())
    {
        // line 46
        echo "                        <li>
                            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("show_books");
        echo "\">&laquo;</a>
                        </li>
                        ";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "paginator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 50
            echo "                            ";
            if (($context["i"] == $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNum", array()))) {
                // line 51
                echo "                                <li class=\"active\">
                                    <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_books", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            } else {
                // line 55
                echo "                                <li>
                                    <a href=\"";
                // line 56
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_books", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            // line 59
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                        <li>
                            <a href=\" ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_books", array("page" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "maxPage", array()))), "html", null, true);
        echo " \">&raquo;</a>
                        </li>
                    ";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:Book:showBooks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 61,  201 => 60,  195 => 59,  187 => 56,  184 => 55,  176 => 52,  173 => 51,  170 => 50,  166 => 49,  161 => 47,  158 => 46,  155 => 45,  151 => 34,  147 => 32,  141 => 30,  138 => 29,  135 => 28,  126 => 64,  124 => 45,  117 => 40,  99 => 35,  97 => 28,  93 => 27,  87 => 26,  83 => 25,  79 => 24,  72 => 20,  68 => 19,  64 => 17,  47 => 16,  33 => 4,  30 => 3,);
    }
}

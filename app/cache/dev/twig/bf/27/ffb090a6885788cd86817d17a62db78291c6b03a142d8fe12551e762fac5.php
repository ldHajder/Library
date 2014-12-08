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
                    <h3>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "name", array()), "html", null, true);
            echo "</h3>
                    <h4>Autor ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "author", array()), "html", null, true);
            echo "</h4>
                    <p>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["book"], "description", array()), "html", null, true);
            echo "</p>
                    <a class=\"btn btn-primary\" href=\"#\">Wypozycz</a>
                </div>
            </div>
            
            <hr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "
        <!-- Pagination -->
        <div class=\"row text-center\">
            <div class=\"col-lg-12\">
                <ul class=\"pagination\">
                    ";
        // line 38
        $this->displayBlock('paginator', $context, $blocks);
        // line 57
        echo "                </ul>
            </div>
        </div>
        <!-- /.row -->

        <!-- Footer -->
        <footer>
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
";
    }

    // line 38
    public function block_paginator($context, array $blocks = array())
    {
        // line 39
        echo "                        <li>
                            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("show_books");
        echo "\">&laquo;</a>
                        </li>
                        ";
        // line 42
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "paginator", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 43
            echo "                            ";
            if (($context["i"] == $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "pageNum", array()))) {
                // line 44
                echo "                                <li class=\"active\">
                                    <a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_books", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            } else {
                // line 48
                echo "                                <li>
                                    <a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("show_books", array("page" => $context["i"])), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a>
                                </li>
                            ";
            }
            // line 52
            echo "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                        <li>
                            <a href=\" ";
        // line 54
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
        return array (  163 => 54,  160 => 53,  154 => 52,  146 => 49,  143 => 48,  135 => 45,  132 => 44,  129 => 43,  125 => 42,  120 => 40,  117 => 39,  114 => 38,  95 => 57,  93 => 38,  86 => 33,  73 => 26,  69 => 25,  65 => 24,  58 => 20,  54 => 19,  50 => 17,  46 => 16,  32 => 4,  29 => 3,);
    }
}

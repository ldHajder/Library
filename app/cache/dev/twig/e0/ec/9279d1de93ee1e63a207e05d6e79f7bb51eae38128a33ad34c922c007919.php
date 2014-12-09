<?php

/* LibraryMainBundle:LibraryCard:show.html.twig */
class __TwigTemplate_e0ec9279d1de93ee1e63a207e05d6e79f7bb51eae38128a33ad34c922c007919 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card")));
        foreach ($context['_seq'] as $context["_key"] => $context["one"]) {
            // line 5
            echo "        <div class=\"row\">
            <div class=\"col-lg-12\">
                <h2 class=\"page-header\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "book", array()), "name", array()), "html", null, true);
            echo "</h2>
            </div>
            <div class=\"col-md-6\">
                <p>Informacje o wypozyczonej ksiazce:</p>
                <ul>
                    <li><strong>Tytul: ";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "book", array()), "name", array()), "html", null, true);
            echo "</strong></li>
                    <li>Autor: ";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "book", array()), "author", array()), "html", null, true);
            echo "</li>
                    <li>Wydawnictwo: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "book", array()), "publishing", array()), "html", null, true);
            echo "</li>
                    <li>Rok wydania: ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "book", array()), "year", array()), "html", null, true);
            echo "</li>
                    <li>Data wypozyczenia:";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "date", array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</li>
                </ul>
                <p>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "book", array()), "description", array()), "html", null, true);
            echo "</p>
                ";
            // line 19
            if ((null === $this->getAttribute($context["one"], "returnDate", array()))) {
                // line 20
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("return_book", array("cardId" => $this->getAttribute($context["one"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">Oddaj ksiazke</a>
                ";
            } else {
                // line 22
                echo "                    <li><strong>Ksiazke oddano: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["one"], "returnDate", array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
                echo "</strong></li>
                ";
            }
            // line 24
            echo "            </div>
            <div class=\"col-md-6\">
                <img class=\"img-responsive\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($this->getAttribute($context["one"], "book", array()), "getWebPath", array())), "html", null, true);
            echo "\" alt=\"\">
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['one'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:LibraryCard:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 26,  87 => 24,  81 => 22,  75 => 20,  73 => 19,  69 => 18,  64 => 16,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  40 => 7,  36 => 5,  31 => 4,  28 => 3,);
    }
}

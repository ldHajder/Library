<?php

/* LibraryMainBundle:LibraryCard:show.html.twig */
class __TwigTemplate_ee623f60ccb7ba2a1eb65ed47c15ba41cdf8ed3d425b97a13e550f5a4baabde7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("LibraryMainBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

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
        return array (  99 => 26,  95 => 24,  89 => 22,  83 => 20,  81 => 19,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  48 => 7,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}

<?php

/* LibraryMainBundle:LibraryCard:succesfull.html.twig */
class __TwigTemplate_b33610af7dfd6ea5126e1b0e8c7e2b078235a1bbb63b8e0aa5c02a096740569e extends Twig_Template
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
        echo "    <h1><strong>Wypozyczyles te ksiazke!</strong></h1>
    <div class=\"row\">
        <div class=\"col-md-7\">
            <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getWebPath", array())), "html", null, true);
        echo "\">
                <img class=\"img-responsive img-hover\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "getWebPath", array())), "html", null, true);
        echo "\" alt=\"\">
            </a>
        </div>
        <div class=\"col-md-5\">
            <h2>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "name", array()), "html", null, true);
        echo "</h2>
            <h3>Autor: ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "author", array()), "html", null, true);
        echo "</h3>
            <h4>Wydawnictwo ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "publishing", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "year", array()), "html", null, true);
        echo "</h4>
            <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["book"]) ? $context["book"] : $this->getContext($context, "book")), "description", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:LibraryCard:succesfull.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 15,  63 => 14,  59 => 13,  55 => 12,  48 => 8,  44 => 7,  39 => 4,  36 => 3,  11 => 1,);
    }
}

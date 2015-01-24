<?php

/* LibraryMainBundle:LibraryCard:returned.html.twig */
class __TwigTemplate_de5334110aefd5095fbd2226a783b6e893757f626fd424fc1fdec876fd90a761 extends Twig_Template
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
        echo "    <p>Gratulacje, pomyslnie oddano jedna z wypozyczonych ksiazek</p>
    <p><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">Wroc na strone glowna</a></p>
";
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle:LibraryCard:returned.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}

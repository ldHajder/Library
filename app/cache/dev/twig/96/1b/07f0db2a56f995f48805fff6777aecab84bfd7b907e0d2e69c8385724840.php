<?php

/* ::base.html.twig */
class __TwigTemplate_961b07f0db2a56f995f48805fff6777aecab84bfd7b907e0d2e69c8385724840 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />

        <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 23
        $this->displayBlock('body', $context, $blocks);
        // line 24
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 38
        echo "    </body>
</html>";
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <!-- Bootstrap Core CSS -->
            <link href=\" ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LibraryMainBundle/css/bootstrap.min.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">

            <!-- Custom CSS -->
            <link href=\" ";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LibraryMainBundle/css/modern-business.css"), "html", null, true);
        echo " \" rel=\"stylesheet\">
        ";
    }

    // line 23
    public function block_body($context, array $blocks = array())
    {
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        // line 25
        echo "            <!-- jQuery -->
            <script src=\" ";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LibraryMainBundle/js/jquery-2.1.1.js"), "html", null, true);
        echo " \"></script>

            <!-- Bootstrap Core JavaScript -->
            <script src=\" ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/LibraryMainBundle/js/bootstrap.min.js"), "html", null, true);
        echo " \"></script>

            <!-- Script to Activate the Carousel -->
            <script>
            \$('.carousel').carousel({
                interval: 5000 //changes the speed
            })
            </script>
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  95 => 26,  92 => 25,  89 => 24,  84 => 23,  78 => 17,  72 => 14,  69 => 13,  66 => 12,  60 => 10,  55 => 38,  52 => 24,  50 => 23,  44 => 20,  41 => 19,  39 => 12,  34 => 10,  23 => 1,);
    }
}

<?php

/* LibraryUserBundle:Security:notLogged.html.twig */
class __TwigTemplate_90c1a7ccdceeb711973cf8e8d21413a295a9c2f295f4f5cb4700d53b14dc319c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LibraryUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LibraryUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    NIE JESTES ZALOGOWANY! <a href=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">Zaloguj sie</a>
";
    }

    public function getTemplateName()
    {
        return "LibraryUserBundle:Security:notLogged.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}

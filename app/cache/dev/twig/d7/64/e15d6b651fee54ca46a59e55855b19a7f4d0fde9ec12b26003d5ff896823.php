<?php

/* LibraryUserBundle:Security:notLogged.html.twig */
class __TwigTemplate_d764e15d6b651fee54ca46a59e55855b19a7f4d0fde9ec12b26003d5ff896823 extends Twig_Template
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

<?php

/* SonataUserBundle:Profile:edit_profile.html.twig */
class __TwigTemplate_a955a68e5cac9e5ea2628f885ee93e32e76f3c8c6aadc915b5894d0b15cb66a7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        // line 7
        echo "
    ";
        // line 8
        $this->displayBlock('sonata_profile_content', $context, $blocks);
    }

    // line 4
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_edit_profile", array(), "SonataUserBundle"), "html", null, true);
        echo "
    ";
    }

    // line 8
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 9
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 12
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => $this));
        // line 13
        echo "
        <div class=\"panel panel-info\">
            <div class=\"panel-heading\">
                <h3 class=\"panel-title\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_account", array(), "SonataUserBundle"), "html", null, true);
        echo "</h3>
            </div>
            <div class=\"panel-body\">
                <form action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("sonata_user_profile_edit");
        echo "\" method=\"POST\" class=\"form-horizontal\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <div class=\"form-actions\">
                        <button type=\"submit\" name=\"submit\"  class=\"btn btn-primary pull-right\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata_user_submit", array(), "SonataUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:edit_profile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 22,  91 => 20,  87 => 19,  81 => 16,  76 => 13,  74 => 12,  69 => 10,  66 => 9,  63 => 8,  54 => 5,  51 => 4,  47 => 8,  44 => 7,  41 => 4,  38 => 3,  11 => 1,);
    }
}

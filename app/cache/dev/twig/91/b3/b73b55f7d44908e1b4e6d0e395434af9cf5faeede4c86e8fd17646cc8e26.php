<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_91b3b73b55f7d44908e1b4e6d0e395434af9cf5faeede4c86e8fd17646cc8e26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'swap_content' => array($this, 'block_swap_content'),
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_swap_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 12
        echo "
    <h2>";
        // line 13
        $this->displayBlock('sonata_profile_title', $context, $blocks);
        echo "</h2>

    <div class=\"sonata-user-show row row-fluid\">

        <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
            ";
        // line 18
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 21
        echo "        </div>

        <div class=\"span10 col-lg-10\">
            ";
        // line 24
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 25
        echo "
            ";
        // line 26
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 27
        echo "        </div>

    </div>
";
    }

    // line 4
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 5
        echo "        ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 6
            echo "            ";
            $context["breadcrumb_context"] = "user_index";
            // line 7
            echo "        ";
        }
        // line 8
        echo "        <div class=\"row-fluid clearfix\">
            ";
        // line 9
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("breadcrumb", array("context" => (isset($context["breadcrumb_context"]) ? $context["breadcrumb_context"] : $this->getContext($context, "breadcrumb_context")), "current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        </div>
    ";
    }

    // line 13
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata_profile_title", array(), "SonataUserBundle");
    }

    // line 18
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
            ";
    }

    // line 26
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 26,  109 => 19,  106 => 18,  100 => 13,  93 => 9,  90 => 8,  87 => 7,  84 => 6,  81 => 5,  78 => 4,  71 => 27,  69 => 26,  66 => 25,  64 => 24,  59 => 21,  57 => 18,  49 => 13,  46 => 12,  43 => 4,  40 => 3,  11 => 1,);
    }
}

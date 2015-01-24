<?php

/* SonataUserBundle::layout.html.twig */
class __TwigTemplate_e537aea7936cf24ebdeb2c39bf954dd482786a838326f97f85e00a111ff7ed81 extends Twig_Template
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
            'swap_content' => array($this, 'block_swap_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
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
    public function block_swap_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
        ";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 7
        echo "    </div>
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "        ";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 6,  50 => 5,  45 => 7,  43 => 5,  40 => 4,  37 => 3,  11 => 1,);
    }
}

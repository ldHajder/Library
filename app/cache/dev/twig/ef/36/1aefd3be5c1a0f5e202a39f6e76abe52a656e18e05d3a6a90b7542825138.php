<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_ef361aefd3be5c1a0f5e202a39f6e76abe52a656e18e05d3a6a90b7542825138 extends Twig_Template
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
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'sonata_user_login' => array($this, 'block_sonata_user_login'),
            'sonata_user_login_error' => array($this, 'block_sonata_user_login_error'),
            'sonata_user_login_form' => array($this, 'block_sonata_user_login_form'),
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
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md12\">
                <div class=\"panel panel-success\">
                    ";
        // line 8
        $this->displayBlock('sonata_user_login', $context, $blocks);
        // line 73
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    // line 8
    public function block_sonata_user_login($context, array $blocks = array())
    {
        // line 9
        echo "                        <div class=\"panel panel-info\">
                            <div class=\"panel-heading\">
                                <h2 class=\"panel-title\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title_user_authentication", array(), "SonataUserBundle"), "html", null, true);
        echo "</h2>
                            </div>

                            <div class=\"panel-body\">

                                ";
        // line 16
        $this->displayBlock('sonata_user_login_error', $context, $blocks);
        // line 21
        echo "
                                ";
        // line 22
        $this->displayBlock('sonata_user_login_form', $context, $blocks);
        // line 70
        echo "                            </div>
                    </div>
                    ";
    }

    // line 16
    public function block_sonata_user_login_error($context, array $blocks = array())
    {
        // line 17
        echo "                                    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 18
            echo "                                        <div class=\"alert alert-danger alert-error\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), array(), "FOSUserBundle"), "html", null, true);
            echo "</div>
                                    ";
        }
        // line 20
        echo "                                ";
    }

    // line 22
    public function block_sonata_user_login_form($context, array $blocks = array())
    {
        // line 23
        echo "                                    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" role=\"form\"
                                          class=\"form-horizontal\">
                                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                                        <div class=\"form-group\">
                                            <label for=\"username\"
                                                   class=\"col-sm-4 control-label\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                                            <div class=\"col-sm-8\"><input type=\"text\" class=\"form-control\" id=\"username\"
                                                                                  name=\"_username\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"
                                                                                  required=\"required\"/></div>
                                        </div>


                                        <div class=\"form-group control-group\">
                                            <label for=\"password\"
                                                   class=\"col-sm-4 control-label\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "SonataUserBundle"), "html", null, true);
        echo "</label>

                                            <div class=\"col-sm-8\"><input type=\"password\" class=\"form-control\" id=\"password\"
                                                                                  name=\"_password\" required=\"required\"/></div>
                                        </div>

                                        <div class=\"form-group\">
                                            <div class=\"col-sm-offset-4 col-sm-8\">
                                                <div class=\"checkbox control-group\">
                                                    <label for=\"remember_me\">
                                                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                                                        ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class=\"form-group control-group\">
                                            <div class=\"controls col-sm-offset-4 col-sm-8\">
                                                <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_request");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("forgotten_password", array(), "SonataUserBundle"), "html", null, true);
        echo "</a>
                                            </div>
                                        </div>

                                        <div class=\"form-group\">
                                            <div class=\"col-sm-offset-4 col-sm-8\">
                                                <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\"
                                                       value=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\"/>
                                            </div>
                                        </div>
                                    </form>
                                ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 65,  159 => 58,  148 => 50,  134 => 39,  124 => 32,  118 => 29,  111 => 25,  105 => 23,  102 => 22,  98 => 20,  92 => 18,  89 => 17,  86 => 16,  80 => 70,  78 => 22,  75 => 21,  73 => 16,  65 => 11,  61 => 9,  58 => 8,  50 => 73,  48 => 8,  42 => 4,  39 => 3,  11 => 1,);
    }
}

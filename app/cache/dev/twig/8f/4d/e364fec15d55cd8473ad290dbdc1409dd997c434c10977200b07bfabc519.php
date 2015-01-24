<?php

/* LibraryMainBundle::layout.html.twig */
class __TwigTemplate_8f4de364fec15d55cd8473ad290dbdc1409dd997c434c10977200b07bfabc519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <!-- Navigation -->
    <nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\" ";
        // line 15
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo " \">Strona glowna</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li>
                        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("show_books");
        echo "\">Lista ksiazek</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("find_books");
        echo "\">Wyszukaj</a>
                    </li>
                    ";
        // line 26
        if ( !twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 27
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Ustawienia <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Konto</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("show_library_card");
            echo "\">Wypozyczone ksiazki</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Wyloguj</a>
                                </li>
                            </ul>
                        </li>
                    ";
        } else {
            // line 42
            echo "                        <li>
                            <a href=\"";
            // line 43
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Zarejestruj sie</a>
                        </li>
                    ";
        }
        // line 49
        echo "                    <li>
                        <a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
        echo "\">Administracja</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
                
    <div class=\"my-image\">
        <img src=\"http://i.imgur.com/H8OR44i.jpg\" />
    
    <div id =\"myBody\">
        ";
        // line 63
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "    </div>
    
    <footer>
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <p>Copyright © Your Website 2014</p>
            </div>
        </div>
    </footer>
";
    }

    // line 63
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "LibraryMainBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 63,  137 => 64,  135 => 63,  119 => 50,  116 => 49,  110 => 46,  104 => 43,  101 => 42,  93 => 37,  87 => 34,  81 => 31,  75 => 27,  73 => 26,  68 => 24,  62 => 21,  53 => 15,  40 => 4,  37 => 3,  11 => 1,);
    }
}

<?php

/* LibraryMainBundle::layout.html.twig */
class __TwigTemplate_8f4de364fec15d55cd8473ad290dbdc1409dd997c434c10977200b07bfabc519 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

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
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())))) {
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
                        <li>
                            <a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("admin_panel");
            echo "\">Administracja</a>
                    ";
        } else {
            // line 44
            echo "                        <li>
                            <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Zarejestruj sie</a>
                        </li>
                    ";
        }
        // line 51
        echo "                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
                
    <div class=\"my-image\">
        <img src=\"http://www.tapetus.pl/obrazki/n/104791_pokoj-biblioteka-szafa-ksiazki-krzesla-stolik.jpg\" />
    
    <div id =\"myBody\">
        ";
        // line 62
        $this->displayBlock('content', $context, $blocks);
        // line 63
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

    // line 62
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
        return array (  141 => 62,  128 => 63,  126 => 62,  113 => 51,  107 => 48,  101 => 45,  98 => 44,  93 => 42,  85 => 37,  79 => 34,  73 => 31,  67 => 27,  65 => 26,  60 => 24,  54 => 21,  45 => 15,  32 => 4,  29 => 3,);
    }
}

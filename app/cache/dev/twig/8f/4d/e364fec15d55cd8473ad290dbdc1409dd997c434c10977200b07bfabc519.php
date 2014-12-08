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
                        <a href=\"#\">Lista ksiazek</a>
                    </li>
                    <li>
                        <a href=\"#\">Wyszukaj</a>
                    </li>
                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Portfolio <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li>
                                <a href=\"portfolio-1-col.html\">1 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-2-col.html\">2 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-3-col.html\">3 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-4-col.html\">4 Column Portfolio</a>
                            </li>
                            <li>
                                <a href=\"portfolio-item.html\">Single Portfolio Item</a>
                            </li>
                        </ul>
                    </li>
                    ";
        // line 46
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())))) {
            // line 47
            echo "                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Ustawienia <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li>
                                    <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
            echo "\">Konto</a>
                                </li>
                                <li>
                                    <a href=\"sidebar.html\">Twoje przepisy</a>
                                </li>
                                <li>
                                    <a href=\"404.html\">Pomoc</a>
                                </li>
                                <li>
                                    <a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Wyloguj</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href=\"#\">Dodaj przepis</a>
                        </li>
                    ";
        } else {
            // line 68
            echo "                        <li>
                            <a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Zaloguj</a>
                            <li>
                                <a href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">Zarejestruj sie</a>
                            </li>
                        </li>
                    ";
        }
        // line 75
        echo "                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Header Carousel -->
    <header id=\"myCarousel\" class=\"carousel slide\">
        <!-- Indicators -->
        <ol class=\"carousel-indicators\">
            <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"1\"></li>
            <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class=\"carousel-inner\">
            <div class=\"item active\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide One');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Two');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class=\"item\">
                <div class=\"fill\" style=\"background-image:url('http://placehold.it/1900x1080&text=Slide Three');\"></div>
                <div class=\"carousel-caption\">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class=\"left carousel-control\" href=\"#myCarousel\" data-slide=\"prev\">
            <span class=\"icon-prev\"></span>
        </a>
        <a class=\"right carousel-control\" href=\"#myCarousel\" data-slide=\"next\">
            <span class=\"icon-next\"></span>
        </a>
    </header>
    <div id =\"myBody\">
        ";
        // line 122
        $this->displayBlock('content', $context, $blocks);
        // line 123
        echo "    </div>
";
    }

    // line 122
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
        return array (  181 => 122,  176 => 123,  174 => 122,  125 => 75,  118 => 71,  113 => 69,  110 => 68,  99 => 60,  87 => 51,  81 => 47,  79 => 46,  45 => 15,  32 => 4,  29 => 3,);
    }
}

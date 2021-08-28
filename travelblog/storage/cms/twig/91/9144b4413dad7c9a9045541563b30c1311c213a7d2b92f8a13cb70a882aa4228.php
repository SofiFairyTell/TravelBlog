<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\OpenServer\domains\TravelBlog-1\travelblog/themes/fabriciorabelo-squad/partials/header.htm */
class __TwigTemplate_f9d6fe567ca552647e4713b80bf7f221b5ae51d7e8598f170922cd155d134381 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">
                <h1 class=\"upper\">TRAVELTOUR</h1>
            </a>
        </div>
        ";
        // line 11
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "baseFileName", [], "any", false, false, true, 11) != "404") && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "baseFileName", [], "any", false, false, true, 11) != "error")) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "baseFileName", [], "any", false, false, true, 11) != "maintenance"))) {
            // line 12
            echo "        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#intro\">Главная</a></li>
                <li><a href=\"#about\">О нас</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Туры <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Горные походы</a></li>
                        <li><a href=\"#\">Путешествие</a></li>
                        <li><a href=\"#\">Речные туры</a></li>
                        <li><a href=\"#\">Велопоходы</a></li>
                    </ul>
                </li>
                <li><a href=\"#service\">Отзывы</a></li>
                <li><a href=\"#contact\">Контакты</a></li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
        ";
        }
        // line 33
        echo "    </div>
    <!-- /.container -->
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 33,  56 => 12,  54 => 11,  47 => 7,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-custom navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header page-scroll\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <i class=\"fa fa-bars\"></i>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">
                <h1 class=\"upper\">TRAVELTOUR</h1>
            </a>
        </div>
        {% if this.page.baseFileName != '404' and  this.page.baseFileName != 'error' and this.page.baseFileName != 'maintenance' %}
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse navbar-right navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"#intro\">Главная</a></li>
                <li><a href=\"#about\">О нас</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Туры <b class=\"caret\"></b></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Горные походы</a></li>
                        <li><a href=\"#\">Путешествие</a></li>
                        <li><a href=\"#\">Речные туры</a></li>
                        <li><a href=\"#\">Велопоходы</a></li>
                    </ul>
                </li>
                <li><a href=\"#service\">Отзывы</a></li>
                <li><a href=\"#contact\">Контакты</a></li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
        {% endif %}
    </div>
    <!-- /.container -->
</nav>", "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/partials/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 11);
        static $filters = array("page" => 7);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['page'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

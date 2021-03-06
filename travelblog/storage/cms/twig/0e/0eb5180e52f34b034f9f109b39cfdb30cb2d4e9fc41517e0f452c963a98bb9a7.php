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

/* C:\OpenServer\domains\TravelBlog-1\travelblog/themes/demo/partials/site/header.htm */
class __TwigTemplate_4704a40089d8493a5dfc98e9487682d4338d7c4923078ac6bdeac9037dbf3f48 extends \Twig\Template
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
        echo "<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("main_home");
        echo "\">TravelBlog</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "id", [], "any", false, false, true, 16) == "home")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("main_home");
        echo "\">??????????????</a></li>
                <li class=\"";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 17), "id", [], "any", false, false, true, 17) == "aboutus")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about-us");
        echo "\">?? ??????</a></li>
                <li class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 18), "id", [], "any", false, false, true, 18) == "tours")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tours");
        echo "\">????????</a></li>
                <li class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 19), "id", [], "any", false, false, true, 19) == "feedback")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("feedback");
        echo "\">????????????</a></li>
                <li class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 20), "id", [], "any", false, false, true, 20) == "contacts")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contacts");
        echo "\">????????????????</a></li>
                <!-- <li class=\"";
        // line 21
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 21), "id", [], "any", false, false, true, 21) == "ajax")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ajax");
        echo "\"></a></li>
                <li class=\"";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 22), "id", [], "any", false, false, true, 22) == "plugins")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("plugins");
        echo "\">Plugin components</a></li> -->
            </ul>
        </div>
    </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/demo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 22,  99 => 21,  91 => 20,  83 => 19,  75 => 18,  67 => 17,  59 => 16,  51 => 11,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Nav -->
<nav id=\"layout-nav\" class=\"navbar navbar-inverse navbar-fixed-top navbar-autohide\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"{{ 'main_home'|page }}\">TravelBlog</a>
        </div>
        <div class=\"collapse navbar-collapse navbar-main-collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"separator hidden-xs\"></li>
                <li class=\"{% if this.page.id == 'home' %}active{% endif %}\"><a href=\"{{ 'main_home'|page }}\">??????????????</a></li>
                <li class=\"{% if this.page.id == 'aboutus' %}active{% endif %}\"><a href=\"{{ 'about-us'|page }}\">?? ??????</a></li>
                <li class=\"{% if this.page.id == 'tours' %}active{% endif %}\"><a href=\"{{ 'tours'|page }}\">????????</a></li>
                <li class=\"{% if this.page.id == 'feedback' %}active{% endif %}\"><a href=\"{{ 'feedback'|page }}\">????????????</a></li>
                <li class=\"{% if this.page.id == 'contacts' %}active{% endif %}\"><a href=\"{{ 'contacts'|page }}\">????????????????</a></li>
                <!-- <li class=\"{% if this.page.id == 'ajax' %}active{% endif %}\"><a href=\"{{ 'ajax'|page }}\"></a></li>
                <li class=\"{% if this.page.id == 'plugins' %}active{% endif %}\"><a href=\"{{ 'plugins'|page }}\">Plugin components</a></li> -->
            </ul>
        </div>
    </div>
</nav>", "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/demo/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 16);
        static $filters = array("page" => 11);
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

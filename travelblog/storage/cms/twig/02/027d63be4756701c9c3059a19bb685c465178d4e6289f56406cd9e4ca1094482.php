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

/* C:\OpenServer\domains\TravelBlog-1\travelblog/themes/fabriciorabelo-squad/layouts/default.htm */
class __TwigTemplate_012a550d83f7b6b31487f5a2801358864b37a7ff321d7ccf6dd40817a3574984 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html lang=\"ru\">

<head>
    <meta charset=\"utf-8\">
    <title>TRAVELTOUR - ";
        // line 6
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 6), "title", [], "any", false, false, true, 6), 6, $this->source), "html", null, true);
        echo "</title>
    
    <!-- Metadata -->
    <meta name=\"title\" content=\"";
        // line 9
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_title", [], "any", false, false, true, 9)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 9), "meta_title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 9), "meta_title", [], "any", false, false, true, 9), 9, $this->source), "html", null, true);
        }
        echo "\">
    <meta name=\"keywords\" content=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 10), "meta_keywords", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
        echo "\">
    <meta name=\"description\" content=\"";
        // line 11
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "meta_description", [], "any", false, false, true, 11)) {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 11), "meta_description", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "theme", [], "any", false, false, true, 11), "meta_description", [], "any", false, false, true, 11), 11, $this->source), "html", null, true);
        }
        echo "\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Bootstrap Core CSS -->
    <link href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Fonts -->
    <link href=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/font-awesome/css/font-awesome.min.css");
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.css");
        echo "\" rel=\"stylesheet\" />

    <!-- Squad theme CSS -->
    <link href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/style.css");
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/color/default.css");
        echo "\" rel=\"stylesheet\">

    <!--[if lte IE 9]>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Extra styles -->
    ";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('css');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('styles');
        // line 34
        echo "
    <!-- Inline styles -->
    <style>";
        // line 36
        $context['__placeholder_inline_styles_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('inline_styles', $context['__placeholder_inline_styles_default_contents']);
        unset($context['__placeholder_inline_styles_default_contents']);        echo "</style>
</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-custom\">
    <!-- Preloader -->
    <div id=\"preloader\">
      <div id=\"load\"></div>
    </div>

    ";
        // line 45
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 46
        echo "
    ";
        // line 47
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 48
        echo "
    ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "
    <!-- Core JavaScript Files -->
    <script src=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.min.js");
        echo "\"></script>
    <script src=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script src=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.easing.min.js");
        echo "\"></script>
    <script src=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.scrollTo.js");
        echo "\"></script>
    <script src=\"";
        // line 56
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/wow.min.js");
        echo "\"></script>]

    <!-- Custom Theme JavaScript -->
    <script src=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/custom.js");
        echo "\"></script>

    <!-- OctoberCMS Ajax Framework and extras -->
    ";
        // line 62
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 63
        echo "
    <!-- Extra -->
    ";
        // line 65
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 66
        echo "
    <!-- Inline scripts -->
    <script>";
        // line 68
        $context['__placeholder_inline_scripts_default_contents'] = null;        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('inline_scripts', $context['__placeholder_inline_scripts_default_contents']);
        unset($context['__placeholder_inline_scripts_default_contents']);        echo "</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 68,  193 => 66,  190 => 65,  186 => 63,  175 => 62,  169 => 59,  163 => 56,  159 => 55,  155 => 54,  151 => 53,  147 => 52,  143 => 50,  139 => 49,  136 => 48,  134 => 47,  131 => 46,  127 => 45,  115 => 36,  111 => 34,  108 => 33,  97 => 25,  93 => 24,  87 => 21,  83 => 20,  77 => 17,  64 => 11,  60 => 10,  52 => 9,  46 => 6,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"ru\">

<head>
    <meta charset=\"utf-8\">
    <title>TRAVELTOUR - {{ this.page.title }}</title>
    
    <!-- Metadata -->
    <meta name=\"title\" content=\"{% if this.page.meta_title %}{{ this.page.meta_title }}{% else %}{{ this.theme.meta_title }}{% endif %}\">
    <meta name=\"keywords\" content=\"{{ this.theme.meta_keywords }}\">
    <meta name=\"description\" content=\"{% if this.page.meta_description %}{{ this.page.meta_description }}{% else %}{{ this.theme.meta_description }}{% endif %}\">

    <!-- Mobile Metas -->
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Bootstrap Core CSS -->
    <link href=\"{{ 'assets/css/bootstrap.min.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">

    <!-- Fonts -->
    <link href=\"{{ 'assets/font-awesome/css/font-awesome.min.css'|theme }}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{ 'assets/css/animate.css'|theme }}\" rel=\"stylesheet\" />

    <!-- Squad theme CSS -->
    <link href=\"{{ 'assets/css/style.css'|theme }}\" rel=\"stylesheet\">
    <link href=\"{{ 'assets/color/default.css'|theme }}\" rel=\"stylesheet\">

    <!--[if lte IE 9]>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js\"></script>
        <script type=\"text/javascript\" src=\"https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->

    <!-- Extra styles -->
    {% styles %}

    <!-- Inline styles -->
    <style>{% placeholder inline_styles %}</style>
</head>

<body id=\"page-top\" data-spy=\"scroll\" data-target=\".navbar-custom\">
    <!-- Preloader -->
    <div id=\"preloader\">
      <div id=\"load\"></div>
    </div>

    {% partial 'header' %}

    {% page %}

    {% partial 'footer' %}

    <!-- Core JavaScript Files -->
    <script src=\"{{ 'assets/js/jquery.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.easing.min.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/jquery.scrollTo.js'|theme }}\"></script>
    <script src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>]

    <!-- Custom Theme JavaScript -->
    <script src=\"{{ 'assets/js/custom.js'|theme }}\"></script>

    <!-- OctoberCMS Ajax Framework and extras -->
    {% framework extras %}

    <!-- Extra -->
    {% scripts %}

    <!-- Inline scripts -->
    <script>{% placeholder inline_scripts %}</script>
</body>
</html>", "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/layouts/default.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 9, "styles" => 33, "placeholder" => 36, "partial" => 45, "page" => 47, "framework" => 62, "scripts" => 65);
        static $filters = array("escape" => 6, "theme" => 17);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'styles', 'placeholder', 'partial', 'page', 'framework', 'scripts'],
                ['escape', 'theme'],
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

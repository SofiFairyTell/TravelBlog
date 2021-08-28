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

/* C:\OpenServer\domains\TravelBlog-1\travelblog/themes/fabriciorabelo-squad/partials/footer.htm */
class __TwigTemplate_528193683e2860b12f15b8cb3432382ca67376214cf168b38a4e58520b2c726d extends \Twig\Template
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
        echo "<footer>
 <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-md-12 col-lg-12\">
             <div class=\"wow shake\" data-wow-delay=\"0.4s\">
             <div class=\"page-scroll marginbot-30\">
                 <a href=\"#intro\" id=\"totop\" class=\"btn btn-circle\">
                     <i class=\"fa fa-angle-double-up animated\"></i>
                 </a>
             </div>
             </div>
             <p>&copy;Copyright  2021 - ";
        // line 12
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " Sofi Fairy-Tell </p>
         </div>
     </div>
 </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer>
 <div class=\"container\">
     <div class=\"row\">
         <div class=\"col-md-12 col-lg-12\">
             <div class=\"wow shake\" data-wow-delay=\"0.4s\">
             <div class=\"page-scroll marginbot-30\">
                 <a href=\"#intro\" id=\"totop\" class=\"btn btn-circle\">
                     <i class=\"fa fa-angle-double-up animated\"></i>
                 </a>
             </div>
             </div>
             <p>&copy;Copyright  2021 - {{ \"now\"|date(\"Y\") }} Sofi Fairy-Tell </p>
         </div>
     </div>
 </div>
</footer>", "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/partials/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 12, "date" => 12);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'date'],
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

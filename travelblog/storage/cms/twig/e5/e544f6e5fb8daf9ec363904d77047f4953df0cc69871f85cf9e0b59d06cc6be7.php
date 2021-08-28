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

/* C:\OpenServer\domains\TravelBlog-1\travelblog/themes/fabriciorabelo-squad/pages/maintenance.htm */
class __TwigTemplate_fd36fe43cb2e05285605d1ff615f1cf4756950b4200d33b4aa82cd2eeb44f75b extends \Twig\Template
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
        echo "<!-- Section: intro -->
<section id=\"intro\" class=\"intro\">

    <div class=\"slogan\">
        <h2>OOPS !!!<span class=\"text_color\"> MAINTENANCE</span> </h2>
        <h4>SORRY, BUT WE ARE UNDER MAINTENANCE AT THIS MOMENT, PLEASE TRY AGAIN LATER.</h4>
    </div>
</section>
<!-- /Section: intro -->";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/pages/maintenance.htm";
    }

    public function getDebugInfo()
    {
        return array (  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Section: intro -->
<section id=\"intro\" class=\"intro\">

    <div class=\"slogan\">
        <h2>OOPS !!!<span class=\"text_color\"> MAINTENANCE</span> </h2>
        <h4>SORRY, BUT WE ARE UNDER MAINTENANCE AT THIS MOMENT, PLEASE TRY AGAIN LATER.</h4>
    </div>
</section>
<!-- /Section: intro -->", "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/pages/maintenance.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array();
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
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

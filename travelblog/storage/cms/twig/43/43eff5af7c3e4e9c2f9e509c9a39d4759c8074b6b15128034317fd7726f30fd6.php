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

/* C:\OpenServer\domains\TravelBlog-1\travelblog/themes/fabriciorabelo-squad/pages/home.htm */
class __TwigTemplate_f232650230d35569a9ec5ca4066fad69d480f5952ab0cb384a336c5bbbc194e4 extends \Twig\Template
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
        ";
        // line 5
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("section_tourlist.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 6
        echo "    </div>
    <div class=\"page-scroll\">
        <a href=\"#service\" class=\"btn btn-circle\">
            <i class=\"fa fa-angle-double-down animated\"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: about -->
<section id=\"about\" class=\"home-section text-center\">
    <div class=\"heading-about\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>О нас</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.2s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Anna Hanaceck</h5>
                    <p class=\"subtitle\">Pixel Crafter</p>
                    <div class=\"avatar\"><img src=\"";
        // line 46
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/1.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.5s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Maura Daniels</h5>
                    <p class=\"subtitle\">Ruby on Rails</p>
                    <div class=\"avatar\"><img src=\"";
        // line 57
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/2.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.8s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Jack Briane</h5>
                    <p class=\"subtitle\">jQuery Ninja</p>
                    <div class=\"avatar\"><img src=\"";
        // line 69
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/3.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"1s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Tom Petterson</h5>
                    <p class=\"subtitle\">Typographer</p>
                    <div class=\"avatar\"><img src=\"";
        // line 81
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/4.jpg");
        echo "\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /Section: about -->


<!-- Section: services -->
<section id=\"service\" class=\"home-section text-center bg-gray\">

    <div class=\"heading-about\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>Our Services</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInLeft\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 122
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/service-icon-1.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Print</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 135
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/service-icon-2.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Web Design</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 148
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/service-icon-3.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Photography</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"";
        // line 161
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/icons/service-icon-4.png");
        echo "\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Cloud System</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /Section: services -->




<!-- Section: contact -->
<section id=\"contact\" class=\"home-section text-center\">
    <div class=\"heading-contact\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>Get in touch</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
<div class=\"row\">
    <div class=\"col-lg-8\">
        <div class=\"boxed-grey\">
            <form id=\"contact-form\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"name\">
                            Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">
                            Email Address</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                            </span>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" required=\"required\" /></div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"subject\">
                            Subject</label>
                        <select id=\"subject\" name=\"subject\" class=\"form-control\" required=\"required\">
                            <option value=\"na\" selected=\"\">Choose One:</option>
                            <option value=\"service\">General Customer Service</option>
                            <option value=\"suggestions\">Suggestions</option>
                            <option value=\"product\">Product Support</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"name\">
                            Сообщение</label>
                        <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"9\" cols=\"25\" required=\"required\"
                            placeholder=\"Message\"></textarea>
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <button type=\"submit\" class=\"btn btn-skin pull-right\" id=\"btnContactUs\">
                        Send Message</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class=\"col-lg-4\">
        <div class=\"widget-contact\">
            <h5>Main Office</h5>

            <address>
              <strong>Squas Design, Inc.</strong><br>
              Tower 795 Folsom Ave, Beautiful Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title=\"Phone\">P:</abbr> (123) 456-7890
            </address>

            <address>
              <strong>Email</strong><br>
              <a href=\"mailto:#\">email.name@example.com</a>
            </address>
            <address>
              <strong>We're on social networks</strong><br>
                    <ul class=\"company-social\">
                        <li class=\"social-facebook\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"social-twitter\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li class=\"social-dribble\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li class=\"social-google\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                    </ul>
            </address>

        </div>
    </div>
</div>

    </div>
</section>
<!-- /Section: contact -->";
    }

    public function getTemplateName()
    {
        return "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 161,  211 => 148,  195 => 135,  179 => 122,  135 => 81,  120 => 69,  105 => 57,  91 => 46,  49 => 6,  45 => 5,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!-- Section: intro -->
<section id=\"intro\" class=\"intro\">

    <div class=\"slogan\">
        {% content 'section_tourlist.htm' %}
    </div>
    <div class=\"page-scroll\">
        <a href=\"#service\" class=\"btn btn-circle\">
            <i class=\"fa fa-angle-double-down animated\"></i>
        </a>
    </div>
</section>
<!-- /Section: intro -->

<!-- Section: about -->
<section id=\"about\" class=\"home-section text-center\">
    <div class=\"heading-about\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>О нас</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.2s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Anna Hanaceck</h5>
                    <p class=\"subtitle\">Pixel Crafter</p>
                    <div class=\"avatar\"><img src=\"{{ 'assets/images/team/1.jpg'|theme }}\" alt=\"\" class=\"img-responsive img-circle\" /></div>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.5s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Maura Daniels</h5>
                    <p class=\"subtitle\">Ruby on Rails</p>
                    <div class=\"avatar\"><img src=\"{{ 'assets/images/team/2.jpg'|theme }}\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"0.8s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Jack Briane</h5>
                    <p class=\"subtitle\">jQuery Ninja</p>
                    <div class=\"avatar\"><img src=\"{{ 'assets/images/team/3.jpg'|theme }}\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
        <div class=\"col-xs-6 col-sm-3 col-md-3\">
            <div class=\"wow bounceInUp\" data-wow-delay=\"1s\">
            <div class=\"team boxed-grey\">
                <div class=\"inner\">
                    <h5>Tom Petterson</h5>
                    <p class=\"subtitle\">Typographer</p>
                    <div class=\"avatar\"><img src=\"{{ 'assets/images/team/4.jpg'|theme }}\" alt=\"\" class=\"img-responsive img-circle\" /></div>

                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /Section: about -->


<!-- Section: services -->
<section id=\"service\" class=\"home-section text-center bg-gray\">

    <div class=\"heading-about\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>Our Services</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInLeft\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"{{ 'assets/images/icons/service-icon-1.png'|theme }}\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Print</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"{{ 'assets/images/icons/service-icon-2.png'|theme }}\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Web Design</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInUp\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"{{ 'assets/images/icons/service-icon-3.png'|theme }}\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Photography</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
        <div class=\"col-sm-3 col-md-3\">
            <div class=\"wow fadeInRight\" data-wow-delay=\"0.2s\">
            <div class=\"service-box\">
                <div class=\"service-icon\">
                    <img src=\"{{ 'assets/images/icons/service-icon-4.png'|theme }}\" alt=\"\" />
                </div>
                <div class=\"service-desc\">
                    <h5>Cloud System</h5>
                    <p>Vestibulum tincidunt enim in pharetra malesuada. Duis semper magna metus electram accommodare.</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- /Section: services -->




<!-- Section: contact -->
<section id=\"contact\" class=\"home-section text-center\">
    <div class=\"heading-contact\">
        <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8 col-lg-offset-2\">
                <div class=\"wow bounceInDown\" data-wow-delay=\"0.4s\">
                <div class=\"section-heading\">
                <h2>Get in touch</h2>
                <i class=\"fa fa-2x fa-angle-down\"></i>

                </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class=\"container\">

    <div class=\"row\">
        <div class=\"col-lg-2 col-lg-offset-5\">
            <hr class=\"marginbot-50\">
        </div>
    </div>
<div class=\"row\">
    <div class=\"col-lg-8\">
        <div class=\"boxed-grey\">
            <form id=\"contact-form\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"name\">
                            Name</label>
                        <input type=\"text\" class=\"form-control\" id=\"name\" placeholder=\"Enter name\" required=\"required\" />
                    </div>
                    <div class=\"form-group\">
                        <label for=\"email\">
                            Email Address</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"glyphicon glyphicon-envelope\"></span>
                            </span>
                            <input type=\"email\" class=\"form-control\" id=\"email\" placeholder=\"Enter email\" required=\"required\" /></div>
                    </div>
                    <div class=\"form-group\">
                        <label for=\"subject\">
                            Subject</label>
                        <select id=\"subject\" name=\"subject\" class=\"form-control\" required=\"required\">
                            <option value=\"na\" selected=\"\">Choose One:</option>
                            <option value=\"service\">General Customer Service</option>
                            <option value=\"suggestions\">Suggestions</option>
                            <option value=\"product\">Product Support</option>
                        </select>
                    </div>
                </div>
                <div class=\"col-md-6\">
                    <div class=\"form-group\">
                        <label for=\"name\">
                            Сообщение</label>
                        <textarea name=\"message\" id=\"message\" class=\"form-control\" rows=\"9\" cols=\"25\" required=\"required\"
                            placeholder=\"Message\"></textarea>
                    </div>
                </div>
                <div class=\"col-md-12\">
                    <button type=\"submit\" class=\"btn btn-skin pull-right\" id=\"btnContactUs\">
                        Send Message</button>
                </div>
            </div>
            </form>
        </div>
    </div>

    <div class=\"col-lg-4\">
        <div class=\"widget-contact\">
            <h5>Main Office</h5>

            <address>
              <strong>Squas Design, Inc.</strong><br>
              Tower 795 Folsom Ave, Beautiful Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title=\"Phone\">P:</abbr> (123) 456-7890
            </address>

            <address>
              <strong>Email</strong><br>
              <a href=\"mailto:#\">email.name@example.com</a>
            </address>
            <address>
              <strong>We're on social networks</strong><br>
                    <ul class=\"company-social\">
                        <li class=\"social-facebook\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a></li>
                        <li class=\"social-twitter\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a></li>
                        <li class=\"social-dribble\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-dribbble\"></i></a></li>
                        <li class=\"social-google\"><a href=\"#\" target=\"_blank\"><i class=\"fa fa-google-plus\"></i></a></li>
                    </ul>
            </address>

        </div>
    </div>
</div>

    </div>
</section>
<!-- /Section: contact -->", "C:\\OpenServer\\domains\\TravelBlog-1\\travelblog/themes/fabriciorabelo-squad/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("content" => 5);
        static $filters = array("theme" => 46);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['content'],
                ['theme'],
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

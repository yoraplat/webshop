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

/* partials/navigation.html.twig */
class __TwigTemplate_db8f24aa8611942775c02acb5f6b28b20024aca66ee7dfb319b54646e484b59f extends Template
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
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/navigation.html.twig"));

        // line 1
        $context["route"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 1, $this->source); })()), "request", [], "any", false, false, false, 1), "attributes", [], "any", false, false, false, 1), "get", [0 => "_route"], "method", false, false, false, 1);
        // line 2
        $context["route_params"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 2, $this->source); })()), "request", [], "any", false, false, false, 2), "attributes", [], "any", false, false, false, 2), "get", [0 => "_route_params"], "method", false, false, false, 2);
        // line 3
        $context["params"] = twig_array_merge((isset($context["route_params"]) || array_key_exists("route_params", $context) ? $context["route_params"] : (function () { throw new RuntimeError('Variable "route_params" does not exist.', 3, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 3, $this->source); })()), "request", [], "any", false, false, false, 3), "query", [], "any", false, false, false, 3), "all", [], "any", false, false, false, 3));
        // line 4
        echo "
<nav class=\"navbar fixed-top navbar-light bg-light\">
\t<div class=\"container-lg\">
\t\t<a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_home");
        echo "\">Logo</a>
\t\t<ul class=\"navbar-nav d-flex flex-row\">
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_home");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a>
\t\t\t</li>

\t\t\t";
        // line 14
        echo "\t\t\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 15
            echo "\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link\" href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_cart");
            echo "\">
\t\t\t\t\t";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Cart", [], "messages");
            // line 18
            echo "\t\t\t\t\t";
            // line 19
            echo "\t\t\t\t\t";
            if (($this->env->getRuntime('App\Twig\AppRuntime')->getCartCount() != 0)) {
                // line 20
                echo "\t\t\t\t\t<span class=\"badge bg-primary\">";
                echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->getCartCount(), "html", null, true);
                echo "</span>
\t\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t</a>
\t\t\t</li>
\t\t\t";
        }
        // line 25
        echo "\t\t\t
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t";
        // line 27
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 28
            echo "\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", [], "messages");
            echo "</a>
\t\t\t\t";
        } else {
            // line 30
            echo "\t\t\t\t<a class=\"nav-link\" href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout", [], "messages");
            echo "</a>
\t\t\t\t";
        }
        // line 32
        echo "\t\t\t</li>
\t\t
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<p class=\"nav-link\" href=\"#\"><a style=\"color:grey; text-decoration:none\" class=\"";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_locale", [], "any", true, true, false, 35) && (twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), "_locale", [], "any", false, false, false, 35) == "nl"))) {
            echo "fw-bold";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()), twig_array_merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), ["_locale" => "nl"])), "html", null, true);
        echo "\">NL</a> | <a style=\"color:grey; text-decoration:none\" class=\"";
        if (( !twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "_locale", [], "any", true, true, false, 35) || (twig_get_attribute($this->env, $this->source, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), "_locale", [], "any", false, false, false, 35) == "en"))) {
            echo "fw-bold";
        }
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 35, $this->source); })()), twig_array_merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 35, $this->source); })()), ["_locale" => "en"])), "html", null, true);
        echo "\">EN</a></p>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "partials/navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 35,  118 => 32,  110 => 30,  102 => 28,  100 => 27,  96 => 25,  91 => 22,  85 => 20,  82 => 19,  80 => 18,  78 => 17,  74 => 16,  71 => 15,  68 => 14,  60 => 10,  54 => 7,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route = app.request.attributes.get('_route') %}
{% set route_params = app.request.attributes.get('_route_params') %}
{% set params = route_params|merge(app.request.query.all) %}

<nav class=\"navbar fixed-top navbar-light bg-light\">
\t<div class=\"container-lg\">
\t\t<a class=\"navbar-brand\" href=\"{{ path('front_end_home') }}\">Logo</a>
\t\t<ul class=\"navbar-nav d-flex flex-row\">
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"{{ path('front_end_home') }}\">{% trans %}Home{% endtrans %}</a>
\t\t\t</li>

\t\t\t{# If user is logged in #}
\t\t\t{% if is_granted('ROLE_USER') %}
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('front_end_cart') }}\">
\t\t\t\t\t{% trans %}Cart{% endtrans %}
\t\t\t\t\t{# Badge with amount of products in shopping cart #}
\t\t\t\t\t{% if getCartCount() != 0 %}
\t\t\t\t\t<span class=\"badge bg-primary\">{{ getCartCount() }}</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</a>
\t\t\t</li>
\t\t\t{% endif %}
\t\t\t
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t{% if not is_granted('ROLE_USER') %}
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_login') }}\">{% trans %}Login{% endtrans %}</a>
\t\t\t\t{% else %}
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_logout') }}\">{% trans %}Logout{% endtrans %}</a>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<p class=\"nav-link\" href=\"#\"><a style=\"color:grey; text-decoration:none\" class=\"{% if params._locale is defined and params._locale == \"nl\" %}fw-bold{% endif %}\" href=\"{{ path(route, params|merge({ _locale: 'nl' })) }}\">NL</a> | <a style=\"color:grey; text-decoration:none\" class=\"{% if params._locale is not defined or params._locale == \"en\" %}fw-bold{% endif %}\" href=\"{{ path(route, params|merge({ _locale: 'en' })) }}\">EN</a></p>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>", "partials/navigation.html.twig", "D:\\data\\Documents\\projecten\\symfony5_webshop\\webshopV1\\templates\\partials\\navigation.html.twig");
    }
}

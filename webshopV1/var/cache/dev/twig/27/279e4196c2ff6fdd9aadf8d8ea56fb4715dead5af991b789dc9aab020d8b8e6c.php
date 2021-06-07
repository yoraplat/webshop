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
class __TwigTemplate_e947ba7bdf7e191daed7159ecd709448a4e86b01bffff5195360fb2474d27b6d extends Template
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
\t\t<a class=\"navbar-brand\">Logo</a>
\t\t<ul class=\"navbar-nav d-flex flex-row\">
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"#\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Home", [], "messages");
        echo "</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link\" href=\"#\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", [], "messages");
        echo "</a>
\t\t\t</li>
\t\t\t";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 15, $this->source); })()));
        echo "
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<p class=\"nav-link\" href=\"#\"><a style=\"color:grey; text-decoration:none\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()), twig_array_merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 17, $this->source); })()), ["_locale" => "nl"])), "html", null, true);
        echo "\">NL</a> | <a style=\"color:grey; text-decoration:none\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 17, $this->source); })()), twig_array_merge((isset($context["params"]) || array_key_exists("params", $context) ? $context["params"] : (function () { throw new RuntimeError('Variable "params" does not exist.', 17, $this->source); })()), ["_locale" => "en"])), "html", null, true);
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
        return array (  73 => 17,  68 => 15,  63 => 13,  57 => 10,  49 => 4,  47 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set route = app.request.attributes.get('_route') %}
{% set route_params = app.request.attributes.get('_route_params') %}
{% set params = route_params|merge(app.request.query.all) %}

<nav class=\"navbar fixed-top navbar-light bg-light\">
\t<div class=\"container-lg\">
\t\t<a class=\"navbar-brand\">Logo</a>
\t\t<ul class=\"navbar-nav d-flex flex-row\">
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link active\" aria-current=\"page\" href=\"#\">{% trans %}Home{% endtrans %}</a>
\t\t\t</li>
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<a class=\"nav-link\" href=\"#\">{% trans %}Login{% endtrans %}</a>
\t\t\t</li>
\t\t\t{{ dump(params)}}
\t\t\t<li class=\"nav-item px-2\">
\t\t\t\t<p class=\"nav-link\" href=\"#\"><a style=\"color:grey; text-decoration:none\" href=\"{{ path(route, params|merge({ _locale: 'nl' })) }}\">NL</a> | <a style=\"color:grey; text-decoration:none\" href=\"{{ path(route, params|merge({ _locale: 'en' })) }}\">EN</a></p>
\t\t\t</li>
\t\t</ul>
\t</div>
</nav>", "partials/navigation.html.twig", "/home/yoram/Documents/projects/webshop/webshopV1/webshopV1/templates/partials/navigation.html.twig");
    }
}

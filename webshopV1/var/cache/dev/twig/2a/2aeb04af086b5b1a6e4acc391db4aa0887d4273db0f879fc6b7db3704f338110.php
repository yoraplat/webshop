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

/* front_end/partials/user_nav.html.twig */
class __TwigTemplate_e33ad7f8f5782953baa4b8643336ca4fe8216895c192f1b4776fb9079b1b8ef5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/partials/user_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/partials/user_nav.html.twig"));

        // line 1
        echo "<div class=\"col-md-3\">
\t<div class=\"col bg-light rounded\">
\t\t<ul class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none ";
        // line 5
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 5, $this->source); })()) == "cart")) ? ("text-secondary") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_cart");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shopping Cart", [], "messages");
        // line 6
        echo "\t\t\t\t\t<span class=\"badge bg-primary\">3</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none ";
        // line 10
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 10, $this->source); })()) == "orders")) ? ("text-secondary") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_orders");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "messages");
        echo "</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none ";
        // line 13
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 13, $this->source); })()) == "profile")) ? ("text-secondary") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_profile");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Profile", [], "messages");
        echo "</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front_end/partials/user_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  61 => 10,  55 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-3\">
\t<div class=\"col bg-light rounded\">
\t\t<ul class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none {{ active == \"cart\"? 'text-secondary' }}\" href=\"{{ path('front_end_cart') }}\">{% trans %}Shopping Cart{% endtrans %}
\t\t\t\t\t<span class=\"badge bg-primary\">3</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none {{ active == \"orders\"? 'text-secondary' }}\" href=\"{{ path('front_end_orders') }}\">{% trans %}Orders{% endtrans %}</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none {{ active == \"profile\"? 'text-secondary' }}\" href=\"{{ path('front_end_profile') }}\">{% trans %}Profile{% endtrans %}</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
", "front_end/partials/user_nav.html.twig", "D:\\data\\Documents\\projecten\\symfony5_webshop\\webshopV1\\templates\\front_end\\partials\\user_nav.html.twig");
    }
}

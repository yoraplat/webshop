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
class __TwigTemplate_74940c5be227f54c71fe811572f5da5a8ad486ced607783379f4cc0a5031b862 extends Template
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
        echo "\t\t\t\t\t";
        if (($this->env->getRuntime('App\Twig\AppRuntime')->getCartCount() != 0)) {
            // line 7
            echo "\t\t\t\t\t<span class=\"badge bg-primary\">";
            echo twig_escape_filter($this->env, $this->env->getRuntime('App\Twig\AppRuntime')->getCartCount(), "html", null, true);
            echo "</span>
\t\t\t\t\t";
        }
        // line 9
        echo "\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none ";
        // line 12
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 12, $this->source); })()) == "orders")) ? ("text-secondary") : (""));
        echo "\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_orders");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "messages");
        echo "</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none ";
        // line 15
        echo ((((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 15, $this->source); })()) == "profile")) ? ("text-secondary") : (""));
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
        return array (  79 => 15,  69 => 12,  64 => 9,  58 => 7,  55 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-3\">
\t<div class=\"col bg-light rounded\">
\t\t<ul class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none {{ active == \"cart\"? 'text-secondary' }}\" href=\"{{ path('front_end_cart') }}\">{% trans %}Shopping Cart{% endtrans %}
\t\t\t\t\t{% if getCartCount() != 0 %}
\t\t\t\t\t<span class=\"badge bg-primary\">{{ getCartCount() }}</span>
\t\t\t\t\t{% endif %}
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

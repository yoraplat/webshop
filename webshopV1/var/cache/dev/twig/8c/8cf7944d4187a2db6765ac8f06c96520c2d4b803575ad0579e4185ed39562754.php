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

/* front_end/profile/partials/user_nav.html.twig */
class __TwigTemplate_1118562930ea8576fbf494981638b2a06941de61600dc83261c8933dec367889 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/profile/partials/user_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/profile/partials/user_nav.html.twig"));

        // line 1
        echo "<div class=\"col-md-3\">
\t<div class=\"col bg-light rounded\">
\t\t<ul class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none\" href=\"#\">";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Shopping Cart", [], "messages");
        // line 6
        echo "\t\t\t\t\t<span class=\"badge bg-primary\">3</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none\" href=\"#\">";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Orders", [], "messages");
        echo "</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none\" href=\"#\">";
        // line 13
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
        return "front_end/profile/partials/user_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  57 => 10,  51 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"col-md-3\">
\t<div class=\"col bg-light rounded\">
\t\t<ul class=\"list-group\">
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none\" href=\"#\">{% trans %}Shopping Cart{% endtrans %}
\t\t\t\t\t<span class=\"badge bg-primary\">3</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none\" href=\"#\">{% trans %}Orders{% endtrans %}</a>
\t\t\t</li>
\t\t\t<li class=\"list-group-item\">
\t\t\t\t<a class=\"text-decoration-none\" href=\"#\">{% trans %}Profile{% endtrans %}</a>
\t\t\t</li>
\t\t</ul>
\t</div>
</div>
", "front_end/profile/partials/user_nav.html.twig", "D:\\data\\Documents\\projecten\\symfony5_webshop\\webshopV1\\templates\\front_end\\profile\\partials\\user_nav.html.twig");
    }
}

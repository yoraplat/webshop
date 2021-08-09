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

/* front_end/partials/product_list.html.twig */
class __TwigTemplate_f50fc3141c8a3bd0b6280f5648fe65a178922ed599fdc73c138c91f4777166fe extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/partials/product_list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/partials/product_list.html.twig"));

        // line 1
        echo "<div class=\"products-list\">

    ";
        // line 4
        echo "    <div class=\"spinner-border loading-icon text-primary\" role=\"status\">
  <span class=\"visually-hidden\">Loading...</span>
</div>
</div>


";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "front_end/partials/product_list.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  47 => 4,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"products-list\">

    {# Loading icon for the products, spinner is removed after the first attempt to fetch products #}
    <div class=\"spinner-border loading-icon text-primary\" role=\"status\">
  <span class=\"visually-hidden\">Loading...</span>
</div>
</div>


", "front_end/partials/product_list.html.twig", "D:\\data\\Documents\\projecten\\symfony5_webshop\\webshopV1\\templates\\front_end\\partials\\product_list.html.twig");
    }
}

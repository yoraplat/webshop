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

/* front_end/product/detail.html.twig */
class __TwigTemplate_2a33026a5e03a0cb84823d05fdfc8b25c772ee52bc12250dae8e2bab4bdf7f3f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascript_inline' => [$this, 'block_javascript_inline'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/product/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/product/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_end/product/detail.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "\t<div class=\"container-fluid\">
\t\t<br>
\t</div>
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t\t";
        // line 15
        echo "\t\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\"> <div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 21, $this->source); })()));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 22
            echo "\t\t\t\t\t\t\t<div class=\"carousel-item ";
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 22)) {
                echo "active";
            }
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["image"], "url", [], "any", false, false, false, 23), "html", null, true);
            echo "\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t\t<div>
\t\t\t\t\t<p class=\"h1 text-uppercase\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 41, $this->source); })()), "title", [], "any", false, false, false, 41), "html", null, true);
        echo "</p>
\t\t\t\t\t<p class=\"text-secondary text-uppercase\">Product category</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<p class=\"\">???59,99</p>
\t\t\t\t\t<p class=\"h6\">Description</p>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div>
\t\t\t\t\t<p>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true);
        echo "</p>
\t\t\t\t\t<p class=\"h6\">Options</p>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<form>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t<select class=\"form-select selectSize\" id=\"floatingSelect\" aria-label=\"Select a size\" required>
\t\t\t\t\t\t\t\t<option hidden value=\"\">";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select a size", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"s\">Small</option>
\t\t\t\t\t\t\t\t<option value=\"m\">Medium</option>
\t\t\t\t\t\t\t\t<option value=\"l\">Large</option>
\t\t\t\t\t\t\t\t<option value=\"xl\">Extra Large</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"floatingSelect\">";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Size", [], "messages");
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t<select class=\"form-select selectColor\" id=\"floatingSelect\" aria-label=\"Select a color\" required>
\t\t\t\t\t\t\t\t<option hidden value=\"\">";
        // line 71
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Choose a color", [], "messages");
        echo "</option>
\t\t\t\t\t\t\t\t<option value=\"red\">Red</option>
\t\t\t\t\t\t\t\t<option value=\"white\">White</option>
\t\t\t\t\t\t\t\t<option value=\"green\">Green</option>
\t\t\t\t\t\t\t\t<option value=\"yellow\">Yellow</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"floatingSelect\">";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Color", [], "messages");
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t<select class=\"form-select selectAmount\" id=\"floatingSelect\" aria-label=\"Select an amount\">
\t\t\t\t\t\t\t\t<option selected value=\"1\">1</option>
\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"floatingSelect\">";
        // line 95
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Amount", [], "messages");
        echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn-primary add-btn\" ";
        // line 98
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            echo "disabled";
        }
        echo " type=\"submit\">
\t\t\t\t\t<div class=\"spinner-border spinner-border-sm text-light\" style=\"display:none\" id=\"postLoader\" role=\"status\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Loading...</span>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"fa fa-shopping-cart\" id=\"cartIcon\"></i> 
\t\t\t\t\t ";
        // line 103
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 104
            echo "\t\t\t\t\t ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Login", [], "messages");
            // line 105
            echo "\t\t\t\t\t ";
        } else {
            // line 106
            echo "\t\t\t\t\t ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Add to cart", [], "messages");
            // line 107
            echo "\t\t\t\t\t ";
        }
        // line 108
        echo "\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 115
    public function block_javascript_inline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_inline"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_inline"));

        // line 116
        echo "<script>
    \$(document).ready(function () {

\t\t// Show notification toasts
\t\t\$('.toast').toast('show');

\t\t// Initialize the default values of the selectable values
\t\tlet amount = 1;
\t\tlet size = null;
\t\tlet color = null;
        
\t\t// Listen for click on the \"Add to cart\" button
\t\t\$('.add-btn').click(function() {

\t\t\t// Validate if all obligatory select fields are set
\t\t\tif (size != null && color != null) {
\t\t\t\taddToCart()
\t\t\t}
\t\t})

        function addToCart() {
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_add_product_to_cart");
        echo "\",
                data: {\"product_id\": ";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 140, $this->source); })()), "id", [], "any", false, false, false, 140), "html", null, true);
        echo ", \"amount\": amount, \"size\": size, \"color\": color},
\t\t\t\t
\t\t\t\t// Initialize loading spinner
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#postLoader').show();
\t\t\t\t\t\$('#cartIcon').hide();
\t\t\t\t},

\t\t\t\tsuccess: function (response) {
\t\t\t\t\tlocation.reload()
                },
                error: function (response) {
\t\t\t\t\t
                }
            });
        }

\t\t// Listen for changes in selection of an amount
\t\t\$('.selectAmount').on('change', function() {
\t\t\tamount = this.value;
\t\t});
\t\t
\t\t// Listen for changes in selection of a size
\t\t\$('.selectSize').on('change', function() {
\t\t\tsize = this.value;
\t\t});
\t\t
\t\t// Listen for changes in selection of a color
\t\t\$('.selectColor').on('change', function() {
\t\t\tcolor = this.value;
\t\t});
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front_end/product/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 140,  317 => 139,  292 => 116,  282 => 115,  267 => 108,  264 => 107,  261 => 106,  258 => 105,  255 => 104,  253 => 103,  243 => 98,  237 => 95,  216 => 77,  207 => 71,  197 => 64,  188 => 58,  177 => 50,  165 => 41,  148 => 26,  131 => 23,  124 => 22,  107 => 21,  99 => 15,  90 => 7,  80 => 6,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Homepage
{% endblock %}

{% block body %}
\t<div class=\"container-fluid\">
\t\t<br>
\t</div>
\t<div class=\"container mt-5\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t\t{# Carousel #}
\t\t\t\t\t<div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-bs-ride=\"carousel\"> <div class=\"carousel-indicators\">
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"0\" class=\"active\" aria-current=\"true\" aria-label=\"Slide 1\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"1\" aria-label=\"Slide 2\"></button>
\t\t\t\t\t\t<button type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide-to=\"2\" aria-label=\"Slide 3\"></button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"carousel-inner\">
\t\t\t\t\t\t{% for image in images %}
\t\t\t\t\t\t\t<div class=\"carousel-item {% if loop.first %}active{% endif %}\">
\t\t\t\t\t\t\t\t<img src=\"{{ image.url }}\" class=\"d-block w-100\" alt=\"...\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endfor %}

\t\t\t\t\t</div>
\t\t\t\t\t<button class=\"carousel-control-prev\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"prev\">
\t\t\t\t\t\t<span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Previous</span>
\t\t\t\t\t</button>
\t\t\t\t\t<button class=\"carousel-control-next\" type=\"button\" data-bs-target=\"#carouselExampleIndicators\" data-bs-slide=\"next\">
\t\t\t\t\t\t<span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t<span class=\"visually-hidden\">Next</span>
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"col-sm-12 col-md-6\">
\t\t\t\t<div>
\t\t\t\t\t<p class=\"h1 text-uppercase\">{{ product.title }}</p>
\t\t\t\t\t<p class=\"text-secondary text-uppercase\">Product category</p>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<p class=\"\">???59,99</p>
\t\t\t\t\t<p class=\"h6\">Description</p>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<div>
\t\t\t\t\t<p>{{ product.description }}</p>
\t\t\t\t\t<p class=\"h6\">Options</p>
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t\t<form>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t<select class=\"form-select selectSize\" id=\"floatingSelect\" aria-label=\"Select a size\" required>
\t\t\t\t\t\t\t\t<option hidden value=\"\">{% trans %}Select a size{% endtrans %}</option>
\t\t\t\t\t\t\t\t<option value=\"s\">Small</option>
\t\t\t\t\t\t\t\t<option value=\"m\">Medium</option>
\t\t\t\t\t\t\t\t<option value=\"l\">Large</option>
\t\t\t\t\t\t\t\t<option value=\"xl\">Extra Large</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"floatingSelect\">{% trans %}Size{% endtrans %}</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t<select class=\"form-select selectColor\" id=\"floatingSelect\" aria-label=\"Select a color\" required>
\t\t\t\t\t\t\t\t<option hidden value=\"\">{% trans %}Choose a color{% endtrans %}</option>
\t\t\t\t\t\t\t\t<option value=\"red\">Red</option>
\t\t\t\t\t\t\t\t<option value=\"white\">White</option>
\t\t\t\t\t\t\t\t<option value=\"green\">Green</option>
\t\t\t\t\t\t\t\t<option value=\"yellow\">Yellow</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"floatingSelect\">{% trans %}Color{% endtrans %}</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<div class=\"form-floating\">
\t\t\t\t\t\t\t<select class=\"form-select selectAmount\" id=\"floatingSelect\" aria-label=\"Select an amount\">
\t\t\t\t\t\t\t\t<option selected value=\"1\">1</option>
\t\t\t\t\t\t\t\t<option value=\"2\">2</option>
\t\t\t\t\t\t\t\t<option value=\"3\">3</option>
\t\t\t\t\t\t\t\t<option value=\"4\">4</option>
\t\t\t\t\t\t\t\t<option value=\"5\">5</option>
\t\t\t\t\t\t\t\t<option value=\"6\">6</option>
\t\t\t\t\t\t\t\t<option value=\"7\">7</option>
\t\t\t\t\t\t\t\t<option value=\"8\">8</option>
\t\t\t\t\t\t\t\t<option value=\"9\">9</option>
\t\t\t\t\t\t\t\t<option value=\"10\">10</option>
\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t<label for=\"floatingSelect\">{% trans %}Amount{% endtrans %}</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t<button class=\"btn btn-primary add-btn\" {% if not is_granted('ROLE_USER') %}disabled{% endif %} type=\"submit\">
\t\t\t\t\t<div class=\"spinner-border spinner-border-sm text-light\" style=\"display:none\" id=\"postLoader\" role=\"status\">
\t\t\t\t\t\t<span class=\"visually-hidden\">Loading...</span>
\t\t\t\t\t</div>
\t\t\t\t\t<i class=\"fa fa-shopping-cart\" id=\"cartIcon\"></i> 
\t\t\t\t\t {% if not is_granted('ROLE_USER') %}
\t\t\t\t\t {% trans %}Login{% endtrans %}
\t\t\t\t\t {% else %}
\t\t\t\t\t {% trans %}Add to cart{% endtrans %}
\t\t\t\t\t {% endif %}
\t\t\t\t</button>
\t\t\t\t</form>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

{% block javascript_inline %}
<script>
    \$(document).ready(function () {

\t\t// Show notification toasts
\t\t\$('.toast').toast('show');

\t\t// Initialize the default values of the selectable values
\t\tlet amount = 1;
\t\tlet size = null;
\t\tlet color = null;
        
\t\t// Listen for click on the \"Add to cart\" button
\t\t\$('.add-btn').click(function() {

\t\t\t// Validate if all obligatory select fields are set
\t\t\tif (size != null && color != null) {
\t\t\t\taddToCart()
\t\t\t}
\t\t})

        function addToCart() {
            \$.ajax({
                type: \"POST\",
                url: \"{{ path(\"front_end_add_product_to_cart\") }}\",
                data: {\"product_id\": {{ product.id }}, \"amount\": amount, \"size\": size, \"color\": color},
\t\t\t\t
\t\t\t\t// Initialize loading spinner
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#postLoader').show();
\t\t\t\t\t\$('#cartIcon').hide();
\t\t\t\t},

\t\t\t\tsuccess: function (response) {
\t\t\t\t\tlocation.reload()
                },
                error: function (response) {
\t\t\t\t\t
                }
            });
        }

\t\t// Listen for changes in selection of an amount
\t\t\$('.selectAmount').on('change', function() {
\t\t\tamount = this.value;
\t\t});
\t\t
\t\t// Listen for changes in selection of a size
\t\t\$('.selectSize').on('change', function() {
\t\t\tsize = this.value;
\t\t});
\t\t
\t\t// Listen for changes in selection of a color
\t\t\$('.selectColor').on('change', function() {
\t\t\tcolor = this.value;
\t\t});
    })
</script>
{% endblock %}
", "front_end/product/detail.html.twig", "D:\\data\\Documents\\projecten\\symfony_webshop\\webshopV1\\templates\\front_end\\product\\detail.html.twig");
    }
}

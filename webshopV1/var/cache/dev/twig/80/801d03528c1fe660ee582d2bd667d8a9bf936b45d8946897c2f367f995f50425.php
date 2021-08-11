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

/* front_end/profile/cart.html.twig */
class __TwigTemplate_aa91288b440823add8e742bf97f8f3bcbb0ff7ecd099bec843a2df075204f962 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/profile/cart.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/profile/cart.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_end/profile/cart.html.twig", 1);
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

        echo "Profile";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container-fluid\">
   <br>
</div>
<div class=\"container-fluid mt-5\">
    <div class=\"row\">
        ";
        // line 11
        $this->loadTemplate("front_end/partials/user_nav.html.twig", "front_end/profile/cart.html.twig", 11)->display(twig_array_merge($context, ["active" => "cart"]));
        // line 12
        echo "        
        <div class=\"col-md-9\">
            <div class=\"row\">
                <aside class=\"col-lg-9\">
                    <div class=\"card\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-borderless table-shopping-cart\">
                                <thead class=\"text-muted\">
                                    <tr class=\"small text-uppercase\">
                                        <th scope=\"col\">";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Product", [], "messages");
        echo "</th>
                                        <th scope=\"col\" width=\"120\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Quantity", [], "messages");
        echo "</th>
                                        <th scope=\"col\" width=\"120\">";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Price", [], "messages");
        echo "</th>
                                        <th scope=\"col\" class=\"text-right d-none d-md-block\" width=\"200\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 29
            echo "                                    ";
            $context["fullProduct"] = $this->env->getRuntime('App\Twig\AppRuntime')->getProductById(twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 29));
            // line 30
            echo "
                                        <tr>
                                            <td>
                                                <figure class=\"itemside align-items-center\">
                                                    <div class=\"aside\"><img src=\"";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fullProduct"]) || array_key_exists("fullProduct", $context) ? $context["fullProduct"] : (function () { throw new RuntimeError('Variable "fullProduct" does not exist.', 34, $this->source); })()), "thumbnail", [], "any", false, false, false, 34), "html", null, true);
            echo "\" class=\"img-sm\"></div>
                                                    <figcaption class=\"info\"> <a href=\"#\" class=\"title text-dark cart-url\" data-abc=\"true\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["fullProduct"]) || array_key_exists("fullProduct", $context) ? $context["fullProduct"] : (function () { throw new RuntimeError('Variable "fullProduct" does not exist.', 35, $this->source); })()), "title", [], "any", false, false, false, 35), "html", null, true);
            echo "</a>
                                                        <p class=\"small text-muted\">";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SIZE", [], "messages");
            echo ":";
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "size", [], "any", false, false, false, 36)), "html", null, true);
            echo " <br> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Color", [], "messages");
            echo ": ";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "color", [], "any", false, false, false, 36)), "html", null, true);
            echo "</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <select class=\"form-control\">
                                                    <option selected disabled value=\"";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 42), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "amount", [], "any", false, false, false, 42), "html", null, true);
            echo "</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class=\"price-wrap\"> <var class=\"price\">\$9</var> <small class=\"text-muted\"> \$6 each</small> </div>
                                            </td>
                                            <td class=\"text-right d-none d-md-block\"> <a data-original-title=\"Save to Wishlist\" title=\"\" href=\"\" class=\"btn btn-light\" data-toggle=\"tooltip\" data-abc=\"true\"> <i class=\"fa fa-heart\"></i></a> <a href=\"\" class=\"btn btn-light btn-round\" data-abc=\"true\"> ";
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Remove", [], "messages");
            echo "</a> </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </aside>
                <aside class=\"col-lg-3\">
                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <form>
                                <div class=\"form-group\"> <label>Have coupon?</label>
                                    <div class=\"input-group\"> <input type=\"text\" class=\"form-control coupon\" name=\"\" placeholder=\"Coupon code\"> <span class=\"input-group-append\"> <button class=\"btn btn-primary btn-apply coupon\">Apply</button> </span> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <dl class=\"dlist-align\">
                                <dt>";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total price", [], "messages");
        echo ":</dt>
                                <dd class=\"text-right ml-3\">\$69.97</dd>
                            </dl>
                            <dl class=\"dlist-align\">
                                <dt>";
        // line 73
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Discount", [], "messages");
        echo ":</dt>
                                <dd class=\"text-right text-danger ml-3\">- \$10.00</dd>
                            </dl>
                            <dl class=\"dlist-align\">
                                <dt>";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Total", [], "messages");
        echo ":</dt>
                                <dd class=\"text-right text-dark b ml-3\"><strong>\$59.97</strong></dd>
                            </dl>
                            <hr> <a href=\"#\" class=\"btn btn-out btn-primary btn-square btn-main\" data-abc=\"true\"> Make Purchase </a> <a href=\"#\" class=\"btn btn-out btn-success btn-square btn-main mt-2\" data-abc=\"true\">Continue Shopping</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front_end/profile/cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 77,  207 => 73,  200 => 69,  180 => 51,  171 => 48,  160 => 42,  145 => 36,  141 => 35,  137 => 34,  131 => 30,  128 => 29,  124 => 28,  116 => 23,  112 => 22,  108 => 21,  97 => 12,  95 => 11,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profile{% endblock %}

{% block body %}
<div class=\"container-fluid\">
   <br>
</div>
<div class=\"container-fluid mt-5\">
    <div class=\"row\">
        {% include 'front_end/partials/user_nav.html.twig' with {'active': 'cart'} %}
        
        <div class=\"col-md-9\">
            <div class=\"row\">
                <aside class=\"col-lg-9\">
                    <div class=\"card\">
                        <div class=\"table-responsive\">
                            <table class=\"table table-borderless table-shopping-cart\">
                                <thead class=\"text-muted\">
                                    <tr class=\"small text-uppercase\">
                                        <th scope=\"col\">{% trans %}Product{% endtrans %}</th>
                                        <th scope=\"col\" width=\"120\">{% trans %}Quantity{% endtrans %}</th>
                                        <th scope=\"col\" width=\"120\">{% trans %}Price{% endtrans %}</th>
                                        <th scope=\"col\" class=\"text-right d-none d-md-block\" width=\"200\"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% for product in products %}
                                    {% set fullProduct = getProductById(product.product_id) %}

                                        <tr>
                                            <td>
                                                <figure class=\"itemside align-items-center\">
                                                    <div class=\"aside\"><img src=\"{{ fullProduct.thumbnail }}\" class=\"img-sm\"></div>
                                                    <figcaption class=\"info\"> <a href=\"#\" class=\"title text-dark cart-url\" data-abc=\"true\">{{ fullProduct.title }}</a>
                                                        <p class=\"small text-muted\">{% trans %}SIZE{% endtrans %}:{{ product.size|upper }} <br> {% trans %}Color{% endtrans %}: {{ product.color|capitalize }}</p>
                                                    </figcaption>
                                                </figure>
                                            </td>
                                            <td>
                                                <select class=\"form-control\">
                                                    <option selected disabled value=\"{{ product.amount }}\">{{ product.amount }}</option>
                                                </select>
                                            </td>
                                            <td>
                                                <div class=\"price-wrap\"> <var class=\"price\">\$9</var> <small class=\"text-muted\"> \$6 each</small> </div>
                                            </td>
                                            <td class=\"text-right d-none d-md-block\"> <a data-original-title=\"Save to Wishlist\" title=\"\" href=\"\" class=\"btn btn-light\" data-toggle=\"tooltip\" data-abc=\"true\"> <i class=\"fa fa-heart\"></i></a> <a href=\"\" class=\"btn btn-light btn-round\" data-abc=\"true\"> {% trans %}Remove{% endtrans %}</a> </td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </aside>
                <aside class=\"col-lg-3\">
                    <div class=\"card mb-3\">
                        <div class=\"card-body\">
                            <form>
                                <div class=\"form-group\"> <label>Have coupon?</label>
                                    <div class=\"input-group\"> <input type=\"text\" class=\"form-control coupon\" name=\"\" placeholder=\"Coupon code\"> <span class=\"input-group-append\"> <button class=\"btn btn-primary btn-apply coupon\">Apply</button> </span> </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <dl class=\"dlist-align\">
                                <dt>{% trans %}Total price{% endtrans %}:</dt>
                                <dd class=\"text-right ml-3\">\$69.97</dd>
                            </dl>
                            <dl class=\"dlist-align\">
                                <dt>{% trans %}Discount{% endtrans %}:</dt>
                                <dd class=\"text-right text-danger ml-3\">- \$10.00</dd>
                            </dl>
                            <dl class=\"dlist-align\">
                                <dt>{% trans %}Total{% endtrans %}:</dt>
                                <dd class=\"text-right text-dark b ml-3\"><strong>\$59.97</strong></dd>
                            </dl>
                            <hr> <a href=\"#\" class=\"btn btn-out btn-primary btn-square btn-main\" data-abc=\"true\"> Make Purchase </a> <a href=\"#\" class=\"btn btn-out btn-success btn-square btn-main mt-2\" data-abc=\"true\">Continue Shopping</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>

</div>
{% endblock %}
", "front_end/profile/cart.html.twig", "D:\\data\\Documents\\projecten\\symfony_webshop\\webshopV1\\templates\\front_end\\profile\\cart.html.twig");
    }
}

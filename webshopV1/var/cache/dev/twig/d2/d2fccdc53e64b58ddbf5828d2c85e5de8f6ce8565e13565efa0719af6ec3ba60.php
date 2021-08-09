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

/* front_end/home/index.html.twig */
class __TwigTemplate_8f9c9efa1e10167732f3c26ee4f80e2905bc7515708ea173b4dbfe1f9c8280e8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front_end/home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "front_end/home/index.html.twig", 1);
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

        echo "Homepage";
        
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
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col\">
            <a class=\"btn btn-primary\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasFilters\" role=\"button\"
                aria-controls=\"offcanvasFilters\">";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Select filters", [], "messages");
        echo "</a>
        </div>
    </div>

    <div class=\"row product-list-scroll\">
        ";
        // line 19
        echo "        <div class=\"col\">
            ";
        // line 20
        $this->loadTemplate("front_end/partials/product_list.html.twig", "front_end/home/index.html.twig", 20)->display($context);
        // line 21
        echo "        </div>
    </div>
</div>

";
        // line 26
        echo "<button class=\"btn btn-primary\" id=\"back-to-top\" title=\"Go to top\"><i class=\"fa fa-chevron-up\"></i></button>

";
        // line 29
        echo "<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasFilters\" aria-labelledby=\"offcanvasExampleLabel\">
    <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Set filters", [], "messages");
        echo "</h5>
        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">

        <form action=\"\">
            <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\"
                    aria-describedby=\"inputGroup-sizing-default\" placeholder=\"Search\">
            </div>

            <div class=\"input-group mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Men</label>
                </div>
            </div>
            <div class=\"input-group mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Woman</label>
                </div>
            </div>

            <div class=\"input-group mb-3\">
                <label for=\"customRange3\" class=\"form-label\">";
        // line 56
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maximum Price", [], "messages");
        echo "</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"200\" step=\"5\" value=\"20\" id=\"customRange3\">
            </div>
        </form>

    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_javascript_inline($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_inline"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript_inline"));

        // line 67
        echo "<script>
    \$(document).ready(function () {
        // Init

        // Amount of loaded products (default 40 products are returned per fetch)
        // TODO: get count of products to determine productsLoaded
        let productsLoaded = 0

        // Value which helps to determine if infinite scroll has loaded all products
        // If productsLoaded < productsIndex all products have been loaded
        // TODO: get count of products to determine productsIndex
        let productsIndex = null

        // Load first set of products
        loadWithAjax()

        // Animate preview display
        \$(document).on('mouseenter',\".product-preview\", function () {
            \$(this).find(\".product-preview-overlay\").fadeIn(150)
        })

        \$(document).on('mouseleave', \".product-preview\", function () {
            \$(this).find(\".product-preview-overlay\").fadeOut(150)
        })

        // Infinite scrolling for products
        \$(window).scroll(function () {
            if (\$(window).scrollTop() + \$(window).height() == \$(document).height()) {
                
                if (productsLoaded == productsIndex) {
                    loadWithAjax()
                } else {
                    // All products have been loaded
                }
            }
        });

        function loadWithAjax() {
            \$.ajax({
                type: \"POST\",
                url: \"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("front_end_products_load");
        echo "\",
                data: \"index=\" + productsLoaded,
                success: function (response) {

                    // Hide the loading icon
                    \$('.loading-icon').hide()

                    if (response.length == 0 && productsLoaded < 1) {
                        \$('.products-list').append(
                            `<p>No products available</p>`
                        )
                    }
                    // Update the amount of totally fetched products
                    productsLoaded = productsLoaded + response.length;
                    
                    // Update the amount of the maximum loaded products
                    productsIndex = productsIndex + response.length
                    
                    // Append the products to the products list
                    response.forEach((product) => {
                        \$('.products-list').append(
                            `
                            <div class=\"products-list-item\">
                                <a href=\"./product/\${product[0]}\">
                                    <div class=\"product-preview\">
                                        <img src=\"\${product[3]}\" class=\"img-fluid\" alt=\"...\">
                                        <div class=\"product-preview-overlay\" style=\"display:none\">
                                            <p class=\"h3\">\${product[1]}</p>
                                            <p class=\"\">\${product[2].length > 50 ? product[2].substring(0, 50) + '...' : product[2]}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            `
                        )      
                    })
                },
                error: function (response) {
                    console.log(response)
                }
            });
        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                \$('#back-to-top').css('display', 'block');
            } else {
                \$('#back-to-top').css('display', 'none');
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        \$('#back-to-top').on('click', function() {
            \$(\"html, body\").animate({ scrollTop: 0 }, 200);
            return false;
        })
    })
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "front_end/home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 107,  182 => 67,  172 => 66,  153 => 56,  125 => 31,  121 => 29,  117 => 26,  111 => 21,  109 => 20,  106 => 19,  98 => 13,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Homepage{% endblock %}

{% block body %}
<div class=\"container-fluid\">
    <br>
</div>
<div class=\"container mt-5\">
    <div class=\"row\">
        <div class=\"col\">
            <a class=\"btn btn-primary\" data-bs-toggle=\"offcanvas\" href=\"#offcanvasFilters\" role=\"button\"
                aria-controls=\"offcanvasFilters\">{% trans %}Select filters{% endtrans %}</a>
        </div>
    </div>

    <div class=\"row product-list-scroll\">
        {# Product list #}
        <div class=\"col\">
            {% include 'front_end/partials/product_list.html.twig' %}
        </div>
    </div>
</div>

{# Back to top btn #}
<button class=\"btn btn-primary\" id=\"back-to-top\" title=\"Go to top\"><i class=\"fa fa-chevron-up\"></i></button>

{# Offcanvas filters #}
<div class=\"offcanvas offcanvas-start\" tabindex=\"-1\" id=\"offcanvasFilters\" aria-labelledby=\"offcanvasExampleLabel\">
    <div class=\"offcanvas-header\">
        <h5 class=\"offcanvas-title\" id=\"offcanvasExampleLabel\">{% trans %}Set filters{% endtrans %}</h5>
        <button type=\"button\" class=\"btn-close text-reset\" data-bs-dismiss=\"offcanvas\" aria-label=\"Close\"></button>
    </div>
    <div class=\"offcanvas-body\">

        <form action=\"\">
            <div class=\"input-group mb-3\">
                <input type=\"text\" class=\"form-control\" aria-label=\"Sizing example input\"
                    aria-describedby=\"inputGroup-sizing-default\" placeholder=\"Search\">
            </div>

            <div class=\"input-group mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Men</label>
                </div>
            </div>
            <div class=\"input-group mb-3\">
                <div class=\"form-check\">
                    <input class=\"form-check-input\" type=\"checkbox\" value=\"\" id=\"flexCheckDefault\">
                    <label class=\"form-check-label\" for=\"flexCheckDefault\">Woman</label>
                </div>
            </div>

            <div class=\"input-group mb-3\">
                <label for=\"customRange3\" class=\"form-label\">{% trans %}Maximum Price{% endtrans %}</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"200\" step=\"5\" value=\"20\" id=\"customRange3\">
            </div>
        </form>

    </div>
</div>

{% endblock %}

{% block javascript_inline %}
<script>
    \$(document).ready(function () {
        // Init

        // Amount of loaded products (default 40 products are returned per fetch)
        // TODO: get count of products to determine productsLoaded
        let productsLoaded = 0

        // Value which helps to determine if infinite scroll has loaded all products
        // If productsLoaded < productsIndex all products have been loaded
        // TODO: get count of products to determine productsIndex
        let productsIndex = null

        // Load first set of products
        loadWithAjax()

        // Animate preview display
        \$(document).on('mouseenter',\".product-preview\", function () {
            \$(this).find(\".product-preview-overlay\").fadeIn(150)
        })

        \$(document).on('mouseleave', \".product-preview\", function () {
            \$(this).find(\".product-preview-overlay\").fadeOut(150)
        })

        // Infinite scrolling for products
        \$(window).scroll(function () {
            if (\$(window).scrollTop() + \$(window).height() == \$(document).height()) {
                
                if (productsLoaded == productsIndex) {
                    loadWithAjax()
                } else {
                    // All products have been loaded
                }
            }
        });

        function loadWithAjax() {
            \$.ajax({
                type: \"POST\",
                url: \"{{ path(\"front_end_products_load\") }}\",
                data: \"index=\" + productsLoaded,
                success: function (response) {

                    // Hide the loading icon
                    \$('.loading-icon').hide()

                    if (response.length == 0 && productsLoaded < 1) {
                        \$('.products-list').append(
                            `<p>No products available</p>`
                        )
                    }
                    // Update the amount of totally fetched products
                    productsLoaded = productsLoaded + response.length;
                    
                    // Update the amount of the maximum loaded products
                    productsIndex = productsIndex + response.length
                    
                    // Append the products to the products list
                    response.forEach((product) => {
                        \$('.products-list').append(
                            `
                            <div class=\"products-list-item\">
                                <a href=\"./product/\${product[0]}\">
                                    <div class=\"product-preview\">
                                        <img src=\"\${product[3]}\" class=\"img-fluid\" alt=\"...\">
                                        <div class=\"product-preview-overlay\" style=\"display:none\">
                                            <p class=\"h3\">\${product[1]}</p>
                                            <p class=\"\">\${product[2].length > 50 ? product[2].substring(0, 50) + '...' : product[2]}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            `
                        )      
                    })
                },
                error: function (response) {
                    console.log(response)
                }
            });
        }

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                \$('#back-to-top').css('display', 'block');
            } else {
                \$('#back-to-top').css('display', 'none');
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        \$('#back-to-top').on('click', function() {
            \$(\"html, body\").animate({ scrollTop: 0 }, 200);
            return false;
        })
    })
</script>
{% endblock %}", "front_end/home/index.html.twig", "D:\\data\\Documents\\projecten\\symfony5_webshop\\webshopV1\\templates\\front_end\\home\\index.html.twig");
    }
}

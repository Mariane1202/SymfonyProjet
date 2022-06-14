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

/* product/index.html.twig */
class __TwigTemplate_0c3725acc78b1bd5996bace12ffd3a7a0cf5d2f1cf08a27b8b258f7986dbb267 extends Template
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
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/index.html.twig", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Produits!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "<section id=\"contact\" class=\"get-started\">
  <div class=\"container\">
    <div class=\"row text-center\">
      <h1 class=\"display-3 fw-bold text-capitalize\">Get started</h1>
      <div class=\"heading-line\"></div>
      <p class=\"lh-lg\">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero illum architecto modi.
      </p>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class=\"row text-black\">
      <div class=\"col-12 col-lg-6 gradient shadow p-3\">
        <div class=\"cta-info w-100\">
          <h4 class=\"display-4 fw-bold\">Liste Produits</h4>
          <table class=\"table table-hover\">
                <thead>
                    <tr>
                    <th scope=\"col\">Identifiant</th>
                     <th scope=\"col\">Name</th>
                      <th scope=\"col\">Stock</th>
                       <th scope=\"col\">Libelle</th>
                        <th scope=\"col\">Price</th>
                         
                    </tr>
                </thead>
                <tbody>
                  ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 36
            echo "                   <tr class=\"table-primary\">
                   <th scope=\"row\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "id", [], "any", false, false, false, 37), "html", null, true);
            echo "</th>
                    <th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
                     <th scope=\"row\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "stock", [], "any", false, false, false, 39), "html", null, true);
            echo "</th>
                     <th scope=\"row\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "lib", [], "any", false, false, false, 40), "html", null, true);
            echo "</th>
                       <th scope=\"row\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 41), "html", null, true);
            echo "</th>
                      
                       
                   </tr>
                   
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "

                </tbody>

           </table>
          
          
        </div>
      </div>
      <div class=\"col-12 col-lg-6 bg-black shadow p-3\">
        <div class=\"form w-100 pb-2\">
          <h4 class=\"display-3--title mb-5\">Ajout Produit</h4>
         ";
        // line 59
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), 'form');
        echo "
        </div>
      </div>
    </div>
  </div>
      
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 59,  152 => 47,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  121 => 36,  117 => 35,  88 => 8,  78 => 7,  59 => 5,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'base.html.twig' %}


{% block title %}Produits!{% endblock %}

{% block body %}
<section id=\"contact\" class=\"get-started\">
  <div class=\"container\">
    <div class=\"row text-center\">
      <h1 class=\"display-3 fw-bold text-capitalize\">Get started</h1>
      <div class=\"heading-line\"></div>
      <p class=\"lh-lg\">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero illum architecto modi.
      </p>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class=\"row text-black\">
      <div class=\"col-12 col-lg-6 gradient shadow p-3\">
        <div class=\"cta-info w-100\">
          <h4 class=\"display-4 fw-bold\">Liste Produits</h4>
          <table class=\"table table-hover\">
                <thead>
                    <tr>
                    <th scope=\"col\">Identifiant</th>
                     <th scope=\"col\">Name</th>
                      <th scope=\"col\">Stock</th>
                       <th scope=\"col\">Libelle</th>
                        <th scope=\"col\">Price</th>
                         
                    </tr>
                </thead>
                <tbody>
                  {% for product in products %}
                   <tr class=\"table-primary\">
                   <th scope=\"row\">{{product.id}}</th>
                    <th scope=\"row\">{{product.name}}</th>
                     <th scope=\"row\">{{product.stock}}</th>
                     <th scope=\"row\">{{product.lib}}</th>
                       <th scope=\"row\">{{product.price}}</th>
                      
                       
                   </tr>
                   
                  {% endfor %}


                </tbody>

           </table>
          
          
        </div>
      </div>
      <div class=\"col-12 col-lg-6 bg-black shadow p-3\">
        <div class=\"form w-100 pb-2\">
          <h4 class=\"display-3--title mb-5\">Ajout Produit</h4>
         {{form(form)}}
        </div>
      </div>
    </div>
  </div>
      
</section>

{% endblock %}
", "product/index.html.twig", "C:\\xampp\\htdocs\\MESPROJETS\\appstock\\templates\\product\\index.html.twig");
    }
}

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

/* entree/index.html.twig */
class __TwigTemplate_c013dea2a470260785cde21bc59fc63c1f9be171567b54dcee746dfcc2b950c3 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entree/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "entree/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "entree/index.html.twig", 1);
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

        echo "Hello EntreeController!";
        
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
        echo "<section id=\"contact\" class=\"get-started\">
  <div class=\"container\">
    <div class=\"row text-center\">
      <h1 class=\"display-3 fw-bold text-capitalize\">Get started</h1>
      <div class=\"heading-line\"></div>
      <p class=\"lh-lg\">
       Bienvenue sur votre site
      </p>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class=\"row text-black\">
      <div class=\"col-12 col-lg-6 gradient shadow p-3\">
        <div class=\"cta-info w-100\">
          <h4 class=\"display-4 fw-bold\">Entree Produit</h4>
          <table class=\"table table-hover\">
                <thead>
                    <tr>
                    <th scope=\"col\">Identifiant</th>
                     <th scope=\"col\">Poduit</th>
                       <th scope=\"col\">Date</th>
                        <th scope=\"col\">quantite</th>
                     
                         
                    </tr>
                </thead>
                <tbody>
                  ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entrees"]) || array_key_exists("entrees", $context) ? $context["entrees"] : (function () { throw new RuntimeError('Variable "entrees" does not exist.', 33, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entree"]) {
            // line 34
            echo "                   <tr class=\"table-primary\">
                   <th scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entree"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "</th>
                      <th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entree"], "product", [], "any", false, false, false, 36), "html", null, true);
            echo "</th>
                       <th scope=\"row\">";
            // line 37
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entree"], "dateE", [], "any", false, false, false, 37), "d/m/y"), "html", null, true);
            echo "</th>
                        <th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entree"], "quatite", [], "any", false, false, false, 38), "html", null, true);
            echo "</th
                   </tr>
                   
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

                </tbody>

           </table>
          
          
        </div>
      </div>
      <div class=\"col-12 col-lg-6 bg-black shadow p-3\">
        <div class=\"form w-100 pb-2\">
          <h4 class=\"display-3--title mb-5\">Produit</h4>
         ";
        // line 54
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), 'form');
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
        return "entree/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 54,  146 => 42,  136 => 38,  132 => 37,  128 => 36,  124 => 35,  121 => 34,  117 => 33,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello EntreeController!{% endblock %}

{% block body %}
<section id=\"contact\" class=\"get-started\">
  <div class=\"container\">
    <div class=\"row text-center\">
      <h1 class=\"display-3 fw-bold text-capitalize\">Get started</h1>
      <div class=\"heading-line\"></div>
      <p class=\"lh-lg\">
       Bienvenue sur votre site
      </p>
    </div>

    <!-- START THE CTA CONTENT  -->
    <div class=\"row text-black\">
      <div class=\"col-12 col-lg-6 gradient shadow p-3\">
        <div class=\"cta-info w-100\">
          <h4 class=\"display-4 fw-bold\">Entree Produit</h4>
          <table class=\"table table-hover\">
                <thead>
                    <tr>
                    <th scope=\"col\">Identifiant</th>
                     <th scope=\"col\">Poduit</th>
                       <th scope=\"col\">Date</th>
                        <th scope=\"col\">quantite</th>
                     
                         
                    </tr>
                </thead>
                <tbody>
                  {% for entree in entrees %}
                   <tr class=\"table-primary\">
                   <th scope=\"row\">{{entree.id}}</th>
                      <th scope=\"row\">{{entree.product}}</th>
                       <th scope=\"row\">{{entree.dateE|date('d/m/y')}}</th>
                        <th scope=\"row\">{{entree.quatite}}</th
                   </tr>
                   
                  {% endfor %}


                </tbody>

           </table>
          
          
        </div>
      </div>
      <div class=\"col-12 col-lg-6 bg-black shadow p-3\">
        <div class=\"form w-100 pb-2\">
          <h4 class=\"display-3--title mb-5\">Produit</h4>
         {{form(form)}}
        </div>
      </div>
    </div>
  </div>
      
</section>

{% endblock %}
", "entree/index.html.twig", "C:\\xampp\\htdocs\\MESPROJETS\\appstock\\templates\\entree\\index.html.twig");
    }
}

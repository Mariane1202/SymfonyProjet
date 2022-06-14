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

/* user/index.html.twig */
class __TwigTemplate_a663268ece2b50ba8533a4f7f3c94d65f139aca5e48736dba9d0c8e8e72cf02c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "user/index.html.twig", 1);
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

        echo "Liste Utilisateur!";
        
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
      <h1 class=\"display-3 fw-bold text-capitalize\"> Utilisateur</h1>
      <div class=\"heading-line\"></div>
      <p class=\"lh-lg\">
       Bienvenue sur votre site
      </p>
    </div>

    
      <div class=\"justify-content-xl-center bg-black shadow p-3\">
        <div class=\"form w-100 pb-2\">
          <h4 class=\"display-3--title mb-5\">Liste des Utilisateurs</h4>
          <div class=\"col-lg-12 col-md mb-3\" >
           <table class=\"table table-hover\">
                <thead>
                    <tr>
                    <th scope=\"col\">Identifiant</th>
                     <th scope=\"col\">UserName</th>
                      <th scope=\"col\">Nom</th>
                       <th scope=\"col\">Prenom</th>
                        <th scope=\"col\">Email</th>
                    </tr>
                </thead>
                <tbody>
                  ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 33
            echo "                   <tr class=\"table-primary\">
                   <th scope=\"row\">";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "</th>
                    <th scope=\"row\">";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 35), "html", null, true);
            echo "</th>
                     <th scope=\"row\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "nom", [], "any", false, false, false, 36), "html", null, true);
            echo "</th>
                     <th scope=\"row\">";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "prenom", [], "any", false, false, false, 37), "html", null, true);
            echo "</th>
                      <th scope=\"row\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 38), "html", null, true);
            echo "</th>
                   </tr>
                   
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "

                </tbody>

           </table>
          
          </div>
         
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
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 42,  139 => 38,  135 => 37,  131 => 36,  127 => 35,  123 => 34,  120 => 33,  116 => 32,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste Utilisateur!{% endblock %}

{% block body %}
<section id=\"contact\" class=\"get-started\">
  <div class=\"container\">
    <div class=\"row text-center\">
      <h1 class=\"display-3 fw-bold text-capitalize\"> Utilisateur</h1>
      <div class=\"heading-line\"></div>
      <p class=\"lh-lg\">
       Bienvenue sur votre site
      </p>
    </div>

    
      <div class=\"justify-content-xl-center bg-black shadow p-3\">
        <div class=\"form w-100 pb-2\">
          <h4 class=\"display-3--title mb-5\">Liste des Utilisateurs</h4>
          <div class=\"col-lg-12 col-md mb-3\" >
           <table class=\"table table-hover\">
                <thead>
                    <tr>
                    <th scope=\"col\">Identifiant</th>
                     <th scope=\"col\">UserName</th>
                      <th scope=\"col\">Nom</th>
                       <th scope=\"col\">Prenom</th>
                        <th scope=\"col\">Email</th>
                    </tr>
                </thead>
                <tbody>
                  {% for user in users %}
                   <tr class=\"table-primary\">
                   <th scope=\"row\">{{user.id}}</th>
                    <th scope=\"row\">{{user.username}}</th>
                     <th scope=\"row\">{{user.nom}}</th>
                     <th scope=\"row\">{{user.prenom}}</th>
                      <th scope=\"row\">{{user.email}}</th>
                   </tr>
                   
                  {% endfor %}


                </tbody>

           </table>
          
          </div>
         
        </div>
      </div>
    </div>
  </div>
</section>

{% endblock %}
", "user/index.html.twig", "C:\\xampp\\htdocs\\MESPROJETS\\appstock\\templates\\user\\index.html.twig");
    }
}

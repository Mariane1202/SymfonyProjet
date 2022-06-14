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

/* _partials/_nav.html.twig */
class __TwigTemplate_2e622ae741d4bcf6ab65b898d64298428efcc3211dcbd7b340a61d38c53cd82c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "_partials/_nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-expand-lg navbar-dark menu shadow fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"\">
        <img src=\"images/logo.png\" alt=\"Gestion AppStock\">
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_main");
        echo "\">Home</a></li>
        
          
              
           <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product");
        echo "\">Produit</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie");
        echo "\">Categorie</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_entree");
        echo "\">Entree</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sortie");
        echo "\">Sortie</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_userliste");
        echo "\">Utilisateur</a>
          </li>
        </ul>
        

      
        <ul class=\"navbar-nav\">
          

            ";
        // line 28
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28)) {
            // line 29
            echo "                 
                <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"";
            // line 30
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            echo "\">Logout</a></li>
          ";
        } else {
            // line 31
            echo "     
        ";
        }
        // line 33
        echo "        <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\">Login</a></li>
        
        
         </ul>
       
      </div>
    </div>

  
</nav>

    </script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "_partials/_nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 33,  100 => 31,  95 => 30,  92 => 29,  90 => 28,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  55 => 11,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<nav class=\"navbar navbar-expand-lg navbar-dark menu shadow fixed-top\">
    <div class=\"container\">
      <a class=\"navbar-brand\" href=\"\">
        <img src=\"images/logo.png\" alt=\"Gestion AppStock\">
      </a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>
      <div class=\"collapse navbar-collapse justify-content-end\" id=\"navbarNav\">
        <ul class=\"navbar-nav\">
          <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('app_main')}}\">Home</a></li>
        
          
              
           <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_product')}}\">Produit</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_categorie')}}\">Categorie</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_entree')}}\">Entree</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_sortie')}}\">Sortie</a></li>
          <li class=\"nav-item\"><a class=\"nav-link\" href=\"{{path('app_userliste')}}\">Utilisateur</a>
          </li>
        </ul>
        

      
        <ul class=\"navbar-nav\">
          

            {% if app.user %}
                 
                <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('app_logout')}}\">Logout</a></li>
          {% else %}     
        {% endif %}
        <li class=\"nav-item\"><a class=\"nav-link active\" aria-current=\"page\" href=\"{{path('app_login')}}\">Login</a></li>
        
        
         </ul>
       
      </div>
    </div>

  
</nav>

    </script>", "_partials/_nav.html.twig", "C:\\xampp\\htdocs\\MESPROJETS\\appstock\\templates\\_partials\\_nav.html.twig");
    }
}

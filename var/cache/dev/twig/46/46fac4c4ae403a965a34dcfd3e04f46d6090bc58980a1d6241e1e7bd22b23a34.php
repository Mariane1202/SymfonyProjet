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

/* main/index.html.twig */
class __TwigTemplate_3fc09ac1c978bbe7cfe13a80daed35cdfc3a52bde71ce711cfd9b3973ab7806b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
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

        echo "Gestion AppStock!";
        
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
        echo "<section id=\"home\" class=\"intro-section\">
  <div class=\"container\">
    <div class=\"row align-items-center text-white\">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class=\"col-md-6 intros text-start\">
        <h1 class=\"display-2\">
          <span class=\"display-2--intro\">Hey!, Welcome to your Site</span>
          <span class=\"display-2--description lh-base\">
            Gestion AppStock
           
          </span>
        </h1>
        <button type=\"button\" class=\"rounded-pill btn-rounded\">Get in Touch
          <span><i class=\"fas fa-arrow-right\"></i></span>
        </button>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class=\"col-md-6 intros text-end\">
        <div class=\"video-box\">
          <img src=\"images/arts/intro-section-illustration.png\" alt=\"video illutration\" class=\"img-fluid\">
          <a href=\"#\" class=\"glightbox position-absolute top-50 start-50 translate-middle\">
            <span>
              <i class=\"fas fa-play-circle\"></i>
            </span>
            <span class=\"border-animation border-animation--border-1\"></span>
            <span class=\"border-animation border-animation--border-2\"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path></svg>
</section>
      



      <footer class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- CONTENT FOR THE MOBILE NUMBER  -->
      <div class=\"col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex\">
        <div class=\"contact-box__icon\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-phone-call\" viewBox=\"0 0 24 24\" stroke-width=\"1\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <path d=\"M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2\" />
            <path d=\"M15 7a2 2 0 0 1 2 2\" />
            <path d=\"M15 3a6 6 0 0 1 6 6\" />
          </svg>
        </div>
        <div class=\"contact-box__info\">
          <a href=\"#\" class=\"contact-box__info--title\">+1 728365413</a>
          <p class=\"contact-box__info--subtitle\">  Mon-Fri 9am-6pm</p>
        </div>
      </div>  
      <!-- CONTENT FOR EMAIL  -->
      <div class=\"col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex\">
        <div class=\"contact-box__icon\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-mail-opened\" viewBox=\"0 0 24 24\" stroke-width=\"1\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <polyline points=\"3 9 12 15 21 9 12 3 3 9\" />
            <path d=\"M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10\" />
            <line x1=\"3\" y1=\"19\" x2=\"9\" y2=\"13\" />
            <line x1=\"15\" y1=\"13\" x2=\"21\" y2=\"19\" />
          </svg>
        </div>
        <div class=\"contact-box__info\">
          <a href=\"#\" class=\"contact-box__info--title\">info@company.com</a>
          <p class=\"contact-box__info--subtitle\">Online support</p>
        </div>
      </div>
      <!-- CONTENT FOR LOCATION  -->
      <div class=\"col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex\">
        <div class=\"contact-box__icon\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-map-2\" viewBox=\"0 0 24 24\" stroke-width=\"1\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <line x1=\"18\" y1=\"6\" x2=\"18\" y2=\"6.01\" />
            <path d=\"M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5\" />
            <polyline points=\"10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15\" />
            <line x1=\"9\" y1=\"4\" x2=\"9\" y2=\"17\" />
            <line x1=\"15\" y1=\"15\" x2=\"15\" y2=\"20\" />
          </svg>
        </div>
        <div class=\"contact-box__info\">
          <a href=\"#\" class=\"contact-box__info--title\">New York, USA</a>
          <p class=\"contact-box__info--subtitle\">NY 10012, US</p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class=\"footer-sm\" style=\"background-color: #212121;\">
    <div class=\"container\">
      <div class=\"row py-4 text-center text-white\">
        <div class=\"col-lg-5 col-md-6 mb-4 mb-md-0\">
          connect with us on social media
        </div>
        <div class=\"col-lg-7 col-md-6\">
          <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
          <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
          <a href=\"#\"><i class=\"fab fa-github\"></i></a>
          <a href=\"#\"><i class=\"fab fa-linkedin\"></i></a>
          <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
        </div>
      </div>
    </div>
  </div>

  
</footer>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gestion AppStock!{% endblock %}

{% block body %}
<section id=\"home\" class=\"intro-section\">
  <div class=\"container\">
    <div class=\"row align-items-center text-white\">
      <!-- START THE CONTENT FOR THE INTRO  -->
      <div class=\"col-md-6 intros text-start\">
        <h1 class=\"display-2\">
          <span class=\"display-2--intro\">Hey!, Welcome to your Site</span>
          <span class=\"display-2--description lh-base\">
            Gestion AppStock
           
          </span>
        </h1>
        <button type=\"button\" class=\"rounded-pill btn-rounded\">Get in Touch
          <span><i class=\"fas fa-arrow-right\"></i></span>
        </button>
      </div>
      <!-- START THE CONTENT FOR THE VIDEO -->
      <div class=\"col-md-6 intros text-end\">
        <div class=\"video-box\">
          <img src=\"images/arts/intro-section-illustration.png\" alt=\"video illutration\" class=\"img-fluid\">
          <a href=\"#\" class=\"glightbox position-absolute top-50 start-50 translate-middle\">
            <span>
              <i class=\"fas fa-play-circle\"></i>
            </span>
            <span class=\"border-animation border-animation--border-1\"></span>
            <span class=\"border-animation border-animation--border-2\"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 1440 320\"><path fill=\"#ffffff\" fill-opacity=\"1\" d=\"M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z\"></path></svg>
</section>
      



      <footer class=\"footer\">
  <div class=\"container\">
    <div class=\"row\">
      <!-- CONTENT FOR THE MOBILE NUMBER  -->
      <div class=\"col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex\">
        <div class=\"contact-box__icon\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-phone-call\" viewBox=\"0 0 24 24\" stroke-width=\"1\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <path d=\"M5 4h4l2 5l-2.5 1.5a11 11 0 0 0 5 5l1.5 -2.5l5 2v4a2 2 0 0 1 -2 2a16 16 0 0 1 -15 -15a2 2 0 0 1 2 -2\" />
            <path d=\"M15 7a2 2 0 0 1 2 2\" />
            <path d=\"M15 3a6 6 0 0 1 6 6\" />
          </svg>
        </div>
        <div class=\"contact-box__info\">
          <a href=\"#\" class=\"contact-box__info--title\">+1 728365413</a>
          <p class=\"contact-box__info--subtitle\">  Mon-Fri 9am-6pm</p>
        </div>
      </div>  
      <!-- CONTENT FOR EMAIL  -->
      <div class=\"col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex\">
        <div class=\"contact-box__icon\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-mail-opened\" viewBox=\"0 0 24 24\" stroke-width=\"1\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <polyline points=\"3 9 12 15 21 9 12 3 3 9\" />
            <path d=\"M21 9v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10\" />
            <line x1=\"3\" y1=\"19\" x2=\"9\" y2=\"13\" />
            <line x1=\"15\" y1=\"13\" x2=\"21\" y2=\"19\" />
          </svg>
        </div>
        <div class=\"contact-box__info\">
          <a href=\"#\" class=\"contact-box__info--title\">info@company.com</a>
          <p class=\"contact-box__info--subtitle\">Online support</p>
        </div>
      </div>
      <!-- CONTENT FOR LOCATION  -->
      <div class=\"col-md-4 col-lg-4 contact-box pt-1 d-md-block d-lg-flex d-flex\">
        <div class=\"contact-box__icon\">
          <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"icon icon-tabler icon-tabler-map-2\" viewBox=\"0 0 24 24\" stroke-width=\"1\" fill=\"none\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
            <path stroke=\"none\" d=\"M0 0h24v24H0z\" fill=\"none\"/>
            <line x1=\"18\" y1=\"6\" x2=\"18\" y2=\"6.01\" />
            <path d=\"M18 13l-3.5 -5a4 4 0 1 1 7 0l-3.5 5\" />
            <polyline points=\"10.5 4.75 9 4 3 7 3 20 9 17 15 20 21 17 21 15\" />
            <line x1=\"9\" y1=\"4\" x2=\"9\" y2=\"17\" />
            <line x1=\"15\" y1=\"15\" x2=\"15\" y2=\"20\" />
          </svg>
        </div>
        <div class=\"contact-box__info\">
          <a href=\"#\" class=\"contact-box__info--title\">New York, USA</a>
          <p class=\"contact-box__info--subtitle\">NY 10012, US</p>
        </div>
      </div>
    </div>
  </div>

  <!-- START THE SOCIAL MEDIA CONTENT  -->
  <div class=\"footer-sm\" style=\"background-color: #212121;\">
    <div class=\"container\">
      <div class=\"row py-4 text-center text-white\">
        <div class=\"col-lg-5 col-md-6 mb-4 mb-md-0\">
          connect with us on social media
        </div>
        <div class=\"col-lg-7 col-md-6\">
          <a href=\"#\"><i class=\"fab fa-facebook\"></i></a>
          <a href=\"#\"><i class=\"fab fa-twitter\"></i></a>
          <a href=\"#\"><i class=\"fab fa-github\"></i></a>
          <a href=\"#\"><i class=\"fab fa-linkedin\"></i></a>
          <a href=\"#\"><i class=\"fab fa-instagram\"></i></a>
        </div>
      </div>
    </div>
  </div>

  
</footer>

{% endblock %}
", "main/index.html.twig", "C:\\xampp\\htdocs\\MESPROJETS\\appstock\\templates\\main\\index.html.twig");
    }
}

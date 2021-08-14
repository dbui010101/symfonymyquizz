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

/* base.html.twig */
class __TwigTemplate_bfaa170eb8c05ec0499f5a971e5dc8fb42fd4e881aa43416b55e4c03a38561c0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  ";
        // line 11
        echo "  ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "
  ";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "</head>

<body>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"/\"><strong>QuizzzZZzz</strong></a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav me-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"/\">Home
              <span class=\"visually-hidden\">(current)</span>
            </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"register\">Inscription</a>
          </li>

          ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\LogoutUrlExtension']->getLogoutPath("main"), "html", null, true);
            echo "\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"account\">Profil</a>
          </li>
          <a href=\"createquizz\" class=\"btn btn-primary\">+</a>
          ";
        } else {
            // line 49
            echo "          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"result\">Resultats</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"login\">Connexion</a>
          </li>
          ";
        }
        // line 57
        echo "        </ul>
        <form class=\"d-flex\">
          <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </div>
  </nav>
  ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "</body>

</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "  ";
        // line 13
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        echo "  ";
        // line 17
        echo "  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 65
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 65,  174 => 17,  172 => 16,  165 => 15,  158 => 13,  156 => 12,  149 => 11,  136 => 6,  126 => 66,  124 => 65,  114 => 57,  104 => 49,  94 => 42,  91 => 41,  89 => 40,  65 => 18,  63 => 15,  60 => 14,  57 => 11,  51 => 6,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>

<head>
  <meta charset=\"UTF-8\">
  <title>{% block title %}Welcome!{% endblock %}</title>
  <link rel=\"stylesheet\" href=\"https://bootswatch.com/5/lumen/bootstrap.min.css\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
  {% block stylesheets %}
  {#{{ encore_entry_link_tags('app') }}#}
  {% endblock %}

  {% block javascripts %}
  {#{{ encore_entry_script_tags('app') }}#}
  {% endblock %}
</head>

<body>
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary\">
    <div class=\"container-fluid\">
      <a class=\"navbar-brand\" href=\"/\"><strong>QuizzzZZzz</strong></a>
      <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor01\" aria-controls=\"navbarColor01\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
        <span class=\"navbar-toggler-icon\"></span>
      </button>

      <div class=\"collapse navbar-collapse\" id=\"navbarColor01\">
        <ul class=\"navbar-nav me-auto\">
          <li class=\"nav-item\">
            <a class=\"nav-link active\" href=\"/\">Home
              <span class=\"visually-hidden\">(current)</span>
            </a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"register\">Inscription</a>
          </li>

          {% if is_granted('IS_AUTHENTICATED_REMEMBERED') %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"{{ logout_path('main') }}\">Déconnexion</a>
          </li>
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"account\">Profil</a>
          </li>
          <a href=\"createquizz\" class=\"btn btn-primary\">+</a>
          {% else %}
          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"result\">Resultats</a>
          </li>

          <li class=\"nav-item\">
            <a class=\"nav-link\" href=\"login\">Connexion</a>
          </li>
          {% endif %}
        </ul>
        <form class=\"d-flex\">
          <input class=\"form-control me-sm-2\" type=\"text\" placeholder=\"Search\">
          <button class=\"btn btn-secondary my-2 my-sm-0\" type=\"submit\">Search</button>
        </form>
      </div>
    </div>
  </nav>
  {% block body %}{% endblock %}
</body>

</html>
", "base.html.twig", "/home/epitech/delivery/W-PHP-502-NCY-2-1-Quiz-timothee.hennequin/templates/base.html.twig");
    }
}

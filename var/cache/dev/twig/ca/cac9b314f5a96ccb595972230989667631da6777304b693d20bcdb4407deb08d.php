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

/* categorie/liste.html.twig */
class __TwigTemplate_80f94035d3020309c8f26adabee75025fc8115e84ef0bc7baf379a7a5c4495b0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "categorie/liste.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "categorie/liste.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello CategorieController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
<h4><em><small class=\"text-muted\">Question ";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["totalQuestion"]) || array_key_exists("totalQuestion", $context) ? $context["totalQuestion"] : (function () { throw new RuntimeError('Variable "totalQuestion" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "</small></em></h4>

";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["q"]) || array_key_exists("q", $context) ? $context["q"] : (function () { throw new RuntimeError('Variable "q" does not exist.', 14, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["quest"]) {
            // line 15
            echo "<p>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["quest"], "question", [], "any", false, false, false, 15), "html", null, true);
            echo "</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "

<hr>
<br>

<form action=\"/categorie/";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["categorie"]) || array_key_exists("categorie", $context) ? $context["categorie"] : (function () { throw new RuntimeError('Variable "categorie" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" method=\"get\">
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reponse"]) {
            // line 24
            echo "<p></p>
<div class=\"d-grid gap-2\">
<button type=\"submit\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "id", [], "any", false, false, false, 26), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "\" name=\"question\" class=\"btn btn-success\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reponse"], "reponse", [], "any", false, false, false, 26), "html", null, true);
            echo "</button>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reponse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</form>
<br>
<p><small class=\"text-muted\">Progression</small></p>
<div class=\"progress\">
  <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: ";
        // line 33
        echo twig_escape_filter($this->env, ((isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 33, $this->source); })()) * 1), "html", null, true);
        echo "0%;\">";
        echo twig_escape_filter($this->env, (isset($context["question"]) || array_key_exists("question", $context) ? $context["question"] : (function () { throw new RuntimeError('Variable "question" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["totalQuestion"]) || array_key_exists("totalQuestion", $context) ? $context["totalQuestion"] : (function () { throw new RuntimeError('Variable "totalQuestion" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "</div>
</div>

<p><small class=\"text-muted\">Score</small></p>
<div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: ";
        // line 38
        echo twig_escape_filter($this->env, ((isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 38, $this->source); })()) * 1), "html", null, true);
        echo "0%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">";
        echo twig_escape_filter($this->env, (isset($context["score"]) || array_key_exists("score", $context) ? $context["score"] : (function () { throw new RuntimeError('Variable "score" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "</div>
</div>

</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "categorie/liste.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 38,  139 => 33,  133 => 29,  120 => 26,  116 => 24,  112 => 23,  108 => 22,  101 => 17,  92 => 15,  88 => 14,  81 => 12,  73 => 6,  66 => 5,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello CategorieController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class=\"example-wrapper\">
<h4><em><small class=\"text-muted\">Question {{question}}/{{totalQuestion}}</small></em></h4>

{%for quest in q%}
<p>{{quest.question}}</p>
{%endfor%}


<hr>
<br>

<form action=\"/categorie/{{categorie}}\" method=\"get\">
{%for reponse in reponses%}
<p></p>
<div class=\"d-grid gap-2\">
<button type=\"submit\" value=\"{{reponse.id}}-{{question}}\" name=\"question\" class=\"btn btn-success\">{{reponse.reponse}}</button>
</div>
{%endfor%}
</form>
<br>
<p><small class=\"text-muted\">Progression</small></p>
<div class=\"progress\">
  <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"10\" style=\"width: {{question * 1}}0%;\">{{question}}/{{totalQuestion}}</div>
</div>

<p><small class=\"text-muted\">Score</small></p>
<div class=\"progress\">
  <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: {{score * 1}}0%;\" aria-valuenow=\"25\" aria-valuemin=\"0\" aria-valuemax=\"100\">{{score}}</div>
</div>

</div>
</div>

{% endblock %}
", "categorie/liste.html.twig", "/home/epitech/delivery/W-PHP-502-NCY-2-1-Quiz-timothee.hennequin/templates/categorie/liste.html.twig");
    }
}

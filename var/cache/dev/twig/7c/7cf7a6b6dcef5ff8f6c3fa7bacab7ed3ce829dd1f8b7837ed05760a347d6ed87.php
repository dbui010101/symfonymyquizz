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

/* @EasyAdmin/crud/field/image.html.twig */
class __TwigTemplate_e0c4f455042c8b36297bd7c3da2038bc736fe3bf5275fbf5ea19f3ef5ae6beae extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/field/image.html.twig"));

        // line 4
        $context["html_id"] = ("ea-lightbox-" . twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 4, $this->source); })()), "uniqueId", [], "any", false, false, false, 4));
        // line 5
        echo "<a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#";
        echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 5, $this->source); })()), "html", null, true);
        echo "\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 6, $this->source); })()), "formattedValue", [], "any", false, false, false, 6)), "html", null, true);
        echo "\" class=\"img-fluid\">
</a>

<div id=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["html_id"]) || array_key_exists("html_id", $context) ? $context["html_id"] : (function () { throw new RuntimeError('Variable "html_id" does not exist.', 9, $this->source); })()), "html", null, true);
        echo "\" class=\"ea-lightbox\">
    <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["field"]) || array_key_exists("field", $context) ? $context["field"] : (function () { throw new RuntimeError('Variable "field" does not exist.', 10, $this->source); })()), "formattedValue", [], "any", false, false, false, 10)), "html", null, true);
        echo "\">
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/field/image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  53 => 9,  47 => 6,  42 => 5,  40 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var field \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\FieldDto #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% set html_id = 'ea-lightbox-' ~ field.uniqueId %}
<a href=\"#\" class=\"ea-lightbox-thumbnail\" data-featherlight=\"#{{ html_id }}\" data-featherlight-close-on-click=\"anywhere\">
    <img src=\"{{ asset(field.formattedValue) }}\" class=\"img-fluid\">
</a>

<div id=\"{{ html_id }}\" class=\"ea-lightbox\">
    <img src=\"{{ asset(field.formattedValue) }}\">
</div>
", "@EasyAdmin/crud/field/image.html.twig", "/home/epitech/delivery/W-PHP-502-NCY-2-1-Quiz-timothee.hennequin/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/field/image.html.twig");
    }
}

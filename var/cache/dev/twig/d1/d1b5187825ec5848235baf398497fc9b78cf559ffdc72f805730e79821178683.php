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

/* @EasyAdmin/crud/edit.html.twig */
class __TwigTemplate_27147d267749a39657cc951bf005751e03c80d4c49dfbc7a1625b9675e189d33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body_id' => [$this, 'block_body_id'],
            'body_class' => [$this, 'block_body_class'],
            'configured_head_contents' => [$this, 'block_configured_head_contents'],
            'configured_body_contents' => [$this, 'block_configured_body_contents'],
            'configured_stylesheets' => [$this, 'block_configured_stylesheets'],
            'configured_javascripts' => [$this, 'block_configured_javascripts'],
            'content_title' => [$this, 'block_content_title'],
            'page_actions' => [$this, 'block_page_actions'],
            'main' => [$this, 'block_main'],
            'edit_form' => [$this, 'block_edit_form'],
            'delete_form' => [$this, 'block_delete_form'],
            'body_javascript' => [$this, 'block_body_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 3
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 3, $this->source); })()), "templatePath", [0 => "layout"], "method", false, false, false, 3), "@EasyAdmin/crud/edit.html.twig", 3);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/crud/edit.html.twig"));

        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 4, $this->source); })()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 4, $this->source); })()), "crud", [], "any", false, false, false, 4), "formThemes", [], "any", false, false, false, 4), false);
        // line 6
        $context["__internal_389e7e3d000f5c7de8309111a09aaa9aaf2f48c5e482c933e56a949413307ccc"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 6, $this->source); })()), "i18n", [], "any", false, false, false, 6), "translationDomain", [], "any", false, false, false, 6);
        // line 3
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body_id($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("ea-edit-" . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8)) . "-") . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 8, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 8)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body_class($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("ea-edit ea-edit-" . twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 9, $this->source); })()), "name", [], "any", false, false, false, 9)), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 11
    public function block_configured_head_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_head_contents"));

        // line 12
        echo "    ";
        $this->displayParentBlock("configured_head_contents", $context, $blocks);
        echo "
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 13, $this->source); })()), "vars", [], "any", false, false, false, 13), "ea_crud_form", [], "any", false, false, false, 13), "assets", [], "any", false, false, false, 13), "headContents", [], "any", false, false, false, 13));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 14
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 18
    public function block_configured_body_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_body_contents"));

        // line 19
        echo "    ";
        $this->displayParentBlock("configured_body_contents", $context, $blocks);
        echo "
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 20, $this->source); })()), "vars", [], "any", false, false, false, 20), "ea_crud_form", [], "any", false, false, false, 20), "assets", [], "any", false, false, false, 20), "bodyContents", [], "any", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["htmlContent"]) {
            // line 21
            echo "        ";
            echo $context["htmlContent"];
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['htmlContent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 25
    public function block_configured_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_stylesheets"));

        // line 26
        echo "    ";
        $this->displayParentBlock("configured_stylesheets", $context, $blocks);
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 27, $this->source); })()), "vars", [], "any", false, false, false, 27), "ea_crud_form", [], "any", false, false, false, 27), "assets", [], "any", false, false, false, 27), "cssFiles", [], "any", false, false, false, 27));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 28
            echo "        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 31, $this->source); })()), "vars", [], "any", false, false, false, 31), "ea_crud_form", [], "any", false, false, false, 31), "assets", [], "any", false, false, false, 31), "webpackEncoreEntries", [], "any", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 32
            echo "        ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_link_tags", $context["webpack_encore_entry"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 36
    public function block_configured_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "configured_javascripts"));

        // line 37
        echo "    ";
        $this->displayParentBlock("configured_javascripts", $context, $blocks);
        echo "
    ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 38, $this->source); })()), "vars", [], "any", false, false, false, 38), "ea_crud_form", [], "any", false, false, false, 38), "assets", [], "any", false, false, false, 38), "jsFiles", [], "any", false, false, false, 38));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 39
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 42, $this->source); })()), "vars", [], "any", false, false, false, 42), "ea_crud_form", [], "any", false, false, false, 42), "assets", [], "any", false, false, false, 42), "webpackEncoreEntries", [], "any", false, false, false, 42));
        foreach ($context['_seq'] as $context["_key"] => $context["webpack_encore_entry"]) {
            // line 43
            echo "        ";
            echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->callFunctionIfExists($this->env, "encore_entry_script_tags", $context["webpack_encore_entry"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['webpack_encore_entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 47
    public function block_content_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content_title"));

        // line 48
        ob_start();
        // line 49
        echo (((null === twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 49, $this->source); })()), "crud", [], "any", false, false, false, 49), "customPageTitle", [], "any", false, false, false, 49))) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 50, $this->source); })()), "crud", [], "any", false, false, false, 50), "defaultPageTitle", [], "any", false, false, false, 50), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 50, $this->source); })()), "i18n", [], "any", false, false, false, 50), "translationParameters", [], "any", false, false, false, 50), "EasyAdminBundle")) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 51
(isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 51, $this->source); })()), "crud", [], "any", false, false, false, 51), "customPageTitle", [], "any", false, false, false, 51), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["ea"]) || array_key_exists("ea", $context) ? $context["ea"] : (function () { throw new RuntimeError('Variable "ea" does not exist.', 51, $this->source); })()), "i18n", [], "any", false, false, false, 51), "translationParameters", [], "any", false, false, false, 51),         // line 6
(isset($context["__internal_389e7e3d000f5c7de8309111a09aaa9aaf2f48c5e482c933e56a949413307ccc"]) || array_key_exists("__internal_389e7e3d000f5c7de8309111a09aaa9aaf2f48c5e482c933e56a949413307ccc", $context) ? $context["__internal_389e7e3d000f5c7de8309111a09aaa9aaf2f48c5e482c933e56a949413307ccc"] : (function () { throw new RuntimeError('Variable "__internal_389e7e3d000f5c7de8309111a09aaa9aaf2f48c5e482c933e56a949413307ccc" does not exist.', 6, $this->source); })()))));
        $___internal_1118eab036ad3aacb8742ae12a538a7d025cf807ade0225d76cbdf20fd72d6d4_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 48
        echo twig_spaceless($___internal_1118eab036ad3aacb8742ae12a538a7d025cf807ade0225d76cbdf20fd72d6d4_);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 55
    public function block_page_actions($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_actions"));

        // line 56
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "actions", [], "any", false, false, false, 56));
        foreach ($context['_seq'] as $context["_key"] => $context["action"]) {
            // line 57
            echo "        ";
            echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, $context["action"], "templatePath", [], "any", false, false, false, 57), ["action" => $context["action"]], false);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['action'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 61
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 62
        echo "    ";
        $this->displayBlock('edit_form', $context, $blocks);
        // line 65
        echo "
    ";
        // line 66
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 62
    public function block_edit_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "edit_form"));

        // line 63
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 63, $this->source); })()), 'form');
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 66
    public function block_delete_form($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "delete_form"));

        // line 67
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_delete_form.html.twig", ["entity_id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 67, $this->source); })()), "primaryKeyValue", [], "any", false, false, false, 67)], false);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 71
    public function block_body_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 72
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.ea-edit-form').areYouSure({ 'message': '";
        // line 76
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("form.are_you_sure", [], "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            const entityForm = document.querySelector('form.ea-edit-form');
            const inputFieldsSelector = 'input,select,textarea';

            // Adding visual feedback for invalid fields: any \".form-group\" with invalid fields
            // receives \"has-error\" class. The class is removed on click on the \".form-group\"
            // itself to support custom/complex fields.
            entityForm.addEventListener('submit', function(submitEvent) {
                entityForm.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                    if (!input.validity.valid) {
                        const formGroup = input.closest('div.form-group');

                        formGroup.classList.add('has-error');

                        formGroup.addEventListener('click', function onFormGroupClick() {
                            formGroup.classList.remove('has-error');
                            formGroup.removeEventListener('click', onFormGroupClick);
                        });
                    }
                });

                const eaEvent = new CustomEvent('ea.form.submit', {
                    cancelable: true,
                    detail: { page: 'edit', form: entityForm }
                });
                const eaEventResult = document.dispatchEvent(eaEvent);
                if (false === eaEventResult) {
                    submitEvent.preventDefault();
                    submitEvent.stopPropagation();
                }
            });

            // forms with tabs require some special treatment for errors. The problem
            // is when the field with errors is included in a tab not currently visible.
            // Browser shows this error \"An invalid form control with name='...' is not focusable.\"
            // So, the user clicks on Submit button, the form is not submitted and the error
            // is not displayed. This JavaScript code ensures that each tab shows a badge with
            // the number of errors in it.
            entityForm.addEventListener('submit', function() {
                const formTabPanes = entityForm.querySelectorAll('.tab-pane');
                if (0 === formTabPanes.length) {
                    return;
                }

                let firstNavTabItemWithError = null;

                formTabPanes.forEach(function (tabPane) {
                    let tabPaneNumErrors = 0;
                    tabPane.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                        if (!input.validity.valid) {
                            tabPaneNumErrors++;
                        }
                    });

                    let navTabItem = entityForm.querySelector('.nav-item a[href=\"#' + tabPane.id + '\"]');
                    let existingErrorBadge = navTabItem.querySelector('span.badge.badge-danger');
                    if (null !== existingErrorBadge) {
                        navTabItem.removeChild(existingErrorBadge);
                    }

                    if (tabPaneNumErrors > 0) {
                        let newErrorBadge = document.createElement('span');
                        newErrorBadge.classList.add('badge', 'badge-danger');
                        newErrorBadge.title = 'form.tab.error_badge_title';
                        newErrorBadge.textContent = tabPaneNumErrors;

                        navTabItem.appendChild(newErrorBadge);

                        if (null === firstNavTabItemWithError) {
                            firstNavTabItemWithError = navTabItem;
                        }
                    }
                });

                if (firstNavTabItemWithError) {
                    firstNavTabItemWithError.click();
                }
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const formAction = \$(this).attr('formaction');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').attr('action', formAction).trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 169
        echo twig_include($this->env, $context, "@EasyAdmin/crud/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/crud/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  458 => 169,  362 => 76,  354 => 72,  347 => 71,  337 => 67,  330 => 66,  320 => 63,  313 => 62,  306 => 66,  303 => 65,  300 => 62,  293 => 61,  279 => 57,  274 => 56,  267 => 55,  260 => 48,  257 => 6,  256 => 51,  255 => 50,  254 => 49,  252 => 48,  245 => 47,  231 => 43,  227 => 42,  224 => 41,  215 => 39,  211 => 38,  206 => 37,  199 => 36,  185 => 32,  181 => 31,  178 => 30,  169 => 28,  165 => 27,  160 => 26,  153 => 25,  139 => 21,  135 => 20,  130 => 19,  123 => 18,  109 => 14,  105 => 13,  100 => 12,  93 => 11,  80 => 9,  67 => 8,  60 => 3,  58 => 6,  56 => 4,  46 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("{# @var ea \\EasyCorp\\Bundle\\EasyAdminBundle\\Context\\AdminContext #}
{# @var entity \\EasyCorp\\Bundle\\EasyAdminBundle\\Dto\\EntityDto #}
{% extends ea.templatePath('layout') %}
{% form_theme edit_form with ea.crud.formThemes only %}

{% trans_default_domain ea.i18n.translationDomain %}

{% block body_id 'ea-edit-' ~ entity.name ~ '-' ~ entity.primaryKeyValue %}
{% block body_class 'ea-edit ea-edit-' ~ entity.name %}

{% block configured_head_contents %}
    {{ parent() }}
    {% for htmlContent in edit_form.vars.ea_crud_form.assets.headContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_body_contents %}
    {{ parent() }}
    {% for htmlContent in edit_form.vars.ea_crud_form.assets.bodyContents %}
        {{ htmlContent|raw }}
    {% endfor %}
{% endblock %}

{% block configured_stylesheets %}
    {{ parent() }}
    {% for css_asset in edit_form.vars.ea_crud_form.assets.cssFiles %}
        <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
    {% endfor %}

    {% for webpack_encore_entry in edit_form.vars.ea_crud_form.assets.webpackEncoreEntries %}
        {{ ea_call_function_if_exists('encore_entry_link_tags', webpack_encore_entry) }}
    {% endfor %}
{% endblock %}

{% block configured_javascripts %}
    {{ parent() }}
    {% for js_asset in edit_form.vars.ea_crud_form.assets.jsFiles %}
        <script src=\"{{ asset(js_asset) }}\"></script>
    {% endfor %}

    {% for webpack_encore_entry in edit_form.vars.ea_crud_form.assets.webpackEncoreEntries %}
        {{ ea_call_function_if_exists('encore_entry_script_tags', webpack_encore_entry) }}
    {% endfor %}
{% endblock %}

{% block content_title %}
    {%- apply spaceless -%}
        {{ ea.crud.customPageTitle is null
            ? (ea.crud.defaultPageTitle|trans(ea.i18n.translationParameters, 'EasyAdminBundle'))|raw
            : ea.crud.customPageTitle|trans(ea.i18n.translationParameters)|raw }}
    {%- endapply -%}
{% endblock %}

{% block page_actions %}
    {% for action in entity.actions %}
        {{ include(action.templatePath, { action: action }, with_context = false) }}
    {% endfor %}
{% endblock %}

{% block main %}
    {% block edit_form %}
        {{ form(edit_form) }}
    {% endblock edit_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/crud/includes/_delete_form.html.twig', { entity_id: entity.primaryKeyValue }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.ea-edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            const entityForm = document.querySelector('form.ea-edit-form');
            const inputFieldsSelector = 'input,select,textarea';

            // Adding visual feedback for invalid fields: any \".form-group\" with invalid fields
            // receives \"has-error\" class. The class is removed on click on the \".form-group\"
            // itself to support custom/complex fields.
            entityForm.addEventListener('submit', function(submitEvent) {
                entityForm.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                    if (!input.validity.valid) {
                        const formGroup = input.closest('div.form-group');

                        formGroup.classList.add('has-error');

                        formGroup.addEventListener('click', function onFormGroupClick() {
                            formGroup.classList.remove('has-error');
                            formGroup.removeEventListener('click', onFormGroupClick);
                        });
                    }
                });

                const eaEvent = new CustomEvent('ea.form.submit', {
                    cancelable: true,
                    detail: { page: 'edit', form: entityForm }
                });
                const eaEventResult = document.dispatchEvent(eaEvent);
                if (false === eaEventResult) {
                    submitEvent.preventDefault();
                    submitEvent.stopPropagation();
                }
            });

            // forms with tabs require some special treatment for errors. The problem
            // is when the field with errors is included in a tab not currently visible.
            // Browser shows this error \"An invalid form control with name='...' is not focusable.\"
            // So, the user clicks on Submit button, the form is not submitted and the error
            // is not displayed. This JavaScript code ensures that each tab shows a badge with
            // the number of errors in it.
            entityForm.addEventListener('submit', function() {
                const formTabPanes = entityForm.querySelectorAll('.tab-pane');
                if (0 === formTabPanes.length) {
                    return;
                }

                let firstNavTabItemWithError = null;

                formTabPanes.forEach(function (tabPane) {
                    let tabPaneNumErrors = 0;
                    tabPane.querySelectorAll(inputFieldsSelector).forEach(function (input) {
                        if (!input.validity.valid) {
                            tabPaneNumErrors++;
                        }
                    });

                    let navTabItem = entityForm.querySelector('.nav-item a[href=\"#' + tabPane.id + '\"]');
                    let existingErrorBadge = navTabItem.querySelector('span.badge.badge-danger');
                    if (null !== existingErrorBadge) {
                        navTabItem.removeChild(existingErrorBadge);
                    }

                    if (tabPaneNumErrors > 0) {
                        let newErrorBadge = document.createElement('span');
                        newErrorBadge.classList.add('badge', 'badge-danger');
                        newErrorBadge.title = 'form.tab.error_badge_title';
                        newErrorBadge.textContent = tabPaneNumErrors;

                        navTabItem.appendChild(newErrorBadge);

                        if (null === firstNavTabItemWithError) {
                            firstNavTabItemWithError = navTabItem;
                        }
                    }
                });

                if (firstNavTabItemWithError) {
                    firstNavTabItemWithError.click();
                }
            });

            \$('.action-delete').on('click', function(e) {
                e.preventDefault();
                const formAction = \$(this).attr('formaction');

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').attr('action', formAction).trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/crud/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/crud/edit.html.twig", "/home/epitech/delivery/W-PHP-502-NCY-2-1-Quiz-timothee.hennequin/vendor/easycorp/easyadmin-bundle/src/Resources/views/crud/edit.html.twig");
    }
}

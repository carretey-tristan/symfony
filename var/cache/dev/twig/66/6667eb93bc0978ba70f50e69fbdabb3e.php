<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* devis/index.html.twig */
class __TwigTemplate_ed64b6e29bbfbf9ce7a4a69a3133de38 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/index.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Hello DevisController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
";
        // line 10
        $context["montant_total"] = 0;
        // line 11
        $context["prix_unitaire"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["type_de_haie"]) || array_key_exists("type_de_haie", $context) ? $context["type_de_haie"] : (function () { throw new RuntimeError('Variable "type_de_haie" does not exist.', 11, $this->source); })()), "prix", [], "any", false, false, false, 11);
        // line 12
        $context["longueur"] = (isset($context["longueur"]) || array_key_exists("longueur", $context) ? $context["longueur"] : (function () { throw new RuntimeError('Variable "longueur" does not exist.', 12, $this->source); })());
        // line 13
        $context["hauteur"] = (isset($context["hauteur"]) || array_key_exists("hauteur", $context) ? $context["hauteur"] : (function () { throw new RuntimeError('Variable "hauteur" does not exist.', 13, $this->source); })());
        // line 14
        $context["multiplier"] = 1;
        // line 15
        if (((isset($context["hauteur"]) || array_key_exists("hauteur", $context) ? $context["hauteur"] : (function () { throw new RuntimeError('Variable "hauteur" does not exist.', 15, $this->source); })()) > 1.5)) {
            // line 16
            yield "    ";
            $context["multiplier"] = 1.5;
        }
        // line 18
        $context["prix"] = ((isset($context["prix_unitaire"]) || array_key_exists("prix_unitaire", $context) ? $context["prix_unitaire"] : (function () { throw new RuntimeError('Variable "prix_unitaire" does not exist.', 18, $this->source); })()) * (isset($context["longueur"]) || array_key_exists("longueur", $context) ? $context["longueur"] : (function () { throw new RuntimeError('Variable "longueur" does not exist.', 18, $this->source); })()));
        // line 19
        $context["montant_total"] = ((isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 19, $this->source); })()) * (isset($context["multiplier"]) || array_key_exists("multiplier", $context) ? $context["multiplier"] : (function () { throw new RuntimeError('Variable "multiplier" does not exist.', 19, $this->source); })()));
        // line 20
        if (((isset($context["monChoix"]) || array_key_exists("monChoix", $context) ? $context["monChoix"] : (function () { throw new RuntimeError('Variable "monChoix" does not exist.', 20, $this->source); })()) == "entreprise")) {
            // line 21
            yield "    ";
            $context["montant_total"] = ((isset($context["montant_total"]) || array_key_exists("montant_total", $context) ? $context["montant_total"] : (function () { throw new RuntimeError('Variable "montant_total" does not exist.', 21, $this->source); })()) * 0.9);
        }
        // line 23
        yield "<div class=\"example-wrapper\">
    Vous êtes un ";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["monChoix"]) || array_key_exists("monChoix", $context) ? $context["monChoix"] : (function () { throw new RuntimeError('Variable "monChoix" does not exist.', 24, $this->source); })()), "html", null, true);
        yield " </br>
    Rappel -- Mesures de la haie : Longueur ";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["longueur"]) || array_key_exists("longueur", $context) ? $context["longueur"] : (function () { throw new RuntimeError('Variable "longueur" does not exist.', 25, $this->source); })()), "html", null, true);
        yield " m , Hauteur ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hauteur"]) || array_key_exists("hauteur", $context) ? $context["hauteur"] : (function () { throw new RuntimeError('Variable "hauteur" does not exist.', 25, $this->source); })()), "html", null, true);
        yield " m , Type de haie : ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["type_de_haie"]) || array_key_exists("type_de_haie", $context) ? $context["type_de_haie"] : (function () { throw new RuntimeError('Variable "type_de_haie" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), "html", null, true);
        yield " .</br>
    Le montant total de votre devis est de : ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["montant_total"]) || array_key_exists("montant_total", $context) ? $context["montant_total"] : (function () { throw new RuntimeError('Variable "montant_total" does not exist.', 26, $this->source); })()), "html", null, true);
        yield " €.
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "devis/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  147 => 26,  139 => 25,  135 => 24,  132 => 23,  128 => 21,  126 => 20,  124 => 19,  122 => 18,  118 => 16,  116 => 15,  114 => 14,  112 => 13,  110 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello DevisController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>
{% set montant_total = 0 %}
{% set prix_unitaire = type_de_haie.prix %}
{% set longueur = longueur %}
{% set hauteur = hauteur %}
{% set multiplier = 1 %}
{% if hauteur > 1.5 %}
    {% set multiplier = 1.5 %}
{% endif %}
{% set prix = prix_unitaire * longueur %}
{% set montant_total = prix * multiplier %}
{% if monChoix == 'entreprise' %}
    {% set montant_total = montant_total * 0.9 %}
{% endif %}
<div class=\"example-wrapper\">
    Vous êtes un {{monChoix}} </br>
    Rappel -- Mesures de la haie : Longueur {{longueur}} m , Hauteur {{hauteur}} m , Type de haie : {{type_de_haie.nom}} .</br>
    Le montant total de votre devis est de : {{montant_total}} €.
</div>
{% endblock %}", "devis/index.html.twig", "C:\\Random\\symfony-test\\templates\\devis\\index.html.twig");
    }
}

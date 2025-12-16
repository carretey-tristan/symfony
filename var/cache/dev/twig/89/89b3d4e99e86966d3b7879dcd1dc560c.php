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

/* forms/index.html.twig */
class __TwigTemplate_ce6bdcd15931beb6d67ab5f1ba8c560a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/index.html.twig"));

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

        yield "Forms preview";
        
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
        yield "    <h1>Forms page (preview)</h1>

    <section>
        <h2>Créer un Devis</h2>
        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["devisForm"]) || array_key_exists("devisForm", $context) ? $context["devisForm"] : (function () { throw new RuntimeError('Variable "devisForm" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
            ";
        // line 11
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["devisForm"]) || array_key_exists("devisForm", $context) ? $context["devisForm"] : (function () { throw new RuntimeError('Variable "devisForm" does not exist.', 11, $this->source); })()), 'widget');
        yield "
            <button class=\"btn\">Submit Devis</button>
        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["devisForm"]) || array_key_exists("devisForm", $context) ? $context["devisForm"] : (function () { throw new RuntimeError('Variable "devisForm" does not exist.', 13, $this->source); })()), 'form_end');
        yield "
    </section>

    <section>
        <h2>Ajouter une Tailler (formulaire séparé)</h2>
        <div id=\"taillers-area\">
            <div class=\"tailler-wrapper\">
                ";
        // line 20
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["taillerForm"]) || array_key_exists("taillerForm", $context) ? $context["taillerForm"] : (function () { throw new RuntimeError('Variable "taillerForm" does not exist.', 20, $this->source); })()), 'form_start');
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["taillerForm"]) || array_key_exists("taillerForm", $context) ? $context["taillerForm"] : (function () { throw new RuntimeError('Variable "taillerForm" does not exist.', 21, $this->source); })()), 'widget');
        yield "
                    <div>
                        <button class=\"btn submit-tailler\">Submit Tailler</button>
                        <button type=\"button\" class=\"btn remove-tailler\" style=\"display:none;\">Remove</button>
                    </div>
                ";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["taillerForm"]) || array_key_exists("taillerForm", $context) ? $context["taillerForm"] : (function () { throw new RuntimeError('Variable "taillerForm" does not exist.', 26, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>

        <button type=\"button\" id=\"add-tailler\" class=\"btn\">Ajouter une Tailler</button>
        <p class=\"help\">Chaque formulaire est indépendant (envoi séparé). Cliquez sur \"Ajouter une Tailler\" pour en ajouter plusieurs.</p>
    </section>

    ";
        // line 35
        yield "
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const addBtn = document.getElementById('add-tailler');
        const area = document.getElementById('taillers-area');

        addBtn.addEventListener('click', function () {
            // clone the first wrapper
            const first = area.querySelector('.tailler-wrapper');
            if (!first) return;
            const clone = first.cloneNode(true);

            // Clear input values in cloned form
            clone.querySelectorAll('input, select, textarea').forEach(function(el){
                if (el.type === 'checkbox' || el.type === 'radio') {
                    el.checked = false;
                } else {
                    el.value = '';
                }
            });

            // show remove button on clone
            const removeBtn = clone.querySelector('.remove-tailler');
            if (removeBtn) removeBtn.style.display = '';

            // append clone
            area.appendChild(clone);
        });

        // delegate remove
        area.addEventListener('click', function (e) {
            if (e.target && e.target.matches('.remove-tailler')) {
                const wrapper = e.target.closest('.tailler-wrapper');
                if (wrapper) wrapper.remove();
            }
        });
    });
    </script>

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
        return "forms/index.html.twig";
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
        return array (  148 => 35,  137 => 26,  129 => 21,  125 => 20,  115 => 13,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Forms preview{% endblock %}

{% block body %}
    <h1>Forms page (preview)</h1>

    <section>
        <h2>Créer un Devis</h2>
        {{ form_start(devisForm) }}
            {{ form_widget(devisForm) }}
            <button class=\"btn\">Submit Devis</button>
        {{ form_end(devisForm) }}
    </section>

    <section>
        <h2>Ajouter une Tailler (formulaire séparé)</h2>
        <div id=\"taillers-area\">
            <div class=\"tailler-wrapper\">
                {{ form_start(taillerForm) }}
                    {{ form_widget(taillerForm) }}
                    <div>
                        <button class=\"btn submit-tailler\">Submit Tailler</button>
                        <button type=\"button\" class=\"btn remove-tailler\" style=\"display:none;\">Remove</button>
                    </div>
                {{ form_end(taillerForm) }}
            </div>
        </div>

        <button type=\"button\" id=\"add-tailler\" class=\"btn\">Ajouter une Tailler</button>
        <p class=\"help\">Chaque formulaire est indépendant (envoi séparé). Cliquez sur \"Ajouter une Tailler\" pour en ajouter plusieurs.</p>
    </section>

    {# Haie creation removed from this page as requested #}

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const addBtn = document.getElementById('add-tailler');
        const area = document.getElementById('taillers-area');

        addBtn.addEventListener('click', function () {
            // clone the first wrapper
            const first = area.querySelector('.tailler-wrapper');
            if (!first) return;
            const clone = first.cloneNode(true);

            // Clear input values in cloned form
            clone.querySelectorAll('input, select, textarea').forEach(function(el){
                if (el.type === 'checkbox' || el.type === 'radio') {
                    el.checked = false;
                } else {
                    el.value = '';
                }
            });

            // show remove button on clone
            const removeBtn = clone.querySelector('.remove-tailler');
            if (removeBtn) removeBtn.style.display = '';

            // append clone
            area.appendChild(clone);
        });

        // delegate remove
        area.addEventListener('click', function (e) {
            if (e.target && e.target.matches('.remove-tailler')) {
                const wrapper = e.target.closest('.tailler-wrapper');
                if (wrapper) wrapper.remove();
            }
        });
    });
    </script>

{% endblock %}
", "forms/index.html.twig", "C:\\Random\\Github\\symfony\\templates\\forms\\index.html.twig");
    }
}

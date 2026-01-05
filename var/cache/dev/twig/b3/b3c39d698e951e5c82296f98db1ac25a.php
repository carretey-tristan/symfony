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

/* devis/_form.html.twig */
class __TwigTemplate_6d5c351b8edb96afe393be808b2802f5 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        yield "

    <div>
        ";
        // line 4
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 4, $this->source); })()), "date", [], "any", false, false, false, 4), 'row');
        yield "
        ";
        // line 5
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), "client", [], "any", false, false, false, 5), 'row');
        yield "
    </div>

    <h3>Taillers</h3>
    <div id=\"taillers-wrapper\" data-prototype=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), "taillers", [], "any", false, false, false, 9), "vars", [], "any", false, false, false, 9), "prototype", [], "any", false, false, false, 9), 'widget'), "html_attr");
        yield "\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "taillers", [], "any", false, false, false, 10));
        foreach ($context['_seq'] as $context["_key"] => $context["tailler"]) {
            // line 11
            yield "            <div class=\"tailler-item\">
                ";
            // line 12
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "hauteur", [], "any", false, false, false, 12), 'row');
            yield "
                ";
            // line 13
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "longueur", [], "any", false, false, false, 13), 'row');
            yield "
                ";
            // line 14
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "Haie", [], "any", false, false, false, 14), 'row');
            yield "
                <button type=\"button\" class=\"remove-tailler\">Supprimer</button>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tailler'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "    </div>
    <button type=\"button\" id=\"add-tailler\" class=\"btn\">Ajouter Tailler</button>

    <div style=\"margin-top:16px;\">
        <button class=\"btn\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 22, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "</button>
        <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_devis_index");
        yield "\">back to list</a>
    </div>

";
        // line 26
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), 'form_end');
        yield "

";
        // line 29
        yield "<script>
    (function(){
        const wrapper = document.getElementById('taillers-wrapper');
        if(!wrapper) return;

        const addButton = document.getElementById('add-tailler');
        let index = wrapper.querySelectorAll('.tailler-item').length;
        const prototype = wrapper.dataset.prototype;

        function addTailler() {
            let newForm = prototype.replace(/__name__/g, index);
            const container = document.createElement('div');
            container.className = 'tailler-item';
            container.innerHTML = newForm + '<button type=\"button\" class=\"remove-tailler\">Supprimer</button>';
            wrapper.appendChild(container);
            attachRemove(container.querySelector('.remove-tailler'));
            index++;
        }

        function attachRemove(btn){
            btn.addEventListener('click', function(){
                btn.closest('.tailler-item').remove();
            });
        }

        // attach to existing remove buttons
        document.querySelectorAll('.remove-tailler').forEach(attachRemove);

        addButton.addEventListener('click', addTailler);
    })();
</script>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "devis/_form.html.twig";
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
        return array (  115 => 29,  110 => 26,  104 => 23,  100 => 22,  94 => 18,  84 => 14,  80 => 13,  76 => 12,  73 => 11,  69 => 10,  65 => 9,  58 => 5,  54 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form) }}

    <div>
        {{ form_row(form.date) }}
        {{ form_row(form.client) }}
    </div>

    <h3>Taillers</h3>
    <div id=\"taillers-wrapper\" data-prototype=\"{{ form_widget(form.taillers.vars.prototype)|e('html_attr') }}\">
        {% for tailler in form.taillers %}
            <div class=\"tailler-item\">
                {{ form_row(tailler.hauteur) }}
                {{ form_row(tailler.longueur) }}
                {{ form_row(tailler.Haie) }}
                <button type=\"button\" class=\"remove-tailler\">Supprimer</button>
            </div>
        {% endfor %}
    </div>
    <button type=\"button\" id=\"add-tailler\" class=\"btn\">Ajouter Tailler</button>

    <div style=\"margin-top:16px;\">
        <button class=\"btn\">{{ button_label|default('Save') }}</button>
        <a href=\"{{ path('app_devis_index') }}\">back to list</a>
    </div>

{{ form_end(form) }}

{# JS to add/remove collection items #}
<script>
    (function(){
        const wrapper = document.getElementById('taillers-wrapper');
        if(!wrapper) return;

        const addButton = document.getElementById('add-tailler');
        let index = wrapper.querySelectorAll('.tailler-item').length;
        const prototype = wrapper.dataset.prototype;

        function addTailler() {
            let newForm = prototype.replace(/__name__/g, index);
            const container = document.createElement('div');
            container.className = 'tailler-item';
            container.innerHTML = newForm + '<button type=\"button\" class=\"remove-tailler\">Supprimer</button>';
            wrapper.appendChild(container);
            attachRemove(container.querySelector('.remove-tailler'));
            index++;
        }

        function attachRemove(btn){
            btn.addEventListener('click', function(){
                btn.closest('.tailler-item').remove();
            });
        }

        // attach to existing remove buttons
        document.querySelectorAll('.remove-tailler').forEach(attachRemove);

        addButton.addEventListener('click', addTailler);
    })();
</script>
", "devis/_form.html.twig", "C:\\Random\\Github\\symfony\\templates\\devis\\_form.html.twig");
    }
}

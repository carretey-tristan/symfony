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

/* devis/show.html.twig */
class __TwigTemplate_c5e84b285ee6beaff1721e75c1cefa87 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "devis/show.html.twig"));

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

        yield "Devis";
        
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
        yield "    <h1>Devis</h1>
    <h2>Informations</h2>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>No</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 12, $this->source); })()), "no", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 16, $this->source); })()), "date", [], "any", false, false, false, 16), "Y-m-d"), "html", null, true)) : (""));
        yield "</td>
            </tr>
            <tr>
                <th>Client</th>
                <td>
                    ";
        // line 21
        if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 21, $this->source); })()), "client", [], "any", false, false, false, 21))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 22
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 22, $this->source); })()), "client", [], "any", false, false, false, 22), "nom", [], "any", false, false, false, 22), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 22, $this->source); })()), "client", [], "any", false, false, false, 22), "prenom", [], "any", false, false, false, 22), "html", null, true);
            yield "<br>
                        ";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 23, $this->source); })()), "client", [], "any", false, false, false, 23), "adresse", [], "any", false, false, false, 23), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 23, $this->source); })()), "client", [], "any", false, false, false, 23), "ville", [], "any", false, false, false, 23), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 23, $this->source); })()), "client", [], "any", false, false, false, 23), "cp", [], "any", false, false, false, 23), "html", null, true);
            yield "<br>
                        <strong>Type:</strong>
                        ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 25, $this->source); })()), "client", [], "any", false, false, false, 25), "typeClient", [], "any", false, false, false, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "                            Particulier
                        ";
            } else {
                // line 28
                yield "                            Professionnel
                        ";
            }
            // line 30
            yield "                    ";
        } else {
            // line 31
            yield "                        -
                    ";
        }
        // line 33
        yield "                </td>
            </tr>
        </tbody>
    </table>

    <h2>Détails des taillers</h2>
    ";
        // line 39
        $context["total"] = 0;
        // line 40
        yield "    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Haie</th>
                <th>Hauteur</th>
                <th>Longueur</th>
                <th>Prix unité</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 52, $this->source); })()), "taillers", [], "any", false, false, false, 52));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["tailler"]) {
            // line 53
            yield "            ";
            $context["hauteur"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "hauteur", [], "any", false, false, false, 53))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "hauteur", [], "any", false, false, false, 53) + 0)) : (0));
            // line 54
            yield "            ";
            $context["longueur"] = (((($tmp =  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "longueur", [], "any", false, false, false, 54))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ((CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "longueur", [], "any", false, false, false, 54) + 0)) : (0));
            // line 55
            yield "
            ";
            // line 56
            $context["unitPrice"] = ((( !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "haie", [], "any", false, false, false, 56)) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "haie", [], "any", false, false, false, 56), "prix", [], "any", false, false, false, 56)))) ? ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "haie", [], "any", false, false, false, 56), "prix", [], "any", false, false, false, 56) + 0)) : (0));
            // line 57
            yield "

            ";
            // line 59
            $context["base"] = ((isset($context["unitPrice"]) || array_key_exists("unitPrice", $context) ? $context["unitPrice"] : (function () { throw new RuntimeError('Variable "unitPrice" does not exist.', 59, $this->source); })()) * (isset($context["longueur"]) || array_key_exists("longueur", $context) ? $context["longueur"] : (function () { throw new RuntimeError('Variable "longueur" does not exist.', 59, $this->source); })()));
            // line 60
            yield "
            ";
            // line 61
            $context["heightMultiplier"] = ((((isset($context["hauteur"]) || array_key_exists("hauteur", $context) ? $context["hauteur"] : (function () { throw new RuntimeError('Variable "hauteur" does not exist.', 61, $this->source); })()) > 1.5)) ? (1.5) : (1));
            // line 62
            yield "            ";
            $context["withHeight"] = ((isset($context["base"]) || array_key_exists("base", $context) ? $context["base"] : (function () { throw new RuntimeError('Variable "base" does not exist.', 62, $this->source); })()) * (isset($context["heightMultiplier"]) || array_key_exists("heightMultiplier", $context) ? $context["heightMultiplier"] : (function () { throw new RuntimeError('Variable "heightMultiplier" does not exist.', 62, $this->source); })()));
            // line 63
            yield "
            ";
            // line 64
            $context["discountMultiplier"] = 1;
            // line 65
            yield "            ";
            if ((( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 65, $this->source); })()), "client", [], "any", false, false, false, 65)) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 65, $this->source); })()), "client", [], "any", false, false, false, 65), "typeClient", [], "any", false, false, false, 65))) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 65, $this->source); })()), "client", [], "any", false, false, false, 65), "typeClient", [], "any", false, false, false, 65) == false))) {
                // line 66
                yield "                ";
                $context["discountMultiplier"] = 0.9;
                // line 67
                yield "            ";
            }
            // line 68
            yield "            ";
            $context["prix"] = ((isset($context["withHeight"]) || array_key_exists("withHeight", $context) ? $context["withHeight"] : (function () { throw new RuntimeError('Variable "withHeight" does not exist.', 68, $this->source); })()) * (isset($context["discountMultiplier"]) || array_key_exists("discountMultiplier", $context) ? $context["discountMultiplier"] : (function () { throw new RuntimeError('Variable "discountMultiplier" does not exist.', 68, $this->source); })()));
            // line 69
            yield "            ";
            $context["total"] = ((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 69, $this->source); })()) + (isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 69, $this->source); })()));
            // line 70
            yield "            <tr>
                <td>";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 71), "html", null, true);
            yield "</td>
                <td>
                    ";
            // line 73
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "haie", [], "any", false, false, false, 73))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "haie", [], "any", false, false, false, 74), "code", [], "any", false, false, false, 74), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["tailler"], "haie", [], "any", false, false, false, 74), "nom", [], "any", false, false, false, 74), "html", null, true);
                yield "
                    ";
            } else {
                // line 76
                yield "                        -
                    ";
            }
            // line 78
            yield "                </td>
                <td>";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hauteur"]) || array_key_exists("hauteur", $context) ? $context["hauteur"] : (function () { throw new RuntimeError('Variable "hauteur" does not exist.', 79, $this->source); })()), "html", null, true);
            yield "</td>
                <td>";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["longueur"]) || array_key_exists("longueur", $context) ? $context["longueur"] : (function () { throw new RuntimeError('Variable "longueur" does not exist.', 80, $this->source); })()), "html", null, true);
            yield "</td>
                <td>";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["unitPrice"]) || array_key_exists("unitPrice", $context) ? $context["unitPrice"] : (function () { throw new RuntimeError('Variable "unitPrice" does not exist.', 81, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
                <td>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["prix"]) || array_key_exists("prix", $context) ? $context["prix"] : (function () { throw new RuntimeError('Variable "prix" does not exist.', 82, $this->source); })()), 2, ",", " "), "html", null, true);
            yield "</td>
            </tr>
        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 84
        if (!$context['_iterated']) {
            // line 85
            yield "            <tr>
                <td colspan=\"7\">Aucun tailler enregistré pour ce devis.</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['tailler'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        yield "        </tbody>
        <tfoot>
            <tr>
                <th colspan=\"6\" style=\"text-align:right\">Total</th>
                <th>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new RuntimeError('Variable "total" does not exist.', 93, $this->source); })()), 2, ",", " "), "html", null, true);
        yield "</th>
            </tr>
        </tfoot>
    </table>

    <a href=\"";
        // line 98
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_devis_index");
        yield "\">Retour à la liste</a>
    <a href=\"";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_devis_edit", ["devi" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["devi"]) || array_key_exists("devi", $context) ? $context["devi"] : (function () { throw new RuntimeError('Variable "devi" does not exist.', 99, $this->source); })()), "no", [], "any", false, false, false, 99)]), "html", null, true);
        yield "\">Modifier</a>
    ";
        // line 100
        yield Twig\Extension\CoreExtension::include($this->env, $context, "devis/_delete_form.html.twig");
        yield "
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
        return "devis/show.html.twig";
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
        return array (  330 => 100,  326 => 99,  322 => 98,  314 => 93,  308 => 89,  299 => 85,  297 => 84,  282 => 82,  278 => 81,  274 => 80,  270 => 79,  267 => 78,  263 => 76,  255 => 74,  253 => 73,  248 => 71,  245 => 70,  242 => 69,  239 => 68,  236 => 67,  233 => 66,  230 => 65,  228 => 64,  225 => 63,  222 => 62,  220 => 61,  217 => 60,  215 => 59,  211 => 57,  209 => 56,  206 => 55,  203 => 54,  200 => 53,  182 => 52,  168 => 40,  166 => 39,  158 => 33,  154 => 31,  151 => 30,  147 => 28,  143 => 26,  141 => 25,  132 => 23,  125 => 22,  123 => 21,  115 => 16,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Devis{% endblock %}

{% block body %}
    <h1>Devis</h1>
    <h2>Informations</h2>
    <table class=\"table\">
        <tbody>
            <tr>
                <th>No</th>
                <td>{{ devi.no }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ devi.date ? devi.date|date('Y-m-d') : '' }}</td>
            </tr>
            <tr>
                <th>Client</th>
                <td>
                    {% if devi.client is not null %}
                        {{ devi.client.nom }} {{ devi.client.prenom }}<br>
                        {{ devi.client.adresse }} - {{ devi.client.ville }} {{ devi.client.cp }}<br>
                        <strong>Type:</strong>
                        {% if devi.client.typeClient %}
                            Particulier
                        {% else %}
                            Professionnel
                        {% endif %}
                    {% else %}
                        -
                    {% endif %}
                </td>
            </tr>
        </tbody>
    </table>

    <h2>Détails des taillers</h2>
    {% set total = 0 %}
    <table class=\"table table-striped\">
        <thead>
            <tr>
                <th>#</th>
                <th>Haie</th>
                <th>Hauteur</th>
                <th>Longueur</th>
                <th>Prix unité</th>
                <th>Prix</th>
            </tr>
        </thead>
        <tbody>
        {% for tailler in devi.taillers %}
            {% set hauteur = tailler.hauteur is not empty ? (tailler.hauteur + 0) : 0 %}
            {% set longueur = tailler.longueur is not empty ? (tailler.longueur + 0) : 0 %}

            {% set unitPrice = (tailler.haie is not null and tailler.haie.prix is not empty) ? (tailler.haie.prix + 0) : 0 %}


            {% set base = unitPrice * longueur %}

            {% set heightMultiplier = (hauteur > 1.5) ? 1.5 : 1 %}
            {% set withHeight = base * heightMultiplier %}

            {% set discountMultiplier = 1 %}
            {% if devi.client is not null and devi.client.typeClient is not null and devi.client.typeClient == false %}
                {% set discountMultiplier = 0.9 %}
            {% endif %}
            {% set prix = withHeight * discountMultiplier %}
            {% set total = total + prix %}
            <tr>
                <td>{{ loop.index }}</td>
                <td>
                    {% if tailler.haie is not null %}
                        {{ tailler.haie.code }} - {{ tailler.haie.nom }}
                    {% else %}
                        -
                    {% endif %}
                </td>
                <td>{{ hauteur }}</td>
                <td>{{ longueur }}</td>
                <td>{{ unitPrice|number_format(2, ',', ' ') }}</td>
                <td>{{ prix|number_format(2, ',', ' ') }}</td>
            </tr>
        {% else %}
            <tr>
                <td colspan=\"7\">Aucun tailler enregistré pour ce devis.</td>
            </tr>
        {% endfor %}
        </tbody>
        <tfoot>
            <tr>
                <th colspan=\"6\" style=\"text-align:right\">Total</th>
                <th>{{ total|number_format(2, ',', ' ') }}</th>
            </tr>
        </tfoot>
    </table>

    <a href=\"{{ path('app_devis_index') }}\">Retour à la liste</a>
    <a href=\"{{ path('app_devis_edit', {'devi': devi.no}) }}\">Modifier</a>
    {{ include('devis/_delete_form.html.twig') }}
{% endblock %}
", "devis/show.html.twig", "C:\\Random\\Github\\symfony\\templates\\devis\\show.html.twig");
    }
}

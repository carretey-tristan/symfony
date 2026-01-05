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

/* base.html.twig */
class __TwigTemplate_5b3baef0749173f387c34d3ddfa1062f extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        ";
        // line 7
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 22
        yield "

    </head>
    <body>
        <nav>
            <h3>Admin / CRUD</h3>
            <div style=\"position:absolute; right:18px; top:12px;\">
                <label for=\"theme-select\" style=\"font-size:13px; margin-right:6px; color:inherit\">Thème</label>
                <select id=\"theme-select\" aria-label=\"Choisir un thème\">
                    <option value=\"/css/gardener.css\">Gardener (floral)</option>
                    <option value=\"/css/ugly.css\">Ugly (v1)</option>
                    <option value=\"/css/uglyv2.css\">Ugly v2</option>
                    <option value=\"/css/uglyv3.css\">Ugly v3</option>
                    <option value=\"/css/abomination.css\">Abomination</option>
                    <option value=\"/css/ugliest.css\">Ugliest</option>
                </select>
            </div>
            <ul>
                <li><a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_accueil");
        yield "\">Accueil</a></li>
                <li>Clients
                    <ul>
                        <li><a href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_index");
        yield "\">Liste clients</a></li>
                        <li><a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_client_new");
        yield "\">Nouveau client</a></li>
                    </ul>
                </li>
                <li>Devis
                    <ul>
                        <li><a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_devis_index");
        yield "\">Liste devis</a></li>
                        <li><a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_devis_new");
        yield "\">Nouveau devis</a></li>
                    </ul>
                </li>
                <li>Haies
                    <ul>
                        <li><a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_creer_haie");
        yield "\">Créer une haie</a></li>
                        <li><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voir_haie");
        yield "\">Gérer les haies</a></li>
                    </ul>
                </li>
                <li>Catégories
                    <ul>
                        <li><a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_index");
        yield "\">Liste catégories</a></li>
                        <li><a href=\"";
        // line 62
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_categorie_new");
        yield "\">Nouvelle catégorie</a></li>
                    </ul>
                </li>
                <li>Tailler
                    <ul>
                        <li><a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tailler_index");
        yield "\">Liste tailles</a></li>
                        <li><a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_tailler_new");
        yield "\">Nouvelle taille</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <div class=\"card\">
                ";
        // line 76
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 78
        yield "            </div>
        </main>
        <script>
            (function(){
                const link = document.getElementById('theme-stylesheet');
                const select = document.getElementById('theme-select');
                if(!link || !select) return;

                // Apply saved theme or default
                const saved = localStorage.getItem('site-theme');
                const defaultHref = link.getAttribute('href') || '/css/ugliest.css';
                const hrefToUse = saved || defaultHref;
                link.setAttribute('href', hrefToUse);

                // Set select to match
                for(const opt of select.options){
                    if(opt.value === hrefToUse){ opt.selected = true; break; }
                }

                select.addEventListener('change', function(){
                    const href = select.value;
                    link.setAttribute('href', href);
                    try{ localStorage.setItem('site-theme', href); }catch(e){}
                });
            })();
        </script>
    </body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        yield "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link id=\"theme-stylesheet\" rel=\"stylesheet\" href=\"/css/ugliest.css\">
            <style>
                /* Keep nav in normal document flow (on top of the page, not fixed to the viewport) */
                nav{ position:relative; top:0; left:0; right:0; z-index:50; }
                /* Give a small top margin so the content doesn't sit flush under the nav */
                main{ margin-top:24px; }
                /* Put decorative page overlays behind nav and content */
                body::before, body::after{ z-index:0; }
                /* Make the theme selector clickable above overlays */
                #theme-select{ position:relative; z-index:60; }
            </style>

        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield "                ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  267 => 77,  254 => 76,  230 => 8,  217 => 7,  194 => 5,  155 => 78,  153 => 76,  142 => 68,  138 => 67,  130 => 62,  126 => 61,  118 => 56,  114 => 55,  106 => 50,  102 => 49,  94 => 44,  90 => 43,  84 => 40,  64 => 22,  62 => 7,  57 => 5,  51 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        {% block stylesheets %}
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <link id=\"theme-stylesheet\" rel=\"stylesheet\" href=\"/css/ugliest.css\">
            <style>
                /* Keep nav in normal document flow (on top of the page, not fixed to the viewport) */
                nav{ position:relative; top:0; left:0; right:0; z-index:50; }
                /* Give a small top margin so the content doesn't sit flush under the nav */
                main{ margin-top:24px; }
                /* Put decorative page overlays behind nav and content */
                body::before, body::after{ z-index:0; }
                /* Make the theme selector clickable above overlays */
                #theme-select{ position:relative; z-index:60; }
            </style>

        {% endblock %}


    </head>
    <body>
        <nav>
            <h3>Admin / CRUD</h3>
            <div style=\"position:absolute; right:18px; top:12px;\">
                <label for=\"theme-select\" style=\"font-size:13px; margin-right:6px; color:inherit\">Thème</label>
                <select id=\"theme-select\" aria-label=\"Choisir un thème\">
                    <option value=\"/css/gardener.css\">Gardener (floral)</option>
                    <option value=\"/css/ugly.css\">Ugly (v1)</option>
                    <option value=\"/css/uglyv2.css\">Ugly v2</option>
                    <option value=\"/css/uglyv3.css\">Ugly v3</option>
                    <option value=\"/css/abomination.css\">Abomination</option>
                    <option value=\"/css/ugliest.css\">Ugliest</option>
                </select>
            </div>
            <ul>
                <li><a href=\"{{ path('app_accueil') }}\">Accueil</a></li>
                <li>Clients
                    <ul>
                        <li><a href=\"{{ path('app_client_index') }}\">Liste clients</a></li>
                        <li><a href=\"{{ path('app_client_new') }}\">Nouveau client</a></li>
                    </ul>
                </li>
                <li>Devis
                    <ul>
                        <li><a href=\"{{ path('app_devis_index') }}\">Liste devis</a></li>
                        <li><a href=\"{{ path('app_devis_new') }}\">Nouveau devis</a></li>
                    </ul>
                </li>
                <li>Haies
                    <ul>
                        <li><a href=\"{{ path('app_creer_haie') }}\">Créer une haie</a></li>
                        <li><a href=\"{{ path('app_voir_haie') }}\">Gérer les haies</a></li>
                    </ul>
                </li>
                <li>Catégories
                    <ul>
                        <li><a href=\"{{ path('app_categorie_index') }}\">Liste catégories</a></li>
                        <li><a href=\"{{ path('app_categorie_new') }}\">Nouvelle catégorie</a></li>
                    </ul>
                </li>
                <li>Tailler
                    <ul>
                        <li><a href=\"{{ path('app_tailler_index') }}\">Liste tailles</a></li>
                        <li><a href=\"{{ path('app_tailler_new') }}\">Nouvelle taille</a></li>
                    </ul>
                </li>
            </ul>
        </nav>

        <main>
            <div class=\"card\">
                {% block body %}
                {% endblock %}
            </div>
        </main>
        <script>
            (function(){
                const link = document.getElementById('theme-stylesheet');
                const select = document.getElementById('theme-select');
                if(!link || !select) return;

                // Apply saved theme or default
                const saved = localStorage.getItem('site-theme');
                const defaultHref = link.getAttribute('href') || '/css/ugliest.css';
                const hrefToUse = saved || defaultHref;
                link.setAttribute('href', hrefToUse);

                // Set select to match
                for(const opt of select.options){
                    if(opt.value === hrefToUse){ opt.selected = true; break; }
                }

                select.addEventListener('change', function(){
                    const href = select.value;
                    link.setAttribute('href', href);
                    try{ localStorage.setItem('site-theme', href); }catch(e){}
                });
            })();
        </script>
    </body>
</html>
", "base.html.twig", "C:\\Random\\Github\\symfony\\templates\\base.html.twig");
    }
}

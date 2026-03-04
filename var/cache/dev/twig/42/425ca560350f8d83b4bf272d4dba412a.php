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

/* reponse/index.html.twig */
class __TwigTemplate_15b0d8d084cc7aee9d091e41af694da9 extends Template
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
            'page_styles' => [$this, 'block_page_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/index.html.twig"));

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

        yield "Back Office — Reponse";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_styles"));

        // line 6
        yield "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">

<style>
header, .preloader { display:none !important; }
body { background:#f5f7fb; }

.wrapper {
    display:flex;
    min-height:100vh;
}

.sidebar {
    width:230px;
    background:#0f172a;
    color:white;
    padding:20px;
}

.sidebar a {
    color:white;
    display:block;
    padding:10px;
    border-radius:10px;
    text-decoration:none;
}

.sidebar a:hover {
    background:#1e293b;
}

.content {
    flex:1;
    padding:30px;
}

.grid {
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

.card-box {
    background:white;
    border-radius:18px;
    padding:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
}

.search-box {
    background: white;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.sort-link {
    color: #0f172a;
    text-decoration: none;
    margin-right: 15px;
    font-size: 0.9rem;
}

.sort-link:hover {
    color: #3b82f6;
}

.sort-link.active {
    color: #3b82f6;
    font-weight: bold;
}

.stat-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 20px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 89
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

        // line 90
        yield "<div class=\"wrapper\">
    <div class=\"sidebar\">
        <h4>
            <i class=\"bi bi-tools\"></i>
            Back Office
        </h4>
        <hr>
        <a href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation");
        yield "\" class=\"active\">
            <i class=\"bi bi-envelope\"></i>
            Réclamations
        </a>
        <a href=\"";
        // line 101
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\">
            <i class=\"bi bi-chat\"></i>
            Réponses
        </a>
    </div>
    
    <div class=\"content\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Gestion des Réponses</h2>
            <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new");
        yield "\" class=\"btn btn-primary\">
                <i class=\"bi bi-plus-circle\"></i> Nouvelle réponse
            </a>
        </div>

        <!-- Statistiques -->
        <div class=\"row mb-4\">
            <div class=\"col-md-4\">
                <div class=\"stat-card\">
                    <h5>Total réponses</h5>
                    <h2>";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 120, $this->source); })())), "html", null, true);
        yield "</h2>
                </div>
            </div>
        </div>

        <!-- Barre de recherche et tri -->
        <div class=\"search-box\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"bi bi-search\"></i></span>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"Rechercher par nom, email, réponse, sujet...\" 
                               value=\"";
        // line 133
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 133, $this->source); })()), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                        ";
        // line 135
        if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 135, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
            yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"bi bi-x-circle\"></i> Effacer
                            </a>
                        ";
        }
        // line 140
        yield "                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-2\">Trier par:</span>
                        <a href=\"";
        // line 146
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index", ["sort" => "id", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 146, $this->source); })()) == "id") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 146, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 146, $this->source); })())]), "html", null, true);
        yield "\" 
                           class=\"sort-link ";
        // line 147
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 147, $this->source); })()) == "id")) {
            yield "active";
        }
        yield "\">
                            ID <i class=\"bi bi-arrow-";
        // line 148
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 148, $this->source); })()) == "id")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 148, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        } else {
            yield "up-down";
        }
        yield "\"></i>
                        </a>
                        <a href=\"";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index", ["sort" => "nom_rep", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 150, $this->source); })()) == "nom_rep") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 150, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 150, $this->source); })())]), "html", null, true);
        yield "\" 
                           class=\"sort-link ";
        // line 151
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 151, $this->source); })()) == "nom_rep")) {
            yield "active";
        }
        yield "\">
                            Nom <i class=\"bi bi-arrow-";
        // line 152
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 152, $this->source); })()) == "nom_rep")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 152, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        } else {
            yield "up-down";
        }
        yield "\"></i>
                        </a>
                        <a href=\"";
        // line 154
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index", ["sort" => "date_reponse", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 154, $this->source); })()) == "date_reponse") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 154, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 154, $this->source); })())]), "html", null, true);
        yield "\" 
                           class=\"sort-link ";
        // line 155
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 155, $this->source); })()) == "date_reponse")) {
            yield "active";
        }
        yield "\">
                            Date <i class=\"bi bi-arrow-";
        // line 156
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 156, $this->source); })()) == "date_reponse")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 156, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        } else {
            yield "up-down";
        }
        yield "\"></i>
                        </a>
                        <a href=\"";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index", ["sort" => "reclamation", "order" => (((((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 158, $this->source); })()) == "reclamation") && ((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 158, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search" => (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 158, $this->source); })())]), "html", null, true);
        yield "\" 
                           class=\"sort-link ";
        // line 159
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 159, $this->source); })()) == "reclamation")) {
            yield "active";
        }
        yield "\">
                            Réclamation # <i class=\"bi bi-arrow-";
        // line 160
        if (((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 160, $this->source); })()) == "reclamation")) {
            yield ((((isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 160, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        } else {
            yield "up-down";
        }
        yield "\"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Liste des réponses -->
        <div class=\"card-box\">
            ";
        // line 169
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 169, $this->source); })()))) {
            // line 170
            yield "                <div class=\"text-center py-5\">
                    <i class=\"bi bi-chat-square-text\" style=\"font-size: 3rem; color: #ccc;\"></i>
                    <p class=\"text-muted mt-3\">Aucune réponse trouvée</p>
                    ";
            // line 173
            if ((($tmp = (isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 173, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 174
                yield "                        <p class=\"text-muted\">Aucun résultat pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 174, $this->source); })()), "html", null, true);
                yield "\"</p>
                        <a href=\"";
                // line 175
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
                yield "\" class=\"btn btn-outline-primary\">Effacer la recherche</a>
                    ";
            }
            // line 177
            yield "                </div>
            ";
        } else {
            // line 179
            yield "                ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reponses"]) || array_key_exists("reponses", $context) ? $context["reponses"] : (function () { throw new RuntimeError('Variable "reponses" does not exist.', 179, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["rep"]) {
                // line 180
                yield "                    <div class=\"border rounded p-3 mb-3 ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 180) % 2 != 0)) {
                    yield "bg-light";
                }
                yield "\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h5 class=\"mb-1\">
                                    #";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "id", [], "any", false, false, false, 184), "html", null, true);
                yield " - ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "nomRep", [], "any", false, false, false, 184), "html", null, true);
                yield "
                                    <small class=\"text-muted\">";
                // line 185
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "dateReponse", [], "any", false, false, false, 185), "d/m/Y H:i"), "html", null, true);
                yield "</small>
                                </h5>
                                <p class=\"mb-2\">";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "reponseRep", [], "any", false, false, false, 187), "html", null, true);
                yield "</p>
                                <div class=\"small\">
                                    <span class=\"badge bg-info\">Réclamation #";
                // line 189
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "reclamation", [], "any", false, false, false, 189), "id", [], "any", false, false, false, 189), "html", null, true);
                yield "</span>
                                    <span class=\"badge bg-secondary\">";
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "reclamation", [], "any", false, false, false, 190), "sujetrec", [], "any", false, false, false, 190), "html", null, true);
                yield "</span>
                                </div>
                            </div>
                            <div class=\"btn-group\">
                                <a href=\"";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "id", [], "any", false, false, false, 194)]), "html", null, true);
                yield "\" 
                                class=\"btn btn-sm btn-info\" 
                                title=\"Voir les détails\">
                                    <i class=\"bi bi-eye\"></i>
                                </a>
                                
                                <a href=\"";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "id", [], "any", false, false, false, 200)]), "html", null, true);
                yield "\" 
                                class=\"btn btn-sm btn-warning\" 
                                title=\"Modifier\">
                                    <i class=\"bi bi-pencil\"></i>
                                </a>
                                
                                <form method=\"post\" action=\"";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "id", [], "any", false, false, false, 206)]), "html", null, true);
                yield "\" 
                                    class=\"d-inline\" 
                                    onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"";
                // line 209
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["rep"], "id", [], "any", false, false, false, 209))), "html", null, true);
                yield "\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                        <i class=\"bi bi-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rep'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            yield "            ";
        }
        // line 219
        yield "        </div>
    </div>
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
        return "reponse/index.html.twig";
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
        return array (  497 => 219,  494 => 218,  471 => 209,  465 => 206,  456 => 200,  447 => 194,  440 => 190,  436 => 189,  431 => 187,  426 => 185,  420 => 184,  410 => 180,  392 => 179,  388 => 177,  383 => 175,  378 => 174,  376 => 173,  371 => 170,  369 => 169,  353 => 160,  347 => 159,  343 => 158,  334 => 156,  328 => 155,  324 => 154,  315 => 152,  309 => 151,  305 => 150,  296 => 148,  290 => 147,  286 => 146,  278 => 140,  270 => 136,  268 => 135,  263 => 133,  247 => 120,  234 => 110,  222 => 101,  215 => 97,  206 => 90,  193 => 89,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Back Office — Reponse{% endblock %}

{% block page_styles %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">

<style>
header, .preloader { display:none !important; }
body { background:#f5f7fb; }

.wrapper {
    display:flex;
    min-height:100vh;
}

.sidebar {
    width:230px;
    background:#0f172a;
    color:white;
    padding:20px;
}

.sidebar a {
    color:white;
    display:block;
    padding:10px;
    border-radius:10px;
    text-decoration:none;
}

.sidebar a:hover {
    background:#1e293b;
}

.content {
    flex:1;
    padding:30px;
}

.grid {
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:25px;
}

.card-box {
    background:white;
    border-radius:18px;
    padding:20px;
    box-shadow:0 8px 20px rgba(0,0,0,.06);
}

.search-box {
    background: white;
    padding: 15px;
    border-radius: 10px;
    margin-bottom: 20px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.sort-link {
    color: #0f172a;
    text-decoration: none;
    margin-right: 15px;
    font-size: 0.9rem;
}

.sort-link:hover {
    color: #3b82f6;
}

.sort-link.active {
    color: #3b82f6;
    font-weight: bold;
}

.stat-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 10px;
    padding: 15px;
    margin-bottom: 20px;
}
</style>
{% endblock %}

{% block body %}
<div class=\"wrapper\">
    <div class=\"sidebar\">
        <h4>
            <i class=\"bi bi-tools\"></i>
            Back Office
        </h4>
        <hr>
        <a href=\"{{ path('app_back_reclamation') }}\" class=\"active\">
            <i class=\"bi bi-envelope\"></i>
            Réclamations
        </a>
        <a href=\"{{ path('app_reponse_index') }}\">
            <i class=\"bi bi-chat\"></i>
            Réponses
        </a>
    </div>
    
    <div class=\"content\">
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <h2>Gestion des Réponses</h2>
            <a href=\"{{ path('app_reponse_new') }}\" class=\"btn btn-primary\">
                <i class=\"bi bi-plus-circle\"></i> Nouvelle réponse
            </a>
        </div>

        <!-- Statistiques -->
        <div class=\"row mb-4\">
            <div class=\"col-md-4\">
                <div class=\"stat-card\">
                    <h5>Total réponses</h5>
                    <h2>{{ reponses|length }}</h2>
                </div>
            </div>
        </div>

        <!-- Barre de recherche et tri -->
        <div class=\"search-box\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-6\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text\"><i class=\"bi bi-search\"></i></span>
                        <input type=\"text\" name=\"search\" class=\"form-control\" 
                               placeholder=\"Rechercher par nom, email, réponse, sujet...\" 
                               value=\"{{ search }}\">
                        <button type=\"submit\" class=\"btn btn-primary\">Rechercher</button>
                        {% if search %}
                            <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"bi bi-x-circle\"></i> Effacer
                            </a>
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"col-md-6\">
                    <div class=\"d-flex align-items-center\">
                        <span class=\"me-2\">Trier par:</span>
                        <a href=\"{{ path('app_reponse_index', {sort: 'id', order: (sort == 'id' and order == 'ASC') ? 'DESC' : 'ASC', search: search}) }}\" 
                           class=\"sort-link {% if sort == 'id' %}active{% endif %}\">
                            ID <i class=\"bi bi-arrow-{% if sort == 'id' %}{{ order == 'ASC' ? 'up' : 'down' }}{% else %}up-down{% endif %}\"></i>
                        </a>
                        <a href=\"{{ path('app_reponse_index', {sort: 'nom_rep', order: (sort == 'nom_rep' and order == 'ASC') ? 'DESC' : 'ASC', search: search}) }}\" 
                           class=\"sort-link {% if sort == 'nom_rep' %}active{% endif %}\">
                            Nom <i class=\"bi bi-arrow-{% if sort == 'nom_rep' %}{{ order == 'ASC' ? 'up' : 'down' }}{% else %}up-down{% endif %}\"></i>
                        </a>
                        <a href=\"{{ path('app_reponse_index', {sort: 'date_reponse', order: (sort == 'date_reponse' and order == 'ASC') ? 'DESC' : 'ASC', search: search}) }}\" 
                           class=\"sort-link {% if sort == 'date_reponse' %}active{% endif %}\">
                            Date <i class=\"bi bi-arrow-{% if sort == 'date_reponse' %}{{ order == 'ASC' ? 'up' : 'down' }}{% else %}up-down{% endif %}\"></i>
                        </a>
                        <a href=\"{{ path('app_reponse_index', {sort: 'reclamation', order: (sort == 'reclamation' and order == 'ASC') ? 'DESC' : 'ASC', search: search}) }}\" 
                           class=\"sort-link {% if sort == 'reclamation' %}active{% endif %}\">
                            Réclamation # <i class=\"bi bi-arrow-{% if sort == 'reclamation' %}{{ order == 'ASC' ? 'up' : 'down' }}{% else %}up-down{% endif %}\"></i>
                        </a>
                    </div>
                </div>
            </form>
        </div>

        <!-- Liste des réponses -->
        <div class=\"card-box\">
            {% if reponses is empty %}
                <div class=\"text-center py-5\">
                    <i class=\"bi bi-chat-square-text\" style=\"font-size: 3rem; color: #ccc;\"></i>
                    <p class=\"text-muted mt-3\">Aucune réponse trouvée</p>
                    {% if search %}
                        <p class=\"text-muted\">Aucun résultat pour \"{{ search }}\"</p>
                        <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-outline-primary\">Effacer la recherche</a>
                    {% endif %}
                </div>
            {% else %}
                {% for rep in reponses %}
                    <div class=\"border rounded p-3 mb-3 {% if loop.index is odd %}bg-light{% endif %}\">
                        <div class=\"d-flex justify-content-between align-items-start\">
                            <div>
                                <h5 class=\"mb-1\">
                                    #{{ rep.id }} - {{ rep.nomRep }}
                                    <small class=\"text-muted\">{{ rep.dateReponse|date('d/m/Y H:i') }}</small>
                                </h5>
                                <p class=\"mb-2\">{{ rep.reponseRep }}</p>
                                <div class=\"small\">
                                    <span class=\"badge bg-info\">Réclamation #{{ rep.reclamation.id }}</span>
                                    <span class=\"badge bg-secondary\">{{ rep.reclamation.sujetrec }}</span>
                                </div>
                            </div>
                            <div class=\"btn-group\">
                                <a href=\"{{ path('app_reponse_show', {id: rep.id}) }}\" 
                                class=\"btn btn-sm btn-info\" 
                                title=\"Voir les détails\">
                                    <i class=\"bi bi-eye\"></i>
                                </a>
                                
                                <a href=\"{{ path('app_reponse_edit', {id: rep.id}) }}\" 
                                class=\"btn btn-sm btn-warning\" 
                                title=\"Modifier\">
                                    <i class=\"bi bi-pencil\"></i>
                                </a>
                                
                                <form method=\"post\" action=\"{{ path('app_reponse_delete', {id: rep.id}) }}\" 
                                    class=\"d-inline\" 
                                    onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?');\">
                                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rep.id) }}\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-danger\" title=\"Supprimer\">
                                        <i class=\"bi bi-trash\"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "reponse/index.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\reponse\\index.html.twig");
    }
}

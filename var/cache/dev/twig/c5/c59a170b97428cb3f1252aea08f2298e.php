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

/* back/backReclamation.html.twig */
class __TwigTemplate_5b81a30c1893783de6556d954a26336f extends Template
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
            'page_scripts' => [$this, 'block_page_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backReclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/backReclamation.html.twig"));

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

        yield "Back Office — Réclamations";
        
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
/* Reset et base */
header, .preloader { display:none !important; }
body { 
    background:#f5f7fb;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Wrapper principal */
.wrapper {
    display:flex;
    min-height:100vh;
}

/* Sidebar */
.sidebar {
    width:260px;
    background: linear-gradient(180deg, #0f172a 0%, #1a2639 100%);
    color:white;
    padding:25px 15px;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
}

.sidebar h4 {
    font-size: 1.2rem;
    font-weight: 600;
    padding-left: 10px;
    margin-bottom: 20px;
    color: #a5b4fc;
}

.sidebar hr {
    border-color: #334155;
    margin: 20px 0;
}

.sidebar a {
    color: #cbd5e1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 15px;
    border-radius: 12px;
    text-decoration: none;
    margin-bottom: 5px;
    transition: all 0.3s ease;
}

.sidebar a i {
    font-size: 1.2rem;
    width: 24px;
}

.sidebar a:hover {
    background: #2d3a5e;
    color: white;
    transform: translateX(5px);
}

.sidebar a.active {
    background: #3b82f6;
    color: white;
    box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
}

/* Contenu principal */
.content {
    flex:1;
    padding:30px;
}

/* Cartes de statistiques */
.stat-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card h6 {
    font-size: 0.9rem;
    opacity: 0.9;
    margin-bottom: 10px;
}

.stat-card h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 5px;
}

.stat-card small {
    font-size: 0.8rem;
    opacity: 0.8;
}

/* Boîte de recherche */
.search-box {
    background: white;
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* Liens de tri */
.sort-link {
    color: #4b5563;
    text-decoration: none;
    margin-right: 15px;
    font-size: 0.9rem;
    padding: 6px 12px;
    border-radius: 20px;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #f3f4f6;
}

.sort-link:hover {
    background: #e5e7eb;
    color: #3b82f6;
}

.sort-link.active {
    background: #3b82f6;
    color: white;
}

/* Carte principale */
.card-box {
    background: white;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.06);
}

/* Badges d'état */
.etat-badge {
    padding: 6px 12px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    white-space: nowrap;
}

.etat-badge i {
    font-size: 0.9rem;
}

.etat-pending {
    background: #fff3cd;
    color: #856404;
    border: 1px solid #ffeeba;
}

.etat-resolved {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

/* Lignes du tableau */
.reclamation-item {
    transition: all 0.2s ease;
}

.reclamation-item:hover {
    background-color: #f8fafc !important;
    transform: scale(1.01);
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.reclamation-item.etat-pending-border {
    border-left: 4px solid #ffc107;
}

.reclamation-item.etat-resolved-border {
    border-left: 4px solid #28a745;
}

/* Boutons d'action */
.btn-group .btn {
    border-radius: 8px !important;
    margin: 0 2px;
    padding: 0.4rem 0.8rem;
    transition: all 0.2s ease;
}

.btn-group .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Bouton Répondre spécial */
.btn-success {
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
}

.btn-success:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
}

/* Tableau */
.table {
    margin-bottom: 0;
}

.table thead th {
    border-bottom: 2px solid #e5e7eb;
    color: #4b5563;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.table td {
    vertical-align: middle;
    padding: 15px 10px;
}

/* Modal */
.modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.modal-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 20px 20px 0 0;
    padding: 20px 25px;
}

.modal-header .btn-close {
    filter: brightness(0) invert(1);
}

.modal-body {
    padding: 25px;
}

.modal-footer {
    border-top: 1px solid #e5e7eb;
    padding: 20px 25px;
}

/* Formulaires */
.form-control {
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    padding: 10px 15px;
    transition: all 0.2s ease;
}

.form-control:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-label {
    font-weight: 500;
    color: #4b5563;
    margin-bottom: 8px;
}

/* États vides */
.empty-state {
    text-align: center;
    padding: 50px 20px;
}

.empty-state i {
    font-size: 4rem;
    color: #dee2e6;
    margin-bottom: 20px;
}

.empty-state h5 {
    color: #6b7280;
    margin-bottom: 10px;
}

.empty-state p {
    color: #9ca3af;
    margin-bottom: 20px;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.card-box, .stat-card, .search-box {
    animation: fadeIn 0.5s ease-out;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 323
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

        // line 324
        yield "<div class=\"wrapper\">

    <!-- SIDEBAR -->
    <div class=\"sidebar\">
        <h4>
            <i class=\"bi bi-tools\"></i>
            Back Office
        </h4>
        <hr>
        <a href=\"";
        // line 333
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation");
        yield "\" class=\"active\">
            <i class=\"bi bi-envelope\"></i>
            Réclamations
        </a>
        <a href=\"";
        // line 337
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\">
            <i class=\"bi bi-chat\"></i>
            Réponses
        </a>
    </div>

    <!-- CONTENT -->
    <div class=\"content\">

        <!-- Header avec titre et bouton -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h2 class=\"mb-1\">Gestion des Réclamations</h2>
                <p class=\"text-muted\">Gérez toutes les réclamations et leurs réponses</p>
            </div>
        </div>

        <!-- Statistiques -->
        <div class=\"row mb-4 g-4\">
            <div class=\"col-md-4\">
                <div class=\"stat-card\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                    <h6><i class=\"bi bi-files\"></i> Total réclamations</h6>
                    <h3>";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 359, $this->source); })())), "html", null, true);
        yield "</h3>
                    <small>Toutes les réclamations</small>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"stat-card\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\">
                    <h6><i class=\"bi bi-hourglass\"></i> En attente</h6>
                    <h3>";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 366, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 366, $this->source); })()), "etat", [], "any", false, false, false, 366) == "Pending"); })), "html", null, true);
        yield "</h3>
                    <small>Sans réponse</small>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"stat-card\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                    <h6><i class=\"bi bi-check-circle\"></i> Résolues</h6>
                    <h3>";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 373, $this->source); })()), function ($__r__) use ($context, $macros) { $context["r"] = $__r__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["r"]) || array_key_exists("r", $context) ? $context["r"] : (function () { throw new RuntimeError('Variable "r" does not exist.', 373, $this->source); })()), "etat", [], "any", false, false, false, 373) == "Resolved"); })), "html", null, true);
        yield "</h3>
                    <small>Avec réponse</small>
                </div>
            </div>
        </div>

        <!-- Barre de recherche et tri -->
        <div class=\"search-box\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-7\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white\">
                            <i class=\"bi bi-search text-primary\"></i>
                        </span>
                        <input type=\"text\" name=\"search_rec\" class=\"form-control form-control-lg\" 
                               placeholder=\"Rechercher par nom, email, sujet ou description...\" 
                               value=\"";
        // line 389
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_rec"]) || array_key_exists("search_rec", $context) ? $context["search_rec"] : (function () { throw new RuntimeError('Variable "search_rec" does not exist.', 389, $this->source); })()), "html", null, true);
        yield "\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-search\"></i> Rechercher
                        </button>
                        ";
        // line 393
        if ((($tmp = (isset($context["search_rec"]) || array_key_exists("search_rec", $context) ? $context["search_rec"] : (function () { throw new RuntimeError('Variable "search_rec" does not exist.', 393, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 394
            yield "                            <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation");
            yield "\" class=\"btn btn-outline-secondary\">
                                <i class=\"bi bi-x-circle\"></i> Effacer
                            </a>
                        ";
        }
        // line 398
        yield "                    </div>
                </div>
                
                <div class=\"col-md-5\">
                    <div class=\"d-flex align-items-center h-100\">
                        <span class=\"me-3 text-muted\">
                            <i class=\"bi bi-arrow-up-down\"></i> Trier par:
                        </span>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <a href=\"";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation", ["sort_rec" => "date_creation", "order_rec" => (((((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 407, $this->source); })()) == "date_creation") && ((isset($context["order_rec"]) || array_key_exists("order_rec", $context) ? $context["order_rec"] : (function () { throw new RuntimeError('Variable "order_rec" does not exist.', 407, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search_rec" => (isset($context["search_rec"]) || array_key_exists("search_rec", $context) ? $context["search_rec"] : (function () { throw new RuntimeError('Variable "search_rec" does not exist.', 407, $this->source); })())]), "html", null, true);
        yield "\" 
                               class=\"sort-link ";
        // line 408
        if (((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 408, $this->source); })()) == "date_creation")) {
            yield "active";
        }
        yield "\">
                                <i class=\"bi bi-calendar\"></i> Date
                                <i class=\"bi bi-arrow-";
        // line 410
        if (((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 410, $this->source); })()) == "date_creation")) {
            yield ((((isset($context["order_rec"]) || array_key_exists("order_rec", $context) ? $context["order_rec"] : (function () { throw new RuntimeError('Variable "order_rec" does not exist.', 410, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        } else {
            yield "up-down";
        }
        yield "\"></i>
                            </a>
                            <a href=\"";
        // line 412
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation", ["sort_rec" => "etat", "order_rec" => (((((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 412, $this->source); })()) == "etat") && ((isset($context["order_rec"]) || array_key_exists("order_rec", $context) ? $context["order_rec"] : (function () { throw new RuntimeError('Variable "order_rec" does not exist.', 412, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search_rec" => (isset($context["search_rec"]) || array_key_exists("search_rec", $context) ? $context["search_rec"] : (function () { throw new RuntimeError('Variable "search_rec" does not exist.', 412, $this->source); })())]), "html", null, true);
        yield "\" 
                               class=\"sort-link ";
        // line 413
        if (((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 413, $this->source); })()) == "etat")) {
            yield "active";
        }
        yield "\">
                                <i class=\"bi bi-tag\"></i> État
                                <i class=\"bi bi-arrow-";
        // line 415
        if (((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 415, $this->source); })()) == "etat")) {
            yield ((((isset($context["order_rec"]) || array_key_exists("order_rec", $context) ? $context["order_rec"] : (function () { throw new RuntimeError('Variable "order_rec" does not exist.', 415, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        } else {
            yield "up-down";
        }
        yield "\"></i>
                            </a>
                            <a href=\"";
        // line 417
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation", ["sort_rec" => "nomrec", "order_rec" => (((((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 417, $this->source); })()) == "nomrec") && ((isset($context["order_rec"]) || array_key_exists("order_rec", $context) ? $context["order_rec"] : (function () { throw new RuntimeError('Variable "order_rec" does not exist.', 417, $this->source); })()) == "ASC"))) ? ("DESC") : ("ASC")), "search_rec" => (isset($context["search_rec"]) || array_key_exists("search_rec", $context) ? $context["search_rec"] : (function () { throw new RuntimeError('Variable "search_rec" does not exist.', 417, $this->source); })())]), "html", null, true);
        yield "\" 
                               class=\"sort-link ";
        // line 418
        if (((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 418, $this->source); })()) == "nomrec")) {
            yield "active";
        }
        yield "\">
                                <i class=\"bi bi-person\"></i> Nom
                                <i class=\"bi bi-arrow-";
        // line 420
        if (((isset($context["sort_rec"]) || array_key_exists("sort_rec", $context) ? $context["sort_rec"] : (function () { throw new RuntimeError('Variable "sort_rec" does not exist.', 420, $this->source); })()) == "nomrec")) {
            yield ((((isset($context["order_rec"]) || array_key_exists("order_rec", $context) ? $context["order_rec"] : (function () { throw new RuntimeError('Variable "order_rec" does not exist.', 420, $this->source); })()) == "ASC")) ? ("up") : ("down"));
        } else {
            yield "up-down";
        }
        yield "\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Liste des réclamations -->
        <div class=\"card-box\">
            ";
        // line 430
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 430, $this->source); })()))) {
            // line 431
            yield "                <div class=\"empty-state\">
                    <i class=\"bi bi-inbox\"></i>
                    <h5>Aucune réclamation trouvée</h5>
                    ";
            // line 434
            if ((($tmp = (isset($context["search_rec"]) || array_key_exists("search_rec", $context) ? $context["search_rec"] : (function () { throw new RuntimeError('Variable "search_rec" does not exist.', 434, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 435
                yield "                        <p class=\"text-muted\">Aucun résultat pour \"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search_rec"]) || array_key_exists("search_rec", $context) ? $context["search_rec"] : (function () { throw new RuntimeError('Variable "search_rec" does not exist.', 435, $this->source); })()), "html", null, true);
                yield "\"</p>
                        <a href=\"";
                // line 436
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation");
                yield "\" class=\"btn btn-outline-primary\">
                            <i class=\"bi bi-x-circle\"></i> Effacer la recherche
                        </a>
                    ";
            } else {
                // line 440
                yield "                        <p class=\"text-muted\">Commencez par créer votre première réclamation</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addReclamationModal\">
                            <i class=\"bi bi-plus-circle\"></i> Créer une réclamation
                        </button>
                    ";
            }
            // line 445
            yield "                </div>
            ";
        } else {
            // line 447
            yield "                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Sujet</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>État</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 462, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
                // line 463
                yield "                                <tr class=\"reclamation-item etat-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "etat", [], "any", false, false, false, 463)), "html", null, true);
                yield "-border\">
                                    <td>
                                        <span class=\"fw-bold\">#";
                // line 465
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 465), "html", null, true);
                yield "</span>
                                    </td>
                                    <td>
                                        <div class=\"fw-semibold\">";
                // line 468
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "nomrec", [], "any", false, false, false, 468), "html", null, true);
                yield "</div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted small\">
                                            <i class=\"bi bi-envelope\"></i> ";
                // line 472
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "adressmail", [], "any", false, false, false, 472), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-light text-dark\">";
                // line 476
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "sujetrec", [], "any", false, false, false, 476), "html", null, true);
                yield "</span>
                                    </td>
                                    <td>
                                        <span class=\"small\">
                                            ";
                // line 480
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "descriptionrec", [], "any", false, false, false, 480), 0, 50), "html", null, true);
                yield "
                                            ";
                // line 481
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "descriptionrec", [], "any", false, false, false, 481)) > 50)) {
                    yield "...";
                }
                // line 482
                yield "                                        </span>
                                    </td>
                                    <td>
                                        <span class=\"small text-muted\">
                                            <i class=\"bi bi-clock\"></i>
                                            ";
                // line 487
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateCreation", [], "any", false, false, false, 487), "d/m/Y H:i"), "html", null, true);
                yield "
                                        </span>
                                    </td>
                                    <td>
                                        ";
                // line 491
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "etat", [], "any", false, false, false, 491) == "Pending")) {
                    // line 492
                    yield "                                            <span class=\"etat-badge etat-pending\">
                                                <i class=\"bi bi-hourglass-split\"></i>
                                                En attente
                                            </span>
                                            <small class=\"text-muted d-block mt-1\">
                                                <i class=\"bi bi-exclamation-circle\"></i> Aucune réponse
                                            </small>
                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 499
$context["rec"], "etat", [], "any", false, false, false, 499) == "Resolved")) {
                    // line 500
                    yield "                                            <span class=\"etat-badge etat-resolved\">
                                                <i class=\"bi bi-check-circle\"></i>
                                                Résolue
                                            </span>
                                            <small class=\"text-muted d-block mt-1\">
                                                <i class=\"bi bi-chat\"></i> ";
                    // line 505
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "yes", [], "any", false, false, false, 505)), "html", null, true);
                    yield " réponse(s)
                                            </small>
                                        ";
                }
                // line 508
                yield "                                    </td>
                                    <td>
                                        <div class=\"d-flex justify-content-end gap-1\">
                                            
                                            
                                            <!-- Répondre ou Voir réponse -->
                                            ";
                // line 514
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "etat", [], "any", false, false, false, 514) == "Pending")) {
                    // line 515
                    yield "                                                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_new", ["reclamation_id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 515)]), "html", null, true);
                    yield "\" 
                                                   class=\"btn btn-sm btn-success\" 
                                                   title=\"Répondre à cette réclamation\"
                                                   data-bs-toggle=\"tooltip\">
                                                    <i class=\"bi bi-chat\"></i>
                                                    <span class=\"d-none d-lg-inline ms-1\">Répondre</span>
                                                </a>
                                            ";
                } else {
                    // line 523
                    yield "                                                <a href=\"";
                    yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
                    yield "?search=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 523), "html", null, true);
                    yield "\" 
                                                   class=\"btn btn-sm btn-outline-success\" 
                                                   title=\"Voir les réponses\"
                                                   data-bs-toggle=\"tooltip\">
                                                    <i class=\"bi bi-chat-dots\"></i>
                                                </a>
                                            ";
                }
                // line 530
                yield "                                            
                                           
                                            
                                            <!-- Supprimer -->
                                            <form method=\"post\" action=\"";
                // line 534
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 534)]), "html", null, true);
                yield "\" 
                                                  class=\"d-inline\" 
                                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"";
                // line 537
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 537))), "html", null, true);
                yield "\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" 
                                                        title=\"Supprimer\"
                                                        data-bs-toggle=\"tooltip\">
                                                    <i class=\"bi bi-trash\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 548
            yield "                        </tbody>
                    </table>
                </div>
                
                <!-- Pied de tableau avec compteur -->
                <div class=\"mt-3 text-muted small\">
                    <i class=\"bi bi-files\"></i>
                    Total: ";
            // line 555
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 555, $this->source); })())), "html", null, true);
            yield " réclamation(s)
                </div>
            ";
        }
        // line 558
        yield "        </div>
    </div>
</div>

<!-- Modal pour ajouter une réclamation -->
<div class=\"modal fade\" id=\"addReclamationModal\" tabindex=\"-1\" aria-labelledby=\"addReclamationModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"addReclamationModalLabel\">
                    <i class=\"bi bi-plus-circle\"></i>
                    Nouvelle réclamation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 574
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 574, $this->source); })()), 'form_start', ["attr" => ["id" => "reclamation_form", "novalidate" => "novalidate"]]);
        yield "
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-person\"></i>
                        Nom complet
                    </label>
                    ";
        // line 581
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 581, $this->source); })()), "nomrec", [], "any", false, false, false, 581), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Entrez votre nom complet"]]);
        // line 586
        yield "
                    <div class=\"text-danger small mt-1\">
                        ";
        // line 588
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 588, $this->source); })()), "nomrec", [], "any", false, false, false, 588), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-envelope\"></i>
                        Adresse email
                    </label>
                    ";
        // line 597
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 597, $this->source); })()), "adressmail", [], "any", false, false, false, 597), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "exemple@email.com"]]);
        // line 602
        yield "
                    <div class=\"text-danger small mt-1\">
                        ";
        // line 604
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 604, $this->source); })()), "adressmail", [], "any", false, false, false, 604), 'errors');
        yield "
                    </div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-tag\"></i>
                        Sujet
                    </label>
                    ";
        // line 613
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 613, $this->source); })()), "sujetrec", [], "any", false, false, false, 613), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Sujet de la réclamation"]]);
        // line 618
        yield "
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-text-paragraph\"></i>
                        Description
                    </label>
                    ";
        // line 626
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 626, $this->source); })()), "descriptionrec", [], "any", false, false, false, 626), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Décrivez votre réclamation en détail..."]]);
        // line 632
        yield "
                </div>

                ";
        // line 635
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 635, $this->source); })()), 'form_end');
        yield "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x\"></i>
                    Annuler
                </button>
                <button type=\"submit\" form=\"reclamation_form\" class=\"btn btn-primary\">
                    <i class=\"bi bi-save\"></i>
                    Enregistrer la réclamation
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 652
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_scripts"));

        // line 653
        yield "<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
<script>
// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialiser les tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Animation pour les lignes du tableau
    document.querySelectorAll('.reclamation-item').forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#f8fafc';
        });
        row.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '';
        });
    });

    // Si le formulaire a des erreurs, afficher le modal automatiquement
    ";
        // line 675
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reclamationForm"]) || array_key_exists("reclamationForm", $context) ? $context["reclamationForm"] : (function () { throw new RuntimeError('Variable "reclamationForm" does not exist.', 675, $this->source); })()), "vars", [], "any", false, false, false, 675), "errors", [], "any", false, false, false, 675)) > 0)) {
            // line 676
            yield "        var myModal = new bootstrap.Modal(document.getElementById('addReclamationModal'));
        myModal.show();
    ";
        }
        // line 679
        yield "
    // Auto-submit après délai pour la recherche
    let searchTimeout;
    const searchInput = document.querySelector('input[name=\"search_rec\"]');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                this.closest('form').submit();
            }, 1000);
        });
    }

    // Animation smooth pour les liens de tri
    document.querySelectorAll('.sort-link').forEach(link => {
        link.addEventListener('click', function(e) {
            // Optionnel : ajouter un indicateur de chargement
            this.style.opacity = '0.7';
        });
    });

    // Confirmation de suppression améliorée
    document.querySelectorAll('form[onsubmit]').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm(this.getAttribute('onsubmit').replace('return confirm(\\'', '').replace('\\');', ''))) {
                e.preventDefault();
            }
        });
        // Supprimer l'attribut onsubmit pour éviter la double confirmation
        form.removeAttribute('onsubmit');
    });

    // Mettre en surbrillance la ligne si on vient d'une recherche
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('search_rec')) {
        document.querySelectorAll('.reclamation-item').forEach((item, index) => {
            setTimeout(() => {
                item.style.backgroundColor = '#fff3cd';
                setTimeout(() => {
                    item.style.backgroundColor = '';
                }, 1500);
            }, index * 100);
        });
    }

    // Gestionnaire pour fermer le modal avec Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('addReclamationModal');
            const modalInstance = bootstrap.Modal.getInstance(modal);
            if (modalInstance) {
                modalInstance.hide();
            }
        }
    });

    // Animation de compteur pour les statistiques
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            if (element) element.innerHTML = value;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Animer les nombres dans les statistiques
    document.querySelectorAll('.stat-card h3').forEach(stat => {
        const finalValue = parseInt(stat.innerHTML);
        animateValue(stat, 0, finalValue, 1000);
    });
});

// Fonction utilitaire pour afficher des notifications
function showNotification(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `alert alert-\${type} position-fixed top-0 end-0 m-3`;
    toast.style.zIndex = '9999';
    toast.innerHTML = `
        <i class=\"bi bi-\${type === 'success' ? 'check-circle' : 'exclamation-circle'}\"></i>
        \${message}
    `;
    document.body.appendChild(toast);
    setTimeout(() => {
        toast.remove();
    }, 3000);
}
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
        return "back/backReclamation.html.twig";
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
        return array (  986 => 679,  981 => 676,  979 => 675,  955 => 653,  942 => 652,  915 => 635,  910 => 632,  908 => 626,  898 => 618,  896 => 613,  884 => 604,  880 => 602,  878 => 597,  866 => 588,  862 => 586,  860 => 581,  850 => 574,  832 => 558,  826 => 555,  817 => 548,  800 => 537,  794 => 534,  788 => 530,  775 => 523,  763 => 515,  761 => 514,  753 => 508,  747 => 505,  740 => 500,  738 => 499,  729 => 492,  727 => 491,  720 => 487,  713 => 482,  709 => 481,  705 => 480,  698 => 476,  691 => 472,  684 => 468,  678 => 465,  672 => 463,  668 => 462,  651 => 447,  647 => 445,  640 => 440,  633 => 436,  628 => 435,  626 => 434,  621 => 431,  619 => 430,  602 => 420,  595 => 418,  591 => 417,  582 => 415,  575 => 413,  571 => 412,  562 => 410,  555 => 408,  551 => 407,  540 => 398,  532 => 394,  530 => 393,  523 => 389,  504 => 373,  494 => 366,  484 => 359,  459 => 337,  452 => 333,  441 => 324,  428 => 323,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Back Office — Réclamations{% endblock %}

{% block page_styles %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">

<style>
/* Reset et base */
header, .preloader { display:none !important; }
body { 
    background:#f5f7fb;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

/* Wrapper principal */
.wrapper {
    display:flex;
    min-height:100vh;
}

/* Sidebar */
.sidebar {
    width:260px;
    background: linear-gradient(180deg, #0f172a 0%, #1a2639 100%);
    color:white;
    padding:25px 15px;
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
}

.sidebar h4 {
    font-size: 1.2rem;
    font-weight: 600;
    padding-left: 10px;
    margin-bottom: 20px;
    color: #a5b4fc;
}

.sidebar hr {
    border-color: #334155;
    margin: 20px 0;
}

.sidebar a {
    color: #cbd5e1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 15px;
    border-radius: 12px;
    text-decoration: none;
    margin-bottom: 5px;
    transition: all 0.3s ease;
}

.sidebar a i {
    font-size: 1.2rem;
    width: 24px;
}

.sidebar a:hover {
    background: #2d3a5e;
    color: white;
    transform: translateX(5px);
}

.sidebar a.active {
    background: #3b82f6;
    color: white;
    box-shadow: 0 4px 10px rgba(59, 130, 246, 0.3);
}

/* Contenu principal */
.content {
    flex:1;
    padding:30px;
}

/* Cartes de statistiques */
.stat-card {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 16px;
    padding: 20px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
    height: 100%;
}

.stat-card:hover {
    transform: translateY(-5px);
}

.stat-card h6 {
    font-size: 0.9rem;
    opacity: 0.9;
    margin-bottom: 10px;
}

.stat-card h3 {
    font-size: 2rem;
    font-weight: 700;
    margin-bottom: 5px;
}

.stat-card small {
    font-size: 0.8rem;
    opacity: 0.8;
}

/* Boîte de recherche */
.search-box {
    background: white;
    padding: 20px;
    border-radius: 16px;
    margin-bottom: 25px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

/* Liens de tri */
.sort-link {
    color: #4b5563;
    text-decoration: none;
    margin-right: 15px;
    font-size: 0.9rem;
    padding: 6px 12px;
    border-radius: 20px;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    background: #f3f4f6;
}

.sort-link:hover {
    background: #e5e7eb;
    color: #3b82f6;
}

.sort-link.active {
    background: #3b82f6;
    color: white;
}

/* Carte principale */
.card-box {
    background: white;
    border-radius: 18px;
    padding: 25px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.06);
}

/* Badges d'état */
.etat-badge {
    padding: 6px 12px;
    border-radius: 30px;
    font-size: 0.8rem;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 5px;
    white-space: nowrap;
}

.etat-badge i {
    font-size: 0.9rem;
}

.etat-pending {
    background: #fff3cd;
    color: #856404;
    border: 1px solid #ffeeba;
}

.etat-resolved {
    background: #d4edda;
    color: #155724;
    border: 1px solid #c3e6cb;
}

/* Lignes du tableau */
.reclamation-item {
    transition: all 0.2s ease;
}

.reclamation-item:hover {
    background-color: #f8fafc !important;
    transform: scale(1.01);
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

.reclamation-item.etat-pending-border {
    border-left: 4px solid #ffc107;
}

.reclamation-item.etat-resolved-border {
    border-left: 4px solid #28a745;
}

/* Boutons d'action */
.btn-group .btn {
    border-radius: 8px !important;
    margin: 0 2px;
    padding: 0.4rem 0.8rem;
    transition: all 0.2s ease;
}

.btn-group .btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

/* Bouton Répondre spécial */
.btn-success {
    background: linear-gradient(135deg, #28a745, #20c997);
    border: none;
}

.btn-success:hover {
    background: linear-gradient(135deg, #218838, #1e7e34);
}

/* Tableau */
.table {
    margin-bottom: 0;
}

.table thead th {
    border-bottom: 2px solid #e5e7eb;
    color: #4b5563;
    font-weight: 600;
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.table td {
    vertical-align: middle;
    padding: 15px 10px;
}

/* Modal */
.modal-content {
    border-radius: 20px;
    border: none;
    box-shadow: 0 20px 40px rgba(0,0,0,0.2);
}

.modal-header {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    border-radius: 20px 20px 0 0;
    padding: 20px 25px;
}

.modal-header .btn-close {
    filter: brightness(0) invert(1);
}

.modal-body {
    padding: 25px;
}

.modal-footer {
    border-top: 1px solid #e5e7eb;
    padding: 20px 25px;
}

/* Formulaires */
.form-control {
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    padding: 10px 15px;
    transition: all 0.2s ease;
}

.form-control:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
}

.form-label {
    font-weight: 500;
    color: #4b5563;
    margin-bottom: 8px;
}

/* États vides */
.empty-state {
    text-align: center;
    padding: 50px 20px;
}

.empty-state i {
    font-size: 4rem;
    color: #dee2e6;
    margin-bottom: 20px;
}

.empty-state h5 {
    color: #6b7280;
    margin-bottom: 10px;
}

.empty-state p {
    color: #9ca3af;
    margin-bottom: 20px;
}

/* Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

.card-box, .stat-card, .search-box {
    animation: fadeIn 0.5s ease-out;
}
</style>
{% endblock %}

{% block body %}
<div class=\"wrapper\">

    <!-- SIDEBAR -->
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

    <!-- CONTENT -->
    <div class=\"content\">

        <!-- Header avec titre et bouton -->
        <div class=\"d-flex justify-content-between align-items-center mb-4\">
            <div>
                <h2 class=\"mb-1\">Gestion des Réclamations</h2>
                <p class=\"text-muted\">Gérez toutes les réclamations et leurs réponses</p>
            </div>
        </div>

        <!-- Statistiques -->
        <div class=\"row mb-4 g-4\">
            <div class=\"col-md-4\">
                <div class=\"stat-card\" style=\"background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);\">
                    <h6><i class=\"bi bi-files\"></i> Total réclamations</h6>
                    <h3>{{ reclamations|length }}</h3>
                    <small>Toutes les réclamations</small>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"stat-card\" style=\"background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);\">
                    <h6><i class=\"bi bi-hourglass\"></i> En attente</h6>
                    <h3>{{ reclamations|filter(r => r.etat == 'Pending')|length }}</h3>
                    <small>Sans réponse</small>
                </div>
            </div>
            <div class=\"col-md-4\">
                <div class=\"stat-card\" style=\"background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);\">
                    <h6><i class=\"bi bi-check-circle\"></i> Résolues</h6>
                    <h3>{{ reclamations|filter(r => r.etat == 'Resolved')|length }}</h3>
                    <small>Avec réponse</small>
                </div>
            </div>
        </div>

        <!-- Barre de recherche et tri -->
        <div class=\"search-box\">
            <form method=\"get\" class=\"row g-3\">
                <div class=\"col-md-7\">
                    <div class=\"input-group\">
                        <span class=\"input-group-text bg-white\">
                            <i class=\"bi bi-search text-primary\"></i>
                        </span>
                        <input type=\"text\" name=\"search_rec\" class=\"form-control form-control-lg\" 
                               placeholder=\"Rechercher par nom, email, sujet ou description...\" 
                               value=\"{{ search_rec }}\">
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"bi bi-search\"></i> Rechercher
                        </button>
                        {% if search_rec %}
                            <a href=\"{{ path('app_back_reclamation') }}\" class=\"btn btn-outline-secondary\">
                                <i class=\"bi bi-x-circle\"></i> Effacer
                            </a>
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"col-md-5\">
                    <div class=\"d-flex align-items-center h-100\">
                        <span class=\"me-3 text-muted\">
                            <i class=\"bi bi-arrow-up-down\"></i> Trier par:
                        </span>
                        <div class=\"d-flex flex-wrap gap-2\">
                            <a href=\"{{ path('app_back_reclamation', {sort_rec: 'date_creation', order_rec: (sort_rec == 'date_creation' and order_rec == 'ASC') ? 'DESC' : 'ASC', search_rec: search_rec}) }}\" 
                               class=\"sort-link {% if sort_rec == 'date_creation' %}active{% endif %}\">
                                <i class=\"bi bi-calendar\"></i> Date
                                <i class=\"bi bi-arrow-{% if sort_rec == 'date_creation' %}{{ order_rec == 'ASC' ? 'up' : 'down' }}{% else %}up-down{% endif %}\"></i>
                            </a>
                            <a href=\"{{ path('app_back_reclamation', {sort_rec: 'etat', order_rec: (sort_rec == 'etat' and order_rec == 'ASC') ? 'DESC' : 'ASC', search_rec: search_rec}) }}\" 
                               class=\"sort-link {% if sort_rec == 'etat' %}active{% endif %}\">
                                <i class=\"bi bi-tag\"></i> État
                                <i class=\"bi bi-arrow-{% if sort_rec == 'etat' %}{{ order_rec == 'ASC' ? 'up' : 'down' }}{% else %}up-down{% endif %}\"></i>
                            </a>
                            <a href=\"{{ path('app_back_reclamation', {sort_rec: 'nomrec', order_rec: (sort_rec == 'nomrec' and order_rec == 'ASC') ? 'DESC' : 'ASC', search_rec: search_rec}) }}\" 
                               class=\"sort-link {% if sort_rec == 'nomrec' %}active{% endif %}\">
                                <i class=\"bi bi-person\"></i> Nom
                                <i class=\"bi bi-arrow-{% if sort_rec == 'nomrec' %}{{ order_rec == 'ASC' ? 'up' : 'down' }}{% else %}up-down{% endif %}\"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- Liste des réclamations -->
        <div class=\"card-box\">
            {% if reclamations is empty %}
                <div class=\"empty-state\">
                    <i class=\"bi bi-inbox\"></i>
                    <h5>Aucune réclamation trouvée</h5>
                    {% if search_rec %}
                        <p class=\"text-muted\">Aucun résultat pour \"{{ search_rec }}\"</p>
                        <a href=\"{{ path('app_back_reclamation') }}\" class=\"btn btn-outline-primary\">
                            <i class=\"bi bi-x-circle\"></i> Effacer la recherche
                        </a>
                    {% else %}
                        <p class=\"text-muted\">Commencez par créer votre première réclamation</p>
                        <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#addReclamationModal\">
                            <i class=\"bi bi-plus-circle\"></i> Créer une réclamation
                        </button>
                    {% endif %}
                </div>
            {% else %}
                <div class=\"table-responsive\">
                    <table class=\"table table-hover align-middle\">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Sujet</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>État</th>
                                <th class=\"text-end\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for rec in reclamations %}
                                <tr class=\"reclamation-item etat-{{ rec.etat|lower }}-border\">
                                    <td>
                                        <span class=\"fw-bold\">#{{ rec.id }}</span>
                                    </td>
                                    <td>
                                        <div class=\"fw-semibold\">{{ rec.nomrec }}</div>
                                    </td>
                                    <td>
                                        <span class=\"text-muted small\">
                                            <i class=\"bi bi-envelope\"></i> {{ rec.adressmail }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class=\"badge bg-light text-dark\">{{ rec.sujetrec }}</span>
                                    </td>
                                    <td>
                                        <span class=\"small\">
                                            {{ rec.descriptionrec|slice(0, 50) }}
                                            {% if rec.descriptionrec|length > 50 %}...{% endif %}
                                        </span>
                                    </td>
                                    <td>
                                        <span class=\"small text-muted\">
                                            <i class=\"bi bi-clock\"></i>
                                            {{ rec.dateCreation|date('d/m/Y H:i') }}
                                        </span>
                                    </td>
                                    <td>
                                        {% if rec.etat == 'Pending' %}
                                            <span class=\"etat-badge etat-pending\">
                                                <i class=\"bi bi-hourglass-split\"></i>
                                                En attente
                                            </span>
                                            <small class=\"text-muted d-block mt-1\">
                                                <i class=\"bi bi-exclamation-circle\"></i> Aucune réponse
                                            </small>
                                        {% elseif rec.etat == 'Resolved' %}
                                            <span class=\"etat-badge etat-resolved\">
                                                <i class=\"bi bi-check-circle\"></i>
                                                Résolue
                                            </span>
                                            <small class=\"text-muted d-block mt-1\">
                                                <i class=\"bi bi-chat\"></i> {{ rec.yes|length }} réponse(s)
                                            </small>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <div class=\"d-flex justify-content-end gap-1\">
                                            
                                            
                                            <!-- Répondre ou Voir réponse -->
                                            {% if rec.etat == 'Pending' %}
                                                <a href=\"{{ path('app_reponse_new', {reclamation_id: rec.id}) }}\" 
                                                   class=\"btn btn-sm btn-success\" 
                                                   title=\"Répondre à cette réclamation\"
                                                   data-bs-toggle=\"tooltip\">
                                                    <i class=\"bi bi-chat\"></i>
                                                    <span class=\"d-none d-lg-inline ms-1\">Répondre</span>
                                                </a>
                                            {% else %}
                                                <a href=\"{{ path('app_reponse_index') }}?search={{ rec.id }}\" 
                                                   class=\"btn btn-sm btn-outline-success\" 
                                                   title=\"Voir les réponses\"
                                                   data-bs-toggle=\"tooltip\">
                                                    <i class=\"bi bi-chat-dots\"></i>
                                                </a>
                                            {% endif %}
                                            
                                           
                                            
                                            <!-- Supprimer -->
                                            <form method=\"post\" action=\"{{ path('app_reclamation_delete', {id: rec.id}) }}\" 
                                                  class=\"d-inline\" 
                                                  onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">
                                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ rec.id) }}\">
                                                <button type=\"submit\" class=\"btn btn-sm btn-danger\" 
                                                        title=\"Supprimer\"
                                                        data-bs-toggle=\"tooltip\">
                                                    <i class=\"bi bi-trash\"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
                
                <!-- Pied de tableau avec compteur -->
                <div class=\"mt-3 text-muted small\">
                    <i class=\"bi bi-files\"></i>
                    Total: {{ reclamations|length }} réclamation(s)
                </div>
            {% endif %}
        </div>
    </div>
</div>

<!-- Modal pour ajouter une réclamation -->
<div class=\"modal fade\" id=\"addReclamationModal\" tabindex=\"-1\" aria-labelledby=\"addReclamationModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"addReclamationModalLabel\">
                    <i class=\"bi bi-plus-circle\"></i>
                    Nouvelle réclamation
                </h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                {{ form_start(reclamationForm, {'attr': {'id': 'reclamation_form', 'novalidate': 'novalidate'}}) }}
                
                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-person\"></i>
                        Nom complet
                    </label>
                    {{ form_widget(reclamationForm.nomrec, {
                        attr: { 
                            class: 'form-control', 
                            placeholder: 'Entrez votre nom complet'
                        }
                    }) }}
                    <div class=\"text-danger small mt-1\">
                        {{ form_errors(reclamationForm.nomrec) }}
                    </div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-envelope\"></i>
                        Adresse email
                    </label>
                    {{ form_widget(reclamationForm.adressmail, {
                        attr: { 
                            class: 'form-control', 
                            placeholder: 'exemple@email.com'
                        }
                    }) }}
                    <div class=\"text-danger small mt-1\">
                        {{ form_errors(reclamationForm.adressmail) }}
                    </div>
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-tag\"></i>
                        Sujet
                    </label>
                    {{ form_widget(reclamationForm.sujetrec, {
                        attr: { 
                            class: 'form-control', 
                            placeholder: 'Sujet de la réclamation'
                        }
                    }) }}
                </div>

                <div class=\"mb-3\">
                    <label class=\"form-label\">
                        <i class=\"bi bi-text-paragraph\"></i>
                        Description
                    </label>
                    {{ form_widget(reclamationForm.descriptionrec, {
                        attr: { 
                            class: 'form-control', 
                            rows: 5, 
                            placeholder: 'Décrivez votre réclamation en détail...'
                        }
                    }) }}
                </div>

                {{ form_end(reclamationForm) }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"bi bi-x\"></i>
                    Annuler
                </button>
                <button type=\"submit\" form=\"reclamation_form\" class=\"btn btn-primary\">
                    <i class=\"bi bi-save\"></i>
                    Enregistrer la réclamation
                </button>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block page_scripts %}
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js\"></script>
<script>
// Attendre que le DOM soit chargé
document.addEventListener('DOMContentLoaded', function() {
    
    // Initialiser les tooltips Bootstrap
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle=\"tooltip\"]'));
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // Animation pour les lignes du tableau
    document.querySelectorAll('.reclamation-item').forEach(row => {
        row.addEventListener('mouseenter', function() {
            this.style.backgroundColor = '#f8fafc';
        });
        row.addEventListener('mouseleave', function() {
            this.style.backgroundColor = '';
        });
    });

    // Si le formulaire a des erreurs, afficher le modal automatiquement
    {% if reclamationForm.vars.errors|length > 0 %}
        var myModal = new bootstrap.Modal(document.getElementById('addReclamationModal'));
        myModal.show();
    {% endif %}

    // Auto-submit après délai pour la recherche
    let searchTimeout;
    const searchInput = document.querySelector('input[name=\"search_rec\"]');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(() => {
                this.closest('form').submit();
            }, 1000);
        });
    }

    // Animation smooth pour les liens de tri
    document.querySelectorAll('.sort-link').forEach(link => {
        link.addEventListener('click', function(e) {
            // Optionnel : ajouter un indicateur de chargement
            this.style.opacity = '0.7';
        });
    });

    // Confirmation de suppression améliorée
    document.querySelectorAll('form[onsubmit]').forEach(form => {
        form.addEventListener('submit', function(e) {
            if (!confirm(this.getAttribute('onsubmit').replace('return confirm(\\'', '').replace('\\');', ''))) {
                e.preventDefault();
            }
        });
        // Supprimer l'attribut onsubmit pour éviter la double confirmation
        form.removeAttribute('onsubmit');
    });

    // Mettre en surbrillance la ligne si on vient d'une recherche
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('search_rec')) {
        document.querySelectorAll('.reclamation-item').forEach((item, index) => {
            setTimeout(() => {
                item.style.backgroundColor = '#fff3cd';
                setTimeout(() => {
                    item.style.backgroundColor = '';
                }, 1500);
            }, index * 100);
        });
    }

    // Gestionnaire pour fermer le modal avec Escape
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            const modal = document.getElementById('addReclamationModal');
            const modalInstance = bootstrap.Modal.getInstance(modal);
            if (modalInstance) {
                modalInstance.hide();
            }
        }
    });

    // Animation de compteur pour les statistiques
    function animateValue(element, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            const value = Math.floor(progress * (end - start) + start);
            if (element) element.innerHTML = value;
            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        };
        window.requestAnimationFrame(step);
    }

    // Animer les nombres dans les statistiques
    document.querySelectorAll('.stat-card h3').forEach(stat => {
        const finalValue = parseInt(stat.innerHTML);
        animateValue(stat, 0, finalValue, 1000);
    });
});

// Fonction utilitaire pour afficher des notifications
function showNotification(message, type = 'success') {
    const toast = document.createElement('div');
    toast.className = `alert alert-\${type} position-fixed top-0 end-0 m-3`;
    toast.style.zIndex = '9999';
    toast.innerHTML = `
        <i class=\"bi bi-\${type === 'success' ? 'check-circle' : 'exclamation-circle'}\"></i>
        \${message}
    `;
    document.body.appendChild(toast);
    setTimeout(() => {
        toast.remove();
    }, 3000);
}
</script>
{% endblock %}", "back/backReclamation.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\back\\backReclamation.html.twig");
    }
}

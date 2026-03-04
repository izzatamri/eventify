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

/* provider/dashboard.html.twig */
class __TwigTemplate_4a4d557caeb3f423765a20f350bbd44d extends Template
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
            'page_heading' => [$this, 'block_page_heading'],
            'page_breadcrumb' => [$this, 'block_page_breadcrumb'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "layout_events.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "provider/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "provider/dashboard.html.twig"));

        $this->parent = $this->load("layout_events.html.twig", 1);
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

        yield "Dashboard - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_heading(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_heading"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_heading"));

        yield "Tableau de bord prestataire";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_breadcrumb(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_breadcrumb"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_breadcrumb"));

        yield "Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        yield "<style>
\t.bg-purple { background-color: #6c63ff !important; color: #fff; }
\t.score-display { font-size: 3.5rem; font-weight: 800; color: #6c63ff; line-height: 1; }
\t.badge-display { font-size: 1rem; padding: 8px 20px; border-radius: 24px; }
\t.chart-card { min-height: 360px; }
\t.stat-card { border-radius: 12px; }
\t.stat-value { font-size: 1.8rem; font-weight: 700; }

\t.score-criteria { list-style: none; padding: 0; margin: 0; }
\t.score-criteria li { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #f1f5f9; }
\t.score-criteria li:last-child { border-bottom: none; }
\t.criteria-bar { height: 6px; border-radius: 3px; background: #e2e8f0; flex: 1; margin-left: 12px; margin-right: 8px; position: relative; overflow: hidden; }
\t.criteria-fill { height: 100%; border-radius: 3px; background: #6c63ff; }
</style>

<div class=\"container py-4\">
\t<div class=\"mb-3\">
\t\t<a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"text-primary text-decoration-none small\">
\t\t\t<i class=\"fa-solid fa-chevron-left me-1\"></i> Retour aux prestataires
\t\t</a>
\t</div>

\t";
        // line 31
        yield "\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-4\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"h4 fw-bold mb-1\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 35, $this->source); })()), "name", [], "any", false, false, false, 35), "html", null, true);
        yield "</h2>
\t\t\t\t\t<p class=\"text-muted mb-3\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 36, $this->source); })()), "serviceType", [], "any", false, false, false, 36), "html", null, true);
        yield " · ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 36, $this->source); })()), "email", [], "any", false, false, false, 36), "html", null, true);
        yield "</p>
\t\t\t\t\t<div class=\"d-flex gap-2 flex-wrap\">
\t\t\t\t\t\t<span class=\"badge badge-display ";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 38, $this->source); })()), "cssClass", [], "any", false, false, false, 38), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badge"]) || array_key_exists("badge", $context) ? $context["badge"] : (function () { throw new RuntimeError('Variable "badge" does not exist.', 38, $this->source); })()), "label", [], "any", false, false, false, 38), "html", null, true);
        yield "</span>
\t\t\t\t\t\t";
        // line 39
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 39, $this->source); })()), "verified", [], "any", false, false, false, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 40
            yield "\t\t\t\t\t\t\t<span class=\"badge badge-display bg-success\"><i class=\"fa-solid fa-shield-check me-1\"></i>SIRET Vérifié</span>
\t\t\t\t\t\t";
        }
        // line 42
        yield "\t\t\t\t\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 42, $this->source); })()), "legalName", [], "any", false, false, false, 42)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 43
            yield "\t\t\t\t\t\t\t<span class=\"badge badge-display bg-light text-dark border\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 43, $this->source); })()), "legalName", [], "any", false, false, false, 43), "html", null, true);
            yield "</span>
\t\t\t\t\t\t";
        }
        // line 45
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 text-md-end mt-3 mt-md-0\">
\t\t\t\t\t<div class=\"score-display\">";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 48, $this->source); })()), "score", [], "any", false, false, false, 48), "html", null, true);
        yield "</div>
\t\t\t\t\t<p class=\"text-muted mb-0\">Score global / 100</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 56
        yield "\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"h6 fw-bold mb-0\"><i class=\"fa-solid fa-calculator me-2 text-primary\"></i>Comment le score est calculé</h5>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"text-muted small mb-3\">Le score est calculé automatiquement selon 4 critères pondérés :</p>
\t\t\t<ul class=\"score-criteria\">
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">Missions complétées (40%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 65, $this->source); })()), "missionsPercent", [], "any", false, false, false, 65), "html", null, true);
        yield "%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">";
        // line 66
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 66, $this->source); })()), "completedMissions", [], "any", false, false, false, 66), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 66, $this->source); })()), "maxMissions", [], "any", false, false, false, 66), "html", null, true);
        yield "</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">SIRET vérifié (20%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:";
        // line 70
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 70, $this->source); })()), "verified", [], "any", false, false, false, 70)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (100) : (0));
        yield "%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">";
        // line 71
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 71, $this->source); })()), "verified", [], "any", false, false, false, 71)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Oui") : ("Non"));
        yield "</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">Réactivité RFQ (20%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 75, $this->source); })()), "responsePercent", [], "any", false, false, false, 75), "html", null, true);
        yield "%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 76, $this->source); })()), "avgResponseHours", [], "any", false, false, false, 76), "html", null, true);
        yield "h</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">Ancienneté (20%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 80, $this->source); })()), "seniorityPercent", [], "any", false, false, false, 80), "html", null, true);
        yield "%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 81, $this->source); })()), "seniorityMonths", [], "any", false, false, false, 81), "html", null, true);
        yield " mois</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t";
        // line 88
        yield "\t<div class=\"row g-4\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-pie me-2 text-primary\"></i>Missions par catégorie</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t";
        // line 95
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["pieChart"]) || array_key_exists("pieChart", $context) ? $context["pieChart"] : (function () { throw new RuntimeError('Variable "pieChart" does not exist.', 95, $this->source); })()));
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-bar me-2 text-primary\"></i>Missions par mois (12 derniers)</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t";
        // line 105
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["barChart"]) || array_key_exists("barChart", $context) ? $context["barChart"] : (function () { throw new RuntimeError('Variable "barChart" does not exist.', 105, $this->source); })()));
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-line me-2 text-primary\"></i>Évolution du score</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t";
        // line 115
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["lineChart"]) || array_key_exists("lineChart", $context) ? $context["lineChart"] : (function () { throw new RuntimeError('Variable "lineChart" does not exist.', 115, $this->source); })()));
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-column me-2 text-primary\"></i>Benchmark vs. plateforme</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t";
        // line 125
        yield $this->extensions['Symfony\UX\Chartjs\Twig\ChartExtension']->renderChart((isset($context["benchmarkChart"]) || array_key_exists("benchmarkChart", $context) ? $context["benchmarkChart"] : (function () { throw new RuntimeError('Variable "benchmarkChart" does not exist.', 125, $this->source); })()));
        yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
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
        return "provider/dashboard.html.twig";
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
        return array (  336 => 125,  323 => 115,  310 => 105,  297 => 95,  288 => 88,  279 => 81,  275 => 80,  268 => 76,  264 => 75,  257 => 71,  253 => 70,  244 => 66,  240 => 65,  229 => 56,  219 => 48,  214 => 45,  208 => 43,  205 => 42,  201 => 40,  199 => 39,  193 => 38,  186 => 36,  182 => 35,  176 => 31,  168 => 25,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Dashboard - {{ provider.name }}{% endblock %}
{% block page_heading %}Tableau de bord prestataire{% endblock %}
{% block page_breadcrumb %}Dashboard{% endblock %}

{% block content %}
<style>
\t.bg-purple { background-color: #6c63ff !important; color: #fff; }
\t.score-display { font-size: 3.5rem; font-weight: 800; color: #6c63ff; line-height: 1; }
\t.badge-display { font-size: 1rem; padding: 8px 20px; border-radius: 24px; }
\t.chart-card { min-height: 360px; }
\t.stat-card { border-radius: 12px; }
\t.stat-value { font-size: 1.8rem; font-weight: 700; }

\t.score-criteria { list-style: none; padding: 0; margin: 0; }
\t.score-criteria li { display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #f1f5f9; }
\t.score-criteria li:last-child { border-bottom: none; }
\t.criteria-bar { height: 6px; border-radius: 3px; background: #e2e8f0; flex: 1; margin-left: 12px; margin-right: 8px; position: relative; overflow: hidden; }
\t.criteria-fill { height: 100%; border-radius: 3px; background: #6c63ff; }
</style>

<div class=\"container py-4\">
\t<div class=\"mb-3\">
\t\t<a href=\"{{ path('app_admin_service_provider_index') }}\" class=\"text-primary text-decoration-none small\">
\t\t\t<i class=\"fa-solid fa-chevron-left me-1\"></i> Retour aux prestataires
\t\t</a>
\t</div>

\t{# ====== PROVIDER HEADER ====== #}
\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-4\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t<h2 class=\"h4 fw-bold mb-1\">{{ provider.name }}</h2>
\t\t\t\t\t<p class=\"text-muted mb-3\">{{ provider.serviceType }} · {{ provider.email }}</p>
\t\t\t\t\t<div class=\"d-flex gap-2 flex-wrap\">
\t\t\t\t\t\t<span class=\"badge badge-display {{ badge.cssClass }}\">{{ badge.label }}</span>
\t\t\t\t\t\t{% if provider.verified %}
\t\t\t\t\t\t\t<span class=\"badge badge-display bg-success\"><i class=\"fa-solid fa-shield-check me-1\"></i>SIRET Vérifié</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if provider.legalName %}
\t\t\t\t\t\t\t<span class=\"badge badge-display bg-light text-dark border\">{{ provider.legalName }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 text-md-end mt-3 mt-md-0\">
\t\t\t\t\t<div class=\"score-display\">{{ provider.score }}</div>
\t\t\t\t\t<p class=\"text-muted mb-0\">Score global / 100</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t{# ====== SCORE BREAKDOWN ====== #}
\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"h6 fw-bold mb-0\"><i class=\"fa-solid fa-calculator me-2 text-primary\"></i>Comment le score est calculé</h5>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"text-muted small mb-3\">Le score est calculé automatiquement selon 4 critères pondérés :</p>
\t\t\t<ul class=\"score-criteria\">
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">Missions complétées (40%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:{{ stats.missionsPercent }}%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">{{ stats.completedMissions }}/{{ stats.maxMissions }}</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">SIRET vérifié (20%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:{{ provider.verified ? 100 : 0 }}%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">{{ provider.verified ? 'Oui' : 'Non' }}</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">Réactivité RFQ (20%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:{{ stats.responsePercent }}%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">{{ stats.avgResponseHours }}h</span>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<span class=\"fw-semibold\" style=\"min-width:200px;\">Ancienneté (20%)</span>
\t\t\t\t\t<div class=\"criteria-bar\"><div class=\"criteria-fill\" style=\"width:{{ stats.seniorityPercent }}%;\"></div></div>
\t\t\t\t\t<span class=\"text-muted small\" style=\"min-width:60px;\">{{ stats.seniorityMonths }} mois</span>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t</div>

\t{# ====== CHARTS ====== #}
\t<div class=\"row g-4\">
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-pie me-2 text-primary\"></i>Missions par catégorie</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t{{ render_chart(pieChart) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-bar me-2 text-primary\"></i>Missions par mois (12 derniers)</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t{{ render_chart(barChart) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-line me-2 text-primary\"></i>Évolution du score</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t{{ render_chart(lineChart) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-md-6\">
\t\t\t<div class=\"card border-0 shadow-sm chart-card\">
\t\t\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t\t\t<h6 class=\"fw-bold mb-0\"><i class=\"fa-solid fa-chart-column me-2 text-primary\"></i>Benchmark vs. plateforme</h6>
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body d-flex align-items-center justify-content-center\">
\t\t\t\t\t{{ render_chart(benchmarkChart) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "provider/dashboard.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\provider\\dashboard.html.twig");
    }
}

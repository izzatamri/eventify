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

/* sponsorship/package_index.html.twig */
class __TwigTemplate_b3bb5823b91a573f4eb0df13597fe74c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/package_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/package_index.html.twig"));

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

        yield "Sponsorship packages - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " - Eventify";
        
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

        yield "Sponsorship packages";
        
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

        yield "Sponsorship packages";
        
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
        yield "<div class=\"container py-4\">
\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["error"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 13
            yield "\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
        yield "\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> My events</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none fw-semibold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>
\t\t</div>
\t\t<div class=\"d-flex gap-2\">
\t\t\t<a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary btn-sm\">Sponsors</a>
\t\t\t<a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\" class=\"btn btn-warning text-dark fw-semibold btn-sm\">New package</a>
\t\t</div>
\t</div>

\t";
        // line 32
        yield "\t<form method=\"get\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\" class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-3\">
\t\t\t<div class=\"row g-2 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Search</label>
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control form-control-sm\" placeholder=\"Name, description, benefits…\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\" style=\"min-width: 180px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select form-select-sm\" style=\"min-width: 140px;\">
\t\t\t\t\t\t<option value=\"name\" ";
        // line 42
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 42, $this->source); })()) == "name")) ? ("selected") : (""));
        yield ">Name</option>
\t\t\t\t\t\t<option value=\"price\" ";
        // line 43
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 43, $this->source); })()) == "price")) ? ("selected") : (""));
        yield ">Price</option>
\t\t\t\t\t\t<option value=\"numberOfTables\" ";
        // line 44
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 44, $this->source); })()) == "numberOfTables")) ? ("selected") : (""));
        yield ">Tables</option>
\t\t\t\t\t\t<option value=\"seatsPerTable\" ";
        // line 45
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 45, $this->source); })()) == "seatsPerTable")) ? ("selected") : (""));
        yield ">Seats/table</option>
\t\t\t\t\t\t<option value=\"createdAt\" ";
        // line 46
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 46, $this->source); })()) == "createdAt")) ? ("selected") : (""));
        yield ">Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select form-select-sm\" style=\"min-width: 100px;\">
\t\t\t\t\t\t<option value=\"asc\" ";
        // line 52
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 52, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Asc</option>
\t\t\t\t\t\t<option value=\"desc\" ";
        // line 53
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 53, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-search me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-0 border-bottom py-3\">
\t\t\t<h2 class=\"h5 fw-bold mb-0\">Packages for this event</h2>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Name</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Price</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Tables</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Seats/table</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Sponsors</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end\" style=\"width: 120px;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 81, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
            // line 82
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"fw-semibold\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 84), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t";
            // line 85
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["package"], "description", [], "any", false, false, false, 85)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 86
                yield "\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0 mt-1\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["package"], "description", [], "any", false, false, false, 86), 0, 80), "html", null, true);
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["package"], "description", [], "any", false, false, false, 86)) > 80)) {
                    yield "…";
                }
                yield "</p>
\t\t\t\t\t\t\t";
            }
            // line 88
            yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">\$";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "price", [], "any", false, false, false, 89), 2), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"py-3\">";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "numberOfTables", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"py-3\">";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "seatsPerTable", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"py-3\">";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["package"], "sponsors", [], "any", false, false, false, 92)), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td class=\"py-3 text-end\">
\t\t\t\t\t\t\t<a href=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94), "packageId" => CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary me-1\">Edit</a>
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 95
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 95, $this->source); })()), "id", [], "any", false, false, false, 95), "packageId" => CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 95)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Delete this package? Sponsors linked to it may be affected.');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_package_" . CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 96))), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 101
        if (!$context['_iterated']) {
            // line 102
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"py-5 text-center text-muted\">
\t\t\t\t\t\t\t<p class=\"mb-2\">No sponsorship packages yet.</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\" class=\"btn btn-warning text-dark btn-sm\">Create first package</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['package'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "\t\t\t\t</tbody>
\t\t\t</table>
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
        return "sponsorship/package_index.html.twig";
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
        return array (  382 => 109,  372 => 105,  367 => 102,  365 => 101,  355 => 96,  351 => 95,  347 => 94,  342 => 92,  338 => 91,  334 => 90,  330 => 89,  327 => 88,  318 => 86,  316 => 85,  312 => 84,  308 => 82,  303 => 81,  277 => 58,  269 => 53,  265 => 52,  256 => 46,  252 => 45,  248 => 44,  244 => 43,  240 => 42,  232 => 37,  223 => 32,  216 => 27,  212 => 26,  204 => 23,  199 => 21,  194 => 18,  185 => 16,  180 => 15,  171 => 13,  166 => 12,  157 => 10,  153 => 9,  150 => 8,  137 => 7,  114 => 5,  91 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Sponsorship packages - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}Sponsorship packages{% endblock %}
{% block page_breadcrumb %}Sponsorship packages{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}

\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"{{ path('app_my_events') }}\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> My events</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-dark text-decoration-none fw-semibold\">{{ event.title }}</a>
\t\t</div>
\t\t<div class=\"d-flex gap-2\">
\t\t\t<a href=\"{{ path('app_sponsor_index', { id: event.id }) }}\" class=\"btn btn-outline-primary btn-sm\">Sponsors</a>
\t\t\t<a href=\"{{ path('app_sponsorship_package_new', { id: event.id }) }}\" class=\"btn btn-warning text-dark fw-semibold btn-sm\">New package</a>
\t\t</div>
\t</div>

\t{# Sort & search (multi-criteria) #}
\t<form method=\"get\" action=\"{{ path('app_sponsorship_package_index', { id: event.id }) }}\" class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-3\">
\t\t\t<div class=\"row g-2 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Search</label>
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control form-control-sm\" placeholder=\"Name, description, benefits…\" value=\"{{ search }}\" style=\"min-width: 180px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select form-select-sm\" style=\"min-width: 140px;\">
\t\t\t\t\t\t<option value=\"name\" {{ sortBy == 'name' ? 'selected' : '' }}>Name</option>
\t\t\t\t\t\t<option value=\"price\" {{ sortBy == 'price' ? 'selected' : '' }}>Price</option>
\t\t\t\t\t\t<option value=\"numberOfTables\" {{ sortBy == 'numberOfTables' ? 'selected' : '' }}>Tables</option>
\t\t\t\t\t\t<option value=\"seatsPerTable\" {{ sortBy == 'seatsPerTable' ? 'selected' : '' }}>Seats/table</option>
\t\t\t\t\t\t<option value=\"createdAt\" {{ sortBy == 'createdAt' ? 'selected' : '' }}>Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select form-select-sm\" style=\"min-width: 100px;\">
\t\t\t\t\t\t<option value=\"asc\" {{ sortOrder == 'asc' ? 'selected' : '' }}>Asc</option>
\t\t\t\t\t\t<option value=\"desc\" {{ sortOrder == 'desc' ? 'selected' : '' }}>Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-search me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"{{ path('app_sponsorship_package_index', { id: event.id }) }}\" class=\"btn btn-outline-secondary btn-sm\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-0 border-bottom py-3\">
\t\t\t<h2 class=\"h5 fw-bold mb-0\">Packages for this event</h2>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Name</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Price</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Tables</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Seats/table</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Sponsors</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end\" style=\"width: 120px;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for package in packages %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"fw-semibold\">{{ package.name }}</span>
\t\t\t\t\t\t\t{% if package.description %}
\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0 mt-1\">{{ package.description|slice(0, 80) }}{% if package.description|length > 80 %}…{% endif %}</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">\${{ package.price|number_format(2) }}</td>
\t\t\t\t\t\t<td class=\"py-3\">{{ package.numberOfTables }}</td>
\t\t\t\t\t\t<td class=\"py-3\">{{ package.seatsPerTable }}</td>
\t\t\t\t\t\t<td class=\"py-3\">{{ package.sponsors|length }}</td>
\t\t\t\t\t\t<td class=\"py-3 text-end\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_sponsorship_package_edit', { id: event.id, packageId: package.id }) }}\" class=\"btn btn-sm btn-outline-secondary me-1\">Edit</a>
\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_sponsorship_package_delete', { id: event.id, packageId: package.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Delete this package? Sponsors linked to it may be affected.');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_package_' ~ package.id) }}\" />
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"py-5 text-center text-muted\">
\t\t\t\t\t\t\t<p class=\"mb-2\">No sponsorship packages yet.</p>
\t\t\t\t\t\t\t<a href=\"{{ path('app_sponsorship_package_new', { id: event.id }) }}\" class=\"btn btn-warning text-dark btn-sm\">Create first package</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "sponsorship/package_index.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/sponsorship/package_index.html.twig");
    }
}

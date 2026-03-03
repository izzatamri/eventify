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

/* service_booking/index.html.twig */
class __TwigTemplate_5a40fc154e303dfb00a65d4c6608dbe1 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_booking/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_booking/index.html.twig"));

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

        yield "Service bookings - ";
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

        yield "Service bookings";
        
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

        yield "Service bookings";
        
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
            yield "  // TODO: Add validation
\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "
\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
        yield "\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> My events</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none fw-semibold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 24, $this->source); })()), "title", [], "any", false, false, false, 24), "html", null, true);
        yield "</a>
\t\t</div>
\t\t<a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_create", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">New booking</a>
\t</div>

\t";
        // line 30
        yield "\t<form method=\"get\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_index", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 30, $this->source); })()), "id", [], "any", false, false, false, 30)]), "html", null, true);
        yield "\" class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-3\">
\t\t\t<div class=\"row g-2 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Provider</label>
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control form-control-sm\" placeholder=\"Search by provider name…\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchProvider"]) || array_key_exists("searchProvider", $context) ? $context["searchProvider"] : (function () { throw new RuntimeError('Variable "searchProvider" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\" style=\"min-width: 160px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Filter by provider</label>
\t\t\t\t\t<select name=\"provider\" class=\"form-select form-select-sm\" style=\"min-width: 160px;\">
\t\t\t\t\t\t<option value=\"\">All providers</option>
\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["providersForFilter"]) || array_key_exists("providersForFilter", $context) ? $context["providersForFilter"] : (function () { throw new RuntimeError('Variable "providersForFilter" does not exist.', 41, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            yield "\t\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 42), "html", null, true);
            yield "\" ";
            yield ((((isset($context["filterProviderId"]) || array_key_exists("filterProviderId", $context) ? $context["filterProviderId"] : (function () { throw new RuntimeError('Variable "filterProviderId" does not exist.', 42, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 42))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 42), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "serviceType", [], "any", false, false, false, 42), "html", null, true);
            yield ")</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Status</label>
\t\t\t\t\t<select name=\"status\" class=\"form-select form-select-sm\" style=\"min-width: 120px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"pending\" ";
        // line 50
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 50, $this->source); })()) == "pending")) ? ("selected") : (""));
        yield ">Pending</option>
\t\t\t\t\t\t<option value=\"confirmed\" ";
        // line 51
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 51, $this->source); })()) == "confirmed")) ? ("selected") : (""));
        yield ">Confirmed</option>
\t\t\t\t\t\t<option value=\"cancelled\" ";
        // line 52
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 52, $this->source); })()) == "cancelled")) ? ("selected") : (""));
        yield ">Cancelled</option>
\t\t\t\t\t\t<option value=\"completed\" ";
        // line 53
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 53, $this->source); })()) == "completed")) ? ("selected") : (""));
        yield ">Completed</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select form-select-sm\" style=\"min-width: 130px;\">
\t\t\t\t\t\t<option value=\"scheduledDate\" ";
        // line 59
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 59, $this->source); })()) == "scheduledDate")) ? ("selected") : (""));
        yield ">Date</option>
\t\t\t\t\t\t<option value=\"provider\" ";
        // line 60
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 60, $this->source); })()) == "provider")) ? ("selected") : (""));
        yield ">Provider</option>
\t\t\t\t\t\t<option value=\"status\" ";
        // line 61
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 61, $this->source); })()) == "status")) ? ("selected") : (""));
        yield ">Status</option>
\t\t\t\t\t\t<option value=\"agreedPrice\" ";
        // line 62
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 62, $this->source); })()) == "agreedPrice")) ? ("selected") : (""));
        yield ">Price</option>
\t\t\t\t\t\t<option value=\"quantity\" ";
        // line 63
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 63, $this->source); })()) == "quantity")) ? ("selected") : (""));
        yield ">Quantity</option>
\t\t\t\t\t\t<option value=\"createdAt\" ";
        // line 64
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 64, $this->source); })()) == "createdAt")) ? ("selected") : (""));
        yield ">Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select form-select-sm\" style=\"min-width: 100px;\">
\t\t\t\t\t\t<option value=\"asc\" ";
        // line 70
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 70, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Asc</option>
\t\t\t\t\t\t<option value=\"desc\" ";
        // line 71
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 71, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-search me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_index", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"table-responsive\">
\t\t<table class=\"table table-hover align-middle\">
\t\t\t<thead class=\"table-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Provider</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Time</th>
\t\t\t\t\t<th>Quantity</th>
\t\t\t\t\t<th>Price</th>
\t\t\t\t\t<th>Status</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["bookings"]) || array_key_exists("bookings", $context) ? $context["bookings"] : (function () { throw new RuntimeError('Variable "bookings" does not exist.', 97, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 98
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "serviceProvider", [], "any", false, false, false, 99), "name", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
\t\t\t\t\t<td><span class=\"badge bg-secondary\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "serviceProvider", [], "any", false, false, false, 100), "serviceType", [], "any", false, false, false, 100), "html", null, true);
            yield "</span></td>
\t\t\t\t\t<td>";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "scheduledDate", [], "any", false, false, false, 101), "Y-m-d"), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "startTime", [], "any", false, false, false, 102), "H:i"), "html", null, true);
            yield " – ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "endTime", [], "any", false, false, false, 102), "H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "quantity", [], "any", false, false, false, 103), "html", null, true);
            yield "</td>
\t\t\t\t\t<td>";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "agreedPrice", [], "any", false, false, false, 104), 2), "html", null, true);
            yield " USD</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 106
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 106) == "pending")) {
                yield "<span class=\"badge bg-warning text-dark\">Pending</span>
\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 107
$context["booking"], "status", [], "any", false, false, false, 107) == "confirmed")) {
                yield "<span class=\"badge bg-success\">Confirmed</span>
\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 108
$context["booking"], "status", [], "any", false, false, false, 108) == "cancelled")) {
                yield "<span class=\"badge bg-danger\">Cancelled</span>
\t\t\t\t\t\t";
            } else {
                // line 109
                yield "<span class=\"badge bg-info\">Completed</span>
\t\t\t\t\t\t";
            }
            // line 111
            yield "\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_show", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary me-1\">View</a>
\t\t\t\t\t\t";
            // line 114
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "status", [], "any", false, false, false, 114) != "cancelled")) {
                // line 115
                yield "\t\t\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_edit", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 115, $this->source); })()), "id", [], "any", false, false, false, 115), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 115)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary me-1\">Edit</a>
\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_delete", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 116)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('Cancel this booking?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("service_booking_delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["booking"], "id", [], "any", false, false, false, 117))), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Cancel</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t";
            }
            // line 121
            yield "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 123
        if (!$context['_iterated']) {
            // line 124
            yield "\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\" class=\"text-center text-muted py-4\">No service bookings yet. <a href=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_create", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 125, $this->source); })()), "id", [], "any", false, false, false, 125)]), "html", null, true);
            yield "\">Create one</a>.</td>
\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['booking'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 128
        yield "\t\t\t</tbody>
\t\t</table>
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
        return "service_booking/index.html.twig";
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
        return array (  448 => 128,  439 => 125,  436 => 124,  434 => 123,  428 => 121,  421 => 117,  417 => 116,  412 => 115,  410 => 114,  406 => 113,  402 => 111,  398 => 109,  393 => 108,  389 => 107,  385 => 106,  380 => 104,  376 => 103,  370 => 102,  366 => 101,  362 => 100,  358 => 99,  355 => 98,  350 => 97,  326 => 76,  318 => 71,  314 => 70,  305 => 64,  301 => 63,  297 => 62,  293 => 61,  289 => 60,  285 => 59,  276 => 53,  272 => 52,  268 => 51,  264 => 50,  256 => 44,  241 => 42,  237 => 41,  228 => 35,  219 => 30,  213 => 26,  206 => 24,  201 => 22,  196 => 19,  188 => 17,  185 => 16,  180 => 15,  171 => 13,  166 => 12,  157 => 10,  153 => 9,  150 => 8,  137 => 7,  114 => 5,  91 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Service bookings - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}Service bookings{% endblock %}
{% block page_breadcrumb %}Service bookings{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
  // TODO: Add validation
\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}

\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"{{ path('app_my_events') }}\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> My events</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-dark text-decoration-none fw-semibold\">{{ event.title }}</a>
\t\t</div>
\t\t<a href=\"{{ path('app_service_booking_create', { eventId: event.id }) }}\" class=\"btn btn-primary\">New booking</a>
\t</div>

\t{# Sort & search (multi-criteria) #}
\t<form method=\"get\" action=\"{{ path('app_service_booking_index', { eventId: event.id }) }}\" class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-3\">
\t\t\t<div class=\"row g-2 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Provider</label>
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control form-control-sm\" placeholder=\"Search by provider name…\" value=\"{{ searchProvider }}\" style=\"min-width: 160px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Filter by provider</label>
\t\t\t\t\t<select name=\"provider\" class=\"form-select form-select-sm\" style=\"min-width: 160px;\">
\t\t\t\t\t\t<option value=\"\">All providers</option>
\t\t\t\t\t\t{% for p in providersForFilter %}
\t\t\t\t\t\t<option value=\"{{ p.id }}\" {{ filterProviderId == p.id ? 'selected' : '' }}>{{ p.name }} ({{ p.serviceType }})</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Status</label>
\t\t\t\t\t<select name=\"status\" class=\"form-select form-select-sm\" style=\"min-width: 120px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"pending\" {{ filterStatus == 'pending' ? 'selected' : '' }}>Pending</option>
\t\t\t\t\t\t<option value=\"confirmed\" {{ filterStatus == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
\t\t\t\t\t\t<option value=\"cancelled\" {{ filterStatus == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
\t\t\t\t\t\t<option value=\"completed\" {{ filterStatus == 'completed' ? 'selected' : '' }}>Completed</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select form-select-sm\" style=\"min-width: 130px;\">
\t\t\t\t\t\t<option value=\"scheduledDate\" {{ sortBy == 'scheduledDate' ? 'selected' : '' }}>Date</option>
\t\t\t\t\t\t<option value=\"provider\" {{ sortBy == 'provider' ? 'selected' : '' }}>Provider</option>
\t\t\t\t\t\t<option value=\"status\" {{ sortBy == 'status' ? 'selected' : '' }}>Status</option>
\t\t\t\t\t\t<option value=\"agreedPrice\" {{ sortBy == 'agreedPrice' ? 'selected' : '' }}>Price</option>
\t\t\t\t\t\t<option value=\"quantity\" {{ sortBy == 'quantity' ? 'selected' : '' }}>Quantity</option>
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
\t\t\t\t\t<a href=\"{{ path('app_service_booking_index', { eventId: event.id }) }}\" class=\"btn btn-outline-secondary btn-sm\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"table-responsive\">
\t\t<table class=\"table table-hover align-middle\">
\t\t\t<thead class=\"table-light\">
\t\t\t\t<tr>
\t\t\t\t\t<th>Provider</th>
\t\t\t\t\t<th>Type</th>
\t\t\t\t\t<th>Date</th>
\t\t\t\t\t<th>Time</th>
\t\t\t\t\t<th>Quantity</th>
\t\t\t\t\t<th>Price</th>
\t\t\t\t\t<th>Status</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t{% for booking in bookings %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ booking.serviceProvider.name }}</td>
\t\t\t\t\t<td><span class=\"badge bg-secondary\">{{ booking.serviceProvider.serviceType }}</span></td>
\t\t\t\t\t<td>{{ booking.scheduledDate|date('Y-m-d') }}</td>
\t\t\t\t\t<td>{{ booking.startTime|date('H:i') }} – {{ booking.endTime|date('H:i') }}</td>
\t\t\t\t\t<td>{{ booking.quantity }}</td>
\t\t\t\t\t<td>{{ booking.agreedPrice|number_format(2) }} USD</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if booking.status == 'pending' %}<span class=\"badge bg-warning text-dark\">Pending</span>
\t\t\t\t\t\t{% elseif booking.status == 'confirmed' %}<span class=\"badge bg-success\">Confirmed</span>
\t\t\t\t\t\t{% elseif booking.status == 'cancelled' %}<span class=\"badge bg-danger\">Cancelled</span>
\t\t\t\t\t\t{% else %}<span class=\"badge bg-info\">Completed</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('app_service_booking_show', { eventId: event.id, id: booking.id }) }}\" class=\"btn btn-sm btn-outline-primary me-1\">View</a>
\t\t\t\t\t\t{% if booking.status != 'cancelled' %}
\t\t\t\t\t\t<a href=\"{{ path('app_service_booking_edit', { eventId: event.id, id: booking.id }) }}\" class=\"btn btn-sm btn-outline-secondary me-1\">Edit</a>
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_service_booking_delete', { eventId: event.id, id: booking.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Cancel this booking?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('service_booking_delete_' ~ booking.id) }}\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Cancel</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t\t{% else %}
\t\t\t\t<tr>
\t\t\t\t\t<td colspan=\"8\" class=\"text-center text-muted py-4\">No service bookings yet. <a href=\"{{ path('app_service_booking_create', { eventId: event.id }) }}\">Create one</a>.</td>
\t\t\t\t</tr>
\t\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t</div>
</div>
{% endblock %}
", "service_booking/index.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\service_booking\\index.html.twig");
    }
}

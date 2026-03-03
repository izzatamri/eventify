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

/* my_events.html.twig */
class __TwigTemplate_1b7d3763d633230be3a1c9fe3a523bc7 extends Template
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
            'page_styles' => [$this, 'block_page_styles'],
            'content' => [$this, 'block_content'],
            'page_scripts' => [$this, 'block_page_scripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_events.html.twig"));

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

        yield "My Events - Eventify";
        
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

        yield "Events";
        
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

        yield "My Events";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield from $this->yieldParentBlock("page_styles", $context, $blocks);
        yield "
<style>
.event-actions-dropdown { position: relative; }
.event-actions-menu {
\tdisplay: none;
\tposition: absolute;
\tright: 0;
\tbottom: 100%;
\ttop: auto;
\tmargin: 0 0 0.25rem 0;
\tz-index: 1060;
\tmin-width: 180px;
\tpadding: 0.5rem 0;
\tfont-size: 0.875rem;
\tcolor: #212529;
\tbackground-color: #fff;
\tborder: 1px solid rgba(0,0,0,.15);
\tborder-radius: 0.375rem;
\tbox-shadow: 0 0.5rem 1rem rgba(0,0,0,.175);
\tlist-style: none;
}
.event-actions-dropdown.show .event-actions-menu { display: block; }
.event-actions-menu.event-actions-menu-fixed { position: fixed; }
.event-actions-menu.event-actions-menu-fixed.show { display: block; }
.event-actions-menu .dropdown-item {
\tdisplay: block;
\twidth: 100%;
\tpadding: 0.35rem 1rem;
\tclear: both;
\tfont-weight: 400;
\tcolor: #212529;
\ttext-align: inherit;
\ttext-decoration: none;
\twhite-space: nowrap;
\tbackground-color: transparent;
\tborder: 0;
}
.event-actions-menu .dropdown-item:hover { background-color: #f8f9fa; }
.event-actions-menu .dropdown-divider { height: 0; margin: 0.5rem 0; overflow: hidden; border-top: 1px solid rgba(0,0,0,.15); }
.event-actions-menu li { display: block; }
.event-actions-menu li form { margin: 0; }
.event-actions-menu li form .dropdown-item { cursor: pointer; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
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

        // line 54
        yield "<div class=\"container py-5\">
\t";
        // line 56
        yield "\t<div class=\"section-header mb-4\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">My Events</h2>
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">Manage and track all your events</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-md-end mt-3 mt-md-0\">
\t\t\t\t<a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\" class=\"btn btn-primary btn-lg px-4\">
\t\t\t\t\t<i class=\"fa-solid fa-plus me-2\"></i>Create Event
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 71
        yield "\t<div class=\"events-toolbar mb-4\">
\t\t<div class=\"row align-items-center g-3\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<label for=\"search-events\" class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-search me-2\"></i>Search Events</label>
\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t<span class=\"input-group-text bg-white\"><i class=\"fa-solid fa-magnifying-glass text-muted\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type to search your events...\" id=\"search-events\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-filter me-2\"></i>Filter by Status</label>
\t\t\t\t<div class=\"dropdown d-grid\">
\t\t\t\t\t<button class=\"btn btn-lg btn-outline-secondary dropdown-toggle text-start\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t";
        // line 84
        yield ((((isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 84, $this->source); })()) == "")) ? ("All Events") : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 84, $this->source); })())), "html", null, true)));
        yield "
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu w-100\">
\t\t\t\t\t\t<li><a class=\"dropdown-item ";
        // line 87
        yield ((((isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 87, $this->source); })()) == "")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
        yield "\">All Events</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item ";
        // line 88
        yield ((((isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 88, $this->source); })()) == "draft")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events", ["status" => "draft"]);
        yield "\">Draft</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item ";
        // line 89
        yield ((((isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 89, $this->source); })()) == "published")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events", ["status" => "published"]);
        yield "\">Published</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item ";
        // line 90
        yield ((((isset($context["current_status"]) || array_key_exists("current_status", $context) ? $context["current_status"] : (function () { throw new RuntimeError('Variable "current_status" does not exist.', 90, $this->source); })()) == "cancelled")) ? ("active") : (""));
        yield "\" href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events", ["status" => "cancelled"]);
        yield "\">Cancelled</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-eye me-2\"></i>View</label>
\t\t\t\t<div class=\"btn-group w-100\" role=\"group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-primary\"><i class=\"fa-solid fa-list me-2\"></i>List</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-outline-primary\" disabled><i class=\"fa-solid fa-calendar me-2\"></i>Calendar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 105
        yield "\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead style=\"background: #f8f9fa; border-bottom: 2px solid #e9ecef;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Event</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Sold</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Gross</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Status</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end fw-semibold\" style=\"width: 60px; color: #333;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 118, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 119
            yield "\t\t\t\t\t\t";
            $context["capacity"] = 0;
            // line 120
            yield "\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "tickets", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                // line 121
                yield "\t\t\t\t\t\t\t";
                $context["capacity"] = ((isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 121, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["t"], "quantityAvailable", [], "any", false, false, false, 121));
                // line 122
                yield "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            yield "\t\t\t\t\t<tr class=\"event-row\" data-title=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 123)), "html", null, true);
            yield "\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<td class=\"py-4\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 text-center text-muted small fw-semibold\" style=\"width: 44px; line-height: 1.2;\">
\t\t\t\t\t\t\t\t\t";
            // line 127
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 127), "M")), "html", null, true)) : (""));
            yield "<br>";
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 127), "d"), "html", null, true)) : (""));
            yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 rounded overflow-hidden\" style=\"width: 56px; height: 56px; background: #e9ecef;\">
\t\t\t\t\t\t\t\t\t";
            // line 130
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 130)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 131), "html", null, true);
                yield "\" alt=\"\" class=\"w-100 h-100\" style=\"object-fit: cover;\" />
\t\t\t\t\t\t\t\t\t";
            } else {
                // line 133
                yield "\t\t\t\t\t\t\t\t\t\t<div class=\"w-100 h-100 d-flex align-items-center justify-content-center text-muted\"><i class=\"fa-solid fa-calendar-days\"></i></div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 135
            yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"min-width-0\">
\t\t\t\t\t\t\t\t\t<a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"fw-bold text-dark text-decoration-none text-truncate d-block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 137), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0 text-truncate\">";
            // line 138
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "venue", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "venue", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true)) : ((((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 138)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 138), "name", [], "any", false, false, false, 138), "html", null, true)) : (""))));
            yield "</p>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0\">";
            // line 139
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 139)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 139), "l, F j, Y \\a\\t g:i A"), "html", null, true)) : (""));
            yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-4\"><span class=\"fw-semibold\">";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sold", [], "any", false, false, false, 143), "html", null, true);
            yield "</span><span class=\"text-muted\">/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["capacity"]) || array_key_exists("capacity", $context) ? $context["capacity"] : (function () { throw new RuntimeError('Variable "capacity" does not exist.', 143, $this->source); })()), "html", null, true);
            yield "</span></td>
\t\t\t\t\t\t<td class=\"py-4\"><span class=\"fw-semibold\" style=\"color: #198754;\">\$";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gross", [], "any", false, false, false, 144), 2), "html", null, true);
            yield "</span></td>
\t\t\t\t\t\t<td class=\"py-4\">
\t\t\t\t\t\t\t<span class=\"badge ";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 146) == "published")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 146) == "cancelled")) {
                yield "bg-danger";
            } else {
                yield "bg-secondary";
            }
            yield "\" style=\"padding: 6px 12px; font-size: 12px; font-weight: 600;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 146)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-4 text-end\">
\t\t\t\t\t\t\t<div class=\"dropdown event-actions-dropdown\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link text-dark p-0 event-actions-btn\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" aria-label=\"Event actions\"><i class=\"fa-solid fa-ellipsis-vertical\"></i></button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end event-actions-menu\" role=\"menu\" onclick=\"event.stopPropagation()\">
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-eye me-2\"></i>View</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 153)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-pen me-2\"></i>Edit</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 154)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-ticket me-2\"></i>Tickets</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 155)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-gift me-2\"></i>Sponsorship packages</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 156)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-handshake me-2\"></i>Sponsors</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_index", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 157)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-truck me-2\"></i>Service bookings</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 158)]), "html", null, true);
            yield "\"><i class=\"fa-solid fa-shopping-cart me-2\"></i>View orders</a></li>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 161
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 161)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Delete this event?');\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 162))), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger border-0 bg-none w-100 text-start\"><i class=\"fa-solid fa-trash me-2\"></i>Delete</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 170
        if (!$context['_iterated']) {
            // line 171
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"py-5 text-center\">
\t\t\t\t\t\t\t<div style=\"padding: 60px 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-xmark\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t\t\t\t\t\t<h4 style=\"color: #6c757d; margin-bottom: 10px;\">No Events Found</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">You haven't created any events yet. Get started by creating your first event!</p>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 177
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
            yield "\" class=\"btn btn-primary btn-lg px-4\"><i class=\"fa-solid fa-plus me-2\"></i>Create Your First Event</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t";
        // line 185
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 185, $this->source); })())) > 0)) {
            // line 186
            yield "\t\t<div class=\"card-footer bg-white border-0 border-top py-3\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t<span class=\"text-muted small\">Showing ";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 188, $this->source); })())), "html", null, true);
            yield " event(s)</span>
\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-secondary\"><i class=\"fa-solid fa-download me-1\"></i>Export CSV</a>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 193
        yield "\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 197
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

        // line 198
        yield from $this->yieldParentBlock("page_scripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
\t// Search filter
\tvar search = document.getElementById('search-events');
\tvar rows = document.querySelectorAll('.event-row');
\tif (search && rows.length) {
\t\tsearch.addEventListener('input', function() {
\t\t\tvar q = (this.value || '').toLowerCase();
\t\t\trows.forEach(function(row) {
\t\t\t\tvar title = row.getAttribute('data-title') || '';
\t\t\t\trow.style.display = q === '' || title.indexOf(q) !== -1 ? '' : 'none';
\t\t\t});
\t\t});
\t}

\t// Three-dots dropdown: use fixed position so menu is never clipped by table overflow
\tvar dropdowns = document.querySelectorAll('.event-actions-dropdown');
\tdropdowns.forEach(function(drop) {
\t\tvar btn = drop.querySelector('.event-actions-btn');
\t\tvar menu = drop.querySelector('.event-actions-menu');
\t\tif (!btn || !menu) return;
\t\tbtn.addEventListener('click', function(e) {
\t\t\te.preventDefault();
\t\t\te.stopPropagation();
\t\t\tvar isOpen = drop.classList.contains('show');
\t\t\tdropdowns.forEach(function(d) {
\t\t\t\td.classList.remove('show');
\t\t\t\tvar m = d.querySelector('.event-actions-menu');
\t\t\t\tif (m) { m.classList.remove('event-actions-menu-fixed'); m.style.top = ''; m.style.left = ''; m.style.transform = ''; }
\t\t\t});
\t\t\tif (!isOpen) {
\t\t\t\tmenu.classList.add('event-actions-menu-fixed');
\t\t\t\tvar rect = btn.getBoundingClientRect();
\t\t\t\tmenu.style.left = Math.max(8, rect.right - 180) + 'px';
\t\t\t\tmenu.style.top = (rect.top - 4) + 'px';
\t\t\t\tmenu.style.transform = 'translateY(-100%)';
\t\t\t\tmenu.style.right = 'auto';
\t\t\t\tmenu.style.bottom = 'auto';
\t\t\t\tdrop.classList.add('show');
\t\t\t}
\t\t});
\t});
\tdocument.addEventListener('click', function() {
\t\tdropdowns.forEach(function(d) {
\t\t\td.classList.remove('show');
\t\t\tvar m = d.querySelector('.event-actions-menu');
\t\t\tif (m) { m.classList.remove('event-actions-menu-fixed'); m.style.top = ''; m.style.left = ''; m.style.transform = ''; }
\t\t});
\t});
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
        return "my_events.html.twig";
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
        return array (  525 => 198,  512 => 197,  499 => 193,  491 => 188,  487 => 186,  485 => 185,  480 => 182,  469 => 177,  461 => 171,  459 => 170,  446 => 162,  442 => 161,  436 => 158,  432 => 157,  428 => 156,  424 => 155,  420 => 154,  416 => 153,  412 => 152,  395 => 146,  390 => 144,  384 => 143,  377 => 139,  373 => 138,  367 => 137,  363 => 135,  359 => 133,  353 => 131,  351 => 130,  343 => 127,  335 => 123,  329 => 122,  326 => 121,  321 => 120,  318 => 119,  313 => 118,  298 => 105,  279 => 90,  273 => 89,  267 => 88,  261 => 87,  255 => 84,  240 => 71,  230 => 63,  221 => 56,  218 => 54,  205 => 53,  150 => 8,  137 => 7,  114 => 5,  91 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}My Events - Eventify{% endblock %}
{% block page_heading %}Events{% endblock %}
{% block page_breadcrumb %}My Events{% endblock %}

{% block page_styles %}
{{ parent() }}
<style>
.event-actions-dropdown { position: relative; }
.event-actions-menu {
\tdisplay: none;
\tposition: absolute;
\tright: 0;
\tbottom: 100%;
\ttop: auto;
\tmargin: 0 0 0.25rem 0;
\tz-index: 1060;
\tmin-width: 180px;
\tpadding: 0.5rem 0;
\tfont-size: 0.875rem;
\tcolor: #212529;
\tbackground-color: #fff;
\tborder: 1px solid rgba(0,0,0,.15);
\tborder-radius: 0.375rem;
\tbox-shadow: 0 0.5rem 1rem rgba(0,0,0,.175);
\tlist-style: none;
}
.event-actions-dropdown.show .event-actions-menu { display: block; }
.event-actions-menu.event-actions-menu-fixed { position: fixed; }
.event-actions-menu.event-actions-menu-fixed.show { display: block; }
.event-actions-menu .dropdown-item {
\tdisplay: block;
\twidth: 100%;
\tpadding: 0.35rem 1rem;
\tclear: both;
\tfont-weight: 400;
\tcolor: #212529;
\ttext-align: inherit;
\ttext-decoration: none;
\twhite-space: nowrap;
\tbackground-color: transparent;
\tborder: 0;
}
.event-actions-menu .dropdown-item:hover { background-color: #f8f9fa; }
.event-actions-menu .dropdown-divider { height: 0; margin: 0.5rem 0; overflow: hidden; border-top: 1px solid rgba(0,0,0,.15); }
.event-actions-menu li { display: block; }
.event-actions-menu li form { margin: 0; }
.event-actions-menu li form .dropdown-item { cursor: pointer; }
</style>
{% endblock %}

{% block content %}
<div class=\"container py-5\">
\t{# Page Header #}
\t<div class=\"section-header mb-4\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">My Events</h2>
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">Manage and track all your events</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-6 text-md-end mt-3 mt-md-0\">
\t\t\t\t<a href=\"{{ path('app_event_create') }}\" class=\"btn btn-primary btn-lg px-4\">
\t\t\t\t\t<i class=\"fa-solid fa-plus me-2\"></i>Create Event
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t{# Toolbar: search, view toggle, filter #}
\t<div class=\"events-toolbar mb-4\">
\t\t<div class=\"row align-items-center g-3\">
\t\t\t<div class=\"col-lg-5\">
\t\t\t\t<label for=\"search-events\" class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-search me-2\"></i>Search Events</label>
\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t<span class=\"input-group-text bg-white\"><i class=\"fa-solid fa-magnifying-glass text-muted\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Type to search your events...\" id=\"search-events\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-filter me-2\"></i>Filter by Status</label>
\t\t\t\t<div class=\"dropdown d-grid\">
\t\t\t\t\t<button class=\"btn btn-lg btn-outline-secondary dropdown-toggle text-start\" type=\"button\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t{{ current_status == '' ? 'All Events' : current_status|capitalize }}
\t\t\t\t\t</button>
\t\t\t\t\t<ul class=\"dropdown-menu w-100\">
\t\t\t\t\t\t<li><a class=\"dropdown-item {{ current_status == '' ? 'active' : '' }}\" href=\"{{ path('app_my_events') }}\">All Events</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item {{ current_status == 'draft' ? 'active' : '' }}\" href=\"{{ path('app_my_events', { status: 'draft' }) }}\">Draft</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item {{ current_status == 'published' ? 'active' : '' }}\" href=\"{{ path('app_my_events', { status: 'published' }) }}\">Published</a></li>
\t\t\t\t\t\t<li><a class=\"dropdown-item {{ current_status == 'cancelled' ? 'active' : '' }}\" href=\"{{ path('app_my_events', { status: 'cancelled' }) }}\">Cancelled</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-4\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-eye me-2\"></i>View</label>
\t\t\t\t<div class=\"btn-group w-100\" role=\"group\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-primary\"><i class=\"fa-solid fa-list me-2\"></i>List</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-lg btn-outline-primary\" disabled><i class=\"fa-solid fa-calendar me-2\"></i>Calendar</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t{# Table: My Events #}
\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead style=\"background: #f8f9fa; border-bottom: 2px solid #e9ecef;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Event</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Sold</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Gross</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 fw-semibold\" style=\"color: #333;\">Status</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end fw-semibold\" style=\"width: 60px; color: #333;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for event in events %}
\t\t\t\t\t\t{% set capacity = 0 %}
\t\t\t\t\t\t{% for t in event.tickets %}
\t\t\t\t\t\t\t{% set capacity = capacity + t.quantityAvailable %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t<tr class=\"event-row\" data-title=\"{{ event.title|lower }}\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<td class=\"py-4\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-3\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 text-center text-muted small fw-semibold\" style=\"width: 44px; line-height: 1.2;\">
\t\t\t\t\t\t\t\t\t{{ event.startDatetime ? event.startDatetime|date('M')|upper }}<br>{{ event.startDatetime ? event.startDatetime|date('d') }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 rounded overflow-hidden\" style=\"width: 56px; height: 56px; background: #e9ecef;\">
\t\t\t\t\t\t\t\t\t{% if event.image %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ event.image }}\" alt=\"\" class=\"w-100 h-100\" style=\"object-fit: cover;\" />
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div class=\"w-100 h-100 d-flex align-items-center justify-content-center text-muted\"><i class=\"fa-solid fa-calendar-days\"></i></div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"min-width-0\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"fw-bold text-dark text-decoration-none text-truncate d-block\">{{ event.title }}</a>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0 text-truncate\">{{ event.venue ? event.venue.name : (event.organizer ? event.organizer.name : '') }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0\">{{ event.startDatetime ? event.startDatetime|date('l, F j, Y \\\\a\\\\t g:i A') : '' }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-4\"><span class=\"fw-semibold\">{{ event.sold }}</span><span class=\"text-muted\">/{{ capacity }}</span></td>
\t\t\t\t\t\t<td class=\"py-4\"><span class=\"fw-semibold\" style=\"color: #198754;\">\${{ event.gross|number_format(2) }}</span></td>
\t\t\t\t\t\t<td class=\"py-4\">
\t\t\t\t\t\t\t<span class=\"badge {% if event.status == 'published' %}bg-success{% elseif event.status == 'cancelled' %}bg-danger{% else %}bg-secondary{% endif %}\" style=\"padding: 6px 12px; font-size: 12px; font-weight: 600;\">{{ event.status|capitalize }}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-4 text-end\">
\t\t\t\t\t\t\t<div class=\"dropdown event-actions-dropdown\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-link text-dark p-0 event-actions-btn\" type=\"button\" aria-expanded=\"false\" aria-haspopup=\"true\" aria-label=\"Event actions\"><i class=\"fa-solid fa-ellipsis-vertical\"></i></button>
\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end event-actions-menu\" role=\"menu\" onclick=\"event.stopPropagation()\">
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_event_show', { id: event.id }) }}\"><i class=\"fa-solid fa-eye me-2\"></i>View</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_event_edit', { id: event.id }) }}\"><i class=\"fa-solid fa-pen me-2\"></i>Edit</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_event_tickets', { id: event.id }) }}\"><i class=\"fa-solid fa-ticket me-2\"></i>Tickets</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_sponsorship_package_index', { id: event.id }) }}\"><i class=\"fa-solid fa-gift me-2\"></i>Sponsorship packages</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_sponsor_index', { id: event.id }) }}\"><i class=\"fa-solid fa-handshake me-2\"></i>Sponsors</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_service_booking_index', { eventId: event.id }) }}\"><i class=\"fa-solid fa-truck me-2\"></i>Service bookings</a></li>
\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_orders_event', { id: event.id }) }}\"><i class=\"fa-solid fa-shopping-cart me-2\"></i>View orders</a></li>
\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_event_delete', { id: event.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Delete this event?');\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\" />
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger border-0 bg-none w-100 text-start\"><i class=\"fa-solid fa-trash me-2\"></i>Delete</button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"5\" class=\"py-5 text-center\">
\t\t\t\t\t\t\t<div style=\"padding: 60px 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-xmark\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t\t\t\t\t\t<h4 style=\"color: #6c757d; margin-bottom: 10px;\">No Events Found</h4>
\t\t\t\t\t\t\t\t<p class=\"text-muted mb-4\">You haven't created any events yet. Get started by creating your first event!</p>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\" class=\"btn btn-primary btn-lg px-4\"><i class=\"fa-solid fa-plus me-2\"></i>Create Your First Event</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t{% if events|length > 0 %}
\t\t<div class=\"card-footer bg-white border-0 border-top py-3\">
\t\t\t<div class=\"d-flex justify-content-between align-items-center\">
\t\t\t\t<span class=\"text-muted small\">Showing {{ events|length }} event(s)</span>
\t\t\t\t<a href=\"#\" class=\"btn btn-sm btn-outline-secondary\"><i class=\"fa-solid fa-download me-1\"></i>Export CSV</a>
\t\t\t</div>
\t\t</div>
\t\t{% endif %}
\t</div>
</div>
{% endblock %}

{% block page_scripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
\t// Search filter
\tvar search = document.getElementById('search-events');
\tvar rows = document.querySelectorAll('.event-row');
\tif (search && rows.length) {
\t\tsearch.addEventListener('input', function() {
\t\t\tvar q = (this.value || '').toLowerCase();
\t\t\trows.forEach(function(row) {
\t\t\t\tvar title = row.getAttribute('data-title') || '';
\t\t\t\trow.style.display = q === '' || title.indexOf(q) !== -1 ? '' : 'none';
\t\t\t});
\t\t});
\t}

\t// Three-dots dropdown: use fixed position so menu is never clipped by table overflow
\tvar dropdowns = document.querySelectorAll('.event-actions-dropdown');
\tdropdowns.forEach(function(drop) {
\t\tvar btn = drop.querySelector('.event-actions-btn');
\t\tvar menu = drop.querySelector('.event-actions-menu');
\t\tif (!btn || !menu) return;
\t\tbtn.addEventListener('click', function(e) {
\t\t\te.preventDefault();
\t\t\te.stopPropagation();
\t\t\tvar isOpen = drop.classList.contains('show');
\t\t\tdropdowns.forEach(function(d) {
\t\t\t\td.classList.remove('show');
\t\t\t\tvar m = d.querySelector('.event-actions-menu');
\t\t\t\tif (m) { m.classList.remove('event-actions-menu-fixed'); m.style.top = ''; m.style.left = ''; m.style.transform = ''; }
\t\t\t});
\t\t\tif (!isOpen) {
\t\t\t\tmenu.classList.add('event-actions-menu-fixed');
\t\t\t\tvar rect = btn.getBoundingClientRect();
\t\t\t\tmenu.style.left = Math.max(8, rect.right - 180) + 'px';
\t\t\t\tmenu.style.top = (rect.top - 4) + 'px';
\t\t\t\tmenu.style.transform = 'translateY(-100%)';
\t\t\t\tmenu.style.right = 'auto';
\t\t\t\tmenu.style.bottom = 'auto';
\t\t\t\tdrop.classList.add('show');
\t\t\t}
\t\t});
\t});
\tdocument.addEventListener('click', function() {
\t\tdropdowns.forEach(function(d) {
\t\t\td.classList.remove('show');
\t\t\tvar m = d.querySelector('.event-actions-menu');
\t\t\tif (m) { m.classList.remove('event-actions-menu-fixed'); m.style.top = ''; m.style.left = ''; m.style.transform = ''; }
\t\t});
\t});
});
</script>
{% endblock %}
", "my_events.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\my_events.html.twig");
    }
}

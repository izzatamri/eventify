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

/* service_booking/show.html.twig */
class __TwigTemplate_884d6055f6a8dfd444f2d64ebcc24dd4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_booking/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_booking/show.html.twig"));

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

        yield "Booking #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
        yield " - ";
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

        yield "Booking details";
        
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

        yield "Booking";
        
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
\t<div class=\"mb-3\">
\t\t<a href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_index", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        yield "\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to bookings</a>
\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t<a href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 12, $this->source); })()), "title", [], "any", false, false, false, 12), "html", null, true);
        yield "</a>
\t</div>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-body p-4\">
\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-4\">
\t\t\t\t<h2 class=\"h5 fw-bold mb-0\">Booking #";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18), "html", null, true);
        yield "</h2>
\t\t\t\t<div>
\t\t\t\t\t";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) != "cancelled")) {
            // line 21
            yield "\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_edit", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 21, $this->source); })()), "id", [], "any", false, false, false, 21)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
\t\t\t\t\t<form method=\"post\" action=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_delete", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Cancel this booking?');\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("service_booking_delete_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23))), "html", null, true);
            yield "\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Cancel booking</button>
\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        // line 27
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<dl class=\"row mb-0\">
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Provider</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 31, $this->source); })()), "serviceProvider", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31), "html", null, true);
        yield " (";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 31, $this->source); })()), "serviceProvider", [], "any", false, false, false, 31), "serviceType", [], "any", false, false, false, 31), "html", null, true);
        yield ")</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Email</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 33, $this->source); })()), "serviceProvider", [], "any", false, false, false, 33), "email", [], "any", false, false, false, 33), "html", null, true);
        yield "</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Phone</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 35, $this->source); })()), "serviceProvider", [], "any", false, false, false, 35), "phone", [], "any", false, false, false, 35), "html", null, true);
        yield "</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Scheduled date</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 37, $this->source); })()), "scheduledDate", [], "any", false, false, false, 37), "l, F j, Y"), "html", null, true);
        yield "</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Time</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 39, $this->source); })()), "startTime", [], "any", false, false, false, 39), "H:i"), "html", null, true);
        yield " – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 39, $this->source); })()), "endTime", [], "any", false, false, false, 39), "H:i"), "html", null, true);
        yield "</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Quantity</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 41, $this->source); })()), "quantity", [], "any", false, false, false, 41), "html", null, true);
        yield "</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Agreed price</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 43, $this->source); })()), "agreedPrice", [], "any", false, false, false, 43), 2), "html", null, true);
        yield " USD</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Status</dt>
\t\t\t\t<dd class=\"col-sm-9\">
\t\t\t\t\t";
        // line 46
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 46, $this->source); })()), "status", [], "any", false, false, false, 46) == "pending")) {
            yield "<span class=\"badge bg-warning text-dark\">Pending</span>
\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 47
(isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 47, $this->source); })()), "status", [], "any", false, false, false, 47) == "confirmed")) {
            yield "<span class=\"badge bg-success\">Confirmed</span>
\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 48, $this->source); })()), "status", [], "any", false, false, false, 48) == "cancelled")) {
            yield "<span class=\"badge bg-danger\">Cancelled</span>
\t\t\t\t\t";
        } else {
            // line 49
            yield "<span class=\"badge bg-info\">Completed</span>
\t\t\t\t\t";
        }
        // line 51
        yield "\t\t\t\t</dd>
\t\t\t\t";
        // line 52
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 52, $this->source); })()), "notes", [], "any", false, false, false, 52)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 53
            yield "\t\t\t\t<dt class=\"col-sm-3 text-muted\">Notes</dt>
\t\t\t\t<dd class=\"col-sm-9\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["booking"]) || array_key_exists("booking", $context) ? $context["booking"] : (function () { throw new RuntimeError('Variable "booking" does not exist.', 54, $this->source); })()), "notes", [], "any", false, false, false, 54), "html", null, true);
            yield "</dd>
\t\t\t\t";
        }
        // line 56
        yield "\t\t\t</dl>
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
        return "service_booking/show.html.twig";
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
        return array (  271 => 56,  266 => 54,  263 => 53,  261 => 52,  258 => 51,  254 => 49,  249 => 48,  245 => 47,  241 => 46,  235 => 43,  230 => 41,  223 => 39,  218 => 37,  213 => 35,  208 => 33,  201 => 31,  195 => 27,  188 => 23,  184 => 22,  179 => 21,  177 => 20,  172 => 18,  161 => 12,  156 => 10,  152 => 8,  139 => 7,  116 => 5,  93 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Booking #{{ booking.id }} - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}Booking details{% endblock %}
{% block page_breadcrumb %}Booking{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t<div class=\"mb-3\">
\t\t<a href=\"{{ path('app_service_booking_index', { eventId: event.id }) }}\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to bookings</a>
\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-dark text-decoration-none\">{{ event.title }}</a>
\t</div>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-body p-4\">
\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-4\">
\t\t\t\t<h2 class=\"h5 fw-bold mb-0\">Booking #{{ booking.id }}</h2>
\t\t\t\t<div>
\t\t\t\t\t{% if booking.status != 'cancelled' %}
\t\t\t\t\t<a href=\"{{ path('app_service_booking_edit', { eventId: event.id, id: booking.id }) }}\" class=\"btn btn-sm btn-outline-primary\">Edit</a>
\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_service_booking_delete', { eventId: event.id, id: booking.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Cancel this booking?');\">
\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('service_booking_delete_' ~ booking.id) }}\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Cancel booking</button>
\t\t\t\t\t</form>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<dl class=\"row mb-0\">
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Provider</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.serviceProvider.name }} ({{ booking.serviceProvider.serviceType }})</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Email</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.serviceProvider.email }}</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Phone</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.serviceProvider.phone }}</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Scheduled date</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.scheduledDate|date('l, F j, Y') }}</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Time</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.startTime|date('H:i') }} – {{ booking.endTime|date('H:i') }}</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Quantity</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.quantity }}</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Agreed price</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.agreedPrice|number_format(2) }} USD</dd>
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Status</dt>
\t\t\t\t<dd class=\"col-sm-9\">
\t\t\t\t\t{% if booking.status == 'pending' %}<span class=\"badge bg-warning text-dark\">Pending</span>
\t\t\t\t\t{% elseif booking.status == 'confirmed' %}<span class=\"badge bg-success\">Confirmed</span>
\t\t\t\t\t{% elseif booking.status == 'cancelled' %}<span class=\"badge bg-danger\">Cancelled</span>
\t\t\t\t\t{% else %}<span class=\"badge bg-info\">Completed</span>
\t\t\t\t\t{% endif %}
\t\t\t\t</dd>
\t\t\t\t{% if booking.notes %}
\t\t\t\t<dt class=\"col-sm-3 text-muted\">Notes</dt>
\t\t\t\t<dd class=\"col-sm-9\">{{ booking.notes }}</dd>
\t\t\t\t{% endif %}
\t\t\t</dl>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "service_booking/show.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\service_booking\\show.html.twig");
    }
}

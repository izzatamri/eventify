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

/* payment/success.html.twig */
class __TwigTemplate_e6c11318b18502972f21e764dd115317 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/success.html.twig"));

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

        yield "Payment successful – ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " – Eventify";
        
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

        yield "Thanks for your order!";
        
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

        yield "<a href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 5, $this->source); })()), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "</a> <i class=\"fa-solid fa-angle-right\"></i> Payment success";
        
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
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card border-0 shadow-sm\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center justify-content-center rounded-circle bg-success text-white mb-3\" style=\"width: 64px; height: 64px;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-check fa-2x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2 class=\"h4 fw-bold mb-1\">Payment successful</h2>
\t\t\t\t\t\t<p class=\"text-muted mb-0\">You're going to <strong>";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), "html", null, true);
        yield "</strong>.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Ticket sent to</div>
\t\t\t\t\t\t<div class=\"fw-semibold\">";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), "html", null, true);
        yield "</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "startDatetime", [], "any", false, false, false, 26) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "venue", [], "any", false, false, false, 26))) {
            // line 27
            yield "\t\t\t\t\t<div class=\"row g-3 mb-4\">
\t\t\t\t\t\t";
            // line 28
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "startDatetime", [], "any", false, false, false, 28)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 29
                yield "\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Date</div>
\t\t\t\t\t\t\t<div class=\"fw-semibold\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 31, $this->source); })()), "startDatetime", [], "any", false, false, false, 31), "l, F j \\a\\t g:i A"), "html", null, true);
                yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 34
            yield "\t\t\t\t\t\t";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 34, $this->source); })()), "venue", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Location</div>
\t\t\t\t\t\t\t<div class=\"fw-semibold\">";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "venue", [], "any", false, false, false, 37), "name", [], "any", false, false, false, 37), "html", null, true);
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "venue", [], "any", false, false, false, 37), "address", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield ", ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 37, $this->source); })()), "venue", [], "any", false, false, false, 37), "address", [], "any", false, false, false, 37), "html", null, true);
                }
                yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 40
            yield "\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 42
        yield "
\t\t\t\t\t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 44
            yield "\t\t\t\t\t<div class=\"d-flex align-items-center gap-3 py-3 border-top\">
\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t<div class=\"fw-semibold\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "ticket", [], "any", false, false, false, 46), "name", [], "any", false, false, false, 46), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<div class=\"small text-muted\">Quantity: ";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "quantity", [], "any", false, false, false, 47), "html", null, true);
            yield " &middot; Order #";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 47), "html", null, true);
            yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            // line 49
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "uuid", [], "any", false, false, false, 49)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 50
                yield "\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<img src=\"";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qrcode_serve", ["uuid" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "uuid", [], "any", false, false, false, 51)]), "html", null, true);
                yield "\" alt=\"Ticket QR code\" style=\"width: 80px; height: 80px; object-fit: contain; border-radius: 8px; border: 1px solid #e5e7eb;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 54
            yield "\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
\t\t\t\t\t<div class=\"mt-4 pt-3 border-top d-flex flex-wrap gap-2\">
\t\t\t\t\t\t<a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"btn vl-btn4\">Take me to my tickets</a>
\t\t\t\t\t\t<a href=\"";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">Back to event</a>
\t\t\t\t\t</div>
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
        return "payment/success.html.twig";
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
        return array (  266 => 59,  262 => 58,  258 => 56,  251 => 54,  245 => 51,  242 => 50,  240 => 49,  233 => 47,  229 => 46,  225 => 44,  221 => 43,  218 => 42,  214 => 40,  204 => 37,  200 => 35,  197 => 34,  191 => 31,  187 => 29,  185 => 28,  182 => 27,  180 => 26,  174 => 23,  166 => 18,  154 => 8,  141 => 7,  114 => 5,  91 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Payment successful – {{ event.title }} – Eventify{% endblock %}
{% block page_heading %}Thanks for your order!{% endblock %}
{% block page_breadcrumb %}<a href=\"{{ path('app_event_show', { id: event.id }) }}\">{{ event.title }}</a> <i class=\"fa-solid fa-angle-right\"></i> Payment success{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card border-0 shadow-sm\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<div class=\"text-center mb-4\">
\t\t\t\t\t\t<div class=\"d-inline-flex align-items-center justify-content-center rounded-circle bg-success text-white mb-3\" style=\"width: 64px; height: 64px;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-check fa-2x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<h2 class=\"h4 fw-bold mb-1\">Payment successful</h2>
\t\t\t\t\t\t<p class=\"text-muted mb-0\">You're going to <strong>{{ event.title }}</strong>.</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Ticket sent to</div>
\t\t\t\t\t\t<div class=\"fw-semibold\">{{ user.email }}</div>
\t\t\t\t\t</div>

\t\t\t\t\t{% if event.startDatetime or event.venue %}
\t\t\t\t\t<div class=\"row g-3 mb-4\">
\t\t\t\t\t\t{% if event.startDatetime %}
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Date</div>
\t\t\t\t\t\t\t<div class=\"fw-semibold\">{{ event.startDatetime|date('l, F j \\\\a\\\\t g:i A') }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if event.venue %}
\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Location</div>
\t\t\t\t\t\t\t<div class=\"fw-semibold\">{{ event.venue.name }}{% if event.venue.address %}, {{ event.venue.address }}{% endif %}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t<div class=\"d-flex align-items-center gap-3 py-3 border-top\">
\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t<div class=\"fw-semibold\">{{ order.ticket.name }}</div>
\t\t\t\t\t\t\t<div class=\"small text-muted\">Quantity: {{ order.quantity }} &middot; Order #{{ order.id }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if order.uuid %}
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<img src=\"{{ path('app_qrcode_serve', { uuid: order.uuid }) }}\" alt=\"Ticket QR code\" style=\"width: 80px; height: 80px; object-fit: contain; border-radius: 8px; border: 1px solid #e5e7eb;\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t{% endfor %}

\t\t\t\t\t<div class=\"mt-4 pt-3 border-top d-flex flex-wrap gap-2\">
\t\t\t\t\t\t<a href=\"{{ path('app_orders_index') }}\" class=\"btn vl-btn4\">Take me to my tickets</a>
\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"btn btn-outline-secondary\">Back to event</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "payment/success.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\payment\\success.html.twig");
    }
}

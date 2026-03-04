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

/* order/event_orders.html.twig */
class __TwigTemplate_a49616d6c3aa79e874bd328f391fb8c7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/event_orders.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/event_orders.html.twig"));

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

        yield "Orders - ";
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

        yield "Event orders";
        
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
        yield "</a> <i class=\"fa-solid fa-angle-right\"></i> Orders";
        
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
\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t<h2 class=\"h4 fw-bold mb-0\">Orders for ";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "</h2>
\t\t<a href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 11, $this->source); })()), "id", [], "any", false, false, false, 11)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">Back to event</a>

 // TODO: Add error handling
\t</div>

\t";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 16, $this->source); })())) > 0)) {
            // line 17
            yield "\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Buyer</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Ticket</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Qty</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Total</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Status</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Date</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 32, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 33
                yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t";
                // line 35
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 36
                    yield "\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "user", [], "any", false, false, false, 36), "email", [], "any", false, false, false, 36), "html", null, true);
                    yield "</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 38
                    yield "\t\t\t\t\t\t\t\t—
\t\t\t\t\t\t\t";
                }
                // line 40
                yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">";
                // line 41
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "ticket", [], "any", false, false, false, 41), "name", [], "any", false, false, false, 41), "html", null, true);
                yield "</td>
\t\t\t\t\t\t<td class=\"py-3\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "quantity", [], "any", false, false, false, 42), "html", null, true);
                yield "</td>
\t\t\t\t\t\t<td class=\"py-3\">\$";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 43), 2), "html", null, true);
                yield "</td>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"badge ";
                // line 45
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45) == "confirmed")) {
                    yield "bg-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45) == "cancelled")) {
                    yield "bg-danger";
                } else {
                    yield "bg-warning text-dark";
                }
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 45)), "html", null, true);
                yield "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3 text-muted small\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 47), "M j, Y H:i"), "html", null, true);
                yield "</td>
\t\t\t\t\t\t<td class=\"py-3 text-end\">
\t\t\t\t\t\t\t<a href=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary me-1\">View</a>
\t\t\t\t\t\t\t";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 50) != "cancelled")) {
                    // line 51
                    yield "\t\t\t\t\t\t\t<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 51)]), "html", null, true);
                    yield "\" class=\"btn btn-sm btn-outline-secondary\">Update status</a>
\t\t\t\t\t\t\t";
                }
                // line 53
                yield "\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t";
        } else {
            // line 61
            yield "\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-body text-center py-5\">
\t\t\t<p class=\"text-muted mb-0\">No orders for this event yet.</p>
\t\t\t<a href=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary mt-3\">Back to event</a>
\t\t</div>
 // NOTE: Consider caching this
\t</div>
\t";
        }
        // line 69
        yield "</div>
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
        return "order/event_orders.html.twig";
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
        return array (  283 => 69,  275 => 64,  270 => 61,  263 => 56,  255 => 53,  249 => 51,  247 => 50,  243 => 49,  238 => 47,  225 => 45,  220 => 43,  216 => 42,  212 => 41,  209 => 40,  205 => 38,  199 => 36,  197 => 35,  193 => 33,  189 => 32,  172 => 17,  170 => 16,  162 => 11,  158 => 10,  154 => 8,  141 => 7,  114 => 5,  91 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Orders - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}Event orders{% endblock %}
{% block page_breadcrumb %}<a href=\"{{ path('app_event_show', { id: event.id }) }}\">{{ event.title }}</a> <i class=\"fa-solid fa-angle-right\"></i> Orders{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t<h2 class=\"h4 fw-bold mb-0\">Orders for {{ event.title }}</h2>
\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"btn btn-outline-secondary btn-sm\">Back to event</a>

 // TODO: Add error handling
\t</div>

\t{% if orders|length > 0 %}
\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Buyer</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Ticket</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Qty</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Total</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Status</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Date</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for order in orders %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t{% if order.user %}
\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">{{ order.user.email }}</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t—
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">{{ order.ticket.name }}</td>
\t\t\t\t\t\t<td class=\"py-3\">{{ order.quantity }}</td>
\t\t\t\t\t\t<td class=\"py-3\">\${{ order.totalPrice|number_format(2) }}</td>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"badge {% if order.status == 'confirmed' %}bg-success{% elseif order.status == 'cancelled' %}bg-danger{% else %}bg-warning text-dark{% endif %}\">{{ order.status|capitalize }}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3 text-muted small\">{{ order.createdAt|date('M j, Y H:i') }}</td>
\t\t\t\t\t\t<td class=\"py-3 text-end\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_order_show', { id: order.id }) }}\" class=\"btn btn-sm btn-outline-primary me-1\">View</a>
\t\t\t\t\t\t\t{% if order.status != 'cancelled' %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_order_status', { id: order.id }) }}\" class=\"btn btn-sm btn-outline-secondary\">Update status</a>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
\t{% else %}
\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-body text-center py-5\">
\t\t\t<p class=\"text-muted mb-0\">No orders for this event yet.</p>
\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"btn btn-outline-primary mt-3\">Back to event</a>
\t\t</div>
 // NOTE: Consider caching this
\t</div>
\t{% endif %}
</div>
{% endblock %}
", "order/event_orders.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/order/event_orders.html.twig");
    }
}

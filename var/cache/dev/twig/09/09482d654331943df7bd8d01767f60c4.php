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

/* ticket/validate.html.twig */
class __TwigTemplate_cc4c48a01ffdf1ae9e0b4471adf00b6e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/validate.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket/validate.html.twig"));

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

        yield "Ticket validation - Eventify";
        
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

        yield "Ticket validation";
        
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

        yield "Ticket validation";
        
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
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"card border-0 shadow-sm\">
\t\t\t\t<div class=\"card-body p-4 text-center\">
\t\t\t\t\t<h2 class=\"h5 fw-bold mb-3\">Ticket is valid</h2>
\t\t\t\t\t<p class=\"text-muted mb-3\">This ticket belongs to the event <strong>";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 14, $this->source); })()), "event", [], "any", false, false, false, 14), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "</strong>.</p>
\t\t\t\t\t<ul class=\"list-unstyled mb-3 text-start mx-auto\" style=\"max-width: 320px;\">
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Event date:</strong> ";
        // line 16
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "event", [], "any", false, false, false, 16), "startDatetime", [], "any", false, false, false, 16)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 16, $this->source); })()), "event", [], "any", false, false, false, 16), "startDatetime", [], "any", false, false, false, 16), "F j, Y \\a\\t g:i A"), "html", null, true)) : ("TBA"));
        yield "</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Location:</strong> ";
        // line 17
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "event", [], "any", false, false, false, 17), "venue", [], "any", false, false, false, 17)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 17, $this->source); })()), "event", [], "any", false, false, false, 17), "venue", [], "any", false, false, false, 17), "name", [], "any", false, false, false, 17), "html", null, true)) : ("Online / TBA"));
        yield "</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Ticket type:</strong> ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 18, $this->source); })()), "ticket", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
        yield "</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Quantity:</strong> ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 19, $this->source); })()), "quantity", [], "any", false, false, false, 19), "html", null, true);
        yield "</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Status:</strong> ";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20)), "html", null, true);
        yield "</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "event", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22)]), "html", null, true);
        yield "\" class=\"btn btn-primary\">View event</a>
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
        return "ticket/validate.html.twig";
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
        return array (  182 => 22,  177 => 20,  173 => 19,  169 => 18,  165 => 17,  161 => 16,  156 => 14,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Ticket validation - Eventify{% endblock %}
{% block page_heading %}Ticket validation{% endblock %}
{% block page_breadcrumb %}Ticket validation{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t<div class=\"row justify-content-center\">
\t\t<div class=\"col-lg-6\">
\t\t\t<div class=\"card border-0 shadow-sm\">
\t\t\t\t<div class=\"card-body p-4 text-center\">
\t\t\t\t\t<h2 class=\"h5 fw-bold mb-3\">Ticket is valid</h2>
\t\t\t\t\t<p class=\"text-muted mb-3\">This ticket belongs to the event <strong>{{ order.event.title }}</strong>.</p>
\t\t\t\t\t<ul class=\"list-unstyled mb-3 text-start mx-auto\" style=\"max-width: 320px;\">
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Event date:</strong> {{ order.event.startDatetime ? order.event.startDatetime|date('F j, Y \\\\a\\\\t g:i A') : 'TBA' }}</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Location:</strong> {{ order.event.venue ? order.event.venue.name : 'Online / TBA' }}</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Ticket type:</strong> {{ order.ticket.name }}</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Quantity:</strong> {{ order.quantity }}</li>
\t\t\t\t\t\t<li class=\"mb-1\"><strong>Status:</strong> {{ order.status|capitalize }}</li>
\t\t\t\t\t</ul>
\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: order.event.id }) }}\" class=\"btn btn-primary\">View event</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}

", "ticket/validate.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/ticket/validate.html.twig");
    }
}

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

/* service_request/index.html.twig */
class __TwigTemplate_bae61a8388d2c38ace5532de00da9db9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_request/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_request/index.html.twig"));

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

        yield "Demandes de service - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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

        yield "Appels d'offres";
        
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

        yield "Demandes de service";
        
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
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
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
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
        yield "\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Mes événements</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none fw-semibold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 20, $this->source); })()), "title", [], "any", false, false, false, 20), "html", null, true);
        yield "</a>
\t\t</div>
\t\t<a href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_create", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 22, $this->source); })()), "id", [], "any", false, false, false, 22)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-sm\">
\t\t\t<i class=\"fa-solid fa-plus me-1\"></i>Nouvelle demande
\t\t</a>
\t</div>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h2 class=\"h5 fw-bold mb-0\"><i class=\"fa-solid fa-file-contract me-2\"></i>Demandes de service pour cet événement</h2>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t<th>Budget</th>
\t\t\t\t\t\t<th>Deadline</th>
\t\t\t\t\t\t<th>Propositions</th>
\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["requests"]) || array_key_exists("requests", $context) ? $context["requests"] : (function () { throw new RuntimeError('Variable "requests" does not exist.', 45, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["req"]) {
            // line 46
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"fw-semibold\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["req"], "title", [], "any", false, false, false, 47), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td><span class=\"badge bg-secondary\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["req"], "serviceType", [], "any", false, false, false, 48), "html", null, true);
            yield "</span></td>
\t\t\t\t\t\t<td>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["req"], "budgetMin", [], "any", false, false, false, 49), 2), "html", null, true);
            yield " € — ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["req"], "budgetMax", [], "any", false, false, false, 49), 2), "html", null, true);
            yield " €</td>
\t\t\t\t\t\t<td>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["req"], "deadline", [], "any", false, false, false, 50), "d/m/Y H:i"), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td><span class=\"badge bg-primary\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["req"], "proposals", [], "any", false, false, false, 51)), "html", null, true);
            yield "</span></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t";
            // line 53
            $context["statusColors"] = ["draft" => "bg-secondary", "open" => "bg-success", "closed" => "bg-warning text-dark", "awarded" => "bg-info"];
            // line 54
            yield "\t\t\t\t\t\t\t";
            $context["statusLabels"] = ["draft" => "Brouillon", "open" => "Ouvert", "closed" => "Fermé", "awarded" => "Attribué"];
            // line 55
            yield "\t\t\t\t\t\t\t<span class=\"badge ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 55), [], "array", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 55), [], "array", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusColors"]) || array_key_exists("statusColors", $context) ? $context["statusColors"] : (function () { throw new RuntimeError('Variable "statusColors" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 55), [], "array", false, false, false, 55), "html", null, true)) : ("bg-secondary"));
            yield "\">";
            yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["statusLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 55), [], "array", true, true, false, 55) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 55), [], "array", false, false, false, 55)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["statusLabels"]) || array_key_exists("statusLabels", $context) ? $context["statusLabels"] : (function () { throw new RuntimeError('Variable "statusLabels" does not exist.', 55, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 55), [], "array", false, false, false, 55), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["req"], "status", [], "any", false, false, false, 55), "html", null, true)));
            yield "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_show", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58), "id" => CoreExtension::getAttribute($this->env, $this->source, $context["req"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">Voir</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 61
        if (!$context['_iterated']) {
            // line 62
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\" class=\"text-center text-muted py-5\">
\t\t\t\t\t\t\t<p class=\"mb-2\">Aucune demande de service.</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_create", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 65, $this->source); })()), "id", [], "any", false, false, false, 65)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm\">Créer une demande</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['req'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        return "service_request/index.html.twig";
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
        return array (  292 => 69,  282 => 65,  277 => 62,  275 => 61,  267 => 58,  258 => 55,  255 => 54,  253 => 53,  248 => 51,  244 => 50,  238 => 49,  234 => 48,  230 => 47,  227 => 46,  222 => 45,  196 => 22,  189 => 20,  184 => 18,  179 => 15,  170 => 13,  165 => 12,  156 => 10,  152 => 9,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Demandes de service - {{ event.title }}{% endblock %}
{% block page_heading %}Appels d'offres{% endblock %}
{% block page_breadcrumb %}Demandes de service{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}

\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"{{ path('app_my_events') }}\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Mes événements</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-dark text-decoration-none fw-semibold\">{{ event.title }}</a>
\t\t</div>
\t\t<a href=\"{{ path('app_service_request_create', { eventId: event.id }) }}\" class=\"btn btn-primary btn-sm\">
\t\t\t<i class=\"fa-solid fa-plus me-1\"></i>Nouvelle demande
\t\t</a>
\t</div>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h2 class=\"h5 fw-bold mb-0\"><i class=\"fa-solid fa-file-contract me-2\"></i>Demandes de service pour cet événement</h2>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t\t<th>Catégorie</th>
\t\t\t\t\t\t<th>Budget</th>
\t\t\t\t\t\t<th>Deadline</th>
\t\t\t\t\t\t<th>Propositions</th>
\t\t\t\t\t\t<th>Statut</th>
\t\t\t\t\t\t<th>Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for req in requests %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"fw-semibold\">{{ req.title }}</td>
\t\t\t\t\t\t<td><span class=\"badge bg-secondary\">{{ req.serviceType }}</span></td>
\t\t\t\t\t\t<td>{{ req.budgetMin|number_format(2) }} € — {{ req.budgetMax|number_format(2) }} €</td>
\t\t\t\t\t\t<td>{{ req.deadline|date('d/m/Y H:i') }}</td>
\t\t\t\t\t\t<td><span class=\"badge bg-primary\">{{ req.proposals|length }}</span></td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t{% set statusColors = { 'draft': 'bg-secondary', 'open': 'bg-success', 'closed': 'bg-warning text-dark', 'awarded': 'bg-info' } %}
\t\t\t\t\t\t\t{% set statusLabels = { 'draft': 'Brouillon', 'open': 'Ouvert', 'closed': 'Fermé', 'awarded': 'Attribué' } %}
\t\t\t\t\t\t\t<span class=\"badge {{ statusColors[req.status] ?? 'bg-secondary' }}\">{{ statusLabels[req.status] ?? req.status }}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"{{ path('app_service_request_show', { eventId: event.id, id: req.id }) }}\" class=\"btn btn-sm btn-outline-primary\">Voir</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\" class=\"text-center text-muted py-5\">
\t\t\t\t\t\t\t<p class=\"mb-2\">Aucune demande de service.</p>
\t\t\t\t\t\t\t<a href=\"{{ path('app_service_request_create', { eventId: event.id }) }}\" class=\"btn btn-primary btn-sm\">Créer une demande</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "service_request/index.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/service_request/index.html.twig");
    }
}

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

/* service_proposal/form.html.twig */
class __TwigTemplate_3f3c88df993df5882fed2ccec0029a4a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_proposal/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_proposal/form.html.twig"));

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

        yield "Soumettre une proposition - Eventify";
        
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

        yield "Soumettre une proposition";
        
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

        yield "Nouvelle proposition";
        
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
\t<p class=\"mb-3\"><a href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_proposal_index", ["requestId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        yield "\">&larr; Retour aux propositions</a></p>

\t<div class=\"alert alert-info border-0 shadow-sm\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<strong>Demande :</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), "html", null, true);
        yield "<br />
\t\t\t\t<strong>Budget :</strong> ";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 15, $this->source); })()), "budgetMin", [], "any", false, false, false, 15), 2), "html", null, true);
        yield " € — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 15, $this->source); })()), "budgetMax", [], "any", false, false, false, 15), 2), "html", null, true);
        yield " €<br />
\t\t\t\t<strong>Catégorie :</strong> ";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 16, $this->source); })()), "serviceType", [], "any", false, false, false, 16), "html", null, true);
        yield "<br />
\t\t\t\t<strong>Prestataire :</strong> ";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), "html", null, true);
        yield "
\t\t\t\t";
        // line 18
        $context["badgeColors"] = ["none" => "bg-secondary", "rising" => "bg-success", "certified" => "bg-info", "top_performer" => "bg-warning text-dark", "preferred_partner" => "bg-primary"];
        // line 19
        yield "\t\t\t\t<span class=\"badge ";
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["badgeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 19, $this->source); })()), "badge", [], "any", false, false, false, 19), [], "array", true, true, false, 19) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 19, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 19, $this->source); })()), "badge", [], "any", false, false, false, 19), [], "array", false, false, false, 19)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 19, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 19, $this->source); })()), "badge", [], "any", false, false, false, 19), [], "array", false, false, false, 19), "html", null, true)) : ("bg-secondary"));
        yield " ms-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 19, $this->source); })()), "badge", [], "any", false, false, false, 19), "html", null, true);
        yield "</span>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-md-end mt-2 mt-md-0\">
\t\t\t\t<div class=\"d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill\" style=\"background:linear-gradient(135deg,#6c63ff,#8b5cf6);color:#fff;font-size:13px;\">
\t\t\t\t\t<i class=\"fa-solid fa-robot\"></i>
\t\t\t\t\t<span><strong>IA active</strong> — votre proposition sera analysée automatiquement</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-body p-4\">
\t\t\t<h2 class=\"h5 fw-bold mb-4\">Votre proposition</h2>
\t\t\t";
        // line 33
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3", "novalidate" => "novalidate"]]);
        yield "
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "price", [], "any", false, false, false, 35), 'label');
        yield "
\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "price", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "price", [], "any", false, false, false, 37), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "proposedTeamSize", [], "any", false, false, false, 40), 'label');
        yield "
\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "proposedTeamSize", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "proposedTeamSize", [], "any", false, false, false, 42), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "estimatedDuration", [], "any", false, false, false, 45), 'label');
        yield "
\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "estimatedDuration", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "estimatedDuration", [], "any", false, false, false, 47), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), 'label');
        yield "
\t\t\t\t\t";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "description", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "description", [], "any", false, false, false, 52), 'errors');
        yield "
\t\t\t\t\t<div class=\"form-text d-flex align-items-center gap-1 mt-1\">
\t\t\t\t\t\t<i class=\"fa-solid fa-brain text-primary\"></i>
\t\t\t\t\t\t<span>Cette description sera analysée par l'IA (OpenRouter NLP) pour évaluer la pertinence de votre offre et générer un score de correspondance.</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 pt-2\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-paper-plane me-1\"></i>Soumettre &amp; lancer l'analyse IA</button>
\t\t\t\t\t<a href=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_proposal_index", ["requestId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">Annuler</a>
\t\t\t\t</div>
\t\t\t";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
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
        return "service_proposal/form.html.twig";
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
        return array (  270 => 62,  265 => 60,  254 => 52,  250 => 51,  246 => 50,  240 => 47,  236 => 46,  232 => 45,  226 => 42,  222 => 41,  218 => 40,  212 => 37,  208 => 36,  204 => 35,  199 => 33,  179 => 19,  177 => 18,  173 => 17,  169 => 16,  163 => 15,  159 => 14,  151 => 9,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Soumettre une proposition - Eventify{% endblock %}
{% block page_heading %}Soumettre une proposition{% endblock %}
{% block page_breadcrumb %}Nouvelle proposition{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t<p class=\"mb-3\"><a href=\"{{ path('app_service_proposal_index', { requestId: serviceRequest.id }) }}\">&larr; Retour aux propositions</a></p>

\t<div class=\"alert alert-info border-0 shadow-sm\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<strong>Demande :</strong> {{ serviceRequest.title }}<br />
\t\t\t\t<strong>Budget :</strong> {{ serviceRequest.budgetMin|number_format(2) }} € — {{ serviceRequest.budgetMax|number_format(2) }} €<br />
\t\t\t\t<strong>Catégorie :</strong> {{ serviceRequest.serviceType }}<br />
\t\t\t\t<strong>Prestataire :</strong> {{ provider.name }}
\t\t\t\t{% set badgeColors = { 'none': 'bg-secondary', 'rising': 'bg-success', 'certified': 'bg-info', 'top_performer': 'bg-warning text-dark', 'preferred_partner': 'bg-primary' } %}
\t\t\t\t<span class=\"badge {{ badgeColors[provider.badge] ?? 'bg-secondary' }} ms-1\">{{ provider.badge }}</span>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-md-end mt-2 mt-md-0\">
\t\t\t\t<div class=\"d-inline-flex align-items-center gap-2 px-3 py-2 rounded-pill\" style=\"background:linear-gradient(135deg,#6c63ff,#8b5cf6);color:#fff;font-size:13px;\">
\t\t\t\t\t<i class=\"fa-solid fa-robot\"></i>
\t\t\t\t\t<span><strong>IA active</strong> — votre proposition sera analysée automatiquement</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-body p-4\">
\t\t\t<h2 class=\"h5 fw-bold mb-4\">Votre proposition</h2>
\t\t\t{{ form_start(form, { attr: { class: 'row g-3', novalidate: 'novalidate' } }) }}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.price) }}
\t\t\t\t\t{{ form_widget(form.price, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t{{ form_errors(form.price) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.proposedTeamSize) }}
\t\t\t\t\t{{ form_widget(form.proposedTeamSize, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t{{ form_errors(form.proposedTeamSize) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.estimatedDuration) }}
\t\t\t\t\t{{ form_widget(form.estimatedDuration, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t{{ form_errors(form.estimatedDuration) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t{{ form_label(form.description) }}
\t\t\t\t\t{{ form_widget(form.description, { attr: { class: 'form-control', rows: 5 } }) }}
\t\t\t\t\t{{ form_errors(form.description) }}
\t\t\t\t\t<div class=\"form-text d-flex align-items-center gap-1 mt-1\">
\t\t\t\t\t\t<i class=\"fa-solid fa-brain text-primary\"></i>
\t\t\t\t\t\t<span>Cette description sera analysée par l'IA (OpenRouter NLP) pour évaluer la pertinence de votre offre et générer un score de correspondance.</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 pt-2\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\"><i class=\"fa-solid fa-paper-plane me-1\"></i>Soumettre &amp; lancer l'analyse IA</button>
\t\t\t\t\t<a href=\"{{ path('app_service_proposal_index', { requestId: serviceRequest.id }) }}\" class=\"btn btn-outline-secondary\">Annuler</a>
\t\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
</div>
{% endblock %}
", "service_proposal/form.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\service_proposal\\form.html.twig");
    }
}

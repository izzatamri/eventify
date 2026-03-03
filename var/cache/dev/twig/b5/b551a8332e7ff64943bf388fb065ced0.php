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

/* admin/service_provider/form.html.twig */
class __TwigTemplate_3b9bcfc84262a245dca3525e2aea10af extends Template
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
        return "admin/layout_velzon.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service_provider/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service_provider/form.html.twig"));

        $this->parent = $this->load("admin/layout_velzon.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        
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

        // line 6
        yield "\t<li class=\"breadcrumb-item\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\">Service providers</a></li>
\t<li class=\"breadcrumb-item active\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.5rem;\">
\t\t\t<h3 class=\"fw-bold mb-4\" style=\"font-size: 20px;\">";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</h3>
\t\t\t";
        // line 14
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3", "novalidate" => "novalidate"]]);
        yield "
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "name", [], "any", false, false, false, 17), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "name", [], "any", false, false, false, 18), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "email", [], "any", false, false, false, 21), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "email", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "email", [], "any", false, false, false, 23), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "phone", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "phone", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "phone", [], "any", false, false, false, 28), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "serviceType", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "serviceType", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "form-select", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "serviceType", [], "any", false, false, false, 33), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "hourlyRate", [], "any", false, false, false, 36), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "hourlyRate", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "hourlyRate", [], "any", false, false, false, 38), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "form-select", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 pt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\">
\t\t\t\t\t\t<i class=\"ri-save-line me-1\"></i>Save
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
        // line 49
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem;\">Cancel</a>
\t\t\t\t</div>
\t\t\t";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        yield "
\t\t</div>
\t</div>
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
        return "admin/service_provider/form.html.twig";
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
        return array (  261 => 51,  256 => 49,  247 => 43,  243 => 42,  239 => 41,  233 => 38,  229 => 37,  225 => 36,  219 => 33,  215 => 32,  211 => 31,  205 => 28,  201 => 27,  197 => 26,  191 => 23,  187 => 22,  183 => 21,  177 => 18,  173 => 17,  169 => 16,  164 => 14,  160 => 13,  156 => 11,  143 => 10,  130 => 7,  125 => 6,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout_velzon.html.twig' %}

{% block title %}{{ title }}{% endblock %}
{% block page_heading %}{{ title }}{% endblock %}
{% block page_breadcrumb %}
\t<li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_service_provider_index') }}\">Service providers</a></li>
\t<li class=\"breadcrumb-item active\">{{ title }}</li>
{% endblock %}

{% block content %}
\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.5rem;\">
\t\t\t<h3 class=\"fw-bold mb-4\" style=\"font-size: 20px;\">{{ title }}</h3>
\t\t\t{{ form_start(form, { attr: { class: 'row g-3', novalidate: 'novalidate' } }) }}
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.name, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.name, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.email, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.email, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.phone, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.phone, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.phone) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.serviceType, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.serviceType, { attr: { class: 'form-select', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.serviceType) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.hourlyRate, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.hourlyRate, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.hourlyRate) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.status, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.status, { attr: { class: 'form-select', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.status) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 pt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\">
\t\t\t\t\t\t<i class=\"ri-save-line me-1\"></i>Save
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"{{ path('app_admin_service_provider_index') }}\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem;\">Cancel</a>
\t\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
{% endblock %}
", "admin/service_provider/form.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\admin\\service_provider\\form.html.twig");
    }
}

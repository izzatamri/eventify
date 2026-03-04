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

/* service_catalog/catalog.html.twig */
class __TwigTemplate_624e93fadbd71e6979f4d6cdc066129b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_catalog/catalog.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_catalog/catalog.html.twig"));

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

        yield "Browse services - Eventify";
        
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

        yield "Browse services";
        
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
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a> / Browse services";
        
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
        yield "<div class=\"container py-5\">
\t";
        // line 10
        yield "\t<div class=\"section-header mb-4\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">Service Providers</h2>
    // TODO: Add error handling
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">Browse and discover professional service providers for your events</p>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 21
        yield "\t<div class=\"alert alert-info border-0 mb-4\" style=\"background: #e7f3ff; border-radius: 10px;\">
\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>
\t\t<strong>How it works:</strong> To book a service for your event, go to your event's management page and use the <strong>Service bookings</strong> section.
\t</div>

\t";
        // line 27
        yield "\t<div class=\"events-toolbar mb-5\">
\t\t<div class=\"row align-items-center g-3\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<label for=\"search-services\" class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-search me-2\"></i>Search Services</label>
\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t<span class=\"input-group-text bg-white\"><i class=\"fa-solid fa-magnifying-glass text-muted\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search by provider name, type, or location...\" id=\"search-services\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-filter me-2\"></i>Service Type</label>
\t\t\t\t<select class=\"form-select form-select-lg\" id=\"filter-type\">
\t\t\t\t\t<option value=\"\">All Types</option>
\t\t\t\t\t<option value=\"catering\">Catering</option>
\t\t\t\t\t<option value=\"photography\">Photography</option>
\t\t\t\t\t<option value=\"venue\">Venue</option>
\t\t\t\t\t<option value=\"audio-visual\">Audio/Visual</option>
\t\t\t\t\t<option value=\"decoration\">Decoration</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-arrow-down-short-wide me-2\"></i>Sort By</label>
\t\t\t\t<select class=\"form-select form-select-lg\" id=\"sort-services\">
\t\t\t\t\t<option value=\"name\">Name (A-Z)</option>
\t\t\t\t\t<option value=\"rate-asc\">Price (Low to High)</option>
\t\t\t\t\t<option value=\"rate-desc\">Price (High to Low)</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row g-4\" id=\"services-container\">
\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 59, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 60
            yield "\t\t<div class=\"col-md-6 col-lg-4 service-card\" data-name=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 60)), "html", null, true);
            yield "\" data-type=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "serviceType", [], "any", false, false, false, 60)), "html", null, true);
            yield "\">
\t\t\t<div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.15)';\" onmouseout=\"this.style.transform=''; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-3\">
\t\t\t\t\t\t<span class=\"badge\" style=\"background: #0d6efd; padding: 6px 12px; font-size: 12px; font-weight: 600; text-transform: capitalize;\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "serviceType", [], "any", false, false, false, 64), "html", null, true);
            yield "</span>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<div style=\"font-size: 24px; font-weight: 700; color: #0d6efd; line-height: 1;\">\$";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "hourlyRate", [], "any", false, false, false, 66), 0), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t<small class=\"text-muted\">per hour</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"h5 fw-bold mb-3\" style=\"color: #333;\">";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 70), "html", null, true);
            yield "</h3>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<p class=\"small text-muted mb-2\"><i class=\"fa-solid fa-envelope me-2\" style=\"color: #0d6efd; width: 16px;\"></i>";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "email", [], "any", false, false, false, 72), "html", null, true);
            yield "</p>
\t\t\t\t\t\t<p class=\"small text-muted mb-0\"><i class=\"fa-solid fa-phone me-2\" style=\"color: #0d6efd; width: 16px;\"></i>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "phone", [], "any", false, false, false, 73), "html", null, true);
            yield "</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-grid mt-auto\">
\t\t\t\t\t\t<button class=\"btn btn-outline-primary\" disabled>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>Book via Event Page
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            $context['_iterated'] = true;
        }
        // line 83
        if (!$context['_iterated']) {
            // line 84
            yield "\t\t<div class=\"col-12\">
\t\t\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body text-center\" style=\"padding: 80px 20px;\">
\t\t\t\t\t<i class=\"fa-solid fa-briefcase\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t\t\t<h4 style=\"color: #6c757d; margin-bottom: 10px;\">No Service Providers Available</h4>
\t\t\t\t\t<p class=\"text-muted mb-0\">Check back later as we add more service providers to our platform.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['provider'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        yield "\t</div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 98
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

        // line 99
        yield from $this->yieldParentBlock("page_scripts", $context, $blocks);
        yield "
<script>
document.addEventListener('DOMContentLoaded', function() {
\tvar searchInput = document.getElementById('search-services');
\tvar filterType = document.getElementById('filter-type');
\tvar sortSelect = document.getElementById('sort-services');
\tvar cards = document.querySelectorAll('.service-card');
\t
\tfunction filterAndSort() {
\t\tvar searchTerm = searchInput.value.toLowerCase();
\t\tvar selectedType = filterType.value.toLowerCase();
\t\tvar visibleCards = [];
\t\t
\t\tcards.forEach(function(card) {
\t\t\tvar name = card.getAttribute('data-name') || '';
\t\t\tvar type = card.getAttribute('data-type') || '';
\t\t\tvar matchesSearch = searchTerm === '' || name.includes(searchTerm) || type.includes(searchTerm);
\t\t\tvar matchesType = selectedType === '' || type === selectedType;
\t\t\t
\t\t\tif (matchesSearch && matchesType) {
\t\t\t\tcard.style.display = '';
\t\t\t\tvisibleCards.push(card);
\t\t\t} else {
\t\t\t\tcard.style.display = 'none';
\t\t\t}
\t\t});
\t\t
\t\t// Simple sorting (note: would need more complex logic for actual price sorting)
\t\tvar sortValue = sortSelect.value;
\t\tif (sortValue === 'name') {
\t\t\tvisibleCards.sort(function(a, b) {
\t\t\t\treturn a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
\t\t\t});
\t\t}
\t\t
\t\t// Re-append in sorted order
\t\tvar container = document.getElementById('services-container');
\t\tvisibleCards.forEach(function(card) {
\t\t\tcontainer.appendChild(card);
\t\t});
\t}
\t
\tif (searchInput) searchInput.addEventListener('input', filterAndSort);
\tif (filterType) filterType.addEventListener('change', filterAndSort);
\tif (sortSelect) sortSelect.addEventListener('change', filterAndSort);

// TODO: Add logging
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
        return "service_catalog/catalog.html.twig";
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
        return array (  301 => 99,  288 => 98,  275 => 94,  260 => 84,  258 => 83,  243 => 73,  239 => 72,  234 => 70,  227 => 66,  222 => 64,  212 => 60,  207 => 59,  173 => 27,  166 => 21,  154 => 10,  151 => 8,  138 => 7,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Browse services - Eventify{% endblock %}
{% block page_heading %}Browse services{% endblock %}
{% block page_breadcrumb %}<a href=\"{{ path('app_home') }}\">Home</a> / Browse services{% endblock %}

{% block content %}
<div class=\"container py-5\">
\t{# Page Header #}
\t<div class=\"section-header mb-4\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">Service Providers</h2>
    // TODO: Add error handling
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">Browse and discover professional service providers for your events</p>
\t\t\t</div>
\t\t</div>
\t</div>

\t{# Info Banner #}
\t<div class=\"alert alert-info border-0 mb-4\" style=\"background: #e7f3ff; border-radius: 10px;\">
\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>
\t\t<strong>How it works:</strong> To book a service for your event, go to your event's management page and use the <strong>Service bookings</strong> section.
\t</div>

\t{# Search Toolbar #}
\t<div class=\"events-toolbar mb-5\">
\t\t<div class=\"row align-items-center g-3\">
\t\t\t<div class=\"col-lg-6\">
\t\t\t\t<label for=\"search-services\" class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-search me-2\"></i>Search Services</label>
\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t<span class=\"input-group-text bg-white\"><i class=\"fa-solid fa-magnifying-glass text-muted\"></i></span>
\t\t\t\t\t<input type=\"text\" class=\"form-control\" placeholder=\"Search by provider name, type, or location...\" id=\"search-services\" />
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-filter me-2\"></i>Service Type</label>
\t\t\t\t<select class=\"form-select form-select-lg\" id=\"filter-type\">
\t\t\t\t\t<option value=\"\">All Types</option>
\t\t\t\t\t<option value=\"catering\">Catering</option>
\t\t\t\t\t<option value=\"photography\">Photography</option>
\t\t\t\t\t<option value=\"venue\">Venue</option>
\t\t\t\t\t<option value=\"audio-visual\">Audio/Visual</option>
\t\t\t\t\t<option value=\"decoration\">Decoration</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t\t<div class=\"col-lg-3\">
\t\t\t\t<label class=\"form-label fw-semibold mb-2\"><i class=\"fa-solid fa-arrow-down-short-wide me-2\"></i>Sort By</label>
\t\t\t\t<select class=\"form-select form-select-lg\" id=\"sort-services\">
\t\t\t\t\t<option value=\"name\">Name (A-Z)</option>
\t\t\t\t\t<option value=\"rate-asc\">Price (Low to High)</option>
\t\t\t\t\t<option value=\"rate-desc\">Price (High to Low)</option>
\t\t\t\t</select>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row g-4\" id=\"services-container\">
\t\t{% for provider in providers %}
\t\t<div class=\"col-md-6 col-lg-4 service-card\" data-name=\"{{ provider.name|lower }}\" data-type=\"{{ provider.serviceType|lower }}\">
\t\t\t<div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 30px rgba(0,0,0,0.15)';\" onmouseout=\"this.style.transform=''; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-3\">
\t\t\t\t\t\t<span class=\"badge\" style=\"background: #0d6efd; padding: 6px 12px; font-size: 12px; font-weight: 600; text-transform: capitalize;\">{{ provider.serviceType }}</span>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<div style=\"font-size: 24px; font-weight: 700; color: #0d6efd; line-height: 1;\">\${{ provider.hourlyRate|number_format(0) }}</div>
\t\t\t\t\t\t\t<small class=\"text-muted\">per hour</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"h5 fw-bold mb-3\" style=\"color: #333;\">{{ provider.name }}</h3>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<p class=\"small text-muted mb-2\"><i class=\"fa-solid fa-envelope me-2\" style=\"color: #0d6efd; width: 16px;\"></i>{{ provider.email }}</p>
\t\t\t\t\t\t<p class=\"small text-muted mb-0\"><i class=\"fa-solid fa-phone me-2\" style=\"color: #0d6efd; width: 16px;\"></i>{{ provider.phone }}</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-grid mt-auto\">
\t\t\t\t\t\t<button class=\"btn btn-outline-primary\" disabled>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>Book via Event Page
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% else %}
\t\t<div class=\"col-12\">
\t\t\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body text-center\" style=\"padding: 80px 20px;\">
\t\t\t\t\t<i class=\"fa-solid fa-briefcase\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t\t\t<h4 style=\"color: #6c757d; margin-bottom: 10px;\">No Service Providers Available</h4>
\t\t\t\t\t<p class=\"text-muted mb-0\">Check back later as we add more service providers to our platform.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
</div>
{% endblock %}

{% block page_scripts %}
{{ parent() }}
<script>
document.addEventListener('DOMContentLoaded', function() {
\tvar searchInput = document.getElementById('search-services');
\tvar filterType = document.getElementById('filter-type');
\tvar sortSelect = document.getElementById('sort-services');
\tvar cards = document.querySelectorAll('.service-card');
\t
\tfunction filterAndSort() {
\t\tvar searchTerm = searchInput.value.toLowerCase();
\t\tvar selectedType = filterType.value.toLowerCase();
\t\tvar visibleCards = [];
\t\t
\t\tcards.forEach(function(card) {
\t\t\tvar name = card.getAttribute('data-name') || '';
\t\t\tvar type = card.getAttribute('data-type') || '';
\t\t\tvar matchesSearch = searchTerm === '' || name.includes(searchTerm) || type.includes(searchTerm);
\t\t\tvar matchesType = selectedType === '' || type === selectedType;
\t\t\t
\t\t\tif (matchesSearch && matchesType) {
\t\t\t\tcard.style.display = '';
\t\t\t\tvisibleCards.push(card);
\t\t\t} else {
\t\t\t\tcard.style.display = 'none';
\t\t\t}
\t\t});
\t\t
\t\t// Simple sorting (note: would need more complex logic for actual price sorting)
\t\tvar sortValue = sortSelect.value;
\t\tif (sortValue === 'name') {
\t\t\tvisibleCards.sort(function(a, b) {
\t\t\t\treturn a.getAttribute('data-name').localeCompare(b.getAttribute('data-name'));
\t\t\t});
\t\t}
\t\t
\t\t// Re-append in sorted order
\t\tvar container = document.getElementById('services-container');
\t\tvisibleCards.forEach(function(card) {
\t\t\tcontainer.appendChild(card);
\t\t});
\t}
\t
\tif (searchInput) searchInput.addEventListener('input', filterAndSort);
\tif (filterType) filterType.addEventListener('change', filterAndSort);
\tif (sortSelect) sortSelect.addEventListener('change', filterAndSort);

// TODO: Add logging
});
</script>
{% endblock %}
", "service_catalog/catalog.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/service_catalog/catalog.html.twig");
    }
}

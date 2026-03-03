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

/* admin/service_provider/index.html.twig */
class __TwigTemplate_b2ab32706708d1872f9f707109d28f49 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service_provider/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service_provider/index.html.twig"));

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

        yield "Service providers";
        
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

        yield "Service providers";
        
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

        yield "<li class=\"breadcrumb-item active\">Service providers</li>";
        
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
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\"mb-0 fw-bold\" style=\"font-size: 20px;\">Service Providers Catalog</h3>
\t\t<a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_create");
        yield "\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.25rem; font-weight: 600;\">
\t\t\t<i class=\"ri-add-line me-1\"></i>New Provider
\t\t</a>
\t</div>

\t";
        // line 23
        yield "\t<form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"card mb-4\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.25rem;\">
\t\t\t<div class=\"row g-3 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Search</label>
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Name, email, phone…\" value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 28, $this->source); })()), "html", null, true);
        yield "\" style=\"min-width: 200px; border-radius: 8px; padding: 0.5rem 0.75rem;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Service type</label>
\t\t\t\t\t<select name=\"service_type\" class=\"form-select\" style=\"min-width: 150px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"Catering\" ";
        // line 34
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 34, $this->source); })()) == "Catering")) ? ("selected") : (""));
        yield ">Catering</option>
\t\t\t\t\t\t<option value=\"Security\" ";
        // line 35
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 35, $this->source); })()) == "Security")) ? ("selected") : (""));
        yield ">Security</option>
\t\t\t\t\t\t<option value=\"Photography\" ";
        // line 36
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 36, $this->source); })()) == "Photography")) ? ("selected") : (""));
        yield ">Photography</option>
\t\t\t\t\t\t<option value=\"Videography\" ";
        // line 37
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 37, $this->source); })()) == "Videography")) ? ("selected") : (""));
        yield ">Videography</option>
\t\t\t\t\t\t<option value=\"Decoration\" ";
        // line 38
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 38, $this->source); })()) == "Decoration")) ? ("selected") : (""));
        yield ">Decoration</option>
\t\t\t\t\t\t<option value=\"Entertainment\" ";
        // line 39
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 39, $this->source); })()) == "Entertainment")) ? ("selected") : (""));
        yield ">Entertainment</option>
\t\t\t\t\t\t<option value=\"Transportation\" ";
        // line 40
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 40, $this->source); })()) == "Transportation")) ? ("selected") : (""));
        yield ">Transportation</option>
\t\t\t\t\t\t<option value=\"Other\" ";
        // line 41
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 41, $this->source); })()) == "Other")) ? ("selected") : (""));
        yield ">Other</option>

     // TODO: Add validation
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Status</label>
\t\t\t\t\t<select name=\"status\" class=\"form-select\" style=\"min-width: 120px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"active\" ";
        // line 50
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 50, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Active</option>
\t\t\t\t\t\t<option value=\"inactive\" ";
        // line 51
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 51, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactive</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select\" style=\"min-width: 150px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"name\" ";
        // line 57
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 57, $this->source); })()) == "name")) ? ("selected") : (""));
        yield ">Name</option>
\t\t\t\t\t\t<option value=\"email\" ";
        // line 58
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 58, $this->source); })()) == "email")) ? ("selected") : (""));
        yield ">Email</option>
\t\t\t\t\t\t<option value=\"serviceType\" ";
        // line 59
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 59, $this->source); })()) == "serviceType")) ? ("selected") : (""));
        yield ">Service type</option>
\t\t\t\t\t\t<option value=\"hourlyRate\" ";
        // line 60
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 60, $this->source); })()) == "hourlyRate")) ? ("selected") : (""));
        yield ">Hourly rate</option>
\t\t\t\t\t\t<option value=\"status\" ";
        // line 61
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 61, $this->source); })()) == "status")) ? ("selected") : (""));
        yield ">Status</option>
\t\t\t\t\t\t<option value=\"createdAt\" ";
        // line 62
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 62, $this->source); })()) == "createdAt")) ? ("selected") : (""));
        yield ">Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select\" style=\"min-width: 110px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"asc\" ";
        // line 68
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 68, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Asc</option>
\t\t\t\t\t\t<option value=\"desc\" ";
        // line 69
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 69, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1rem; font-weight: 600;\"><i class=\"ri-search-line me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1rem;\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04); overflow: hidden;\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead style=\"background: #f8f9fa;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Name</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Email</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Phone</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Service type</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Hourly rate</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Status</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 95
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 95, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
            // line 96
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px; font-weight: 500;\">";
            // line 97
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 97), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px;\">";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "email", [], "any", false, false, false, 98), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px;\">";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "phone", [], "any", false, false, false, 99), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td style=\"padding: 1rem;\"><span class=\"badge bg-primary\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "serviceType", [], "any", false, false, false, 100), "html", null, true);
            yield "</span></td>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px; font-weight: 600;\">\$";
            // line 101
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "hourlyRate", [], "any", false, false, false, 101), 2), "html", null, true);
            yield "</td>
\t\t\t\t\t\t<td style=\"padding: 1rem;\">
\t\t\t\t\t\t\t";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "status", [], "any", false, false, false, 103) == "active")) {
                // line 104
                yield "\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Active</span>
\t\t\t\t\t\t\t";
            } else {
                // line 106
                yield "\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Inactive</span>
\t\t\t\t\t\t\t";
            }
            // line 108
            yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding: 1rem;\">
\t\t\t\t\t\t\t<a href=\"";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 110)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-primary me-1\" style=\"border-radius: 6px; padding: 0.35rem 0.75rem; font-size: 12px;\">Edit</a>
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Delete this service provider?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("service_provider_delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 112))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.75rem; font-size: 12px;\">Delete</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 117
        if (!$context['_iterated']) {
            // line 118
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\" class=\"text-center text-muted py-5\" style=\"font-size: 14px;\">No service providers yet. <a href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_create");
            yield "\" class=\"fw-semibold\">Create one</a>.</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['provider'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        yield "\t\t\t\t</tbody>
\t\t\t</table>
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
        return "admin/service_provider/index.html.twig";
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
        return array (  400 => 122,  391 => 119,  388 => 118,  386 => 117,  376 => 112,  372 => 111,  368 => 110,  364 => 108,  360 => 106,  356 => 104,  354 => 103,  349 => 101,  345 => 100,  341 => 99,  337 => 98,  333 => 97,  330 => 96,  325 => 95,  301 => 74,  293 => 69,  289 => 68,  280 => 62,  276 => 61,  272 => 60,  268 => 59,  264 => 58,  260 => 57,  251 => 51,  247 => 50,  235 => 41,  231 => 40,  227 => 39,  223 => 38,  219 => 37,  215 => 36,  211 => 35,  207 => 34,  198 => 28,  189 => 23,  181 => 17,  176 => 14,  167 => 12,  162 => 11,  153 => 9,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout_velzon.html.twig' %}

{% block title %}Service providers{% endblock %}
{% block page_heading %}Service providers{% endblock %}
{% block page_breadcrumb %}<li class=\"breadcrumb-item active\">Service providers</li>{% endblock %}

{% block content %}
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}

\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\"mb-0 fw-bold\" style=\"font-size: 20px;\">Service Providers Catalog</h3>
\t\t<a href=\"{{ path('app_admin_service_provider_create') }}\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.25rem; font-weight: 600;\">
\t\t\t<i class=\"ri-add-line me-1\"></i>New Provider
\t\t</a>
\t</div>

\t{# Sort & search (multi-criteria) #}
\t<form method=\"get\" action=\"{{ path('app_admin_service_provider_index') }}\" class=\"card mb-4\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.25rem;\">
\t\t\t<div class=\"row g-3 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Search</label>
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Name, email, phone…\" value=\"{{ search }}\" style=\"min-width: 200px; border-radius: 8px; padding: 0.5rem 0.75rem;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Service type</label>
\t\t\t\t\t<select name=\"service_type\" class=\"form-select\" style=\"min-width: 150px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"Catering\" {{ filterServiceType == 'Catering' ? 'selected' : '' }}>Catering</option>
\t\t\t\t\t\t<option value=\"Security\" {{ filterServiceType == 'Security' ? 'selected' : '' }}>Security</option>
\t\t\t\t\t\t<option value=\"Photography\" {{ filterServiceType == 'Photography' ? 'selected' : '' }}>Photography</option>
\t\t\t\t\t\t<option value=\"Videography\" {{ filterServiceType == 'Videography' ? 'selected' : '' }}>Videography</option>
\t\t\t\t\t\t<option value=\"Decoration\" {{ filterServiceType == 'Decoration' ? 'selected' : '' }}>Decoration</option>
\t\t\t\t\t\t<option value=\"Entertainment\" {{ filterServiceType == 'Entertainment' ? 'selected' : '' }}>Entertainment</option>
\t\t\t\t\t\t<option value=\"Transportation\" {{ filterServiceType == 'Transportation' ? 'selected' : '' }}>Transportation</option>
\t\t\t\t\t\t<option value=\"Other\" {{ filterServiceType == 'Other' ? 'selected' : '' }}>Other</option>

     // TODO: Add validation
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Status</label>
\t\t\t\t\t<select name=\"status\" class=\"form-select\" style=\"min-width: 120px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"active\" {{ filterStatus == 'active' ? 'selected' : '' }}>Active</option>
\t\t\t\t\t\t<option value=\"inactive\" {{ filterStatus == 'inactive' ? 'selected' : '' }}>Inactive</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select\" style=\"min-width: 150px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"name\" {{ sortBy == 'name' ? 'selected' : '' }}>Name</option>
\t\t\t\t\t\t<option value=\"email\" {{ sortBy == 'email' ? 'selected' : '' }}>Email</option>
\t\t\t\t\t\t<option value=\"serviceType\" {{ sortBy == 'serviceType' ? 'selected' : '' }}>Service type</option>
\t\t\t\t\t\t<option value=\"hourlyRate\" {{ sortBy == 'hourlyRate' ? 'selected' : '' }}>Hourly rate</option>
\t\t\t\t\t\t<option value=\"status\" {{ sortBy == 'status' ? 'selected' : '' }}>Status</option>
\t\t\t\t\t\t<option value=\"createdAt\" {{ sortBy == 'createdAt' ? 'selected' : '' }}>Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select\" style=\"min-width: 110px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"asc\" {{ sortOrder == 'asc' ? 'selected' : '' }}>Asc</option>
\t\t\t\t\t\t<option value=\"desc\" {{ sortOrder == 'desc' ? 'selected' : '' }}>Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1rem; font-weight: 600;\"><i class=\"ri-search-line me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"{{ path('app_admin_service_provider_index') }}\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1rem;\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04); overflow: hidden;\">
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead style=\"background: #f8f9fa;\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Name</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Email</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Phone</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Service type</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Hourly rate</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Status</th>
\t\t\t\t\t\t<th style=\"padding: 1rem; font-size: 13px; font-weight: 600;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for provider in providers %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px; font-weight: 500;\">{{ provider.name }}</td>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px;\">{{ provider.email }}</td>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px;\">{{ provider.phone }}</td>
\t\t\t\t\t\t<td style=\"padding: 1rem;\"><span class=\"badge bg-primary\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">{{ provider.serviceType }}</span></td>
\t\t\t\t\t\t<td style=\"padding: 1rem; font-size: 14px; font-weight: 600;\">\${{ provider.hourlyRate|number_format(2) }}</td>
\t\t\t\t\t\t<td style=\"padding: 1rem;\">
\t\t\t\t\t\t\t{% if provider.status == 'active' %}
\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Active</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Inactive</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"padding: 1rem;\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_admin_service_provider_edit', { id: provider.id }) }}\" class=\"btn btn-sm btn-primary me-1\" style=\"border-radius: 6px; padding: 0.35rem 0.75rem; font-size: 12px;\">Edit</a>
\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_admin_service_provider_delete', { id: provider.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Delete this service provider?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('service_provider_delete_' ~ provider.id) }}\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.75rem; font-size: 12px;\">Delete</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"7\" class=\"text-center text-muted py-5\" style=\"font-size: 14px;\">No service providers yet. <a href=\"{{ path('app_admin_service_provider_create') }}\" class=\"fw-semibold\">Create one</a>.</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
{% endblock %}
", "admin/service_provider/index.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\admin\\service_provider\\index.html.twig");
    }
}

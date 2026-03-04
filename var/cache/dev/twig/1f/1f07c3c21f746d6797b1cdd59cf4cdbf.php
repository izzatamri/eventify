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
class __TwigTemplate_a67e8931d9810a4c62116fa28e18187b extends Template
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
        yield "<style>
\t.bg-purple { background-color: #6c63ff !important; color: #fff; }
\t.provider-card { transition: box-shadow 0.2s; border-radius: 12px; }
\t.provider-card:hover { box-shadow: 0 4px 20px rgba(0,0,0,0.08) !important; }
\t.score-mini { font-size: 1.4rem; font-weight: 800; color: #6c63ff; }
</style>

\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["success"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["error"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        yield "
\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\"mb-0 fw-bold\" style=\"font-size: 20px;\">Service Providers Catalog</h3>
\t\t<a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_create");
        yield "\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.25rem; font-weight: 600;\">
\t\t\t<i class=\"ri-add-line me-1\"></i>New Provider
\t\t</a>
\t</div>

\t";
        // line 30
        yield "\t<form method=\"get\" action=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"card mb-4\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.25rem;\">
\t\t\t<div class=\"row g-3 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Search</label>
\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"Name, email, phone…\" value=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["search"]) || array_key_exists("search", $context) ? $context["search"] : (function () { throw new RuntimeError('Variable "search" does not exist.', 35, $this->source); })()), "html", null, true);
        yield "\" style=\"min-width: 200px; border-radius: 8px; padding: 0.5rem 0.75rem;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Service type</label>
\t\t\t\t\t<select name=\"service_type\" class=\"form-select\" style=\"min-width: 150px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"Catering\" ";
        // line 41
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 41, $this->source); })()) == "Catering")) ? ("selected") : (""));
        yield ">Catering</option>
\t\t\t\t\t\t<option value=\"Security\" ";
        // line 42
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 42, $this->source); })()) == "Security")) ? ("selected") : (""));
        yield ">Security</option>
\t\t\t\t\t\t<option value=\"Photography\" ";
        // line 43
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 43, $this->source); })()) == "Photography")) ? ("selected") : (""));
        yield ">Photography</option>
\t\t\t\t\t\t<option value=\"Videography\" ";
        // line 44
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 44, $this->source); })()) == "Videography")) ? ("selected") : (""));
        yield ">Videography</option>
\t\t\t\t\t\t<option value=\"Decoration\" ";
        // line 45
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 45, $this->source); })()) == "Decoration")) ? ("selected") : (""));
        yield ">Decoration</option>
\t\t\t\t\t\t<option value=\"Entertainment\" ";
        // line 46
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 46, $this->source); })()) == "Entertainment")) ? ("selected") : (""));
        yield ">Entertainment</option>
\t\t\t\t\t\t<option value=\"Transportation\" ";
        // line 47
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 47, $this->source); })()) == "Transportation")) ? ("selected") : (""));
        yield ">Transportation</option>
\t\t\t\t\t\t<option value=\"Other\" ";
        // line 48
        yield ((((isset($context["filterServiceType"]) || array_key_exists("filterServiceType", $context) ? $context["filterServiceType"] : (function () { throw new RuntimeError('Variable "filterServiceType" does not exist.', 48, $this->source); })()) == "Other")) ? ("selected") : (""));
        yield ">Other</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Status</label>
\t\t\t\t\t<select name=\"status\" class=\"form-select\" style=\"min-width: 120px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"active\" ";
        // line 55
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 55, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Active</option>
\t\t\t\t\t\t<option value=\"inactive\" ";
        // line 56
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 56, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactive</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select\" style=\"min-width: 150px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"name\" ";
        // line 62
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 62, $this->source); })()) == "name")) ? ("selected") : (""));
        yield ">Name</option>
\t\t\t\t\t\t<option value=\"email\" ";
        // line 63
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 63, $this->source); })()) == "email")) ? ("selected") : (""));
        yield ">Email</option>
\t\t\t\t\t\t<option value=\"serviceType\" ";
        // line 64
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 64, $this->source); })()) == "serviceType")) ? ("selected") : (""));
        yield ">Service type</option>
\t\t\t\t\t\t<option value=\"hourlyRate\" ";
        // line 65
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 65, $this->source); })()) == "hourlyRate")) ? ("selected") : (""));
        yield ">Hourly rate</option>
\t\t\t\t\t\t<option value=\"score\" ";
        // line 66
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 66, $this->source); })()) == "score")) ? ("selected") : (""));
        yield ">Score</option>
\t\t\t\t\t\t<option value=\"status\" ";
        // line 67
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 67, $this->source); })()) == "status")) ? ("selected") : (""));
        yield ">Status</option>
\t\t\t\t\t\t<option value=\"createdAt\" ";
        // line 68
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 68, $this->source); })()) == "createdAt")) ? ("selected") : (""));
        yield ">Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label mb-1 fw-semibold\" style=\"font-size: 12px;\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select\" style=\"min-width: 110px; border-radius: 8px; padding: 0.5rem 0.75rem;\">
\t\t\t\t\t\t<option value=\"asc\" ";
        // line 74
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 74, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Asc</option>
\t\t\t\t\t\t<option value=\"desc\" ";
        // line 75
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 75, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1rem; font-weight: 600;\"><i class=\"ri-search-line me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1rem;\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 87
        yield "\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 87, $this->source); })())) > 0)) {
            // line 88
            yield "\t<div class=\"row g-3\">
\t\t";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 89, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["provider"]) {
                // line 90
                yield "\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t<div class=\"card border-0 shadow-sm provider-card h-100\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t";
                // line 94
                yield "\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-2\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6 class=\"fw-bold mb-1\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provider_dashboard", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"text-decoration-none text-dark\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 97), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<span class=\"badge bg-primary\" style=\"font-size:10px;\">";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "serviceType", [], "any", false, false, false, 99), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t";
                // line 100
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "status", [], "any", false, false, false, 100) == "active")) {
                    // line 101
                    yield "\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"font-size:10px;\">Active</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 103
                    yield "\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\" style=\"font-size:10px;\">Inactive</span>
\t\t\t\t\t\t\t";
                }
                // line 105
                yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<div class=\"score-mini\">";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "score", [], "any", false, false, false, 107), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t<small class=\"text-muted\">/100</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
                // line 113
                yield "\t\t\t\t\t<div class=\"small text-muted mb-2\">
\t\t\t\t\t\t<i class=\"ri-mail-line me-1\"></i>";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "email", [], "any", false, false, false, 114), "html", null, true);
                yield "
\t\t\t\t\t\t<span class=\"mx-1\">·</span>
\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line me-1\"></i>";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "hourlyRate", [], "any", false, false, false, 116), 2), "html", null, true);
                yield " €/h
\t\t\t\t\t</div>

\t\t\t\t\t";
                // line 120
                yield "\t\t\t\t\t<div class=\"d-flex gap-1 flex-wrap mb-3\">
\t\t\t\t\t\t";
                // line 121
                $context["badgeColors"] = ["none" => "bg-secondary", "rising" => "bg-success", "certified" => "bg-info", "top_performer" => "bg-warning text-dark", "preferred_partner" => "bg-purple"];
                // line 122
                yield "\t\t\t\t\t\t";
                $context["badgeLabels"] = ["none" => "Aucun", "rising" => "En progression", "certified" => "Certifié", "top_performer" => "Top Performer", "preferred_partner" => "Partenaire"];
                // line 123
                yield "\t\t\t\t\t\t<span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["badgeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "badge", [], "any", false, false, false, 123), [], "array", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 123, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "badge", [], "any", false, false, false, 123), [], "array", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 123, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "badge", [], "any", false, false, false, 123), [], "array", false, false, false, 123), "html", null, true)) : ("bg-secondary"));
                yield "\">";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["badgeLabels"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "badge", [], "any", false, false, false, 123), [], "array", true, true, false, 123) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeLabels"]) || array_key_exists("badgeLabels", $context) ? $context["badgeLabels"] : (function () { throw new RuntimeError('Variable "badgeLabels" does not exist.', 123, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "badge", [], "any", false, false, false, 123), [], "array", false, false, false, 123)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeLabels"]) || array_key_exists("badgeLabels", $context) ? $context["badgeLabels"] : (function () { throw new RuntimeError('Variable "badgeLabels" does not exist.', 123, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "badge", [], "any", false, false, false, 123), [], "array", false, false, false, 123), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "badge", [], "any", false, false, false, 123), "html", null, true)));
                yield "</span>
\t\t\t\t\t\t";
                // line 124
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "verified", [], "any", false, false, false, 124)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 125
                    yield "\t\t\t\t\t\t\t<span class=\"badge bg-success\"><i class=\"ri-shield-check-line me-1\"></i>SIRET</span>
\t\t\t\t\t\t";
                }
                // line 127
                yield "\t\t\t\t\t\t";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "legalName", [], "any", false, false, false, 127)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 128
                    yield "\t\t\t\t\t\t\t<span class=\"badge bg-light text-dark border\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "legalName", [], "any", false, false, false, 128), "html", null, true);
                    yield "</span>
\t\t\t\t\t\t";
                }
                // line 130
                yield "\t\t\t\t\t</div>

\t\t\t\t\t";
                // line 133
                yield "\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t<a href=\"";
                // line 134
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_provider_dashboard", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 134)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"border-radius:6px;\">
\t\t\t\t\t\t\t<i class=\"ri-line-chart-line me-1\"></i>Dashboard
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 137)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary flex-fill\" style=\"border-radius:6px;\">
\t\t\t\t\t\t\t<i class=\"ri-edit-line me-1\"></i>Edit
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex gap-2 mt-2\">
\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_recalculate_score", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 142)]), "html", null, true);
                yield "\" class=\"flex-fill\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("recalculate_score_" . CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 143))), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-warning w-100\" style=\"border-radius:6px;\">
\t\t\t\t\t\t\t\t<i class=\"ri-calculator-line me-1\"></i>Recalculate Score
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" class=\"flex-shrink-0\" onsubmit=\"return confirm('Delete ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "name", [], "any", false, false, false, 148), "html", null, true);
                yield "?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("service_provider_delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["provider"], "id", [], "any", false, false, false, 149))), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" style=\"border-radius:6px;\"><i class=\"ri-delete-bin-line\"></i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['provider'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "\t</div>
\t";
        } else {
            // line 159
            yield "\t<div class=\"text-center text-muted py-5\">
\t\t<i class=\"ri-inbox-line\" style=\"font-size:3rem;\"></i>
\t\t<p class=\"mt-3\">No service providers yet. <a href=\"";
            // line 161
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_create");
            yield "\" class=\"fw-semibold\">Create one</a>.</p>
\t</div>
\t";
        }
        
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
        return array (  478 => 161,  474 => 159,  470 => 157,  456 => 149,  450 => 148,  442 => 143,  438 => 142,  430 => 137,  424 => 134,  421 => 133,  417 => 130,  411 => 128,  408 => 127,  404 => 125,  402 => 124,  395 => 123,  392 => 122,  390 => 121,  387 => 120,  381 => 116,  376 => 114,  373 => 113,  365 => 107,  361 => 105,  357 => 103,  353 => 101,  351 => 100,  347 => 99,  340 => 97,  335 => 94,  330 => 90,  326 => 89,  323 => 88,  320 => 87,  311 => 80,  303 => 75,  299 => 74,  290 => 68,  286 => 67,  282 => 66,  278 => 65,  274 => 64,  270 => 63,  266 => 62,  257 => 56,  253 => 55,  243 => 48,  239 => 47,  235 => 46,  231 => 45,  227 => 44,  223 => 43,  219 => 42,  215 => 41,  206 => 35,  197 => 30,  189 => 24,  184 => 21,  175 => 19,  170 => 18,  161 => 16,  157 => 15,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout_velzon.html.twig' %}

{% block title %}Service providers{% endblock %}
{% block page_heading %}Service providers{% endblock %}
{% block page_breadcrumb %}<li class=\"breadcrumb-item active\">Service providers</li>{% endblock %}

{% block content %}
<style>
\t.bg-purple { background-color: #6c63ff !important; color: #fff; }
\t.provider-card { transition: box-shadow 0.2s; border-radius: 12px; }
\t.provider-card:hover { box-shadow: 0 4px 20px rgba(0,0,0,0.08) !important; }
\t.score-mini { font-size: 1.4rem; font-weight: 800; color: #6c63ff; }
</style>

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
\t\t\t\t\t\t<option value=\"score\" {{ sortBy == 'score' ? 'selected' : '' }}>Score</option>
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

\t{# Provider cards #}
\t{% if providers|length > 0 %}
\t<div class=\"row g-3\">
\t\t{% for provider in providers %}
\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t<div class=\"card border-0 shadow-sm provider-card h-100\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t{# Header: name + score #}
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-2\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6 class=\"fw-bold mb-1\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_provider_dashboard', { id: provider.id }) }}\" class=\"text-decoration-none text-dark\">{{ provider.name }}</a>
\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t<span class=\"badge bg-primary\" style=\"font-size:10px;\">{{ provider.serviceType }}</span>
\t\t\t\t\t\t\t{% if provider.status == 'active' %}
\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"font-size:10px;\">Active</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\" style=\"font-size:10px;\">Inactive</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t<div class=\"score-mini\">{{ provider.score }}</div>
\t\t\t\t\t\t\t<small class=\"text-muted\">/100</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{# Info row #}
\t\t\t\t\t<div class=\"small text-muted mb-2\">
\t\t\t\t\t\t<i class=\"ri-mail-line me-1\"></i>{{ provider.email }}
\t\t\t\t\t\t<span class=\"mx-1\">·</span>
\t\t\t\t\t\t<i class=\"ri-money-dollar-circle-line me-1\"></i>{{ provider.hourlyRate|number_format(2) }} €/h
\t\t\t\t\t</div>

\t\t\t\t\t{# Badges #}
\t\t\t\t\t<div class=\"d-flex gap-1 flex-wrap mb-3\">
\t\t\t\t\t\t{% set badgeColors = { 'none': 'bg-secondary', 'rising': 'bg-success', 'certified': 'bg-info', 'top_performer': 'bg-warning text-dark', 'preferred_partner': 'bg-purple' } %}
\t\t\t\t\t\t{% set badgeLabels = { 'none': 'Aucun', 'rising': 'En progression', 'certified': 'Certifié', 'top_performer': 'Top Performer', 'preferred_partner': 'Partenaire' } %}
\t\t\t\t\t\t<span class=\"badge {{ badgeColors[provider.badge] ?? 'bg-secondary' }}\">{{ badgeLabels[provider.badge] ?? provider.badge }}</span>
\t\t\t\t\t\t{% if provider.verified %}
\t\t\t\t\t\t\t<span class=\"badge bg-success\"><i class=\"ri-shield-check-line me-1\"></i>SIRET</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if provider.legalName %}
\t\t\t\t\t\t\t<span class=\"badge bg-light text-dark border\">{{ provider.legalName }}</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t{# Actions #}
\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t<a href=\"{{ path('app_provider_dashboard', { id: provider.id }) }}\" class=\"btn btn-sm btn-outline-primary flex-fill\" style=\"border-radius:6px;\">
\t\t\t\t\t\t\t<i class=\"ri-line-chart-line me-1\"></i>Dashboard
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app_admin_service_provider_edit', { id: provider.id }) }}\" class=\"btn btn-sm btn-outline-secondary flex-fill\" style=\"border-radius:6px;\">
\t\t\t\t\t\t\t<i class=\"ri-edit-line me-1\"></i>Edit
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex gap-2 mt-2\">
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_admin_service_provider_recalculate_score', { id: provider.id }) }}\" class=\"flex-fill\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('recalculate_score_' ~ provider.id) }}\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-warning w-100\" style=\"border-radius:6px;\">
\t\t\t\t\t\t\t\t<i class=\"ri-calculator-line me-1\"></i>Recalculate Score
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_admin_service_provider_delete', { id: provider.id }) }}\" class=\"flex-shrink-0\" onsubmit=\"return confirm('Delete {{ provider.name }}?');\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('service_provider_delete_' ~ provider.id) }}\">
\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\" style=\"border-radius:6px;\"><i class=\"ri-delete-bin-line\"></i></button>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
\t{% else %}
\t<div class=\"text-center text-muted py-5\">
\t\t<i class=\"ri-inbox-line\" style=\"font-size:3rem;\"></i>
\t\t<p class=\"mt-3\">No service providers yet. <a href=\"{{ path('app_admin_service_provider_create') }}\" class=\"fw-semibold\">Create one</a>.</p>
\t</div>
\t{% endif %}
{% endblock %}
", "admin/service_provider/index.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/admin/service_provider/index.html.twig");
    }
}

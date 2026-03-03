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

/* sponsorship/sponsor_index.html.twig */
class __TwigTemplate_0d39937ac022adc615542bbbf56aff95 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/sponsor_index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/sponsor_index.html.twig"));

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

        yield "Sponsors - ";
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

        yield "Sponsors";
        
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

        yield "Sponsors";
        
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
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
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
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
        yield "\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> My events</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "id", [], "any", false, false, false, 23)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none fw-semibold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 23, $this->source); })()), "title", [], "any", false, false, false, 23), "html", null, true);
        yield "</a>
\t\t</div>
\t\t<div class=\"d-flex gap-2\">
\t\t\t<a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"btn btn-outline-primary btn-sm\">Packages</a>
\t\t\t<a href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 27, $this->source); })()), "id", [], "any", false, false, false, 27)]), "html", null, true);
        yield "\" class=\"btn btn-warning text-dark fw-semibold btn-sm\">New sponsor</a>
\t\t</div>
\t</div>

\t";
        // line 32
        yield "\t<form method=\"get\" action=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 32, $this->source); })()), "id", [], "any", false, false, false, 32)]), "html", null, true);
        yield "\" class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-3\">
\t\t\t<div class=\"row g-2 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Name</label>
\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control form-control-sm\" placeholder=\"Company name…\" value=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchName"]) || array_key_exists("searchName", $context) ? $context["searchName"] : (function () { throw new RuntimeError('Variable "searchName" does not exist.', 37, $this->source); })()), "html", null, true);
        yield "\" style=\"min-width: 140px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Email</label>
\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control form-control-sm\" placeholder=\"Email…\" value=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchEmail"]) || array_key_exists("searchEmail", $context) ? $context["searchEmail"] : (function () { throw new RuntimeError('Variable "searchEmail" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\" style=\"min-width: 160px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Status</label>
\t\t\t\t\t<select name=\"status\" class=\"form-select form-select-sm\" style=\"min-width: 130px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"pending_approval\" ";
        // line 47
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 47, $this->source); })()) == "pending_approval")) ? ("selected") : (""));
        yield ">Pending approval</option>
\t\t\t\t\t\t<option value=\"active\" ";
        // line 48
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 48, $this->source); })()) == "active")) ? ("selected") : (""));
        yield ">Active</option>
\t\t\t\t\t\t<option value=\"inactive\" ";
        // line 49
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 49, $this->source); })()) == "inactive")) ? ("selected") : (""));
        yield ">Inactive</option>
\t\t\t\t\t\t<option value=\"rejected\" ";
        // line 50
        yield ((((isset($context["filterStatus"]) || array_key_exists("filterStatus", $context) ? $context["filterStatus"] : (function () { throw new RuntimeError('Variable "filterStatus" does not exist.', 50, $this->source); })()) == "rejected")) ? ("selected") : (""));
        yield ">Rejected</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Payment</label>
\t\t\t\t\t<select name=\"payment\" class=\"form-select form-select-sm\" style=\"min-width: 110px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"pending\" ";
        // line 57
        yield ((((isset($context["filterPaymentStatus"]) || array_key_exists("filterPaymentStatus", $context) ? $context["filterPaymentStatus"] : (function () { throw new RuntimeError('Variable "filterPaymentStatus" does not exist.', 57, $this->source); })()) == "pending")) ? ("selected") : (""));
        yield ">Pending</option>
\t\t\t\t\t\t<option value=\"paid\" ";
        // line 58
        yield ((((isset($context["filterPaymentStatus"]) || array_key_exists("filterPaymentStatus", $context) ? $context["filterPaymentStatus"] : (function () { throw new RuntimeError('Variable "filterPaymentStatus" does not exist.', 58, $this->source); })()) == "paid")) ? ("selected") : (""));
        yield ">Paid</option>
\t\t\t\t\t\t<option value=\"partially_paid\" ";
        // line 59
        yield ((((isset($context["filterPaymentStatus"]) || array_key_exists("filterPaymentStatus", $context) ? $context["filterPaymentStatus"] : (function () { throw new RuntimeError('Variable "filterPaymentStatus" does not exist.', 59, $this->source); })()) == "partially_paid")) ? ("selected") : (""));
        yield ">Partially</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Package</label>
\t\t\t\t\t<select name=\"package\" class=\"form-select form-select-sm\" style=\"min-width: 120px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["packages"]) || array_key_exists("packages", $context) ? $context["packages"] : (function () { throw new RuntimeError('Variable "packages" does not exist.', 66, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pkg"]) {
            // line 67
            yield "\t\t\t\t\t\t\t<option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "id", [], "any", false, false, false, 67), "html", null, true);
            yield "\" ";
            yield ((((isset($context["filterPackageId"]) || array_key_exists("filterPackageId", $context) ? $context["filterPackageId"] : (function () { throw new RuntimeError('Variable "filterPackageId" does not exist.', 67, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "id", [], "any", false, false, false, 67))) ? ("selected") : (""));
            yield ">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["pkg"], "name", [], "any", false, false, false, 67), "html", null, true);
            yield "</option>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['pkg'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select form-select-sm\" style=\"min-width: 120px;\">
\t\t\t\t\t\t<option value=\"name\" ";
        // line 74
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 74, $this->source); })()) == "name")) ? ("selected") : (""));
        yield ">Name</option>
\t\t\t\t\t\t<option value=\"email\" ";
        // line 75
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 75, $this->source); })()) == "email")) ? ("selected") : (""));
        yield ">Email</option>
\t\t\t\t\t\t<option value=\"package\" ";
        // line 76
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 76, $this->source); })()) == "package")) ? ("selected") : (""));
        yield ">Package</option>
\t\t\t\t\t\t<option value=\"status\" ";
        // line 77
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 77, $this->source); })()) == "status")) ? ("selected") : (""));
        yield ">Status</option>
\t\t\t\t\t\t<option value=\"paymentStatus\" ";
        // line 78
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 78, $this->source); })()) == "paymentStatus")) ? ("selected") : (""));
        yield ">Payment</option>
\t\t\t\t\t\t<option value=\"createdAt\" ";
        // line 79
        yield ((((isset($context["sortBy"]) || array_key_exists("sortBy", $context) ? $context["sortBy"] : (function () { throw new RuntimeError('Variable "sortBy" does not exist.', 79, $this->source); })()) == "createdAt")) ? ("selected") : (""));
        yield ">Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select form-select-sm\" style=\"min-width: 90px;\">
\t\t\t\t\t\t<option value=\"asc\" ";
        // line 85
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 85, $this->source); })()) == "asc")) ? ("selected") : (""));
        yield ">Asc</option>
\t\t\t\t\t\t<option value=\"desc\" ";
        // line 86
        yield ((((isset($context["sortOrder"]) || array_key_exists("sortOrder", $context) ? $context["sortOrder"] : (function () { throw new RuntimeError('Variable "sortOrder" does not exist.', 86, $this->source); })()) == "desc")) ? ("selected") : (""));
        yield ">Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-search me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 91, $this->source); })()), "id", [], "any", false, false, false, 91)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary btn-sm\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t";
        // line 97
        $context["pending_count"] = Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 97, $this->source); })()), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 97, $this->source); })()), "status", [], "any", false, false, false, 97) == "pending_approval"); }));
        // line 98
        yield "\t";
        if (((isset($context["pending_count"]) || array_key_exists("pending_count", $context) ? $context["pending_count"] : (function () { throw new RuntimeError('Variable "pending_count" does not exist.', 98, $this->source); })()) > 0)) {
            // line 99
            yield "\t\t<div class=\"alert alert-info mb-4\">
\t\t\t<i class=\"fa-solid fa-inbox me-2\"></i><strong>";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["pending_count"]) || array_key_exists("pending_count", $context) ? $context["pending_count"] : (function () { throw new RuntimeError('Variable "pending_count" does not exist.', 100, $this->source); })()), "html", null, true);
            yield "</strong> sponsorship request(s) waiting for your decision. Accept or Refuse below.
\t\t</div>
\t";
        }
        // line 103
        yield "
\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-0 border-bottom py-3\">
\t\t\t<h2 class=\"h5 fw-bold mb-0\">Sponsors for this event</h2>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Company</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Package</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Payment</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Status</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Accepted / Refused by</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end\" style=\"width: 120px;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
        // line 121
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sponsors"]) || array_key_exists("sponsors", $context) ? $context["sponsors"] : (function () { throw new RuntimeError('Variable "sponsors" does not exist.', 121, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
            // line 122
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t";
            // line 125
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "logoUrl", [], "any", false, false, false, 125)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 126
                yield "\t\t\t\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "logoUrl", [], "any", false, false, false, 126), "html", null, true);
                yield "\" alt=\"\" class=\"rounded\" style=\"width: 36px; height: 36px; object-fit: contain; background: #f8f9fa;\" />
\t\t\t\t\t\t\t\t";
            }
            // line 128
            yield "\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "name", [], "any", false, false, false, 129), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0\">";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "email", [], "any", false, false, false, 130), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">";
            // line 134
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorshipPackage", [], "any", false, false, false, 134)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "sponsorshipPackage", [], "any", false, false, false, 134), "name", [], "any", false, false, false, 134), "html", null, true)) : ("—"));
            yield "</td>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"badge ";
            // line 136
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "paymentStatus", [], "any", false, false, false, 136) == "paid")) {
                yield "bg-success";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "paymentStatus", [], "any", false, false, false, 136) == "partially_paid")) {
                yield "bg-warning text-dark";
            } else {
                yield "bg-secondary";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "paymentStatus", [], "any", false, false, false, 136), ["_" => " "])), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t";
            // line 137
            if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "amountPaid", [], "any", false, false, false, 137))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 138
                yield "\t\t\t\t\t\t\t\t<span class=\"small text-muted d-block\">\$";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "amountPaid", [], "any", false, false, false, 138), 2), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t";
            }
            // line 140
            yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"badge ";
            // line 142
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "status", [], "any", false, false, false, 142) == "active")) {
                yield "bg-primary";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "status", [], "any", false, false, false, 142) == "rejected")) {
                yield "bg-danger";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "status", [], "any", false, false, false, 142) == "pending_approval")) {
                yield "bg-warning text-dark";
            } else {
                yield "bg-secondary";
            }
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::titleCase($this->env->getCharset(), Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "status", [], "any", false, false, false, 142), ["_" => " "])), "html", null, true);
            yield "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3 small text-muted\">
\t\t\t\t\t\t\t";
            // line 145
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "acceptedBy", [], "any", false, false, false, 145)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 146
                yield "\t\t\t\t\t\t\t\t<span class=\"text-success\">Accepted by ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "acceptedBy", [], "any", false, false, false, 146), "displayName", [], "any", false, false, false, 146), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 147
$context["sponsor"], "refusedBy", [], "any", false, false, false, 147)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 148
                yield "\t\t\t\t\t\t\t\t<span class=\"text-danger\">Refused by ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "refusedBy", [], "any", false, false, false, 148), "displayName", [], "any", false, false, false, 148), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t";
            } else {
                // line 150
                yield "\t\t\t\t\t\t\t\t—
\t\t\t\t\t\t\t";
            }
            // line 152
            yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3 text-end\">
\t\t\t\t\t\t\t";
            // line 154
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "status", [], "any", false, false, false, 154) == "pending_approval")) {
                // line 155
                yield "\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_accept", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 155, $this->source); })()), "id", [], "any", false, false, false, 155), "sponsorId" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 155)]), "html", null, true);
                yield "\" class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 156
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("accept_sponsor_" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 156))), "html", null, true);
                yield "\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success me-1\">Accept</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_refuse", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "sponsorId" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                yield "\" class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("refuse_sponsor_" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 160))), "html", null, true);
                yield "\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger me-1\">Refuse</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t";
            }
            // line 164
            yield "\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 164, $this->source); })()), "id", [], "any", false, false, false, 164), "sponsorId" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 164)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary me-1\">Edit</a>
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 165, $this->source); })()), "id", [], "any", false, false, false, 165), "sponsorId" => CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Delete this sponsor?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_sponsor_" . CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "id", [], "any", false, false, false, 166))), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
            $context['_iterated'] = true;
        }
        // line 171
        if (!$context['_iterated']) {
            // line 172
            yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"py-5 text-center text-muted\">
\t\t\t\t\t\t\t<p class=\"mb-2\">No sponsors yet.</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 175, $this->source); })()), "id", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" class=\"btn btn-warning text-dark btn-sm\">Add first sponsor</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
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
        return "sponsorship/sponsor_index.html.twig";
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
        return array (  556 => 179,  546 => 175,  541 => 172,  539 => 171,  529 => 166,  525 => 165,  520 => 164,  513 => 160,  509 => 159,  503 => 156,  498 => 155,  496 => 154,  492 => 152,  488 => 150,  482 => 148,  480 => 147,  475 => 146,  473 => 145,  457 => 142,  453 => 140,  447 => 138,  445 => 137,  433 => 136,  428 => 134,  421 => 130,  417 => 129,  414 => 128,  408 => 126,  406 => 125,  401 => 122,  396 => 121,  376 => 103,  370 => 100,  367 => 99,  364 => 98,  362 => 97,  353 => 91,  345 => 86,  341 => 85,  332 => 79,  328 => 78,  324 => 77,  320 => 76,  316 => 75,  312 => 74,  305 => 69,  292 => 67,  288 => 66,  278 => 59,  274 => 58,  270 => 57,  260 => 50,  256 => 49,  252 => 48,  248 => 47,  239 => 41,  232 => 37,  223 => 32,  216 => 27,  212 => 26,  204 => 23,  199 => 21,  194 => 18,  185 => 16,  180 => 15,  171 => 13,  166 => 12,  157 => 10,  153 => 9,  150 => 8,  137 => 7,  114 => 5,  91 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Sponsors - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}Sponsors{% endblock %}
{% block page_breadcrumb %}Sponsors{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t{% endfor %}

\t<div class=\"d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4\">
\t\t<div>
\t\t\t<a href=\"{{ path('app_my_events') }}\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> My events</a>
\t\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-dark text-decoration-none fw-semibold\">{{ event.title }}</a>
\t\t</div>
\t\t<div class=\"d-flex gap-2\">
\t\t\t<a href=\"{{ path('app_sponsorship_package_index', { id: event.id }) }}\" class=\"btn btn-outline-primary btn-sm\">Packages</a>
\t\t\t<a href=\"{{ path('app_sponsor_new', { id: event.id }) }}\" class=\"btn btn-warning text-dark fw-semibold btn-sm\">New sponsor</a>
\t\t</div>
\t</div>

\t{# Sort & search (multi-criteria) #}
\t<form method=\"get\" action=\"{{ path('app_sponsor_index', { id: event.id }) }}\" class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body py-3\">
\t\t\t<div class=\"row g-2 align-items-end flex-wrap\">
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Name</label>
\t\t\t\t\t<input type=\"text\" name=\"name\" class=\"form-control form-control-sm\" placeholder=\"Company name…\" value=\"{{ searchName }}\" style=\"min-width: 140px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Email</label>
\t\t\t\t\t<input type=\"text\" name=\"email\" class=\"form-control form-control-sm\" placeholder=\"Email…\" value=\"{{ searchEmail }}\" style=\"min-width: 160px;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Status</label>
\t\t\t\t\t<select name=\"status\" class=\"form-select form-select-sm\" style=\"min-width: 130px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"pending_approval\" {{ filterStatus == 'pending_approval' ? 'selected' : '' }}>Pending approval</option>
\t\t\t\t\t\t<option value=\"active\" {{ filterStatus == 'active' ? 'selected' : '' }}>Active</option>
\t\t\t\t\t\t<option value=\"inactive\" {{ filterStatus == 'inactive' ? 'selected' : '' }}>Inactive</option>
\t\t\t\t\t\t<option value=\"rejected\" {{ filterStatus == 'rejected' ? 'selected' : '' }}>Rejected</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Payment</label>
\t\t\t\t\t<select name=\"payment\" class=\"form-select form-select-sm\" style=\"min-width: 110px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t<option value=\"pending\" {{ filterPaymentStatus == 'pending' ? 'selected' : '' }}>Pending</option>
\t\t\t\t\t\t<option value=\"paid\" {{ filterPaymentStatus == 'paid' ? 'selected' : '' }}>Paid</option>
\t\t\t\t\t\t<option value=\"partially_paid\" {{ filterPaymentStatus == 'partially_paid' ? 'selected' : '' }}>Partially</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Package</label>
\t\t\t\t\t<select name=\"package\" class=\"form-select form-select-sm\" style=\"min-width: 120px;\">
\t\t\t\t\t\t<option value=\"\">All</option>
\t\t\t\t\t\t{% for pkg in packages %}
\t\t\t\t\t\t\t<option value=\"{{ pkg.id }}\" {{ filterPackageId == pkg.id ? 'selected' : '' }}>{{ pkg.name }}</option>
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Sort by</label>
\t\t\t\t\t<select name=\"sort\" class=\"form-select form-select-sm\" style=\"min-width: 120px;\">
\t\t\t\t\t\t<option value=\"name\" {{ sortBy == 'name' ? 'selected' : '' }}>Name</option>
\t\t\t\t\t\t<option value=\"email\" {{ sortBy == 'email' ? 'selected' : '' }}>Email</option>
\t\t\t\t\t\t<option value=\"package\" {{ sortBy == 'package' ? 'selected' : '' }}>Package</option>
\t\t\t\t\t\t<option value=\"status\" {{ sortBy == 'status' ? 'selected' : '' }}>Status</option>
\t\t\t\t\t\t<option value=\"paymentStatus\" {{ sortBy == 'paymentStatus' ? 'selected' : '' }}>Payment</option>
\t\t\t\t\t\t<option value=\"createdAt\" {{ sortBy == 'createdAt' ? 'selected' : '' }}>Created</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<label class=\"form-label small mb-0\">Order</label>
\t\t\t\t\t<select name=\"order\" class=\"form-select form-select-sm\" style=\"min-width: 90px;\">
\t\t\t\t\t\t<option value=\"asc\" {{ sortOrder == 'asc' ? 'selected' : '' }}>Asc</option>
\t\t\t\t\t\t<option value=\"desc\" {{ sortOrder == 'desc' ? 'selected' : '' }}>Desc</option>
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary btn-sm\"><i class=\"fa-solid fa-search me-1\"></i>Apply</button>
\t\t\t\t\t<a href=\"{{ path('app_sponsor_index', { id: event.id }) }}\" class=\"btn btn-outline-secondary btn-sm\">Reset</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</form>

\t{% set pending_count = sponsors|filter(s => s.status == 'pending_approval')|length %}
\t{% if pending_count > 0 %}
\t\t<div class=\"alert alert-info mb-4\">
\t\t\t<i class=\"fa-solid fa-inbox me-2\"></i><strong>{{ pending_count }}</strong> sponsorship request(s) waiting for your decision. Accept or Refuse below.
\t\t</div>
\t{% endif %}

\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-0 border-bottom py-3\">
\t\t\t<h2 class=\"h5 fw-bold mb-0\">Sponsors for this event</h2>
\t\t</div>
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Company</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Package</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Payment</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Status</th>
\t\t\t\t\t\t<th class=\"border-0 py-3\">Accepted / Refused by</th>
\t\t\t\t\t\t<th class=\"border-0 py-3 text-end\" style=\"width: 120px;\">Actions</th>
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for sponsor in sponsors %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-2\">
\t\t\t\t\t\t\t\t{% if sponsor.logoUrl %}
\t\t\t\t\t\t\t\t\t<img src=\"{{ sponsor.logoUrl }}\" alt=\"\" class=\"rounded\" style=\"width: 36px; height: 36px; object-fit: contain; background: #f8f9fa;\" />
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">{{ sponsor.name }}</span>
\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-0\">{{ sponsor.email }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">{{ sponsor.sponsorshipPackage ? sponsor.sponsorshipPackage.name : '—' }}</td>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"badge {% if sponsor.paymentStatus == 'paid' %}bg-success{% elseif sponsor.paymentStatus == 'partially_paid' %}bg-warning text-dark{% else %}bg-secondary{% endif %}\">{{ sponsor.paymentStatus|replace({'_': ' '})|title }}</span>
\t\t\t\t\t\t\t{% if sponsor.amountPaid is not null %}
\t\t\t\t\t\t\t\t<span class=\"small text-muted d-block\">\${{ sponsor.amountPaid|number_format(2) }}</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3\">
\t\t\t\t\t\t\t<span class=\"badge {% if sponsor.status == 'active' %}bg-primary{% elseif sponsor.status == 'rejected' %}bg-danger{% elseif sponsor.status == 'pending_approval' %}bg-warning text-dark{% else %}bg-secondary{% endif %}\">{{ sponsor.status|replace({'_': ' '})|title }}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3 small text-muted\">
\t\t\t\t\t\t\t{% if sponsor.acceptedBy %}
\t\t\t\t\t\t\t\t<span class=\"text-success\">Accepted by {{ sponsor.acceptedBy.displayName }}</span>
\t\t\t\t\t\t\t{% elseif sponsor.refusedBy %}
\t\t\t\t\t\t\t\t<span class=\"text-danger\">Refused by {{ sponsor.refusedBy.displayName }}</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t—
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"py-3 text-end\">
\t\t\t\t\t\t\t{% if sponsor.status == 'pending_approval' %}
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_sponsor_accept', { id: event.id, sponsorId: sponsor.id }) }}\" class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('accept_sponsor_' ~ sponsor.id) }}\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-success me-1\">Accept</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_sponsor_refuse', { id: event.id, sponsorId: sponsor.id }) }}\" class=\"d-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('refuse_sponsor_' ~ sponsor.id) }}\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger me-1\">Refuse</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_sponsor_edit', { id: event.id, sponsorId: sponsor.id }) }}\" class=\"btn btn-sm btn-outline-secondary me-1\">Edit</a>
\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_sponsor_delete', { id: event.id, sponsorId: sponsor.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Delete this sponsor?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_sponsor_' ~ sponsor.id) }}\" />
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% else %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td colspan=\"6\" class=\"py-5 text-center text-muted\">
\t\t\t\t\t\t\t<p class=\"mb-2\">No sponsors yet.</p>
\t\t\t\t\t\t\t<a href=\"{{ path('app_sponsor_new', { id: event.id }) }}\" class=\"btn btn-warning text-dark btn-sm\">Add first sponsor</a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "sponsorship/sponsor_index.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\sponsorship\\sponsor_index.html.twig");
    }
}

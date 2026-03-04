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

/* order/show.html.twig */
class __TwigTemplate_55a16a68050d3dedaf23a37847b0b3d9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/show.html.twig"));

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

        yield "Order #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3), "html", null, true);
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

        yield "Order details";
        
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

        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "event", [], "any", false, false, false, 5)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "event", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5)]), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "event", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
            yield "</a> <i class=\"fa-solid fa-angle-right\"></i>";
        }
        yield " Order #";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5), "html", null, true);
        
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
        yield "\t<div class=\"mb-4\">
\t\t<a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-decoration-none text-muted\">
\t\t\t<i class=\"fa-solid fa-arrow-left me-2\"></i>Back to My Orders
\t\t</a>
\t</div>

\t";
        // line 17
        yield "\t<div class=\"section-header mb-4\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">Order #";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</h2>
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">
\t\t\t\t\tPlaced on ";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 22, $this->source); })()), "createdAt", [], "any", false, false, false, 22), "F j, Y \\a\\t g:i A"), "html", null, true);
        yield "
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
\t\t\t\t<span class=\"badge ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "confirmed")) {
            yield "bg-success";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "cancelled")) {
            yield "bg-danger";
        } else {
            yield "bg-warning text-dark";
        }
        yield "\" style=\"padding: 10px 20px; font-size: 14px; font-weight: 600;\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-check me-1\"></i>";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27)), "html", null, true);
        yield "
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row g-4\">
\t\t";
        // line 35
        yield "\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-receipt me-2 text-primary\"></i>Order Details</h5>
\t\t\t\t\t
\t\t\t\t\t<div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Event</label>
\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t";
        // line 43
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 43, $this->source); })()), "event", [], "any", false, false, false, 43)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 44
            yield "\t\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "event", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44)]), "html", null, true);
            yield "\" class=\"fw-semibold text-primary text-decoration-none\" style=\"font-size: 16px;\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 44, $this->source); })()), "event", [], "any", false, false, false, 44), "title", [], "any", false, false, false, 44), "html", null, true);
            yield "</a>
\t\t\t\t\t\t\t";
        } else {
            // line 46
            yield "\t\t\t\t\t\t\t\t<span class=\"text-muted\">—</span>
\t\t\t\t\t\t\t";
        }
        // line 48
        yield "\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Ticket Type</label>
\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">
\t\t\t\t\t\t\t<span class=\"badge bg-light text-dark border\" style=\"padding: 6px 12px; font-size: 14px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket me-1\"></i>";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 55, $this->source); })()), "ticket", [], "any", false, false, false, 55), "name", [], "any", false, false, false, 55), "html", null, true);
        yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Quantity</label>
\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">
\t\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"padding: 6px 12px; font-size: 14px;\">";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 63, $this->source); })()), "quantity", [], "any", false, false, false, 63), "html", null, true);
        yield "x</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Order Total</label>
\t\t\t\t\t\t<p class=\"fw-bold mb-0\" style=\"font-size: 28px; color: #198754; line-height: 1;\">\$";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 69, $this->source); })()), "totalPrice", [], "any", false, false, false, 69), 2), "html", null, true);
        yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t";
        // line 75
        yield "\t\t\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-gear me-2 text-primary\"></i>Actions</h5>
\t\t\t\t\t<div class=\"d-grid gap-3\">
\t\t\t\t\t\t<a href=\"";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_ticket_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
        yield "\" class=\"btn btn-success btn-lg\" style=\"border-radius: 10px;\" download>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-download me-2\"></i>Download Ticket PDF
\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        // line 82
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 82, $this->source); })()), "event", [], "any", false, false, false, 82)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 83
            yield "\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 83, $this->source); })()), "event", [], "any", false, false, false, 83), "id", [], "any", false, false, false, 83)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-lg\" style=\"border-radius: 10px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days me-2\"></i>View Event Page
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 87
        yield "\t\t\t\t\t\t";
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ORDER_UPDATE", (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 87, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 87, $this->source); })()), "status", [], "any", false, false, false, 87) != "cancelled"))) {
            // line 88
            yield "\t\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-lg\" style=\"border-radius: 10px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pen me-2\"></i>Update Order Status
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t";
        }
        // line 92
        yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 98
        yield "\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body p-4 text-center\">
\t\t\t\t\t<h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-qrcode me-2 text-primary\"></i>Ticket QR Code</h5>
\t\t\t\t\t";
        // line 102
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 102, $this->source); })()), "qrCodePath", [], "any", false, false, false, 102) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 102, $this->source); })()), "uuid", [], "any", false, false, false, 102))) {
            // line 103
            yield "\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<img src=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qrcode_serve", ["uuid" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 104, $this->source); })()), "uuid", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" alt=\"Ticket QR code\" style=\"width: 100%; max-width: 250px; height: auto; object-fit: contain; border-radius: 12px; border: 3px solid #e9ecef; padding: 12px; background: #fff; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-muted small mb-3\">Scan this QR code at the event entrance for quick check-in</p>
\t\t\t\t\t\t<div class=\"alert alert-info border-0 mb-0\" style=\"background: #e7f3ff; border-radius: 8px; text-align: left;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>
\t\t\t\t\t\t\t<small><strong>Tip:</strong> Save this QR code to your phone for easy access at the event.</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } else {
            // line 112
            yield "\t\t\t\t\t\t<div style=\"padding: 40px 20px;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-qrcode\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">QR code not available</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 117
        yield "\t\t\t\t</div>
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
        return "order/show.html.twig";
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
        return array (  339 => 117,  332 => 112,  321 => 104,  318 => 103,  316 => 102,  310 => 98,  303 => 92,  295 => 88,  292 => 87,  284 => 83,  282 => 82,  276 => 79,  270 => 75,  262 => 69,  253 => 63,  242 => 55,  233 => 48,  229 => 46,  221 => 44,  219 => 43,  209 => 35,  199 => 27,  189 => 26,  182 => 22,  177 => 20,  172 => 17,  164 => 11,  161 => 10,  158 => 8,  145 => 7,  114 => 5,  91 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Order #{{ order.id }} - Eventify{% endblock %}
{% block page_heading %}Order details{% endblock %}
{% block page_breadcrumb %}{% if order.event %}<a href=\"{{ path('app_event_show', { id: order.event.id }) }}\">{{ order.event.title }}</a> <i class=\"fa-solid fa-angle-right\"></i>{% endif %} Order #{{ order.id }}{% endblock %}

{% block content %}
<div class=\"container py-5\">
\t{# Back Navigation #}
\t<div class=\"mb-4\">
\t\t<a href=\"{{ path('app_orders_index') }}\" class=\"text-decoration-none text-muted\">
\t\t\t<i class=\"fa-solid fa-arrow-left me-2\"></i>Back to My Orders
\t\t</a>
\t</div>

\t{# Page Header #}
\t<div class=\"section-header mb-4\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">Order #{{ order.id }}</h2>
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">
\t\t\t\t\tPlaced on {{ order.createdAt|date('F j, Y \\\\a\\\\t g:i A') }}
\t\t\t\t</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
\t\t\t\t<span class=\"badge {% if order.status == 'confirmed' %}bg-success{% elseif order.status == 'cancelled' %}bg-danger{% else %}bg-warning text-dark{% endif %}\" style=\"padding: 10px 20px; font-size: 14px; font-weight: 600;\">
\t\t\t\t\t<i class=\"fa-solid fa-circle-check me-1\"></i>{{ order.status|capitalize }}
\t\t\t\t</span>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row g-4\">
\t\t{# Left Column - Order Details #}
\t\t<div class=\"col-lg-8\">
\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-receipt me-2 text-primary\"></i>Order Details</h5>
\t\t\t\t\t
\t\t\t\t\t<div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Event</label>
\t\t\t\t\t\t<p class=\"mb-0\">
\t\t\t\t\t\t\t{% if order.event %}
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: order.event.id }) }}\" class=\"fw-semibold text-primary text-decoration-none\" style=\"font-size: 16px;\">{{ order.event.title }}</a>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"text-muted\">—</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Ticket Type</label>
\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">
\t\t\t\t\t\t\t<span class=\"badge bg-light text-dark border\" style=\"padding: 6px 12px; font-size: 14px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket me-1\"></i>{{ order.ticket.name }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Quantity</label>
\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">
\t\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"padding: 6px 12px; font-size: 14px;\">{{ order.quantity }}x</span>
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Order Total</label>
\t\t\t\t\t\t<p class=\"fw-bold mb-0\" style=\"font-size: 28px; color: #198754; line-height: 1;\">\${{ order.totalPrice|number_format(2) }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t{# Actions Card #}
\t\t\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-gear me-2 text-primary\"></i>Actions</h5>
\t\t\t\t\t<div class=\"d-grid gap-3\">
\t\t\t\t\t\t<a href=\"{{ path('app_order_ticket_pdf', { id: order.id }) }}\" class=\"btn btn-success btn-lg\" style=\"border-radius: 10px;\" download>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-download me-2\"></i>Download Ticket PDF
\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% if order.event %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: order.event.id }) }}\" class=\"btn btn-outline-primary btn-lg\" style=\"border-radius: 10px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days me-2\"></i>View Event Page
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if is_granted('ORDER_UPDATE', order) and order.status != 'cancelled' %}
\t\t\t\t\t\t\t<a href=\"{{ path('app_order_status', { id: order.id }) }}\" class=\"btn btn-primary btn-lg\" style=\"border-radius: 10px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-pen me-2\"></i>Update Order Status
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{# Right Column - QR Code #}
\t\t<div class=\"col-lg-4\">
\t\t\t<div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t<div class=\"card-body p-4 text-center\">
\t\t\t\t\t<h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-qrcode me-2 text-primary\"></i>Ticket QR Code</h5>
\t\t\t\t\t{% if order.qrCodePath and order.uuid %}
\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t<img src=\"{{ path('app_qrcode_serve', { uuid: order.uuid }) }}\" alt=\"Ticket QR code\" style=\"width: 100%; max-width: 250px; height: auto; object-fit: contain; border-radius: 12px; border: 3px solid #e9ecef; padding: 12px; background: #fff; box-shadow: 0 4px 12px rgba(0,0,0,0.1);\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<p class=\"text-muted small mb-3\">Scan this QR code at the event entrance for quick check-in</p>
\t\t\t\t\t\t<div class=\"alert alert-info border-0 mb-0\" style=\"background: #e7f3ff; border-radius: 8px; text-align: left;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>
\t\t\t\t\t\t\t<small><strong>Tip:</strong> Save this QR code to your phone for easy access at the event.</small>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div style=\"padding: 40px 20px;\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-qrcode\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t\t\t\t\t<p class=\"text-muted mb-0\">QR code not available</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
{% endblock %}
", "order/show.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\order\\show.html.twig");
    }
}

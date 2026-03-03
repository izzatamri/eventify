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

/* order/index.html.twig */
class __TwigTemplate_a4c9050e8fff32c488990c28eb4bf29b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/index.html.twig"));

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

        yield "My Orders - Eventify";
        
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

        yield "My Orders";
        
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

        yield "My Orders";
        
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
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">My Orders</h2>
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">View and manage your event ticket purchases</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
\t\t\t\t<a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"btn btn-primary btn-lg px-4\">
\t\t\t\t\t<i class=\"fa-solid fa-ticket me-2\"></i>Browse Events
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 24
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 24, $this->source); })())) > 0)) {
            // line 25
            yield "\t<div class=\"row g-4\">
\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 26, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 27
                yield "\t\t<div class=\"col-12\">
\t\t\t<div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 25px rgba(0,0,0,0.12)';\" onmouseout=\"this.style.transform=''; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t";
                // line 34
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "qrCodePath", [], "any", false, false, false, 34) && CoreExtension::getAttribute($this->env, $this->source, $context["order"], "uuid", [], "any", false, false, false, 34))) {
                    // line 35
                    yield "\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_qrcode_serve", ["uuid" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "uuid", [], "any", false, false, false, 35)]), "html", null, true);
                    yield "\" alt=\"QR\" style=\"width: 80px; height: 80px; object-fit: contain; border-radius: 10px; border: 2px solid #e9ecef; padding: 6px; background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    yield "\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80px; height: 80px; border-radius: 10px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; border: 2px dashed #dee2e6;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-qrcode text-muted\" style=\"font-size: 32px;\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                }
                // line 41
                yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "event", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43)]), "html", null, true);
                yield "\" class=\"fw-bold text-dark text-decoration-none d-block mb-1\" style=\"font-size: 17px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "event", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-2\">Order #";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 44), "html", null, true);
                yield "</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 flex-wrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-dark border\" style=\"padding: 4px 10px; font-size: 12px;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket me-1\"></i>";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["order"], "ticket", [], "any", false, false, false, 47), "name", [], "any", false, false, false, 47), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"padding: 4px 10px; font-size: 12px;\">";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "quantity", [], "any", false, false, false, 49), "html", null, true);
                yield "x</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"text-center text-md-start\">
\t\t\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; display: block;\">Order Total</label>
\t\t\t\t\t\t\t\t<div class=\"fw-bold mb-2\" style=\"color: #198754; font-size: 24px; line-height: 1;\">\$";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "totalPrice", [], "any", false, false, false, 58), 2), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t<span class=\"text-muted\" style=\"font-size: 13px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days me-1\"></i>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["order"], "createdAt", [], "any", false, false, false, 60), "M j, Y"), "html", null, true);
                yield "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-4 mb-3 mb-lg-0 text-center\">
\t\t\t\t\t\t\t<label class=\"text-muted mb-2\" style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; display: block;\">Status</label>
\t\t\t\t\t\t\t<span class=\"badge ";
                // line 67
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 67) == "confirmed")) {
                    yield "bg-success";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 67) == "cancelled")) {
                    yield "bg-danger";
                } else {
                    yield "bg-warning text-dark";
                }
                yield "\" style=\"padding: 8px 16px; font-size: 13px; font-weight: 600;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-circle-check me-1\"></i>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["order"], "status", [], "any", false, false, false, 68)), "html", null, true);
                yield "
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 text-center text-lg-end\">
\t\t\t\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t\t\t\t<a href=\"";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 74)]), "html", null, true);
                yield "\" class=\"btn btn-outline-primary\" style=\"border-radius: 8px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye me-2\"></i>View Details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_order_ticket_pdf", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["order"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\" class=\"btn btn-success\" style=\"border-radius: 8px;\" download>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-download me-2\"></i>Download Ticket
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['order'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            yield "\t</div>
\t
\t<div class=\"card border-0 mt-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t<div class=\"card-body p-4\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 mb-3 mb-md-0\">
\t\t\t\t\t<h5 class=\"fw-bold mb-1\" style=\"color: #333;\">Order Summary</h5>
\t\t\t\t\t<p class=\"text-muted small mb-0\">Total of ";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 94, $this->source); })())), "html", null, true);
            yield " order(s) placed</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-md-end\">
\t\t\t\t\t<span class=\"text-muted me-2\" style=\"font-size: 14px;\">Total Amount Spent:</span>
\t\t\t\t\t<span class=\"fw-bold\" style=\"color: #198754; font-size: 28px;\">\$";
            // line 98
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(Twig\Extension\CoreExtension::reduce($this->env, (isset($context["orders"]) || array_key_exists("orders", $context) ? $context["orders"] : (function () { throw new RuntimeError('Variable "orders" does not exist.', 98, $this->source); })()), function ($__carry__, $__order__) use ($context, $macros) { $context["carry"] = $__carry__; $context["order"] = $__order__; return ((isset($context["carry"]) || array_key_exists("carry", $context) ? $context["carry"] : (function () { throw new RuntimeError('Variable "carry" does not exist.', 98, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 98, $this->source); })()), "totalPrice", [], "any", false, false, false, 98)); }, 0), 2), "html", null, true);
            yield "</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        } else {
            // line 104
            yield "\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t<div class=\"card-body text-center\" style=\"padding: 80px 20px;\">
\t\t\t<i class=\"fa-solid fa-receipt\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t<h4 style=\"color: #6c757d; margin-bottom: 10px;\">No Orders Yet</h4>
\t\t\t<p class=\"text-muted mb-4\">You haven't purchased any event tickets yet. Browse events and get your tickets now!</p>
\t\t\t<a href=\"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
            yield "\" class=\"btn btn-primary btn-lg px-4\"><i class=\"fa-solid fa-ticket me-2\"></i>Browse Events</a>
\t\t</div>
\t</div>
\t";
        }
        // line 113
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
        return "order/index.html.twig";
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
        return array (  330 => 113,  323 => 109,  316 => 104,  307 => 98,  300 => 94,  291 => 87,  275 => 77,  269 => 74,  260 => 68,  250 => 67,  240 => 60,  235 => 58,  223 => 49,  218 => 47,  212 => 44,  206 => 43,  202 => 41,  196 => 37,  190 => 35,  188 => 34,  179 => 27,  175 => 26,  172 => 25,  170 => 24,  160 => 17,  151 => 10,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}My Orders - Eventify{% endblock %}
{% block page_heading %}My Orders{% endblock %}
{% block page_breadcrumb %}My Orders{% endblock %}

{% block content %}
<div class=\"container py-5\">
\t{# Page Header #}
\t<div class=\"section-header mb-4\">
\t\t<div class=\"row align-items-center\">
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<h2 style=\"font-size: 32px; font-weight: 600; margin-bottom: 5px;\">My Orders</h2>
\t\t\t\t<p style=\"font-size: 15px; color: #666; margin-bottom: 0;\">View and manage your event ticket purchases</p>
\t\t\t</div>
\t\t\t<div class=\"col-md-4 text-md-end mt-3 mt-md-0\">
\t\t\t\t<a href=\"{{ path('app_events') }}\" class=\"btn btn-primary btn-lg px-4\">
\t\t\t\t\t<i class=\"fa-solid fa-ticket me-2\"></i>Browse Events
\t\t\t\t</a>
\t\t\t</div>
\t\t</div>
\t</div>

\t{% if orders|length > 0 %}
\t<div class=\"row g-4\">
\t\t{% for order in orders %}
\t\t<div class=\"col-12\">
\t\t\t<div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08); transition: all 0.3s;\" onmouseover=\"this.style.transform='translateY(-2px)'; this.style.boxShadow='0 6px 25px rgba(0,0,0,0.12)';\" onmouseout=\"this.style.transform=''; this.style.boxShadow='0 4px 20px rgba(0,0,0,0.08)';\">
\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t<div class=\"col-lg-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t<div class=\"flex-shrink-0 me-3\">
\t\t\t\t\t\t\t\t\t{% if order.qrCodePath and order.uuid %}
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ path('app_qrcode_serve', { uuid: order.uuid }) }}\" alt=\"QR\" style=\"width: 80px; height: 80px; object-fit: contain; border-radius: 10px; border: 2px solid #e9ecef; padding: 6px; background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.1);\">
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t<div style=\"width: 80px; height: 80px; border-radius: 10px; background: #f8f9fa; display: flex; align-items: center; justify-content: center; border: 2px dashed #dee2e6;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-qrcode text-muted\" style=\"font-size: 32px;\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: order.event.id }) }}\" class=\"fw-bold text-dark text-decoration-none d-block mb-1\" style=\"font-size: 17px;\">{{ order.event.title }}</a>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted small mb-2\">Order #{{ order.id }}</p>
\t\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 flex-wrap\">
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-light text-dark border\" style=\"padding: 4px 10px; font-size: 12px;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket me-1\"></i>{{ order.ticket.name }}
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"padding: 4px 10px; font-size: 12px;\">{{ order.quantity }}x</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 mb-3 mb-lg-0\">
\t\t\t\t\t\t\t<div class=\"text-center text-md-start\">
\t\t\t\t\t\t\t\t<label class=\"text-muted mb-1\" style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; display: block;\">Order Total</label>
\t\t\t\t\t\t\t\t<div class=\"fw-bold mb-2\" style=\"color: #198754; font-size: 24px; line-height: 1;\">\${{ order.totalPrice|number_format(2) }}</div>
\t\t\t\t\t\t\t\t<span class=\"text-muted\" style=\"font-size: 13px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days me-1\"></i>{{ order.createdAt|date('M j, Y') }}
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-2 col-md-4 mb-3 mb-lg-0 text-center\">
\t\t\t\t\t\t\t<label class=\"text-muted mb-2\" style=\"font-size: 12px; text-transform: uppercase; letter-spacing: 0.5px; display: block;\">Status</label>
\t\t\t\t\t\t\t<span class=\"badge {% if order.status == 'confirmed' %}bg-success{% elseif order.status == 'cancelled' %}bg-danger{% else %}bg-warning text-dark{% endif %}\" style=\"padding: 8px 16px; font-size: 13px; font-weight: 600;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-circle-check me-1\"></i>{{ order.status|capitalize }}
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"col-lg-3 col-md-4 text-center text-lg-end\">
\t\t\t\t\t\t\t<div class=\"d-grid gap-2\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_order_show', { id: order.id }) }}\" class=\"btn btn-outline-primary\" style=\"border-radius: 8px;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye me-2\"></i>View Details
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_order_ticket_pdf', { id: order.id }) }}\" class=\"btn btn-success\" style=\"border-radius: 8px;\" download>
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-download me-2\"></i>Download Ticket
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
\t
\t<div class=\"card border-0 mt-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t<div class=\"card-body p-4\">
\t\t\t<div class=\"row align-items-center\">
\t\t\t\t<div class=\"col-md-6 mb-3 mb-md-0\">
\t\t\t\t\t<h5 class=\"fw-bold mb-1\" style=\"color: #333;\">Order Summary</h5>
\t\t\t\t\t<p class=\"text-muted small mb-0\">Total of {{ orders|length }} order(s) placed</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 text-md-end\">
\t\t\t\t\t<span class=\"text-muted me-2\" style=\"font-size: 14px;\">Total Amount Spent:</span>
\t\t\t\t\t<span class=\"fw-bold\" style=\"color: #198754; font-size: 28px;\">\${{ orders|reduce((carry, order) => carry + order.totalPrice, 0)|number_format(2) }}</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t{% else %}
\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t<div class=\"card-body text-center\" style=\"padding: 80px 20px;\">
\t\t\t<i class=\"fa-solid fa-receipt\" style=\"font-size: 64px; color: #dee2e6; margin-bottom: 20px;\"></i>
\t\t\t<h4 style=\"color: #6c757d; margin-bottom: 10px;\">No Orders Yet</h4>
\t\t\t<p class=\"text-muted mb-4\">You haven't purchased any event tickets yet. Browse events and get your tickets now!</p>
\t\t\t<a href=\"{{ path('app_events') }}\" class=\"btn btn-primary btn-lg px-4\"><i class=\"fa-solid fa-ticket me-2\"></i>Browse Events</a>
\t\t</div>
\t</div>
\t{% endif %}
</div>
{% endblock %}
", "order/index.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\order\\index.html.twig");
    }
}

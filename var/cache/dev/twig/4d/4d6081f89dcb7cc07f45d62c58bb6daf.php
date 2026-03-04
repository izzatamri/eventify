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

/* event_tickets.html.twig */
class __TwigTemplate_aafd0662909495dfb3bbcc9a02e83310 extends Template
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
            'page_styles' => [$this, 'block_page_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_tickets.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_tickets.html.twig"));

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

        yield "Add tickets - ";
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

        yield "Add tickets";
        
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

        yield "Add tickets";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_styles"));

        // line 8
        yield "\t<style>
\t\t.event-create-page { background: #f5f5f5; min-height: 100vh; padding: 1.5rem 0 3rem; }
\t\t.event-create-page .back-link { color: #2E4DFD; text-decoration: none; font-size: 0.95rem; }
\t\t.event-create-page .back-link:hover { color: #1e3dd9; }
\t\t.event-create-page .preview-btn { border: 1px solid #dee2e6; border-radius: 2rem; padding: 0.4rem 1rem; background: #fff; color: #333; font-size: 0.9rem; text-decoration: none; }
\t\t.event-create-page .preview-btn:hover { background: #f8f9fa; color: #333; }
\t\t.event-create-page .sidebar { max-width: 300px; }
\t\t.event-create-page .summary-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.25rem; position: relative; overflow: hidden; }
\t\t.event-create-page .summary-card::before { content: \"\"; position: absolute; top: -20px; right: -20px; width: 120px; height: 120px; background: linear-gradient(135deg, #ff9a56 0%, #ff6b6b 100%); border-radius: 50%; opacity: 0.35; }
\t\t.event-create-page .summary-title { font-size: 1.25rem; font-weight: 700; color: #1a1a1a; margin-bottom: 0.5rem; }
\t\t.event-create-page .summary-date { font-size: 0.9rem; color: #555; }
\t\t.event-create-page .steps-label { font-size: 0.8rem; color: #888; text-transform: uppercase; letter-spacing: 0.05em; margin: 1.5rem 0 0.75rem; }
\t\t.event-create-page .step { display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem; }
\t\t.event-create-page .step-radio { width: 20px; height: 20px; border-radius: 50%; border: 2px solid #dee2e6; flex-shrink: 0; margin-top: 2px; }
\t\t.event-create-page .step.step-active .step-radio { background: #2E4DFD; border-color: #2E4DFD; }
\t\t.event-create-page .step.step-done .step-radio { background: #2E4DFD; border-color: #2E4DFD; background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white' width='14' height='14'%3E%3Cpath d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z'/%3E%3C/svg%3E\"); background-size: 12px; }
\t\t.event-create-page .step-title { font-weight: 600; color: #1a1a1a; }
\t\t.event-create-page .step-desc { font-size: 0.85rem; color: #666; margin-top: 0.2rem; }
\t\t.event-create-page .section-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; margin-bottom: 1rem; }
\t\t.event-create-page .ticket-type-card { display: block; text-decoration: none; color: inherit; border: 1px solid #dee2e6; border-radius: 12px; padding: 1.25rem; margin-bottom: 1rem; transition: border-color .2s, box-shadow .2s; }
\t\t.event-create-page .ticket-type-card:hover { border-color: #2E4DFD; box-shadow: 0 2px 8px rgba(46,77,253,.15); }
\t\t.event-create-page .ticket-type-card .ticket-icon { width: 48px; height: 48px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 0.75rem; }
\t\t.event-create-page .ticket-type-card.paid .ticket-icon { background: #e8eeff; color: #2E4DFD; }
\t\t.event-create-page .ticket-type-card.free .ticket-icon { background: #f3e8ff; color: #7c3aed; }
\t\t.event-create-page .ticket-type-card.donation .ticket-icon { background: #ffe8ec; color: #e11d48; }
\t\t.event-create-page .form-panel { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; }
\t\t.event-create-page .form-control.is-invalid { border-color: #dc3545; }
\t\t.event-create-page .invalid-feedback { color: #dc3545; font-size: 0.85rem; }
\t\t.event-create-page .ticket-tabs { display: flex; gap: 0; border-bottom: 2px solid #dee2e6; margin-bottom: 1.25rem; }
\t\t.event-create-page .ticket-tabs a { padding: 0.5rem 1rem; color: #666; text-decoration: none; border-bottom: 2px solid transparent; margin-bottom: -2px; font-weight: 500; }
\t\t.event-create-page .ticket-tabs a:hover { color: #1a1a1a; }
\t\t.event-create-page .ticket-tabs a.active { color: #2E4DFD; border-bottom-color: #2E4DFD; }
\t\t.event-create-page .ticket-list-item { display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px solid #eee; }
\t\t.event-create-page .ticket-list-item:last-child { border-bottom: 0; }
\t\t.event-create-page .btn-outline-secondary { border-radius: 8px; }
\t\t.event-create-page .save-btn { padding: 0.6rem 1.5rem; border-radius: 8px; font-weight: 600; border: none; }
\t\t.event-create-page .tickets-tabs { border-bottom: 2px solid #dee2e6; margin-bottom: 0; }
\t\t.event-create-page .tickets-tabs a { padding: 0.6rem 1rem; color: #666; text-decoration: none; border-bottom: 2px solid transparent; margin-bottom: -2px; font-weight: 500; font-size: 0.95rem; }
\t\t.event-create-page .tickets-tabs a:hover { color: #1a1a1a; }
\t\t.event-create-page .tickets-tabs a.active { color: #2E4DFD; border-bottom-color: #2E4DFD; }
\t\t.event-create-page .ticket-row { display: flex; align-items: center; gap: 1rem; padding: 0.85rem 0; border-bottom: 1px solid #eee; }
\t\t.event-create-page .ticket-row:last-child { border-bottom: 0; }
\t\t.event-create-page .ticket-row .drag-handle { color: #adb5bd; cursor: grab; }
\t\t.event-create-page .ticket-row .status-dot { width: 8px; height: 8px; border-radius: 50%; background: #22c55e; flex-shrink: 0; }
\t\t.event-create-page .ticket-row .ticket-name { font-weight: 600; color: #1a1a1a; }
\t\t.event-create-page .ticket-row .ticket-meta { font-size: 0.85rem; color: #666; }
\t\t.event-create-page .ticket-row .ticket-price { font-weight: 500; }
\t\t.event-create-page .dropdown-menu { border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,.1); }
\t\t.event-create-page .add-more-tickets-btn { border-radius: 8px; padding: 0.5rem 1rem; font-weight: 500; }
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 60
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

        // line 61
        yield "<section class=\"team-sperkers-section-area sp1 ef-animate-slideUp\">
\t<div class=\"container\">
\t\t";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "flashes", ["success"], "method", false, false, false, 63));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 64
            yield "\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        yield "\t\t<div class=\"event-create-page\">
\t\t\t<div class=\"container-fluid px-3 px-lg-4\">
\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t<a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"back-link\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to events</a>
\t\t\t\t\t<a href=\"";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
        yield "\" class=\"preview-btn\" target=\"_blank\"><i class=\"fa-solid fa-eye me-1\"></i> Preview <i class=\"fa-solid fa-external-link-alt ms-1\" style=\"font-size: 0.7rem;\"></i></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<aside class=\"col-lg-4 col-xl-3 sidebar\">
\t\t\t\t\t\t<div class=\"summary-card mb-3\">
\t\t\t\t\t\t\t<div class=\"summary-title\">";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "title", [], "any", false, false, false, 76), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t<div class=\"summary-date\">
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t";
        // line 79
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 79, $this->source); })()), "startDatetime", [], "any", false, false, false, 79)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 79, $this->source); })()), "startDatetime", [], "any", false, false, false, 79), "D, M j, Y, g:i A"), "html", null, true);
        } else {
            yield "—";
        }
        // line 80
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3 d-flex flex-wrap gap-2 align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary rounded-pill\">";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 82, $this->source); })()), "status", [], "any", false, false, false, 82)), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 83
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
        yield "\" class=\"small text-primary\">Edit event</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"steps-label\">Steps</div>
\t\t\t\t\t\t<div class=\"step step-done\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Build event page</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Add all of your event details and let attendees know what to expect.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"step step-active\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Add tickets</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Use our suggestions to help sell more tickets or manually create your own.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Publish</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Review and publish your event.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>

\t\t\t\t\t<div class=\"col-lg-8 col-xl-6\">
\t\t\t\t\t\t";
        // line 111
        if ((array_key_exists("showAddFlow", $context) &&  !(isset($context["showAddFlow"]) || array_key_exists("showAddFlow", $context) ? $context["showAddFlow"] : (function () { throw new RuntimeError('Variable "showAddFlow" does not exist.', 111, $this->source); })()))) {
            // line 112
            yield "\t\t\t\t\t\t\t";
            // line 113
            yield "\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t<h1 class=\"h4 fw-bold mb-0\">Tickets</h1>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn vl-btn4 add-more-tickets-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"addMoreDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa-solid fa-plus me-2\" aria-hidden=\"true\"></i>Add more tickets <i class=\"fa-solid fa-chevron-down ms-1\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"addMoreDropdown\">
\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 118, $this->source); })()), "id", [], "any", false, false, false, 118), "type" => "paid"]), "html", null, true);
            yield "\">Paid ticket</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 119, $this->source); })()), "id", [], "any", false, false, false, 119), "type" => "free"]), "html", null, true);
            yield "\">Free ticket</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120), "type" => "donation"]), "html", null, true);
            yield "\">Donation ticket</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav class=\"tickets-tabs mb-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"active\">Admission</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Add-ons</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Promotions</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Holds</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Settings</a>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t";
            // line 132
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 132, $this->source); })()), "tickets", [], "any", false, false, false, 132));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 133
                yield "\t\t\t\t\t\t\t\t\t<div class=\"ticket-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"drag-handle\"><i class=\"fa-solid fa-grip-lines\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"status-dot\" title=\"On sale\"></span>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-name\">";
                // line 137
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 137), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-meta\">On Sale • Ends ";
                // line 138
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "saleEnd", [], "any", false, false, false, 138), "M j, Y a\t g:i A"), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-meta\">Sold: ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "quantitySold", [], "any", false, false, false, 140), "html", null, true);
                yield "/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "quantityAvailable", [], "any", false, false, false, 140), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-price\">";
                // line 141
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "price", [], "any", false, false, false, 141) == "0") || (CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "price", [], "any", false, false, false, 141) == "0.00"))) {
                    yield "Free";
                } else {
                    yield "\$";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "price", [], "any", false, false, false, 141), "html", null, true);
                }
                yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-sm text-muted p-0\" type=\"button\" id=\"menu";
                // line 143
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 143), "html", null, true);
                yield "\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa-solid fa-ellipsis-v\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"menu";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 144), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145), "ticketId" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 145)]), "html", null, true);
                yield "\"><i class=\"fa-solid fa-pen me-2\"></i> Edit</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ticket_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 148, $this->source); })()), "id", [], "any", false, false, false, 148), "ticketId" => CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 148)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('Delete this ticket?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete_ticket_" . CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 149))), "html", null, true);
                yield "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\"><i class=\"fa-solid fa-trash me-2\"></i> Delete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                $context['_iterated'] = true;
            }
            // line 156
            if (!$context['_iterated']) {
                // line 157
                yield "\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 py-3\">No tickets yet. Click \"Add more tickets\" to create one.</p>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent'], $context['_iterated']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 159
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 160
            $context["totalCapacity"] = 0;
            // line 161
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 161, $this->source); })()), "tickets", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                $context["totalCapacity"] = ((isset($context["totalCapacity"]) || array_key_exists("totalCapacity", $context) ? $context["totalCapacity"] : (function () { throw new RuntimeError('Variable "totalCapacity" does not exist.', 161, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["t"], "quantityAvailable", [], "any", false, false, false, 161));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 162
            yield "\t\t\t\t\t\t\t";
            $context["totalSold"] = 0;
            // line 163
            yield "\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 163, $this->source); })()), "tickets", [], "any", false, false, false, 163));
            foreach ($context['_seq'] as $context["_key"] => $context["t"]) {
                $context["totalSold"] = ((isset($context["totalSold"]) || array_key_exists("totalSold", $context) ? $context["totalSold"] : (function () { throw new RuntimeError('Variable "totalSold" does not exist.', 163, $this->source); })()) + CoreExtension::getAttribute($this->env, $this->source, $context["t"], "quantitySold", [], "any", false, false, false, 163));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['t'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 164
            yield "\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mt-3 py-2 border-top\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\"><i class=\"fa-solid fa-info-circle me-1\"></i> Event capacity</span>
\t\t\t\t\t\t\t\t<span>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSold"]) || array_key_exists("totalSold", $context) ? $context["totalSold"] : (function () { throw new RuntimeError('Variable "totalSold" does not exist.', 166, $this->source); })()), "html", null, true);
            yield "/";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalCapacity"]) || array_key_exists("totalCapacity", $context) ? $context["totalCapacity"] : (function () { throw new RuntimeError('Variable "totalCapacity" does not exist.', 166, $this->source); })()), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167)]), "html", null, true);
            yield "\" class=\"text-primary small\">Edit capacity</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mt-4\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_publish", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 170, $this->source); })()), "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" class=\"btn vl-btn4 save-btn\">Next</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        } elseif ((null ===         // line 172
(isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 172, $this->source); })()))) {
            // line 173
            yield "\t\t\t\t\t\t\t";
            // line 174
            yield "\t\t\t\t\t\t\t<h1 class=\"h4 fw-bold mb-2\">Create tickets</h1>
\t\t\t\t\t\t\t<p class=\"text-muted small mb-4\">Choose a ticket type or build a section with multiple ticket types.</p>
\t\t\t\t\t\t\t<a href=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 176, $this->source); })()), "id", [], "any", false, false, false, 176), "type" => "paid"]), "html", null, true);
            yield "\" class=\"ticket-type-card paid d-block\">
\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-ticket\"></i></div>
\t\t\t\t\t\t\t\t<strong>Paid</strong>
\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that people have to pay for.</p>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right float-end mt-2 text-muted\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 182, $this->source); })()), "id", [], "any", false, false, false, 182), "type" => "free"]), "html", null, true);
            yield "\" class=\"ticket-type-card free d-block\">
\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-bolt\"></i></div>
\t\t\t\t\t\t\t\t<strong>Free</strong>
\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that no one has to pay for.</p>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right float-end mt-2 text-muted\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 188, $this->source); })()), "id", [], "any", false, false, false, 188), "type" => "donation"]), "html", null, true);
            yield "\" class=\"ticket-type-card donation d-block\">
\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-heart\"></i></div>
\t\t\t\t\t\t\t\t<strong>Donation</strong>
\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Let people pay any amount for their ticket.</p>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right float-end mt-2 text-muted\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p class=\"small text-muted mt-3 mb-2\">Create a section if you want to sell multiple ticket types that share the same inventory. (ex. Floor, Mezzanine, etc.)</p>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" disabled>Create a section</button>
\t\t\t\t\t\t";
        } else {
            // line 197
            yield "\t\t\t\t\t\t\t";
            // line 198
            yield "\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 199, $this->source); })()), "id", [], "any", false, false, false, 199)]), "html", null, true);
            yield "\" class=\"back-link small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Choose another type</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            // line 201
            if (((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 201, $this->source); })()) == "paid")) {
                // line 202
                yield "\t\t\t\t\t\t\t\t<div class=\"ticket-type-card paid d-block mb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-ticket\"></i></div>
\t\t\t\t\t\t\t\t\t<strong>Paid</strong>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that people have to pay for.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } elseif ((            // line 207
(isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 207, $this->source); })()) == "free")) {
                // line 208
                yield "\t\t\t\t\t\t\t\t<div class=\"ticket-type-card free d-block mb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-bolt\"></i></div>
\t\t\t\t\t\t\t\t\t<strong>Free</strong>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that no one has to pay for.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 214
                yield "\t\t\t\t\t\t\t\t<div class=\"ticket-type-card donation d-block mb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-heart\"></i></div>
\t\t\t\t\t\t\t\t\t<strong>Donation</strong>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Let people pay any amount for their ticket.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            // line 220
            yield "\t\t\t\t\t\t\t<p class=\"small text-muted mt-3\">Fill in the details in the form on the right.</p>
\t\t\t\t\t\t";
        }
        // line 222
        yield "\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 224
        if ((array_key_exists("showAddFlow", $context) && (isset($context["showAddFlow"]) || array_key_exists("showAddFlow", $context) ? $context["showAddFlow"] : (function () { throw new RuntimeError('Variable "showAddFlow" does not exist.', 224, $this->source); })()))) {
            // line 225
            yield "\t\t\t\t\t<div class=\"col-xl-3\">
\t\t\t\t\t\t<div class=\"form-panel sticky-top\">
\t\t\t\t\t\t\t";
            // line 227
            if ((null === (isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 227, $this->source); })()))) {
                // line 228
                yield "\t\t\t\t\t\t\t\t<div class=\"text-center text-muted py-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket fa-2x mb-2 opacity-50\"></i>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small\">Choose a ticket type on the left to add a ticket.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            } else {
                // line 233
                yield "\t\t\t\t\t\t\t\t<h3 class=\"h6 fw-bold mb-3\">Add ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), (isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 233, $this->source); })())), "html", null, true);
                yield " ticket</h3>
\t\t\t\t\t\t\t\t<div class=\"ticket-tabs\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 235
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 235, $this->source); })()), "id", [], "any", false, false, false, 235), "type" => "paid"]), "html", null, true);
                yield "\" class=\"";
                yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 235, $this->source); })()) == "paid")) ? ("active") : (""));
                yield "\">Paid</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 236
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 236, $this->source); })()), "id", [], "any", false, false, false, 236), "type" => "free"]), "html", null, true);
                yield "\" class=\"";
                yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 236, $this->source); })()) == "free")) ? ("active") : (""));
                yield "\">Free</a>
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 237
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 237, $this->source); })()), "id", [], "any", false, false, false, 237), "type" => "donation"]), "html", null, true);
                yield "\" class=\"";
                yield ((((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 237, $this->source); })()) == "donation")) ? ("active") : (""));
                yield "\">Donation</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 239
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 239, $this->source); })()), 'form_start', ["attr" => ["id" => "ticket-form"]]);
                yield "
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t";
                // line 241
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 241, $this->source); })()), "name", [], "any", false, false, false, 241), 'label');
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 242
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 242, $this->source); })()), "name", [], "any", false, false, false, 242), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 243
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 243, $this->source); })()), "name", [], "any", false, false, false, 243), 'errors');
                yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t";
                // line 246
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 246, $this->source); })()), "quantityAvailable", [], "any", false, false, false, 246), 'label');
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 247
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 247, $this->source); })()), "quantityAvailable", [], "any", false, false, false, 247), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 248
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 248, $this->source); })()), "quantityAvailable", [], "any", false, false, false, 248), 'errors');
                yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t";
                // line 251
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 251, $this->source); })()), "price", [], "any", false, false, false, 251), 'label');
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 252
                if (((isset($context["selectedType"]) || array_key_exists("selectedType", $context) ? $context["selectedType"] : (function () { throw new RuntimeError('Variable "selectedType" does not exist.', 252, $this->source); })()) == "free")) {
                    // line 253
                    yield "\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 254
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 254, $this->source); })()), "price", [], "any", false, false, false, 254), 'widget', ["attr" => ["class" => "form-control", "readonly" => "readonly"]]);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-light\">Free</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 258
                    yield "\t\t\t\t\t\t\t\t\t\t";
                    yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 258, $this->source); })()), "price", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                    yield "
\t\t\t\t\t\t\t\t\t";
                }
                // line 260
                yield "\t\t\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 260, $this->source); })()), "price", [], "any", false, false, false, 260), 'errors');
                yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t";
                // line 263
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 263, $this->source); })()), "saleStart", [], "any", false, false, false, 263), 'label');
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 264
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 264, $this->source); })()), "saleStart", [], "any", false, false, false, 264), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 265
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 265, $this->source); })()), "saleStart", [], "any", false, false, false, 265), 'errors');
                yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t";
                // line 268
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 268, $this->source); })()), "saleEnd", [], "any", false, false, false, 268), 'label');
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 269
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 269, $this->source); })()), "saleEnd", [], "any", false, false, false, 269), 'widget', ["attr" => ["class" => "form-control form-control-sm"]]);
                yield "
\t\t\t\t\t\t\t\t\t";
                // line 270
                yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 270, $this->source); })()), "saleEnd", [], "any", false, false, false, 270), 'errors');
                yield "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 273
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 273, $this->source); })()), "id", [], "any", false, false, false, 273)]), "html", null, true);
                yield "\" class=\"btn btn-outline-secondary btn-sm\">Cancel</a>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn vl-btn4 save-btn btn-sm\">Save</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                // line 276
                yield                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["ticketForm"]) || array_key_exists("ticketForm", $context) ? $context["ticketForm"] : (function () { throw new RuntimeError('Variable "ticketForm" does not exist.', 276, $this->source); })()), 'form_end');
                yield "
\t\t\t\t\t\t\t";
            }
            // line 278
            yield "
      // NOTE: Consider caching this
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 283
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
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
        return "event_tickets.html.twig";
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
        return array (  700 => 283,  693 => 278,  688 => 276,  682 => 273,  676 => 270,  672 => 269,  668 => 268,  662 => 265,  658 => 264,  654 => 263,  647 => 260,  641 => 258,  634 => 254,  631 => 253,  629 => 252,  625 => 251,  619 => 248,  615 => 247,  611 => 246,  605 => 243,  601 => 242,  597 => 241,  592 => 239,  585 => 237,  579 => 236,  573 => 235,  567 => 233,  560 => 228,  558 => 227,  554 => 225,  552 => 224,  548 => 222,  544 => 220,  536 => 214,  528 => 208,  526 => 207,  519 => 202,  517 => 201,  512 => 199,  509 => 198,  507 => 197,  495 => 188,  486 => 182,  477 => 176,  473 => 174,  471 => 173,  469 => 172,  464 => 170,  458 => 167,  452 => 166,  448 => 164,  438 => 163,  435 => 162,  425 => 161,  423 => 160,  420 => 159,  413 => 157,  411 => 156,  399 => 149,  395 => 148,  389 => 145,  385 => 144,  381 => 143,  371 => 141,  365 => 140,  360 => 138,  356 => 137,  350 => 133,  345 => 132,  330 => 120,  326 => 119,  322 => 118,  315 => 113,  313 => 112,  311 => 111,  280 => 83,  276 => 82,  272 => 80,  266 => 79,  260 => 76,  251 => 70,  247 => 69,  242 => 66,  233 => 64,  229 => 63,  225 => 61,  212 => 60,  151 => 8,  138 => 7,  115 => 5,  92 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Add tickets - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}Add tickets{% endblock %}
{% block page_breadcrumb %}Add tickets{% endblock %}

{% block page_styles %}
\t<style>
\t\t.event-create-page { background: #f5f5f5; min-height: 100vh; padding: 1.5rem 0 3rem; }
\t\t.event-create-page .back-link { color: #2E4DFD; text-decoration: none; font-size: 0.95rem; }
\t\t.event-create-page .back-link:hover { color: #1e3dd9; }
\t\t.event-create-page .preview-btn { border: 1px solid #dee2e6; border-radius: 2rem; padding: 0.4rem 1rem; background: #fff; color: #333; font-size: 0.9rem; text-decoration: none; }
\t\t.event-create-page .preview-btn:hover { background: #f8f9fa; color: #333; }
\t\t.event-create-page .sidebar { max-width: 300px; }
\t\t.event-create-page .summary-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.25rem; position: relative; overflow: hidden; }
\t\t.event-create-page .summary-card::before { content: \"\"; position: absolute; top: -20px; right: -20px; width: 120px; height: 120px; background: linear-gradient(135deg, #ff9a56 0%, #ff6b6b 100%); border-radius: 50%; opacity: 0.35; }
\t\t.event-create-page .summary-title { font-size: 1.25rem; font-weight: 700; color: #1a1a1a; margin-bottom: 0.5rem; }
\t\t.event-create-page .summary-date { font-size: 0.9rem; color: #555; }
\t\t.event-create-page .steps-label { font-size: 0.8rem; color: #888; text-transform: uppercase; letter-spacing: 0.05em; margin: 1.5rem 0 0.75rem; }
\t\t.event-create-page .step { display: flex; align-items: flex-start; gap: 0.75rem; margin-bottom: 1rem; }
\t\t.event-create-page .step-radio { width: 20px; height: 20px; border-radius: 50%; border: 2px solid #dee2e6; flex-shrink: 0; margin-top: 2px; }
\t\t.event-create-page .step.step-active .step-radio { background: #2E4DFD; border-color: #2E4DFD; }
\t\t.event-create-page .step.step-done .step-radio { background: #2E4DFD; border-color: #2E4DFD; background-image: url(\"data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='white' width='14' height='14'%3E%3Cpath d='M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z'/%3E%3C/svg%3E\"); background-size: 12px; }
\t\t.event-create-page .step-title { font-weight: 600; color: #1a1a1a; }
\t\t.event-create-page .step-desc { font-size: 0.85rem; color: #666; margin-top: 0.2rem; }
\t\t.event-create-page .section-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; margin-bottom: 1rem; }
\t\t.event-create-page .ticket-type-card { display: block; text-decoration: none; color: inherit; border: 1px solid #dee2e6; border-radius: 12px; padding: 1.25rem; margin-bottom: 1rem; transition: border-color .2s, box-shadow .2s; }
\t\t.event-create-page .ticket-type-card:hover { border-color: #2E4DFD; box-shadow: 0 2px 8px rgba(46,77,253,.15); }
\t\t.event-create-page .ticket-type-card .ticket-icon { width: 48px; height: 48px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 0.75rem; }
\t\t.event-create-page .ticket-type-card.paid .ticket-icon { background: #e8eeff; color: #2E4DFD; }
\t\t.event-create-page .ticket-type-card.free .ticket-icon { background: #f3e8ff; color: #7c3aed; }
\t\t.event-create-page .ticket-type-card.donation .ticket-icon { background: #ffe8ec; color: #e11d48; }
\t\t.event-create-page .form-panel { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; }
\t\t.event-create-page .form-control.is-invalid { border-color: #dc3545; }
\t\t.event-create-page .invalid-feedback { color: #dc3545; font-size: 0.85rem; }
\t\t.event-create-page .ticket-tabs { display: flex; gap: 0; border-bottom: 2px solid #dee2e6; margin-bottom: 1.25rem; }
\t\t.event-create-page .ticket-tabs a { padding: 0.5rem 1rem; color: #666; text-decoration: none; border-bottom: 2px solid transparent; margin-bottom: -2px; font-weight: 500; }
\t\t.event-create-page .ticket-tabs a:hover { color: #1a1a1a; }
\t\t.event-create-page .ticket-tabs a.active { color: #2E4DFD; border-bottom-color: #2E4DFD; }
\t\t.event-create-page .ticket-list-item { display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 0; border-bottom: 1px solid #eee; }
\t\t.event-create-page .ticket-list-item:last-child { border-bottom: 0; }
\t\t.event-create-page .btn-outline-secondary { border-radius: 8px; }
\t\t.event-create-page .save-btn { padding: 0.6rem 1.5rem; border-radius: 8px; font-weight: 600; border: none; }
\t\t.event-create-page .tickets-tabs { border-bottom: 2px solid #dee2e6; margin-bottom: 0; }
\t\t.event-create-page .tickets-tabs a { padding: 0.6rem 1rem; color: #666; text-decoration: none; border-bottom: 2px solid transparent; margin-bottom: -2px; font-weight: 500; font-size: 0.95rem; }
\t\t.event-create-page .tickets-tabs a:hover { color: #1a1a1a; }
\t\t.event-create-page .tickets-tabs a.active { color: #2E4DFD; border-bottom-color: #2E4DFD; }
\t\t.event-create-page .ticket-row { display: flex; align-items: center; gap: 1rem; padding: 0.85rem 0; border-bottom: 1px solid #eee; }
\t\t.event-create-page .ticket-row:last-child { border-bottom: 0; }
\t\t.event-create-page .ticket-row .drag-handle { color: #adb5bd; cursor: grab; }
\t\t.event-create-page .ticket-row .status-dot { width: 8px; height: 8px; border-radius: 50%; background: #22c55e; flex-shrink: 0; }
\t\t.event-create-page .ticket-row .ticket-name { font-weight: 600; color: #1a1a1a; }
\t\t.event-create-page .ticket-row .ticket-meta { font-size: 0.85rem; color: #666; }
\t\t.event-create-page .ticket-row .ticket-price { font-weight: 500; }
\t\t.event-create-page .dropdown-menu { border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,.1); }
\t\t.event-create-page .add-more-tickets-btn { border-radius: 8px; padding: 0.5rem 1rem; font-weight: 500; }
\t</style>
{% endblock %}

{% block content %}
<section class=\"team-sperkers-section-area sp1 ef-animate-slideUp\">
\t<div class=\"container\">
\t\t{% for message in app.flashes('success') %}
\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t\t{% endfor %}
\t\t<div class=\"event-create-page\">
\t\t\t<div class=\"container-fluid px-3 px-lg-4\">
\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t<a href=\"{{ path('app_events') }}\" class=\"back-link\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to events</a>
\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"preview-btn\" target=\"_blank\"><i class=\"fa-solid fa-eye me-1\"></i> Preview <i class=\"fa-solid fa-external-link-alt ms-1\" style=\"font-size: 0.7rem;\"></i></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<aside class=\"col-lg-4 col-xl-3 sidebar\">
\t\t\t\t\t\t<div class=\"summary-card mb-3\">
\t\t\t\t\t\t\t<div class=\"summary-title\">{{ event.title }}</div>
\t\t\t\t\t\t\t<div class=\"summary-date\">
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t{% if event.startDatetime %}{{ event.startDatetime|date('D, M j, Y, g:i A') }}{% else %}—{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3 d-flex flex-wrap gap-2 align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary rounded-pill\">{{ event.status|capitalize }}</span>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_edit', { id: event.id }) }}\" class=\"small text-primary\">Edit event</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"steps-label\">Steps</div>
\t\t\t\t\t\t<div class=\"step step-done\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Build event page</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Add all of your event details and let attendees know what to expect.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"step step-active\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Add tickets</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Use our suggestions to help sell more tickets or manually create your own.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"step\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Publish</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Review and publish your event.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>

\t\t\t\t\t<div class=\"col-lg-8 col-xl-6\">
\t\t\t\t\t\t{% if showAddFlow is defined and not showAddFlow %}
\t\t\t\t\t\t\t{# List view: Tickets management (after Save or when no add flow) #}
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t\t\t\t<h1 class=\"h4 fw-bold mb-0\">Tickets</h1>
\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"btn vl-btn4 add-more-tickets-btn dropdown-toggle\" href=\"#\" role=\"button\" id=\"addMoreDropdown\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa-solid fa-plus me-2\" aria-hidden=\"true\"></i>Add more tickets <i class=\"fa-solid fa-chevron-down ms-1\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"addMoreDropdown\">
\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_event_tickets', { id: event.id, type: 'paid' }) }}\">Paid ticket</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_event_tickets', { id: event.id, type: 'free' }) }}\">Free ticket</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_event_tickets', { id: event.id, type: 'donation' }) }}\">Donation ticket</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<nav class=\"tickets-tabs mb-3\">
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"active\">Admission</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Add-ons</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Promotions</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Holds</a>
\t\t\t\t\t\t\t\t<a href=\"#\">Settings</a>
\t\t\t\t\t\t\t</nav>
\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t{% for ticket in event.tickets %}
\t\t\t\t\t\t\t\t\t<div class=\"ticket-row\">
\t\t\t\t\t\t\t\t\t\t<span class=\"drag-handle\"><i class=\"fa-solid fa-grip-lines\"></i></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"status-dot\" title=\"On sale\"></span>
\t\t\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-name\">{{ ticket.name }}</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-meta\">On Sale • Ends {{ ticket.saleEnd|date('M j, Y \\a\\t g:i A') }}</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-meta\">Sold: {{ ticket.quantitySold }}/{{ ticket.quantityAvailable }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-price\">{% if ticket.price == '0' or ticket.price == '0.00' %}Free{% else %}\${{ ticket.price }}{% endif %}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-link btn-sm text-muted p-0\" type=\"button\" id=\"menu{{ ticket.id }}\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"fa-solid fa-ellipsis-v\"></i></button>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\" aria-labelledby=\"menu{{ ticket.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a class=\"dropdown-item\" href=\"{{ path('app_ticket_edit', { id: event.id, ticketId: ticket.id }) }}\"><i class=\"fa-solid fa-pen me-2\"></i> Edit</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><hr class=\"dropdown-divider\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_ticket_delete', { id: event.id, ticketId: ticket.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Delete this ticket?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete_ticket_' ~ ticket.id) }}\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\"><i class=\"fa-solid fa-trash me-2\"></i> Delete</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0 py-3\">No tickets yet. Click \"Add more tickets\" to create one.</p>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% set totalCapacity = 0 %}
\t\t\t\t\t\t\t{% for t in event.tickets %}{% set totalCapacity = totalCapacity + t.quantityAvailable %}{% endfor %}
\t\t\t\t\t\t\t{% set totalSold = 0 %}
\t\t\t\t\t\t\t{% for t in event.tickets %}{% set totalSold = totalSold + t.quantitySold %}{% endfor %}
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mt-3 py-2 border-top\">
\t\t\t\t\t\t\t\t<span class=\"text-muted\"><i class=\"fa-solid fa-info-circle me-1\"></i> Event capacity</span>
\t\t\t\t\t\t\t\t<span>{{ totalSold }}/{{ totalCapacity }}</span>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_edit', { id: event.id }) }}\" class=\"text-primary small\">Edit capacity</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex justify-content-end mt-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_publish', { id: event.id }) }}\" class=\"btn vl-btn4 save-btn\">Next</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% elseif selectedType is null %}
\t\t\t\t\t\t\t{# Add flow step 1: show only the three type choices #}
\t\t\t\t\t\t\t<h1 class=\"h4 fw-bold mb-2\">Create tickets</h1>
\t\t\t\t\t\t\t<p class=\"text-muted small mb-4\">Choose a ticket type or build a section with multiple ticket types.</p>
\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id, type: 'paid' }) }}\" class=\"ticket-type-card paid d-block\">
\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-ticket\"></i></div>
\t\t\t\t\t\t\t\t<strong>Paid</strong>
\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that people have to pay for.</p>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right float-end mt-2 text-muted\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id, type: 'free' }) }}\" class=\"ticket-type-card free d-block\">
\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-bolt\"></i></div>
\t\t\t\t\t\t\t\t<strong>Free</strong>
\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that no one has to pay for.</p>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right float-end mt-2 text-muted\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id, type: 'donation' }) }}\" class=\"ticket-type-card donation d-block\">
\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-heart\"></i></div>
\t\t\t\t\t\t\t\t<strong>Donation</strong>
\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Let people pay any amount for their ticket.</p>
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right float-end mt-2 text-muted\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<p class=\"small text-muted mt-3 mb-2\">Create a section if you want to sell multiple ticket types that share the same inventory. (ex. Floor, Mezzanine, etc.)</p>
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary btn-sm\" disabled>Create a section</button>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t{# Step 2: show only the chosen type, then form is on the right #}
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id }) }}\" class=\"back-link small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Choose another type</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if selectedType == 'paid' %}
\t\t\t\t\t\t\t\t<div class=\"ticket-type-card paid d-block mb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-ticket\"></i></div>
\t\t\t\t\t\t\t\t\t<strong>Paid</strong>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that people have to pay for.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% elseif selectedType == 'free' %}
\t\t\t\t\t\t\t\t<div class=\"ticket-type-card free d-block mb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-bolt\"></i></div>
\t\t\t\t\t\t\t\t\t<strong>Free</strong>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Create a ticket that no one has to pay for.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<div class=\"ticket-type-card donation d-block mb-0\">
\t\t\t\t\t\t\t\t\t<div class=\"ticket-icon\"><i class=\"fa-solid fa-heart\"></i></div>
\t\t\t\t\t\t\t\t\t<strong>Donation</strong>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">Let people pay any amount for their ticket.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t<p class=\"small text-muted mt-3\">Fill in the details in the form on the right.</p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>

\t\t\t\t\t{% if showAddFlow is defined and showAddFlow %}
\t\t\t\t\t<div class=\"col-xl-3\">
\t\t\t\t\t\t<div class=\"form-panel sticky-top\">
\t\t\t\t\t\t\t{% if selectedType is null %}
\t\t\t\t\t\t\t\t<div class=\"text-center text-muted py-4\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket fa-2x mb-2 opacity-50\"></i>
\t\t\t\t\t\t\t\t\t<p class=\"mb-0 small\">Choose a ticket type on the left to add a ticket.</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<h3 class=\"h6 fw-bold mb-3\">Add {{ selectedType|capitalize }} ticket</h3>
\t\t\t\t\t\t\t\t<div class=\"ticket-tabs\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id, type: 'paid' }) }}\" class=\"{{ selectedType == 'paid' ? 'active' : '' }}\">Paid</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id, type: 'free' }) }}\" class=\"{{ selectedType == 'free' ? 'active' : '' }}\">Free</a>
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id, type: 'donation' }) }}\" class=\"{{ selectedType == 'donation' ? 'active' : '' }}\">Donation</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ form_start(ticketForm, { attr: { id: 'ticket-form' } }) }}
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t{{ form_label(ticketForm.name) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(ticketForm.name, { attr: { class: 'form-control form-control-sm' } }) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(ticketForm.name) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t{{ form_label(ticketForm.quantityAvailable) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(ticketForm.quantityAvailable, { attr: { class: 'form-control form-control-sm' } }) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(ticketForm.quantityAvailable) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t{{ form_label(ticketForm.price) }}
\t\t\t\t\t\t\t\t\t{% if selectedType == 'free' %}
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group input-group-sm\">
\t\t\t\t\t\t\t\t\t\t\t{{ form_widget(ticketForm.price, { attr: { class: 'form-control', readonly: 'readonly' } }) }}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-light\">Free</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{{ form_widget(ticketForm.price, { attr: { class: 'form-control form-control-sm' } }) }}
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{{ form_errors(ticketForm.price) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t{{ form_label(ticketForm.saleStart) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(ticketForm.saleStart, { attr: { class: 'form-control form-control-sm' } }) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(ticketForm.saleStart) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t{{ form_label(ticketForm.saleEnd) }}
\t\t\t\t\t\t\t\t\t{{ form_widget(ticketForm.saleEnd, { attr: { class: 'form-control form-control-sm' } }) }}
\t\t\t\t\t\t\t\t\t{{ form_errors(ticketForm.saleEnd) }}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id }) }}\" class=\"btn btn-outline-secondary btn-sm\">Cancel</a>
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn vl-btn4 save-btn btn-sm\">Save</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{{ form_end(ticketForm) }}
\t\t\t\t\t\t\t{% endif %}

      // NOTE: Consider caching this
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{% endblock %}
", "event_tickets.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/event_tickets.html.twig");
    }
}

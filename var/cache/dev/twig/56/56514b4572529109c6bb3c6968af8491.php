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

/* event_publish.html.twig */
class __TwigTemplate_c2bae62505537589ded7e46bf94c41c2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_publish.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_publish.html.twig"));

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

        yield "Publish - ";
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

        yield "Publish";
        
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

        yield "Publish";
        
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
\t\t.event-create-page .section-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; margin-bottom: 1.25rem; }
\t\t.event-create-page .publish-title { font-size: 1.5rem; font-weight: 700; color: #1a1a1a; margin-bottom: 0.35rem; }
\t\t.event-create-page .publish-subtitle { color: #666; margin-bottom: 1.5rem; }
\t\t.event-create-page .event-preview-card { border: 1px solid #eee; border-radius: 12px; overflow: hidden; }
\t\t.event-create-page .event-preview-card .img-placeholder { height: 140px; background: #eee; display: flex; align-items: center; justify-content: center; color: #999; }
\t\t.event-create-page .event-preview-card .img-placeholder img { width: 100%; height: 100%; object-fit: cover; }
\t\t.event-create-page .publish-section-title { font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem; }
\t\t.event-create-page .publish-section-desc { font-size: 0.9rem; color: #666; margin-bottom: 0.75rem; }
\t\t.event-create-page .save-btn { padding: 0.6rem 1.5rem; border-radius: 8px; font-weight: 600; border: none; }
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 38
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

        // line 39
        yield "<section class=\"team-sperkers-section-area sp1 ef-animate-slideUp\">
\t<div class=\"container\">
\t\t<div class=\"event-create-page\">
\t\t\t<div class=\"container-fluid px-3 px-lg-4\">
\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t<a href=\"";
        // line 44
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"back-link\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to events</a>
\t\t\t\t\t<a href=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45)]), "html", null, true);
        yield "\" class=\"preview-btn\" target=\"_blank\"><i class=\"fa-solid fa-eye me-1\"></i> Preview <i class=\"fa-solid fa-external-link-alt ms-1\" style=\"font-size: 0.7rem;\"></i></a>
\t\t\t\t</div>

\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<aside class=\"col-lg-4 col-xl-3 sidebar\">
\t\t\t\t\t\t<div class=\"summary-card mb-3\">
\t\t\t\t\t\t\t<div class=\"summary-title\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 51, $this->source); })()), "title", [], "any", false, false, false, 51), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t<div class=\"summary-date\">
\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-calendar\"></i>
\t\t\t\t\t\t\t\t";
        // line 54
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 54, $this->source); })()), "startDatetime", [], "any", false, false, false, 54)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 54, $this->source); })()), "startDatetime", [], "any", false, false, false, 54), "D, M j, Y, g:i A"), "html", null, true);
        } else {
            yield "—";
        }
        // line 55
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mt-3 d-flex flex-wrap gap-2 align-items-center\">
\t\t\t\t\t\t\t\t<span class=\"badge bg-secondary rounded-pill\">";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57)), "html", null, true);
        yield "</span>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
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
\t\t\t\t\t\t<div class=\"step step-done\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Add tickets</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Use our suggestions to help sell more tickets or manually create your own.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"step step-active\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Publish</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Review your event page and settings, then publish your event.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>

\t\t\t\t\t<div class=\"col-lg-8 col-xl-9\">
\t\t\t\t\t\t<h1 class=\"publish-title\">Your event is almost ready to publish</h1>
\t\t\t\t\t\t<p class=\"publish-subtitle\">Review your settings and let everyone find your event.</p>

\t\t\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"section-card event-preview-card p-0\">
\t\t\t\t\t\t\t\t\t<div class=\"img-placeholder\">
\t\t\t\t\t\t\t\t\t\t";
        // line 93
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 93, $this->source); })()), "image", [], "any", false, false, false, 93)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 94
            yield "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 94, $this->source); })()), "image", [], "any", false, false, false, 94), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 94, $this->source); })()), "title", [], "any", false, false, false, 94), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 96
            yield "\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-image fa-3x\"></i>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 98
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold\">";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 100, $this->source); })()), "title", [], "any", false, false, false, 100), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-muted mt-1\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 102
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "startDatetime", [], "any", false, false, false, 102)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "startDatetime", [], "any", false, false, false, 102), "l, F j"), "html", null, true);
            yield " • ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "startDatetime", [], "any", false, false, false, 102), "ga"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 102, $this->source); })()), "endDatetime", [], "any", false, false, false, 102), "ga"), "html", null, true);
        } else {
            yield "—";
        }
        // line 103
        yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 104
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 104, $this->source); })()), "venue", [], "any", false, false, false, 104)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 105
            yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-muted mt-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "venue", [], "any", false, false, false, 105), "name", [], "any", false, false, false, 105), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "venue", [], "any", false, false, false, 105), "address", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "venue", [], "any", false, false, false, 105), "address", [], "any", false, false, false, 105), "html", null, true);
            }
            yield "</div>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 107
        yield "\t\t\t\t\t\t\t\t\t\t<div class=\"small mt-1\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 107, $this->source); })()), "priceLabel", [], "any", false, false, false, 107), "html", null, true);
        yield " • ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 107, $this->source); })()), "tickets", [], "any", false, false, false, 107)), "html", null, true);
        yield " ticket type(s)</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 108
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "id", [], "any", false, false, false, 108)]), "html", null, true);
        yield "\" class=\"small text-primary mt-2 d-inline-block\">Preview</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Event type and category</div>
\t\t\t\t\t\t\t\t\t<p class=\"publish-section-desc\">Your type and category help your event appear in more searches.</p>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label small text-muted\">Type</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select form-select-sm\" disabled><option>Other</option></select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label small text-muted\">Category</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select form-select-sm\" disabled>
\t\t\t\t\t\t\t\t\t\t\t<option>Other</option>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 124, $this->source); })()), "categories", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            yield "<option selected>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cat"], "name", [], "any", false, false, false, 124), "html", null, true);
            yield "</option>";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['cat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Tags</div>
\t\t\t\t\t\t\t\t\t<p class=\"publish-section-desc\">Help people discover your event by adding tags related to your event's theme, topic, vibe, location, and more.</p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Add search keywords to your event\" disabled />
\t\t\t\t\t\t\t\t\t<span class=\"small text-muted\">0/10 tags</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Organized by</div>
\t\t\t\t\t\t\t\t\t<p class=\"publish-section-desc\">Adding a name will create an organizer profile after publishing.</p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" value=\"";
        // line 137
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 137, $this->source); })()), "organizer", [], "any", false, false, false, 137)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 137, $this->source); })()), "organizer", [], "any", false, false, false, 137), "name", [], "any", false, false, false, 137), "html", null, true)) : (""));
        yield "\" disabled />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Is your event public or private?</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"visibility\" id=\"visPublic\" value=\"public\" checked disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"visPublic\">Public — Shared on Eventify and search engines</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"visibility\" id=\"visPrivate\" value=\"private\" disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"visPrivate\">Private — Shared only with a select audience</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">When should we publish your event?</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"when\" id=\"whenNow\" value=\"now\" checked disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"whenNow\">Publish now</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"when\" id=\"whenLater\" value=\"later\" disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"whenLater\">Schedule for later</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
        // line 167
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_publish", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 167, $this->source); })()), "id", [], "any", false, false, false, 167)]), "html", null, true);
        yield "\" class=\"d-flex justify-content-end mt-3\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("publish_event_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 168, $this->source); })()), "id", [], "any", false, false, false, 168))), "html", null, true);
        yield "\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn vl-btn4 save-btn\">Publish now</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
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
        return "event_publish.html.twig";
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
        return array (  417 => 168,  413 => 167,  380 => 137,  366 => 125,  355 => 124,  336 => 108,  329 => 107,  319 => 105,  317 => 104,  314 => 103,  304 => 102,  299 => 100,  295 => 98,  291 => 96,  283 => 94,  281 => 93,  243 => 58,  239 => 57,  235 => 55,  229 => 54,  223 => 51,  214 => 45,  210 => 44,  203 => 39,  190 => 38,  151 => 8,  138 => 7,  115 => 5,  92 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Publish - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}Publish{% endblock %}
{% block page_breadcrumb %}Publish{% endblock %}

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
\t\t.event-create-page .section-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; margin-bottom: 1.25rem; }
\t\t.event-create-page .publish-title { font-size: 1.5rem; font-weight: 700; color: #1a1a1a; margin-bottom: 0.35rem; }
\t\t.event-create-page .publish-subtitle { color: #666; margin-bottom: 1.5rem; }
\t\t.event-create-page .event-preview-card { border: 1px solid #eee; border-radius: 12px; overflow: hidden; }
\t\t.event-create-page .event-preview-card .img-placeholder { height: 140px; background: #eee; display: flex; align-items: center; justify-content: center; color: #999; }
\t\t.event-create-page .event-preview-card .img-placeholder img { width: 100%; height: 100%; object-fit: cover; }
\t\t.event-create-page .publish-section-title { font-weight: 600; color: #1a1a1a; margin-bottom: 0.5rem; }
\t\t.event-create-page .publish-section-desc { font-size: 0.9rem; color: #666; margin-bottom: 0.75rem; }
\t\t.event-create-page .save-btn { padding: 0.6rem 1.5rem; border-radius: 8px; font-weight: 600; border: none; }
\t</style>
{% endblock %}

{% block content %}
<section class=\"team-sperkers-section-area sp1 ef-animate-slideUp\">
\t<div class=\"container\">
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
\t\t\t\t\t\t<div class=\"step step-done\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Add tickets</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Use our suggestions to help sell more tickets or manually create your own.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"step step-active\">
\t\t\t\t\t\t\t<div class=\"step-radio\"></div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<div class=\"step-title\">Publish</div>
\t\t\t\t\t\t\t\t<div class=\"step-desc\">Review your event page and settings, then publish your event.</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>

\t\t\t\t\t<div class=\"col-lg-8 col-xl-9\">
\t\t\t\t\t\t<h1 class=\"publish-title\">Your event is almost ready to publish</h1>
\t\t\t\t\t\t<p class=\"publish-subtitle\">Review your settings and let everyone find your event.</p>

\t\t\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t\t<div class=\"section-card event-preview-card p-0\">
\t\t\t\t\t\t\t\t\t<div class=\"img-placeholder\">
\t\t\t\t\t\t\t\t\t\t{% if event.image %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ event.image }}\" alt=\"{{ event.title }}\" />
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-image fa-3x\"></i>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"p-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold\">{{ event.title }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-muted mt-1\">
\t\t\t\t\t\t\t\t\t\t\t{% if event.startDatetime %}{{ event.startDatetime|date('l, F j') }} • {{ event.startDatetime|date('ga') }} - {{ event.endDatetime|date('ga') }}{% else %}—{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% if event.venue %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-muted mt-1\">{{ event.venue.name }}{% if event.venue.address %}, {{ event.venue.address }}{% endif %}</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<div class=\"small mt-1\">{{ event.priceLabel }} • {{ event.tickets|length }} ticket type(s)</div>
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"small text-primary mt-2 d-inline-block\">Preview</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Event type and category</div>
\t\t\t\t\t\t\t\t\t<p class=\"publish-section-desc\">Your type and category help your event appear in more searches.</p>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label small text-muted\">Type</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select form-select-sm\" disabled><option>Other</option></select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t\t\t<label class=\"form-label small text-muted\">Category</label>
\t\t\t\t\t\t\t\t\t\t<select class=\"form-select form-select-sm\" disabled>
\t\t\t\t\t\t\t\t\t\t\t<option>Other</option>
\t\t\t\t\t\t\t\t\t\t\t{% for cat in event.categories %}<option selected>{{ cat.name }}</option>{% endfor %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Tags</div>
\t\t\t\t\t\t\t\t\t<p class=\"publish-section-desc\">Help people discover your event by adding tags related to your event's theme, topic, vibe, location, and more.</p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" placeholder=\"Add search keywords to your event\" disabled />
\t\t\t\t\t\t\t\t\t<span class=\"small text-muted\">0/10 tags</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Organized by</div>
\t\t\t\t\t\t\t\t\t<p class=\"publish-section-desc\">Adding a name will create an organizer profile after publishing.</p>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" value=\"{{ event.organizer ? event.organizer.name : '' }}\" disabled />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">Is your event public or private?</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"visibility\" id=\"visPublic\" value=\"public\" checked disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"visPublic\">Public — Shared on Eventify and search engines</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"visibility\" id=\"visPrivate\" value=\"private\" disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"visPrivate\">Private — Shared only with a select audience</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"publish-section-title\">When should we publish your event?</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"when\" id=\"whenNow\" value=\"now\" checked disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"whenNow\">Publish now</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-check mt-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"radio\" name=\"when\" id=\"whenLater\" value=\"later\" disabled />
\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"whenLater\">Schedule for later</label>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_event_publish', { id: event.id }) }}\" class=\"d-flex justify-content-end mt-3\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('publish_event_' ~ event.id) }}\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn vl-btn4 save-btn\">Publish now</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{% endblock %}
", "event_publish.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\event_publish.html.twig");
    }
}

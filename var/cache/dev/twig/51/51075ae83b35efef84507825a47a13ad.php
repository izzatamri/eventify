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

/* event_form.html.twig */
class __TwigTemplate_f21ec528e145d920c93e52ac13523a99 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_form.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        yield " - Eventify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 6, $this->source); })()), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 8
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

        // line 9
        yield "<style>
\t/* Eventify event form: reference layout (sticky sidebar + main + sticky save) */
\t.event-create-page { background: var(--ztc-bg-bg-1, #fff); min-height: 100vh; }
\t.event-form-layout { display: flex; gap: 0; max-width: 1400px; margin: 0 auto; padding: 0 1.5rem 2rem; }
\t.event-form-sidebar {
\t\twidth: 320px; flex-shrink: 0; position: sticky; top: 1rem; align-self: start;
\t\tborder-right: 1px solid rgba(0,0,0,.08); padding-right: 1.5rem; margin-right: 2rem;
\t}
\t.event-form-main { flex: 1; min-width: 0; padding-bottom: 2rem; }
\t@media (max-width: 991px) {
\t\t.event-form-layout { flex-direction: column; padding: 0 1rem 2rem; }
\t\t.event-form-sidebar { width: 100%; position: static; border-right: none; padding-right: 0; margin-right: 0; border-bottom: 1px solid rgba(0,0,0,.08); padding-bottom: 1rem; margin-bottom: 1rem; }
\t\t.event-form-sticky-save { left: 1rem; right: 1rem; bottom: 1rem; }
\t}
\t.event-form-sidebar .back-link {
\t\tdisplay: block; margin-bottom: 1rem; color: var(--ztc-bg-bg-9, #2E4DFD); text-decoration: none; font-size: 0.875rem; font-weight: 600;
\t\ttransition: color 0.3s ease;
\t}
\t.event-form-sidebar .back-link:hover { color: var(--ztc-bg-bg-8, #002466); }
\t.event-form-top-bar {
\t\tdisplay: flex; justify-content: flex-end; align-items: center; flex-wrap: wrap; gap: 0.5rem;
\t\tmargin-bottom: 1rem; padding-top: 0.25rem;
\t}
\t.event-create-page .preview-btn {
\t\tdisplay: inline-flex; align-items: center; gap: 0.5rem;
\t\tborder: 1px solid rgba(46,77,253,0.35); border-radius: 8px; padding: 0.5rem 1rem;
\t\tbackground: var(--ztc-bg-bg-1, #fff); color: var(--ztc-bg-bg-9, #2E4DFD); font-size: 0.9rem; font-weight: 600; text-decoration: none;
\t\ttransition: all 0.3s ease;
\t}
\t.event-create-page a.preview-btn:hover { background: rgba(46,77,253,0.06); border-color: var(--ztc-bg-bg-9, #2E4DFD); }
\t.event-create-page .preview-btn.text-muted { border-color: #dee2e6; color: #6c757d; cursor: not-allowed; }
\t.event-form-sticky-save {
\t\tposition: fixed; bottom: 1.5rem; right: 1.5rem; z-index: 100;
\t}
\t.event-form-sticky-save .save-btn { box-shadow: 0 4px 14px rgba(46,77,253,0.35); }
\t.event-create-page .summary-card {
\t\tbackground: var(--ztc-bg-bg-1, #fff); border-radius: 10px;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,.06); padding: 1rem; position: relative; overflow: hidden;
\t\tborder: 1px solid rgba(0,0,0,.04);
\t}
\t.event-create-page .summary-card::before {
\t\tcontent: \"\"; position: absolute; top: -20px; right: -20px; width: 80px; height: 80px;
\t\tbackground: linear-gradient(135deg, var(--ztc-bg-bg-9, #2E4DFD) 0%, var(--ztc-bg-bg-8, #002466) 100%);
\t\tborder-radius: 50%; opacity: 0.12;
\t}
\t.event-create-page .summary-title { font-size: 1.05rem; font-weight: 700; color: var(--ztc-text-text-2, #1A1719); margin-bottom: 0.4rem; }
\t.event-create-page .summary-date { font-size: 0.8125rem; color: var(--ztc-text-text-3, #544E51); }
\t.event-create-page .steps-label {
\t\tfont-size: 0.7rem; color: var(--ztc-text-text-3, #544E51); text-transform: uppercase; letter-spacing: 0.06em; margin: 1rem 0 0.5rem; font-weight: 600;
\t}
\t.event-create-page .step { display: flex; align-items: flex-start; gap: 0.6rem; margin-bottom: 0.75rem; }
\t.event-create-page .step-radio {
\t\twidth: 18px; height: 18px; border-radius: 50%; border: 2px solid #dee2e6; flex-shrink: 0; margin-top: 2px;
\t\ttransition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
\t}
\t.event-create-page .step.step-active .step-radio {
\t\tbackground: var(--ztc-bg-bg-9, #2E4DFD); border-color: var(--ztc-bg-bg-9, #2E4DFD);
\t\tbox-shadow: 0 0 0 3px rgba(46,77,253,0.2);
\t}
\t.event-create-page .step-title { font-weight: 600; font-size: 0.9rem; color: var(--ztc-text-text-2, #1A1719); }
\t.event-create-page .step-desc { font-size: 0.75rem; color: var(--ztc-text-text-3, #544E51); margin-top: 0.1rem; line-height: 1.3; }
\t.event-create-page .section-card {
\t\tbackground: var(--ztc-bg-bg-1, #fff); border-radius: 10px;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,.06); padding: 1.25rem; margin-bottom: 1rem;
\t\tborder: 1px solid rgba(0,0,0,.04); transition: box-shadow 0.3s ease, border-color 0.3s ease;
\t}
\t.event-create-page .section-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,.08); }
\t.event-create-page .section-card.focus { border-color: rgba(46,77,253,0.35); box-shadow: 0 2px 12px rgba(46,77,253,0.08); }
\t.event-create-page .section-card h3 {
\t\tfont-size: 1rem; font-weight: 700; color: var(--ztc-text-text-2, #1A1719); margin-bottom: 0;
\t}
\t.event-create-page .section-card .section-add {
\t\twidth: 28px; height: 28px; border-radius: 6px; background: var(--ztc-bg-bg-9, #2E4DFD); color: #fff; border: none;
\t\tfont-size: 1rem; line-height: 1; display: inline-flex; align-items: center; justify-content: center;
\t\ttransition: background 0.3s ease, transform 0.2s ease; cursor: pointer; flex-shrink: 0;
\t}
\t.event-create-page .section-card .section-add:hover { background: var(--ztc-bg-bg-8, #002466); transform: scale(1.05); }
\t.event-create-page .upload-zone {
\t\tborder: 2px dashed rgba(46,77,253,0.4); border-radius: 10px; min-height: 180px;
\t\tdisplay: flex; align-items: center; justify-content: center; background: rgba(46,77,253,0.03);
\t\ttransition: border-color 0.3s ease, background 0.3s ease;
\t}
\t.event-create-page .upload-zone:hover { border-color: var(--ztc-bg-bg-9, #2E4DFD); background: rgba(46,77,253,0.06); }
\t.event-create-page .upload-zone.has-image { min-height: 160px; background-size: cover; background-position: center; }
\t.event-create-page .upload-inner { color: var(--ztc-text-text-3, #544E51); text-align: center; }
\t.event-create-page .upload-inner i { font-size: 1.75rem; color: var(--ztc-bg-bg-9, #2E4DFD); margin-bottom: 0.35rem; display: block; }
\t.event-create-page .form-control, .event-create-page .form-select {
\t\tborder-radius: 8px; border-color: rgba(0,0,0,.12); transition: border-color 0.3s ease, box-shadow 0.3s ease;
\t}
\t.event-create-page .form-control:focus, .event-create-page .form-select:focus {
\t\tborder-color: var(--ztc-bg-bg-9, #2E4DFD); box-shadow: 0 0 0 3px rgba(46,77,253,0.15); outline: none;
\t}
\t/* Fix nice-select dropdown appearing behind map */
\t#location-section .nice-select { position: relative; z-index: 1000; }
\t#location-section .nice-select.open { z-index: 1001; }
\t#location-section .nice-select .list { z-index: 1002 !important; position: absolute; }
\t#location-map { position: relative; z-index: 1; }
\t/* Add venue modal: sit above Bootstrap backdrop so inputs are clickable (modal is moved to body by JS) */
\t#add-venue-modal.modal { z-index: 1060 !important; }
\t#add-venue-modal .modal-dialog { position: relative; }
\t#add-venue-modal .modal-content { position: relative; }
\t#add-venue-modal input.form-control { pointer-events: auto !important; }
\t.event-create-page .form-control.is-invalid { border-color: #dc3545; }
\t.event-create-page .invalid-feedback { color: #dc3545; font-size: 0.85rem; }
\t.event-create-page .hint { font-size: 0.75rem; color: var(--ztc-text-text-3, #544E51); margin-bottom: 0.4rem; }
\t/* Primary submit: template vl-btn4 style (same as events list) - overrides design system */
\t.event-create-page .save-btn {
\t\tfont-family: var(--ztc-family-font1, inherit) !important; font-size: 0.9rem !important; font-weight: 700 !important;
\t\ttext-transform: uppercase !important; letter-spacing: 0.02em;
\t\tpadding: 12px 24px !important; border-radius: 8px !important; border: none !important;
\t\tbackground: var(--ztc-bg-bg-9, #2E4DFD) !important; color: var(--ztc-text-text-1, #fff) !important;
\t\tposition: relative !important; overflow: hidden !important; z-index: 1; transition: color 0.4s ease;
\t\tbox-shadow: none !important;
\t}
\t.event-create-page .save-btn::after {
\t\tcontent: \"\" !important; position: absolute; left: 50%; top: 0; width: 1px; height: 100%;
\t\tbackground: var(--ztc-bg-bg-8, #002466) !important; z-index: -1; border-radius: 8px;
\t\ttransition: width 0.4s ease, height 0.4s ease, left 0.4s ease, top 0.4s ease, opacity 0.4s ease;
\t\tvisibility: hidden; opacity: 0;
\t}
\t.event-create-page .save-btn:hover:not(:disabled) { color: #fff !important; background: var(--ztc-bg-bg-9, #2E4DFD) !important; transform: none !important; }
\t.event-create-page .save-btn:hover:not(:disabled)::after { width: 100%; height: 100%; left: 0; top: 0; visibility: visible; opacity: 1; }
\t.event-create-page .status-pill {
\t\tborder-radius: 8px; padding: 0.4rem 0.9rem; font-size: 0.8125rem; border: 1px solid rgba(0,0,0,.12); background: var(--ztc-bg-bg-1, #fff);
\t}
\t/* Status dropdown: pill trigger + open menu (like reference) */
\t.event-create-page .status-dropdown { position: relative; display: inline-block; }
\t.event-create-page .status-dropdown .status-select-native { position: absolute; opacity: 0; pointer-events: none; width: 1px; height: 1px; }
\t.event-create-page .status-dropdown-trigger {
\t\tdisplay: inline-flex; align-items: center; gap: 0.4rem; padding: 0.35rem 0.75rem; border-radius: 999px;
\t\tborder: 1px solid rgba(0,0,0,.2); background: var(--ztc-bg-bg-1, #fff); color: var(--ztc-text-text-2, #1A1719);
\t\tfont-size: 0.8125rem; font-weight: 500; cursor: pointer; transition: border-color 0.25s ease, box-shadow 0.25s ease;
\t}
\t.event-create-page .status-dropdown-trigger:hover { border-color: rgba(0,0,0,.3); }
\t.event-create-page .status-dropdown-trigger .status-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--ztc-text-text-3, #544E51); flex-shrink: 0; }
\t.event-create-page .status-dropdown-trigger .status-caret { transition: transform 0.2s ease; color: var(--ztc-text-text-3, #544E51); font-size: 0.65rem; }
\t.event-create-page .status-dropdown.is-open .status-dropdown-trigger { border-color: var(--ztc-bg-bg-9, #2E4DFD); box-shadow: 0 0 0 2px rgba(46,77,253,0.2); }
\t.event-create-page .status-dropdown.is-open .status-caret { transform: rotate(180deg); }
\t.event-create-page .status-dropdown-menu {
\t\tposition: absolute; top: 100%; left: 0; margin-top: 4px; min-width: 100%;
\t\tbackground: #fff; border: 1px solid rgba(0,0,0,.1); border-radius: 8px; box-shadow: 0 10px 24px rgba(0,0,0,.12);
\t\tpadding: 0.35rem 0; z-index: 50; display: none;
\t}
\t.event-create-page .status-dropdown.is-open .status-dropdown-menu { display: block; }
\t.event-create-page .status-dropdown-menu button {
\t\tdisplay: block; width: 100%; text-align: left; padding: 0.5rem 1rem; font-size: 0.875rem; color: var(--ztc-text-text-2, #1A1719);
\t\tbackground: none; border: none; cursor: pointer; transition: background 0.15s ease;
\t}
\t.event-create-page .status-dropdown-menu button:hover { background: rgba(46,77,253,0.06); }
\t.event-create-page .summary-card .preview-link { font-size: 0.875rem; font-weight: 500; color: var(--ztc-bg-bg-9, #2E4DFD); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem; }
\t.event-create-page .summary-card .preview-link:hover { text-decoration: underline; }
\t.event-create-page .summary-card .preview-link.muted { color: #6c757d; cursor: not-allowed; pointer-events: none; }
\t/* Good to know: outline buttons matching template */
\t.event-create-page .add-btn {
\t\tborder-radius: 8px; border: 1px solid rgba(0,0,0,.15); padding: 0.4rem 0.75rem; font-size: 0.875rem; font-weight: 500;
\t\tbackground: #fff; color: var(--ztc-text-text-2, #1A1719); transition: all 0.3s ease;
\t}
\t.event-create-page .add-btn:hover { border-color: var(--ztc-bg-bg-9, #2E4DFD); color: var(--ztc-bg-bg-9, #2E4DFD); background: rgba(46,77,253,0.04); }
\t.event-create-page .form-actions { margin-top: 1.5rem; padding-top: 1.25rem; border-top: 1px solid rgba(0,0,0,.06); }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 171
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

        // line 172
        yield "<div class=\"team-sperkers-section-area sp1 ef-animate-slideUp event-create-page\">
\t";
        // line 173
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), 'form_start', ["attr" => ["id" => "event-form"]]);
        yield "
\t<div class=\"event-form-layout\">
\t\t<aside class=\"event-form-sidebar\" aria-label=\"Event progress\">
\t\t\t<a href=\"";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"back-link\" aria-label=\"Back to events\"><i class=\"fa-solid fa-arrow-left me-2\" aria-hidden=\"true\"></i> Back to events</a>
\t\t\t<div class=\"summary-card mb-4\">
\t\t\t\t<div class=\"summary-title\" id=\"live-title\">";
        // line 178
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 178, $this->source); })()), "title", [], "any", false, false, false, 178)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 178, $this->source); })()), "title", [], "any", false, false, false, 178), "html", null, true)) : ("Event Title"));
        yield "</div>
\t\t\t\t<div class=\"summary-date\">
\t\t\t\t\t<i class=\"fa-regular fa-calendar me-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t<span id=\"live-date\">";
        // line 181
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 181, $this->source); })()), "startDatetime", [], "any", false, false, false, 181)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 181, $this->source); })()), "startDatetime", [], "any", false, false, false, 181), "D, M j, Y, g:i A"), "html", null, true);
        } else {
            yield "Fri, Mar 20, 2026, 10:00 AM";
        }
        yield "</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-3 d-flex flex-wrap align-items-center gap-2\">
\t\t\t\t\t<div class=\"status-dropdown\" id=\"status-dropdown\">
\t\t\t\t\t\t";
        // line 185
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 185, $this->source); })()), "status", [], "any", false, false, false, 185), 'widget', ["attr" => ["class" => "status-select-native", "id" => "event_status_select"]]);
        yield "
\t\t\t\t\t\t<button type=\"button\" class=\"status-dropdown-trigger\" id=\"status-dropdown-trigger\" aria-haspopup=\"listbox\" aria-expanded=\"false\" aria-labelledby=\"status-dropdown-label\">
\t\t\t\t\t\t\t<span class=\"status-dot\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span id=\"status-dropdown-label\">";
        // line 188
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 188, $this->source); })()), "status", [], "any", false, false, false, 188) == "published")) ? ("Publish now") : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 188, $this->source); })()), "status", [], "any", false, false, false, 188) == "cancelled")) ? ("Cancelled") : ("Draft"))));
        yield "</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-up status-caret\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"status-dropdown-menu\" role=\"listbox\" id=\"status-dropdown-menu\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<button type=\"button\" role=\"option\" data-value=\"draft\">Draft</button>
\t\t\t\t\t\t\t<button type=\"button\" role=\"option\" data-value=\"published\">Publish now</button>
\t\t\t\t\t\t\t<button type=\"button\" role=\"option\" data-value=\"cancelled\">Cancelled</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 197
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 197, $this->source); })()), "id", [], "any", false, false, false, 197)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 198
            yield "\t\t\t\t\t\t<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 198, $this->source); })()), "id", [], "any", false, false, false, 198)]), "html", null, true);
            yield "\" class=\"preview-link\" target=\"_blank\" rel=\"noopener\">Preview <i class=\"fa-solid fa-arrow-up-right-from-square\" style=\"font-size: 0.7rem;\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t";
        } else {
            // line 200
            yield "\t\t\t\t\t\t<span class=\"preview-link muted\" title=\"Save draft first to preview\">Preview <i class=\"fa-solid fa-arrow-up-right-from-square\" style=\"font-size: 0.7rem;\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t";
        }
        // line 202
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"steps-label\">Steps</div>
\t\t\t<div class=\"step step-active\">
\t\t\t\t<div class=\"step-radio\" aria-hidden=\"true\"></div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"step-title\">Build event page</div>
\t\t\t\t\t<div class=\"step-desc\">Add all of your event details and let attendees know what to expect.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"step\">
\t\t\t\t<div class=\"step-radio\" aria-hidden=\"true\"></div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"step-title\">Add tickets</div>
\t\t\t\t\t<div class=\"step-desc\">Create ticket types and set prices.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"step\">
\t\t\t\t<div class=\"step-radio\" aria-hidden=\"true\"></div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"step-title\">Publish</div>
\t\t\t\t\t<div class=\"step-desc\">Review and publish your event.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</aside>

\t\t<div class=\"event-form-main\">
\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Event details</h3>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 232
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 232, $this->source); })()), "title", [], "any", false, false, false, 232), 'label');
        yield "
\t\t\t\t\t<p class=\"hint\">A short and sweet sentence about your event.</p>
\t\t\t\t\t";
        // line 234
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "title", [], "any", false, false, false, 234), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 234, $this->source); })()), "title", [], "any", false, false, false, 234), "vars", [], "any", false, false, false, 234), "errors", [], "any", false, false, false, 234))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
\t\t\t\t\t";
        // line 235
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "title", [], "any", false, false, false, 235), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t";
        // line 238
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 238, $this->source); })()), "summary", [], "any", false, false, false, 238), 'label');
        yield "
\t\t\t\t\t<p class=\"hint\">Grab people's attention with a short description. (140 characters max)</p>
\t\t\t\t\t";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "summary", [], "any", false, false, false, 240), 'widget', ["attr" => ["class" => "form-control", "maxlength" => 140]]);
        yield "
\t\t\t\t\t<div class=\"d-flex justify-content-between mt-1\">
\t\t\t\t\t\t";
        // line 242
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 242, $this->source); })()), "summary", [], "any", false, false, false, 242), 'errors');
        yield "
\t\t\t\t\t\t<span class=\"char-count ms-auto text-muted small\" id=\"summary-count\">";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "summary", [], "any", false, true, false, 243), "vars", [], "any", false, true, false, 243), "value", [], "any", true, true, false, 243) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "summary", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243)))) ? (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), "summary", [], "any", false, false, false, 243), "vars", [], "any", false, false, false, 243), "value", [], "any", false, false, false, 243)) : (""))), "html", null, true);
        yield "/140</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Cover image</h3>
\t\t\t\t<div class=\"upload-zone ";
        // line 250
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "vars", [], "any", false, false, false, 250), "value", [], "any", false, false, false, 250), "image", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("has-image") : (""));
        yield "\" id=\"upload-zone\" style=\"";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "vars", [], "any", false, false, false, 250), "value", [], "any", false, false, false, 250), "image", [], "any", false, false, false, 250)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "background-image: url('";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 250, $this->source); })()), "vars", [], "any", false, false, false, 250), "value", [], "any", false, false, false, 250), "image", [], "any", false, false, false, 250), "html", null, true);
            yield "');";
        }
        yield "\">
\t\t\t\t\t<div class=\"upload-inner\" id=\"upload-inner\">
\t\t\t\t\t\t<i class=\"fa-solid fa-cloud-arrow-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<p class=\"mb-0\">Upload photos and video</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-2\" id=\"image-url-wrap\">
\t\t\t\t\t";
        // line 257
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "image", [], "any", false, false, false, 257), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Or paste image URL (e.g. https://...)"]]);
        yield "
\t\t\t\t\t";
        // line 258
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "image", [], "any", false, false, false, 258), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Date and time</h3>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t";
        // line 266
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 266, $this->source); })()), "startDatetime", [], "any", false, false, false, 266), 'label');
        yield "
\t\t\t\t\t\t";
        // line 267
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "startDatetime", [], "any", false, false, false, 267), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "startDatetime", [], "any", false, false, false, 267), "vars", [], "any", false, false, false, 267), "errors", [], "any", false, false, false, 267))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
\t\t\t\t\t\t";
        // line 268
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "startDatetime", [], "any", false, false, false, 268), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t";
        // line 271
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), "endDatetime", [], "any", false, false, false, 271), 'label');
        yield "
\t\t\t\t\t\t";
        // line 272
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "endDatetime", [], "any", false, false, false, 272), 'widget', ["attr" => ["class" => ("form-control" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), "endDatetime", [], "any", false, false, false, 272), "vars", [], "any", false, false, false, 272), "errors", [], "any", false, false, false, 272))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : ("")))]]);
        yield "
\t\t\t\t\t\t";
        // line 273
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), "endDatetime", [], "any", false, false, false, 273), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section-card\" id=\"location-section\">
\t\t\t\t<h3 class=\"mb-3\">Location</h3>
\t\t\t\t";
        // line 280
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "venue", [], "any", false, false, false, 280), 'label');
        yield "
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t";
        // line 282
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "venue", [], "any", false, false, false, 282), 'widget', ["attr" => ["class" => ("form-select" . (((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "venue", [], "any", false, false, false, 282), "vars", [], "any", false, false, false, 282), "errors", [], "any", false, false, false, 282))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? (" is-invalid") : (""))), "id" => "event_venue", "style" => "border-radius: 8px 0 0 8px;"]]);
        yield "
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"location-add-btn\" style=\"border-radius: 0 8px 8px 0; padding: 0.5rem 1.25rem; font-weight: 600;\">
\t\t\t\t\t\t<i class=\"fa-solid fa-plus me-1\"></i> Add Venue
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t";
        // line 287
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 287, $this->source); })()), "venue", [], "any", false, false, false, 287), 'errors');
        yield "
\t\t\t\t<div id=\"location-map\" style=\"height: 300px; width: 100%; border-radius: 8px; background: #f0f0f0;\"></div>
\t\t\t</div>

\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Description</h3>
\t\t\t\t<p class=\"hint\">Use this section to provide more details about your event. You can include things to know, venue information, accessibility options—anything that will help people know what to expect.</p>
\t\t\t\t";
        // line 294
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "description", [], "any", false, false, false, 294), 'widget', ["attr" => ["class" => "form-control", "rows" => 8]]);
        yield "
\t\t\t\t";
        // line 295
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 295, $this->source); })()), "description", [], "any", false, false, false, 295), 'errors');
        yield "
\t\t\t</div>

\t\t\t<div class=\"text-end mt-4\">
\t\t\t\t<button type=\"submit\" form=\"event-form\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\">
\t\t\t\t\t<i class=\"fa-solid fa-check me-2\" aria-hidden=\"true\"></i>";
        // line 300
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 300, $this->source); })()), "id", [], "any", false, false, false, 300)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Save changes") : ("Save and continue"));
        yield "
\t\t\t\t</button>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"modal fade\" id=\"add-venue-modal\" tabindex=\"-1\" aria-labelledby=\"add-venue-modal-label\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"add-venue-modal-label\">Add venue</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"venue-address-input\" class=\"form-label\">Address</label>
\t\t\t\t\t\t<input type=\"text\" id=\"venue-address-input\" class=\"form-control\" placeholder=\"Street, city, country\" autocomplete=\"off\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"venue-name-input\" class=\"form-label\">Venue name</label>
\t\t\t\t\t\t<input type=\"text\" id=\"venue-name-input\" class=\"form-control\" placeholder=\"Venue name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"form-label\">Location</label>
\t\t\t\t\t\t<div id=\"add-venue-map\" style=\"height: 220px; width: 100%; border-radius: 8px; background: #f0f0f0;\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"add-venue-error\" class=\"alert alert-danger small d-none\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\" id=\"save-venue-btn\">Save venue</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 337
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "organizer", [], "any", true, true, false, 337)) {
            // line 338
            yield "\t\t";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 338, $this->source); })()), "organizer", [], "any", false, false, false, 338), "setRendered", [], "method", false, false, false, 338);
            // line 339
            yield "\t";
        }
        // line 340
        yield "\t";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["form"] ?? null), "categories", [], "any", true, true, false, 340)) {
            // line 341
            yield "\t\t";
            CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "categories", [], "any", false, false, false, 341), "setRendered", [], "method", false, false, false, 341);
            // line 342
            yield "\t";
        }
        // line 343
        yield "\t";
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 343, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 347
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

        // line 348
        yield "<script>
(function() {
\t/* Move Add venue modal to body so it is above the Bootstrap backdrop (fixes unclickable inputs) */
\tfunction moveModalToBody() {
\t\tvar modalEl = document.getElementById('add-venue-modal');
\t\tif (modalEl && modalEl.parentNode && modalEl.parentNode !== document.body) {
\t\t\tdocument.body.appendChild(modalEl);
\t\t}
\t}
\t/* Remove any modal backdrop that might be blocking the main form (e.g. Venue dropdown) */
\tfunction removeStrayBackdrops() {
\t\tvar backdrops = document.querySelectorAll('.modal-backdrop');
\t\tvar openModal = document.querySelector('.modal.show');
\t\tif (!openModal && backdrops.length) {
\t\t\tbackdrops.forEach(function(el) { el.remove(); });
\t\t\tdocument.body.classList.remove('modal-open');
\t\t\tdocument.body.style.overflow = '';
\t\t\tdocument.body.style.paddingRight = '';
\t\t}
\t}
\tdocument.addEventListener('DOMContentLoaded', function() {
\t\tmoveModalToBody();
\t\tremoveStrayBackdrops();
\t\tvar addVenueModalEl = document.getElementById('add-venue-modal');
\t\tif (addVenueModalEl) {
\t\t\taddVenueModalEl.addEventListener('hidden.bs.modal', removeStrayBackdrops);
\t\t}
\t});
})();
window.eventifyMapsConfig = {
\tvenueFromMapUrl: ";
        // line 378
        yield json_encode($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_venue_from_map"));
        yield ",
\tvenueFromMapToken: ";
        // line 379
        yield json_encode($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("venue_from_map"));
        yield "
};
function eventifyLeafletInit() {
\tvar cfg = window.eventifyMapsConfig || {};
\tvar venueSelect = document.getElementById('event_venue');
\tvar locationMapEl = document.getElementById('location-map');
\tvar mainMap = null, mainMarker = null;
\tvar defaultCenter = [20, 0];
\tvar defaultZoom = 2;
\tif (locationMapEl && typeof L !== 'undefined') {
\t\tmainMap = L.map(locationMapEl).setView(defaultCenter, defaultZoom);
\t\tL.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
\t\t\tattribution: '© OpenStreetMap contributors'
\t\t}).addTo(mainMap);
\t}
\tfunction updateMainMapFromVenue() {
\t\tif (!venueSelect || !mainMap) return;
\t\tvar opt = venueSelect.options[venueSelect.selectedIndex];
\t\tvar lat = opt && opt.getAttribute && opt.getAttribute('data-lat');
\t\tvar lng = opt && opt.getAttribute && opt.getAttribute('data-lng');
\t\tif (mainMarker && mainMap) {
\t\t\tmainMap.removeLayer(mainMarker);
\t\t\tmainMarker = null;
\t\t}
\t\tvar latNum = lat !== null && lat !== undefined ? parseFloat(lat) : NaN;
\t\tvar lngNum = lng !== null && lng !== undefined ? parseFloat(lng) : NaN;
\t\tif (!isNaN(latNum) && !isNaN(lngNum)) {
\t\t\tvar pos = [latNum, lngNum];
\t\t\tmainMap.setView(pos, 14);
\t\t\tmainMarker = L.marker(pos).addTo(mainMap);
\t\t} else {
\t\t\tmainMap.setView(defaultCenter, defaultZoom);
\t\t}
\t}
\tif (venueSelect && mainMap) {
\t\tvenueSelect.addEventListener('change', updateMainMapFromVenue);
\t\tupdateMainMapFromVenue();
\t}

\tvar addVenueModalEl = document.getElementById('add-venue-modal');
\tvar locationAddBtn = document.getElementById('location-add-btn');
\tvar addVenueMapEl = document.getElementById('add-venue-map');
\tvar venueAddressInput = document.getElementById('venue-address-input');
\tvar venueNameInput = document.getElementById('venue-name-input');
\tvar saveVenueBtn = document.getElementById('save-venue-btn');
\tvar addVenueError = document.getElementById('add-venue-error');
\tvar addVenueMap = null, addVenueMarker = null, lastPlaceData = null;

\tif (locationAddBtn && addVenueModalEl && addVenueMapEl && typeof L !== 'undefined') {
\t\tlocationAddBtn.addEventListener('click', function() {
\t\t\tlastPlaceData = null;
\t\t\tif (venueNameInput) venueNameInput.value = '';
\t\t\tif (venueAddressInput) venueAddressInput.value = '';
\t\t\tif (addVenueError) { addVenueError.classList.add('d-none'); addVenueError.textContent = ''; }
\t\t\tvar modal = typeof bootstrap !== 'undefined' && bootstrap.Modal ? bootstrap.Modal.getOrCreateInstance(addVenueModalEl) : null;
\t\t\tif (modal) modal.show();
\t\t\tsetTimeout(function() {
\t\t\t\tif (!addVenueMap) {
\t\t\t\t\taddVenueMap = L.map(addVenueMapEl).setView(defaultCenter, 4);
\t\t\t\t\tL.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
\t\t\t\t\t\tattribution: '© OpenStreetMap contributors'
\t\t\t\t\t}).addTo(addVenueMap);
\t\t\t\t\taddVenueMap.on('click', function(e) {
\t\t\t\t\t\tvar latlng = e.latlng;
\t\t\t\t\t\tif (addVenueMarker) {
\t\t\t\t\t\t\taddVenueMap.removeLayer(addVenueMarker);
\t\t\t\t\t\t}
\t\t\t\t\t\taddVenueMarker = L.marker(latlng).addTo(addVenueMap);
\t\t\t\t\t\tlastPlaceData = {
\t\t\t\t\t\t\tname: venueNameInput ? (venueNameInput.value.trim() || 'Venue') : 'Venue',
\t\t\t\t\t\t\taddress: venueAddressInput ? venueAddressInput.value.trim() : '',
\t\t\t\t\t\t\tcity: '',
\t\t\t\t\t\t\tstate: '',
\t\t\t\t\t\t\tcountry: '',
\t\t\t\t\t\t\tpostalCode: '',
\t\t\t\t\t\t\tlatitude: latlng.lat,
\t\t\t\t\t\t\tlongitude: latlng.lng
\t\t\t\t\t\t};
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}, 200);
\t\t});
\t}

\tif (saveVenueBtn && cfg.venueFromMapUrl && cfg.venueFromMapToken) {
\t\tsaveVenueBtn.addEventListener('click', function() {
\t\t\tvar name = venueNameInput ? venueNameInput.value.trim() : '';
\t\t\tif (!name) {
\t\t\t\tif (addVenueError) {
\t\t\t\t\taddVenueError.textContent = 'Please enter a venue name.';
\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t}
\t\t\t\treturn;
\t\t\t}
\t\t\tvar payload = lastPlaceData || {};
\t\t\tif (!payload.latitude || !payload.longitude) {
\t\t\t\tif (addVenueError) {
\t\t\t\t\taddVenueError.textContent = 'Please click on the map to choose a location.';
\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t}
\t\t\t\treturn;
\t\t\t}
\t\t\tvar body = new FormData();
\t\t\tbody.append('_token', cfg.venueFromMapToken);
\t\t\tbody.append('name', name);
\t\t\tbody.append('address', payload.address || '');
\t\t\tbody.append('city', payload.city || '');
\t\t\tbody.append('state', payload.state || '');
\t\t\tbody.append('country', payload.country || '');
\t\t\tbody.append('postalCode', payload.postalCode || '');
\t\t\tbody.append('latitude', payload.latitude);
\t\t\tbody.append('longitude', payload.longitude);
\t\t\tif (addVenueError) { addVenueError.classList.add('d-none'); addVenueError.textContent = ''; }
\t\t\tsaveVenueBtn.disabled = true;
\t\t\tfetch(cfg.venueFromMapUrl, { method: 'POST', body: body })
\t\t\t\t.then(function(r) { return r.json().then(function(j) { return { ok: r.ok, json: j }; }); })
\t\t\t\t.then(function(res) {
\t\t\t\t\tsaveVenueBtn.disabled = false;
\t\t\t\t\tif (res.ok && res.json.id) {
\t\t\t\t\t\tvar opt = document.createElement('option');
\t\t\t\t\t\topt.value = res.json.id;
\t\t\t\t\t\topt.setAttribute('data-lat', res.json.latitude || '');
\t\t\t\t\t\topt.setAttribute('data-lng', res.json.longitude || '');
\t\t\t\t\t\topt.textContent = res.json.name;
\t\t\t\t\t\tif (venueSelect) {
\t\t\t\t\t\t\tvenueSelect.appendChild(opt);
\t\t\t\t\t\t\tvenueSelect.value = res.json.id;
\t\t\t\t\t\t\tupdateMainMapFromVenue();
\t\t\t\t\t\t}
\t\t\t\t\t\tvar modal = typeof bootstrap !== 'undefined' && bootstrap.Modal ? bootstrap.Modal.getInstance(addVenueModalEl) : null;
\t\t\t\t\t\tif (modal) modal.hide();
\t\t\t\t\t} else {
\t\t\t\t\t\tif (addVenueError) {
\t\t\t\t\t\t\taddVenueError.textContent = res.json.error || 'Failed to save venue.';
\t\t\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.catch(function() {
\t\t\t\t\tsaveVenueBtn.disabled = false;
\t\t\t\t\tif (addVenueError) {
\t\t\t\t\t\taddVenueError.textContent = 'Network error. Please try again.';
\t\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t\t}
\t\t\t\t});
\t\t});
\t}
}
if (typeof L !== 'undefined') {
\tdocument.addEventListener('DOMContentLoaded', eventifyLeafletInit);
}
</script>
<script>
(function() {
\t/* Status dropdown: pill trigger + menu (Draft / Publish now / Cancelled) */
\tvar statusDropdown = document.getElementById('status-dropdown');
\tif (statusDropdown) {
\t\tvar trigger = document.getElementById('status-dropdown-trigger');
\t\tvar menu = document.getElementById('status-dropdown-menu');
\t\tvar selectEl = document.getElementById('event_status_select');
\t\tvar labelEl = document.getElementById('status-dropdown-label');
\t\tvar labels = { draft: 'Draft', published: 'Publish now', cancelled: 'Cancelled' };
\t\tfunction updateLabel() {
\t\t\tif (selectEl && labelEl) labelEl.textContent = labels[selectEl.value] || selectEl.value;
\t\t}
\t\tfunction close() {
\t\t\tstatusDropdown.classList.remove('is-open');
\t\t\tif (trigger) trigger.setAttribute('aria-expanded', 'false');
\t\t\tif (menu) menu.setAttribute('aria-hidden', 'true');
\t\t}
\t\tif (trigger && menu && selectEl) {
\t\t\ttrigger.addEventListener('click', function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar open = statusDropdown.classList.toggle('is-open');
\t\t\t\ttrigger.setAttribute('aria-expanded', open ? 'true' : 'false');
\t\t\t\tmenu.setAttribute('aria-hidden', open ? 'false' : 'true');
\t\t\t});
\t\t\tmenu.querySelectorAll('button[data-value]').forEach(function(btn) {
\t\t\t\tbtn.addEventListener('click', function() {
\t\t\t\t\tvar val = this.getAttribute('data-value');
\t\t\t\t\tselectEl.value = val;
\t\t\t\t\tupdateLabel();
\t\t\t\t\tclose();
\t\t\t\t});
\t\t\t});
\t\t\tdocument.addEventListener('click', function(e) {
\t\t\t\tif (statusDropdown && statusDropdown.classList.contains('is-open') && !statusDropdown.contains(e.target)) close();
\t\t\t});
\t\t}
\t\tupdateLabel();
\t}

\tvar form = document.getElementById('event-form');
\tif (!form) return;
\tvar titleInput = form.querySelector('input[name*=\"[title]\"]');
\tvar summaryInput = form.querySelector('input[name*=\"[summary]\"]');
\tvar liveTitle = document.getElementById('live-title');
\tvar summaryCount = document.getElementById('summary-count');
\tif (titleInput && liveTitle) titleInput.addEventListener('input', function() { liveTitle.textContent = this.value || 'Event Title'; });
\tif (summaryInput && summaryCount) summaryInput.addEventListener('input', function() { summaryCount.textContent = this.value.length + '/140'; });
\tvar uploadZone = document.getElementById('upload-zone');
\tvar uploadInner = document.getElementById('upload-inner');
\tvar imageInput = form.querySelector('input[name*=\"[image]\"]');
\tif (uploadZone && imageInput) {
\t\timageInput.addEventListener('input', function() {
\t\t\tvar url = this.value && this.value.trim();
\t\t\tif (url) { uploadZone.classList.add('has-image'); uploadZone.style.backgroundImage = 'url(' + url + ')'; if (uploadInner) uploadInner.style.display = 'none'; }
\t\t\telse { uploadZone.classList.remove('has-image'); uploadZone.style.backgroundImage = ''; if (uploadInner) uploadInner.style.display = ''; }
\t\t});
\t\tif (imageInput.value && imageInput.value.trim()) {
\t\t\tuploadZone.classList.add('has-image');
\t\t\tuploadZone.style.backgroundImage = 'url(' + imageInput.value.trim() + ')';
\t\t\tif (uploadInner) uploadInner.style.display = 'none';
\t\t}
\t}
})();
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
        return "event_form.html.twig";
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
        return array (  686 => 379,  682 => 378,  650 => 348,  637 => 347,  622 => 343,  619 => 342,  616 => 341,  613 => 340,  610 => 339,  607 => 338,  605 => 337,  565 => 300,  557 => 295,  553 => 294,  543 => 287,  535 => 282,  530 => 280,  520 => 273,  516 => 272,  512 => 271,  506 => 268,  502 => 267,  498 => 266,  487 => 258,  483 => 257,  467 => 250,  457 => 243,  453 => 242,  448 => 240,  443 => 238,  437 => 235,  433 => 234,  428 => 232,  396 => 202,  392 => 200,  386 => 198,  384 => 197,  372 => 188,  366 => 185,  355 => 181,  349 => 178,  344 => 176,  338 => 173,  335 => 172,  322 => 171,  151 => 9,  138 => 8,  115 => 6,  92 => 5,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}{{ title }} - Eventify{% endblock %}

{% block page_heading %}{{ title }}{% endblock %}
{% block page_breadcrumb %}{{ title }}{% endblock %}

{% block page_styles %}
<style>
\t/* Eventify event form: reference layout (sticky sidebar + main + sticky save) */
\t.event-create-page { background: var(--ztc-bg-bg-1, #fff); min-height: 100vh; }
\t.event-form-layout { display: flex; gap: 0; max-width: 1400px; margin: 0 auto; padding: 0 1.5rem 2rem; }
\t.event-form-sidebar {
\t\twidth: 320px; flex-shrink: 0; position: sticky; top: 1rem; align-self: start;
\t\tborder-right: 1px solid rgba(0,0,0,.08); padding-right: 1.5rem; margin-right: 2rem;
\t}
\t.event-form-main { flex: 1; min-width: 0; padding-bottom: 2rem; }
\t@media (max-width: 991px) {
\t\t.event-form-layout { flex-direction: column; padding: 0 1rem 2rem; }
\t\t.event-form-sidebar { width: 100%; position: static; border-right: none; padding-right: 0; margin-right: 0; border-bottom: 1px solid rgba(0,0,0,.08); padding-bottom: 1rem; margin-bottom: 1rem; }
\t\t.event-form-sticky-save { left: 1rem; right: 1rem; bottom: 1rem; }
\t}
\t.event-form-sidebar .back-link {
\t\tdisplay: block; margin-bottom: 1rem; color: var(--ztc-bg-bg-9, #2E4DFD); text-decoration: none; font-size: 0.875rem; font-weight: 600;
\t\ttransition: color 0.3s ease;
\t}
\t.event-form-sidebar .back-link:hover { color: var(--ztc-bg-bg-8, #002466); }
\t.event-form-top-bar {
\t\tdisplay: flex; justify-content: flex-end; align-items: center; flex-wrap: wrap; gap: 0.5rem;
\t\tmargin-bottom: 1rem; padding-top: 0.25rem;
\t}
\t.event-create-page .preview-btn {
\t\tdisplay: inline-flex; align-items: center; gap: 0.5rem;
\t\tborder: 1px solid rgba(46,77,253,0.35); border-radius: 8px; padding: 0.5rem 1rem;
\t\tbackground: var(--ztc-bg-bg-1, #fff); color: var(--ztc-bg-bg-9, #2E4DFD); font-size: 0.9rem; font-weight: 600; text-decoration: none;
\t\ttransition: all 0.3s ease;
\t}
\t.event-create-page a.preview-btn:hover { background: rgba(46,77,253,0.06); border-color: var(--ztc-bg-bg-9, #2E4DFD); }
\t.event-create-page .preview-btn.text-muted { border-color: #dee2e6; color: #6c757d; cursor: not-allowed; }
\t.event-form-sticky-save {
\t\tposition: fixed; bottom: 1.5rem; right: 1.5rem; z-index: 100;
\t}
\t.event-form-sticky-save .save-btn { box-shadow: 0 4px 14px rgba(46,77,253,0.35); }
\t.event-create-page .summary-card {
\t\tbackground: var(--ztc-bg-bg-1, #fff); border-radius: 10px;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,.06); padding: 1rem; position: relative; overflow: hidden;
\t\tborder: 1px solid rgba(0,0,0,.04);
\t}
\t.event-create-page .summary-card::before {
\t\tcontent: \"\"; position: absolute; top: -20px; right: -20px; width: 80px; height: 80px;
\t\tbackground: linear-gradient(135deg, var(--ztc-bg-bg-9, #2E4DFD) 0%, var(--ztc-bg-bg-8, #002466) 100%);
\t\tborder-radius: 50%; opacity: 0.12;
\t}
\t.event-create-page .summary-title { font-size: 1.05rem; font-weight: 700; color: var(--ztc-text-text-2, #1A1719); margin-bottom: 0.4rem; }
\t.event-create-page .summary-date { font-size: 0.8125rem; color: var(--ztc-text-text-3, #544E51); }
\t.event-create-page .steps-label {
\t\tfont-size: 0.7rem; color: var(--ztc-text-text-3, #544E51); text-transform: uppercase; letter-spacing: 0.06em; margin: 1rem 0 0.5rem; font-weight: 600;
\t}
\t.event-create-page .step { display: flex; align-items: flex-start; gap: 0.6rem; margin-bottom: 0.75rem; }
\t.event-create-page .step-radio {
\t\twidth: 18px; height: 18px; border-radius: 50%; border: 2px solid #dee2e6; flex-shrink: 0; margin-top: 2px;
\t\ttransition: background 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
\t}
\t.event-create-page .step.step-active .step-radio {
\t\tbackground: var(--ztc-bg-bg-9, #2E4DFD); border-color: var(--ztc-bg-bg-9, #2E4DFD);
\t\tbox-shadow: 0 0 0 3px rgba(46,77,253,0.2);
\t}
\t.event-create-page .step-title { font-weight: 600; font-size: 0.9rem; color: var(--ztc-text-text-2, #1A1719); }
\t.event-create-page .step-desc { font-size: 0.75rem; color: var(--ztc-text-text-3, #544E51); margin-top: 0.1rem; line-height: 1.3; }
\t.event-create-page .section-card {
\t\tbackground: var(--ztc-bg-bg-1, #fff); border-radius: 10px;
\t\tbox-shadow: 0 2px 8px rgba(0,0,0,.06); padding: 1.25rem; margin-bottom: 1rem;
\t\tborder: 1px solid rgba(0,0,0,.04); transition: box-shadow 0.3s ease, border-color 0.3s ease;
\t}
\t.event-create-page .section-card:hover { box-shadow: 0 4px 12px rgba(0,0,0,.08); }
\t.event-create-page .section-card.focus { border-color: rgba(46,77,253,0.35); box-shadow: 0 2px 12px rgba(46,77,253,0.08); }
\t.event-create-page .section-card h3 {
\t\tfont-size: 1rem; font-weight: 700; color: var(--ztc-text-text-2, #1A1719); margin-bottom: 0;
\t}
\t.event-create-page .section-card .section-add {
\t\twidth: 28px; height: 28px; border-radius: 6px; background: var(--ztc-bg-bg-9, #2E4DFD); color: #fff; border: none;
\t\tfont-size: 1rem; line-height: 1; display: inline-flex; align-items: center; justify-content: center;
\t\ttransition: background 0.3s ease, transform 0.2s ease; cursor: pointer; flex-shrink: 0;
\t}
\t.event-create-page .section-card .section-add:hover { background: var(--ztc-bg-bg-8, #002466); transform: scale(1.05); }
\t.event-create-page .upload-zone {
\t\tborder: 2px dashed rgba(46,77,253,0.4); border-radius: 10px; min-height: 180px;
\t\tdisplay: flex; align-items: center; justify-content: center; background: rgba(46,77,253,0.03);
\t\ttransition: border-color 0.3s ease, background 0.3s ease;
\t}
\t.event-create-page .upload-zone:hover { border-color: var(--ztc-bg-bg-9, #2E4DFD); background: rgba(46,77,253,0.06); }
\t.event-create-page .upload-zone.has-image { min-height: 160px; background-size: cover; background-position: center; }
\t.event-create-page .upload-inner { color: var(--ztc-text-text-3, #544E51); text-align: center; }
\t.event-create-page .upload-inner i { font-size: 1.75rem; color: var(--ztc-bg-bg-9, #2E4DFD); margin-bottom: 0.35rem; display: block; }
\t.event-create-page .form-control, .event-create-page .form-select {
\t\tborder-radius: 8px; border-color: rgba(0,0,0,.12); transition: border-color 0.3s ease, box-shadow 0.3s ease;
\t}
\t.event-create-page .form-control:focus, .event-create-page .form-select:focus {
\t\tborder-color: var(--ztc-bg-bg-9, #2E4DFD); box-shadow: 0 0 0 3px rgba(46,77,253,0.15); outline: none;
\t}
\t/* Fix nice-select dropdown appearing behind map */
\t#location-section .nice-select { position: relative; z-index: 1000; }
\t#location-section .nice-select.open { z-index: 1001; }
\t#location-section .nice-select .list { z-index: 1002 !important; position: absolute; }
\t#location-map { position: relative; z-index: 1; }
\t/* Add venue modal: sit above Bootstrap backdrop so inputs are clickable (modal is moved to body by JS) */
\t#add-venue-modal.modal { z-index: 1060 !important; }
\t#add-venue-modal .modal-dialog { position: relative; }
\t#add-venue-modal .modal-content { position: relative; }
\t#add-venue-modal input.form-control { pointer-events: auto !important; }
\t.event-create-page .form-control.is-invalid { border-color: #dc3545; }
\t.event-create-page .invalid-feedback { color: #dc3545; font-size: 0.85rem; }
\t.event-create-page .hint { font-size: 0.75rem; color: var(--ztc-text-text-3, #544E51); margin-bottom: 0.4rem; }
\t/* Primary submit: template vl-btn4 style (same as events list) - overrides design system */
\t.event-create-page .save-btn {
\t\tfont-family: var(--ztc-family-font1, inherit) !important; font-size: 0.9rem !important; font-weight: 700 !important;
\t\ttext-transform: uppercase !important; letter-spacing: 0.02em;
\t\tpadding: 12px 24px !important; border-radius: 8px !important; border: none !important;
\t\tbackground: var(--ztc-bg-bg-9, #2E4DFD) !important; color: var(--ztc-text-text-1, #fff) !important;
\t\tposition: relative !important; overflow: hidden !important; z-index: 1; transition: color 0.4s ease;
\t\tbox-shadow: none !important;
\t}
\t.event-create-page .save-btn::after {
\t\tcontent: \"\" !important; position: absolute; left: 50%; top: 0; width: 1px; height: 100%;
\t\tbackground: var(--ztc-bg-bg-8, #002466) !important; z-index: -1; border-radius: 8px;
\t\ttransition: width 0.4s ease, height 0.4s ease, left 0.4s ease, top 0.4s ease, opacity 0.4s ease;
\t\tvisibility: hidden; opacity: 0;
\t}
\t.event-create-page .save-btn:hover:not(:disabled) { color: #fff !important; background: var(--ztc-bg-bg-9, #2E4DFD) !important; transform: none !important; }
\t.event-create-page .save-btn:hover:not(:disabled)::after { width: 100%; height: 100%; left: 0; top: 0; visibility: visible; opacity: 1; }
\t.event-create-page .status-pill {
\t\tborder-radius: 8px; padding: 0.4rem 0.9rem; font-size: 0.8125rem; border: 1px solid rgba(0,0,0,.12); background: var(--ztc-bg-bg-1, #fff);
\t}
\t/* Status dropdown: pill trigger + open menu (like reference) */
\t.event-create-page .status-dropdown { position: relative; display: inline-block; }
\t.event-create-page .status-dropdown .status-select-native { position: absolute; opacity: 0; pointer-events: none; width: 1px; height: 1px; }
\t.event-create-page .status-dropdown-trigger {
\t\tdisplay: inline-flex; align-items: center; gap: 0.4rem; padding: 0.35rem 0.75rem; border-radius: 999px;
\t\tborder: 1px solid rgba(0,0,0,.2); background: var(--ztc-bg-bg-1, #fff); color: var(--ztc-text-text-2, #1A1719);
\t\tfont-size: 0.8125rem; font-weight: 500; cursor: pointer; transition: border-color 0.25s ease, box-shadow 0.25s ease;
\t}
\t.event-create-page .status-dropdown-trigger:hover { border-color: rgba(0,0,0,.3); }
\t.event-create-page .status-dropdown-trigger .status-dot { width: 6px; height: 6px; border-radius: 50%; background: var(--ztc-text-text-3, #544E51); flex-shrink: 0; }
\t.event-create-page .status-dropdown-trigger .status-caret { transition: transform 0.2s ease; color: var(--ztc-text-text-3, #544E51); font-size: 0.65rem; }
\t.event-create-page .status-dropdown.is-open .status-dropdown-trigger { border-color: var(--ztc-bg-bg-9, #2E4DFD); box-shadow: 0 0 0 2px rgba(46,77,253,0.2); }
\t.event-create-page .status-dropdown.is-open .status-caret { transform: rotate(180deg); }
\t.event-create-page .status-dropdown-menu {
\t\tposition: absolute; top: 100%; left: 0; margin-top: 4px; min-width: 100%;
\t\tbackground: #fff; border: 1px solid rgba(0,0,0,.1); border-radius: 8px; box-shadow: 0 10px 24px rgba(0,0,0,.12);
\t\tpadding: 0.35rem 0; z-index: 50; display: none;
\t}
\t.event-create-page .status-dropdown.is-open .status-dropdown-menu { display: block; }
\t.event-create-page .status-dropdown-menu button {
\t\tdisplay: block; width: 100%; text-align: left; padding: 0.5rem 1rem; font-size: 0.875rem; color: var(--ztc-text-text-2, #1A1719);
\t\tbackground: none; border: none; cursor: pointer; transition: background 0.15s ease;
\t}
\t.event-create-page .status-dropdown-menu button:hover { background: rgba(46,77,253,0.06); }
\t.event-create-page .summary-card .preview-link { font-size: 0.875rem; font-weight: 500; color: var(--ztc-bg-bg-9, #2E4DFD); text-decoration: none; display: inline-flex; align-items: center; gap: 0.35rem; }
\t.event-create-page .summary-card .preview-link:hover { text-decoration: underline; }
\t.event-create-page .summary-card .preview-link.muted { color: #6c757d; cursor: not-allowed; pointer-events: none; }
\t/* Good to know: outline buttons matching template */
\t.event-create-page .add-btn {
\t\tborder-radius: 8px; border: 1px solid rgba(0,0,0,.15); padding: 0.4rem 0.75rem; font-size: 0.875rem; font-weight: 500;
\t\tbackground: #fff; color: var(--ztc-text-text-2, #1A1719); transition: all 0.3s ease;
\t}
\t.event-create-page .add-btn:hover { border-color: var(--ztc-bg-bg-9, #2E4DFD); color: var(--ztc-bg-bg-9, #2E4DFD); background: rgba(46,77,253,0.04); }
\t.event-create-page .form-actions { margin-top: 1.5rem; padding-top: 1.25rem; border-top: 1px solid rgba(0,0,0,.06); }
</style>
{% endblock %}

{% block content %}
<div class=\"team-sperkers-section-area sp1 ef-animate-slideUp event-create-page\">
\t{{ form_start(form, { attr: { id: 'event-form' } }) }}
\t<div class=\"event-form-layout\">
\t\t<aside class=\"event-form-sidebar\" aria-label=\"Event progress\">
\t\t\t<a href=\"{{ path('app_events') }}\" class=\"back-link\" aria-label=\"Back to events\"><i class=\"fa-solid fa-arrow-left me-2\" aria-hidden=\"true\"></i> Back to events</a>
\t\t\t<div class=\"summary-card mb-4\">
\t\t\t\t<div class=\"summary-title\" id=\"live-title\">{{ event.title ?: 'Event Title' }}</div>
\t\t\t\t<div class=\"summary-date\">
\t\t\t\t\t<i class=\"fa-regular fa-calendar me-1\" aria-hidden=\"true\"></i>
\t\t\t\t\t<span id=\"live-date\">{% if event.startDatetime %}{{ event.startDatetime|date('D, M j, Y, g:i A') }}{% else %}Fri, Mar 20, 2026, 10:00 AM{% endif %}</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-3 d-flex flex-wrap align-items-center gap-2\">
\t\t\t\t\t<div class=\"status-dropdown\" id=\"status-dropdown\">
\t\t\t\t\t\t{{ form_widget(form.status, { attr: { class: 'status-select-native', id: 'event_status_select' } }) }}
\t\t\t\t\t\t<button type=\"button\" class=\"status-dropdown-trigger\" id=\"status-dropdown-trigger\" aria-haspopup=\"listbox\" aria-expanded=\"false\" aria-labelledby=\"status-dropdown-label\">
\t\t\t\t\t\t\t<span class=\"status-dot\" aria-hidden=\"true\"></span>
\t\t\t\t\t\t\t<span id=\"status-dropdown-label\">{{ event.status == 'published' ? 'Publish now' : (event.status == 'cancelled' ? 'Cancelled' : 'Draft') }}</span>
\t\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-up status-caret\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t\t<div class=\"status-dropdown-menu\" role=\"listbox\" id=\"status-dropdown-menu\" aria-hidden=\"true\">
\t\t\t\t\t\t\t<button type=\"button\" role=\"option\" data-value=\"draft\">Draft</button>
\t\t\t\t\t\t\t<button type=\"button\" role=\"option\" data-value=\"published\">Publish now</button>
\t\t\t\t\t\t\t<button type=\"button\" role=\"option\" data-value=\"cancelled\">Cancelled</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if event.id %}
\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"preview-link\" target=\"_blank\" rel=\"noopener\">Preview <i class=\"fa-solid fa-arrow-up-right-from-square\" style=\"font-size: 0.7rem;\" aria-hidden=\"true\"></i></a>
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<span class=\"preview-link muted\" title=\"Save draft first to preview\">Preview <i class=\"fa-solid fa-arrow-up-right-from-square\" style=\"font-size: 0.7rem;\" aria-hidden=\"true\"></i></span>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"steps-label\">Steps</div>
\t\t\t<div class=\"step step-active\">
\t\t\t\t<div class=\"step-radio\" aria-hidden=\"true\"></div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"step-title\">Build event page</div>
\t\t\t\t\t<div class=\"step-desc\">Add all of your event details and let attendees know what to expect.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"step\">
\t\t\t\t<div class=\"step-radio\" aria-hidden=\"true\"></div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"step-title\">Add tickets</div>
\t\t\t\t\t<div class=\"step-desc\">Create ticket types and set prices.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"step\">
\t\t\t\t<div class=\"step-radio\" aria-hidden=\"true\"></div>
\t\t\t\t<div>
\t\t\t\t\t<div class=\"step-title\">Publish</div>
\t\t\t\t\t<div class=\"step-desc\">Review and publish your event.</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</aside>

\t\t<div class=\"event-form-main\">
\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Event details</h3>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.title) }}
\t\t\t\t\t<p class=\"hint\">A short and sweet sentence about your event.</p>
\t\t\t\t\t{{ form_widget(form.title, { attr: { class: 'form-control' ~ (form.title.vars.errors|length ? ' is-invalid' : '') } }) }}
\t\t\t\t\t{{ form_errors(form.title) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-0\">
\t\t\t\t\t{{ form_label(form.summary) }}
\t\t\t\t\t<p class=\"hint\">Grab people's attention with a short description. (140 characters max)</p>
\t\t\t\t\t{{ form_widget(form.summary, { attr: { class: 'form-control', maxlength: 140 } }) }}
\t\t\t\t\t<div class=\"d-flex justify-content-between mt-1\">
\t\t\t\t\t\t{{ form_errors(form.summary) }}
\t\t\t\t\t\t<span class=\"char-count ms-auto text-muted small\" id=\"summary-count\">{{ (form.summary.vars.value ?? '')|length }}/140</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Cover image</h3>
\t\t\t\t<div class=\"upload-zone {{ form.vars.value.image ? 'has-image' : '' }}\" id=\"upload-zone\" style=\"{% if form.vars.value.image %}background-image: url('{{ form.vars.value.image }}');{% endif %}\">
\t\t\t\t\t<div class=\"upload-inner\" id=\"upload-inner\">
\t\t\t\t\t\t<i class=\"fa-solid fa-cloud-arrow-up\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t<p class=\"mb-0\">Upload photos and video</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mt-2\" id=\"image-url-wrap\">
\t\t\t\t\t{{ form_widget(form.image, { attr: { class: 'form-control', placeholder: 'Or paste image URL (e.g. https://...)' } }) }}
\t\t\t\t\t{{ form_errors(form.image) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Date and time</h3>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t{{ form_label(form.startDatetime) }}
\t\t\t\t\t\t{{ form_widget(form.startDatetime, { attr: { class: 'form-control' ~ (form.startDatetime.vars.errors|length ? ' is-invalid' : '') } }) }}
\t\t\t\t\t\t{{ form_errors(form.startDatetime) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t{{ form_label(form.endDatetime) }}
\t\t\t\t\t\t{{ form_widget(form.endDatetime, { attr: { class: 'form-control' ~ (form.endDatetime.vars.errors|length ? ' is-invalid' : '') } }) }}
\t\t\t\t\t\t{{ form_errors(form.endDatetime) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"section-card\" id=\"location-section\">
\t\t\t\t<h3 class=\"mb-3\">Location</h3>
\t\t\t\t{{ form_label(form.venue) }}
\t\t\t\t<div class=\"input-group mb-3\">
\t\t\t\t\t{{ form_widget(form.venue, { attr: { class: 'form-select' ~ (form.venue.vars.errors|length ? ' is-invalid' : ''), id: 'event_venue', style: 'border-radius: 8px 0 0 8px;' } }) }}
\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" id=\"location-add-btn\" style=\"border-radius: 0 8px 8px 0; padding: 0.5rem 1.25rem; font-weight: 600;\">
\t\t\t\t\t\t<i class=\"fa-solid fa-plus me-1\"></i> Add Venue
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t{{ form_errors(form.venue) }}
\t\t\t\t<div id=\"location-map\" style=\"height: 300px; width: 100%; border-radius: 8px; background: #f0f0f0;\"></div>
\t\t\t</div>

\t\t\t<div class=\"section-card\">
\t\t\t\t<h3 class=\"mb-3\">Description</h3>
\t\t\t\t<p class=\"hint\">Use this section to provide more details about your event. You can include things to know, venue information, accessibility options—anything that will help people know what to expect.</p>
\t\t\t\t{{ form_widget(form.description, { attr: { class: 'form-control', rows: 8 } }) }}
\t\t\t\t{{ form_errors(form.description) }}
\t\t\t</div>

\t\t\t<div class=\"text-end mt-4\">
\t\t\t\t<button type=\"submit\" form=\"event-form\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\">
\t\t\t\t\t<i class=\"fa-solid fa-check me-2\" aria-hidden=\"true\"></i>{{ event.id ? 'Save changes' : 'Save and continue' }}
\t\t\t\t</button>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div class=\"modal fade\" id=\"add-venue-modal\" tabindex=\"-1\" aria-labelledby=\"add-venue-modal-label\" aria-hidden=\"true\">
\t\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t\t<div class=\"modal-content\">
\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t<h5 class=\"modal-title\" id=\"add-venue-modal-label\">Add venue</h5>
\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-body\">
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"venue-address-input\" class=\"form-label\">Address</label>
\t\t\t\t\t\t<input type=\"text\" id=\"venue-address-input\" class=\"form-control\" placeholder=\"Street, city, country\" autocomplete=\"off\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label for=\"venue-name-input\" class=\"form-label\">Venue name</label>
\t\t\t\t\t\t<input type=\"text\" id=\"venue-name-input\" class=\"form-control\" placeholder=\"Venue name\" required>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t<label class=\"form-label\">Location</label>
\t\t\t\t\t\t<div id=\"add-venue-map\" style=\"height: 220px; width: 100%; border-radius: 8px; background: #f0f0f0;\"></div>
\t\t\t\t\t</div>
\t\t\t\t\t<div id=\"add-venue-error\" class=\"alert alert-danger small d-none\" role=\"alert\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t<button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-success\" id=\"save-venue-btn\">Save venue</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t{% if form.organizer is defined %}
\t\t{% do form.organizer.setRendered() %}
\t{% endif %}
\t{% if form.categories is defined %}
\t\t{% do form.categories.setRendered() %}
\t{% endif %}
\t{{ form_end(form) }}
</div>
{% endblock %}

{% block page_scripts %}
<script>
(function() {
\t/* Move Add venue modal to body so it is above the Bootstrap backdrop (fixes unclickable inputs) */
\tfunction moveModalToBody() {
\t\tvar modalEl = document.getElementById('add-venue-modal');
\t\tif (modalEl && modalEl.parentNode && modalEl.parentNode !== document.body) {
\t\t\tdocument.body.appendChild(modalEl);
\t\t}
\t}
\t/* Remove any modal backdrop that might be blocking the main form (e.g. Venue dropdown) */
\tfunction removeStrayBackdrops() {
\t\tvar backdrops = document.querySelectorAll('.modal-backdrop');
\t\tvar openModal = document.querySelector('.modal.show');
\t\tif (!openModal && backdrops.length) {
\t\t\tbackdrops.forEach(function(el) { el.remove(); });
\t\t\tdocument.body.classList.remove('modal-open');
\t\t\tdocument.body.style.overflow = '';
\t\t\tdocument.body.style.paddingRight = '';
\t\t}
\t}
\tdocument.addEventListener('DOMContentLoaded', function() {
\t\tmoveModalToBody();
\t\tremoveStrayBackdrops();
\t\tvar addVenueModalEl = document.getElementById('add-venue-modal');
\t\tif (addVenueModalEl) {
\t\t\taddVenueModalEl.addEventListener('hidden.bs.modal', removeStrayBackdrops);
\t\t}
\t});
})();
window.eventifyMapsConfig = {
\tvenueFromMapUrl: {{ path('app_venue_from_map')|json_encode|raw }},
\tvenueFromMapToken: {{ csrf_token('venue_from_map')|json_encode|raw }}
};
function eventifyLeafletInit() {
\tvar cfg = window.eventifyMapsConfig || {};
\tvar venueSelect = document.getElementById('event_venue');
\tvar locationMapEl = document.getElementById('location-map');
\tvar mainMap = null, mainMarker = null;
\tvar defaultCenter = [20, 0];
\tvar defaultZoom = 2;
\tif (locationMapEl && typeof L !== 'undefined') {
\t\tmainMap = L.map(locationMapEl).setView(defaultCenter, defaultZoom);
\t\tL.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
\t\t\tattribution: '© OpenStreetMap contributors'
\t\t}).addTo(mainMap);
\t}
\tfunction updateMainMapFromVenue() {
\t\tif (!venueSelect || !mainMap) return;
\t\tvar opt = venueSelect.options[venueSelect.selectedIndex];
\t\tvar lat = opt && opt.getAttribute && opt.getAttribute('data-lat');
\t\tvar lng = opt && opt.getAttribute && opt.getAttribute('data-lng');
\t\tif (mainMarker && mainMap) {
\t\t\tmainMap.removeLayer(mainMarker);
\t\t\tmainMarker = null;
\t\t}
\t\tvar latNum = lat !== null && lat !== undefined ? parseFloat(lat) : NaN;
\t\tvar lngNum = lng !== null && lng !== undefined ? parseFloat(lng) : NaN;
\t\tif (!isNaN(latNum) && !isNaN(lngNum)) {
\t\t\tvar pos = [latNum, lngNum];
\t\t\tmainMap.setView(pos, 14);
\t\t\tmainMarker = L.marker(pos).addTo(mainMap);
\t\t} else {
\t\t\tmainMap.setView(defaultCenter, defaultZoom);
\t\t}
\t}
\tif (venueSelect && mainMap) {
\t\tvenueSelect.addEventListener('change', updateMainMapFromVenue);
\t\tupdateMainMapFromVenue();
\t}

\tvar addVenueModalEl = document.getElementById('add-venue-modal');
\tvar locationAddBtn = document.getElementById('location-add-btn');
\tvar addVenueMapEl = document.getElementById('add-venue-map');
\tvar venueAddressInput = document.getElementById('venue-address-input');
\tvar venueNameInput = document.getElementById('venue-name-input');
\tvar saveVenueBtn = document.getElementById('save-venue-btn');
\tvar addVenueError = document.getElementById('add-venue-error');
\tvar addVenueMap = null, addVenueMarker = null, lastPlaceData = null;

\tif (locationAddBtn && addVenueModalEl && addVenueMapEl && typeof L !== 'undefined') {
\t\tlocationAddBtn.addEventListener('click', function() {
\t\t\tlastPlaceData = null;
\t\t\tif (venueNameInput) venueNameInput.value = '';
\t\t\tif (venueAddressInput) venueAddressInput.value = '';
\t\t\tif (addVenueError) { addVenueError.classList.add('d-none'); addVenueError.textContent = ''; }
\t\t\tvar modal = typeof bootstrap !== 'undefined' && bootstrap.Modal ? bootstrap.Modal.getOrCreateInstance(addVenueModalEl) : null;
\t\t\tif (modal) modal.show();
\t\t\tsetTimeout(function() {
\t\t\t\tif (!addVenueMap) {
\t\t\t\t\taddVenueMap = L.map(addVenueMapEl).setView(defaultCenter, 4);
\t\t\t\t\tL.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
\t\t\t\t\t\tattribution: '© OpenStreetMap contributors'
\t\t\t\t\t}).addTo(addVenueMap);
\t\t\t\t\taddVenueMap.on('click', function(e) {
\t\t\t\t\t\tvar latlng = e.latlng;
\t\t\t\t\t\tif (addVenueMarker) {
\t\t\t\t\t\t\taddVenueMap.removeLayer(addVenueMarker);
\t\t\t\t\t\t}
\t\t\t\t\t\taddVenueMarker = L.marker(latlng).addTo(addVenueMap);
\t\t\t\t\t\tlastPlaceData = {
\t\t\t\t\t\t\tname: venueNameInput ? (venueNameInput.value.trim() || 'Venue') : 'Venue',
\t\t\t\t\t\t\taddress: venueAddressInput ? venueAddressInput.value.trim() : '',
\t\t\t\t\t\t\tcity: '',
\t\t\t\t\t\t\tstate: '',
\t\t\t\t\t\t\tcountry: '',
\t\t\t\t\t\t\tpostalCode: '',
\t\t\t\t\t\t\tlatitude: latlng.lat,
\t\t\t\t\t\t\tlongitude: latlng.lng
\t\t\t\t\t\t};
\t\t\t\t\t});
\t\t\t\t}
\t\t\t}, 200);
\t\t});
\t}

\tif (saveVenueBtn && cfg.venueFromMapUrl && cfg.venueFromMapToken) {
\t\tsaveVenueBtn.addEventListener('click', function() {
\t\t\tvar name = venueNameInput ? venueNameInput.value.trim() : '';
\t\t\tif (!name) {
\t\t\t\tif (addVenueError) {
\t\t\t\t\taddVenueError.textContent = 'Please enter a venue name.';
\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t}
\t\t\t\treturn;
\t\t\t}
\t\t\tvar payload = lastPlaceData || {};
\t\t\tif (!payload.latitude || !payload.longitude) {
\t\t\t\tif (addVenueError) {
\t\t\t\t\taddVenueError.textContent = 'Please click on the map to choose a location.';
\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t}
\t\t\t\treturn;
\t\t\t}
\t\t\tvar body = new FormData();
\t\t\tbody.append('_token', cfg.venueFromMapToken);
\t\t\tbody.append('name', name);
\t\t\tbody.append('address', payload.address || '');
\t\t\tbody.append('city', payload.city || '');
\t\t\tbody.append('state', payload.state || '');
\t\t\tbody.append('country', payload.country || '');
\t\t\tbody.append('postalCode', payload.postalCode || '');
\t\t\tbody.append('latitude', payload.latitude);
\t\t\tbody.append('longitude', payload.longitude);
\t\t\tif (addVenueError) { addVenueError.classList.add('d-none'); addVenueError.textContent = ''; }
\t\t\tsaveVenueBtn.disabled = true;
\t\t\tfetch(cfg.venueFromMapUrl, { method: 'POST', body: body })
\t\t\t\t.then(function(r) { return r.json().then(function(j) { return { ok: r.ok, json: j }; }); })
\t\t\t\t.then(function(res) {
\t\t\t\t\tsaveVenueBtn.disabled = false;
\t\t\t\t\tif (res.ok && res.json.id) {
\t\t\t\t\t\tvar opt = document.createElement('option');
\t\t\t\t\t\topt.value = res.json.id;
\t\t\t\t\t\topt.setAttribute('data-lat', res.json.latitude || '');
\t\t\t\t\t\topt.setAttribute('data-lng', res.json.longitude || '');
\t\t\t\t\t\topt.textContent = res.json.name;
\t\t\t\t\t\tif (venueSelect) {
\t\t\t\t\t\t\tvenueSelect.appendChild(opt);
\t\t\t\t\t\t\tvenueSelect.value = res.json.id;
\t\t\t\t\t\t\tupdateMainMapFromVenue();
\t\t\t\t\t\t}
\t\t\t\t\t\tvar modal = typeof bootstrap !== 'undefined' && bootstrap.Modal ? bootstrap.Modal.getInstance(addVenueModalEl) : null;
\t\t\t\t\t\tif (modal) modal.hide();
\t\t\t\t\t} else {
\t\t\t\t\t\tif (addVenueError) {
\t\t\t\t\t\t\taddVenueError.textContent = res.json.error || 'Failed to save venue.';
\t\t\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t})
\t\t\t\t.catch(function() {
\t\t\t\t\tsaveVenueBtn.disabled = false;
\t\t\t\t\tif (addVenueError) {
\t\t\t\t\t\taddVenueError.textContent = 'Network error. Please try again.';
\t\t\t\t\t\taddVenueError.classList.remove('d-none');
\t\t\t\t\t}
\t\t\t\t});
\t\t});
\t}
}
if (typeof L !== 'undefined') {
\tdocument.addEventListener('DOMContentLoaded', eventifyLeafletInit);
}
</script>
<script>
(function() {
\t/* Status dropdown: pill trigger + menu (Draft / Publish now / Cancelled) */
\tvar statusDropdown = document.getElementById('status-dropdown');
\tif (statusDropdown) {
\t\tvar trigger = document.getElementById('status-dropdown-trigger');
\t\tvar menu = document.getElementById('status-dropdown-menu');
\t\tvar selectEl = document.getElementById('event_status_select');
\t\tvar labelEl = document.getElementById('status-dropdown-label');
\t\tvar labels = { draft: 'Draft', published: 'Publish now', cancelled: 'Cancelled' };
\t\tfunction updateLabel() {
\t\t\tif (selectEl && labelEl) labelEl.textContent = labels[selectEl.value] || selectEl.value;
\t\t}
\t\tfunction close() {
\t\t\tstatusDropdown.classList.remove('is-open');
\t\t\tif (trigger) trigger.setAttribute('aria-expanded', 'false');
\t\t\tif (menu) menu.setAttribute('aria-hidden', 'true');
\t\t}
\t\tif (trigger && menu && selectEl) {
\t\t\ttrigger.addEventListener('click', function(e) {
\t\t\t\te.preventDefault();
\t\t\t\tvar open = statusDropdown.classList.toggle('is-open');
\t\t\t\ttrigger.setAttribute('aria-expanded', open ? 'true' : 'false');
\t\t\t\tmenu.setAttribute('aria-hidden', open ? 'false' : 'true');
\t\t\t});
\t\t\tmenu.querySelectorAll('button[data-value]').forEach(function(btn) {
\t\t\t\tbtn.addEventListener('click', function() {
\t\t\t\t\tvar val = this.getAttribute('data-value');
\t\t\t\t\tselectEl.value = val;
\t\t\t\t\tupdateLabel();
\t\t\t\t\tclose();
\t\t\t\t});
\t\t\t});
\t\t\tdocument.addEventListener('click', function(e) {
\t\t\t\tif (statusDropdown && statusDropdown.classList.contains('is-open') && !statusDropdown.contains(e.target)) close();
\t\t\t});
\t\t}
\t\tupdateLabel();
\t}

\tvar form = document.getElementById('event-form');
\tif (!form) return;
\tvar titleInput = form.querySelector('input[name*=\"[title]\"]');
\tvar summaryInput = form.querySelector('input[name*=\"[summary]\"]');
\tvar liveTitle = document.getElementById('live-title');
\tvar summaryCount = document.getElementById('summary-count');
\tif (titleInput && liveTitle) titleInput.addEventListener('input', function() { liveTitle.textContent = this.value || 'Event Title'; });
\tif (summaryInput && summaryCount) summaryInput.addEventListener('input', function() { summaryCount.textContent = this.value.length + '/140'; });
\tvar uploadZone = document.getElementById('upload-zone');
\tvar uploadInner = document.getElementById('upload-inner');
\tvar imageInput = form.querySelector('input[name*=\"[image]\"]');
\tif (uploadZone && imageInput) {
\t\timageInput.addEventListener('input', function() {
\t\t\tvar url = this.value && this.value.trim();
\t\t\tif (url) { uploadZone.classList.add('has-image'); uploadZone.style.backgroundImage = 'url(' + url + ')'; if (uploadInner) uploadInner.style.display = 'none'; }
\t\t\telse { uploadZone.classList.remove('has-image'); uploadZone.style.backgroundImage = ''; if (uploadInner) uploadInner.style.display = ''; }
\t\t});
\t\tif (imageInput.value && imageInput.value.trim()) {
\t\t\tuploadZone.classList.add('has-image');
\t\t\tuploadZone.style.backgroundImage = 'url(' + imageInput.value.trim() + ')';
\t\t\tif (uploadInner) uploadInner.style.display = 'none';
\t\t}
\t}
})();
</script>
{% endblock %}
", "event_form.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\event_form.html.twig");
    }
}

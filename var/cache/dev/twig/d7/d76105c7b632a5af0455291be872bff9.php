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

/* sponsorship/package_form.html.twig */
class __TwigTemplate_c0983a03ed08782fe3b083e3fe71eac9 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/package_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/package_form.html.twig"));

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
        yield " - ";
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 5, $this->source); })()), "html", null, true);
        
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
        yield from $this->yieldParentBlock("page_styles", $context, $blocks);
        yield "
<style>
.sponsorship-form .form-section { margin-bottom: 2rem; }
.sponsorship-form .form-section-title { font-size: 1rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid #e9ecef; }
.sponsorship-form .mb-3 .form-label { font-weight: 500; color: #374151; margin-bottom: 0.35rem; }
.sponsorship-form .form-control, .sponsorship-form .form-select { border-radius: 8px; padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; }
.sponsorship-form .form-control:focus, .sponsorship-form .form-select:focus { border-color: #2E4DFD; box-shadow: 0 0 0 3px rgba(46,77,253,0.15); }
.sponsorship-form textarea.form-control { min-height: 80px; resize: vertical; }
.sponsorship-form .form-text { font-size: 0.8125rem; color: #6b7280; margin-top: 0.25rem; }
.sponsorship-form .invalid-feedback { font-size: 0.8125rem; }
.sponsorship-form .btn-primary { border-radius: 8px; padding: 0.5rem 1.25rem; font-weight: 600; }
.sponsorship-form .btn-outline-secondary { border-radius: 8px; padding: 0.5rem 1.25rem; }
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 23
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

        // line 24
        yield "<div class=\"container py-4\">
\t<div class=\"mb-3\">
\t\t<a href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to packages</a>
\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t<a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" class=\"text-dark text-decoration-none\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "html", null, true);
        yield "</a>
\t</div>

\t<div class=\"card border-0 shadow-sm overflow-hidden\">
\t\t<div class=\"card-body p-4 p-lg-5\">
\t\t\t<h2 class=\"h5 fw-bold mb-4\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 33, $this->source); })()), "html", null, true);
        yield "</h2>
\t\t\t";
        // line 34
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), 'form_start', ["attr" => ["class" => "sponsorship-form", "novalidate" => "novalidate"]]);
        yield "

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Package details</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'label');
        yield "
\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
\t\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "price", [], "any", false, false, false, 45), 'label');
        yield "
\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "price", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "price", [], "any", false, false, false, 47), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "numberOfTables", [], "any", false, false, false, 52), 'label');
        yield "
\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "numberOfTables", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "numberOfTables", [], "any", false, false, false, 54), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "seatsPerTable", [], "any", false, false, false, 57), 'label');
        yield "
\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "seatsPerTable", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "seatsPerTable", [], "any", false, false, false, 59), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'label');
        yield "
\t\t\t\t\t";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "benefits", [], "any", false, false, false, 68), 'label');
        yield "
\t\t\t\t\t";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "benefits", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t<p class=\"form-text\">Describe what's included (e.g. logo placement, booth space, mentions).</p>
\t\t\t\t\t";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "benefits", [], "any", false, false, false, 71), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"d-flex flex-wrap gap-2 mt-4 pt-3 border-top\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save package</button>
\t\t\t\t<a href=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t</div>
\t\t\t";
        // line 79
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), 'form_end');
        yield "
\t\t</div>
\t</div>
</div>
// Improved error handling
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
        return "sponsorship/package_form.html.twig";
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
        return array (  318 => 79,  313 => 77,  304 => 71,  299 => 69,  295 => 68,  289 => 65,  285 => 64,  281 => 63,  274 => 59,  270 => 58,  266 => 57,  260 => 54,  256 => 53,  252 => 52,  244 => 47,  240 => 46,  236 => 45,  230 => 42,  226 => 41,  222 => 40,  213 => 34,  209 => 33,  199 => 28,  194 => 26,  190 => 24,  177 => 23,  152 => 8,  139 => 7,  116 => 5,  93 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}{{ title }} - {{ event.title }} - Eventify{% endblock %}
{% block page_heading %}{{ title }}{% endblock %}
{% block page_breadcrumb %}{{ title }}{% endblock %}

{% block page_styles %}
{{ parent() }}
<style>
.sponsorship-form .form-section { margin-bottom: 2rem; }
.sponsorship-form .form-section-title { font-size: 1rem; font-weight: 600; color: #1a1a1a; margin-bottom: 1rem; padding-bottom: 0.5rem; border-bottom: 2px solid #e9ecef; }
.sponsorship-form .mb-3 .form-label { font-weight: 500; color: #374151; margin-bottom: 0.35rem; }
.sponsorship-form .form-control, .sponsorship-form .form-select { border-radius: 8px; padding: 0.5rem 0.75rem; border: 1px solid #d1d5db; }
.sponsorship-form .form-control:focus, .sponsorship-form .form-select:focus { border-color: #2E4DFD; box-shadow: 0 0 0 3px rgba(46,77,253,0.15); }
.sponsorship-form textarea.form-control { min-height: 80px; resize: vertical; }
.sponsorship-form .form-text { font-size: 0.8125rem; color: #6b7280; margin-top: 0.25rem; }
.sponsorship-form .invalid-feedback { font-size: 0.8125rem; }
.sponsorship-form .btn-primary { border-radius: 8px; padding: 0.5rem 1.25rem; font-weight: 600; }
.sponsorship-form .btn-outline-secondary { border-radius: 8px; padding: 0.5rem 1.25rem; }
</style>
{% endblock %}

{% block content %}
<div class=\"container py-4\">
\t<div class=\"mb-3\">
\t\t<a href=\"{{ path('app_sponsorship_package_index', { id: event.id }) }}\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to packages</a>
\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-dark text-decoration-none\">{{ event.title }}</a>
\t</div>

\t<div class=\"card border-0 shadow-sm overflow-hidden\">
\t\t<div class=\"card-body p-4 p-lg-5\">
\t\t\t<h2 class=\"h5 fw-bold mb-4\">{{ title }}</h2>
\t\t\t{{ form_start(form, { attr: { class: 'sponsorship-form', novalidate: 'novalidate' } }) }}

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Package details</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.name) }}
\t\t\t\t\t\t{{ form_widget(form.name, { attr: { class: 'form-select' } }) }}
\t\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.price) }}
\t\t\t\t\t\t{{ form_widget(form.price, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.price) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.numberOfTables) }}
\t\t\t\t\t\t{{ form_widget(form.numberOfTables, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.numberOfTables) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.seatsPerTable) }}
\t\t\t\t\t\t{{ form_widget(form.seatsPerTable, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.seatsPerTable) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.description) }}
\t\t\t\t\t{{ form_widget(form.description, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t{{ form_errors(form.description) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.benefits) }}
\t\t\t\t\t{{ form_widget(form.benefits, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t<p class=\"form-text\">Describe what's included (e.g. logo placement, booth space, mentions).</p>
\t\t\t\t\t{{ form_errors(form.benefits) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"d-flex flex-wrap gap-2 mt-4 pt-3 border-top\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save package</button>
\t\t\t\t<a href=\"{{ path('app_sponsorship_package_index', { id: event.id }) }}\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
</div>
// Improved error handling
{% endblock %}
", "sponsorship/package_form.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\sponsorship\\package_form.html.twig");
    }
}

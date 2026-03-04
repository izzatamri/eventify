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

/* sponsorship/sponsor_form.html.twig */
class __TwigTemplate_0352c37a6814583d1ded940ff2fe32d2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/sponsor_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sponsorship/sponsor_form.html.twig"));

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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)]), "html", null, true);
        yield "\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to sponsors</a>
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
\t\t\t\t<div class=\"form-section-title\">Company information</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "name", [], "any", false, false, false, 40), 'label');
        yield "
\t\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "name", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'label');
        yield "
\t\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "email", [], "any", false, false, false, 47), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "phone", [], "any", false, false, false, 52), 'label');
        yield "
\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "phone", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "phone", [], "any", false, false, false, 54), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "website", [], "any", false, false, false, 57), 'label');
        yield "
\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "website", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "website", [], "any", false, false, false, 59), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "logoFile", [], "any", false, false, false, 63), 'label');
        yield "
\t\t\t\t\t";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "logoFile", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t<p class=\"form-text\">PNG, JPEG, JPG, WebP or GIF. Max 2 MB. Leave empty to keep current logo.</p>
\t\t\t\t\t";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "logoFile", [], "any", false, false, false, 66), 'errors');
        yield "
\t\t\t\t\t";
        // line 67
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 67, $this->source); })()), "logoUrl", [], "any", false, false, false, 67)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 68
            yield "\t\t\t\t\t\t<p class=\"small text-muted mt-2 mb-0\">Current logo: <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 68, $this->source); })()), "logoUrl", [], "any", false, false, false, 68), "html", null, true);
            yield "\" alt=\"\" class=\"rounded align-middle\" style=\"height: 32px;\" /></p>
\t\t\t\t\t";
        }
        // line 70
        yield "\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "logoUrl", [], "any", false, false, false, 72), 'label');
        yield "
\t\t\t\t\t";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "logoUrl", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t<p class=\"form-text\">Or paste a logo image URL instead of uploading a file.</p>
\t\t\t\t\t";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "logoUrl", [], "any", false, false, false, 75), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "description", [], "any", false, false, false, 78), 'label');
        yield "
\t\t\t\t\t";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "description", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Contact person</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "contactPersonName", [], "any", false, false, false, 88), 'label');
        yield "
\t\t\t\t\t\t";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "contactPersonName", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "contactPersonName", [], "any", false, false, false, 90), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 93), 'label');
        yield "
\t\t\t\t\t\t";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 95), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Package &amp; payment</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "sponsorshipPackage", [], "any", false, false, false, 104), 'label');
        yield "
\t\t\t\t\t\t";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "sponsorshipPackage", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
\t\t\t\t\t\t";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "sponsorshipPackage", [], "any", false, false, false, 106), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "status", [], "any", false, false, false, 109), 'label');
        yield "
\t\t\t\t\t\t";
        // line 110
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "status", [], "any", false, false, false, 110), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
\t\t\t\t\t\t";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "status", [], "any", false, false, false, 111), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "paymentStatus", [], "any", false, false, false, 116), 'label');
        yield "
\t\t\t\t\t\t";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "paymentStatus", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
\t\t\t\t\t\t";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "paymentStatus", [], "any", false, false, false, 118), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "amountPaid", [], "any", false, false, false, 121), 'label');
        yield "
\t\t\t\t\t\t";
        // line 122
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "amountPaid", [], "any", false, false, false, 122), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "amountPaid", [], "any", false, false, false, 123), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "paymentDate", [], "any", false, false, false, 126), 'label');
        yield "
\t\t\t\t\t\t";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "paymentDate", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "paymentDate", [], "any", false, false, false, 128), 'errors');
        yield "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Internal notes</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 136, $this->source); })()), "notes", [], "any", false, false, false, 136), 'label');
        yield "
\t\t\t\t\t";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "notes", [], "any", false, false, false, 137), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t<p class=\"form-text\">Not visible to the public.</p>
\t\t\t\t\t";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 139, $this->source); })()), "notes", [], "any", false, false, false, 139), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"d-flex flex-wrap gap-2 mt-4 pt-3 border-top\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save sponsor</button>
\t\t\t\t<a href=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 145, $this->source); })()), "id", [], "any", false, false, false, 145)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t</div>
\t\t\t";
        // line 147
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'form_end');
        yield "
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
        return "sponsorship/sponsor_form.html.twig";
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
        return array (  474 => 147,  469 => 145,  460 => 139,  455 => 137,  451 => 136,  440 => 128,  436 => 127,  432 => 126,  426 => 123,  422 => 122,  418 => 121,  412 => 118,  408 => 117,  404 => 116,  396 => 111,  392 => 110,  388 => 109,  382 => 106,  378 => 105,  374 => 104,  362 => 95,  358 => 94,  354 => 93,  348 => 90,  344 => 89,  340 => 88,  329 => 80,  325 => 79,  321 => 78,  315 => 75,  310 => 73,  306 => 72,  302 => 70,  296 => 68,  294 => 67,  290 => 66,  285 => 64,  281 => 63,  274 => 59,  270 => 58,  266 => 57,  260 => 54,  256 => 53,  252 => 52,  244 => 47,  240 => 46,  236 => 45,  230 => 42,  226 => 41,  222 => 40,  213 => 34,  209 => 33,  199 => 28,  194 => 26,  190 => 24,  177 => 23,  152 => 8,  139 => 7,  116 => 5,  93 => 4,  67 => 3,  44 => 1,);
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
\t\t<a href=\"{{ path('app_sponsor_index', { id: event.id }) }}\" class=\"text-primary text-decoration-none small\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to sponsors</a>
\t\t<span class=\"mx-2 text-muted\">/</span>
\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-dark text-decoration-none\">{{ event.title }}</a>
\t</div>

\t<div class=\"card border-0 shadow-sm overflow-hidden\">
\t\t<div class=\"card-body p-4 p-lg-5\">
\t\t\t<h2 class=\"h5 fw-bold mb-4\">{{ title }}</h2>
\t\t\t{{ form_start(form, { attr: { class: 'sponsorship-form', novalidate: 'novalidate' } }) }}

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Company information</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.name) }}
\t\t\t\t\t\t{{ form_widget(form.name, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.email) }}
\t\t\t\t\t\t{{ form_widget(form.email, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.phone) }}
\t\t\t\t\t\t{{ form_widget(form.phone, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.phone) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.website) }}
\t\t\t\t\t\t{{ form_widget(form.website, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.website) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.logoFile) }}
\t\t\t\t\t{{ form_widget(form.logoFile, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t<p class=\"form-text\">PNG, JPEG, JPG, WebP or GIF. Max 2 MB. Leave empty to keep current logo.</p>
\t\t\t\t\t{{ form_errors(form.logoFile) }}
\t\t\t\t\t{% if sponsor.logoUrl %}
\t\t\t\t\t\t<p class=\"small text-muted mt-2 mb-0\">Current logo: <img src=\"{{ sponsor.logoUrl }}\" alt=\"\" class=\"rounded align-middle\" style=\"height: 32px;\" /></p>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.logoUrl) }}
\t\t\t\t\t{{ form_widget(form.logoUrl, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t<p class=\"form-text\">Or paste a logo image URL instead of uploading a file.</p>
\t\t\t\t\t{{ form_errors(form.logoUrl) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.description) }}
\t\t\t\t\t{{ form_widget(form.description, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t{{ form_errors(form.description) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Contact person</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.contactPersonName) }}
\t\t\t\t\t\t{{ form_widget(form.contactPersonName, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.contactPersonName) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.contactPersonEmail) }}
\t\t\t\t\t\t{{ form_widget(form.contactPersonEmail, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.contactPersonEmail) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Package &amp; payment</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.sponsorshipPackage) }}
\t\t\t\t\t\t{{ form_widget(form.sponsorshipPackage, { attr: { class: 'form-select' } }) }}
\t\t\t\t\t\t{{ form_errors(form.sponsorshipPackage) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6 mb-3\">
\t\t\t\t\t\t{{ form_label(form.status) }}
\t\t\t\t\t\t{{ form_widget(form.status, { attr: { class: 'form-select' } }) }}
\t\t\t\t\t\t{{ form_errors(form.status) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t{{ form_label(form.paymentStatus) }}
\t\t\t\t\t\t{{ form_widget(form.paymentStatus, { attr: { class: 'form-select' } }) }}
\t\t\t\t\t\t{{ form_errors(form.paymentStatus) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t{{ form_label(form.amountPaid) }}
\t\t\t\t\t\t{{ form_widget(form.amountPaid, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.amountPaid) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 mb-3\">
\t\t\t\t\t\t{{ form_label(form.paymentDate) }}
\t\t\t\t\t\t{{ form_widget(form.paymentDate, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(form.paymentDate) }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"form-section\">
\t\t\t\t<div class=\"form-section-title\">Internal notes</div>
\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t{{ form_label(form.notes) }}
\t\t\t\t\t{{ form_widget(form.notes, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t<p class=\"form-text\">Not visible to the public.</p>
\t\t\t\t\t{{ form_errors(form.notes) }}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"d-flex flex-wrap gap-2 mt-4 pt-3 border-top\">
\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Save sponsor</button>
\t\t\t\t<a href=\"{{ path('app_sponsor_index', { id: event.id }) }}\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>
</div>
{% endblock %}
", "sponsorship/sponsor_form.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\sponsorship\\sponsor_form.html.twig");
    }
}

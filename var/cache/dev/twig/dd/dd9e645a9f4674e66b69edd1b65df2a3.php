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

/* ticket_edit.html.twig */
class __TwigTemplate_e84d07f8db60f9362e5c110ad540b97f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ticket_edit.html.twig"));

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

        yield "Edit ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
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

        yield "Edit ticket";
        
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

        yield "Edit ticket";
        
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
\t\t.event-create-page .sidebar { max-width: 300px; }
\t\t.event-create-page .summary-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.25rem; }
\t\t.event-create-page .section-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; max-width: 520px; }
\t\t.event-create-page .form-control.is-invalid { border-color: #dc3545; }
\t\t.event-create-page .save-btn { padding: 0.6rem 1.5rem; border-radius: 8px; font-weight: 600; border: none; }
\t</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
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

        // line 20
        yield "<section class=\"team-sperkers-section-area sp1 ef-animate-slideUp\">
\t<div class=\"container\">
\t\t";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["success"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "\t\t<div class=\"event-create-page\">
\t\t\t<div class=\"container-fluid px-3 px-lg-4\">
\t\t\t\t<div class=\"d-flex justify-content-between align-items-center mb-3\">
\t\t\t\t\t<a href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 28, $this->source); })()), "id", [], "any", false, false, false, 28)]), "html", null, true);
        yield "\" class=\"back-link\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to tickets</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<aside class=\"col-lg-4 col-xl-3\">
\t\t\t\t\t\t<div class=\"summary-card mb-3\">
\t\t\t\t\t\t\t<div class=\"fw-bold\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t<div class=\"small text-muted mt-1\">Editing: ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["ticket"]) || array_key_exists("ticket", $context) ? $context["ticket"] : (function () { throw new RuntimeError('Variable "ticket" does not exist.', 34, $this->source); })()), "name", [], "any", false, false, false, 34), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t<a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 35, $this->source); })()), "id", [], "any", false, false, false, 35)]), "html", null, true);
        yield "\" class=\"small text-primary mt-2 d-inline-block\">View all tickets</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t<h2 class=\"h5 fw-bold mb-4\">Edit ticket</h2>
\t\t\t\t\t\t\t";
        // line 41
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'form_start');
        yield "
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "name", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "name", [], "any", false, false, false, 45), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "quantityAvailable", [], "any", false, false, false, 48), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "quantityAvailable", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "quantityAvailable", [], "any", false, false, false, 50), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "price", [], "any", false, false, false, 53), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "price", [], "any", false, false, false, 54), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "price", [], "any", false, false, false, 55), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "saleStart", [], "any", false, false, false, 58), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "saleStart", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "saleStart", [], "any", false, false, false, 60), 'errors');
        yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "saleEnd", [], "any", false, false, false, 63), 'label');
        yield "
\t\t\t\t\t\t\t\t";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "saleEnd", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
\t\t\t\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "saleEnd", [], "any", false, false, false, 65), 'errors');
        yield "
       // NOTE: This might need refactoring
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_tickets", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
        yield "\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn vl-btn4 save-btn\">Save changes</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 72
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), 'form_end');
        yield "
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
        return "ticket_edit.html.twig";
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
        return array (  313 => 72,  307 => 69,  300 => 65,  296 => 64,  292 => 63,  286 => 60,  282 => 59,  278 => 58,  272 => 55,  268 => 54,  264 => 53,  258 => 50,  254 => 49,  250 => 48,  244 => 45,  240 => 44,  236 => 43,  231 => 41,  222 => 35,  218 => 34,  214 => 33,  206 => 28,  201 => 25,  192 => 23,  188 => 22,  184 => 20,  171 => 19,  151 => 8,  138 => 7,  115 => 5,  92 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Edit {{ ticket.name }} - Eventify{% endblock %}
{% block page_heading %}Edit ticket{% endblock %}
{% block page_breadcrumb %}Edit ticket{% endblock %}

{% block page_styles %}
\t<style>
\t\t.event-create-page { background: #f5f5f5; min-height: 100vh; padding: 1.5rem 0 3rem; }
\t\t.event-create-page .back-link { color: #2E4DFD; text-decoration: none; font-size: 0.95rem; }
\t\t.event-create-page .sidebar { max-width: 300px; }
\t\t.event-create-page .summary-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.25rem; }
\t\t.event-create-page .section-card { background: #fff; border-radius: 12px; box-shadow: 0 1px 3px rgba(0,0,0,.08); padding: 1.5rem; max-width: 520px; }
\t\t.event-create-page .form-control.is-invalid { border-color: #dc3545; }
\t\t.event-create-page .save-btn { padding: 0.6rem 1.5rem; border-radius: 8px; font-weight: 600; border: none; }
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
\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id }) }}\" class=\"back-link\"><i class=\"fa-solid fa-chevron-left me-1\"></i> Back to tickets</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<aside class=\"col-lg-4 col-xl-3\">
\t\t\t\t\t\t<div class=\"summary-card mb-3\">
\t\t\t\t\t\t\t<div class=\"fw-bold\">{{ event.title }}</div>
\t\t\t\t\t\t\t<div class=\"small text-muted mt-1\">Editing: {{ ticket.name }}</div>
\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id }) }}\" class=\"small text-primary mt-2 d-inline-block\">View all tickets</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</aside>
\t\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t\t<div class=\"section-card\">
\t\t\t\t\t\t\t<h2 class=\"h5 fw-bold mb-4\">Edit ticket</h2>
\t\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t{{ form_label(form.name) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.name, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t{{ form_label(form.quantityAvailable) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.quantityAvailable, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.quantityAvailable) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t{{ form_label(form.price) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.price, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.price) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t{{ form_label(form.saleStart) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.saleStart, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.saleStart) }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t{{ form_label(form.saleEnd) }}
\t\t\t\t\t\t\t\t{{ form_widget(form.saleEnd, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t\t{{ form_errors(form.saleEnd) }}
       // NOTE: This might need refactoring
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_tickets', { id: event.id }) }}\" class=\"btn btn-outline-secondary\">Cancel</a>
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn vl-btn4 save-btn\">Save changes</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{{ form_end(form) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
{% endblock %}
", "ticket_edit.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/ticket_edit.html.twig");
    }
}

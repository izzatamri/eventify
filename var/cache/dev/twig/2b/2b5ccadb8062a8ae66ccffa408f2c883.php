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

/* admin/service_provider/form.html.twig */
class __TwigTemplate_3573555613a3a22d5f112a20f4503461 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service_provider/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/service_provider/form.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html", null, true);
        
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

        // line 6
        yield "\t<li class=\"breadcrumb-item\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\">Service providers</a></li>
\t<li class=\"breadcrumb-item active\">";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 7, $this->source); })()), "html", null, true);
        yield "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "\t";
        // line 12
        yield "\t<div class=\"card mb-4\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"fw-bold mb-0\"><i class=\"ri-shield-check-line me-2\"></i>Vérification SIRET</h5>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<div class=\"row g-3 align-items-end\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<label class=\"form-label small fw-semibold\">Numéro SIRET</label>
\t\t\t\t\t<input type=\"text\" id=\"siret-input\" class=\"form-control\" placeholder=\"12345678901234\" maxlength=\"14\"
\t\t\t\t\t\tvalue=\"";
        // line 21
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["provider"] ?? null), "siret", [], "any", true, true, false, 21) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 21, $this->source); })()), "siret", [], "any", false, false, false, 21)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 21, $this->source); })()), "siret", [], "any", false, false, false, 21), "html", null, true)) : (""));
        yield "\" style=\"border-radius: 8px; padding: 0.5rem 0.75rem;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"button\" id=\"siret-verify-btn\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1rem; font-weight: 600;\">
\t\t\t\t\t\t<i class=\"ri-search-line me-1\"></i>Vérifier
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div id=\"siret-result\" class=\"mt-2\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 36
        yield "\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.5rem;\">
\t\t\t<h3 class=\"fw-bold mb-4\" style=\"font-size: 20px;\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 38, $this->source); })()), "html", null, true);
        yield "</h3>
\t\t\t";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["class" => "row g-3", "novalidate" => "novalidate", "id" => "provider-form"]]);
        yield "
\t\t\t\t<div class=\"col-md-6\" style=\"display:none;\">
\t\t\t\t\t";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "siret", [], "any", false, false, false, 41), 'widget', ["attr" => ["id" => "form-siret"]]);
        yield "
\t\t\t\t\t";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "verified", [], "any", false, false, false, 42), 'widget', ["attr" => ["id" => "form-verified"]]);
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "legalName", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "legalName", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control bg-light", "id" => "form-legal-name", "readonly" => true, "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "legalName", [], "any", false, false, false, 47), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "name", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "name", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "name", [], "any", false, false, false, 52), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "email", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "phone", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "phone", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "phone", [], "any", false, false, false, 62), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "serviceType", [], "any", false, false, false, 65), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "serviceType", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-select", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "serviceType", [], "any", false, false, false, 67), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "hourlyRate", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "hourlyRate", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "hourlyRate", [], "any", false, false, false, 72), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "status", [], "any", false, false, false, 75), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
\t\t\t\t\t";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "status", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-select", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
\t\t\t\t\t";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "status", [], "any", false, false, false, 77), 'errors');
        yield "
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 pt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"submit-btn\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\"
\t\t\t\t\t\t";
        // line 81
        if (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 81, $this->source); })()), "verified", [], "any", false, false, false, 81) && (null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)))) {
            yield "disabled";
        }
        yield ">
\t\t\t\t\t\t<i class=\"ri-save-line me-1\"></i>Save
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem;\">Cancel</a>
\t\t\t\t</div>
\t\t\t";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        yield "
\t\t</div>
\t</div>

<script>
(function() {
\tvar verifyBtn = document.getElementById('siret-verify-btn');
\tvar siretInput = document.getElementById('siret-input');
\tvar resultDiv = document.getElementById('siret-result');
\tvar submitBtn = document.getElementById('submit-btn');
\tvar providerForm = document.getElementById('provider-form');

\tfunction getField(suffix) {
\t\tif (!providerForm) return null;
\t\treturn providerForm.querySelector('[name\$=\"[' + suffix + ']\"]');
\t}

\t";
        // line 103
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 103, $this->source); })()), "verified", [], "any", false, false, false, 103)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 104
            yield "\tresultDiv.innerHTML = '<div class=\"alert alert-success py-2 mb-0\"><i class=\"ri-checkbox-circle-line me-1\"></i> SIRET vérifié</div>';
\t";
        }
        // line 106
        yield "
\tverifyBtn.addEventListener('click', function() {
\t\tvar siret = siretInput.value.replace(/\\s/g, '');
\t\tif (siret.length !== 14) {
\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-warning py-2 mb-0\">Le SIRET doit comporter 14 chiffres.</div>';
\t\t\treturn;
\t\t}

\t\tverifyBtn.disabled = true;
\t\tverifyBtn.innerHTML = '<i class=\"ri-loader-4-line ri-spin me-1\"></i>Vérification...';
\t\tresultDiv.innerHTML = '';

\t\tfetch('";
        // line 118
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_verify_siret");
        yield "', {
\t\t\tmethod: 'POST',
\t\t\theaders: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
\t\t\tbody: JSON.stringify({ siret: siret }),
\t\t\tcredentials: 'same-origin'
\t\t})
\t\t.then(function(r) { return r.text().then(function(t) { return { status: r.status, text: t }; }); })
\t\t.then(function(res) {
\t\t\tverifyBtn.disabled = false;
\t\t\tverifyBtn.innerHTML = '<i class=\"ri-search-line me-1\"></i>Vérifier';

\t\t\tvar data;
\t\t\ttry { data = JSON.parse(res.text); } catch (e) { data = null; }

\t\t\tif (!data || typeof data.valid === 'undefined') {
\t\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-danger py-2 mb-0\"><i class=\"ri-close-circle-line me-1\"></i> Réponse serveur invalide (HTTP ' + res.status + ').</div>';
\t\t\t\treturn;
\t\t\t}

\t\t\tif (data.valid) {
\t\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-success py-2 mb-0\"><i class=\"ri-checkbox-circle-line me-1\"></i> Entreprise vérifiée : <strong>' + (data.legalName || '') + '</strong>'
\t\t\t\t\t+ (data.address ? '<br><small>' + data.address + '</small>' : '')
\t\t\t\t\t+ (data.nafCode ? ' <span class=\"badge bg-secondary ms-1\">NAF ' + data.nafCode + '</span>' : '')
\t\t\t\t\t+ '</div>';
\t\t\t\tvar fSiret = getField('siret');
\t\t\t\tvar fVerified = getField('verified');
\t\t\t\tvar fLegalName = getField('legalName');
\t\t\t\tif (fSiret) fSiret.value = siret;
\t\t\t\tif (fVerified) fVerified.value = '1';
\t\t\t\tif (fLegalName && data.legalName) fLegalName.value = data.legalName;
\t\t\t\tif (submitBtn) submitBtn.disabled = false;
\t\t\t} else {
\t\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-danger py-2 mb-0\"><i class=\"ri-close-circle-line me-1\"></i> ' + (data.error || 'Erreur technique.') + '</div>';
\t\t\t\tvar fv = getField('verified');
\t\t\t\tif (fv) fv.value = '0';
\t\t\t\tif (submitBtn) submitBtn.disabled = true;
\t\t\t}
\t\t})
\t\t.catch(function(err) {
\t\t\tverifyBtn.disabled = false;
\t\t\tverifyBtn.innerHTML = '<i class=\"ri-search-line me-1\"></i>Vérifier';
\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-danger py-2 mb-0\"><i class=\"ri-close-circle-line me-1\"></i> Erreur réseau : ' + err.message + '</div>';
\t\t});
\t});
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
        return "admin/service_provider/form.html.twig";
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
        return array (  361 => 118,  347 => 106,  343 => 104,  341 => 103,  321 => 86,  316 => 84,  308 => 81,  301 => 77,  297 => 76,  293 => 75,  287 => 72,  283 => 71,  279 => 70,  273 => 67,  269 => 66,  265 => 65,  259 => 62,  255 => 61,  251 => 60,  245 => 57,  241 => 56,  237 => 55,  231 => 52,  227 => 51,  223 => 50,  217 => 47,  213 => 46,  209 => 45,  203 => 42,  199 => 41,  194 => 39,  190 => 38,  186 => 36,  169 => 21,  158 => 12,  156 => 11,  143 => 10,  130 => 7,  125 => 6,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout_velzon.html.twig' %}

{% block title %}{{ title }}{% endblock %}
{% block page_heading %}{{ title }}{% endblock %}
{% block page_breadcrumb %}
\t<li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_service_provider_index') }}\">Service providers</a></li>
\t<li class=\"breadcrumb-item active\">{{ title }}</li>
{% endblock %}

{% block content %}
\t{# ====== SIRET Verification Card ====== #}
\t<div class=\"card mb-4\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"fw-bold mb-0\"><i class=\"ri-shield-check-line me-2\"></i>Vérification SIRET</h5>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<div class=\"row g-3 align-items-end\">
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<label class=\"form-label small fw-semibold\">Numéro SIRET</label>
\t\t\t\t\t<input type=\"text\" id=\"siret-input\" class=\"form-control\" placeholder=\"12345678901234\" maxlength=\"14\"
\t\t\t\t\t\tvalue=\"{{ provider.siret ?? '' }}\" style=\"border-radius: 8px; padding: 0.5rem 0.75rem;\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t<button type=\"button\" id=\"siret-verify-btn\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1rem; font-weight: 600;\">
\t\t\t\t\t\t<i class=\"ri-search-line me-1\"></i>Vérifier
\t\t\t\t\t</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div id=\"siret-result\" class=\"mt-2\"></div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t{# ====== Provider Form ====== #}
\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.5rem;\">
\t\t\t<h3 class=\"fw-bold mb-4\" style=\"font-size: 20px;\">{{ title }}</h3>
\t\t\t{{ form_start(form, { attr: { class: 'row g-3', novalidate: 'novalidate', id: 'provider-form' } }) }}
\t\t\t\t<div class=\"col-md-6\" style=\"display:none;\">
\t\t\t\t\t{{ form_widget(form.siret, { attr: { id: 'form-siret' } }) }}
\t\t\t\t\t{{ form_widget(form.verified, { attr: { id: 'form-verified' } }) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.legalName, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.legalName, { attr: { class: 'form-control bg-light', id: 'form-legal-name', readonly: true, style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.legalName) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.name, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.name, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.name) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.email, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.email, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.email) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.phone, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.phone, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.phone) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.serviceType, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.serviceType, { attr: { class: 'form-select', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.serviceType) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.hourlyRate, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.hourlyRate, { attr: { class: 'form-control', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.hourlyRate) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t{{ form_label(form.status, null, { label_attr: { class: 'form-label fw-semibold', style: 'font-size: 14px;' } }) }}
\t\t\t\t\t{{ form_widget(form.status, { attr: { class: 'form-select', style: 'border-radius: 8px; padding: 0.5rem 0.75rem;' } }) }}
\t\t\t\t\t{{ form_errors(form.status) }}
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 pt-3\">
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\" id=\"submit-btn\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\"
\t\t\t\t\t\t{% if not provider.verified and provider.id is null %}disabled{% endif %}>
\t\t\t\t\t\t<i class=\"ri-save-line me-1\"></i>Save
\t\t\t\t\t</button>
\t\t\t\t\t<a href=\"{{ path('app_admin_service_provider_index') }}\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem;\">Cancel</a>
\t\t\t\t</div>
\t\t\t{{ form_end(form) }}
\t\t</div>
\t</div>

<script>
(function() {
\tvar verifyBtn = document.getElementById('siret-verify-btn');
\tvar siretInput = document.getElementById('siret-input');
\tvar resultDiv = document.getElementById('siret-result');
\tvar submitBtn = document.getElementById('submit-btn');
\tvar providerForm = document.getElementById('provider-form');

\tfunction getField(suffix) {
\t\tif (!providerForm) return null;
\t\treturn providerForm.querySelector('[name\$=\"[' + suffix + ']\"]');
\t}

\t{% if provider.verified %}
\tresultDiv.innerHTML = '<div class=\"alert alert-success py-2 mb-0\"><i class=\"ri-checkbox-circle-line me-1\"></i> SIRET vérifié</div>';
\t{% endif %}

\tverifyBtn.addEventListener('click', function() {
\t\tvar siret = siretInput.value.replace(/\\s/g, '');
\t\tif (siret.length !== 14) {
\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-warning py-2 mb-0\">Le SIRET doit comporter 14 chiffres.</div>';
\t\t\treturn;
\t\t}

\t\tverifyBtn.disabled = true;
\t\tverifyBtn.innerHTML = '<i class=\"ri-loader-4-line ri-spin me-1\"></i>Vérification...';
\t\tresultDiv.innerHTML = '';

\t\tfetch('{{ path(\"app_admin_service_provider_verify_siret\") }}', {
\t\t\tmethod: 'POST',
\t\t\theaders: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
\t\t\tbody: JSON.stringify({ siret: siret }),
\t\t\tcredentials: 'same-origin'
\t\t})
\t\t.then(function(r) { return r.text().then(function(t) { return { status: r.status, text: t }; }); })
\t\t.then(function(res) {
\t\t\tverifyBtn.disabled = false;
\t\t\tverifyBtn.innerHTML = '<i class=\"ri-search-line me-1\"></i>Vérifier';

\t\t\tvar data;
\t\t\ttry { data = JSON.parse(res.text); } catch (e) { data = null; }

\t\t\tif (!data || typeof data.valid === 'undefined') {
\t\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-danger py-2 mb-0\"><i class=\"ri-close-circle-line me-1\"></i> Réponse serveur invalide (HTTP ' + res.status + ').</div>';
\t\t\t\treturn;
\t\t\t}

\t\t\tif (data.valid) {
\t\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-success py-2 mb-0\"><i class=\"ri-checkbox-circle-line me-1\"></i> Entreprise vérifiée : <strong>' + (data.legalName || '') + '</strong>'
\t\t\t\t\t+ (data.address ? '<br><small>' + data.address + '</small>' : '')
\t\t\t\t\t+ (data.nafCode ? ' <span class=\"badge bg-secondary ms-1\">NAF ' + data.nafCode + '</span>' : '')
\t\t\t\t\t+ '</div>';
\t\t\t\tvar fSiret = getField('siret');
\t\t\t\tvar fVerified = getField('verified');
\t\t\t\tvar fLegalName = getField('legalName');
\t\t\t\tif (fSiret) fSiret.value = siret;
\t\t\t\tif (fVerified) fVerified.value = '1';
\t\t\t\tif (fLegalName && data.legalName) fLegalName.value = data.legalName;
\t\t\t\tif (submitBtn) submitBtn.disabled = false;
\t\t\t} else {
\t\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-danger py-2 mb-0\"><i class=\"ri-close-circle-line me-1\"></i> ' + (data.error || 'Erreur technique.') + '</div>';
\t\t\t\tvar fv = getField('verified');
\t\t\t\tif (fv) fv.value = '0';
\t\t\t\tif (submitBtn) submitBtn.disabled = true;
\t\t\t}
\t\t})
\t\t.catch(function(err) {
\t\t\tverifyBtn.disabled = false;
\t\t\tverifyBtn.innerHTML = '<i class=\"ri-search-line me-1\"></i>Vérifier';
\t\t\tresultDiv.innerHTML = '<div class=\"alert alert-danger py-2 mb-0\"><i class=\"ri-close-circle-line me-1\"></i> Erreur réseau : ' + err.message + '</div>';
\t\t});
\t});
})();
</script>
{% endblock %}
", "admin/service_provider/form.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\admin\\service_provider\\form.html.twig");
    }
}

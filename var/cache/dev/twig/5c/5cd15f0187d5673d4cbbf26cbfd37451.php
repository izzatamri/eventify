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

/* error/event_not_found.html.twig */
class __TwigTemplate_f90f4bb7ee915fde3b3f6b4fd767608f extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/event_not_found.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "error/event_not_found.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Event Not Found - Eventify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Event Not Found</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">The event you're looking for doesn't exist</p>
            </div>
        </div>
    </div>
</div>


// Improved error handling
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6 col-md-8\">
            <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fa-solid fa-calendar-xmark\" style=\"font-size: 64px; color: #ffc107;\"></i>
                    </div>
                    <h2 class=\"fw-bold mb-3\" style=\"font-size: 24px; color: #1f2937;\">Event Not Found</h2>
                    <p class=\"text-muted mb-4\">
                        The event you're trying to access doesn't exist or may have been deleted. Please check the event ID or browse our available events.
                    </p>
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"btn btn-primary\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-search me-2\"></i>Browse All Events
                        </a>
                        <a href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px;\">
                            <i class=\"fa-solid fa-home me-2\"></i>Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
        return "error/event_not_found.html.twig";
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
        return array (  134 => 35,  128 => 32,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Event Not Found - Eventify{% endblock %}

{% block body %}
<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Event Not Found</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">The event you're looking for doesn't exist</p>
            </div>
        </div>
    </div>
</div>


// Improved error handling
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-6 col-md-8\">
            <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-4 text-center\">
                    <div class=\"mb-3\">
                        <i class=\"fa-solid fa-calendar-xmark\" style=\"font-size: 64px; color: #ffc107;\"></i>
                    </div>
                    <h2 class=\"fw-bold mb-3\" style=\"font-size: 24px; color: #1f2937;\">Event Not Found</h2>
                    <p class=\"text-muted mb-4\">
                        The event you're trying to access doesn't exist or may have been deleted. Please check the event ID or browse our available events.
                    </p>
                    <div class=\"d-flex flex-column gap-2\">
                        <a href=\"{{ path('app_events') }}\" class=\"btn btn-primary\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-search me-2\"></i>Browse All Events
                        </a>
                        <a href=\"{{ path('app_home') }}\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px;\">
                            <i class=\"fa-solid fa-home me-2\"></i>Back to Home
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "error/event_not_found.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/error/event_not_found.html.twig");
    }
}

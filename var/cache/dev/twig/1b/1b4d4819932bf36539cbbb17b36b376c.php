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

/* reclamation/new.html.twig */
class __TwigTemplate_f9d3dabbe3718a5e9c6482a6cda2ce2b extends Template
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
        // line 2
        return "layout_events.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/new.html.twig"));

        $this->parent = $this->load("layout_events.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Create Reclamation";
        
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

        yield "Reclamation";
        
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

        // line 7
        yield "    <span>Create</span>
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
        yield "<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            
            <div class=\"card mb-4 border-primary\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-book\"></i> 
                        Règlement des réclamations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8\">
                            <div class=\"alert alert-info mb-0\">
                                <i class=\"bi bi-info-circle\"></i>
                                Avant de soumettre votre réclamation, veuillez consulter le règlement complet.
                                <br>
                                <small>Scannez le QR code ou cliquez sur le lien ci-dessous.</small>
                            </div>
                            <div class=\"mt-3\">
                                <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reglement");
        yield "\" class=\"btn btn-outline-primary\" target=\"_blank\">
                                    <i class=\"bi bi-book\"></i> 
                                    Voir le règlement complet
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <div class=\"border rounded p-2 bg-light\">
                                <img src=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reglement_qrcode");
        yield "\" 
                                     alt=\"QR Code Règlement\" 
                                     class=\"img-fluid\"
                                     style=\"max-width: 150px;\">
                                <p class=\"mt-2 mb-0 small text-muted\">
                                    <i class=\"bi bi-qr-code\"></i>
                                    Scannez pour voir le règlement
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            ";
        // line 54
        yield Twig\Extension\CoreExtension::include($this->env, $context, "reclamation/_form.html.twig");
        yield "

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
        return "reclamation/new.html.twig";
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
        return array (  201 => 54,  184 => 40,  173 => 32,  150 => 11,  137 => 10,  125 => 7,  112 => 6,  89 => 5,  66 => 4,  43 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reclamation/new.html.twig #}
{% extends 'layout_events.html.twig' %}

{% block title %}Create Reclamation{% endblock %}
{% block page_heading %}Reclamation{% endblock %}
{% block page_breadcrumb %}
    <span>Create</span>
{% endblock %}

{% block content %}
<div class=\"container py-4\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            
            <div class=\"card mb-4 border-primary\">
                <div class=\"card-header bg-primary text-white\">
                    <h5 class=\"mb-0\">
                        <i class=\"bi bi-book\"></i> 
                        Règlement des réclamations
                    </h5>
                </div>
                <div class=\"card-body\">
                    <div class=\"row align-items-center\">
                        <div class=\"col-md-8\">
                            <div class=\"alert alert-info mb-0\">
                                <i class=\"bi bi-info-circle\"></i>
                                Avant de soumettre votre réclamation, veuillez consulter le règlement complet.
                                <br>
                                <small>Scannez le QR code ou cliquez sur le lien ci-dessous.</small>
                            </div>
                            <div class=\"mt-3\">
                                <a href=\"{{ path('app_reglement') }}\" class=\"btn btn-outline-primary\" target=\"_blank\">
                                    <i class=\"bi bi-book\"></i> 
                                    Voir le règlement complet
                                </a>
                            </div>
                        </div>
                        <div class=\"col-md-4 text-center\">
                            <div class=\"border rounded p-2 bg-light\">
                                <img src=\"{{ path('app_reglement_qrcode') }}\" 
                                     alt=\"QR Code Règlement\" 
                                     class=\"img-fluid\"
                                     style=\"max-width: 150px;\">
                                <p class=\"mt-2 mb-0 small text-muted\">
                                    <i class=\"bi bi-qr-code\"></i>
                                    Scannez pour voir le règlement
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{ include('reclamation/_form.html.twig') }}

        </div>
    </div>
</div>
{% endblock %}", "reclamation/new.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/reclamation/new.html.twig");
    }
}

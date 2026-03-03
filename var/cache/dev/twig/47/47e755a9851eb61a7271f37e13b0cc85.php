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

/* reclamation/reglement.html.twig */
class __TwigTemplate_06bcab4c966754ea32358868f934586b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/reglement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/reglement.html.twig"));

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

        yield "Règlement des réclamations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h3 class=\"mb-0\">
                        <i class=\"bi bi-book\"></i> 
                        Règlement des réclamations
                    </h3>
                    <div>
                        <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reglement_pdf");
        yield "\" class=\"btn btn-light me-2\">
                            <i class=\"bi bi-file-pdf\"></i> 
                            Télécharger PDF
                        </a>
                        <a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-outline-light\">
                            <i class=\"bi bi-arrow-left\"></i> 
                            Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <p class=\"text-muted\">
                            <i class=\"bi bi-calendar\"></i> 
                            Dernière mise à jour : ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "d/m/Y"), "html", null, true);
        yield "
                        </p>
                    </div>
                    
                    <div class=\"rules-list\">
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">1</span>
                                </div>
                                <div class=\"rule-text\">
                                    Toute réclamation doit contenir des informations exactes et complètes afin de permettre son traitement correct.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">2</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur doit obligatoirement fournir son nom et prénom lors de la soumission de la réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">3</span>
                                </div>
                                <div class=\"rule-text\">
                                    Une adresse email valide doit être fournie pour permettre la communication et l'envoi de la réponse.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">4</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'objet de la réclamation doit être clair et précis afin d'identifier rapidement le problème signalé.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">5</span>
                                </div>
                                <div class=\"rule-text\">
                                    La description de la réclamation doit expliquer le problème de manière détaillée, en mentionnant les circonstances et les faits.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">6</span>
                                </div>
                                <div class=\"rule-text\">
                                    La réclamation doit concerner un service ou un produit spécifique lié à l'organisation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">7</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les réclamations contenant des propos offensants, insultants ou inappropriés ne seront pas acceptées.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">8</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les informations fausses ou trompeuses peuvent entraîner le rejet immédiat de la réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">9</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les messages répétitifs ou les tentatives de spam peuvent conduire à la suppression de la demande.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">10</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur peut joindre des documents justificatifs pour appuyer sa réclamation (facture, capture d'écran, photo, etc.).
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">11</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les fichiers joints doivent respecter les formats acceptés par le système et ne pas dépasser la taille maximale autorisée.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">12</span>
                                </div>
                                <div class=\"rule-text\">
                                    Chaque réclamation sera examinée par l'administration avant de recevoir une réponse officielle.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">13</span>
                                </div>
                                <div class=\"rule-text\">
                                    Le délai de traitement d'une réclamation peut varier entre 24 et 72 heures ouvrables selon la complexité du problème.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">14</span>
                                </div>
                                <div class=\"rule-text\">
                                    La réclamation peut avoir différents statuts tels que en attente, en cours de traitement, résolue ou rejetée.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">15</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur sera informé de la réponse via l'adresse email fournie lors de la soumission.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">16</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les données personnelles fournies dans la réclamation seront traitées de manière confidentielle.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">17</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les informations collectées seront utilisées uniquement dans le but de traiter et résoudre la réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">18</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur s'engage à respecter ces règles lors de l'utilisation du système de réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">19</span>
                                </div>
                                <div class=\"rule-text\">
                                    Toute utilisation abusive du système peut entraîner le blocage ou la restriction de l'accès au service.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded bg-light\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-success rounded-circle p-2\">✓</span>
                                </div>
                                <div class=\"rule-text fw-bold\">
                                    En soumettant une réclamation, l'utilisateur accepte l'ensemble des règles et conditions mentionnées ci-dessus.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        <a href=\"";
        // line 258
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\" class=\"btn btn-primary btn-lg\">
                            <i class=\"bi bi-check-circle\"></i> 
                            J'accepte le règlement et je continue
                        </a>
                    </div>
                </div>
                <div class=\"card-footer text-muted\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <i class=\"bi bi-info-circle\"></i>
                            Ce règlement fait partie intégrante du processus de réclamation. Veuillez le lire attentivement.
                        </div>
                        <div class=\"col-md-4 text-end\">
                            <a href=\"";
        // line 271
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reglement_pdf");
        yield "\" class=\"text-decoration-none\">
                                <i class=\"bi bi-file-pdf\"></i> Version PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.rule-item {
    transition: transform 0.2s, box-shadow 0.2s;
    background-color: white;
}
.rule-item:hover {
    transform: translateX(5px);
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    background-color: #f8f9fa;
}
.rule-number .badge {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
}
.badge-success {
    background-color: #10b981;
}
.card-header {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
}
.btn-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    border: none;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
}
@media print {
    .btn, .card-footer, .badge {
        display: none;
    }
}
</style>
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
        return "reclamation/reglement.html.twig";
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
        return array (  378 => 271,  362 => 258,  132 => 31,  119 => 21,  112 => 17,  100 => 7,  87 => 6,  64 => 4,  41 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reclamation/reglement.html.twig #}
{% extends 'layout_events.html.twig' %}

{% block title %}Règlement des réclamations{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-10\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white d-flex justify-content-between align-items-center\">
                    <h3 class=\"mb-0\">
                        <i class=\"bi bi-book\"></i> 
                        Règlement des réclamations
                    </h3>
                    <div>
                        <a href=\"{{ path('app_reglement_pdf') }}\" class=\"btn btn-light me-2\">
                            <i class=\"bi bi-file-pdf\"></i> 
                            Télécharger PDF
                        </a>
                        <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-outline-light\">
                            <i class=\"bi bi-arrow-left\"></i> 
                            Retour
                        </a>
                    </div>
                </div>
                <div class=\"card-body\">
                    <div class=\"mb-4\">
                        <p class=\"text-muted\">
                            <i class=\"bi bi-calendar\"></i> 
                            Dernière mise à jour : {{ \"now\"|date('d/m/Y') }}
                        </p>
                    </div>
                    
                    <div class=\"rules-list\">
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">1</span>
                                </div>
                                <div class=\"rule-text\">
                                    Toute réclamation doit contenir des informations exactes et complètes afin de permettre son traitement correct.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">2</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur doit obligatoirement fournir son nom et prénom lors de la soumission de la réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">3</span>
                                </div>
                                <div class=\"rule-text\">
                                    Une adresse email valide doit être fournie pour permettre la communication et l'envoi de la réponse.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">4</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'objet de la réclamation doit être clair et précis afin d'identifier rapidement le problème signalé.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">5</span>
                                </div>
                                <div class=\"rule-text\">
                                    La description de la réclamation doit expliquer le problème de manière détaillée, en mentionnant les circonstances et les faits.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">6</span>
                                </div>
                                <div class=\"rule-text\">
                                    La réclamation doit concerner un service ou un produit spécifique lié à l'organisation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">7</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les réclamations contenant des propos offensants, insultants ou inappropriés ne seront pas acceptées.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">8</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les informations fausses ou trompeuses peuvent entraîner le rejet immédiat de la réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">9</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les messages répétitifs ou les tentatives de spam peuvent conduire à la suppression de la demande.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">10</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur peut joindre des documents justificatifs pour appuyer sa réclamation (facture, capture d'écran, photo, etc.).
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">11</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les fichiers joints doivent respecter les formats acceptés par le système et ne pas dépasser la taille maximale autorisée.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">12</span>
                                </div>
                                <div class=\"rule-text\">
                                    Chaque réclamation sera examinée par l'administration avant de recevoir une réponse officielle.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">13</span>
                                </div>
                                <div class=\"rule-text\">
                                    Le délai de traitement d'une réclamation peut varier entre 24 et 72 heures ouvrables selon la complexité du problème.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">14</span>
                                </div>
                                <div class=\"rule-text\">
                                    La réclamation peut avoir différents statuts tels que en attente, en cours de traitement, résolue ou rejetée.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">15</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur sera informé de la réponse via l'adresse email fournie lors de la soumission.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">16</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les données personnelles fournies dans la réclamation seront traitées de manière confidentielle.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">17</span>
                                </div>
                                <div class=\"rule-text\">
                                    Les informations collectées seront utilisées uniquement dans le but de traiter et résoudre la réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">18</span>
                                </div>
                                <div class=\"rule-text\">
                                    L'utilisateur s'engage à respecter ces règles lors de l'utilisation du système de réclamation.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-primary rounded-circle p-2\">19</span>
                                </div>
                                <div class=\"rule-text\">
                                    Toute utilisation abusive du système peut entraîner le blocage ou la restriction de l'accès au service.
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"rule-item mb-3 p-3 border rounded bg-light\">
                            <div class=\"d-flex\">
                                <div class=\"rule-number me-3\">
                                    <span class=\"badge bg-success rounded-circle p-2\">✓</span>
                                </div>
                                <div class=\"rule-text fw-bold\">
                                    En soumettant une réclamation, l'utilisateur accepte l'ensemble des règles et conditions mentionnées ci-dessus.
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"text-center mt-4\">
                        <a href=\"{{ path('app_reclamation_new') }}\" class=\"btn btn-primary btn-lg\">
                            <i class=\"bi bi-check-circle\"></i> 
                            J'accepte le règlement et je continue
                        </a>
                    </div>
                </div>
                <div class=\"card-footer text-muted\">
                    <div class=\"row\">
                        <div class=\"col-md-8\">
                            <i class=\"bi bi-info-circle\"></i>
                            Ce règlement fait partie intégrante du processus de réclamation. Veuillez le lire attentivement.
                        </div>
                        <div class=\"col-md-4 text-end\">
                            <a href=\"{{ path('app_reglement_pdf') }}\" class=\"text-decoration-none\">
                                <i class=\"bi bi-file-pdf\"></i> Version PDF
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.rule-item {
    transition: transform 0.2s, box-shadow 0.2s;
    background-color: white;
}
.rule-item:hover {
    transform: translateX(5px);
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    background-color: #f8f9fa;
}
.rule-number .badge {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 14px;
}
.badge-success {
    background-color: #10b981;
}
.card-header {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
}
.btn-primary {
    background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%);
    border: none;
}
.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(59, 130, 246, 0.4);
}
@media print {
    .btn, .card-footer, .badge {
        display: none;
    }
}
</style>
{% endblock %}", "reclamation/reglement.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\reclamation\\reglement.html.twig");
    }
}

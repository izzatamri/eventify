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

/* reponse/edit.html.twig */
class __TwigTemplate_bdd806964fc79c38ff94088a642f4ed4 extends Template
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
            'page_styles' => [$this, 'block_page_styles'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/edit.html.twig"));

        $this->parent = $this->load("base.html.twig", 2);
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

        yield "Modifier la réponse";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">

<style>
header, .preloader { display:none !important; }
body { background:#f5f7fb; }

.wrapper {
    display:flex;
    min-height:100vh;
}

.sidebar {
    width:260px;
    background: linear-gradient(180deg, #0f172a 0%, #1a2639 100%);
    color:white;
    padding:25px 15px;
}

.sidebar a {
    color: #cbd5e1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 15px;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.sidebar a:hover, .sidebar a.active {
    background: #3b82f6;
    color: white;
}

.content {
    flex:1;
    padding:30px;
}

.card {
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.card-header {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    padding: 20px 25px;
    border: none;
}

.form-control, .form-select {
    border-radius: 10px;
    padding: 10px 15px;
    border: 1px solid #e5e7eb;
}

.form-control:focus, .form-select:focus {
    border-color: #f59e0b;
    box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
}

.btn {
    padding: 10px 20px;
    border-radius: 10px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 78
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

        // line 79
        yield "<div class=\"wrapper\">
    <div class=\"sidebar\">
        <h4 style=\"color: white;\">🛠 Back Office</h4>
        <hr style=\"border-color: #334155;\">
        <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation");
        yield "\">
            <i class=\"bi bi-envelope\"></i> Réclamations
        </a>
        <a href=\"";
        // line 86
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"active\">
            <i class=\"bi bi-chat\"></i> Réponses
        </a>
    </div>

    <div class=\"content\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4 class=\"mb-0\">
                    <i class=\"bi bi-pencil\"></i>
                    Modifier la réponse #";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96), "html", null, true);
        yield "
                </h4>
            </div>
            <div class=\"card-body\">
                ";
        // line 100
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label fw-semibold\">Nom</label>
                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "nom_rep", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "nom_rep", [], "any", false, false, false, 106), 'errors');
        yield "</div>
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label fw-semibold\">Email</label>
                        ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "adressmail_rep", [], "any", false, false, false, 111), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                        <div class=\"text-danger small\">";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "adressmail_rep", [], "any", false, false, false, 112), 'errors');
        yield "</div>
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold\">Réponse</label>
                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "reponse_rep", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control", "rows" => 5]]);
        yield "
                    <div class=\"text-danger small\">";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "reponse_rep", [], "any", false, false, false, 119), 'errors');
        yield "</div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold\">Réclamation associée</label>
                    ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "reclamation", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-select"]]);
        yield "
                    <div class=\"text-danger small\">";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "reclamation", [], "any", false, false, false, 125), 'errors');
        yield "</div>
                </div>
                
                <div class=\"d-flex justify-content-between mt-4\">
                    <a href=\"";
        // line 129
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-warning\">
                        <i class=\"bi bi-save\"></i> Mettre à jour
                    </button>
                </div>
                
                ";
        // line 137
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), 'form_end');
        yield "
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
        return "reponse/edit.html.twig";
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
        return array (  293 => 137,  282 => 129,  275 => 125,  271 => 124,  263 => 119,  259 => 118,  250 => 112,  246 => 111,  238 => 106,  234 => 105,  226 => 100,  219 => 96,  206 => 86,  200 => 83,  194 => 79,  181 => 78,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reponse/edit.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Modifier la réponse{% endblock %}

{% block page_styles %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css\">

<style>
header, .preloader { display:none !important; }
body { background:#f5f7fb; }

.wrapper {
    display:flex;
    min-height:100vh;
}

.sidebar {
    width:260px;
    background: linear-gradient(180deg, #0f172a 0%, #1a2639 100%);
    color:white;
    padding:25px 15px;
}

.sidebar a {
    color: #cbd5e1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 15px;
    border-radius: 12px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.sidebar a:hover, .sidebar a.active {
    background: #3b82f6;
    color: white;
}

.content {
    flex:1;
    padding:30px;
}

.card {
    border: none;
    border-radius: 20px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}

.card-header {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    padding: 20px 25px;
    border: none;
}

.form-control, .form-select {
    border-radius: 10px;
    padding: 10px 15px;
    border: 1px solid #e5e7eb;
}

.form-control:focus, .form-select:focus {
    border-color: #f59e0b;
    box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
}

.btn {
    padding: 10px 20px;
    border-radius: 10px;
}
</style>
{% endblock %}

{% block body %}
<div class=\"wrapper\">
    <div class=\"sidebar\">
        <h4 style=\"color: white;\">🛠 Back Office</h4>
        <hr style=\"border-color: #334155;\">
        <a href=\"{{ path('app_back_reclamation') }}\">
            <i class=\"bi bi-envelope\"></i> Réclamations
        </a>
        <a href=\"{{ path('app_reponse_index') }}\" class=\"active\">
            <i class=\"bi bi-chat\"></i> Réponses
        </a>
    </div>

    <div class=\"content\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4 class=\"mb-0\">
                    <i class=\"bi bi-pencil\"></i>
                    Modifier la réponse #{{ reponse.id }}
                </h4>
            </div>
            <div class=\"card-body\">
                {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
                
                <div class=\"row\">
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label fw-semibold\">Nom</label>
                        {{ form_widget(form.nom_rep, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.nom_rep) }}</div>
                    </div>
                    
                    <div class=\"col-md-6 mb-3\">
                        <label class=\"form-label fw-semibold\">Email</label>
                        {{ form_widget(form.adressmail_rep, {'attr': {'class': 'form-control'}}) }}
                        <div class=\"text-danger small\">{{ form_errors(form.adressmail_rep) }}</div>
                    </div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold\">Réponse</label>
                    {{ form_widget(form.reponse_rep, {'attr': {'class': 'form-control', 'rows': 5}}) }}
                    <div class=\"text-danger small\">{{ form_errors(form.reponse_rep) }}</div>
                </div>
                
                <div class=\"mb-3\">
                    <label class=\"form-label fw-semibold\">Réclamation associée</label>
                    {{ form_widget(form.reclamation, {'attr': {'class': 'form-select'}}) }}
                    <div class=\"text-danger small\">{{ form_errors(form.reclamation) }}</div>
                </div>
                
                <div class=\"d-flex justify-content-between mt-4\">
                    <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Annuler
                    </a>
                    <button type=\"submit\" class=\"btn btn-warning\">
                        <i class=\"bi bi-save\"></i> Mettre à jour
                    </button>
                </div>
                
                {{ form_end(form) }}
            </div>
        </div>
    </div>
</div>
{% endblock %}", "reponse/edit.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/reponse/edit.html.twig");
    }
}

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

/* reponse/show.html.twig */
class __TwigTemplate_84120ef6cc5b20077d4daa379abb9860 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/show.html.twig"));

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

        yield "Détails de la réponse";
        
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
    overflow: hidden;
}

.card-header {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    color: white;
    padding: 20px 25px;
    border: none;
}

.card-header h4 {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.card-body {
    padding: 30px;
}

.info-row {
    display: flex;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e5e7eb;
}

.info-label {
    width: 150px;
    font-weight: 600;
    color: #4b5563;
}

.info-value {
    flex: 1;
    color: #1f2937;
}

.reponse-content {
    background: #f9fafb;
    padding: 20px;
    border-radius: 12px;
    margin-top: 20px;
}

.btn {
    padding: 10px 20px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 112
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

        // line 113
        yield "<div class=\"wrapper\">
    <div class=\"sidebar\">
        <h4 style=\"color: white;\">🛠 Back Office</h4>
        <hr style=\"border-color: #334155;\">
        <a href=\"";
        // line 117
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation");
        yield "\">
            <i class=\"bi bi-envelope\"></i> Réclamations
        </a>
        <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"active\">
            <i class=\"bi bi-chat\"></i> Réponses
        </a>
    </div>

    <div class=\"content\">
        <div class=\"card\">
            <div class=\"card-header\">
                <h4>
                    <i class=\"bi bi-chat-dots\"></i>
                    Détails de la réponse #";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 130, $this->source); })()), "id", [], "any", false, false, false, 130), "html", null, true);
        yield "
                </h4>
            </div>
            <div class=\"card-body\">
                <div class=\"info-row\">
                    <div class=\"info-label\">Auteur :</div>
                    <div class=\"info-value\">
                        <strong>";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 137, $this->source); })()), "nomRep", [], "any", false, false, false, 137), "html", null, true);
        yield "</strong>
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">Email :</div>
                    <div class=\"info-value\">
                        <a href=\"mailto:";
        // line 144
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 144, $this->source); })()), "adressmailRep", [], "any", false, false, false, 144), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 144, $this->source); })()), "adressmailRep", [], "any", false, false, false, 144), "html", null, true);
        yield "</a>
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">Date :</div>
                    <div class=\"info-value\">
                        ";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 151, $this->source); })()), "dateReponse", [], "any", false, false, false, 151), "d/m/Y H:i:s"), "html", null, true);
        yield "
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">Réclamation associée :</div>
                    <div class=\"info-value\">
                        #";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 158, $this->source); })()), "reclamation", [], "any", false, false, false, 158), "id", [], "any", false, false, false, 158), "html", null, true);
        yield " - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 158, $this->source); })()), "reclamation", [], "any", false, false, false, 158), "sujetrec", [], "any", false, false, false, 158), "html", null, true);
        yield "
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">État de la réclamation :</div>
                    <div class=\"info-value\">
                        ";
        // line 165
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 165, $this->source); })()), "reclamation", [], "any", false, false, false, 165), "etat", [], "any", false, false, false, 165) == "Pending")) {
            // line 166
            yield "                            <span class=\"badge bg-warning\">En attente</span>
                        ";
        } else {
            // line 168
            yield "                            <span class=\"badge bg-success\">Résolue</span>
                        ";
        }
        // line 170
        yield "                    </div>
                </div>
                
                <div class=\"reponse-content\">
                    <h6 class=\"mb-3\">Contenu de la réponse :</h6>
                    <p style=\"white-space: pre-line;\">";
        // line 175
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 175, $this->source); })()), "reponseRep", [], "any", false, false, false, 175), "html", null, true);
        yield "</p>
                </div>
                
                <div class=\"mt-4 d-flex justify-content-between\">
                    <a href=\"";
        // line 179
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                    </a>
                    <div>
                        <a href=\"";
        // line 183
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 183, $this->source); })()), "id", [], "any", false, false, false, 183)]), "html", null, true);
        yield "\" class=\"btn btn-warning me-2\">
                            <i class=\"bi bi-pencil\"></i> Modifier
                        </a>
                        <form method=\"post\" action=\"";
        // line 186
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 186, $this->source); })()), "id", [], "any", false, false, false, 186)]), "html", null, true);
        yield "\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 187, $this->source); })()), "id", [], "any", false, false, false, 187))), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </button>
                        </form>
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
        return "reponse/show.html.twig";
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
        return array (  348 => 187,  344 => 186,  338 => 183,  331 => 179,  324 => 175,  317 => 170,  313 => 168,  309 => 166,  307 => 165,  295 => 158,  285 => 151,  273 => 144,  263 => 137,  253 => 130,  240 => 120,  234 => 117,  228 => 113,  215 => 112,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reponse/show.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Détails de la réponse{% endblock %}

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
    overflow: hidden;
}

.card-header {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    color: white;
    padding: 20px 25px;
    border: none;
}

.card-header h4 {
    margin: 0;
    display: flex;
    align-items: center;
    gap: 10px;
}

.card-body {
    padding: 30px;
}

.info-row {
    display: flex;
    margin-bottom: 20px;
    padding-bottom: 20px;
    border-bottom: 1px solid #e5e7eb;
}

.info-label {
    width: 150px;
    font-weight: 600;
    color: #4b5563;
}

.info-value {
    flex: 1;
    color: #1f2937;
}

.reponse-content {
    background: #f9fafb;
    padding: 20px;
    border-radius: 12px;
    margin-top: 20px;
}

.btn {
    padding: 10px 20px;
    border-radius: 10px;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
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
                <h4>
                    <i class=\"bi bi-chat-dots\"></i>
                    Détails de la réponse #{{ reponse.id }}
                </h4>
            </div>
            <div class=\"card-body\">
                <div class=\"info-row\">
                    <div class=\"info-label\">Auteur :</div>
                    <div class=\"info-value\">
                        <strong>{{ reponse.nomRep }}</strong>
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">Email :</div>
                    <div class=\"info-value\">
                        <a href=\"mailto:{{ reponse.adressmailRep }}\">{{ reponse.adressmailRep }}</a>
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">Date :</div>
                    <div class=\"info-value\">
                        {{ reponse.dateReponse|date('d/m/Y H:i:s') }}
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">Réclamation associée :</div>
                    <div class=\"info-value\">
                        #{{ reponse.reclamation.id }} - {{ reponse.reclamation.sujetrec }}
                    </div>
                </div>
                
                <div class=\"info-row\">
                    <div class=\"info-label\">État de la réclamation :</div>
                    <div class=\"info-value\">
                        {% if reponse.reclamation.etat == 'Pending' %}
                            <span class=\"badge bg-warning\">En attente</span>
                        {% else %}
                            <span class=\"badge bg-success\">Résolue</span>
                        {% endif %}
                    </div>
                </div>
                
                <div class=\"reponse-content\">
                    <h6 class=\"mb-3\">Contenu de la réponse :</h6>
                    <p style=\"white-space: pre-line;\">{{ reponse.reponseRep }}</p>
                </div>
                
                <div class=\"mt-4 d-flex justify-content-between\">
                    <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-secondary\">
                        <i class=\"bi bi-arrow-left\"></i> Retour à la liste
                    </a>
                    <div>
                        <a href=\"{{ path('app_reponse_edit', {id: reponse.id}) }}\" class=\"btn btn-warning me-2\">
                            <i class=\"bi bi-pencil\"></i> Modifier
                        </a>
                        <form method=\"post\" action=\"{{ path('app_reponse_delete', {id: reponse.id}) }}\" style=\"display: inline;\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réponse ?');\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ reponse.id) }}\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                <i class=\"bi bi-trash\"></i> Supprimer
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}", "reponse/show.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\reponse\\show.html.twig");
    }
}

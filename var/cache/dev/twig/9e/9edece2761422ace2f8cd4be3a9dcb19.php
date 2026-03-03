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

/* reponse/new.html.twig */
class __TwigTemplate_9d8aa4415e9b39463121dfd8ccd97a70 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reponse/new.html.twig"));

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

        yield "Ajouter une réponse";
        
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

.sidebar h4 {
    color: white;
    margin-bottom: 20px;
}

.sidebar a {
    color: #cbd5e1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 15px;
    border-radius: 12px;
    text-decoration: none;
    margin-bottom: 5px;
    transition: all 0.3s;
}

.sidebar a:hover, .sidebar a.active {
    background: #3b82f6;
    color: white;
}

.content {
    flex: 1;
    padding: 30px;
}

.card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    max-width: 800px;
    margin: 0 auto;
}

.form-label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
}

.form-control, .form-select {
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    padding: 12px 15px;
    background: #f9fafb;
    transition: all 0.3s;
}

.form-control:focus, .form-select:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    background: white;
}

.btn {
    padding: 12px 25px;
    border-radius: 12px;
    font-weight: 500;
    transition: all 0.3s;
}

.btn-primary {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    border: none;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(59, 130, 246, 0.4);
}

.btn-secondary {
    background: #6b7280;
    border: none;
}

.btn-secondary:hover {
    background: #4b5563;
    transform: translateY(-2px);
}

.info-reclamation {
    background: #e0f2fe;
    border-left: 4px solid #0ea5e9;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 25px;
}

.alert {
    border-radius: 12px;
    margin-bottom: 20px;
}
</style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
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

        // line 125
        yield "<div class=\"wrapper\">
    <!-- SIDEBAR -->
    <div class=\"sidebar\">
        <h4>🛠 Back Office</h4>
        <hr style=\"border-color: #334155;\">
        <a href=\"";
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_back_reclamation");
        yield "\">
            <i class=\"bi bi-envelope\"></i> Réclamations
        </a>
        <a href=\"";
        // line 133
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"active\">
            <i class=\"bi bi-chat\"></i> Réponses
        </a>
    </div>

    <!-- CONTENU PRINCIPAL -->
    <div class=\"content\">
        <div class=\"card\">
            <h2 class=\"mb-4\">
                <i class=\"bi bi-chat-dots text-primary\"></i>
                Ajouter une réponse
            </h2>

            ";
        // line 146
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "reclamation", [], "any", true, true, false, 146) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 146, $this->source); })()), "reclamation", [], "any", false, false, false, 146))) {
            // line 147
            yield "                <div class=\"info-reclamation\">
                    <h5 class=\"mb-2\">
                        <i class=\"bi bi-envelope\"></i>
                        Répondre à la réclamation #";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 150, $this->source); })()), "reclamation", [], "any", false, false, false, 150), "id", [], "any", false, false, false, 150), "html", null, true);
            yield "
                    </h5>
                    <p class=\"mb-1\">
                        <strong>De :</strong> ";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 153, $this->source); })()), "reclamation", [], "any", false, false, false, 153), "nomrec", [], "any", false, false, false, 153), "html", null, true);
            yield " 
                        (";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 154, $this->source); })()), "reclamation", [], "any", false, false, false, 154), "adressmail", [], "any", false, false, false, 154), "html", null, true);
            yield ")
                    </p>
                    <p class=\"mb-1\"><strong>Sujet :</strong> ";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 156, $this->source); })()), "reclamation", [], "any", false, false, false, 156), "sujetrec", [], "any", false, false, false, 156), "html", null, true);
            yield "</p>
                    <p class=\"mb-0\"><strong>Description :</strong> ";
            // line 157
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 157, $this->source); })()), "reclamation", [], "any", false, false, false, 157), "descriptionrec", [], "any", false, false, false, 157), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 160
        yield "
            ";
        // line 161
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 161, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

            <div class=\"mb-3\">
                <label class=\"form-label\">
                    <i class=\"bi bi-person\"></i> ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "nom_rep", [], "any", false, false, false, 165), 'label');
        yield "
                </label>
                ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 167, $this->source); })()), "nom_rep", [], "any", false, false, false, 167), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "akram"]]);
        // line 172
        yield "
                <div class=\"text-danger small\">";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 173, $this->source); })()), "nom_rep", [], "any", false, false, false, 173), 'errors');
        yield "</div>
            </div>

            <div class=\"mb-3\">
                <label class=\"form-label\">
                    <i class=\"bi bi-envelope\"></i> ";
        // line 178
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "adressmail_rep", [], "any", false, false, false, 178), 'label');
        yield "
                </label>
                ";
        // line 180
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "adressmail_rep", [], "any", false, false, false, 180), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "akramlabidi45@gmail.com"]]);
        // line 185
        yield "
                <div class=\"text-danger small\">";
        // line 186
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 186, $this->source); })()), "adressmail_rep", [], "any", false, false, false, 186), 'errors');
        yield "</div>
            </div>

            <div class=\"mb-3\">
                <label class=\"form-label\">
                    <i class=\"bi bi-chat-text\"></i> ";
        // line 191
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 191, $this->source); })()), "reponse_rep", [], "any", false, false, false, 191), 'label');
        yield "
                </label>
                ";
        // line 193
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "reponse_rep", [], "any", false, false, false, 193), 'widget', ["attr" => ["class" => "form-control", "rows" => 5, "placeholder" => "Reclamation Traiter"]]);
        // line 199
        yield "
                <div class=\"text-danger small\">";
        // line 200
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 200, $this->source); })()), "reponse_rep", [], "any", false, false, false, 200), 'errors');
        yield "</div>
            </div>

            <div class=\"mb-3\" ";
        // line 203
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["reponse"] ?? null), "reclamation", [], "any", true, true, false, 203) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 203, $this->source); })()), "reclamation", [], "any", false, false, false, 203))) {
            yield "style=\"display: none;\"";
        }
        yield ">
                <label class=\"form-label\">
                    <i class=\"bi bi-envelope-open\"></i> ";
        // line 205
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), "reclamation", [], "any", false, false, false, 205), 'label');
        yield "
                </label>
                ";
        // line 207
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "reclamation", [], "any", false, false, false, 207), 'widget', ["attr" => ["class" => "form-select"]]);
        // line 211
        yield "
                <div class=\"text-danger small\">";
        // line 212
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 212, $this->source); })()), "reclamation", [], "any", false, false, false, 212), 'errors');
        yield "</div>
            </div>

            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"";
        // line 216
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"bi bi-send\"></i> Envoyer la réponse
                </button>
            </div>

            ";
        // line 224
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 224, $this->source); })()), 'form_end');
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
        return "reponse/new.html.twig";
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
        return array (  398 => 224,  387 => 216,  380 => 212,  377 => 211,  375 => 207,  370 => 205,  363 => 203,  357 => 200,  354 => 199,  352 => 193,  347 => 191,  339 => 186,  336 => 185,  334 => 180,  329 => 178,  321 => 173,  318 => 172,  316 => 167,  311 => 165,  304 => 161,  301 => 160,  295 => 157,  291 => 156,  286 => 154,  282 => 153,  276 => 150,  271 => 147,  269 => 146,  253 => 133,  247 => 130,  240 => 125,  227 => 124,  101 => 7,  88 => 6,  65 => 4,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/reponse/new.html.twig #}
{% extends 'base.html.twig' %}

{% block title %}Ajouter une réponse{% endblock %}

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

.sidebar h4 {
    color: white;
    margin-bottom: 20px;
}

.sidebar a {
    color: #cbd5e1;
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 15px;
    border-radius: 12px;
    text-decoration: none;
    margin-bottom: 5px;
    transition: all 0.3s;
}

.sidebar a:hover, .sidebar a.active {
    background: #3b82f6;
    color: white;
}

.content {
    flex: 1;
    padding: 30px;
}

.card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    max-width: 800px;
    margin: 0 auto;
}

.form-label {
    font-weight: 600;
    color: #374151;
    margin-bottom: 8px;
}

.form-control, .form-select {
    border-radius: 12px;
    border: 1px solid #e5e7eb;
    padding: 12px 15px;
    background: #f9fafb;
    transition: all 0.3s;
}

.form-control:focus, .form-select:focus {
    border-color: #3b82f6;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
    background: white;
}

.btn {
    padding: 12px 25px;
    border-radius: 12px;
    font-weight: 500;
    transition: all 0.3s;
}

.btn-primary {
    background: linear-gradient(135deg, #3b82f6, #2563eb);
    border: none;
}

.btn-primary:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 15px rgba(59, 130, 246, 0.4);
}

.btn-secondary {
    background: #6b7280;
    border: none;
}

.btn-secondary:hover {
    background: #4b5563;
    transform: translateY(-2px);
}

.info-reclamation {
    background: #e0f2fe;
    border-left: 4px solid #0ea5e9;
    padding: 20px;
    border-radius: 12px;
    margin-bottom: 25px;
}

.alert {
    border-radius: 12px;
    margin-bottom: 20px;
}
</style>
{% endblock %}

{% block body %}
<div class=\"wrapper\">
    <!-- SIDEBAR -->
    <div class=\"sidebar\">
        <h4>🛠 Back Office</h4>
        <hr style=\"border-color: #334155;\">
        <a href=\"{{ path('app_back_reclamation') }}\">
            <i class=\"bi bi-envelope\"></i> Réclamations
        </a>
        <a href=\"{{ path('app_reponse_index') }}\" class=\"active\">
            <i class=\"bi bi-chat\"></i> Réponses
        </a>
    </div>

    <!-- CONTENU PRINCIPAL -->
    <div class=\"content\">
        <div class=\"card\">
            <h2 class=\"mb-4\">
                <i class=\"bi bi-chat-dots text-primary\"></i>
                Ajouter une réponse
            </h2>

            {% if reponse.reclamation is defined and reponse.reclamation %}
                <div class=\"info-reclamation\">
                    <h5 class=\"mb-2\">
                        <i class=\"bi bi-envelope\"></i>
                        Répondre à la réclamation #{{ reponse.reclamation.id }}
                    </h5>
                    <p class=\"mb-1\">
                        <strong>De :</strong> {{ reponse.reclamation.nomrec }} 
                        ({{ reponse.reclamation.adressmail }})
                    </p>
                    <p class=\"mb-1\"><strong>Sujet :</strong> {{ reponse.reclamation.sujetrec }}</p>
                    <p class=\"mb-0\"><strong>Description :</strong> {{ reponse.reclamation.descriptionrec }}</p>
                </div>
            {% endif %}

            {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

            <div class=\"mb-3\">
                <label class=\"form-label\">
                    <i class=\"bi bi-person\"></i> {{ form_label(form.nom_rep) }}
                </label>
                {{ form_widget(form.nom_rep, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'akram'
                    }
                }) }}
                <div class=\"text-danger small\">{{ form_errors(form.nom_rep) }}</div>
            </div>

            <div class=\"mb-3\">
                <label class=\"form-label\">
                    <i class=\"bi bi-envelope\"></i> {{ form_label(form.adressmail_rep) }}
                </label>
                {{ form_widget(form.adressmail_rep, {
                    'attr': {
                        'class': 'form-control',
                        'placeholder': 'akramlabidi45@gmail.com'
                    }
                }) }}
                <div class=\"text-danger small\">{{ form_errors(form.adressmail_rep) }}</div>
            </div>

            <div class=\"mb-3\">
                <label class=\"form-label\">
                    <i class=\"bi bi-chat-text\"></i> {{ form_label(form.reponse_rep) }}
                </label>
                {{ form_widget(form.reponse_rep, {
                    'attr': {
                        'class': 'form-control',
                        'rows': 5,
                        'placeholder': 'Reclamation Traiter'
                    }
                }) }}
                <div class=\"text-danger small\">{{ form_errors(form.reponse_rep) }}</div>
            </div>

            <div class=\"mb-3\" {% if reponse.reclamation is defined and reponse.reclamation %}style=\"display: none;\"{% endif %}>
                <label class=\"form-label\">
                    <i class=\"bi bi-envelope-open\"></i> {{ form_label(form.reclamation) }}
                </label>
                {{ form_widget(form.reclamation, {
                    'attr': {
                        'class': 'form-select'
                    }
                }) }}
                <div class=\"text-danger small\">{{ form_errors(form.reclamation) }}</div>
            </div>

            <div class=\"d-flex justify-content-between mt-4\">
                <a href=\"{{ path('app_reponse_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"bi bi-arrow-left\"></i> Annuler
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"bi bi-send\"></i> Envoyer la réponse
                </button>
            </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>
{% endblock %}", "reponse/new.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\reponse\\new.html.twig");
    }
}

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

/* service_request/show.html.twig */
class __TwigTemplate_c231837165552ec4088a0e94b4322745 extends Template
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
        return "layout_events.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_request/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_request/show.html.twig"));

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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 4, $this->source); })()), "title", [], "any", false, false, false, 4), "html", null, true);
        
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

        yield "Détail de la demande";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "<style>
\t.ai-score-pill { display:inline-flex; align-items:center; gap:4px; padding:4px 14px; border-radius:20px; font-weight:700; font-size:13px; }
\t.ai-score-high { background:rgba(34,197,94,0.15); color:#16a34a; }
\t.ai-score-mid { background:rgba(245,158,11,0.15); color:#d97706; }
\t.ai-score-low { background:rgba(239,68,68,0.15); color:#dc2626; }
\t.ai-pending { background:rgba(148,163,184,0.15); color:#64748b; font-style:italic; }
\t.bg-purple { background-color: #6c63ff !important; color: #fff; }

\t.ai-drawer { position:fixed; top:0; right:-480px; width:480px; max-width:90vw; height:100vh; background:#fff; z-index:1060; transition:right 0.35s cubic-bezier(0.4,0,0.2,1); box-shadow:-8px 0 30px rgba(0,0,0,0.15); overflow-y:auto; }
\t.ai-drawer.open { right:0; }
\t.ai-overlay { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.4); z-index:1055; }
\t.ai-overlay.open { display:block; }
\t.ai-drawer-header { background:linear-gradient(135deg,#6c63ff,#8b5cf6); color:#fff; padding:20px 24px; position:sticky; top:0; z-index:1; }
\t.ai-drawer-body { padding:24px; line-height:1.8; white-space:pre-wrap; font-size:0.93rem; color:#334155; }
\t.ai-drawer-close { background:none; border:none; color:#fff; font-size:20px; cursor:pointer; opacity:0.8; }
\t.ai-drawer-close:hover { opacity:1; }

\t.status-flow { display:flex; align-items:center; gap:8px; }
\t.flow-step { padding:4px 14px; border-radius:20px; font-size:12px; font-weight:600; opacity:0.3; }
\t.flow-step.active { opacity:1; }

\t.provider-submit-card { border:2px dashed #6c63ff33; border-radius:12px; transition:all 0.2s; }
\t.provider-submit-card:hover { border-color:#6c63ff; background:#6c63ff08; }
</style>

<div class=\"container py-4\">
\t";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "flashes", ["success"], "method", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            yield "\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "flashes", ["error"], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 38
            yield "\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 41
            yield "\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        yield "
\t";
        // line 45
        yield "\t<div class=\"mb-3\">
\t\t<a href=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_index", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
        yield "\" class=\"text-primary text-decoration-none small\">
\t\t\t<i class=\"fa-solid fa-chevron-left me-1\"></i> Retour aux demandes
\t\t</a>
\t</div>

\t";
        // line 52
        yield "\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between align-items-start flex-wrap gap-3 mb-3\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"h5 fw-bold mb-2\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 56, $this->source); })()), "title", [], "any", false, false, false, 56), "html", null, true);
        yield "</h3>
\t\t\t\t\t<div class=\"status-flow\">
\t\t\t\t\t\t<span class=\"flow-step bg-secondary text-white ";
        // line 58
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58) == "draft")) ? ("active") : (""));
        yield "\">Brouillon</span>
\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right text-muted\" style=\"font-size:10px;\"></i>
\t\t\t\t\t\t<span class=\"flow-step bg-success text-white ";
        // line 60
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60) == "open")) ? ("active") : (""));
        yield "\">Ouvert</span>
\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right text-muted\" style=\"font-size:10px;\"></i>
\t\t\t\t\t\t<span class=\"flow-step bg-warning text-dark ";
        // line 62
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62) == "closed")) ? ("active") : (""));
        yield "\">Fermé</span>
\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right text-muted\" style=\"font-size:10px;\"></i>
\t\t\t\t\t\t<span class=\"flow-step bg-info text-white ";
        // line 64
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 64, $this->source); })()), "status", [], "any", false, false, false, 64) == "awarded")) ? ("active") : (""));
        yield "\">Attribué</span>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t";
        // line 69
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 69, $this->source); })()), "status", [], "any", false, false, false, 69) == "draft")) {
            // line 70
            yield "\t\t\t\t\t\t<form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_publish", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("publish_request_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71))), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-paper-plane me-1\"></i>Publier (open)</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 74
(isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 74, $this->source); })()), "status", [], "any", false, false, false, 74) == "awarded")) {
            // line 75
            yield "\t\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_create_booking_from_award", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("create_booking_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 77, $this->source); })()), "id", [], "any", false, false, false, 77))), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-plus me-1\"></i>Créer booking</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<a href=\"";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_index", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-clipboard-check me-1\"></i>Voir les bookings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 84
(isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 84, $this->source); })()), "status", [], "any", false, false, false, 84) == "open")) {
            // line 85
            yield "\t\t\t\t\t\t<form method=\"post\" action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_close", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("close_request_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 86, $this->source); })()), "id", [], "any", false, false, false, 86))), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\"><i class=\"fa-solid fa-lock me-1\"></i>Clôturer</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t";
        }
        // line 90
        yield "\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row g-3\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Catégorie</small>
\t\t\t\t\t\t<span class=\"badge bg-secondary\">";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 97, $this->source); })()), "serviceType", [], "any", false, false, false, 97), "html", null, true);
        yield "</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Budget</small>
\t\t\t\t\t\t<strong>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 103, $this->source); })()), "budgetMin", [], "any", false, false, false, 103), 0), "html", null, true);
        yield " € — ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 103, $this->source); })()), "budgetMax", [], "any", false, false, false, 103), 0), "html", null, true);
        yield " €</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Deadline</small>
\t\t\t\t\t\t<strong>";
        // line 109
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 109, $this->source); })()), "deadline", [], "any", false, false, false, 109), "d/m/Y H:i"), "html", null, true);
        yield "</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Description</small>
\t\t\t\t\t\t<p class=\"mb-0\">";
        // line 115
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 115, $this->source); })()), "description", [], "any", false, false, false, 115), "html", null, true));
        yield "</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t";
        // line 123
        yield "\t";
        if ((($tmp = (isset($context["aiRanking"]) || array_key_exists("aiRanking", $context) ? $context["aiRanking"] : (function () { throw new RuntimeError('Variable "aiRanking" does not exist.', 123, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "\t<div class=\"card border-0 shadow-sm mb-4\" style=\"border-left:4px solid #6c63ff !important;\">
\t\t<div class=\"card-body py-3 d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<i class=\"fa-solid fa-robot text-primary me-2\"></i>
\t\t\t\t<strong>Analyse IA disponible</strong>
\t\t\t\t<span class=\"text-muted ms-2\">— Classement et recommandation des propositions</span>
\t\t\t</div>
\t\t\t<button class=\"btn btn-sm text-white\" style=\"background:linear-gradient(135deg,#6c63ff,#8b5cf6);\" onclick=\"openAiDrawer()\">
\t\t\t\t<i class=\"fa-solid fa-brain me-1\"></i>Voir l'analyse IA
\t\t\t</button>
\t\t</div>
\t</div>
\t";
        }
        // line 137
        yield "
\t";
        // line 139
        yield "\t";
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 139, $this->source); })()), "status", [], "any", false, false, false, 139) == "open") && (Twig\Extension\CoreExtension::length($this->env->getCharset(), ((array_key_exists("providers", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 139, $this->source); })()), [])) : ([]))) > 0))) {
            // line 140
            yield "\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"h6 fw-bold mb-0\"><i class=\"fa-solid fa-plus-circle me-2 text-primary\"></i>Soumettre une proposition</h5>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"text-muted small mb-3\">Choisissez un prestataire actif pour soumettre une proposition. L'IA analysera automatiquement la proposition.</p>
\t\t\t<div class=\"row g-2\">
\t\t\t\t";
            // line 147
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["providers"]) || array_key_exists("providers", $context) ? $context["providers"] : (function () { throw new RuntimeError('Variable "providers" does not exist.', 147, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 148
                yield "\t\t\t\t<div class=\"col-md-4 col-lg-3\">
\t\t\t\t\t<a href=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_proposal_create", ["requestId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 149, $this->source); })()), "id", [], "any", false, false, false, 149), "providerId" => CoreExtension::getAttribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                yield "\" class=\"d-block p-3 text-center text-decoration-none provider-submit-card\">
\t\t\t\t\t\t<div class=\"fw-bold text-dark\">";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 150), "html", null, true);
                yield "</div>
\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"font-size:9px;\">";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "serviceType", [], "any", false, false, false, 151), "html", null, true);
                yield "</span>
\t\t\t\t\t\t";
                // line 152
                $context["badgeColors"] = ["none" => "bg-secondary", "rising" => "bg-success", "certified" => "bg-info", "top_performer" => "bg-warning text-dark", "preferred_partner" => "bg-purple"];
                // line 153
                yield "\t\t\t\t\t\t<span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["badgeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "badge", [], "any", false, false, false, 153), [], "array", true, true, false, 153) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 153, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "badge", [], "any", false, false, false, 153), [], "array", false, false, false, 153)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 153, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, $context["p"], "badge", [], "any", false, false, false, 153), [], "array", false, false, false, 153), "html", null, true)) : ("bg-secondary"));
                yield "\" style=\"font-size:9px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["p"], "badge", [], "any", false, false, false, 153), "html", null, true);
                yield "</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['p'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 157
            yield "\t\t\t</div>
\t\t</div>
\t</div>
\t";
        }
        // line 161
        yield "
\t";
        // line 163
        yield "\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"h6 fw-bold mb-0\">
\t\t\t\t<i class=\"fa-solid fa-list-check me-2\"></i>Propositions (";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 166, $this->source); })())), "html", null, true);
        yield ")
\t\t\t</h5>
\t\t</div>
\t\t";
        // line 169
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 169, $this->source); })())) > 0)) {
            // line 170
            yield "\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Prestataire</th>
\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t<th>Durée</th>
\t\t\t\t\t\t<th>Équipe</th>
\t\t\t\t\t\t<th class=\"text-center\">Score IA</th>
\t\t\t\t\t\t<th>Analyse</th>
\t\t\t\t\t\t";
            // line 180
            if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 180, $this->source); })()), "status", [], "any", false, false, false, 180), ["open", "closed"])) {
                yield "<th>Action</th>";
            }
            // line 181
            yield "\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t";
            // line 184
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 184, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
                // line 185
                yield "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"fw-semibold\">";
                // line 187
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 187), "name", [], "any", false, false, false, 187), "html", null, true);
                yield "</span><br>
\t\t\t\t\t\t\t";
                // line 188
                $context["badgeColors"] = ["none" => "bg-secondary", "rising" => "bg-success", "certified" => "bg-info", "top_performer" => "bg-warning text-dark", "preferred_partner" => "bg-purple"];
                // line 189
                yield "\t\t\t\t\t\t\t<span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["badgeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 189), "badge", [], "any", false, false, false, 189), [], "array", true, true, false, 189) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 189, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 189), "badge", [], "any", false, false, false, 189), [], "array", false, false, false, 189)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 189, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 189), "badge", [], "any", false, false, false, 189), [], "array", false, false, false, 189), "html", null, true)) : ("bg-secondary"));
                yield "\" style=\"font-size:10px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 189), "badge", [], "any", false, false, false, 189), "html", null, true);
                yield "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"fw-semibold\">";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "price", [], "any", false, false, false, 191), 2), "html", null, true);
                yield " €</td>
\t\t\t\t\t\t<td>";
                // line 192
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "estimatedDuration", [], "any", false, false, false, 192), "html", null, true);
                yield "</td>
\t\t\t\t\t\t<td>";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "proposedTeamSize", [], "any", false, false, false, 193), "html", null, true);
                yield " pers.</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t";
                // line 195
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchScore", [], "any", false, false, false, 195))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 196
                    yield "\t\t\t\t\t\t\t\t";
                    $context["scoreVal"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchScore", [], "any", false, false, false, 196), 0);
                    // line 197
                    yield "\t\t\t\t\t\t\t\t<span class=\"ai-score-pill ";
                    if (((isset($context["scoreVal"]) || array_key_exists("scoreVal", $context) ? $context["scoreVal"] : (function () { throw new RuntimeError('Variable "scoreVal" does not exist.', 197, $this->source); })()) >= 70)) {
                        yield "ai-score-high";
                    } elseif (((isset($context["scoreVal"]) || array_key_exists("scoreVal", $context) ? $context["scoreVal"] : (function () { throw new RuntimeError('Variable "scoreVal" does not exist.', 197, $this->source); })()) >= 40)) {
                        yield "ai-score-mid";
                    } else {
                        yield "ai-score-low";
                    }
                    yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-robot\"></i> ";
                    // line 198
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreVal"]) || array_key_exists("scoreVal", $context) ? $context["scoreVal"] : (function () { throw new RuntimeError('Variable "scoreVal" does not exist.', 198, $this->source); })()), "html", null, true);
                    yield "/100
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t";
                } else {
                    // line 201
                    yield "\t\t\t\t\t\t\t\t<span class=\"ai-score-pill ai-pending\"><i class=\"fa-solid fa-hourglass-half\"></i> —</span>
\t\t\t\t\t\t\t";
                }
                // line 203
                yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"max-width:200px;\">
\t\t\t\t\t\t\t";
                // line 205
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchExplanation", [], "any", false, false, false, 205)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 206
                    yield "\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-outline-primary\" onclick=\"openExplanation(";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 206), "html", null, true);
                    yield ")\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye me-1\"></i>Voir
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"explanation-";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 209), "html", null, true);
                    yield "\" style=\"display:none;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchExplanation", [], "any", false, false, false, 209), "html", null, true);
                    yield "</div>
\t\t\t\t\t\t\t";
                } else {
                    // line 211
                    yield "\t\t\t\t\t\t\t\t<span class=\"text-muted\">—</span>
\t\t\t\t\t\t\t";
                }
                // line 213
                yield "\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                // line 214
                if (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 214, $this->source); })()), "status", [], "any", false, false, false, 214), ["open", "closed"])) {
                    // line 215
                    yield "\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                    // line 216
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_award", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 216, $this->source); })()), "id", [], "any", false, false, false, 216), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 216, $this->source); })()), "id", [], "any", false, false, false, 216), "proposalId" => CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "id", [], "any", false, false, false, 216)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Attribuer à ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 216), "name", [], "any", false, false, false, 216), "html", null, true);
                    yield " ?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                    // line 217
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("award_request_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 217, $this->source); })()), "id", [], "any", false, false, false, 217))), "html", null, true);
                    yield "\" />
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-success\"><i class=\"fa-solid fa-trophy me-1\"></i>Award</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
                }
                // line 222
                yield "\t\t\t\t\t</tr>
\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['proposal'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 224
            yield "\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t";
        } else {
            // line 228
            yield "\t\t<div class=\"card-body text-center text-muted py-5\">
\t\t\t<i class=\"fa-solid fa-inbox fa-3x mb-3 d-block\"></i>
\t\t\t<p>Aucune proposition reçue.</p>
\t\t</div>
\t\t";
        }
        // line 233
        yield "\t</div>
</div>

";
        // line 237
        if ((($tmp = (isset($context["aiRanking"]) || array_key_exists("aiRanking", $context) ? $context["aiRanking"] : (function () { throw new RuntimeError('Variable "aiRanking" does not exist.', 237, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 238
            yield "<div class=\"ai-overlay\" id=\"aiOverlay\" onclick=\"closeAiDrawer()\"></div>
<div class=\"ai-drawer\" id=\"aiDrawer\">
\t<div class=\"ai-drawer-header d-flex justify-content-between align-items-center\">
\t\t<div>
\t\t\t<h5 class=\"mb-1 fw-bold\"><i class=\"fa-solid fa-brain me-2\"></i>Analyse IA</h5>
\t\t\t<small class=\"opacity-75\">Classement & recommandation — OpenRouter NLP</small>
\t\t</div>
\t\t<button class=\"ai-drawer-close\" onclick=\"closeAiDrawer()\"><i class=\"fa-solid fa-xmark\"></i></button>
\t</div>
\t<div class=\"ai-drawer-body\">";
            // line 247
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["aiRanking"]) || array_key_exists("aiRanking", $context) ? $context["aiRanking"] : (function () { throw new RuntimeError('Variable "aiRanking" does not exist.', 247, $this->source); })()), "html", null, true));
            yield "</div>
</div>
";
        }
        // line 250
        yield "
";
        // line 252
        yield "<div class=\"modal fade\" id=\"explanationModal\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content border-0 shadow\">
\t\t\t<div class=\"modal-header\" style=\"background:linear-gradient(135deg,#6c63ff,#8b5cf6);color:#fff;\">
\t\t\t\t<h5 class=\"modal-title\"><i class=\"fa-solid fa-robot me-2\"></i>Analyse IA de la proposition</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"explanationModalBody\" style=\"line-height:1.8;\"></div>
\t\t</div>
\t</div>
</div>

<script>
function openAiDrawer() {
\tdocument.getElementById('aiDrawer').classList.add('open');
\tdocument.getElementById('aiOverlay').classList.add('open');
\tdocument.body.style.overflow = 'hidden';
}
function closeAiDrawer() {
\tdocument.getElementById('aiDrawer').classList.remove('open');
\tdocument.getElementById('aiOverlay').classList.remove('open');
\tdocument.body.style.overflow = '';
}
function openExplanation(id) {
\tvar el = document.getElementById('explanation-' + id);
\tif (el) {
\t\tdocument.getElementById('explanationModalBody').textContent = el.textContent;
\t\tvar modal = new bootstrap.Modal(document.getElementById('explanationModal'));
\t\tmodal.show();
\t}
}
document.addEventListener('keydown', function(e) {
\tif (e.key === 'Escape') closeAiDrawer();
});
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
        return "service_request/show.html.twig";
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
        return array (  627 => 252,  624 => 250,  618 => 247,  607 => 238,  605 => 237,  600 => 233,  593 => 228,  587 => 224,  580 => 222,  572 => 217,  566 => 216,  563 => 215,  561 => 214,  558 => 213,  554 => 211,  547 => 209,  540 => 206,  538 => 205,  534 => 203,  530 => 201,  524 => 198,  513 => 197,  510 => 196,  508 => 195,  503 => 193,  499 => 192,  495 => 191,  487 => 189,  485 => 188,  481 => 187,  477 => 185,  473 => 184,  468 => 181,  464 => 180,  452 => 170,  450 => 169,  444 => 166,  439 => 163,  436 => 161,  430 => 157,  417 => 153,  415 => 152,  411 => 151,  407 => 150,  403 => 149,  400 => 148,  396 => 147,  387 => 140,  384 => 139,  381 => 137,  366 => 124,  363 => 123,  353 => 115,  344 => 109,  333 => 103,  324 => 97,  315 => 90,  308 => 86,  303 => 85,  301 => 84,  294 => 80,  288 => 77,  284 => 76,  281 => 75,  279 => 74,  273 => 71,  268 => 70,  266 => 69,  258 => 64,  253 => 62,  248 => 60,  243 => 58,  238 => 56,  232 => 52,  224 => 46,  221 => 45,  218 => 43,  209 => 41,  204 => 40,  195 => 38,  190 => 37,  181 => 35,  177 => 34,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}{{ serviceRequest.title }} - Eventify{% endblock %}
{% block page_heading %}{{ serviceRequest.title }}{% endblock %}
{% block page_breadcrumb %}Détail de la demande{% endblock %}

{% block content %}
<style>
\t.ai-score-pill { display:inline-flex; align-items:center; gap:4px; padding:4px 14px; border-radius:20px; font-weight:700; font-size:13px; }
\t.ai-score-high { background:rgba(34,197,94,0.15); color:#16a34a; }
\t.ai-score-mid { background:rgba(245,158,11,0.15); color:#d97706; }
\t.ai-score-low { background:rgba(239,68,68,0.15); color:#dc2626; }
\t.ai-pending { background:rgba(148,163,184,0.15); color:#64748b; font-style:italic; }
\t.bg-purple { background-color: #6c63ff !important; color: #fff; }

\t.ai-drawer { position:fixed; top:0; right:-480px; width:480px; max-width:90vw; height:100vh; background:#fff; z-index:1060; transition:right 0.35s cubic-bezier(0.4,0,0.2,1); box-shadow:-8px 0 30px rgba(0,0,0,0.15); overflow-y:auto; }
\t.ai-drawer.open { right:0; }
\t.ai-overlay { display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.4); z-index:1055; }
\t.ai-overlay.open { display:block; }
\t.ai-drawer-header { background:linear-gradient(135deg,#6c63ff,#8b5cf6); color:#fff; padding:20px 24px; position:sticky; top:0; z-index:1; }
\t.ai-drawer-body { padding:24px; line-height:1.8; white-space:pre-wrap; font-size:0.93rem; color:#334155; }
\t.ai-drawer-close { background:none; border:none; color:#fff; font-size:20px; cursor:pointer; opacity:0.8; }
\t.ai-drawer-close:hover { opacity:1; }

\t.status-flow { display:flex; align-items:center; gap:8px; }
\t.flow-step { padding:4px 14px; border-radius:20px; font-size:12px; font-weight:600; opacity:0.3; }
\t.flow-step.active { opacity:1; }

\t.provider-submit-card { border:2px dashed #6c63ff33; border-radius:12px; transition:all 0.2s; }
\t.provider-submit-card:hover { border-color:#6c63ff; background:#6c63ff08; }
</style>

<div class=\"container py-4\">
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}

\t{# Breadcrumb #}
\t<div class=\"mb-3\">
\t\t<a href=\"{{ path('app_service_request_index', { eventId: event.id }) }}\" class=\"text-primary text-decoration-none small\">
\t\t\t<i class=\"fa-solid fa-chevron-left me-1\"></i> Retour aux demandes
\t\t</a>
\t</div>

\t{# ====== REQUEST DETAILS CARD ====== #}
\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-body\">
\t\t\t<div class=\"d-flex justify-content-between align-items-start flex-wrap gap-3 mb-3\">
\t\t\t\t<div>
\t\t\t\t\t<h3 class=\"h5 fw-bold mb-2\">{{ serviceRequest.title }}</h3>
\t\t\t\t\t<div class=\"status-flow\">
\t\t\t\t\t\t<span class=\"flow-step bg-secondary text-white {{ serviceRequest.status == 'draft' ? 'active' : '' }}\">Brouillon</span>
\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right text-muted\" style=\"font-size:10px;\"></i>
\t\t\t\t\t\t<span class=\"flow-step bg-success text-white {{ serviceRequest.status == 'open' ? 'active' : '' }}\">Ouvert</span>
\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right text-muted\" style=\"font-size:10px;\"></i>
\t\t\t\t\t\t<span class=\"flow-step bg-warning text-dark {{ serviceRequest.status == 'closed' ? 'active' : '' }}\">Fermé</span>
\t\t\t\t\t\t<i class=\"fa-solid fa-chevron-right text-muted\" style=\"font-size:10px;\"></i>
\t\t\t\t\t\t<span class=\"flow-step bg-info text-white {{ serviceRequest.status == 'awarded' ? 'active' : '' }}\">Attribué</span>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div>
\t\t\t\t\t{% if serviceRequest.status == 'draft' %}
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_service_request_publish', { eventId: event.id, id: serviceRequest.id }) }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('publish_request_' ~ serviceRequest.id) }}\" />
\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-paper-plane me-1\"></i>Publier (open)</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t{% elseif serviceRequest.status == 'awarded' %}
\t\t\t\t\t\t<div class=\"d-flex gap-2\">
\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_service_request_create_booking_from_award', { eventId: event.id, id: serviceRequest.id }) }}\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('create_booking_' ~ serviceRequest.id) }}\" />
\t\t\t\t\t\t\t\t<button class=\"btn btn-success btn-sm\"><i class=\"fa-solid fa-plus me-1\"></i>Créer booking</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t<a href=\"{{ path('app_service_booking_index', { eventId: event.id }) }}\" class=\"btn btn-info btn-sm\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-clipboard-check me-1\"></i>Voir les bookings
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% elseif serviceRequest.status == 'open' %}
\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_service_request_close', { eventId: event.id, id: serviceRequest.id }) }}\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('close_request_' ~ serviceRequest.id) }}\" />
\t\t\t\t\t\t\t<button class=\"btn btn-warning btn-sm\"><i class=\"fa-solid fa-lock me-1\"></i>Clôturer</button>
\t\t\t\t\t\t</form>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row g-3\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Catégorie</small>
\t\t\t\t\t\t<span class=\"badge bg-secondary\">{{ serviceRequest.serviceType }}</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Budget</small>
\t\t\t\t\t\t<strong>{{ serviceRequest.budgetMin|number_format(0) }} € — {{ serviceRequest.budgetMax|number_format(0) }} €</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Deadline</small>
\t\t\t\t\t\t<strong>{{ serviceRequest.deadline|date('d/m/Y H:i') }}</strong>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"p-3 rounded\" style=\"background:#f8fafc;\">
\t\t\t\t\t\t<small class=\"text-muted d-block mb-1\">Description</small>
\t\t\t\t\t\t<p class=\"mb-0\">{{ serviceRequest.description|nl2br }}</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t{# ====== AI RANKING BUTTON ====== #}
\t{% if aiRanking %}
\t<div class=\"card border-0 shadow-sm mb-4\" style=\"border-left:4px solid #6c63ff !important;\">
\t\t<div class=\"card-body py-3 d-flex justify-content-between align-items-center\">
\t\t\t<div>
\t\t\t\t<i class=\"fa-solid fa-robot text-primary me-2\"></i>
\t\t\t\t<strong>Analyse IA disponible</strong>
\t\t\t\t<span class=\"text-muted ms-2\">— Classement et recommandation des propositions</span>
\t\t\t</div>
\t\t\t<button class=\"btn btn-sm text-white\" style=\"background:linear-gradient(135deg,#6c63ff,#8b5cf6);\" onclick=\"openAiDrawer()\">
\t\t\t\t<i class=\"fa-solid fa-brain me-1\"></i>Voir l'analyse IA
\t\t\t</button>
\t\t</div>
\t</div>
\t{% endif %}

\t{# ====== SUBMIT PROPOSALS (only when open) ====== #}
\t{% if serviceRequest.status == 'open' and providers|default([])|length > 0 %}
\t<div class=\"card border-0 shadow-sm mb-4\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"h6 fw-bold mb-0\"><i class=\"fa-solid fa-plus-circle me-2 text-primary\"></i>Soumettre une proposition</h5>
\t\t</div>
\t\t<div class=\"card-body\">
\t\t\t<p class=\"text-muted small mb-3\">Choisissez un prestataire actif pour soumettre une proposition. L'IA analysera automatiquement la proposition.</p>
\t\t\t<div class=\"row g-2\">
\t\t\t\t{% for p in providers %}
\t\t\t\t<div class=\"col-md-4 col-lg-3\">
\t\t\t\t\t<a href=\"{{ path('app_service_proposal_create', { requestId: serviceRequest.id, providerId: p.id }) }}\" class=\"d-block p-3 text-center text-decoration-none provider-submit-card\">
\t\t\t\t\t\t<div class=\"fw-bold text-dark\">{{ p.name }}</div>
\t\t\t\t\t\t<span class=\"badge bg-secondary\" style=\"font-size:9px;\">{{ p.serviceType }}</span>
\t\t\t\t\t\t{% set badgeColors = { 'none': 'bg-secondary', 'rising': 'bg-success', 'certified': 'bg-info', 'top_performer': 'bg-warning text-dark', 'preferred_partner': 'bg-purple' } %}
\t\t\t\t\t\t<span class=\"badge {{ badgeColors[p.badge] ?? 'bg-secondary' }}\" style=\"font-size:9px;\">{{ p.badge }}</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t</div>
\t{% endif %}

\t{# ====== PROPOSALS TABLE ====== #}
\t<div class=\"card border-0 shadow-sm\">
\t\t<div class=\"card-header bg-white border-bottom py-3\">
\t\t\t<h5 class=\"h6 fw-bold mb-0\">
\t\t\t\t<i class=\"fa-solid fa-list-check me-2\"></i>Propositions ({{ proposals|length }})
\t\t\t</h5>
\t\t</div>
\t\t{% if proposals|length > 0 %}
\t\t<div class=\"table-responsive\">
\t\t\t<table class=\"table table-hover align-middle mb-0\">
\t\t\t\t<thead class=\"table-light\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>Prestataire</th>
\t\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t\t<th>Durée</th>
\t\t\t\t\t\t<th>Équipe</th>
\t\t\t\t\t\t<th class=\"text-center\">Score IA</th>
\t\t\t\t\t\t<th>Analyse</th>
\t\t\t\t\t\t{% if serviceRequest.status in ['open', 'closed'] %}<th>Action</th>{% endif %}
\t\t\t\t\t</tr>
\t\t\t\t</thead>
\t\t\t\t<tbody>
\t\t\t\t\t{% for proposal in proposals %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"fw-semibold\">{{ proposal.serviceProvider.name }}</span><br>
\t\t\t\t\t\t\t{% set badgeColors = { 'none': 'bg-secondary', 'rising': 'bg-success', 'certified': 'bg-info', 'top_performer': 'bg-warning text-dark', 'preferred_partner': 'bg-purple' } %}
\t\t\t\t\t\t\t<span class=\"badge {{ badgeColors[proposal.serviceProvider.badge] ?? 'bg-secondary' }}\" style=\"font-size:10px;\">{{ proposal.serviceProvider.badge }}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td class=\"fw-semibold\">{{ proposal.price|number_format(2) }} €</td>
\t\t\t\t\t\t<td>{{ proposal.estimatedDuration }}</td>
\t\t\t\t\t\t<td>{{ proposal.proposedTeamSize }} pers.</td>
\t\t\t\t\t\t<td class=\"text-center\">
\t\t\t\t\t\t\t{% if proposal.aiMatchScore is not null %}
\t\t\t\t\t\t\t\t{% set scoreVal = proposal.aiMatchScore|number_format(0) %}
\t\t\t\t\t\t\t\t<span class=\"ai-score-pill {% if scoreVal >= 70 %}ai-score-high{% elseif scoreVal >= 40 %}ai-score-mid{% else %}ai-score-low{% endif %}\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-robot\"></i> {{ scoreVal }}/100
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"ai-score-pill ai-pending\"><i class=\"fa-solid fa-hourglass-half\"></i> —</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t<td style=\"max-width:200px;\">
\t\t\t\t\t\t\t{% if proposal.aiMatchExplanation %}
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-outline-primary\" onclick=\"openExplanation({{ proposal.id }})\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-eye me-1\"></i>Voir
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t<div id=\"explanation-{{ proposal.id }}\" style=\"display:none;\">{{ proposal.aiMatchExplanation }}</div>
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<span class=\"text-muted\">—</span>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% if serviceRequest.status in ['open', 'closed'] %}
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_service_request_award', { eventId: event.id, id: serviceRequest.id, proposalId: proposal.id }) }}\" onsubmit=\"return confirm('Attribuer à {{ proposal.serviceProvider.name }} ?');\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('award_request_' ~ serviceRequest.id) }}\" />
\t\t\t\t\t\t\t\t<button class=\"btn btn-sm btn-success\"><i class=\"fa-solid fa-trophy me-1\"></i>Award</button>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</td>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</tr>
\t\t\t\t\t{% endfor %}
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>
\t\t{% else %}
\t\t<div class=\"card-body text-center text-muted py-5\">
\t\t\t<i class=\"fa-solid fa-inbox fa-3x mb-3 d-block\"></i>
\t\t\t<p>Aucune proposition reçue.</p>
\t\t</div>
\t\t{% endif %}
\t</div>
</div>

{# ====== AI RANKING DRAWER ====== #}
{% if aiRanking %}
<div class=\"ai-overlay\" id=\"aiOverlay\" onclick=\"closeAiDrawer()\"></div>
<div class=\"ai-drawer\" id=\"aiDrawer\">
\t<div class=\"ai-drawer-header d-flex justify-content-between align-items-center\">
\t\t<div>
\t\t\t<h5 class=\"mb-1 fw-bold\"><i class=\"fa-solid fa-brain me-2\"></i>Analyse IA</h5>
\t\t\t<small class=\"opacity-75\">Classement & recommandation — OpenRouter NLP</small>
\t\t</div>
\t\t<button class=\"ai-drawer-close\" onclick=\"closeAiDrawer()\"><i class=\"fa-solid fa-xmark\"></i></button>
\t</div>
\t<div class=\"ai-drawer-body\">{{ aiRanking|nl2br }}</div>
</div>
{% endif %}

{# ====== EXPLANATION MODAL ====== #}
<div class=\"modal fade\" id=\"explanationModal\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-dialog-centered\">
\t\t<div class=\"modal-content border-0 shadow\">
\t\t\t<div class=\"modal-header\" style=\"background:linear-gradient(135deg,#6c63ff,#8b5cf6);color:#fff;\">
\t\t\t\t<h5 class=\"modal-title\"><i class=\"fa-solid fa-robot me-2\"></i>Analyse IA de la proposition</h5>
\t\t\t\t<button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\"></button>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"explanationModalBody\" style=\"line-height:1.8;\"></div>
\t\t</div>
\t</div>
</div>

<script>
function openAiDrawer() {
\tdocument.getElementById('aiDrawer').classList.add('open');
\tdocument.getElementById('aiOverlay').classList.add('open');
\tdocument.body.style.overflow = 'hidden';
}
function closeAiDrawer() {
\tdocument.getElementById('aiDrawer').classList.remove('open');
\tdocument.getElementById('aiOverlay').classList.remove('open');
\tdocument.body.style.overflow = '';
}
function openExplanation(id) {
\tvar el = document.getElementById('explanation-' + id);
\tif (el) {
\t\tdocument.getElementById('explanationModalBody').textContent = el.textContent;
\t\tvar modal = new bootstrap.Modal(document.getElementById('explanationModal'));
\t\tmodal.show();
\t}
}
document.addEventListener('keydown', function(e) {
\tif (e.key === 'Escape') closeAiDrawer();
});
</script>
{% endblock %}
", "service_request/show.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/service_request/show.html.twig");
    }
}

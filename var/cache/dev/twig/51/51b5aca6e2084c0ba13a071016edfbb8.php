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

/* service_proposal/index.html.twig */
class __TwigTemplate_ee0f18c6f030f89f5c13f96db65ab4a7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_proposal/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "service_proposal/index.html.twig"));

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

        yield "Propositions - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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

        yield "Propositions";
        
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

        yield "Propositions";
        
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
\t.ai-score-circle { display:inline-flex; align-items:center; justify-content:center; width:48px; height:48px; border-radius:50%; font-weight:700; font-size:14px; color:#fff; }
\t.ai-score-high { background: linear-gradient(135deg, #22c55e, #16a34a); }
\t.ai-score-mid { background: linear-gradient(135deg, #f59e0b, #d97706); }
\t.ai-score-low { background: linear-gradient(135deg, #ef4444, #dc2626); }
\t.ai-score-pending { background: #cbd5e1; }
\t.ai-badge { display:inline-flex; align-items:center; gap:4px; padding:2px 10px; border-radius:20px; font-size:12px; font-weight:600; }
\t.ai-badge-active { background:rgba(108,99,255,0.12); color:#6c63ff; }
</style>

<div class=\"container py-4\">
\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["success"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 22, $this->source); })()), "flashes", ["warning"], "method", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 23
            yield "\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 26
            yield "\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
\t<p class=\"mb-3\"><a href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_request_show", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 29, $this->source); })()), "event", [], "any", false, false, false, 29), "id", [], "any", false, false, false, 29), "id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29)]), "html", null, true);
        yield "\">&larr; Retour à la demande</a></p>

\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\"h5 fw-bold mb-0\">Propositions pour : ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["serviceRequest"]) || array_key_exists("serviceRequest", $context) ? $context["serviceRequest"] : (function () { throw new RuntimeError('Variable "serviceRequest" does not exist.', 32, $this->source); })()), "title", [], "any", false, false, false, 32), "html", null, true);
        yield "</h3>
\t\t<span class=\"ai-badge ai-badge-active\"><i class=\"fa-solid fa-robot me-1\"></i>Analyse IA synchrone</span>
\t</div>

\t";
        // line 36
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 36, $this->source); })())) > 0)) {
            // line 37
            yield "\t<div class=\"row g-3 mb-4\">
\t\t";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["proposals"]) || array_key_exists("proposals", $context) ? $context["proposals"] : (function () { throw new RuntimeError('Variable "proposals" does not exist.', 38, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["proposal"]) {
                // line 39
                yield "\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t<div class=\"card border-0 shadow-sm h-100\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-3\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6 class=\"fw-bold mb-1\">";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 44), "name", [], "any", false, false, false, 44), "html", null, true);
                yield "</h6>
\t\t\t\t\t\t\t";
                // line 45
                $context["badgeColors"] = ["none" => "bg-secondary", "rising" => "bg-success", "certified" => "bg-info", "top_performer" => "bg-warning text-dark", "preferred_partner" => "bg-primary"];
                // line 46
                yield "\t\t\t\t\t\t\t<span class=\"badge ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["badgeColors"] ?? null), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 46), "badge", [], "any", false, false, false, 46), [], "array", true, true, false, 46) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 46), "badge", [], "any", false, false, false, 46), [], "array", false, false, false, 46)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["badgeColors"]) || array_key_exists("badgeColors", $context) ? $context["badgeColors"] : (function () { throw new RuntimeError('Variable "badgeColors" does not exist.', 46, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 46), "badge", [], "any", false, false, false, 46), [], "array", false, false, false, 46), "html", null, true)) : ("bg-secondary"));
                yield "\" style=\"font-size:10px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "serviceProvider", [], "any", false, false, false, 46), "badge", [], "any", false, false, false, 46), "html", null, true);
                yield "</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                // line 48
                if ((($tmp =  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchScore", [], "any", false, false, false, 48))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 49
                    yield "\t\t\t\t\t\t\t";
                    $context["scoreVal"] = $this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchScore", [], "any", false, false, false, 49), 0);
                    // line 50
                    yield "\t\t\t\t\t\t\t<div class=\"ai-score-circle ";
                    if (((isset($context["scoreVal"]) || array_key_exists("scoreVal", $context) ? $context["scoreVal"] : (function () { throw new RuntimeError('Variable "scoreVal" does not exist.', 50, $this->source); })()) >= 70)) {
                        yield "ai-score-high";
                    } elseif (((isset($context["scoreVal"]) || array_key_exists("scoreVal", $context) ? $context["scoreVal"] : (function () { throw new RuntimeError('Variable "scoreVal" does not exist.', 50, $this->source); })()) >= 40)) {
                        yield "ai-score-mid";
                    } else {
                        yield "ai-score-low";
                    }
                    yield "\">
\t\t\t\t\t\t\t\t";
                    // line 51
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["scoreVal"]) || array_key_exists("scoreVal", $context) ? $context["scoreVal"] : (function () { throw new RuntimeError('Variable "scoreVal" does not exist.', 51, $this->source); })()), "html", null, true);
                    yield "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                } else {
                    // line 54
                    yield "\t\t\t\t\t\t\t<div class=\"ai-score-circle ai-score-pending\" title=\"Score non disponible\">—</div>
\t\t\t\t\t\t";
                }
                // line 56
                yield "\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-2 mb-3 small\">
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Prix :</span> <strong>";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "price", [], "any", false, false, false, 58), 2), "html", null, true);
                yield " €</strong></div>
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Durée :</span> <strong>";
                // line 59
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "estimatedDuration", [], "any", false, false, false, 59), "html", null, true);
                yield "</strong></div>
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Équipe :</span> <strong>";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "proposedTeamSize", [], "any", false, false, false, 60), "html", null, true);
                yield " pers.</strong></div>
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Soumis :</span> ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "createdAt", [], "any", false, false, false, 61), "d/m/Y H:i"), "html", null, true);
                yield "</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                // line 63
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchExplanation", [], "any", false, false, false, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 64
                    yield "\t\t\t\t\t<div class=\"p-2 rounded\" style=\"background:rgba(108,99,255,0.06); border-left:3px solid #6c63ff;\">
\t\t\t\t\t\t<small class=\"d-block text-muted mb-1\"><i class=\"fa-solid fa-robot me-1\"></i>Analyse IA :</small>
\t\t\t\t\t\t<small>";
                    // line 66
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["proposal"], "aiMatchExplanation", [], "any", false, false, false, 66), "html", null, true);
                    yield "</small>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 69
                yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['proposal'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "\t</div>
\t";
        } else {
            // line 75
            yield "\t<div class=\"text-center text-muted py-5\">
\t\t<i class=\"fa-solid fa-inbox fa-3x mb-3 d-block\"></i>
\t\t<p>Aucune proposition reçue pour cette demande.</p>
\t</div>
\t";
        }
        // line 80
        yield "</div>
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
        return "service_proposal/index.html.twig";
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
        return array (  328 => 80,  321 => 75,  317 => 73,  308 => 69,  302 => 66,  298 => 64,  296 => 63,  291 => 61,  287 => 60,  283 => 59,  279 => 58,  275 => 56,  271 => 54,  265 => 51,  254 => 50,  251 => 49,  249 => 48,  241 => 46,  239 => 45,  235 => 44,  228 => 39,  224 => 38,  221 => 37,  219 => 36,  212 => 32,  206 => 29,  203 => 28,  194 => 26,  189 => 25,  180 => 23,  175 => 22,  166 => 20,  162 => 19,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}Propositions - {{ serviceRequest.title }}{% endblock %}
{% block page_heading %}Propositions{% endblock %}
{% block page_breadcrumb %}Propositions{% endblock %}

{% block content %}
<style>
\t.ai-score-circle { display:inline-flex; align-items:center; justify-content:center; width:48px; height:48px; border-radius:50%; font-weight:700; font-size:14px; color:#fff; }
\t.ai-score-high { background: linear-gradient(135deg, #22c55e, #16a34a); }
\t.ai-score-mid { background: linear-gradient(135deg, #f59e0b, #d97706); }
\t.ai-score-low { background: linear-gradient(135deg, #ef4444, #dc2626); }
\t.ai-score-pending { background: #cbd5e1; }
\t.ai-badge { display:inline-flex; align-items:center; gap:4px; padding:2px 10px; border-radius:20px; font-size:12px; font-weight:600; }
\t.ai-badge-active { background:rgba(108,99,255,0.12); color:#6c63ff; }
</style>

<div class=\"container py-4\">
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('warning') %}
\t\t<div class=\"alert alert-warning alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">{{ message }}<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>
\t{% endfor %}

\t<p class=\"mb-3\"><a href=\"{{ path('app_service_request_show', { eventId: serviceRequest.event.id, id: serviceRequest.id }) }}\">&larr; Retour à la demande</a></p>

\t<div class=\"d-flex justify-content-between align-items-center mb-4\">
\t\t<h3 class=\"h5 fw-bold mb-0\">Propositions pour : {{ serviceRequest.title }}</h3>
\t\t<span class=\"ai-badge ai-badge-active\"><i class=\"fa-solid fa-robot me-1\"></i>Analyse IA synchrone</span>
\t</div>

\t{% if proposals|length > 0 %}
\t<div class=\"row g-3 mb-4\">
\t\t{% for proposal in proposals %}
\t\t<div class=\"col-md-6 col-xl-4\">
\t\t\t<div class=\"card border-0 shadow-sm h-100\">
\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t<div class=\"d-flex justify-content-between align-items-start mb-3\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<h6 class=\"fw-bold mb-1\">{{ proposal.serviceProvider.name }}</h6>
\t\t\t\t\t\t\t{% set badgeColors = { 'none': 'bg-secondary', 'rising': 'bg-success', 'certified': 'bg-info', 'top_performer': 'bg-warning text-dark', 'preferred_partner': 'bg-primary' } %}
\t\t\t\t\t\t\t<span class=\"badge {{ badgeColors[proposal.serviceProvider.badge] ?? 'bg-secondary' }}\" style=\"font-size:10px;\">{{ proposal.serviceProvider.badge }}</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if proposal.aiMatchScore is not null %}
\t\t\t\t\t\t\t{% set scoreVal = proposal.aiMatchScore|number_format(0) %}
\t\t\t\t\t\t\t<div class=\"ai-score-circle {% if scoreVal >= 70 %}ai-score-high{% elseif scoreVal >= 40 %}ai-score-mid{% else %}ai-score-low{% endif %}\">
\t\t\t\t\t\t\t\t{{ scoreVal }}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"ai-score-circle ai-score-pending\" title=\"Score non disponible\">—</div>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-2 mb-3 small\">
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Prix :</span> <strong>{{ proposal.price|number_format(2) }} €</strong></div>
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Durée :</span> <strong>{{ proposal.estimatedDuration }}</strong></div>
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Équipe :</span> <strong>{{ proposal.proposedTeamSize }} pers.</strong></div>
\t\t\t\t\t\t<div class=\"col-6\"><span class=\"text-muted\">Soumis :</span> {{ proposal.createdAt|date('d/m/Y H:i') }}</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% if proposal.aiMatchExplanation %}
\t\t\t\t\t<div class=\"p-2 rounded\" style=\"background:rgba(108,99,255,0.06); border-left:3px solid #6c63ff;\">
\t\t\t\t\t\t<small class=\"d-block text-muted mb-1\"><i class=\"fa-solid fa-robot me-1\"></i>Analyse IA :</small>
\t\t\t\t\t\t<small>{{ proposal.aiMatchExplanation }}</small>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% endfor %}
\t</div>
\t{% else %}
\t<div class=\"text-center text-muted py-5\">
\t\t<i class=\"fa-solid fa-inbox fa-3x mb-3 d-block\"></i>
\t\t<p>Aucune proposition reçue pour cette demande.</p>
\t</div>
\t{% endif %}
</div>
{% endblock %}
", "service_proposal/index.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\service_proposal\\index.html.twig");
    }
}

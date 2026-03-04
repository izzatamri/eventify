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

/* events/_events_list.html.twig */
class __TwigTemplate_d22e981c620e0ebc37ba19e790a24ea3 extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/_events_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events/_events_list.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 1, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 2
            yield "\t<div class=\"col-lg-3 col-md-6 mb-4\">
\t\t<div class=\"event-card border rounded overflow-hidden bg-white h-100 d-flex flex-column\">
\t\t\t<a href=\"";
            // line 4
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 4)]), "html", null, true);
            yield "\" class=\"text-decoration-none text-dark\">
\t\t\t\t<div class=\"event-card-image position-relative\" style=\"height: 180px; background: #e9ecef;\">
\t\t\t\t\t";
            // line 6
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 7), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 7), "html", null, true);
                yield "\" class=\"w-100 h-100\" style=\"object-fit: cover;\" />
\t\t\t\t\t";
            } else {
                // line 9
                yield "\t\t\t\t\t\t<div class=\"w-100 h-100 d-flex align-items-center justify-content-center text-muted\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days fa-3x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 13
            yield "\t\t\t\t\t<div class=\"position-absolute top-0 start-0 p-2 d-flex flex-wrap gap-1\">
\t\t\t\t\t\t";
            // line 14
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "createdAt", [], "any", false, false, false, 14) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, $context["event"], "createdAt", [], "any", false, false, false, 14)], "method", false, false, false, 14), "days", [], "any", false, false, false, 14) < 7))) {
                // line 15
                yield "\t\t\t\t\t\t\t<span class=\"badge bg-success\">Just added</span>
\t\t\t\t\t\t";
            }
            // line 17
            yield "\t\t\t\t\t\t";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 17) == "published")) {
                // line 18
                yield "\t\t\t\t\t\t\t<span class=\"badge bg-primary\">Published</span>
\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 19
$context["event"], "status", [], "any", false, false, false, 19) == "draft")) {
                // line 20
                yield "\t\t\t\t\t\t\t<span class=\"badge bg-secondary\">Draft</span>
\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 21
$context["event"], "status", [], "any", false, false, false, 21) == "cancelled")) {
                // line 22
                yield "\t\t\t\t\t\t\t<span class=\"badge bg-danger\">Cancelled</span>
\t\t\t\t\t\t";
            }
            // line 24
            yield "\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"event-card-body p-3 flex-grow-1 d-flex flex-column\">
\t\t\t\t\t<h3 class=\"h6 fw-bold mb-2\" style=\"display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.3;\">";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 27), "html", null, true);
            yield "</h3>
\t\t\t\t\t<p class=\"small text-muted mb-1\">
\t\t\t\t\t\t";
            // line 29
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 30
                yield "\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 30), "l"), "html", null, true);
                yield " • ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 30), "g:i A"), "html", null, true);
                yield "
\t\t\t\t\t\t";
            }
            // line 32
            yield "\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"small text-muted mb-2\">
\t\t\t\t\t\t";
            // line 34
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "venue", [], "any", false, false, false, 34)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 35
                yield "\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "venue", [], "any", false, false, false, 35), "name", [], "any", false, false, false, 35), "html", null, true);
                yield "
      // NOTE: Consider caching this
\t\t\t\t\t\t";
            } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,             // line 37
$context["event"], "organizer", [], "any", false, false, false, 37)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 38
                yield "\t\t\t\t\t\t\t";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
                yield "
      // Improved error handling
\t\t\t\t\t\t";
            } else {
                // line 41
                yield "\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t";
            }
            // line 43
            yield "\t\t\t\t\t</p>
\t\t\t\t\t";
            // line 44
            $context["card_visible_sponsors"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sponsors", [], "any", false, false, false, 44), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 44, $this->source); })()), "status", [], "any", false, false, false, 44) == "active"); });
            // line 45
            yield "\t\t\t\t\t";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["card_visible_sponsors"]) || array_key_exists("card_visible_sponsors", $context) ? $context["card_visible_sponsors"] : (function () { throw new RuntimeError('Variable "card_visible_sponsors" does not exist.', 45, $this->source); })())) > 0)) {
                // line 46
                yield "\t\t\t\t\t\t";
                $context["sponsor_names"] = [];
                // line 47
                yield "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["card_visible_sponsors"]) || array_key_exists("card_visible_sponsors", $context) ? $context["card_visible_sponsors"] : (function () { throw new RuntimeError('Variable "card_visible_sponsors" does not exist.', 47, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["s"]) {
                    $context["sponsor_names"] = Twig\Extension\CoreExtension::merge((isset($context["sponsor_names"]) || array_key_exists("sponsor_names", $context) ? $context["sponsor_names"] : (function () { throw new RuntimeError('Variable "sponsor_names" does not exist.', 47, $this->source); })()), [CoreExtension::getAttribute($this->env, $this->source, $context["s"], "name", [], "any", false, false, false, 47)]);
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['s'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                yield "\t\t\t\t\t\t<p class=\"small text-muted mb-1\"><i class=\"fa-solid fa-handshake me-1\"></i>Sponsored by ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join((isset($context["sponsor_names"]) || array_key_exists("sponsor_names", $context) ? $context["sponsor_names"] : (function () { throw new RuntimeError('Variable "sponsor_names" does not exist.', 48, $this->source); })()), ", "), "html", null, true);
                yield "</p>
\t\t\t\t\t";
            }
            // line 50
            yield "\t\t\t\t\t<p class=\"small fw-semibold mb-0 mt-auto\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "priceLabel", [], "any", false, false, false, 50), "html", null, true);
            yield "</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"event-card-actions p-3 border-top bg-light d-flex flex-wrap gap-1\">
\t\t\t\t<a href=\"";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 54)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">View</a>
\t\t\t\t";
            // line 55
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EVENT_EDIT", $context["event"])) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 56
                yield "\t\t\t\t<a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
\t\t\t\t<form method=\"post\" action=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                yield "\" class=\"d-inline\" onsubmit=\"return confirm('Delete this event?');\">
\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 58))), "html", null, true);
                yield "\" />
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
\t\t\t\t</form>
\t\t\t\t";
            }
            // line 62
            yield "\t\t\t</div>
\t\t</div>
\t</div>
";
            $context['_iterated'] = true;
        }
        // line 65
        if (!$context['_iterated']) {
            // line 66
            yield "\t<div class=\"col-12 text-center py-5\">
\t\t<p class=\"text-muted\">No events found.</p>
\t\t<a href=\"";
            // line 68
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
            yield "\" class=\"vl-btn4\">Create your first event</a>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "events/_events_list.html.twig";
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
        return array (  219 => 68,  215 => 66,  213 => 65,  206 => 62,  199 => 58,  195 => 57,  190 => 56,  188 => 55,  184 => 54,  176 => 50,  170 => 48,  160 => 47,  157 => 46,  154 => 45,  152 => 44,  149 => 43,  145 => 41,  138 => 38,  136 => 37,  130 => 35,  128 => 34,  124 => 32,  116 => 30,  114 => 29,  109 => 27,  104 => 24,  100 => 22,  98 => 21,  95 => 20,  93 => 19,  90 => 18,  87 => 17,  83 => 15,  81 => 14,  78 => 13,  72 => 9,  64 => 7,  62 => 6,  57 => 4,  53 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% for event in events %}
\t<div class=\"col-lg-3 col-md-6 mb-4\">
\t\t<div class=\"event-card border rounded overflow-hidden bg-white h-100 d-flex flex-column\">
\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-decoration-none text-dark\">
\t\t\t\t<div class=\"event-card-image position-relative\" style=\"height: 180px; background: #e9ecef;\">
\t\t\t\t\t{% if event.image %}
\t\t\t\t\t\t<img src=\"{{ event.image }}\" alt=\"{{ event.title }}\" class=\"w-100 h-100\" style=\"object-fit: cover;\" />
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div class=\"w-100 h-100 d-flex align-items-center justify-content-center text-muted\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days fa-3x\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<div class=\"position-absolute top-0 start-0 p-2 d-flex flex-wrap gap-1\">
\t\t\t\t\t\t{% if event.createdAt and date().diff(event.createdAt).days < 7 %}
\t\t\t\t\t\t\t<span class=\"badge bg-success\">Just added</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if event.status == 'published' %}
\t\t\t\t\t\t\t<span class=\"badge bg-primary\">Published</span>
\t\t\t\t\t\t{% elseif event.status == 'draft' %}
\t\t\t\t\t\t\t<span class=\"badge bg-secondary\">Draft</span>
\t\t\t\t\t\t{% elseif event.status == 'cancelled' %}
\t\t\t\t\t\t\t<span class=\"badge bg-danger\">Cancelled</span>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"event-card-body p-3 flex-grow-1 d-flex flex-column\">
\t\t\t\t\t<h3 class=\"h6 fw-bold mb-2\" style=\"display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; line-height: 1.3;\">{{ event.title }}</h3>
\t\t\t\t\t<p class=\"small text-muted mb-1\">
\t\t\t\t\t\t{% if event.startDatetime %}
\t\t\t\t\t\t\t{{ event.startDatetime|date('l') }} • {{ event.startDatetime|date('g:i A') }}
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</p>
\t\t\t\t\t<p class=\"small text-muted mb-2\">
\t\t\t\t\t\t{% if event.venue %}
\t\t\t\t\t\t\t{{ event.venue.name }}
      // NOTE: Consider caching this
\t\t\t\t\t\t{% elseif event.organizer %}
\t\t\t\t\t\t\t{{ event.organizer.name }}
      // Improved error handling
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</p>
\t\t\t\t\t{% set card_visible_sponsors = event.sponsors|filter(s => s.status == 'active') %}
\t\t\t\t\t{% if card_visible_sponsors|length > 0 %}
\t\t\t\t\t\t{% set sponsor_names = [] %}
\t\t\t\t\t\t{% for s in card_visible_sponsors %}{% set sponsor_names = sponsor_names|merge([s.name]) %}{% endfor %}
\t\t\t\t\t\t<p class=\"small text-muted mb-1\"><i class=\"fa-solid fa-handshake me-1\"></i>Sponsored by {{ sponsor_names|join(', ') }}</p>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<p class=\"small fw-semibold mb-0 mt-auto\">{{ event.priceLabel }}</p>
\t\t\t\t</div>
\t\t\t</a>
\t\t\t<div class=\"event-card-actions p-3 border-top bg-light d-flex flex-wrap gap-1\">
\t\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"btn btn-sm btn-outline-primary\">View</a>
\t\t\t\t{% if is_granted('EVENT_EDIT', event) %}
\t\t\t\t<a href=\"{{ path('app_event_edit', { id: event.id }) }}\" class=\"btn btn-sm btn-outline-secondary\">Edit</a>
\t\t\t\t<form method=\"post\" action=\"{{ path('app_event_delete', { id: event.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Delete this event?');\">
\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\" />
\t\t\t\t\t<button type=\"submit\" class=\"btn btn-sm btn-outline-danger\">Delete</button>
\t\t\t\t</form>
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t</div>
\t</div>
{% else %}
\t<div class=\"col-12 text-center py-5\">
\t\t<p class=\"text-muted\">No events found.</p>
\t\t<a href=\"{{ path('app_event_create') }}\" class=\"vl-btn4\">Create your first event</a>
\t</div>
{% endfor %}
", "events/_events_list.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/events/_events_list.html.twig");
    }
}

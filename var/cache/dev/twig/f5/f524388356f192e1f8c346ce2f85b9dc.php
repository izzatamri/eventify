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

/* admin/events/_events_list.html.twig */
class __TwigTemplate_5be118e9fc18812e4f16742174e68f3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/events/_events_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/events/_events_list.html.twig"));

        // line 1
        yield "<div class=\"team-list grid-view-filter row\" id=\"event-card-list\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 3
            yield "\t\t<div class=\"col event-card\">
\t\t\t<div class=\"card team-box\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04); overflow: hidden;\">
\t\t\t\t<div class=\"team-cover\">
\t\t\t\t\t";
            // line 6
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 6)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 7
                yield "\t\t\t\t\t\t<img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 7)), "html", null, true);
                yield "\" alt=\"\" class=\"img-fluid\" style=\"height:120px;width:100%;object-fit:cover;\">
\t\t\t\t\t";
            } else {
                // line 9
                yield "\t\t\t\t\t\t<div style=\"height:120px;width:100%;background:linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);\"></div>
\t\t\t\t\t";
            }
            // line 11
            yield "\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\" style=\"padding: 1.25rem;\">
\t\t\t\t\t<div class=\"row align-items-center team-row\">
\t\t\t\t\t\t<div class=\"col team-settings\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\"></div>
\t\t\t\t\t\t\t\t<div class=\"col text-end dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-more-fill fs-17\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 23
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            yield "\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-external-link-line me-2 align-bottom text-muted\"></i>View on site
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events_ban", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            yield "\" class=\"d-inline\" id=\"form-ban-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 28), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 29
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("event_ban_" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 29))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item ";
            // line 30
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 30) == "cancelled")) ? ("text-success") : ("text-danger"));
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-forbid-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 32
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 32) == "cancelled")) ? ("Unban event") : ("Ban event"));
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
        // TODO: Add logging
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"team-profile-img\">
\t\t\t\t\t\t\t\t<div class=\"avatar-lg img-thumbnail rounded-circle flex-shrink-0\" style=\"border-radius: 50% !important;\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title border bg-light text-primary rounded-circle text-uppercase\" style=\"font-size: 16px; font-weight: 600;\">";
            // line 44
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 44), 0, 2)), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"team-content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 member-name fw-bold\" style=\"font-size: 15px;\">";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 47), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted member-designation mb-0\" style=\"font-size: 13px;\">";
            // line 48
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 48)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["event"], "organizer", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true)) : ("—"));
            yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"row text-muted text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-6 border-end\" style=\"border-color: rgba(0,0,0,0.08) !important;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 fw-bold\" style=\"font-size: 18px;\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sold", [], "any", false, false, false, 55), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Sold</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 60
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 60) == "published")) {
                // line 61
                yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Published</span>
\t\t\t\t\t\t\t\t\t\t";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 62
$context["event"], "status", [], "any", false, false, false, 62) == "draft")) {
                // line 63
                yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Draft</span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 65
                yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Cancelled</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 67
            yield "\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Status</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col\">
\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t<small class=\"text-muted d-block fw-semibold\" style=\"font-size: 12px;\">";
            // line 74
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 74), "M d, Y"), "html", null, true)) : ("—"));
            yield "</small>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 75
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 75)]), "html", null, true);
            yield "\" class=\"btn btn-primary btn-sm mt-2\" target=\"_blank\" style=\"border-radius: 6px; padding: 0.35rem 0.75rem; font-size: 12px; font-weight: 600;\">View</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            $context['_iterated'] = true;
        }
        // line 82
        if (!$context['_iterated']) {
            // line 83
            yield "\t\t<div class=\"col-12\">
\t\t\t<div class=\"text-center py-5 text-muted\">
\t\t\t\t<i class=\"ri-calendar-event-line fs-1\"></i>
\t\t\t\t<p class=\"mt-2 mb-0\">No events found.</p>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "</div>
<div class=\"py-4 mt-4 text-center ";
        // line 91
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 91, $this->source); })())) > 0)) ? ("d-none") : (""));
        yield "\" id=\"noresult\">
\t<lord-icon src=\"https://cdn.lordicon.com/msoeawqm.json\" trigger=\"loop\" colors=\"primary:#405189,secondary:#0ab39c\" style=\"width:72px;height:72px\"></lord-icon>
\t<h5 class=\"mt-4\">No events match your search.</h5>
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/events/_events_list.html.twig";
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
        return array (  210 => 91,  207 => 90,  195 => 83,  193 => 82,  181 => 75,  177 => 74,  168 => 67,  164 => 65,  160 => 63,  158 => 62,  155 => 61,  153 => 60,  145 => 55,  135 => 48,  131 => 47,  125 => 44,  110 => 32,  105 => 30,  101 => 29,  95 => 28,  87 => 23,  73 => 11,  69 => 9,  63 => 7,  61 => 6,  56 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"team-list grid-view-filter row\" id=\"event-card-list\">
\t{% for event in events %}
\t\t<div class=\"col event-card\">
\t\t\t<div class=\"card team-box\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04); overflow: hidden;\">
\t\t\t\t<div class=\"team-cover\">
\t\t\t\t\t{% if event.image %}
\t\t\t\t\t\t<img src=\"{{ asset(event.image) }}\" alt=\"\" class=\"img-fluid\" style=\"height:120px;width:100%;object-fit:cover;\">
\t\t\t\t\t{% else %}
\t\t\t\t\t\t<div style=\"height:120px;width:100%;background:linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);\"></div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t\t<div class=\"card-body\" style=\"padding: 1.25rem;\">
\t\t\t\t\t<div class=\"row align-items-center team-row\">
\t\t\t\t\t\t<div class=\"col team-settings\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col\"></div>
\t\t\t\t\t\t\t\t<div class=\"col text-end dropdown\">
\t\t\t\t\t\t\t\t\t<a href=\"javascript:void(0);\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t<i class=\"ri-more-fill fs-17\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-menu-end\">
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_event_show', { id: event.id }) }}\" target=\"_blank\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-external-link-line me-2 align-bottom text-muted\"></i>View on site
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_admin_events_ban', { id: event.id }) }}\" class=\"d-inline\" id=\"form-ban-{{ event.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('event_ban_' ~ event.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item {{ event.status == 'cancelled' ? 'text-success' : 'text-danger' }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-forbid-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ event.status == 'cancelled' ? 'Unban event' : 'Ban event' }}
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
        // TODO: Add logging
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"team-profile-img\">
\t\t\t\t\t\t\t\t<div class=\"avatar-lg img-thumbnail rounded-circle flex-shrink-0\" style=\"border-radius: 50% !important;\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title border bg-light text-primary rounded-circle text-uppercase\" style=\"font-size: 16px; font-weight: 600;\">{{ event.title|slice(0,2)|upper }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"team-content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 member-name fw-bold\" style=\"font-size: 15px;\">{{ event.title }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted member-designation mb-0\" style=\"font-size: 13px;\">{{ event.organizer ? event.organizer.name : '—' }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"row text-muted text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-6 border-end\" style=\"border-color: rgba(0,0,0,0.08) !important;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 fw-bold\" style=\"font-size: 18px;\">{{ event.sold }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Sold</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t{% if event.status == 'published' %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Published</span>
\t\t\t\t\t\t\t\t\t\t{% elseif event.status == 'draft' %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-warning\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Draft</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Cancelled</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Status</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col\">
\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t<small class=\"text-muted d-block fw-semibold\" style=\"font-size: 12px;\">{{ event.startDatetime ? event.startDatetime|date('M d, Y') : '—' }}</small>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"btn btn-primary btn-sm mt-2\" target=\"_blank\" style=\"border-radius: 6px; padding: 0.35rem 0.75rem; font-size: 12px; font-weight: 600;\">View</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% else %}
\t\t<div class=\"col-12\">
\t\t\t<div class=\"text-center py-5 text-muted\">
\t\t\t\t<i class=\"ri-calendar-event-line fs-1\"></i>
\t\t\t\t<p class=\"mt-2 mb-0\">No events found.</p>
\t\t\t</div>
\t\t</div>
\t{% endfor %}
</div>
<div class=\"py-4 mt-4 text-center {{ events|length > 0 ? 'd-none' : '' }}\" id=\"noresult\">
\t<lord-icon src=\"https://cdn.lordicon.com/msoeawqm.json\" trigger=\"loop\" colors=\"primary:#405189,secondary:#0ab39c\" style=\"width:72px;height:72px\"></lord-icon>
\t<h5 class=\"mt-4\">No events match your search.</h5>
</div>
", "admin/events/_events_list.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/admin/events/_events_list.html.twig");
    }
}

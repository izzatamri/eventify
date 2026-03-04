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

/* admin/users/_users_list.html.twig */
class __TwigTemplate_48e68b4df5d46ec27d322c2985e97161 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/_users_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/_users_list.html.twig"));

        // line 1
        yield "<div class=\"team-list grid-view-filter row\" id=\"team-member-list\">
\t";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 2, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 3
            yield "\t\t<div class=\"col member-card\">
\t\t\t<div class=\"card team-box\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04); overflow: hidden;\">
\t\t\t\t<div class=\"team-cover\">
\t\t\t\t\t<div style=\"height:120px;width:100%;background:linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);\"></div>
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
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 19)]), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tModify user
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_toggle_active", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 25)]), "html", null, true);
            yield "\" class=\"d-inline\" id=\"form-toggle-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 25), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("user_toggle_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 26))), "html", null, true);
            yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-follow-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 29
            yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 29)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Deactivate") : ("Activate"));
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            // line 33
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 33) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "id", [], "any", false, false, false, 33))) {
                // line 34
                yield "\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35)]), "html", null, true);
                yield "\" class=\"d-inline\" id=\"form-delete-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "\" onsubmit=\"return confirm('Delete this user?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("user_delete_" . CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 36))), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 44
            yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"team-profile-img\">
\t\t\t\t\t\t\t\t<div class=\"avatar-lg img-thumbnail rounded-circle flex-shrink-0\" style=\"border-radius: 50% !important;\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title border bg-light text-primary rounded-circle text-uppercase\" style=\"font-size: 20px; font-weight: 600;\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "displayName", [], "any", false, false, false, 51), 0, 1), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 51), 0, 1))), "html", null, true);
            yield "</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"team-content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 member-name fw-bold\" style=\"font-size: 15px;\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "displayName", [], "any", false, false, false, 54), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted member-designation mb-0\" style=\"font-size: 13px;\">";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
      // FIXME: Handle edge cases
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"row text-muted text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-6 border-end\" style=\"border-color: rgba(0,0,0,0.08) !important;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 fw-bold\" style=\"font-size: 18px;\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 63)), "html", null, true);
            yield "</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Roles</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 68
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 68)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 69
                yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Active</span>
\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 71
                yield "\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Inactive</span>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 73
            yield "\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Status</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col\">
\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 80));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 81
                yield "\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary mb-1\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["role"], "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['role'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
            $context['_iterated'] = true;
        }
        // line 89
        if (!$context['_iterated']) {
            // line 90
            yield "\t\t<div class=\"col-12\">
\t\t\t<div class=\"text-center py-5 text-muted\">
\t\t\t\t<i class=\"ri-user-line fs-1\"></i>
\t\t\t\t<p class=\"mt-2 mb-0\">No users found.</p>
\t\t\t</div>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['user'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "</div>
<div class=\"py-4 mt-4 text-center ";
        // line 98
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 98, $this->source); })())) > 0)) ? ("d-none") : (""));
        yield "\" id=\"noresult\">
\t<lord-icon src=\"https://cdn.lordicon.com/msoeawqm.json\" trigger=\"loop\" colors=\"primary:#405189,secondary:#0ab39c\" style=\"width:72px;height:72px\"></lord-icon>
\t<h5 class=\"mt-4\">No users match your search.</h5>
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
        return "admin/users/_users_list.html.twig";
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
        return array (  221 => 98,  218 => 97,  206 => 90,  204 => 89,  194 => 83,  185 => 81,  181 => 80,  172 => 73,  168 => 71,  164 => 69,  162 => 68,  154 => 63,  143 => 55,  139 => 54,  133 => 51,  124 => 44,  113 => 36,  107 => 35,  104 => 34,  102 => 33,  95 => 29,  89 => 26,  83 => 25,  74 => 19,  56 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"team-list grid-view-filter row\" id=\"team-member-list\">
\t{% for user in users %}
\t\t<div class=\"col member-card\">
\t\t\t<div class=\"card team-box\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04); overflow: hidden;\">
\t\t\t\t<div class=\"team-cover\">
\t\t\t\t\t<div style=\"height:120px;width:100%;background:linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);\"></div>
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
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"{{ path('app_admin_users_edit', { id: user.id }) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-pencil-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tModify user
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_admin_users_toggle_active', { id: user.id }) }}\" class=\"d-inline\" id=\"form-toggle-{{ user.id }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('user_toggle_' ~ user.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-user-follow-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ user.isActive ? 'Deactivate' : 'Activate' }}
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% if user.id != app.user.id %}
\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_admin_users_delete', { id: user.id }) }}\" class=\"d-inline\" id=\"form-delete-{{ user.id }}\" onsubmit=\"return confirm('Delete this user?');\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('user_delete_' ~ user.id) }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"dropdown-item text-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"ri-delete-bin-5-line me-2 align-bottom text-muted\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tDelete
\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"team-profile-img\">
\t\t\t\t\t\t\t\t<div class=\"avatar-lg img-thumbnail rounded-circle flex-shrink-0\" style=\"border-radius: 50% !important;\">
\t\t\t\t\t\t\t\t\t<div class=\"avatar-title border bg-light text-primary rounded-circle text-uppercase\" style=\"font-size: 20px; font-weight: 600;\">{{ user.displayName|slice(0,1)|default(user.email|slice(0,1))|upper }}</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"team-content\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 member-name fw-bold\" style=\"font-size: 15px;\">{{ user.displayName }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted member-designation mb-0\" style=\"font-size: 13px;\">{{ user.email }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
      // FIXME: Handle edge cases
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-4 col\">
\t\t\t\t\t\t\t<div class=\"row text-muted text-center\">
\t\t\t\t\t\t\t\t<div class=\"col-6 border-end\" style=\"border-color: rgba(0,0,0,0.08) !important;\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1 fw-bold\" style=\"font-size: 18px;\">{{ user.roles|length }}</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Roles</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t\t\t\t\t<h5 class=\"mb-1\">
\t\t\t\t\t\t\t\t\t\t{% if user.isActive %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Active</span>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"badge bg-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Inactive</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</h5>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Status</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-lg-2 col\">
\t\t\t\t\t\t\t<div class=\"text-end\">
\t\t\t\t\t\t\t\t{% for role in user.roles %}
\t\t\t\t\t\t\t\t\t<span class=\"badge bg-primary mb-1\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">{{ role }}</span>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t{% else %}
\t\t<div class=\"col-12\">
\t\t\t<div class=\"text-center py-5 text-muted\">
\t\t\t\t<i class=\"ri-user-line fs-1\"></i>
\t\t\t\t<p class=\"mt-2 mb-0\">No users found.</p>
\t\t\t</div>
\t\t</div>
\t{% endfor %}
</div>
<div class=\"py-4 mt-4 text-center {{ users|length > 0 ? 'd-none' : '' }}\" id=\"noresult\">
\t<lord-icon src=\"https://cdn.lordicon.com/msoeawqm.json\" trigger=\"loop\" colors=\"primary:#405189,secondary:#0ab39c\" style=\"width:72px;height:72px\"></lord-icon>
\t<h5 class=\"mt-4\">No users match your search.</h5>
</div>
", "admin/users/_users_list.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/admin/users/_users_list.html.twig");
    }
}

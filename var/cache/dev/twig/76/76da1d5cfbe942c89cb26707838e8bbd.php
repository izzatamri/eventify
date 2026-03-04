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

/* admin/users/index.html.twig */
class __TwigTemplate_07425c9f94378a0c70416a271bc5501a extends Template
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
            'page_scripts' => [$this, 'block_page_scripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "admin/layout_velzon.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/index.html.twig"));

        $this->parent = $this->load("admin/layout_velzon.html.twig", 1);
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

        yield "Users";
        
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

        yield "Users";
        
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

        yield "<li class=\"breadcrumb-item active\">Users</li>";
        
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
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", ["success"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            yield "\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t";
            // line 10
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "flashes", ["error"], "method", false, false, false, 14));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 15
            yield "\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t</div>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
\t";
        // line 22
        yield "\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.25rem;\">
\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"searchMemberList\" placeholder=\"Search by name or email...\" value=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("search_q", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["search_q"]) || array_key_exists("search_q", $context) ? $context["search_q"] : (function () { throw new RuntimeError('Variable "search_q" does not exist.', 27, $this->source); })()), "")) : ("")), "html", null, true);
        yield "\" autocomplete=\"off\" style=\"border-radius: 8px; padding: 0.5rem 2.5rem 0.5rem 1rem;\">
\t\t\t\t\t\t<i class=\"ri-search-line search-icon\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-auto ms-auto\">
\t\t\t\t\t<div class=\"list-grid-nav hstack gap-2\">
\t\t\t\t\t\t<a href=\"";
        // line 33
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_export_csv");
        yield "\" class=\"btn btn-success\" style=\"border-radius: 8px; padding: 0.5rem 1rem;\">
\t\t\t\t\t\t\t<i class=\"ri-file-excel-2-line me-1 align-bottom\"></i>Export CSV
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_export_pdf");
        yield "\" class=\"btn btn-danger\" style=\"border-radius: 8px; padding: 0.5rem 1rem;\">
\t\t\t\t\t\t\t<i class=\"ri-file-pdf-line me-1 align-bottom\"></i>Export PDF
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_new");
        yield "\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.25rem; font-weight: 600;\">
\t\t\t\t\t\t\t<i class=\"ri-user-add-line me-1 align-bottom\"></i>Add User
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" style=\"border-radius: 8px; overflow: hidden;\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view-button\" class=\"btn btn-outline-secondary active\" title=\"Grid\" style=\"padding: 0.5rem 0.75rem;\"><i class=\"ri-grid-fill\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view-button\" class=\"btn btn-outline-secondary\" title=\"List\" style=\"padding: 0.5rem 0.75rem;\"><i class=\"ri-list-unordered\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div id=\"teamlist\">
\t\t\t\t";
        // line 55
        yield from $this->load("admin/users/_users_list.html.twig", 55)->unwrap()->yield(CoreExtension::merge($context, ["users" => (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 55, $this->source); })())]));
        // line 56
        yield "\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_scripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_scripts"));

        // line 62
        yield "\t<script>
\t\t// Grid / List view toggle (same behavior as Velzon team.init.js)
\t\t(function () {
\t\t\tvar list = document.querySelectorAll('.team-list');
\t\t\tvar gridBtn = document.getElementById('grid-view-button');
\t\t\tvar listBtn = document.getElementById('list-view-button');
\t\t\tif (list.length && gridBtn && listBtn) {
\t\t\t\tfunction setView(isList) {
\t\t\t\t\tif (isList) {
\t\t\t\t\t\tlistBtn.classList.add('active');
\t\t\t\t\t\tgridBtn.classList.remove('active');
\t\t\t\t\t\tlist.forEach(function (el) {
\t\t\t\t\t\t\tel.classList.add('list-view-filter');
\t\t\t\t\t\t\tel.classList.remove('grid-view-filter');
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tgridBtn.classList.add('active');
\t\t\t\t\t\tlistBtn.classList.remove('active');
\t\t\t\t\t\tlist.forEach(function (el) {
\t\t\t\t\t\t\tel.classList.remove('list-view-filter');
\t\t\t\t\t\t\tel.classList.add('grid-view-filter');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tgridBtn.addEventListener('click', function () { setView(false); });
\t\t\t\tlistBtn.addEventListener('click', function () { setView(true); });
\t\t\t}

\t\t\t// Search via AJAX
\t\t\tvar searchEl = document.getElementById('searchMemberList');
\t\t\tvar teamlist = document.getElementById('teamlist');
\t\t\tif (searchEl && teamlist) {
\t\t\t\tvar debounceTimer;
\t\t\t\tfunction debounce(fn, ms) {
\t\t\t\t\treturn function () {
\t\t\t\t\t\tclearTimeout(debounceTimer);
\t\t\t\t\t\tvar self = this, args = arguments;
\t\t\t\t\t\tdebounceTimer = setTimeout(function () { fn.apply(self, args); }, 320);
\t\t\t\t\t};
\t\t\t\t}
\t\t\t\tfunction loadUsers() {
\t\t\t\t\tvar q = searchEl.value.trim();
\t\t\t\t\tvar url = (window.location.pathname || '/admin/users') + (q ? '?q=' + encodeURIComponent(q) : '');
\t\t\t\t\tteamlist.style.opacity = '0.7';
\t\t\t\t\tteamlist.style.pointerEvents = 'none';
\t\t\t\t\tfetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
\t\t\t\t\t\t.then(function (r) { return r.text(); })
\t\t\t\t\t\t.then(function (html) {
\t\t\t\t\t\t\tteamlist.innerHTML = html;
\t\t\t\t\t\t\thistory.replaceState(null, '', url);
\t\t\t\t\t\t})
\t\t\t\t\t\t.catch(function () {
\t\t\t\t\t\t\tteamlist.innerHTML = '<div class=\"col-12 text-center py-5\"><p class=\"text-danger\">Error loading users.</p></div>';
\t\t\t\t\t\t})
\t\t\t\t\t\t.finally(function () {
\t\t\t\t\t\t\tteamlist.style.opacity = '';
\t\t\t\t\t\t\tteamlist.style.pointerEvents = '';
\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tsearchEl.addEventListener('input', debounce(loadUsers, 320));
\t\t\t}
\t\t})();
\t</script>
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
        return "admin/users/index.html.twig";
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
        return array (  264 => 62,  251 => 61,  237 => 56,  235 => 55,  216 => 39,  210 => 36,  204 => 33,  195 => 27,  188 => 22,  185 => 20,  175 => 16,  172 => 15,  167 => 14,  157 => 10,  154 => 9,  149 => 8,  136 => 7,  113 => 5,  90 => 4,  67 => 3,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout_velzon.html.twig' %}

{% block title %}Users{% endblock %}
{% block page_heading %}Users{% endblock %}
{% block page_breadcrumb %}<li class=\"breadcrumb-item active\">Users</li>{% endblock %}

{% block content %}
\t{% for message in app.flashes('success') %}
\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t{{ message }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t</div>
\t{% endfor %}
\t{% for message in app.flashes('error') %}
\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t{{ message }}
\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
\t\t</div>
\t{% endfor %}

\t{# Toolbar: search + grid/list toggle #}
\t<div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
\t\t<div class=\"card-body\" style=\"padding: 1.25rem;\">
\t\t\t<div class=\"row g-3 align-items-center\">
\t\t\t\t<div class=\"col-sm-4\">
\t\t\t\t\t<div class=\"search-box\">
\t\t\t\t\t\t<input type=\"text\" class=\"form-control\" id=\"searchMemberList\" placeholder=\"Search by name or email...\" value=\"{{ search_q|default('') }}\" autocomplete=\"off\" style=\"border-radius: 8px; padding: 0.5rem 2.5rem 0.5rem 1rem;\">
\t\t\t\t\t\t<i class=\"ri-search-line search-icon\"></i>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-sm-auto ms-auto\">
\t\t\t\t\t<div class=\"list-grid-nav hstack gap-2\">
\t\t\t\t\t\t<a href=\"{{ path('app_admin_users_export_csv') }}\" class=\"btn btn-success\" style=\"border-radius: 8px; padding: 0.5rem 1rem;\">
\t\t\t\t\t\t\t<i class=\"ri-file-excel-2-line me-1 align-bottom\"></i>Export CSV
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app_admin_users_export_pdf') }}\" class=\"btn btn-danger\" style=\"border-radius: 8px; padding: 0.5rem 1rem;\">
\t\t\t\t\t\t\t<i class=\"ri-file-pdf-line me-1 align-bottom\"></i>Export PDF
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"{{ path('app_admin_users_new') }}\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.25rem; font-weight: 600;\">
\t\t\t\t\t\t\t<i class=\"ri-user-add-line me-1 align-bottom\"></i>Add User
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<div class=\"btn-group\" role=\"group\" style=\"border-radius: 8px; overflow: hidden;\">
\t\t\t\t\t\t\t<button type=\"button\" id=\"grid-view-button\" class=\"btn btn-outline-secondary active\" title=\"Grid\" style=\"padding: 0.5rem 0.75rem;\"><i class=\"ri-grid-fill\"></i></button>
\t\t\t\t\t\t\t<button type=\"button\" id=\"list-view-button\" class=\"btn btn-outline-secondary\" title=\"List\" style=\"padding: 0.5rem 0.75rem;\"><i class=\"ri-list-unordered\"></i></button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"row\">
\t\t<div class=\"col-lg-12\">
\t\t\t<div id=\"teamlist\">
\t\t\t\t{% include 'admin/users/_users_list.html.twig' with { users: users } %}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}

{% block page_scripts %}
\t<script>
\t\t// Grid / List view toggle (same behavior as Velzon team.init.js)
\t\t(function () {
\t\t\tvar list = document.querySelectorAll('.team-list');
\t\t\tvar gridBtn = document.getElementById('grid-view-button');
\t\t\tvar listBtn = document.getElementById('list-view-button');
\t\t\tif (list.length && gridBtn && listBtn) {
\t\t\t\tfunction setView(isList) {
\t\t\t\t\tif (isList) {
\t\t\t\t\t\tlistBtn.classList.add('active');
\t\t\t\t\t\tgridBtn.classList.remove('active');
\t\t\t\t\t\tlist.forEach(function (el) {
\t\t\t\t\t\t\tel.classList.add('list-view-filter');
\t\t\t\t\t\t\tel.classList.remove('grid-view-filter');
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\tgridBtn.classList.add('active');
\t\t\t\t\t\tlistBtn.classList.remove('active');
\t\t\t\t\t\tlist.forEach(function (el) {
\t\t\t\t\t\t\tel.classList.remove('list-view-filter');
\t\t\t\t\t\t\tel.classList.add('grid-view-filter');
\t\t\t\t\t\t});
\t\t\t\t\t}
\t\t\t\t}
\t\t\t\tgridBtn.addEventListener('click', function () { setView(false); });
\t\t\t\tlistBtn.addEventListener('click', function () { setView(true); });
\t\t\t}

\t\t\t// Search via AJAX
\t\t\tvar searchEl = document.getElementById('searchMemberList');
\t\t\tvar teamlist = document.getElementById('teamlist');
\t\t\tif (searchEl && teamlist) {
\t\t\t\tvar debounceTimer;
\t\t\t\tfunction debounce(fn, ms) {
\t\t\t\t\treturn function () {
\t\t\t\t\t\tclearTimeout(debounceTimer);
\t\t\t\t\t\tvar self = this, args = arguments;
\t\t\t\t\t\tdebounceTimer = setTimeout(function () { fn.apply(self, args); }, 320);
\t\t\t\t\t};
\t\t\t\t}
\t\t\t\tfunction loadUsers() {
\t\t\t\t\tvar q = searchEl.value.trim();
\t\t\t\t\tvar url = (window.location.pathname || '/admin/users') + (q ? '?q=' + encodeURIComponent(q) : '');
\t\t\t\t\tteamlist.style.opacity = '0.7';
\t\t\t\t\tteamlist.style.pointerEvents = 'none';
\t\t\t\t\tfetch(url, { headers: { 'X-Requested-With': 'XMLHttpRequest' } })
\t\t\t\t\t\t.then(function (r) { return r.text(); })
\t\t\t\t\t\t.then(function (html) {
\t\t\t\t\t\t\tteamlist.innerHTML = html;
\t\t\t\t\t\t\thistory.replaceState(null, '', url);
\t\t\t\t\t\t})
\t\t\t\t\t\t.catch(function () {
\t\t\t\t\t\t\tteamlist.innerHTML = '<div class=\"col-12 text-center py-5\"><p class=\"text-danger\">Error loading users.</p></div>';
\t\t\t\t\t\t})
\t\t\t\t\t\t.finally(function () {
\t\t\t\t\t\t\tteamlist.style.opacity = '';
\t\t\t\t\t\t\tteamlist.style.pointerEvents = '';
\t\t\t\t\t\t});
\t\t\t\t}
\t\t\t\tsearchEl.addEventListener('input', debounce(loadUsers, 320));
\t\t\t}
\t\t})();
\t</script>
{% endblock %}
", "admin/users/index.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\admin\\users\\index.html.twig");
    }
}

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

/* admin/users/form.html.twig */
class __TwigTemplate_59aab7ece29af2b49d0f535b2bab18af extends Template
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
        return "admin/layout_velzon.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/users/form.html.twig"));

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

        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 3, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Add user") : ("Edit user"));
        
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

        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 4, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Add user") : ("Edit user"));
        
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

        // line 6
        yield "    <li class=\"breadcrumb-item\"><a href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_index");
        yield "\">Users</a></li>
    <li class=\"breadcrumb-item active\">";
        // line 7
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 7, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Add user") : ("Edit user"));
        yield "</li>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["error"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        yield "
    <div class=\"row\">
        <div class=\"col-xxl-3\">
            <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                <div class=\"card-body\" style=\"padding: 1.5rem;\">
                    <div class=\"text-center\">
                        <div class=\"position-relative d-inline-block\">
                            <div class=\"avatar-lg img-thumbnail rounded-circle\">
                                <div class=\"avatar-title bg-primary-subtle text-primary rounded-circle fs-2 text-uppercase\">
                                    ";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::default(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "displayName", [], "any", false, false, false, 26), 0, 1), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 0, 1))), "html", null, true);
        yield "
                                </div>
                            </div>
                        </div>
                        <h5 class=\"mt-3 mb-1 fw-bold\" style=\"font-size: 16px;\">";
        // line 30
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "displayName", [], "any", false, false, false, 30)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 30, $this->source); })()), "displayName", [], "any", false, false, false, 30), "html", null, true)) : ("New user"));
        yield "</h5>
                        <p class=\"text-muted mb-0\" style=\"font-size: 13px;\">";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "</p>
                        <div class=\"mt-3\">
                            ";
        // line 33
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "isActive", [], "any", false, false, false, 33)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 34
            yield "                                <span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Active</span>
                            ";
        } else {
            // line 36
            yield "                                <span class=\"badge bg-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Inactive</span>
                            ";
        }
        // line 38
        yield "                        </div>
                        ";
        // line 39
        if (( !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 39, $this->source); })()) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 39, $this->source); })()), "createdAt", [], "any", false, false, false, 39))) {
            // line 40
            yield "                            // NOTE: Consider caching this
                            <div class=\"mt-3 text-muted\" style=\"font-size: 12px;\">
                                Joined ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "createdAt", [], "any", false, false, false, 42), "M d, Y"), "html", null, true);
            yield "
                            </div>
                        ";
        }
        // line 45
        yield "                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-9\">
            <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                <div class=\"card-header\" style=\"padding: 1.25rem;\">
                    <ul class=\"nav nav-tabs-custom rounded card-header-tabs border-bottom-0\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#personalDetails\" role=\"tab\">
                                <i class=\"fas fa-home\"></i> Personal Details
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#changePassword\" role=\"tab\">
                                <i class=\"far fa-user\"></i> ";
        // line 61
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 61, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Password") : ("Change Password"));
        yield "
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"card-body\" style=\"padding: 1.5rem;\">
                    ";
        // line 67
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), 'form_start');
        yield "
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"personalDetails\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "firstName", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
                                        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "firstName", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "First name", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
                                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "firstName", [], "any", false, false, false, 75), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "lastName", [], "any", false, false, false, 80), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
                                        ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "lastName", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Last name", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
                                        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "lastName", [], "any", false, false, false, 82), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "email", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
                                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "email", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "user@example.com", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
                                        ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "email", [], "any", false, false, false, 89), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "isActive", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "form-label fw-semibold d-block", "style" => "font-size: 14px;"]]);
        yield "
                                        <div class=\"form-check form-switch\">
                                            // TODO: Add error handling
                                            ";
        // line 97
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "isActive", [], "any", false, false, false, 97), 'widget', ["attr" => ["class" => "form-check-input", "style" => "cursor: pointer;"]]);
        yield "
                                        </div>
                                        ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "isActive", [], "any", false, false, false, 99), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"mb-3\">
                                        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "roles", [], "any", false, false, false, 104), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
                                        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "roles", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control", "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
                                        ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "roles", [], "any", false, false, false, 106), 'errors');
        yield "
                                        <div class=\"form-text\" style=\"font-size: 12px;\">Select one or more roles for this user.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"changePassword\" role=\"tabpanel\">
                            <div class=\"row g-2\">
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), "plainPassword", [], "any", false, false, false, 117), "first", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
                                        ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "plainPassword", [], "any", false, false, false, 118), "first", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control", "placeholder" => (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 118, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Password") : ("New password")), "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
                                        ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "plainPassword", [], "any", false, false, false, 119), "first", [], "any", false, false, false, 119), 'errors');
        yield "
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "plainPassword", [], "any", false, false, false, 124), "second", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "form-label fw-semibold", "style" => "font-size: 14px;"]]);
        yield "
                                        ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "plainPassword", [], "any", false, false, false, 125), "second", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "form-control", "placeholder" => (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 125, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Repeat password") : ("Repeat new password")), "style" => "border-radius: 8px; padding: 0.5rem 0.75rem;"]]);
        yield "
                                        ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 126, $this->source); })()), "plainPassword", [], "any", false, false, false, 126), "second", [], "any", false, false, false, 126), 'errors');
        yield "
                                    </div>
                                // Improved error handling
                                </div>
                                ";
        // line 130
        if ((($tmp =  !(isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 130, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 131
            yield "                                    <div class=\"col-lg-12\">
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Leave password fields empty to keep the current password.</p>
                                    </div>
                                ";
        }
        // line 135
        yield "                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4 d-flex justify-content-between\">
                        <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_index");
        yield "\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem;\">Cancel</a>
                        <button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\">
                            <i class=\"ri-save-line me-1\"></i>";
        // line 142
        yield (((($tmp = (isset($context["is_new"]) || array_key_exists("is_new", $context) ? $context["is_new"] : (function () { throw new RuntimeError('Variable "is_new" does not exist.', 142, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("Create User") : ("Save Changes"));
        yield "
                        </button>
                    </div>

                    ";
        // line 146
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), 'rest');
        yield "
                    ";
        // line 147
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), 'form_end');
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
        return "admin/users/form.html.twig";
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
        return array (  413 => 147,  409 => 146,  402 => 142,  397 => 140,  390 => 135,  384 => 131,  382 => 130,  375 => 126,  371 => 125,  367 => 124,  359 => 119,  355 => 118,  351 => 117,  337 => 106,  333 => 105,  329 => 104,  321 => 99,  316 => 97,  310 => 94,  302 => 89,  298 => 88,  294 => 87,  286 => 82,  282 => 81,  278 => 80,  270 => 75,  266 => 74,  262 => 73,  253 => 67,  244 => 61,  226 => 45,  220 => 42,  216 => 40,  214 => 39,  211 => 38,  207 => 36,  203 => 34,  201 => 33,  196 => 31,  192 => 30,  185 => 26,  174 => 17,  164 => 13,  161 => 12,  156 => 11,  143 => 10,  130 => 7,  125 => 6,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout_velzon.html.twig' %}

{% block title %}{{ is_new ? 'Add user' : 'Edit user' }}{% endblock %}
{% block page_heading %}{{ is_new ? 'Add user' : 'Edit user' }}{% endblock %}
{% block page_breadcrumb %}
    <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_users_index') }}\">Users</a></li>
    <li class=\"breadcrumb-item active\">{{ is_new ? 'Add user' : 'Edit user' }}</li>
{% endblock %}

{% block content %}
    {% for message in app.flashes('error') %}
        <div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
            {{ message }}
            <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
        </div>
    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xxl-3\">
            <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                <div class=\"card-body\" style=\"padding: 1.5rem;\">
                    <div class=\"text-center\">
                        <div class=\"position-relative d-inline-block\">
                            <div class=\"avatar-lg img-thumbnail rounded-circle\">
                                <div class=\"avatar-title bg-primary-subtle text-primary rounded-circle fs-2 text-uppercase\">
                                    {{ user.displayName|slice(0,1)|default(user.email|slice(0,1))|upper }}
                                </div>
                            </div>
                        </div>
                        <h5 class=\"mt-3 mb-1 fw-bold\" style=\"font-size: 16px;\">{{ user.displayName ?: 'New user' }}</h5>
                        <p class=\"text-muted mb-0\" style=\"font-size: 13px;\">{{ user.email }}</p>
                        <div class=\"mt-3\">
                            {% if user.isActive %}
                                <span class=\"badge bg-success\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Active</span>
                            {% else %}
                                <span class=\"badge bg-danger\" style=\"border-radius: 6px; padding: 0.35rem 0.65rem; font-size: 11px;\">Inactive</span>
                            {% endif %}
                        </div>
                        {% if not is_new and user.createdAt %}
                            // NOTE: Consider caching this
                            <div class=\"mt-3 text-muted\" style=\"font-size: 12px;\">
                                Joined {{ user.createdAt|date('M d, Y') }}
                            </div>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"col-xxl-9\">
            <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                <div class=\"card-header\" style=\"padding: 1.25rem;\">
                    <ul class=\"nav nav-tabs-custom rounded card-header-tabs border-bottom-0\" role=\"tablist\">
                        <li class=\"nav-item\">
                            <a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#personalDetails\" role=\"tab\">
                                <i class=\"fas fa-home\"></i> Personal Details
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#changePassword\" role=\"tab\">
                                <i class=\"far fa-user\"></i> {{ is_new ? 'Password' : 'Change Password' }}
                            </a>
                        </li>
                    </ul>
                </div>
                <div class=\"card-body\" style=\"padding: 1.5rem;\">
                    {{ form_start(form) }}
                    <div class=\"tab-content\">
                        <div class=\"tab-pane active\" id=\"personalDetails\" role=\"tabpanel\">
                            <div class=\"row\">
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.firstName, null, {'label_attr': {'class': 'form-label fw-semibold', 'style': 'font-size: 14px;'}}) }}
                                        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder': 'First name', 'style': 'border-radius: 8px; padding: 0.5rem 0.75rem;'}}) }}
                                        {{ form_errors(form.firstName) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.lastName, null, {'label_attr': {'class': 'form-label fw-semibold', 'style': 'font-size: 14px;'}}) }}
                                        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder': 'Last name', 'style': 'border-radius: 8px; padding: 0.5rem 0.75rem;'}}) }}
                                        {{ form_errors(form.lastName) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.email, null, {'label_attr': {'class': 'form-label fw-semibold', 'style': 'font-size: 14px;'}}) }}
                                        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder': 'user@example.com', 'style': 'border-radius: 8px; padding: 0.5rem 0.75rem;'}}) }}
                                        {{ form_errors(form.email) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.isActive, null, {'label_attr': {'class': 'form-label fw-semibold d-block', 'style': 'font-size: 14px;'}}) }}
                                        <div class=\"form-check form-switch\">
                                            // TODO: Add error handling
                                            {{ form_widget(form.isActive, {'attr': {'class': 'form-check-input', 'style': 'cursor: pointer;'}}) }}
                                        </div>
                                        {{ form_errors(form.isActive) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.roles, null, {'label_attr': {'class': 'form-label fw-semibold', 'style': 'font-size: 14px;'}}) }}
                                        {{ form_widget(form.roles, {'attr': {'class': 'form-control', 'style': 'border-radius: 8px; padding: 0.5rem 0.75rem;'}}) }}
                                        {{ form_errors(form.roles) }}
                                        <div class=\"form-text\" style=\"font-size: 12px;\">Select one or more roles for this user.</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"tab-pane\" id=\"changePassword\" role=\"tabpanel\">
                            <div class=\"row g-2\">
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.plainPassword.first, null, {'label_attr': {'class': 'form-label fw-semibold', 'style': 'font-size: 14px;'}}) }}
                                        {{ form_widget(form.plainPassword.first, {'attr': {'class': 'form-control', 'placeholder': is_new ? 'Password' : 'New password', 'style': 'border-radius: 8px; padding: 0.5rem 0.75rem;'}}) }}
                                        {{ form_errors(form.plainPassword.first) }}
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"mb-3\">
                                        {{ form_label(form.plainPassword.second, null, {'label_attr': {'class': 'form-label fw-semibold', 'style': 'font-size: 14px;'}}) }}
                                        {{ form_widget(form.plainPassword.second, {'attr': {'class': 'form-control', 'placeholder': is_new ? 'Repeat password' : 'Repeat new password', 'style': 'border-radius: 8px; padding: 0.5rem 0.75rem;'}}) }}
                                        {{ form_errors(form.plainPassword.second) }}
                                    </div>
                                // Improved error handling
                                </div>
                                {% if not is_new %}
                                    <div class=\"col-lg-12\">
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Leave password fields empty to keep the current password.</p>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </div>

                    <div class=\"mt-4 d-flex justify-content-between\">
                        <a href=\"{{ path('app_admin_users_index') }}\" class=\"btn btn-outline-secondary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem;\">Cancel</a>
                        <button type=\"submit\" class=\"btn btn-primary\" style=\"border-radius: 8px; padding: 0.5rem 1.5rem; font-weight: 600;\">
                            <i class=\"ri-save-line me-1\"></i>{{ is_new ? 'Create User' : 'Save Changes' }}
                        </button>
                    </div>

                    {{ form_rest(form) }}
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

", "admin/users/form.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\admin\\users\\form.html.twig");
    }
}

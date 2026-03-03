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

/* security/reset_password_confirm.html.twig */
class __TwigTemplate_4996f924e1cbb6156f362f5d6aa07125 extends Template
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
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password_confirm.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password_confirm.html.twig"));

        $this->parent = $this->load("base.html.twig", 1);
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

        yield "Set New Password - Eventify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "
<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Create New Password</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Enter your new password to secure your account</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-4 col-md-6\">
            <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-3\">
                        <div class=\"mb-2\">
                            <i class=\"fa-solid fa-lock-open\" style=\"font-size: 36px; color: #198754;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Set New Password</h2>
                        <p class=\"text-muted mb-0 small\">Your new password must be different from previous passwords</p>
                    </div>

                    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "flashes", ["success"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 32
            yield "                        <div class=\"alert alert-success border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-check-circle me-2\"></i>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "flashes", ["error"], "method", false, false, false, 36));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 37
            yield "                        <div class=\"alert alert-danger border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-exclamation-circle me-2\"></i>";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "
                    ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-3\">
                            <label for=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "plainPassword", [], "any", false, false, false, 44), "first", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">New Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                // TODO: Add unit tests
                                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "plainPassword", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control border-start-0 border-end-0 bg-light password-input", "style" => "border-left: 0; border-right: 0;", "placeholder" => "Enter new password"]]);
        // line 56
        yield "
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "plainPassword", [], "any", false, false, false, 61), "first", [], "any", false, false, false, 61), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "plainPassword", [], "any", false, false, false, 65), "second", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "id", [], "any", false, false, false, 65), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Confirm New Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "plainPassword", [], "any", false, false, false, 70), "second", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control border-start-0 border-end-0 bg-light password-input", "style" => "border-left: 0; border-right: 0;", "placeholder" => "Confirm new password"]]);
        // line 76
        yield "
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            ";
        // line 81
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "plainPassword", [], "any", false, false, false, 81), "second", [], "any", false, false, false, 81), 'errors');
        yield "
                            ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "plainPassword", [], "any", false, false, false, 82), 'errors');
        yield "
                        </div>

                        <button class=\"btn btn-success w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-check me-2\"></i>Reset Password
                        </button>
                    ";
        // line 88
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), 'form_end');
        yield "

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary text-decoration-none fw-semibold\">Back to Sign In</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 99
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-muted text-decoration-none\">
                    <i class=\"fa-solid fa-arrow-left me-2\"></i>Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.password-toggle').forEach(function(btn) {
    btn.addEventListener('click', function() {
        const inputGroup = this.closest('.input-group');
        const input = inputGroup.querySelector('.password-input');
        const icon = this.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    });
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
        return "security/reset_password_confirm.html.twig";
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
        return array (  240 => 99,  230 => 92,  223 => 88,  214 => 82,  210 => 81,  203 => 76,  201 => 70,  193 => 65,  186 => 61,  179 => 56,  177 => 50,  168 => 44,  163 => 42,  160 => 41,  151 => 38,  148 => 37,  143 => 36,  134 => 33,  131 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Set New Password - Eventify{% endblock %}

{% block body %}

<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Create New Password</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Enter your new password to secure your account</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-4 col-md-6\">
            <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-3\">
                        <div class=\"mb-2\">
                            <i class=\"fa-solid fa-lock-open\" style=\"font-size: 36px; color: #198754;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Set New Password</h2>
                        <p class=\"text-muted mb-0 small\">Your new password must be different from previous passwords</p>
                    </div>

                    {% for message in app.flashes('success') %}
                        <div class=\"alert alert-success border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-check-circle me-2\"></i>{{ message }}
                        </div>
                    {% endfor %}
                    {% for message in app.flashes('error') %}
                        <div class=\"alert alert-danger border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-exclamation-circle me-2\"></i>{{ message }}
                        </div>
                    {% endfor %}

                    {{ form_start(form) }}
                        <div class=\"mb-3\">
                            <label for=\"{{ form.plainPassword.first.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">New Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                // TODO: Add unit tests
                                {{ form_widget(form.plainPassword.first, {
                                    'attr': {
                                        'class': 'form-control border-start-0 border-end-0 bg-light password-input',
                                        'style': 'border-left: 0; border-right: 0;',
                                        'placeholder': 'Enter new password'
                                    }
                                }) }}
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            {{ form_errors(form.plainPassword.first) }}
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"{{ form.plainPassword.second.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Confirm New Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                {{ form_widget(form.plainPassword.second, {
                                    'attr': {
                                        'class': 'form-control border-start-0 border-end-0 bg-light password-input',
                                        'style': 'border-left: 0; border-right: 0;',
                                        'placeholder': 'Confirm new password'
                                    }
                                }) }}
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            {{ form_errors(form.plainPassword.second) }}
                            {{ form_errors(form.plainPassword) }}
                        </div>

                        <button class=\"btn btn-success w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-check me-2\"></i>Reset Password
                        </button>
                    {{ form_end(form) }}

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            <a href=\"{{ path('app_login') }}\" class=\"text-primary text-decoration-none fw-semibold\">Back to Sign In</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"{{ path('app_home') }}\" class=\"text-muted text-decoration-none\">
                    <i class=\"fa-solid fa-arrow-left me-2\"></i>Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

<script>
document.querySelectorAll('.password-toggle').forEach(function(btn) {
    btn.addEventListener('click', function() {
        const inputGroup = this.closest('.input-group');
        const input = inputGroup.querySelector('.password-input');
        const icon = this.querySelector('i');
        if (input.type === 'password') {
            input.type = 'text';
            icon.classList.replace('fa-eye', 'fa-eye-slash');
        } else {
            input.type = 'password';
            icon.classList.replace('fa-eye-slash', 'fa-eye');
        }
    });
});
</script>
{% endblock %}
", "security/reset_password_confirm.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\security\\reset_password_confirm.html.twig");
    }
}

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

/* security/verify_email.html.twig */
class __TwigTemplate_e0d8b36574ba6122e48e9eb79c666de4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/verify_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/verify_email.html.twig"));

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

        yield "Verify Email - Eventify";
        
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
        yield "// NOTE: This might need refactoring
<style>
    .letter-spacing { letter-spacing: 0.5em; }
</style>

<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Verify Your Email</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Enter the verification code we sent to your email</p>
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
                            <i class=\"fa-solid fa-envelope-circle-check\" style=\"font-size: 36px; color: #0d6efd;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Enter Verification Code</h2>
                        <p class=\"text-muted mb-0 small\">We sent a 6-digit code to <strong>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["email"]) || array_key_exists("email", $context) ? $context["email"] : (function () { throw new RuntimeError('Variable "email" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "</strong></p>
                    </div>

                    ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["success"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            yield "                        <div class=\"alert alert-success border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-check-circle me-2\"></i>";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "flashes", ["error"], "method", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 41
            yield "                        <div class=\"alert alert-danger border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-exclamation-circle me-2\"></i>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "flashes", ["info"], "method", false, false, false, 45));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 46
            yield "                        <div class=\"alert alert-info border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-info-circle me-2\"></i>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        yield "
                    ";
        // line 51
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start');
        yield "
                        ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "_token", [], "any", false, false, false, 52), 'widget');
        yield "
                        
                        <div class=\"mb-3\">
                            <label for=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "code", [], "any", false, false, false, 55), "vars", [], "any", false, false, false, 55), "id", [], "any", false, false, false, 55), "html", null, true);
        yield "\" class=\"form-label fw-semibold small text-center d-block\" style=\"color: #374151;\">Verification Code</label>
                            ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "code", [], "any", false, false, false, 56), 'widget', ["attr" => ["class" => "form-control text-center letter-spacing", "style" => "border-radius: 8px;", "placeholder" => "000000", "maxlength" => "6"]]);
        // line 63
        yield "
                            ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "code", [], "any", false, false, false, 64), 'errors');
        yield "
                        </div>

                        <button class=\"btn btn-success w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-check me-2\"></i>Verify and Continue
                        </button>
                    ";
        // line 70
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), 'form_end');
        yield "

                    <div class=\"text-center\">
                        <p class=\"mb-1 text-muted small\">Didn't receive the code?</p>
                        <form action=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_verify_email_resend");
        yield "\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("verify_email_resend"), "html", null, true);
        yield "\">
                            <button type=\"submit\" class=\"btn btn-link p-0 small text-primary\">Send a new code</button>

                        // Improved error handling
                        </form>
                    </div>

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Already verified? 
                            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary text-decoration-none fw-semibold\">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-muted text-decoration-none\">
                    <i class=\"fa-solid fa-arrow-left me-2\"></i>Back to Home
                </a>
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
        return "security/verify_email.html.twig";
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
        return array (  249 => 92,  239 => 85,  226 => 75,  222 => 74,  215 => 70,  206 => 64,  203 => 63,  201 => 56,  197 => 55,  191 => 52,  187 => 51,  184 => 50,  175 => 47,  172 => 46,  167 => 45,  158 => 42,  155 => 41,  150 => 40,  141 => 37,  138 => 36,  134 => 35,  128 => 32,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Verify Email - Eventify{% endblock %}

{% block body %}
// NOTE: This might need refactoring
<style>
    .letter-spacing { letter-spacing: 0.5em; }
</style>

<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Verify Your Email</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Enter the verification code we sent to your email</p>
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
                            <i class=\"fa-solid fa-envelope-circle-check\" style=\"font-size: 36px; color: #0d6efd;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Enter Verification Code</h2>
                        <p class=\"text-muted mb-0 small\">We sent a 6-digit code to <strong>{{ email }}</strong></p>
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
                    {% for message in app.flashes('info') %}
                        <div class=\"alert alert-info border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-info-circle me-2\"></i>{{ message }}
                        </div>
                    {% endfor %}

                    {{ form_start(form) }}
                        {{ form_widget(form._token) }}
                        
                        <div class=\"mb-3\">
                            <label for=\"{{ form.code.vars.id }}\" class=\"form-label fw-semibold small text-center d-block\" style=\"color: #374151;\">Verification Code</label>
                            {{ form_widget(form.code, {
                                'attr': {
                                    'class': 'form-control text-center letter-spacing',
                                    'style': 'border-radius: 8px;',
                                    'placeholder': '000000',
                                    'maxlength': '6'
                                }
                            }) }}
                            {{ form_errors(form.code) }}
                        </div>

                        <button class=\"btn btn-success w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-check me-2\"></i>Verify and Continue
                        </button>
                    {{ form_end(form) }}

                    <div class=\"text-center\">
                        <p class=\"mb-1 text-muted small\">Didn't receive the code?</p>
                        <form action=\"{{ path('app_verify_email_resend') }}\" method=\"post\" class=\"d-inline\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('verify_email_resend') }}\">
                            <button type=\"submit\" class=\"btn btn-link p-0 small text-primary\">Send a new code</button>

                        // Improved error handling
                        </form>
                    </div>

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Already verified? 
                            <a href=\"{{ path('app_login') }}\" class=\"text-primary text-decoration-none fw-semibold\">Sign In</a>
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
{% endblock %}
", "security/verify_email.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/security/verify_email.html.twig");
    }
}

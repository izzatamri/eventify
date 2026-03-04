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

/* security/reset_password_request.html.twig */
class __TwigTemplate_20ae6d0c939a8d43acd23e783d0fd29e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password_request.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/reset_password_request.html.twig"));

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

        yield "Reset Password - Eventify";
        
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
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Reset Password</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Enter your email to receive password reset instructions</p>
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
                            <i class=\"fa-solid fa-key\" style=\"font-size: 36px; color: #ffc107;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Forgot Password?</h2>
                        <p class=\"text-muted mb-0 small\">No worries, we'll send you reset instructions</p>
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "email", [], "any", false, false, false, 44), "vars", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-envelope text-muted\"></i>
                                </span>
                                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "form-control border-start-0 bg-light", "style" => "border-radius: 0 8px 8px 0; border-left: 0;", "placeholder" => "your@email.com"]]);
        // line 55
        yield "
                            </div>
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "email", [], "any", false, false, false, 57), 'errors');
        yield "
                        </div>

                        <button class=\"btn btn-primary w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-paper-plane me-2\"></i>Send Reset Link
                        </button>
                    ";
        // line 63
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
        yield "

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Remember your password? 
                            <a href=\"";
        // line 68
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary text-decoration-none fw-semibold\">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 75
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
        return "security/reset_password_request.html.twig";
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
        return array (  209 => 75,  199 => 68,  191 => 63,  182 => 57,  178 => 55,  176 => 49,  168 => 44,  163 => 42,  160 => 41,  151 => 38,  148 => 37,  143 => 36,  134 => 33,  131 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Reset Password - Eventify{% endblock %}

{% block body %}

<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Reset Password</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Enter your email to receive password reset instructions</p>
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
                            <i class=\"fa-solid fa-key\" style=\"font-size: 36px; color: #ffc107;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Forgot Password?</h2>
                        <p class=\"text-muted mb-0 small\">No worries, we'll send you reset instructions</p>
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
                            <label for=\"{{ form.email.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-envelope text-muted\"></i>
                                </span>
                                {{ form_widget(form.email, {
                                    'attr': {
                                        'class': 'form-control border-start-0 bg-light',
                                        'style': 'border-radius: 0 8px 8px 0; border-left: 0;',
                                        'placeholder': 'your@email.com'
                                    }
                                }) }}
                            </div>
                            {{ form_errors(form.email) }}
                        </div>

                        <button class=\"btn btn-primary w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-paper-plane me-2\"></i>Send Reset Link
                        </button>
                    {{ form_end(form) }}

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Remember your password? 
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
", "security/reset_password_request.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\security\\reset_password_request.html.twig");
    }
}

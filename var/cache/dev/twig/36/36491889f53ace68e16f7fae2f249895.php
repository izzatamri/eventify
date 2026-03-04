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

/* security/login.html.twig */
class __TwigTemplate_0ee6682ce757b0f30642349728d47298 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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

        yield "Sign In - Eventify";
        
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
        yield "<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Welcome Back</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Sign in to access your Eventify account</p>
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
                            <i class=\"fa-solid fa-user-circle\" style=\"font-size: 36px; color: #0d6efd;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Sign In</h2>
                        <p class=\"text-muted mb-0 small\">Enter your credentials to continue</p>
                    </div>

                    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "flashes", ["success"], "method", false, false, false, 30));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 31
            yield "                        <div class=\"alert alert-success border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-check-circle me-2\"></i>";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        yield "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "flashes", ["error"], "method", false, false, false, 35));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 36
            yield "                        <div class=\"alert alert-danger border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-exclamation-circle me-2\"></i>";
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
        if ((($tmp = (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 40, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 41
            yield "                        <div class=\"alert alert-danger border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-exclamation-circle me-2\"></i>";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageKey", [], "any", false, false, false, 42), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 42, $this->source); })()), "messageData", [], "any", false, false, false, 42), "security"), "html", null, true);
            yield "
                        </div>
                    ";
        }
        // line 45
        yield "
                    <form method=\"post\" action=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

                        <div class=\"mb-3\">
                            <label for=\"login_email\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-envelope text-muted\"></i>
                                </span>
                                <input
                                    type=\"email\"
                                    class=\"form-control border-start-0 bg-light\"
                                    id=\"login_email\"
                                    name=\"_username\"
                                    value=\"";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 60, $this->source); })()), "html", null, true);
        yield "\"
                                    placeholder=\"your@email.com\"
                                    autocomplete=\"email\"
                                    required
                                    autofocus
                                    style=\"border-radius: 0 8px 8px 0; border-left: 0;\"
                                >
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                <label for=\"login_password\" class=\"form-label fw-semibold mb-0 small\" style=\"color: #374151;\">Password</label>
                                <a href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_password_reset_request");
        yield "\" class=\"text-primary text-decoration-none small\">Forgot password?</a>
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                <input
                                    type=\"password\"
                                    class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                    id=\"login_password\"
                                    name=\"_password\"
                                    placeholder=\"Enter your password\"
                                    autocomplete=\"current-password\"
                                    required
                                    style=\"border-left: 0; border-right: 0;\"
                                >
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                        </div>

                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"1\" id=\"remember_me\" style=\"border-radius: 5px;\">
                            <label class=\"form-check-label small\" for=\"remember_me\" style=\"color: #6b7280;\">
                                Keep me signed in
                            </label>
                        </div>

                        ";
        // line 102
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 102, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 103
            yield "                        <div class=\"mb-3\">
                            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 104, $this->source); })()), "html", null, true);
            yield "\"></div>
                        </div>
                        ";
        }
        // line 107
        yield "
                        <button class=\"btn btn-primary w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-arrow-right-to-bracket me-2\"></i>Sign In
                        </button>
                    </form>

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Don't have an account? 
                            <a href=\"";
        // line 116
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"text-primary text-decoration-none fw-semibold\">Create Account</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 123
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-muted text-decoration-none\">
                    <i class=\"fa-solid fa-arrow-left me-2\"></i>Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

// NOTE: Consider caching this
";
        // line 132
        if ((($tmp = (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 132, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 133
            yield "<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
";
        }
        // line 135
        yield "<script>
document.querySelector('.password-toggle')?.addEventListener('click', function() {
    const input = document.getElementById('login_password');
    const icon = this.querySelector('i');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
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
        return "security/login.html.twig";
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
        return array (  292 => 135,  288 => 133,  286 => 132,  274 => 123,  264 => 116,  253 => 107,  247 => 104,  244 => 103,  242 => 102,  210 => 73,  194 => 60,  178 => 47,  174 => 46,  171 => 45,  165 => 42,  162 => 41,  159 => 40,  150 => 37,  147 => 36,  142 => 35,  133 => 32,  130 => 31,  126 => 30,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Sign In - Eventify{% endblock %}

{% block body %}
<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Welcome Back</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Sign in to access your Eventify account</p>
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
                            <i class=\"fa-solid fa-user-circle\" style=\"font-size: 36px; color: #0d6efd;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Sign In</h2>
                        <p class=\"text-muted mb-0 small\">Enter your credentials to continue</p>
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
                    {% if error %}
                        <div class=\"alert alert-danger border-0\" role=\"alert\" style=\"border-radius: 10px;\">
                            <i class=\"fa-solid fa-exclamation-circle me-2\"></i>{{ error.messageKey|trans(error.messageData, 'security') }}
                        </div>
                    {% endif %}

                    <form method=\"post\" action=\"{{ path('app_login') }}\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

                        <div class=\"mb-3\">
                            <label for=\"login_email\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-envelope text-muted\"></i>
                                </span>
                                <input
                                    type=\"email\"
                                    class=\"form-control border-start-0 bg-light\"
                                    id=\"login_email\"
                                    name=\"_username\"
                                    value=\"{{ last_username }}\"
                                    placeholder=\"your@email.com\"
                                    autocomplete=\"email\"
                                    required
                                    autofocus
                                    style=\"border-radius: 0 8px 8px 0; border-left: 0;\"
                                >
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <div class=\"d-flex justify-content-between align-items-center mb-2\">
                                <label for=\"login_password\" class=\"form-label fw-semibold mb-0 small\" style=\"color: #374151;\">Password</label>
                                <a href=\"{{ path('app_password_reset_request') }}\" class=\"text-primary text-decoration-none small\">Forgot password?</a>
                            </div>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                <input
                                    type=\"password\"
                                    class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                    id=\"login_password\"
                                    name=\"_password\"
                                    placeholder=\"Enter your password\"
                                    autocomplete=\"current-password\"
                                    required
                                    style=\"border-left: 0; border-right: 0;\"
                                >
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                        </div>

                        <div class=\"form-check mb-3\">
                            <input class=\"form-check-input\" type=\"checkbox\" name=\"_remember_me\" value=\"1\" id=\"remember_me\" style=\"border-radius: 5px;\">
                            <label class=\"form-check-label small\" for=\"remember_me\" style=\"color: #6b7280;\">
                                Keep me signed in
                            </label>
                        </div>

                        {% if recaptcha_site_key %}
                        <div class=\"mb-3\">
                            <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\"></div>
                        </div>
                        {% endif %}

                        <button class=\"btn btn-primary w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-arrow-right-to-bracket me-2\"></i>Sign In
                        </button>
                    </form>

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Don't have an account? 
                            <a href=\"{{ path('app_register') }}\" class=\"text-primary text-decoration-none fw-semibold\">Create Account</a>
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

// NOTE: Consider caching this
{% if recaptcha_site_key %}
<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
{% endif %}
<script>
document.querySelector('.password-toggle')?.addEventListener('click', function() {
    const input = document.getElementById('login_password');
    const icon = this.querySelector('i');
    if (input.type === 'password') {
        input.type = 'text';
        icon.classList.replace('fa-eye', 'fa-eye-slash');
    } else {
        input.type = 'password';
        icon.classList.replace('fa-eye-slash', 'fa-eye');
    }
});
</script>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\security\\login.html.twig");
    }
}

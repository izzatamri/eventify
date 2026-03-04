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

/* security/register.html.twig */
class __TwigTemplate_33c5173462e21022547796f2b53a5406 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/register.html.twig"));

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

        yield "Create Account - Eventify";
        
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
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Join Eventify</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Create your account to start discovering amazing events</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-5 col-md-7\">
            <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-3\">
                        <div class=\"mb-2\">
                            <i class=\"fa-solid fa-user-plus\" style=\"font-size: 36px; color: #198754;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Create Account</h2>
                        <p class=\"text-muted mb-0 small\">Fill in your details to get started</p>
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
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), 'form_start');
        yield "
                        ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "_token", [], "any", false, false, false, 43), 'widget');
        yield "

                        <div class=\"mb-3\">
                            <label for=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "email", [], "any", false, false, false, 46), "vars", [], "any", false, false, false, 46), "id", [], "any", false, false, false, 46), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-envelope text-muted\"></i>
                                </span>
                                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control border-start-0 bg-light", "style" => "border-radius: 0 8px 8px 0; border-left: 0;", "placeholder" => "your@email.com"]]);
        // line 57
        yield "
                            </div>
                            ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'errors');
        yield "
                        </div>

                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label for=\"";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 64, $this->source); })()), "firstName", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">First Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                        <i class=\"fa-solid fa-user text-muted\"></i>
                                    </span>
                                    ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 69, $this->source); })()), "firstName", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control border-start-0 bg-light", "style" => "border-radius: 0 8px 8px 0; border-left: 0;", "placeholder" => "John"]]);
        // line 75
        yield "
                                </div>
                                ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 77, $this->source); })()), "firstName", [], "any", false, false, false, 77), 'errors');
        yield "
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), "lastName", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "id", [], "any", false, false, false, 80), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Last Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                        <i class=\"fa-solid fa-user text-muted\"></i>
                                    </span>
                                    ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 85, $this->source); })()), "lastName", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control border-start-0 bg-light", "style" => "border-radius: 0 8px 8px 0; border-left: 0;", "placeholder" => "Doe"]]);
        // line 91
        yield "
                                </div>
                                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 93, $this->source); })()), "lastName", [], "any", false, false, false, 93), 'errors');
        yield "
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "plainPassword", [], "any", false, false, false, 98), "first", [], "any", false, false, false, 98), "vars", [], "any", false, false, false, 98), "id", [], "any", false, false, false, 98), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 103, $this->source); })()), "plainPassword", [], "any", false, false, false, 103), "first", [], "any", false, false, false, 103), 'widget', ["attr" => ["class" => "form-control border-start-0 border-end-0 bg-light password-input", "style" => "border-left: 0; border-right: 0;", "placeholder" => "Enter password"]]);
        // line 109
        yield "
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" data-target=\"password1\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 114, $this->source); })()), "plainPassword", [], "any", false, false, false, 114), "first", [], "any", false, false, false, 114), 'errors');
        yield "
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 118, $this->source); })()), "plainPassword", [], "any", false, false, false, 118), "second", [], "any", false, false, false, 118), "vars", [], "any", false, false, false, 118), "id", [], "any", false, false, false, 118), "html", null, true);
        yield "\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Confirm Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 123, $this->source); })()), "plainPassword", [], "any", false, false, false, 123), "second", [], "any", false, false, false, 123), 'widget', ["attr" => ["class" => "form-control border-start-0 border-end-0 bg-light password-input", "style" => "border-left: 0; border-right: 0;", "placeholder" => "Confirm password"]]);
        // line 129
        yield "
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" data-target=\"password2\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 134, $this->source); })()), "plainPassword", [], "any", false, false, false, 134), "second", [], "any", false, false, false, 134), 'errors');
        yield "
                            ";
        // line 135
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 135, $this->source); })()), "plainPassword", [], "any", false, false, false, 135), 'errors');
        yield "
                        </div>
                        ";
        // line 137
        CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 137, $this->source); })()), "plainPassword", [], "any", false, false, false, 137), "setRendered", [true], "method", false, false, false, 137);
        // line 138
        yield "
                        ";
        // line 139
        if ((array_key_exists("recaptcha_site_key", $context) && (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 139, $this->source); })()))) {
            // line 140
            yield "                        <div class=\"mb-3\">
                            <div class=\"g-recaptcha\" data-sitekey=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 141, $this->source); })()), "html", null, true);
            yield "\"></div>
                        </div>
                        ";
        }
        // line 144
        yield "
                        <button class=\"btn btn-success w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-user-plus me-2\"></i>Create Account
                        </button>
                    ";
        // line 148
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 148, $this->source); })()), 'form_end');
        yield "

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Already have an account? 
                            <a href=\"";
        // line 153
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"text-primary text-decoration-none fw-semibold\">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class=\"text-center mt-4\">
                <a href=\"";
        // line 160
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-muted text-decoration-none\">
                    <i class=\"fa-solid fa-arrow-left me-2\"></i>Back to Home
                </a>
            </div>
        </div>
    </div>
</div>

";
        // line 168
        if ((array_key_exists("recaptcha_site_key", $context) && (isset($context["recaptcha_site_key"]) || array_key_exists("recaptcha_site_key", $context) ? $context["recaptcha_site_key"] : (function () { throw new RuntimeError('Variable "recaptcha_site_key" does not exist.', 168, $this->source); })()))) {
            // line 169
            yield "<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
";
        }
        // line 171
        yield "<script>
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
        return "security/register.html.twig";
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
        return array (  344 => 171,  340 => 169,  338 => 168,  327 => 160,  317 => 153,  309 => 148,  303 => 144,  297 => 141,  294 => 140,  292 => 139,  289 => 138,  287 => 137,  282 => 135,  278 => 134,  271 => 129,  269 => 123,  261 => 118,  254 => 114,  247 => 109,  245 => 103,  237 => 98,  229 => 93,  225 => 91,  223 => 85,  215 => 80,  209 => 77,  205 => 75,  203 => 69,  195 => 64,  187 => 59,  183 => 57,  181 => 51,  173 => 46,  167 => 43,  163 => 42,  160 => 41,  151 => 38,  148 => 37,  143 => 36,  134 => 33,  131 => 32,  127 => 31,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Create Account - Eventify{% endblock %}

{% block body %}

<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 80px 0 60px;\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">
                <h1 style=\"font-size: 42px; margin-bottom: 15px; color: #fff;\">Join Eventify</h1>
                <p style=\"font-size: 16px; color: rgba(255,255,255,0.9);\">Create your account to start discovering amazing events</p>
            </div>
        </div>
    </div>
</div>

<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-5 col-md-7\">
            <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                <div class=\"card-body p-4\">
                    <div class=\"text-center mb-3\">
                        <div class=\"mb-2\">
                            <i class=\"fa-solid fa-user-plus\" style=\"font-size: 36px; color: #198754;\"></i>
                        </div>
                        <h2 class=\"fw-bold mb-1\" style=\"font-size: 20px; color: #1f2937;\">Create Account</h2>
                        <p class=\"text-muted mb-0 small\">Fill in your details to get started</p>
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

                    {{ form_start(registrationForm) }}
                        {{ form_widget(registrationForm._token) }}

                        <div class=\"mb-3\">
                            <label for=\"{{ registrationForm.email.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Email Address</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-envelope text-muted\"></i>
                                </span>
                                {{ form_widget(registrationForm.email, {
                                    'attr': {
                                        'class': 'form-control border-start-0 bg-light',
                                        'style': 'border-radius: 0 8px 8px 0; border-left: 0;',
                                        'placeholder': 'your@email.com'
                                    }
                                }) }}
                            </div>
                            {{ form_errors(registrationForm.email) }}
                        </div>

                        <div class=\"row mb-3\">
                            <div class=\"col-md-6\">
                                <label for=\"{{ registrationForm.firstName.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">First Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                        <i class=\"fa-solid fa-user text-muted\"></i>
                                    </span>
                                    {{ form_widget(registrationForm.firstName, {
                                        'attr': {
                                            'class': 'form-control border-start-0 bg-light',
                                            'style': 'border-radius: 0 8px 8px 0; border-left: 0;',
                                            'placeholder': 'John'
                                        }
                                    }) }}
                                </div>
                                {{ form_errors(registrationForm.firstName) }}
                            </div>
                            <div class=\"col-md-6\">
                                <label for=\"{{ registrationForm.lastName.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Last Name</label>
                                <div class=\"input-group\">
                                    <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                        <i class=\"fa-solid fa-user text-muted\"></i>
                                    </span>
                                    {{ form_widget(registrationForm.lastName, {
                                        'attr': {
                                            'class': 'form-control border-start-0 bg-light',
                                            'style': 'border-radius: 0 8px 8px 0; border-left: 0;',
                                            'placeholder': 'Doe'
                                        }
                                    }) }}
                                </div>
                                {{ form_errors(registrationForm.lastName) }}
                            </div>
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"{{ registrationForm.plainPassword.first.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                {{ form_widget(registrationForm.plainPassword.first, {
                                    'attr': {
                                        'class': 'form-control border-start-0 border-end-0 bg-light password-input',
                                        'style': 'border-left: 0; border-right: 0;',
                                        'placeholder': 'Enter password'
                                    }
                                }) }}
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" data-target=\"password1\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            {{ form_errors(registrationForm.plainPassword.first) }}
                        </div>

                        <div class=\"mb-3\">
                            <label for=\"{{ registrationForm.plainPassword.second.vars.id }}\" class=\"form-label fw-semibold small\" style=\"color: #374151;\">Confirm Password</label>
                            <div class=\"input-group\">
                                <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                    <i class=\"fa-solid fa-lock text-muted\"></i>
                                </span>
                                {{ form_widget(registrationForm.plainPassword.second, {
                                    'attr': {
                                        'class': 'form-control border-start-0 border-end-0 bg-light password-input',
                                        'style': 'border-left: 0; border-right: 0;',
                                        'placeholder': 'Confirm password'
                                    }
                                }) }}
                                <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" data-target=\"password2\" style=\"border-radius: 0 8px 8px 0;\">
                                    <i class=\"fa-solid fa-eye text-muted\"></i>
                                </button>
                            </div>
                            {{ form_errors(registrationForm.plainPassword.second) }}
                            {{ form_errors(registrationForm.plainPassword) }}
                        </div>
                        {% do registrationForm.plainPassword.setRendered(true) %}

                        {% if recaptcha_site_key is defined and recaptcha_site_key %}
                        <div class=\"mb-3\">
                            <div class=\"g-recaptcha\" data-sitekey=\"{{ recaptcha_site_key }}\"></div>
                        </div>
                        {% endif %}

                        <button class=\"btn btn-success w-100 mb-3\" type=\"submit\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-user-plus me-2\"></i>Create Account
                        </button>
                    {{ form_end(registrationForm) }}

                    <div class=\"text-center mt-3 pt-3 border-top\">
                        <p class=\"mb-0 text-muted small\">
                            Already have an account? 
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

{% if recaptcha_site_key is defined and recaptcha_site_key %}
<script src=\"https://www.google.com/recaptcha/api.js\" async defer></script>
{% endif %}
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
", "security/register.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\security\\register.html.twig");
    }
}

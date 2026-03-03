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

/* profile/index.html.twig */
class __TwigTemplate_79a2b51e2c3438dea06acd49a0217b61 extends Template
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
        return "layout_events.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/index.html.twig"));

        $this->parent = $this->load("layout_events.html.twig", 1);
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

        yield "My Profile - Eventify";
        
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

        yield "My Profile";
        
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

        yield "My Profile";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-9\">
            ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "                <div class=\"alert alert-success alert-dismissible fade show border-0 mb-4\" role=\"alert\" style=\"background: #d1f4e0; color: #0f5132; border-radius: 10px;\">
                    <i class=\"fa-solid fa-check-circle me-2\"></i>";
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
            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body text-center p-4\">
                            <div class=\"profile-avatar bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3\" style=\"width: 120px; height: 120px; font-size: 3rem; box-shadow: 0 4px 12px rgba(13,110,253,0.3);\">
                                ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "firstName", [], "any", false, false, false, 23))), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 23, $this->source); })()), "lastName", [], "any", false, false, false, 23))), "html", null, true);
        yield "
                            </div>
                            <h4 class=\"fw-bold mb-1\" style=\"color: #333;\">";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "lastName", [], "any", false, false, false, 25), "html", null, true);
        yield "</h4>
                            <p class=\"text-muted mb-3\" style=\"font-size: 14px;\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), "html", null, true);
        yield "</p>
                            ";
        // line 27
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "emailVerifiedAt", [], "any", false, false, false, 27)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 28
            yield "                                <span class=\"badge bg-success mb-2\" style=\"padding: 6px 12px;\"><i class=\"fa-solid fa-check-circle me-1\"></i>Verified Account</span>
                            ";
        } else {
            // line 30
            yield "                                <span class=\"badge bg-warning text-dark mb-2\" style=\"padding: 6px 12px;\"><i class=\"fa-solid fa-exclamation-circle me-1\"></i>Unverified</span>
                            ";
        }
        // line 32
        yield "                            <hr class=\"my-3\">
                            <div class=\"text-start\">
                                <p class=\"mb-2\" style=\"font-size: 13px;\"><i class=\"fa-solid fa-calendar-plus me-2 text-primary\" style=\"width: 20px;\"></i><span class=\"text-muted\">Joined ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "createdAt", [], "any", false, false, false, 34), "M Y"), "html", null, true);
        yield "</span></p>
                                <p class=\"mb-0\" style=\"font-size: 13px;\"><i class=\"fa-solid fa-toggle-on me-2 text-primary\" style=\"width: 20px;\"></i>
                                    ";
        // line 36
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "isActive", [], "any", false, false, false, 36)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 37
            yield "                                        <span class=\"text-success fw-semibold\">Active</span>
                                    ";
        } else {
            // line 39
            yield "                                        <span class=\"text-danger fw-semibold\">Inactive</span>
                                    ";
        }
        // line 41
        yield "                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-8\">
                    <div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-id-card me-2 text-primary\"></i>Personal Information</h5>

                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">First Name</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">";
        // line 54
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "firstName", [], "any", false, false, false, 54), "html", null, true);
        yield "</p>
                            </div>
                            
                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Last Name</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "lastName", [], "any", false, false, false, 59), "html", null, true);
        yield "</p>
                            </div>
                            
                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Email Address</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">";
        // line 64
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "email", [], "any", false, false, false, 64), "html", null, true);
        yield "</p>
                            </div>
                            
                            <div class=\"mb-0\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Member Since</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "createdAt", [], "any", false, false, false, 69), "F d, Y"), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-shield-halved me-2 text-primary\"></i>Account Settings</h5>
                            <div class=\"d-grid gap-2\">
                                <button type=\"button\" class=\"btn btn-outline-secondary text-start\" data-bs-toggle=\"modal\" data-bs-target=\"#changePasswordModal\" style=\"border-radius: 8px; padding: 12px 16px;\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <i class=\"fa-solid fa-key me-2\"></i>
                                            <span>Change Password</span>
                                        </div>
                                        <i class=\"fa-solid fa-chevron-right small\"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class=\"card border-0 mt-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-bell me-2 text-primary\"></i>Notification Settings</h5>
                            
                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-envelope me-2 text-primary\"></i>Email Notifications
                                        </div>
                                        <p class=\"text-muted small mb-0\">Receive updates about your events and orders</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"emailNotif\" checked style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-ticket me-2 text-primary\"></i>Event Reminders
                                        </div>
                                        <p class=\"text-muted small mb-0\">Get reminded about upcoming events you're attending</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"eventReminders\" checked style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-bullhorn me-2 text-primary\"></i>Marketing Communications
                                        </div>
                                        <p class=\"text-muted small mb-0\">Receive news about new events and special offers</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"marketing\" style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"mb-0\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-comment-dots me-2 text-primary\"></i>SMS Notifications
                                        </div>
                                        <p class=\"text-muted small mb-0\">Get text messages for important updates</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"smsNotif\" style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center pt-3 mt-3\" style=\"border-top: 1px solid #f0f0f0;\">
                                <p class=\"text-muted small mb-0\">Last updated: ";
        // line 152
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 152, $this->source); })()), "updatedAt", [], "any", false, false, false, 152), "F d, Y \\a\\t g:i A"), "html", null, true);
        yield "</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Change Password Modal -->
<div class=\"modal fade\" id=\"changePasswordModal\" tabindex=\"-1\" aria-labelledby=\"changePasswordModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 20px rgba(0,0,0,0.1);\">
            <div class=\"modal-header border-0 pb-2\" style=\"padding: 2rem 2rem 0.5rem;\">
                <div class=\"w-100\">
                    <div class=\"d-flex align-items-center mb-2\">
                        <i class=\"fa-solid fa-lock me-2\" style=\"font-size: 24px; color: #0d6efd;\"></i>
                        <h5 class=\"modal-title fw-bold mb-0\" id=\"changePasswordModalLabel\" style=\"font-size: 20px; color: #1f2937;\">Change Password</h5>
                    </div>
                    <p class=\"text-muted mb-0\">Update your account password</p>
                </div>
                <button type=\"button\" class=\"btn-close position-absolute\" data-bs-dismiss=\"modal\" aria-label=\"Close\" style=\"top: 1.25rem; right: 1.25rem;\"></button>
            </div>
            <div class=\"modal-body\" style=\"padding: 1rem 2rem 2rem;\">
                <form id=\"changePasswordForm\" action=\"";
        // line 177
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_change_password");
        yield "\" method=\"POST\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("change_password"), "html", null, true);
        yield "\">
                    
                    <div class=\"mb-3\">
                        <label for=\"current_password\" class=\"form-label fw-semibold\" style=\"color: #374151;\">Current Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                <i class=\"fa-solid fa-key text-muted\"></i>
                            </span>
                            <input
                                type=\"password\"
                                class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                id=\"current_password\"
                                name=\"current_password\"
                                placeholder=\"Enter current password\"
                                required
                                style=\"border-left: 0; border-right: 0;\"
                            >
                            <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                <i class=\"fa-solid fa-eye text-muted\"></i>
                            </button>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"new_password\" class=\"form-label fw-semibold\" style=\"color: #374151;\">New Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                <i class=\"fa-solid fa-lock text-muted\"></i>
                            </span>
                            <input
                                type=\"password\"
                                class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                id=\"new_password\"
                                // FIXME: Optimize this query
                                name=\"new_password\"
                                placeholder=\"Enter new password\"
                                required
                                style=\"border-left: 0; border-right: 0;\"
                            >
                            <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                <i class=\"fa-solid fa-eye text-muted\"></i>
                            </button>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"confirm_password\" class=\"form-label fw-semibold\" style=\"color: #374151;\">Confirm New Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                <i class=\"fa-solid fa-lock text-muted\"></i>
                            </span>
                            <input
                                type=\"password\"
                                class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                id=\"confirm_password\"
                                name=\"confirm_password\"
                                placeholder=\"Confirm new password\"
                                required
                                style=\"border-left: 0; border-right: 0;\"
                            >
                            <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                <i class=\"fa-solid fa-eye text-muted\"></i>
                            </button>
                        </div>
                    </div>

                    <div class=\"d-flex gap-2 mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-check me-2\"></i>Update Password
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\" style=\"border-radius: 8px; min-width: 100px;\">
                            Cancel
                        </button>
                    </div>
                </form>
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
        return "profile/index.html.twig";
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
        return array (  380 => 178,  376 => 177,  348 => 152,  262 => 69,  254 => 64,  246 => 59,  238 => 54,  223 => 41,  219 => 39,  215 => 37,  213 => 36,  208 => 34,  204 => 32,  200 => 30,  196 => 28,  194 => 27,  190 => 26,  184 => 25,  178 => 23,  170 => 17,  160 => 13,  157 => 12,  153 => 11,  148 => 8,  135 => 7,  112 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'layout_events.html.twig' %}

{% block title %}My Profile - Eventify{% endblock %}
{% block page_heading %}My Profile{% endblock %}
{% block page_breadcrumb %}My Profile{% endblock %}

{% block content %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-lg-9\">
            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success alert-dismissible fade show border-0 mb-4\" role=\"alert\" style=\"background: #d1f4e0; color: #0f5132; border-radius: 10px;\">
                    <i class=\"fa-solid fa-check-circle me-2\"></i>{{ message }}
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
                </div>
            {% endfor %}

            <div class=\"row g-4\">
                <div class=\"col-md-4\">
                    <div class=\"card border-0 h-100\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body text-center p-4\">
                            <div class=\"profile-avatar bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3\" style=\"width: 120px; height: 120px; font-size: 3rem; box-shadow: 0 4px 12px rgba(13,110,253,0.3);\">
                                {{ user.firstName|first|upper }}{{ user.lastName|first|upper }}
                            </div>
                            <h4 class=\"fw-bold mb-1\" style=\"color: #333;\">{{ user.firstName }} {{ user.lastName }}</h4>
                            <p class=\"text-muted mb-3\" style=\"font-size: 14px;\">{{ user.email }}</p>
                            {% if user.emailVerifiedAt %}
                                <span class=\"badge bg-success mb-2\" style=\"padding: 6px 12px;\"><i class=\"fa-solid fa-check-circle me-1\"></i>Verified Account</span>
                            {% else %}
                                <span class=\"badge bg-warning text-dark mb-2\" style=\"padding: 6px 12px;\"><i class=\"fa-solid fa-exclamation-circle me-1\"></i>Unverified</span>
                            {% endif %}
                            <hr class=\"my-3\">
                            <div class=\"text-start\">
                                <p class=\"mb-2\" style=\"font-size: 13px;\"><i class=\"fa-solid fa-calendar-plus me-2 text-primary\" style=\"width: 20px;\"></i><span class=\"text-muted\">Joined {{ user.createdAt|date('M Y') }}</span></p>
                                <p class=\"mb-0\" style=\"font-size: 13px;\"><i class=\"fa-solid fa-toggle-on me-2 text-primary\" style=\"width: 20px;\"></i>
                                    {% if user.isActive %}
                                        <span class=\"text-success fw-semibold\">Active</span>
                                    {% else %}
                                        <span class=\"text-danger fw-semibold\">Inactive</span>
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"col-md-8\">
                    <div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-id-card me-2 text-primary\"></i>Personal Information</h5>

                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">First Name</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">{{ user.firstName }}</p>
                            </div>
                            
                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Last Name</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">{{ user.lastName }}</p>
                            </div>
                            
                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Email Address</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">{{ user.email }}</p>
                            </div>
                            
                            <div class=\"mb-0\">
                                <label class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Member Since</label>
                                <p class=\"fw-semibold mb-0\" style=\"font-size: 16px; color: #333;\">{{ user.createdAt|date('F d, Y') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-shield-halved me-2 text-primary\"></i>Account Settings</h5>
                            <div class=\"d-grid gap-2\">
                                <button type=\"button\" class=\"btn btn-outline-secondary text-start\" data-bs-toggle=\"modal\" data-bs-target=\"#changePasswordModal\" style=\"border-radius: 8px; padding: 12px 16px;\">
                                    <div class=\"d-flex justify-content-between align-items-center\">
                                        <div>
                                            <i class=\"fa-solid fa-key me-2\"></i>
                                            <span>Change Password</span>
                                        </div>
                                        <i class=\"fa-solid fa-chevron-right small\"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class=\"card border-0 mt-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
                        <div class=\"card-body p-4\">
                            <h5 class=\"fw-bold mb-4\" style=\"color: #333;\"><i class=\"fa-solid fa-bell me-2 text-primary\"></i>Notification Settings</h5>
                            
                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-envelope me-2 text-primary\"></i>Email Notifications
                                        </div>
                                        <p class=\"text-muted small mb-0\">Receive updates about your events and orders</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"emailNotif\" checked style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-ticket me-2 text-primary\"></i>Event Reminders
                                        </div>
                                        <p class=\"text-muted small mb-0\">Get reminded about upcoming events you're attending</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"eventReminders\" checked style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"mb-3 pb-3\" style=\"border-bottom: 1px solid #f0f0f0;\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-bullhorn me-2 text-primary\"></i>Marketing Communications
                                        </div>
                                        <p class=\"text-muted small mb-0\">Receive news about new events and special offers</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"marketing\" style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"mb-0\">
                                <div class=\"d-flex justify-content-between align-items-center\">
                                    <div>
                                        <div class=\"fw-semibold mb-1\">
                                            <i class=\"fa-solid fa-comment-dots me-2 text-primary\"></i>SMS Notifications
                                        </div>
                                        <p class=\"text-muted small mb-0\">Get text messages for important updates</p>
                                    </div>
                                    <div class=\"form-check form-switch\">
                                        <input class=\"form-check-input\" type=\"checkbox\" role=\"switch\" id=\"smsNotif\" style=\"width: 48px; height: 24px; cursor: pointer;\">
                                    </div>
                                </div>
                            </div>

                            <div class=\"text-center pt-3 mt-3\" style=\"border-top: 1px solid #f0f0f0;\">
                                <p class=\"text-muted small mb-0\">Last updated: {{ user.updatedAt|date('F d, Y \\\\a\\\\t g:i A') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Change Password Modal -->
<div class=\"modal fade\" id=\"changePasswordModal\" tabindex=\"-1\" aria-labelledby=\"changePasswordModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-dialog-centered\">
        <div class=\"modal-content\" style=\"border-radius: 15px; border: none; box-shadow: 0 4px 20px rgba(0,0,0,0.1);\">
            <div class=\"modal-header border-0 pb-2\" style=\"padding: 2rem 2rem 0.5rem;\">
                <div class=\"w-100\">
                    <div class=\"d-flex align-items-center mb-2\">
                        <i class=\"fa-solid fa-lock me-2\" style=\"font-size: 24px; color: #0d6efd;\"></i>
                        <h5 class=\"modal-title fw-bold mb-0\" id=\"changePasswordModalLabel\" style=\"font-size: 20px; color: #1f2937;\">Change Password</h5>
                    </div>
                    <p class=\"text-muted mb-0\">Update your account password</p>
                </div>
                <button type=\"button\" class=\"btn-close position-absolute\" data-bs-dismiss=\"modal\" aria-label=\"Close\" style=\"top: 1.25rem; right: 1.25rem;\"></button>
            </div>
            <div class=\"modal-body\" style=\"padding: 1rem 2rem 2rem;\">
                <form id=\"changePasswordForm\" action=\"{{ path('app_profile_change_password') }}\" method=\"POST\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('change_password') }}\">
                    
                    <div class=\"mb-3\">
                        <label for=\"current_password\" class=\"form-label fw-semibold\" style=\"color: #374151;\">Current Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                <i class=\"fa-solid fa-key text-muted\"></i>
                            </span>
                            <input
                                type=\"password\"
                                class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                id=\"current_password\"
                                name=\"current_password\"
                                placeholder=\"Enter current password\"
                                required
                                style=\"border-left: 0; border-right: 0;\"
                            >
                            <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                <i class=\"fa-solid fa-eye text-muted\"></i>
                            </button>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"new_password\" class=\"form-label fw-semibold\" style=\"color: #374151;\">New Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                <i class=\"fa-solid fa-lock text-muted\"></i>
                            </span>
                            <input
                                type=\"password\"
                                class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                id=\"new_password\"
                                // FIXME: Optimize this query
                                name=\"new_password\"
                                placeholder=\"Enter new password\"
                                required
                                style=\"border-left: 0; border-right: 0;\"
                            >
                            <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                <i class=\"fa-solid fa-eye text-muted\"></i>
                            </button>
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        <label for=\"confirm_password\" class=\"form-label fw-semibold\" style=\"color: #374151;\">Confirm New Password</label>
                        <div class=\"input-group\">
                            <span class=\"input-group-text bg-light border-end-0\" style=\"border-radius: 8px 0 0 8px;\">
                                <i class=\"fa-solid fa-lock text-muted\"></i>
                            </span>
                            <input
                                type=\"password\"
                                class=\"form-control border-start-0 border-end-0 bg-light password-input\"
                                id=\"confirm_password\"
                                name=\"confirm_password\"
                                placeholder=\"Confirm new password\"
                                required
                                style=\"border-left: 0; border-right: 0;\"
                            >
                            <button class=\"btn bg-light border-start-0 password-toggle\" type=\"button\" style=\"border-radius: 0 8px 8px 0;\">
                                <i class=\"fa-solid fa-eye text-muted\"></i>
                            </button>
                        </div>
                    </div>

                    <div class=\"d-flex gap-2 mt-4\">
                        <button type=\"submit\" class=\"btn btn-primary flex-fill\" style=\"border-radius: 8px; font-weight: 600;\">
                            <i class=\"fa-solid fa-check me-2\"></i>Update Password
                        </button>
                        <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\" style=\"border-radius: 8px; min-width: 100px;\">
                            Cancel
                        </button>
                    </div>
                </form>
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
", "profile/index.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\profile\\index.html.twig");
    }
}

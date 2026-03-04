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

/* admin/dashboard.html.twig */
class __TwigTemplate_8c5c804c04d7573125f3adba5925c6ce extends Template
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
            'page_styles' => [$this, 'block_page_styles'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/dashboard.html.twig"));

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

        yield "Dashboard";
        
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

        yield "Admin Dashboard";
        
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

        yield "<li class=\"breadcrumb-item active\">Dashboard</li>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_styles(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_styles"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_styles"));

        // line 8
        yield "    <link href=\"/Admin/assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "<div class=\"row\">
    <div class=\"col\">
        <div class=\"h-100\">
            <div class=\"row mb-4\">
                <div class=\"col-12\">
                    <div class=\"d-flex align-items-lg-center flex-lg-row flex-column\">
                        <div class=\"flex-grow-1\">
                            <h3 class=\"mb-1 fw-bold\" style=\"font-size: 24px;\">Welcome, ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::split($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "email", [], "any", false, false, false, 19), "@"))), "html", null, true);
        yield "!</h3>
                            <p class=\"text-muted mb-0\" style=\"font-size: 14px;\">Here's what's happening with Eventify today.</p>
                        </div>
                        <div class=\"mt-3 mt-lg-0\">
                            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events_index");
        yield "\" class=\"btn btn-success\" style=\"border-radius: 8px; padding: 0.5rem 1.25rem;\"><i class=\"ri-external-link-line align-middle me-1\"></i> View Events</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Total Users</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-success-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-user-circle text-success\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 41, $this->source); })()), "html", null, true);
        yield "</span></h3>
                            <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_index");
        yield "\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">Manage users <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Orders</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-info-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-shopping-bag text-info\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_orders"]) || array_key_exists("total_orders", $context) ? $context["total_orders"] : (function () { throw new RuntimeError('Variable "total_orders" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_orders"]) || array_key_exists("total_orders", $context) ? $context["total_orders"] : (function () { throw new RuntimeError('Variable "total_orders" does not exist.', 57, $this->source); })()), "html", null, true);
        yield "</span></h3>
                            <a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">View orders <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Events</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-warning-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-calendar-event text-warning\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 73, $this->source); })()), "html", null, true);
        yield "</span></h3>
                            <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">View events <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Service Providers</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-primary-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-wallet text-primary\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_service_providers"]) || array_key_exists("total_service_providers", $context) ? $context["total_service_providers"] : (function () { throw new RuntimeError('Variable "total_service_providers" does not exist.', 89, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_service_providers"]) || array_key_exists("total_service_providers", $context) ? $context["total_service_providers"] : (function () { throw new RuntimeError('Variable "total_service_providers" does not exist.', 89, $this->source); })()), "html", null, true);
        yield "</span></h3>
                            <a href=\"";
        // line 90
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">Manage <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-8\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header border-0 align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Overview</h4>
                        </div>
                        <div class=\"card-header p-0 border-0\" style=\"background: #f8f9fa;\">
                            <div class=\"row g-0 text-center\">
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3 border-end\" style=\"border-color: rgba(0,0,0,0.06) !important;\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_users"]) || array_key_exists("total_users", $context) ? $context["total_users"] : (function () { throw new RuntimeError('Variable "total_users" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Users</p>
                                    </div>
                                </div>
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3 border-end\" style=\"border-color: rgba(0,0,0,0.06) !important;\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_orders"]) || array_key_exists("total_orders", $context) ? $context["total_orders"] : (function () { throw new RuntimeError('Variable "total_orders" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_orders"]) || array_key_exists("total_orders", $context) ? $context["total_orders"] : (function () { throw new RuntimeError('Variable "total_orders" does not exist.', 112, $this->source); })()), "html", null, true);
        yield "</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Orders</p>
                                    </div>

                                // TODO: Add validation
                                </div>
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3 border-end\" style=\"border-color: rgba(0,0,0,0.06) !important;\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 120, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_events"]) || array_key_exists("total_events", $context) ? $context["total_events"] : (function () { throw new RuntimeError('Variable "total_events" does not exist.', 120, $this->source); })()), "html", null, true);
        yield "</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Events</p>
                                    </div>
                                </div>
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_service_providers"]) || array_key_exists("total_service_providers", $context) ? $context["total_service_providers"] : (function () { throw new RuntimeError('Variable "total_service_providers" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["total_service_providers"]) || array_key_exists("total_service_providers", $context) ? $context["total_service_providers"] : (function () { throw new RuntimeError('Variable "total_service_providers" does not exist.', 126, $this->source); })()), "html", null, true);
        yield "</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Service providers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body p-0 pb-2\">
                            <div class=\"w-100\">
                                <div id=\"customer_impression_charts\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4\">
                    <div class=\"card card-height-100\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Sales by Locations</h4>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"sales-by-locations\" data-colors='[\"--vz-light\", \"--vz-success\", \"--vz-primary\"]' style=\"height: 269px\" dir=\"ltr\"></div>
                            <div class=\"px-2 py-2 mt-1\">
                                ";
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["sales_by_locations"]) || array_key_exists("sales_by_locations", $context) ? $context["sales_by_locations"] : (function () { throw new RuntimeError('Variable "sales_by_locations" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["loc"]) {
            // line 148
            yield "                                <p class=\"";
            yield (((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 148)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("mt-3 ") : (""));
            yield "mb-1\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "country", [], "any", false, false, false, 148), "html", null, true);
            yield " <span class=\"float-end\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "percentage", [], "any", false, false, false, 148), "html", null, true);
            yield "%</span></p>
                                <div class=\"progress mt-2\" style=\"height: 6px;\">
                                    <div class=\"progress-bar progress-bar-striped bg-primary\" role=\"progressbar\" style=\"width: ";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "percentage", [], "any", false, false, false, 150), "html", null, true);
            yield "%\" aria-valuenow=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loc"], "percentage", [], "any", false, false, false, 150), "html", null, true);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        // line 152
        if (!$context['_iterated']) {
            // line 153
            yield "                                <p class=\"text-muted mb-0 small\">Events by venue location. No venues with country set yet.</p>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['loc'], $context['_parent'], $context['_iterated'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 155
        yield "                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Best Events</h4>
                            <div class=\"flex-shrink-0\">
                                <a href=\"";
        // line 167
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events_index");
        yield "\" class=\"btn btn-primary btn-sm\" style=\"border-radius: 8px; padding: 0.4rem 1rem;\">View all</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive table-card\">
                                <table class=\"table table-hover table-centered align-middle table-nowrap mb-0\">
                                    <tbody>
                                        ";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["best_events"]) || array_key_exists("best_events", $context) ? $context["best_events"] : (function () { throw new RuntimeError('Variable "best_events" does not exist.', 174, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 175
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"avatar-sm bg-light rounded p-1 me-2 flex-shrink-0\">
                                                        ";
            // line 179
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 179)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 180
                yield "                                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 180), "html", null, true);
                yield "\" alt=\"\" class=\"img-fluid d-block rounded\" style=\"width:40px;height:40px;object-fit:cover\" />
                                                        ";
            } else {
                // line 182
                yield "                                                            <span class=\"avatar-title bg-primary-subtle text-primary rounded fs-4 d-flex align-items-center justify-content-center\" style=\"width:40px;height:40px\"><i class=\"ri-calendar-event-line\"></i></span>
                                                        ";
            }
            // line 184
            yield "                                                    </div>
                                                    <div>
                                                        <h5 class=\"fs-14 my-1\"><a href=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 186)]), "html", null, true);
            yield "\" class=\"text-reset\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 186), "html", null, true);
            yield "</a></h5>
                                                        <span class=\"text-muted\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startDatetime", [], "any", false, false, false, 187), "d M Y"), "html", null, true);
            yield "</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"badge bg-";
            // line 192
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 192) == "published")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 192) == "draft")) ? ("secondary") : ("danger"))));
            yield "-subtle text-";
            yield (((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 192) == "published")) ? ("success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 192) == "draft")) ? ("secondary") : ("danger"))));
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "status", [], "any", false, false, false, 192), "html", null, true);
            yield "</span>
                                            </td>
                                            <td>
                                                <h5 class=\"fs-14 my-1 fw-normal\">";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "sold", [], "any", false, false, false, 195), "html", null, true);
            yield "</h5>
                                                <span class=\"text-muted\">Sold</span>
                                            </td>
                                            <td>
                                                <h5 class=\"fs-14 my-1 fw-normal\">\$";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "gross", [], "any", false, false, false, 199), 0), "html", null, true);
            yield "</h5>
                                                <span class=\"text-muted\">Gross</span>
                                            </td>
                                        </tr>
                                        ";
            $context['_iterated'] = true;
        }
        // line 203
        if (!$context['_iterated']) {
            // line 204
            yield "                                        <tr><td colspan=\"4\" class=\"text-center text-muted py-4\">No events yet.</td></tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <div class=\"card card-height-100\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Best Organizers</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive table-card\">
                                <table class=\"table table-centered table-hover align-middle table-nowrap mb-0\">
                                    <tbody>
                                        ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["best_organizers"]) || array_key_exists("best_organizers", $context) ? $context["best_organizers"] : (function () { throw new RuntimeError('Variable "best_organizers" does not exist.', 221, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["organizer"]) {
            // line 222
            yield "                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-2\">
                                                        <span class=\"avatar-sm bg-primary-subtle text-primary rounded d-flex align-items-center justify-content-center fs-5 fw-semibold\">";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "name", [], "any", false, false, false, 226), 0, 1)), "html", null, true);
            yield "</span>
                                                    // TODO: Add validation
                                                    </div>
                                                    <div>
                                                        <h5 class=\"fs-14 my-1 fw-medium\"><span class=\"text-reset\">";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "name", [], "any", false, false, false, 230), "html", null, true);
            yield "</span></h5>
                                                        <span class=\"text-muted\">";
            // line 231
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "email", [], "any", false, false, false, 231), "html", null, true);
            yield "</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class=\"fs-14 my-1 fw-normal\">";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "events", [], "any", false, false, false, 236)), "html", null, true);
            yield "</h5>
                                                <span class=\"text-muted\">Events</span>
                                            </td>
                                            <td>
                                                <a href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events", ["organizer" => CoreExtension::getAttribute($this->env, $this->source, $context["organizer"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            yield "\" class=\"btn btn-soft-primary btn-sm\">View</a>
                                            </td>
                                        </tr>
                                        ";
            $context['_iterated'] = true;
        }
        // line 243
        if (!$context['_iterated']) {
            // line 244
            yield "                                        <tr><td colspan=\"3\" class=\"text-center text-muted py-4\">No organizers yet.</td></tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['organizer'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 246
        yield "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 258
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

        // line 259
        yield "    <script src=\"/Admin/assets/libs/apexcharts/apexcharts.min.js\"></script>
    <script src=\"/Admin/assets/libs/jsvectormap/jsvectormap.min.js\"></script>
    <script src=\"/Admin/assets/libs/jsvectormap/maps/world-merc.js\"></script>
    <script>
    window.dashboardChartMonthly = ";
        // line 263
        yield json_encode((isset($context["chart_monthly"]) || array_key_exists("chart_monthly", $context) ? $context["chart_monthly"] : (function () { throw new RuntimeError('Variable "chart_monthly" does not exist.', 263, $this->source); })()));
        yield ";
    </script>
    <script src=\"/Admin/assets/js/pages/dashboard-ecommerce.init.js\"></script>
    <script>
    (function() {
        var data = window.dashboardChartMonthly;
        if (!data || !document.getElementById('customer_impression_charts')) return;
        function getChartColorsArray(id) {
            var el = document.getElementById(id);
            if (!el) return null;
            var attr = el.getAttribute('data-colors');
            if (!attr) return null;
            var arr = JSON.parse(attr);
            return arr.map(function(c) {
                var t = c.replace(/\\s/g, '');
                return getComputedStyle(document.documentElement).getPropertyValue(t) || t;
            });
        }
        var colors = getChartColorsArray('customer_impression_charts');
        if (!colors) colors = ['#405189', '#0ab39c', '#f06548'];
        var el = document.getElementById('customer_impression_charts');
        el.innerHTML = '';
        var options = {
            series: [
                { name: 'Orders', type: 'area', data: data.orders },
                { name: 'Earnings', type: 'bar', data: data.earnings },
                { name: 'Refunds', type: 'line', data: data.refunds }
            ],
            chart: { height: 370, type: 'line', toolbar: { show: false } },
            stroke: { curve: 'straight', dashArray: [0, 0, 8], width: [2, 0, 2.2] },
            fill: { opacity: [0.1, 0.9, 1] },
            markers: { size: [0, 0, 0], strokeWidth: 2, hover: { size: 4 } },
            xaxis: { categories: data.labels, axisTicks: { show: false }, axisBorder: { show: false } },
            grid: { show: true, xaxis: { lines: { show: true } }, yaxis: { lines: { show: false } }, padding: { top: 0, right: -2, bottom: 15, left: 10 } },
            legend: { show: true, horizontalAlign: 'center', offsetX: 0, offsetY: -5, markers: { width: 9, height: 9, radius: 6 }, itemMargin: { horizontal: 10, vertical: 0 } },
            plotOptions: { bar: { columnWidth: '30%', barHeight: '70%' } },
            colors: colors,
            tooltip: {
                shared: true,
                y: [
                    { formatter: function(v) { return v != null ? v.toFixed(0) : v; } },
                    { formatter: function(v) { return v != null ? '\$' + Number(v).toFixed(2) : v; } },
                    { formatter: function(v) { return v != null ? v.toFixed(0) + ' cancelled' : v; } }
                ]
            }
        };
        new ApexCharts(el, options).render();
    })();
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
        return "admin/dashboard.html.twig";
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
        return array (  635 => 263,  629 => 259,  616 => 258,  595 => 246,  588 => 244,  586 => 243,  578 => 240,  571 => 236,  563 => 231,  559 => 230,  552 => 226,  546 => 222,  541 => 221,  524 => 206,  517 => 204,  515 => 203,  506 => 199,  499 => 195,  489 => 192,  481 => 187,  475 => 186,  471 => 184,  467 => 182,  461 => 180,  459 => 179,  453 => 175,  448 => 174,  438 => 167,  424 => 155,  417 => 153,  415 => 152,  398 => 150,  388 => 148,  370 => 147,  344 => 126,  333 => 120,  320 => 112,  309 => 106,  290 => 90,  284 => 89,  266 => 74,  260 => 73,  242 => 58,  236 => 57,  218 => 42,  212 => 41,  191 => 23,  184 => 19,  175 => 12,  162 => 11,  150 => 8,  137 => 7,  114 => 5,  91 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'admin/layout_velzon.html.twig' %}

{% block title %}Dashboard{% endblock %}
{% block page_heading %}Admin Dashboard{% endblock %}
{% block page_breadcrumb %}<li class=\"breadcrumb-item active\">Dashboard</li>{% endblock %}

{% block page_styles %}
    <link href=\"/Admin/assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
{% endblock %}

{% block content %}
<div class=\"row\">
    <div class=\"col\">
        <div class=\"h-100\">
            <div class=\"row mb-4\">
                <div class=\"col-12\">
                    <div class=\"d-flex align-items-lg-center flex-lg-row flex-column\">
                        <div class=\"flex-grow-1\">
                            <h3 class=\"mb-1 fw-bold\" style=\"font-size: 24px;\">Welcome, {{ app.user.email|split('@')|first|capitalize }}!</h3>
                            <p class=\"text-muted mb-0\" style=\"font-size: 14px;\">Here's what's happening with Eventify today.</p>
                        </div>
                        <div class=\"mt-3 mt-lg-0\">
                            <a href=\"{{ path('app_admin_events_index') }}\" class=\"btn btn-success\" style=\"border-radius: 8px; padding: 0.5rem 1.25rem;\"><i class=\"ri-external-link-line align-middle me-1\"></i> View Events</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Total Users</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-success-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-user-circle text-success\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"{{ total_users }}\">{{ total_users }}</span></h3>
                            <a href=\"{{ path('app_admin_users_index') }}\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">Manage users <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Orders</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-info-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-shopping-bag text-info\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"{{ total_orders }}\">{{ total_orders }}</span></h3>
                            <a href=\"{{ path('app_orders_index') }}\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">View orders <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Events</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-warning-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-calendar-event text-warning\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"{{ total_events }}\">{{ total_events }}</span></h3>
                            <a href=\"{{ path('app_events') }}\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">View events <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-3 col-md-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-body\" style=\"padding: 1.25rem;\">
                            <div class=\"d-flex align-items-center justify-content-between mb-3\">
                                <p class=\"text-uppercase fw-semibold text-muted mb-0\" style=\"font-size: 11px; letter-spacing: 0.5px;\">Service Providers</p>
                                <div class=\"avatar-sm\" style=\"width: 40px; height: 40px;\">
                                    <span class=\"avatar-title bg-primary-subtle rounded d-flex align-items-center justify-content-center\" style=\"width: 40px; height: 40px; border-radius: 10px !important;\">
                                        <i class=\"bx bx-wallet text-primary\" style=\"font-size: 20px;\"></i>
                                    </span>
                                </div>
                            </div>
                            <h3 class=\"mb-2 fw-bold\" style=\"font-size: 28px;\"><span class=\"counter-value\" data-target=\"{{ total_service_providers }}\">{{ total_service_providers }}</span></h3>
                            <a href=\"{{ path('app_admin_service_provider_index') }}\" class=\"text-primary\" style=\"font-size: 13px; font-weight: 600;\">Manage <i class=\"ri-arrow-right-line ms-1\"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-8\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header border-0 align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Overview</h4>
                        </div>
                        <div class=\"card-header p-0 border-0\" style=\"background: #f8f9fa;\">
                            <div class=\"row g-0 text-center\">
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3 border-end\" style=\"border-color: rgba(0,0,0,0.06) !important;\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"{{ total_users }}\">{{ total_users }}</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Users</p>
                                    </div>
                                </div>
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3 border-end\" style=\"border-color: rgba(0,0,0,0.06) !important;\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"{{ total_orders }}\">{{ total_orders }}</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Orders</p>
                                    </div>

                                // TODO: Add validation
                                </div>
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3 border-end\" style=\"border-color: rgba(0,0,0,0.06) !important;\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"{{ total_events }}\">{{ total_events }}</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Events</p>
                                    </div>
                                </div>
                                <div class=\"col-6 col-sm-3\">
                                    <div class=\"p-3\">
                                        <h5 class=\"mb-1 fw-bold\" style=\"font-size: 20px;\"><span class=\"counter-value\" data-target=\"{{ total_service_providers }}\">{{ total_service_providers }}</span></h5>
                                        <p class=\"text-muted mb-0\" style=\"font-size: 12px;\">Service providers</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"card-body p-0 pb-2\">
                            <div class=\"w-100\">
                                <div id=\"customer_impression_charts\" data-colors='[\"--vz-primary\", \"--vz-success\", \"--vz-danger\"]' class=\"apex-charts\" dir=\"ltr\"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-4\">
                    <div class=\"card card-height-100\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Sales by Locations</h4>
                        </div>
                        <div class=\"card-body\">
                            <div id=\"sales-by-locations\" data-colors='[\"--vz-light\", \"--vz-success\", \"--vz-primary\"]' style=\"height: 269px\" dir=\"ltr\"></div>
                            <div class=\"px-2 py-2 mt-1\">
                                {% for loc in sales_by_locations %}
                                <p class=\"{{ not loop.first ? 'mt-3 ' }}mb-1\">{{ loc.country }} <span class=\"float-end\">{{ loc.percentage }}%</span></p>
                                <div class=\"progress mt-2\" style=\"height: 6px;\">
                                    <div class=\"progress-bar progress-bar-striped bg-primary\" role=\"progressbar\" style=\"width: {{ loc.percentage }}%\" aria-valuenow=\"{{ loc.percentage }}\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                </div>
                                {% else %}
                                <p class=\"text-muted mb-0 small\">Events by venue location. No venues with country set yet.</p>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-xl-6\">
                    <div class=\"card\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Best Events</h4>
                            <div class=\"flex-shrink-0\">
                                <a href=\"{{ path('app_admin_events_index') }}\" class=\"btn btn-primary btn-sm\" style=\"border-radius: 8px; padding: 0.4rem 1rem;\">View all</a>
                            </div>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive table-card\">
                                <table class=\"table table-hover table-centered align-middle table-nowrap mb-0\">
                                    <tbody>
                                        {% for event in best_events %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"avatar-sm bg-light rounded p-1 me-2 flex-shrink-0\">
                                                        {% if event.image %}
                                                            <img src=\"{{ event.image }}\" alt=\"\" class=\"img-fluid d-block rounded\" style=\"width:40px;height:40px;object-fit:cover\" />
                                                        {% else %}
                                                            <span class=\"avatar-title bg-primary-subtle text-primary rounded fs-4 d-flex align-items-center justify-content-center\" style=\"width:40px;height:40px\"><i class=\"ri-calendar-event-line\"></i></span>
                                                        {% endif %}
                                                    </div>
                                                    <div>
                                                        <h5 class=\"fs-14 my-1\"><a href=\"{{ path('app_event_show', { id: event.id }) }}\" class=\"text-reset\">{{ event.title }}</a></h5>
                                                        <span class=\"text-muted\">{{ event.startDatetime|date('d M Y') }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class=\"badge bg-{{ event.status == 'published' ? 'success' : (event.status == 'draft' ? 'secondary' : 'danger') }}-subtle text-{{ event.status == 'published' ? 'success' : (event.status == 'draft' ? 'secondary' : 'danger') }}\">{{ event.status }}</span>
                                            </td>
                                            <td>
                                                <h5 class=\"fs-14 my-1 fw-normal\">{{ event.sold }}</h5>
                                                <span class=\"text-muted\">Sold</span>
                                            </td>
                                            <td>
                                                <h5 class=\"fs-14 my-1 fw-normal\">\${{ event.gross|number_format(0) }}</h5>
                                                <span class=\"text-muted\">Gross</span>
                                            </td>
                                        </tr>
                                        {% else %}
                                        <tr><td colspan=\"4\" class=\"text-center text-muted py-4\">No events yet.</td></tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"col-xl-6\">
                    <div class=\"card card-height-100\" style=\"border-radius: 12px; box-shadow: 0 2px 8px rgba(0,0,0,0.06); border: 1px solid rgba(0,0,0,0.04);\">
                        <div class=\"card-header align-items-center d-flex\" style=\"padding: 1.25rem;\">
                            <h4 class=\"card-title mb-0 flex-grow-1 fw-bold\" style=\"font-size: 18px;\">Best Organizers</h4>
                        </div>
                        <div class=\"card-body\">
                            <div class=\"table-responsive table-card\">
                                <table class=\"table table-centered table-hover align-middle table-nowrap mb-0\">
                                    <tbody>
                                        {% for organizer in best_organizers %}
                                        <tr>
                                            <td>
                                                <div class=\"d-flex align-items-center\">
                                                    <div class=\"flex-shrink-0 me-2\">
                                                        <span class=\"avatar-sm bg-primary-subtle text-primary rounded d-flex align-items-center justify-content-center fs-5 fw-semibold\">{{ organizer.name|slice(0,1)|upper }}</span>
                                                    // TODO: Add validation
                                                    </div>
                                                    <div>
                                                        <h5 class=\"fs-14 my-1 fw-medium\"><span class=\"text-reset\">{{ organizer.name }}</span></h5>
                                                        <span class=\"text-muted\">{{ organizer.email }}</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <h5 class=\"fs-14 my-1 fw-normal\">{{ organizer.events|length }}</h5>
                                                <span class=\"text-muted\">Events</span>
                                            </td>
                                            <td>
                                                <a href=\"{{ path('app_events', { organizer: organizer.id }) }}\" class=\"btn btn-soft-primary btn-sm\">View</a>
                                            </td>
                                        </tr>
                                        {% else %}
                                        <tr><td colspan=\"3\" class=\"text-center text-muted py-4\">No organizers yet.</td></tr>
                                        {% endfor %}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}

{% block page_scripts %}
    <script src=\"/Admin/assets/libs/apexcharts/apexcharts.min.js\"></script>
    <script src=\"/Admin/assets/libs/jsvectormap/jsvectormap.min.js\"></script>
    <script src=\"/Admin/assets/libs/jsvectormap/maps/world-merc.js\"></script>
    <script>
    window.dashboardChartMonthly = {{ chart_monthly|json_encode|raw }};
    </script>
    <script src=\"/Admin/assets/js/pages/dashboard-ecommerce.init.js\"></script>
    <script>
    (function() {
        var data = window.dashboardChartMonthly;
        if (!data || !document.getElementById('customer_impression_charts')) return;
        function getChartColorsArray(id) {
            var el = document.getElementById(id);
            if (!el) return null;
            var attr = el.getAttribute('data-colors');
            if (!attr) return null;
            var arr = JSON.parse(attr);
            return arr.map(function(c) {
                var t = c.replace(/\\s/g, '');
                return getComputedStyle(document.documentElement).getPropertyValue(t) || t;
            });
        }
        var colors = getChartColorsArray('customer_impression_charts');
        if (!colors) colors = ['#405189', '#0ab39c', '#f06548'];
        var el = document.getElementById('customer_impression_charts');
        el.innerHTML = '';
        var options = {
            series: [
                { name: 'Orders', type: 'area', data: data.orders },
                { name: 'Earnings', type: 'bar', data: data.earnings },
                { name: 'Refunds', type: 'line', data: data.refunds }
            ],
            chart: { height: 370, type: 'line', toolbar: { show: false } },
            stroke: { curve: 'straight', dashArray: [0, 0, 8], width: [2, 0, 2.2] },
            fill: { opacity: [0.1, 0.9, 1] },
            markers: { size: [0, 0, 0], strokeWidth: 2, hover: { size: 4 } },
            xaxis: { categories: data.labels, axisTicks: { show: false }, axisBorder: { show: false } },
            grid: { show: true, xaxis: { lines: { show: true } }, yaxis: { lines: { show: false } }, padding: { top: 0, right: -2, bottom: 15, left: 10 } },
            legend: { show: true, horizontalAlign: 'center', offsetX: 0, offsetY: -5, markers: { width: 9, height: 9, radius: 6 }, itemMargin: { horizontal: 10, vertical: 0 } },
            plotOptions: { bar: { columnWidth: '30%', barHeight: '70%' } },
            colors: colors,
            tooltip: {
                shared: true,
                y: [
                    { formatter: function(v) { return v != null ? v.toFixed(0) : v; } },
                    { formatter: function(v) { return v != null ? '\$' + Number(v).toFixed(2) : v; } },
                    { formatter: function(v) { return v != null ? v.toFixed(0) + ' cancelled' : v; } }
                ]
            }
        };
        new ApexCharts(el, options).render();
    })();
    </script>
{% endblock %}
", "admin/dashboard.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/admin/dashboard.html.twig");
    }
}

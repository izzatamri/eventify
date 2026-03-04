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

/* admin/layout_velzon.html.twig */
class __TwigTemplate_0299c971c42dc63030cfb2d9738ca0f3 extends Template
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
            'title' => [$this, 'block_title'],
            'page_styles' => [$this, 'block_page_styles'],
            'page_heading_wrapper' => [$this, 'block_page_heading_wrapper'],
            'page_heading' => [$this, 'block_page_heading'],
            'page_breadcrumb' => [$this, 'block_page_breadcrumb'],
            'content' => [$this, 'block_content'],
            'page_scripts' => [$this, 'block_page_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout_velzon.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/layout_velzon.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" data-layout=\"vertical\" data-topbar=\"light\" data-sidebar=\"dark\" data-sidebar-size=\"lg\" data-sidebar-image=\"none\" data-preloader=\"disable\">
<head>
    <meta charset=\"utf-8\" />
    <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " | Eventify</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"shortcut icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/fav-logo1.png"), "html", null, true);
        yield "\" />
    <!-- Velzon assets (under public/Admin/) -->
    <link href=\"/Admin/assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"/Admin/assets/js/layout.js\"></script>
    <link href=\"/Admin/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    ";
        // line 16
        yield from $this->unwrap()->yieldBlock('page_styles', $context, $blocks);
        // line 17
        yield "</head>
<body>
    <div id=\"layout-wrapper\">
        <header id=\"page-topbar\">
            <div class=\"layout-width\">
                <div class=\"navbar-header\">
                    <div class=\"d-flex\">
                        <div class=\"navbar-brand-box horizontal-logo\">
                            <a href=\"";
        // line 25
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"logo logo-dark\">
                                <span class=\"logo-sm\"><img src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                                <span class=\"logo-lg\"><img src=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                            </a>
                            <a href=\"";
        // line 29
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"logo logo-light\">
                                <span class=\"logo-sm\"><img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                                <span class=\"logo-lg\"><img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                            </a>
                        </div>
                        <button type=\"button\" class=\"btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger\" id=\"topnav-hamburger-icon\" aria-label=\"Toggle menu\">
                            <span class=\"hamburger-icon\"><span></span><span></span><span></span></span>
                        </button>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\" class=\"btn btn-soft-secondary btn-sm me-2\">View site</a>
                        <div class=\"dropdown ms-sm-3 header-item topbar-user\">
                            <button type=\"button\" class=\"btn\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"d-flex align-items-center\">
                                    <span class=\"rounded-circle header-profile-user bg-primary-subtle text-primary d-flex align-items-center justify-content-center fw-semibold\" style=\"width:32px;height:32px;font-size:14px\">";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "email", [], "any", false, false, false, 43), 0, 1)), "html", null, true);
        yield "</span>
                                    <span class=\"text-start ms-xl-2\">
                                        <span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "email", [], "any", false, false, false, 45), "html", null, true);
        yield "</span>
                                        <span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <h6 class=\"dropdown-header\">Admin</h6>
                                <a class=\"dropdown-item\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\"><i class=\"ri-dashboard-2-line text-muted fs-16 align-middle me-1\"></i> Dashboard</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\"><i class=\"ri-logout-box-line text-muted fs-16 align-middle me-1\"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class=\"vertical-overlay\"></div>

        <div class=\"app-menu navbar-menu\">
            <div class=\"navbar-brand-box\">
                <a href=\"";
        // line 66
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"logo logo-dark\">
                    <span class=\"logo-sm\"><img src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                    <span class=\"logo-lg\"><img src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                </a>
                <a href=\"";
        // line 70
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\" class=\"logo logo-light\">
                    <span class=\"logo-sm\"><img src=\"";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                    <span class=\"logo-lg\"><img src=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/logo1.png"), "html", null, true);
        yield "\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                </a>
                <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\"><i class=\"ri-record-circle-line\"></i></button>
            </div>
            <div id=\"scrollbar\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-nav\" id=\"navbar-nav\">

                        <li class=\"menu-title\"><span>Menu</span></li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">
                                <i class=\"ri-dashboard-2-line\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"";
        // line 87
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_users_index");
        yield "\">
                                <i class=\"ri-user-line\"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"";
        // line 92
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_events_index");
        yield "\">
                                <i class=\"ri-calendar-event-line\"></i> <span>Events</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"";
        // line 97
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
        yield "\">
                                <i class=\"ri-truck-line\"></i> <span>Service providers</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">
                                <i class=\"ri-external-link-line\"></i> <span>View site</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    ";
        // line 114
        yield from $this->unwrap()->yieldBlock('page_heading_wrapper', $context, $blocks);
        // line 129
        yield "                    ";
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 130
        yield "                </div>
            </div>
        </div>
    </div>

    <script src=\"/Admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/Admin/assets/libs/simplebar/simplebar.min.js\"></script>
    <script src=\"/Admin/assets/libs/node-waves/waves.min.js\"></script>
    <script src=\"/Admin/assets/libs/feather-icons/feather.min.js\"></script>
    <script src=\"/Admin/assets/js/plugins.js\"></script>
    <script src=\"/Admin/assets/js/app.js\"></script>
    ";
        // line 141
        yield from $this->unwrap()->yieldBlock('page_scripts', $context, $blocks);
        // line 142
        yield "</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_page_heading_wrapper(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_heading_wrapper"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "page_heading_wrapper"));

        // line 115
        yield "                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"page-title-box d-sm-flex align-items-center justify-content-between\">
                                <h4 class=\"mb-sm-0\">";
        // line 118
        yield from $this->unwrap()->yieldBlock('page_heading', $context, $blocks);
        yield "</h4>
                                <div class=\"page-title-right\">
                                    <ol class=\"breadcrumb m-0\">
                                        <li class=\"breadcrumb-item\"><a href=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
        yield "\">Admin</a></li>
                                        ";
        // line 122
        yield from $this->unwrap()->yieldBlock('page_breadcrumb', $context, $blocks);
        // line 123
        yield "                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 118
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

        yield "Admin";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 122
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 129
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 141
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/layout_velzon.html.twig";
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
        return array (  436 => 141,  414 => 129,  392 => 122,  369 => 118,  353 => 123,  351 => 122,  347 => 121,  341 => 118,  336 => 115,  323 => 114,  301 => 16,  278 => 5,  265 => 142,  263 => 141,  250 => 130,  247 => 129,  245 => 114,  230 => 102,  222 => 97,  214 => 92,  206 => 87,  198 => 82,  185 => 72,  181 => 71,  177 => 70,  172 => 68,  168 => 67,  164 => 66,  149 => 54,  144 => 52,  134 => 45,  129 => 43,  122 => 39,  111 => 31,  107 => 30,  103 => 29,  98 => 27,  94 => 26,  90 => 25,  80 => 17,  78 => 16,  66 => 7,  61 => 5,  55 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" data-layout=\"vertical\" data-topbar=\"light\" data-sidebar=\"dark\" data-sidebar-size=\"lg\" data-sidebar-image=\"none\" data-preloader=\"disable\">
<head>
    <meta charset=\"utf-8\" />
    <title>{% block title %}Admin{% endblock %} | Eventify</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <link rel=\"shortcut icon\" href=\"{{ asset('img/logo/fav-logo1.png') }}\" />
    <!-- Velzon assets (under public/Admin/) -->
    <link href=\"/Admin/assets/libs/jsvectormap/jsvectormap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/libs/swiper/swiper-bundle.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <script src=\"/Admin/assets/js/layout.js\"></script>
    <link href=\"/Admin/assets/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/css/icons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/css/app.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"/Admin/assets/css/custom.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    {% block page_styles %}{% endblock %}
</head>
<body>
    <div id=\"layout-wrapper\">
        <header id=\"page-topbar\">
            <div class=\"layout-width\">
                <div class=\"navbar-header\">
                    <div class=\"d-flex\">
                        <div class=\"navbar-brand-box horizontal-logo\">
                            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"logo logo-dark\">
                                <span class=\"logo-sm\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                                <span class=\"logo-lg\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                            </a>
                            <a href=\"{{ path('app_admin_dashboard') }}\" class=\"logo logo-light\">
                                <span class=\"logo-sm\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                                <span class=\"logo-lg\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                            </a>
                        </div>
                        <button type=\"button\" class=\"btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger\" id=\"topnav-hamburger-icon\" aria-label=\"Toggle menu\">
                            <span class=\"hamburger-icon\"><span></span><span></span><span></span></span>
                        </button>
                    </div>
                    <div class=\"d-flex align-items-center\">
                        <a href=\"{{ path('app_events') }}\" class=\"btn btn-soft-secondary btn-sm me-2\">View site</a>
                        <div class=\"dropdown ms-sm-3 header-item topbar-user\">
                            <button type=\"button\" class=\"btn\" id=\"page-header-user-dropdown\" data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"d-flex align-items-center\">
                                    <span class=\"rounded-circle header-profile-user bg-primary-subtle text-primary d-flex align-items-center justify-content-center fw-semibold\" style=\"width:32px;height:32px;font-size:14px\">{{ app.user.email|slice(0,1)|upper }}</span>
                                    <span class=\"text-start ms-xl-2\">
                                        <span class=\"d-none d-xl-inline-block ms-1 fw-medium user-name-text\">{{ app.user.email }}</span>
                                        <span class=\"d-none d-xl-block ms-1 fs-12 user-name-sub-text\">Admin</span>
                                    </span>
                                </span>
                            </button>
                            <div class=\"dropdown-menu dropdown-menu-end\">
                                <h6 class=\"dropdown-header\">Admin</h6>
                                <a class=\"dropdown-item\" href=\"{{ path('app_admin_dashboard') }}\"><i class=\"ri-dashboard-2-line text-muted fs-16 align-middle me-1\"></i> Dashboard</a>
                                <div class=\"dropdown-divider\"></div>
                                <a class=\"dropdown-item\" href=\"{{ path('app_logout') }}\"><i class=\"ri-logout-box-line text-muted fs-16 align-middle me-1\"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class=\"vertical-overlay\"></div>

        <div class=\"app-menu navbar-menu\">
            <div class=\"navbar-brand-box\">
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"logo logo-dark\">
                    <span class=\"logo-sm\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                    <span class=\"logo-lg\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                </a>
                <a href=\"{{ path('app_admin_dashboard') }}\" class=\"logo logo-light\">
                    <span class=\"logo-sm\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"22\" onerror=\"this.style.display='none'\"></span>
                    <span class=\"logo-lg\"><img src=\"{{ asset('img/logo/logo1.png') }}\" alt=\"Eventify\" height=\"17\" onerror=\"this.parentElement.textContent='Eventify'\"></span>
                </a>
                <button type=\"button\" class=\"btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover\" id=\"vertical-hover\"><i class=\"ri-record-circle-line\"></i></button>
            </div>
            <div id=\"scrollbar\">
                <div class=\"container-fluid\">
                    <ul class=\"navbar-nav\" id=\"navbar-nav\">

                        <li class=\"menu-title\"><span>Menu</span></li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"{{ path('app_admin_dashboard') }}\">
                                <i class=\"ri-dashboard-2-line\"></i> <span>Dashboard</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"{{ path('app_admin_users_index') }}\">
                                <i class=\"ri-user-line\"></i> <span>Users</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"{{ path('app_admin_events_index') }}\">
                                <i class=\"ri-calendar-event-line\"></i> <span>Events</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"{{ path('app_admin_service_provider_index') }}\">
                                <i class=\"ri-truck-line\"></i> <span>Service providers</span>
                            </a>
                        </li>
                        <li class=\"nav-item\">
                            <a class=\"nav-link menu-link\" href=\"{{ path('app_events') }}\">
                                <i class=\"ri-external-link-line\"></i> <span>View site</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class=\"main-content\">
            <div class=\"page-content\">
                <div class=\"container-fluid\">
                    {% block page_heading_wrapper %}
                    <div class=\"row\">
                        <div class=\"col-12\">
                            <div class=\"page-title-box d-sm-flex align-items-center justify-content-between\">
                                <h4 class=\"mb-sm-0\">{% block page_heading %}Admin{% endblock %}</h4>
                                <div class=\"page-title-right\">
                                    <ol class=\"breadcrumb m-0\">
                                        <li class=\"breadcrumb-item\"><a href=\"{{ path('app_admin_dashboard') }}\">Admin</a></li>
                                        {% block page_breadcrumb %}{% endblock %}
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endblock %}
                    {% block content %}{% endblock %}
                </div>
            </div>
        </div>
    </div>

    <script src=\"/Admin/assets/libs/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/Admin/assets/libs/simplebar/simplebar.min.js\"></script>
    <script src=\"/Admin/assets/libs/node-waves/waves.min.js\"></script>
    <script src=\"/Admin/assets/libs/feather-icons/feather.min.js\"></script>
    <script src=\"/Admin/assets/js/plugins.js\"></script>
    <script src=\"/Admin/assets/js/app.js\"></script>
    {% block page_scripts %}{% endblock %}
</body>
</html>
", "admin/layout_velzon.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/admin/layout_velzon.html.twig");
    }
}

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

/* partials/header_events.html.twig */
class __TwigTemplate_1f65b2c37f5671f0a0899e124da4dc59 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header_events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/header_events.html.twig"));

        // line 1
        yield "\t<body class=\"homepage1-body\">
\t\t<!-- Popup Section -->
\t\t<div id=\"popup\" class=\"popup-overlay d-none\">
\t\t\t<div class=\"popup-content\">
\t\t\t\t<span class=\"close-btn\" id=\"close-popup\">&times;</span>
    // TODO: Add logging
\t\t\t\t<div class=\"popup-icon\">
\t\t\t\t\t<img src=\"/assets/img/logo/popup-logo.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t<div class=\"heading2\">
\t\t\t\t\t<h2>Grow your business with our agency</h2>
\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"/assets/img/icons/check3.svg\" alt=\"\" />Elevate User Experience Expertise</li>
\t\t\t\t\t\t<li><img src=\"/assets/img/icons/check3.svg\" alt=\"\" /> Elevate Your UI/UX Skills Designer</li>
\t\t\t\t\t\t<li><img src=\"/assets/img/icons/check3.svg\" alt=\"\" />Join Leading UI/UX Event the Year</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"space50\"></div>
\t\t\t\t<a class=\"vl-btn2\" href=\"contact.html\"
\t\t\t\t\t><span class=\"demo\">Buy Ticket Now</span><span class=\"arrow\"><i class=\"fa-solid fa-arrow-right\"></i></span>
\t\t\t\t</a>
\t\t\t\t<p class=\"no-thanks\">No thanks</p>
\t\t\t</div>
\t\t</div>
\t\t<!--===== PRELOADER STARTS =======-->
\t\t<div class=\"preloader\">
\t\t\t<div class=\"loading-container\">
\t\t\t\t<div class=\"loading\"></div>
\t\t\t\t<div id=\"loading-icon\"><img src=\"/assets/img/logo/preloader.png\" alt=\"\" /></div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== PRELOADER ENDS =======-->

\t\t<!--===== PAGE PROGRESS START=======-->
\t\t<div class=\"paginacontainer\">
\t\t\t<div class=\"progress-wrap\">
\t\t\t\t<svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
\t\t\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
\t\t\t\t</svg>
\t\t\t</div>
\t\t</div>
\t\t<!--===== PAGE PROGRESS END=======-->

\t\t<!--=====HEADER START=======-->
\t\t<header>
\t\t\t<div class=\"header-area homepage1 header header-sticky d-none d-lg-block\" id=\"header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"header-elements\">
\t\t\t\t\t\t\t\t<div class=\"site-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"/assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Browse Events</a></li>
\t\t\t\t\t\t\t\t\t\t";
        // line 59
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 60
            yield "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
            yield "\">My Events</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 61
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_catalog");
            yield "\">Services</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 63
        yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-menu-area\">
\t\t\t\t\t\t\t\t\t";
        // line 66
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 67
            yield "\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-menu-link\"><i class=\"fa-solid fa-user\"></i> ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "firstName", [], "any", false, false, false, 69), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "lastName", [], "any", false, false, false, 69), "html", null, true);
            yield " <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 71
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\"><i class=\"fa-solid fa-id-card\"></i> My Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 72
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\"><i class=\"fa-solid fa-ticket\"></i> My Orders</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 73
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 74
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\"><i class=\"fa-solid fa-gauge\"></i> Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 75
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
                yield "\"><i class=\"fa-solid fa-truck\"></i> Providers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 77
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><i class=\"fa-solid fa-right-from-bracket\"></i> Logout</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 82
            yield "\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 83
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn-login\">Log in</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn-register\">Sign up</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        }
        // line 87
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"body-overlay\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!--=====HEADER END =======-->

\t\t<!--===== MOBILE HEADER STARTS =======-->
\t\t<div class=\"mobile-header mobile-haeder1 d-block d-lg-none\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"mobile-header-elements\">
\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"/assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobile-nav-icon dots-menu\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bars-staggered\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mobile-sidebar mobile-sidebar1\">
\t\t\t<div class=\"logosicon-area\">
\t\t\t\t<div class=\"logos\">
\t\t\t\t\t<img src=\"/assets/img/logo/logo2.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-close\">
\t\t\t\t\t<i class=\"fa-solid fa-xmark\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mobile-nav mobile-nav1\">
\t\t\t\t<ul class=\"mobile-nav-list nav-list1\">
\t\t\t\t\t<li><a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Browse Events</a></li>
\t\t\t\t\t";
        // line 125
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 126
            yield "\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
            yield "\">My Events</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 127
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_catalog");
            yield "\">Services</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 128
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\">My Profile</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 129
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\">My Orders</a></li>
\t\t\t\t\t";
            // line 130
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 131
                yield "\t\t\t\t\t<li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\"><i class=\"fa-solid fa-gauge\"></i> Dashboard</a></li>
\t\t\t\t\t<li><a href=\"";
                // line 132
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
                yield "\"><i class=\"fa-solid fa-truck\"></i> Providers</a></li>
\t\t\t\t\t";
            }
            // line 134
            yield "\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><i class=\"fa-solid fa-right-from-bracket\"></i> Logout</a></li>
\t\t\t\t\t";
        } else {
            // line 136
            yield "\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Log in</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 137
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\">Sign up</a></li>
\t\t\t\t\t";
        }
        // line 139
        yield "\t\t\t\t</ul>
\t\t\t\t<div class=\"allmobilesection\">
\t\t\t\t\t<a href=\"contact.html\" class=\"vl-btn4\">Contact Now</a>
\t\t\t\t\t<div class=\"single-footer\">
\t\t\t\t\t\t<h3>Contact Info</h3>
\t\t\t\t\t\t<div class=\"footer1-contact-info\">
\t\t\t\t\t\t\t<div class=\"contact-info-single\">
\t\t\t\t\t\t\t\t<div class=\"contact-info-icon\">
\t\t\t\t\t\t\t\t\t<span><i class=\"fa-solid fa-phone-volume\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"contact-info-text\">
\t\t\t\t\t\t\t\t\t<a href=\"tel:+3(924)4596512\">+3(924)4596512</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-info-single\">

\t\t\t\t\t\t\t\t<div class=\"contact-info-icon\">
\t\t\t\t\t\t\t\t\t<span><i class=\"fa-solid fa-envelope\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"contact-info-text\">
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@example.com\">info@example.com</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single-footer\">
\t\t\t\t\t\t\t\t<h3>Our Location</h3>
\t\t\t\t\t\t\t\t<div class=\"contact-info-single\">
\t\t\t\t\t\t\t\t\t<div class=\"contact-info-icon\">
\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa-solid fa-location-dot\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"contact-info-text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@example.com\"
\t\t\t\t\t\t\t\t\t\t\t>55 East Birchwood Ave.Brooklyn, <br />
\t\t\t\t\t\t\t\t\t\t\tNew York 11201,United States</a
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single-footer\">
\t\t\t\t\t\t\t\t<h3>Social Links</h3>
\t\t\t\t\t\t\t\t<div class=\"social-links-mobile-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== MOBILE HEADER STARTS =======-->

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "partials/header_events.html.twig";
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
        return array (  279 => 139,  274 => 137,  269 => 136,  263 => 134,  258 => 132,  253 => 131,  251 => 130,  247 => 129,  243 => 128,  239 => 127,  234 => 126,  232 => 125,  228 => 124,  204 => 103,  186 => 87,  180 => 84,  176 => 83,  173 => 82,  164 => 77,  159 => 75,  154 => 74,  152 => 73,  148 => 72,  144 => 71,  137 => 69,  133 => 67,  131 => 66,  126 => 63,  121 => 61,  116 => 60,  114 => 59,  110 => 58,  103 => 54,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("\t<body class=\"homepage1-body\">
\t\t<!-- Popup Section -->
\t\t<div id=\"popup\" class=\"popup-overlay d-none\">
\t\t\t<div class=\"popup-content\">
\t\t\t\t<span class=\"close-btn\" id=\"close-popup\">&times;</span>
    // TODO: Add logging
\t\t\t\t<div class=\"popup-icon\">
\t\t\t\t\t<img src=\"/assets/img/logo/popup-logo.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t<div class=\"heading2\">
\t\t\t\t\t<h2>Grow your business with our agency</h2>
\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"/assets/img/icons/check3.svg\" alt=\"\" />Elevate User Experience Expertise</li>
\t\t\t\t\t\t<li><img src=\"/assets/img/icons/check3.svg\" alt=\"\" /> Elevate Your UI/UX Skills Designer</li>
\t\t\t\t\t\t<li><img src=\"/assets/img/icons/check3.svg\" alt=\"\" />Join Leading UI/UX Event the Year</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"space50\"></div>
\t\t\t\t<a class=\"vl-btn2\" href=\"contact.html\"
\t\t\t\t\t><span class=\"demo\">Buy Ticket Now</span><span class=\"arrow\"><i class=\"fa-solid fa-arrow-right\"></i></span>
\t\t\t\t</a>
\t\t\t\t<p class=\"no-thanks\">No thanks</p>
\t\t\t</div>
\t\t</div>
\t\t<!--===== PRELOADER STARTS =======-->
\t\t<div class=\"preloader\">
\t\t\t<div class=\"loading-container\">
\t\t\t\t<div class=\"loading\"></div>
\t\t\t\t<div id=\"loading-icon\"><img src=\"/assets/img/logo/preloader.png\" alt=\"\" /></div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== PRELOADER ENDS =======-->

\t\t<!--===== PAGE PROGRESS START=======-->
\t\t<div class=\"paginacontainer\">
\t\t\t<div class=\"progress-wrap\">
\t\t\t\t<svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
\t\t\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
\t\t\t\t</svg>
\t\t\t</div>
\t\t</div>
\t\t<!--===== PAGE PROGRESS END=======-->

\t\t<!--=====HEADER START=======-->
\t\t<header>
\t\t\t<div class=\"header-area homepage1 header header-sticky d-none d-lg-block\" id=\"header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"header-elements\">
\t\t\t\t\t\t\t\t<div class=\"site-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\"><img src=\"/assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_home') }}\">Browse Events</a></li>
\t\t\t\t\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_my_events') }}\">My Events</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_services_catalog') }}\">Services</a></li>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-menu-area\">
\t\t\t\t\t\t\t\t\t{% if app.user %}
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-menu-link\"><i class=\"fa-solid fa-user\"></i> {{ app.user.firstName }} {{ app.user.lastName }} <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_profile') }}\"><i class=\"fa-solid fa-id-card\"></i> My Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_orders_index') }}\"><i class=\"fa-solid fa-ticket\"></i> My Orders</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_admin_dashboard') }}\"><i class=\"fa-solid fa-gauge\"></i> Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_admin_service_provider_index') }}\"><i class=\"fa-solid fa-truck\"></i> Providers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_logout') }}\"><i class=\"fa-solid fa-right-from-bracket\"></i> Logout</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_login') }}\" class=\"btn-login\">Log in</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_register') }}\" class=\"btn-register\">Sign up</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"body-overlay\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>
\t\t<!--=====HEADER END =======-->

\t\t<!--===== MOBILE HEADER STARTS =======-->
\t\t<div class=\"mobile-header mobile-haeder1 d-block d-lg-none\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"mobile-header-elements\">
\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\"><img src=\"/assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobile-nav-icon dots-menu\">
\t\t\t\t\t\t\t<i class=\"fa-solid fa-bars-staggered\"></i>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"mobile-sidebar mobile-sidebar1\">
\t\t\t<div class=\"logosicon-area\">
\t\t\t\t<div class=\"logos\">
\t\t\t\t\t<img src=\"/assets/img/logo/logo2.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-close\">
\t\t\t\t\t<i class=\"fa-solid fa-xmark\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mobile-nav mobile-nav1\">
\t\t\t\t<ul class=\"mobile-nav-list nav-list1\">
\t\t\t\t\t<li><a href=\"{{ path('app_home') }}\">Browse Events</a></li>
\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') %}
\t\t\t\t\t<li><a href=\"{{ path('app_my_events') }}\">My Events</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_services_catalog') }}\">Services</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_profile') }}\">My Profile</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_orders_index') }}\">My Orders</a></li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li><a href=\"{{ path('app_admin_dashboard') }}\"><i class=\"fa-solid fa-gauge\"></i> Dashboard</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_admin_service_provider_index') }}\"><i class=\"fa-solid fa-truck\"></i> Providers</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li><a href=\"{{ path('app_logout') }}\"><i class=\"fa-solid fa-right-from-bracket\"></i> Logout</a></li>
\t\t\t\t\t{% else %}
\t\t\t\t\t<li><a href=\"{{ path('app_login') }}\">Log in</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_register') }}\">Sign up</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t\t<div class=\"allmobilesection\">
\t\t\t\t\t<a href=\"contact.html\" class=\"vl-btn4\">Contact Now</a>
\t\t\t\t\t<div class=\"single-footer\">
\t\t\t\t\t\t<h3>Contact Info</h3>
\t\t\t\t\t\t<div class=\"footer1-contact-info\">
\t\t\t\t\t\t\t<div class=\"contact-info-single\">
\t\t\t\t\t\t\t\t<div class=\"contact-info-icon\">
\t\t\t\t\t\t\t\t\t<span><i class=\"fa-solid fa-phone-volume\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"contact-info-text\">
\t\t\t\t\t\t\t\t\t<a href=\"tel:+3(924)4596512\">+3(924)4596512</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"contact-info-single\">

\t\t\t\t\t\t\t\t<div class=\"contact-info-icon\">
\t\t\t\t\t\t\t\t\t<span><i class=\"fa-solid fa-envelope\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"contact-info-text\">
\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@example.com\">info@example.com</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single-footer\">
\t\t\t\t\t\t\t\t<h3>Our Location</h3>
\t\t\t\t\t\t\t\t<div class=\"contact-info-single\">
\t\t\t\t\t\t\t\t\t<div class=\"contact-info-icon\">
\t\t\t\t\t\t\t\t\t\t<span><i class=\"fa-solid fa-location-dot\"></i></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"contact-info-text\">
\t\t\t\t\t\t\t\t\t\t<a href=\"mailto:info@example.com\"
\t\t\t\t\t\t\t\t\t\t\t>55 East Birchwood Ave.Brooklyn, <br />
\t\t\t\t\t\t\t\t\t\t\tNew York 11201,United States</a
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"single-footer\">
\t\t\t\t\t\t\t\t<h3>Social Links</h3>
\t\t\t\t\t\t\t\t<div class=\"social-links-mobile-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-youtube\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== MOBILE HEADER STARTS =======-->

", "partials/header_events.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\partials\\header_events.html.twig");
    }
}

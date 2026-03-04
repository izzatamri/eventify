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

/* event_show.html.twig */
class __TwigTemplate_8a04d8c82385f20a0c3b4b7d96aa08b0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event_show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 6, $this->source); })()), "title", [], "any", false, false, false, 6), "html", null, true);
        yield " - Eventify</title>
\t\t<link rel=\"shortcut icon\" href=\"/assets/img/logo/fav-logo1.png\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/bootstrap.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/aos.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/fontawesome.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/magnific-popup.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/mobile.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/owlcarousel.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/sidebar.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/slick-slider.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/nice-select.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/odometer.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/main.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/header-custom.css\" />
\t\t<style>
\t\t\t/* Remove extra spacing around footer */
\t\t\thtml, body {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\twidth: 100%;
\t\t\t\toverflow-x: hidden;
\t\t\t}
\t\t\t.footer1-sertion-area {
\t\t\t\tmargin: 0 !important;
\t\t\t\tpadding-left: 0 !important;
\t\t\t\tpadding-right: 0 !important;
\t\t\t}
\t\t\t/* Ticket checkout overlay (Reserve a spot) */
\t\t\t.ticket-checkout-overlay {
\t\t\t\tposition: fixed;
\t\t\t\tinset: 0;
\t\t\t\tz-index: 999;
\t\t\t\tdisplay: none;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tpadding: 20px;
\t\t\t}
\t\t\t.ticket-checkout-overlay.active {
\t\t\t\tdisplay: flex;
\t\t\t\tanimation: fadeIn 0.2s ease-out;
\t\t\t}
\t\t\t@keyframes fadeIn {
\t\t\t\tfrom { opacity: 0; }
\t\t\t\tto { opacity: 1; }
\t\t\t}
\t\t\t.ticket-checkout-backdrop {
\t\t\t\tposition: absolute;
\t\t\t\tinset: 0;
\t\t\t\tbackground: rgba(0, 0, 0, 0.75);
\t\t\t\tbackdrop-filter: blur(4px);
\t\t\t}
\t\t\t.ticket-checkout-modal {
\t\t\t\tposition: relative;
\t\t\t\tmax-width: 1000px;
\t\t\t\twidth: 100%;
\t\t\t\tmax-height: 90vh;
\t\t\t\tbackground: #fff;
\t\t\t\tborder-radius: 20px;
\t\t\t\tbox-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
\t\t\t\toverflow: hidden;
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: row;
\t\t\t\tz-index: 1;
\t\t\t\tanimation: slideUp 0.3s ease-out;
\t\t\t}
\t\t\t@keyframes slideUp {
\t\t\t\tfrom { transform: translateY(20px); opacity: 0; }
\t\t\t\tto { transform: translateY(0); opacity: 1; }
\t\t\t}
\t\t\t@media (max-width: 991px) {
\t\t\t\t.ticket-checkout-modal {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\tmax-height: 95vh;
\t\t\t\t}
\t\t\t}
\t\t\t.ticket-checkout-main {
\t\t\t\tflex: 2;
\t\t\t\tpadding: 2.5rem;
\t\t\t\toverflow-y: auto;
\t\t\t\tmax-height: 90vh;
\t\t\t}
\t\t\t@media (max-width: 991px) {
\t\t\t\t.ticket-checkout-main {
\t\t\t\t\tpadding: 1.5rem;
\t\t\t\t}
\t\t\t}
\t\t\t.ticket-checkout-summary {
\t\t\t\tflex: 1.3;
\t\t\t\tpadding: 2.5rem;
\t\t\t\tbackground: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
\t\t\t\tborder-left: 1px solid #dee2e6;
\t\t\t\toverflow-y: auto;
\t\t\t}
\t\t\t@media (max-width: 991px) {
\t\t\t\t.ticket-checkout-summary {
\t\t\t\t\tpadding: 1.5rem;
\t\t\t\t\tborder-left: none;
\t\t\t\t\tborder-top: 1px solid #dee2e6;
\t\t\t\t}
\t\t\t}
\t\t\t.ticket-checkout-thankyou {
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 2rem 0;
\t\t\t}
\t\t\t.ticket-checkout-thankyou-icon {
\t\t\t\twidth: 56px;
\t\t\t\theight: 56px;
\t\t\t\tborder-radius: 50%;
\t\t\t\tbackground: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
\t\t\t\tcolor: #fff;
\t\t\t\tdisplay: inline-flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t\tfont-size: 24px;
\t\t\t\tbox-shadow: 0 8px 20px rgba(34, 197, 94, 0.3);
\t\t\t}
\t\t\t.ticket-summary-hero {
\t\t\t\tborder-radius: 15px;
\t\t\t\toverflow: hidden;
\t\t\t\tmargin-bottom: 1.5rem;
\t\t\t\tbackground: #e5e7eb;
\t\t\t\theight: 160px;
\t\t\t\tbox-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
\t\t\t}
\t\t\t.ticket-summary-hero img {
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\tobject-fit: cover;
\t\t\t\tdisplay: block;
\t\t\t}
\t\t\t.ticket-checkout-header-title {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 700;
\t\t\t\tmargin-bottom: 0.5rem;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-checkout-header-subtitle {
\t\t\t\tfont-size: 0.95rem;
\t\t\t\tcolor: #6b7280;
\t\t\t\tmargin-bottom: 1.5rem;
\t\t\t}
\t\t\t.ticket-checkout-card {
\t\t\t\tborder-radius: 15px;
\t\t\t\tborder: 1px solid #e5e7eb;
\t\t\t\tpadding: 1.5rem;
\t\t\t\tbackground: #fff;
\t\t\t\tbox-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
\t\t\t\tmargin-bottom: 1.5rem;
\t\t\t}
\t\t\t.ticket-checkout-row {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\talign-items: center;
\t\t\t\tpadding: 1rem 0;
\t\t\t\tborder-bottom: 1px solid #f3f4f6;
\t\t\t}
\t\t\t.ticket-checkout-row:last-child {
\t\t\t\tborder-bottom: none;
\t\t\t\tpadding-bottom: 0;
\t\t\t}
\t\t\t.ticket-checkout-row:first-child {
\t\t\t\tpadding-top: 0;
\t\t\t}
\t\t\t.ticket-name {
\t\t\t\tfont-weight: 600;
\t\t\t\tfont-size: 1rem;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-meta {
\t\t\t\tfont-size: 0.85rem;
\t\t\t\tcolor: #9ca3af;
\t\t\t\tmargin-top: 0.25rem;
\t\t\t}
\t\t\t.ticket-price {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: #059669;
\t\t\t}
\t\t\t.ticket-qty-control {
\t\t\t\tdisplay: inline-flex;
\t\t\t\talign-items: center;
\t\t\t\tborder-radius: 10px;
\t\t\t\tborder: 2px solid #e5e7eb;
\t\t\t\toverflow: hidden;
\t\t\t\tbackground: #fff;
\t\t\t}
\t\t\t.ticket-qty-btn {
\t\t\t\twidth: 36px;
\t\t\t\theight: 36px;
\t\t\t\tborder: none;
\t\t\t\tbackground: transparent;
\t\t\t\tdisplay: inline-flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tfont-size: 1rem;
\t\t\t\tcursor: pointer;
\t\t\t\tcolor: #374151;
\t\t\t\ttransition: all 0.2s;
\t\t\t}
\t\t\t.ticket-qty-btn:hover {
\t\t\t\tbackground: #f3f4f6;
\t\t\t\tcolor: #0d6efd;
\t\t\t}
\t\t\t.ticket-qty-btn:active {
\t\t\t\ttransform: scale(0.95);
\t\t\t}
\t\t\t.ticket-qty-value {
\t\t\t\tmin-width: 40px;
\t\t\t\ttext-align: center;
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-checkout-footer {
\t\t\t\tmargin-top: 2rem;
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: flex-end;
\t\t\t}
\t\t\t.ticket-summary-line {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\tfont-size: 0.95rem;
\t\t\t\tmargin-bottom: 0.75rem;
\t\t\t\tcolor: #4b5563;
\t\t\t}
\t\t\t.ticket-summary-line:last-child {
\t\t\t\tmargin-bottom: 0;
\t\t\t}
\t\t\t.ticket-summary-total {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\tfont-weight: 700;
\t\t\t\tfont-size: 1.25rem;
\t\t\t\tmargin-top: 1.25rem;
\t\t\t\tpadding-top: 1.25rem;
\t\t\t\tborder-top: 2px solid #d1d5db;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-checkout-close {
\t\t\t\tposition: absolute;
\t\t\t\ttop: 1.25rem;
\t\t\t\tright: 1.25rem;
\t\t\t\twidth: 36px;
\t\t\t\theight: 36px;
\t\t\t\tborder: none;
\t\t\t\tbackground: #f3f4f6;
\t\t\t\tborder-radius: 50%;
\t\t\t\tfont-size: 1.25rem;
\t\t\t\tcursor: pointer;
\t\t\t\tcolor: #6b7280;
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\ttransition: all 0.2s;
\t\t\t\tz-index: 10;
\t\t\t}
\t\t\t.ticket-checkout-close:hover {
\t\t\t\tbackground: #e5e7eb;
\t\t\t\tcolor: #374151;
\t\t\t\ttransform: rotate(90deg);
\t\t\t}
\t\t</style>
\t\t<script src=\"/assets/js/vendor/jquery-3.7.1.min.js\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t<div id=\"popup\" class=\"popup-overlay d-none\"></div>
\t\t<div class=\"preloader\">
\t\t\t<div class=\"loading-container\">
\t\t\t\t<div class=\"loading\"></div>
\t\t\t\t<div id=\"loading-icon\"><img src=\"/assets/img/logo/preloader.png\" alt=\"\" /></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"paginacontainer\">
\t\t\t<div class=\"progress-wrap\">
\t\t\t\t<svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
\t\t\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
\t\t\t\t</svg>
\t\t\t</div>
\t\t</div>

\t\t<header>
\t\t\t<div class=\"header-area homepage1 header header-sticky d-none d-lg-block\" id=\"header\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t<div class=\"header-elements\">
\t\t\t\t\t\t\t\t<div class=\"site-logo\">
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 294
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"/assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 298
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Browse Events</a></li>
\t\t\t\t\t\t\t\t\t\t";
        // line 299
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 300
            yield "\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_events");
            yield "\">My Events</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 301
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_services_catalog");
            yield "\">Services</a></li>
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 303
        yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"user-menu-area\">
\t\t\t\t\t\t\t\t\t";
        // line 306
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "user", [], "any", false, false, false, 306)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 307
            yield "\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"user-menu-link\"><i class=\"fa-solid fa-user\"></i> ";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 309, $this->source); })()), "user", [], "any", false, false, false, 309), "firstName", [], "any", false, false, false, 309), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 309, $this->source); })()), "user", [], "any", false, false, false, 309), "lastName", [], "any", false, false, false, 309), "html", null, true);
            yield " <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 311
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\"><i class=\"fa-solid fa-id-card\"></i> My Profile</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 312
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
            yield "\"><i class=\"fa-solid fa-ticket\"></i> My Orders</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 313
            if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 314
                yield "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_dashboard");
                yield "\"><i class=\"fa-solid fa-gauge\"></i> Dashboard</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                // line 315
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_service_provider_index");
                yield "\"><i class=\"fa-solid fa-truck\"></i> Providers</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 317
            yield "\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\"><i class=\"fa-solid fa-right-from-bracket\"></i> Logout</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        } else {
            // line 322
            yield "\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 323
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"btn-login\">Log in</a></li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
            // line 324
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"btn-register\">Sign up</a></li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t";
        }
        // line 327
        yield "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"body-overlay\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</header>

\t\t<div class=\"mobile-header mobile-haeder1 d-block d-lg-none\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"mobile-header-elements\">
\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t<a href=\"";
        // line 341
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"><img src=\"/assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobile-nav-icon dots-menu\"><i class=\"fa-solid fa-bars-staggered\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mobile-sidebar mobile-sidebar1\">
\t\t\t<div class=\"logosicon-area\">
\t\t\t\t<div class=\"logos\"><img src=\"/assets/img/logo/logo2.png\" alt=\"\" /></div>
\t\t\t\t<div class=\"menu-close\"><i class=\"fa-solid fa-xmark\"></i></div>
\t\t\t</div>
\t\t\t<div class=\"mobile-nav mobile-nav1\">
\t\t\t\t<ul class=\"mobile-nav-list nav-list1\">
\t\t\t\t\t<li><a href=\"";
        // line 355
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Home</a></li>
\t\t\t\t\t<li><a href=\"";
        // line 356
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Events</a></li>
\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 363
        yield "\t\t<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 100px 0;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 m-auto\">
\t\t\t\t\t\t<div class=\"heading1 text-center\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 48px; margin-bottom: 20px;\">";
        // line 368
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 368, $this->source); })()), "title", [], "any", false, false, false, 368), "html", null, true);
        yield "</h1>
\t\t\t\t\t\t\t";
        // line 369
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 369, $this->source); })()), "description", [], "any", false, false, false, 369)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 370
            yield "\t\t\t\t\t\t\t\t<p style=\"font-size: 18px; color: rgba(255,255,255,0.9); margin-bottom: 30px;\">
\t\t\t\t\t\t\t\t\t";
            // line 371
            yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 371, $this->source); })()), "description", [], "any", false, false, false, 371)) > 120)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 371, $this->source); })()), "description", [], "any", false, false, false, 371), 0, 120) . "..."), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 371, $this->source); })()), "description", [], "any", false, false, false, 371), "html", null, true)));
            yield "
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
        }
        // line 374
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 381
        yield "\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t";
        // line 385
        yield "\t\t\t\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 385, $this->source); })()), "organizer", [], "any", false, false, false, 385)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 386
            yield "\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 56px; height: 56px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold text-primary\" style=\"font-size: 18px;\">";
            // line 390
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 390, $this->source); })()), "organizer", [], "any", false, false, false, 390), "name", [], "any", false, false, false, 390), 0, 2)), "html", null, true);
            yield "</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 13px;\">Organized by</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\" style=\"font-size: 16px; color: #333;\">";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 394, $this->source); })()), "organizer", [], "any", false, false, false, 394), "name", [], "any", false, false, false, 394), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary btn-sm\" style=\"border-radius: 8px;\">Follow</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 401
        yield "
\t\t\t\t\t";
        // line 403
        yield "\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 20px; color: #333;\">About This Event</h3>
\t\t\t\t\t\t\t<div style=\"color: #555; line-height: 1.7;\">";
        // line 406
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 406, $this->source); })()), "description", [], "any", false, false, false, 406), "html", null, true));
        yield "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 411
        yield "\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-4\" style=\"font-size: 20px; color: #333;\">Event Details</h3>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px;\">Date & Time</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 15px; color: #333;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 423
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 423, $this->source); })()), "startDatetime", [], "any", false, false, false, 423) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 423, $this->source); })()), "endDatetime", [], "any", false, false, false, 423))) {
            // line 424
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 424, $this->source); })()), "startDatetime", [], "any", false, false, false, 424), "l, M d"), "html", null, true);
            yield "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 425
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 425, $this->source); })()), "startDatetime", [], "any", false, false, false, 425), "g:i A"), "html", null, true);
            yield " - ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 425, $this->source); })()), "endDatetime", [], "any", false, false, false, 425), "g:i A"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t";
        } elseif ((($tmp = CoreExtension::getAttribute($this->env, $this->source,         // line 426
(isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 426, $this->source); })()), "startDatetime", [], "any", false, false, false, 426)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 427
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 427, $this->source); })()), "startDatetime", [], "any", false, false, false, 427), "l, F j, Y"), "html", null, true);
            yield "<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 428
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 428, $this->source); })()), "startDatetime", [], "any", false, false, false, 428), "g:i A"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 430
        yield "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-clock text-success\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px;\">Duration</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 15px; color: #333;\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 442
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 442, $this->source); })()), "startDatetime", [], "any", false, false, false, 442) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 442, $this->source); })()), "endDatetime", [], "any", false, false, false, 442))) {
            // line 443
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 443, $this->source); })()), "endDatetime", [], "any", false, false, false, 443), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 443, $this->source); })()), "startDatetime", [], "any", false, false, false, 443)], "method", false, false, false, 443);
            // line 444
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 444, $this->source); })()), "days", [], "any", false, false, false, 444) * 24) + CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 444, $this->source); })()), "h", [], "any", false, false, false, 444)), "html", null, true);
            yield " hours
\t\t\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 446
            yield "\t\t\t\t\t\t\t\t\t\t\t\t\tTBA
\t\t\t\t\t\t\t\t\t\t\t\t";
        }
        // line 448
        yield "\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-danger bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-dot text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px;\">Venue Type</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 15px; color: #333;\">";
        // line 459
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 459, $this->source); })()), "venue", [], "any", false, false, false, 459)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "In-Person Event";
        } else {
            yield "Online / TBA";
        }
        yield "</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 468
        yield "\t\t\t\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 468, $this->source); })()), "venue", [], "any", false, false, false, 468)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 469
            yield "\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 20px; color: #333;\">Location</h3>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-danger bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-map-marker-alt text-danger\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-1\" style=\"font-size: 16px; color: #333;\">";
            // line 477
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 477, $this->source); })()), "venue", [], "any", false, false, false, 477), "name", [], "any", false, false, false, 477), "html", null, true);
            yield "</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 14px;\">
\t\t\t\t\t\t\t\t\t\t";
            // line 479
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 479, $this->source); })()), "venue", [], "any", false, false, false, 479), "address", [], "any", false, false, false, 479)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 479, $this->source); })()), "venue", [], "any", false, false, false, 479), "address", [], "any", false, false, false, 479), "html", null, true);
            }
            // line 480
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 480, $this->source); })()), "venue", [], "any", false, false, false, 480), "city", [], "any", false, false, false, 480)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield "<br>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 480, $this->source); })()), "venue", [], "any", false, false, false, 480), "city", [], "any", false, false, false, 480), "html", null, true);
            }
            // line 481
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 481, $this->source); })()), "venue", [], "any", false, false, false, 481), "state", [], "any", false, false, false, 481)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 481, $this->source); })()), "venue", [], "any", false, false, false, 481), "state", [], "any", false, false, false, 481), "html", null, true);
            }
            // line 482
            yield "\t\t\t\t\t\t\t\t\t\t";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 482, $this->source); })()), "venue", [], "any", false, false, false, 482), "postalCode", [], "any", false, false, false, 482)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 482, $this->source); })()), "venue", [], "any", false, false, false, 482), "postalCode", [], "any", false, false, false, 482), "html", null, true);
            }
            // line 483
            yield "\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rounded bg-light d-flex align-items-center justify-content-center\" style=\"height: 200px; border: 2px dashed #dee2e6;\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"border-radius: 8px;\"><i class=\"fa-solid fa-map me-2\"></i>View on Map</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 492
        yield "
\t\t\t\t\t";
        // line 494
        yield "\t\t\t\t\t";
        $context["visible_sponsors"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 494, $this->source); })()), "sponsors", [], "any", false, false, false, 494), function ($__s__) use ($context, $macros) { $context["s"] = $__s__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["s"]) || array_key_exists("s", $context) ? $context["s"] : (function () { throw new RuntimeError('Variable "s" does not exist.', 494, $this->source); })()), "status", [], "any", false, false, false, 494) == "active"); });
        // line 495
        yield "\t\t\t\t\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["visible_sponsors"]) || array_key_exists("visible_sponsors", $context) ? $context["visible_sponsors"] : (function () { throw new RuntimeError('Variable "visible_sponsors" does not exist.', 495, $this->source); })())) > 0)) {
            // line 496
            yield "\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 20px; color: #333;\">Event Sponsors</h3>
\t\t\t\t\t\t\t<div class=\"d-flex flex-wrap gap-3\">
\t\t\t\t\t\t\t\t";
            // line 500
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["visible_sponsors"]) || array_key_exists("visible_sponsors", $context) ? $context["visible_sponsors"] : (function () { throw new RuntimeError('Variable "visible_sponsors" does not exist.', 500, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["sponsor"]) {
                // line 501
                yield "\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-3 border rounded p-3\" style=\"border-radius: 10px;\">
\t\t\t\t\t\t\t\t\t\t";
                // line 502
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "logoUrl", [], "any", false, false, false, 502)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 503
                    yield "\t\t\t\t\t\t\t\t\t\t\t<img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "logoUrl", [], "any", false, false, false, 503), "html", null, true);
                    yield "\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "name", [], "any", false, false, false, 503), "html", null, true);
                    yield "\" class=\"rounded\" style=\"width: 56px; height: 56px; object-fit: contain; background: #fff;\" />
\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 505
                    yield "\t\t\t\t\t\t\t\t\t\t\t<div class=\"rounded d-flex align-items-center justify-content-center bg-secondary bg-opacity-25 text-secondary fw-bold\" style=\"width: 56px; height: 56px; font-size: 1rem;\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "name", [], "any", false, false, false, 505), 0, 2)), "html", null, true);
                    yield "</div>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 507
                yield "\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">";
                // line 508
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "name", [], "any", false, false, false, 508), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                // line 509
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "website", [], "any", false, false, false, 509)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 510
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["sponsor"], "website", [], "any", false, false, false, 510), "html", null, true);
                    yield "\" target=\"_blank\" rel=\"noopener\" class=\"small text-muted ms-1\"><i class=\"fa-solid fa-external-link-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 512
                yield "\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['sponsor'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 515
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 519
        yield "
\t\t\t\t\t";
        // line 520
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 520, $this->source); })()), "sponsorshipPackages", [], "any", false, false, false, 520)) > 0)) {
            // line 521
            yield "\t\t\t\t\t\t<h3 class=\"h5 fw-bold mt-4 mb-2\">Sponsorship packages</h3>
\t\t\t\t\t\t<p class=\"text-muted small mb-3\">Support this event by choosing a sponsorship package.</p>
\t\t\t\t\t\t<div class=\"row g-3 mb-4\">
\t\t\t\t\t\t\t";
            // line 524
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 524, $this->source); })()), "sponsorshipPackages", [], "any", false, false, false, 524));
            foreach ($context['_seq'] as $context["_key"] => $context["package"]) {
                // line 525
                yield "\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100 shadow-sm d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-primary mb-1\">";
                // line 527
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 527), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-2\">\$";
                // line 528
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "price", [], "any", false, false, false, 528), 2), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t";
                // line 529
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["package"], "description", [], "any", false, false, false, 529)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 530
                    yield "\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "description", [], "any", false, false, false, 530), "html", null, true);
                    yield "</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 532
                yield "\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-1\"><i class=\"fa-solid fa-table-cells me-1\"></i>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "numberOfTables", [], "any", false, false, false, 532), "html", null, true);
                yield " table(s) · ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "seatsPerTable", [], "any", false, false, false, 532), "html", null, true);
                yield " seats/table</p>
\t\t\t\t\t\t\t\t\t\t";
                // line 533
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["package"], "benefits", [], "any", false, false, false, 533)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    // line 534
                    yield "\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">";
                    yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "benefits", [], "any", false, false, false, 534), "html", null, true));
                    yield "</p>
\t\t\t\t\t\t\t\t\t\t";
                }
                // line 536
                yield "\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm mt-auto sponsor-request-btn\" data-submit-url=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_request_submit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 536, $this->source); })()), "id", [], "any", false, false, false, 536), "packageId" => CoreExtension::getAttribute($this->env, $this->source, $context["package"], "id", [], "any", false, false, false, 536)]), "html", null, true);
                yield "\" data-package-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["package"], "name", [], "any", false, false, false, 536), "html", null, true);
                yield "\"><i class=\"fa-solid fa-handshake me-1\"></i>Become a sponsor</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['package'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 540
            yield "\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 542
        yield "
\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"position-sticky\" style=\"top: 100px;\">
\t\t\t\t\t\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t";
        // line 550
        yield "\t\t\t\t\t\t\t\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 550, $this->source); })()), "image", [], "any", false, false, false, 550)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 551
            yield "\t\t\t\t\t\t\t\t<div class=\"rounded mb-4\" style=\"overflow: hidden; height: 200px;\">
\t\t\t\t\t\t\t\t\t<img src=\"";
            // line 552
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 552, $this->source); })()), "image", [], "any", false, false, false, 552), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 552, $this->source); })()), "title", [], "any", false, false, false, 552), "html", null, true);
            yield "\" style=\"width: 100%; height: 100%; object-fit: cover;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        // line 555
        yield "\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 557
        yield "\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Ticket Price</p>
\t\t\t\t\t\t\t\t\t<p class=\"h3 fw-bold mb-0\" style=\"color: #198754;\">";
        // line 559
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 559, $this->source); })()), "priceLabel", [], "any", false, false, false, 559), "html", null, true);
        yield "</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 563
        yield "\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary w-100 btn-lg mb-3\" id=\"open-ticket-checkout\" style=\"border-radius: 10px; font-weight: 600;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket me-2\"></i>Get Tickets
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t";
        // line 568
        yield "\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 mb-4\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary flex-fill\" id=\"share-event-btn\" style=\"border-radius: 8px;\" title=\"Share this event\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-share-nodes\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary flex-fill\" id=\"favorite-event-btn\" style=\"border-radius: 8px;\" title=\"Save to favorites\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-heart\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        // line 576
        if ((($tmp = $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("EVENT_EDIT", (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 576, $this->source); })()))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 577
            yield "\t\t\t\t\t\t\t<div class=\"pt-3 border-top mt-3\">
\t\t\t\t\t\t\t\t<a href=\"";
            // line 578
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_event", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 578, $this->source); })()), "id", [], "any", false, false, false, 578)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm me-1\">View orders</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 579
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsorship_package_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 579, $this->source); })()), "id", [], "any", false, false, false, 579)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm me-1\">Packages</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 580
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_sponsor_index", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 580, $this->source); })()), "id", [], "any", false, false, false, 580)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm me-1\">Sponsors</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 581
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_service_booking_index", ["eventId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 581, $this->source); })()), "id", [], "any", false, false, false, 581)]), "html", null, true);
            yield "\" class=\"btn btn-outline-primary btn-sm me-1\"><i class=\"fa-solid fa-truck me-1\"></i>Service bookings</a>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 582
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 582, $this->source); })()), "id", [], "any", false, false, false, 582)]), "html", null, true);
            yield "\" class=\"btn btn-outline-secondary btn-sm me-1\">Edit</a>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"";
            // line 583
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 583, $this->source); })()), "id", [], "any", false, false, false, 583)]), "html", null, true);
            yield "\" class=\"d-inline\" onsubmit=\"return confirm('Delete this event?');\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"";
            // line 584
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 584, $this->source); })()), "id", [], "any", false, false, false, 584))), "html", null, true);
            yield "\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 589
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t";
        // line 593
        yield "\t\t\t\t\t";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["otherEvents"]) || array_key_exists("otherEvents", $context) ? $context["otherEvents"] : (function () { throw new RuntimeError('Variable "otherEvents" does not exist.', 593, $this->source); })())) > 0)) {
            // line 594
            yield "\t\t\t\t\t<div class=\"card border-0 mt-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 18px; color: #333;\">Other Events You May Like</h3>
\t\t\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t";
            // line 598
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["otherEvents"]) || array_key_exists("otherEvents", $context) ? $context["otherEvents"] : (function () { throw new RuntimeError('Variable "otherEvents" does not exist.', 598, $this->source); })()), 0, 3));
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
            foreach ($context['_seq'] as $context["_key"] => $context["other"]) {
                // line 599
                yield "\t\t\t\t\t\t\t\t\t<div class=\"list-group-item border-0 px-0 py-3 ";
                if ((($tmp =  !CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 599)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "border-bottom";
                }
                yield "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 600
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 600)]), "html", null, true);
                yield "\" class=\"fw-semibold text-dark text-decoration-none d-block mb-1\" style=\"font-size: 15px;\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["other"], "title", [], "any", false, false, false, 600), "html", null, true);
                yield "</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t";
                // line 602
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["other"], "startDatetime", [], "any", false, false, false, 602)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["other"], "startDatetime", [], "any", false, false, false, 602), "D, d M"), "html", null, true);
                    yield " · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["other"], "startDatetime", [], "any", false, false, false, 602), "H:i"), "html", null, true);
                }
                // line 603
                yield "\t\t\t\t\t\t\t\t\t\t\t";
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["other"], "venue", [], "any", false, false, false, 603)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " · ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["other"], "venue", [], "any", false, false, false, 603), "name", [], "any", false, false, false, 603), "html", null, true);
                }
                // line 604
                yield "\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small fw-semibold text-success\">";
                // line 606
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["other"], "priceLabel", [], "any", false, false, false, 606), "html", null, true);
                yield "</span>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                // line 607
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["other"], "id", [], "any", false, false, false, 607)]), "html", null, true);
                yield "\" class=\"btn btn-sm btn-outline-primary\" style=\"border-radius: 6px;\">View</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['other'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 611
            yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 615
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t";
        // line 620
        yield "\t\t";
        if (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 620, $this->source); })()), "sponsorshipPackages", [], "any", false, false, false, 620)) > 0) && array_key_exists("sponsorRequestForm", $context))) {
            // line 621
            yield "\t\t<div class=\"sponsor-request-overlay\" id=\"sponsor-request-modal\" style=\"display: none; position: fixed; inset: 0; z-index: 1000; background: rgba(0,0,0,0.5); align-items: center; justify-content: center;\">
\t\t\t<div class=\"sponsor-request-dialog rounded shadow bg-white mx-3\" style=\"max-width: 520px; width: 100%; max-height: 90vh; overflow-y: auto;\">
\t\t\t\t<div class=\"p-4 border-bottom d-flex justify-content-between align-items-center\">
\t\t\t\t\t<h3 class=\"h5 mb-0\">Become a sponsor — <span id=\"sponsor-modal-package-name\"></span></h3>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-link text-dark p-0\" id=\"sponsor-request-close\" aria-label=\"Close\">&times;</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t";
            // line 628
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 628, $this->source); })()), 'form_start', ["attr" => ["id" => "sponsor-request-form", "novalidate" => "novalidate"]]);
            yield "
\t\t\t\t\t";
            // line 629
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 629, $this->source); })()), "_token", [], "any", false, false, false, 629), 'widget');
            yield "
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
            // line 631
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 631, $this->source); })()), "name", [], "any", false, false, false, 631), 'label');
            yield "
\t\t\t\t\t\t";
            // line 632
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 632, $this->source); })()), "name", [], "any", false, false, false, 632), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t";
            // line 633
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 633, $this->source); })()), "name", [], "any", false, false, false, 633), 'errors');
            yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
            // line 636
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 636, $this->source); })()), "email", [], "any", false, false, false, 636), 'label');
            yield "
\t\t\t\t\t\t";
            // line 637
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 637, $this->source); })()), "email", [], "any", false, false, false, 637), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t";
            // line 638
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 638, $this->source); })()), "email", [], "any", false, false, false, 638), 'errors');
            yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t";
            // line 642
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 642, $this->source); })()), "phone", [], "any", false, false, false, 642), 'label');
            yield "
\t\t\t\t\t\t\t";
            // line 643
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 643, $this->source); })()), "phone", [], "any", false, false, false, 643), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t\t";
            // line 644
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 644, $this->source); })()), "phone", [], "any", false, false, false, 644), 'errors');
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t";
            // line 647
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 647, $this->source); })()), "website", [], "any", false, false, false, 647), 'label');
            yield "
\t\t\t\t\t\t\t";
            // line 648
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 648, $this->source); })()), "website", [], "any", false, false, false, 648), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t\t";
            // line 649
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 649, $this->source); })()), "website", [], "any", false, false, false, 649), 'errors');
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
            // line 653
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 653, $this->source); })()), "logoFile", [], "any", false, false, false, 653), 'label');
            yield "
\t\t\t\t\t\t";
            // line 654
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 654, $this->source); })()), "logoFile", [], "any", false, false, false, 654), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t<p class=\"small text-muted mb-0\">PNG, JPEG, JPG, WebP or GIF. Max 2 MB.</p>
\t\t\t\t\t\t";
            // line 656
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 656, $this->source); })()), "logoFile", [], "any", false, false, false, 656), 'errors');
            yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
            // line 659
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 659, $this->source); })()), "logoUrl", [], "any", false, false, false, 659), 'label');
            yield "
\t\t\t\t\t\t";
            // line 660
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 660, $this->source); })()), "logoUrl", [], "any", false, false, false, 660), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t";
            // line 661
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 661, $this->source); })()), "logoUrl", [], "any", false, false, false, 661), 'errors');
            yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t";
            // line 664
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 664, $this->source); })()), "description", [], "any", false, false, false, 664), 'label');
            yield "
\t\t\t\t\t\t";
            // line 665
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 665, $this->source); })()), "description", [], "any", false, false, false, 665), 'widget', ["attr" => ["class" => "form-control", "rows" => 2]]);
            yield "
\t\t\t\t\t\t";
            // line 666
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 666, $this->source); })()), "description", [], "any", false, false, false, 666), 'errors');
            yield "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t";
            // line 670
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 670, $this->source); })()), "contactPersonName", [], "any", false, false, false, 670), 'label');
            yield "
\t\t\t\t\t\t\t";
            // line 671
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 671, $this->source); })()), "contactPersonName", [], "any", false, false, false, 671), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t\t";
            // line 672
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 672, $this->source); })()), "contactPersonName", [], "any", false, false, false, 672), 'errors');
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t";
            // line 675
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 675, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 675), 'label');
            yield "
\t\t\t\t\t\t\t";
            // line 676
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 676, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 676), 'widget', ["attr" => ["class" => "form-control"]]);
            yield "
\t\t\t\t\t\t\t";
            // line 677
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 677, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 677), 'errors');
            yield "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex gap-2 mt-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit request</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\" id=\"sponsor-request-cancel\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t\t";
            // line 684
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["sponsorRequestForm"]) || array_key_exists("sponsorRequestForm", $context) ? $context["sponsorRequestForm"] : (function () { throw new RuntimeError('Variable "sponsorRequestForm" does not exist.', 684, $this->source); })()), 'form_end');
            yield "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 689
        yield "
\t\t";
        // line 691
        yield "\t\t<div class=\"ticket-checkout-overlay\" id=\"ticket-checkout\"
\t\t\tdata-checkout-url=\"";
        // line 692
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_stripe_create_checkout_session");
        yield "\"
\t\t\tdata-event-id=\"";
        // line 693
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 693, $this->source); })()), "id", [], "any", false, false, false, 693), "html", null, true);
        yield "\"
\t\t\tdata-checkout-token=\"";
        // line 694
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("order_checkout_" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 694, $this->source); })()), "id", [], "any", false, false, false, 694))), "html", null, true);
        yield "\">
\t\t\t<div class=\"ticket-checkout-backdrop\"></div>
\t\t\t<div class=\"ticket-checkout-modal\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"ticket-checkout-title\">
\t\t\t\t<button type=\"button\" class=\"ticket-checkout-close\" id=\"ticket-checkout-close\" aria-label=\"Close checkout\">&times;</button>
\t\t\t\t<div class=\"ticket-checkout-main\">
\t\t\t\t\t";
        // line 700
        yield "\t\t\t\t\t<div class=\"ticket-step ticket-step-1\" id=\"ticket-step-1\">
\t\t\t\t\t\t<div class=\"ticket-checkout-header mb-3\">
\t\t\t\t\t\t\t<div class=\"ticket-checkout-header-title\" id=\"ticket-checkout-title\">";
        // line 702
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 702, $this->source); })()), "title", [], "any", false, false, false, 702), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t<div class=\"ticket-checkout-header-subtitle\">
\t\t\t\t\t\t\t\t";
        // line 704
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 704, $this->source); })()), "startDatetime", [], "any", false, false, false, 704)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 704, $this->source); })()), "startDatetime", [], "any", false, false, false, 704), "l, F j \\· g a"), "html", null, true);
        }
        // line 705
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ticket-checkout-card\">
\t\t\t\t\t\t\t";
        // line 708
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 708, $this->source); })()), "tickets", [], "any", false, false, false, 708)) > 0)) {
            // line 709
            yield "\t\t\t\t\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 709, $this->source); })()), "tickets", [], "any", false, false, false, 709));
            foreach ($context['_seq'] as $context["_key"] => $context["ticket"]) {
                // line 710
                yield "\t\t\t\t\t\t\t\t\t<div class=\"ticket-checkout-row\" data-ticket-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "id", [], "any", false, false, false, 710), "html", null, true);
                yield "\" data-ticket-name=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 710), "html", null, true);
                yield "\" data-ticket-price=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "price", [], "any", false, false, false, 710), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-name\">";
                // line 712
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 712), "html", null, true);
                yield "</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-price\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 714
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "price", [], "any", false, false, false, 714) == "0") || (CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "price", [], "any", false, false, false, 714) == "0.00"))) {
                    // line 715
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\tFree
\t\t\t\t\t\t\t\t\t\t\t\t";
                } else {
                    // line 717
                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\$";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "price", [], "any", false, false, false, 717), "html", null, true);
                    yield "
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 719
                yield "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 721
                if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "saleEnd", [], "any", false, false, false, 721)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield "Sales end ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "saleEnd", [], "any", false, false, false, 721), "M j, Y"), "html", null, true);
                }
                // line 722
                yield "\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-qty-control\" aria-label=\"Quantity for ";
                // line 724
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["ticket"], "name", [], "any", false, false, false, 724), "html", null, true);
                yield "\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ticket-qty-btn ticket-qty-minus\" aria-label=\"Decrease quantity\">-</button>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-qty-value\">0</span>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ticket-qty-btn ticket-qty-plus\" aria-label=\"Increase quantity\">+</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['ticket'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 731
            yield "\t\t\t\t\t\t\t";
        } else {
            // line 732
            yield "\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">No tickets are available for this event yet.</p>
\t\t\t\t\t\t\t";
        }
        // line 734
        yield "\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ticket-checkout-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" id=\"ticket-checkout-continue\" style=\"border-radius: 10px; padding: 12px 32px; font-weight: 600;\">Continue to Checkout</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 741
        yield "\t\t\t\t\t<div class=\"ticket-step ticket-step-2 d-none\" id=\"ticket-step-2\">
\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary btn-sm mb-3\" id=\"ticket-step2-back\" style=\"border-radius: 8px;\"><i class=\"fa-solid fa-arrow-left me-2\"></i>Back</button>
\t\t\t\t\t\t\t<h2 class=\"fw-bold mb-2\" style=\"font-size: 1.5rem; color: #1f2937;\">Complete Your Order</h2>
\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 0.95rem;\">Enter your contact information to receive your tickets</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
        // line 747
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 747, $this->source); })()), "user", [], "any", false, false, false, 747))) {
            // line 748
            yield "\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">Logged in as <strong>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 748, $this->source); })()), "user", [], "any", false, false, false, 748), "email", [], "any", false, false, false, 748), "html", null, true);
            yield "</strong>. Not you? <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Log out</a></p>
\t\t\t\t\t\t";
        }
        // line 750
        yield "\t\t\t\t\t\t<form id=\"ticket-contact-form\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label small\">First name *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" name=\"firstName\" value=\"";
        // line 754
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 754), "firstName", [], "any", true, true, false, 754) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 754, $this->source); })()), "user", [], "any", false, false, false, 754), "firstName", [], "any", false, false, false, 754)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 754, $this->source); })()), "user", [], "any", false, false, false, 754), "firstName", [], "any", false, false, false, 754), "html", null, true)) : (""));
        yield "\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label small\">Last name *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" name=\"lastName\" value=\"";
        // line 758
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 758), "lastName", [], "any", true, true, false, 758) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 758, $this->source); })()), "user", [], "any", false, false, false, 758), "lastName", [], "any", false, false, false, 758)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 758, $this->source); })()), "user", [], "any", false, false, false, 758), "lastName", [], "any", false, false, false, 758), "html", null, true)) : (""));
        yield "\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label class=\"form-label small\">Email address *</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-sm\" name=\"email\" value=\"";
        // line 763
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["app"] ?? null), "user", [], "any", false, true, false, 763), "email", [], "any", true, true, false, 763) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 763, $this->source); })()), "user", [], "any", false, false, false, 763), "email", [], "any", false, false, false, 763)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 763, $this->source); })()), "user", [], "any", false, false, false, 763), "email", [], "any", false, false, false, 763), "html", null, true)) : (""));
        yield "\" required />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check mb-1\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"ticket-optin-organizer\" checked />
\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"ticket-optin-organizer\">
\t\t\t\t\t\t\t\t\tKeep me updated on more events and news from this event organizer.
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check mb-3\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"ticket-optin-platform\" />
\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"ticket-optin-platform\">
\t\t\t\t\t\t\t\t\tSend me emails about the best events happening nearby or online.
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"alert alert-info border-0\" style=\"background: #e0f2fe; border-radius: 10px; margin-bottom: 1.5rem;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>
\t\t\t\t\t\t\t\t<small>By proceeding, you will be redirected to Stripe for secure payment. Free orders are confirmed immediately.</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ticket-checkout-footer\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn-lg\" id=\"ticket-checkout-register\" style=\"border-radius: 10px; padding: 12px 32px; font-weight: 600;\"><i class=\"fa-solid fa-lock me-2\"></i>Proceed to Payment</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 788
        yield "\t\t\t\t\t<div class=\"ticket-step ticket-step-3 d-none\" id=\"ticket-step-3\">
\t\t\t\t\t\t<div class=\"ticket-checkout-thankyou\">
\t\t\t\t\t\t\t<div class=\"ticket-checkout-thankyou-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"fw-bold mb-2\" style=\"font-size: 1.75rem; color: #1f2937;\">Order Confirmed!</h2>
\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\" id=\"ticket-thankyou-order-id\"></p>
\t\t\t\t\t\t\t<p class=\"small text-muted mb-3\">You're going to <strong>";
        // line 795
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 795, $this->source); })()), "title", [], "any", false, false, false, 795), "html", null, true);
        yield "</strong>.</p>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Ticket sent to</div>
\t\t\t\t\t\t\t\t<div class=\"fw-semibold small\" id=\"ticket-thankyou-email\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\" id=\"ticket-thankyou-qr-wrapper\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Your ticket QR code</div>
\t\t\t\t\t\t\t\t<img id=\"ticket-thankyou-qr\" src=\"\" alt=\"Ticket QR code\" style=\"width: 150px; height: 150px; object-fit: contain; border-radius: 8px; border: 1px solid #e5e7eb; padding: 4px; background: #fff;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3 mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Date</div>
\t\t\t\t\t\t\t\t\t<div class=\"small fw-semibold\">
\t\t\t\t\t\t\t\t\t\t";
        // line 808
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 808, $this->source); })()), "startDatetime", [], "any", false, false, false, 808)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 809
            yield "\t\t\t\t\t\t\t\t\t\t\t";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 809, $this->source); })()), "startDatetime", [], "any", false, false, false, 809), "l, M d · g a"), "html", null, true);
            yield "
\t\t\t\t\t\t\t\t\t\t";
        }
        // line 811
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Location</div>
\t\t\t\t\t\t\t\t\t<div class=\"small fw-semibold\">
\t\t\t\t\t\t\t\t\t\t";
        // line 816
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 816, $this->source); })()), "venue", [], "any", false, false, false, 816)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 816, $this->source); })()), "venue", [], "any", false, false, false, 816), "name", [], "any", false, false, false, 816), "html", null, true);
        } else {
            yield "Online / TBA";
        }
        // line 817
        yield "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-2 mt-4\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 821
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_orders_index");
        yield "\" class=\"btn btn-primary btn-lg\" style=\"border-radius: 10px; font-weight: 600;\"><i class=\"fa-solid fa-ticket me-2\"></i>View My Tickets</a>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\" id=\"ticket-thankyou-close\" style=\"border-radius: 10px;\">Back to Event</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ticket-checkout-summary\">
\t\t\t\t\t<div class=\"ticket-summary-hero\">
\t\t\t\t\t\t<img src=\"";
        // line 829
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 829, $this->source); })()), "image", [], "any", false, false, false, 829)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 829, $this->source); })()), "image", [], "any", false, false, false, 829), "html", null, true)) : ("/assets/img/bg/header-bg6.png"));
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 829, $this->source); })()), "title", [], "any", false, false, false, 829), "html", null, true);
        yield "\" />
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"h6 fw-bold mb-3\">Order summary</h3>
\t\t\t\t\t<div id=\"ticket-summary-lines\"></div>
\t\t\t\t\t<div class=\"ticket-summary-total\">
\t\t\t\t\t\t<span>Total</span>
\t\t\t\t\t\t<span id=\"ticket-summary-total-amount\">\$0.00</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t</div>

\t\t";
        // line 844
        yield "\t\t<div class=\"footer1-sertion-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-logo-area\">
\t\t\t\t\t\t\t<img src=\"/assets/img/logo/logo2.png\" alt=\"\" />
\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t<p>We are committed to creating a platform where business leaders, innovators, and professionals can come together to exchange ideas</p>
\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"m-0\"><i class=\"fa-brands fa-pinterest-p\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t<div class=\"link-content\">
\t\t\t\t\t\t\t<h3>Quick Links</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blogs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 867
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Event Listing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"pricing-plan.html\">Pricing Plan</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"link-content2\">
\t\t\t\t\t\t\t<h3>Contact Us</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"tel:+11234567890\"><img src=\"/assets/img/icons/phn1.svg\" alt=\"\" />+1 123 456 7890</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"/assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:eventifyevent@gmail.com\"><img src=\"/assets/img/icons/mail1.svg\" alt=\"\" />eventifyevent@gmail.com</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"/assets/img/icons/world1.svg\" alt=\"\" />eventifyevent.com</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-social-box\">
\t\t\t\t\t\t\t<h3>Our Recent Event Gallery</h3>
\t\t\t\t\t\t\t<div class=\"space12\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t";
        // line 889
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(range(1, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 890
            yield "\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img";
            // line 892
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["i"], "html", null, true);
            yield ".png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\"><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['i'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 897
        yield "\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"space60\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t<p>&copy; Copyright 2024 - Eventify. All Right Reserved</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<script src=\"/assets/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/fontawesome.js\"></script>
\t\t<script src=\"/assets/js/vendor/aos.js\"></script>
\t\t<script src=\"/assets/js/vendor/owlcarousel.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/sidebar.js\"></script>
\t\t<script src=\"/assets/js/vendor/mobilemenu.js\"></script>
\t\t<script src=\"/assets/js/vendor/nice-select.js\"></script>
\t\t<script src=\"/assets/js/main.js\"></script>
\t\t<script>
\t\t\tfunction hidePreloader() {
\t\t\t\t\$('.preloader').fadeOut(300);
\t\t\t}
\t\t\t\$(window).on('load', function() {
\t\t\t\tsetTimeout(hidePreloader, 200);
\t\t\t});
\t\t\tsetTimeout(hidePreloader, 2500);

\t\t\t// Sponsor request modal
\t\t\t\$(function() {
\t\t\t\tvar \$sponsorModal = \$('#sponsor-request-modal');
\t\t\t\tvar \$sponsorForm = \$('#sponsor-request-form');
\t\t\t\tif (\$sponsorModal.length && \$sponsorForm.length) {
\t\t\t\t\t\$('.sponsor-request-btn').on('click', function() {
\t\t\t\t\t\tvar url = \$(this).data('submit-url');
\t\t\t\t\t\tvar name = \$(this).data('package-name');
\t\t\t\t\t\t\$sponsorForm.attr('action', url);
\t\t\t\t\t\t\$('#sponsor-modal-package-name').text(name);
\t\t\t\t\t\t\$sponsorModal.css('display', 'flex');
\t\t\t\t\t});
\t\t\t\t\tfunction closeSponsorModal() {
\t\t\t\t\t\t\$sponsorModal.css('display', 'none');
\t\t\t\t\t}
\t\t\t\t\t\$('#sponsor-request-close, #sponsor-request-cancel').on('click', closeSponsorModal);
\t\t\t\t\t\$sponsorModal.on('click', function(e) {
\t\t\t\t\t\tif (e.target === \$sponsorModal[0]) closeSponsorModal();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\t// Ticket checkout modal logic
\t\t\t\$(function() {
\t\t\t\tvar \$overlay = \$('#ticket-checkout');
\t\t\t\tvar \$openBtn = \$('#open-ticket-checkout');
\t\t\t\tvar \$closeBtn = \$('#ticket-checkout-close');
\t\t\t\tvar \$backdrop = \$('.ticket-checkout-backdrop');

\t\t\t\tfunction recalcSummary() {
\t\t\t\t\tvar \$lines = \$('#ticket-summary-lines');
\t\t\t\t\tvar total = 0;
\t\t\t\t\t\$lines.empty();
\t\t\t\t\t\$('.ticket-checkout-row').each(function() {
\t\t\t\t\t\tvar \$row = \$(this);
\t\t\t\t\t\tvar qty = parseInt(\$row.find('.ticket-qty-value').text(), 10) || 0;
\t\t\t\t\t\tif (!qty) return;
\t\t\t\t\t\tvar name = \$row.data('ticket-name');
\t\t\t\t\t\tvar priceStr = \$row.data('ticket-price');
\t\t\t\t\t\tvar price = parseFloat(priceStr || '0');
\t\t\t\t\t\tvar lineTotal = price * qty;
\t\t\t\t\t\tif (!isNaN(lineTotal)) total += lineTotal;
\t\t\t\t\t\tvar labelPrice = price === 0 ? 'Free' : '\$' + price.toFixed(2);
\t\t\t\t\t\tvar \$line = \$('<div class=\\\"ticket-summary-line\\\"></div>');
\t\t\t\t\t\t\$line.append('<span>' + qty + ' × ' + name + '</span>');
\t\t\t\t\t\t\$line.append('<span>' + labelPrice + '</span>');
\t\t\t\t\t\t\$lines.append(\$line);
\t\t\t\t\t});
\t\t\t\t\tvar totalLabel = total === 0 ? '\$0.00' : '\$' + total.toFixed(2);
\t\t\t\t\t\$('#ticket-summary-total-amount').text(totalLabel);
\t\t\t\t}

\t\t\t\tfunction openOverlay() {
\t\t\t\t\tif (!\$overlay.length) return;
\t\t\t\t\t\$overlay.addClass('active');
\t\t\t\t\trecalcSummary();
\t\t\t\t\t\$('#ticket-step-1').removeClass('d-none');
\t\t\t\t\t\$('#ticket-step-2').addClass('d-none');
\t\t\t\t\t\$('#ticket-step-3').addClass('d-none');
\t\t\t\t\t\$('#ticket-checkout-register').prop('disabled', false).text('Register');
\t\t\t\t}
\t\t\t\tfunction closeOverlay() {
\t\t\t\t\t\$overlay.removeClass('active');
\t\t\t\t}

\t\t\t\t\$openBtn.on('click', function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\topenOverlay();
\t\t\t\t});
\t\t\t\t\$closeBtn.on('click', function() {
\t\t\t\t\tcloseOverlay();
\t\t\t\t});
\t\t\t\t\$backdrop.on('click', function() {
\t\t\t\t\tcloseOverlay();
\t\t\t\t});

\t\t\t\t\$(document).on('click', '.ticket-qty-plus', function() {
\t\t\t\t\tvar \$val = \$(this).siblings('.ticket-qty-value');
\t\t\t\t\tvar current = parseInt(\$val.text(), 10) || 0;
\t\t\t\t\t\$val.text(current + 1);
\t\t\t\t\trecalcSummary();
\t\t\t\t});
\t\t\t\t\$(document).on('click', '.ticket-qty-minus', function() {
\t\t\t\t\tvar \$val = \$(this).siblings('.ticket-qty-value');
\t\t\t\t\tvar current = parseInt(\$val.text(), 10) || 0;
\t\t\t\t\tif (current > 0) {
\t\t\t\t\t\t\$val.text(current - 1);
\t\t\t\t\t\trecalcSummary();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// Step 1 -> Step 2 transition (allow free events: total can be \$0.00 if at least one ticket qty > 0)
\t\t\t\t\$('#ticket-checkout-continue').on('click', function () {
\t\t\t\t\tvar hasSelection = false;
\t\t\t\t\t\$('.ticket-checkout-row').each(function() {
\t\t\t\t\t\tvar qty = parseInt(\$(this).find('.ticket-qty-value').text(), 10) || 0;
\t\t\t\t\t\tif (qty > 0) { hasSelection = true; }
\t\t\t\t\t});
\t\t\t\t\tif (!hasSelection) {
\t\t\t\t\t\talert('Please select at least one ticket.');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$('#ticket-step-1').addClass('d-none');
\t\t\t\t\t\$('#ticket-step-2').removeClass('d-none');
\t\t\t\t});

\t\t\t\t\$('#ticket-step2-back').on('click', function () {
\t\t\t\t\t\$('#ticket-step-2').addClass('d-none');
\t\t\t\t\t\$('#ticket-step-1').removeClass('d-none');
\t\t\t\t});

\t\t\t\t// Final step: create Stripe Checkout Session (or free order) then redirect to Stripe or show thank-you
\t\t\t\t\$('#ticket-contact-form').on('submit', function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar \$form = \$(this);
\t\t\t\t\tvar \$btn = \$('#ticket-checkout-register');
\t\t\t\t\tvar email = \$form.find('input[name=\\\"email\\\"]').val() || '';
\t\t\t\t\tvar url = \$overlay.data('checkout-url');
\t\t\t\t\tvar eventId = \$overlay.data('event-id');
\t\t\t\t\tvar token = \$overlay.data('checkout-token');
\t\t\t\t\tvar items = [];
\t\t\t\t\t\$('.ticket-checkout-row').each(function() {
\t\t\t\t\t\tvar \$row = \$(this);
\t\t\t\t\t\tvar qty = parseInt(\$row.find('.ticket-qty-value').text(), 10) || 0;
\t\t\t\t\t\tif (qty > 0) {
\t\t\t\t\t\t\titems.push({
\t\t\t\t\t\t\t\tticketId: parseInt(\$row.data('ticket-id'), 10),
\t\t\t\t\t\t\t\tquantity: qty
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif (items.length === 0) {
\t\t\t\t\t\talert('Please select at least one ticket.');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$btn.prop('disabled', true).text('Processing…');
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: url,
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\tcontentType: 'application/json',
\t\t\t\t\t\tdata: JSON.stringify({ _token: token, eventId: eventId, items: items }),
\t\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\t\tif (!data || typeof data !== 'object') {
\t\t\t\t\t\t\t\t\$btn.prop('disabled', false).text('Proceed to payment');
\t\t\t\t\t\t\t\talert('Invalid response from server. Please try again.');
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (data.url) {
\t\t\t\t\t\t\t\twindow.location.href = data.url;
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (data.skipStripe && data.success) {
\t\t\t\t\t\t\t\t\$('#ticket-thankyou-email').text(email);
\t\t\t\t\t\t\t\tvar orderId = data.orderId || (data.orders && data.orders[0] && data.orders[0].id);
\t\t\t\t\t\t\t\t\$('#ticket-thankyou-order-id').text(orderId ? 'Order #' + orderId : '').toggle(!!orderId);
\t\t\t\t\t\t\t\tif (data.qrCodeUrl || data.qrCodePath) {
\t\t\t\t\t\t\t\t\tvar src = data.qrCodeUrl || (data.qrCodePath.charAt(0) === '/' ? data.qrCodePath : '/' + data.qrCodePath);
\t\t\t\t\t\t\t\t\t\$('#ticket-thankyou-qr').attr('src', src);
\t\t\t\t\t\t\t\t\t\$('#ticket-thankyou-qr-wrapper').show();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('#ticket-thankyou-qr-wrapper').hide();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#ticket-step-2').addClass('d-none');
\t\t\t\t\t\t\t\t\$('#ticket-step-3').removeClass('d-none');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$btn.prop('disabled', false).text('Proceed to payment');
\t\t\t\t\t\t\t\talert(data.error || 'Unable to complete registration.');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (xhr) {
\t\t\t\t\t\t\t\$btn.prop('disabled', false).text('Proceed to payment');
\t\t\t\t\t\t\tvar msg = 'Unable to complete registration.';
\t\t\t\t\t\t\tif (xhr.status === 401) {
\t\t\t\t\t\t\t\tmsg = 'Please log in to complete your order.';
\t\t\t\t\t\t\t\twindow.location.href = xhr.responseJSON && xhr.responseJSON.login_url
\t\t\t\t\t\t\t\t\t? xhr.responseJSON.login_url
\t\t\t\t\t\t\t\t\t: '";
        // line 1105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "?redirect=' + encodeURIComponent(window.location.href);
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\tvar data = xhr.responseJSON || (xhr.responseText ? JSON.parse(xhr.responseText) : null);
\t\t\t\t\t\t\t\tif (data && data.error) msg = data.error;
\t\t\t\t\t\t\t} catch (e) {}
\t\t\t\t\t\t\talert(msg);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$('#ticket-thankyou-close').on('click', function () {
\t\t\t\t\tcloseOverlay();
\t\t\t\t});
\t\t\t});

\t\t\t// Share event functionality
\t\t\t\$(function() {
\t\t\t\t\$('#share-event-btn').on('click', function() {
\t\t\t\t\tvar eventTitle = '";
        // line 1125
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1125, $this->source); })()), "title", [], "any", false, false, false, 1125), "js"), "html", null, true);
        yield "';
\t\t\t\t\tvar eventUrl = window.location.href;
\t\t\t\t\tvar eventDescription = '";
        // line 1127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), ((CoreExtension::getAttribute($this->env, $this->source, ($context["event"] ?? null), "description", [], "any", true, true, false, 1127)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 1127, $this->source); })()), "description", [], "any", false, false, false, 1127), "")) : ("")), 0, 100), "js"), "html", null, true);
        yield "';

\t\t\t\t\t// Check if Web Share API is supported
\t\t\t\t\tif (navigator.share) {
\t\t\t\t\t\tnavigator.share({
\t\t\t\t\t\t\ttitle: eventTitle,
\t\t\t\t\t\t\ttext: eventDescription,
\t\t\t\t\t\t\turl: eventUrl
\t\t\t\t\t\t}).then(function() {
\t\t\t\t\t\t\tconsole.log('Event shared successfully');
\t\t\t\t\t\t}).catch(function(err) {
\t\t\t\t\t\t\tconsole.log('Error sharing:', err);
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t// Fallback: Copy to clipboard
\t\t\t\t\t\tvar tempInput = document.createElement('input');
\t\t\t\t\t\ttempInput.value = eventUrl;
\t\t\t\t\t\tdocument.body.appendChild(tempInput);
\t\t\t\t\t\ttempInput.select();
\t\t\t\t\t\ttempInput.setSelectionRange(0, 99999);
\t\t\t\t\t\t
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tdocument.execCommand('copy');
\t\t\t\t\t\t\tdocument.body.removeChild(tempInput);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t// Show success message
\t\t\t\t\t\t\tvar \$btn = \$(this);
\t\t\t\t\t\t\tvar originalHTML = \$btn.html();
\t\t\t\t\t\t\t\$btn.html('<i class=\"fa-solid fa-check\"></i>');
\t\t\t\t\t\t\t\$btn.addClass('btn-success').removeClass('btn-outline-secondary');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\$btn.html(originalHTML);
\t\t\t\t\t\t\t\t\$btn.removeClass('btn-success').addClass('btn-outline-secondary');
\t\t\t\t\t\t\t}, 2000);
\t\t\t\t\t\t} catch (err) {
\t\t\t\t\t\t\talert('Could not copy link. Please copy manually: ' + eventUrl);
\t\t\t\t\t\t\tdocument.body.removeChild(tempInput);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</body>
</html>
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
        return "event_show.html.twig";
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
        return array (  1748 => 1127,  1743 => 1125,  1720 => 1105,  1510 => 897,  1499 => 892,  1495 => 890,  1491 => 889,  1466 => 867,  1441 => 844,  1422 => 829,  1411 => 821,  1405 => 817,  1399 => 816,  1392 => 811,  1386 => 809,  1384 => 808,  1368 => 795,  1359 => 788,  1332 => 763,  1324 => 758,  1317 => 754,  1311 => 750,  1303 => 748,  1301 => 747,  1293 => 741,  1285 => 734,  1281 => 732,  1278 => 731,  1265 => 724,  1261 => 722,  1256 => 721,  1252 => 719,  1246 => 717,  1242 => 715,  1240 => 714,  1235 => 712,  1225 => 710,  1220 => 709,  1218 => 708,  1213 => 705,  1209 => 704,  1204 => 702,  1200 => 700,  1192 => 694,  1188 => 693,  1184 => 692,  1181 => 691,  1178 => 689,  1170 => 684,  1160 => 677,  1156 => 676,  1152 => 675,  1146 => 672,  1142 => 671,  1138 => 670,  1131 => 666,  1127 => 665,  1123 => 664,  1117 => 661,  1113 => 660,  1109 => 659,  1103 => 656,  1098 => 654,  1094 => 653,  1087 => 649,  1083 => 648,  1079 => 647,  1073 => 644,  1069 => 643,  1065 => 642,  1058 => 638,  1054 => 637,  1050 => 636,  1044 => 633,  1040 => 632,  1036 => 631,  1031 => 629,  1027 => 628,  1018 => 621,  1015 => 620,  1009 => 615,  1003 => 611,  985 => 607,  981 => 606,  977 => 604,  971 => 603,  965 => 602,  958 => 600,  951 => 599,  934 => 598,  928 => 594,  925 => 593,  920 => 589,  912 => 584,  908 => 583,  904 => 582,  900 => 581,  896 => 580,  892 => 579,  888 => 578,  885 => 577,  883 => 576,  873 => 568,  867 => 563,  861 => 559,  857 => 557,  854 => 555,  846 => 552,  843 => 551,  840 => 550,  831 => 542,  827 => 540,  814 => 536,  808 => 534,  806 => 533,  799 => 532,  793 => 530,  791 => 529,  787 => 528,  783 => 527,  779 => 525,  775 => 524,  770 => 521,  768 => 520,  765 => 519,  759 => 515,  751 => 512,  745 => 510,  743 => 509,  739 => 508,  736 => 507,  730 => 505,  722 => 503,  720 => 502,  717 => 501,  713 => 500,  707 => 496,  704 => 495,  701 => 494,  698 => 492,  687 => 483,  681 => 482,  675 => 481,  669 => 480,  665 => 479,  660 => 477,  650 => 469,  647 => 468,  632 => 459,  619 => 448,  615 => 446,  609 => 444,  606 => 443,  604 => 442,  590 => 430,  585 => 428,  580 => 427,  578 => 426,  572 => 425,  567 => 424,  565 => 423,  551 => 411,  544 => 406,  539 => 403,  536 => 401,  526 => 394,  519 => 390,  513 => 386,  510 => 385,  505 => 381,  497 => 374,  491 => 371,  488 => 370,  486 => 369,  482 => 368,  475 => 363,  466 => 356,  462 => 355,  445 => 341,  429 => 327,  423 => 324,  419 => 323,  416 => 322,  407 => 317,  402 => 315,  397 => 314,  395 => 313,  391 => 312,  387 => 311,  380 => 309,  376 => 307,  374 => 306,  369 => 303,  364 => 301,  359 => 300,  357 => 299,  353 => 298,  346 => 294,  55 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>{{ event.title }} - Eventify</title>
\t\t<link rel=\"shortcut icon\" href=\"/assets/img/logo/fav-logo1.png\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/bootstrap.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/aos.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/fontawesome.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/magnific-popup.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/mobile.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/owlcarousel.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/sidebar.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/slick-slider.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/nice-select.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/vendor/odometer.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/main.css\" />
\t\t<link rel=\"stylesheet\" href=\"/assets/css/header-custom.css\" />
\t\t<style>
\t\t\t/* Remove extra spacing around footer */
\t\t\thtml, body {
\t\t\t\tmargin: 0;
\t\t\t\tpadding: 0;
\t\t\t\twidth: 100%;
\t\t\t\toverflow-x: hidden;
\t\t\t}
\t\t\t.footer1-sertion-area {
\t\t\t\tmargin: 0 !important;
\t\t\t\tpadding-left: 0 !important;
\t\t\t\tpadding-right: 0 !important;
\t\t\t}
\t\t\t/* Ticket checkout overlay (Reserve a spot) */
\t\t\t.ticket-checkout-overlay {
\t\t\t\tposition: fixed;
\t\t\t\tinset: 0;
\t\t\t\tz-index: 999;
\t\t\t\tdisplay: none;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tpadding: 20px;
\t\t\t}
\t\t\t.ticket-checkout-overlay.active {
\t\t\t\tdisplay: flex;
\t\t\t\tanimation: fadeIn 0.2s ease-out;
\t\t\t}
\t\t\t@keyframes fadeIn {
\t\t\t\tfrom { opacity: 0; }
\t\t\t\tto { opacity: 1; }
\t\t\t}
\t\t\t.ticket-checkout-backdrop {
\t\t\t\tposition: absolute;
\t\t\t\tinset: 0;
\t\t\t\tbackground: rgba(0, 0, 0, 0.75);
\t\t\t\tbackdrop-filter: blur(4px);
\t\t\t}
\t\t\t.ticket-checkout-modal {
\t\t\t\tposition: relative;
\t\t\t\tmax-width: 1000px;
\t\t\t\twidth: 100%;
\t\t\t\tmax-height: 90vh;
\t\t\t\tbackground: #fff;
\t\t\t\tborder-radius: 20px;
\t\t\t\tbox-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
\t\t\t\toverflow: hidden;
\t\t\t\tdisplay: flex;
\t\t\t\tflex-direction: row;
\t\t\t\tz-index: 1;
\t\t\t\tanimation: slideUp 0.3s ease-out;
\t\t\t}
\t\t\t@keyframes slideUp {
\t\t\t\tfrom { transform: translateY(20px); opacity: 0; }
\t\t\t\tto { transform: translateY(0); opacity: 1; }
\t\t\t}
\t\t\t@media (max-width: 991px) {
\t\t\t\t.ticket-checkout-modal {
\t\t\t\t\tflex-direction: column;
\t\t\t\t\tmax-height: 95vh;
\t\t\t\t}
\t\t\t}
\t\t\t.ticket-checkout-main {
\t\t\t\tflex: 2;
\t\t\t\tpadding: 2.5rem;
\t\t\t\toverflow-y: auto;
\t\t\t\tmax-height: 90vh;
\t\t\t}
\t\t\t@media (max-width: 991px) {
\t\t\t\t.ticket-checkout-main {
\t\t\t\t\tpadding: 1.5rem;
\t\t\t\t}
\t\t\t}
\t\t\t.ticket-checkout-summary {
\t\t\t\tflex: 1.3;
\t\t\t\tpadding: 2.5rem;
\t\t\t\tbackground: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
\t\t\t\tborder-left: 1px solid #dee2e6;
\t\t\t\toverflow-y: auto;
\t\t\t}
\t\t\t@media (max-width: 991px) {
\t\t\t\t.ticket-checkout-summary {
\t\t\t\t\tpadding: 1.5rem;
\t\t\t\t\tborder-left: none;
\t\t\t\t\tborder-top: 1px solid #dee2e6;
\t\t\t\t}
\t\t\t}
\t\t\t.ticket-checkout-thankyou {
\t\t\t\ttext-align: center;
\t\t\t\tpadding: 2rem 0;
\t\t\t}
\t\t\t.ticket-checkout-thankyou-icon {
\t\t\t\twidth: 56px;
\t\t\t\theight: 56px;
\t\t\t\tborder-radius: 50%;
\t\t\t\tbackground: linear-gradient(135deg, #22c55e 0%, #16a34a 100%);
\t\t\t\tcolor: #fff;
\t\t\t\tdisplay: inline-flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tmargin-bottom: 1rem;
\t\t\t\tfont-size: 24px;
\t\t\t\tbox-shadow: 0 8px 20px rgba(34, 197, 94, 0.3);
\t\t\t}
\t\t\t.ticket-summary-hero {
\t\t\t\tborder-radius: 15px;
\t\t\t\toverflow: hidden;
\t\t\t\tmargin-bottom: 1.5rem;
\t\t\t\tbackground: #e5e7eb;
\t\t\t\theight: 160px;
\t\t\t\tbox-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
\t\t\t}
\t\t\t.ticket-summary-hero img {
\t\t\t\twidth: 100%;
\t\t\t\theight: 100%;
\t\t\t\tobject-fit: cover;
\t\t\t\tdisplay: block;
\t\t\t}
\t\t\t.ticket-checkout-header-title {
\t\t\t\tfont-size: 1.5rem;
\t\t\t\tfont-weight: 700;
\t\t\t\tmargin-bottom: 0.5rem;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-checkout-header-subtitle {
\t\t\t\tfont-size: 0.95rem;
\t\t\t\tcolor: #6b7280;
\t\t\t\tmargin-bottom: 1.5rem;
\t\t\t}
\t\t\t.ticket-checkout-card {
\t\t\t\tborder-radius: 15px;
\t\t\t\tborder: 1px solid #e5e7eb;
\t\t\t\tpadding: 1.5rem;
\t\t\t\tbackground: #fff;
\t\t\t\tbox-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
\t\t\t\tmargin-bottom: 1.5rem;
\t\t\t}
\t\t\t.ticket-checkout-row {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\talign-items: center;
\t\t\t\tpadding: 1rem 0;
\t\t\t\tborder-bottom: 1px solid #f3f4f6;
\t\t\t}
\t\t\t.ticket-checkout-row:last-child {
\t\t\t\tborder-bottom: none;
\t\t\t\tpadding-bottom: 0;
\t\t\t}
\t\t\t.ticket-checkout-row:first-child {
\t\t\t\tpadding-top: 0;
\t\t\t}
\t\t\t.ticket-name {
\t\t\t\tfont-weight: 600;
\t\t\t\tfont-size: 1rem;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-meta {
\t\t\t\tfont-size: 0.85rem;
\t\t\t\tcolor: #9ca3af;
\t\t\t\tmargin-top: 0.25rem;
\t\t\t}
\t\t\t.ticket-price {
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: #059669;
\t\t\t}
\t\t\t.ticket-qty-control {
\t\t\t\tdisplay: inline-flex;
\t\t\t\talign-items: center;
\t\t\t\tborder-radius: 10px;
\t\t\t\tborder: 2px solid #e5e7eb;
\t\t\t\toverflow: hidden;
\t\t\t\tbackground: #fff;
\t\t\t}
\t\t\t.ticket-qty-btn {
\t\t\t\twidth: 36px;
\t\t\t\theight: 36px;
\t\t\t\tborder: none;
\t\t\t\tbackground: transparent;
\t\t\t\tdisplay: inline-flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\tfont-size: 1rem;
\t\t\t\tcursor: pointer;
\t\t\t\tcolor: #374151;
\t\t\t\ttransition: all 0.2s;
\t\t\t}
\t\t\t.ticket-qty-btn:hover {
\t\t\t\tbackground: #f3f4f6;
\t\t\t\tcolor: #0d6efd;
\t\t\t}
\t\t\t.ticket-qty-btn:active {
\t\t\t\ttransform: scale(0.95);
\t\t\t}
\t\t\t.ticket-qty-value {
\t\t\t\tmin-width: 40px;
\t\t\t\ttext-align: center;
\t\t\t\tfont-size: 1rem;
\t\t\t\tfont-weight: 600;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-checkout-footer {
\t\t\t\tmargin-top: 2rem;
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: flex-end;
\t\t\t}
\t\t\t.ticket-summary-line {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\tfont-size: 0.95rem;
\t\t\t\tmargin-bottom: 0.75rem;
\t\t\t\tcolor: #4b5563;
\t\t\t}
\t\t\t.ticket-summary-line:last-child {
\t\t\t\tmargin-bottom: 0;
\t\t\t}
\t\t\t.ticket-summary-total {
\t\t\t\tdisplay: flex;
\t\t\t\tjustify-content: space-between;
\t\t\t\tfont-weight: 700;
\t\t\t\tfont-size: 1.25rem;
\t\t\t\tmargin-top: 1.25rem;
\t\t\t\tpadding-top: 1.25rem;
\t\t\t\tborder-top: 2px solid #d1d5db;
\t\t\t\tcolor: #1f2937;
\t\t\t}
\t\t\t.ticket-checkout-close {
\t\t\t\tposition: absolute;
\t\t\t\ttop: 1.25rem;
\t\t\t\tright: 1.25rem;
\t\t\t\twidth: 36px;
\t\t\t\theight: 36px;
\t\t\t\tborder: none;
\t\t\t\tbackground: #f3f4f6;
\t\t\t\tborder-radius: 50%;
\t\t\t\tfont-size: 1.25rem;
\t\t\t\tcursor: pointer;
\t\t\t\tcolor: #6b7280;
\t\t\t\tdisplay: flex;
\t\t\t\talign-items: center;
\t\t\t\tjustify-content: center;
\t\t\t\ttransition: all 0.2s;
\t\t\t\tz-index: 10;
\t\t\t}
\t\t\t.ticket-checkout-close:hover {
\t\t\t\tbackground: #e5e7eb;
\t\t\t\tcolor: #374151;
\t\t\t\ttransform: rotate(90deg);
\t\t\t}
\t\t</style>
\t\t<script src=\"/assets/js/vendor/jquery-3.7.1.min.js\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t<div id=\"popup\" class=\"popup-overlay d-none\"></div>
\t\t<div class=\"preloader\">
\t\t\t<div class=\"loading-container\">
\t\t\t\t<div class=\"loading\"></div>
\t\t\t\t<div id=\"loading-icon\"><img src=\"/assets/img/logo/preloader.png\" alt=\"\" /></div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"paginacontainer\">
\t\t\t<div class=\"progress-wrap\">
\t\t\t\t<svg class=\"progress-circle svg-content\" width=\"100%\" height=\"100%\" viewBox=\"-1 -1 102 102\">
\t\t\t\t\t<path d=\"M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98\" />
\t\t\t\t</svg>
\t\t\t</div>
\t\t</div>

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

\t\t<div class=\"mobile-header mobile-haeder1 d-block d-lg-none\">
\t\t\t<div class=\"container-fluid\">
\t\t\t\t<div class=\"col-12\">
\t\t\t\t\t<div class=\"mobile-header-elements\">
\t\t\t\t\t\t<div class=\"mobile-logo\">
\t\t\t\t\t\t\t<a href=\"{{ path('app_home') }}\"><img src=\"/assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mobile-nav-icon dots-menu\"><i class=\"fa-solid fa-bars-staggered\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mobile-sidebar mobile-sidebar1\">
\t\t\t<div class=\"logosicon-area\">
\t\t\t\t<div class=\"logos\"><img src=\"/assets/img/logo/logo2.png\" alt=\"\" /></div>
\t\t\t\t<div class=\"menu-close\"><i class=\"fa-solid fa-xmark\"></i></div>
\t\t\t</div>
\t\t\t<div class=\"mobile-nav mobile-nav1\">
\t\t\t\t<ul class=\"mobile-nav-list nav-list1\">
\t\t\t\t\t<li><a href=\"{{ path('app_home') }}\">Home</a></li>
\t\t\t\t\t<li><a href=\"{{ path('app_events') }}\">Events</a></li>
\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</div>

\t\t{# ----- EVENT HERO BANNER ----- #}
\t\t<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 100px 0;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 m-auto\">
\t\t\t\t\t\t<div class=\"heading1 text-center\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 48px; margin-bottom: 20px;\">{{ event.title }}</h1>
\t\t\t\t\t\t\t{% if event.description %}
\t\t\t\t\t\t\t\t<p style=\"font-size: 18px; color: rgba(255,255,255,0.9); margin-bottom: 30px;\">
\t\t\t\t\t\t\t\t\t{{ event.description|length > 120 ? event.description|slice(0, 120) ~ '...' : event.description }}
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{# ----- EVENT DETAIL CONTENT ----- #}
\t\t<div class=\"container py-5\">
\t\t\t<div class=\"row g-4\">
\t\t\t\t<div class=\"col-lg-8\">
\t\t\t\t\t{# Organizer Card #}
\t\t\t\t\t{% if event.organizer %}
\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<div class=\"d-flex align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 56px; height: 56px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t<span class=\"fw-bold text-primary\" style=\"font-size: 18px;\">{{ event.organizer.name|slice(0, 2)|upper }}</span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"flex-grow-1\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 13px;\">Organized by</p>
\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-0\" style=\"font-size: 16px; color: #333;\">{{ event.organizer.name }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-primary btn-sm\" style=\"border-radius: 8px;\">Follow</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# About Event Card #}
\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 20px; color: #333;\">About This Event</h3>
\t\t\t\t\t\t\t<div style=\"color: #555; line-height: 1.7;\">{{ event.description|nl2br }}</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{# Event Details Card #}
\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-4\" style=\"font-size: 20px; color: #333;\">Event Details</h3>
\t\t\t\t\t\t\t<div class=\"row g-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-primary bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-days text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px;\">Date & Time</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 15px; color: #333;\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if event.startDatetime and event.endDatetime %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ event.startDatetime|date('l, M d') }}<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ event.startDatetime|date('g:i A') }} - {{ event.endDatetime|date('g:i A') }}
\t\t\t\t\t\t\t\t\t\t\t\t{% elseif event.startDatetime %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ event.startDatetime|date('l, F j, Y') }}<br>
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ event.startDatetime|date('g:i A') }}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-success bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-clock text-success\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px;\">Duration</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 15px; color: #333;\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if event.startDatetime and event.endDatetime %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{% set diff = event.endDatetime.diff(event.startDatetime) %}
\t\t\t\t\t\t\t\t\t\t\t\t\t{{ diff.days * 24 + diff.h }} hours
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\tTBA
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-start\">
\t\t\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-danger bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-location-dot text-danger\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px;\">Venue Type</p>
\t\t\t\t\t\t\t\t\t\t\t<p class=\"fw-semibold mb-0\" style=\"font-size: 15px; color: #333;\">{% if event.venue %}In-Person Event{% else %}Online / TBA{% endif %}</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{# Location Card #}
\t\t\t\t\t{% if event.venue %}
\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 20px; color: #333;\">Location</h3>
\t\t\t\t\t\t\t<div class=\"d-flex align-items-start mb-3\">
\t\t\t\t\t\t\t\t<div class=\"rounded-circle bg-danger bg-opacity-10 d-flex align-items-center justify-content-center me-3\" style=\"width: 48px; height: 48px; flex-shrink: 0;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-map-marker-alt text-danger\"></i>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<p class=\"fw-bold mb-1\" style=\"font-size: 16px; color: #333;\">{{ event.venue.name }}</p>
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 14px;\">
\t\t\t\t\t\t\t\t\t\t{% if event.venue.address %}{{ event.venue.address }}{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if event.venue.city %}<br>{{ event.venue.city }}{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if event.venue.state %}, {{ event.venue.state }}{% endif %}
\t\t\t\t\t\t\t\t\t\t{% if event.venue.postalCode %} {{ event.venue.postalCode }}{% endif %}
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"rounded bg-light d-flex align-items-center justify-content-center\" style=\"height: 200px; border: 2px dashed #dee2e6;\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary\" style=\"border-radius: 8px;\"><i class=\"fa-solid fa-map me-2\"></i>View on Map</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{# Sponsors Card #}
\t\t\t\t\t{% set visible_sponsors = event.sponsors|filter(s => s.status == 'active') %}
\t\t\t\t\t{% if visible_sponsors|length > 0 %}
\t\t\t\t\t<div class=\"card border-0 mb-4\" style=\"border-radius: 15px; box-shadow: 0 2px 12px rgba(0,0,0,0.06);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 20px; color: #333;\">Event Sponsors</h3>
\t\t\t\t\t\t\t<div class=\"d-flex flex-wrap gap-3\">
\t\t\t\t\t\t\t\t{% for sponsor in visible_sponsors %}
\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center gap-3 border rounded p-3\" style=\"border-radius: 10px;\">
\t\t\t\t\t\t\t\t\t\t{% if sponsor.logoUrl %}
\t\t\t\t\t\t\t\t\t\t\t<img src=\"{{ sponsor.logoUrl }}\" alt=\"{{ sponsor.name }}\" class=\"rounded\" style=\"width: 56px; height: 56px; object-fit: contain; background: #fff;\" />
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"rounded d-flex align-items-center justify-content-center bg-secondary bg-opacity-25 text-secondary fw-bold\" style=\"width: 56px; height: 56px; font-size: 1rem;\">{{ sponsor.name|slice(0, 2)|upper }}</div>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"fw-semibold\">{{ sponsor.name }}</span>
\t\t\t\t\t\t\t\t\t\t\t{% if sponsor.website %}
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ sponsor.website }}\" target=\"_blank\" rel=\"noopener\" class=\"small text-muted ms-1\"><i class=\"fa-solid fa-external-link-alt\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t\t{% if event.sponsorshipPackages|length > 0 %}
\t\t\t\t\t\t<h3 class=\"h5 fw-bold mt-4 mb-2\">Sponsorship packages</h3>
\t\t\t\t\t\t<p class=\"text-muted small mb-3\">Support this event by choosing a sponsorship package.</p>
\t\t\t\t\t\t<div class=\"row g-3 mb-4\">
\t\t\t\t\t\t\t{% for package in event.sponsorshipPackages %}
\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-lg-4\">
\t\t\t\t\t\t\t\t\t<div class=\"border rounded p-3 h-100 shadow-sm d-flex flex-column\">
\t\t\t\t\t\t\t\t\t\t<div class=\"fw-bold text-primary mb-1\">{{ package.name }}</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-2\">\${{ package.price|number_format(2) }}</div>
\t\t\t\t\t\t\t\t\t\t{% if package.description %}
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">{{ package.description }}</p>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<p class=\"small mb-1\"><i class=\"fa-solid fa-table-cells me-1\"></i>{{ package.numberOfTables }} table(s) · {{ package.seatsPerTable }} seats/table</p>
\t\t\t\t\t\t\t\t\t\t{% if package.benefits %}
\t\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">{{ package.benefits|nl2br }}</p>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-sm mt-auto sponsor-request-btn\" data-submit-url=\"{{ path('app_sponsor_request_submit', { id: event.id, packageId: package.id }) }}\" data-package-name=\"{{ package.name }}\"><i class=\"fa-solid fa-handshake me-1\"></i>Become a sponsor</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}

\t\t\t\t</div>

\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"position-sticky\" style=\"top: 100px;\">
\t\t\t\t\t\t<div class=\"card border-0\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t\t{# Event Image #}
\t\t\t\t\t\t\t\t{% if event.image %}
\t\t\t\t\t\t\t\t<div class=\"rounded mb-4\" style=\"overflow: hidden; height: 200px;\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ event.image }}\" alt=\"{{ event.title }}\" style=\"width: 100%; height: 100%; object-fit: cover;\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{# Pricing #}
\t\t\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t\t\t<p class=\"text-muted mb-1\" style=\"font-size: 13px; text-transform: uppercase; letter-spacing: 0.5px;\">Ticket Price</p>
\t\t\t\t\t\t\t\t\t<p class=\"h3 fw-bold mb-0\" style=\"color: #198754;\">{{ event.priceLabel }}</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{# CTA Button #}
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary w-100 btn-lg mb-3\" id=\"open-ticket-checkout\" style=\"border-radius: 10px; font-weight: 600;\">
\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket me-2\"></i>Get Tickets
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t{# Quick Actions #}
\t\t\t\t\t\t\t\t<div class=\"d-flex gap-2 mb-4\">
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary flex-fill\" id=\"share-event-btn\" style=\"border-radius: 8px;\" title=\"Share this event\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-share-nodes\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary flex-fill\" id=\"favorite-event-btn\" style=\"border-radius: 8px;\" title=\"Save to favorites\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fa-regular fa-heart\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% if is_granted('EVENT_EDIT', event) %}
\t\t\t\t\t\t\t<div class=\"pt-3 border-top mt-3\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_orders_event', { id: event.id }) }}\" class=\"btn btn-outline-primary btn-sm me-1\">View orders</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_sponsorship_package_index', { id: event.id }) }}\" class=\"btn btn-outline-primary btn-sm me-1\">Packages</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_sponsor_index', { id: event.id }) }}\" class=\"btn btn-outline-primary btn-sm me-1\">Sponsors</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_service_booking_index', { eventId: event.id }) }}\" class=\"btn btn-outline-primary btn-sm me-1\"><i class=\"fa-solid fa-truck me-1\"></i>Service bookings</a>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_edit', { id: event.id }) }}\" class=\"btn btn-outline-secondary btn-sm me-1\">Edit</a>
\t\t\t\t\t\t\t\t<form method=\"post\" action=\"{{ path('app_event_delete', { id: event.id }) }}\" class=\"d-inline\" onsubmit=\"return confirm('Delete this event?');\">
\t\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\" />
\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-outline-danger btn-sm\">Delete</button>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t{# Other Events Card #}
\t\t\t\t\t{% if otherEvents|length > 0 %}
\t\t\t\t\t<div class=\"card border-0 mt-4\" style=\"border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t<div class=\"card-body p-4\">
\t\t\t\t\t\t\t<h3 class=\"fw-bold mb-3\" style=\"font-size: 18px; color: #333;\">Other Events You May Like</h3>
\t\t\t\t\t\t\t<div class=\"list-group list-group-flush\">
\t\t\t\t\t\t\t\t{% for other in otherEvents|slice(0, 3) %}
\t\t\t\t\t\t\t\t\t<div class=\"list-group-item border-0 px-0 py-3 {% if not loop.last %}border-bottom{% endif %}\">
\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: other.id }) }}\" class=\"fw-semibold text-dark text-decoration-none d-block mb-1\" style=\"font-size: 15px;\">{{ other.title }}</a>
\t\t\t\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">
\t\t\t\t\t\t\t\t\t\t\t{% if other.startDatetime %}{{ other.startDatetime|date('D, d M') }} · {{ other.startDatetime|date('H:i') }}{% endif %}
\t\t\t\t\t\t\t\t\t\t\t{% if other.venue %} · {{ other.venue.name }}{% endif %}
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<div class=\"d-flex align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"small fw-semibold text-success\">{{ other.priceLabel }}</span>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_show', { id: other.id }) }}\" class=\"btn btn-sm btn-outline-primary\" style=\"border-radius: 6px;\">View</a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t{# ----- SPONSOR REQUEST MODAL ----- #}
\t\t{% if event.sponsorshipPackages|length > 0 and sponsorRequestForm is defined %}
\t\t<div class=\"sponsor-request-overlay\" id=\"sponsor-request-modal\" style=\"display: none; position: fixed; inset: 0; z-index: 1000; background: rgba(0,0,0,0.5); align-items: center; justify-content: center;\">
\t\t\t<div class=\"sponsor-request-dialog rounded shadow bg-white mx-3\" style=\"max-width: 520px; width: 100%; max-height: 90vh; overflow-y: auto;\">
\t\t\t\t<div class=\"p-4 border-bottom d-flex justify-content-between align-items-center\">
\t\t\t\t\t<h3 class=\"h5 mb-0\">Become a sponsor — <span id=\"sponsor-modal-package-name\"></span></h3>
\t\t\t\t\t<button type=\"button\" class=\"btn btn-link text-dark p-0\" id=\"sponsor-request-close\" aria-label=\"Close\">&times;</button>
\t\t\t\t</div>
\t\t\t\t<div class=\"p-4\">
\t\t\t\t\t{{ form_start(sponsorRequestForm, { attr: { id: 'sponsor-request-form', novalidate: 'novalidate' } }) }}
\t\t\t\t\t{{ form_widget(sponsorRequestForm._token) }}
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(sponsorRequestForm.name) }}
\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.name, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.name) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(sponsorRequestForm.email) }}
\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.email, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.email) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t{{ form_label(sponsorRequestForm.phone) }}
\t\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.phone, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.phone) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t{{ form_label(sponsorRequestForm.website) }}
\t\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.website, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.website) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(sponsorRequestForm.logoFile) }}
\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.logoFile, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t<p class=\"small text-muted mb-0\">PNG, JPEG, JPG, WebP or GIF. Max 2 MB.</p>
\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.logoFile) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(sponsorRequestForm.logoUrl) }}
\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.logoUrl, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.logoUrl) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t{{ form_label(sponsorRequestForm.description) }}
\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.description, { attr: { class: 'form-control', rows: 2 } }) }}
\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.description) }}
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"row g-2\">
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t{{ form_label(sponsorRequestForm.contactPersonName) }}
\t\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.contactPersonName, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.contactPersonName) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-6 mb-3\">
\t\t\t\t\t\t\t{{ form_label(sponsorRequestForm.contactPersonEmail) }}
\t\t\t\t\t\t\t{{ form_widget(sponsorRequestForm.contactPersonEmail, { attr: { class: 'form-control' } }) }}
\t\t\t\t\t\t\t{{ form_errors(sponsorRequestForm.contactPersonEmail) }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"d-flex gap-2 mt-3\">
\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Submit request</button>
\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\" id=\"sponsor-request-cancel\">Cancel</button>
\t\t\t\t\t</div>
\t\t\t\t\t{{ form_end(sponsorRequestForm) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t{% endif %}

\t\t{# ----- TICKET CHECKOUT MODAL ----- #}
\t\t<div class=\"ticket-checkout-overlay\" id=\"ticket-checkout\"
\t\t\tdata-checkout-url=\"{{ path('app_stripe_create_checkout_session') }}\"
\t\t\tdata-event-id=\"{{ event.id }}\"
\t\t\tdata-checkout-token=\"{{ csrf_token('order_checkout_' ~ event.id) }}\">
\t\t\t<div class=\"ticket-checkout-backdrop\"></div>
\t\t\t<div class=\"ticket-checkout-modal\" role=\"dialog\" aria-modal=\"true\" aria-labelledby=\"ticket-checkout-title\">
\t\t\t\t<button type=\"button\" class=\"ticket-checkout-close\" id=\"ticket-checkout-close\" aria-label=\"Close checkout\">&times;</button>
\t\t\t\t<div class=\"ticket-checkout-main\">
\t\t\t\t\t{# Step 1: select tickets #}
\t\t\t\t\t<div class=\"ticket-step ticket-step-1\" id=\"ticket-step-1\">
\t\t\t\t\t\t<div class=\"ticket-checkout-header mb-3\">
\t\t\t\t\t\t\t<div class=\"ticket-checkout-header-title\" id=\"ticket-checkout-title\">{{ event.title }}</div>
\t\t\t\t\t\t\t<div class=\"ticket-checkout-header-subtitle\">
\t\t\t\t\t\t\t\t{% if event.startDatetime %}{{ event.startDatetime|date('l, F j \\\\· g a') }}{% endif %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ticket-checkout-card\">
\t\t\t\t\t\t\t{% if event.tickets|length > 0 %}
\t\t\t\t\t\t\t\t{% for ticket in event.tickets %}
\t\t\t\t\t\t\t\t\t<div class=\"ticket-checkout-row\" data-ticket-id=\"{{ ticket.id }}\" data-ticket-name=\"{{ ticket.name }}\" data-ticket-price=\"{{ ticket.price }}\">
\t\t\t\t\t\t\t\t\t\t<div class=\"me-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-name\">{{ ticket.name }}</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-price\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if ticket.price == '0' or ticket.price == '0.00' %}
\t\t\t\t\t\t\t\t\t\t\t\t\tFree
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\${{ ticket.price }}
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-meta\">
\t\t\t\t\t\t\t\t\t\t\t\t{% if ticket.saleEnd %}Sales end {{ ticket.saleEnd|date('M j, Y') }}{% endif %}
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"ticket-qty-control\" aria-label=\"Quantity for {{ ticket.name }}\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ticket-qty-btn ticket-qty-minus\" aria-label=\"Decrease quantity\">-</button>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"ticket-qty-value\">0</span>
\t\t\t\t\t\t\t\t\t\t\t<button type=\"button\" class=\"ticket-qty-btn ticket-qty-plus\" aria-label=\"Increase quantity\">+</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t<p class=\"mb-0 small text-muted\">No tickets are available for this event yet.</p>
\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"ticket-checkout-footer\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-primary btn-lg\" id=\"ticket-checkout-continue\" style=\"border-radius: 10px; padding: 12px 32px; font-weight: 600;\">Continue to Checkout</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t{# Step 2: contact information #}
\t\t\t\t\t<div class=\"ticket-step ticket-step-2 d-none\" id=\"ticket-step-2\">
\t\t\t\t\t\t<div class=\"mb-4\">
\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary btn-sm mb-3\" id=\"ticket-step2-back\" style=\"border-radius: 8px;\"><i class=\"fa-solid fa-arrow-left me-2\"></i>Back</button>
\t\t\t\t\t\t\t<h2 class=\"fw-bold mb-2\" style=\"font-size: 1.5rem; color: #1f2937;\">Complete Your Order</h2>
\t\t\t\t\t\t\t<p class=\"text-muted mb-0\" style=\"font-size: 0.95rem;\">Enter your contact information to receive your tickets</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t{% if is_granted('IS_AUTHENTICATED_FULLY') and app.user %}
\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\">Logged in as <strong>{{ app.user.email }}</strong>. Not you? <a href=\"{{ path('app_logout') }}\">Log out</a></p>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t<form id=\"ticket-contact-form\">
\t\t\t\t\t\t\t<div class=\"row mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label small\">First name *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" name=\"firstName\" value=\"{{ app.user.firstName ?? '' }}\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t\t<label class=\"form-label small\">Last name *</label>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control form-control-sm\" name=\"lastName\" value=\"{{ app.user.lastName ?? '' }}\" required />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<label class=\"form-label small\">Email address *</label>
\t\t\t\t\t\t\t\t<input type=\"email\" class=\"form-control form-control-sm\" name=\"email\" value=\"{{ app.user.email ?? '' }}\" required />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check mb-1\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"ticket-optin-organizer\" checked />
\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"ticket-optin-organizer\">
\t\t\t\t\t\t\t\t\tKeep me updated on more events and news from this event organizer.
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"form-check mb-3\">
\t\t\t\t\t\t\t\t<input class=\"form-check-input\" type=\"checkbox\" value=\"1\" id=\"ticket-optin-platform\" />
\t\t\t\t\t\t\t\t<label class=\"form-check-label small\" for=\"ticket-optin-platform\">
\t\t\t\t\t\t\t\t\tSend me emails about the best events happening nearby or online.
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"alert alert-info border-0\" style=\"background: #e0f2fe; border-radius: 10px; margin-bottom: 1.5rem;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-info-circle me-2\"></i>
\t\t\t\t\t\t\t\t<small>By proceeding, you will be redirected to Stripe for secure payment. Free orders are confirmed immediately.</small>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"ticket-checkout-footer\">
\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-success btn-lg\" id=\"ticket-checkout-register\" style=\"border-radius: 10px; padding: 12px 32px; font-weight: 600;\"><i class=\"fa-solid fa-lock me-2\"></i>Proceed to Payment</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>

\t\t\t\t\t{# Step 3: thank you page #}
\t\t\t\t\t<div class=\"ticket-step ticket-step-3 d-none\" id=\"ticket-step-3\">
\t\t\t\t\t\t<div class=\"ticket-checkout-thankyou\">
\t\t\t\t\t\t\t<div class=\"ticket-checkout-thankyou-icon\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-check\" aria-hidden=\"true\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h2 class=\"fw-bold mb-2\" style=\"font-size: 1.75rem; color: #1f2937;\">Order Confirmed!</h2>
\t\t\t\t\t\t\t<p class=\"small text-muted mb-2\" id=\"ticket-thankyou-order-id\"></p>
\t\t\t\t\t\t\t<p class=\"small text-muted mb-3\">You're going to <strong>{{ event.title }}</strong>.</p>
\t\t\t\t\t\t\t<div class=\"mb-3\">
\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Ticket sent to</div>
\t\t\t\t\t\t\t\t<div class=\"fw-semibold small\" id=\"ticket-thankyou-email\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"mb-3\" id=\"ticket-thankyou-qr-wrapper\" style=\"display: none;\">
\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Your ticket QR code</div>
\t\t\t\t\t\t\t\t<img id=\"ticket-thankyou-qr\" src=\"\" alt=\"Ticket QR code\" style=\"width: 150px; height: 150px; object-fit: contain; border-radius: 8px; border: 1px solid #e5e7eb; padding: 4px; background: #fff;\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"row g-3 mb-3\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Date</div>
\t\t\t\t\t\t\t\t\t<div class=\"small fw-semibold\">
\t\t\t\t\t\t\t\t\t\t{% if event.startDatetime %}
\t\t\t\t\t\t\t\t\t\t\t{{ event.startDatetime|date('l, M d · g a') }}
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"small text-muted text-uppercase mb-1\">Location</div>
\t\t\t\t\t\t\t\t\t<div class=\"small fw-semibold\">
\t\t\t\t\t\t\t\t\t\t{% if event.venue %}{{ event.venue.name }}{% else %}Online / TBA{% endif %}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"d-flex flex-column gap-2 mt-4\">
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_orders_index') }}\" class=\"btn btn-primary btn-lg\" style=\"border-radius: 10px; font-weight: 600;\"><i class=\"fa-solid fa-ticket me-2\"></i>View My Tickets</a>
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"btn btn-outline-secondary\" id=\"ticket-thankyou-close\" style=\"border-radius: 10px;\">Back to Event</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"ticket-checkout-summary\">
\t\t\t\t\t<div class=\"ticket-summary-hero\">
\t\t\t\t\t\t<img src=\"{{ event.image ?: '/assets/img/bg/header-bg6.png' }}\" alt=\"{{ event.title }}\" />
\t\t\t\t\t</div>
\t\t\t\t\t<h3 class=\"h6 fw-bold mb-3\">Order summary</h3>
\t\t\t\t\t<div id=\"ticket-summary-lines\"></div>
\t\t\t\t\t<div class=\"ticket-summary-total\">
\t\t\t\t\t\t<span>Total</span>
\t\t\t\t\t\t<span id=\"ticket-summary-total-amount\">\$0.00</span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t</div>

\t\t{# ----- FOOTER (same as events.html.twig) ----- #}
\t\t<div class=\"footer1-sertion-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-logo-area\">
\t\t\t\t\t\t\t<img src=\"/assets/img/logo/logo2.png\" alt=\"\" />
\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t<p>We are committed to creating a platform where business leaders, innovators, and professionals can come together to exchange ideas</p>
\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\" class=\"m-0\"><i class=\"fa-brands fa-pinterest-p\"></i></a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-2 col-md-6\">
\t\t\t\t\t\t<div class=\"link-content\">
\t\t\t\t\t\t\t<h3>Quick Links</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Us</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blogs</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_events') }}\">Event Listing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"pricing-plan.html\">Pricing Plan</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"link-content2\">
\t\t\t\t\t\t\t<h3>Contact Us</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li><a href=\"tel:+11234567890\"><img src=\"/assets/img/icons/phn1.svg\" alt=\"\" />+1 123 456 7890</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"/assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"mailto:eventifyevent@gmail.com\"><img src=\"/assets/img/icons/mail1.svg\" alt=\"\" />eventifyevent@gmail.com</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\"><img src=\"/assets/img/icons/world1.svg\" alt=\"\" />eventifyevent.com</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-social-box\">
\t\t\t\t\t\t\t<h3>Our Recent Event Gallery</h3>
\t\t\t\t\t\t\t<div class=\"space12\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t{% for i in 1..6 %}
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img{{ i }}.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\"><a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"space60\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t<p>&copy; Copyright 2024 - Eventify. All Right Reserved</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<script src=\"/assets/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/fontawesome.js\"></script>
\t\t<script src=\"/assets/js/vendor/aos.js\"></script>
\t\t<script src=\"/assets/js/vendor/owlcarousel.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/sidebar.js\"></script>
\t\t<script src=\"/assets/js/vendor/mobilemenu.js\"></script>
\t\t<script src=\"/assets/js/vendor/nice-select.js\"></script>
\t\t<script src=\"/assets/js/main.js\"></script>
\t\t<script>
\t\t\tfunction hidePreloader() {
\t\t\t\t\$('.preloader').fadeOut(300);
\t\t\t}
\t\t\t\$(window).on('load', function() {
\t\t\t\tsetTimeout(hidePreloader, 200);
\t\t\t});
\t\t\tsetTimeout(hidePreloader, 2500);

\t\t\t// Sponsor request modal
\t\t\t\$(function() {
\t\t\t\tvar \$sponsorModal = \$('#sponsor-request-modal');
\t\t\t\tvar \$sponsorForm = \$('#sponsor-request-form');
\t\t\t\tif (\$sponsorModal.length && \$sponsorForm.length) {
\t\t\t\t\t\$('.sponsor-request-btn').on('click', function() {
\t\t\t\t\t\tvar url = \$(this).data('submit-url');
\t\t\t\t\t\tvar name = \$(this).data('package-name');
\t\t\t\t\t\t\$sponsorForm.attr('action', url);
\t\t\t\t\t\t\$('#sponsor-modal-package-name').text(name);
\t\t\t\t\t\t\$sponsorModal.css('display', 'flex');
\t\t\t\t\t});
\t\t\t\t\tfunction closeSponsorModal() {
\t\t\t\t\t\t\$sponsorModal.css('display', 'none');
\t\t\t\t\t}
\t\t\t\t\t\$('#sponsor-request-close, #sponsor-request-cancel').on('click', closeSponsorModal);
\t\t\t\t\t\$sponsorModal.on('click', function(e) {
\t\t\t\t\t\tif (e.target === \$sponsorModal[0]) closeSponsorModal();
\t\t\t\t\t});
\t\t\t\t}
\t\t\t});

\t\t\t// Ticket checkout modal logic
\t\t\t\$(function() {
\t\t\t\tvar \$overlay = \$('#ticket-checkout');
\t\t\t\tvar \$openBtn = \$('#open-ticket-checkout');
\t\t\t\tvar \$closeBtn = \$('#ticket-checkout-close');
\t\t\t\tvar \$backdrop = \$('.ticket-checkout-backdrop');

\t\t\t\tfunction recalcSummary() {
\t\t\t\t\tvar \$lines = \$('#ticket-summary-lines');
\t\t\t\t\tvar total = 0;
\t\t\t\t\t\$lines.empty();
\t\t\t\t\t\$('.ticket-checkout-row').each(function() {
\t\t\t\t\t\tvar \$row = \$(this);
\t\t\t\t\t\tvar qty = parseInt(\$row.find('.ticket-qty-value').text(), 10) || 0;
\t\t\t\t\t\tif (!qty) return;
\t\t\t\t\t\tvar name = \$row.data('ticket-name');
\t\t\t\t\t\tvar priceStr = \$row.data('ticket-price');
\t\t\t\t\t\tvar price = parseFloat(priceStr || '0');
\t\t\t\t\t\tvar lineTotal = price * qty;
\t\t\t\t\t\tif (!isNaN(lineTotal)) total += lineTotal;
\t\t\t\t\t\tvar labelPrice = price === 0 ? 'Free' : '\$' + price.toFixed(2);
\t\t\t\t\t\tvar \$line = \$('<div class=\\\"ticket-summary-line\\\"></div>');
\t\t\t\t\t\t\$line.append('<span>' + qty + ' × ' + name + '</span>');
\t\t\t\t\t\t\$line.append('<span>' + labelPrice + '</span>');
\t\t\t\t\t\t\$lines.append(\$line);
\t\t\t\t\t});
\t\t\t\t\tvar totalLabel = total === 0 ? '\$0.00' : '\$' + total.toFixed(2);
\t\t\t\t\t\$('#ticket-summary-total-amount').text(totalLabel);
\t\t\t\t}

\t\t\t\tfunction openOverlay() {
\t\t\t\t\tif (!\$overlay.length) return;
\t\t\t\t\t\$overlay.addClass('active');
\t\t\t\t\trecalcSummary();
\t\t\t\t\t\$('#ticket-step-1').removeClass('d-none');
\t\t\t\t\t\$('#ticket-step-2').addClass('d-none');
\t\t\t\t\t\$('#ticket-step-3').addClass('d-none');
\t\t\t\t\t\$('#ticket-checkout-register').prop('disabled', false).text('Register');
\t\t\t\t}
\t\t\t\tfunction closeOverlay() {
\t\t\t\t\t\$overlay.removeClass('active');
\t\t\t\t}

\t\t\t\t\$openBtn.on('click', function(e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\topenOverlay();
\t\t\t\t});
\t\t\t\t\$closeBtn.on('click', function() {
\t\t\t\t\tcloseOverlay();
\t\t\t\t});
\t\t\t\t\$backdrop.on('click', function() {
\t\t\t\t\tcloseOverlay();
\t\t\t\t});

\t\t\t\t\$(document).on('click', '.ticket-qty-plus', function() {
\t\t\t\t\tvar \$val = \$(this).siblings('.ticket-qty-value');
\t\t\t\t\tvar current = parseInt(\$val.text(), 10) || 0;
\t\t\t\t\t\$val.text(current + 1);
\t\t\t\t\trecalcSummary();
\t\t\t\t});
\t\t\t\t\$(document).on('click', '.ticket-qty-minus', function() {
\t\t\t\t\tvar \$val = \$(this).siblings('.ticket-qty-value');
\t\t\t\t\tvar current = parseInt(\$val.text(), 10) || 0;
\t\t\t\t\tif (current > 0) {
\t\t\t\t\t\t\$val.text(current - 1);
\t\t\t\t\t\trecalcSummary();
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t// Step 1 -> Step 2 transition (allow free events: total can be \$0.00 if at least one ticket qty > 0)
\t\t\t\t\$('#ticket-checkout-continue').on('click', function () {
\t\t\t\t\tvar hasSelection = false;
\t\t\t\t\t\$('.ticket-checkout-row').each(function() {
\t\t\t\t\t\tvar qty = parseInt(\$(this).find('.ticket-qty-value').text(), 10) || 0;
\t\t\t\t\t\tif (qty > 0) { hasSelection = true; }
\t\t\t\t\t});
\t\t\t\t\tif (!hasSelection) {
\t\t\t\t\t\talert('Please select at least one ticket.');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$('#ticket-step-1').addClass('d-none');
\t\t\t\t\t\$('#ticket-step-2').removeClass('d-none');
\t\t\t\t});

\t\t\t\t\$('#ticket-step2-back').on('click', function () {
\t\t\t\t\t\$('#ticket-step-2').addClass('d-none');
\t\t\t\t\t\$('#ticket-step-1').removeClass('d-none');
\t\t\t\t});

\t\t\t\t// Final step: create Stripe Checkout Session (or free order) then redirect to Stripe or show thank-you
\t\t\t\t\$('#ticket-contact-form').on('submit', function (e) {
\t\t\t\t\te.preventDefault();
\t\t\t\t\tvar \$form = \$(this);
\t\t\t\t\tvar \$btn = \$('#ticket-checkout-register');
\t\t\t\t\tvar email = \$form.find('input[name=\\\"email\\\"]').val() || '';
\t\t\t\t\tvar url = \$overlay.data('checkout-url');
\t\t\t\t\tvar eventId = \$overlay.data('event-id');
\t\t\t\t\tvar token = \$overlay.data('checkout-token');
\t\t\t\t\tvar items = [];
\t\t\t\t\t\$('.ticket-checkout-row').each(function() {
\t\t\t\t\t\tvar \$row = \$(this);
\t\t\t\t\t\tvar qty = parseInt(\$row.find('.ticket-qty-value').text(), 10) || 0;
\t\t\t\t\t\tif (qty > 0) {
\t\t\t\t\t\t\titems.push({
\t\t\t\t\t\t\t\tticketId: parseInt(\$row.data('ticket-id'), 10),
\t\t\t\t\t\t\t\tquantity: qty
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\tif (items.length === 0) {
\t\t\t\t\t\talert('Please select at least one ticket.');
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\t\$btn.prop('disabled', true).text('Processing…');
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: url,
\t\t\t\t\t\tmethod: 'POST',
\t\t\t\t\t\tcontentType: 'application/json',
\t\t\t\t\t\tdata: JSON.stringify({ _token: token, eventId: eventId, items: items }),
\t\t\t\t\t\tsuccess: function (data) {
\t\t\t\t\t\t\tif (!data || typeof data !== 'object') {
\t\t\t\t\t\t\t\t\$btn.prop('disabled', false).text('Proceed to payment');
\t\t\t\t\t\t\t\talert('Invalid response from server. Please try again.');
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (data.url) {
\t\t\t\t\t\t\t\twindow.location.href = data.url;
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tif (data.skipStripe && data.success) {
\t\t\t\t\t\t\t\t\$('#ticket-thankyou-email').text(email);
\t\t\t\t\t\t\t\tvar orderId = data.orderId || (data.orders && data.orders[0] && data.orders[0].id);
\t\t\t\t\t\t\t\t\$('#ticket-thankyou-order-id').text(orderId ? 'Order #' + orderId : '').toggle(!!orderId);
\t\t\t\t\t\t\t\tif (data.qrCodeUrl || data.qrCodePath) {
\t\t\t\t\t\t\t\t\tvar src = data.qrCodeUrl || (data.qrCodePath.charAt(0) === '/' ? data.qrCodePath : '/' + data.qrCodePath);
\t\t\t\t\t\t\t\t\t\$('#ticket-thankyou-qr').attr('src', src);
\t\t\t\t\t\t\t\t\t\$('#ticket-thankyou-qr-wrapper').show();
\t\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\t\$('#ticket-thankyou-qr-wrapper').hide();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t\$('#ticket-step-2').addClass('d-none');
\t\t\t\t\t\t\t\t\$('#ticket-step-3').removeClass('d-none');
\t\t\t\t\t\t\t} else {
\t\t\t\t\t\t\t\t\$btn.prop('disabled', false).text('Proceed to payment');
\t\t\t\t\t\t\t\talert(data.error || 'Unable to complete registration.');
\t\t\t\t\t\t\t}
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function (xhr) {
\t\t\t\t\t\t\t\$btn.prop('disabled', false).text('Proceed to payment');
\t\t\t\t\t\t\tvar msg = 'Unable to complete registration.';
\t\t\t\t\t\t\tif (xhr.status === 401) {
\t\t\t\t\t\t\t\tmsg = 'Please log in to complete your order.';
\t\t\t\t\t\t\t\twindow.location.href = xhr.responseJSON && xhr.responseJSON.login_url
\t\t\t\t\t\t\t\t\t? xhr.responseJSON.login_url
\t\t\t\t\t\t\t\t\t: '{{ path('app_login') }}?redirect=' + encodeURIComponent(window.location.href);
\t\t\t\t\t\t\t\treturn;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\ttry {
\t\t\t\t\t\t\t\tvar data = xhr.responseJSON || (xhr.responseText ? JSON.parse(xhr.responseText) : null);
\t\t\t\t\t\t\t\tif (data && data.error) msg = data.error;
\t\t\t\t\t\t\t} catch (e) {}
\t\t\t\t\t\t\talert(msg);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});

\t\t\t\t\$('#ticket-thankyou-close').on('click', function () {
\t\t\t\t\tcloseOverlay();
\t\t\t\t});
\t\t\t});

\t\t\t// Share event functionality
\t\t\t\$(function() {
\t\t\t\t\$('#share-event-btn').on('click', function() {
\t\t\t\t\tvar eventTitle = '{{ event.title|e('js') }}';
\t\t\t\t\tvar eventUrl = window.location.href;
\t\t\t\t\tvar eventDescription = '{{ event.description|default('')|slice(0, 100)|e('js') }}';

\t\t\t\t\t// Check if Web Share API is supported
\t\t\t\t\tif (navigator.share) {
\t\t\t\t\t\tnavigator.share({
\t\t\t\t\t\t\ttitle: eventTitle,
\t\t\t\t\t\t\ttext: eventDescription,
\t\t\t\t\t\t\turl: eventUrl
\t\t\t\t\t\t}).then(function() {
\t\t\t\t\t\t\tconsole.log('Event shared successfully');
\t\t\t\t\t\t}).catch(function(err) {
\t\t\t\t\t\t\tconsole.log('Error sharing:', err);
\t\t\t\t\t\t});
\t\t\t\t\t} else {
\t\t\t\t\t\t// Fallback: Copy to clipboard
\t\t\t\t\t\tvar tempInput = document.createElement('input');
\t\t\t\t\t\ttempInput.value = eventUrl;
\t\t\t\t\t\tdocument.body.appendChild(tempInput);
\t\t\t\t\t\ttempInput.select();
\t\t\t\t\t\ttempInput.setSelectionRange(0, 99999);
\t\t\t\t\t\t
\t\t\t\t\t\ttry {
\t\t\t\t\t\t\tdocument.execCommand('copy');
\t\t\t\t\t\t\tdocument.body.removeChild(tempInput);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t// Show success message
\t\t\t\t\t\t\tvar \$btn = \$(this);
\t\t\t\t\t\t\tvar originalHTML = \$btn.html();
\t\t\t\t\t\t\t\$btn.html('<i class=\"fa-solid fa-check\"></i>');
\t\t\t\t\t\t\t\$btn.addClass('btn-success').removeClass('btn-outline-secondary');
\t\t\t\t\t\t\t
\t\t\t\t\t\t\tsetTimeout(function() {
\t\t\t\t\t\t\t\t\$btn.html(originalHTML);
\t\t\t\t\t\t\t\t\$btn.removeClass('btn-success').addClass('btn-outline-secondary');
\t\t\t\t\t\t\t}, 2000);
\t\t\t\t\t\t} catch (err) {
\t\t\t\t\t\t\talert('Could not copy link. Please copy manually: ' + eventUrl);
\t\t\t\t\t\t\tdocument.body.removeChild(tempInput);
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t});
\t\t\t});
\t\t</script>
\t</body>
</html>
", "event_show.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/event_show.html.twig");
    }
}

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

/* events.html.twig */
class __TwigTemplate_1759985060a3992c451992a6d351e15b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "events.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>Eventify - Discover Amazing Events</title>

\t\t<!--=====FAB ICON=======-->
\t\t<link rel=\"shortcut icon\" href=\"/assets/img/logo/fav-logo1.png\" />

\t\t<!--===== CSS LINK =======-->
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
\t\t<link rel=\"stylesheet\" href=\"/assets/css/events-custom.css\" />

\t\t<!--=====  JS SCRIPT LINK =======-->
\t\t<script src=\"/assets/js/vendor/jquery-3.7.1.min.js\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t<!-- Popup Section -->
\t\t<div id=\"popup\" class=\"popup-overlay d-none\">
\t\t\t<div class=\"popup-content\">
\t\t\t\t<span class=\"close-btn\" id=\"close-popup\">&times;</span>
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

\t\t";
        // line 73
        yield from $this->load("partials/header_events.html.twig", 73)->unwrap()->yield($context);
        // line 74
        yield "
\t\t<!--===== HERO AREA STARTS =======-->
\t\t<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 100px 0;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 m-auto\">
\t\t\t\t\t\t<div class=\"heading1 text-center\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 48px; margin-bottom: 20px;\">";
        // line 81
        if ((($tmp = (isset($context["filter_organizer"]) || array_key_exists("filter_organizer", $context) ? $context["filter_organizer"] : (function () { throw new RuntimeError('Variable "filter_organizer" does not exist.', 81, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield "Events by ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["filter_organizer"]) || array_key_exists("filter_organizer", $context) ? $context["filter_organizer"] : (function () { throw new RuntimeError('Variable "filter_organizer" does not exist.', 81, $this->source); })()), "name", [], "any", false, false, false, 81), "html", null, true);
        } else {
            yield "Discover & Book Amazing Events";
        }
        yield "</h1>
\t\t\t\t\t\t\t<p style=\"font-size: 18px; color: rgba(255,255,255,0.9); margin-bottom: 40px;\">Find the perfect event for you. From conferences to concerts, workshops to festivals.</p>
\t\t\t\t\t\t\t<div class=\"hero-search-box\" style=\"max-width: 600px; margin: 0 auto;\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-white border-0\"><i class=\"fa-solid fa-search\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-0\" id=\"hero-search\" placeholder=\"Search for events...\" style=\"padding: 15px;\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" style=\"padding: 0 30px;\">Search</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== HERO AREA ENDS =======-->

\t\t<!--===== EVENTS AREA STARTS =======-->
\t\t<div class=\"team-sperkers-section-area sp1\">
\t\t\t<div class=\"container\">
\t\t\t\t";
        // line 100
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "flashes", ["success"], "method", false, false, false, 100));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 101
            yield "\t\t\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        yield "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "flashes", ["error"], "method", false, false, false, 106));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 107
            yield "\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t</div>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "
\t\t\t\t<div class=\"section-header text-center mb-5\">
\t\t\t\t\t<h2 style=\"font-size: 36px; font-weight: 600; margin-bottom: 10px;\">Upcoming Events</h2>
\t\t\t\t\t<p style=\"font-size: 16px; color: #666;\">Explore our curated selection of events happening near you</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\" id=\"events-list-container\">
\t\t\t\t\t";
        // line 119
        yield from $this->load("events/_events_list.html.twig", 119)->unwrap()->yield(CoreExtension::merge($context, ["events" => (isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 119, $this->source); })())]));
        // line 120
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== EVENTS AREA ENDS =======-->

\t\t<!--===== WHY CHOOSE US AREA STARTS =======-->
\t\t<div class=\"features-section\" style=\"background: #f8f9fa; padding: 80px 0;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row text-center mb-5\">
\t\t\t\t\t<div class=\"col-lg-8 m-auto\">
\t\t\t\t\t\t<h2 style=\"font-size: 36px; font-weight: 600; margin-bottom: 15px;\">Why Choose Eventify?</h2>
\t\t\t\t\t\t<p style=\"font-size: 16px; color: #666;\">Your trusted platform for discovering and booking amazing events</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">Easy Booking</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Book tickets in just a few clicks with secure payment</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">Instant Tickets</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Get your tickets instantly delivered to your email</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-shield-halved\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">Secure Payment</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Your transactions are safe and encrypted</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-headset\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">24/7 Support</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Our team is always here to help you</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== WHY CHOOSE US AREA ENDS =======-->

\t\t<!--===== FOOTER AREA STARTS =======-->
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
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-0\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t</li>
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
        // line 208
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Event Listing</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"pricing-plan.html\">Pricing Plan</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 210
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_new");
        yield "\">Contact Us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"link-content2\">
\t\t\t\t\t\t\t<h3>Contact Us</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+11234567890\"><img src=\"/assets/img/icons/phn1.svg\" alt=\"\" />+1 123 456 7890</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:eventifyevent@gmail.com\"><img src=\"/assets/img/icons/mail1.svg\" alt=\"\" />eventifyevent@gmail.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"> <img src=\"/assets/img/icons/world1.svg\" alt=\"\" />eventifyevent.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-social-box\">
\t\t\t\t\t\t\t<h3>Our Recent Event Gallery</h3>
\t\t\t\t\t\t\t<div class=\"space12\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img3.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"space60\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t<p>&copy; Copyright 2024 -Eventify. All Right Reserved</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== FOOTER AREA ENDS =======-->

\t\t<!--===== JS SCRIPT LINK =======-->
\t\t<script src=\"/assets/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/fontawesome.js\"></script>
\t\t<script src=\"/assets/js/vendor/aos.js\"></script>
\t\t<script src=\"/assets/js/vendor/jquery.appear.js\"></script>
\t\t<script src=\"/assets/js/vendor/jquery.odometer.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/sidebar.js\"></script>
\t\t<script src=\"/assets/js/vendor/magnific-popup.js\"></script>
\t\t<script src=\"/assets/js/vendor/gsap.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/ScrollTrigger.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/Splitetext.js\"></script>
\t\t<script src=\"/assets/js/vendor/mobilemenu.js\"></script>
\t\t<script src=\"/assets/js/vendor/owlcarousel.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/nice-select.js\"></script>
\t\t<script src=\"/assets/js/vendor/waypoints.js\"></script>
\t\t<script src=\"/assets/js/vendor/slick-slider.js\"></script>
\t\t<script src=\"/assets/js/vendor/circle-progress.js\"></script>
\t\t<script src=\"/assets/js/main.js\"></script>
\t\t<script>
\t\t(function () {
\t\t\tvar container = document.getElementById('events-list-container');
\t\t\tvar heroSearchEl = document.getElementById('hero-search');
\t\t\tvar heroSearchBtn = heroSearchEl ? heroSearchEl.nextElementSibling : null;
\t\t\tif (!container || !heroSearchEl) return;

\t\t\tvar debounceTimer;
\t\t\tfunction debounce(fn, ms) {
\t\t\t\treturn function () {
\t\t\t\t\tclearTimeout(debounceTimer);
\t\t\t\t\tvar self = this, args = arguments;
\t\t\t\t\tdebounceTimer = setTimeout(function () { fn.apply(self, args); }, ms);
\t\t\t\t};
\t\t\t}

\t\t\tfunction loadEvents() {
\t\t\t\tvar q = heroSearchEl.value ? heroSearchEl.value.trim() : '';
\t\t\t\tvar sort = 'date_asc'; // Default sort
\t\t\t\tvar params = new URLSearchParams();
\t\t\t\tif (q) params.set('q', q);
\t\t\t\tparams.set('sort', sort);
\t\t\t\tvar url = (window.location.pathname || '/events') + '?' + params.toString();

\t\t\t\tcontainer.style.opacity = '0.6';
\t\t\t\tcontainer.style.pointerEvents = 'none';

\t\t\t\tfetch(url, {
\t\t\t\t\theaders: { 'X-Requested-With': 'XMLHttpRequest' }
\t\t\t\t})
\t\t\t\t\t.then(function (r) { return r.text(); })
\t\t\t\t\t.then(function (html) {
\t\t\t\t\t\tcontainer.innerHTML = html;
\t\t\t\t\t\thistory.replaceState(null, '', url);
\t\t\t\t\t})
\t\t\t\t\t.catch(function () {
\t\t\t\t\t\tcontainer.innerHTML = '<div class=\"col-12 text-center py-5\"><p class=\"text-danger\">Error loading events. Please refresh.</p></div>';
\t\t\t\t\t})
\t\t\t\t\t.finally(function () {
\t\t\t\t\t\tcontainer.style.opacity = '';
\t\t\t\t\t\tcontainer.style.pointerEvents = '';
\t\t\t\t\t});
\t\t\t}

\t\t\t// Hero search on input - filter without scrolling
\t\t\theroSearchEl.addEventListener('input', debounce(function() {
\t\t\t\tloadEvents();
\t\t\t}, 350));

\t\t\t// Handle search button click - filter and scroll
\t\t\tif (heroSearchBtn) {
\t\t\t\theroSearchBtn.addEventListener('click', function() {
\t\t\t\t\tloadEvents();
\t\t\t\t\t// Scroll to events section
\t\t\t\t\tvar eventsSection = document.querySelector('.team-sperkers-section-area');
\t\t\t\t\tif (eventsSection) {
\t\t\t\t\t\teventsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\t// Handle Enter key on hero search - filter and scroll
\t\t\theroSearchEl.addEventListener('keypress', function(e) {
\t\t\t\tif (e.key === 'Enter') {
\t\t\t\t\tloadEvents();
\t\t\t\t\t// Scroll to events section
\t\t\t\t\tvar eventsSection = document.querySelector('.team-sperkers-section-area');
\t\t\t\t\tif (eventsSection) {
\t\t\t\t\t\teventsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t})();
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
        return "events.html.twig";
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
        return array (  301 => 210,  296 => 208,  206 => 120,  204 => 119,  195 => 112,  185 => 108,  182 => 107,  177 => 106,  167 => 102,  164 => 101,  160 => 100,  133 => 81,  124 => 74,  122 => 73,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>Eventify - Discover Amazing Events</title>

\t\t<!--=====FAB ICON=======-->
\t\t<link rel=\"shortcut icon\" href=\"/assets/img/logo/fav-logo1.png\" />

\t\t<!--===== CSS LINK =======-->
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
\t\t<link rel=\"stylesheet\" href=\"/assets/css/events-custom.css\" />

\t\t<!--=====  JS SCRIPT LINK =======-->
\t\t<script src=\"/assets/js/vendor/jquery-3.7.1.min.js\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t<!-- Popup Section -->
\t\t<div id=\"popup\" class=\"popup-overlay d-none\">
\t\t\t<div class=\"popup-content\">
\t\t\t\t<span class=\"close-btn\" id=\"close-popup\">&times;</span>
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

\t\t{% include 'partials/header_events.html.twig' %}

\t\t<!--===== HERO AREA STARTS =======-->
\t\t<div class=\"inner-page-header\" style=\"background-image: url(/assets/img/bg/header-bg6.png); padding: 100px 0;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-8 m-auto\">
\t\t\t\t\t\t<div class=\"heading1 text-center\">
\t\t\t\t\t\t\t<h1 style=\"font-size: 48px; margin-bottom: 20px;\">{% if filter_organizer %}Events by {{ filter_organizer.name }}{% else %}Discover & Book Amazing Events{% endif %}</h1>
\t\t\t\t\t\t\t<p style=\"font-size: 18px; color: rgba(255,255,255,0.9); margin-bottom: 40px;\">Find the perfect event for you. From conferences to concerts, workshops to festivals.</p>
\t\t\t\t\t\t\t<div class=\"hero-search-box\" style=\"max-width: 600px; margin: 0 auto;\">
\t\t\t\t\t\t\t\t<div class=\"input-group input-group-lg\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text bg-white border-0\"><i class=\"fa-solid fa-search\"></i></span>
\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control border-0\" id=\"hero-search\" placeholder=\"Search for events...\" style=\"padding: 15px;\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\" style=\"padding: 0 30px;\">Search</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== HERO AREA ENDS =======-->

\t\t<!--===== EVENTS AREA STARTS =======-->
\t\t<div class=\"team-sperkers-section-area sp1\">
\t\t\t<div class=\"container\">
\t\t\t\t{% for message in app.flashes('success') %}
\t\t\t\t\t<div class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}
\t\t\t\t{% for message in app.flashes('error') %}
\t\t\t\t\t<div class=\"alert alert-danger alert-dismissible fade show\" role=\"alert\">
\t\t\t\t\t\t{{ message }}
\t\t\t\t\t\t<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button>
\t\t\t\t\t</div>
\t\t\t\t{% endfor %}

\t\t\t\t<div class=\"section-header text-center mb-5\">
\t\t\t\t\t<h2 style=\"font-size: 36px; font-weight: 600; margin-bottom: 10px;\">Upcoming Events</h2>
\t\t\t\t\t<p style=\"font-size: 16px; color: #666;\">Explore our curated selection of events happening near you</p>
\t\t\t\t</div>

\t\t\t\t<div class=\"row\" id=\"events-list-container\">
\t\t\t\t\t{% include 'events/_events_list.html.twig' with { events: events } %}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== EVENTS AREA ENDS =======-->

\t\t<!--===== WHY CHOOSE US AREA STARTS =======-->
\t\t<div class=\"features-section\" style=\"background: #f8f9fa; padding: 80px 0;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row text-center mb-5\">
\t\t\t\t\t<div class=\"col-lg-8 m-auto\">
\t\t\t\t\t\t<h2 style=\"font-size: 36px; font-weight: 600; margin-bottom: 15px;\">Why Choose Eventify?</h2>
\t\t\t\t\t\t<p style=\"font-size: 16px; color: #666;\">Your trusted platform for discovering and booking amazing events</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row g-4\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-calendar-check\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">Easy Booking</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Book tickets in just a few clicks with secure payment</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-ticket\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">Instant Tickets</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Get your tickets instantly delivered to your email</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-shield-halved\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">Secure Payment</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Your transactions are safe and encrypted</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"feature-card text-center\" style=\"background: white; padding: 40px 20px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.08);\">
\t\t\t\t\t\t\t<div class=\"feature-icon\" style=\"font-size: 40px; color: #0d6efd; margin-bottom: 20px;\">
\t\t\t\t\t\t\t\t<i class=\"fa-solid fa-headset\"></i>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<h4 style=\"font-size: 20px; font-weight: 600; margin-bottom: 10px;\">24/7 Support</h4>
\t\t\t\t\t\t\t<p style=\"color: #666; font-size: 14px;\">Our team is always here to help you</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== WHY CHOOSE US AREA ENDS =======-->

\t\t<!--===== FOOTER AREA STARTS =======-->
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
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-0\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t</li>
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
\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_reclamation_new') }}\">Contact Us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"link-content2\">
\t\t\t\t\t\t\t<h3>Contact Us</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+11234567890\"><img src=\"/assets/img/icons/phn1.svg\" alt=\"\" />+1 123 456 7890</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"/assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:eventifyevent@gmail.com\"><img src=\"/assets/img/icons/mail1.svg\" alt=\"\" />eventifyevent@gmail.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"> <img src=\"/assets/img/icons/world1.svg\" alt=\"\" />eventifyevent.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-social-box\">
\t\t\t\t\t\t\t<h3>Our Recent Event Gallery</h3>
\t\t\t\t\t\t\t<div class=\"space12\"></div>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img3.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"/assets/img/all-images/footer/footer-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"space60\"></div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t\t<p>&copy; Copyright 2024 -Eventify. All Right Reserved</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== FOOTER AREA ENDS =======-->

\t\t<!--===== JS SCRIPT LINK =======-->
\t\t<script src=\"/assets/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/fontawesome.js\"></script>
\t\t<script src=\"/assets/js/vendor/aos.js\"></script>
\t\t<script src=\"/assets/js/vendor/jquery.appear.js\"></script>
\t\t<script src=\"/assets/js/vendor/jquery.odometer.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/sidebar.js\"></script>
\t\t<script src=\"/assets/js/vendor/magnific-popup.js\"></script>
\t\t<script src=\"/assets/js/vendor/gsap.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/ScrollTrigger.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/Splitetext.js\"></script>
\t\t<script src=\"/assets/js/vendor/mobilemenu.js\"></script>
\t\t<script src=\"/assets/js/vendor/owlcarousel.min.js\"></script>
\t\t<script src=\"/assets/js/vendor/nice-select.js\"></script>
\t\t<script src=\"/assets/js/vendor/waypoints.js\"></script>
\t\t<script src=\"/assets/js/vendor/slick-slider.js\"></script>
\t\t<script src=\"/assets/js/vendor/circle-progress.js\"></script>
\t\t<script src=\"/assets/js/main.js\"></script>
\t\t<script>
\t\t(function () {
\t\t\tvar container = document.getElementById('events-list-container');
\t\t\tvar heroSearchEl = document.getElementById('hero-search');
\t\t\tvar heroSearchBtn = heroSearchEl ? heroSearchEl.nextElementSibling : null;
\t\t\tif (!container || !heroSearchEl) return;

\t\t\tvar debounceTimer;
\t\t\tfunction debounce(fn, ms) {
\t\t\t\treturn function () {
\t\t\t\t\tclearTimeout(debounceTimer);
\t\t\t\t\tvar self = this, args = arguments;
\t\t\t\t\tdebounceTimer = setTimeout(function () { fn.apply(self, args); }, ms);
\t\t\t\t};
\t\t\t}

\t\t\tfunction loadEvents() {
\t\t\t\tvar q = heroSearchEl.value ? heroSearchEl.value.trim() : '';
\t\t\t\tvar sort = 'date_asc'; // Default sort
\t\t\t\tvar params = new URLSearchParams();
\t\t\t\tif (q) params.set('q', q);
\t\t\t\tparams.set('sort', sort);
\t\t\t\tvar url = (window.location.pathname || '/events') + '?' + params.toString();

\t\t\t\tcontainer.style.opacity = '0.6';
\t\t\t\tcontainer.style.pointerEvents = 'none';

\t\t\t\tfetch(url, {
\t\t\t\t\theaders: { 'X-Requested-With': 'XMLHttpRequest' }
\t\t\t\t})
\t\t\t\t\t.then(function (r) { return r.text(); })
\t\t\t\t\t.then(function (html) {
\t\t\t\t\t\tcontainer.innerHTML = html;
\t\t\t\t\t\thistory.replaceState(null, '', url);
\t\t\t\t\t})
\t\t\t\t\t.catch(function () {
\t\t\t\t\t\tcontainer.innerHTML = '<div class=\"col-12 text-center py-5\"><p class=\"text-danger\">Error loading events. Please refresh.</p></div>';
\t\t\t\t\t})
\t\t\t\t\t.finally(function () {
\t\t\t\t\t\tcontainer.style.opacity = '';
\t\t\t\t\t\tcontainer.style.pointerEvents = '';
\t\t\t\t\t});
\t\t\t}

\t\t\t// Hero search on input - filter without scrolling
\t\t\theroSearchEl.addEventListener('input', debounce(function() {
\t\t\t\tloadEvents();
\t\t\t}, 350));

\t\t\t// Handle search button click - filter and scroll
\t\t\tif (heroSearchBtn) {
\t\t\t\theroSearchBtn.addEventListener('click', function() {
\t\t\t\t\tloadEvents();
\t\t\t\t\t// Scroll to events section
\t\t\t\t\tvar eventsSection = document.querySelector('.team-sperkers-section-area');
\t\t\t\t\tif (eventsSection) {
\t\t\t\t\t\teventsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}

\t\t\t// Handle Enter key on hero search - filter and scroll
\t\t\theroSearchEl.addEventListener('keypress', function(e) {
\t\t\t\tif (e.key === 'Enter') {
\t\t\t\t\tloadEvents();
\t\t\t\t\t// Scroll to events section
\t\t\t\t\tvar eventsSection = document.querySelector('.team-sperkers-section-area');
\t\t\t\t\tif (eventsSection) {
\t\t\t\t\t\teventsSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
\t\t\t\t\t}
\t\t\t\t}
\t\t\t});
\t\t})();
\t\t</script>
\t</body>
</html>
", "events.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\events.html.twig");
    }
}

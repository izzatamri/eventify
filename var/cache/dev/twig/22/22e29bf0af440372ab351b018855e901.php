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

/* event-single.html.twig */
class __TwigTemplate_b0b5179ecceb1c891fdffca2b606dbeb extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event-single.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event-single.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>Eventify- Event And Conference Theme</title>

\t\t<!--=====FAB ICON=======-->
\t\t<link rel=\"shortcut icon\" href=\"assets/img/logo/fav-logo1.png\" />

\t\t<!--===== CSS LINK =======-->
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/aos.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/fontawesome.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/mobile.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/owlcarousel.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/sidebar.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/slick-slider.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/nice-select.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/odometer.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\" />

\t\t<!--=====  JS SCRIPT LINK =======-->
\t\t<script src=\"assets/js/vendor/jquery-3.7.1.min.js\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t<!-- Popup Section -->
\t\t<div id=\"popup\" class=\"popup-overlay d-none\">
\t\t\t<div class=\"popup-content\">
\t\t\t\t<span class=\"close-btn\" id=\"close-popup\">&times;</span>
\t\t\t\t<div class=\"popup-icon\">
\t\t\t\t\t<img src=\"assets/img/logo/popup-logo.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t<div class=\"heading2\">
\t\t\t\t\t<h2>Grow your business with our agency</h2>
\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"assets/img/icons/check3.svg\" alt=\"\" />Elevate User Experience Expertise</li>
\t\t\t\t\t\t<li><img src=\"assets/img/icons/check3.svg\" alt=\"\" /> Elevate Your UI/UX Skills Designer</li>
\t\t\t\t\t\t<li><img src=\"assets/img/icons/check3.svg\" alt=\"\" />Join Leading UI/UX Event the Year</li>
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
\t\t\t\t<div id=\"loading-icon\"><img src=\"assets/img/logo/preloader.png\" alt=\"\" /></div>
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
\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tp-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"all-images-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">Eventify-Homepage 01</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index2.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">Eventify-Homepage 02</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img3.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index3.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index3.html\">Eventify-Homepage 03</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index4.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index4.html\">Eventify-Homepage 04</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\" style=\"margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index5.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index5.html\">Eventify-Homepage 05</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"all-images-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index6.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index6.html\">Eventify-Homepage 06</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img7.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index7.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index7.html\">Eventify-Homepage 07</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img8.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index8.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index8.html\">Eventify-Homepage 08</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img9.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index9.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index9.html\">Eventify-Homepage 09</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\" style=\"margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img10.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index10.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index10.html\">Eventify-Homepage 10</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Event</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Speakers <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 219
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Events</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 220
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Create Events</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Schedule <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 227
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Our Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_schedule");
        yield "\">Event Schedule</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\">Event Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Blogs <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pages <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"memories.html\">Our Memories</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pricing-plan.html\">Pricing Plan</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ,s</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-area\">
\t\t\t\t\t\t\t\t\t<div class=\"search-icon header__search header-search-btn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/search1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-0\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"header-search-form-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"tx-search-close tx-close\"><i class=\"fa-solid fa-xmark\"></i></div>
\t\t\t\t\t\t\t\t\t<div class=\"header-search-container\">
\t\t\t\t\t\t\t\t\t\t<form role=\"search\" class=\"search-form\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"search-field\" placeholder=\"Search …\" value=\"\" name=\"s\" />
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"search-submit\"><img src=\"assets/img/icons/search1.svg\" alt=\"\" /></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/img/logo/logo1.png\" alt=\"\" /></a>
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
\t\t\t\t\t<img src=\"assets/img/logo/logo2.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-close\">
\t\t\t\t\t<i class=\"fa-solid fa-xmark\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mobile-nav mobile-nav1\">
\t\t\t\t<ul class=\"mobile-nav-list nav-list1\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Home </a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home One</a></li>
\t\t\t\t\t\t\t<li><a href=\"index2.html\">Home Two</a></li>
\t\t\t\t\t\t\t<li><a href=\"index3.html\">Home Three</a></li>
\t\t\t\t\t\t\t<li><a href=\"index4.html\">Home Four</a></li>
\t\t\t\t\t\t\t<li><a href=\"index5.html\">Home Five</a></li>
\t\t\t\t\t\t\t<li><a href=\"index6.html\">Home Six</a></li>
\t\t\t\t\t\t\t<li><a href=\"index7.html\">Home Seven</a></li>
\t\t\t\t\t\t\t<li><a href=\"index8.html\">Home Eight</a></li>
\t\t\t\t\t\t\t<li><a href=\"index9.html\">Home Nine</a></li>
\t\t\t\t\t\t\t<li><a href=\"index10.html\">Home Ten</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"about.html\">About Event</a></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"features.html\">Speakers</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 334
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Events</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 335
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Create Events</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"features.html\">Schedule</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"";
        // line 341
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_events");
        yield "\">Our Event</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 342
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_schedule");
        yield "\">Event Schedule</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 343
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\">Event Details</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Blogs</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blog</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Details</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Pages</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"memories.html\">Our Memories</a></li>
\t\t\t\t\t\t\t<li><a href=\"pricing-plan.html\">Pricing Plan</a></li>
\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ,s</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"allmobilesection\">
\t\t\t\t\t<a href=\"contact.html\" class=\"vl-btn1\">Contact Now</a>
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

\t\t<!--===== HERO AREA STARTS =======-->
\t\t<div class=\"inner-page-header\" style=\"background-image: url(assets/img/bg/header-bg9.png)\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 m-auto\">
\t\t\t\t\t\t<div class=\"heading1 text-center\">
\t\t\t\t\t\t\t<h1>Event single</h1>
\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t<a href=\"index.html\">Home <i class=\"fa-solid fa-angle-right\"></i> <span>Event single</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== HERO AREA ENDS =======-->

\t\t<!--===== EVENT AREA STARTS =======-->
\t\t<div class=\"event-sidepage-section-area sp8\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"event-side-images\">
\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img8.png\" alt=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t\t\t\t<h3>Elevate User Experience Expertise</h3>
\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t<p>In today's digital landscape, exceptional user experience (UX) is the key to creating products and services that truly resonate with people. At Eventify, dive deep into the world of UX with expert-led sessions that explore and cutting-edge techniques, research-driven insights, and innovative tools.</p>
\t\t\t\t\t\t\t<div class=\"space40\"></div>
\t\t\t\t\t\t\t<h4>Event Speakers</h4>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"our-team-boxarea\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-widget-area\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements25.png\" alt=\"\" class=\"elements21\" />
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements26.png\" alt=\"\" class=\"elements22\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/team/team-img12.png\" alt=\"\" class=\"team-img4\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/share1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon1\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon2\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon3\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon4\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"space28\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 485
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Robertson</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"our-team-boxarea\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-widget-area\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements25.png\" alt=\"\" class=\"elements21\" />
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements26.png\" alt=\"\" class=\"elements22\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/team/team-img13.png\" alt=\"\" class=\"team-img4\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/share1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon1\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon2\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon3\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon4\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"space28\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 520
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexy Sammony</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"our-team-boxarea\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-widget-area\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements25.png\" alt=\"\" class=\"elements21\" />
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements26.png\" alt=\"\" class=\"elements22\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/team/team-img14.png\" alt=\"\" class=\"team-img4\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/share1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon1\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon2\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon3\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon4\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"space28\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 554
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Kireon Pollardy</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t<div class=\"shedule-listarea\">
\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t<a href=\"";
        // line 575
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 583
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 594
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t<div class=\"mapouter\">
\t\t\t\t\t\t\t\t<div class=\"gmap_canvas\">
\t\t\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border: 0\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"event-single-section-area sp1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 m-auto\">
\t\t\t\t\t\t<div class=\"event2-header heading2 text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-anime-style-3\">View More Event</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
\t\t\t\t\t\t<div class=\"tabs-button space-margin60\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<button class=\"nav-link active\" id=\"pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\" type=\"button\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t<span class=\"calender\"><img src=\"assets/img/icons/calender2.svg\" alt=\"\" /></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pl-8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">Day One</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 25, 2024</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<button class=\"nav-link\" id=\"pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<span class=\"calender\"><img src=\"assets/img/icons/calender2.svg\" alt=\"\" /></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pl-8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">Day Two</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 25, 2024</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<button class=\"nav-link m-0\" id=\"pills-contact-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-contact\" type=\"button\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<span class=\"calender\"><img src=\"assets/img/icons/calender2.svg\" alt=\"\" /> </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pl-8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">Day Three</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 25, 2024</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\" tabindex=\"0\">
\t\t\t\t\t\t\t\t<div class=\"event-widget-area\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">01</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 685
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 693
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 704
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space48\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">02</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 738
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 746
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 757
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space30 d-lg-none d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">03</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 804
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 812
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 823
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\" tabindex=\"0\">
\t\t\t\t\t\t\t\t<div class=\"event-widget-area\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">01</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 866
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 874
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 885
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space48\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">02</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 919
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 927
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 938
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space30 d-lg-none d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">03</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 985
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 993
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1004
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\" tabindex=\"0\">
\t\t\t\t\t\t\t\t<div class=\"event-widget-area\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">01</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1047
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1055
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1066
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space48\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">02</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1119
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space30 d-lg-none d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">03</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_single");
        yield "\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 1185
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_event_create");
        yield "\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== EVENT AREA ENDS =======-->

\t\t<!--===== CTA AREA STARTS =======-->
\t\t<div class=\"cta1-section-area d-lg-block d-block\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t<div class=\"cta1-main-boxarea\">
\t\t\t\t\t\t\t<div class=\"timer-btn-area\">
\t\t\t\t\t\t\t\t<div class=\"timer\">
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"days1\" class=\"time-value\">119</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"hours1\" class=\"time-value\">22</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"minutes1\" class=\"time-value\">18</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\" style=\"margin: 0 26px 0 0\">
\t\t\t\t\t\t\t\t\t\t<span id=\"seconds1\" class=\"time-value\">44</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\">Buy Ticket</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/calender1.svg\" alt=\"\" />30 January 2025 - 6pm to 11:30pm</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"m-0\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== CTA AREA ENDS =======-->

\t\t<!--===== CTA AREA STARTS =======-->
\t\t<div class=\"cta1-section-area d-lg-none d-block\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t<div class=\"cta1-main-boxarea\">
\t\t\t\t\t\t\t<div class=\"timer-btn-area\">
\t\t\t\t\t\t\t\t<div class=\"timer\">
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"days\" class=\"time-value\">119</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"hours\" class=\"time-value\">22</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"minutes\" class=\"time-value\">18</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\" style=\"margin: 0 26px 0 0\">
\t\t\t\t\t\t\t\t\t\t<span id=\"seconds\" class=\"time-value\">44</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\">Buy Ticket</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/calender1.svg\" alt=\"\" />30 January 2025 - 6pm to 11:30pm</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"m-0\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== CTA AREA ENDS =======-->

\t\t<!--===== FOOTER AREA STARTS =======-->
\t\t<div class=\"footer1-sertion-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-logo-area\">
\t\t\t\t\t\t\t<img src=\"assets/img/logo/logo2.png\" alt=\"\" />
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
        // line 1336
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
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+11234567890\"><img src=\"assets/img/icons/phn1.svg\" alt=\"\" />+1 123 456 7890</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:eventifyevent@gmail.com\"><img src=\"assets/img/icons/mail1.svg\" alt=\"\" />eventifyevent@gmail.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"> <img src=\"assets/img/icons/world1.svg\" alt=\"\" />eventifyevent.com</a>
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
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img3.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img6.png\" alt=\"\" />
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
\t\t<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"assets/js/vendor/fontawesome.js\"></script>
\t\t<script src=\"assets/js/vendor/aos.js\"></script>
\t\t<script src=\"assets/js/vendor/jquery.appear.js\"></script>
\t\t<script src=\"assets/js/vendor/jquery.odometer.min.js\"></script>
\t\t<script src=\"assets/js/vendor/sidebar.js\"></script>
\t\t<script src=\"assets/js/vendor/magnific-popup.js\"></script>
\t\t<script src=\"assets/js/vendor/gsap.min.js\"></script>
\t\t<script src=\"assets/js/vendor/ScrollTrigger.min.js\"></script>
\t\t<script src=\"assets/js/vendor/Splitetext.js\"></script>
\t\t<script src=\"assets/js/vendor/mobilemenu.js\"></script>
\t\t<script src=\"assets/js/vendor/owlcarousel.min.js\"></script>
\t\t<script src=\"assets/js/vendor/nice-select.js\"></script>
\t\t<script src=\"assets/js/vendor/waypoints.js\"></script>
\t\t<script src=\"assets/js/vendor/slick-slider.js\"></script>
\t\t<script src=\"assets/js/vendor/circle-progress.js\"></script>
\t\t<script src=\"assets/js/main.js\"></script>
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
        return "event-single.html.twig";
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
        return array (  1514 => 1336,  1360 => 1185,  1346 => 1174,  1335 => 1166,  1285 => 1119,  1271 => 1108,  1260 => 1100,  1223 => 1066,  1209 => 1055,  1198 => 1047,  1152 => 1004,  1138 => 993,  1127 => 985,  1077 => 938,  1063 => 927,  1052 => 919,  1015 => 885,  1001 => 874,  990 => 866,  944 => 823,  930 => 812,  919 => 804,  869 => 757,  855 => 746,  844 => 738,  807 => 704,  793 => 693,  782 => 685,  688 => 594,  674 => 583,  663 => 575,  639 => 554,  602 => 520,  564 => 485,  419 => 343,  415 => 342,  411 => 341,  402 => 335,  398 => 334,  290 => 229,  286 => 228,  282 => 227,  272 => 220,  268 => 219,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>Eventify- Event And Conference Theme</title>

\t\t<!--=====FAB ICON=======-->
\t\t<link rel=\"shortcut icon\" href=\"assets/img/logo/fav-logo1.png\" />

\t\t<!--===== CSS LINK =======-->
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/bootstrap.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/aos.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/fontawesome.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/magnific-popup.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/mobile.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/owlcarousel.min.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/sidebar.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/slick-slider.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/nice-select.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/vendor/odometer.css\" />
\t\t<link rel=\"stylesheet\" href=\"assets/css/main.css\" />

\t\t<!--=====  JS SCRIPT LINK =======-->
\t\t<script src=\"assets/js/vendor/jquery-3.7.1.min.js\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t<!-- Popup Section -->
\t\t<div id=\"popup\" class=\"popup-overlay d-none\">
\t\t\t<div class=\"popup-content\">
\t\t\t\t<span class=\"close-btn\" id=\"close-popup\">&times;</span>
\t\t\t\t<div class=\"popup-icon\">
\t\t\t\t\t<img src=\"assets/img/logo/popup-logo.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t<div class=\"heading2\">
\t\t\t\t\t<h2>Grow your business with our agency</h2>
\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><img src=\"assets/img/icons/check3.svg\" alt=\"\" />Elevate User Experience Expertise</li>
\t\t\t\t\t\t<li><img src=\"assets/img/icons/check3.svg\" alt=\"\" /> Elevate Your UI/UX Skills Designer</li>
\t\t\t\t\t\t<li><img src=\"assets/img/icons/check3.svg\" alt=\"\" />Join Leading UI/UX Event the Year</li>
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
\t\t\t\t<div id=\"loading-icon\"><img src=\"assets/img/logo/preloader.png\" alt=\"\" /></div>
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
\t\t\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/img/logo/logo1.png\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"main-menu\">
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Home <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"tp-submenu\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"all-images-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index.html\">Eventify-Homepage 01</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index2.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index2.html\">Eventify-Homepage 02</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img3.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index3.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index3.html\">Eventify-Homepage 03</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index4.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index4.html\">Eventify-Homepage 04</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\" style=\"margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index5.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index5.html\">Eventify-Homepage 05</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"all-images-menu\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index6.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index6.html\">Eventify-Homepage 06</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img7.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index7.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index7.html\">Eventify-Homepage 07</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img8.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index8.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index8.html\">Eventify-Homepage 08</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img9.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index9.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index9.html\">Eventify-Homepage 09</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-thumb\" style=\"margin: 0\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/demo/demo-img10.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-btn\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"vl-btn1\" href=\"index10.html\">View Demo </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"homemenu-text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"index10.html\">Eventify-Homepage 10</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li><a href=\"about.html\">About Event</a></li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Speakers <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_events') }}\">Events</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_event_create') }}\">Create Events</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Schedule <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_events') }}\">Our Event</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_event_schedule') }}\">Event Schedule</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ path('app_event_single') }}\">Event Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Blogs <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blog</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Details</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Pages <i class=\"fa-solid fa-angle-down\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"memories.html\">Our Memories</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"pricing-plan.html\">Pricing Plan</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ,s</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-area\">
\t\t\t\t\t\t\t\t\t<div class=\"search-icon header__search header-search-btn\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/search1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"m-0\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"header-search-form-wrapper\">
\t\t\t\t\t\t\t\t\t<div class=\"tx-search-close tx-close\"><i class=\"fa-solid fa-xmark\"></i></div>
\t\t\t\t\t\t\t\t\t<div class=\"header-search-container\">
\t\t\t\t\t\t\t\t\t\t<form role=\"search\" class=\"search-form\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"search\" class=\"search-field\" placeholder=\"Search …\" value=\"\" name=\"s\" />
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"search-submit\"><img src=\"assets/img/icons/search1.svg\" alt=\"\" /></button>
\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t</div>
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
\t\t\t\t\t\t\t<a href=\"index.html\"><img src=\"assets/img/logo/logo1.png\" alt=\"\" /></a>
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
\t\t\t\t\t<img src=\"assets/img/logo/logo2.png\" alt=\"\" />
\t\t\t\t</div>
\t\t\t\t<div class=\"menu-close\">
\t\t\t\t\t<i class=\"fa-solid fa-xmark\"></i>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"mobile-nav mobile-nav1\">
\t\t\t\t<ul class=\"mobile-nav-list nav-list1\">
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Home </a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"index.html\">Home One</a></li>
\t\t\t\t\t\t\t<li><a href=\"index2.html\">Home Two</a></li>
\t\t\t\t\t\t\t<li><a href=\"index3.html\">Home Three</a></li>
\t\t\t\t\t\t\t<li><a href=\"index4.html\">Home Four</a></li>
\t\t\t\t\t\t\t<li><a href=\"index5.html\">Home Five</a></li>
\t\t\t\t\t\t\t<li><a href=\"index6.html\">Home Six</a></li>
\t\t\t\t\t\t\t<li><a href=\"index7.html\">Home Seven</a></li>
\t\t\t\t\t\t\t<li><a href=\"index8.html\">Home Eight</a></li>
\t\t\t\t\t\t\t<li><a href=\"index9.html\">Home Nine</a></li>
\t\t\t\t\t\t\t<li><a href=\"index10.html\">Home Ten</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"about.html\">About Event</a></li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"features.html\">Speakers</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_events') }}\">Events</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_event_create') }}\">Create Events</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"features.html\">Schedule</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_events') }}\">Our Event</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_event_schedule') }}\">Event Schedule</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('app_event_single') }}\">Event Details</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Blogs</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"blog.html\">Our Blog</a></li>
\t\t\t\t\t\t\t<li><a href=\"blog-single.html\">Blog Details</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\">Pages</a>
\t\t\t\t\t\t<ul class=\"sub-menu\">
\t\t\t\t\t\t\t<li><a href=\"memories.html\">Our Memories</a></li>
\t\t\t\t\t\t\t<li><a href=\"pricing-plan.html\">Pricing Plan</a></li>
\t\t\t\t\t\t\t<li><a href=\"faq.html\">FAQ,s</a></li>
\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t</ul>
\t\t\t\t<div class=\"allmobilesection\">
\t\t\t\t\t<a href=\"contact.html\" class=\"vl-btn1\">Contact Now</a>
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

\t\t<!--===== HERO AREA STARTS =======-->
\t\t<div class=\"inner-page-header\" style=\"background-image: url(assets/img/bg/header-bg9.png)\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 m-auto\">
\t\t\t\t\t\t<div class=\"heading1 text-center\">
\t\t\t\t\t\t\t<h1>Event single</h1>
\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t<a href=\"index.html\">Home <i class=\"fa-solid fa-angle-right\"></i> <span>Event single</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== HERO AREA ENDS =======-->

\t\t<!--===== EVENT AREA STARTS =======-->
\t\t<div class=\"event-sidepage-section-area sp8\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-7\">
\t\t\t\t\t\t<div class=\"event-side-images\">
\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img8.png\" alt=\"\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t\t\t\t<h3>Elevate User Experience Expertise</h3>
\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t<p>In today's digital landscape, exceptional user experience (UX) is the key to creating products and services that truly resonate with people. At Eventify, dive deep into the world of UX with expert-led sessions that explore and cutting-edge techniques, research-driven insights, and innovative tools.</p>
\t\t\t\t\t\t\t<div class=\"space40\"></div>
\t\t\t\t\t\t\t<h4>Event Speakers</h4>
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"our-team-boxarea\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-widget-area\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements25.png\" alt=\"\" class=\"elements21\" />
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements26.png\" alt=\"\" class=\"elements22\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/team/team-img12.png\" alt=\"\" class=\"team-img4\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/share1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon1\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon2\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon3\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon4\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"space28\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Robertson</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"our-team-boxarea\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-widget-area\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements25.png\" alt=\"\" class=\"elements21\" />
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements26.png\" alt=\"\" class=\"elements22\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/team/team-img13.png\" alt=\"\" class=\"team-img4\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/share1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon1\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon2\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon3\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon4\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"space28\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexy Sammony</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-6\">
\t\t\t\t\t\t\t\t\t<div class=\"our-team-boxarea\">
\t\t\t\t\t\t\t\t\t\t<div class=\"team-widget-area\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements25.png\" alt=\"\" class=\"elements21\" />
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/elements/elements26.png\" alt=\"\" class=\"elements22\" />
\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/team/team-img14.png\" alt=\"\" class=\"team-img4\" />
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"share\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/share1.svg\" alt=\"\" /></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon1\"><i class=\"fa-brands fa-facebook-f\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon2\"><i class=\"fa-brands fa-linkedin-in\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon3\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"icon4\"><i class=\"fa-brands fa-pinterest-p\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"space28\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Kireon Pollardy</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space16\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t<div class=\"shedule-listarea\">
\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t<div class=\"mapouter\">
\t\t\t\t\t\t\t\t<div class=\"gmap_canvas\">
\t\t\t\t\t\t\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d4506257.120552435!2d88.67021924228865!3d21.954385721237916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1704088968016!5m2!1sen!2sbd\" width=\"600\" height=\"450\" style=\"border: 0\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"event-single-section-area sp1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6 m-auto\">
\t\t\t\t\t\t<div class=\"event2-header heading2 text-center\">
\t\t\t\t\t\t\t<h2 class=\"text-anime-style-3\">View More Event</h2>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"space32\"></div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-12\" data-aos=\"fade-up\" data-aos-duration=\"1000\">
\t\t\t\t\t\t<div class=\"tabs-button space-margin60\">
\t\t\t\t\t\t\t<ul class=\"nav nav-pills\" id=\"pills-tab\" role=\"tablist\">
\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<button class=\"nav-link active\" id=\"pills-home-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-home\" type=\"button\" role=\"tab\" aria-controls=\"pills-home\" aria-selected=\"true\">
\t\t\t\t\t\t\t\t\t\t<span class=\"calender\"><img src=\"assets/img/icons/calender2.svg\" alt=\"\" /></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pl-8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">Day One</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 25, 2024</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<button class=\"nav-link\" id=\"pills-profile-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-profile\" type=\"button\" role=\"tab\" aria-controls=\"pills-profile\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<span class=\"calender\"><img src=\"assets/img/icons/calender2.svg\" alt=\"\" /></span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pl-8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">Day Two</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 25, 2024</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"nav-item\" role=\"presentation\">
\t\t\t\t\t\t\t\t\t<button class=\"nav-link m-0\" id=\"pills-contact-tab\" data-bs-toggle=\"pill\" data-bs-target=\"#pills-contact\" type=\"button\" role=\"tab\" aria-controls=\"pills-contact\" aria-selected=\"false\">
\t\t\t\t\t\t\t\t\t\t<span class=\"calender\"><img src=\"assets/img/icons/calender2.svg\" alt=\"\" /> </span>
\t\t\t\t\t\t\t\t\t\t<span class=\"pl-8\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"day\">Day Three</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"date\">May 25, 2024</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"tab-content\" id=\"pills-tabContent\">
\t\t\t\t\t\t\t<div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\" tabindex=\"0\">
\t\t\t\t\t\t\t\t<div class=\"event-widget-area\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">01</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space48\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">02</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space30 d-lg-none d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">03</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-profile\" role=\"tabpanel\" aria-labelledby=\"pills-profile-tab\" tabindex=\"0\">
\t\t\t\t\t\t\t\t<div class=\"event-widget-area\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">01</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space48\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">02</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space30 d-lg-none d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">03</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"tab-pane fade\" id=\"pills-contact\" role=\"tabpanel\" aria-labelledby=\"pills-contact-tab\" tabindex=\"0\">
\t\t\t\t\t\t\t\t<div class=\"event-widget-area\">
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">01</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space48\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">02</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space30 d-lg-none d-block\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space30\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"event2-boxarea box1\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"active\">03</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/event/event-img6.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-1\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"content-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/clock1.svg\" alt=\"\" />10.00 AM -12.00 PM <span> | </span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />26/C Asana, New York </a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space20\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_single') }}\" class=\"head\">Elevate User Experience Expertise</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"author-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alex Roberton</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>UI/UX Designer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"autho-name-area\" style=\"padding: 0 0 0 12px; border: none\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/testimonials/testimonial-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ path('app_event_create') }}\">Alexys Archer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<p>WP Developer</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"space24\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\"><span class=\"demo\">purchase ticket Now</span></a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== EVENT AREA ENDS =======-->

\t\t<!--===== CTA AREA STARTS =======-->
\t\t<div class=\"cta1-section-area d-lg-block d-block\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t<div class=\"cta1-main-boxarea\">
\t\t\t\t\t\t\t<div class=\"timer-btn-area\">
\t\t\t\t\t\t\t\t<div class=\"timer\">
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"days1\" class=\"time-value\">119</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"hours1\" class=\"time-value\">22</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"minutes1\" class=\"time-value\">18</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\" style=\"margin: 0 26px 0 0\">
\t\t\t\t\t\t\t\t\t\t<span id=\"seconds1\" class=\"time-value\">44</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\">Buy Ticket</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/calender1.svg\" alt=\"\" />30 January 2025 - 6pm to 11:30pm</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"m-0\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== CTA AREA ENDS =======-->

\t\t<!--===== CTA AREA STARTS =======-->
\t\t<div class=\"cta1-section-area d-lg-none d-block\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-10 m-auto\">
\t\t\t\t\t\t<div class=\"cta1-main-boxarea\">
\t\t\t\t\t\t\t<div class=\"timer-btn-area\">
\t\t\t\t\t\t\t\t<div class=\"timer\">
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"days\" class=\"time-value\">119</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"hours\" class=\"time-value\">22</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\">
\t\t\t\t\t\t\t\t\t\t<span id=\"minutes\" class=\"time-value\">18</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"space14\"></div>
\t\t\t\t\t\t\t\t\t<div class=\"time-box\" style=\"margin: 0 26px 0 0\">
\t\t\t\t\t\t\t\t\t\t<span id=\"seconds\" class=\"time-value\">44</span>
\t\t\t\t\t\t\t\t\t\t<br />
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"btn-area1\">
\t\t\t\t\t\t\t\t\t<a href=\"pricing-plan.html\" class=\"vl-btn1\">Buy Ticket</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/calender1.svg\" alt=\"\" />30 January 2025 - 6pm to 11:30pm</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"m-0\">
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<!--===== CTA AREA ENDS =======-->

\t\t<!--===== FOOTER AREA STARTS =======-->
\t\t<div class=\"footer1-sertion-area\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"footer-logo-area\">
\t\t\t\t\t\t\t<img src=\"assets/img/logo/logo2.png\" alt=\"\" />
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
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-3 col-md-6\">
\t\t\t\t\t\t<div class=\"link-content2\">
\t\t\t\t\t\t\t<h3>Contact Us</h3>
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"tel:+11234567890\"><img src=\"assets/img/icons/phn1.svg\" alt=\"\" />+1 123 456 7890</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"><img src=\"assets/img/icons/location1.svg\" alt=\"\" />Secret Location In The UK</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"mailto:eventifyevent@gmail.com\"><img src=\"assets/img/icons/mail1.svg\" alt=\"\" />eventifyevent@gmail.com</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\"> <img src=\"assets/img/icons/world1.svg\" alt=\"\" />eventifyevent.com</a>
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
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img1.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img2.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img3.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img4.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img5.png\" alt=\"\" />
\t\t\t\t\t\t\t\t\t\t<div class=\"icons\">
\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><i class=\"fa-brands fa-instagram\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 col-md-4 col-4\">
\t\t\t\t\t\t\t\t\t<div class=\"img1\">
\t\t\t\t\t\t\t\t\t\t<img src=\"assets/img/all-images/footer/footer-img6.png\" alt=\"\" />
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
\t\t<script src=\"assets/js/vendor/bootstrap.min.js\"></script>
\t\t<script src=\"assets/js/vendor/fontawesome.js\"></script>
\t\t<script src=\"assets/js/vendor/aos.js\"></script>
\t\t<script src=\"assets/js/vendor/jquery.appear.js\"></script>
\t\t<script src=\"assets/js/vendor/jquery.odometer.min.js\"></script>
\t\t<script src=\"assets/js/vendor/sidebar.js\"></script>
\t\t<script src=\"assets/js/vendor/magnific-popup.js\"></script>
\t\t<script src=\"assets/js/vendor/gsap.min.js\"></script>
\t\t<script src=\"assets/js/vendor/ScrollTrigger.min.js\"></script>
\t\t<script src=\"assets/js/vendor/Splitetext.js\"></script>
\t\t<script src=\"assets/js/vendor/mobilemenu.js\"></script>
\t\t<script src=\"assets/js/vendor/owlcarousel.min.js\"></script>
\t\t<script src=\"assets/js/vendor/nice-select.js\"></script>
\t\t<script src=\"assets/js/vendor/waypoints.js\"></script>
\t\t<script src=\"assets/js/vendor/slick-slider.js\"></script>
\t\t<script src=\"assets/js/vendor/circle-progress.js\"></script>
\t\t<script src=\"assets/js/main.js\"></script>
\t</body>
</html>
", "event-single.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\event-single.html.twig");
    }
}

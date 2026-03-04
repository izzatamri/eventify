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

/* partials/footer_events.html.twig */
class __TwigTemplate_fd5a2bb150b5432979af265b02f64ff7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer_events.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/footer_events.html.twig"));

        // line 1
        yield "\t\t<!--===== EVENTS AREA ENDS =======-->

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
        // line 35
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
\t\t<script src=\"/assets/js/eventify-design.js\"></script>
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
        return "partials/footer_events.html.twig";
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
        return array (  84 => 35,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("\t\t<!--===== EVENTS AREA ENDS =======-->

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
\t\t\t\t\t\t\t\t<li><a href=\"contact.html\">Contact Us</a></li>
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
\t\t<script src=\"/assets/js/eventify-design.js\"></script>
", "partials/footer_events.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\partials\\footer_events.html.twig");
    }
}

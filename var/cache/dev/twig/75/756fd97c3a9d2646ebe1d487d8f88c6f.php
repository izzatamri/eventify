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

/* base.html.twig */
class __TwigTemplate_934d3adf7559bb521f4bd75b4e806ed0 extends Template
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
            'body' => [$this, 'block_body'],
            'page_scripts' => [$this, 'block_page_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
\t\t<link rel=\"shortcut icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo/fav-logo1.png"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/bootstrap.min.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/aos.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/fontawesome.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/magnific-popup.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/mobile.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/owlcarousel.min.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/sidebar.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/slick-slider.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/nice-select.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/vendor/odometer.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/eventify-design.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/header-custom.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/events-custom.css"), "html", null, true);
        yield "\" />
\t\t<link rel=\"stylesheet\" href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/app.css"), "html", null, true);
        yield "\" />
\t\t
\t\t";
        // line 25
        yield from $this->unwrap()->yieldBlock('page_styles', $context, $blocks);
        // line 26
        yield "\t\t<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery-3.7.1.min.js"), "html", null, true);
        yield "\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t";
        // line 29
        yield from $this->load("partials/header_events.html.twig", 29)->unwrap()->yield($context);
        // line 30
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 31
        yield "\t\t";
        yield from $this->load("partials/footer_events.html.twig", 31)->unwrap()->yield($context);
        // line 32
        yield "\t\t<script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
\t\t<script src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/gsap.min.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/waypoints.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/aos.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/owlcarousel.min.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/slick-slider.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/magnific-popup.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/nice-select.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/sidebar.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery.odometer.min.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/jquery.appear.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/circle-progress.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/counter.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/mobilemenu.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/Splitetext.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/ScrollTrigger.min.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/vendor/fontawesome.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("stimulus_bootstrap.js"), "html", null, true);
        yield "\"></script>
\t\t<script src=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("app.js"), "html", null, true);
        yield "\"></script>
\t\t";
        // line 53
        yield from $this->unwrap()->yieldBlock('page_scripts', $context, $blocks);
        // line 54
        yield "\t</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 6
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

        yield "Eventify";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

    // line 30
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 53
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
        return "base.html.twig";
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
        return array (  310 => 53,  288 => 30,  266 => 25,  243 => 6,  230 => 54,  228 => 53,  224 => 52,  220 => 51,  216 => 50,  212 => 49,  208 => 48,  204 => 47,  200 => 46,  196 => 45,  192 => 44,  188 => 43,  184 => 42,  180 => 41,  176 => 40,  172 => 39,  168 => 38,  164 => 37,  160 => 36,  156 => 35,  152 => 34,  146 => 32,  143 => 31,  140 => 30,  138 => 29,  131 => 26,  129 => 25,  124 => 23,  120 => 22,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  96 => 16,  92 => 15,  88 => 14,  84 => 13,  80 => 12,  76 => 11,  72 => 10,  67 => 8,  63 => 7,  59 => 6,  52 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"UTF-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
\t\t<title>{% block title %}Eventify{% endblock %}</title>
\t\t<link rel=\"shortcut icon\" href=\"{{ asset('img/logo/fav-logo1.png') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/bootstrap.min.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet/dist/leaflet.css\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/aos.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/fontawesome.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/magnific-popup.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/mobile.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/owlcarousel.min.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/sidebar.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/slick-slider.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/nice-select.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/vendor/odometer.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/eventify-design.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/header-custom.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('css/events-custom.css') }}\" />
\t\t<link rel=\"stylesheet\" href=\"{{ asset('styles/app.css') }}\" />
\t\t
\t\t{% block page_styles %}{% endblock %}
\t\t<script src=\"{{ asset('js/vendor/jquery-3.7.1.min.js') }}\"></script>
\t</head>
\t<body class=\"homepage1-body\">
\t\t{% include 'partials/header_events.html.twig' %}
\t\t{% block body %}{% endblock %}
\t\t{% include 'partials/footer_events.html.twig' %}
\t\t<script src=\"{{ asset('js/vendor/bootstrap.min.js') }}\"></script>
\t\t<script src=\"https://unpkg.com/leaflet/dist/leaflet.js\"></script>
\t\t<script src=\"{{ asset('js/vendor/gsap.min.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/waypoints.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/aos.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/owlcarousel.min.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/slick-slider.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/magnific-popup.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/nice-select.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/sidebar.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/jquery.odometer.min.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/jquery.appear.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/circle-progress.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/counter.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/mobilemenu.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/Splitetext.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/ScrollTrigger.min.js') }}\"></script>
\t\t<script src=\"{{ asset('js/vendor/fontawesome.js') }}\"></script>
\t\t<script src=\"{{ asset('js/main.js') }}\"></script>
\t\t<script src=\"{{ asset('stimulus_bootstrap.js') }}\"></script>
\t\t<script src=\"{{ asset('app.js') }}\"></script>
\t\t{% block page_scripts %}{% endblock %}
\t</body>
</html>
", "base.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\base.html.twig");
    }
}

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

/* order/ticket_pdf.html.twig */
class __TwigTemplate_08c51a4f8dbed961d7a36e1525cc0592 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ticket_pdf.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "order/ticket_pdf.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Ticket – ";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 5, $this->source); })()), "event", [], "any", false, false, false, 5), "title", [], "any", false, false, false, 5), "html", null, true);
        yield "</title>
\t<style>
\t\tbody { 
\t\t\tfont-family: DejaVu Sans, sans-serif; 
\t\t\tfont-size: 13px; 
\t\t\tcolor: #333; 
\t\t\tpadding: 0; 
\t\t\tmargin: 0;
\t\t\tbackground: #f8f9fa;
\t\t}
\t\t.ticket-container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 30px auto;
\t\t\tbackground: white;
\t\t\tborder-radius: 15px;
\t\t\toverflow: hidden;
\t\t\tbox-shadow: 0 4px 20px rgba(0,0,0,0.1);
\t\t}
\t\t.ticket-header { 
\t\t\tbackground: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
\t\t\tcolor: white;
\t\t\tpadding: 30px;
\t\t\ttext-align: center;
\t\t}
\t\t.ticket-header h1 { 
\t\t\tfont-size: 28px; 
\t\t\tmargin: 0 0 8px 0; 
\t\t\tfont-weight: 700;
\t\t\tcolor: white;
\t\t}
\t\t.ticket-header p {
\t\t\tmargin: 0;
\t\t\tfont-size: 14px;
\t\t\topacity: 0.9;
\t\t}
\t\t.ticket-body {
\t\t\tpadding: 30px;
\t\t}
\t\t.info-section {
\t\t\tbackground: #f8f9fa;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 20px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t\t.info-section h2 {
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 700;
\t\t\tcolor: #0d6efd;
\t\t\tmargin: 0 0 15px 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.5px;
\t\t}
\t\ttable { 
\t\t\twidth: 100%; 
\t\t\tborder-collapse: collapse;
\t\t}
\t\ttr {
\t\t\tborder-bottom: 1px solid #e9ecef;
\t\t}
\t\ttr:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\ttd { 
\t\t\tpadding: 12px 0; 
\t\t\tvertical-align: top;
\t\t}
\t\ttd:first-child { 
\t\t\tfont-weight: 700; 
\t\t\tcolor: #0d6efd; 
\t\t\twidth: 140px;
\t\t\tfont-size: 11px;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.8px;
\t\t\tfont-family: DejaVu Sans, Helvetica, Arial, sans-serif;
\t\t}
\t\ttd:last-child {
\t\t\tcolor: #333;
\t\t\tfont-size: 14px;
\t\t}
\t\t.qr-section { 
\t\t\ttext-align: center; 
\t\t\tbackground: #f8f9fa;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 25px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t\t.qr-section h2 {
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 700;
\t\t\tcolor: #0d6efd;
\t\t\tmargin: 0 0 15px 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.5px;
\t\t}
\t\t.qr-section img { 
\t\t\tmax-width: 220px; 
\t\t\theight: auto;
\t\t\tborder: 3px solid white;
\t\t\tborder-radius: 10px;
\t\t\tbackground: white;
\t\t\tpadding: 15px;
\t\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.1);
\t\t}
\t\t.qr-section p {
\t\t\tmargin: 15px 0 0 0;
\t\t\tcolor: #666;
\t\t\tfont-size: 12px;
\t\t}
\t\t.status-badge {
\t\t\tdisplay: inline-block;
\t\t\tpadding: 6px 14px;
\t\t\tborder-radius: 6px;
\t\t\tfont-weight: 600;
\t\t\tfont-size: 12px;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.3px;
\t\t}
\t\t.status-confirmed {
\t\t\tbackground: #d1f4e0;
\t\t\tcolor: #0f5132;
\t\t}
\t\t.status-cancelled {
\t\t\tbackground: #f8d7da;
\t\t\tcolor: #842029;
\t\t}
\t\t.status-pending {
\t\t\tbackground: #fff3cd;
\t\t\tcolor: #664d03;
\t\t}
\t\t.footer { 
\t\t\tbackground: #f8f9fa;
\t\t\tpadding: 20px 30px;
\t\t\ttext-align: center;
\t\t\tfont-size: 11px; 
\t\t\tcolor: #666;
\t\t\tborder-top: 1px solid #e9ecef;
\t\t}
\t\t.footer strong {
\t\t\tcolor: #0d6efd;
\t\t\tfont-weight: 700;
\t\t}
\t\t.important-note {
\t\t\tbackground: #e7f3ff;
\t\t\tborder-left: 4px solid #0d6efd;
\t\t\tpadding: 15px;
\t\t\tborder-radius: 8px;
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t.important-note p {
\t\t\tmargin: 0;
\t\t\tcolor: #333;
\t\t\tfont-size: 13px;
\t\t\tline-height: 1.6;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"ticket-container\">
\t\t<div class=\"ticket-header\">
\t\t\t<h1>";
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 164, $this->source); })()), "event", [], "any", false, false, false, 164), "title", [], "any", false, false, false, 164), "html", null, true);
        yield "</h1>
\t\t\t<p>Official Event Ticket</p>
\t\t</div>

\t\t<div class=\"ticket-body\">
\t\t\t<div class=\"important-note\">
\t\t\t\t<p><strong>Important:</strong> Present this ticket (PDF or QR code) at the event entrance for entry. Please arrive 15 minutes before the event start time.</p>
\t\t\t</div>

\t\t\t<div class=\"info-section\">
\t\t\t\t<h2>Event Information</h2>
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Event Name</td>
\t\t\t\t\t\t<td><strong>";
        // line 178
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 178, $this->source); })()), "event", [], "any", false, false, false, 178), "title", [], "any", false, false, false, 178), "html", null, true);
        yield "</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Date & Time</td>
\t\t\t\t\t\t<td>";
        // line 182
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 182, $this->source); })()), "event", [], "any", false, false, false, 182), "startDatetime", [], "any", false, false, false, 182)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 182, $this->source); })()), "event", [], "any", false, false, false, 182), "startDatetime", [], "any", false, false, false, 182), "l, F j, Y \\a\\t g:i A"), "html", null, true)) : ("To Be Announced"));
        yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Location</td>
\t\t\t\t\t\t<td>";
        // line 186
        yield (((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "event", [], "any", false, false, false, 186), "venue", [], "any", false, false, false, 186)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "event", [], "any", false, false, false, 186), "venue", [], "any", false, false, false, 186), "name", [], "any", false, false, false, 186), "html", null, true)) : ("Online / TBA"));
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "event", [], "any", false, false, false, 186), "venue", [], "any", false, false, false, 186) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "event", [], "any", false, false, false, 186), "venue", [], "any", false, false, false, 186), "address", [], "any", false, false, false, 186))) {
            yield "<br>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 186, $this->source); })()), "event", [], "any", false, false, false, 186), "venue", [], "any", false, false, false, 186), "address", [], "any", false, false, false, 186), "html", null, true);
        }
        yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div class=\"info-section\">
\t\t\t\t<h2>Ticket Details</h2>
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Ticket Type</td>
\t\t\t\t\t\t<td><strong>";
        // line 196
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 196, $this->source); })()), "ticket", [], "any", false, false, false, 196), "name", [], "any", false, false, false, 196), "html", null, true);
        yield "</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Quantity</td>
\t\t\t\t\t\t<td><strong>";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 200, $this->source); })()), "quantity", [], "any", false, false, false, 200), "html", null, true);
        yield "x</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Order Number</td>
\t\t\t\t\t\t<td>#";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 204, $this->source); })()), "id", [], "any", false, false, false, 204), "html", null, true);
        yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Status</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-";
        // line 209
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 209, $this->source); })()), "status", [], "any", false, false, false, 209), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 209, $this->source); })()), "status", [], "any", false, false, false, 209)), "html", null, true);
        yield "</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Purchase Date</td>
\t\t\t\t\t\t<td>";
        // line 214
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 214, $this->source); })()), "createdAt", [], "any", false, false, false, 214), "F j, Y \\a\\t g:i A"), "html", null, true);
        yield "</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t";
        // line 219
        if ((($tmp = (isset($context["qrCodeDataUri"]) || array_key_exists("qrCodeDataUri", $context) ? $context["qrCodeDataUri"] : (function () { throw new RuntimeError('Variable "qrCodeDataUri" does not exist.', 219, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 220
            yield "\t\t\t<div class=\"qr-section\">
\t\t\t\t<h2>Entry QR Code</h2>
\t\t\t\t<img src=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["qrCodeDataUri"]) || array_key_exists("qrCodeDataUri", $context) ? $context["qrCodeDataUri"] : (function () { throw new RuntimeError('Variable "qrCodeDataUri" does not exist.', 222, $this->source); })()), "html", null, true);
            yield "\" alt=\"Ticket QR code\" />
\t\t\t\t<p>Scan this code at the event entrance for quick check-in</p>
\t\t\t</div>
\t\t\t";
        }
        // line 226
        yield "\t\t</div>

\t\t<div class=\"footer\">
\t\t\t<strong>Eventify</strong> | Order placed on ";
        // line 229
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new RuntimeError('Variable "order" does not exist.', 229, $this->source); })()), "createdAt", [], "any", false, false, false, 229), "F j, Y"), "html", null, true);
        yield "<br>
\t\t\tFor support, please contact support@eventify.com
\t\t</div>
\t</div>
</body>
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
        return "order/ticket_pdf.html.twig";
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
        return array (  322 => 229,  317 => 226,  310 => 222,  306 => 220,  304 => 219,  296 => 214,  286 => 209,  278 => 204,  271 => 200,  264 => 196,  247 => 186,  240 => 182,  233 => 178,  216 => 164,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Ticket – {{ order.event.title }}</title>
\t<style>
\t\tbody { 
\t\t\tfont-family: DejaVu Sans, sans-serif; 
\t\t\tfont-size: 13px; 
\t\t\tcolor: #333; 
\t\t\tpadding: 0; 
\t\t\tmargin: 0;
\t\t\tbackground: #f8f9fa;
\t\t}
\t\t.ticket-container {
\t\t\tmax-width: 800px;
\t\t\tmargin: 30px auto;
\t\t\tbackground: white;
\t\t\tborder-radius: 15px;
\t\t\toverflow: hidden;
\t\t\tbox-shadow: 0 4px 20px rgba(0,0,0,0.1);
\t\t}
\t\t.ticket-header { 
\t\t\tbackground: linear-gradient(135deg, #0d6efd 0%, #0a58ca 100%);
\t\t\tcolor: white;
\t\t\tpadding: 30px;
\t\t\ttext-align: center;
\t\t}
\t\t.ticket-header h1 { 
\t\t\tfont-size: 28px; 
\t\t\tmargin: 0 0 8px 0; 
\t\t\tfont-weight: 700;
\t\t\tcolor: white;
\t\t}
\t\t.ticket-header p {
\t\t\tmargin: 0;
\t\t\tfont-size: 14px;
\t\t\topacity: 0.9;
\t\t}
\t\t.ticket-body {
\t\t\tpadding: 30px;
\t\t}
\t\t.info-section {
\t\t\tbackground: #f8f9fa;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 20px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t\t.info-section h2 {
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 700;
\t\t\tcolor: #0d6efd;
\t\t\tmargin: 0 0 15px 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.5px;
\t\t}
\t\ttable { 
\t\t\twidth: 100%; 
\t\t\tborder-collapse: collapse;
\t\t}
\t\ttr {
\t\t\tborder-bottom: 1px solid #e9ecef;
\t\t}
\t\ttr:last-child {
\t\t\tborder-bottom: none;
\t\t}
\t\ttd { 
\t\t\tpadding: 12px 0; 
\t\t\tvertical-align: top;
\t\t}
\t\ttd:first-child { 
\t\t\tfont-weight: 700; 
\t\t\tcolor: #0d6efd; 
\t\t\twidth: 140px;
\t\t\tfont-size: 11px;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.8px;
\t\t\tfont-family: DejaVu Sans, Helvetica, Arial, sans-serif;
\t\t}
\t\ttd:last-child {
\t\t\tcolor: #333;
\t\t\tfont-size: 14px;
\t\t}
\t\t.qr-section { 
\t\t\ttext-align: center; 
\t\t\tbackground: #f8f9fa;
\t\t\tborder-radius: 10px;
\t\t\tpadding: 25px;
\t\t\tmargin-bottom: 25px;
\t\t}
\t\t.qr-section h2 {
\t\t\tfont-size: 16px;
\t\t\tfont-weight: 700;
\t\t\tcolor: #0d6efd;
\t\t\tmargin: 0 0 15px 0;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.5px;
\t\t}
\t\t.qr-section img { 
\t\t\tmax-width: 220px; 
\t\t\theight: auto;
\t\t\tborder: 3px solid white;
\t\t\tborder-radius: 10px;
\t\t\tbackground: white;
\t\t\tpadding: 15px;
\t\t\tbox-shadow: 0 2px 8px rgba(0,0,0,0.1);
\t\t}
\t\t.qr-section p {
\t\t\tmargin: 15px 0 0 0;
\t\t\tcolor: #666;
\t\t\tfont-size: 12px;
\t\t}
\t\t.status-badge {
\t\t\tdisplay: inline-block;
\t\t\tpadding: 6px 14px;
\t\t\tborder-radius: 6px;
\t\t\tfont-weight: 600;
\t\t\tfont-size: 12px;
\t\t\ttext-transform: uppercase;
\t\t\tletter-spacing: 0.3px;
\t\t}
\t\t.status-confirmed {
\t\t\tbackground: #d1f4e0;
\t\t\tcolor: #0f5132;
\t\t}
\t\t.status-cancelled {
\t\t\tbackground: #f8d7da;
\t\t\tcolor: #842029;
\t\t}
\t\t.status-pending {
\t\t\tbackground: #fff3cd;
\t\t\tcolor: #664d03;
\t\t}
\t\t.footer { 
\t\t\tbackground: #f8f9fa;
\t\t\tpadding: 20px 30px;
\t\t\ttext-align: center;
\t\t\tfont-size: 11px; 
\t\t\tcolor: #666;
\t\t\tborder-top: 1px solid #e9ecef;
\t\t}
\t\t.footer strong {
\t\t\tcolor: #0d6efd;
\t\t\tfont-weight: 700;
\t\t}
\t\t.important-note {
\t\t\tbackground: #e7f3ff;
\t\t\tborder-left: 4px solid #0d6efd;
\t\t\tpadding: 15px;
\t\t\tborder-radius: 8px;
\t\t\tmargin-bottom: 20px;
\t\t}
\t\t.important-note p {
\t\t\tmargin: 0;
\t\t\tcolor: #333;
\t\t\tfont-size: 13px;
\t\t\tline-height: 1.6;
\t\t}
\t</style>
</head>
<body>
\t<div class=\"ticket-container\">
\t\t<div class=\"ticket-header\">
\t\t\t<h1>{{ order.event.title }}</h1>
\t\t\t<p>Official Event Ticket</p>
\t\t</div>

\t\t<div class=\"ticket-body\">
\t\t\t<div class=\"important-note\">
\t\t\t\t<p><strong>Important:</strong> Present this ticket (PDF or QR code) at the event entrance for entry. Please arrive 15 minutes before the event start time.</p>
\t\t\t</div>

\t\t\t<div class=\"info-section\">
\t\t\t\t<h2>Event Information</h2>
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Event Name</td>
\t\t\t\t\t\t<td><strong>{{ order.event.title }}</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Date & Time</td>
\t\t\t\t\t\t<td>{{ order.event.startDatetime ? order.event.startDatetime|date('l, F j, Y \\\\a\\\\t g:i A') : 'To Be Announced' }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Location</td>
\t\t\t\t\t\t<td>{{ order.event.venue ? order.event.venue.name : 'Online / TBA' }}{% if order.event.venue and order.event.venue.address %}<br>{{ order.event.venue.address }}{% endif %}</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t<div class=\"info-section\">
\t\t\t\t<h2>Ticket Details</h2>
\t\t\t\t<table>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Ticket Type</td>
\t\t\t\t\t\t<td><strong>{{ order.ticket.name }}</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Quantity</td>
\t\t\t\t\t\t<td><strong>{{ order.quantity }}x</strong></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Order Number</td>
\t\t\t\t\t\t<td>#{{ order.id }}</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Status</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<span class=\"status-badge status-{{ order.status }}\">{{ order.status|capitalize }}</span>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>Purchase Date</td>
\t\t\t\t\t\t<td>{{ order.createdAt|date('F j, Y \\\\a\\\\t g:i A') }}</td>
\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>

\t\t\t{% if qrCodeDataUri %}
\t\t\t<div class=\"qr-section\">
\t\t\t\t<h2>Entry QR Code</h2>
\t\t\t\t<img src=\"{{ qrCodeDataUri }}\" alt=\"Ticket QR code\" />
\t\t\t\t<p>Scan this code at the event entrance for quick check-in</p>
\t\t\t</div>
\t\t\t{% endif %}
\t\t</div>

\t\t<div class=\"footer\">
\t\t\t<strong>Eventify</strong> | Order placed on {{ order.createdAt|date('F j, Y') }}<br>
\t\t\tFor support, please contact support@eventify.com
\t\t</div>
\t</div>
</body>
</html>
", "order/ticket_pdf.html.twig", "C:\\Users\\MSI\\Desktop\\integration-java-web\\templates\\order\\ticket_pdf.html.twig");
    }
}

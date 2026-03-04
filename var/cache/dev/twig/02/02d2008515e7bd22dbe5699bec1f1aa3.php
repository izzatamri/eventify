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

/* pdf/sponsorship_agreement.html.twig */
class __TwigTemplate_50494256ce712870cb65caf595a3d127 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/sponsorship_agreement.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "pdf/sponsorship_agreement.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<style>
\tbody {
\t\tfont-family: Helvetica, Arial, sans-serif;
\t\tfont-size: 12px;
\t\tcolor: #333;
\t\tline-height: 1.6;
\t\tmargin: 40px;
\t}
\t.header {
\t\ttext-align: center;
\t\tmargin-bottom: 30px;
\t\tborder-bottom: 3px solid #6c63ff;
\t\tpadding-bottom: 20px;
\t}
\t.header h1 {
\t\tfont-size: 22px;
\t\tcolor: #6c63ff;
\t\tmargin: 0 0 5px;
\t}
\t.header p {
\t\tcolor: #666;
\t\tmargin: 0;
\t\tfont-size: 11px;
\t}
\th2 {
\t\tfont-size: 14px;
\t\tcolor: #6c63ff;
\t\tborder-bottom: 1px solid #ddd;
\t\tpadding-bottom: 5px;
\t\tmargin-top: 25px;
\t}
\ttable {
\t\twidth: 100%;
\t\tborder-collapse: collapse;
\t\tmargin: 10px 0;
\t}
\ttable td {
\t\tpadding: 6px 10px;
\t\tvertical-align: top;
\t}
\ttable td:first-child {
\t\tfont-weight: bold;
\t\twidth: 35%;
\t\tcolor: #555;
\t}
\t.terms {
\t\tfont-size: 11px;
\t\tcolor: #555;
\t\tmargin-top: 20px;
\t}
\t.terms ol {
\t\tpadding-left: 20px;
\t}
\t.terms li {
\t\tmargin-bottom: 6px;
\t}
\t.signature-section {
\t\tmargin-top: 40px;
\t\tpage-break-inside: avoid;
\t}
\t.signature-block {
\t\tdisplay: inline-block;
\t\twidth: 45%;
\t\tvertical-align: top;
\t}
\t.signature-line {
\t\tborder-bottom: 1px solid #333;
\t\theight: 50px;
\t\tmargin-top: 30px;
\t\tmargin-bottom: 5px;
\t}
\t.footer {
\t\ttext-align: center;
\t\tmargin-top: 40px;
\t\tfont-size: 10px;
\t\tcolor: #999;
\t\tborder-top: 1px solid #ddd;
\t\tpadding-top: 10px;
\t}
</style>
</head>
<body>

<div class=\"header\">
\t<h1>Sponsorship Agreement</h1>
\t<p>Eventify &mdash; Event Sponsorship Platform</p>
</div>

<p>This Sponsorship Agreement (\"Agreement\") is entered into on <strong>";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 93, $this->source); })()), "F j, Y"), "html", null, true);
        yield "</strong> between the event organizer and the sponsor identified below.</p>

<h2>Event Details</h2>
<table>
\t<tr>
\t\t<td>Event Name</td>
\t\t<td>";
        // line 99
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 99, $this->source); })()), "title", [], "any", false, false, false, 99), "html", null, true);
        yield "</td>
\t</tr>
\t<tr>
\t\t<td>Event Date</td>
\t\t<td>";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 103, $this->source); })()), "startDatetime", [], "any", false, false, false, 103), "F j, Y H:i"), "html", null, true);
        yield " &mdash; ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 103, $this->source); })()), "endDatetime", [], "any", false, false, false, 103), "F j, Y H:i"), "html", null, true);
        yield "</td>
\t</tr>
\t";
        // line 105
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 105, $this->source); })()), "venue", [], "any", false, false, false, 105)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 106
            yield "\t<tr>
\t\t<td>Venue</td>
\t\t<td>";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "venue", [], "any", false, false, false, 108), "name", [], "any", false, false, false, 108), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "venue", [], "any", false, false, false, 108), "city", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "venue", [], "any", false, false, false, 108), "city", [], "any", false, false, false, 108), "html", null, true);
            }
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "venue", [], "any", false, false, false, 108), "country", [], "any", false, false, false, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield ", ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 108, $this->source); })()), "venue", [], "any", false, false, false, 108), "country", [], "any", false, false, false, 108), "html", null, true);
            }
            yield "</td>
\t</tr>
\t";
        }
        // line 111
        yield "</table>

<h2>Sponsor Details</h2>
<table>
\t<tr>
\t\t<td>Company Name</td>
\t\t<td>";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 117, $this->source); })()), "name", [], "any", false, false, false, 117), "html", null, true);
        yield "</td>
\t</tr>
\t<tr>
\t\t<td>Email</td>
\t\t<td>";
        // line 121
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 121, $this->source); })()), "email", [], "any", false, false, false, 121), "html", null, true);
        yield "</td>
\t</tr>
\t";
        // line 123
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 123, $this->source); })()), "contactPersonName", [], "any", false, false, false, 123)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 124
            yield "\t<tr>
\t\t<td>Contact Person</td>
\t\t<td>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 126, $this->source); })()), "contactPersonName", [], "any", false, false, false, 126), "html", null, true);
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 126, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 126)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                yield " (";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 126, $this->source); })()), "contactPersonEmail", [], "any", false, false, false, 126), "html", null, true);
                yield ")";
            }
            yield "</td>
\t</tr>
\t";
        }
        // line 129
        yield "\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 129, $this->source); })()), "phone", [], "any", false, false, false, 129)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 130
            yield "\t<tr>
\t\t<td>Phone</td>
\t\t<td>";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 132, $this->source); })()), "phone", [], "any", false, false, false, 132), "html", null, true);
            yield "</td>
\t</tr>
\t";
        }
        // line 135
        yield "\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 135, $this->source); })()), "website", [], "any", false, false, false, 135)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 136
            yield "\t<tr>
\t\t<td>Website</td>
\t\t<td>";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 138, $this->source); })()), "website", [], "any", false, false, false, 138), "html", null, true);
            yield "</td>
\t</tr>
\t";
        }
        // line 141
        yield "</table>

<h2>Sponsorship Package</h2>
<table>
\t<tr>
\t\t<td>Package Tier</td>
\t\t<td>";
        // line 147
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 147, $this->source); })()), "name", [], "any", false, false, false, 147), "html", null, true);
        yield "</td>
\t</tr>
\t<tr>
\t\t<td>Price</td>
\t\t<td>\$";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 151, $this->source); })()), "price", [], "any", false, false, false, 151), 2), "html", null, true);
        yield "</td>
\t</tr>
\t<tr>
\t\t<td>Tables</td>
\t\t<td>";
        // line 155
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 155, $this->source); })()), "numberOfTables", [], "any", false, false, false, 155), "html", null, true);
        yield " table(s), ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 155, $this->source); })()), "seatsPerTable", [], "any", false, false, false, 155), "html", null, true);
        yield " seats each</td>
\t</tr>
\t";
        // line 157
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 157, $this->source); })()), "benefits", [], "any", false, false, false, 157)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 158
            yield "\t<tr>
\t\t<td>Benefits</td>
\t\t<td>";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 160, $this->source); })()), "benefits", [], "any", false, false, false, 160), "html", null, true);
            yield "</td>
\t</tr>
\t";
        }
        // line 163
        yield "\t";
        if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 163, $this->source); })()), "description", [], "any", false, false, false, 163)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 164
            yield "\t<tr>
\t\t<td>Description</td>
\t\t<td>";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 166, $this->source); })()), "description", [], "any", false, false, false, 166), "html", null, true);
            yield "</td>
\t</tr>
\t";
        }
        // line 169
        yield "</table>

<h2>Terms and Conditions</h2>
<div class=\"terms\">
\t<ol>
\t\t<li>The Sponsor agrees to pay the sponsorship fee as outlined in the selected package within 30 days of signing this agreement.</li>
\t\t<li>The event organizer will provide all benefits listed in the sponsorship package, including but not limited to branding, table allocation, and promotional materials placement.</li>
\t\t<li>In the event of cancellation by the Sponsor, a written notice must be provided at least 14 days prior to the event date. A cancellation fee of 50% of the package price may apply.</li>
\t\t<li>The event organizer reserves the right to modify event logistics while ensuring that sponsorship benefits are honored in substance.</li>
\t\t<li>Both parties agree to act in good faith and maintain professional standards throughout the duration of this agreement.</li>
\t\t<li>This agreement shall be governed by applicable local laws.</li>
\t</ol>
</div>

<div class=\"signature-section\">
\t<h2>Signatures</h2>
\t<table>
\t\t<tr>
\t\t\t<td style=\"width: 50%; font-weight: normal;\">
\t\t\t\t<strong>Event Organizer</strong>
\t\t\t\t<div class=\"signature-line\"></div>
\t\t\t\t<p>Name: _________________________<br />Date: ";
        // line 190
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 190, $this->source); })()), "F j, Y"), "html", null, true);
        yield "</p>
\t\t\t</td>
\t\t\t<td style=\"width: 50%; font-weight: normal;\">
\t\t\t\t<strong>Sponsor Representative</strong>
\t\t\t\t<div class=\"signature-line\"></div>
\t\t\t\t<p>Name: ";
        // line 195
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sponsor"] ?? null), "contactPersonName", [], "any", true, true, false, 195) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 195, $this->source); })()), "contactPersonName", [], "any", false, false, false, 195)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 195, $this->source); })()), "contactPersonName", [], "any", false, false, false, 195), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 195, $this->source); })()), "name", [], "any", false, false, false, 195), "html", null, true)));
        yield "<br />Date: _________________________</p>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>

<div class=\"footer\">
\tGenerated by Eventify on ";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate((isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 202, $this->source); })()), "F j, Y \\a\\t H:i"), "html", null, true);
        yield " &mdash; This document requires electronic signature to be legally binding.
</div>

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
        return "pdf/sponsorship_agreement.html.twig";
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
        return array (  343 => 202,  333 => 195,  325 => 190,  302 => 169,  296 => 166,  292 => 164,  289 => 163,  283 => 160,  279 => 158,  277 => 157,  270 => 155,  263 => 151,  256 => 147,  248 => 141,  242 => 138,  238 => 136,  235 => 135,  229 => 132,  225 => 130,  222 => 129,  211 => 126,  207 => 124,  205 => 123,  200 => 121,  193 => 117,  185 => 111,  171 => 108,  167 => 106,  165 => 105,  158 => 103,  151 => 99,  142 => 93,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<style>
\tbody {
\t\tfont-family: Helvetica, Arial, sans-serif;
\t\tfont-size: 12px;
\t\tcolor: #333;
\t\tline-height: 1.6;
\t\tmargin: 40px;
\t}
\t.header {
\t\ttext-align: center;
\t\tmargin-bottom: 30px;
\t\tborder-bottom: 3px solid #6c63ff;
\t\tpadding-bottom: 20px;
\t}
\t.header h1 {
\t\tfont-size: 22px;
\t\tcolor: #6c63ff;
\t\tmargin: 0 0 5px;
\t}
\t.header p {
\t\tcolor: #666;
\t\tmargin: 0;
\t\tfont-size: 11px;
\t}
\th2 {
\t\tfont-size: 14px;
\t\tcolor: #6c63ff;
\t\tborder-bottom: 1px solid #ddd;
\t\tpadding-bottom: 5px;
\t\tmargin-top: 25px;
\t}
\ttable {
\t\twidth: 100%;
\t\tborder-collapse: collapse;
\t\tmargin: 10px 0;
\t}
\ttable td {
\t\tpadding: 6px 10px;
\t\tvertical-align: top;
\t}
\ttable td:first-child {
\t\tfont-weight: bold;
\t\twidth: 35%;
\t\tcolor: #555;
\t}
\t.terms {
\t\tfont-size: 11px;
\t\tcolor: #555;
\t\tmargin-top: 20px;
\t}
\t.terms ol {
\t\tpadding-left: 20px;
\t}
\t.terms li {
\t\tmargin-bottom: 6px;
\t}
\t.signature-section {
\t\tmargin-top: 40px;
\t\tpage-break-inside: avoid;
\t}
\t.signature-block {
\t\tdisplay: inline-block;
\t\twidth: 45%;
\t\tvertical-align: top;
\t}
\t.signature-line {
\t\tborder-bottom: 1px solid #333;
\t\theight: 50px;
\t\tmargin-top: 30px;
\t\tmargin-bottom: 5px;
\t}
\t.footer {
\t\ttext-align: center;
\t\tmargin-top: 40px;
\t\tfont-size: 10px;
\t\tcolor: #999;
\t\tborder-top: 1px solid #ddd;
\t\tpadding-top: 10px;
\t}
</style>
</head>
<body>

<div class=\"header\">
\t<h1>Sponsorship Agreement</h1>
\t<p>Eventify &mdash; Event Sponsorship Platform</p>
</div>

<p>This Sponsorship Agreement (\"Agreement\") is entered into on <strong>{{ date|date('F j, Y') }}</strong> between the event organizer and the sponsor identified below.</p>

<h2>Event Details</h2>
<table>
\t<tr>
\t\t<td>Event Name</td>
\t\t<td>{{ event.title }}</td>
\t</tr>
\t<tr>
\t\t<td>Event Date</td>
\t\t<td>{{ event.startDatetime|date('F j, Y H:i') }} &mdash; {{ event.endDatetime|date('F j, Y H:i') }}</td>
\t</tr>
\t{% if event.venue %}
\t<tr>
\t\t<td>Venue</td>
\t\t<td>{{ event.venue.name }}{% if event.venue.city %}, {{ event.venue.city }}{% endif %}{% if event.venue.country %}, {{ event.venue.country }}{% endif %}</td>
\t</tr>
\t{% endif %}
</table>

<h2>Sponsor Details</h2>
<table>
\t<tr>
\t\t<td>Company Name</td>
\t\t<td>{{ sponsor.name }}</td>
\t</tr>
\t<tr>
\t\t<td>Email</td>
\t\t<td>{{ sponsor.email }}</td>
\t</tr>
\t{% if sponsor.contactPersonName %}
\t<tr>
\t\t<td>Contact Person</td>
\t\t<td>{{ sponsor.contactPersonName }}{% if sponsor.contactPersonEmail %} ({{ sponsor.contactPersonEmail }}){% endif %}</td>
\t</tr>
\t{% endif %}
\t{% if sponsor.phone %}
\t<tr>
\t\t<td>Phone</td>
\t\t<td>{{ sponsor.phone }}</td>
\t</tr>
\t{% endif %}
\t{% if sponsor.website %}
\t<tr>
\t\t<td>Website</td>
\t\t<td>{{ sponsor.website }}</td>
\t</tr>
\t{% endif %}
</table>

<h2>Sponsorship Package</h2>
<table>
\t<tr>
\t\t<td>Package Tier</td>
\t\t<td>{{ package.name }}</td>
\t</tr>
\t<tr>
\t\t<td>Price</td>
\t\t<td>\${{ package.price|number_format(2) }}</td>
\t</tr>
\t<tr>
\t\t<td>Tables</td>
\t\t<td>{{ package.numberOfTables }} table(s), {{ package.seatsPerTable }} seats each</td>
\t</tr>
\t{% if package.benefits %}
\t<tr>
\t\t<td>Benefits</td>
\t\t<td>{{ package.benefits }}</td>
\t</tr>
\t{% endif %}
\t{% if package.description %}
\t<tr>
\t\t<td>Description</td>
\t\t<td>{{ package.description }}</td>
\t</tr>
\t{% endif %}
</table>

<h2>Terms and Conditions</h2>
<div class=\"terms\">
\t<ol>
\t\t<li>The Sponsor agrees to pay the sponsorship fee as outlined in the selected package within 30 days of signing this agreement.</li>
\t\t<li>The event organizer will provide all benefits listed in the sponsorship package, including but not limited to branding, table allocation, and promotional materials placement.</li>
\t\t<li>In the event of cancellation by the Sponsor, a written notice must be provided at least 14 days prior to the event date. A cancellation fee of 50% of the package price may apply.</li>
\t\t<li>The event organizer reserves the right to modify event logistics while ensuring that sponsorship benefits are honored in substance.</li>
\t\t<li>Both parties agree to act in good faith and maintain professional standards throughout the duration of this agreement.</li>
\t\t<li>This agreement shall be governed by applicable local laws.</li>
\t</ol>
</div>

<div class=\"signature-section\">
\t<h2>Signatures</h2>
\t<table>
\t\t<tr>
\t\t\t<td style=\"width: 50%; font-weight: normal;\">
\t\t\t\t<strong>Event Organizer</strong>
\t\t\t\t<div class=\"signature-line\"></div>
\t\t\t\t<p>Name: _________________________<br />Date: {{ date|date('F j, Y') }}</p>
\t\t\t</td>
\t\t\t<td style=\"width: 50%; font-weight: normal;\">
\t\t\t\t<strong>Sponsor Representative</strong>
\t\t\t\t<div class=\"signature-line\"></div>
\t\t\t\t<p>Name: {{ sponsor.contactPersonName ?? sponsor.name }}<br />Date: _________________________</p>
\t\t\t</td>
\t\t</tr>
\t</table>
</div>

<div class=\"footer\">
\tGenerated by Eventify on {{ date|date('F j, Y \\\\a\\\\t H:i') }} &mdash; This document requires electronic signature to be legally binding.
</div>

</body>
</html>
", "pdf/sponsorship_agreement.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\pdf\\sponsorship_agreement.html.twig");
    }
}

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

/* emails/sponsor_accepted.html.twig */
class __TwigTemplate_c070f3dca65f17af5c97abcff9b981a0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/sponsor_accepted.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/sponsor_accepted.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<style>
\tbody { font-family: Helvetica, Arial, sans-serif; color: #333; line-height: 1.6; margin: 0; padding: 0; background: #f4f4f7; }
\t.wrapper { max-width: 600px; margin: 0 auto; background: #fff; }
\t.header { background: #6c63ff; padding: 30px 40px; text-align: center; }
\t.header h1 { color: #fff; font-size: 22px; margin: 0; }
\t.content { padding: 30px 40px; }
\t.content h2 { font-size: 18px; color: #333; margin-top: 0; }
\t.detail-table { width: 100%; border-collapse: collapse; margin: 15px 0; }
\t.detail-table td { padding: 8px 12px; border-bottom: 1px solid #eee; font-size: 14px; }
\t.detail-table td:first-child { font-weight: bold; color: #555; width: 40%; }
\t.btn { display: inline-block; background: #6c63ff; color: #fff; text-decoration: none; padding: 12px 28px; border-radius: 6px; font-weight: bold; font-size: 14px; margin-top: 15px; }
\t.footer { padding: 20px 40px; text-align: center; font-size: 12px; color: #999; border-top: 1px solid #eee; }
</style>
</head>
<body>

<div class=\"wrapper\">
\t<div class=\"header\">
\t\t<h1>Sponsorship Approved</h1>
\t</div>

\t<div class=\"content\">
\t\t<h2>Hello ";
        // line 27
        yield (((CoreExtension::getAttribute($this->env, $this->source, ($context["sponsor"] ?? null), "contactPersonName", [], "any", true, true, false, 27) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 27, $this->source); })()), "contactPersonName", [], "any", false, false, false, 27)))) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 27, $this->source); })()), "contactPersonName", [], "any", false, false, false, 27), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["sponsor"]) || array_key_exists("sponsor", $context) ? $context["sponsor"] : (function () { throw new RuntimeError('Variable "sponsor" does not exist.', 27, $this->source); })()), "name", [], "any", false, false, false, 27), "html", null, true)));
        yield ",</h2>

\t\t<p>We are pleased to inform you that your sponsorship request for <strong>";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 29, $this->source); })()), "title", [], "any", false, false, false, 29), "html", null, true);
        yield "</strong> has been approved.</p>

\t\t<table class=\"detail-table\">
\t\t\t<tr>
\t\t\t\t<td>Event</td>
\t\t\t\t<td>";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 34, $this->source); })()), "title", [], "any", false, false, false, 34), "html", null, true);
        yield "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Event Date</td>
\t\t\t\t<td>";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["event"]) || array_key_exists("event", $context) ? $context["event"] : (function () { throw new RuntimeError('Variable "event" does not exist.', 38, $this->source); })()), "startDatetime", [], "any", false, false, false, 38), "F j, Y"), "html", null, true);
        yield "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Package</td>
\t\t\t\t<td>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 42, $this->source); })()), "name", [], "any", false, false, false, 42), "html", null, true);
        yield " &mdash; \$";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 42, $this->source); })()), "price", [], "any", false, false, false, 42), 2), "html", null, true);
        yield "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Tables</td>
\t\t\t\t<td>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 46, $this->source); })()), "numberOfTables", [], "any", false, false, false, 46), "html", null, true);
        yield " table(s), ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["package"]) || array_key_exists("package", $context) ? $context["package"] : (function () { throw new RuntimeError('Variable "package" does not exist.', 46, $this->source); })()), "seatsPerTable", [], "any", false, false, false, 46), "html", null, true);
        yield " seats each</td>
\t\t\t</tr>
\t\t</table>

\t\t<p>Attached to this email you will find the <strong>Sponsorship Agreement</strong> (PDF). An electronic signature request has been sent to you via Yousign. Please check your inbox for the signing link.</p>

\t\t<p>Once you have signed the agreement, your sponsorship will be fully confirmed.</p>

\t\t<p>If you have any questions, please don't hesitate to reach out to the event organizer.</p>

\t\t<p>Thank you for your support!<br /><strong>The Eventify Team</strong></p>
\t</div>

\t<div class=\"footer\">
\t\t<p>&copy; ";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Eventify. All rights reserved.</p>
\t</div>
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
        return "emails/sponsor_accepted.html.twig";
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
        return array (  131 => 60,  112 => 46,  103 => 42,  96 => 38,  89 => 34,  81 => 29,  76 => 27,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
<meta charset=\"UTF-8\" />
<style>
\tbody { font-family: Helvetica, Arial, sans-serif; color: #333; line-height: 1.6; margin: 0; padding: 0; background: #f4f4f7; }
\t.wrapper { max-width: 600px; margin: 0 auto; background: #fff; }
\t.header { background: #6c63ff; padding: 30px 40px; text-align: center; }
\t.header h1 { color: #fff; font-size: 22px; margin: 0; }
\t.content { padding: 30px 40px; }
\t.content h2 { font-size: 18px; color: #333; margin-top: 0; }
\t.detail-table { width: 100%; border-collapse: collapse; margin: 15px 0; }
\t.detail-table td { padding: 8px 12px; border-bottom: 1px solid #eee; font-size: 14px; }
\t.detail-table td:first-child { font-weight: bold; color: #555; width: 40%; }
\t.btn { display: inline-block; background: #6c63ff; color: #fff; text-decoration: none; padding: 12px 28px; border-radius: 6px; font-weight: bold; font-size: 14px; margin-top: 15px; }
\t.footer { padding: 20px 40px; text-align: center; font-size: 12px; color: #999; border-top: 1px solid #eee; }
</style>
</head>
<body>

<div class=\"wrapper\">
\t<div class=\"header\">
\t\t<h1>Sponsorship Approved</h1>
\t</div>

\t<div class=\"content\">
\t\t<h2>Hello {{ sponsor.contactPersonName ?? sponsor.name }},</h2>

\t\t<p>We are pleased to inform you that your sponsorship request for <strong>{{ event.title }}</strong> has been approved.</p>

\t\t<table class=\"detail-table\">
\t\t\t<tr>
\t\t\t\t<td>Event</td>
\t\t\t\t<td>{{ event.title }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Event Date</td>
\t\t\t\t<td>{{ event.startDatetime|date('F j, Y') }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Package</td>
\t\t\t\t<td>{{ package.name }} &mdash; \${{ package.price|number_format(2) }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<td>Tables</td>
\t\t\t\t<td>{{ package.numberOfTables }} table(s), {{ package.seatsPerTable }} seats each</td>
\t\t\t</tr>
\t\t</table>

\t\t<p>Attached to this email you will find the <strong>Sponsorship Agreement</strong> (PDF). An electronic signature request has been sent to you via Yousign. Please check your inbox for the signing link.</p>

\t\t<p>Once you have signed the agreement, your sponsorship will be fully confirmed.</p>

\t\t<p>If you have any questions, please don't hesitate to reach out to the event organizer.</p>

\t\t<p>Thank you for your support!<br /><strong>The Eventify Team</strong></p>
\t</div>

\t<div class=\"footer\">
\t\t<p>&copy; {{ \"now\"|date('Y') }} Eventify. All rights reserved.</p>
\t</div>
</div>

</body>
</html>
", "emails/sponsor_accepted.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\emails\\sponsor_accepted.html.twig");
    }
}

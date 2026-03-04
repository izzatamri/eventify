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

/* emails/rfq_closed.html.twig */
class __TwigTemplate_f15f0b7c348706952fad30ee30b921c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/rfq_closed.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/rfq_closed.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head><meta charset=\"UTF-8\" /><style>body{font-family:Helvetica,Arial,sans-serif;color:#333;line-height:1.6;margin:0;padding:0;background:#f4f4f7}.wrapper{max-width:600px;margin:0 auto;background:#fff}.header{background:#6c757d;padding:30px 40px;text-align:center}.header h1{color:#fff;font-size:20px;margin:0}.content{padding:30px 40px}.footer{padding:20px 40px;text-align:center;font-size:12px;color:#999;border-top:1px solid #eee}</style></head>
<body>
<div class=\"wrapper\">
\t<div class=\"header\"><h1>Appel d'offres clôturé</h1></div>
\t<div class=\"content\">
\t\t<p>Bonjour ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        yield ",</p>
\t\t<p>L'appel d'offres <strong>";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 9, $this->source); })()), "title", [], "any", false, false, false, 9), "html", null, true);
        yield "</strong> a été attribué à un autre prestataire.</p>
\t\t<p>Nous vous remercions pour votre proposition et vous encourageons à continuer à répondre aux futurs appels d'offres sur Eventify.</p>
\t\t<p>L'équipe Eventify</p>
\t</div>
\t<div class=\"footer\">&copy; ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield " Eventify</div>
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
        return "emails/rfq_closed.html.twig";
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
        return array (  68 => 13,  61 => 9,  57 => 8,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head><meta charset=\"UTF-8\" /><style>body{font-family:Helvetica,Arial,sans-serif;color:#333;line-height:1.6;margin:0;padding:0;background:#f4f4f7}.wrapper{max-width:600px;margin:0 auto;background:#fff}.header{background:#6c757d;padding:30px 40px;text-align:center}.header h1{color:#fff;font-size:20px;margin:0}.content{padding:30px 40px}.footer{padding:20px 40px;text-align:center;font-size:12px;color:#999;border-top:1px solid #eee}</style></head>
<body>
<div class=\"wrapper\">
\t<div class=\"header\"><h1>Appel d'offres clôturé</h1></div>
\t<div class=\"content\">
\t\t<p>Bonjour {{ provider.name }},</p>
\t\t<p>L'appel d'offres <strong>{{ request.title }}</strong> a été attribué à un autre prestataire.</p>
\t\t<p>Nous vous remercions pour votre proposition et vous encourageons à continuer à répondre aux futurs appels d'offres sur Eventify.</p>
\t\t<p>L'équipe Eventify</p>
\t</div>
\t<div class=\"footer\">&copy; {{ \"now\"|date('Y') }} Eventify</div>
</div>
</body>
</html>
", "emails/rfq_closed.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/emails/rfq_closed.html.twig");
    }
}

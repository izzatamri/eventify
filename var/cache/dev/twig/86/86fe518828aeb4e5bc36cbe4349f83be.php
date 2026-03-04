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

/* emails/reponse_reclamation.html.twig */
class __TwigTemplate_73a339b4d0edee1f856bed8fe0700f7a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reponse_reclamation.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "emails/reponse_reclamation.html.twig"));

        // line 2
        yield "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Réponse à votre réclamation</title>
</head>
<body>
    <h2>Bonjour ";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["nom"]) || array_key_exists("nom", $context) ? $context["nom"] : (function () { throw new RuntimeError('Variable "nom" does not exist.', 9, $this->source); })()), "html", null, true);
        yield ",</h2>
    
    <p>Votre réclamation #";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 11, $this->source); })()), "html", null, true);
        yield " a reçu une réponse.</p>
    
    <h3>Sujet: ";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sujet"]) || array_key_exists("sujet", $context) ? $context["sujet"] : (function () { throw new RuntimeError('Variable "sujet" does not exist.', 13, $this->source); })()), "html", null, true);
        yield "</h3>
    <p><strong>Votre message:</strong> ";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["description"]) || array_key_exists("description", $context) ? $context["description"] : (function () { throw new RuntimeError('Variable "description" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "</p>
    
    <h3>Notre réponse:</h3>
    <p>";
        // line 17
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reponse"]) || array_key_exists("reponse", $context) ? $context["reponse"] : (function () { throw new RuntimeError('Variable "reponse" does not exist.', 17, $this->source); })()), "html", null, true));
        yield "</p>
    
    <p>Cordialement,<br>L'équipe support</p>
</body>
</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "emails/reponse_reclamation.html.twig";
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
        return array (  77 => 17,  71 => 14,  67 => 13,  62 => 11,  57 => 9,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/emails/reponse_reclamation.html.twig #}
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>Réponse à votre réclamation</title>
</head>
<body>
    <h2>Bonjour {{ nom }},</h2>
    
    <p>Votre réclamation #{{ id }} a reçu une réponse.</p>
    
    <h3>Sujet: {{ sujet }}</h3>
    <p><strong>Votre message:</strong> {{ description }}</p>
    
    <h3>Notre réponse:</h3>
    <p>{{ reponse|nl2br }}</p>
    
    <p>Cordialement,<br>L'équipe support</p>
</body>
</html>", "emails/reponse_reclamation.html.twig", "C:\\Users\\HP\\Downloads\\ismail_integ\\ismail_integ\\eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation\\templates\\emails\\reponse_reclamation.html.twig");
    }
}

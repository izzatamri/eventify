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

/* reclamation/_form.html.twig */
class __TwigTemplate_b4658428cf2ac8fa78bef2ae7a9d23a4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/_form.html.twig"));

        // line 2
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 2, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

<div class=\"contact-inner-section sp1\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- FORM SECTION -->
            <div class=\"col-lg-6\" data-aos=\"zoom-in\" data-aos-duration=\"1000\">
                <div class=\"contact4-boxarea\">
                    <h3 class=\"text-anime-style-3\">Get In Touch Now</h3>
                    <div class=\"space8\"></div>
                    <div class=\"row\">

                        <!-- NAME -->
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"input-area\">
                                ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "nomrec", [], "any", false, false, false, 18), 'label', ["label" => "Name"]);
        yield "
                                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "nomrec", [], "any", false, false, false, 19), 'widget', ["attr" => ["placeholder" => "Name"]]);
        yield "
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "nomrec", [], "any", false, false, false, 20), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"input-area\">
                                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "adressmail", [], "any", false, false, false, 27), 'label', ["label" => "Email"]);
        yield "
                                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "adressmail", [], "any", false, false, false, 28), 'widget', ["attr" => ["placeholder" => "Email"]]);
        yield "
                                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "adressmail", [], "any", false, false, false, 29), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- SUBJECT -->
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"input-area\">
                                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "sujetrec", [], "any", false, false, false, 36), 'label', ["label" => "Subject"]);
        yield "
                                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "sujetrec", [], "any", false, false, false, 37), 'widget', ["attr" => ["placeholder" => "Subject"]]);
        yield "
                                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "sujetrec", [], "any", false, false, false, 38), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- MESSAGE / DESCRIPTION -->
                        <div class=\"col-lg-12\">
                            <div class=\"input-area\">
                                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "descriptionrec", [], "any", false, false, false, 45), 'label', ["label" => "Message"]);
        yield "
                                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "descriptionrec", [], "any", false, false, false, 46), 'widget', ["attr" => ["placeholder" => "Message"]]);
        yield "
                                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "descriptionrec", [], "any", false, false, false, 47), 'errors');
        yield "
                            </div>
                        </div>

                        <!-- SUBMIT BUTTON -->
                        <div class=\"col-lg-12\">
                            <div class=\"space24\"></div>
                            <div class=\"input-area text-end\">
                                <button type=\"submit\" class=\"vl-btn1\">Submit Now</button>
                            </div>
                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

";
        // line 68
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 'form_end');
        yield "
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
        return "reclamation/_form.html.twig";
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
        return array (  153 => 68,  129 => 47,  125 => 46,  121 => 45,  111 => 38,  107 => 37,  103 => 36,  93 => 29,  89 => 28,  85 => 27,  75 => 20,  71 => 19,  67 => 18,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# _form.html.twig #}
{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

<div class=\"contact-inner-section sp1\">
    <div class=\"container\">
        <div class=\"row\">

            <!-- FORM SECTION -->
            <div class=\"col-lg-6\" data-aos=\"zoom-in\" data-aos-duration=\"1000\">
                <div class=\"contact4-boxarea\">
                    <h3 class=\"text-anime-style-3\">Get In Touch Now</h3>
                    <div class=\"space8\"></div>
                    <div class=\"row\">

                        <!-- NAME -->
                        <div class=\"col-lg-6 col-md-6\">
                            <div class=\"input-area\">
                                {{ form_label(form.nomrec, \"Name\") }}
                                {{ form_widget(form.nomrec, { 'attr': {'placeholder': 'Name'} }) }}
                                {{ form_errors(form.nomrec) }}
                            </div>
                        </div>

                        <!-- EMAIL -->
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"input-area\">
                                {{ form_label(form.adressmail, \"Email\") }}
                                {{ form_widget(form.adressmail, { 'attr': {'placeholder': 'Email'} }) }}
                                {{ form_errors(form.adressmail) }}
                            </div>
                        </div>

                        <!-- SUBJECT -->
                        <div class=\"col-lg-12 col-md-6\">
                            <div class=\"input-area\">
                                {{ form_label(form.sujetrec, \"Subject\") }}
                                {{ form_widget(form.sujetrec, { 'attr': {'placeholder': 'Subject'} }) }}
                                {{ form_errors(form.sujetrec) }}
                            </div>
                        </div>

                        <!-- MESSAGE / DESCRIPTION -->
                        <div class=\"col-lg-12\">
                            <div class=\"input-area\">
                                {{ form_label(form.descriptionrec, \"Message\") }}
                                {{ form_widget(form.descriptionrec, { 'attr': {'placeholder': 'Message'} }) }}
                                {{ form_errors(form.descriptionrec) }}
                            </div>
                        </div>

                        <!-- SUBMIT BUTTON -->
                        <div class=\"col-lg-12\">
                            <div class=\"space24\"></div>
                            <div class=\"input-area text-end\">
                                <button type=\"submit\" class=\"vl-btn1\">Submit Now</button>
                            </div>
                        </div>

                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

{{ form_end(form) }}
", "reclamation/_form.html.twig", "/home/iyed/Téléchargements/ismail_integ/eventify-integration_final_gestion_user_and_gestion_events_tickets_and_reclamation/templates/reclamation/_form.html.twig");
    }
}

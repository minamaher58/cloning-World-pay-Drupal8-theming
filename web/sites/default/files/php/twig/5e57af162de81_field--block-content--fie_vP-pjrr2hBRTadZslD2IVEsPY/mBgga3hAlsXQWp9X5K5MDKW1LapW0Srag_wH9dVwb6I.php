<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/mina/card machines page override/field--block-content--field-cardmachine.html.twig */
class __TwigTemplate_86b3edcd6de6e397765855b5b01489cb7905aa5aefa09f6438dbefbcfd24080b extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = [];
        $filters = [];
        $functions = ["path" => 18];

        try {
            $this->sandbox->checkSecurity(
                [],
                [],
                ['path']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "block--cardmachinespageheader.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("block--cardmachinespageheader.html.twig", "themes/custom/mina/card machines page override/field--block-content--field-cardmachine.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_content($context, array $blocks = [])
    {
        // line 17
        echo "<div>
    <a href=\"";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\" rel=\"home\">
      <img class=\"logo\" src=\"../themes/custom/mina/images/Worldpay-Logo.wine.svg\"  />
    </a>
    <a class=\"link\" href=\"";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>"));
        echo "\">worldpay.com</a>
</div>
  <div class=\"card-machine-page-header\">
    <a href=\"/card-machines\" >
        Worldpay Product Help Centre
    </a>
     
    ";
        // line 29
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/mina/card machines page override/field--block-content--field-cardmachine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 29,  76 => 21,  70 => 18,  67 => 17,  64 => 16,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"block--cardmachinespageheader.html.twig\" %}
{#
/**
 * @file
 * Theme override for a branding block.
 *
 * Each branding element variable (logo, name, slogan) is only available if
 * enabled in the block configuration.
 *
 * Available variables:
 * - site_logo: Logo for site as defined in Appearance or theme settings.
 * - site_name: Name for site as defined in Site information settings.
 * - site_slogan: Slogan for site as defined in Site information settings.
 */
#}
{% block content %}
<div>
    <a href=\"{{ path('<front>') }}\" rel=\"home\">
      <img class=\"logo\" src=\"../themes/custom/mina/images/Worldpay-Logo.wine.svg\"  />
    </a>
    <a class=\"link\" href=\"{{ path('<front>') }}\">worldpay.com</a>
</div>
  <div class=\"card-machine-page-header\">
    <a href=\"/card-machines\" >
        Worldpay Product Help Centre
    </a>
     
    {# <img class=\"bgimage\" src=\"../themes/custom/mina/images/worldpay.png\"> #}
  </div>
{% endblock %}
", "themes/custom/mina/card machines page override/field--block-content--field-cardmachine.html.twig", "/var/www/html/project9/web/themes/custom/mina/card machines page override/field--block-content--field-cardmachine.html.twig");
    }
}

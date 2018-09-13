<?php

/* EasyAdminBundle:default:field_time.html.twig */
class __TwigTemplate_b25fa8c9c693b6a0ed35895d2a7e3d520666f9b24b7838561e01492e07a460fa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<time>";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["value"] ?? null), twig_get_attribute($this->env, $this->source, ($context["field_options"] ?? null), "format", array())), "html", null, true);
        echo "</time>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:field_time.html.twig", "/var/www/html/HighCourt/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_time.html.twig");
    }
}

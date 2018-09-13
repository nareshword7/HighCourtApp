<?php

/* EasyAdminBundle:default:field_tel.html.twig */
class __TwigTemplate_f1b518057c646d19690aac86229553c25ce10235bd0c621d7b0db272fc24bdee extends Twig_Template
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
        echo "<a href=\"tel:";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
        echo "</a>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_tel.html.twig";
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
        return new Twig_Source("", "EasyAdminBundle:default:field_tel.html.twig", "/var/www/html/HighCourt/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/field_tel.html.twig");
    }
}

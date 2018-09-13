<?php

/* EasyAdminBundle:default:label_null.html.twig */
class __TwigTemplate_5bec1cc40ed0ef650e5666b7e6dac95e9dbf37dded51d51ccca1a3c30e06a4fe extends Twig_Template
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
        echo "<span class=\"label\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.null", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_null.html.twig";
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
        return new Twig_Source("", "EasyAdminBundle:default:label_null.html.twig", "/var/www/html/HighCourt/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_null.html.twig");
    }
}

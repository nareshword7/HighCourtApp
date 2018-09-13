<?php

/* EasyAdminBundle:default:label_empty.html.twig */
class __TwigTemplate_4df8307d4adb29ca6619d3cd88c7638e2541a855a493d96ce6b8fa9c2ab4ea30 extends Twig_Template
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
        echo "<span class=\"label label-empty\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.empty", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:label_empty.html.twig";
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
        return new Twig_Source("", "EasyAdminBundle:default:label_empty.html.twig", "/var/www/html/HighCourt/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_empty.html.twig");
    }
}

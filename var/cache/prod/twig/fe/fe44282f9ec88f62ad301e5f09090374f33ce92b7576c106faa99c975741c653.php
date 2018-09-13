<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_afa691000475c9ee49f958133bfac79146cd4257b6e3a94f477b9ff3d1ed3120 extends Twig_Template
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
        echo json_encode(array("error" => array("code" => ($context["status_code"] ?? null), "message" => ($context["status_text"] ?? null), "exception" => twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "toarray", array()))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("", "TwigBundle:Exception:exception.json.twig", "/var/www/html/HighCourt/vendor/symfony/twig-bundle/Resources/views/Exception/exception.json.twig");
    }
}

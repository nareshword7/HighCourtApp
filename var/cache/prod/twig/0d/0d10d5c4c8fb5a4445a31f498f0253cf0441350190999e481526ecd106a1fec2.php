<?php

/* case_draft/edit.html.twig */
class __TwigTemplate_934e34b5be146de0e4868af9fc15116c10dab8c1ee8b0df6ecef00159762576f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "case_draft/edit.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Edit CaseDraft";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Edit CaseDraft</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "case_draft/_form.html.twig", array("button_label" => "Update"));
        echo "

    <a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_index");
        echo "\">back to list</a>

    ";
        // line 12
        echo twig_include($this->env, $context, "case_draft/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "case_draft/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  51 => 10,  46 => 8,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "case_draft/edit.html.twig", "/var/www/html/HighCourt/templates/case_draft/edit.html.twig");
    }
}

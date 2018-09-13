<?php

/* case_draft/new.html.twig */
class __TwigTemplate_25edce8ce597089af266cb231e321f93b77f7234666889cab7683a4bb15fa3fc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/admin_cus/layout.html.twig", "case_draft/new.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/admin_cus/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main_body($context, array $blocks = array())
    {
        // line 5
        echo "    <h1>Register new Case</h1>

    <div class=\"clearfix\"></div>
    <hr/>

    ";
        // line 10
        echo twig_include($this->env, $context, "case_draft/_form.html.twig");
        echo "

    <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_index");
        echo "\" class=\"btn btn-primary\">back to list</a>
";
    }

    public function getTemplateName()
    {
        return "case_draft/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 12,  42 => 10,  35 => 5,  32 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "case_draft/new.html.twig", "/var/www/html/HighCourt/templates/case_draft/new.html.twig");
    }
}

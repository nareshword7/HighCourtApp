<?php

/* case_draft/show.html.twig */
class __TwigTemplate_f0d7def617fd1521e50792b6a40b04117b0aafe64199cd231e96d2eb7d9ee2af extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "case_draft/show.html.twig", 1);
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
        echo "CaseDraft";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>CaseDraft</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pet_name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "petName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Res_name</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "resName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Case_type</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "caseType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Case_type_name</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "caseTypeName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Filing_date</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "filingDate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Draft_id</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "draftId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Draft_status</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "draftStatus", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_index");
        echo "\">back to list</a>

    <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["case_draft"] ?? null), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "case_draft/_delete_form.html.twig");
        echo "
";
    }

    public function getTemplateName()
    {
        return "case_draft/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 49,  112 => 47,  107 => 45,  99 => 40,  92 => 36,  85 => 32,  78 => 28,  71 => 24,  64 => 20,  57 => 16,  50 => 12,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "case_draft/show.html.twig", "/var/www/html/HighCourt/templates/case_draft/show.html.twig");
    }
}

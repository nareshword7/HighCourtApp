<?php

/* case_draft/index.html.twig */
class __TwigTemplate_5aa83a20f9093e4ffbb74d537b971be5d207a8ba79cbb509b61fb3fbe0aadddf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/admin_cus/layout.html.twig", "case_draft/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "CaseDraft index";
    }

    // line 5
    public function block_main_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>Case  Draft </h1>
<hr/>

<div class=\"row\">
<div class=\"col-md-12\">
    <table class=\"table\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Pet_name</th>
                <th>Res_name</th>
                <th>Case_type</th>
                <th>Case_type_name</th>
                <th>Filing_date</th>
                <th>Draft_id</th>
                <th>Draft_status</th>
                <th>actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["case_drafts"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["case_draft"]) {
            // line 27
            echo "            <tr>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "petName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "resName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "caseType", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "caseTypeName", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "filingDate", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "draftId", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["case_draft"], "draftStatus", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_show", array("id" => twig_get_attribute($this->env, $this->source, $context["case_draft"], "id", array()))), "html", null, true);
            echo "\">show</a>
                    <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["case_draft"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </td>
            </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "            <tr>
                <td colspan=\"9\">no records found</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['case_draft'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        </tbody>
    </table>


    <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_new");
        echo "\" class=\"btn btn-danger\">Create new</a>
    </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "case_draft/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  127 => 46,  118 => 42,  109 => 38,  105 => 37,  100 => 35,  96 => 34,  92 => 33,  88 => 32,  84 => 31,  80 => 30,  76 => 29,  72 => 28,  69 => 27,  64 => 26,  42 => 6,  39 => 5,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "case_draft/index.html.twig", "/var/www/html/HighCourt/templates/case_draft/index.html.twig");
    }
}

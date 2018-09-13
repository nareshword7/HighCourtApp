<?php

/* case_draft/show.html.twig */
class __TwigTemplate_b52cdb0e754cc8846dff5fc6badbba16634377ebfc5e709584710134a0db8258 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "case_draft/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "case_draft/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "CaseDraft";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h1>CaseDraft</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Pet_name</th>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 16, $this->source); })()), "petName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Res_name</th>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 20, $this->source); })()), "resName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Case_type</th>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 24, $this->source); })()), "caseType", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Case_type_name</th>
                <td>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 28, $this->source); })()), "caseTypeName", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Filing_date</th>
                <td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 32, $this->source); })()), "filingDate", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Draft_id</th>
                <td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 36, $this->source); })()), "draftId", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Draft_status</th>
                <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 40, $this->source); })()), "draftStatus", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("case_draft_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["case_draft"]) || array_key_exists("case_draft", $context) ? $context["case_draft"] : (function () { throw new Twig_Error_Runtime('Variable "case_draft" does not exist.', 47, $this->source); })()), "id", array()))), "html", null, true);
        echo "\">edit</a>

    ";
        // line 49
        echo twig_include($this->env, $context, "case_draft/_delete_form.html.twig");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  147 => 49,  142 => 47,  137 => 45,  129 => 40,  122 => 36,  115 => 32,  108 => 28,  101 => 24,  94 => 20,  87 => 16,  80 => 12,  72 => 6,  63 => 5,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}CaseDraft{% endblock %}

{% block body %}
    <h1>CaseDraft</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ case_draft.id }}</td>
            </tr>
            <tr>
                <th>Pet_name</th>
                <td>{{ case_draft.petName }}</td>
            </tr>
            <tr>
                <th>Res_name</th>
                <td>{{ case_draft.resName }}</td>
            </tr>
            <tr>
                <th>Case_type</th>
                <td>{{ case_draft.caseType }}</td>
            </tr>
            <tr>
                <th>Case_type_name</th>
                <td>{{ case_draft.caseTypeName }}</td>
            </tr>
            <tr>
                <th>Filing_date</th>
                <td>{{ case_draft.filingDate }}</td>
            </tr>
            <tr>
                <th>Draft_id</th>
                <td>{{ case_draft.draftId }}</td>
            </tr>
            <tr>
                <th>Draft_status</th>
                <td>{{ case_draft.draftStatus }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('case_draft_index') }}\">back to list</a>

    <a href=\"{{ path('case_draft_edit', {'id': case_draft.id}) }}\">edit</a>

    {{ include('case_draft/_delete_form.html.twig') }}
{% endblock %}
", "case_draft/show.html.twig", "/var/www/html/HighCourt/templates/case_draft/show.html.twig");
    }
}

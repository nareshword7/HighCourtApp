<?php

/* case_draft/_form.html.twig */
class __TwigTemplate_695fc7ba2890827f9bab91a0f459c6e4110184b3a5f0fae3947350a1f864a1fb extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "case_draft/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "case_draft/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 1, $this->source); })()), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->source); })()), "_token", array()), 'row');
        echo "
<div class=\"row\">
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->source); })()), 'errors');
        echo "
</div>

<div class=\"row form-group\">

\t<div class=\"col-md-4\">
 \t<b><h4>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "case_type", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Select Case Type"));
        echo "<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 13, $this->source); })()), "case_type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>
 
<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->source); })()), "pet_name", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Enter Pet. Name"));
        echo "<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "pet_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>

<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "res_name", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Enter Res. Name"));
        echo "<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "res_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>

<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4> Upload pdf case file <i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "case_file", array()), 'widget');
        echo "
\t</div>
</div>





<div class=\"row float-right\">
 
<button class=\"btn btn-primary btn-lg\">";
        // line 50
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new Twig_Error_Runtime('Variable "button_label" does not exist.', 50, $this->source); })()), "Submit ")) : ("Submit ")), "html", null, true);
        echo "</button>
</div>

<div class=\"clearfix\" style=\"margin-top:50px;\"></div>

";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 55, $this->source); })()), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "case_draft/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 55,  108 => 50,  95 => 40,  83 => 31,  77 => 28,  68 => 22,  62 => 19,  53 => 13,  47 => 10,  38 => 4,  33 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form) }}
{{ form_row(form._token) }}
<div class=\"row\">
{{ form_errors(form) }}
</div>

<div class=\"row form-group\">

\t<div class=\"col-md-4\">
 \t<b><h4>{{ form_label(form.case_type, 'Select Case Type', {'label_attr': {'class': 'foo'}}) }}<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t{{ form_widget(form.case_type, {'attr': {'class': 'form-control'}}) }}
\t</div>
</div>
 
<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4>{{ form_label(form.pet_name, 'Enter Pet. Name', {'label_attr': {'class': 'foo'}}) }}<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t{{ form_widget(form.pet_name, {'attr': {'class': 'form-control'}}) }}
\t</div>
</div>

<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4>{{ form_label(form.res_name, 'Enter Res. Name', {'label_attr': {'class': 'foo'}}) }}<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t{{ form_widget(form.res_name, {'attr': {'class': 'form-control'}}) }}
\t</div>
</div>

<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4> Upload pdf case file <i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t{{ form_widget(form.case_file) }}
\t</div>
</div>





<div class=\"row float-right\">
 
<button class=\"btn btn-primary btn-lg\">{{ button_label|default('Submit ') }}</button>
</div>

<div class=\"clearfix\" style=\"margin-top:50px;\"></div>

{{ form_end(form, {'render_rest': false}) }}
", "case_draft/_form.html.twig", "/var/www/html/HighCourt/templates/case_draft/_form.html.twig");
    }
}

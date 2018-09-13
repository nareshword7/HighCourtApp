<?php

/* case_draft/_form.html.twig */
class __TwigTemplate_7bc1c49e405a168a1699c3cd7e6855af6ab17c2bade06d2d1877f31f1187c0c0 extends Twig_Template
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
";
        // line 2
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", array()), 'row');
        echo "
<div class=\"row\">
";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
</div>

<div class=\"row form-group\">

\t<div class=\"col-md-4\">
 \t<b><h4>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "case_type", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Select Case Type"));
        echo "<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "case_type", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>
 
<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pet_name", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Enter Pet. Name"));
        echo "<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "pet_name", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
</div>

<div class=\"row form-group\">
\t<div class=\"col-md-4\">
 \t<b><h4>";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "res_name", array()), 'label', array("label_attr" => array("class" => "foo"), "label" => "Enter Res. Name"));
        echo "<i class=\"text-danger\"> * </i> </h4> </b> 
\t</div>
\t<div class=\"col-md-8\">
 \t";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "res_name", array()), 'widget', array("attr" => array("class" => "form-control")));
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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "case_file", array()), 'widget');
        echo "
\t</div>
</div>





<div class=\"row float-right\">
 
<button class=\"btn btn-primary btn-lg\">";
        // line 50
        echo twig_escape_filter($this->env, (((isset($context["button_label"]) || array_key_exists("button_label", $context))) ? (_twig_default_filter(($context["button_label"] ?? null), "Submit ")) : ("Submit ")), "html", null, true);
        echo "</button>
</div>

<div class=\"clearfix\" style=\"margin-top:50px;\"></div>

";
        // line 55
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? null), 'form_end', array("render_rest" => false));
        echo "
";
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
        return array (  110 => 55,  102 => 50,  89 => 40,  77 => 31,  71 => 28,  62 => 22,  56 => 19,  47 => 13,  41 => 10,  32 => 4,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "case_draft/_form.html.twig", "/var/www/html/HighCourt/templates/case_draft/_form.html.twig");
    }
}

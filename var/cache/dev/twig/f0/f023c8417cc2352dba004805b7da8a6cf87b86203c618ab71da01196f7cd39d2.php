<?php

/* efiling/filing/main.html.twig */
class __TwigTemplate_ca5e5516236bd69822e1c51fd03365c19a4e28f6337982b7afac83e1cba89776 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/efiling/layout.html.twig", "efiling/filing/main.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/efiling/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "efiling/filing/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "efiling/filing/main.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        // line 4
        echo "  
<div class=\"row\">

<div class=\"col-md-6\">
<div class=\"row\">
<div class=\"col-md-2\">
</div>
<div class=\"card-deck col-md-8\">
  <div class=\"card bg-primary\" >
    <div class=\"card-body text-center\" style=\"color:#fff;\">
       <i class=\"fa fa-plus fa-5x\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
     <h1> <i>  Register Case </i> </h1>
    </div>   
  </div>
</div>

</div>
</div>
<div class=\"col-md-6\">

<div class=\"card-deck\">
  <div class=\"card bg-info\" >
    <div class=\"card-body text-center\" style=\"color:#fff;\">
       <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
         View Cases
    </div>   
  </div>
</div>
</div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "efiling/filing/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/efiling/layout.html.twig' %}

{% block main_body %}
  
<div class=\"row\">

<div class=\"col-md-6\">
<div class=\"row\">
<div class=\"col-md-2\">
</div>
<div class=\"card-deck col-md-8\">
  <div class=\"card bg-primary\" >
    <div class=\"card-body text-center\" style=\"color:#fff;\">
       <i class=\"fa fa-plus fa-5x\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
     <h1> <i>  Register Case </i> </h1>
    </div>   
  </div>
</div>

</div>
</div>
<div class=\"col-md-6\">

<div class=\"card-deck\">
  <div class=\"card bg-info\" >
    <div class=\"card-body text-center\" style=\"color:#fff;\">
       <i class=\"fa fa-book\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
         View Cases
    </div>   
  </div>
</div>
</div>
</div>

{% endblock %}", "efiling/filing/main.html.twig", "/var/www/html/HighCourt/templates/efiling/filing/main.html.twig");
    }
}

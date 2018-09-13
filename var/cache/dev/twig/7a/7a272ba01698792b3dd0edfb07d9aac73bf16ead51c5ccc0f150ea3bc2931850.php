<?php

/* admin_cus/dashboard/main.html.twig */
class __TwigTemplate_d1cf51d16ce79e3e0d923b97a7e0e535a6c007ea71daa270f0413d0bf72eee30 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/admin_cus/layout.html.twig", "admin_cus/dashboard/main.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_cus/dashboard/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_cus/dashboard/main.html.twig"));

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
<div class=\"card-deck row\">
  <div class=\"card bg-primary col-md-2\">
    <div class=\"card-body text-center\" style=\"color:#fff;\">
      <i class=\"fa fa-upload fa-5x\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
      <h4> 
      <a href=\"admincus/runscript\" class=\"ajaxrequest\" targetID=\"#targetDiv\">  Push CIS data to Website </a>
        <br/>
        <div id=\"targetDiv\" ></div>
      </h4>   
    </div>
  </div>

  <div class=\"card bg-info col-md-2\">
    <div class=\"card-body text-center\" style=\"color:#fff;\">
      <i class=\"fa fa-clipboard fa-5x\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
      <h4> 
      <a href=\"admincus/certifiedscript\" class=\"ajaxrequest\" targetID=\"#targetCertifiedDiv\">  Push Certified Copy Data </a>
        <br/>
        <div id=\"targetCertifiedDiv\" ></div>
      </h4>   
    </div>
  </div>

</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_cus/dashboard/main.html.twig";
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
        return new Twig_Source("{% extends '/admin_cus/layout.html.twig' %}

{% block main_body %}
  
<div class=\"card-deck row\">
  <div class=\"card bg-primary col-md-2\">
    <div class=\"card-body text-center\" style=\"color:#fff;\">
      <i class=\"fa fa-upload fa-5x\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
      <h4> 
      <a href=\"admincus/runscript\" class=\"ajaxrequest\" targetID=\"#targetDiv\">  Push CIS data to Website </a>
        <br/>
        <div id=\"targetDiv\" ></div>
      </h4>   
    </div>
  </div>

  <div class=\"card bg-info col-md-2\">
    <div class=\"card-body text-center\" style=\"color:#fff;\">
      <i class=\"fa fa-clipboard fa-5x\" aria-hidden=\"true\"></i>
      <br/>
      <hr/>
      <h4> 
      <a href=\"admincus/certifiedscript\" class=\"ajaxrequest\" targetID=\"#targetCertifiedDiv\">  Push Certified Copy Data </a>
        <br/>
        <div id=\"targetCertifiedDiv\" ></div>
      </h4>   
    </div>
  </div>

</div>



{% endblock %}", "admin_cus/dashboard/main.html.twig", "/var/www/html/HighCourt/templates/admin_cus/dashboard/main.html.twig");
    }
}

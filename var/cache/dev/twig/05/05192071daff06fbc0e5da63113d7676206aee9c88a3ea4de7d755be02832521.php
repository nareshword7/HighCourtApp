<?php

/* admin_cus/ps/main.html.twig */
class __TwigTemplate_8370853376705c6b2499cbb425b2494046813a60e39a419a5864c0ad2978c0a1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("/admin_cus/ps_layout.html.twig", "admin_cus/ps/main.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "/admin_cus/ps_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_cus/ps/main.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin_cus/ps/main.html.twig"));

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
<div class=\"card card-primary\">
    <div class=\"card-header bg-primary\"> 

     <div class=\"row\">  

        <form action=\"/getCases\" method=\"post\">
     \t  Select Bench 
     \t  <select id=\"casetype\" class=\"form-control\">  <option value=\"0\"> Select  </option>  
     \t";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["judge"]) {
            // line 14
            echo "         \t<option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judge"], "court_no", array()), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["judge"], "judgename", array()));
            echo "  </option> 
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['judge'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "     \t
     \t </select> 
     \t
     \t <input type=\"text\" class=\"form-control\" id=\"datepicker\" placeholder=\"Select date\" />  
 <input type=\"submit\" value=\"Submit\" class=\"btn btn-danger\">  
     \t</form>
     </div>    

     </div>
    <div class=\"card-body\">
    <div class=\"row\">
     \t<div class=\"col-md-3\"> This is a  test </div>
     \t<div class=\"col-md-9\"> I am here is testing </div>
    </div>


    </div> 

    <div class=\"card-footer text-right\"> <input type=\"submit\" value=\"Save\" class=\"btn btn-danger\"> </div>
  </div>

<div class=\"alert alert-primary\" role=\"alert\" style=\"display:none;\">
  This is a primary alert—check it out!
</div> 
<div class=\"panel panel-primary\" style=\"display:none;\">
  <div class=\"panel-heading\">
     This  is a test
  </div>
  <div class=\"panel-body\">
     This is a test
  </div>
</div>



<div class=\"card-deck row\" style=\"display:none;\">
  <div class=\"card bg-primary col-md-2\">
      This is a test one ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["result"]) || array_key_exists("result", $context) ? $context["result"] : (function () { throw new Twig_Error_Runtime('Variable "result" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 54
            echo "        <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "judgename", array()));
            echo "</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "  </div>

  <div class=\"card bg-info col-md-2\">
    This is test two
  </div>
    
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "admin_cus/ps/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 56,  122 => 54,  118 => 53,  79 => 16,  68 => 14,  64 => 13,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '/admin_cus/ps_layout.html.twig' %}

{% block main_body %}
 
<div class=\"card card-primary\">
    <div class=\"card-header bg-primary\"> 

     <div class=\"row\">  

        <form action=\"/getCases\" method=\"post\">
     \t  Select Bench 
     \t  <select id=\"casetype\" class=\"form-control\">  <option value=\"0\"> Select  </option>  
     \t{% for judge in result %}
         \t<option value=\"{{ judge.court_no }}\"> {{ judge.judgename|e }}  </option> 
    \t{% endfor %}
     \t
     \t </select> 
     \t
     \t <input type=\"text\" class=\"form-control\" id=\"datepicker\" placeholder=\"Select date\" />  
 <input type=\"submit\" value=\"Submit\" class=\"btn btn-danger\">  
     \t</form>
     </div>    

     </div>
    <div class=\"card-body\">
    <div class=\"row\">
     \t<div class=\"col-md-3\"> This is a  test </div>
     \t<div class=\"col-md-9\"> I am here is testing </div>
    </div>


    </div> 

    <div class=\"card-footer text-right\"> <input type=\"submit\" value=\"Save\" class=\"btn btn-danger\"> </div>
  </div>

<div class=\"alert alert-primary\" role=\"alert\" style=\"display:none;\">
  This is a primary alert—check it out!
</div> 
<div class=\"panel panel-primary\" style=\"display:none;\">
  <div class=\"panel-heading\">
     This  is a test
  </div>
  <div class=\"panel-body\">
     This is a test
  </div>
</div>



<div class=\"card-deck row\" style=\"display:none;\">
  <div class=\"card bg-primary col-md-2\">
      This is a test one {% for user in result %}
        <li>{{ user.judgename|e }}</li>
    {% endfor %}
  </div>

  <div class=\"card bg-info col-md-2\">
    This is test two
  </div>
    
</div>

{% endblock %}", "admin_cus/ps/main.html.twig", "/var/www/html/HighCourt/templates/admin_cus/ps/main.html.twig");
    }
}

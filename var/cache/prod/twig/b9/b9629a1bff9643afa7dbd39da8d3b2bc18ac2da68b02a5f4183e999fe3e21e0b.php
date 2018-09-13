<?php

/* admin_cus/dashboard/main.html.twig */
class __TwigTemplate_e6d32b1e421e666a2f07df0e72e111705e47f91864c2d1cc9e4aba3697c8652a extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_body($context, array $blocks = array())
    {
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
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "admin_cus/dashboard/main.html.twig", "/var/www/html/HighCourt/templates/admin_cus/dashboard/main.html.twig");
    }
}

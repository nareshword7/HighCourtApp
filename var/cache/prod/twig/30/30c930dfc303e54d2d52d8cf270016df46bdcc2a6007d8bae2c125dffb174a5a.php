<?php

/* efiling/filing/main.html.twig */
class __TwigTemplate_1cb52ca04bc782c628cc85fe40f5288700dfeea17b1d76e25fc0d05ab3e05dfb extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_main_body($context, array $blocks = array())
    {
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
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "efiling/filing/main.html.twig", "/var/www/html/HighCourt/templates/efiling/filing/main.html.twig");
    }
}

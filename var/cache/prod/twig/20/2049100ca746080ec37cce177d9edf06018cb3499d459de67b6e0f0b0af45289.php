<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_ae474513d6aa3be47cab7fb35a015a44f9782eac04d592419250bff2a6f93bd2 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/color_widget.html.php", "/var/www/html/HighCourt/vendor/symfony/framework-bundle/Resources/views/Form/color_widget.html.php");
    }
}

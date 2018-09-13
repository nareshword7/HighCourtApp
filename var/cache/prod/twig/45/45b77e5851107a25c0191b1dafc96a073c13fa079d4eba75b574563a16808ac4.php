<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_8d9192424c2096364bc3de2a331e694cd4ed44b75ccdc1559bcf2799ba51bcb8 extends Twig_Template
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
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/choice_options.html.php", "/var/www/html/HighCourt/vendor/symfony/framework-bundle/Resources/views/Form/choice_options.html.php");
    }
}

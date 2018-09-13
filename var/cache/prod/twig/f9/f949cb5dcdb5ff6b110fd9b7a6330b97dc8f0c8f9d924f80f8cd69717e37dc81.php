<?php

/* base.html.twig */
class __TwigTemplate_ea7fea1196b74c55d030b06583de28b49688c19e3c7c90c4d8db393bb33e0182 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/Font-Awesome/web-fonts-wth-css/fontawesome.min.css"), "html", null, true);
        echo "\"/>

         <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    </head>
    <body>

    
     <nav class=\"navbar navbar-expand-sm bg-dark navbar-dark\">
  <!-- Brand -->
  <a class=\"navbar-brand\" href=\"#\">Logo</a>

  <!-- Links -->
  <ul class=\"navbar-nav\">
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">Link 1</a>
    </li>
    <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"#\">Link 2</a>
    </li>

    <!-- Dropdown -->
    <li class=\"nav-item dropdown\">
      <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"navbardrop\" data-toggle=\"dropdown\">
        Dropdown link
      </a>
      <div class=\"dropdown-menu\">
        <a class=\"dropdown-item\" href=\"#\">Link 1</a>
        <a class=\"dropdown-item\" href=\"#\">Link 2</a>
        <a class=\"dropdown-item\" href=\"#\">Link 3</a>
      </div>
    </li>
  </ul>
</nav> 


<div class=\"wrapper\">
    <!-- Sidebar -->
    <nav id=\"sidebar\">
        <div class=\"sidebar-header\">
            <h3>Bootstrap Sidebar</h3>
        </div>

        <ul class=\"list-unstyled components\">
            <p>Dummy Heading</p>
            <li class=\"active\">
                <a href=\"#homeSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Home</a>
                <ul class=\"collapse list-unstyled\" id=\"homeSubmenu\">
                    <li>
                        <a href=\"#\">Home 1</a>
                    </li>
                    <li>
                        <a href=\"#\">Home 2</a>
                    </li>
                    <li>
                        <a href=\"#\">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\">About</a>
            </li>
            <li>
                <a href=\"#pageSubmenu\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Pages</a>
                <ul class=\"collapse list-unstyled\" id=\"pageSubmenu\">
                    <li>
                        <a href=\"#\">Page 1</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 2</a>
                    </li>
                    <li>
                        <a href=\"#\">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"#\">Portfolio</a>
            </li>
            <li>
                <a href=\"#\">Contact</a>
            </li>
        </ul>
    </nav>

</div>
    <div class=\"row\">
    \t<div class=\"col-md-3\">
        \t<div id=\"sidebar\">
            \t";
        // line 96
        $this->displayBlock('sidebar', $context, $blocks);
        // line 102
        echo "        \t</div>
    \t</div>

    \t<div class=\"col-md-9\">

        \t<div id=\"content\">
            ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 109
        echo "        \t</div>
    \t</div>
    \t</div>
    \t
    </body>
</html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo " High Court Application";
    }

    // line 96
    public function block_sidebar($context, array $blocks = array())
    {
        // line 97
        echo "                <ul>
                    <li><a href=\"/\">Home</a></li>
                    <li><a href=\"/blog\">Blog</a></li>
                </ul>
            \t";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 108,  170 => 97,  167 => 96,  161 => 5,  150 => 109,  148 => 108,  140 => 102,  138 => 96,  49 => 10,  45 => 9,  40 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "base.html.twig", "/var/www/html/HighCourt/templates/base.html.twig");
    }
}

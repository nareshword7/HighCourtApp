<?php

/* /admin_cus/layout.html.twig */
class __TwigTemplate_fcf15fa4c0405daea2910f786091f7b32c419189a161f0778128b391f2bf72c1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title> High Court of Sikkim </title>

        <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/Font-Awesome/web-fonts-with-css/css/fontawesome-all.min.css"), "html", null, true);
        echo "\"/>

        <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin_custom.css"), "html", null, true);
        echo "\"/>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/vendor/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <script type=\"text/javascript\">
       
        \$(document).ready(function () {
            \$('#sidebarCollapse').on('click', function () {
                \$('#sidebar').toggleClass('active');
            });
            
            \$(\".ajaxrequest\").click(function(){
                var cus_url= \$(this).attr('href');
                var targetDiv=\$(this).attr('targetID');
                \$.ajax({url: cus_url, success: function(result){
                \$(targetDiv).html('<p class=\"text-danger\"> Uploaded </p>');}});
                return false;
            })
            \$(document).ajaxStart(function() {
            // show loader on start
            \$(\"#loading\").css(\"display\",\"block\");
                }).ajaxSuccess(function() {
                // hide loader on success
                \$(\"#loading\").css(\"display\",\"none\");
            });
        });
        </script>
    
    </head>

    <body>
        <nav class=\"navbar navbar-dark bg-primary\" style=\"height: 65px;\">
            <a class=\"navbar-brand\" href=\"#\">
               <h1> <i class=\"fa fa-home\"></i>  High Court of Sikkim </h1>
            </a>  
            <a href=\"/logout\" class=\"btn btn-danger\">Logout</a>  
        </nav>

        <div class=\"wrapper\">
   
        <!-- Sidebar -->
            <nav id=\"sidebar\">
            <div class=\"sidebar-header\">
                <h1> Admin Menu</h1>
            </div>

            <ul class=\"list-unstyled components\" id=\"pageSubmenu\">
            
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
                <a href=\"#pageSubmenu2\" data-toggle=\"collapse\" aria-expanded=\"false\" class=\"dropdown-toggle\">Pages</a>
                <ul class=\"collapse list-unstyled\" id=\"pageSubmenu2\">
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

            <!-- Page Content -->
            <div id=\"content\" style=\"width:80%;\">
                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <div class=\"container-fluid\">

                <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-primary\">
                <i class=\"fas fa-align-left\"></i>
                <span></span>
                </button>

                </div>
                </nav>
                <div class=\"col-md-12\">
                ";
        // line 117
        $this->displayBlock('main_body', $context, $blocks);
        // line 118
        echo "                </div>
            </div>
        </div>    
        <div id=\"loading\"> <img src=\"/assets/img/loading_icon.gif\"> </div>
    </body>
</html>
";
    }

    // line 117
    public function block_main_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "/admin_cus/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 117,  159 => 118,  157 => 117,  54 => 17,  50 => 16,  46 => 15,  41 => 13,  37 => 12,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/admin_cus/layout.html.twig", "/var/www/html/HighCourt/templates/admin_cus/layout.html.twig");
    }
}

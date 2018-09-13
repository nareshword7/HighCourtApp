<?php

/* /efiling/layout.html.twig */
class __TwigTemplate_36cc3849d11e54099b23ee3ce1e92a3e1c60d34b58f3b8284ab2e70d009e9b29 extends Twig_Template
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
        <nav class=\"navbar navbar-dark bg-primary\">
            <a class=\"navbar-brand\" href=\"#\">
                <i class=\"fa fa-home\"></i> High Court of Sikkim
            </a>  <div class=\"fos_user_user_show\">
    
    <a href=\"/logout\">Logout</a>

</div>  
        </nav>

        <div class=\"wrapper\">
   
        <!-- Sidebar -->
            <nav id=\"sidebar\">
            <div class=\"sidebar-header\">
                <h3> E - filing </h3>
            </div>

            <ul class=\"list-unstyled components\" id=\"pageSubmenu\">
            <li>
                <a href=\"#\">Register Case</a>
            </li>

            <li>
                <a href=\"#\"> Update Case</a>
            </li>
            
            
            <li>
                <a href=\"#\">Contact</a>
            </li>
            </ul>
    
            </nav>

            <!-- Page Content -->
            <div id=\"content\"  style=\"width: 100%;\">
                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <div class=\"container-fluid\">

                <button type=\"button\" id=\"sidebarCollapse\" class=\"btn btn-info\">
                <i class=\"fas fa-align-left\"></i>
                <span></span>
                </button>

                </div>
                </nav>
                <div class=\"col-md-12\">
                ";
        // line 94
        $this->displayBlock('main_body', $context, $blocks);
        // line 95
        echo "                </div>
            </div>
        </div>    
        <div id=\"loading\"> <img src=\"/assets/img/loading_icon.gif\"> </div>
    </body>
</html>
";
    }

    // line 94
    public function block_main_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "/efiling/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 94,  136 => 95,  134 => 94,  54 => 17,  50 => 16,  46 => 15,  41 => 13,  37 => 12,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/efiling/layout.html.twig", "/var/www/html/HighCourt/templates/efiling/layout.html.twig");
    }
}

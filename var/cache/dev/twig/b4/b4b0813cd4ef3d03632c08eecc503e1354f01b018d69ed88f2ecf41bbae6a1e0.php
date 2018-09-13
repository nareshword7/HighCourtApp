<?php

/* /admin_cus/ps_layout.html.twig */
class __TwigTemplate_26defd02c947976d0b7f8bebd0b39f81d35f338d6aa936ab899fd64715f6644f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin_cus/ps_layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/admin_cus/ps_layout.html.twig"));

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

        <script src=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js\" type=\"text/javascript\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
       
        \$(document).ready(function () {

            \$('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
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
            

            <!-- Page Content -->
            <div id=\"content\" style=\"width:100%;\">
                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <div class=\"container-fluid\">

                </div>
                </nav>
                <div class=\"col-md-12\">
                ";
        // line 73
        $this->displayBlock('main_body', $context, $blocks);
        // line 74
        echo "                </div>
            </div>
        </div>    
        <div id=\"loading\"> <img src=\"/assets/img/loading_icon.gif\"> </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 73
    public function block_main_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "/admin_cus/ps_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 73,  121 => 74,  119 => 73,  60 => 17,  56 => 16,  52 => 15,  47 => 13,  43 => 12,  30 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"robots\" content=\"noindex, nofollow, noarchive, nosnippet, noodp, noimageindex, notranslate, nocache\" />
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title> High Court of Sikkim </title>

        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/bootstrap/dist/css/bootstrap.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('assets/vendor/Font-Awesome/web-fonts-with-css/css/fontawesome-all.min.css') }}\"/>

        <link rel=\"stylesheet\" href=\"{{ asset('admin_custom.css') }}\"/>
        <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}\"></script>
        <script type=\"text/javascript\" src=\"{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}\"></script>

        <script src=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js\" type=\"text/javascript\"></script>
        <link href=\"https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css\" rel=\"stylesheet\" type=\"text/css\" />

        <script type=\"text/javascript\">
       
        \$(document).ready(function () {

            \$('#datepicker').datepicker({
                uiLibrary: 'bootstrap4'
            });
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
            

            <!-- Page Content -->
            <div id=\"content\" style=\"width:100%;\">
                <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
                <div class=\"container-fluid\">

                </div>
                </nav>
                <div class=\"col-md-12\">
                {% block main_body %}{% endblock %}
                </div>
            </div>
        </div>    
        <div id=\"loading\"> <img src=\"/assets/img/loading_icon.gif\"> </div>
    </body>
</html>
", "/admin_cus/ps_layout.html.twig", "/var/www/html/HighCourt/templates/admin_cus/ps_layout.html.twig");
    }
}

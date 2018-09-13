<?php

/* EasyAdminBundle:default:show.html.twig */
class __TwigTemplate_1d14bc771ac9d3f0304fc6e6a526476541a4497461463e33226eb9d7aa38eb47 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'show_fields' => array($this, 'block_show_fields'),
            'show_field' => array($this, 'block_show_field'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "templates", array()), "layout", array()), "EasyAdminBundle:default:show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["_entity_config"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getEntityConfiguration(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "primary_key_field_name", array())));
        // line 4
        $context["__internal_e123761390c3f480786830d5ca5a452802e50a4b4f9c4c4d9e1a78c54a9fc3ab"] = twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), array(),         // line 4
($context["__internal_e123761390c3f480786830d5ca5a452802e50a4b4f9c4c4d9e1a78c54a9fc3ab"] ?? null)), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source,         // line 5
($context["_entity_config"] ?? null), "label", array()), array(),         // line 4
($context["__internal_e123761390c3f480786830d5ca5a452802e50a4b4f9c4c4d9e1a78c54a9fc3ab"] ?? null)), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? null));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((("easyadmin-show-" . twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array())) . "-") . ($context["_entity_id"] ?? null)), "html", null, true);
    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()))), "html", null, true);
    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("show.page_title", ($context["_trans_parameters"] ?? null), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "show", array()), "title", array()), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_e123761390c3f480786830d5ca5a452802e50a4b4f9c4c4d9e1a78c54a9fc3ab"] ?? null))) : (        // line 15
($context["_default_title"] ?? null))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $this->displayBlock('show_fields', $context, $blocks);
        // line 41
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 44
        $this->displayBlock('item_actions', $context, $blocks);
        // line 56
        echo "            </div>
        </div>
    </div>

    ";
        // line 60
        $this->displayBlock('delete_form', $context, $blocks);
    }

    // line 21
    public function block_show_fields($context, array $blocks = array())
    {
        // line 22
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 23
            echo "                ";
            $this->displayBlock('show_field', $context, $blocks);
            // line 39
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        ";
    }

    // line 23
    public function block_show_field($context, array $blocks = array())
    {
        // line 24
        echo "                    <div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "type", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "type", array()), "default")) : ("default"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
                        <label class=\"col-sm-2 control-label\">
                            ";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "label", array())) ? (twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "label", array())) : ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["field"] ?? null)))), ($context["_trans_parameters"] ?? null),         // line 4
($context["__internal_e123761390c3f480786830d5ca5a452802e50a4b4f9c4c4d9e1a78c54a9fc3ab"] ?? null));
        // line 26
        echo "
                        </label>
                        <div class=\"col-sm-10\">
                            <div class=\"form-control\">
                                ";
        // line 30
        echo $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->renderEntityField($this->env, "show", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), ($context["entity"] ?? null), ($context["metadata"] ?? null));
        echo "
                            </div>

                            ";
        // line 33
        if ((((twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", array()), "")) : ("")) != "")) {
            // line 34
            echo "                                <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["metadata"] ?? null), "help", array()), array(),             // line 4
($context["__internal_e123761390c3f480786830d5ca5a452802e50a4b4f9c4c4d9e1a78c54a9fc3ab"] ?? null));
            // line 34
            echo "</span>
                            ";
        }
        // line 36
        echo "                        </div>
                    </div>
                ";
    }

    // line 44
    public function block_item_actions($context, array $blocks = array())
    {
        // line 45
        echo "                ";
        $context["_show_actions"] = $this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("show", twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()));
        // line 46
        echo "                ";
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->source, ($context["_entity_config"] ?? null), "name", array()), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 47
        echo "
                ";
        // line 48
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 49
($context["_show_actions"] ?? null), "request_parameters" =>         // line 50
($context["_request_parameters"] ?? null), "translation_domain" => twig_get_attribute($this->env, $this->source,         // line 51
($context["_entity_config"] ?? null), "translation_domain", array()), "trans_parameters" =>         // line 52
($context["_trans_parameters"] ?? null), "item_id" =>         // line 53
($context["_entity_id"] ?? null)), false);
        // line 54
        echo "
            ";
    }

    // line 60
    public function block_delete_form($context, array $blocks = array())
    {
        // line 61
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 64
($context["delete_form"] ?? null), "_translation_domain" => twig_get_attribute($this->env, $this->source,         // line 65
($context["_entity_config"] ?? null), "translation_domain", array()), "_trans_parameters" =>         // line 66
($context["_trans_parameters"] ?? null), "_entity_config" =>         // line 67
($context["_entity_config"] ?? null)), false);
        // line 68
        echo "
    ";
    }

    // line 72
    public function block_body_javascript($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 73,  231 => 72,  226 => 68,  224 => 67,  223 => 66,  222 => 65,  221 => 64,  220 => 63,  218 => 61,  215 => 60,  210 => 54,  208 => 53,  207 => 52,  206 => 51,  205 => 50,  204 => 49,  203 => 48,  200 => 47,  197 => 46,  194 => 45,  191 => 44,  185 => 36,  181 => 34,  179 => 4,  177 => 34,  175 => 33,  169 => 30,  163 => 26,  161 => 4,  160 => 26,  152 => 24,  149 => 23,  145 => 40,  131 => 39,  128 => 23,  110 => 22,  107 => 21,  103 => 60,  97 => 56,  95 => 44,  90 => 41,  88 => 21,  85 => 20,  82 => 19,  75 => 15,  74 => 4,  72 => 15,  69 => 14,  67 => 13,  64 => 12,  58 => 10,  52 => 9,  48 => 7,  46 => 5,  45 => 4,  44 => 5,  43 => 4,  42 => 5,  40 => 4,  38 => 3,  36 => 1,  30 => 7,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EasyAdminBundle:default:show.html.twig", "/var/www/html/HighCourt/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/show.html.twig");
    }
}

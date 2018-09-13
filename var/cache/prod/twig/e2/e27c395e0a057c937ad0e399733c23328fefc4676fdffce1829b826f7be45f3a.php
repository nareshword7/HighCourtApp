<?php

/* @EasyAdmin/form/bootstrap_3_layout.html.twig */
class __TwigTemplate_566dcd3ad8d4f9077138542eecb0f67b2380b61b6cdc1a547660237afbf82a85 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "@EasyAdmin/form/bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.', 1, $this->source);
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_widget' => array($this, 'block_form_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'collection_row' => array($this, 'block_collection_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
                'empty_collection' => array($this, 'block_empty_collection'),
                'vich_file_row' => array($this, 'block_vich_file_row'),
                'vich_file_widget' => array($this, 'block_vich_file_widget'),
                'vich_image_row' => array($this, 'block_vich_image_row'),
                'vich_image_widget' => array($this, 'block_vich_image_widget'),
                'easyadmin_rest' => array($this, 'block_easyadmin_rest'),
                'item_actions' => array($this, 'block_item_actions'),
                'easyadmin_widget' => array($this, 'block_easyadmin_widget'),
                'easyadmin_widget_groups' => array($this, 'block_easyadmin_widget_groups'),
                'easyadmin_autocomplete_widget' => array($this, 'block_easyadmin_autocomplete_widget'),
                'easyadmin_autocomplete_inner_label' => array($this, 'block_easyadmin_autocomplete_inner_label'),
                'easyadmin_divider_row' => array($this, 'block_easyadmin_divider_row'),
                'easyadmin_section_row' => array($this, 'block_easyadmin_section_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('form_widget', $context, $blocks);
        // line 62
        echo "
";
        // line 63
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 69
        echo "
";
        // line 70
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('button_widget', $context, $blocks);
        // line 79
        echo "
";
        // line 80
        $this->displayBlock('money_widget', $context, $blocks);
        // line 92
        echo "
";
        // line 93
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 113
        echo "
";
        // line 114
        $this->displayBlock('date_widget', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('time_widget', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 175
        echo "
";
        // line 176
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 197
        echo "
";
        // line 198
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 208
        echo "
";
        // line 209
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 219
        echo "
";
        // line 221
        echo "
";
        // line 222
        $this->displayBlock('form_label', $context, $blocks);
        // line 226
        echo "
";
        // line 227
        $this->displayBlock('choice_label', $context, $blocks);
        // line 232
        echo "
";
        // line 233
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('radio_label', $context, $blocks);
        // line 240
        echo "
";
        // line 241
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 259
        echo "
";
        // line 261
        echo "
";
        // line 262
        $this->displayBlock('form_row', $context, $blocks);
        // line 284
        echo "
";
        // line 285
        $this->displayBlock('collection_row', $context, $blocks);
        // line 320
        echo "
";
        // line 321
        $this->displayBlock('button_row', $context, $blocks);
        // line 326
        echo "
";
        // line 327
        $this->displayBlock('choice_row', $context, $blocks);
        // line 331
        echo "
";
        // line 332
        $this->displayBlock('date_row', $context, $blocks);
        // line 336
        echo "
";
        // line 337
        $this->displayBlock('time_row', $context, $blocks);
        // line 341
        echo "
";
        // line 342
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 346
        echo "
";
        // line 347
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 353
        echo "
";
        // line 354
        $this->displayBlock('radio_row', $context, $blocks);
        // line 360
        echo "
";
        // line 362
        $this->displayBlock('form_errors', $context, $blocks);
        // line 380
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 393
        $this->displayBlock('empty_collection', $context, $blocks);
        // line 398
        echo "
";
        // line 399
        $this->displayBlock('vich_file_row', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('vich_file_widget', $context, $blocks);
        // line 425
        echo "
";
        // line 426
        $this->displayBlock('vich_image_row', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('vich_image_widget', $context, $blocks);
        // line 453
        echo "
";
        // line 454
        $this->displayBlock('easyadmin_rest', $context, $blocks);
        // line 466
        echo "
";
        // line 467
        $this->displayBlock('item_actions', $context, $blocks);
        // line 494
        echo "
";
        // line 496
        $this->displayBlock('easyadmin_widget', $context, $blocks);
        // line 535
        echo "
";
        // line 536
        $this->displayBlock('easyadmin_widget_groups', $context, $blocks);
        // line 582
        echo "
";
        // line 584
        $this->displayBlock('easyadmin_autocomplete_widget', $context, $blocks);
        // line 594
        echo "
";
        // line 595
        $this->displayBlock('easyadmin_autocomplete_inner_label', $context, $blocks);
        // line 599
        echo "
";
        // line 601
        $this->displayBlock('easyadmin_divider_row', $context, $blocks);
        // line 606
        echo "
";
        // line 608
        $this->displayBlock('easyadmin_section_row', $context, $blocks);
    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        // line 4
        if (("easyadmin" == twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)))) {
            // line 5
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_join_filter(array(0 => (((((            // line 7
(isset($context["_easyadmin_form_type"]) || array_key_exists("_easyadmin_form_type", $context))) ? (_twig_default_filter(($context["_easyadmin_form_type"] ?? null), "")) : ("")) == "horizontal")) ? ("form-horizontal") : ("form-vertical")), 1 => ((twig_get_attribute($this->env, $this->source,             // line 8
($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")), 2 => (twig_get_attribute($this->env, $this->source,             // line 9
($context["easyadmin"] ?? null), "view", array()) . "-form")), " "), "data-view" => twig_get_attribute($this->env, $this->source,             // line 11
($context["easyadmin"] ?? null), "view", array()), "data-entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 12
($context["easyadmin"] ?? null), "entity", array()), "name", array()), "data-entity-id" => twig_get_attribute($this->env, $this->source,             // line 13
($context["value"] ?? null), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array()), "errors", array())) > 0)) {
            // line 18
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
            echo "
    ";
        }
        // line 21
        $this->displayParentBlock("form_start", $context, $blocks);
        // line 23
        echo "<input type=\"hidden\" name=\"referer\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "html", null, true);
        echo "\"/>";
    }

    // line 28
    public function block_form_widget($context, array $blocks = array())
    {
        // line 29
        $this->displayParentBlock("form_widget", $context, $blocks);
        // line 31
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 32
            echo "        ";
            ob_start();
            // line 33
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 36
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            var hasCountAttr = parentDiv.data('count');

            if (hasCountAttr === undefined) {
                var numItems = parentDiv.children('div.form-group').length;
                parentDiv.data('count', ++numItems)
            }

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
                \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 53
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 55
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 63
    public function block_form_widget_simple($context, array $blocks = array())
    {
        // line 64
        if (( !(isset($context["type"]) || array_key_exists("type", $context)) || !twig_in_filter(($context["type"] ?? null), array(0 => "file", 1 => "hidden")))) {
            // line 65
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 67
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
    }

    // line 70
    public function block_textarea_widget($context, array $blocks = array())
    {
        // line 71
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 72
        $this->displayParentBlock("textarea_widget", $context, $blocks);
    }

    // line 75
    public function block_button_widget($context, array $blocks = array())
    {
        // line 76
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 77
        $this->displayParentBlock("button_widget", $context, $blocks);
    }

    // line 80
    public function block_money_widget($context, array $blocks = array())
    {
        // line 81
        echo "<div class=\"input-group\">
        ";
        // line 82
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? null), 0, 2));
        // line 83
        echo "        ";
        if ( !($context["prepend"] ?? null)) {
            // line 84
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 86
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 87
        if (($context["prepend"] ?? null)) {
            // line 88
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? null), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 90
        echo "    </div>";
    }

    // line 93
    public function block_percent_widget($context, array $blocks = array())
    {
        // line 94
        echo "<div class=\"input-group\">";
        // line 95
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 96
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
    }

    // line 100
    public function block_datetime_widget($context, array $blocks = array())
    {
        // line 101
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 102
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 104
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 105
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 106
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'errors');
            // line 107
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'errors');
            // line 108
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date", array()), 'widget', array("datetime" => true));
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "time", array()), 'widget', array("datetime" => true));
            // line 110
            echo "</div>";
        }
    }

    // line 114
    public function block_date_widget($context, array $blocks = array())
    {
        // line 115
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 116
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 118
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 119
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 120
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 122
            echo twig_replace_filter(($context["date_pattern"] ?? null), array("{{ year }}" =>             // line 123
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "year", array()), 'widget'), "{{ month }}" =>             // line 124
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "month", array()), 'widget'), "{{ day }}" =>             // line 125
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "day", array()), 'widget')));
            // line 127
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) ||  !($context["datetime"] ?? null))) {
                // line 128
                echo "</div>";
            }
        }
    }

    // line 133
    public function block_time_widget($context, array $blocks = array())
    {
        // line 134
        if ((($context["widget"] ?? null) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 138
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 139
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 141
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? null)) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "second", array()), 'widget');
            }
            // line 142
            echo "        ";
            if (( !(isset($context["datetime"]) || array_key_exists("datetime", $context)) || (false == ($context["datetime"] ?? null)))) {
                // line 143
                echo "</div>";
            }
        }
    }

    // line 148
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        // line 149
        $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 150
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        // line 151
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array(), "any", false, true), "vars", array(), "any", false, true), "allow_delete", array()), false)) : (false))) {
            // line 152
            echo "        ";
            ob_start();
            // line 153
            echo "            \$(function() {
            if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

            var containerDiv = \$('#";
            // line 156
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "').parents('.form-group:first');
            var parentDiv = containerDiv.parents('[data-prototype]:first');
            containerDiv.remove();
            parentDiv.trigger('easyadmin.collection.item-deleted');

            if (0 == parentDiv.children().length && 'undefined' !== parentDiv.attr('data-empty-collection')) {
            \$(parentDiv.attr('data-empty-collection')).insertBefore(parentDiv);
            }
            });
        ";
            $context["remove_item_javascript"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 166
            echo "
        <div class=\"text-right field-collection-item-action\">
            <a href=\"#\" onclick=\"";
            // line 168
            echo ($context["remove_item_javascript"] ?? null);
            echo "\" class=\"text-danger\">
                <i class=\"fa fa-remove\"></i>
                ";
            // line 170
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.remove_item", array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 176
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        // line 177
        if (twig_in_filter("-inline", ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 178
            echo "<div class=\"control-group\">";
            // line 179
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 180
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 181
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 182
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</div>";
        } else {
            // line 187
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 189
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => ((twig_get_attribute($this->env, $this->source,                 // line 190
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 191
($context["choice_translation_domain"] ?? null)));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "</div>";
        }
    }

    // line 198
    public function block_checkbox_widget($context, array $blocks = array())
    {
        // line 199
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 200
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? null))) {
            // line 201
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 203
            echo "<div class=\"checkbox\">";
            // line 204
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 205
            echo "</div>";
        }
    }

    // line 209
    public function block_radio_widget($context, array $blocks = array())
    {
        // line 210
        $context["parent_label_class"] = (((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) ? (_twig_default_filter(($context["parent_label_class"] ?? null), ((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : (((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 211
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? null))) {
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 214
            echo "<div class=\"radio\">";
            // line 215
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 216
            echo "</div>";
        }
    }

    // line 222
    public function block_form_label($context, array $blocks = array())
    {
        // line 223
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 224
        $this->displayParentBlock("form_label", $context, $blocks);
    }

    // line 227
    public function block_choice_label($context, array $blocks = array())
    {
        // line 229
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(twig_replace_filter(((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        // line 242
        echo "    ";
        // line 243
        echo "    ";
        if ((isset($context["widget"]) || array_key_exists("widget", $context))) {
            // line 244
            echo "        ";
            if (($context["required"] ?? null)) {
                // line 245
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
                // line 246
                echo "        ";
            }
            // line 247
            echo "        ";
            if ((isset($context["parent_label_class"]) || array_key_exists("parent_label_class", $context))) {
                // line 248
                echo "            ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? null), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? null)))));
                // line 249
                echo "        ";
            }
            // line 250
            echo "        ";
            if (( !(($context["label"] ?? null) === false) && twig_test_empty(($context["label"] ?? null)))) {
                // line 251
                echo "            ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? null));
                // line 252
                echo "        ";
            }
            // line 253
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? null));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 254
            echo ($context["widget"] ?? null);
            // line 255
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? null) === false)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["label"] ?? null), array(), ((($context["translation_domain"] ?? null)) ? (($context["translation_domain"] ?? null)) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array()))))) : ("")), "html", null, true);
            // line 256
            echo "</label>
    ";
        }
    }

    // line 262
    public function block_form_row($context, array $blocks = array())
    {
        // line 263
        $context["_field_type"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "fieldType", array()), "default")) : ("default"));
        // line 264
        echo "    <div class=\"form-group ";
        if ((( !($context["compound"] ?? null) || (((isset($context["force_error"]) || array_key_exists("force_error", $context))) ? (_twig_default_filter(($context["force_error"] ?? null), false)) : (false))) &&  !($context["valid"] ?? null))) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 265
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'label');
        // line 266
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 268
        if ((twig_in_filter(($context["_field_type"] ?? null), array(0 => "datetime", 1 => "datetime_immutable", 2 => "date", 3 => "date_immutable", 4 => "time", 5 => "time_immutable", 6 => "birthday")) && ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "nullable", array()), false)) : (false)))) {
            // line 269
            echo "            <div class=\"nullable-control\">
                <label>
                    <input type=\"checkbox\" ";
            // line 271
            if ((null === ($context["data"] ?? null))) {
                echo "checked=\"checked\"";
            }
            echo ">
                    ";
            // line 272
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label.nullable_field", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                </label>
            </div>
        ";
        }
        // line 277
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 279
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), "")) : ("")) != "")) {
            // line 280
            echo "            <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array()), "help", array()), array(), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array()));
            echo "</span>
        ";
        }
        // line 282
        echo "    </div>";
    }

    // line 285
    public function block_collection_row($context, array $blocks = array())
    {
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "

    ";
        // line 288
        if ((((isset($context["allow_add"]) || array_key_exists("allow_add", $context))) ? (_twig_default_filter(($context["allow_add"] ?? null), false)) : (false))) {
            // line 289
            echo "        ";
            ob_start();
            // line 290
            echo "            \$(function() {
                if (event.preventDefault) event.preventDefault(); else event.returnValue = false;

                var collection = \$('#";
            // line 293
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "');
                // Use a counter to avoid having the same index more than once
                var numItems = collection.data('count') || collection.children('div.form-group').length;

                collection.prev('.collection-empty').remove();

                var newItem = collection.attr('data-prototype')
                    .replace(/\\>__name__label__\\</g, '>' + numItems + '<')
                    .replace(/_";
            // line 301
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "___name__/g, '_";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "_' + numItems)
                    .replace(/";
            // line 302
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\\]\\[__name__\\]/g, '";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "][' + numItems + ']')
                ;

                // Increment the counter and store it in the collection
                collection.data('count', ++numItems);

                collection.append(newItem).trigger('easyadmin.collection.item-added');
            });
        ";
            $context["js_add_item"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 311
            echo "
        <div class=\"text-right field-collection-action\">
            <a href=\"#\" onclick=\"";
            // line 313
            echo ($context["js_add_item"] ?? null);
            echo "\" class=\"text-primary\">
                <i class=\"fa fa-plus-square\"></i>
                ";
            // line 315
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((((twig_length_filter($this->env, ($context["form"] ?? null)) == 0)) ? ("action.add_new_item") : ("action.add_another_item")), array(), "EasyAdminBundle"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
    }

    // line 321
    public function block_button_row($context, array $blocks = array())
    {
        // line 322
        echo "<div class=\"form-group field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">";
        // line 323
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 324
        echo "</div>";
    }

    // line 327
    public function block_choice_row($context, array $blocks = array())
    {
        // line 328
        $context["force_error"] = true;
        // line 329
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 332
    public function block_date_row($context, array $blocks = array())
    {
        // line 333
        $context["force_error"] = true;
        // line 334
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 337
    public function block_time_row($context, array $blocks = array())
    {
        // line 338
        $context["force_error"] = true;
        // line 339
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 342
    public function block_datetime_row($context, array $blocks = array())
    {
        // line 343
        $context["force_error"] = true;
        // line 344
        $this->displayBlock("form_row", $context, $blocks);
    }

    // line 347
    public function block_checkbox_row($context, array $blocks = array())
    {
        // line 348
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 349
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 350
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 351
        echo "</div>";
    }

    // line 354
    public function block_radio_row($context, array $blocks = array())
    {
        // line 355
        echo "<div class=\"form-group ";
        if ( !($context["valid"] ?? null)) {
            echo "has-error";
        }
        echo " field-";
        echo twig_escape_filter($this->env, twig_first($this->env, twig_slice($this->env, ($context["block_prefixes"] ?? null),  -2)), "html", null, true);
        echo "\">";
        // line 356
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        // line 357
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        // line 358
        echo "</div>";
    }

    // line 362
    public function block_form_errors($context, array $blocks = array())
    {
        // line 363
        echo "    ";
        $context["error_count"] = twig_length_filter($this->env, ($context["errors"] ?? null));
        // line 364
        echo "    ";
        if ((($context["error_count"] ?? null) >= 1)) {
            // line 365
            echo "        <div class=\"error-block\">
            <span class=\"label label-danger\">";
            // line 366
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("errors", ($context["error_count"] ?? null), array(), "EasyAdminBundle"), "html", null, true);
            echo "</span>
            ";
            // line 367
            if ((($context["error_count"] ?? null) == 1)) {
                // line 368
                echo "                ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["errors"] ?? null)), "message", array()), "html", null, true);
                echo "
            ";
            } else {
                // line 370
                echo "                <ul>
                    ";
                // line 371
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 372
                    echo "                        <li>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", array()), "html", null, true);
                    echo "</li>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 374
                echo "                </ul>
            ";
            }
            // line 376
            echo "        </div>
    ";
        }
    }

    // line 380
    public function block_form_widget_compound($context, array $blocks = array())
    {
        // line 383
        echo "    ";
        if ((twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null)))) {
            // line 384
            echo "        ";
            $this->displayBlock("empty_collection", $context, $blocks);
            echo "
    ";
        }
        // line 386
        echo "    ";
        if (((twig_test_iterable(($context["value"] ?? null)) && twig_test_empty(($context["value"] ?? null))) || twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", array(), "any", false, true), "prototype", array(), "any", true, true))) {
            // line 387
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? null), array("data-empty-collection" =>             $this->renderBlock("empty_collection", $context, $blocks)));
            // line 388
            echo "    ";
        }
        // line 389
        echo "
    ";
        // line 390
        $this->displayParentBlock("form_widget_compound", $context, $blocks);
    }

    // line 393
    public function block_empty_collection($context, array $blocks = array())
    {
        // line 394
        echo "    <div class=\"empty collection-empty\">
        ";
        // line 395
        echo twig_include($this->env, $context, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "templates", array()), "label_empty", array()));
        echo "
    </div>
";
    }

    // line 399
    public function block_vich_file_row($context, array $blocks = array())
    {
        // line 400
        echo "    ";
        $context["force_error"] = true;
        // line 401
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 404
    public function block_vich_file_widget($context, array $blocks = array())
    {
        // line 405
        ob_start();
        // line 406
        echo "    <div class=\"easyadmin-vich-file\">
        ";
        // line 407
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 408
            echo "            ";
            $context["download_title"] = ((twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) ? (twig_last($this->env, twig_split_filter($this->env, ($context["download_uri"] ?? null), "/"))) : ($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("download", array(), "VichUploaderBundle")));
            // line 409
            echo "            <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["download_title"] ?? null), "html", null, true);
            echo "</a>
        ";
        }
        // line 411
        echo "
        <div class=\"row\">
            ";
        // line 413
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 414
            echo "            <div class=\"col-sm-3 col-md-2\">
                ";
            // line 415
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
            </div>
            ";
        }
        // line 418
        echo "            <div class=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array(), "any", true, true)) ? ("col-sm-9 col-md-10") : ("col-sm-12"));
        echo "\">
                ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'widget');
        echo "
            </div>
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 426
    public function block_vich_image_row($context, array $blocks = array())
    {
        // line 427
        echo "    ";
        $context["force_error"] = true;
        // line 428
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        echo "
";
    }

    // line 431
    public function block_vich_image_widget($context, array $blocks = array())
    {
        // line 432
        ob_start();
        // line 433
        echo "    <div class=\"easyadmin-vich-image\">
        ";
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "file", array()), 'widget');
        echo "
        ";
        // line 435
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array(), "any", true, true)) {
            // line 436
            echo "            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete", array()), 'row', array("label" => "action.delete"));
            echo "
        ";
        }
        // line 438
        echo "
        ";
        // line 439
        if ( !twig_test_empty((((isset($context["download_uri"]) || array_key_exists("download_uri", $context))) ? (_twig_default_filter(($context["download_uri"] ?? null), "")) : ("")))) {
            // line 440
            echo "            ";
            $context["_lightbox_id"] = ("easyadmin-lightbox-" . ($context["id"] ?? null));
            // line 441
            echo "
            <a href=\"#\" class=\"easyadmin-thumbnail\" data-featherlight=\"#";
            // line 442
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
            echo "\" data-featherlight-close-on-click=\"anywhere\">
                <img src=\"";
            // line 443
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
            </a>

            <div id=\"";
            // line 446
            echo twig_escape_filter($this->env, ($context["_lightbox_id"] ?? null), "html", null, true);
            echo "\" class=\"easyadmin-lightbox\">
                <img src=\"";
            // line 447
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(($context["download_uri"] ?? null)), "html", null, true);
            echo "\">
            </div>
        ";
        }
        // line 450
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 454
    public function block_easyadmin_rest($context, array $blocks = array())
    {
        // line 455
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        // line 456
        echo "<div class=\"row\">
        <div class=\"col-xs-12 form-actions\">
            <div class=\"form-group\">
                <div id=\"form-actions-row\">";
        // line 460
        $this->displayBlock("item_actions", $context, $blocks);
        // line 461
        echo "</div>
            </div>
        </div>
    </div>
";
    }

    // line 467
    public function block_item_actions($context, array $blocks = array())
    {
        // line 468
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 469
        echo "    ";
        $context["_trans_parameters"] = array("%entity_name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "name", array())), "%entity_label%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "label", array())));
        // line 470
        echo "
    ";
        // line 472
        echo "    <button type=\"submit\" class=\"btn btn-primary action-save\">
        <i class=\"fa fa-save\"></i> ";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("action.save", ($context["_trans_parameters"] ?? null), ($context["_translation_domain"] ?? null)), "html", null, true);
        echo "
    </button>

    ";
        // line 476
        $context["_entity_actions"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", array()) == "new")) ? ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("new", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 477
($context["easyadmin"] ?? null), "entity", array()), "name", array()))) : ($this->extensions['EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension']->getActionsForItem("edit", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 478
($context["easyadmin"] ?? null), "entity", array()), "name", array()))));
        // line 479
        echo "
    ";
        // line 480
        $context["_entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "view", array()) == "new")) ? (null) : (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 482
($context["easyadmin"] ?? null), "item", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "primary_key_field_name", array()))));
        // line 483
        echo "
    ";
        // line 484
        $context["_request_parameters"] = array("entity" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "name", array()), "referer" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 485
        echo "
    ";
        // line 486
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 487
($context["_entity_actions"] ?? null), "request_parameters" =>         // line 488
($context["_request_parameters"] ?? null), "translation_domain" =>         // line 489
($context["_translation_domain"] ?? null), "trans_parameters" =>         // line 490
($context["_trans_parameters"] ?? null), "item_id" =>         // line 491
($context["_entity_id"] ?? null)), false);
        // line 492
        echo "
";
    }

    // line 496
    public function block_easyadmin_widget($context, array $blocks = array())
    {
        // line 497
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 498
        echo "    <div class=\"row\">
        ";
        // line 499
        if ((twig_length_filter($this->env, ($context["easyadmin_form_tabs"] ?? null)) > 0)) {
            // line 500
            echo "            <div class=\"col-xs-12\">
                <div class=\"nav-tabs-custom\">
                    <ul class=\"nav nav-tabs\">
                        ";
            // line 503
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 504
                echo "                            <li class=\"";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <a href=\"#";
                // line 505
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["tab_config"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5["id"] ?? null) : null), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["tab_config"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a["id"] ?? null) : null), "html", null, true);
                echo "-tab\" data-toggle=\"tab\">
                                    ";
                // line 506
                if (((twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array()), false)) : (false))) {
                    // line 507
                    echo "                                        <i class=\"fa fa-";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "icon", array()), "html", null, true);
                    echo "\"></i>
                                    ";
                }
                // line 509
                echo "                                    ";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans((($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = $context["tab_config"]) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57["label"] ?? null) : null), array(), ($context["_translation_domain"] ?? null)), "html", null, true);
                echo "
                                    ";
                // line 510
                if ((twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()) > 0)) {
                    // line 511
                    echo "                                        <span class=\"label label-danger\" title=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->transchoice("form.tab.error_badge_title", twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()), array(), "EasyAdminBundle"), "html", null, true);
                    echo "\">
                                            ";
                    // line 512
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["tab_config"], "errors", array()), "html", null, true);
                    echo "
                                        </span>
                                    ";
                }
                // line 515
                echo "                                </a>
                            </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 518
            echo "                    </ul>
                    <div class=\"tab-content\">
                        ";
            // line 520
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_tabs"] ?? null));
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
            foreach ($context['_seq'] as $context["tab_name"] => $context["tab_config"]) {
                // line 521
                echo "                            <div id=\"";
                echo twig_escape_filter($this->env, (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = $context["tab_config"]) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9["id"] ?? null) : null), "html", null, true);
                echo "\" class=\"tab-pane ";
                if (twig_get_attribute($this->env, $this->source, $context["tab_config"], "active", array())) {
                    echo "active";
                }
                echo "\">
                                <div class=\"row\">
                                    ";
                // line 523
                $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['tab_name'], $context['tab_config'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 527
            echo "                    </div>
                </div>
            </div>
        ";
        } else {
            // line 531
            echo "            ";
            $this->displayBlock("easyadmin_widget_groups", $context, $blocks);
            echo "
        ";
        }
        // line 533
        echo "    </div>
";
    }

    // line 536
    public function block_easyadmin_widget_groups($context, array $blocks = array())
    {
        // line 537
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["easyadmin_form_groups"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["group_name"] => $context["group_config"]) {
            if (( !twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", array()) || (twig_get_attribute($this->env, $this->source, $context["group_config"], "form_tab", array()) == ($context["tab_name"] ?? null)))) {
                // line 538
                echo "        <div class=\"field-group col-xs-12 ";
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "css_class", array()), "")) : ("")), "html", null, true);
                echo "\">
            <div class=\"box box-default\">
                ";
                // line 540
                if (((((twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) || ((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array()), false)) : (false)))) {
                    // line 541
                    echo "                    <div class=\"box-header with-border\">
                        <h3 class=\"box-title\">
                            ";
                    // line 543
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), false)) : (false))) {
                        // line 544
                        echo "                                <i class=\"fa fa-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group_config"], "icon", array()), "html", null, true);
                        echo "\"></i>
                            ";
                    }
                    // line 546
                    echo "                            ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "label", array()), array(), ($context["_translation_domain"] ?? null));
                    echo "
                        </h3>
                        ";
                    // line 548
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array()), false)) : (false))) {
                        // line 549
                        echo "                            <a class=\"pull-right\" role=\"button\" data-toggle=\"collapse\" aria-expanded=\"";
                        echo ((((twig_get_attribute($this->env, $this->source, $context["group_config"], "expanded", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "expanded", array()), false)) : (false))) ? ("true") : ("false"));
                        echo "\" href=\"#box-body-";
                        echo twig_escape_filter($this->env, $context["group_name"], "html", null, true);
                        echo "\">
                                <i class=\"fa fa-plus-square-o\"></i>
                                <i class=\"fa fa-minus-square-o\"></i>
                            </a>
                        ";
                    }
                    // line 554
                    echo "                    </div>
                ";
                }
                // line 556
                echo "
                <div class=\"box-body ";
                // line 557
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "collapsible", array()), false)) : (false))) {
                    echo "collapse ";
                    if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "expanded", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "expanded", array()), false)) : (false))) {
                        echo "in";
                    }
                }
                echo "\" id=\"box-body-";
                echo twig_escape_filter($this->env, $context["group_name"], "html", null, true);
                echo "\">
                    ";
                // line 558
                if (((twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array()), false)) : (false))) {
                    // line 559
                    echo "                        <p class=\"help-block\">";
                    echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["group_config"], "help", array()), array(), ($context["_translation_domain"] ?? null)), "html", null, true));
                    echo "</p>
                    ";
                }
                // line 561
                echo "
                    <div class=\"row\">
                        ";
                // line 563
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                    if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "block_prefixes", array())) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_group", array()) == $context["group_name"]))) {
                        // line 564
                        echo "                            ";
                        if (( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? null)))) {
                            // line 565
                            echo "                                <div class=\"col-xs-12 ";
                            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                            echo "\">
                                    ";
                            // line 566
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                            echo "
                                </div>
                            ";
                        }
                        // line 569
                        echo "                        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 570
                echo "                    </div>
                </div>
            </div>
        </div>
    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 575
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                if ((!twig_in_filter("hidden", twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "block_prefixes", array())) && ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array()), "easyadmin", array()), "form_tab", array()) == ($context["tab_name"] ?? null))))) {
                    // line 576
                    echo "            <div class=\"col-xs-12 ";
                    echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["field"], "vars", array(), "any", false, true), "easyadmin", array(), "any", false, true), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
                    echo "\">
                ";
                    // line 577
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'row');
                    echo "
            </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 580
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_name'], $context['group_config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 584
    public function block_easyadmin_autocomplete_widget($context, array $blocks = array())
    {
        // line 585
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "autocomplete", array()), 'widget', array("attr" => twig_array_merge(        // line 586
($context["attr"] ?? null), array("data-easyadmin-autocomplete-url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin", array("action" => "autocomplete", "entity" =>         // line 589
($context["autocomplete_entity_name"] ?? null)))))));
        // line 592
        echo "
";
    }

    // line 595
    public function block_easyadmin_autocomplete_inner_label($context, array $blocks = array())
    {
        // line 596
        echo "    ";
        $context["name"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "parent", array()), "vars", array()), "name", array());
        // line 597
        $this->displayBlock("form_label", $context, $blocks);
    }

    // line 601
    public function block_easyadmin_divider_row($context, array $blocks = array())
    {
        // line 602
        echo "    <div class=\"field-divider\">
        <hr>
    </div>
";
    }

    // line 608
    public function block_easyadmin_section_row($context, array $blocks = array())
    {
        // line 609
        echo "    ";
        $context["_translation_domain"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "entity", array()), "translation_domain", array());
        // line 610
        echo "    <div class=\"field-section ";
        echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "css_class", array()), "")) : ("")), "html", null, true);
        echo "\">
        ";
        // line 611
        if ((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), false)) : (false)) || ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false)))) {
            // line 612
            echo "            <h2>
                ";
            // line 613
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "icon", array()), false)) : (false))) {
                echo "<i class=\"fa fa-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array()), "icon", array()), "html", null, true);
                echo "\"></i>";
            }
            // line 614
            echo "                ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "label", array()), "")) : ("")), array(), ($context["_translation_domain"] ?? null));
            echo "
            </h2>
        ";
        }
        // line 617
        echo "
        ";
        // line 618
        if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array(), "any", false, true), "help", array()), false)) : (false))) {
            // line 619
            echo "            <p class=\"help-block\">";
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["easyadmin"] ?? null), "field", array()), "help", array()), array(), ($context["_translation_domain"] ?? null)), "html", null, true));
            echo "</p>
        ";
        }
        // line 621
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "@EasyAdmin/form/bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1625 => 621,  1619 => 619,  1617 => 618,  1614 => 617,  1607 => 614,  1601 => 613,  1598 => 612,  1596 => 611,  1591 => 610,  1588 => 609,  1585 => 608,  1578 => 602,  1575 => 601,  1571 => 597,  1568 => 596,  1565 => 595,  1560 => 592,  1558 => 589,  1557 => 586,  1555 => 585,  1552 => 584,  1544 => 580,  1534 => 577,  1529 => 576,  1523 => 575,  1513 => 570,  1506 => 569,  1500 => 566,  1495 => 565,  1492 => 564,  1487 => 563,  1483 => 561,  1477 => 559,  1475 => 558,  1464 => 557,  1461 => 556,  1457 => 554,  1446 => 549,  1444 => 548,  1438 => 546,  1432 => 544,  1430 => 543,  1426 => 541,  1424 => 540,  1418 => 538,  1411 => 537,  1408 => 536,  1403 => 533,  1397 => 531,  1391 => 527,  1373 => 523,  1363 => 521,  1346 => 520,  1342 => 518,  1334 => 515,  1328 => 512,  1323 => 511,  1321 => 510,  1316 => 509,  1310 => 507,  1308 => 506,  1302 => 505,  1295 => 504,  1291 => 503,  1286 => 500,  1284 => 499,  1281 => 498,  1278 => 497,  1275 => 496,  1270 => 492,  1268 => 491,  1267 => 490,  1266 => 489,  1265 => 488,  1264 => 487,  1263 => 486,  1260 => 485,  1258 => 484,  1255 => 483,  1253 => 482,  1252 => 480,  1249 => 479,  1247 => 478,  1246 => 477,  1245 => 476,  1239 => 473,  1236 => 472,  1233 => 470,  1230 => 469,  1227 => 468,  1224 => 467,  1216 => 461,  1214 => 460,  1209 => 456,  1207 => 455,  1204 => 454,  1198 => 450,  1192 => 447,  1188 => 446,  1182 => 443,  1178 => 442,  1175 => 441,  1172 => 440,  1170 => 439,  1167 => 438,  1161 => 436,  1159 => 435,  1155 => 434,  1152 => 433,  1150 => 432,  1147 => 431,  1140 => 428,  1137 => 427,  1134 => 426,  1124 => 419,  1119 => 418,  1113 => 415,  1110 => 414,  1108 => 413,  1104 => 411,  1096 => 409,  1093 => 408,  1091 => 407,  1088 => 406,  1086 => 405,  1083 => 404,  1076 => 401,  1073 => 400,  1070 => 399,  1063 => 395,  1060 => 394,  1057 => 393,  1053 => 390,  1050 => 389,  1047 => 388,  1044 => 387,  1041 => 386,  1035 => 384,  1032 => 383,  1029 => 380,  1023 => 376,  1019 => 374,  1010 => 372,  1006 => 371,  1003 => 370,  997 => 368,  995 => 367,  991 => 366,  988 => 365,  985 => 364,  982 => 363,  979 => 362,  975 => 358,  973 => 357,  971 => 356,  963 => 355,  960 => 354,  956 => 351,  954 => 350,  952 => 349,  944 => 348,  941 => 347,  937 => 344,  935 => 343,  932 => 342,  928 => 339,  926 => 338,  923 => 337,  919 => 334,  917 => 333,  914 => 332,  910 => 329,  908 => 328,  905 => 327,  901 => 324,  899 => 323,  893 => 322,  890 => 321,  881 => 315,  876 => 313,  872 => 311,  858 => 302,  852 => 301,  841 => 293,  836 => 290,  833 => 289,  831 => 288,  825 => 286,  822 => 285,  818 => 282,  812 => 280,  810 => 279,  808 => 277,  801 => 272,  795 => 271,  791 => 269,  789 => 268,  787 => 266,  785 => 265,  777 => 264,  775 => 263,  772 => 262,  766 => 256,  764 => 255,  762 => 254,  747 => 253,  744 => 252,  741 => 251,  738 => 250,  735 => 249,  732 => 248,  729 => 247,  726 => 246,  723 => 245,  720 => 244,  717 => 243,  715 => 242,  712 => 241,  708 => 238,  705 => 237,  701 => 234,  698 => 233,  694 => 230,  692 => 229,  689 => 227,  685 => 224,  683 => 223,  680 => 222,  675 => 216,  673 => 215,  671 => 214,  668 => 212,  666 => 211,  664 => 210,  661 => 209,  656 => 205,  654 => 204,  652 => 203,  649 => 201,  647 => 200,  645 => 199,  642 => 198,  637 => 194,  631 => 191,  630 => 190,  629 => 189,  625 => 188,  621 => 187,  618 => 185,  612 => 182,  611 => 181,  610 => 180,  606 => 179,  604 => 178,  602 => 177,  599 => 176,  590 => 170,  585 => 168,  581 => 166,  568 => 156,  563 => 153,  560 => 152,  558 => 151,  556 => 150,  554 => 149,  551 => 148,  545 => 143,  542 => 142,  534 => 141,  529 => 139,  527 => 138,  525 => 137,  522 => 135,  520 => 134,  517 => 133,  511 => 128,  509 => 127,  507 => 125,  506 => 124,  505 => 123,  504 => 122,  499 => 120,  497 => 119,  495 => 118,  492 => 116,  490 => 115,  487 => 114,  482 => 110,  480 => 109,  478 => 108,  476 => 107,  474 => 106,  470 => 105,  468 => 104,  465 => 102,  463 => 101,  460 => 100,  455 => 96,  453 => 95,  451 => 94,  448 => 93,  444 => 90,  438 => 88,  436 => 87,  434 => 86,  428 => 84,  425 => 83,  423 => 82,  420 => 81,  417 => 80,  413 => 77,  411 => 76,  408 => 75,  404 => 72,  402 => 71,  399 => 70,  395 => 67,  392 => 65,  390 => 64,  387 => 63,  378 => 57,  373 => 55,  369 => 53,  349 => 36,  344 => 33,  341 => 32,  339 => 31,  337 => 29,  334 => 28,  328 => 23,  326 => 21,  320 => 18,  318 => 17,  315 => 16,  312 => 15,  310 => 13,  309 => 12,  308 => 11,  307 => 9,  306 => 8,  305 => 7,  303 => 5,  301 => 4,  298 => 3,  294 => 608,  291 => 606,  289 => 601,  286 => 599,  284 => 595,  281 => 594,  279 => 584,  276 => 582,  274 => 536,  271 => 535,  269 => 496,  266 => 494,  264 => 467,  261 => 466,  259 => 454,  256 => 453,  254 => 431,  251 => 430,  249 => 426,  246 => 425,  244 => 404,  241 => 403,  239 => 399,  236 => 398,  234 => 393,  232 => 380,  230 => 362,  227 => 360,  225 => 354,  222 => 353,  220 => 347,  217 => 346,  215 => 342,  212 => 341,  210 => 337,  207 => 336,  205 => 332,  202 => 331,  200 => 327,  197 => 326,  195 => 321,  192 => 320,  190 => 285,  187 => 284,  185 => 262,  182 => 261,  179 => 259,  177 => 241,  174 => 240,  172 => 237,  169 => 236,  167 => 233,  164 => 232,  162 => 227,  159 => 226,  157 => 222,  154 => 221,  151 => 219,  149 => 209,  146 => 208,  144 => 198,  141 => 197,  139 => 176,  136 => 175,  134 => 148,  131 => 147,  129 => 133,  126 => 132,  124 => 114,  121 => 113,  119 => 100,  116 => 99,  114 => 93,  111 => 92,  109 => 80,  106 => 79,  104 => 75,  101 => 74,  99 => 70,  96 => 69,  94 => 63,  91 => 62,  89 => 28,  86 => 27,  83 => 25,  81 => 3,  78 => 2,  18 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EasyAdmin/form/bootstrap_3_layout.html.twig", "/var/www/html/HighCourt/vendor/easycorp/easyadmin-bundle/src/Resources/views/form/bootstrap_3_layout.html.twig");
    }
}

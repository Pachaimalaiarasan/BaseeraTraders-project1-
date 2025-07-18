<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* catalog/view/template/account/register.twig */
class __TwigTemplate_2545dc59b47d14051bd3960592a5efb5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">
    ";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <p>";
        // line 12
        echo ($context["text_account_already"] ?? null);
        echo "</p>
      <form id=\"form-register\" action=\"";
        // line 13
        echo ($context["register"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset id=\"account\">
          <legend>";
        // line 15
        echo ($context["text_your_details"] ?? null);
        echo "</legend>
          ";
        // line 16
        if ((twig_length_filter($this->env, ($context["customer_groups"] ?? null)) > 1)) {
            // line 17
            echo "            <div class=\"row mb-3 required\">
              <label class=\"col-sm-2 col-form-label\">";
            // line 18
            echo ($context["entry_customer_group"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <!-- <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                  ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 22
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22);
                echo "\"";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 22) == ($context["customer_group_id"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 22);
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                </select> -->

                <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\">
                  ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 28
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 28);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 28) == ($context["customer_group_id"] ?? null))) {
                    echo "selected";
                }
                echo ">
                      ";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 29);
                echo "
                    </option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "                </select>
                
              </div>
            </div>
          ";
        }
        // line 37
        echo "          <div class=\"row mb-3 required\">
            <label for=\"input-firstname\" class=\"col-sm-2 col-form-label\">";
        // line 38
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 40
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-lastname\" class=\"col-sm-2 col-form-label\">";
        // line 45
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 47
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-email\" class=\"col-sm-2 col-form-label\">";
        // line 52
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 54
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              <div id=\"error-email\" class=\"invalid-feedback\"></div>
            </div>
          </div>

          ";
        // line 59
        if (($context["config_telephone_display"] ?? null)) {
            // line 60
            echo "            <div class=\"row mb-3";
            if (($context["config_telephone_required"] ?? null)) {
                echo " required";
            }
            echo "\">
              <label for=\"input-telephone\" class=\"col-sm-2 col-form-label\">";
            // line 61
            echo ($context["entry_telephone"] ?? null);
            echo "</label>
              <div class=\"col-sm-10\">
                <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 63
            echo ($context["entry_telephone"] ?? null);
            echo "\" id=\"input-telephone\" class=\"form-control\"/>
                <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
        }
        // line 68
        echo "
          ";
        // line 69
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 70
            echo "
            ";
            // line 71
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 71) == "select")) {
                // line 72
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 72);
                echo "\">
                <label for=\"input-custom-field-";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 73);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 73);
                echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"custom_field[";
                // line 75
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "]\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 75);
                echo "\" class=\"form-select\">
                    <option value=\"\">";
                // line 76
                echo ($context["text_select"] ?? null);
                echo "</option>
                    ";
                // line 77
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 77));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 78
                    echo "                      <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 78);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 78);
                    echo "</option>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "                  </select>
                  <div id=\"error-custom-field-";
                // line 81
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 81);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 85
            echo "
            ";
            // line 86
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 86) == "radio")) {
                // line 87
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 87);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 88);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                echo "\">
                    ";
                // line 91
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 91));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 92
                    echo "                      <div class=\"form-check\">
                        <input type=\"radio\" name=\"custom_field[";
                    // line 93
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 93);
                    echo "]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 93);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 93);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 93);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 93);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 96
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 97
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 101
            echo "
            ";
            // line 102
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 102) == "checkbox")) {
                // line 103
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 104);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"input-custom-field-";
                // line 106
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                echo "\">
                    ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 108
                    echo "                      <div class=\"form-check\">
                        <input type=\"checkbox\" name=\"custom_field[";
                    // line 109
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                    echo "][]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                    echo "\" id=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                    echo "\" class=\"form-check-input\"/> <label for=\"input-custom-value-";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                    echo "\" class=\"form-check-label\">";
                    echo twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 109);
                    echo "</label>
                      </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                  </div>
                  <div id=\"error-custom-field-";
                // line 113
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 113);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 117
            echo "
            ";
            // line 118
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 118) == "text")) {
                // line 119
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                echo "\">
                <label for=\"input-custom-field-";
                // line 120
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 120);
                echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"custom_field[";
                // line 122
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 122);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                echo "\" class=\"form-control\"/>
                  <div id=\"error-custom-field-";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 127
            echo "
            ";
            // line 128
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 128) == "textarea")) {
                // line 129
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                echo "\">
                <label for=\"input-custom-field-";
                // line 130
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 130);
                echo "</label>
                <div class=\"col-sm-10\">
                  <textarea name=\"custom_field[";
                // line 132
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "]\" rows=\"5\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                echo "\" class=\"form-control\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 132);
                echo "</textarea>
                  <div id=\"error-custom-field-";
                // line 133
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 133);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 137
            echo "
            ";
            // line 138
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 138) == "file")) {
                // line 139
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                echo "\">
                <label class=\"col-sm-2 col-form-label\">";
                // line 140
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 140);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div>
                    <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 143
                echo ($context["upload"] ?? null);
                echo "\" data-oc-size-max=\"";
                echo ($context["config_file_max_size"] ?? null);
                echo "\" data-oc-size-error=\"";
                echo ($context["error_upload_size"] ?? null);
                echo "\" data-oc-target=\"#input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 143);
                echo "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                echo ($context["button_upload"] ?? null);
                echo "</button>
                    <input type=\"hidden\" name=\"custom_field[";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "]\" value=\"\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                echo "\"/>
                  </div>
                  <div id=\"error-custom-field-";
                // line 146
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 150
            echo "
            ";
            // line 151
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 151) == "date")) {
                // line 152
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 152);
                echo "\">
                <label for=\"input-custom-field-";
                // line 153
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 153);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 153);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 156
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 156);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                echo "\" class=\"form-control date\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 159
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 159);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 163
            echo "
            ";
            // line 164
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 164) == "time")) {
                // line 165
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                echo "\">
                <label for=\"input-custom-field-";
                // line 166
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 166);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 169
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 169);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                echo "\" class=\"form-control time\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 172
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 172);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 176
            echo "
            ";
            // line 177
            if ((twig_get_attribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 177) == "datetime")) {
                // line 178
                echo "              <div class=\"row mb-3 custom-field custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 178);
                echo "\">
                <label for=\"input-custom-field-";
                // line 179
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                echo "\" class=\"col-sm-2 col-form-label\">";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 179);
                echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"input-group\">
                    <input type=\"text\" name=\"custom_field[";
                // line 182
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 182);
                echo "\" placeholder=\"";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 182);
                echo "\" id=\"input-custom-field-";
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 182);
                echo "\" class=\"form-control datetime\"/>
                    <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
                  </div>
                  <div id=\"error-custom-field-";
                // line 185
                echo twig_get_attribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 185);
                echo "\" class=\"invalid-feedback\"></div>
                </div>
              </div>
            ";
            }
            // line 189
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 191
        echo "        </fieldset>

        <fieldset>
          <legend>";
        // line 194
        echo ($context["text_your_password"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-password\" class=\"col-sm-2 col-form-label\">";
        // line 196
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 198
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>";
        // line 205
        echo ($context["text_newsletter"] ?? null);
        echo "</legend>
          <div class=\"row mb-3\">
            <label class=\"col-sm-2 col-form-label\">";
        // line 207
        echo ($context["entry_newsletter"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"form-check form-switch form-switch-lg\">
                <input type=\"hidden\" name=\"newsletter\" value=\"0\"/> <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"input-newsletter\" class=\"form-check-input\"/>
              </div>
            </div>
          </div>
        </fieldset>
        ";
        // line 215
        echo ($context["captcha"] ?? null);
        echo "
        <div class=\"text-end\">
          ";
        // line 217
        if (($context["text_agree"] ?? null)) {
            // line 218
            echo "            <div class=\"form-check form-switch form-switch-lg form-check-reverse form-check-inline\">
              <label class=\"form-check-label\">";
            // line 219
            echo ($context["text_agree"] ?? null);
            echo "</label> <input type=\"checkbox\" name=\"agree\" value=\"1\" class=\"form-check-input\"/>
            </div>
          ";
        }
        // line 222
        echo "          <button type=\"submit\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</button>
        </div>
      </form>
      ";
        // line 225
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 227
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language=";
        // line 233
        echo ($context["language"] ?? null);
        echo "',
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
";
        // line 257
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  713 => 257,  686 => 233,  677 => 227,  672 => 225,  665 => 222,  659 => 219,  656 => 218,  654 => 217,  649 => 215,  638 => 207,  633 => 205,  623 => 198,  618 => 196,  613 => 194,  608 => 191,  601 => 189,  594 => 185,  582 => 182,  574 => 179,  569 => 178,  567 => 177,  564 => 176,  557 => 172,  545 => 169,  537 => 166,  532 => 165,  530 => 164,  527 => 163,  520 => 159,  508 => 156,  500 => 153,  495 => 152,  493 => 151,  490 => 150,  483 => 146,  476 => 144,  464 => 143,  458 => 140,  453 => 139,  451 => 138,  448 => 137,  441 => 133,  431 => 132,  424 => 130,  419 => 129,  417 => 128,  414 => 127,  407 => 123,  397 => 122,  390 => 120,  385 => 119,  383 => 118,  380 => 117,  373 => 113,  370 => 112,  353 => 109,  350 => 108,  346 => 107,  342 => 106,  337 => 104,  332 => 103,  330 => 102,  327 => 101,  320 => 97,  317 => 96,  300 => 93,  297 => 92,  293 => 91,  289 => 90,  284 => 88,  279 => 87,  277 => 86,  274 => 85,  267 => 81,  264 => 80,  253 => 78,  249 => 77,  245 => 76,  239 => 75,  232 => 73,  227 => 72,  225 => 71,  222 => 70,  218 => 69,  215 => 68,  207 => 63,  202 => 61,  195 => 60,  193 => 59,  185 => 54,  180 => 52,  172 => 47,  167 => 45,  159 => 40,  154 => 38,  151 => 37,  144 => 32,  135 => 29,  126 => 28,  122 => 27,  117 => 24,  102 => 22,  98 => 21,  92 => 18,  89 => 17,  87 => 16,  83 => 15,  78 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/register.twig", "C:\\xampp\\htdocs\\BaseeraTraders\\BaseeraTraders-project1-\\upload\\catalog\\view\\template\\account\\register.twig");
    }
}

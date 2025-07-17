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

/* catalog/view/template/product/category.twig */
class __TwigTemplate_f9d8c06001cbb6420e893a41eda26d40 extends Template
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
<div id=\"product-category\" class=\"container\">

  <ul class=\"breadcrumb\">
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 6
            echo "    <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 6);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 6);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "  </ul>
  <div class=\"row\">";
        // line 9
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 10
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 11
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 12
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 13
            echo "      <div class=\"row\">
        ";
            // line 14
            if (($context["thumb"] ?? null)) {
                // line 15
                echo "        <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\"
            class=\"img-thumbnail\" /></div>
        ";
            }
            // line 18
            echo "        ";
            if (($context["description"] ?? null)) {
                // line 19
                echo "        <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
        ";
            }
            // line 21
            echo "      </div>
      <hr />
      ";
        }
        // line 24
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 25
            echo "      <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
      ";
            // line 26
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                echo " <div class=\"row\">
        <div class=\"col-sm-3\">
          <ul>
            ";
                // line 29
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 30
                    echo "            <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 30);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 30);
                    echo "</a></li>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 32
                echo "          </ul>
        </div>
    </div>
    ";
            } else {
                // line 36
                echo "    <div class=\"row row-cols-sm-2 row-cols-lg-4\">
      ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 38
                    echo "      <div class=\"col\">
        <ul>
          ";
                    // line 40
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 41
                        echo "          <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 41);
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 41);
                        echo "</a></li>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 43
                    echo "        </ul>
      </div>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    </div>
    <br />
    ";
            }
            // line 49
            echo "    ";
        }
        // line 50
        echo "    ";
        if (($context["products"] ?? null)) {
            // line 51
            echo "    <div id=\"display-control\" class=\"row\">
      <div class=\"col-lg-3\">
        <div class=\"mb-3\">
          <a href=\"";
            // line 54
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-block\"><i
              class=\"fa-solid fa-arrow-right-arrow-left\"></i> <span class=\"d-none d-xl-inline\">";
            // line 55
            echo ($context["text_compare"] ?? null);
            // line 56
            echo "</span></a>
        </div>
      </div>
      <div class=\"col-lg-1 d-none d-lg-block\">
        <div class=\"btn-group\">
          <button type=\"button\" id=\"button-list\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\"
            title=\"";
            // line 62
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-list\"></i></button>
          <button type=\"button\" id=\"button-grid\" class=\"btn btn-light\" data-bs-toggle=\"tooltip\"
            title=\"";
            // line 64
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa-solid fa-table-cells\"></i></button>
        </div>
      </div>
      <div class=\"col-lg-4 offset-lg-1 col-6\">
        <div class=\"input-group mb-3\">
          <label for=\"input-sort\" class=\"input-group-text\">";
            // line 69
            echo ($context["text_sort"] ?? null);
            echo "</label> <select id=\"input-sort\"
            class=\"form-select\" onchange=\"location = this.value;\">
            ";
            // line 71
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 72
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", [], "any", false, false, false, 72);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", [], "any", false, false, false, 72) == twig_sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source,                 // line 73
$context["sorts"], "text", [], "any", false, false, false, 73);
                echo "</option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "          </select>
        </div>
      </div>
      <div class=\"col-lg-3 col-6\">
        <div class=\"input-group mb-3\">
          <label for=\"input-limit\" class=\"input-group-text\">";
            // line 80
            echo ($context["text_limit"] ?? null);
            echo "</label> <select id=\"input-limit\"
            class=\"form-select\" onchange=\"location = this.value;\">
            ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 83
                echo "            <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", [], "any", false, false, false, 83);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", [], "any", false, false, false, 83) == ($context["limit"] ?? null))) {
                    echo " selected";
                }
                echo ">";
                echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", [], "any", false, false, false, 83);
                echo "
            </option>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "          </select>
        </div>
      </div>
    </div>
    <div id=\"product-list\" class=\"row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4\">
      ";
            // line 91
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 92
                echo "      <div class=\"col mb-3\">";
                echo $context["product"];
                echo "</div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "    </div>
    <div class=\"row\">
      <div class=\"col-sm-6 text-start\">";
            // line 96
            echo ($context["pagination"] ?? null);
            echo "</div>
      <div class=\"col-sm-6 text-end\">";
            // line 97
            echo ($context["results"] ?? null);
            echo "</div>
    </div>
    ";
        }
        // line 100
        echo "    ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 101
            echo "    <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
    <div class=\"text-end\"><a href=\"";
            // line 102
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
    ";
        }
        // line 104
        echo "    ";
        echo ($context["content_bottom"] ?? null);
        echo "
  </div>
  ";
        // line 106
        echo ($context["column_right"] ?? null);
        echo "
</div>
</div>
";
        // line 109
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 109,  330 => 106,  324 => 104,  317 => 102,  312 => 101,  309 => 100,  303 => 97,  299 => 96,  295 => 94,  286 => 92,  282 => 91,  275 => 86,  259 => 83,  255 => 82,  250 => 80,  243 => 75,  235 => 73,  227 => 72,  223 => 71,  218 => 69,  210 => 64,  205 => 62,  197 => 56,  195 => 55,  191 => 54,  186 => 51,  183 => 50,  180 => 49,  175 => 46,  167 => 43,  156 => 41,  152 => 40,  148 => 38,  144 => 37,  141 => 36,  135 => 32,  124 => 30,  120 => 29,  114 => 26,  109 => 25,  106 => 24,  101 => 21,  95 => 19,  92 => 18,  81 => 15,  79 => 14,  76 => 13,  74 => 12,  70 => 11,  66 => 10,  62 => 9,  59 => 8,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/product/category.twig", "C:\\xampp\\htdocs\\BaseeraTraders\\BaseeraTraders-project1-\\upload\\catalog\\view\\template\\product\\category.twig");
    }
}

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

/* catalog/view/template/common/cart.twig */
class __TwigTemplate_ed73d8b96b031c87320550c0703c0de9 extends Template
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
        echo "<!-- ";
        echo ($context["text_items"] ?? null);
        echo " -->

<div class=\"dropdown d-grid\">
  <button type=\"button\" data-bs-toggle=\"dropdown\" class=\"btn btn-lg btn-inverse btn-block dropdown-toggle\"><i class=\"fa-solid fa-cart-shopping\"></i></button> 
  <ul class=\"dropdown-menu dropdown-menu-end p-2\">
    ";
        // line 6
        if ((($context["products"] ?? null) || ($context["vouchers"] ?? null))) {
            // line 7
            echo "      <li>
        <table class=\"table table-striped mb-2\">
          ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 10
                echo "            <tr>
              <td class=\"text-center\">";
                // line 11
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11)) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 11);
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 11);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 11);
                    echo "\" class=\"img-thumbnail\"/></a>";
                }
                echo "</td>
              <td class=\"text-start\"><a href=\"";
                // line 12
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 12);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 12);
                echo "</a>
                ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", [], "any", false, false, false, 14));
                    foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                        // line 15
                        echo "                    <br/>
                    <small> - ";
                        // line 16
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "name", [], "any", false, false, false, 16);
                        echo ": ";
                        echo twig_get_attribute($this->env, $this->source, $context["option"], "value", [], "any", false, false, false, 16);
                        echo "</small>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 18
                    echo "                ";
                }
                // line 19
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 19)) {
                    // line 20
                    echo "                  <br/>
                  <small> - ";
                    // line 21
                    echo ($context["text_points"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", [], "any", false, false, false, 21);
                    echo "</small>
                ";
                }
                // line 23
                echo "                ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 23)) {
                    // line 24
                    echo "                  <br/>
                  <small> - ";
                    // line 25
                    echo ($context["text_subscription"] ?? null);
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "subscription", [], "any", false, false, false, 25);
                    echo "</small>
                ";
                }
                // line 27
                echo "              </td>
              <td class=\"text-end\">x ";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", [], "any", false, false, false, 28);
                echo "</td>
              <td class=\"text-end\">";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["product"], "total", [], "any", false, false, false, 29);
                echo "</td>
              <td class=\"text-end\">

                <form action=\"";
                // line 32
                echo ($context["product_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 33
                echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", [], "any", false, false, false, 33);
                echo "\">
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 34
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "
          ";
            // line 40
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
                // line 41
                echo "            <tr>
              <td class=\"text-center\"></td>
              <td class=\"text-start\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", [], "any", false, false, false, 43);
                echo "</td>
              <td class=\"text-end\">x&nbsp;1</td>
              <td class=\"text-end\">";
                // line 45
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", [], "any", false, false, false, 45);
                echo "</td>
              <td class=\"text-end\">
                <form action=\"";
                // line 47
                echo ($context["voucher_remove"] ?? null);
                echo "\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
                echo ($context["list"] ?? null);
                echo "\" data-oc-target=\"#header-cart\">
                  <input type=\"hidden\" name=\"key\" value=\"";
                // line 48
                echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", [], "any", false, false, false, 48);
                echo "\"/>
                  <button type=\"submit\" data-bs-toggle=\"tooltip\" title=\"";
                // line 49
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa-solid fa-circle-xmark\"></i></button>
                </form>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "
        </table>

        <div>
          <table class=\"table table-sm table-bordered mb-2\">
            ";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
                // line 60
                echo "              <tr>
                <td class=\"text-end\"><strong>";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["total"], "title", [], "any", false, false, false, 61);
                echo "</strong></td>
                <td class=\"text-end\">";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["total"], "text", [], "any", false, false, false, 62);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "          </table>
          <p class=\"text-end\"><a href=\"";
            // line 66
            echo ($context["cart"] ?? null);
            echo "\"><strong><i class=\"fa-solid fa-cart-shopping\"></i> ";
            echo ($context["text_cart"] ?? null);
            echo "</strong></a>&nbsp;&nbsp;&nbsp;<a href=\"";
            echo ($context["checkout"] ?? null);
            echo "\"><strong><i class=\"fa-solid fa-share\"></i> ";
            echo ($context["text_checkout"] ?? null);
            echo "</strong></a></p>
        </div>
      </li>
    ";
        } else {
            // line 70
            echo "      <li class=\"text-center p-4\">";
            echo ($context["text_no_results"] ?? null);
            echo "</li>
    ";
        }
        // line 72
        echo "  </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 72,  247 => 70,  234 => 66,  231 => 65,  222 => 62,  218 => 61,  215 => 60,  211 => 59,  204 => 54,  193 => 49,  189 => 48,  183 => 47,  178 => 45,  173 => 43,  169 => 41,  165 => 40,  162 => 39,  151 => 34,  147 => 33,  141 => 32,  135 => 29,  131 => 28,  128 => 27,  121 => 25,  118 => 24,  115 => 23,  108 => 21,  105 => 20,  102 => 19,  99 => 18,  89 => 16,  86 => 15,  81 => 14,  79 => 13,  73 => 12,  59 => 11,  56 => 10,  52 => 9,  48 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cart.twig", "C:\\xampp\\htdocs\\MyOpenCart\\Demo\\upload\\catalog\\view\\template\\common\\cart.twig");
    }
}

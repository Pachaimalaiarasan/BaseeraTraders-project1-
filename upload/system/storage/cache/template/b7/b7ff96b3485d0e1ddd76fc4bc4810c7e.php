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

/* admin/view/template/user/user_list.twig */
class __TwigTemplate_ea2865e3ec43fd13d38f0614906a0c4d extends Template
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
        echo "<form id=\"form-user\" method=\"post\" data-oc-toggle=\"ajax\" data-oc-load=\"";
        echo ($context["action"] ?? null);
        echo "\" data-oc-target=\"#user\">
  <div class=\"table-responsive\">
    <table class=\"table table-bordered table-hover\">
      <thead>
        <tr>
          <td class=\"text-center\" style=\"width: 1px;\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', \$(this).prop('checked'));\" class=\"form-check-input\"/></td>
          <td class=\"text-start\"><a href=\"";
        // line 7
        echo ($context["sort_username"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "username")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_username"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 8
        echo ($context["sort_status"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "status")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_status"] ?? null);
        echo "</a></td>
          <td class=\"text-start\"><a href=\"";
        // line 9
        echo ($context["sort_date_added"] ?? null);
        echo "\"";
        if ((($context["sort"] ?? null) == "date_added")) {
            echo " class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\"";
        }
        echo ">";
        echo ($context["column_date_added"] ?? null);
        echo "</a></td>
          <td class=\"text-end\">";
        // line 10
        echo ($context["column_action"] ?? null);
        echo "</td>
        </tr>
      </thead>
      <tbody>
        ";
        // line 14
        if (($context["users"] ?? null)) {
            // line 15
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 16
                echo "            <tr>
              <td class=\"text-center\"><input type=\"checkbox\" name=\"selected[]\" value=\"";
                // line 17
                echo twig_get_attribute($this->env, $this->source, $context["user"], "user_id", [], "any", false, false, false, 17);
                echo "\" class=\"form-check-input\"/></td>
              <td class=\"text-start\">";
                // line 18
                echo twig_get_attribute($this->env, $this->source, $context["user"], "username", [], "any", false, false, false, 18);
                echo "</td>
              <td class=\"text-start\">";
                // line 19
                echo twig_get_attribute($this->env, $this->source, $context["user"], "status", [], "any", false, false, false, 19);
                echo "</td>
              <td class=\"text-start\">";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["user"], "date_added", [], "any", false, false, false, 20);
                echo "</td>
              <td class=\"text-end\"><a href=\"";
                // line 21
                echo twig_get_attribute($this->env, $this->source, $context["user"], "edit", [], "any", false, false, false, 21);
                echo "\" data-bs-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa-solid fa-pencil\"></i></a></td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        } else {
            // line 25
            echo "          <tr>
            <td class=\"text-center\" colspan=\"5\">";
            // line 26
            echo ($context["text_no_results"] ?? null);
            echo "</td>
          </tr>
        ";
        }
        // line 29
        echo "      </tbody>
    </table>
  </div>
  <div class=\"row\">
    <div class=\"col-sm-6 text-start\">";
        // line 33
        echo ($context["pagination"] ?? null);
        echo "</div>
    <div class=\"col-sm-6 text-end\">";
        // line 34
        echo ($context["results"] ?? null);
        echo "</div>
  </div>
</form>";
    }

    public function getTemplateName()
    {
        return "admin/view/template/user/user_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 34,  145 => 33,  139 => 29,  133 => 26,  130 => 25,  127 => 24,  116 => 21,  112 => 20,  108 => 19,  104 => 18,  100 => 17,  97 => 16,  92 => 15,  90 => 14,  83 => 10,  71 => 9,  59 => 8,  47 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "admin/view/template/user/user_list.twig", "C:\\xampp\\htdocs\\MyOpenCart\\Demo\\upload\\admin\\view\\template\\user\\user_list.twig");
    }
}

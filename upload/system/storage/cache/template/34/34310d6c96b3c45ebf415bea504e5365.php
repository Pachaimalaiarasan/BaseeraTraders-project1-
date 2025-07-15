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

/* catalog/view/template/account/password.twig */
class __TwigTemplate_b13a7ef038c2c810a405c8150193e5a2 extends Template
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
<div id=\"account-password\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "    <li class=\"breadcrumb-item\"><a href=\"";
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
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 9
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 10
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <form id=\"form-password\" action=\"";
        // line 11
        echo ($context["save"] ?? null);
        echo "\" method=\"post\" data-oc-toggle=\"ajax\">
        <fieldset>
          <legend>";
        // line 13
        echo ($context["text_password"] ?? null);
        echo "</legend>
          <div class=\"row mb-3 required\">
            <label for=\"input-password\" class=\"col-md-3 col-form-label\">";
        // line 15
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 17
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"new-password\"/>
              <div id=\"error-password\" class=\"invalid-feedback\"></div>
            </div>
          </div>
          <div class=\"row mb-3 required\">
            <label for=\"input-confirm\" class=\"col-md-3 col-form-label\">";
        // line 22
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-md-9\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 24
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
              <div id=\"error-confirm\" class=\"invalid-feedback\"></div>
            </div>
          </div>
        </fieldset>
        <div class=\"row\">
          <div class=\"col\">
            <a href=\"";
        // line 31
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_back"] ?? null);
        echo "</a>
          </div>
          <div class=\"col text-end\">
            <button type=\"submit\" class=\"btn btn-primary\">";
        // line 34
        echo ($context["button_continue"] ?? null);
        echo "</button>
          </div>
        </div>
      </form>
      ";
        // line 38
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 39
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 41
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/account/password.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 41,  134 => 39,  130 => 38,  123 => 34,  115 => 31,  103 => 24,  98 => 22,  88 => 17,  83 => 15,  78 => 13,  73 => 11,  69 => 10,  65 => 9,  61 => 8,  58 => 7,  47 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/account/password.twig", "C:\\xampp\\htdocs\\BaseeraTraders\\BaseeraTraders-project1-\\upload\\catalog\\view\\template\\account\\password.twig");
    }
}

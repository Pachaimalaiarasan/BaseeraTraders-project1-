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

/* catalog/view/template/common/home.twig */
class __TwigTemplate_57292a9305824b464b4197f26d0ee652 extends Template
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
<div id=\"common-home\" class=\"container\">
  <h1 class=\"heading-bt\">BASEERA TRADERS</h1>
  <h3 class=\"sub-heading\">Discover the perfect additions to complete your collecttion</h3>
  <div class=\"row\">";
        // line 5
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 6
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 7
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 10
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/home.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 10,  53 => 7,  48 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\BaseeraTraders\\BaseeraTraders-project1-\\upload\\catalog\\view\\template\\common\\home.twig");
    }
}

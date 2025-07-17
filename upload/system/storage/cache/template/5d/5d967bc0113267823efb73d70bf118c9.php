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

/* extension/opencart/catalog/view/template/module/filter.twig */
class __TwigTemplate_97b3db7c6123392852200d856bd3d497 extends Template
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
        echo "<style>
  #refine-filter-box {
    border: 1px solid #ddd;
    border-radius: 6px;
    font-family: Arial, sans-serif;
    max-width: 100%;
    background: #fff;
    margin: 10px 0;
  }

  .refine-header {
    display: flex;
    align-items: center;
    padding: 12px;
    background: black;
    color: white;
    font-weight: bold;
    font-size: 18px;
    border-radius: 20px;
    text-align: center;
    gap: 8px;
    cursor: default;
  }

  .refine-header i {
    font-size: 16px;
  }

  .refine-body {
    display: block;
    padding: 0;
  }

  .refine-accordion .refine-group {
    border-top: 1px solid #eee;
  }

  .refine-toggle {
    width: 100%;
    background: #ffffff;
    
    color: rgb(0, 0, 0);
    padding: 10px 14px;
    font-size: 16px;
    /* border-radius: 20px; */
    border: none;
    border-width: 90%;
    position: relative;
    font-weight: bold;
    margin-top: 2%;
    text-align: left;
    cursor: pointer;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .refine-toggle::before{
    content: '';
  position: absolute;
  width: 70%; /* line length */
  height: 2px;
  background: black;
  bottom: 0px;
  left: 5%;
  }

  .refine-content {
    display: none;
    padding: 10px 16px;
    background: #f9f9f9;
  }

  .refine-content.open {
    display: block;
  }

  .refine-checkbox {
    display: block;
    margin-bottom: 8px;
    font-size: 15px;
  }

  .refine-footer {
    padding: 10px;
    text-align: center;
  }

  .refine-footer button {
    width: 100%;
    padding: 10px;
    background: #000;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }

  .refine-footer button i {
    margin-right: 5px;
  }

  /* Responsive for mobile */
  @media (max-width: 768px) {
    .refine-header {
      cursor: pointer;
    }

    .refine-body {
      display: none;
    }

    .refine-body.show {
      display: block;
    }
    .refine-accordion{
      display: flex;
      justify-content: space-evenly;
    }
  }
</style>


<div id=\"refine-filter-box\">
  <!-- Toggle Heading (acts like a button on mobile) -->
  <div class=\"refine-header mobile-toggle\">
    <i class=\"fa-solid fa-filter\"></i>
    <span>Filters</span>
  </div>

  <!-- Filter Body -->
  <div class=\"refine-body\">
    <div class=\"refine-accordion\">
      ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["filter_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["filter_group"]) {
            // line 135
            echo "      <div class=\"refine-group\">
        <button class=\"refine-toggle\" data-target=\"#refine-";
            // line 136
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 136);
            echo "\">
          ";
            // line 137
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "name", [], "any", false, false, false, 137);
            echo " <span class=\"arrow\">&#9660;</span>
        </button>
        <div class=\"refine-content\" id=\"refine-";
            // line 139
            echo twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter_group_id", [], "any", false, false, false, 139);
            echo "\">
          ";
            // line 140
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["filter_group"], "filter", [], "any", false, false, false, 140));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 141
                echo "          <label class=\"refine-checkbox\">
            <input type=\"checkbox\" name=\"filter[]\" value=\"";
                // line 142
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 142);
                echo "\"
              ";
                // line 143
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["filter"], "filter_id", [], "any", false, false, false, 143), ($context["filter_category"] ?? null))) {
                    echo "checked";
                }
                echo ">
            ";
                // line 144
                echo twig_get_attribute($this->env, $this->source, $context["filter"], "name", [], "any", false, false, false, 144);
                echo "
          </label>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "        </div>
      </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 150
        echo "    </div>
    <div class=\"refine-footer\">
      <button type=\"button\" id=\"button-filter\">
        <i class=\"fa-solid fa-filter\"></i> ";
        // line 153
        echo ($context["button_filter"] ?? null);
        echo "
      </button>
    </div>
  </div>
</div>

<script>
  // Accordion toggle per group
  document.querySelectorAll('.refine-toggle').forEach(button => {
    button.addEventListener('click', () => {
      const target = document.querySelector(button.getAttribute('data-target'));
      target.classList.toggle('open');
    });
  });

  // Mobile toggle (show/hide refine-body)
  const refineHeader = document.querySelector('.refine-header');
  const refineBody = document.querySelector('.refine-body');

  function isMobile() {
    return window.innerWidth <= 768;
  }

  refineHeader.addEventListener('click', () => {
    if (isMobile()) {
      refineBody.classList.toggle('show');
    }
  });

  // Filter button action
  document.getElementById('button-filter').addEventListener('click', function () {
    const filter = [];
    document.querySelectorAll('input[name^=\"filter\"]:checked').forEach(el => {
      filter.push(el.value);
    });
    location = '";
        // line 188
        echo ($context["action"] ?? null);
        echo "&filter=' + filter.join(',');
  });
</script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/catalog/view/template/module/filter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 188,  231 => 153,  226 => 150,  218 => 147,  209 => 144,  203 => 143,  199 => 142,  196 => 141,  192 => 140,  188 => 139,  183 => 137,  179 => 136,  176 => 135,  172 => 134,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/catalog/view/template/module/filter.twig", "C:\\xampp\\htdocs\\BaseeraTraders\\BaseeraTraders-project1-\\upload\\extension\\opencart\\catalog\\view\\template\\module\\filter.twig");
    }
}

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

/* catalog/view/template/common/header.twig */
class __TwigTemplate_d83107e89fdca349e26a277f5ba0413f extends Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">

<head>
  <meta charset=\"UTF-8\" />
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <title>";
        // line 8
        echo ($context["title"] ?? null);
        echo "</title>
  <base href=\"";
        // line 9
        echo ($context["base"] ?? null);
        echo "\" />
  ";
        // line 10
        if (($context["description"] ?? null)) {
            // line 11
            echo "  <meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
  ";
        }
        // line 13
        echo "  ";
        if (($context["keywords"] ?? null)) {
            // line 14
            echo "  <meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
  ";
        }
        // line 16
        echo "  <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
  <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100..900&family=Poiret+One&display=swap\"
    rel=\"stylesheet\">
  <script src=\"";
        // line 20
        echo ($context["jquery"] ?? null);
        echo "\" type=\"text/javascript\"></script>
  <link href=\"";
        // line 21
        echo ($context["bootstrap"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
  <link href=\"";
        // line 22
        echo ($context["icons"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <link href=\"";
        // line 23
        echo ($context["stylesheet"] ?? null);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/moment.min.js\"></script>
  <script type=\"text/javascript\"
    src=\"catalog/view/javascript/jquery/datetimepicker/moment-with-locales.min.js\"></script>
  <script type=\"text/javascript\" src=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.js\"></script>
  <link href=\"catalog/view/javascript/jquery/datetimepicker/daterangepicker.css\" rel=\"stylesheet\" type=\"text/css\" />
  <script src=\"catalog/view/javascript/common.js\" type=\"text/javascript\"></script>
  ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 31
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 31);
            echo "\" type=\"text/css\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 31);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 31);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "  <script src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["script"], "href", [], "any", false, false, false, 34);
            echo "\" type=\"text/javascript\"></script>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 37
            echo "  <link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 37);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 37);
            echo "\" />
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["analytics"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["analytic"]) {
            // line 40
            echo "  ";
            echo $context["analytic"];
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['analytic'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "  <style>
    /* Align toggle to top-right */
    .nav-toggle-container {
      display: flex;
      justify-content: flex-end;
      padding: 0.5rem 1rem;
      position: relative;
    }

    .dropdown-toggle-custom {
      background: none;
      border: none;
      font-size: 14px;
      font-weight: 600;
      color: #444;
      cursor: pointer;
      display: flex;
      align-items: center;
      gap: 5px;
    }

    /* Dropdown Menu Styling */
    .custom-dropdown-nav {
      display: none;
      position: absolute;
      top: 100%;
      right: 1rem;
      background: white;
      border-radius: 12px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
      min-width: 220px;
      padding: 8px 0;
      z-index: 1000;
    }

    .custom-dropdown-nav.show {
      display: block;
    }

    .dropdown-item-custom {
      padding: 10px 18px;
      font-size: 14px;
      color: #333;
      white-space: nowrap;
    }

    .dropdown-item-custom:hover {
      background-color: #f7f7f7;
    }

    .dropdown-item-custom a {
      text-decoration: none;
      color: inherit;
      display: block;
    }

    /* Responsive Improvements */
    @media (max-width: 768px) {
      .custom-dropdown-nav {
        right: 0.5rem;
        min-width: 180px;
      }

      .dropdown-toggle-custom {
        font-size: 13px;
      }

      .dropdown-item-custom {
        padding: 10px 14px;
        font-size: 13px;
      }
    }
  </style>
</head>

    <body>
      <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>

      <!-- Dropdown Menu -->
      <nav id=\"top\">
        <div class=\"container position-relative\">
          <div id=\"navDropdown\" class=\"custom-dropdown-nav\">
            <ul class=\"list-unstyled mb-0\">
              <li class=\"dropdown-item-custom\">";
        // line 125
        echo ($context["currency"] ?? null);
        echo "</li>
              <li class=\"dropdown-item-custom\">";
        // line 126
        echo ($context["language"] ?? null);
        echo "</li>
              <li class=\"dropdown-item-custom\">
                <a href=\"";
        // line 128
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa-solid fa-phone\"></i> ";
        echo ($context["telephone"] ?? null);
        echo "</a>
              </li>
              <li class=\"dropdown-item-custom\">
                <a href=\"";
        // line 131
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                  <i class=\"fa-solid fa-heart\"></i> ";
        // line 132
        echo ($context["text_wishlist"] ?? null);
        echo "
                </a>
              </li>
              <li class=\"dropdown-item-custom\">
                <a href=\"";
        // line 136
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\">
                  <i class=\"fa-solid fa-cart-shopping\"></i> ";
        // line 137
        echo ($context["text_shopping_cart"] ?? null);
        echo "
                </a>
              </li>
              <li class=\"dropdown-item-custom\">
                <a href=\"";
        // line 141
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\">
                  <i class=\"fa-solid fa-share\"></i> ";
        // line 142
        echo ($context["text_checkout"] ?? null);
        echo "
                </a>
              </li>
    
              <li class=\"dropdown-item-custom\"><strong>";
        // line 146
        echo ($context["text_account"] ?? null);
        echo "</strong></li>
    
              ";
        // line 148
        if ( !($context["logged"] ?? null)) {
            // line 149
            echo "              <li class=\"dropdown-item-custom\"><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
              <li class=\"dropdown-item-custom\"><a href=\"";
            // line 150
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
              ";
        } else {
            // line 152
            echo "              <li class=\"dropdown-item-custom\"><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
              <li class=\"dropdown-item-custom\"><a href=\"";
            // line 153
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
              <li class=\"dropdown-item-custom\"><a href=\"";
            // line 154
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
              <li class=\"dropdown-item-custom\"><a href=\"";
            // line 155
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
              <li class=\"dropdown-item-custom\"><a href=\"";
            // line 156
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
              ";
        }
        // line 158
        echo "            </ul>
          </div>
        </div>
      </nav>
    
      <!-- HEADER -->
      <header>
        <div class=\"container py-3\">
          <div class=\"row align-items-center\">
            <div class=\"col-md-3 col-lg-4\">
              <div id=\"logo\">
                ";
        // line 169
        if (($context["logo"] ?? null)) {
            // line 170
            echo "                <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
                  <h2>BASEERA TRADERS</h2>
                  <!-- <img src=\"";
            // line 172
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\" /> -->
                </a>
                ";
        } else {
            // line 175
            echo "                <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
                ";
        }
        // line 177
        echo "              </div>
            </div>
            <div class=\"col-md-5\">";
        // line 179
        echo ($context["search"] ?? null);
        echo "</div>
            <div id=\"header-cart\" class=\"col-md-4 col-lg-3 mb-2\">";
        // line 180
        echo ($context["cart"] ?? null);
        echo "</div>

            <!-- Toggle Button (Aligned to Right) -->
  <div class=\"nav-toggle-container\">
    <button id=\"navToggleBtn\" class=\"dropdown-toggle-custom\">
      <i class=\"fa-solid fa-user\"></i>
      <span class=\"d-none d-md-inline\">My Menu</span>
      <i class=\"fa-solid fa-caret-down\"></i>
    </button>
  </div>
          </div>
    
        </div>
      </header>
    
      <!-- MAIN -->
      <main>
        ";
        // line 197
        echo ($context["menu"] ?? null);
        echo "
    
      <!-- Script for Dropdown -->
      <script>
        const toggleBtn = document.getElementById('navToggleBtn');
        const dropdown = document.getElementById('navDropdown');
    
        toggleBtn.addEventListener('click', function (e) {
          e.stopPropagation();
          dropdown.classList.toggle('show');
        });
    
        document.addEventListener('click', function (e) {
          if (!dropdown.contains(e.target) && !toggleBtn.contains(e.target)) {
            dropdown.classList.remove('show');
          }
        });
      </script>
    
    ";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 197,  406 => 180,  402 => 179,  398 => 177,  390 => 175,  380 => 172,  374 => 170,  372 => 169,  359 => 158,  352 => 156,  346 => 155,  340 => 154,  334 => 153,  327 => 152,  320 => 150,  313 => 149,  311 => 148,  306 => 146,  299 => 142,  293 => 141,  286 => 137,  280 => 136,  273 => 132,  267 => 131,  259 => 128,  254 => 126,  250 => 125,  165 => 42,  156 => 40,  151 => 39,  140 => 37,  135 => 36,  126 => 34,  121 => 33,  108 => 31,  104 => 30,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  76 => 16,  70 => 14,  67 => 13,  61 => 11,  59 => 10,  55 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\MyOpenCart\\Demo\\upload\\catalog\\view\\template\\common\\header.twig");
    }
}

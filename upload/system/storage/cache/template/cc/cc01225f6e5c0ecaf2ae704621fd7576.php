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
<html class=\"html\" dir=\"";
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
      padding: 0.5rem 1rem;
      position: relative;
      flex-flow: row-reverse;
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
      padding: 10px;
      transition: background 0.3s ease;
      border-radius: 6px;
    }

    .dropdown-toggle-custom:focus,
    .dropdown-toggle-custom:hover {
      background-color: #f0f0f0;
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
      transition: transform 0.3s ease, opacity 0.3s ease;
      opacity: 0;
      pointer-events: none;
    }

    .custom-dropdown-nav.show {
      display: block;
      transform: translateY(10px);
      opacity: 1;
      pointer-events: auto;
    }

    .dropdown-item-custom {
      padding: 10px 18px;
      font-size: 14px;
      color: #333;
      white-space: nowrap;
      transition: background 0.2s ease;
    }

    .dropdown-item-custom:hover {
      background-color: #f7f7f7;
    }

    .dropdown-item-custom a {
      text-decoration: none;
      color: inherit;
      display: block;
    }

    /* Utility */
    .top-all {
      display: flex;
      justify-content: space-between;
    }

    #navToggleBtn {
      min-width: fit-content;
      padding: 20px;
    }

    /* Responsive Improvements */
    @media (max-width: 768px) {
      .custom-dropdown-nav {
        right: 0.5rem;
        min-width: 180px;
        border-radius: 10px;
      }

      .dropdown-toggle-custom {
        font-size: 13px;
        padding: 8px;
      }

      .dropdown-item-custom {
        padding: 10px 14px;
        font-size: 13px;
      }

      #navToggleBtn {
        padding: 16px;
      }
    }

    @media (max-width: 480px) {
      .custom-dropdown-nav {
        right: 0.25rem;
        min-width: 160px;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.1);
      }

      .dropdown-toggle-custom {
        font-size: 12px;
        gap: 4px;
      }

      .dropdown-item-custom {
        font-size: 12px;
        padding: 8px 12px;
      }
    }

    @media screen and (max-width:576px) {

      .top-all {
        display: block;
      }

      .nav-toggle-container {
        flex-flow: row;
        justify-content: space-between;
      }

    }
  </style>
</head>

<body>
  <div id=\"alert\" class=\"toast-container position-fixed top-0 end-0 p-3\"></div>

  <!-- Dropdown Menu -->
  <nav id=\"top\">
    <div class=\"container position-relative\">

    </div>
  </nav>

  <!-- HEADER -->
  <header>
    <div class=\"container py-3\">

      <div class=\"row align-items-center\">
        <div class=\"top-all\">
          <div class=\"col-md-3 col-lg-4\">
            <div id=\"logo\">
              ";
        // line 198
        if (($context["logo"] ?? null)) {
            // line 199
            echo "              <a href=\"";
            echo ($context["home"] ?? null);
            echo "\">
                <h2>BASEERA TRADERS</h2>
                <!-- <img src=\"";
            // line 201
            echo ($context["logo"] ?? null);
            echo "\" title=\"";
            echo ($context["name"] ?? null);
            echo "\" alt=\"";
            echo ($context["name"] ?? null);
            echo "\" class=\"img-fluid\" /> -->
              </a>
              ";
        } else {
            // line 204
            echo "              <h1><a href=\"";
            echo ($context["home"] ?? null);
            echo "\">";
            echo ($context["name"] ?? null);
            echo "</a></h1>
              ";
        }
        // line 206
        echo "            </div>
          </div>
          <div class=\"col-md-5\">";
        // line 208
        echo ($context["search"] ?? null);
        echo "</div>

          <!-- Toggle Button (Aligned to Right) -->
          <div class=\"account-other\">

            <div class=\"nav-toggle-container\">
              <div id=\"header-cart\" class=\"col-md-4 col-lg-3 mb-2\">";
        // line 214
        echo ($context["cart"] ?? null);
        echo "</div>
              <button id=\"navToggleBtn\" class=\"dropdown-toggle-custom\">
                <i class=\"fa-solid fa-user\"></i>
                <span class=\"d-none d-md-inline\">My Menu</span>
                <i class=\"fa-solid fa-caret-down\"></i>
              </button>
              <div id=\"navDropdown\" class=\"custom-dropdown-nav\">
                <ul class=\"list-unstyled mb-0\">
                  ";
        // line 222
        if ((($context["customer_group_id"] ?? null) == 2)) {
            // line 223
            echo "                  <li class=\"dropdown-item-custom\"><strong>Welcome Retailer!</strong></li>
                  ";
        } elseif ((        // line 224
($context["customer_group_id"] ?? null) == 1)) {
            // line 225
            echo "                  <li class=\"dropdown-item-custom\"><strong>Welcome Customer!</strong></li>
                  ";
        } else {
            // line 227
            echo "                  <li class=\"dropdown-item-custom\"><strong>Welcome Guest!</strong></li>
                  ";
        }
        // line 229
        echo "                  
                  <li class=\"dropdown-item-custom\">";
        // line 230
        echo ($context["currency"] ?? null);
        echo "</li>
                  <!-- <li class=\"dropdown-item-custom\">";
        // line 231
        echo ($context["language"] ?? null);
        echo "</li> -->
                  <li class=\"dropdown-item-custom\">
                    <a href=\"";
        // line 233
        echo ($context["contact"] ?? null);
        echo "\"><i class=\"fa-solid fa-phone\"></i> ";
        echo ($context["telephone"] ?? null);
        echo "</a>
                  </li>
                  <li class=\"dropdown-item-custom\">
                    <a href=\"";
        // line 236
        echo ($context["wishlist"] ?? null);
        echo "\" id=\"wishlist-total\" title=\"";
        echo ($context["text_wishlist"] ?? null);
        echo "\">
                      <i class=\"fa-solid fa-heart\"></i> ";
        // line 237
        echo ($context["text_wishlist"] ?? null);
        echo "
                    </a>
                  </li>
                  <li class=\"dropdown-item-custom\">
                    <a href=\"";
        // line 241
        echo ($context["shopping_cart"] ?? null);
        echo "\" title=\"";
        echo ($context["text_shopping_cart"] ?? null);
        echo "\">
                      <i class=\"fa-solid fa-cart-shopping\"></i> ";
        // line 242
        echo ($context["text_shopping_cart"] ?? null);
        echo "
                    </a>
                  </li>
                  <li class=\"dropdown-item-custom\">
                    <a href=\"";
        // line 246
        echo ($context["checkout"] ?? null);
        echo "\" title=\"";
        echo ($context["text_checkout"] ?? null);
        echo "\">
                      <i class=\"fa-solid fa-share\"></i> ";
        // line 247
        echo ($context["text_checkout"] ?? null);
        echo "
                    </a>
                  </li>

                  <li class=\"dropdown-item-custom\"><strong>";
        // line 251
        echo ($context["text_account"] ?? null);
        echo "</strong></li>

                  ";
        // line 253
        if ( !($context["logged"] ?? null)) {
            // line 254
            echo "                  <li class=\"dropdown-item-custom\"><a href=\"";
            echo ($context["register"] ?? null);
            echo "\">";
            echo ($context["text_register"] ?? null);
            echo "</a></li>
                  <li class=\"dropdown-item-custom\"><a href=\"";
            // line 255
            echo ($context["login"] ?? null);
            echo "\">";
            echo ($context["text_login"] ?? null);
            echo "</a></li>
                  ";
        } else {
            // line 257
            echo "                  <li class=\"dropdown-item-custom\"><a href=\"";
            echo ($context["account"] ?? null);
            echo "\">";
            echo ($context["text_account"] ?? null);
            echo "</a></li>
                  <li class=\"dropdown-item-custom\"><a href=\"";
            // line 258
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["text_order"] ?? null);
            echo "</a></li>
                  <li class=\"dropdown-item-custom\"><a href=\"";
            // line 259
            echo ($context["transaction"] ?? null);
            echo "\">";
            echo ($context["text_transaction"] ?? null);
            echo "</a></li>
                  <li class=\"dropdown-item-custom\"><a href=\"";
            // line 260
            echo ($context["download"] ?? null);
            echo "\">";
            echo ($context["text_download"] ?? null);
            echo "</a></li>
                  <li class=\"dropdown-item-custom\"><a href=\"";
            // line 261
            echo ($context["logout"] ?? null);
            echo "\">";
            echo ($context["text_logout"] ?? null);
            echo "</a></li>
                  ";
        }
        // line 263
        echo "                </ul>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- MAIN -->
  <main class=\"main\">
    ";
        // line 275
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
    </script>";
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
        return array (  514 => 275,  500 => 263,  493 => 261,  487 => 260,  481 => 259,  475 => 258,  468 => 257,  461 => 255,  454 => 254,  452 => 253,  447 => 251,  440 => 247,  434 => 246,  427 => 242,  421 => 241,  414 => 237,  408 => 236,  400 => 233,  395 => 231,  391 => 230,  388 => 229,  384 => 227,  380 => 225,  378 => 224,  375 => 223,  373 => 222,  362 => 214,  353 => 208,  349 => 206,  341 => 204,  331 => 201,  325 => 199,  323 => 198,  165 => 42,  156 => 40,  151 => 39,  140 => 37,  135 => 36,  126 => 34,  121 => 33,  108 => 31,  104 => 30,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  76 => 16,  70 => 14,  67 => 13,  61 => 11,  59 => 10,  55 => 9,  51 => 8,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/header.twig", "C:\\xampp\\htdocs\\BaseeraTraders\\BaseeraTraders-project1-\\upload\\catalog\\view\\template\\common\\header.twig");
    }
}

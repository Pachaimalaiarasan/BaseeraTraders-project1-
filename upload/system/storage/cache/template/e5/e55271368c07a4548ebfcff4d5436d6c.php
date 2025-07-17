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
  <style>
    .login-modal {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100dvh;
      background: rgba(0, 0, 0, 0.15);
      display: none;
      justify-content: center;
      align-items: center;
      font-family: Arial, sans-serif;
      z-index: 1000;
      padding: 20px;
      box-sizing: border-box;
      overflow-y: auto;
    }

    .modal-contents {
      background: #fff;
      border: 1px solid #000;
      border-radius: 15px;
      padding: 25px 20px;
      width: 100%;
      max-width: 700px;
      max-height: 95vh;
      overflow-y: auto;
      position: relative;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      text-align: center;
      box-sizing: border-box;
      min-height: 60vh;
    }

    .close-btn {
      position: absolute;
      top: 15px;
      right: 20px;
      font-size: 26px;
      font-weight: bold;
      cursor: pointer;
      color: #000;
    }

    .modal-header h2 {
      margin-top: 10px;
      font-size: 24px;
      color: #000;
    }

    .hanger-icon {
      width: 40px;
      height: auto;
    }

    .login-options {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      margin-top: 30px;
      gap: 20px;
    }

    .login-card {
      flex: 1 1 40%;
      min-width: 140px;
      max-width: 282px;
      border: 2px solid #000;
      border-radius: 10px;
      padding: 40px;
      cursor: pointer;
      transition: transform 0.2s ease;
      box-sizing: border-box;
      min-height: 227px;
    }

    .login-card:hover {
      transform: scale(1.05);
    }

    .login-card img {
      width: 70px;
      margin-bottom: 15px;
    }

    .modal-headers {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column;
    }

    .label {
      background: #000;
      color: #fff;
      padding: 8px 0;
      font-size: 16px;
      border-radius: 5px;
      font-weight: bold;
      margin-top: 10px;
      text-align: center;
    }

    .login-hanger {
      color: white;
      text-decoration: none;
      display: inline-block;
      width: 100%;
    }

    .more-link {
      display: inline-block;
      margin-top: 5px;
      color: black;
      cursor: pointer;
    }

    .info {
      text-align: left;
    }

    .more-message {
      margin-top: 5px;
      font-size: smaller;
      color: black;
      font-weight: bold;
    }

    @media (min-height: 750px) {
      .modal-content {
        max-height: 95vh;
        overflow-y: auto;
      }
    }

    @media (max-width: 600px) {
      .login-options {
        flex-direction: column;
        align-items: center;
      }

      .login-card {
        width: 100%;
        max-width: 300px;
      }

      .modal-content {
        padding: 20px 15px;
      }

      .modal-header h2 {
        font-size: 20px;
      }

      .login-card img {
        width: 60px;
      }

      .label {
        font-size: 14px;
      }
    }
  </style>

  <h1 class=\"heading-bt\">BASEERA TRADERS</h1>
  <h3 class=\"sub-heading\">Discover the perfect additions to complete your collection</h3>

  <div class=\"row\">
    ";
        // line 171
        echo ($context["column_left"] ?? null);
        echo "
    <div id=\"content\" class=\"col\">";
        // line 172
        echo ($context["content_top"] ?? null);
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 173
        echo ($context["column_right"] ?? null);
        echo "
  </div>

  ";
        // line 176
        if ( !($context["logged"] ?? null)) {
            // line 177
            echo "  <!-- LOGIN MODAL for GUESTS ONLY -->
  <section class=\"login-modal\" id=\"loginModal\" style=\"display: none;\">
    <div class=\"modal-contents\">
      <span class=\"close-btn\" onclick=\"closeLoginModal()\">×</span>
      <div class=\"modal-headers\">
        <img src=\"https://img.icons8.com/ios-filled/50/000000/hanger.png\" alt=\"Hanger\" class=\"hanger-icon\" />
        <h2>LOGIN</h2>
      </div>
      <div class=\"login-options\">
        <div class=\"login-card\">
          <img src=\"https://img.icons8.com/ios-filled/100/000000/shop.png\" alt=\"Retailer Icon\" />
          <div class=\"label\">
            <a class=\"login-hanger\" href=\"index.php?route=account/register&group=retailer\">Retailer</a>
          </div>
          <div class=\"more-section\">
            <a href=\"javascript:void(0);\" class=\"more-link\" onclick=\"toggleMessage(this)\">
              More <span class=\"arrow\">▼</span>
            </a>
            <div class=\"more-message\" style=\"display: none;\">
              <li class=\"info\">A retailer buys in bulk to resell.</li>
              <li class=\"info\">Minimum 10 units per product required.</li>
              <li class=\"info\">Get 20% off when the minimum is met.</li>
            </div>
          </div>
        </div>
        <div class=\"login-card\">
          <img src=\"https://img.icons8.com/ios-filled/100/000000/shopping-bag.png\" alt=\"Customer Icon\" />
          <div class=\"label\">
            <a class=\"login-hanger\" href=\"index.php?route=account/register&group=customer\">Customer</a>
          </div>

          <div class=\"more-section\">
            <a href=\"javascript:void(0);\" class=\"more-link\" onclick=\"toggleMessage(this)\">
              More <span class=\"arrow\">▼</span>
            </a>
            <div class=\"more-message\" style=\"display: none;\">
              <li class=\"info\">A customer buys for personal use.</li>
              <li class=\"info\">No minimum quantity required.</li>
            </div>
          </div>
        </div>
      </div>
  </section>

  <script>
    function closeLoginModal() {
      const modal = document.getElementById(\"loginModal\");
      if (modal) modal.style.display = \"none\";
    }

    function toggleMessage(el) {
      const messageBox = el.nextElementSibling;
      const arrow = el.querySelector('.arrow');
      const isVisible = messageBox.style.display === \"block\";
      messageBox.style.display = isVisible ? \"none\" : \"block\";
      arrow.textContent = isVisible ? \"▼\" : \"▲\";
    }

    document.addEventListener(\"DOMContentLoaded\", function () {
      const modal = document.getElementById(\"loginModal\");

      const hasShownPopup = localStorage.getItem(\"loginModalShown\");

      if (!hasShownPopup && modal) {
        setTimeout(() => {
          modal.style.display = \"flex\";
          localStorage.setItem(\"loginModalShown\", \"true\"); // Save across sessions
        }, 5000);
      }

      const closeBtn = document.querySelector(\".close-btn\");
      if (closeBtn) {
        closeBtn.addEventListener(\"click\", closeLoginModal);
      }
    });
  </script>

  ";
        }
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
        return array (  227 => 177,  225 => 176,  219 => 173,  214 => 172,  210 => 171,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/home.twig", "C:\\xampp\\htdocs\\BaseeraTraders\\BaseeraTraders-project1-\\upload\\catalog\\view\\template\\common\\home.twig");
    }
}

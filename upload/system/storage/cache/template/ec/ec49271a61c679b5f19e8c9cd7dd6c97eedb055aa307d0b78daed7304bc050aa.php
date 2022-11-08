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

/* catalog/view/template/common/cookie.twig */
class __TwigTemplate_36a50ee7c27a36deccb9f74ec2fefe0dfdc821f1964dd2d8394875645bcc685d extends Template
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
        echo "<div id=\"cookie\">
  <div class=\"container\">
    <div class=\"row mt-2\">
      <div class=\"col-12 p-2 text-center\"><p>";
        // line 4
        echo ($context["text_cookie"] ?? null);
        echo "</p>
        <button type=\"button\" value=\"";
        // line 5
        echo ($context["agree"] ?? null);
        echo "\" class=\"btn bg-primary btn-block text-white\">";
        echo ($context["button_agree"] ?? null);
        echo "</button>&nbsp;&nbsp;&nbsp;<button type=\"button\" value=\"";
        echo ($context["disagree"] ?? null);
        echo "\" class=\"btn btn-light btn-block\">";
        echo ($context["button_disagree"] ?? null);
        echo "</button>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "catalog/view/template/common/cookie.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/view/template/common/cookie.twig", "C:\\XampPHP8.0\\htdocs\\opencartv2\\upload\\catalog\\view\\template\\common\\cookie.twig");
    }
}

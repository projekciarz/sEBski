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

/* /home/sebski/Desktop/october/themes/demo/partials/site/footer.htm */
class __TwigTemplate_376d95b9dd8a6045fd7f9f4b96fc0b728a837cb4132bd411a869d04a4b423522 extends \Twig\Template
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
        echo "<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">sEBski &copy; 2020 | Projektowanie stron internetowych</p>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/sebski/Desktop/october/themes/demo/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"footer\">
    <div class=\"container\">
        <hr />
        <p class=\"muted credit\">sEBski &copy; 2020 | Projektowanie stron internetowych</p>
    </div>
</div>", "/home/sebski/Desktop/october/themes/demo/partials/site/footer.htm", "");
    }
}

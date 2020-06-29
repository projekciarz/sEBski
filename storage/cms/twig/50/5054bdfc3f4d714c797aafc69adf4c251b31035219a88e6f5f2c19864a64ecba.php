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

/* /home/sebski/Desktop/october/themes/sebski/partials/site/footer.htm */
class __TwigTemplate_9cd5601217feb92843e514e1ccf410ce14bba32b2a726754e7fda70b1371652d extends \Twig\Template
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
        echo "<section class=\"section_10 pb-0\">
\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12  text-center text-white\">
\t\t\t\t\t<h4><a class=\"text-green\" href=\"https://suwalki.online/sEBski\" target=\"_blank\">sEBski | Sebastian Laskowski</a></h4>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>\t
\t\t</div>

</section>";
    }

    public function getTemplateName()
    {
        return "/home/sebski/Desktop/october/themes/sebski/partials/site/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<section class=\"section_10 pb-0\">
\t<div class=\"container\">
\t\t\t
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12 col-sm-12 col-md-12  text-center text-white\">
\t\t\t\t\t<h4><a class=\"text-green\" href=\"https://suwalki.online/sEBski\" target=\"_blank\">sEBski | Sebastian Laskowski</a></h4>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<hr>
\t\t\t</div>\t
\t\t</div>

</section>", "/home/sebski/Desktop/october/themes/sebski/partials/site/footer.htm", "");
    }
}

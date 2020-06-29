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

/* /home/sebski/Desktop/october/themes/sebski/partials/site/header.htm */
class __TwigTemplate_ed382e93cbf0da2f5d044b620f1330d7cc0a2f1e3c6aefc10046f330e3d487a6 extends \Twig\Template
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
        echo "<div class=\"container\">
    <div class=\"row align-items-center justify-content-between d-flex\">
        <div id=\"logo\">
            <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sebski");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo.png");
        echo "\" alt=\"\" title=\"\" /></a>
        </div>
        <nav id=\"nav-menu-container\">
            <ul class=\"nav-menu\">
                <li class=\"menu-active\"><a href=\"";
        // line 8
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("sebski");
        echo "\">Strona główna</a></li>
                <li><a href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("cv");
        echo "\">CV</a></li>
                <li><a href=\"#projects\">Relizacje</a></li>
                <li><a href=\"#offer\">Oferta</a></li>
                
                <li><a href=\"#project\">Projekty</a></li>
                <li><a href=\"#price\">Cennik</a></li>
                
            </li>
        </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "/home/sebski/Desktop/october/themes/sebski/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
    <div class=\"row align-items-center justify-content-between d-flex\">
        <div id=\"logo\">
            <a href=\"{{ 'sebski'|page }}\"><img src=\"{{'assets/img/logo.png' | theme }}\" alt=\"\" title=\"\" /></a>
        </div>
        <nav id=\"nav-menu-container\">
            <ul class=\"nav-menu\">
                <li class=\"menu-active\"><a href=\"{{ 'sebski'|page }}\">Strona główna</a></li>
                <li><a href=\"{{ 'cv'|page }}\">CV</a></li>
                <li><a href=\"#projects\">Relizacje</a></li>
                <li><a href=\"#offer\">Oferta</a></li>
                
                <li><a href=\"#project\">Projekty</a></li>
                <li><a href=\"#price\">Cennik</a></li>
                
            </li>
        </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</div>", "/home/sebski/Desktop/october/themes/sebski/partials/site/header.htm", "");
    }
}

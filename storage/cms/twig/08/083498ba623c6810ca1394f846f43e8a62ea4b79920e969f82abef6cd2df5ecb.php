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

/* /home/sebski/Desktop/october/themes/sebski/layouts/index.htm */
class __TwigTemplate_b9f53c692f5e90a2e8d8d4f0c348dbbc83c70fd7ea7c23b02cc210b481fa6590 extends \Twig\Template
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
<html lang=\"pl\" class=\"no-js\">
\t<head>
\t\t<!-- Mobile Specific Meta -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<!-- Favicon-->
\t\t<link rel=\"shortcut icon\" href=\"img/fav.png\">
\t\t<!-- Meta Description -->
\t\t<meta name=\"description\" content=\"Projektowanie stron internetowych\">
\t\t<!-- Meta Keyword -->
\t\t<meta name=\"keywords\" content=\"strony www, strona wizytówka, prosta strona www\">
\t\t<!-- meta character set -->
\t\t<meta charset=\"UTF-8\">
\t\t<!-- Site Title -->
\t\t<title>sEBski | Strony internetowe</title>
\t\t<script src=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/theater.min.js");
        echo "\" type=\"text/javascript\"></script>
\t\t
\t\t<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
\t\t<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime:700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
\t\t<!--
\t\tCSS
\t\t============================================= -->
\t\t<link rel=\"stylesheet\" href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/linearicons.css");
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/font-awesome.min.css");
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/bootstrap.css");
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/magnific-popup.css");
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/nice-select.css");
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/animate.min.css");
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/owl.carousel.css");
        echo "\">
\t\t<link rel=\"stylesheet\" href=\"";
        // line 33
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/sebski-main.css");
        echo "\">
\t\t<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t<style type=\"text/css\" media=\"screen\">
\t\t\thtml{
\t\t\t\toverflow-x: hidden;
\t\t\t}
\t\t\t.actor{
\t\t\t\tpadding: 25px;
\t\t\t}
\t\t\t
\t\t</style>
\t</head>
\t<body>
\t\t<!-- header -->
\t\t<header id=\"header\" id=\"home\">
\t\t\t";
        // line 48
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 49
        echo "\t\t</header>
\t\t<!-- endheader -->
\t\t<!-- start banner Area -->
\t\t<section class=\"banner-area\" id=\"home\" style=\" height: 100vh; font-family: 'Courier Prime', monospace; font-size: 25px;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row fullscreen d-flex align-items-center justify-content-center\" >
\t\t\t\t\t<div class=\"banner-content col-lg-7\">
\t\t\t\t\t\t<main class=\"scene\">
\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t<div id=\"sebski\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t<div id=\"vader\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actor\" style=\"font-size: 20px;\">
\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t<div id=\"luke\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</main>
\t\t\t\t\t</main>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"projects\">
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t<h1 class=\"mb-10\">Realizacje</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t<center>
\t\t\t\t\t<p class=\"top-title\"><a href=\"https://www.suwalki.online\" title=\"suwalki.online\" target=\"_blank\">www.suwalki.online</a></p>
\t\t\t\t\t</center>
\t\t\t\t\t<p><span>Projekt na eatpie ciągłego udoskonalania i dodawania nowych funkcjonalności.</span></p>
\t\t\t\t\t<p>
\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t<a href=\"";
        // line 100
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/suwalki_online_1.png");
        echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 101
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/suwalki_online_1.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t<a href=\"";
        // line 107
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/navi-star.png");
        echo "\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"";
        // line 108
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/navi-star.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t<center>
\t\t\t\t\t<p class=\"top-title\">
\t\t\t\t\t\t<a href=\"https://www.navi-star.pl\" title=\"navi.star\" target=\"_blank\">
\t\t\t\t\t\t\twww.navi-star.pl
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t</center>
\t\t\t\t\t<p><span>
\t\t\t\t\t\tNavistar to licencjonowana firma przewozowa
\t\t\t\t\t\tświadcząca usługi w wysokim standardzie i
\t\t\t\t\t\tatrakcyjnej cenie.
\t\t\t\t\t</span></p>
\t\t\t\t\t<p>
\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t</section>
\t
\t
\t<section class=\"we-offer-area section-gap\" id=\"offer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<h1 class=\"mb-10\">Czego używam?</h1>
\t\t\t\t\t\t<p>Krótki opis jak działam</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 151
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/logo-ovh.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Serwery OVH</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tKorzystamy wyłącznie z serwerów
\t\t\t\t\t\t\t\t<a href=\"https://www.ovh.pl/\" title=\"OVH\" target=\"_blank\">OVH.</a>
\t\t\t\t\t\t\t\tW ofercie możemy znaleźć serwery dedykowane, hosting i domeny.
\t\t\t\t\t\t\t\tDla każdego naszego klienta przygotowaliśmy miejsce na naszym serwerze z ochroną Anty-DDoS.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 165
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/laravel.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Laravel</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tNasze projekty tworzymy w Laravel, jest to framework do aplikacji internetowych napisany w języku PHP bazujący na wzorcu architektonicznym Model-View-Controller.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 178
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/cloud.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Cloudflare</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDodatkowo do dla każdego klienta konfigurujemy połączenie z Cloudflare.
\t\t\t\t\t\t\t\tCo to jest i jak działa Cloudflare? Wszystko jest dobrze opisane przez pana Wojtka <a href=\"https://wojciechpietrzak.com.pl/cloudflare/\" title=\"cloudflare\" target=\"_blank\">tutaj</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"";
        // line 190
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/colorlib.png");
        echo "\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Themes Colorlib</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tColorlib posiada ogromną bazę darmowych i płatnych templatek. <a href=\"https://colorlib.com/wp/templates/\" title=\"colorlib\" target=\"_blank\">Tutaj</a> możemy zobaczyć przykładowe DARMOWE templatki od Colorlib. Zapraszam do przejrzenia.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t
\t
\t<!-- Start price Area -->
\t<section class=\"price-area section-gap\" id=\"price\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<h1 class=\"mb-10\">Wybierz idealny plan dla siebie</h1>
\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t<h4>Business</h4>
\t\t\t\t\t\t\t\t<p>Opłata jednorazowa</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t<h1>1000zł</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t<li><s>Wsparcie prze okres umowy</s></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t<h4>Standard</h4>
\t\t\t\t\t\t\t\t<p>Opłata miesięczna</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t<h1>100zł</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t<li>Wsparcie prze okres umowy</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t<h4>Godzina</h4>
\t\t\t\t\t\t\t\t<p>Cena za godzinę pracy</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t<h1>50zł</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"34475156475f5d1a5f5b5a40555f40745359555d581a575b59\">[email&#160;protected]</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Konfiguracja SSL</li>
\t\t\t\t\t\t\t\t<li>Optymalizacja strony</li>
\t\t\t\t\t\t\t\t<li>Ustawienia DNS</li>
\t\t\t\t\t\t\t\t<li>Konfiguracja VPS</li>
\t\t\t\t\t\t\t\t<li>Długoterminowa wpsółpraca</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End price Area -->
\t<!-- Start callto-action Area -->
\t<section class=\"callto-action-area relative section-gap\">
\t\t<div class=\"overlay overlay-bg\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"menu-content col-lg-9\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<h1 class=\"mb-10 text-white\">Zainwestuj w swój biznes i bądź Online razem z nami.</h1>
\t\t\t\t\t\t<p class=\"text-white\">Skontaktuj się ze mną a w szybki i łatwy sposób pokażesz swój biznes w sieci. </p>
\t\t\t\t\t\t<a class=\"primary-btn\" href=\"mailto:sebski.kontakt@gmail.com\">sebski.kontakt@gmail.com</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End calto-action Area -->

\t
\t<!-- start footer Area -->
\t<footer id=\"layout-footer\">
\t\t";
        // line 328
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 329
        echo "\t</footer>
\t<!-- End footer Area -->
\t<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
\t<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
\t<script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>
\t<script>
\t\t\$(document).on(\"click\", '[data-toggle=\"lightbox\"]', function(event) {
\t\t\tevent.preventDefault();
\t\t\t\$(this).ekkoLightbox();
\t});
\t</script>
\t<script>

\tvar theater = theaterJS()
\ttheater
\t.on('type:start, erase:start', function () {
\ttheater.getCurrentActor().\$element.classList.add('actor__content--typing')
\t})
\t.on('type:end, erase:end', function () {
\ttheater.getCurrentActor().\$element.classList.remove('actor__content--typing')
\t})
\t.on('type:start, erase:start', function () {
\tif (theater.getCurrentActor().name === 'sebski') {
\tdocument.body.classList.add('dark')
\t}
\t})
\ttheater
\t.addActor('vader', { speed: 1 })
\t.addActor('luke')
\t.addActor('sebski', { speed: 1 })
\t.addScene('sebski:sEBski')
\t.addScene('vader:Sebastian Laskowski')
\t\t\t.addScene('luke:sebski.kontakt@gmail.com')
\t.addScene();
\t</script>
\t<!-- partial -->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"";
        // line 366
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/vendor/bootstrap.min.js");
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
\t<script src=\"";
        // line 368
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/easing.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 369
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/hoverIntent.js");
        echo "\"></script>
\t<script src=\"";
        // line 370
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/superfish.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 371
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.ajaxchimp.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 372
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.magnific-popup.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 373
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 374
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.sticky.js");
        echo "\"></script>
\t<script src=\"";
        // line 375
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.nice-select.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 376
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/parallax.min.js");
        echo "\"></script>
\t<script src=\"";
        // line 377
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/mail-script.js");
        echo "\"></script>
\t<script src=\"";
        // line 378
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/main.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/sebski/Desktop/october/themes/sebski/layouts/index.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  510 => 378,  506 => 377,  502 => 376,  498 => 375,  494 => 374,  490 => 373,  486 => 372,  482 => 371,  478 => 370,  474 => 369,  470 => 368,  465 => 366,  426 => 329,  422 => 328,  281 => 190,  266 => 178,  250 => 165,  233 => 151,  187 => 108,  183 => 107,  174 => 101,  170 => 100,  117 => 49,  113 => 48,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  79 => 29,  75 => 28,  71 => 27,  67 => 26,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"pl\" class=\"no-js\">
\t<head>
\t\t<!-- Mobile Specific Meta -->
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<!-- Favicon-->
\t\t<link rel=\"shortcut icon\" href=\"img/fav.png\">
\t\t<!-- Meta Description -->
\t\t<meta name=\"description\" content=\"Projektowanie stron internetowych\">
\t\t<!-- Meta Keyword -->
\t\t<meta name=\"keywords\" content=\"strony www, strona wizytówka, prosta strona www\">
\t\t<!-- meta character set -->
\t\t<meta charset=\"UTF-8\">
\t\t<!-- Site Title -->
\t\t<title>sEBski | Strony internetowe</title>
\t\t<script src=\"{{ 'assets/js/theater.min.js'|theme }}\" type=\"text/javascript\"></script>
\t\t
\t\t<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
\t\t<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime:700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">
\t\t<!--
\t\tCSS
\t\t============================================= -->
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/linearicons.css'|theme }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/font-awesome.min.css'|theme }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/bootstrap.css'|theme }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/magnific-popup.css'|theme }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/nice-select.css'|theme }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/animate.min.css'|theme }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/owl.carousel.css'|theme }}\">
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/sebski-main.css'|theme }}\">
\t\t<link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css\" rel=\"stylesheet\">
\t\t<style type=\"text/css\" media=\"screen\">
\t\t\thtml{
\t\t\t\toverflow-x: hidden;
\t\t\t}
\t\t\t.actor{
\t\t\t\tpadding: 25px;
\t\t\t}
\t\t\t
\t\t</style>
\t</head>
\t<body>
\t\t<!-- header -->
\t\t<header id=\"header\" id=\"home\">
\t\t\t{% partial 'site/header' %}
\t\t</header>
\t\t<!-- endheader -->
\t\t<!-- start banner Area -->
\t\t<section class=\"banner-area\" id=\"home\" style=\" height: 100vh; font-family: 'Courier Prime', monospace; font-size: 25px;\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row fullscreen d-flex align-items-center justify-content-center\" >
\t\t\t\t\t<div class=\"banner-content col-lg-7\">
\t\t\t\t\t\t<main class=\"scene\">
\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t<div id=\"sebski\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t<div id=\"vader\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"actor\" style=\"font-size: 20px;\">
\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t<div id=\"luke\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</main>
\t\t\t\t\t</main>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<section id=\"projects\">
\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t<h1 class=\"mb-10\">Realizacje</h1>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t<center>
\t\t\t\t\t<p class=\"top-title\"><a href=\"https://www.suwalki.online\" title=\"suwalki.online\" target=\"_blank\">www.suwalki.online</a></p>
\t\t\t\t\t</center>
\t\t\t\t\t<p><span>Projekt na eatpie ciągłego udoskonalania i dodawania nowych funkcjonalności.</span></p>
\t\t\t\t\t<p>
\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t<a href=\"{{'assets/img/suwalki_online_1.png' | theme}}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{'assets/img/suwalki_online_1.png' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t<a href=\"{{'assets/img/navi-star.png' | theme}}\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"{{'assets/img/navi-star.png' | theme}}\" alt=\"\">
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t<center>
\t\t\t\t\t<p class=\"top-title\">
\t\t\t\t\t\t<a href=\"https://www.navi-star.pl\" title=\"navi.star\" target=\"_blank\">
\t\t\t\t\t\t\twww.navi-star.pl
\t\t\t\t\t\t</a>
\t\t\t\t\t</p>
\t\t\t\t\t</center>
\t\t\t\t\t<p><span>
\t\t\t\t\t\tNavistar to licencjonowana firma przewozowa
\t\t\t\t\t\tświadcząca usługi w wysokim standardzie i
\t\t\t\t\t\tatrakcyjnej cenie.
\t\t\t\t\t</span></p>
\t\t\t\t\t<p>
\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t\t
\t</section>
\t
\t
\t<section class=\"we-offer-area section-gap\" id=\"offer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<h1 class=\"mb-10\">Czego używam?</h1>
\t\t\t\t\t\t<p>Krótki opis jak działam</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/logo-ovh.png' | theme}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Serwery OVH</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tKorzystamy wyłącznie z serwerów
\t\t\t\t\t\t\t\t<a href=\"https://www.ovh.pl/\" title=\"OVH\" target=\"_blank\">OVH.</a>
\t\t\t\t\t\t\t\tW ofercie możemy znaleźć serwery dedykowane, hosting i domeny.
\t\t\t\t\t\t\t\tDla każdego naszego klienta przygotowaliśmy miejsce na naszym serwerze z ochroną Anty-DDoS.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/laravel.png' | theme}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Laravel</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tNasze projekty tworzymy w Laravel, jest to framework do aplikacji internetowych napisany w języku PHP bazujący na wzorcu architektonicznym Model-View-Controller.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/cloud.png' | theme}}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Cloudflare</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tDodatkowo do dla każdego klienta konfigurujemy połączenie z Cloudflare.
\t\t\t\t\t\t\t\tCo to jest i jak działa Cloudflare? Wszystko jest dobrze opisane przez pana Wojtka <a href=\"https://wojciechpietrzak.com.pl/cloudflare/\" title=\"cloudflare\" target=\"_blank\">tutaj</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t<img src=\"{{'assets/img/colorlib.png' | theme }}\" alt=\"\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t<h4>Themes Colorlib</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tColorlib posiada ogromną bazę darmowych i płatnych templatek. <a href=\"https://colorlib.com/wp/templates/\" title=\"colorlib\" target=\"_blank\">Tutaj</a> możemy zobaczyć przykładowe DARMOWE templatki od Colorlib. Zapraszam do przejrzenia.
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t
\t
\t
\t<!-- Start price Area -->
\t<section class=\"price-area section-gap\" id=\"price\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<h1 class=\"mb-10\">Wybierz idealny plan dla siebie</h1>
\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t<h4>Business</h4>
\t\t\t\t\t\t\t\t<p>Opłata jednorazowa</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t<h1>1000zł</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t<li><s>Wsparcie prze okres umowy</s></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t<h4>Standard</h4>
\t\t\t\t\t\t\t\t<p>Opłata miesięczna</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t<h1>100zł</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t<li>Wsparcie prze okres umowy</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t<h4>Godzina</h4>
\t\t\t\t\t\t\t\t<p>Cena za godzinę pracy</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t<h1>50zł</h1>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t<a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"34475156475f5d1a5f5b5a40555f40745359555d581a575b59\">[email&#160;protected]</a>
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t<li>Konfiguracja SSL</li>
\t\t\t\t\t\t\t\t<li>Optymalizacja strony</li>
\t\t\t\t\t\t\t\t<li>Ustawienia DNS</li>
\t\t\t\t\t\t\t\t<li>Konfiguracja VPS</li>
\t\t\t\t\t\t\t\t<li>Długoterminowa wpsółpraca</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End price Area -->
\t<!-- Start callto-action Area -->
\t<section class=\"callto-action-area relative section-gap\">
\t\t<div class=\"overlay overlay-bg\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t<div class=\"menu-content col-lg-9\">
\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t<h1 class=\"mb-10 text-white\">Zainwestuj w swój biznes i bądź Online razem z nami.</h1>
\t\t\t\t\t\t<p class=\"text-white\">Skontaktuj się ze mną a w szybki i łatwy sposób pokażesz swój biznes w sieci. </p>
\t\t\t\t\t\t<a class=\"primary-btn\" href=\"mailto:sebski.kontakt@gmail.com\">sebski.kontakt@gmail.com</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End calto-action Area -->

\t
\t<!-- start footer Area -->
\t<footer id=\"layout-footer\">
\t\t{% partial 'site/footer' %}
\t</footer>
\t<!-- End footer Area -->
\t<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
\t<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
\t<script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>
\t<script>
\t\t\$(document).on(\"click\", '[data-toggle=\"lightbox\"]', function(event) {
\t\t\tevent.preventDefault();
\t\t\t\$(this).ekkoLightbox();
\t});
\t</script>
\t<script>

\tvar theater = theaterJS()
\ttheater
\t.on('type:start, erase:start', function () {
\ttheater.getCurrentActor().\$element.classList.add('actor__content--typing')
\t})
\t.on('type:end, erase:end', function () {
\ttheater.getCurrentActor().\$element.classList.remove('actor__content--typing')
\t})
\t.on('type:start, erase:start', function () {
\tif (theater.getCurrentActor().name === 'sebski') {
\tdocument.body.classList.add('dark')
\t}
\t})
\ttheater
\t.addActor('vader', { speed: 1 })
\t.addActor('luke')
\t.addActor('sebski', { speed: 1 })
\t.addScene('sebski:sEBski')
\t.addScene('vader:Sebastian Laskowski')
\t\t\t.addScene('luke:sebski.kontakt@gmail.com')
\t.addScene();
\t</script>
\t<!-- partial -->
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t<script src=\"{{ 'assets/js/vendor/bootstrap.min.js'|theme }}\"></script>
\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
\t<script src=\"{{ 'assets/js/easing.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/hoverIntent.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/superfish.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/jquery.ajaxchimp.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/jquery.magnific-popup.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/jquery.sticky.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/jquery.nice-select.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/parallax.min.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/mail-script.js'|theme }}\"></script>
\t<script src=\"{{ 'assets/js/main.js'|theme }}\"></script>
</body>
</html>", "/home/sebski/Desktop/october/themes/sebski/layouts/index.htm", "");
    }
}

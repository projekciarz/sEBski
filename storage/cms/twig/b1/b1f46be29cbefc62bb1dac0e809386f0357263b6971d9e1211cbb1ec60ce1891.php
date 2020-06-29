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

/* /home/sebski/Desktop/october/themes/sebski/layouts/sebski.htm */
class __TwigTemplate_6fa553d9dd82d315419776d08b9b58a9575521b9a38993105b69e73c043dc737 extends \Twig\Template
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
\t\t<script src=\"js/theater.min.js\" type=\"text/javascript\"></script>

\t\t  <title>CodePen - Bootstrap 4 Lightbox Gallery</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime:700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">

\t\t<!--
\t\tCSS
\t\t============================================= -->
\t\t<link rel=\"stylesheet\" href=\"css/linearicons.css\">
\t\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/bootstrap.css\"> 
\t\t<link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
\t\t<link rel=\"stylesheet\" href=\"css/nice-select.css\">
\t\t<link rel=\"stylesheet\" href=\"css/animate.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/owl.carousel.css\">  
\t\t<link rel=\"stylesheet\" href=\"";
        // line 35
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/sebski-main.css");
        echo "\">
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
\t\t<header id=\"header\" id=\"home\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-between d-flex\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<nav id=\"nav-menu-container\">
\t\t\t\t\t\t<ul class=\"nav-menu\">
\t\t\t\t\t\t\t<li class=\"menu-active\"><a href=\"#home\">Strona główna</a></li>
\t\t\t\t\t\t\t<li><a href=\"#projects\">Relizacje</a></li>
\t\t\t\t\t\t\t<li><a href=\"#offer\">Oferta</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#project\">Projekty</a></li>
\t\t\t\t\t\t\t<li><a href=\"#price\">Cennik</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t</nav><!-- #nav-menu-container -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</header><!-- #header -->
\t\t\t<!-- start banner Area -->
\t\t\t<section class=\"banner-area\" id=\"home\" style=\" height: 100vh; font-family: 'Courier Prime', monospace; font-size: 25px;\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row fullscreen d-flex align-items-center justify-content-center\" >
\t\t\t\t\t\t<div class=\"banner-content col-lg-7\">
\t\t\t\t\t\t\t<main class=\"scene\">
\t\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t\t<div id=\"sebski\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t<div id=\"vader\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"actor\" style=\"font-size: 20px;\">
\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t<div id=\"luke\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</main>
\t\t\t\t\t\t</main>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section id=\"projects\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Realizacje</h1>
\t\t\t\t\t\t\t<p>Krótki opis jak działamy</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p class=\"top-title\"><a href=\"https://www.suwalki.online\" title=\"suwalki.online\" target=\"_blank\">www.suwalki.online</a></p>
\t\t\t\t\t\t</center>

\t\t\t\t\t\t<p><span>Projekt na eatpie ciągłego udoskonalania i dodawania nowych funkcjonalności.</span></p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t\t<a href=\"img/suwalki_online_2.png\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/suwalki_online_1.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 


\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t\t<a href=\"img/navi_star_2.png\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/navi-star.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

  

\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p class=\"top-title\"><a href=\"https://www.navi-star.pl\" title=\"navi.star\" target=\"_blank\">www.navi-star.pl</a></p>
\t\t\t\t\t\t</center>

\t\t\t\t\t\t<p><span>Projekt na eatpie ciągłego udoskonalania i dodawania nowych funkcjonalności.</span></p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>



\t\t\t\t\t





\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t
\t\t</section>
\t\t\t
\t\t

\t\t<section class=\"we-offer-area section-gap\" id=\"offer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Czego używam?</h1>
\t\t\t\t\t\t\t<p>Krótki opis jak działamy</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/logo-ovh.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Serwery OVH</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tKorzystamy wyłącznie z serwerów
\t\t\t\t\t\t\t\t\t<a href=\"https://www.ovh.pl/\" title=\"OVH\" target=\"_blank\">OVH.</a>
\t\t\t\t\t\t\t\t\tW ofercie możemy znaleźć serwery dedykowane, hosting i domeny.
\t\t\t\t\t\t\t\t\tDla każdego naszego klienta przygotowaliśmy miejsce na naszym serwerze z ochroną Anty-DDoS.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/laravel.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Laravel</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tNasze projekty tworzymy w Laravel, jest to framework do aplikacji internetowych napisany w języku PHP bazujący na wzorcu architektonicznym Model-View-Controller.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/cloud.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Cloudflare</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDodatkowo do dla każdego klienta konfigurujemy połączenie z Cloudflare.
\t\t\t\t\t\t\t\t\tCo to jest i jak działa Cloudflare? Wszystko jest dobrze opisane przez pana Wojtka <a href=\"https://wojciechpietrzak.com.pl/cloudflare/\" title=\"cloudflare\" target=\"_blank\">tutaj</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/colorlib.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Themes Colorlib</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tColorlib posiada ogromną bazę darmowych i płatnych templatek. <a href=\"https://colorlib.com/wp/templates/\" title=\"colorlib\" target=\"_blank\">Tutaj</a> możemy zobaczyć przykładowe DARMOWE templatki od Colorlib. Zapraszam do przejrzenia.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<!-- \t\t\t<section class=\"home-aboutus-area\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 no-padding about-left\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/signum.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 no-padding about-right\">
\t\t\t\t\t\t\t\t\t\t<p class=\"top-title\">Jak uwodzić</p>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\"></h1>
\t\t\t\t\t\t\t\t\t\t<p><span>www.jakuwodzic.pl</span></p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</section> -->
\t\t
\t\t<!-- End home-aboutus Area -->
\t\t<!-- Start protfolio Area -->
\t\t<!-- \t<section class=\"protfolio-area section-gap\" id=\"project\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-10\">Our Offered Services</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p1.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p2.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p3.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p4.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p5.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p6.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</section> -->
\t\t<!-- End protfolio Area -->
\t\t
\t\t
\t\t<!-- Start price Area -->
\t\t<section class=\"price-area section-gap\" id=\"price\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Wybierz idealny plan dla siebie</h1>
\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t\t<h4>Business</h4>
\t\t\t\t\t\t\t\t\t<p>Opłata jednorazowa</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t\t<h1>1000zł</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t\t<li><s>Wsparcie prze okres umowy</s></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">  
\t\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t\t<h4>Standard</h4>
\t\t\t\t\t\t\t\t\t<p>Opłata miesięczna</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t\t<h1>100zł</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t\t<li>Wsparcie prze okres umowy</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t\t<h4>Godzina</h4>
\t\t\t\t\t\t\t\t\t<p>Cena za godzinę pracy</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t\t<h1>50zł</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"34475156475f5d1a5f5b5a40555f40745359555d581a575b59\">[email&#160;protected]</a>  
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja SSL</li>
\t\t\t\t\t\t\t\t\t<li>Optymalizacja strony</li>
\t\t\t\t\t\t\t\t\t<li>Ustawienia DNS</li>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja VPS</li>
\t\t\t\t\t\t\t\t\t<li>Długoterminowa wpsółpraca</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section> 
\t\t<!-- End price Area -->
\t\t<!-- Start callto-action Area -->
\t\t<section class=\"callto-action-area relative section-gap\">
\t\t\t<div class=\"overlay overlay-bg\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content col-lg-9\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10 text-white\">Zainwestuj w swój biznes i bądź Online razem z nami.</h1>
\t\t\t\t\t\t\t<p class=\"text-white\">Skontaktuj się ze mną a w szybki i łatwy sposób pokażesz swój biznes w sieci. </p>
\t\t\t\t\t\t\t<a class=\"primary-btn\" href=\"#\"><span class=\"__cf_email__\" data-cfemail=\"b7c4d2d5c4dcde99dcd8d9c3d6dcc3f7d0dad6dedb99d4d8da\">[email&#160;protected]</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- End calto-action Area -->
\t\t<!-- Start testomial Area -->
\t<!-- \t<section class=\"testomial-area section-gap\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Testimonial from our Clients</h1>
\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"active-tstimonial-carusel\">
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t1.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t2.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t3.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t1.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t2.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t3.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t1.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t2.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t3.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section> -->
\t\t<!-- End testomial Area -->
\t\t
\t\t<!-- Start latest-blog Area -->
\t\t<!-- \t\t\t<section class=\"latest-blog-area section-gap\" id=\"blog\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-10\">Latest News from our Blog</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-blog\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/b1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Travel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Life style</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><h4>Portable latest Fashion for young women</h4></a>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"post-date\">31st January, 2018</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-blog\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/b2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Travel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Life style</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><h4>Portable latest Fashion for young women</h4></a>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"post-date\">31st January, 2018</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</section> -->
\t\t<!-- End latest-blog Area -->

\t\t
\t\t<!-- start footer Area -->
\t\t<footer class=\"footer-area section-gap\">
\t\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<div class=\"row footer-bottom d-flex justify-content-between\">
\t\t\t\t\t<p class=\"col-lg-8 col-sm-12 footer-text m-0 text-white\">
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\tCopyright &copy;<script data-cfasync=\"false\" src=\"/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"col-lg-4 col-sm-12 footer-social\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- End footer Area -->



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>

<script>
\t\$(document).on(\"click\", '[data-toggle=\"lightbox\"]', function(event) {
  \t\tevent.preventDefault();
  \t\t\$(this).ekkoLightbox();
});

</script>

\t\t<script>
\t\t\t\t/*
\t\t* TheaterJS, a typing effect mimicking human behavior.
\t\t*
\t\t* Github repository:
\t\t* https://github.com/Zhouzi/TheaterJS
\t\t*
\t\t*/
\t\tvar theater = theaterJS()
\t\ttheater
\t\t.on('type:start, erase:start', function () {
\t\ttheater.getCurrentActor().\$element.classList.add('actor__content--typing')
\t\t})
\t\t.on('type:end, erase:end', function () {
\t\ttheater.getCurrentActor().\$element.classList.remove('actor__content--typing')
\t\t})
\t\t.on('type:start, erase:start', function () {
\t\tif (theater.getCurrentActor().name === 'sebski') {
\t\tdocument.body.classList.add('dark')
\t\t}
\t\t})
\t\ttheater
\t\t.addActor('vader', { speed: 0.5 })
\t\t.addActor('luke')
\t\t.addActor('sebski', { speed: 0.2 })
\t\t.addScene('sebski:sEBski')
\t\t.addScene('vader:Sebastian Laskowski')
\t\t.addScene('luke:sebski.kontakt@gmail.com')\t\t
\t\t.addScene(theater.bind());
\t\t</script>
\t\t<!-- partial -->




\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"js/vendor/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
\t\t<script src=\"js/easing.min.js\"></script>
\t\t<script src=\"js/hoverIntent.js\"></script>
\t\t<script src=\"js/superfish.min.js\"></script>
\t\t<script src=\"js/jquery.ajaxchimp.min.js\"></script>
\t\t<script src=\"js/jquery.magnific-popup.min.js\"></script>
\t\t<script src=\"js/owl.carousel.min.js\"></script>
\t\t<script src=\"js/jquery.sticky.js\"></script>
\t\t<script src=\"js/jquery.nice-select.min.js\"></script>
\t\t<script src=\"js/parallax.min.js\"></script>
\t\t<script src=\"js/mail-script.js\"></script>
\t\t<script src=\"js/main.js\"></script>
\t</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/sebski/Desktop/october/themes/sebski/layouts/sebski.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 35,  37 => 1,);
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
\t\t<script src=\"js/theater.min.js\" type=\"text/javascript\"></script>

\t\t  <title>CodePen - Bootstrap 4 Lightbox Gallery</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css'>
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime:700&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Courier+Prime&display=swap\" rel=\"stylesheet\">
\t\t<link href=\"https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700\" rel=\"stylesheet\">

\t\t<!--
\t\tCSS
\t\t============================================= -->
\t\t<link rel=\"stylesheet\" href=\"css/linearicons.css\">
\t\t<link rel=\"stylesheet\" href=\"css/font-awesome.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/bootstrap.css\"> 
\t\t<link rel=\"stylesheet\" href=\"css/magnific-popup.css\">
\t\t<link rel=\"stylesheet\" href=\"css/nice-select.css\">
\t\t<link rel=\"stylesheet\" href=\"css/animate.min.css\">
\t\t<link rel=\"stylesheet\" href=\"css/owl.carousel.css\">  
\t\t<link rel=\"stylesheet\" href=\"{{ 'assets/css/sebski-main.css'|theme }}\">
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
\t\t<header id=\"header\" id=\"home\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row align-items-center justify-content-between d-flex\">
\t\t\t\t\t<div id=\"logo\">
\t\t\t\t\t\t<a href=\"index.html\"><img src=\"img/logo.png\" alt=\"\" title=\"\" /></a>
\t\t\t\t\t</div>
\t\t\t\t\t<nav id=\"nav-menu-container\">
\t\t\t\t\t\t<ul class=\"nav-menu\">
\t\t\t\t\t\t\t<li class=\"menu-active\"><a href=\"#home\">Strona główna</a></li>
\t\t\t\t\t\t\t<li><a href=\"#projects\">Relizacje</a></li>
\t\t\t\t\t\t\t<li><a href=\"#offer\">Oferta</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><a href=\"#project\">Projekty</a></li>
\t\t\t\t\t\t\t<li><a href=\"#price\">Cennik</a></li>
\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t\t</nav><!-- #nav-menu-container -->
\t\t\t\t</div>
\t\t\t</div>
\t\t\t</header><!-- #header -->
\t\t\t<!-- start banner Area -->
\t\t\t<section class=\"banner-area\" id=\"home\" style=\" height: 100vh; font-family: 'Courier Prime', monospace; font-size: 25px;\">

\t\t\t\t<div class=\"container\">
\t\t\t\t\t<div class=\"row fullscreen d-flex align-items-center justify-content-center\" >
\t\t\t\t\t\t<div class=\"banner-content col-lg-7\">
\t\t\t\t\t\t\t<main class=\"scene\">
\t\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t\t<div class=\"actor\">
\t\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t\t<div id=\"sebski\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t<div id=\"vader\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"actor\" style=\"font-size: 20px;\">
\t\t\t\t\t\t\t\t\t<div class=\"actor__prefix\"></div>
\t\t\t\t\t\t\t\t\t<div id=\"luke\" class=\"actor__content\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t</main>
\t\t\t\t\t\t</main>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<section id=\"projects\">
\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Realizacje</h1>
\t\t\t\t\t\t\t<p>Krótki opis jak działamy</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div> 

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p class=\"top-title\"><a href=\"https://www.suwalki.online\" title=\"suwalki.online\" target=\"_blank\">www.suwalki.online</a></p>
\t\t\t\t\t\t</center>

\t\t\t\t\t\t<p><span>Projekt na eatpie ciągłego udoskonalania i dodawania nowych funkcjonalności.</span></p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t\t<a href=\"img/suwalki_online_2.png\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/suwalki_online_1.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 


\t\t\t\t\t<div class=\"col-lg-8 col-md-8\">
\t\t\t\t\t\t<div class=\"no-padding about-right\">
\t\t\t\t\t\t\t<a href=\"img/navi_star_2.png\" data-toggle=\"lightbox\" data-gallery=\"gallery\">
\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/navi-star.png\" alt=\"\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div> 

  

\t\t\t\t\t<div class=\"col-lg-3 col-md-3\">
\t\t\t\t\t\t<center>
\t\t\t\t\t\t\t<p class=\"top-title\"><a href=\"https://www.navi-star.pl\" title=\"navi.star\" target=\"_blank\">www.navi-star.pl</a></p>
\t\t\t\t\t\t</center>

\t\t\t\t\t\t<p><span>Projekt na eatpie ciągłego udoskonalania i dodawania nowych funkcjonalności.</span></p>
\t\t\t\t\t\t<p>
\t\t\t\t\t\t\tOsoby z ciekawymi pomysłami zapraszam tutaj.
\t\t\t\t\t\t</p>
\t\t\t\t\t</div>



\t\t\t\t\t





\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t
\t\t</section>
\t\t\t
\t\t

\t\t<section class=\"we-offer-area section-gap\" id=\"offer\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Czego używam?</h1>
\t\t\t\t\t\t\t<p>Krótki opis jak działamy</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/logo-ovh.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Serwery OVH</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tKorzystamy wyłącznie z serwerów
\t\t\t\t\t\t\t\t\t<a href=\"https://www.ovh.pl/\" title=\"OVH\" target=\"_blank\">OVH.</a>
\t\t\t\t\t\t\t\t\tW ofercie możemy znaleźć serwery dedykowane, hosting i domeny.
\t\t\t\t\t\t\t\t\tDla każdego naszego klienta przygotowaliśmy miejsce na naszym serwerze z ochroną Anty-DDoS.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/laravel.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Laravel</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tNasze projekty tworzymy w Laravel, jest to framework do aplikacji internetowych napisany w języku PHP bazujący na wzorcu architektonicznym Model-View-Controller.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-6\">
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/cloud.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Cloudflare</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tDodatkowo do dla każdego klienta konfigurujemy połączenie z Cloudflare.
\t\t\t\t\t\t\t\t\tCo to jest i jak działa Cloudflare? Wszystko jest dobrze opisane przez pana Wojtka <a href=\"https://wojciechpietrzak.com.pl/cloudflare/\" title=\"cloudflare\" target=\"_blank\">tutaj</a>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-offer d-flex flex-row pb-30\">
\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t<img src=\"img/colorlib.png\" alt=\"\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"desc\">
\t\t\t\t\t\t\t\t<h4>Themes Colorlib</h4>
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tColorlib posiada ogromną bazę darmowych i płatnych templatek. <a href=\"https://colorlib.com/wp/templates/\" title=\"colorlib\" target=\"_blank\">Tutaj</a> możemy zobaczyć przykładowe DARMOWE templatki od Colorlib. Zapraszam do przejrzenia.
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>


\t\t<!-- \t\t\t<section class=\"home-aboutus-area\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t\t<div class=\"row justify-content-center align-items-center\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 no-padding about-left\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/signum.png\" alt=\"\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 no-padding about-right\">
\t\t\t\t\t\t\t\t\t\t<p class=\"top-title\">Jak uwodzić</p>
\t\t\t\t\t\t\t\t\t\t<h1 class=\"text-white\"></h1>
\t\t\t\t\t\t\t\t\t\t<p><span>www.jakuwodzic.pl</span></p>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore. magna aliqua. Ut enim ad minim.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</section> -->
\t\t
\t\t<!-- End home-aboutus Area -->
\t\t<!-- Start protfolio Area -->
\t\t<!-- \t<section class=\"protfolio-area section-gap\" id=\"project\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-10\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-10\">Our Offered Services</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p1.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p2.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-4 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p3.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p3.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-8 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p4.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p4.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p5.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p5.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-portfolio\">
\t\t\t\t\t\t\t\t\t<img class=\"image img-fluid\" src=\"img/p6.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<a href=\"img/p6.jpg\" class=\"img-pop-up\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"middle\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\"><span class=\"lnr lnr-frame-expand\"></span></div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</section> -->
\t\t<!-- End protfolio Area -->
\t\t
\t\t
\t\t<!-- Start price Area -->
\t\t<section class=\"price-area section-gap\" id=\"price\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Wybierz idealny plan dla siebie</h1>
\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t\t<h4>Business</h4>
\t\t\t\t\t\t\t\t\t<p>Opłata jednorazowa</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t\t<h1>1000zł</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t\t<li><s>Wsparcie prze okres umowy</s></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-lg-4\">  
\t\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t\t<h4>Standard</h4>
\t\t\t\t\t\t\t\t\t<p>Opłata miesięczna</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t\t<h1>100zł</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\tGotowa w 14 dni
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Kompletna strona WWW</li>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja certyfikatu SSL</li>
\t\t\t\t\t\t\t\t\t<li>20GB Przestrzeni dyskowej</li>
\t\t\t\t\t\t\t\t\t<li>5 Kont e-mail</li>
\t\t\t\t\t\t\t\t\t<li>Wsparcie prze okres umowy</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t\t<div class=\"col-lg-4\">
\t\t\t\t\t\t<div class=\"single-price\">
\t\t\t\t\t\t\t<div class=\"top-sec d-flex justify-content-between\">
\t\t\t\t\t\t\t\t<div class=\"top-left\">
\t\t\t\t\t\t\t\t\t<h4>Godzina</h4>
\t\t\t\t\t\t\t\t\t<p>Cena za godzinę pracy</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"top-right\">
\t\t\t\t\t\t\t\t\t<h1>50zł</h1>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"bottom-sec\">
\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t<a href=\"/cdn-cgi/l/email-protection\" class=\"__cf_email__\" data-cfemail=\"34475156475f5d1a5f5b5a40555f40745359555d581a575b59\">[email&#160;protected]</a>  
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"end-sec\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja SSL</li>
\t\t\t\t\t\t\t\t\t<li>Optymalizacja strony</li>
\t\t\t\t\t\t\t\t\t<li>Ustawienia DNS</li>
\t\t\t\t\t\t\t\t\t<li>Konfiguracja VPS</li>
\t\t\t\t\t\t\t\t\t<li>Długoterminowa wpsółpraca</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t<button class=\"primary-btn price-btn mt-20\">Wybieram</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t</section> 
\t\t<!-- End price Area -->
\t\t<!-- Start callto-action Area -->
\t\t<section class=\"callto-action-area relative section-gap\">
\t\t\t<div class=\"overlay overlay-bg\"></div>
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content col-lg-9\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10 text-white\">Zainwestuj w swój biznes i bądź Online razem z nami.</h1>
\t\t\t\t\t\t\t<p class=\"text-white\">Skontaktuj się ze mną a w szybki i łatwy sposób pokażesz swój biznes w sieci. </p>
\t\t\t\t\t\t\t<a class=\"primary-btn\" href=\"#\"><span class=\"__cf_email__\" data-cfemail=\"b7c4d2d5c4dcde99dcd8d9c3d6dcc3f7d0dad6dedb99d4d8da\">[email&#160;protected]</span></a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t<!-- End calto-action Area -->
\t\t<!-- Start testomial Area -->
\t<!-- \t<section class=\"testomial-area section-gap\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t<h1 class=\"mb-10\">Testimonial from our Clients</h1>
\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"active-tstimonial-carusel\">
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t1.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t2.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t3.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t1.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t2.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t3.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t1.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t2.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"single-testimonial item\">
\t\t\t\t\t\t\t<img class=\"mx-auto\" src=\"img/t3.png\" alt=\"\">
\t\t\t\t\t\t\t<p class=\"desc\">
\t\t\t\t\t\t\t\tAccessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker, projector, hardware and more. laptop accessory
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t<h4>Mark Alviro Wiens</h4>
\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\tCEO at Google
\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</section> -->
\t\t<!-- End testomial Area -->
\t\t
\t\t<!-- Start latest-blog Area -->
\t\t<!-- \t\t\t<section class=\"latest-blog-area section-gap\" id=\"blog\">
\t\t\t\t<div class=\"container\">
\t\t\t\t\t\t<div class=\"row d-flex justify-content-center\">
\t\t\t\t\t\t\t\t<div class=\"menu-content pb-60 col-lg-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"title text-center\">
\t\t\t\t\t\t\t\t\t\t\t\t<h1 class=\"mb-10\">Latest News from our Blog</h1>
\t\t\t\t\t\t\t\t\t\t\t\t<p>Who are in extremely love with eco friendly system.</p>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-blog\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/b1.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Travel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Life style</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><h4>Portable latest Fashion for young women</h4></a>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"post-date\">31st January, 2018</p>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 single-blog\">
\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid\" src=\"img/b2.jpg\" alt=\"\">
\t\t\t\t\t\t\t\t\t\t<ul class=\"tags\">
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Travel</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Life style</a></li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\"><h4>Portable latest Fashion for young women</h4></a>
\t\t\t\t\t\t\t\t\t\t<p>
\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore.
\t\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"post-date\">31st January, 2018</p>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t</section> -->
\t\t<!-- End latest-blog Area -->

\t\t
\t\t<!-- start footer Area -->
\t\t<footer class=\"footer-area section-gap\">
\t\t\t<div class=\"container\">
\t\t\t
\t\t\t\t<div class=\"row footer-bottom d-flex justify-content-between\">
\t\t\t\t\t<p class=\"col-lg-8 col-sm-12 footer-text m-0 text-white\">
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t\tCopyright &copy;<script data-cfasync=\"false\" src=\"/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js\"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class=\"fa fa-heart-o\" aria-hidden=\"true\"></i> by <a href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
\t\t\t\t\t\t<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
\t\t\t\t\t</p>
\t\t\t\t\t<div class=\"col-lg-4 col-sm-12 footer-social\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-dribbble\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"fa fa-behance\"></i></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</footer>
\t\t<!-- End footer Area -->



<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js'></script>

<script>
\t\$(document).on(\"click\", '[data-toggle=\"lightbox\"]', function(event) {
  \t\tevent.preventDefault();
  \t\t\$(this).ekkoLightbox();
});

</script>

\t\t<script>
\t\t\t\t/*
\t\t* TheaterJS, a typing effect mimicking human behavior.
\t\t*
\t\t* Github repository:
\t\t* https://github.com/Zhouzi/TheaterJS
\t\t*
\t\t*/
\t\tvar theater = theaterJS()
\t\ttheater
\t\t.on('type:start, erase:start', function () {
\t\ttheater.getCurrentActor().\$element.classList.add('actor__content--typing')
\t\t})
\t\t.on('type:end, erase:end', function () {
\t\ttheater.getCurrentActor().\$element.classList.remove('actor__content--typing')
\t\t})
\t\t.on('type:start, erase:start', function () {
\t\tif (theater.getCurrentActor().name === 'sebski') {
\t\tdocument.body.classList.add('dark')
\t\t}
\t\t})
\t\ttheater
\t\t.addActor('vader', { speed: 0.5 })
\t\t.addActor('luke')
\t\t.addActor('sebski', { speed: 0.2 })
\t\t.addScene('sebski:sEBski')
\t\t.addScene('vader:Sebastian Laskowski')
\t\t.addScene('luke:sebski.kontakt@gmail.com')\t\t
\t\t.addScene(theater.bind());
\t\t</script>
\t\t<!-- partial -->




\t\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
\t\t<script src=\"js/vendor/bootstrap.min.js\"></script>
\t\t<script type=\"text/javascript\" src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA\"></script>
\t\t<script src=\"js/easing.min.js\"></script>
\t\t<script src=\"js/hoverIntent.js\"></script>
\t\t<script src=\"js/superfish.min.js\"></script>
\t\t<script src=\"js/jquery.ajaxchimp.min.js\"></script>
\t\t<script src=\"js/jquery.magnific-popup.min.js\"></script>
\t\t<script src=\"js/owl.carousel.min.js\"></script>
\t\t<script src=\"js/jquery.sticky.js\"></script>
\t\t<script src=\"js/jquery.nice-select.min.js\"></script>
\t\t<script src=\"js/parallax.min.js\"></script>
\t\t<script src=\"js/mail-script.js\"></script>
\t\t<script src=\"js/main.js\"></script>
\t</body>
</html>", "/home/sebski/Desktop/october/themes/sebski/layouts/sebski.htm", "");
    }
}

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

/* /home/sebski/Desktop/october/themes/sebski/layouts/cv.htm */
class __TwigTemplate_fbb686dd0d8e8754b0f5f9e8819229b79c043a6f701d046964acd955ce9bd0ca extends \Twig\Template
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
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>CV - Sebastian Laskowski</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.13.0/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/cv-styles.css");
        echo "\" rel=\"stylesheet\" />
    </head>
    <body id=\"page-top\">
        
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\" id=\"sideNav\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">
                <span class=\"d-block d-lg-none\">Sebastian Laskowski</span>
                <span class=\"d-none d-lg-block\"><img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/img/me.jpg");
        echo "\" alt=\"\" /></span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#about\">Informacje</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#experience\">Doświadczenie</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#education\">Edukacja</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#skills\">Umiejętności</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#interests\">Zainteresowania</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#awards\">Szkolenia i Certyfikaty</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class=\"container-fluid p-0\">
            <!-- About-->
            <section class=\"resume-section\" id=\"about\">
                <div class=\"resume-section-content\">
                    <h1 class=\"mb-0\">
                    Sebastian
                    <span class=\"text-primary\">Laskowski</span>
                    </h1>
                    <div class=\"subheading mb-5\">
                        Polska, 16-400 Suwałki
                        <a href=\"mailto:sebski.kontakt@gmail.com\">sebski.kontakt@gmail.com</a>
                    </div>
                    <p class=\"lead mb-5\">Wszystkiego nauczyłem się sam i z każdym dniem staram się poszerzać swoją wiedzę - MAŁYMI KROKAMI DO CELU.</p>
                    <div class=\"social-icons\">
                        <a class=\"social-icon\" href=\"https://pl.linkedin.com/in/sebastian-laskowski-6a320b162\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"social-icon\" href=\"https://github.com/projekciarz\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                        <a class=\"social-icon\" href=\"https://www.instagram.com/mr.sebski/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"social-icon\" href=\"https://www.facebook.com/mr.sebski/?modal=admin_todo_tour\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                    </div>
                </div>
            </section>
            <hr class=\"m-0\" />
            <!-- Experience-->
            <section class=\"resume-section\" id=\"experience\">
                <div class=\"resume-section-content\">
                    <h2 class=\"mb-5\">Doświadczenie</h2>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Informatyk </h3>
                                <div class=\"subheading mb-3\">SETUP Jacek Sadowski | Suwałki</div>
                                <p>Serwisowanie kas fisklanych (POSNET)</p>
                                <p>Diagnostyka i serwis komputerów osobistych</p>
                                <p>Comarch ERP XL i Optima</p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            12.2018 – 02.2020 (1 rok 3 mies.)
                            </span>
                        </div>
                    </div>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Web Developer</h3>
                                <div class=\"subheading mb-3\">IT-SERVICE | Suwałki</div>
                                <p>Administracja www.suwalki.info</p>
                                <p>Dodawanie nowych/Edycja istniejących funkcjonalności serwisu (PHP, Laravel)</p>
                                <p>Publikacja artykułów </p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            12.2017 – 03.2018 (4 mies.)
                            </span>
                        </div>
                    </div>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Monter-serwisant sieci internetowej</h3>
                                <div class=\"subheading mb-3\">PHU ADI LAN-Net | Suwałki</div>
                                <p>Rozbudowa LMS (LAN Management System) opartego na PHP</p>
                                <p>Planowanie sieci</p>
                                <p>Konfiguracja MikroTik i Ubiquiti</p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            02.2017 – 11.2017 (10 mies.)
                            </span>
                        </div>
                    </div>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Praktykant</h3>
                                <div class=\"subheading mb-3\">Świat Komputerów | Suwałki</div>
                                <p>Naprawa komputerów stacjonarnych i laptopów</p>
                                <p>Udzielanie zdalnego wsparcia klientom</p>
                                <p> Obsługa klientów serwisu</p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            04.2015 – 06.2015 (3 mies.)
                            </span>
                        </div>
                    </div>

                </div>
            </section>
        <hr class=\"m-0\" />
        <!-- Education-->
        <section class=\"resume-section\" id=\"education\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Edukacja</h2>
                <div class=\"d-flex flex-column flex-md-row justify-content-between mb-5\">
                    <div class=\"flex-grow-1\">
                        <h3 class=\"mb-0\">Zespół Szkół nr 6 im. Karola Brzostowskiego w Suwałkach</h3>
                        <div class=\"subheading mb-3\">Technik Informatyk</div>
                       
                    </div>
                    <div class=\"flex-shrink-0\"><span class=\"text-primary\">09.2012 – 04.2016</span></div>
                </div>
                
            </div>
        </section>
        <hr class=\"m-0\" />
        <!-- Skills-->
        <section class=\"resume-section\" id=\"skills\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Umiejętności</h2>
                <div class=\"subheading mb-3\">Co najmniej podstawowa znajomość</div>
                <ul class=\"list-inline dev-icons\">
                    <li class=\"list-inline-item\"><i class=\"fab fa-html5\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-css3-alt\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-js-square\"></i></li>
                    
                    <li class=\"list-inline-item\"><i class=\"fab fa-wordpress\"></i></li>
                    
                    <li class=\"list-inline-item\"><i class=\"fab fa-git\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-linux\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-laravel\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-php\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-vuejs\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-bootstrap\"></i></li>
                    
                    <li class=\"list-inline-item\"><i class=\"fab fa-windows\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-github\"></i></li>
                </ul>
            </div>
        </section>
        <hr class=\"m-0\" />
        <!-- Interests-->
        <section class=\"resume-section\" id=\"interests\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Zainteresowania</h2>
                <p class=\"mb-0\">Fotografia - Amator z Canon EOS 760D w ręku</p>
                <p class=\"mb-0\">Muzyka - Każdego dnia muszę usłyszeć coś nowego </p>
                <p class=\"mb-0\">Motoryzacja - Im więcej zakrętów tym lepiej</p>
                <p class=\"mb-0\">Rower - Najlepiej poza miastem</p>
            </div>
        </section>
        <hr class=\"m-0\" />
        <!-- Awards-->
        <section class=\"resume-section\" id=\"awards\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Szkolenia i Certyfikaty</h2>
                <ul class=\"fa-ul mb-0\">
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        Technologie światłowodowe teoria i praktyka <a href=\"https://www.cyberbajt.pl/\" target=\"_blank\">(Cyberbajt)</a>
                    </li>
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        E.14 Tworzenie aplikacji internetowych i baz danych oraz administrowanie bazami
                    </li>
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        E.13. Projektowanie lokalnych sieci komputerowych i administrowanie sieciami
                    </li>
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        E.12. Montaż i eksploatacja komputerów osobistych oraz urządzeń peryferyjnych
                    </li>
                        
                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js\"></script>
    <!-- Third party plugin JS-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\"></script>
    <!-- Core theme JS-->
    <script src=\"";
        // line 213
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/cv-scripts.js");
        echo "\"></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/sebski/Desktop/october/themes/sebski/layouts/cv.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 213,  65 => 24,  54 => 16,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />
        <title>CV - Sebastian Laskowski</title>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"assets/img/favicon.ico\" />
        <!-- Font Awesome icons (free version)-->
        <script src=\"https://use.fontawesome.com/releases/v5.13.0/js/all.js\" crossorigin=\"anonymous\"></script>
        <!-- Google fonts-->
        <link href=\"https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700\" rel=\"stylesheet\" type=\"text/css\" />
        <link href=\"https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i\" rel=\"stylesheet\" type=\"text/css\" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href=\"{{'assets/css/cv-styles.css' | theme}}\" rel=\"stylesheet\" />
    </head>
    <body id=\"page-top\">
        
        <!-- Navigation-->
        <nav class=\"navbar navbar-expand-lg navbar-dark bg-primary fixed-top\" id=\"sideNav\">
            <a class=\"navbar-brand js-scroll-trigger\" href=\"#page-top\">
                <span class=\"d-block d-lg-none\">Sebastian Laskowski</span>
                <span class=\"d-none d-lg-block\"><img class=\"img-fluid img-profile rounded-circle mx-auto mb-2\" src=\"{{'assets/img/me.jpg' | theme }}\" alt=\"\" /></span>
            </a>
            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>
            <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#about\">Informacje</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#experience\">Doświadczenie</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#education\">Edukacja</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#skills\">Umiejętności</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#interests\">Zainteresowania</a></li>
                    <li class=\"nav-item\"><a class=\"nav-link js-scroll-trigger\" href=\"#awards\">Szkolenia i Certyfikaty</a></li>
                </ul>
            </div>
        </nav>
        <!-- Page Content-->
        <div class=\"container-fluid p-0\">
            <!-- About-->
            <section class=\"resume-section\" id=\"about\">
                <div class=\"resume-section-content\">
                    <h1 class=\"mb-0\">
                    Sebastian
                    <span class=\"text-primary\">Laskowski</span>
                    </h1>
                    <div class=\"subheading mb-5\">
                        Polska, 16-400 Suwałki
                        <a href=\"mailto:sebski.kontakt@gmail.com\">sebski.kontakt@gmail.com</a>
                    </div>
                    <p class=\"lead mb-5\">Wszystkiego nauczyłem się sam i z każdym dniem staram się poszerzać swoją wiedzę - MAŁYMI KROKAMI DO CELU.</p>
                    <div class=\"social-icons\">
                        <a class=\"social-icon\" href=\"https://pl.linkedin.com/in/sebastian-laskowski-6a320b162\" target=\"_blank\"><i class=\"fab fa-linkedin-in\"></i></a>
                        <a class=\"social-icon\" href=\"https://github.com/projekciarz\" target=\"_blank\"><i class=\"fab fa-github\"></i></a>
                        <a class=\"social-icon\" href=\"https://www.instagram.com/mr.sebski/\" target=\"_blank\"><i class=\"fab fa-instagram\"></i></a>
                        <a class=\"social-icon\" href=\"https://www.facebook.com/mr.sebski/?modal=admin_todo_tour\" target=\"_blank\"><i class=\"fab fa-facebook-f\"></i></a>
                    </div>
                </div>
            </section>
            <hr class=\"m-0\" />
            <!-- Experience-->
            <section class=\"resume-section\" id=\"experience\">
                <div class=\"resume-section-content\">
                    <h2 class=\"mb-5\">Doświadczenie</h2>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Informatyk </h3>
                                <div class=\"subheading mb-3\">SETUP Jacek Sadowski | Suwałki</div>
                                <p>Serwisowanie kas fisklanych (POSNET)</p>
                                <p>Diagnostyka i serwis komputerów osobistych</p>
                                <p>Comarch ERP XL i Optima</p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            12.2018 – 02.2020 (1 rok 3 mies.)
                            </span>
                        </div>
                    </div>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Web Developer</h3>
                                <div class=\"subheading mb-3\">IT-SERVICE | Suwałki</div>
                                <p>Administracja www.suwalki.info</p>
                                <p>Dodawanie nowych/Edycja istniejących funkcjonalności serwisu (PHP, Laravel)</p>
                                <p>Publikacja artykułów </p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            12.2017 – 03.2018 (4 mies.)
                            </span>
                        </div>
                    </div>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Monter-serwisant sieci internetowej</h3>
                                <div class=\"subheading mb-3\">PHU ADI LAN-Net | Suwałki</div>
                                <p>Rozbudowa LMS (LAN Management System) opartego na PHP</p>
                                <p>Planowanie sieci</p>
                                <p>Konfiguracja MikroTik i Ubiquiti</p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            02.2017 – 11.2017 (10 mies.)
                            </span>
                        </div>
                    </div>

                    <div class=\"d-flex flex-column flex-md-row justify-content-between\">
                        <div class=\"flex-grow-1\">
                                <h3 class=\"mb-0\">Praktykant</h3>
                                <div class=\"subheading mb-3\">Świat Komputerów | Suwałki</div>
                                <p>Naprawa komputerów stacjonarnych i laptopów</p>
                                <p>Udzielanie zdalnego wsparcia klientom</p>
                                <p> Obsługa klientów serwisu</p>
                        </div>
                        <div class=\"flex-shrink-0\">
                            <span class=\"text-primary\">
                            04.2015 – 06.2015 (3 mies.)
                            </span>
                        </div>
                    </div>

                </div>
            </section>
        <hr class=\"m-0\" />
        <!-- Education-->
        <section class=\"resume-section\" id=\"education\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Edukacja</h2>
                <div class=\"d-flex flex-column flex-md-row justify-content-between mb-5\">
                    <div class=\"flex-grow-1\">
                        <h3 class=\"mb-0\">Zespół Szkół nr 6 im. Karola Brzostowskiego w Suwałkach</h3>
                        <div class=\"subheading mb-3\">Technik Informatyk</div>
                       
                    </div>
                    <div class=\"flex-shrink-0\"><span class=\"text-primary\">09.2012 – 04.2016</span></div>
                </div>
                
            </div>
        </section>
        <hr class=\"m-0\" />
        <!-- Skills-->
        <section class=\"resume-section\" id=\"skills\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Umiejętności</h2>
                <div class=\"subheading mb-3\">Co najmniej podstawowa znajomość</div>
                <ul class=\"list-inline dev-icons\">
                    <li class=\"list-inline-item\"><i class=\"fab fa-html5\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-css3-alt\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-js-square\"></i></li>
                    
                    <li class=\"list-inline-item\"><i class=\"fab fa-wordpress\"></i></li>
                    
                    <li class=\"list-inline-item\"><i class=\"fab fa-git\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-linux\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-laravel\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-php\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-vuejs\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-bootstrap\"></i></li>
                    
                    <li class=\"list-inline-item\"><i class=\"fab fa-windows\"></i></li>
                    <li class=\"list-inline-item\"><i class=\"fab fa-github\"></i></li>
                </ul>
            </div>
        </section>
        <hr class=\"m-0\" />
        <!-- Interests-->
        <section class=\"resume-section\" id=\"interests\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Zainteresowania</h2>
                <p class=\"mb-0\">Fotografia - Amator z Canon EOS 760D w ręku</p>
                <p class=\"mb-0\">Muzyka - Każdego dnia muszę usłyszeć coś nowego </p>
                <p class=\"mb-0\">Motoryzacja - Im więcej zakrętów tym lepiej</p>
                <p class=\"mb-0\">Rower - Najlepiej poza miastem</p>
            </div>
        </section>
        <hr class=\"m-0\" />
        <!-- Awards-->
        <section class=\"resume-section\" id=\"awards\">
            <div class=\"resume-section-content\">
                <h2 class=\"mb-5\">Szkolenia i Certyfikaty</h2>
                <ul class=\"fa-ul mb-0\">
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        Technologie światłowodowe teoria i praktyka <a href=\"https://www.cyberbajt.pl/\" target=\"_blank\">(Cyberbajt)</a>
                    </li>
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        E.14 Tworzenie aplikacji internetowych i baz danych oraz administrowanie bazami
                    </li>
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        E.13. Projektowanie lokalnych sieci komputerowych i administrowanie sieciami
                    </li>
                    <li>
                        <span class=\"fa-li\"><i class=\"fas fa-trophy text-warning\"></i></span>
                        E.12. Montaż i eksploatacja komputerów osobistych oraz urządzeń peryferyjnych
                    </li>
                        
                </ul>
            </div>
        </section>
    </div>
    <!-- Bootstrap core JS-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js\"></script>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js\"></script>
    <!-- Third party plugin JS-->
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js\"></script>
    <!-- Core theme JS-->
    <script src=\"{{'assets/js/cv-scripts.js' | theme}}\"></script>
</body>
</html>", "/home/sebski/Desktop/october/themes/sebski/layouts/cv.htm", "");
    }
}

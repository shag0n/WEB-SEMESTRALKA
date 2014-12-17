<?php

/* headerLogged.html */
class __TwigTemplate_031906c707dc2e7899ea9d914bf5464a28f0dfd5cf5884a83d055048435c949a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <title>Film database</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!--link rel=\"stylesheet/less\" href=\"less/bootstrap.less\" type=\"text/css\" /-->
        <!--link rel=\"stylesheet/less\" href=\"less/responsive.less\" type=\"text/css\" /-->
        <!--script src=\"js/less-1.3.3.min.js\"></script-->
        <!--append ‘#!watch’ to the browser URL, then refresh the page. -->

        <link href=\"css/bootstrap.min.css\" rel=\"stylesheet\">
        <link href=\"css/style.css\" rel=\"stylesheet\">

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src=\"js/html5shiv.js\"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"img/apple-touch-icon-144-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"img/apple-touch-icon-114-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"img/apple-touch-icon-72-precomposed.png\">
        <link rel=\"apple-touch-icon-precomposed\" href=\"img/apple-touch-icon-57-precomposed.png\">
        <link rel=\"shortcut icon\" href=\"img/favicon.png\">

        <script type=\"text/javascript\" src=\"js/jquery.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/bootstrap.min.js\"></script>
        <script type=\"text/javascript\" src=\"js/scripts.js\"></script>
    </head>

    <body>
        <div class=\"container\">
            <div class=\"row clearfix\">
                <div class=\"col-md-1 column\">
                </div>
                <div class=\"col-md-12 column\">
                    <div class=\"carousel slide\" id=\"carousel-358350\">
                        <ol class=\"carousel-indicators\">
                            <li data-slide-to=\"0\" data-target=\"#carousel-358350\">
                            </li>
                            <li data-slide-to=\"1\" data-target=\"#carousel-358350\">
                            </li>
                            <li data-slide-to=\"2\" data-target=\"#carousel-358350\" class=\"active\">
                            </li>
                        </ol>
                        <div class=\"carousel-inner\">
                            <div class=\"item active\">
                                <img alt=\"\" src=\"http://1.bp.blogspot.com/_2GMlhUrYuhI/TEKmh06JZVI/AAAAAAAAJEM/KsDJwtae1gY/s1600/Tron_Legacy_Banner_Pic.jpg\">
                            </div>
                            <div class=\"item\">
                                <img alt=\"\" src=\"http://1.bp.blogspot.com/-haHPghvvdTE/UTTZg9r9JWI/AAAAAAAAPaM/pySnv40eDeE/s1600/Untitled+-+Sign.jpeg\">
                            </div>
                            <div class=\"item\">
                                <img alt=\"\" src=\"http://3.bp.blogspot.com/-kzZf52C-KDc/UNHfGGJVN5I/AAAAAAAAGl4/fJ3rRxIXank/s1600/AlienTornado_tab+color.jpg\">
                            </div>
                        </div> <a class=\"left carousel-control\" href=\"#carousel-358350\" data-slide=\"prev\"><span class=\"glyphicon glyphicon-chevron-left\"></span></a> <a class=\"right carousel-control\" href=\"#carousel-358350\" data-slide=\"next\"><span class=\"glyphicon glyphicon-chevron-right\"></span></a>
                    </div>
                    <nav class=\"navbar navbar-default\" role=\"navigation\">
                        <div class=\"navbar-header\">
                            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\"> <span class=\"sr-only\">Toggle navigation</span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span><span class=\"icon-bar\"></span></button> <a class=\"navbar-brand\" href=\"index.php\">Domů</a>
                        </div>

                        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                            <ul class=\"nav navbar-nav\">
                                <li>
                                    <a href=\"index.php?view=osoby&ocp=herci\">Herci</a>
                                </li>
                                <li>
                                    <a href=\"index.php?view=osoby&ocp=reziseri\">Režiséři</a>
                                </li>
                                <li>
                                    <a href=\"index.php?view=osoby&ocp=scenariste\">Scénáristé</a>
                                </li>
                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Filmy<strong class=\"caret\"></strong></a>
                                    <ul class=\"dropdown-menu\">
                                        <li>
                                            <a href=\"index.php?view=filmy\">Všechny</a>
                                        </li>
                                        <li class=\"divider\">
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=sFilmy&zanr=0\">Akční</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=sFilmy&zanr=1\">Dobrodružné</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=sFilmy&zanr=2\">Komedie</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=sFilmy&zanr=3\">Drama</a>
                                        </li>
                                    </ul>
                                </li>

                                <li class=\"dropdown\">
                                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Administrace<strong class=\"caret\"></strong></a>
                                    <ul class=\"dropdown-menu\">
                                        <li>
                                            <a href=\"index.php?view=addFilm\">Přidat film</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=delFilm\">Smazat film</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=updateFilm\">Upravit fim</a>
                                        </li>
                                        <li class=\"divider\">
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=addOsoba\">Přidat osobu</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=delOsoba\">Smazat osobu</a>
                                        </li>
                                        <li class=\"divider\">
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=addStudio\">Přidat studio</a>
                                        </li>
                                        <li>
                                            <a href=\"index.php?view=delStudio\">Smazat studio</a>
                                        </li>
                                    </ul>
                                </li>          
                            </ul>

                            <ul class=\"nav navbar-nav navbar-right\">
                                <li>
                                    <a href=\"index.php?view=logout\">Log out</a>
                                </li>
                            </ul>

                            <form action=\"index.php?view=search\" method=\"post\" class=\"navbar-form navbar-right\" role=\"search\">
                                <div class=\"form-group\">
                                    <input type=\"text\"  name=\"hledany\" class=\"form-control\">
                                </div> <button type=\"submit\" class=\"btn btn-default\">Hledej</button>
                            </form>
                        </div>

                    </nav>";
    }

    public function getTemplateName()
    {
        return "headerLogged.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

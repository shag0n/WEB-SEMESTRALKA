<?php

session_start();
if (@$_POST["user"] == "admin" && @$_POST["password"] == "admin") {
    $_SESSION['logged'] = true;
}
require_once 'twig/Autoloader.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('application/view/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => 'application/view/compilation_cache',));
$twig->addGlobal('logged', @$_SESSION["logged"]);

// nacist konfiguraci
require 'config/config.inc.php';
require 'config/functions.inc.php';

require 'application/core/app.class.php';
require 'application/core/db.class.php';
require 'application/core/films-dao.php';
require 'application/core/osoba-dao.php';

// start the application
$app = new app();
// pripojit k db
$app->Connect();
// pripojeni k db
$db_connection = $app->GetConnection();

$filmy = new filmsdao($db_connection);
$osoby = new osobadao($db_connection);

switch (@$_GET['view']) {

    case 'osoby':

        $osobyList = $osoby->getOsoby(@$_GET['ocp']);
        echo $twig->render('seznamOsob.html', array('osobyList' => $osobyList));

        break;

    case 'osoba':

        $osobyList[0] = $osoby->getOsobaById(@$_GET['id']);
        echo $twig->render('osoba.html', array('osobyList' => $osobyList));

        break;

    case 'filmy':

        $filmList = $filmy->getFilms();
        echo $twig->render('seznamFilmu.html', array('filmList' => $filmList));

        break;

    case 'sFilmy':

        $filmList = $filmy->getFilmsByZanr(@$_GET['zanr']);
        echo $twig->render('seznamFilmu.html', array('filmList' => $filmList));

        break;

    case 'film':
        $film = $filmy->getFilmById(@$_GET['id']);
        $herciList = $osoby->getHerecByFilm(@$_GET['id']);
        $scenaristeList = $osoby->getScenaristaByFilm(@$_GET['id']);
        $reziseriList = $osoby->getReziserByFilm(@$_GET['id']);

        echo $twig->render('filmy.html', array('herciList' => $herciList, 'scenaristeList' => $scenaristeList, 'reziseriList' => $reziseriList, 'nazev' => $film->nazev, 'popis' => $film->popis));

        break;

    case 'search':
        $hledej = "%" . $_POST['hledany'] . "%";
        $filmList = $filmy->search($hledej);

        echo $twig->render('seznamFilmu.html', array('filmList' => $filmList));

        break;

    case 'addFilm':
        kontrolaPrihlaseni();
        if (empty($_POST['nazev'])) {
            echo $twig->render('addFilm.html', array('studioList' => $filmy->getStudios(), 'zanrList' => $filmy->getZanrs()));
        } else {
            $film = zalozFilm(0, $_POST['nazev'], $_POST['rok'], $_POST['delka'], $_POST['popis'], $_POST['hodnoceni'], $_POST['zanr'], $_POST['studio']);
            $filmy->addFilm($film);
            echo $twig->render('zprava.html', array('zprava' => "Film vložen"));
        }
        break;

    case 'delFilm':
        kontrolaPrihlaseni();
        if (empty($_POST['id'])) {
            $filmList = $filmy->getFilms();
            echo $twig->render('delFilm.html', array('filmList' => $filmList));
        } else {
            $filmy->delFilm($_POST['id']);
            echo $twig->render('zprava.html', array('zprava' => "Film smazán"));
        }

        break;

    case 'updateFilm':
        kontrolaPrihlaseni();
        $filmList = $filmy->getFilms();
        echo $twig->render('updateFilm.html', array('filmList' => $filmList));


        break;

    case 'updateFilmId':
        kontrolaPrihlaseni();
        if (empty($_POST['nazev'])) {
            $_SESSION['id'] = $_POST['id'];
            $filmList[0] = $filmy->getFilmById($_POST['id']);
            echo $twig->render('updateFilmId.html', array('filmList' => $filmList, 'studioList' => $filmy->getStudios(), 'zanrList' => $filmy->getZanrs()));
        } else {
            $film = zalozFilm(0, $_POST['nazev'], $_POST['rok'], $_POST['delka'], $_POST['popis'], $_POST['hodnoceni'], $_POST['zanr'], $_POST['studio']);
            $filmy->updateFilms($film, $_SESSION['id']);
            echo $twig->render('zprava.html', array('zprava' => "Film upraven"));
        }

        break;

    case 'addOsoba':
        kontrolaPrihlaseni();
        if (empty($_POST['jmeno'])) {
            echo $twig->render('addOsoba.html');
        } else {
            $osoba = zalozOsobu(0, $_POST['jmeno'], $_POST['prijmeni'], $_POST['narozen'], $_POST['zemrel'], $_POST['pohlavi'], $_POST['popisOsoby'], $_POST['hodnoceniOsoby']);
            $osoby->addOsoba($osoba);
            echo $twig->render('zprava.html', array('zprava' => "Osoba vložena"));
        }
        break;

    case 'delOsoba':
        kontrolaPrihlaseni();
        if (empty($_POST['id'])) {
            $osobaList = $osoby->getOsobyAll();
            echo $twig->render('delOsoba.html', array('osobaList' => $osobaList));
        } else {
            $osoby->delOsoba($_POST['id']);
            echo $twig->render('zprava.html', array('zprava' => "Osoba smazána"));
        }
        break;

    case 'addStudio':
        kontrolaPrihlaseni();
        if (empty($_POST['nazev'])) {
            echo $twig->render('addStudio.html');
        } else {
            $studio = new Studio(0, $_POST['nazev'], $_POST['adresa']);
            $filmy->addStudio($studio);
            echo $twig->render('zprava.html', array('zprava' => "Studio vloženo"));
        }
        break;

    case 'delStudio':
        kontrolaPrihlaseni();
        if (empty($_POST['id'])) {
            $studioList = $filmy->getStudios();
            echo $twig->render('delStudio.html', array('studioList' => $studioList));
        } else {
            $filmy->delStudio($_POST['id']);
            echo $twig->render('zprava.html', array('zprava' => "Studio smazáno"));
        }
        break;
        
    case 'login':
        echo $twig->render('login.html');

        break;

    case 'logout':
        $_SESSION['logged'] = false;
        $twig->addGlobal('logged', $_SESSION["logged"]);

    default :

        $filmList = $filmy->getFilms();
        $pocet = count($filmList);

        echo $twig->render('index.html', array(
            'id1' => $filmList[--$pocet]->idfilm, 'nadpis1' => $filmList[$pocet]->nazev, 'popis1' => textRest($filmList[$pocet]->popis),
            'id2' => $filmList[--$pocet]->idfilm, 'nadpis2' => $filmList[$pocet]->nazev, 'popis2' => textRest($filmList[$pocet]->popis),
            'id3' => $filmList[--$pocet]->idfilm, 'nadpis3' => $filmList[$pocet]->nazev, 'popis3' => textRest($filmList[$pocet]->popis),
            'id4' => $filmList[--$pocet]->idfilm, 'nadpis4' => $filmList[$pocet]->nazev, 'popis4' => textRest($filmList[$pocet]->popis),
            'id5' => $filmList[--$pocet]->idfilm, 'nadpis5' => $filmList[$pocet]->nazev, 'popis5' => textRest($filmList[$pocet]->popis),
            'id6' => $filmList[--$pocet]->idfilm, 'nadpis6' => $filmList[$pocet]->nazev, 'popis6' => textRest($filmList[$pocet]->popis)));

        break;
}

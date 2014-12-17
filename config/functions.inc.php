<?php
/**
 * Metoda pro zkraceni textu delsich nez 500 znaku.
 * @param string $string
 * @return string
 */
function textRest($string) {
    if (strlen($string) > 500) {

        // truncate string
        $stringCut = substr($string, 0, 500);

        // make sure it ends in a word so assassinate doesn't become ass...
        $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . " ...";
    }

    return $string;
}

/**
 * Vytvori instanci tridy osoba.
 * @param type $idosoba
 * @param type $jmeno
 * @param type $prijmeni
 * @param type $narozen
 * @param type $zemrel
 * @param type $pohlavi
 * @param type $popis
 * @param type $hodnoceni
 * @return \Osoba
 */
function zalozOsobu($idosoba, $jmeno, $prijmeni, $narozen, $zemrel, $pohlavi, $popis, $hodnoceni) {
    $osoba = new Osoba(0, null, null, null, null, null, null, null);

    $osoba->idosoba = $idosoba;
    $osoba->jmeno = $jmeno;
    $osoba->prijmeni = $prijmeni;
    $osoba->narozen = $narozen;
    if ($zemrel == "")
        $osoba->zemrel = null;
    else
        $osoba->zemrel = $zemrel;
    $osoba->pohlavi = $pohlavi;
    $osoba->popis = $popis;
    $osoba->hodnoceni = $hodnoceni;

    return $osoba;
}

/**
 * Vytvori instanci tridy film.
 * @param type $idfilm
 * @param type $nazev
 * @param type $rok
 * @param type $delka
 * @param type $popis
 * @param type $hodnoceni
 * @param type $zanr_idzanr
 * @param type $studio_idstudio
 * @return \Film
 */
function zalozFilm($idfilm, $nazev, $rok, $delka, $popis, $hodnoceni, $zanr_idzanr, $studio_idstudio) {
    $film = new Film(0, null, null, null, null, null, null, null);

    $film->idfilm = $idfilm;
    $film->nazev = $nazev;
    $film->rok = $rok;
    $film->delka = $delka;
    $film->popis = $popis;
    $film->hodnoceni = $hodnoceni;
    $film->zanr_idzanr = $zanr_idzanr;
    $film->studio_idstudio = $studio_idstudio;

    return $film;
}
/**
 * Zkrontroluje zda je uzivatel prihlasen, pokud ne ukonci script.
 */
function kontrolaPrihlaseni(){
    if(@$_SESSION['logged']!=true) die();
}

// specialni vypis
function printr($val) {
    echo "<hr><pre>";
    print_r($val);
    echo "</pre><hr>";
}

?>
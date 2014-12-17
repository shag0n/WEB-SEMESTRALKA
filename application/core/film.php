<?php

class Film {

    public $idfilm;
    public $nazev;
    public $rok;
    public $delka;
    public $popis;
    public $hodnoceni;
    public $zanr_idzanr;
    public $studio_idstudio;

    public function __construct($idfilm, $nazev, $rok, $delka, $popis, $hodnoceni, $zanr_idzanr, $studio_idstudio) {
        $this->idfilm = $idfilm;
        $this->nazev = $nazev;
        $this->rok = $rok;
        $this->delka = $delka;
        $this->popis = $popis;
        $this->hodnoceni = $hodnoceni;
        $this->zanr_idzanr = $zanr_idzanr;
        $this->studio_idstudio = $studio_idstudio;
    }

    public function getIdfilm() {
        return $this->idfilm;
    }

    public function setIdfilm($idfilm) {
        $this->idfilm = $idfilm;
    }

    public function getNazev() {
        return $this->nazev;
    }

    public function setNazev($nazev) {
        $this->nazev = $nazev;
    }

    public function getRok() {
        return $this->rok;
    }

    public function setRok($rok) {
        $this->rok = $rok;
    }

    public function getDelka() {
        return $this->delka;
    }

    public function setDelka($delka) {
        $this->delka = $delka;
    }

    public function getPopis() {
        return $this->popis;
    }

    public function setPopis($popis) {
        $this->popis = $popis;
    }

    public function getHodnoceni() {
        return $this->hodnoceni;
    }

    public function setHodnoceni($hodnoceni) {
        $this->hodnoceni = $hodnoceni;
    }

    public function getZanr_idzanr() {
        return $this->zanr_idzanr;
    }

    public function setZanr_idzanr($zanr_idzanr) {
        $this->zanr_idzanr = $zanr_idzanr;
    }

    public function getStudio_idstudio() {
        return $this->studio_idstudio;
    }

    public function setStudio_idstudio($studio_idstudio) {
        $this->studio_idstudio = $studio_idstudio;
    }

}
?>
<?php
/**
 * Description of osoba
 *
 * @author Lukas
 */
class Osoba {

    public $idosoba;
    public $jmeno;
    public $prijmeni;
    public $narozen;
    public $zemrel;
    public $pohlavi;
    public $popis;
    public $hodnoceni;

    function __construct($idosoba, $jmeno, $prijmeni, $narozen, $zemrel, $pohlavi, $popis, $hodnoceni) {
        $this->idosoba = $idosoba;
        $this->jmeno = $jmeno;
        $this->prijmeni = $prijmeni;
        $this->narozen = $narozen;
        $this->zemrel = $zemrel;
        $this->pohlavi = $pohlavi;
        $this->popis = $popis;
        $this->hodnoceni = $hodnoceni;
    }

    public function getIdosoba() {
        return $this->idosoba;
    }

    public function setIdosoba($idosoba) {
        $this->idosoba = $idosoba;
    }

    public function getJmeno() {
        return $this->jmeno;
    }

    public function setJmeno($jmeno) {
        $this->jmeno = $jmeno;
    }

    public function getPrijmeni() {
        return $this->prijmeni;
    }

    public function setPrijmeni($prijmeni) {
        $this->prijmeni = $prijmeni;
    }

    public function getNarozen() {
        return $this->narozen;
    }

    public function setNarozen($narozen) {
        $this->narozen = $narozen;
    }

    public function getZemrel() {
        return $this->zemrel;
    }

    public function setZemrel($zemrel) {
        $this->zemrel = $zemrel;
    }

    public function getPohlavi() {
        return $this->pohlavi;
    }

    public function setPohlavi($pohlavi) {
        $this->pohlavi = $pohlavi;
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

}

?>
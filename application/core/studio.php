<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of studio
 *
 * @author Lukas
 */
class studio {
    
    public $idstudio;
    public $nazev;
    public $adresa;
    
    function __construct($idstudio, $nazev, $adresa) {
        $this->idstudio = $idstudio;
        $this->nazev = $nazev;
        $this->adresa = $adresa;
    }

}
?>
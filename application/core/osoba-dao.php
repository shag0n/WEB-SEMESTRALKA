<?php

require_once 'application/core/osoba.php';

class OsobaDao extends db {

    protected $dbh;
    /**
     * Nastavi pripojeni k databazi
     * @param type $connection
     */
    public function osobadao($connection) {
        // timto si nastavim pripojeni k DB, ktere jsem dostal od app()
        $this->connection = $connection;
    }
    
    /**
     * Vrati pole osob, podle povolani
     * @param type $ocp
     * @return \Osoba
     */
    public function getOsoby($ocp) {
        $osoby = array();

        if ($ocp == "herci") {
            $table_name = 'osoba INNER JOIN hraje ON osoba.idosoba=hraje.herec_idherec';
        } else
        if
        ($ocp == "reziseri") {
            $table_name = "osoba INNER JOIN reziruje ON osoba.idosoba=reziruje.osoba_idosoba";
        } else {
            $table_name = "osoba INNER JOIN napsal ON osoba.idosoba=napsal.osoba_idosoba";
        }

        $select_columns_string = "DISTINCT (idosoba),jmeno,prijmeni,narozen,zemrel,pohlavi,popisosoby,hodnoceniosoby";
        $where_array = array();
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $osoby[$index] = new Osoba($predmety[$index]['idosoba'], $predmety[$index]['jmeno'], $predmety[$index]['prijmeni'], $predmety[$index]['narozen'], $predmety[$index]['zemrel'], $predmety[$index]['pohlavi'], $predmety[$index]['popisosoby'], $predmety[$index]['hodnoceniosoby']);
        }

        return $osoby;
    }
    
    /**
     * Vrati herce podle ID filmu
     * @param type $id
     * @return \Osoba
     */
    public function getHerecByFilm($id) {
        $osoby = array();

        $table_name = "osoba INNER JOIN hraje ON osoba.idosoba = hraje.herec_idherec INNER JOIN film ON hraje.film_idfilm = film.idfilm";

        $select_columns_string = "*";
        $where_array = array(array("column" => "hraje.film_idfilm", "value" => "$id", "symbol" => "="));
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $osoby[$index] = new Osoba($predmety[$index]['idosoba'], $predmety[$index]['jmeno'], $predmety[$index]['prijmeni'], $predmety[$index]['narozen'], $predmety[$index]['zemrel'], $predmety[$index]['pohlavi'], $predmety[$index]['popisosoby'], $predmety[$index]['hodnoceniosoby']);
        }

        return $osoby;
    }
    
    /**
     * Vrati rezisera podle ID filmu
     * @param type $id
     * @return \Osoba
     */
    public function getReziserByFilm($id) {
        $osoby = array();

        $table_name = "osoba INNER JOIN reziruje ON osoba.idosoba = reziruje.osoba_idosoba INNER JOIN film ON reziruje.film_idfilm = film.idfilm";

        $select_columns_string = "*";
        $where_array = array(array("column" => "reziruje.film_idfilm", "value" => "$id", "symbol" => "="));
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $osoby[$index] = new Osoba($predmety[$index]['idosoba'], $predmety[$index]['jmeno'], $predmety[$index]['prijmeni'], $predmety[$index]['narozen'], $predmety[$index]['zemrel'], $predmety[$index]['pohlavi'], $predmety[$index]['popisosoby'], $predmety[$index]['hodnoceniosoby']);
        }

        return $osoby;
    }
    
    /**
     * Vrati scenaristu podle ID filmu
     * @param type $id
     * @return \Osoba
     */
    public function getScenaristaByFilm($id) {
        $osoby = array();

        $table_name = "osoba INNER JOIN napsal ON osoba.idosoba = napsal.osoba_idosoba INNER JOIN film ON napsal.film_idfilm = film.idfilm";

        $select_columns_string = "*";
        $where_array = array(array("column" => "napsal.film_idfilm", "value" => "$id", "symbol" => "="));
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $osoby[$index] = new Osoba($predmety[$index]['idosoba'], $predmety[$index]['jmeno'], $predmety[$index]['prijmeni'], $predmety[$index]['narozen'], $predmety[$index]['zemrel'], $predmety[$index]['pohlavi'], $predmety[$index]['popisosoby'], $predmety[$index]['hodnoceniosoby']);
        }

        return $osoby;
    }
    
    /**
     * Vrati osobu podle jeji ID
     * @param type $id
     * @return \Osoba
     */
    public function getOsobaById($id) {

        $table_name = "osoba";
        $select_columns_string = "*";
        $where_array = array(array("column" => "idosoba", "value" => "$id", "symbol" => "="));
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectOne($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        $osoba = new Osoba($predmety['idosoba'], $predmety['jmeno'], $predmety['prijmeni'], $predmety['narozen'], $predmety['zemrel'], $predmety['pohlavi'], $predmety['popisosoby'], $predmety['hodnoceniosoby']);

        return $osoba;
    }
    
    /**
     * Vrati vsechny osoby v databazi
     * @return \Osoba
     */
    public function getOsobyAll() {

        $osoby = array();

        $table_name = "osoba";

        $select_columns_string = "*";
        $where_array = array();
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $osoby[$index] = new Osoba($predmety[$index]['idosoba'], $predmety[$index]['jmeno'], $predmety[$index]['prijmeni'], $predmety[$index]['narozen'], $predmety[$index]['zemrel'], $predmety[$index]['pohlavi'], $predmety[$index]['popisosoby'], $predmety[$index]['hodnoceniosoby']);
        }

        return $osoby;
    }
    
    /**
     * Smaze osobu z databaze
     * @param type $id
     */
    public function delOsoba($id) {

        $where = array(array('column' => 'idosoba', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('osoba', $where);

        $where = array(array('column' => 'osoba_idosoba', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('napsal', $where);

        $where = array(array('column' => 'herec_idherec', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('hraje', $where);

        $where = array(array('column' => 'osoba_idosoba', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('reziruje', $where);
    }
    
    /**
     * Prida osobu do databaze
     * @param type $osoba
     */
    public function addOsoba($osoba) {
        $item = array(
            array('column' => 'jmeno', 'value' => $osoba->jmeno),
            array('column' => 'prijmeni', 'value' => $osoba->prijmeni),
            array('column' => 'narozen', 'value' => $osoba->narozen),
            array('column' => 'zemrel', 'value' => $osoba->zemrel),
            array('column' => 'pohlavi', 'value' => $osoba->pohlavi),
            array('column' => 'popisosoby', 'value' => $osoba->popis),
            array('column' => 'hodnoceniosoby', 'value' => $osoba->hodnoceni));

        $this->DBInsertExpanded('osoba', $item);
    }

}

?>

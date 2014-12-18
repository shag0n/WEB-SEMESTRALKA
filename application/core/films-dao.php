<?php

require_once 'application/core/film.php';
require_once 'application/core/studio.php';
require_once 'application/core/zanr.php';

class FilmsDao extends db {

    protected $dbh;
    
    /**
     * Nastavi pripojeni do databaze
     * @param type $connection
     */
    public function filmsdao($connection) {
// timto si nastavim pripojeni k DB, ktere jsem dostal od app()
        $this->connection = $connection;
    }

    /**
     * Vrati vsechy filmy v databazi
     * @return \Film
     */    
    public function getFilms() {
        $films = array();

        $table_name = "film";
        $select_columns_string = "*";
        $where_array = array();
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $films[$index] = new Film($predmety[$index]['idfilm'], $predmety[$index]['nazev'], $predmety[$index]['rok'], $predmety[$index]['delka'], $predmety[$index]['popis'], $predmety[$index]['hodnoceni'], $predmety[$index]['zanr_idzanr'], $predmety[$index]['studio_idstudio']);
        }

        return $films;
    }
    
    /**
     * Vrati fim podle jeho ID
     * @param type $idFilmu
     * @return \Film
     */
    public function getFilmById($idFilmu) {

        $table_name = "film";
        $select_columns_string = "*";
        $where_array = array(array("column" => "idfilm", "value" => "$idFilmu", "symbol" => "="));
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectOne($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        $film = new Film($predmety['idfilm'], $predmety['nazev'], $predmety['rok'], $predmety['delka'], $predmety['popis'], $predmety['hodnoceni'], $predmety['zanr_idzanr'], $predmety['studio_idstudio']);

        return $film;
    }

    /**
     * Vrati vsechny filmy urciteho zanru
     * @param type $zanr
     * @return \Film
     */
    public function getFilmsByZanr($zanr) {
        $films = array();

        $table_name = "film";
        $select_columns_string = "*";
        $where_array = array(array("column" => "zanr_idzanr", "value" => "$zanr", "symbol" => "="));
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $films[$index] = new Film($predmety[$index]['idfilm'], $predmety[$index]['nazev'], $predmety[$index]['rok'], $predmety[$index]['delka'], $predmety[$index]['popis'], $predmety[$index]['hodnoceni'], $predmety[$index]['zanr_idzanr'], $predmety[$index]['studio_idstudio']);
        }

        return $films;
    }
    
    /**
     * Vyhleda film podle nazvu
     * @param type $hledany
     * @return \Film
     */
    public function search($hledany) {
        $films = array();

        $table_name = "film";
        $select_columns_string = "*";
        $where_array = array(array("column" => "nazev", "value" => "$hledany", "symbol" => "LIKE"));
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $films[$index] = new Film($predmety[$index]['idfilm'], $predmety[$index]['nazev'], $predmety[$index]['rok'], $predmety[$index]['delka'], $predmety[$index]['popis'], $predmety[$index]['hodnoceni'], $predmety[$index]['zanr_idzanr'], $predmety[$index]['studio_idstudio']);
        }

        return $films;
    }

    /**
     * Prida film do dabaze
     * @param type $film
     */
    public function addFilm($film) {
        $item = array(
            array('column' => 'nazev', 'value' => $film->nazev),
            array('column' => 'rok', 'value' => $film->rok),
            array('column' => 'delka', 'value' => $film->delka),
            array('column' => 'popis', 'value' => $film->popis),
            array('column' => 'hodnoceni', 'value' => $film->hodnoceni),
            array('column' => 'zanr_idzanr', 'value' => $film->zanr_idzanr),
            array('column' => 'studio_idstudio', 'value' => $film->studio_idstudio));

        $this->DBInsertExpanded('film', $item);
    }
    
    /**
     * Smaze film z databaze
     * @param type $id
     */
    public function delFilm($id) {

        $where = array(array('column' => 'idfilm', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('film', $where);

        $where = array(array('column' => 'film_idfilm', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('napsal', $where);

        $where = array(array('column' => 'film_idfilm', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('hraje', $where);

        $where = array(array('column' => 'film_idfilm', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('reziruje', $where);
    }

    /**
     * Prida studio do databaze
     * @param type $studio
     */
    public function addStudio($studio) {
        $item = array(
            array('column' => 'idstudio', 'value' => $studio->idstudio),
            array('column' => 'nazev', 'value' => $studio->nazev),
            array('column' => 'adresa', 'value' => $studio->adresa));
            
        $this->DBInsertExpanded('studio', $item);
    }
    
    /**
     * Smaze studio z databaze
     * @param type $id
     */
    public function delStudio($id) {
        $where = array(array('column' => 'idstudio', 'value' => $id, 'symbol' => '='));
        $this->DBDelete('studio', $where);
    }
    
    /**
     * Vrati vsechna studia v databzi
     * @return \Studio
     */
    public function getStudios() {
        $table_name = "studio";
        $select_columns_string = "*";
        $where_array = array();
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $studios[$index] = new Studio($predmety[$index]['idstudio'], $predmety[$index]['nazev'], $predmety[$index]['adresa']);
        }

        return $studios;
    }

    /**
     * Vrati vsechny zanry v databazi
     * @return \Zanr
     */
    public function getZanrs() {
        $table_name = "zanr";
        $select_columns_string = "*";
        $where_array = array();
        $limit_string = "";
        $order_by_array = array();

        // vrati pole zaznamu v podobe asociativniho pole: sloupec = hodnota
        $predmety = $this->DBSelectAll($table_name, $select_columns_string, $where_array, $limit_string, $order_by_array);

        for ($index = 0; $index < count($predmety); $index++) {
            $zanrs[$index] = new Zanr($predmety[$index]['idzanr'], $predmety[$index]['popis']);
        }

        return $zanrs;
    }

    /**
     * Zmeni udaje filmu daneho ID
     * @param type $film
     * @param type $id
     */
    public function updateFilms($film, $id) {
        $table_name = "film";
        $where_array = array(array('column' => 'idfilm', 'value' => $id, 'symbol' => '='));
        $update_string = "nazev='$film->nazev', rok='$film->rok', delka='$film->delka', popis='$film->popis', hodnoceni='$film->popis', zanr_idzanr='$film->zanr_idzanr', studio_idstudio='$film->studio_idstudio'";

        $this->DBUpdate($table_name, $update_string, $where_array);
    }

    
    public function addHraje($idHerec, $idFilm) {
        $item = array(
            array('column' => 'herec_idherec', 'value' => $idHerec),
            array('column' => 'film_idfilm', 'value' => $idFilm));
            
        $this->DBInsertExpanded('hraje', $item);
    }
    
    public function addReziruje($idreziser, $idFilm) {
        $item = array(
            array('column' => 'osoba_idosoba', 'value' => $idreziser),
            array('column' => 'film_idfilm', 'value' => $idFilm));
            
        $this->DBInsertExpanded('reziruje', $item);
    }
    
    public function addNapsal($idHerec, $idFilm) {
        $item = array(
            array('column' => 'osoba_idosoba', 'value' => $idHerec),
            array('column' => 'film_idfilm', 'value' => $idFilm));
            
        $this->DBInsertExpanded('napsal', $item);
    }
    
    public function delHraje($idHerec, $idFilm) {
         $where_array = array(array("column" => "herec_idherec", "value" => "$idHerec", "symbol" => "="),array("column" => "film_idfilm", "value" => "$idFilm", "symbol" => "="));
  
        $this->DBDelete('hraje', $where_array);
    }
    
    public function delReziruje($idreziser, $idFilm) {
        
        $where = array(array('column' => 'osoba_idosoba', 'value' => $idreziser, 'symbol' => '='),array('column' => 'film_idfilm', 'value' => $idFilm, 'symbol' => '='));
            
        $this->DBDelete('reziruje', $where);
    }
    
    public function delNapsal($idHerec, $idFilm) {
        $where = array(array('column' => 'osoba_idosoba', 'value' => $idHerec, 'symbol' => '='),array('column' => 'film_idfilm', 'value' => $idFilm, 'symbol' => '='));
            
        $this->DBDelete('napsal', $where);
    }
    
}

?>

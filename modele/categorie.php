<?php

require_once("modele/modele.php");

class Categorie extends Modele{

    protected $numCategorie;
    protected $libelleCategorie;

    public static function afficherCategorie($val){
        echo $val->libelleCategorie;
    }

}

?>
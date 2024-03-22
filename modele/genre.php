<?php

    require_once("modele/modele.php");

   class Genre extends Modele{

        protected $libelle;
        protected $libelleType;

        public static function afficherGenre($val){
            echo $val->libelle ." ";
        }

        public static function afficherType($val){
            echo $val->libelleType . " ";
        }

   }

?>
<?php

class ControleurHoraire {

    public static function afficherHoraire(){

        $titre = "Horaire";

        include("vue/debut/debutVy.php");

        include("vue/nav.html");

        include("vue/horaire.html");

        include("vue/fin.html");

    }


}
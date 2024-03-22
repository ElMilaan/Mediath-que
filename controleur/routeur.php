<?php

    require_once("config/connexion.php");

    Connexion::connect();

    require_once("modele/session.php");

    $controleur = "controleurAccueil";
    $action = "afficherAccueil";

    $tableauControleurs = ["controleurLivre","controleurFilm","controleurAlbum","controleurAccueil","controleurConnexion","controleurEmpruntRetour","controleurEmprunteur","controleurHoraire","controleurTravail"];
    $actionParDefaut = array(
        "controleurLivre" => "lireObjets",
        "controleurFilm" => "lireObjets",
        "controleurAlbum" => "lireObjets",
        "controleurAccueil" => "afficherAccueil",
        "controleurConnexion" => "afficherConnexion",
        "controleurEmpruntRetour" => "afficherEmpRet",
        "controleurEmprunteur" => "lireUnObjet",
        "controleurHoraire" => "afficherHoraire",
        "controleurTravail" => "afficherTravail"
    );

    if(array_key_exists("controleur",$_GET) && in_array($_GET["controleur"],$tableauControleurs)){
        $controleur = $_GET["controleur"];
    }

    require_once("controleur/$controleur.php");
    
    if(array_key_exists("action",$_GET) && in_array($_GET["action"],get_class_methods($controleur))){
        $action = $_GET["action"];
    }
    else{
        $action = $actionParDefaut[$controleur];
    }

    $controleur::$action();

?>



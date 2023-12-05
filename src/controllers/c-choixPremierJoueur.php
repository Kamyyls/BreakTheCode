<?php

require_once('src/model/global.php');

function choixPremierJoueur() {

    $menu['page'] = "choixPremierJoueur";
    require ('view/inc/inc.head.php');
    require ('view/inc/inc.header.php');
    require ('view/v-choixPremierJoueur.php');
    require ('view/inc/inc.footer.php');
    $premierJoueur='Robot';
    if (isset($_POST['human'])) {
         $premierJoueur = $_POST['human'];
    }
    else if(isset($_POST['robot'])){
        $premierJoueur = $_POST['robot'];
    }
    return $premierJoueur;
}
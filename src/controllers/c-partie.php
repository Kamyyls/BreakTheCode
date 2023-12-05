<?php

require_once('src/model/global.php');
require_once('src/model/carte.php');
require_once('src/model.php');
require_once('src/model/tuile.php');

function partie(){
    $menu['page'] = "partie";
    //Traitement
    $tuile = new tuile(1,1,1,"carte_gris_1.png");
    $allTuiles=$tuile->recupererLesTuiles();
    $tuilesPremierJoueur = $tuile->generationDe5Tuiles($allTuiles);
    $tuilesRestantes =$tuile->deduitTuiles($tuilesPremierJoueur,$allTuiles);
    $tuilesSecondJoueur = $tuile->generationDe5Tuiles($tuilesRestantes);

    require('view/inc/inc.head.php');
    require('view/inc/inc.header.php');
    require('view/v-partie.php');
    require('view/inc/inc.footer.php');
}

<?php 
/**
 * @file controler/aventurier/voir_aventurier.php 
 * @brief Ce controleur permet de voir les données d'un aventurier.
 * 
 * @author  Birdimol
 * @version 2.0 
 * @date 06 novembre 2015
 */
 
    $aventurier = new Aventurier($_GET["aventurier_id"]);
    if(is_file(ROOT."/view/aventurier/voir_aventurier.php"))
    {
        include (ROOT."/view/aventurier/voir_aventurier.php");
    }
    else
    {
        include(ROOT."/view/vue_introuvable.php");
    }

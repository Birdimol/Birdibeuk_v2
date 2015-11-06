<?php
/**
 * @file controler/archives/archives_aventuriers.php 
 * @brief Ce controleur prépare la liste des aventuriers.
 *
 * On peut trier les résultats par nom, niveau, metier et origine. On peut aussi filtrer avec un nom spécifique. 
 * @author  Birdimol
 * @version 2.0 
 * @date 06 novembre 2015
 */
 
    if(is_file(ROOT."/view/archives/archives_aventuriers.php"))
    {
        //ordre d'affichage par défaut
        $ordre = "AVENTURIER_NOM ASC";
        
        //si un ordre est présent dans l'url, on l'utilise
        if(isset($_GET["sort"]))
        {
            $ordre = str_replace("-"," ",$_GET["sort"]);
        }
        
        //nom à rechercher par défaut : vide = tous
        $nom = "";
        
        //si un nom est présent dans l'url, on l'utilise
        if(isset($_GET["nom"]))
        {
            $nom = $_GET["nom"];
        }
        
        //index choisi par défaut : 1 = les 100 premiers résultats
        $index_choisi = 1;
        
        //si l'index est présent dans l'url, on l'utilise pour ne sortir que les résultat de (index-1)*100 à index*100
        if(isset($_GET["index"]))
        {
            $index_choisi = $_GET["index"];
        }
        
        //nombre total d'aventurier (pour info en haut de page)
        $compte = Aventurier::Compter($nom);
        $listeAventuriers = Aventurier::Lister($ordre,$nom,$index_choisi);
        include(ROOT."/view/archives/archives_aventuriers.php");
    }
    else
    {
        include(ROOT."/view/vue_introuvable.php");
    }
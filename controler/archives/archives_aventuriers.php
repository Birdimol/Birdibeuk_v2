<?php
    if(is_file(ROOT."/view/archives/archives_aventuriers.php"))
    {
        $listeAventuriers = Aventurier::Lister();
        include(ROOT."/view/archives/archives_aventuriers.php");
    }
    else
    {
        include(ROOT."/view/vue_introuvable.php");
    }
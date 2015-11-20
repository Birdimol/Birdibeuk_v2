<?php 

    if(is_file(ROOT."/view/inscription_connexion/inscription_connexion.php"))
    {
        include(ROOT."/view/inscription_connexion/inscription_connexion.php");
    }
    else
    {
        include(ROOT."/view/vue_introuvable.php");
    }
    
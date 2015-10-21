<?php 

    if(is_file(ROOT."/view/creation_aventurier/creation_aventurier_1.php"))
    {
        include(ROOT."/view/creation_aventurier/creation_aventurier_1.php");
    }
    else
    {
        include(ROOT."/view/vue_introuvable.php");
    }
    
<?php 
        
    $ctrl = "accueil";
    
    if(isset($_GET["ctrl"]))
    {
        $ctrl = $_GET["ctrl"];
    }
    
    if(strpos($ctrl,"creation_aventurier") !== false)
    {
        inclure_controleur(__DIR__."/../controler/creation_aventurier/".$ctrl.".php");
    }
    else
    {
        //controleur à la racine
        inclure_controleur(__DIR__."/../controler/".$ctrl.".php");
    }
    
    function inclure_controleur($file)
    {
        if(is_file($file))
        {
            include($file);           
        }
        else
        {
            //404
            include(__DIR__."/../view/404.php");
        }
    }    
    
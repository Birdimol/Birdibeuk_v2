<?php
     /**
     * @author  Birdimol
     * @since   2.0
     * Point d'entrée de l'application
     * Toute requete sur le site (hors requete ajax) commence ici.
     */
    session_start();
    
    include(__DIR__."/config/config.php");
    include(__DIR__."/model/autoloader.class.php");
    
    if(DEBUG)
    {
        error_reporting(E_ALL);
        ini_set('display_errors', '1');
    }
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset="utf-8">
        <link rel="stylesheet" href="include/jquery/jquery-ui.css" />
        <link rel="stylesheet" href="include/bootstrap/css/bootstrap.css"/>
        <link rel="stylesheet" href="include/bootstrap/css/bootstrap-theme.css"/>
        <link rel="stylesheet" href="css/base.css"/>
        <script src='include/jquery/jquery-1.9.1.js' ></script>
        <script src='include/jquery/jquery-ui.js' ></script>
        <script src='include/bootstrap/js/bootstrap.min.js' ></script>        
    </head>
    <body>
        <div id="site_structure"/>
            <?php
                include(__DIR__."/controler/header.php");
                include(__DIR__."/controler/principal.php");
                include(__DIR__."/controler/footer.php");
            ?>
        </div>
    </body>
    <script src='js/mise_en_page.js' ></script>
    <script>
        mise_en_page();
        $(window).resize(function(){ mise_en_page(); return false });
    </script>
</html>
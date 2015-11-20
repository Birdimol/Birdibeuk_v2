<?php 
    include(__DIR__."/config/config.php");
    include(__DIR__."/model/autoloader.class.php");
    
    $db = DatabaseManager::getDb();
    
    $requete = "select * 
        from ".PREFIX_DB."lien_aventurier_arme
        join ".PREFIX_DB."arme on ".PREFIX_DB."arme.ARME_ID = ".PREFIX_DB."lien_aventurier_arme.ID_ARME LIMIT 10, 9999";
        
    $stmt = $db->prepare($requete);

    $stmt->execute();
    
    while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
    {
        $arme = new Arme($rs);
        $arme->ARME_AVENTURIER_ID = $rs["ID_AVENTURIER"];
        $arme->ajouter();
    }
?>
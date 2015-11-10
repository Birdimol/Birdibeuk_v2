<?php
/**
 * @file Magie.class.php 
 * @brief Ce fichier définit la classe Magie.
 * @author  Birdimol
 * @version 2.0 
 * @date 10 Novembre 2015
 */

 /**
 * @brief La classe Dieu.
 *
 * Cette classe permet la gestion des magies praticables pas les aventuriers.
 * @author  Birdimol
 * @version 2.0 
 * @date 10 Novembre 2015
 */
class Magie 
{ 
    private $MAGIE_ID;		
    private $MAGIE_NOM;		
    private $MAGIE_DISPONIBLE;		

    //constructeur
    public function __construct($parametre = null)
    {
        //Le paramètre envoyé est-il vide ?
        if(is_null($parametre) || empty($parametre))
        {
            //Si le paramètre envoyé est vide l'objet reste vide aussi.
        }
        else if(is_array($parametre))
        {
            $this->loadFromArray($parametre);               
        }
        else if(is_numeric($parametre))
        {
            $this->loadFromDB($parametre);
        }
    }

    //get
    public function __get($var)
    {
        return $this->$var;	
    }
    
    //set
    public function __set($var, $value)
    {
        $this->$var = $value;
    }	

    //set all from form
    public function loadFromArray($array)
    {							
        foreach($array as $key=>$value)
        {
            if(property_exists("Magie",$key))
            {
                $this->$key = $value;
            }
        }
    }

    //liste
    public static function Lister()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."magie";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new magie($rs);
        }
        return $tableau;
    }

    public function ajouter()
    {
        $db = DatabaseManager::getDb();
        $requete = "INSERT INTO magie (NOM, disponible) VALUES ('".$this->NOM."', ".$this->disponible.")";
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        $this->ID_MAGIE = $stmt->lastInsertId(); 
    }

    public function modifier()
    {
        $db = DatabaseManager::getDb();
        $requete = "UPDATE magie SET NOM = '".$this->NOM."', disponible = ".$this->disponible." WHERE ID_MAGIE = ".$this->ID_MAGIE;
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function supprimer()
    {
        $db = DatabaseManager::getDb();
        $requete = "DELETE FROM magie WHERE ID_MAGIE = ".$this->ID_MAGIE;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    //get_data_from_db
    public function loadFromDB($id)
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."magie WHERE MAGIE_ID = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->LoadFromArray($ligne);
    }

    public function debug()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

}

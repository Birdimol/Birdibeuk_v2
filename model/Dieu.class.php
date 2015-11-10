<?php
/**
 * @file Dieu.class.php 
 * @brief Ce fichier définit la classe Dieu.
 * @author  Birdimol
 * @version 2.0 
 * @date 10 Novembre 2015
 */

 /**
 * @brief La classe Dieu.
 *
 * Cette classe permet la gestion des Dieu de prêtres et paladins.
 * @author  Birdimol
 * @version 2.0 
 * @date 10 Novembre 2015
 */
class Dieu 
{ 
    //Attributs
    private $DIEU_ID;		
    private $DIEU_NOM;		
    private $DIEU_DESCRIPTION;	

    /**
     * @brief bool : Détermine si on peut être paladin de ce Dieu.
     */
    private $DIEU_PALADIN;

    /**
     * @brief bool : Détermine si on peut être prêtre de ce Dieu.
     */    
    private $DIEU_PRETRE;

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

    public function loadFromArray($array)
    {							
        foreach($array as $key=>$value)
        {
            if(property_exists("Dieu",$key))
            {
                $this->$key = $value;
            }
        }
    }

    //liste
    public static function Lister()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."dieu";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new dieu($rs);
        }
        return $tableau;
    }
	
	public static function ListerPourPaladin()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."dieu where DIEU_PALADIN = 1";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new dieu($rs);
        }
        return $tableau;
    }
	
	public static function ListerPourPretre()
    {
        $db = getConnexionDB();
        $requete = "SELECT * FROM ".PREFIX_DB."dieu where dieu_pretre = 1";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new dieu($rs);
        }
        return $tableau;
    }

    public function ajouter()
    {
        $db = getConnexionDB();
        $requete = "INSERT INTO ".PREFIX_DB."dieu (DIEU_NOM, DIEU_DESCRIPTION, DIEU_PALADIN, DIEU_PRETRE) VALUES ('".$this->DIEU_NOM."', '".$this->DIEU_DESCRIPTION."', ".$this->DIEU_PALADIN.", ".$this->DIEU_PRETRE.")";
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        $this->DIEU_ID = $stmt->lastInsertId(); 
    }

    public function modifier()
    {
        $db = getConnexionDB();
        $requete = "UPDATE dieu SET NOM = '".$this->DIEU_NOM."', DESCRIPTION = '".$this->DIEU_DESCRIPTION."', PALADIN = ".$this->DIEU_PALADIN.", PRETRE = ".$this->DIEU_PRETRE." WHERE DIEU_ID = ".$this->DIEU_ID;
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function supprimer()
    {
        $db = getConnexionDB();
        $requete = "DELETE FROM dieu WHERE DIEU_ID = ".$this->DIEU_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    //get_data_from_db
    public function get_data_from_db($id)
    {
        $db = getConnexionDB();
        $requete = "SELECT * FROM dieu WHERE DIEU_ID = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->loadFromArray($ligne);    
    }

    public function debug()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

}

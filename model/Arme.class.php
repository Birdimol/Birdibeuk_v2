<?php
/**
 * @file Arme.class.php 
 * @brief Ce fichier définit la classe Arme.
 * @author  Birdimol
 * @version 2.0 
 * @date 13 novembre 2015
 */

 /**
 * @brief La classe Arme.
 *
 * Cette classe permet la gestion des armes utilisables dans le jdr.
 * @author  Birdimol
 * @version 2.0 
 * @date 13 novembre 2015
 */
class Arme 
{ 
    //Attributs
    private $ARME_ID;		
    private $ARME_NOM;		
    private $ARME_NOM_COURT;		
    private $ARME_PRIX;		
    private $ARME_PI;		
    private $ARME_RUP;		
    private $ARME_AT;		
    private $ARME_PRD;		
    private $ARME_COU;		
    private $ARME_INT;		
    private $ARME_CHA;		
    private $ARME_AD;		
    private $ARME_FOR;		
    private $ARME_SPECIAL;		
    private $ARME_JET;		
    private $ARME_QUALITE;		
    private $ARME_TYPE;		
    private $ARME_DEUXMAINS;		
    private $ARME_DEBASE;
    private $ARME_USER_CREATION_ID;
    private $ARME_OFFICIEL;
    private $ARME_AVENTURIER_ID;
    
    private $compte;

    /**
     * @brief Constructeur de la classe Arme
     *
     * Peut être initialisé sans paramètres, avec un tableau dont 
     * les index correspondant aux attributs ou encore avec l'ID 
     * en DB du record correspondant à l'arme.
     * @param   $parametre parametre optionel, peut être un tableau ou un id en db.      
     *
     * @return  Arme 
     * l'Objet instancié
     */
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
    
    /**
     * @brief Récupère tous les modificateurs de caractéristiques
     *
     * Renvoie sous forme de texte sur deux lignes toutes les modification que l'Arme apporte sur les caracs.  
     *
     * @return  String Ex: AT+1/PRD-1<br>COU+1 
     * Les modificateur de caractéristiques.
     */
    public function getModifCaracAsString()
    {
        $string1 = "";
        $string2 = "";
        
        if(!empty($this->ARME_AT))
        {
            $string1.="AT";
            if($this->ARME_AT > 0)
            {
                $string1.="+";
            }
            $string1.=$this->ARME_AT;
        }
        
        if(!empty($this->ARME_PRD))
        {
            if(!empty($string1))
            {
                $string1.= "/";
            }
            $string1.="PRD";
            if($this->ARME_PRD > 0)
            {
                $string1.="+";
            }
            $string1.=$this->ARME_PRD;
        }
       
        if(!empty($this->ARME_COU))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="COU";
            if($this->ARME_COU > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_COU;
        }
        if(!empty($this->ARME_INT))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="INT";
            if($this->ARME_INT > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_INT;
        }
        if(!empty($this->ARME_CHA))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="CHA";
            if($this->ARME_CHA > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_CHA;
        }
        if(!empty($this->ARME_AD))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="AD";
            if($this->ARME_AD > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_AD;
        }
        if(!empty($this->ARME_FO))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="FO";
            if($this->ARME_FO > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_FO;
        }
        
        $string = $string1;
        if(!empty($string1) && !empty($string2))
        {
            $string.= "<br>";
        }
        $string.= $string2;
        
        return $string;
    }
    
    /**
     * @brief Récupère tous les modificateurs de caractéristiques principales
     *
     * Renvoie sous forme de texte toutes les modification que l'Arme apporte sur les caracs principales.  
     *
     * @return  String  EX: COU+1/CHA-1
     * Les modificateur de caractéristiques.
     */
    public function modifCharac()
    {
        $string2 = "";
        
        if(!empty($this->ARME_COU))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="COU";
            if($this->ARME_COU > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_COU;
        }
        if(!empty($this->ARME_INT))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="INT";
            if($this->ARME_INT > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_INT;
        }
        if(!empty($this->ARME_CHA))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="CHA";
            if($this->ARME_CHA > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_CHA;
        }
        if(!empty($this->ARME_AD))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="AD";
            if($this->ARME_AD > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_AD;
        }
        if(!empty($this->ARME_FO))
        {
            if(!empty($string2))
            {
                $string2.= "/";
            }
            $string2.="FO";
            if($this->ARME_FO > 0)
            {
                $string2.="+";
            }
            $string2.=$this->ARME_FO;
        }
        
        return $string2;
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
    public function loadFromArray($post)
    {        
        foreach($post as $key=>$value)
        {
            if(property_exists("Arme",$key))
            {
                $this->$key = $value;
            }
        }
    }
    
    //liste
    public static function ListerPourAdmin()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT arm.*,(select count(*) from lien_aventurier_arme where id_arme = arm.id) as compte FROM `arme`arm";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new arme($rs);
        }
        return $tableau;
    }

    //liste
    public static function Lister()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."arme order by arme_nom asc";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new arme($rs);
        }
        return $tableau;
    }
    
    public static function ListerBase()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."arme where ARME_DEBASE = 1 order by ARME_PRIX asc, ARME_NOM asc";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $temp = new arme($rs);
            $ajouter = true;
            foreach($tableau as $arme)
            {
                if(Arme::ArmesEgales($arme,$temp))
                {
                    $ajouter = false;
                }
            }
            if($ajouter)
            {
                $tableau[] = $temp;
            }            
        }
        return $tableau;
    }
    
    public static function ListerOfficiel()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."arme where arme_officiel = 1 order by arme_PRIX asc, arme_NOM asc";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $temp = new arme($rs);
            $ajouter = true;
            foreach($tableau as $arme)
            {
                if(Arme::ArmesEgales($arme,$temp))
                {
                    $ajouter = false;
                }
            }
            
            if($ajouter)
            {
                $tableau[] = $temp;
            }            
        }
        return $tableau;
    }
    
    /**
     * @brief Determine si les deux armes envoyées sont égales.
     *
     * Même si leur ID est différent.  
     *
     * @param  $arme1  Arme
     * @param  $arme2  Arme
     * @return  Bool  
     * true si les armes sont égales, false sinon.
     */
    public static function ArmesEgales($arme1,$arme2)
    {
        $attributs = get_object_vars($arme1);
        foreach($attributs as $attribut)
        {
            if(!isset($arme2->$attribut))
            {
                return false;
            }
            else
            {
                if($arme2->$attribut != $arme1->$attribut && $attribut != 'ARME_ID')
                {
                    return false;
                }
            }
        }
        return true;
    }
	
	public function verifieValeurs()
    {       
        if(empty($this->ARME_PR)){$this->ARME_PR = 0;}
        if(empty($this->ARME_AVENTURIER_ID)){$this->ARME_AVENTURIER_ID = 0;}
        if(empty($this->ARME_COU)){$this->ARME_COU = 0;}
        if(empty($this->ARME_INT)){$this->ARME_INT = 0;}
        if(empty($this->ARME_CHA)){$this->ARME_CHA = 0;}
        if(empty($this->ARME_AD)){$this->ARME_AD = 0;}
        if(empty($this->ARME_FO)){$this->ARME_FO = 0;}
        if(empty($this->ARME_AT)){$this->ARME_AT = 0;}
        if(empty($this->ARME_PRD)){$this->ARME_PRD = 0;}
        if(empty($this->ARME_PRIX)){$this->ARME_PRIX = 0;}
        if(empty($this->ARME_QUALITE)){$this->ARME_QUALITE = 0;}
        if(empty($this->ARME_DEBASE)){$this->ARME_DEBASE = 0;}
        if(empty($this->ARME_OFFICIEL)){$this->ARME_OFFICIEL = 0;}
    }
    
    //liste
    public static function ListerTypesArme()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT distinct ARME_TYPE FROM ".PREFIX_DB."arme order by ARME_TYPE asc";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = $rs['ARME_TYPE'];
        }
        return $tableau;
    }
	
	public static function ListerTypesArmeDeBase()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT distinct ARME_TYPE FROM ".PREFIX_DB."arme where arme_debase = 1 order by ARME_TYPE asc";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = $rs['ARME_TYPE'];
        }
        return $tableau;
    }
    
    public static function ListerTypesArmeOfficiel()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT distinct ARME_TYPE FROM ".PREFIX_DB."arme where arme_officiel = 1 order by ARME_TYPE asc";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = $rs['ARME_TYPE'];
        }
        return $tableau;
    }

    public function ajouter()
    {
        $id_user_creation = 0;
        $user = null;
        if(isset($_SESSION["birdibeuk_user"]))
        {        
            $user = unserialize($_SESSION["birdibeuk_user"]);
        }
        
        if($user != null)
        {
            $id_user_creation = $user->id;
        }
        
		$this->verifieValeurs();
        $db = DatabaseManager::getDb();
        $requete = "INSERT INTO ".PREFIX_DB."arme (
            ARME_NOM, 
            ARME_NOM_COURT, 
            ARME_PRIX, 
            ARME_PI, 
            ARME_RUP, 
            ARME_AT, 
            ARME_PRD, 
            ARME_COU, 
            ARME_INT, 
            ARME_CHA, 
            ARME_AD, 
            ARME_FO, 
            ARME_SPECIAL, 
            ARME_JET, 
            ARME_QUALITE, 
            ARME_TYPE, 
            ARME_DEUXMAINS, 
            ARME_DEBASE, 
            ARME_USER_CREATION_ID, 
            ARME_OFFICIEL,
            ARME_AVENTURIER_ID
            ) 
        VALUES 
            (
            '".str_replace("'","''",$this->ARME_NOM)."', 
            '".$this->ARME_NOM_COURT."', 
            ".$this->ARME_PRIX.", 
            '".$this->ARME_PI."', 
            '".$this->ARME_RUP."', 
            ".$this->ARME_AT.", 
            ".$this->ARME_PRD.", 
            ".$this->ARME_COU.", 
            ".$this->ARME_INT.", 
            ".$this->ARME_CHA.", 
            ".$this->ARME_AD.", 
            ".$this->ARME_FO.", 
            '".$this->ARME_SPECIAL."', 
            ".$this->ARME_JET.", 
            ".$this->ARME_QUALITE.", 
            '".$this->ARME_TYPE."', 
            ".$this->ARME_DEUXMAINS.", 
            ".$this->ARME_DEBASE.", 
            ".$id_user_creation.", 
            ".$this->ARME_OFFICIEL.",
            ".$this->ARME_AVENTURIER_ID."
            )";

        $stmt = $db->prepare($requete);
        $stmt->execute();
        $this->ARME_ID = $db->lastInsertId(); 
        
        echo $requete."<br>";
    }

    public function modifier()
    {
		$this->verifieValeurs();
        $db = DatabaseManager::getDb();        
        //$requete = "UPDATE ".PREFIX_DB."arme SET NOM = '".str_replace("'","''",$this->ARME_NOM)."', NOM_COURT = '".$this->ARME_NOM_COURT."', PRIX = ".$this->ARME_PRIX.", PI = '".$this->ARME_PI."', RUP = '".$this->ARME_RUP."', AT = ".$this->ARME_AT.", PRD = ".$this->ARME_PRD.", COU = ".$this->ARME_COU.", `INT` = ".$this->ARME_INT.", CHA = ".$this->ARME_CHA.", AD = ".$this->ARME_AD.", `FOR` = ".$this->ARME_FO.", SPECIAL = '".$this->ARME_SPECIAL."', JET = ".$this->ARME_JET.", qualite = ".$this->ARME_QUALITE.", type = '".$this->ARME_TYPE."', deuxmains = ".$this->ARME_DEUXMAINS.", debase = ".$this->ARME_DEBASE.", officiel = ".$this->ARME_OFFICIEL." WHERE ID = ".$this->ARME_ID;
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function supprimer()
    {
        $db = DatabaseManager::getDb();
        $requete = "DELETE FROM ".PREFIX_DB."arme WHERE ARME_ID = ".$this->ARME_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    //get_data_from_db
    public function get_data_from_db($id)
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."arme WHERE ARME_ID = ".$id;    
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

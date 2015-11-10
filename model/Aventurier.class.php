<?php
/**
 * @file Aventurier.class.php 
 * @brief Ce fichier définit la classe Aventurier.
 * @author  Birdimol
 * @version 2.0 
 * @date 30 octobre 2015
 */

 /**
 * @brief La classe Aventurier.
 *
 * Cette classe permet la gestion des aventuriers.
 * @author  Birdimol
 * @version 2.0 
 * @date 28 octobre 2015
 */
class Aventurier 
{ 
    /**
     * @brief int : ID du record en DB représentant l'Aventurier
     */
    private $AVENTURIER_ID;

    /**
     * @brief string : Nom de l'Aventurier
     */
    private $AVENTURIER_NOM;

    /**
     * @brief string : Sexe de l'Aventurier, texte libre
     */
    private $AVENTURIER_SEXE;	
	
    /**
     * @brief int : Id en DB de l'origine de l'Aventurier
     */
    private $AVENTURIER_ID_ORIGINE;
    
    /**
     * @brief int : Id en DB du metier de l'Aventurier
     */
    private $AVENTURIER_ID_METIER;	
	
    /**
     * @brief int : Point de vie maximum de l'Aventurier
     */
    private $AVENTURIER_EV;

     /**
     * @brief int : Point d'energie astrale maximum de l'Aventurier
     */
    private $AVENTURIER_EA;
    
    /**
     * @brief int : Courage de l'Aventurier
     */
    private $AVENTURIER_COU;
    
    /**
     * @brief int : Intelligence de l'Aventurier
     */	
    private $AVENTURIER_INT;

    /**
     * @brief int : Charisme de l'Aventurier
     */	
    private $AVENTURIER_CHA;

    /**
     * @brief int : Adresse de l'Aventurier
     */	
    private $AVENTURIER_AD;

     /**
     * @brief int : Force de l'Aventurier
     */	
    private $AVENTURIER_FO;

     /**
     * @brief int : Point d'attaque de l'Aventurier
     */	
    private $AVENTURIER_AT;

    /**
     * @brief int : Point de parade de l'Aventurier
     */		
    private $AVENTURIER_PRD;

    /**
     * @brief int : Point d'expérience de l'Aventurier
     */	
    private $AVENTURIER_XP;
    
    /**
     * @brief int : Point de destin de l'Aventurier
     */		
    private $AVENTURIER_DESTIN;

    /**
     * @brief int : Nombre de pièces d'or possédées par l'Aventurier
     */    
    private $AVENTURIER_OR;
    
    /**
     * @brief int : Nombre de pièces d'argent possédées par l'Aventurier
     */
    private $AVENTURIER_ARGENT;

    /**
     * @brief int : Nombre de pièces de cuivre possédées par l'Aventurier
     */    
    private $AVENTURIER_CUIVRE;	

	/**
     * @brief int : Niveau de l'Aventurier
     */  
    private $AVENTURIER_NIVEAU;
    
    /**
     * @brief string : Permet à l'Aventurier de renommer métier officiel (Chasseur de prime, boulanger, ...)
     */  
    private $AVENTURIER_AUTRE_METIER;
    
    /**
     * @brief int : Id en DB du joueur possédant l'Aventurier
     */
    private $AVENTURIER_USER_ID;
    
    /**
     * @brief int : Spécifie si l'Aventurier est de type "aventurier" ou un "soldat"
     */
    private $AVENTURIER_TYPE;
    
    /**
     * @brief int : Score de Magie physique (moyenne INT/AD) de l'Aventurier
     */
    private $AVENTURIER_MAGIEPHYS;
    
    /**
     * @brief int : Score de Magie psychique (moyenne INT/CHA) de l'Aventurier
     */
    private $AVENTURIER_MAGIEPSY;
    
    /**
     * @brief int : Score de résistance magique (moyenne COU/INT/FO) de l'Aventurier
     */
    private $AVENTURIER_RESISTMAG;
    
    /**
     * @brief int : Id en DB du type de magie pratiquée par l'Aventurier
     *
     * 0 = pas de magie pratiquée
     */
    private $AVENTURIER_TYPEMAGIE_ID;
    
    /**
     * @brief int : Id en DB du dieu de l'Aventurier
     *
     * 0 = pas de Dieu
     */
    private $AVENTURIER_DIEU_ID;
    
    /**
     * @brief int : Protection maximum de l'Aventurier en fonction de son origine et métier
     */
    private $AVENTURIER_PR_MAX;
    
    /**
     * @brief int : Protection réelle de l'Aventurier en fonction de son matos
     */
    private $AVENTURIER_PR;
    
    /**
     * @brief string : Code d'accès à l'Aventurier pour modifier ses données
     */
    private $AVENTURIER_CODEACCES;
    
    /**
     * @brief int : Score de bonus aux dégats de l'Aventurier
     */
    private $AVENTURIER_BONUS_DEGAT;
    
    /**
     * @brief string : url de l'image de l'Aventurier
     */
    private $AVENTURIER_IMAGE_URL;
    
    /**
     * @brief int : Points de vie actuels de l'Aventurier
     */
    private $AVENTURIER_EVACTUEL;
    
    /**
     * @brief int : Points d'énergie astrale actuels de l'Aventurier
     */
    private $AVENTURIER_EAACTUEL;
    
    /**
     * @brief string : Description de l'Aventurier
     */
    private $AVENTURIER_DESCRIPTION;
    
    /**
     * @brief string : Le proverbe favori de l'Aventurier
     */
    private $AVENTURIER_PROVERBE;
    
    
    /**
     * @brief Dieu : Dieu de l'Aventurier
     *
     * null = pas de Dieu
     */
    private $dieu;
    
    /**
     * @brief Metier : Metier de l'Aventurier
     */
    private $metier;
    
    /**
     * @brief Origine : Origine de l'Aventurier
     */
    private $origine;
    
    /**
     * @brief array : Tableau contenant toutes les armes de l'Aventurier
     */
    private $armes;
    
    /**
     * @brief array : Tableau contenant toutes les protections de l'Aventurier
     */
    private $protections;
    
    /**
     * @brief array : Tableau contenant toutes les equipement de l'Aventurier
     */
    private $equipements;
    
    /**
     * @brief array : Tableau contenant toutes les compétences choisies par l'Aventurier en plus de ses compétences liées
     */
    private $competences_choisies;
    
    /**
     * @brief array : Tableau contenant toutes les compétences liées à l'Aventurier de par son origine et son métier
     */
    private $competences_liees;
    
    /**
     * @brief array : Tableau contenant toutes les compétences de l'Aventurier
     */
    private $competences;
    
    /**
     * @brief S'assure que l'Aventurier est prêt pour l'affichage.
     *
     * Permet de s'assurer que les tableaux de l'Aventurier ne soient pas à NULL et ne provoquent pas d'erreur dans les vues.
     * @return void
     */
    public function prepareObjet()
    {
        if(empty($this->armes) || $this->armes == null || $this->armes=="")
        {
            $this->armes = array();
        }
        if(empty($this->protections) || $this->protections == null || $this->protections=="")
        {
            $this->protections = array();
        }
        if(empty($this->equipements) || $this->equipements == null || $this->equipements=="")
        {
            $this->equipements = array();
        }
        if(empty($this->COMPETENCESCHOISIES) || $this->COMPETENCESCHOISIES == null || $this->COMPETENCESCHOISIES=="")
        {
            $this->COMPETENCESCHOISIES = array();
        }
        if(empty($this->COMPETENCESLIEES) || $this->COMPETENCESLIEES == null || $this->COMPETENCESLIEES=="")
        {
            $this->COMPETENCESLIEES = array();
        }
        if(empty($this->competences) || $this->competences == null || $this->competences=="")
        {
            $this->competences = array();
        }
    }

    /**
     * @brief Constructeur de la classe Aventurier
     *
     * Peut être initialisé sans paramètres, avec un tableau dont 
     * les index correspondant aux attributs ou encore avec l'ID 
     * en DB du record correspondant à l'objet.
     * @param   $parametre parametre optionel, peut être un tableau ou un id en db.      
     *
     * @return  Aventurier 
     * l'Objet instancié
     */
    public function __construct($parametre = null)
    {
        $this->prepareObjet();
        
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
     * @brief Getter de la classe Aventurier
     *
     * Retourne l'attribut voulu, effectue les traitements nécessaires si l'attribut demandé n'est pas encore chargé ou complexe.
     * @param   $var Nom de l'attribut voulu.      
     *
     * @return  Mixed l'attribut voulu. 
     * 
     */
    public function __get($var)
    {        
        if($var == "magie")
        {
            if(!is_object($this->MAGIE))
            {
                $this->MAGIE = new Magie($this->ID_TYPEMAGIE);
            }
            
            return $this->MAGIE->NOM;
        }
        else if($var == "metier_nom")
        {
            //mage ?
            if($this->metier->METIER_NOM == "Mage")
            {
                if($this->AVENTURIER_AUTRE_METIER != "")
                {
                   return $this->AVENTURIER_AUTRE_METIER." (".$this->magie->MAGIE_NOM.")";
                }
                else
                {
                   return $this->metier->METIER_NOM." (".$this->magie->MAGIE_NOM.")";
                }
            }
            else if( $this->metier->METIER_NOM == "Pretre" || $this->metier->METIER_NOM == "Paladin")
            {
                $temp = $this->metier->METIER_NOM;    
                if($this->AVENTURIER_AUTRE_METIER != "")
                {
                    $temp = $this->AVENTURIER_AUTRE_METIER;
                }
                
                if(in_array(substr($this->dieu->DIEU_NOM,0,1),array("A","E","I","O","U","Y")))
                {
                    $temp .= " d'".$this->dieu->DIEU_NOM;
                }
                else
                {
                    $temp .= " de ".$this->dieu->DIEU_NOM;
                }                
                return $temp;
            }
            else
            {
                return $this->metier;
            }
        }
        else if($var == "competences")
        {
            if(empty($this->competences))
            {
                $this->majCompetenceDB();
            }
            return $this->competences;
        }
        else if($var == "dieu")
        {
            if(!is_object($this->dieu))
            {
                $this->dieu = new dieu($this->ID_DIEU);
            }
            return $this->dieu;
        }
        else if(property_exists("Aventurier",$var))
        {
            return $this->$var;	
        }
        else
        {
            return null;	
        }
    }
    
    /**
     * @brief Setter de la classe Aventurier
     *
     * Place la valeur voulue dans l'attribut de l'objet Aventurier, avec certains contrôles.
     * @param   $var Nom de l'attribut voulu.      
     * @param   $value Valeur voulue.      
     *
     * @return  void
     * 
     */
    public function __set($var, $value)
    {
        //si on modifie l'origine, on en profite pour recharger l'objet Origine de l'aventurier
        if($var == "ORIGINE_ID")
        {
            $this->ORIGINE_ID = $value;
            $this->origine = new Origine($value);
        }
        //si on modifie le metier, on en profite pour recharger l'objet Metier de l'aventurier
        else if($var == "METIER_ID")
        {
            $this->METIER_ID = $value;
            $this->metier = new Metier($value);
        }
        //si on modifie le dieu, on en profite pour recharger l'objet Dieu de l'aventurier        
        else if($var == "DIEU_ID")
        {
            $this->DIEU_ID = $value;
            $this->dieu = new Dieu($value);
        }
        else
        {
            $this->$var = $value;            
        }
    }	

    /**
     * @brief Charge les attributs de l'Aventurier avec le tableau passé en parametre
     *
     * Place la valeur voulue dans l'attribut "clé" de l'objet Aventurier.
     * @param   $array Tableau 
     * 
     * @return  void
     */
    public function loadFromArray($array)
    {
        foreach($array as $key=>$value)
        {
            if(property_exists("Aventurier",$key))
            {
                $this->$key = $value;
            }
            else if($key == "autre_metier")
            {
                $this->autre_metier = $value;
            }
            else if($key == "image_url")
            {
                $this->image_url = $value;
            }
            else if($key == "METIER_NOM")
            {
                // Ceci dans le cas ou le tableau envoyé en parametre vient de la DB et possède
                // les données de la table METIER, on peut alors charger le metier directement 
                // sans refaire une requete.
                $this->metier = new Metier($array);
            }
            else if($key == "ORIGINE_NOM")
            {
                // Ceci dans le cas ou le tableau envoyé en parametre vient de la DB et possède
                // les données de la table ORIGINE, on peut alors charger l'origine directement 
                // sans refaire une requete.
                $this->origine = new Origine($array);
            }
            else if($key == "DIEU_NOM")
            {
                // Ceci dans le cas ou le tableau envoyé en parametre vient de la DB et possède
                // les données de la table DIEU, on peut alors charger le dieu directement 
                // sans refaire une requete.
                $this->dieu = new Dieu($array);
            }
            else if($key == "MAGIE_NOM")
            {
                // Ceci dans le cas ou le tableau envoyé en parametre vient de la DB et possède
                // les données de la table DIEU, on peut alors charger le dieu directement 
                // sans refaire une requete.
                $this->magie = new Magie($array);
            }
        }
        
        $this->competences_choisies = array();
        $this->competences_liees = array();
     
        
        /*
        $this->majCompetenceDB();
        $this->majEquipementDB();
        $this->majArmeDB();
        $this->majProtectionDB();
        */
    }
    
    /**
     * @brief Determine si l'aventurier utilise la magie ou non.
     *
     * @return  Bool
     */
    public function utiliseMagie()
    {
        if($this->AVENTURIER_EA > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
	
	/**
     * @brief Liste tous les aventuriers dans l'ordre donné et éventuellement filtrés par nom
     *
     * Renvoie la liste d'aventurier sous forme d'un tableau d'objet.
     * @param   $ordre définit quel ORDER BY utiliser dans la requête 
     * @param   $nom   définit quel filtre utiliser sur le nom 
     * 
     * @return  Tableau<Aventurier>
     */
    public static function Lister($ordre = "AVENTURIER_NOM ASC",$nom="", $limit = "")
    {        
        //Si dans l'ordre, on a reçu l'id metier ou origine, il ne faut
        //pas trier sur l'ID mais bien sur le nom de l'origine ou du metier.
        $ordre = str_replace("METIER_ID","METIER.NOM",$ordre);
        $ordre = str_replace("ORIGINE_ID","ORIGINE.NOM",$ordre);
        
        $ordre = strtolower($ordre);
        
        $db = DatabaseManager::getDb();
        $requete = "SELECT ".PREFIX_DB."aventurier.*, ".PREFIX_DB."metier.*, ".PREFIX_DB."origine.* 
            FROM ".PREFIX_DB."aventurier 
            join ".PREFIX_DB."origine on ".PREFIX_DB."origine.ORIGINE_ID = AVENTURIER_ORIGINE_ID 
            left join ".PREFIX_DB."dieu on ".PREFIX_DB."dieu.DIEU_ID = AVENTURIER_DIEU_ID
            left join ".PREFIX_DB."magie on ".PREFIX_DB."magie.MAGIE_ID = AVENTURIER_TYPEMAGIE_ID
            join ".PREFIX_DB."metier on ".PREFIX_DB."metier.METIER_ID = AVENTURIER_METIER_ID ";

        //si on a envoyé un nom, on balance le filtre dans la requete.
        if(!empty($nom))
        {
            $requete .= " WHERE ".PREFIX_DB."aventurier.AVENTURIER_NOM LIKE :nom";
        }

        $requete .= " ORDER BY ".$ordre;
        
        if($limit != "")
        {
            $requete .= " limit ".(($limit-1)*100).",".(($limit)*100);
        }

        $tableau = array();
        $stmt = $db->prepare($requete);
        $nom = $nom."%";
        $stmt->bindParam(':nom', $nom);        
        
        try
        {
            $stmt->execute();
            while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                //on 
                $temp = new Aventurier($rs);       
                $tableau[] = $temp;
            }
            return $tableau;
        }
        catch(Exception $e)
        {
            echo 'Tout ne s\'est pas bien passé, voir les erreurs ci-dessous<br />';
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();
            return array();
        }
    }
    
    /**
     * @brief Compte tous les aventuriers éventuellement filtrés par nom
     *
     * @param   $nom   définit quel filtre utiliser sur le nom 
     * 
     * @return  int compte
     */
    public static function Compter($nom="")
    {        
        if($nom != "")
        {
            $nom = $nom."%";
        }
        
        $db = DatabaseManager::getDb();
        $requete = "SELECT COUNT(*) as compte
            FROM ".PREFIX_DB."aventurier";

        if($nom != ""){$requete .= " where AVENTURIER_NOM LIKE :nom ";}

        $stmt = $db->prepare($requete);        

        if($nom != ""){$stmt->bindParam(':nom', $nom);} 

        if($stmt->execute())
        {
            $rs = $stmt->fetch(PDO::FETCH_ASSOC);
            return $rs["compte"];
        }
        else
        {
            return 0;
        }
    }
    
    /**
     * @brief Liste tous les aventuriers dans l'ordre donné et éventuellement filtrés par nom
     *
     * Renvoie la liste d'aventurier sous forme de tableau, pas d'objet.
     * @param   $ordre définit quel ORDER BY utiliser dans la requête 
     * @param   $nom   définit quel filtre utiliser sur le nom 
     * 
     * @return  Tableau<Tableau>
     */
    public static function ListerAsTable($ordre = "NOM ASC",$nom="")
    {
        //Si dans l'ordre, on a reçu l'id metier ou origine, il ne faut
        //pas trier sur l'ID mais bien sur le nom de l'origine ou du metier.
        $ordre = str_replace("METIER_ID","METIER.NOM",$ordre);
        $ordre = str_replace("ORIGINE_ID","ORIGINE.NOM",$ordre);
        
        $ordre = strtolower($ordre);
        
        $db = DatabaseManager::getDb();
        $requete = "SELECT ".PREFIX_DB."aventurier.*,".PREFIX_DB."metier.* 
            FROM ".PREFIX_DB."aventurier 
            join ".PREFIX_DB."origine on ".PREFIX_DB."origine.ORIGINE_ID = AVENTURIER_ORIGINE_ID 
            join ".PREFIX_DB."metier on ".PREFIX_DB."metier.METIER_ID = AVENTURIER_METIER_ID ";

        //si on a envoyé un nom, on balance le filtre dans la requete.
        if(!empty($nom))
        {
            $requete .= " WHERE ".PREFIX_DB."aventurier.AVENTURIER_NOM LIKE ':nom%'";
        }

        $requete .= " ORDER BY ".$ordre;

        $tableau = array();
        $stmt = $db->prepare($requete);
        if(!empty($nom))
        {
            $sth->bindParam(':nom', $nom, PDO::PARAM_STR);
        }
        
        if($stmt->execute())
        {
            while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
            {     
                $tableau[] = $rs;
            }
        }
        
        return $tableau;
    }
	
    /**
     * @brief Liste tous les aventuriers de l'utilisateur dont l'id est envoyé en paramètre.
     *
     * Renvoie la liste d'aventurier sous forme d'un tableau d'objet Aventurier.
     * @param   $user_id l'id de l'utilisateur dont la liste des aventuriers doit être renvoyée
     * @param   $ordre définit quel ORDER BY utiliser dans la requête 
     * @param   $nom   définit quel filtre utiliser sur le nom
     * 
     * @return  Tableau<Aventurier>
     */
	public static function ListerMesAventuriers($user_id, $ordre = "NOM ASC",$nom="")
	{
		//Si dans l'ordre, on a reçu l'id metier ou origine, il ne faut
        //pas trier sur l'ID mais bien sur le nom de l'origine ou du metier.
        $ordre = str_replace("METIER_ID","METIER.NOM",$ordre);
        $ordre = str_replace("ORIGINE_ID","ORIGINE.NOM",$ordre);
        
        $ordre = strtolower($ordre);
        
        if($user_id == null || $user_id == 0)
		{
			return array();
		}
		
        $db = DatabaseManager::getDb();
        $requete = "SELECT ".PREFIX_DB."aventurier.*,".PREFIX_DB."metier.* 
            FROM ".PREFIX_DB."aventurier 
            join ".PREFIX_DB."origine on ".PREFIX_DB."origine.ORIGINE_ID = AVENTURIER_ORIGINE_ID 
            join ".PREFIX_DB."metier on ".PREFIX_DB."metier.METIER_ID = AVENTURIER_METIER_ID 
            WHERE ".PREFIX_DB."aventurier.aventurier_user_id = :user_id";      

		//si on a envoyé un nom, on balance le filtre dans la requete.
        if(!empty($nom))
        {
            $requete .= " AND ".PREFIX_DB."aventurier.AVENTURIER_NOM LIKE ':nom%'";
        }	
	
		$requete .= " ORDER BY ".$ordre;

        $tableau = array();
        $stmt = $db->prepare($requete);
        
        $sth->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        if(!empty($nom))
        {
            $sth->bindParam(':nom', $nom, PDO::PARAM_STR);
        }
        
        if($stmt->execute())
        {
            while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                $temp = new Aventurier($rs);       
                $tableau[] =$temp;
            }
        }
       
        return $tableau;
	}
    
    /**
     * @brief S'assure que toutes les valeurs des attributs de l'objet sont correcte
     * pour être éventuellement utilisée dans une requête.
     *
     * Renvoie la liste d'aventurier sous forme d'un tableau d'objet Aventurier.
     * 
     * @return  void
     */
    public function verifieValeurs()
    {       
        if(empty($this->AVENTURIER_ORIGINE_ID)){$this->AVENTURIER_ORIGINE_ID = 0;}
        if(empty($this->AVENTURIER_METIER_ID)){$this->AVENTURIER_METIER_ID = 0;}
        if(empty($this->AVENTURIER_EV)){$this->AVENTURIER_EV = 0;}
        if(empty($this->AVENTURIER_EA)){$this->AVENTURIER_EA = 0;}
        
        if(empty($this->AVENTURIER_EVACTUEL)){$this->AVENTURIER_EVACTUEL = 0;}
        if(empty($this->AVENTURIER_EAACTUEL)){$this->AVENTURIER_EAACTUEL = 0;}
        
        if(empty($this->AVENTURIER_COU)){$this->AVENTURIER_COU = 0;}
        if(empty($this->AVENTURIER_FOR)){$this->AVENTURIER_FOR = 0;}
        if(empty($this->AVENTURIER_AT)){$this->AVENTURIER_AT = 0;}
        if(empty($this->AVENTURIER_PRD)){$this->AVENTURIER_PRD = 0;}
        if(empty($this->AVENTURIER_AD)){$this->AVENTURIER_AD = 0;}
        if(empty($this->AVENTURIER_CHA)){$this->AVENTURIER_CHA = 0;}
        if(empty($this->AVENTURIER_INT)){$this->AVENTURIER_INT = 0;}        
        
        if(empty($this->AVENTURIER_XP)){$this->AVENTURIER_XP = 0;}
        if(empty($this->AVENTURIER_DESTIN)){$this->AVENTURIER_DESTIN = 0;}
        
        if(empty($this->AVENTURIER_OR)){$this->AVENTURIER_OR = 0;}
        if(empty($this->AVENTURIER_ARGENT)){$this->AVENTURIER_ARGENT = 0;}
        if(empty($this->AVENTURIER_CUIVRE)){$this->AVENTURIER_CUIVRE = 0;}
        
        if(empty($this->AVENTURIER_NIVEAU)){$this->AVENTURIER_NIVEAU = 0;}
        if(empty($this->AVENTURIER_USER_ID)){$this->AVENTURIER_USER_ID = 0;}
        if(empty($this->AVENTURIER_TYPE) || $this->AVENTURIER_TYPE=="aventurier"){$this->AVENTURIER_TYPE = 0;}
        if(empty($this->AVENTURIER_MAGIEPHYS)){$this->AVENTURIER_MAGIEPHYS = 0;}
        if(empty($this->AVENTURIER_MAGIEPSY)){$this->AVENTURIER_MAGIEPSY = 0;}
        if(empty($this->AVENTURIER_RESISTMAG)){$this->AVENTURIER_RESISTMAG = 0;}
        if(empty($this->AVENTURIER_TYPEMAGIE_ID)){$this->AVENTURIER_TYPEMAGIE_ID = 0;}
        if(empty($this->AVENTURIER_DIEU_ID)){$this->AVENTURIER_DIEU_ID = 0;}
        if(empty($this->AVENTURIER_PR_MAX)){$this->AVENTURIER_PR_MAX = 0;}
        if(empty($this->AVENTURIER_PR)){$this->AVENTURIER_PR = 0;}        
        if(empty($this->AVENTURIER_BONUS_DEGAT)){$this->AVENTURIER_BONUS_DEGAT = 0;}        
    }
    
    /**
     * @brief Calcul le total de PR de l'Aventurier
     *
     * Calcul le total de PR de l'Aventurier en fonction de l'équipement qu'il porte.
     * 
     * @return  void
     */
    public function calculProtection()
    {
        $this->AVENTURIER_PR = 0;
        
        foreach($this->protections as $protection)
        {
            $this->AVENTURIER_PR += $protection->PR;
        }
    }
    
    /**
     * @brief Génère la requete d'ajout d'un Aventurier en DB
     * 
     * @return $requete La requete générée
     */
    private function get_requete_ajout()
    {
        $requete = "INSERT INTO ".PREFIX_DB."aventurier (
            AVENTURIER_NOM, 
            AVENTURIER_SEXE, 
            AVENTURIER_ORIGINE_ID, 
            AVENTURIER_METIER_ID, 
            AVENTURIER_EV, 
            AVENTURIER_EA, 
            AVENTURIER_COU, 
            AVENTURIER_INT, 
            AVENTURIER_CHA, 
            AVENTURIER_AD, 
            AVENTURIER_FO, 
            AVENTURIER_AT, 
            AVENTURIER_PRD, 
            AVENTURIER_XP, 
            AVENTURIER_DESTIN, 
            AVENTURIER_OR, 
            AVENTURIER_ARGENT, 
            AVENTURIER_CUIVRE,
            AVENTURIER_NIVEAU, 
            AVENTURIER_USER_ID, 
            AVENTURIER_TYPE,
            AVENTURIER_MAGIEPHYS, 
            AVENTURIER_MAGIEPSY, 
            AVENTURIER_RESISTMAG, 
            AVENTURIER_TYPEMAGIE_ID, 
            AVENTURIER_DIEU_ID, 
            AVENTURIER_PR_MAX,
            AVENTURIER_codeacces,
            AVENTURIER_PR,
            AVENTURIER_BONUS_DEGAT,
            AVENTURIER_image_url, 
            AVENTURIER_autre_metier,
            AVENTURIER_EVACTUEL,
            AVENTURIER_EAACTUEL, 
            AVENTURIER_description) 
        VALUES (
            :AVENTURIER_NOM, 
            :AVENTURIER_SEXE, 
            :AVENTURIER_ORIGINE_ID, 
            :AVENTURIER_METIER_ID, 
            :AVENTURIER_EV, 
            :AVENTURIER_EA, 
            :AVENTURIER_COU, 
            :AVENTURIER_INT, 
            :AVENTURIER_CHA, 
            :AVENTURIER_AD, 
            :AVENTURIER_FO, 
            :AVENTURIER_AT, 
            :AVENTURIER_PRD, 
            :AVENTURIER_XP, 
            :AVENTURIER_DESTIN, 
            :AVENTURIER_OR, 
            :AVENTURIER_ARGENT, 
            :AVENTURIER_CUIVRE,
            :AVENTURIER_NIVEAU, 
            :AVENTURIER_USER_ID, 
            :AVENTURIER_TYPE,
            :AVENTURIER_MAGIEPHYS, 
            :AVENTURIER_MAGIEPSY, 
            :AVENTURIER_RESISTMAG, 
            :AVENTURIER_TYPEMAGIE_ID, 
            :AVENTURIER_DIEU_ID, 
            :AVENTURIER_PR_MAX,
            :AVENTURIER_codeacces,
            :AVENTURIER_PR,
            :AVENTURIER_BONUS_DEGAT,
            :AVENTURIER_image_url, 
            :AVENTURIER_autre_metier,
            :AVENTURIER_EVACTUEL,
            :AVENTURIER_EAACTUEL, 
            :AVENTURIER_description)";
            
        return $requete;
    }
    
    /**
     * @brief Génère la requete de modification d'un Aventurier en DB
     * 
     * @return $requete La requete générée
     */
    private function get_requete_modification()
    {
        $requete = "UPDATE ".PREFIX_DB."aventurier 
            SET AVENTURIER_NOM = :AVENTURIER_NOM, 
            AVENTURIER_SEXE = :AVENTURIER_SEXE, 
            AVENTURIER_ORIGINE_ID = :AVENTURIER_ORIGINE_ID, 
            AVENTURIER_METIER_ID = :AVENTURIER_METIER_ID, 
            AVENTURIER_EV = :AVENTURIER_EV, 
            AVENTURIER_EA = :AVENTURIER_EA, 
            AVENTURIER_COU = :AVENTURIER_COU, 
            AVENTURIER_INT = :AVENTURIER_INT, 
            AVENTURIER_CHA = :AVENTURIER_CHA, 
            AVENTURIER_AD = :AVENTURIER_AD, 
            AVENTURIER_FO = :AVENTURIER_FO, 
            AVENTURIER_AT = :AVENTURIER_AT, 
            AVENTURIER_PRD = :AVENTURIER_PRD, 
            AVENTURIER_XP = :AVENTURIER_XP, 
            AVENTURIER_DESTIN = :AVENTURIER_DESTIN, 
            AVENTURIER_OR = :AVENTURIER_OR, 
            AVENTURIER_ARGENT = :AVENTURIER_ARGENT, 
            AVENTURIER_CUIVRE = :AVENTURIER_CUIVRE,
            AVENTURIER_NIVEAU = :AVENTURIER_NIVEAU, 
            AVENTURIER_USER_ID = :AVENTURIER_USER_ID, 
            AVENTURIER_TYPE = :AVENTURIER_TYPE,
            AVENTURIER_MAGIEPHYS = :AVENTURIER_MAGIEPHYS, 
            AVENTURIER_MAGIEPSY = :AVENTURIER_MAGIEPSY, 
            AVENTURIER_RESISTMAG = :AVENTURIER_RESISTMAG, 
            AVENTURIER_TYPEMAGIE_ID = :AVENTURIER_TYPEMAGIE_ID, 
            AVENTURIER_DIEU_ID = :AVENTURIER_DIEU_ID, 
            AVENTURIER_PR_MAX = :AVENTURIER_PR_MAX,
            AVENTURIER_codeacces = :AVENTURIER_codeacces,
            AVENTURIER_PR = :AVENTURIER_PR,
            AVENTURIER_BONUS_DEGAT = :AVENTURIER_BONUS_DEGAT,
            AVENTURIER_image_url = :AVENTURIER_image_url, 
            AVENTURIER_autre_metier = :AVENTURIER_autre_metier,
            AVENTURIER_EVACTUEL = :AVENTURIER_EVACTUEL,
            AVENTURIER_EAACTUEL = :AVENTURIER_EAACTUEL, 
            AVENTURIER_description = :AVENTURIER_description";
            
        return $requete;
    }    
    
    /**
     * @brief Bind les données de Aventurier à une requete PDO préparée.
     * 
     * @return void
     */
    private function bindParam($sth, $requete)
    {
        $sth->bindParam(':AVENTURIER_NOM',$this->AVENTURIER_NOM,PDO::PARAM_STR);
        $sth->bindParam(':AVENTURIER_SEXE',$this->AVENTURIER_SEXE,PDO::PARAM_STR);
        $sth->bindParam(':AVENTURIER_ORIGINE_ID',$this->AVENTURIER_ORIGINE_ID,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_METIER_ID',$this->AVENTURIER_METIER_ID,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_EV', $this->AVENTURIER_EV,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_EA', $this->AVENTURIER_EA,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_COU', $this->AVENTURIER_COU,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_INT', $this->AVENTURIER_INT,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_CHA', $this->AVENTURIER_CHA,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_AD', $this->AVENTURIER_AD,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_FO', $this->AVENTURIER_FO,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_AT', $this->AVENTURIER_AT,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_PRD', $this->AVENTURIER_PRD,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_XP', $this->AVENTURIER_XP,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_DESTIN', $this->AVENTURIER_DESTIN,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_OR', $this->AVENTURIER_OR,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_ARGENT', $this->AVENTURIER_ARGENT,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_CUIVRE',$this->AVENTURIER_CUIVRE,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_NIVEAU', $this->AVENTURIER_NIVEAU,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_USER_ID', $this->AVENTURIER_USER_ID,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_TYPE',$this->AVENTURIER_TYPE,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_MAGIEPHYS', $this->AVENTURIER_MAGIEPHYS,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_MAGIEPSY', $this->AVENTURIER_MAGIEPSY,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_RESISTMAG', $this->AVENTURIER_RESISTMAG,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_TYPEMAGIE_ID', $this->AVENTURIER_TYPEMAGIE_ID,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_DIEU_ID', $this->AVENTURIER_DIEU_ID,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_PR_MAX',$this->AVENTURIER_PR_MAX,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_codeacces',$this->AVENTURIER_codeacces,PDO::PARAM_STR);
        $sth->bindParam(':AVENTURIER_PR',$this->AVENTURIER_PR,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_BONUS_DEGAT',$this->AVENTURIER_BONUS_DEGAT,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_image_url', $this->AVENTURIER_image_url,PDO::PARAM_STR);
        $sth->bindParam(':AVENTURIER_autre_metier',$this->AVENTURIER_autre_metier,PDO::PARAM_STR);
        $sth->bindParam(':AVENTURIER_EVACTUEL',$this->AVENTURIER_EVACTUEL,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_EAACTUEL',$this->AVENTURIER_EAACTUEL,PDO::PARAM_INT);
        $sth->bindParam(':AVENTURIER_description',$this->AVENTURIER_description,PDO::PARAM_STR);
        if(strpos($requete,":AVENTURIER_ID") !== false)
        {
            $sth->bindParam(':AVENTURIER_ID',$this->AVENTURIER_ID,PDO::PARAM_INT);
        }
    }
    
    /**
     * @brief Ajoute l'Aventurier en DB.
     *
     * Ajoute également ses armes(Arme), protections(Protection), équipements(Equipement) et compétences(Competence).
     * 
     * @return  void
     */
    public function ajouter()
    {
        $this->verifieValeurs();
        $this->calculProtection();
        
        $db = DatabaseManager::getDb();
        try
        {
            $db->beginTransaction();
        
            //On génère un code d'accès aléatoire de 10 caractères si l'Aventurier n'en possède pas déjà.
            if(empty($this->codeacces))
            {
                $temp = md5(rand(0,9999999999999999999));
                $this->codeacces = substr($temp,0,10);
            }
            
            if(isset($_SESSION["birdibeuk_user"]))
            {
                $user = unserialize($_SESSION["birdibeuk_user"]);
                $this->idjoueur = $user->id;
            }
            
            //récupération de la requête d'ajout
            $requete = $this->get_requete_ajout();
            
            $sth = $db->prepare($requete);
            
            //binding des paramètres
            $this->bindParam($sth);
            
            $stmt->execute();
            $this->AVENTURIRE_ID = $db->lastInsertId(); 
            
            //competences         
            if(count($this->COMPETENCESCHOISIES) > 0)
            {
                $requete = "INSERT INTO lien_aventurier_competence (ID_AVENTURIER, ID_COMPETENCE) VALUES "; 
                $compte = 0;
                foreach($this->COMPETENCESCHOISIES as $competence)
                {
                    if($compte > 0)
                    {
                        $requete .= ",";
                    }
                    $requete .= "(".$this->ID.",".$competence->ID.")";
                    $compte++;                    
                }
                $stmt = $db->prepare($requete);
                $stmt->execute();
            }
            
            
            foreach($this->equipements as $equipement)
            {
                for($a=0;$a<$equipement->nombre;$a++)
                {
                    $requete = "INSERT INTO lien_aventurier_equipement (id_aventurier, id_equipement, precieux) VALUES (".$this->ID.",".$equipement->ID.",".$equipement->precieux.")";    
                    $stmt = $db->prepare($requete);
                    $stmt->execute();
                }
            }
            
            foreach($this->armes as $arme)
            {
                $requete = "INSERT INTO lien_aventurier_arme (id_aventurier, id_arme) VALUES (".$this->AVENTURIER_ID.",".$arme->ID.")";    
                $stmt = $db->prepare($requete);
                $stmt->execute();
            }
        
            foreach($this->protections as $protection)
            {
                $requete = "INSERT INTO lien_aventurier_protection (id_aventurier, id_protection) VALUES (".$this->AVENTURIER_ID.",".$protection->ID.")";  
      
                $stmt = $db->prepare($requete);
                $stmt->execute();
            }
            
            $db->commit();
            //succes
            return true;            
        }
        catch(Exception $e) //en cas d'erreur
        {
            //on annule la transation
            $db->rollback();

            //on affiche un message d'erreur ainsi que les erreurs
            echo 'Tout ne s\'est pas bien passé, voir les erreurs ci-dessous<br />';
            echo 'Erreur : '.$e->getMessage().'<br />';
            echo 'N° : '.$e->getCode();

            //on arrête l'exécution s'il y a du code après
            return false;
        }
    }

    /**
     * @brief Modifie l'Aventurier en DB.
     *
     * Modifie également ses armes(Arme), protections(Protection), équipements(Equipement) et compétences(Competence).
     * 
     * @return  void
     */
    public function modifier()
    {
        $this->verifieValeurs();
        
        //si cet aventurier n'appartient à personne, alors la personne qui le modifie en premier en prend possession
        if($this->AVENTURIER_USER_ID == 0)
        {
            if(isset($_SESSION["birdibeuk_user"]))
            {
                if($_SESSION["birdibeuk_user"] != false)
                {
                    $user = unserialize($_SESSION["birdibeuk_user"]);
                    $this->AVENTURIER_USER_ID = $user->id;
                }
            }
        }
        
        $db = DatabaseManager::getDb();
        $requete = get_requete_modification();
        
        $stmt = $db->prepare($requete);
        $this->bindParam($stmt);
        $stmt->execute();
        
        //On supprime les anciennes competences de l'aventurier
        $requete = "DELETE FROM lien_aventurier_competence where ID_AVENTURIER = :ID_AVENTURIER";    
        $stmt = $db->prepare($requete);
        $stmt->bindParam(':ID_AVENTURIER', $this->ID);
        $stmt->execute();
        
        //On ajoute les nouvelles competences de l'aventurier
        foreach($this->COMPETENCESCHOISIES as $competence)
        {
            if($competence->ID != "" && $competence->ID != 0)
            {
                $requete = "INSERT INTO lien_aventurier_competence (ID_AVENTURIER, ID_COMPETENCE) VALUES (".$this->ID.",".$competence->ID.")";   

                $stmt = $db->prepare($requete);
                $stmt->execute();
            }
        }
        
        //On supprime l'ancien equipement de l'aventurier
        $requete = "DELETE FROM lien_aventurier_equipement where ID_AVENTURIER = :ID_AVENTURIER";    
        $stmt = $db->prepare($requete);
        $stmt->bindParam(':ID_AVENTURIER', $this->ID);
        $stmt->execute();
        
        //On ajoute le nouvel equipement de l'aventurier
        foreach($this->equipements as $equipement)
        {
            for($a=0;$a<$equipement->nombre;$a++)
            {
                $requete = "INSERT INTO lien_aventurier_equipement (id_aventurier, id_equipement, precieux) VALUES (".$this->ID.",".$equipement->ID.",".$equipement->precieux.")";    

                $stmt = $db->prepare($requete);
                $stmt->execute();
            }
        }
        
        //On supprime l'ancien armement de l'aventurier
        $requete = "DELETE FROM lien_aventurier_arme where ID_AVENTURIER = :ID_AVENTURIER";    
        $stmt = $db->prepare($requete);
        $stmt->bindParam(':ID_AVENTURIER', $this->ID);
        $stmt->execute();
        
        //On ajoute le nouvel armement de l'aventurier
        foreach($this->armes as $arme)
        {
            $requete = "INSERT INTO lien_aventurier_arme (id_aventurier, id_arme) VALUES (".$this->ID.",".$arme->ID.")";  
  
            $stmt = $db->prepare($requete);
            $stmt->execute();
        }
        
        //On supprime les anciennes protections de l'aventurier
        $requete = "DELETE FROM lien_aventurier_protection where ID_AVENTURIER = :ID_AVENTURIER";    
        $stmt = $db->prepare($requete);
        $stmt->bindParam(':ID_AVENTURIER', $this->ID);
        $stmt->execute();
        
        //On ajoute les nouvelles protections de l'aventurier
        foreach($this->protections as $protection)
        {
            $requete = "INSERT INTO lien_aventurier_protection (id_aventurier, id_protection) VALUES (".$this->ID.",".$protection->ID.")";  
  
            $stmt = $db->prepare($requete);
            $stmt->execute();
        }
        
        
    }

    /**
     * @brief Supprime l'Aventurier en DB.
     *
     * Supprime également ses armes(Arme), protections(Protection), équipements(Equipement) et compétences(Competence).
     * 
     * @return  void
     */
    public function supprimer()
    {
        $db = DatabaseManager::getDb();
        
        //supprime les liens avec les armes
        $requete = "DELETE FROM ".PREFIX_DB."lien_aventurier_arme WHERE AVENTURIER_ID = ".$this->AVENTURIER_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        //supprime les liens avec les competences
        $requete = "DELETE FROM ".PREFIX_DB."lien_aventurier_competence WHERE AVENTURIER_ID = ".$this->AVENTURIER_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        //supprime les liens avec les équipements
        $requete = "DELETE FROM ".PREFIX_DB."lien_aventurier_equipement WHERE AVENTURIER_ID = ".$this->AVENTURIER_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        //supprime les liens avec les protections
        $requete = "DELETE FROM ".PREFIX_DB."lien_aventurier_protection WHERE AVENTURIER_ID = ".$this->AVENTURIER_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        //supprime l'aventurier
        $requete = "DELETE FROM ".PREFIX_DB."aventurier WHERE AVENTURIER_ID = ".$this->AVENTURIER_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    /**
     * @brief Récupère un Aventurier en DB 
     *
     * Récupère un Aventurier en DB et charge l'objet Aventurier avec les données trouvées.
     * @param $AVENTURIER_ID l'AVENTURIER_ID en DB
     * @return  void
     */
    public function loadFromDB($AVENTURIER_ID)
    {
        $db = DatabaseManager::getDb();

        $requete = "SELECT * 
            FROM ".PREFIX_DB."aventurier 
            join ".PREFIX_DB."origine on ".PREFIX_DB."origine.ORIGINE_ID = ".PREFIX_DB."aventurier.AVENTURIER_ORIGINE_ID 
            left join ".PREFIX_DB."dieu on ".PREFIX_DB."dieu.DIEU_ID = ".PREFIX_DB."aventurier.AVENTURIER_DIEU_ID
            left join ".PREFIX_DB."magie on ".PREFIX_DB."magie.MAGIE_ID = AVENTURIER_TYPEMAGIE_ID
            join ".PREFIX_DB."metier on ".PREFIX_DB."metier.METIER_ID = ".PREFIX_DB."aventurier.AVENTURIER_METIER_ID 
            WHERE AVENTURIER_ID = ".$AVENTURIER_ID;  
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);
        
        $this->loadFromArray($ligne);
    }
    
    public function ajouterCompetence($ID_COMPETENCE)
    {
        $temp = new Competence($ID_COMPETENCE);
        if(!in_array($temp,$this->COMPETENCESCHOISIES))
        {
            if($temp->ID != 0 && $temp->ID != "")
            {
                $this->COMPETENCESCHOISIES[] = $temp;
            }
        }
        $this->competences = fusionneCompetencesSansDoublons($this->COMPETENCESCHOISIES,$this->COMPETENCESLIEES);
    }
    
    public function possedeCompetence($competence)
    {
        foreach($this->competences as $comp)
        {
            if($comp->ID == $competence->ID)
            {
                return true;
            }
        }
        
        return false;
    }
    
    public function ajouterArme($ID_ARME)
    {
        $temp = new Arme($ID_ARME);
        /*if(!in_array($temp,$this->armes))
        {*/
            $this->armes[] = $temp;
        //}        
    }
    
    public function ajouterEquipement($ID_Equipement, $precieux = 0)
    {
        $temp;       
        if(is_object($ID_Equipement))
        {
            $temp = $ID_Equipement;
        }
        else
        {
            $temp = new Equipement($ID_Equipement);            
        }
        
        if($precieux)
        {
            $temp->precieux = 1;
        }
        
        $arrayId = array();
        foreach($this->equipements as $key=>$equi)
        {
            $arrayId[$key] = $equi->ID;
        }
        
        if(!in_array($temp->ID,$arrayId))
        {
            $this->equipements[] = $temp;
        }
        else
        {
            $index = array_search($temp->ID,$arrayId);
            $this->equipements[$index]->nombre++;
        }
    }
    
    public function supprimerArme($ID_ARME)
    {
        $temp = new Arme($ID_ARME);
        if(($index = array_search($temp,$this->armes)) !== false)
        {
            unset($this->armes[$index]);
            $temp2 = $this->armes;
            $this->armes = array_values($temp2);
        }        
    }
    
    public function ajouterProtection($ID_protection)
    {
        $temp = new Protection($ID_protection);
        /*if(!in_array($temp,$this->protections))
        {*/
            $this->protections[] = $temp;
        /*}   */     
    }
    
    public function supprimerProtection($ID_protection)
    {
        $temp = new Protection($ID_protection);
        if(($index = array_search($temp,$this->protections)) !== false)
        {
            unset($this->protections[$index]);
            $temp2 = $this->protections;
            $this->protections = array_values($temp2);
        }        
    }
    
    public function majCompetenceDB()
    {
        $db = DatabaseManager::getDb();
        
        $requete = "SELECT ".PREFIX_DB."competence.* 
        FROM ".PREFIX_DB."lien_aventurier_competence 
        join ".PREFIX_DB."competence on ".PREFIX_DB."lien_aventurier_competence.ID_COMPETENCE = ".PREFIX_DB."competence.COMPETENCE_ID
        WHERE ID_AVENTURIER = ".$this->AVENTURIER_ID;  
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        $this->competences = array();
        
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $comp = new Competence($ligne);
            $this->competences[] = $comp;
        }
    }
    
    public function majEquipementDB()
    {
        $db = DatabaseManager::getDb();
        
        $requete = "SELECT * FROM lien_aventurier_equipement WHERE ID_AVENTURIER = ".$this->ID;  
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        $this->equipements = array();
        
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $comp = new Equipement($ligne["ID_EQUIPEMENT"]);
            if($ligne["precieux"])
            {
                $this->ajouterEquipement($comp, 1);
            }
            else
            {
                $this->ajouterEquipement($comp, 0);
            }            
        }        
    }  
    
    public function majArmeDB()
    {
        $db = DatabaseManager::getDb();
        
        $requete = "SELECT * FROM lien_aventurier_arme WHERE ID_AVENTURIER = ".$this->ID;  
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        $this->armes = array();
        
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
           $comp = new Arme($ligne["ID_ARME"]);
           $this->armes[] = $comp;
        }        
    }  
    
    public function majProtectionDB()
    {
        $db = DatabaseManager::getDb();
        
        $requete = "SELECT * FROM lien_aventurier_protection WHERE ID_AVENTURIER = ".$this->ID;  
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        $this->protections = array();
        
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
			$comp = new Protection($ligne["ID_PROTECTION"]);

			$this->protections[] = $comp;
        }        
    }  
    
    public function determineCompetences()
    {                
        if($this->METIER != "" && $this->ORIGINE != "")
        {
            if($this->METIER->ID == 99)
            {
                $this->COMPETENCESLIEES = $this->METIER->COMPETENCESLIEES;
            }
            else
            {
                $this->COMPETENCESLIEES = fusionneCompetencesSansDoublons($this->METIER->COMPETENCESLIEES,$this->ORIGINE->COMPETENCESLIEES);
            }
        }
        
        if(empty($this->ID))
        {
            return;
        }
        
        $db = DatabaseManager::getDb();
        
        $requete = "SELECT * FROM lien_aventurier_competence WHERE ID_AVENTURIER = ".$this->ID;  
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        $this->COMPETENCESCHOISIES = array();
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
           $comp = new Competence();
           $this->COMPETENCESCHOISIES[] = $comp;
        }
        
        $this->competences = fusionneCompetencesSansDoublons($this->COMPETENCESCHOISIES,$this->COMPETENCESLIEES);
    }
    
    public function determineCaracs()
    {
        $this->EV = $this->ORIGINE->EV;
        $this->AVENTURIER_PR_MAX = $this->ORIGINE->PRMAX;
        
        if($this->METIER->PRMAX != 0 && (($this->METIER->PRMAX < $this->ORIGINE->PRMAX) || ($this->ORIGINE->PRMAX == 0)))
        {
            $this->AVENTURIER_PR_MAX = $this->METIER->PRMAX;
        }
        
        if($this->METIER->NOM == "Guerrier")
        {
            if($this->ORIGINE->NOM != "Barbare")
            {
                $this->EV += 5; 
            }
        }
        else if($this->METIER->NOM == "Paladin")
        {
            $this->MAGIEPHYS = ceil(($this->INT + $this->AD) /2);
            $this->MAGIEPSY = ceil(($this->INT + $this->CHA) /2);
            
            $this->EV += 2;
        }
        else if($this->METIER->EV != 0)
        {
            $this->MAGIEPHYS = ceil(($this->INT + $this->AD) /2);
            $this->MAGIEPSY = ceil(($this->INT + $this->CHA) /2);
            
            if($this->ORIGINE->NOM == "Humain" && $this->METIER->NOM == "Mage")
            {
                $this->EV = 20;
            }
            else
            {
                $this->EV = ceil($this->EV  - ($this->EV * $this->METIER->EV) / 100);
            }            
        }
        
        $this->RESISTMAG = ceil(($this->INT + $this->COU + $this->FO) /3);
        
        $this->EA = $this->METIER->EA;
        
        $this->AT = 8;
        $this->AVENTURIER_PRD = 10;
        if($this->ORIGINE->NOM == "Barbare" || $this->ORIGINE->NOM == "Ogre" || $this->ORIGINE->NOM == "Orque")
        {
            $this->AT = $this->AT+1;
            $this->AVENTURIER_PRD = $this->AVENTURIER_PRD-1;
        }
        if($this->ORIGINE->NOM == "Gnome")
        {
            $this->AT = $this->AT+2;
            $this->AVENTURIER_PRD = $this->AVENTURIER_PRD-2;
        }
        
        if($this->METIER->NOM == "Assassin")
        {
            $this->AT = 11;
             $this->AVENTURIER_PRD = 8;
        }
        
        if($this->METIER->NOM == "Bourgeois")
        {
            $this->AT = 7;
            $this->AVENTURIER_PRD = 9;
        }
    }

    public function debug()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
    public function printAsTable()
    {
        $aventurier = $this;
       ?>
        <style>
        td
        {
            padding:5px;
        }
    </style>
    <table style='margin:auto;border-collapse:collapse;background-image:url("image/bg3.png");border: 1px #900000 solid;'>
    <tr><td colspan='2'  style='border-bottom:1px #900000 solid;text-align:center;'><?php echo $aventurier->NOM; ?></td></tr>
        <tr>
            <td colspan='2'  style='border-bottom:1px #900000 solid;text-align:center;'>
                <?php echo $aventurier->ORIGINE->NOM." "; 
                if( $aventurier->METIER->NOM == "Aucun")
                {
                    echo "sans profession";
                }
                else if( $aventurier->METIER->NOM == "Mage")
                {
                    echo $aventurier->METIER->NOM." (".$aventurier->magie.")";
                }
                else if( $aventurier->METIER->NOM == "Pretre" || $aventurier->METIER->NOM == "Paladin")
                {
                    $temp = $aventurier->METIER;
                    if(in_array(substr($aventurier->dieu,0,1),array("A","E","I","O","U","Y")))
                    {
                        $temp .= " d'".$aventurier->dieu;
                    }
                    else
                    {
                        $temp .= " de ".$aventurier->dieu;
                    }
                    echo $temp;
                }
                else
                {
                    echo $aventurier->METIER->NOM;
                }
                ?>
            </td>
        </tr>
    <tr><td style='vertical-align:top;'>
        <table style='background-image:url("image/bg3.png");margin:auto;border-collapse:collapse;'>
        
        <tr><td>Courage <?php getValeurCaracM($aventurier->COU); ?> : </td><td> <?php echo $aventurier->COU; ?> </td></tr>
        <tr><td>Intelligence <?php getValeurCaracF($aventurier->INT); ?> : </td><td> <?php echo $aventurier->INT; ?> </td></tr>
        <tr><td>Charisme <?php getValeurCaracM($aventurier->CHA); ?> : </td><td> <?php echo $aventurier->CHA; ?> </td></tr>
        <tr><td>Adresse <?php getValeurCaracF($aventurier->AD); ?> : </td><td> <?php echo $aventurier->AD; ?>	</td></tr>
        <tr><td style='border-bottom:1px #900000 solid;'>Force <?php getValeurCaracF($aventurier->FO); ?> : </td><td style='border-bottom:1px #900000 solid;'> <?php echo $aventurier->FO; ?> </td></tr>
        <tr><td>Energie Vitale (EV) :</td><td> <?php echo $aventurier->EV; ?> </td></tr>
        <?php 
            if($aventurier->EA != 0)
            {
                ?>
                    <tr><td>Energie Astrale (EA)</td><td> <?php echo $aventurier->EA; ?> </td></tr>
                <?php
            }

            if($aventurier->MAGIEPSY != 0)
            {
                ?>
                    <tr><td>Score de Magie Psychique : </td><td> <?php echo $aventurier->MAGIEPSY; ?> </td></tr>
                <?php
            }

            if($aventurier->MAGIEPHYS != 0)
            {
                ?>
                    <tr><td>Score de Magie Physique : </td><td> <?php echo $aventurier->MAGIEPHYS; ?> </td></tr>
                <?php
            }
            
            if($aventurier->bonus_degat != 0)
            {
                ?>
                    <tr><td style='border-top:1px #900000 solid;'>Bonus aux degats : </td><td style='border-top:1px #900000 solid;'> <?php echo $aventurier->bonus_degat; ?> </td></tr>
                <?php
            }
        ?>
        <tr><td style='border-top:1px #900000 solid;'>Attaque :</td><td style='border-top:1px #900000 solid;'> <?php echo $aventurier->AT; ?> </td></tr>
        <tr><td>Parade :</td><td> <?php echo $aventurier->PRD; ?> </td></tr>
        <tr><td>Protection maximum : </td><td> <?php if($aventurier->PR_MAX == 0){echo "pas de limite";}else{echo $aventurier->PR_MAX;} ?> </td></tr>
        <tr><td style='border-top:1px #900000 solid;'>Résistance Magique :</td><td style='border-top:1px #900000 solid;'> <?php echo $aventurier->RESISTMAG; ?> </td></tr>
        </table>
        </td>
        <td style='vertical-align:top;border-left:1px #900000 solid;'>
        <table style='background-image:url("image/bg3.png");margin:auto;border-collapse:collapse;'>    
        <?php 
        
            if(count($aventurier->COMPETENCESLIEES) > 0)
            {
                echo "<tr><td colspan='2' style='border-bottom:1px #900000 dotted;text-align:center;'>Competences héritées</td></tr>";
            }
        
            foreach($aventurier->COMPETENCESLIEES as $competence)
            {
                echo "<tr><td colspan='2'>".$competence->NOM."</td></tr>";
            }

            if(count($aventurier->COMPETENCESCHOISIES) > 0)
            {
                echo "<tr><td colspan='2' style='border-top:1px #900000 solid;border-bottom:1px #900000 dotted;text-align:center;'>Competences choisies</td></tr>";
            }
            
            foreach($aventurier->COMPETENCESCHOISIES as $competence)
            {
                echo "<tr><td colspan='2'>".$competence->NOM."</td></tr>";
            }
            
            if(!empty($this->OR != 0))
            {
                echo "<tr><td style='border-top:1px #900000 solid;'>Or possédé : </td><td style='border-top:1px #900000 solid;'>".$this->OR."</td></tr>";
            }
            
             if(!empty($this->DESTIN != null))
            {
                echo "<tr><td >Point(s) de destin : </td><td>".$this->DESTIN."</td></tr>";
            }
        ?>        
        </table>
    </td>
    </tr>
    </table><br>
        <?php
    }
    
    public function estCompetenceChoisie($competence)
    {
        if(in_array($competence,$this->ORIGINE->COMPETENCESLIEES))
        {
            return false;
        }
        
        if(in_array($competence,$this->METIER->COMPETENCESLIEES))
        {
            return false;
        }
        
        return true;
    }
    
    public function ficheMJ()
    {
        $aventurier = $this;
       ?>
        <style>
        td
        {
            padding:5px;
        }
    </style>
    <table style='margin:10px;border-collapse:collapse;background-image:url("image/bg3.png");border: 2px #900000 solid;'>
    <tr><td style='border-bottom:1px #900000 solid;text-align:center;'><?php echo $aventurier->NOM." <span style='font-size:70%;'>(".$aventurier->SEXE.")</span>"; ?></td></tr>
    <tr><td style='border-bottom:1px #900000 solid;text-align:center;'>Niveau <?php echo $aventurier->NIVEAU; ?></td></tr>
        <tr>
            <td style='border-bottom:1px #900000 solid;text-align:center;'>
                <?php echo $aventurier->ORIGINE->NOM." "; 
                if( $aventurier->METIER->NOM == "Aucun")
                {
                    echo "sans profession";
                }
                else
                {
                    echo $aventurier->METIER->NOM;
                }
                ?>
                
                <?php
                if( $aventurier->autre_metier == "")
                {
                   
                }
                else
                {
                    echo "/".$aventurier->autre_metier;
                }
                ?>
            </td>
        </tr>
    <tr><td style='vertical-align:top;'>
        <table style='background-image:url("image/bg3.png");margin:auto;border-collapse:collapse;'>        
        <tr><td style='width:20%;'>COU</td><td style='width:20%;'>INT</td><td style='width:20%;'>CHA</td><td style='width:20%;'>AD</td><td style='width:20%;'>FO</td></tr>
        <tr>
            <td><?php echo $aventurier->COU; ?></td>
            <td><?php if($aventurier->INT > 12){echo "<u>";} echo $aventurier->INT; if($aventurier->INT > 12){echo "</u>";} ?></td>
            <td><?php echo $aventurier->CHA; ?></td>
            <td><?php if($aventurier->AD > 12){echo "<u>";} echo $aventurier->AD; if($aventurier->AD > 12){echo "</u>";}?></td>
            <td><?php if($aventurier->FO > 12){echo "<u>";} echo $aventurier->FO; if($aventurier->FO > 12){echo "</u>";}?></td>
        </tr>
        <?php 
            $modificateur_COU = 0;
            $modificateur_INT = 0;
            $modificateur_CHA = 0;
            $modificateur_AD = 0;
            $modificateur_FO = 0;
            
            foreach($aventurier->armes as $arme)
            {
                $modificateur_COU += $arme->COU;
                $modificateur_INT += $arme->INT;
                $modificateur_CHA += $arme->CHA;
                $modificateur_AD  += $arme->AD;
                $modificateur_FO  += $arme->FOR;
            }
            
            foreach($aventurier->protections as $protection)
            {
                $modificateur_COU += $protection->COU;
                $modificateur_INT += $protection->INT;
                $modificateur_CHA += $protection->CHA;
                $modificateur_AD  += $protection->AD;
                $modificateur_FO  += $protection->FOR;
            }
            ?>
        
        <tr style='border-bottom:1px #900000 solid;'>
            <td <?php if($modificateur_COU != 0){echo "style='color:green;'";}?> ><?php if($modificateur_COU != 0){echo $aventurier->COU +$modificateur_COU;}else{echo "&nbsp;";} ?></td>
    <td <?php if($modificateur_INT != 0){echo "style='color:green;'";}?>><?php if($modificateur_INT != 0){echo $aventurier->INT +$modificateur_INT;}else{echo "&nbsp;";} ?></td>
<td <?php if($modificateur_CHA != 0){echo "style='color:green;'";}?>><?php if($modificateur_CHA != 0){echo $aventurier->CHA +$modificateur_CHA;}else{echo "&nbsp;";} ?></td>
            <td <?php if($modificateur_AD != 0){echo "style='color:green;'";}?>><?php if($modificateur_AD != 0){echo $aventurier->AD +$modificateur_AD;}else{echo "&nbsp;";} ?></td>
            <td <?php if($modificateur_FO != 0){echo "style='color:green;'";}?>><?php if($modificateur_FO != 0){echo $aventurier->FO +$modificateur_FO;}else{echo "&nbsp;";} ?></td>
        </tr>
        <tr style='border-bottom:1px #900000 solid;'><td colspan='2'>DESTIN :</td><td colspan='3'> <?php echo $aventurier->DESTIN; ?> </td></tr>
        <tr style='border-bottom:1px #900000 solid;'><td> XP :</td><td colspan='4'> <?php echo $aventurier->XP; ?> </td></tr>
        <tr style='border-bottom:1px #900000 solid;'><td> EV :</td><td colspan='4'> <?php echo $aventurier->EV; ?> </td></tr>
        <?php 
            if($aventurier->EA != 0)
            {
                ?>
                    <tr style='border-bottom:1px #900000 solid;'><td>EA :</td><td colspan='4'> <?php echo $aventurier->EA; ?> </td></tr>
                <?php
            }
        ?>
        <tr><td >AT</td><td>PRD</td><td style='font-size:80%;'>PRM</td><td>PR</td><td>RM</td></tr>
        <tr style='border-bottom:1px #900000 solid;'>
            <td><?php echo $aventurier->AT; ?></td><td> <?php echo $aventurier->PRD; ?> </td>
            <td> <?php if($aventurier->PR_MAX == 0){echo " / ";}else{echo $aventurier->PR_MAX;} ?> </td>
            <td> <?php echo $aventurier->PR; if($aventurier->possedeCompetence(new Competence(49))){echo "<span style='color:green;'>+1</span>";} ?></td><td><?php echo $aventurier->RESISTMAG; ?></td>
        </tr>
        
        <?php 
            if($aventurier->EA != 0)
            {
                ?>
                    <tr><td colspan='2'>MAGPSY</td><td colspan='3'>MAGPHYS</td></tr>
                    <tr style='border-bottom:1px #900000 solid;'><td colspan='2'><?php echo $aventurier->MAGIEPSY; ?></td><td colspan='3'><?php echo $aventurier->MAGIEPHYS; ?></td></tr>
                <?php
            }
        
            echo "<tr style='font-size:70%;text-align:center;'><td colspan='5'><u>armes</u></td></tr>";
            echo "<tr style='font-size:80%;'><td>AT</td><td>PRD</td><td>MODIF</td><td>PI</td><td>RUP</td></tr>";
            
            $bonus_pi = "";
            if($this->FO > 12)
            {
                $bonus_pi = "+".($this->FO - 12);
            }
            else if($this->FO < 9)
            {
                $bonus_pi = "-1";
            }
            foreach($aventurier->armes as $arme)
            {
                echo "<tr style='font-size:80%;'><td colspan='5'><u>".$arme->NOM."</u></td></tr>";
                $at = $aventurier->AT + $arme->AT;
                $prd = $aventurier->PRD + $arme->PRD;
                echo "<tr style='font-size:80%;border-bottom:1px #900000 dotted;'><td>".$at."</td><td>".$prd."</td><td>".$arme->modifCharac()."</td><td>".$arme->PI."<span style='color:green;'>".$bonus_pi."</span></td><td>".$arme->RUP."</td></tr>";
            }
            echo "<tr style='font-size:70%;text-align:center;border-top:1px #900000 solid;'><td colspan='5'><u>protection</u></td></tr>";
            echo "<tr style='font-size:80%;'><td colspan='3'>MODIF</td><td>PR</td><td>RUP</td></tr>";
            foreach($aventurier->protections as $protection)
            {
                echo "<tr style='font-size:80%;'><td colspan='5'><u>".$protection->NOM."</u></td></tr>";
                echo "<tr style='font-size:80%;border-bottom:1px #900000 dotted;'><td colspan='3'>".$protection->modif()."</td><td>".$protection->PR."</td><td>".$protection->RUP."</td></tr>";
            }            
            echo "<tr style='font-size:70%;text-align:center;padding:0px;border-top:1px #900000 solid;'><td colspan='5'><u>equipement</u></td></tr>";
            
            $compte = 0;            
            foreach($aventurier->equipements as $equipement)
            {
                if($equipement->type == "munition")
                {
                    echo "<tr style='font-size:80%;'><td colspan='5' style='padding:0px;'>".$equipement->libelle."</td></tr>";
                    $compte++;
                }                
            }
            $compte1 = 0;            
            foreach($aventurier->equipements as $equipement)
            {
                if($equipement->type == "nourriture")
                {
                    echo "<tr style='font-size:80%;";
                    if($compte >0 && $compte1 ==0)
                    {
                        echo "border-top:1px #900000 dotted;";
                    }
                    echo "'><td colspan='5' style='padding:0px;'>".$equipement->libelle."</td></tr>";
                    $compte1++;
                }                
            }
            $compte11 = 0;            
            foreach($aventurier->equipements as $equipement)
            {
                if($equipement->type == "vetement")
                {
                    echo "<tr style='font-size:80%;";
                    if(($compte1 >0 || $compte >0) && $compte11 ==0)
                    {
                        echo "border-top:1px #900000 dotted;";
                    }
                    echo "'><td colspan='5' style='padding:0px;'>".$equipement->libelle."</td></tr>";
                    $compte11++;
                }                
            }
            $compte2=0;
            foreach($aventurier->equipements as $equipement)
            {
                if($equipement->type != "nourriture" && $equipement->type != "munition" && $equipement->type != "vetement")
                { 
                    echo "<tr style='font-size:80%;";
                    if(($compte1 >0 || $compte11 >0 || $compte >0) && $compte2==0)
                    {
                        echo "border-top:1px #900000 dotted;";
                    }
                    echo "'><td colspan='5' style='padding:0px;'>".$equipement->libelle."</td></tr>";
                    $compte2++;
                }
            } 
        ?>
        
        <tr style='border-top:1px #900000 solid;border-bottom:1px #900000 dotted;'><td style='padding:0px;'> OR :</td><td style='padding:0px;' colspan='4'> <?php echo $aventurier->OR; ?> </td></tr>
        <tr style='border-bottom:1px #900000 dotted;'><td style='padding:0px;'> PA :</td><td colspan='4' style='padding:0px;'> <?php echo $aventurier->ARGENT; ?> </td></tr>
        <tr style='border-bottom:1px #900000 solid;'><td style='padding:0px;'> PC :</td><td style='padding:0px;' colspan='4'> <?php echo $aventurier->CUIVRE; ?> </td></tr>
        <tr>
            <td colspan='5' style='font-size:70%;'>
            <?php
                $competences = Competence::Lister();
                foreach($competences as $competence)
                {
                    if($aventurier->possedeCompetence($competence))
                    {
                        if($aventurier->estCompetenceChoisie($competence))
                        {
                            echo "<b>".$competence->NOM."</b><br />";
                        }
                        else
                        {
                            echo "".$competence->NOM."<br />";
                        }
                    }
                }           
            ?>
            </td>
        </tr>
       
        </table>      
       
    </td>
    </tr>
    </table>
        <?php
    }
}

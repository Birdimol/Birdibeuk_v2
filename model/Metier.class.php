<?php
/**
 * @file Metier.class.php 
 * @brief Ce fichier définit la classe Metier.
 * @author  Birdimol
 * @version 2.0 
 * @date 30 octobre 2015
 */

 /**
 * @brief La classe Metier.
 *
 * Cette classe permet la gestion des metiers et des compétences 
 * liées à ces métiers. Elle permet aussi de determiner si un 
 * Aventurier à accès a des métiers spécifiques.
 * @author  Birdimol
 * @version 2.0 
 * @date 28 octobre 2015
 */
class Metier 
{ 
    //Attributs correspondant à la DB
    private $METIER_ID;		
    private $METIER_NOM;		
    private $METIER_EV;
    private $METIER_EA;
    private $METIER_AT;		
    private $METIER_PRD;		
    private $METIER_FOMIN;		
    private $METIER_FOMAX;		
    private $METIER_ADMIN;		
    private $METIER_ADMAX;		
    private $METIER_INTMIN;		
    private $METIER_INTMAX;		
    private $METIER_CHAMIN;		
    private $METIER_CHAMAX;		
    private $METIER_COUMIN;		
    private $METIER_COUMAX;		
    private $METIER_RESTRICTION;		
    private $METIER_BONUS;		
    private $METIER_PRMAX;	
	
    //Attributs supplémentaires
    private $competences_liees;
    private $competences_a_choisir;


    /**
     * @brief Constructeur de la classe Metier
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
        /*
        //si ID
        if(!empty($ID_envoye) && empty($NOM_envoye))
        {
            $this->METIER_get_data_from_db($ID_envoye);
        }
        else
        {
            $this->METIER_ID = $ID_envoye;
            $this->METIER_NOM = $NOM_envoye;
            $this->METIER_EV = $EV_envoye;
            $this->METIER_EA = $EA_envoye;
            $this->METIER_AT = $AT_envoye;
            $this->METIER_PRD = $PRD_envoye;
            $this->METIER_FOMIN = $FOMIN_envoye;
            $this->METIER_FOMAX = $FOMAX_envoye;
            $this->METIER_ADMIN = $ADMIN_envoye;
            $this->METIER_ADMAX = $ADMAX_envoye;
            $this->METIER_INTMIN = $INTMIN_envoye;
            $this->METIER_INTMAX = $INTMAX_envoye;
            $this->METIER_CHAMIN = $CHAMIN_envoye;
            $this->METIER_CHAMAX = $CHAMAX_envoye;
            $this->METIER_COUMIN = $COUMIN_envoye;
            $this->METIER_COUMAX = $COUMAX_envoye;
            $this->METIER_RESTRICTION = $RESTRICTION_envoye;
            $this->METIER_BONUS = $BONUS_envoye;
            $this->METIER_PRMAX = $PRMAX_envoye;
            
            $this->METIER_COMPETENCESLIEES = array();
            $this->METIER_COMPETENCESACHOISIR = array();
            
            if(!empty($this->METIER_ID))
            {
                $db = DatabaseManager::getDb();
                $requete = "SELECT ID_COMPETENCE FROM lien_metier_competence_native WHERE id_metier = :id";    
                $stmt = $db->prepare($requete);
                $stmt->bindParam(":id", $this->METIER_ID, PDO::PARAM_INT);
                $stmt->execute();
            
                while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $competence = new Competence($ligne["ID_COMPETENCE"]);
                    $this->METIER_COMPETENCESLIEES[] = $competence;
                }
                
                $requete = "SELECT ID_COMPETENCE FROM lien_metier_competence_choix WHERE id_metier = :id";    
                $stmt = $db->prepare($requete);
                $stmt->bindParam(":id", $this->METIER_ID, PDO::PARAM_INT);
                $stmt->execute();
            
                while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $competence = new Competence($ligne["ID_COMPETENCE"]);
                    $this->METIER_COMPETENCESACHOISIR[] = $competence;
                }
            }            
        }
        */
    }

    //get
    public function __get($var)
    {
        if(!isset($this->$var))
        {
            $var = strtoupper($var);
            if(isset($this->$var))
            {
                return $this->$var;	
            }
            else
            {
                $var = strtolower($var);
                if(isset($this->$var))
                {
                    return $this->$var;	
                }
            }
        }
        else
        {
            return $this->$var;	
        }
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
            $this->$key = $value;
        }
    }

    public function print_form()
    {
        ?>
        <table>
            <input type='hidden' id='ID' value='<?php echo $this->METIER_ID; ?>' name='ID' />
            <tr><td><label for='NOM'>NOM</label></td><td><input type='text' id='NOM' value='<?php echo $this->METIER_NOM; ?>' name='NOM' /></td></tr>
            <tr><td><label for='EV'>EV</label></td><td><input type='text' id='EV' value='<?php echo $this->METIER_EV; ?>' name='EV' /></td></tr>
            <tr><td><label for='EV'>EA</label></td><td><input type='text' id='EA' value='<?php echo $this->METIER_EA; ?>' name='EA' /></td></tr>
            <tr><td><label for='AT'>AT</label></td><td><input type='text' id='AT' value='<?php echo $this->METIER_AT; ?>' name='AT' /></td></tr>
            <tr><td><label for='PRD'>PRD</label></td><td><input type='text' id='PRD' value='<?php echo $this->METIER_PRD; ?>' name='PRD' /></td></tr>
            <tr><td><label for='FOMIN'>FOMIN</label></td><td><input type='text' id='FOMIN' value='<?php echo $this->METIER_FOMIN; ?>' name='FOMIN' /></td></tr>
            <tr><td><label for='FOMAX'>FOMAX</label></td><td><input type='text' id='FOMAX' value='<?php echo $this->METIER_FOMAX; ?>' name='FOMAX' /></td></tr>
            <tr><td><label for='ADMIN'>ADMIN</label></td><td><input type='text' id='ADMIN' value='<?php echo $this->METIER_ADMIN; ?>' name='ADMIN' /></td></tr>
            <tr><td><label for='ADMAX'>ADMAX</label></td><td><input type='text' id='ADMAX' value='<?php echo $this->METIER_ADMAX; ?>' name='ADMAX' /></td></tr>
            <tr><td><label for='INTMIN'>INTMIN</label></td><td><input type='text' id='INTMIN' value='<?php echo $this->METIER_INTMIN; ?>' name='INTMIN' /></td></tr>
            <tr><td><label for='INTMAX'>INTMAX</label></td><td><input type='text' id='INTMAX' value='<?php echo $this->METIER_INTMAX; ?>' name='INTMAX' /></td></tr>
            <tr><td><label for='CHAMIN'>CHAMIN</label></td><td><input type='text' id='CHAMIN' value='<?php echo $this->METIER_CHAMIN; ?>' name='CHAMIN' /></td></tr>
            <tr><td><label for='CHAMAX'>CHAMAX</label></td><td><input type='text' id='CHAMAX' value='<?php echo $this->METIER_CHAMAX; ?>' name='CHAMAX' /></td></tr>
            <tr><td><label for='COUMIN'>COUMIN</label></td><td><input type='text' id='COUMIN' value='<?php echo $this->METIER_COUMIN; ?>' name='COUMIN' /></td></tr>
            <tr><td><label for='COUMAX'>COUMAX</label></td><td><input type='text' id='COUMAX' value='<?php echo $this->METIER_COUMAX; ?>' name='COUMAX' /></td></tr>
            <tr><td><label for='RESTRICTION'>RESTRICTION</label></td><td><input type='text' id='RESTRICTION' value='<?php echo $this->METIER_RESTRICTION; ?>' name='RESTRICTION' /></td></tr>
            <tr><td><label for='BONUS'>BONUS</label></td><td><input type='text' id='BONUS' value='<?php echo $this->METIER_BONUS; ?>' name='BONUS' /></td></tr>
            <tr><td><label for='PRMAX'>PRMAX</label></td><td><input type='text' id='PRMAX' value='<?php echo $this->METIER_PRMAX; ?>' name='PRMAX' /></td></tr>
        </table>
        <?php
    }

    //liste
    public static function Lister()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM metier where ID < 99 order by nom";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new metier($rs['ID'], $rs['NOM'], $rs['EV'], $rs['EA'], $rs['AT'], $rs['PRD'], $rs['FOMIN'], $rs['FOMAX'], $rs['ADMIN'], $rs['ADMAX'], $rs['INTMIN'], $rs['INTMAX'], $rs['CHAMIN'], $rs['CHAMAX'], $rs['COUMIN'], $rs['COUMAX'], $rs['RESTRICTION'], $rs['BONUS'], $rs['PRMAX']);
        }
        
        return $tableau;
    }
    
    public static function getMetiersPossibles($cou,$cha,$int,$ad,$fo)
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * 
        FROM metier 
        where 
        ID < 99 and
        coumin <= ".$cou." and coumax >= ".$cou."
        and chamin <= ".$cha." and chamax >= ".$cha."
        and intmin <= ".$int." and intmax >= ".$int."
        and admin <= ".$ad." and admax >= ".$ad."
        and fomin <= ".$fo." and fomax >= ".$fo;
        
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new metier($rs['ID'], $rs['NOM'], $rs['EV'], $rs['EA'], $rs['AT'], $rs['PRD'], $rs['FOMIN'], $rs['FOMAX'], $rs['ADMIN'], $rs['ADMAX'], $rs['INTMIN'], $rs['INTMAX'], $rs['CHAMIN'], $rs['CHAMAX'], $rs['COUMIN'], $rs['COUMAX'], $rs['RESTRICTION'], $rs['BONUS'], $rs['PRMAX']);
        }
        
        return $tableau;
    }

    public function ajouter()
    {
        $db = DatabaseManager::getDb();
        $requete = "INSERT INTO metier (NOM, EV, EA, AT, PRD, FOMIN, FOMAX, ADMIN, ADMAX, INTMIN, INTMAX, CHAMIN, CHAMAX, COUMIN, COUMAX, RESTRICTION, BONUS, PRMAX) VALUES ('".$this->METIER_NOM."', ".$this->METIER_EV.", ".$this->METIER_EA.", ".$this->METIER_AT.", ".$this->METIER_PRD.", ".$this->METIER_FOMIN.", ".$this->METIER_FOMAX.", ".$this->METIER_ADMIN.", ".$this->METIER_ADMAX.", ".$this->METIER_INTMIN.", ".$this->METIER_INTMAX.", ".$this->METIER_CHAMIN.", ".$this->METIER_CHAMAX.", ".$this->METIER_COUMIN.", ".$this->METIER_COUMAX.", '".$this->METIER_RESTRICTION."', '".$this->METIER_BONUS."', ".$this->METIER_PRMAX.")";
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function modifier()
    {
        $db = DatabaseManager::getDb();
        $requete = "UPDATE metier SET NOM = '".$this->METIER_NOM."', EV = ".$this->METIER_EV.", EA = ".$this->METIER_EA.", AT = ".$this->METIER_AT.", PRD = ".$this->METIER_PRD.", FOMIN = ".$this->METIER_FOMIN.", FOMAX = ".$this->METIER_FOMAX.", ADMIN = ".$this->METIER_ADMIN.", ADMAX = ".$this->METIER_ADMAX.", INTMIN = ".$this->METIER_INTMIN.", INTMAX = ".$this->METIER_INTMAX.", CHAMIN = ".$this->METIER_CHAMIN.", CHAMAX = ".$this->METIER_CHAMAX.", COUMIN = ".$this->METIER_COUMIN.", COUMAX = ".$this->METIER_COUMAX.", RESTRICTION = '".$this->METIER_RESTRICTION."', BONUS = '".$this->METIER_BONUS."', PRMAX = ".$this->METIER_PRMAX." WHERE ID = ".$this->METIER_ID;
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function supprimer()
    {
        $db = DatabaseManager::getDb();
        $requete = "DELETE FROM metier WHERE ID = ".$this->METIER_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    //get_data_from_db
    public function loadFromDB($id)
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM metier WHERE METIER_ID = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->METIER_ID = $ligne['METIER_ID']; 
        $this->METIER_NOM = $ligne['METIER_NOM']; 
        $this->METIER_EV = $ligne['METIER_EV']; 
        $this->METIER_EA = $ligne['METIER_EA']; 
        $this->METIER_AT = $ligne['METIER_AT']; 
        $this->METIER_PRD = $ligne['METIER_PRD']; 
        $this->METIER_FOMIN = $ligne['METIER_FOMIN']; 
        $this->METIER_FOMAX = $ligne['METIER_FOMAX']; 
        $this->METIER_ADMIN = $ligne['METIER_ADMIN']; 
        $this->METIER_ADMAX = $ligne['METIER_ADMAX']; 
        $this->METIER_INTMIN = $ligne['METIER_INTMIN']; 
        $this->METIER_INTMAX = $ligne['METIER_INTMAX']; 
        $this->METIER_CHAMIN = $ligne['METIER_CHAMIN']; 
        $this->METIER_CHAMAX = $ligne['METIER_CHAMAX']; 
        $this->METIER_COUMIN = $ligne['METIER_COUMIN']; 
        $this->METIER_COUMAX = $ligne['METIER_COUMAX']; 
        $this->METIER_RESTRICTION = $ligne['METIER_RESTRICTION']; 
        $this->METIER_BONUS = $ligne['METIER_BONUS']; 
        $this->METIER_PRMAX = $ligne['METIER_PRMAX'];
        
        $db = DatabaseManager::getDb();
        $requete = "SELECT ID_COMPETENCE FROM lien_metier_competence_native WHERE ID_METIER = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $competence = new Competence($ligne["ID_COMPETENCE"]);
            $this->METIER_COMPETENCESLIEES[] = $competence;
        }
        
        $requete = "SELECT ID_COMPETENCE FROM lien_metier_competence_choix WHERE ID_METIER = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $competence = new Competence($ligne["ID_COMPETENCE"]);
            $this->METIER_COMPETENCESACHOISIR[] = $competence;
        }
    }
    
    public function __toString()
    {
        return $this->METIER_NOM;
    }

    public function debug()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

}

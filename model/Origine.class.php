<?php
/**
 * @file Origine.class.php 
 * @brief Ce fichier définit la classe Origine.
 * @author  Birdimol
 * @version 2.0 
 * @date 30 octobre 2015
 */

 /**
 * @brief La classe Origine.
 *
 * Cette classe permet la gestion des origines et des compétences 
 * liées à ces origines. Elle permet aussi de determiner si un 
 * Aventurier à accès a des origines spécifiques en fonction de ses compétences.
 * @author  Birdimol
 * @version 2.0 
 * @date 28 octobre 2015
 */
class Origine 
{ 
    //Attributs
    private $ORIGINE_ORIGINE_ID;		
    private $ORIGINE_NOM;		
    private $ORIGINE_EV;		
    private $ORIGINE_AT;		
    private $ORIGINE_PRD;		
    private $ORIGINE_FOMIN;		
    private $ORIGINE_FOMAX;		
    private $ORIGINE_ADMIN;		
    private $ORIGINE_ADMAX;		
    private $ORIGINE_INTMIN;		
    private $ORIGINE_INTMAX;		
    private $ORIGINE_CHAMIN;		
    private $ORIGINE_CHAMAX;		
    private $ORIGINE_COUMIN;		
    private $ORIGINE_COUMAX;		
    private $ORIGINE_RESTRICTION;		
    private $ORIGINE_BONUS;		
    private $ORIGINE_MAGIE;		
    private $ORIGINE_PRMAX;		
    private $ORIGINE_BOUCLIER;		
    private $ORIGINE_JET;		
    private $ORIGINE_MALADIE;		
    private $ORIGINE_PETITE_TAILLE;
    private $ORIGINE_PR_MAX;
    private $comptetences_liees;
    private $competences_a_choisir;

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
        /*
        //si ID
        if(!empty($ID_envoye) && empty($NOM_envoye))
        {
            $this->get_data_from_db($ID_envoye);
        }
        else
        {
            $this->ID = $ID_envoye;
            $this->NOM = $NOM_envoye;
            $this->EV = $EV_envoye;
            $this->AT = $AT_envoye;
            $this->PRD = $PRD_envoye;
            $this->FOMIN = $FOMIN_envoye;
            $this->FOMAX = $FOMAX_envoye;
            $this->ADMIN = $ADMIN_envoye;
            $this->ADMAX = $ADMAX_envoye;
            $this->INTMIN = $INTMIN_envoye;
            $this->INTMAX = $INTMAX_envoye;
            $this->CHAMIN = $CHAMIN_envoye;
            $this->CHAMAX = $CHAMAX_envoye;
            $this->COUMIN = $COUMIN_envoye;
            $this->COUMAX = $COUMAX_envoye;
            $this->RESTRICTION = $RESTRICTION_envoye;
            $this->BONUS = $BONUS_envoye;
            $this->MAGIE = $MAGIE_envoye;
            $this->PRMAX = $PRMAX_envoye;
            $this->BOUCLIER = $BOUCLIER_envoye;
            $this->JET = $JET_envoye;
            $this->MALADIE = $MALADIE_envoye;
            $this->PETITE_TAILLE = $PETITE_TAILLE_envoye;
            $this->PR_MAX = $PR_MAX_envoye;
            if(!empty($this->ID))
            {
                $db = getConnexionDB();
                $requete = "SELECT ID_COMPETENCE FROM lien_origine_competence_native WHERE ID_ORIGINE = ".$ID_envoye;    
                $stmt = $db->prepare($requete);
                $stmt->execute();
            
                while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $competence = new Competence($ligne["ID_COMPETENCE"]);
                    $this->COMPETENCESLIEES[] = $competence;
                }
                
                $requete = "SELECT ID_COMPETENCE FROM lien_origine_competence_choix WHERE ID_ORIGINE = ".$ID_envoye;    
                $stmt = $db->prepare($requete);
                $stmt->execute();
            
                while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
                {
                    $competence = new Competence($ligne["ID_COMPETENCE"]);
                    $this->COMPETENCESACHOISIR[] = $competence;
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
            if(property_exists("Origine",$key))
            {
                $this->$key = $value;
            }
        }
    }

    public function print_form()
    {
        ?>
        <table>
            <input type='hidden' id='ID' value='<?php echo $this->ID; ?>' name='ID' />
            <tr><td><label for='NOM'>NOM</label></td><td><input type='text' id='NOM' value='<?php echo $this->NOM; ?>' name='NOM' /></td></tr>
            <tr><td><label for='EV'>EV</label></td><td><input type='text' id='EV' value='<?php echo $this->EV; ?>' name='EV' /></td></tr>
            <tr><td><label for='AT'>AT</label></td><td><input type='text' id='AT' value='<?php echo $this->AT; ?>' name='AT' /></td></tr>
            <tr><td><label for='PRD'>PRD</label></td><td><input type='text' id='PRD' value='<?php echo $this->PRD; ?>' name='PRD' /></td></tr>
            <tr><td><label for='FOMIN'>FOMIN</label></td><td><input type='text' id='FOMIN' value='<?php echo $this->FOMIN; ?>' name='FOMIN' /></td></tr>
            <tr><td><label for='FOMAX'>FOMAX</label></td><td><input type='text' id='FOMAX' value='<?php echo $this->FOMAX; ?>' name='FOMAX' /></td></tr>
            <tr><td><label for='ADMIN'>ADMIN</label></td><td><input type='text' id='ADMIN' value='<?php echo $this->ADMIN; ?>' name='ADMIN' /></td></tr>
            <tr><td><label for='ADMAX'>ADMAX</label></td><td><input type='text' id='ADMAX' value='<?php echo $this->ADMAX; ?>' name='ADMAX' /></td></tr>
            <tr><td><label for='INTMIN'>INTMIN</label></td><td><input type='text' id='INTMIN' value='<?php echo $this->INTMIN; ?>' name='INTMIN' /></td></tr>
            <tr><td><label for='INTMAX'>INTMAX</label></td><td><input type='text' id='INTMAX' value='<?php echo $this->INTMAX; ?>' name='INTMAX' /></td></tr>
            <tr><td><label for='CHAMIN'>CHAMIN</label></td><td><input type='text' id='CHAMIN' value='<?php echo $this->CHAMIN; ?>' name='CHAMIN' /></td></tr>
            <tr><td><label for='CHAMAX'>CHAMAX</label></td><td><input type='text' id='CHAMAX' value='<?php echo $this->CHAMAX; ?>' name='CHAMAX' /></td></tr>
            <tr><td><label for='COUMIN'>COUMIN</label></td><td><input type='text' id='COUMIN' value='<?php echo $this->COUMIN; ?>' name='COUMIN' /></td></tr>
            <tr><td><label for='COUMAX'>COUMAX</label></td><td><input type='text' id='COUMAX' value='<?php echo $this->COUMAX; ?>' name='COUMAX' /></td></tr>
            <tr><td><label for='RESTRICTION'>RESTRICTION</label></td><td><input type='text' id='RESTRICTION' value='<?php echo $this->RESTRICTION; ?>' name='RESTRICTION' /></td></tr>
            <tr><td><label for='BONUS'>BONUS</label></td><td><input type='text' id='BONUS' value='<?php echo $this->BONUS; ?>' name='BONUS' /></td></tr>
            <tr><td><label for='MAGIE'>MAGIE</label></td><td><input type='text' id='MAGIE' value='<?php echo $this->MAGIE; ?>' name='MAGIE' /></td></tr>
            <tr><td><label for='PRMAX'>PRMAX</label></td><td><input type='text' id='PRMAX' value='<?php echo $this->PRMAX; ?>' name='PRMAX' /></td></tr>
            <tr><td><label for='BOUCLIER'>BOUCLIER</label></td><td><input type='text' id='BOUCLIER' value='<?php echo $this->BOUCLIER; ?>' name='BOUCLIER' /></td></tr>
            <tr><td><label for='JET'>JET</label></td><td><input type='text' id='JET' value='<?php echo $this->JET; ?>' name='JET' /></td></tr>
            <tr><td><label for='MALADIE'>MALADIE</label></td><td><input type='text' id='MALADIE' value='<?php echo $this->MALADIE; ?>' name='MALADIE' /></td></tr>
            <tr><td><label for='PETITE_TAILLE'>PETITE_TAILLE</label></td><td><input type='text' id='PETITE_TAILLE' value='<?php echo $this->PETITE_TAILLE; ?>' name='PETITE_TAILLE' /></td></tr>
        </table>
        <?php
    }

    //liste
    public static function Lister()
    {
        $db = getConnexionDB();
        $requete = "SELECT * FROM origine";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $temp = new origine($rs['ID'], $rs['NOM'], $rs['EV'], $rs['AT'], $rs['PRD'], $rs['FOMIN'], $rs['FOMAX'], $rs['ADMIN'], $rs['ADMAX'], $rs['INTMIN'], $rs['INTMAX'], $rs['CHAMIN'], $rs['CHAMAX'], $rs['COUMIN'], $rs['COUMAX'], $rs['RESTRICTION'], $rs['BONUS'], $rs['MAGIE'], $rs['PRMAX'], $rs['BOUCLIER'], $rs['JET'], $rs['MALADIE'], $rs['PETITE_TAILLE'], $rs['PR_MAX']);
            
            $temp->COMPETENCESLIEES = array();
            $temp->COMPETENCESACHOISIR = array();
            
            $requete2 = "SELECT ID_COMPETENCE FROM lien_origine_competence_native WHERE ID_ORIGINE = ".$rs['ID'];    
            $stmt2 = $db->prepare($requete2);
            $stmt2->execute();
        
            while($ligne = $stmt2->fetch(PDO::FETCH_ASSOC))
            {
                $competence = new Competence($ligne["ID_COMPETENCE"]);
                $temp->COMPETENCESLIEES[] = $competence;
            }
            
            $requete2 = "SELECT ID_COMPETENCE FROM lien_origine_competence_choix WHERE ID_ORIGINE = ".$rs['ID'];    
            $stmt2 = $db->prepare($requete2);
            $stmt2->execute();
        
            while($ligne = $stmt2->fetch(PDO::FETCH_ASSOC))
            {
                $competence = new Competence($ligne["ID_COMPETENCE"]);
                $temp->COMPETENCESACHOISIR[] = $competence;
            }
        
            $tableau[] = $temp;
        }
        return $tableau;
    }
    
    public static function getOriginesPossibles($cou,$cha,$int,$ad,$fo)
    {
        $db = getConnexionDB();
        $requete = "SELECT * 
        FROM origine 
        where coumin <= ".$cou." and coumax >= ".$cou."
        and chamin <= ".$cha." and chamax >= ".$cha."
        and intmin <= ".$int." and intmax >= ".$int."
        and admin <= ".$ad." and admax >= ".$ad."
        and fomin <= ".$fo." and fomax >= ".$fo;
        
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new origine($rs['ID'], $rs['NOM'], $rs['EV'], $rs['AT'], $rs['PRD'], $rs['FOMIN'], $rs['FOMAX'], $rs['ADMIN'], $rs['ADMAX'], $rs['INTMIN'], $rs['INTMAX'], $rs['CHAMIN'], $rs['CHAMAX'], $rs['COUMIN'], $rs['COUMAX'], $rs['RESTRICTION'], $rs['BONUS'], $rs['MAGIE'], $rs['PRMAX'], $rs['BOUCLIER'], $rs['JET'], $rs['MALADIE'], $rs['PETITE_TAILLE'], $rs['PR_MAX']);
        }
        
        return $tableau;
    }

    public function ajouter()
    {
        $db = getConnexionDB();
        $requete = "INSERT INTO origine (NOM, EV, AT, PRD, FOMIN, FOMAX, ADMIN, ADMAX, INTMIN, INTMAX, CHAMIN, CHAMAX, COUMIN, COUMAX, RESTRICTION, BONUS, MAGIE, PRMAX, BOUCLIER, JET, MALADIE, PETITE_TAILLE, PR_MAX) VALUES ('".$this->NOM."', ".$this->EV.", ".$this->AT.", ".$this->PRD.", ".$this->FOMIN.", ".$this->FOMAX.", ".$this->ADMIN.", ".$this->ADMAX.", ".$this->INTMIN.", ".$this->INTMAX.", ".$this->CHAMIN.", ".$this->CHAMAX.", ".$this->COUMIN.", ".$this->COUMAX.", '".$this->RESTRICTION."', '".$this->BONUS."', ".$this->MAGIE.", ".$this->PRMAX.", ".$this->BOUCLIER.", ".$this->JET.", ".$this->MALADIE.", ".$this->PETITE_TAILLE.", ".$this->PR_MAX.")";
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function modifier()
    {
        $db = getConnexionDB();
        $requete = "UPDATE origine SET NOM = '".$this->NOM."', EV = ".$this->EV.", AT = ".$this->AT.", PRD = ".$this->PRD.", FOMIN = ".$this->FOMIN.", FOMAX = ".$this->FOMAX.", ADMIN = ".$this->ADMIN.", ADMAX = ".$this->ADMAX.", INTMIN = ".$this->INTMIN.", INTMAX = ".$this->INTMAX.", CHAMIN = ".$this->CHAMIN.", CHAMAX = ".$this->CHAMAX.", COUMIN = ".$this->COUMIN.", COUMAX = ".$this->COUMAX.", RESTRICTION = '".$this->RESTRICTION."', BONUS = '".$this->BONUS."', MAGIE = ".$this->MAGIE.", PRMAX = ".$this->PRMAX.", BOUCLIER = ".$this->BOUCLIER.", JET = ".$this->JET.", MALADIE = ".$this->MALADIE.", PETITE_TAILLE = ".$this->PETITE_TAILLE.", PR_MAX = ".$this->PR_MAX." WHERE ID = ".$this->ID;
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function supprimer()
    {
        $db = getConnexionDB();
        $requete = "DELETE FROM origine WHERE ID = ".$this->ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    //get_data_from_db
    public function get_data_from_db($id)
    {
        $db = getConnexionDB();
        $requete = "SELECT * FROM origine WHERE ID = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);
     
        $this->ID = $ligne['ID']; 
        $this->NOM = $ligne['NOM']; 
        $this->EV = $ligne['EV']; 
        $this->AT = $ligne['AT']; 
        $this->PRD = $ligne['PRD']; 
        $this->FOMIN = $ligne['FOMIN']; 
        $this->FOMAX = $ligne['FOMAX']; 
        $this->ADMIN = $ligne['ADMIN']; 
        $this->ADMAX = $ligne['ADMAX']; 
        $this->INTMIN = $ligne['INTMIN']; 
        $this->INTMAX = $ligne['INTMAX']; 
        $this->CHAMIN = $ligne['CHAMIN']; 
        $this->CHAMAX = $ligne['CHAMAX']; 
        $this->COUMIN = $ligne['COUMIN']; 
        $this->COUMAX = $ligne['COUMAX']; 
        $this->RESTRICTION = $ligne['RESTRICTION']; 
        $this->BONUS = $ligne['BONUS']; 
        $this->MAGIE = $ligne['MAGIE']; 
        $this->PRMAX = $ligne['PRMAX']; 
        $this->BOUCLIER = $ligne['BOUCLIER']; 
        $this->JET = $ligne['JET']; 
        $this->MALADIE = $ligne['MALADIE']; 
        $this->PETITE_TAILLE = $ligne['PETITE_TAILLE'];
        $this->PR_MAX = $ligne['PR_MAX'];
        
        $this->COMPETENCESLIEES = array();
        $this->COMPETENCESACHOISIR = array();
        
        $requete = "SELECT ID_COMPETENCE FROM lien_origine_competence_native WHERE ID_ORIGINE = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $competence = new Competence($ligne["ID_COMPETENCE"]);
            $this->COMPETENCESLIEES[] = $competence;
        }
        
        $requete = "SELECT ID_COMPETENCE FROM lien_origine_competence_choix WHERE ID_ORIGINE = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
    
        while($ligne = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $competence = new Competence($ligne["ID_COMPETENCE"]);
            $this->COMPETENCESACHOISIR[] = $competence;
        }
    }
    
    public function __toString()
    {
        return $this->ORIGINE_NOM;
    }

    public function debug()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }

}

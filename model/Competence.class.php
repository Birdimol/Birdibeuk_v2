<?php 
/**
 * @file model/Competence.class.php 
 * @brief Ce fichier définit la classe Competence.
 * 
 * @author  Birdimol
 * @version 2.0 
 * @date 09 novembre 2015
 */

  /**
 * @brief La classe Competence.
 *
 * Cette classe définit les compétences que peut posséder un Aventurier.
 * @author  Birdimol
 * @version 2.0 
 * @date 09 Novembre 2015
 */
class Competence 
{ 
    /**
     * @brief int : Id en DB de la compétence
     */
    private $COMPETENCE_ID;

    /**
     * @brief string : Nom de la compétence
     */	
    private $COMPETENCE_NOM;

    /**
     * @brief int : Modification de PR apportée par la compétence
     */	    
    private $COMPETENCE_PR;

    /**
     * @brief int : Modification d'AT apportée par la compétence
     */
    private $COMPETENCE_AT;

    /**
     * @brief int : Modification de PRD apportée par la compétence
     */
    private $COMPETENCE_PRD;

    /**
     * @brief int : Modification de COU apportée par la compétence
     */
    private $COMPETENCE_COU;

    /**
     * @brief int : Modification de CHA apportée par la compétence
     */
    private $COMPETENCE_CHA;

    /**
     * @brief int : Modification d'INT apportée par la compétence
     */
    private $COMPETENCE_INT;

    /**
     * @brief int : Modification de FO apportée par la compétence
     */
    private $COMPETENCE_FO;

    /**
     * @brief int : Modification d'AD apportée par la compétence
     */    
    private $COMPETENCE_AD;

    /**
     * @brief string : Description de la compétence
     */
    private $COMPETENCE_SPECIAL;

    /**
     * @brief string : Condition d'accès à la compétence
     */
    private $COMPETENCE_REQUIS;		

    /**
     * @brief Constructeur de la classe Competence
     *
     * Peut être initialisé sans paramètres, avec un tableau dont 
     * les index correspondant aux attributs ou encore avec l'ID 
     * en DB du record correspondant à l'objet.
     * @param   $parametre parametre optionel, peut être un tableau ou un id en db.      
     *
     * @return  Competence 
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
            if(property_exists("Competence",$key))
            {
                $this->$key = $value;
            }
        }
    }

    public function print_form()
    {
        ?>
        <table>
            <input type='hidden' id='ID' value='<?php echo $this->COMPETENCE_ID; ?>' name='ID' />
            <tr><td><label for='NOM'>NOM</label></td><td><input type='text' id='NOM' value='<?php echo $this->COMPETENCE_NOM; ?>' name='NOM' /></td></tr>
            <tr><td><label for='PR'>PR</label></td><td><input type='text' id='PR' value='<?php echo $this->COMPETENCE_PR; ?>' name='PR' /></td></tr>
            <tr><td><label for='AT'>AT</label></td><td><input type='text' id='AT' value='<?php echo $this->COMPETENCE_AT; ?>' name='AT' /></td></tr>
            <tr><td><label for='PRD'>PRD</label></td><td><input type='text' id='PRD' value='<?php echo $this->COMPETENCE_PRD; ?>' name='PRD' /></td></tr>
            <tr><td><label for='COU'>COU</label></td><td><input type='text' id='COU' value='<?php echo $this->COMPETENCE_COU; ?>' name='COU' /></td></tr>
            <tr><td><label for='CHA'>CHA</label></td><td><input type='text' id='CHA' value='<?php echo $this->COMPETENCE_CHA; ?>' name='CHA' /></td></tr>
            <tr><td><label for='INT'>INT</label></td><td><input type='text' id='INT' value='<?php echo $this->COMPETENCE_INT; ?>' name='INT' /></td></tr>
            <tr><td><label for='FO'>FO</label></td><td><input type='text' id='FO' value='<?php echo $this->COMPETENCE_FO; ?>' name='FO' /></td></tr>
            <tr><td><label for='AD'>AD</label></td><td><input type='text' id='AD' value='<?php echo $this->COMPETENCE_AD; ?>' name='AD' /></td></tr>
            <tr><td><label for='SPECIAL'>SPECIAL</label></td><td><input type='text' id='SPECIAL' value='<?php echo $this->COMPETENCE_SPECIAL; ?>' name='SPECIAL' /></td></tr>
            <tr><td><label for='REQUIS'>REQUIS</label></td><td><input type='text' id='REQUIS' value='<?php echo $this->COMPETENCE_REQUIS; ?>' name='REQUIS' /></td></tr>
        </table>
        <?php
    }

    //liste
    public static function Lister()
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."competence";
        $tableau = array();
        $stmt = $db->prepare($requete);

        $stmt->execute();
        
        while ($rs = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = new competence($rs['ID'], $rs['NOM'], $rs['PR'], $rs['AT'], $rs['PRD'], $rs['COU'], $rs['CHA'], $rs['INT'], $rs['FO'], $rs['AD'], $rs['SPECIAL'], $rs['REQUIS']);
        }
        return $tableau;
    }

    public function ajouter()
    {
        $db = DatabaseManager::getDb();
        $requete = "INSERT INTO ".PREFIX_DB."competence (NOM, PR, AT, PRD, COU, CHA, INT, FO, AD, SPECIAL, REQUIS) VALUES ('".$this->COMPETENCE_NOM."', ".$this->COMPETENCE_PR.", ".$this->COMPETENCE_AT.", ".$this->COMPETENCE_PRD.", ".$this->COMPETENCE_COU.", ".$this->COMPETENCE_CHA.", ".$this->COMPETENCE_INT.", ".$this->COMPETENCE_FO.", ".$this->COMPETENCE_AD.", '".$this->COMPETENCE_SPECIAL."', '".$this->COMPETENCE_REQUIS."')";
        
        $stmt = $db->prepare($requete);
        $stmt->execute();
        $this->COMPETENCE_ID = $stmt->lastInsertId(); 
    }

    public function modifier()
    {
        $db = DatabaseManager::getDb();
        $requete = "UPDATE ".PREFIX_DB."competence SET NOM = '".$this->COMPETENCE_NOM."', PR = ".$this->COMPETENCE_PR.", AT = ".$this->COMPETENCE_AT.", PRD = ".$this->COMPETENCE_PRD.", COU = ".$this->COMPETENCE_COU.", CHA = ".$this->COMPETENCE_CHA.", INT = ".$this->COMPETENCE_INT.", FO = ".$this->COMPETENCE_FO.", AD = ".$this->COMPETENCE_AD.", SPECIAL = '".$this->COMPETENCE_SPECIAL."', REQUIS = '".$this->COMPETENCE_REQUIS."' WHERE ID = ".$this->COMPETENCE_ID;
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    public function supprimer()
    {
        $db = DatabaseManager::getDb();
        $requete = "DELETE FROM ".PREFIX_DB."competence WHERE COMPETENCE_ID = ".$this->COMPETENCE_ID;        
        $stmt = $db->prepare($requete);
        $stmt->execute();
    }

    //get_data_from_db
    public function loadFromDB($id)
    {
        $db = DatabaseManager::getDb();
        $requete = "SELECT * FROM ".PREFIX_DB."competence WHERE COMPETENCE_ID = ".$id;    
        $stmt = $db->prepare($requete);
        $stmt->execute();
        
        $ligne = $stmt->fetch(PDO::FETCH_ASSOC);
     
        loadFromArray($ligne);
    }

    public function debug()
    {
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
    public function __toString()
    {
        return $this->COMPETENCE_NOM;
    }
}

<?php 
/**
 * @file view/aventurier/voir_aventurier.php 
 * @brief Cette vue permet de voir les données d'un aventurier.
 * 
 * @author  Birdimol
 * @version 2.0 
 * @date 06 novembre 2015
 */
 ?>
<div id='content'>
    <div style='text-align:right;float:right;'><span class='lien' style='' ><a href='<?php echo $_SERVER["HTTP_REFERER"]; ?>'> Retour</a></span></div>
    <h1 style='color:#900000;font-size:400%;margin-bottom:0px;'><?php echo $aventurier->AVENTURIER_NOM;
        if($aventurier->AVENTURIER_IMAGE_URL != "")
        {
            echo "<img id='image_aventurier' src='".$aventurier->AVENTURIER_IMAGE_URL."' style='float:left; width:150px;border:1px #3E404F solid;margin-right:20px;margin-bottom:20px;' />";
        }
        
    ?></h1>
    
    <h2 style='margin-top:0px;margin-bottom:0px;'>
    <?php 
        echo $aventurier->origine." "; 
        if($aventurier->AVENTURIER_AUTRE_METIER != "")
        {
            echo $aventurier->AVENTURIER_AUTRE_METIER;
        }
        else
        {
            if($aventurier->metier_nom != "Aucun")
            {
                echo $aventurier->metier_nom;
            }
            else
            {
                echo "sans profession";
            }
        }        
        echo " de niveau ".$aventurier->AVENTURIER_NIVEAU;
    ?>
    </h2>
    <div style='font-size:150%;color:#900000;'>
        <?php 
            if($aventurier->AVENTURIER_PROVERBE != "")
            {
                echo '<i>"'.$aventurier->AVENTURIER_PROVERBE.'"</i>';
            }
            else
            {
                echo "&nbsp;";
            }
        ?>
       
    </div>
    <div style='font-size:150%;'>
        Sexe : <?php echo $aventurier->AVENTURIER_SEXE;?>
    </div>
    <div style="clear:both;"></div>
    <img style='float:right;' src='view/aventurier/graph_carac_principale.php?COU=<?php echo $aventurier->AVENTURIER_COU;?>&INT=<?php echo $aventurier->AVENTURIER_INT;?>&CHA=<?php echo $aventurier->AVENTURIER_CHA;?>&AD=<?php echo $aventurier->AVENTURIER_AD;?>&FO=<?php echo $aventurier->AVENTURIER_FO;?>'>             
    <table class='carac' style='width:65%;'>
        <thead>        
            <tr>
                <th colspan='5' class='table_titre_2'>CARACTERISTIQUES PRINCIPALES</th>
            </tr>
        </thead>
        <tbody>
            <tr>                
                <th class='table_titre_1'><i style='font-size:70%;'>COURAGE</i><br>(COU)</th>
                <th class='table_titre_1'><i style='font-size:70%;'>INTELLIGENCE</i><br>(INT)</th>
                <th class='table_titre_1'><i style='font-size:70%;'>CHARISME</i><br>(CHA)</th>
                <th class='table_titre_1'><i style='font-size:70%;'>ADRESSE</i><br>(AD)</th>
                <th class='table_titre_1'><i style='font-size:70%;'>FORCE</i><br>(FO)</th>
            </tr>
            <tr>
                <td class='table_titre_1'><?php echo $aventurier->AVENTURIER_COU; ?></td>
                <td class='table_titre_1'><?php echo $aventurier->AVENTURIER_INT; ?></td>
                <td class='table_titre_1'><?php echo $aventurier->AVENTURIER_CHA; ?></td>
                <td class='table_titre_1'><?php echo $aventurier->AVENTURIER_AD; ?></td>
                <td class='table_titre_1'><?php echo $aventurier->AVENTURIER_FO; ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class='carac' style='width:65%;'>
        <thead>        
            <tr>
                <th colspan='5' class='table_titre_2'>COMBAT</th>
            </tr>
        </thead>
        <tbody>
            <tr>                
                <th class='table_titre_1'><i >ATTAQUE</i></th>
                <th class='table_titre_1'><i >PARADE</i></th>
            </tr>
            <tr>
                <td class='table_titre_1'><?php echo $aventurier->AVENTURIER_AT; ?></td>
                <td class='table_titre_1'><?php echo $aventurier->AVENTURIER_PRD; ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <div style="clear:both;"></div>
    <table class='basique' style='width:45%;float:right;max-width:300px;'>
        <thead>
            <tr>
                <th  class='table_titre_2'>Compétences</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class='table_titre_1'>
                    <?php 
                        foreach($aventurier->competences as $competence)
                        {
                            echo "<span style='cursor:help;' title='".str_replace("'","&apos;",$competence->COMPETENCE_SPECIAL)."'>".$competence."</span><br>";
                        }   
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <table class='carac' style='width:65%;'>
        <thead>
            <tr>
                <th colspan='5' class='table_titre_2'>AUTRES CARACTERISTIQUES</th>
            </tr>
            <tr>
                <th class='table_titre_1'>EXPERIENCE</th>
                <th class='table_titre_1'>DESTIN</th>
                <th class='table_titre_1'>EV</th>                
                <th class='table_titre_1'>RESIST. MAGIQUE</th>
                <th class='table_titre_1'>PR MAXIMUM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_XP; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_DESTIN; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_EVACTUEL."/".$aventurier->AVENTURIER_EV; ?></td>                
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_RESISTMAG; ?></td>
                <td  class='table_titre_1'><?php if($aventurier->AVENTURIER_PR_MAX == 0){echo "<i style='font-size:50%;'>Pas de limite</i>";}else{echo $aventurier->AVENTURIER_PR_MAX;} ?></td>
            </tr>
        </tbody>
    </table>    
    <br>
    <?php 
    if($aventurier->utiliseMagie())
    {
    ?>
    <table class='carac' style='width:65%;'>
        <thead>
            <tr>
                <th colspan='3' class='table_titre_2'>CARACTERISTIQUES MAGIQUES</th>
            </tr>
            <tr>
                <th class='table_titre_1'>EA</th>
                <th class='table_titre_1'>MAGIE PHYS</th>
                <th class='table_titre_1'>MAGIE PSY</th>  
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_EAACTUEL."/".$aventurier->AVENTURIER_EA; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_MAGIEPHYS; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_MAGIEPSY; ?></td>                
            </tr>
        </tbody>
    </table>    
    <br>
     <?php 
    }
    ?>
    <table class='carac' style='width:65%;'>
        <thead>
            <tr>
                <th colspan='3' class='table_titre_2'>ARMES</th>
            </tr>
            <tr>
                <th class='table_titre_1' style='width:70%;'>NOM</th>
                <th class='table_titre_1' style='width:15%;'>PI</th>
                <th class='table_titre_1' style='width:15%;'>RUP</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            foreach($aventurier->armes as $arme)
            {
                ?>
                <tr>
                    <td  class='table_titre_1' style='font-size:100%'><?php echo $arme->ARME_NOM; ?></td>
                    <td  class='table_titre_1' style='font-size:100%'><?php echo $arme->ARME_PI; ?></td>
                    <td  class='table_titre_1' style='font-size:100%'><?php echo $arme->ARME_RUP; ?></td>
                </tr>
                <?php 
            }
        ?>            
        </tbody>
    </table>
    
    <br>
   
    <table class='carac' style='width:65%;'>
        <thead>
            <tr>
                <th colspan='5' class='table_titre_2'>RICHESSES</th>
            </tr>
            <tr>
                <th class='table_titre_1'>OR</th>
                <th class='table_titre_1'>ARGENT</th>
                <th class='table_titre_1'>BRONZE</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_OR; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_ARGENT; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_CUIVRE; ?></td>
            </tr>
        </tbody>
    </table>
    <div style='clear:both;'></div>
    <br>
    <div class='hr'></div>
    
    <table class='basique' style='width:100%;'>
        <thead>
            <tr>
                <th class='table_titre_2'>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  class='table_titre_1'>
                    <?php 
                        if($aventurier->AVENTURIER_DESCRIPTION != "")
                        {
                            echo $aventurier->AVENTURIER_DESCRIPTION;
                        }
                        else
                        {
                            echo "<i>Aucune description.</i>";
                        }                        
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <div class='hr'></div>
    <table class='basique'>
        <thead>
            <tr>
                <th class='table_titre_2'>Spécial origine</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  class='table_titre_1'>
                    <?php echo $aventurier->origine->ORIGINE_RESTRICTION; ?><br>
                    <?php echo $aventurier->origine->ORIGINE_BONUS; ?><br>
                </td>
            </tr>
        </tbody>
    </table>
    <br>
    <?php 
        if($aventurier->metier != "Aucun")
        {
            ?>
                <table class='basique'>
                    <thead>
                        <tr>
                            <th class='table_titre_2'>Spécial métier</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class='table_titre_1'>
                                <?php echo $aventurier->metier->METIER_RESTRICTION; ?><br>
                                <?php echo $aventurier->metier->METIER_BONUS; ?><br>
                            </td>
                        </tr>
                    </tbody>
                </table>
            <?php 
        }
    ?>
</div>
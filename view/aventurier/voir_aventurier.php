<?php 
/**
 * @file controler/aventurier/voir_aventurier.php 
 * @brief Cette vue permet de voir les données d'un aventurier.
 * 
 * @author  Birdimol
 * @version 2.0 
 * @date 06 novembre 2015
 */
 ?>
<div id='content'>
    <h1 style='color:#900000;'><?php echo $aventurier->AVENTURIER_NOM;
        if($aventurier->AVENTURIER_IMAGE_URL != "")
        {
            echo "<img src='".$aventurier->AVENTURIER_IMAGE_URL."' style='float:left; width:150px;border:1px #3E404F solid;margin-right:20px;margin-bottom:20px;' />";
        }
    ?></h1>
    <h2>
    <?php 
        echo $aventurier->origine." "; 
        if($aventurier->AVENTURIER_AUTRE_METIER != "")
        {
            echo $aventurier->AVENTURIER_AUTRE_METIER;
        }
        else
        {
            if($aventurier->metier != "Aucun")
            {
                echo $aventurier->metier;
            }
            else
            {
                echo "sans profession";
            }
        }        
        echo " de niveau ".$aventurier->AVENTURIER_NIVEAU;
    ?>
    </h2>
    <div style='font-size:150%;'>
        Sexe : <?php echo $aventurier->AVENTURIER_SEXE;?>
    </div>
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
                <th colspan='5' class='table_titre_2'>CARACTERISTIQUES PRINCIPALES</th>
            </tr>
            <tr>
                <th class='table_titre_1'>COURAGE<br>(COU)</th>
                <th class='table_titre_1'>INTELLIGENCE<br>(INT)</th>
                <th class='table_titre_1'>CHARISME<br>(CHA)</th>
                <th class='table_titre_1'>ADRESSE<br>(AD)</th>
                <th class='table_titre_1'>FORCE<br>(FO)</th>
            </tr>
        </thead>
        <tbody>
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
                <th colspan='4' class='table_titre_2'>AUTRES CARACTERISTIQUES</th>
            </tr>
            <tr>
                <th class='table_titre_1'>EXPERIENCE</th>
                <th class='table_titre_1'>EV MAXIMUM</th>                
                <th class='table_titre_1'>RESISTANCE MAGIQUE</th>
                <th class='table_titre_1'>PR MAXIMUM</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_XP; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_EV; ?></td>                
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_RESISTMAG; ?></td>
                <td  class='table_titre_1'><?php echo $aventurier->AVENTURIER_PR_MAX; ?></td>
            </tr>
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
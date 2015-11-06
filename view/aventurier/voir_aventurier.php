
<div id='content'>
    <h1 style='color:#900000;'><?php echo $aventurier->AVENTURIER_NOM;?></h1>
    <h2>
    <?php 
        echo $aventurier->origine." "; 
        if($aventurier->AUTRE_METIER != "")
        {
            echo $aventurier->AUTRE_METIER;
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
    <div>
        Sexe : <?php echo $aventurier->AVENTURIER_SEXE;?>
    </div>
    <br>
    <table class='carac'>
        <thead>
            <tr>
                <th>COU</th>
                <th>INT</th>
                <th>CHA</th>
                <th>AD</th>
                <th>FO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $aventurier->AVENTURIER_COU; ?></td>
                <td><?php echo $aventurier->AVENTURIER_INT; ?></td>
                <td><?php echo $aventurier->AVENTURIER_CHA; ?></td>
                <td><?php echo $aventurier->AVENTURIER_AD; ?></td>
                <td><?php echo $aventurier->AVENTURIER_FO; ?></td>
            </tr>
        </tbody>
    </table>
    <br>
    <table class='basique'>
        <thead>
            <tr>
                <th>Spécial origine</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <?php echo $aventurier->origine->ORIGINE_RESTRICTION; ?><br>
                    <?php echo $aventurier->origine->ORIGINE_BONUS; ?><br>
                </td>
            </tr>
        </tbody>
    </table>
    
    
    <br><br>
    
    <pre>
        <?php 
            print_r($aventurier);
        ?>
    </pre>
</div>
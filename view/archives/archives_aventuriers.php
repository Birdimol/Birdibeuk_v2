<div id='content'>
    <div><?php echo count($listeAventuriers)." aventuriers trouvés."; ?></div>
    <table class="table">
        <thead>
            <tr>
                <td>NOM</td>
                <td>NIVEAU</td>
                <td>ORIGINE</td>
                <td>METIER</td>
            </tr>            
        </thead>
        <tbody>
            <?php 
               
                foreach($listeAventuriers as $aventurier)
                {
                    echo "<tr>";
                        echo "<td>".$aventurier->AVENTURIER_NOM."</td>";
                        echo "<td>".$aventurier->AVENTURIER_NIVEAU."</td>";
                        echo "<td>".$aventurier->origine."</td>";
                        echo "<td>".$aventurier->metier."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</div>
<?php 
/**
 * @file view/archives/archives_aventuriers.php 
 * @brief Cette vue permet d'afficher la liste des aventuriers.
 *
 * On peut trier les résultats par nom, niveau, metier et origine. On peut aussi filtrer avec un nom spécifique. 
 * @author  Birdimol
 * @version 2.0 
 * @date 06 novembre 2015
 */
?>
<div id='content'>
    <div class='texte_grand centre'><?php echo "Il y a <b>".$compte."</b> aventuriers au total gérés par notre bureau."; ?></div>
    <br>
    <form action="index.php" >
        <input type='hidden' value='<?php echo $_GET["ctrl"]; ?>' name='ctrl' />
        <input type='hidden' value='1' name='index' />
        <input type='hidden' value='<?php echo $_GET["sort"]; ?>' name='sort' />
        <input type='text' name='nom' value='<?php if(isset($_GET["nom"])){echo $_GET["nom"];}?>' placeholder='Rechercher un nom' />
        <button type='submit' class="btn btn-default" style='padding: 2px 8px;margin-top:-3px;' >
            <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
        </button>    
        <div style='float:right;'>
            <?php 
                $index = 0;
                $numero = 1;
                
                while($index < $compte)
                {
                    echo "&nbsp;<a href='index.php?ctrl=archives_aventuriers&index=".$numero."&sort=".$_GET["sort"];
                    if(isset($_GET["nom"])){echo "&nom=".$_GET["nom"];}
                    echo "'><div ";
                    if($numero != $index_choisi)
                    {
                        echo " class='index_table' ";
                    }
                    else
                    {
                        echo " class='index_table_current' ";
                    }
                    echo ">".$numero."</div></a>";
                    $index+=100;
                    $numero++;
                }
            ?>
        </div>
    </form>
    <br>
    <table class="table">
        <thead>
            <tr >
                <th style='border-bottom:2px #3E404F solid;width:300px;'>
                    <span onclick='change_sort("<?php 
                                                    if($_GET["sort"] == "AVENTURIER_NOM-DESC")
                                                    {
                                                        echo "AVENTURIER_NOM-ASC";
                                                    }
                                                    else if($_GET["sort"] == "AVENTURIER_NOM-ASC")
                                                    {
                                                        echo "AVENTURIER_NOM-DESC";
                                                    }
                                                    else
                                                    {
                                                        echo "AVENTURIER_NOM-ASC";
                                                    }
                                                ?>");' style='cursor:pointer;'>NOM 
                        <?php 
                            if($_GET["sort"] == "AVENTURIER_NOM-DESC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-down' ></span>";
                            }
                            else if($_GET["sort"] == "AVENTURIER_NOM-ASC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-up' ></span>";
                            }
                        ?>
                        
                    </span> 
                </th>
                <th style='border-bottom:2px #3E404F solid;width:100px;'>
                    <span onclick='change_sort("<?php 
                                                    if($_GET["sort"] == "AVENTURIER_NIVEAU-DESC")
                                                    {
                                                        echo "AVENTURIER_NIVEAU-ASC";
                                                    }
                                                    else if($_GET["sort"] == "AVENTURIER_NIVEAU-ASC")
                                                    {
                                                        echo "AVENTURIER_NIVEAU-DESC";
                                                    }
                                                    else
                                                    {
                                                        echo "AVENTURIER_NIVEAU-ASC";
                                                    }
                                                ?>");' style='cursor:pointer;'>NIVEAU 
                        <?php 
                            if($_GET["sort"] == "AVENTURIER_NIVEAU-DESC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-down' ></span>";
                            }
                            else if($_GET["sort"] == "AVENTURIER_NIVEAU-ASC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-up' ></span>";
                            }
                        ?>
                        
                    </span> 
                </th>
                <th style='border-bottom:2px #3E404F solid;width:200px;'>
                    <span onclick='change_sort("<?php 
                                                    if($_GET["sort"] == "ORIGINE_NOM-DESC")
                                                    {
                                                        echo "ORIGINE_NOM-ASC";
                                                    }
                                                    else if($_GET["sort"] == "ORIGINE_NOM-ASC")
                                                    {
                                                        echo "ORIGINE_NOM-DESC";
                                                    }
                                                    else
                                                    {
                                                        echo "ORIGINE_NOM-ASC";
                                                    }
                                                ?>");' style='cursor:pointer;'>ORIGINE 
                        <?php 
                            if($_GET["sort"] == "ORIGINE_NOM-DESC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-down' ></span>";
                            }
                            else if($_GET["sort"] == "ORIGINE_NOM-ASC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-up' ></span>";
                            }
                        ?>
                        
                    </span> 
                </th>
                <th style='border-bottom:2px #3E404F solid;width:200px;'>
                <span onclick='change_sort("<?php 
                                                    if($_GET["sort"] == "METIER_NOM-DESC")
                                                    {
                                                        echo "METIER_NOM-ASC";
                                                    }
                                                    else if($_GET["sort"] == "METIER_NOM-ASC")
                                                    {
                                                        echo "METIER_NOM-DESC";
                                                    }
                                                    else
                                                    {
                                                        echo "METIER_NOM-ASC";
                                                    }
                                                ?>");' style='cursor:pointer;'>METIER 
                        <?php 
                            if($_GET["sort"] == "METIER_NOM-DESC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-down' ></span>";
                            }
                            else if($_GET["sort"] == "METIER_NOM-ASC")
                            {
                                echo "<span class='glyphicon glyphicon-menu-up' ></span>";
                            }
                        ?>
                        
                    </span> 
                </th>
            </tr>            
        </thead>
        <tbody>
            <?php 
               
                foreach($listeAventuriers as $aventurier)
                {
                    echo "<tr onclick='voir_aventurier(".$aventurier->AVENTURIER_ID.");' class='ligne_table_selectionnable'>";                        
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
<script>
    function change_sort(sort)
    {
        url = "index.php?ctrl=<?php echo $_GET["ctrl"]; ?>&index=<?php echo $_GET["index"]; ?>&sort="+sort<?php if(isset($_GET["nom"])){echo "+'&nom=".$_GET["nom"]."'";}?>;
        window.location = url;
    }
    
    function voir_aventurier(id)
    {
        url = "index.php?ctrl=voir_aventurier&aventurier_id="+id;
        window.location = url;
    }
</script>
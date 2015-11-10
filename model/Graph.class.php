<?php
/**
 * @file Graph.class.php 
 * @brief Ce fichier définit la classe Graph.
 * @author  Birdimol
 * @version 2.0 
 * @date 30 octobre 2015
 */

 /**
 * @brief La classe Graph.
 *
 * Cette classe permet de générer des graphiques via jpGraph (http://jpgraph.net)
 * @author  Birdimol
 * @version 2.0 
 * @date 28 octobre 2015
 */
 
class GraphJP
{
    public static function Radar($data)
    {
        require_once (__DIR__.'/../include/jpgraph/jpgraph.php');
        require_once (__DIR__.'/../include/jpgraph/jpgraph_radar.php');

        $graph = new RadarGraph(300,300);
        $graph->SetScale('lin',0,50);
        $graph->yscale->ticks->Set(25,5);
        $graph->SetColor('#');

        $graph->SetCenter(0.5,0.55);

        $graph->axis->SetFont(FF_FONT1,FS_BOLD);
        $graph->axis->SetWeight(2);

        // Uncomment the following lines to also show grid lines.
        $graph->grid->SetLineStyle('dashed');
        $graph->grid->SetColor('navy@0.5');
        $graph->grid->Show();

        $graph->ShowMinorTickMarks();

        $graph->title->Set('Quality result');
        $graph->title->SetFont(FF_FONT1,FS_BOLD);
        
        $titles = array();
        $datas = array();
        
        foreach($data as $key=>$value)
        {
            $titles[] = $key;
            $datas[] = $value;
        }
        
        $graph->SetTitles($titles);
        $plot = new RadarPlot($datas);
        
        //$plot->SetLegend('Goal');
        //$plot->SetColor('red','lightred');
        //$plot->SetFillColor('lightblue');
        $plot->SetLineWeight(2);

        $graph->Add($plot);
        $graph->Stroke();
    }
}
<?php 
        require_once (__DIR__.'/../../include/jpgraph/jpgraph.php');
        require_once (__DIR__.'/../../include/jpgraph/jpgraph_radar.php');

        $graph = new RadarGraph(300,250);
        $graph->SetScale('lin',5,17);
        //$graph->yscale->ticks->Set(25,5);
        $graph->SetColor('#D5D5BD');

        $graph->SetCenter(0.5,0.5);

        $graph->axis->HideTicks();
        $graph->axis->HideLAbels();
        $graph->axis->SetColor("#3E404F");
        
        $graph->SetFrame(true,'#3E404F',1);
        
        // Uncomment the following lines to also show grid lines.
        $graph->grid->SetLineStyle('dashed');
        $graph->grid->SetColor('#3E404F');
        $graph->grid->Show();

        //$graph->ShowMinorTickMarks();
        
        $titles = array();
        $datas = array();
        
        foreach($_GET as $key=>$value)
        {
            $titles[] = $key;
            $datas[] = $value;
        }
        
        $graph->SetTitles($titles);
        $plot = new RadarPlot($datas);
        
        //$plot->SetLegend('Goal');
        $plot->SetColor('#900000','lightred');
        $plot->SetFillColor('#E7E7D2');
        $plot->SetLineWeight(2);

        $graph->Add($plot);
        $graph->Stroke();

?>
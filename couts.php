<?php
include('phpgraphlib.php');
$graph = new PHPGraphLib(500,280);
$data = array(23, 45, 20, 44, 41, 18);
$data2 = array(15, 23, 23, 11, 54, 21);
$data3 = array(43, 23, 34, 23, 65, 32);
$data4 = array(43, 15, 34, 23, 53, 45);
$data5 = array(43, 23, 34, 48, 53, 32);
$graph->addData($data, $data2, $data3, $data4, $data5);
$graph->setTitle('Cout par Cycles pour 10 elem ');
$graph->setTitleLocation('left');
$graph->setLegend(true);
$graph->setLegendTitle('Serie 1 à 5');
$graph->setGradient('red', 'white');
$graph->createGraph();


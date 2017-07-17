<?php
include('../phpgraphlib.php');
$graph = new PHPGraphLib(450,300);
$data = array("Algoinsertion" => 1, "AlgoSelection" => -3.6, "AlgoBubble" => 11.0, "AlgoShell" => 30.7,
	"Algoquicksort" => 48.6, "Lastalg" => 59.8);
$graph->addData($data);
$graph->setBarColor('navy');
$graph->setupXAxis(20, 'blue');
$graph->setTitle('Cout des algos pour 10 elements');
$graph->setTitleColor('blue');
$graph->setGridColor('153,204,255');
$graph->setDataValues(true);
$graph->setDataValueColor('navy');
$graph->setDataFormat('Loops');
$graph->setGoalLine('32', 'fuscia', 'dashed');
$graph->createGraph();

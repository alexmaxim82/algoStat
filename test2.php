<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 03/07/2017
 * Time: 16:05
 * @param $array
 */

require_once('algoInsertion.php');
require_once('algoSelection.php');
require_once('algoBubble.php');
$my_array = array(4, 3, 5, 9, 3, 2, 1, 0);
for ($i = 0; $i < count($my_array); $i++)
    echo $my_array[$i];
echo "\r";
$my_sorted_array_data_i = algoInsertion($my_array);
for ($i = 0; $i < count($my_sorted_array_data_i); $i++)
    echo $my_sorted_array_data_i[$i];
$my_sorted_array_data_s = algoSelection($my_array);
for ($i = 0; $i < count($my_sorted_array_data_s); $i++)
    echo $my_sorted_array_data_s[$i];
$my_sorted_array_data_b = algoBulle($my_array);
for ($i = 0; $i < count($my_sorted_array_data_b); $i++)
    echo $my_sorted_array_data_b[$i];
?>
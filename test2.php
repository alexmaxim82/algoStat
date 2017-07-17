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
require_once('generate_array.php');

echo '<br>';
$chi = isset($_GET['nb']) ? $_GET['nb'] : 10;
$my_array = genere_random($chi);
print_r($my_array);
echo '<br>';
algoBulle($my_array);
echo '<br>';
print_r($my_array);
echo '<br>';

echo '<br>';
$chi = isset($_GET['nb']) ? $_GET['nb'] : 10;
$my_array = genere_random($chi);
print_r($my_array);
echo '<br>';
algoInsertion($my_array);
echo '<br>';
print_r($my_array);
echo '<br>';

echo '<br>';
$chi = isset($_GET['nb']) ? $_GET['nb'] : 10;
$my_array = genere_random($chi);
print_r($my_array);
echo '<br>';
algoSelection($my_array);
echo '<br>';
print_r($my_array);
echo '<br>';

die;








var_dump($my_array);
//echo(genere_random($chi));
echo "<br>une série en total random : <br>";
echo "<br>la série trier : <br>";
//$my_array = array(4, 3, 5, 9, 3, 2, 1, 0);
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

echo "une série déjà triée";
echo "\r";
$my_array = array(0, 1, 2, 3, 5, 7, 8, 9);
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


//une série triée en sens inverse????

echo "<p>une série quasiment-triée</p>";
$my_array = array(0, 1, 2, 3, 4, 7, 5, 9);
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

echo "<p>une série avec beaucoup de doublons et très peu de termes uniques</p>";
$my_array = array(4, 4, 5, 5, 3, 3, 1, 0);
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


echo "<p>une moyenne des séries citées ci-dessus</p>";
echo ''


?>
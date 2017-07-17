<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 16/07/2017
 * Time: 16:37
 */
$numbers = range (0, 10);
shuffle($numbers);
foreach($numbers as $number)
{
    echo "$number ";

}

$numbers = range (0, 10);

foreach($numbers as $number)
{
   // echo "$number ";

}

function shuffle_assoc(&$array) {
    $keys = array_keys($array);

    shuffle($keys);

    foreach($keys as $key) {
        $new[$key] = $array[$key];
    }

    $array = $new;

    return true;
}

?>


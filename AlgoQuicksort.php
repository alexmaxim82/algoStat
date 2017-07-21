<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 17/07/2017
 * Time: 15:57
 */
function quicksort (&$array, $lowO, $highO){
 //  mettre le step
    if (sizeof($array) < 2){
     return;
    }
    $pivot = $array[($lowO + $highO)/2];

    $low = $lowO;
    $high = $highO;

    While ($low <= $high){
     while($array[$low]<$pivot){
         $low++;
     }

     while($array[$high]>$pivot){
         $high--;
     }
     if ($low <= $high){

         $temp = $array[$low];
         $array[$low]= $array[$high];
         $array[$high]= $temp;

         $low++;
         $high--;
     }
 }
    if($lowO < $high) {
        quicksort($array, $lowO, $highO);
    }
    if($low < $highO) {
        quicksort($array, $low, $highO);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 10/07/2017
 * Time: 10:56
 */
//require_once('algoBubble.php');
//$ch = 10 ;
function genere_random($ch = 10, $min = 10, $max = 50)
{
    $tab = array();
    for ($i = 0; $i < $ch; $i++) {
        $tab[$i] = mt_rand($min, $max);
//      echo ($tab[$i]) . ";";
    }
    return $tab;
}


//function genere_trie(&$ch){
//$tab = array();
//for ($i = 0; $i < $ch; $i++) {
//    $tab [$i] = rand();
//      echo (sort($tab[$i])) . ";";      }
//}
//
//
//
//function genere_inverse(&$Ch){
//    $tab =array();
//for ($i = 0; $i < $ch;$i++)
//{
//    $tab[$i]= rand();
//    echo (rsort($tab[$i])).";";
//}
//}

//fonction generate_qtriee()boucle


//fonction generate_doublons


//une moyenne des séries citées ci-dessus

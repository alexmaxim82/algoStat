
 <?php
 /**
  * Created by PhpStorm.
  * User: alexm
  * Date: 18/07/2017
  * Time: 14:07
*/
 function genere_random($ch, $min = 10, $max = 50){
 $tab = array();
 for ($i = 0; $i < $ch; $i++) {
 $tab[$i] = mt_rand($min, $max);
 }
 return $tab;
 }
 $chi = isset($_GET['nb']) ? $_GET['nb'] : 10;
 $my_array = genere_random($chi);
 sort($my_array);
 echo '<br>';
 for ($x = 0; $x < $chi ; $x++ ) {
 if( $x % 7 == 0) {
 $my_array[$x] = mt_rand(10, 50);
 }
 }
 echo '<br>';
 print_r($my_array);
 echo '<br>';

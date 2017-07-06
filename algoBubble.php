<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 06/07/2017
 * Time: 12:31
 */

function algoBulle(&$array)
{
    $step = 0;
    if (count($array) > 0)
        do
        {
            $continue = false;
            $j = count($array) - 1;
            while ($j > 0)
            {
                if ($array[$j] < $array[$j - 1])
                {
                    $elem = $array[$j];
                    $array[$j] = $array[$j - 1];
                    $array[$j - 1] = $elem;
                    $continue = true;
                }
                $step++;
                $j--;
            }
        }
        while ($continue);
    echo "nb etape bubble: $step ";
    return ($array);
}
?>
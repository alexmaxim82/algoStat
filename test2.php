<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 03/07/2017
 * Time: 16:05
 */

algoInsertion($array)
{
    $i = 0;
    $size = count($array);
    while ($i < $size)
    {
        $cpy = $array[$i];
        $j = 0;
        while ($j < $i)
        {
            $compared = $array[$j];
            if ($cpy < $compared)
            {
                $array[$j] = $cpy;
                $cpy = $compared;
            }
            $array[$i] = $cpy;
            $j++;
        }
        $i++;
    }
}
?>
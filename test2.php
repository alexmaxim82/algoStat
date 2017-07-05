<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 03/07/2017
 * Time: 16:05
 */

function algoInsertion(&$array)
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

function algoSelection(&$array)
{
    $i = 0;
    $size = count($array);
    while ($i < $size)
    {
        $iElem = $i;
        $Elem = $array[$iElem];
        $j = 0;
        while ($j < $size)
        {
            if ($array[$j] < $Elem)
            {
                $iElem = $j;
                $Elem = $array[$iElem];
            }
            $j++;
        }
        if ($iElem != $i)
        {
            $array[$iElem] = $array[$i];
            $array[$i] = $Elem;
        }
        $i++;
    }
}

algoBulle
?>
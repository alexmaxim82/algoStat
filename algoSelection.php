<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 06/07/2017
 * Time: 12:29
 */

function algoSelection(&$array)
{
    $step = 0;
    $i = 0;
    while ($i < count($array) - 1)
    {
        $iElem = $i;
        $Elem = $array[$iElem];
        $j = $i + 1;
        while ($j < count($array))
        {
            if ($array[$j] < $Elem)
            {
                $iElem = $j;
                $Elem = $array[$iElem];
            }
            $j++;
            $step++;
        }
        if ($iElem != $i)
        {
            $array[$iElem] = $array[$i];
            $array[$i] = $Elem;
        }
        $i++;
    }
    echo "nb etape selection: $step ";
    return ($array);
}
?>
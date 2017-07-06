<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 06/07/2017
 * Time: 12:29
 */

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
    echo $i++;
    return ($array);
}
echo "Selection\n";
?>
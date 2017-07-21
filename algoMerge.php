<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 17/07/2017
 * Time: 17:54
 */
https://fr.m.wikibooks.org/wiki/Impl%C3%A9mentation_d%27algorithmes_classiques/Algorithmes_de_tri/Tri_fusion

function algoMerge(&$array)
{
    $step = 0;
    $i = 0;
    while ($i < count($array) - 1)
    {

        while ($j < count($array))
        {

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
    echo "nb etape merge: $step ";
    return ($array);
}
?>
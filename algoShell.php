<?php
/**
 * Created by PhpStorm.
 * User: alexm
 * Date: 12/07/2017
 * Time: 13:47
 */
//function algoShell(&$array)
//{

//https://fr.m.wikibooks.org/wiki/Impl%C3%A9mentation_d%27algorithmes_classiques/Algorithmes_de_tri/Tri_de_Shell}

function algoShell(&$array)
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
echo "nb etape Shell: $step ";
return ($array);
}
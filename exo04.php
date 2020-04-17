<?php

function sum($arrayOfNumbers)
{
    $sum = 0;

    for ($i = 0; $i < count($arrayOfNumbers); $i++) {
        // On boucle sur $array pour récupérer la valeur actuelle du tableau
        $currentElement = $arrayOfNumbers[$i];

        if (is_array($currentElement)) {
            // Si la valeur contenue dans $currentElement est un tableau on lui applique la fonction Sum()
            $sum = $sum + sum($currentElement);
        } else {
            // Si $currentElement est un entier et non un tableau on l'aditionne à la somme précédente
            $sum += $currentElement;
            // La somme $sum vaudra la somme des précedents éléments plus la somme des élements du tableau $currentElement
        }
    }
    return $sum; // On retourne la somme de tous les élements
}

$numbers = array(1, 2, 3, array(1, 2, 3, array(1, 2, 3)));
$result = sum($numbers);
echo $result;

<?php

// Créer une fonction SumAll qui prend en paramètre 1 entier n où n > 1
// Elle doit retourner la somme de tous les entiers allant de 1 à n.

function sumAll($number)
{
    return (1 + $number) * ($number / 2);
    // $total = 0;

    // for ($i = 0; $i <= $number; $i++) {
    //     $total += $i;
    // }
    // return $total;
}

echo sumAll(500000);

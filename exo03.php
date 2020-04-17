<?php

function CanWrite($magazine, $messageToWrite)
{
    $nbOccurenceByLetter = array();
    for ($i = 0; $i < strlen($magazine); $i++) {
        $currentLetter = $magazine[$i];
        if (array_key_exists($currentLetter, $nbOccurenceByLetter)) {
            $nbOccurenceByLetter[$currentLetter] += 1;
        } else {
            $nbOccurenceByLetter[$currentLetter] = 1;
        }
    }
    for ($i = 0; $i < strlen($messageToWrite); $i++) {
        $letterToWrite = $messageToWrite[$i];
        if (!array_key_exists($letterToWrite, $nbOccurenceByLetter)) {
            return false;
        }
        if ($nbOccurenceByLetter[$letterToWrite] > 0) {
            --$nbOccurenceByLetter[$letterToWrite];
        } else {
            return false;
        }
    }
    return true;
}

if (CanWrite("aba", "aaa")) {
    echo "tu peux ecrire ta lettre";
} else {
    echo "tu ne peux pas ecrire ta lettre";
}

// SOLUTION MOINS OPTI

// function TesterSiJePeuxEcrireAvec($magazine, $message)
// {
//     for ($i = 0; $i < strlen($message); $i++) {
//         $lettreCouranteDuMessage = $message[$i];
//         if ($lettreCouranteDuMessage == " ") {
//             continue;
//         }
//         $lettrePresente = false;
//         for ($j = 0; $j < strlen($magazine); $j++) {
//             $lettreCouranteDuMagazine = $magazine[$j];
//             if ($lettreCouranteDuMessage == $lettreCouranteDuMagazine) {
//                 $lettrePresente = true;
//                 $magazine[$j] = " ";
//                 break;
//             }
//         }
//         if ($lettrePresente == false) {
//             return false;
//         }
//     }
//     return true;
// }

// $magazine = "bonjour aujourd'hui il fait beau";
// $lettre = "content content";

// if (TesterSiJePeuxEcrireAvec($magazine, $lettre)) {
//     echo "tu peux l'ecrire";
// } else {
//     echo "tu peux pas l'ecrire";
// }

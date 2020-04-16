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
    echo "tu ne peux ecrire ta lettre";
}

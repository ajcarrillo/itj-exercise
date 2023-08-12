<?php

function calculateSS(string $driver, string $shipment): float {
    $SS = 0.0;

    $isEven = strlen($shipment) % 2 === 0;

    preg_match_all("/[aeiouAEIOU]/", $driver, $vowelsMatches);
    $numVowels = count($vowelsMatches[0]);

    preg_match_all("/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/", $driver, $consonantsMatches);
    $numConsonants = count($consonantsMatches[0]);

    $SS = $isEven ? $numVowels * 1.5 : $numConsonants;

    for ($i = 2; $i <= strlen($driver); $i++) {
        if (strlen($driver) % $i === 0 && strlen($shipment) % $i === 0) {
            $SS *= 1.5;
            break;
        }
    }

    return $SS;
}


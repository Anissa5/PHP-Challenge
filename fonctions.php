<?php

function afficherPuissances($n) {
    for ($i = 1; $i <= 30; $i++) {
        $resultat = $i ** $n;
        echo $i . "**" . $n . " = " . $resultat . "<br>";
    }
}

afficherPuissances(2);

function estPair($nombre) { 
    if (is_int($nombre) && $nombre % 2 === 0) { 
        return true; 
    } 
        return false; 
}
    
var_dump(estPair(10));


function Premier($nombre) {
    if ($nombre < 2) {
        return false;
    }
    for ($i = 2; $i < $nombre; $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    return true;
}

for ($nombre = 0; $nombre <= 100; $nombre++) {
    if (Premier($nombre)) {
        echo $nombre . " : oui<br>";
    } 
        echo $nombre . " : non<br>";
    
}

function Maximum($nombre1, $nombre2) {
    if ($nombre1 > $nombre2) {
        return $nombre1;
    } 
        return $nombre2;
    
}
    echo Maximum(15, 42);


$texte = "Symfony";


for ($i = strlen($texte) - 1; $i >= 0; $i--) {
    echo $texte[$i];
}

function findMax(array $numbers): int {
    $max = $numbers[0];
    
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] > $max) {
            $max = $numbers[$i];
        }
    }
    return $max;
}
echo findMax([4, 8, 2, 15, 6]);
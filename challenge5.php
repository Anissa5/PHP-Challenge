<?php

$weapons = ['fists', 'whip', 'gun'];
$opponentWeapon = $weapons[rand(0,2)]; // Cela permet de choisir une arme de manière aléatoire.

// TODO

$stevensonWeapon = '???';

if ($opponentWeapon === "gun") {
    $stevensonWeappon = "fists";
}

elseif ($opponentWeapon === "fists") {
        $stevensonWeapon = "whip";
}

elseif ($opponentWeapon === "whip") {
        $stevensonWeapon = "gun";
}
<?php

$livres = array(
"L'île au trésor" => 1883,
"La flèche noire" => 1888,
"Enlevé !" => 1886); 

asort($livres);

foreach ($livres as $titre => $annee) {
    echo " > " . $annee . " - " . $titre ."<br>";
}
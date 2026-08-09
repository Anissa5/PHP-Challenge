<?php

$message1 = "0@sn9sirppa@#?ia’jgtvryko1";

$longueur = strlen($message1);
$chiffreCle = $longueur / 2;

$sousChaine = substr($message1, 5, $chiffreCle);

$nouvelleChaine = str_replace("@#?", " ", $sousChaine);

$resultat = strrev($nouvelleChaine);

echo $resultat;
echo "<br>";

$message2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";

$longueur = strlen($message2);
$chiffreCle = $longueur / 2;

$sousChaine = substr($message2, 5, $chiffreCle);

$nouvelleChaine = str_replace("@#?", " ", $sousChaine);

$resultat = strrev($nouvelleChaine);

echo $resultat;
echo "<br>";

$message3 = "aopi?sgnirts@#?sedhtg+p9l!";

$longueur = strlen($message3);
$chiffreCle = $longueur / 2;

$sousChaine = substr($message3, 5, $chiffreCle);

$nouvelleChaine = str_replace("@#?", " ", $sousChaine);

$resultat = strrev($nouvelleChaine);

echo $resultat;
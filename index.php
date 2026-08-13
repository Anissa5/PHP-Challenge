<?php 

function writeSecretSentence(string $animal, string $chose): string {
    
    return "$animal s'incline face à $chose.";
}

echo writeSecretSentence("L'âne", "la lune");
echo writeSecretSentence("Le lion", "le feu");

$characters = [
    "Negan" => [
        "city" => "The Sanctuary",
        "weapon" => "Lucille"
    ],
    "Daryl" => [
        "city" => "Alexandria",
        "weapon" => "crossbow"
    ],
    "Ezekiel" => [
        "city" => "The Kingdom",
        "weapon" => "Shiva"
    ],
    "Anissniss" => [
        "city" => "Chambly",
        "weapon" => "couteau"
    ]
];

var_dump($characters);
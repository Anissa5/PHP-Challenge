<?php

$films = [
    ["titre" => "Docteur Jekyll et Mister Hyde",
     "année" => 1941,
     "acteurs" => ["Spencer Tracy","Ingrid Bergman","Lana Turner"]
    ],
    ["titre" => "L'île au trésor",
     "année" => 1950,
     "acteurs" => ["Robert Newton","Bobby Driscoll","Basil Sydney"]
    ],
    ["titre" => "L'Enlèvement de David Balfour",
     "année" => 1960,
     "acteurs" => ["Peter Finch","James MacArthur","Peter O'Toole"]
    ]
];

foreach ($films as $film) {
    echo "Dans le film " . $film ["titre"] . ", les principaux acteurs sont : ";
    $compteur = 0;

foreach ($film ["acteurs"] as $acteur) {
    echo $acteur;
    $compteur ++;

if ($compteur < count ($film["acteurs"])) {
    echo ", ";
   }
}
    echo ".<br>";
}

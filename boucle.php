<?php

$tab = [1, 3, 4, 6, 7, 11, 14, 19, 24];

foreach ($tab as $element) {

if ($element % 2 === 0) {
    echo "$element est pair <br>";}
else {
    echo "$element est impair <br>";}
}

$tab = [1, 3, 4, 6, 7, 11, 14, 19, 24];

for ($index = 0; $index < count($tab) - 1 ; $index ++) {
    if ($tab [$index] < $tab [$index + 1]) {
        echo "ordre croissant <br>";
    } else {
        echo "ordre décroissant <br>";
    }
}

for ($index = count($tab) - 1; $index > 0; $index --) {
    if ($tab [$index] < $tab [$index - 1]) {
        echo "ordre croissant <br>";
    } else {
        echo "ordre décroissant <br>";
    }

}


$punition = 1;

while ($punition <= 20) {
    echo "Je dois rester éveiller en cours. <br>";
    $punition ++;
}


for ($ligne = 5; $ligne <= 25; $ligne ++) {
    echo "C'est la ligne n° $ligne <br>";
}

$v = 5;

for ($i = 1; $i <= 10; $i++ ) {
    echo $i . " * " . $v . " = " . ($i * $v) . "<br>";
}

for ($i = 1; $i <= 7; $i ++) {
    for ($j = 1; $j <= $i; $j ++) {
        echo $i;
    }
    echo "<br>";
}

$students = [
    ["firstname" => "Anis",
     "lastname" => "Ghores", 
     "gender" => "M"
], 
    ["firstname" => "Fabienne",
     "lastname" => "Claude",
     "gender" => "F"]
];

foreach ( $students as $student) {
    echo $student["firstname"] . " | ";
    echo $student["lastname"] . " | ";
    echo $student["gender"] . "<br>";
}
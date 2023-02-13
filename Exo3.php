<?php

$num = 123; // choisissez un nombre de trois chiffres
$rand = 0;
$count = 0;

while ($rand != $num) {
    $rand = rand(100, 999);
    $count++;
}
echo "Le nombre de coups nécessaires pour obtenir " . $num . " est de " . $count . ".";

?>

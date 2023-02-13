<?php

function gcd($a, $b) {
    if ($b == 0) {
        return $a;
    }
    return gcd($b, $a % $b);
}

function ppcm($a, $b) {
    return ($a * $b) / gcd($a, $b);
}

$a = intval(readline("Entrez le premier entier : "));
$b = intval(readline("Entrez le deuxième entier : "));

$result = ppcm($a, $b);

echo "Le PPCM de " . $a . " et " . $b . " est " . $result . "\n";

?>

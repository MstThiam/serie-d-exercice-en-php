<?php

// Fonction pour trouver les diviseurs propres d'un nombre
function proper_divisors($n) {
  $divisors = array();
  for ($i = 1; $i < $n; $i++) {
    if ($n % $i == 0) {
        $divisors[] = $i;
    }
  }
  return $divisors;
}

// Fonction pour vérifier si un nombre est parfait
function is_perfect($n) {
  $divisors = proper_divisors($n);
  $sum = array_sum($divisors);
  return $sum == $n;
}

// Demander à l'utilisateur de saisir un nombre
echo "Entrez un nombre: ";
$num = trim(fgets(STDIN));

// Vérifier si le nombre est parfait
if (is_perfect($num)) {
  echo $num . " est un nombre parfait.";
} else {
  echo $num . " n'est pas un nombre parfait.";
}

?>

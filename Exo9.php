<?php
$personnes = array(
    "John" => array(
        "prenom" => "John",
        "ville" => "New York",
        "age" => 35
    ),
    "Jane" => array(
        "prenom" => "Jane",
        "ville" => "Los Angeles",
        "age" => 28
    ),
    "Bob" => array(
        "prenom" => "Bob",
        "ville" => "Chicago",
        "age" => 42
    )
);

// Accéder aux valeurs du tableau
echo $personnes["John"]["prenom"] . "\n";
echo $personnes["Jane"]["ville"] . "\n";
echo $personnes["Bob"]["age"] . "\n";
?> 

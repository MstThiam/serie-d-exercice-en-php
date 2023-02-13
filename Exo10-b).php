<?php
$personnes = array(
    "John" => array(
        "prenom" => "John",
        "ville" => "New York",
        "age" => 35
    ),
    "Jane" => array(
        "prenom" => "Jane",
        "ville" => "London",
        "age" => 28
    ),
    "Alex" => array(
        "prenom" => "Alex",
        "ville" => "Paris",
        "age" => 42
    )
);

foreach ($personnes as $nom => $personne) {
    echo "Nom: " . $nom . "<br>";
    echo "Prénom: " . $personne["prenom"] . "<br>";
    echo "Ville: " . $personne["ville"] . "<br>";
    echo "Age: " . $personne["age"] . "<br><br>";
}
?>
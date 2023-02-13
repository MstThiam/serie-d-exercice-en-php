<?php
$people = array(
    "John Doe" => array("first_name" => "John", "city" => "New York", "age" => 35),
    "Jane Doe" => array("first_name" => "Jane", "city" => "London", "age" => 32),
    "Jim Smith" => array("first_name" => "Jim", "city" => "Paris", "age" => 40),
);

// Accéder aux informations de Jane Doe
echo $people["Jane Doe"]["first_name"]; // Affiche "Jane"
echo $people["Jane Doe"]["city"]; // Affiche "London"
echo $people["Jane Doe"]["age"]; // Affiche "32"
?>
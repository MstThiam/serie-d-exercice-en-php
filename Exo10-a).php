<?php
$people = array(
    "John" => array("first_name" => "John", "city" => "New York", "age" => 35),
    "Jane" => array("first_name" => "Jane", "city" => "Los Angeles", "age" => 28),
    "Jim" => array("first_name" => "Jim", "city" => "Chicago", "age" => 42)
);

foreach ($people as $name => $details) {
    echo "Name: " . $name . "<br>";
    echo "First Name: " . $details["first_name"] . "<br>";
    echo "City: " . $details["city"] . "<br>";
    echo "Age: " . $details["age"] . "<br><br>";
}
?>
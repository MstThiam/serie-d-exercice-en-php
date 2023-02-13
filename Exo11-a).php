<?php
$people = array();
$names = array("John", "Jane", "Jim", "Jessica");
$cities = array("New York", "Los Angeles", "Chicago", "Houston");
$ages = array(30, 27, 35, 32);
$counter = 0;

while($counter < count($names)){
  $person = array(
    "first_name" => $names[$counter],
    "city" => $cities[$counter],
    "age" => $ages[$counter]
  );
  $people[$names[$counter]] = $person;
  $counter++;
}

print_r($people);
?>
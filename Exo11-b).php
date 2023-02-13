<?php

$people = array();
$names = array("John", "Jane", "Jim", "Jack");

$i = 0;
while ($i < count($names)) {
  $person = array(
    "first_name" => $names[$i],
    "city" => "Paris",
    "age" => 30 + $i
  );

  $people[$names[$i]] = $person;
  $i++;
}

print_r($people);

?>
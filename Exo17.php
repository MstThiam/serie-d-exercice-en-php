<?php
function printTable($array) {
    echo "<table border='1'>";
    foreach ($array as $key => $value) {
        echo "<tr>";
        echo "<th>" . $key . "</th>";
        if (is_array($value)) {
            foreach ($value as $subkey => $subvalue) {
                echo "<td>" . $subkey . "</td>";
                echo "<td>" . $subvalue . "</td>";
            }
        } else {
            echo "<td>" . $value . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}
$data = array(
    "Header 1" => array(
        "Column 1" => "Value 1",
        "Column 2" => "Value 2",
        "Column 3" => "Value 3"
    ),
    "Header 2" => array(
        "Column 1" => "Value 4",
        "Column 2" => "Value 5",
        "Column 3" => "Value 6"
    )
);

printTable($data);
?>
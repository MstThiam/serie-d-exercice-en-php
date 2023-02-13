<?php
function capitalizeWords(&$strings) {
    foreach ($strings as &$string) {
        $string = ucfirst(strtolower($string));
    }
}
?>
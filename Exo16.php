<?php
function sin_angle($angle, $unit = 'rad') {
    switch ($unit) {
        case 'rad':
            $sin = sin($angle);
            break;
        case 'deg':
            $angle = deg2rad($angle);
            $sin = sin($angle);
            break;
        case 'grad':
            $angle = $angle * pi() / 200;
            $sin = sin($angle);
            break;
        default:
            $sin = null;
            break;
    }
    return $sin;
}
?>
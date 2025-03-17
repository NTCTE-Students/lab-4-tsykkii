<?php
function celsiusToFahrenheit($celsius) {
    return ($celsius * 9/5) + 32;
}

$tempC = 15;
echo "$tempC °C = " . celsiusToFahrenheit($tempC) . " °F";

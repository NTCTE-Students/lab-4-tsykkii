<?php
function factorial($number) {
    $result = 1;
    for ($i = 2; $i <= $number; $i++) {
        $result *= $i;
    }
    return $result;
}

$number = 5;
echo "Факториал $number: " . factorial($number);
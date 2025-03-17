<?php
function average($array) {
    return array_sum($array) / count($array);
}

$numbers = [2, 6, 8];
echo "Среднее арифметическое: " . average($numbers);
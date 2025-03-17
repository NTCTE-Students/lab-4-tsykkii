<?php
function sumDigits($number) {
    $sum = array_sum(str_split(abs($number)));
    return $sum;
}

$number = 35925;
echo "Сумма цифр: " . sumDigits($number);
<?php
function isPrime($number) {
    if ($number < 2) return false;
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) return false;
    }
    return true;
}

$number = 7;
echo $number . (isPrime($number) ? " - Простое число" : " - Не простое число");
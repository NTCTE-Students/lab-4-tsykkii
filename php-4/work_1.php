<?php
function findMax($array) {
    return max($array);
}

$numbers = [3, 1, 9, 7];
echo "Максимальное число: " . findMax($numbers);
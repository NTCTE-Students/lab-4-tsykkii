<?php
function secondLargest($array) {
    $unique = array_unique($array);
    rsort($unique);
    return $unique[1] ?? null;
}

$numbers = [10, 20, 5, 30, 20];
echo "Второе по величине число: " . secondLargest($numbers);
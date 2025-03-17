<?php
function sortArray($array) {
    sort($array);
    return $array;
}


$numbers = [5, 2, 8, 1];
print_r(sortArray($numbers));
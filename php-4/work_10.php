<?php
function removeDuplicates($array) {
    return array_values(array_unique($array));
}

$numbers = [1, 2, 2, 3, 4, 4];
print_r(removeDuplicates($numbers));
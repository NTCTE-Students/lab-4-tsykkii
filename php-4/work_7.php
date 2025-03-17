<?php
function stringLength($string) {
    $length = 0;
    while (isset($string[$length])) {
        $length++;
    }
    return $length;
}

$text = "hiii bebebe";
echo "Длина строки: " . stringLength($text);
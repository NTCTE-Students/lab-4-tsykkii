<?php
function isPalindrome($string) {
    $cleaned = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));
    return $cleaned === strrev($cleaned);
}

$string = "Madam";
echo isPalindrome($string) ? "Это палиндром" : "Это не палиндром";
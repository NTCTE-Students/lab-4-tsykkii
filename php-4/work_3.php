<?php
function countWords($string) {
    return str_word_count($string);
}

$text = "Hi everyone, today I'm really tired, I barely woke up, and I dreamed something. The dream was really scary, but I don't remember what it was about!!";
echo "Количество слов: " . countWords($text);
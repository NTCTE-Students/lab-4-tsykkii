<?php
function formatDate($date) {
    return date("d/m/Y", strtotime($date));
}

$date = "2025-03-17";
echo "Форматированная дата: " . formatDate($date);
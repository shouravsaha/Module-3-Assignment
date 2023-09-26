<?php
// Create the $numbers array containing numbers from 1 to 10
$numbers = range(1, 10);

// Define a function to filter out even numbers
function filterEvenNumbers($value) {
    return $value % 2 != 0;
}

// Use array_filter to remove even numbers from the $numbers array
$filteredNumbers = array_filter($numbers, 'filterEvenNumbers');

// Print the resulting array
print_r($filteredNumbers);
?>
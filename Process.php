<?php

// Function to count the total number of vowels
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Function to show the occurrences of each vowel
function showVowelOccurrences($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $occurrences = array_fill_keys($vowels, 0);
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $occurrences[strtolower($char)]++;
        }
    }
    return $occurrences;
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input string from the form
    $input_string = $_POST['input_string'];

    // Count the total number of vowels
    $total_vowels = countVowels($input_string);

    // Show occurrences of each vowel
    $vowel_occurrences = showVowelOccurrences($input_string);

    // Display the results
    echo "<h2>Total number of vowels: $total_vowels</h2>";
    echo "<h2>Occurrences of each vowel:</h2>";
    foreach ($vowel_occurrences as $vowel => $count) {
        echo "<p>$vowel: $count</p>";
    }
}

?>

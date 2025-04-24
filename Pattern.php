<?php
// Number of rows
$rows = 7;

// Outer loop for each row
for ($i = 0; $i < $rows; $i++) {
    // Inner loop for spaces
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;"; // Two spaces for better alignment using HTML space
    }
    
    // Inner loop for stars
    for ($k = 0; $k < $rows - $i; $k++) {
        echo "* "; // Star with a space
    }
    
    // Move to the next line after printing each row
    echo "<br>"; // Use <br> to add line breaks in HTML
}
?>

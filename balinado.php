<?php
// Function to calculate the discriminant of a quadratic equation
function calculate_discriminant($a, $b, $c) {
    $discriminant = ($b * $b) - (4 * $a * $c);
    return $discriminant;
}

// Check if the form was submitted
if (isset($_POST['calculateButton'])) {
    // Get the values from the form and convert them to floats
    $a = isset($_POST['A']) ? floatval($_POST['A']) : 0;
    $b = isset($_POST['B']) ? floatval($_POST['B']) : 0;
    $c = isset($_POST['C']) ? floatval($_POST['C']) : 0;
    
    // Calculate the discriminant
    $result = calculate_discriminant($a, $b, $c);
    
    // Display the result
    echo "<h2>The value is: " . $result . "</h2>";
}
?>


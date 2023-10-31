<?php
// Define the number for which you want to calculate the factorial
$number = 5;
$factorial = 1;

if ($number < 0) {
    echo "Factorial is not defined for negative numbers.";
} 
else {
	// Calculate the factorial using a loop
	for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    // Display the result
    echo "The factorial of $number is $factorial";
}
?>


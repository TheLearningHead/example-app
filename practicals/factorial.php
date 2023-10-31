<?php
$number = 5;  // Replace this with the number for which you want to calculate the factorial
$factorial = 1;

if ($number < 0) {
    echo "Factorial is not defined for negative numbers.";
} else {
    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    echo "The factorial of $number is $factorial";
}
?>


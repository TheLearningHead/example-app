<?php
$terms = 10;  // The number of terms in the Fibonacci series you want to print
$firstTerm = 0;
$secondTerm = 1;

echo "Fibonacci Series for the first $terms terms: ";

for ($i = 1; $i <= $terms; $i++) {
    echo $firstTerm;

    if ($i < $terms) {
        echo ", ";
    }

    $nextTerm = $firstTerm + $secondTerm;
    $firstTerm = $secondTerm;
    $secondTerm = $nextTerm;
}

?>


<?php
function generateFibonacci($n) {
    $fibonacciSeries = array();
    
    if ($n >= 1) {
        $fibonacciSeries[] = 0;
    }
    
    if ($n >= 2) {
        $fibonacciSeries[] = 1;
    }
    
    for ($i = 2; $i < $n; $i++) {
        $fibonacciSeries[] = $fibonacciSeries[$i - 1] + $fibonacciSeries[$i - 2];
    }
    
    return $fibonacciSeries;
}

$n = 10; // Change this value to generate a different number of Fibonacci numbers

$fibonacciSeries = generateFibonacci($n);

echo "Fibonacci Series (first $n numbers): ";
echo implode(", ", $fibonacciSeries);
?>


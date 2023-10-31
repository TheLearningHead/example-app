<?php
$a = 5;
$b = 10;

echo "Before swapping:\n";
echo "a = " . $a . "\n";
echo "b = " . $b . "\n";

// Swap the values without a temporary variable
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After swapping:\n";
echo "a = " . $a . "\n";
echo "b = " . $b . "\n";
?>


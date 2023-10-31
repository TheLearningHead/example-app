<?php
$rows = 5;  // The number of rows in the inverted right triangle

for ($i = $rows; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "\n";
}
?>


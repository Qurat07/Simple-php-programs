<?php
// Get values from user or generate random if not provided
$a = isset($_GET['a']) && trim($_GET['a']) !== '' ? $_GET['a'] : rand(1, 100);
$b = isset($_GET['b']) && trim($_GET['b']) !== '' ? $_GET['b'] : rand(1, 100);
$c = isset($_GET['c']) && trim($_GET['c']) !== '' ? $_GET['c'] : rand(1, 100);
$d = isset($_GET['d']) && trim($_GET['d']) !== '' ? $_GET['d'] : rand(1, 100);

// Find greatest and smallest
$greatest = max($a, $b, $c, $d);
$smallest = min($a, $b, $c, $d);

echo "<h2>Comparison Result</h2>";
echo "Values are: $a, $b, $c, $d <br><br>";
echo "Greatest Value: $greatest <br>";
echo "Smallest Value: $smallest";
?>

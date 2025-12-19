<?php
$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$d = $_GET['d'];

$greatest = max($a, $b, $c, $d);
$smallest = min($a, $b, $c, $d);

echo "<h2>Comparison Result</h2>";
echo "Values are: $a, $b, $c, $d <br><br>";
echo "Greatest Value: $greatest <br>";
echo "Smallest Value: $smallest";
?>

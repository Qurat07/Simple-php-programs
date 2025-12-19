<?php
$units = $_GET['units'];
$bill = 0;

if ($units <= 100) {
    $bill = $units * 10;
} elseif ($units <= 200) {
    $bill = (100 * 10) + (($units - 100) * 15);
} elseif ($units <= 300) {
    $bill = (100 * 10) + (100 * 15) + (($units - 200) * 20);
} elseif ($units <= 400) {
    $bill = (100 * 10) + (100 * 15) + (100 * 20) + (($units - 300) * 25);
} elseif ($units <= 500) {
    $bill = (100 * 10) + (100 * 15) + (100 * 20) + (100 * 25) + (($units - 400) * 30);
}

echo "<h2>Electricity Bill</h2>";
echo "Units Used: $units <br>";
echo "Total Bill: Rs. $bill";
?>

<?php
if (isset($_GET['random']) && $_GET['random'] == '1') {
    $units = rand(1, 500);
} elseif (isset($_GET['units']) && trim($_GET['units']) !== '') {
    $units = (int) $_GET['units'];
    if ($units < 1) $units = 1;
} else {
    // neither provided => use random
    $units = rand(1, 500);
}

// (nested slab logic same as above)
$bill = 0;
if ($units <= 100) {
    $bill = $units * 10;
} else {
    if ($units <= 200) {
        $bill = (100 * 10) + (($units - 100) * 15);
    } else {
        if ($units <= 300) {
            $bill = (100 * 10) + (100 * 15) + (($units - 200) * 20);
        } else {
            if ($units <= 400) {
                $bill = (100 * 10) + (100 * 15) + (100 * 20) + (($units - 300) * 25);
            } else {
                if ($units <= 500) {
                    $bill = (100 * 10) + (100 * 15) + (100 * 20) + (100 * 25) + (($units - 400) * 30);
                } else {
                    $bill = "Units exceed 500 (not allowed)";
                }
            }
        }
    }
}

echo "<h2>Electricity Bill</h2>";
echo "Units Used: $units <br>";
echo "Total Bill: Rs. $bill";
?>

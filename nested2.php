<?php
//6th program
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$op = $_GET['operator'];

$result = "";

if ($op == "+") {
    $result = $num1 + $num2;
} else {
    if ($op == "-") {
        $result = $num1 - $num2;
    } else {
        if ($op == "*") {
            $result = $num1 * $num2;
        } else {
            if ($op == "/") {
                if ($num2 == 0) {
                    $result = "Cannot divide by zero";
                } else {
                    $result = $num1 / $num2;
                }
            } else {
                if ($op == "%") {
                    if ($num2 == 0) {
                        $result = "Cannot find modulus with zero";
                    } else {
                        $result = $num1 % $num2;
                    }
                } else {
                    $result = "Invalid Operator";
                }
            }
        }
    }
}

echo "<h2>Mini Calculator</h2>";
echo "Number 1: $num1 <br>";
echo "Number 2: $num2 <br>";
echo "Operator: $op <br>";
echo "Result: $result";


//7th program
$units = $_GET['units'];
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
<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$op = $_GET['operator'];

$result = "";

if ($op == "+") {
    $result = $num1 + $num2;
} elseif ($op == "-") {
    $result = $num1 - $num2;
} elseif ($op == "*") {
    $result = $num1 * $num2;
} elseif ($op == "/") {
    $result = $num2 == 0 ? "Cannot divide by zero" : $num1 / $num2;
} elseif ($op == "%") {
    $result = $num2 == 0 ? "Cannot find modulus with zero" : $num1 % $num2;
}

echo "<h2>Mini Calculator</h2>";
echo "Number 1: $num1 <br>";
echo "Number 2: $num2 <br>";
echo "Operator: $op <br>";
echo "Result: $result";
?>

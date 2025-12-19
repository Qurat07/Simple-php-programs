<?php
$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

$ops = array("+", "-", "*", "/", "%");
$op = $ops[array_rand($ops)];
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
                    $result = "Unknown operator";
                }
            }
        }
    }
}
echo "<h2>Calculator</h2>";
echo "Number 1: $num1 <br>";
echo "Number 2: $num2 <br>";
echo "Randomly selected Operator: $op <br>";
echo "Result: $result";
?>

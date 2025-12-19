<?php
$name = $_GET['name'];
$rollno = $_GET['rollno'];
$php = $_GET['php'];
$java = $_GET['java'];
$html = $_GET['html'];
$python = $_GET['python'];
$css = $_GET['css'];

$TotalMarks = 500;
$ObtainedMarks = $php + $java + $html + $python + $css;
$percentage = ($ObtainedMarks / $TotalMarks) * 100;
$grade ="";

if ($percentage >= 90) {
    $grade = "A+";
} elseif ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 70) {
    $grade = "B";
} elseif ($percentage >= 60) {
    $grade = "C";
} elseif ($percentage >= 50) {
    $grade = "D";
} else {
    $grade = "Fail";
}

echo "<h2>Result</h2>";
echo "Name: $name <br>";
echo "Roll No: $rollno <br>";
echo "Total Marks: $TotalMarks <br>";
echo "Obtained Marks: $ObtainedMarks <br>";
echo "Percentage: " . round($percentage, 2) . "%<br>";
echo "<br>Grade: $grade";
?>

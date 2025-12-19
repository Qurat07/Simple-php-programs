<?php
$name = $_GET['name'];
$rollno = $_GET['rollno'];
$TotalMarks = (int) $_GET['TotalMarks'];

$php    = rand(0, 100);
$java   = rand(0, 100);
$html   = rand(0, 100);
$python = rand(0, 100);
$css    = rand(0, 100);

$ObtainedMarks = $php + $java + $html + $python + $css;
$percentage = $TotalMarks > 0 ? ($ObtainedMarks / $TotalMarks) * 100 : 0;

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
echo "Name: " . htmlspecialchars($name) . " <br>";
echo "Rollno: " . htmlspecialchars($rollno) . " <br>";
echo "Total Marks: $TotalMarks <br><br>";

echo "<strong>Subject Marks </strong><br>";
echo "PHP: $php <br>";
echo "Java: $java <br>";
echo "HTML: $html <br>";
echo "Python: $python <br>";
echo "CSS: $css <br><br>";

echo "Obtained Marks: $ObtainedMarks <br>";
echo "Percentage: " . round($percentage, 2) . "%<br>";
echo "Grade: $grade";
?>

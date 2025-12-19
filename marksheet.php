<?php
$name = $_GET['name'];
$rollno = $_GET['rollno'];
$php = $_GET['php'];
$java = $_GET['java'];
$html = $_GET['html'];
$python = $_GET['python'];
$css = $_GET['css'];

$TotalMarks = 500;
$ObtainedMarks = $java + $html+ $php + $python + $css;
$percentage = ($ObtainedMarks / $TotalMarks)*100;

echo '<h2>Result</h2>';
echo "Name: $name <br>";
echo "Rollno: $rollno <br>";
echo "Total Marks: $TotalMarks <br>";
echo "Obtained Marks: $ObtainedMarks <br>";
echo "Percentage: ". round ($percentage, 2) ."%";
?>
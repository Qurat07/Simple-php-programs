<?php
$start_table = "";
$range_table = "";


if(isset($_GET['start_table']) && $_GET['start_table'] != "") {
    $start_table = (int)$_GET['start_table'];
}
if(isset($_GET['range_table']) && $_GET['range_table'] != "") {
    $range_table = (int)$_GET['range_table'];
}

echo "<h2> Tables Generator</h2>";

if($start_table == "" || $range_table == "") {
    echo "<b style='color:red'>Please fill both fields to generate tables<br></b>";
}

elseif ($start_table > $range_table) {
    echo "<b style='color:red'>Error: Start table ($start_table) is greater than range table ($range_table)</b><br>";
    echo "<b style='color:red'>Number is greater than range</b>";
} else {
    echo "<b>Printing tables from $start_table to $range_table:</b><br><br>";

    for($table = $start_table; $table <= $range_table; $table++) {
        echo "<b>Table of $table:</b><br>";
        
        for($num = 1; $num <= 10; $num++) {
            $result = $table * $num;
            echo "$table x $num = $result<br>";
        }
        echo "<br>";
    }
}
?>

<br>
<form action="tablesgenerator.php" method="get">
    <b>Start of table: </b> 
    <input type="number" name="start_table" value="<?php echo $start_table; ?>" required><br><br>
    
    <b>Range of table: </b> 
    <input type="number" name="range_table" value="<?php echo $range_table; ?>" required><br><br>
    
    <input type="submit" value="Print Tables">
</form>
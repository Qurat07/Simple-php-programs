<br><br>
<form action="primenumber.php"  method="get">
    Start: <input type="number" name="start" value="<?php echo $start; ?>">
    End: <input type="number" name="end" value="<?php echo $end; ?>">
    <input type="submit" value="Show Primes">
</form>
<?php
$start = "";
$end = "";

if(isset($_GET['start'])) {
    $start = $_GET['start'];
}
if(isset($_GET['end'])) {
    $end = $_GET['end'];
}

echo "<b>Prime Numbers from $start to $end:</b><br>";

for($num = $start; $num <= $end; $num++) {
    
    $is_prime = true;

    if($num == 1) {
        $is_prime = false;
    }
    
    for($i = 2; $i < $num; $i++) {
        if($num % $i == 0) {
            $is_prime = false;
            break;
        }
    }
    
    if($is_prime) {
        echo $num . " ";
    }
}
?>

<?php
$final_series = "";

for($i=1; $i<=5; $i++) {

    for($j=1; $j<=$i; $j++) {
        if($i % 2 == 0) {
            echo "*";
            $final_series .= "*";
        }
    }
    echo $i;
    $final_series .= $i;
 
    for($k=1; $k<=$i; $k++) {
        if($i % 2 == 1) {
            echo "*";
            $final_series .= "*";
        }
    }
    
    echo "<br>";
}
echo "<br><br> Print all  : " . $final_series;
?>
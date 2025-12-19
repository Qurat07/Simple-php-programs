<?PHP
$odd_series = "";
$even_series = "";

for($i=1; $i<=20; $i++)
{
    if($i % 2 == 0) {
    echo("<br>This is Even number : ". $i );
    $even_series .= "$i ";
    }
    else {
    echo("<br>This is Odd number : " .$i);
    $odd_series .= "$i ";
}
} 
    echo("<br><br>Even Series: " .$even_series);  
    echo("<br>Odd Series: " .$odd_series);
?>

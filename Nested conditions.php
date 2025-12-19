<?php
//1st program
$b =0;
if($b=1)
  {  echo("<br>if run");
if (5==5)
   { echo("<br><br>if run ");}
else
echo("<br>else run");
}
else
echo("<br>else run");


//2nd program
if (3==4){
    echo("<br><br>if run ");
    echo("<br>else run");
}

//3rd program 
if (10!=5){
    echo("<br><br> yes 10!=5 ");
}else {
    if(10==10){
echo("<br>yes 10==10");
    }
else{
    echo("<br>else run");
}
}
//4th program
if(6==5)
{
    echo("<br><br> outer if execute");
    if(6==6){
    echo("<br> inner if execute");
}
else
    echo("<br>inner else execute");
}
else
    echo("<br><br>outer else execute");


//5th program
if(6==6)
{
    echo("<br><br>outer if execute");
    if(3==6)
    {
        echo("<br>inner if execute ");
    if(3==3)
    {
        echo("<br>next inner if execute ");}
    else
        echo("<br>next inner else execute");
    }
     else
        echo("<br>inner else execute");
} 
    else
        echo("<br>outer else run");


?>
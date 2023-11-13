<?php 

$edad = 0;

while($edad < 18){
    print("eres menor de edad");
    echo "<br>";
    $edad +=1;
}

do{
    print("sigues siendo menor de edad");
    echo "<br>";
    $edad -= 1;
}while($edad< 18 and $edad> 0);





?>
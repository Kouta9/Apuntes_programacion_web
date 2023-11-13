<?php 

$arreglo_asociativo= [
    "nombre" => "Alan",
    "apellidos"=> ["atenco","Alan"],
    "edad"=> 21,
    "direccion"=> "callejon victoria"
];

foreach($arreglo_asociativo as $clave => $valor):
    print_r($clave);
    echo "<br>";
endforeach
?>
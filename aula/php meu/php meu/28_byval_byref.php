<?php
//byref
function acrescentar(&$resultado){
    $resultado .= "texto acrescentado";
}


$texto = "primeiro texto ";
acrescentar($texto);
echo $texto;

//note que não foi nescessario o return

echo "<br>";

//byval
function acrescentar2($resultado2){
    $resultado2 .= "texto acrescentado2";
    //return $resultado2;
}


$texto2 = "primeiro texto2 ";
acrescentar2($texto2);
echo $texto2;

//echo acrescentar2($texto2);

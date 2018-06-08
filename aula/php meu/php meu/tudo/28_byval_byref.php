<?php

function acrescentar(&$resultado){
    $resultado .= " texto acrescentado";
}

$texto = "primeiro texto";
acrescentar($texto);
echo $texto;

//Note que não foi necessário o return
echo '<hr>';

function acrescentar2($resultado2){
    $resultado2 .= " texto acrescentado";
    return $resultado2;
}

$texto2 = "primeiro texto";

echo acrescentar2($texto2);
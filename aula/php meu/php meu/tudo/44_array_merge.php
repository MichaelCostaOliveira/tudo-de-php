<?php

$frutas = array("Laranja", "Limão", "Abacaxi");

$outrasFrutas = array("Banana", "Maça", "Pera");

print_r(array_merge($frutas, $outrasFrutas));

var_dump(array_merge($frutas, $outrasFrutas));

$tudo = array_merge($frutas, $outrasFrutas);
var_dump($tudo);

?>



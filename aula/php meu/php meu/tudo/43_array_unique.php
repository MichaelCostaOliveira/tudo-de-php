<?php

$frutas = array("Maça", "Abacaxi", "Banana", "Abacaxi");

print_r($frutas);

echo '<br/>';

print_r(array_unique($frutas));//Remove os duplicados: Ex.: "Abacaxi"

$unique_frutas = array_unique($frutas);

sort($unique_frutas);

var_dump($unique_frutas);

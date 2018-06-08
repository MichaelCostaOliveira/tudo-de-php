<?php

// O mesmo funciona para métodos de classes
// Obrigamos aceitar somente tipos flutuantes em $num1 ex: 3.4
// Tipos insteiros em $num2
function tresMedia(float $num1, int $num2, float $num3) {
    return ($num1 + $num2 + $num3) / 3;
}

// Aceita somente string, e valida formato de cep ex: 02201-040
function validaCep(string $cep) {
    return preg_match("/^[0-9]{5}-[0-9]{3}$/", $cep);
}
//preg_match faz a validação da expressao regular 00000-000

echo tresMedia(8,3,4).'<hr>';
echo validaCep('01311-100');
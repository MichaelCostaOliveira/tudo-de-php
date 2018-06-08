<?php

class Colaborador{
    Public $nome;
    Public $cargo;
    Public $salario;
    Public function reajuste($renda,$aumento){
        $this->salario=($renda*(1+$aumento/100));
    }
}
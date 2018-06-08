<?php

class Colaborador{
    public $nome;
    public $cargo;
    public $salario;
    public function reajuste($renda,$aumento){
        $this->salario=($renda*(1+$aumento/100));
    }
}
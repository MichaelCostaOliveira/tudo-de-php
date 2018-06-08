<?php
/*PRIVATE só pode ser acessado pela propria classe
PROTECTED pode ser acesssado pela propria classe e pelas filhas
*/
//class abstract não pode ser instanciada
//class final é a ultima classe e não pode ser herdada
abstract class Conta{
    PROTECTED $agencia;
    PROTECTED $conta;
    PROTECTED $titular;
    PROTECTED $saldo = 1000;

    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }
    function sacar($valor){
        $this->saldo = $this->saldo - $valor;
    }
    function ver_saldo(){
        return $this->saldo;
    }
}
class CC extends Conta{
    PROTECTED $limite;
    function sacar($valor){
        if(($this->saldo+$this->limite)>$valor){
            $this->saldo=$this->saldo-$valor;
        }
    }
}

class CP extends Conta{
    PROTECTED $aniversario;
}
$a = new CC;
var_dump($a);   
$a->sacar(10000);
var_dump($a);
$b = new CP;
$b->sacar(10000);
var_dump($b);
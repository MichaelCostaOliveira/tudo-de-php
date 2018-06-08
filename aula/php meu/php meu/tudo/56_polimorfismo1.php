<?php
abstract class Cliente
{
    protected $saldo_min;
    
    public function saldoMinimo()
    {
        $this->saldo_min = 0;
    }
    public function getSaldo(){
        return $this->saldo_min;
    }
}

class Fisico extends Cliente
{
    // Alterando a forma antiga de saldo
    // minimo da classe Cliente
    public function saldoMinimo()
    {
        $this->saldo_min = 100;
    }
}

class Juridico extends Cliente
{
    
}

// Imprime 100
$fisico = new Fisico;
$fisico->saldoMinimo();
echo $fisico->getSaldo();
//var_dump($fisico);
echo '<hr>';
// Imprime 0
$jur = new Juridico;
$jur->saldoMinimo();
echo $jur->getSaldo();
//var_dump($jur);
//note que aqui a comportamento da saldoMinimo de uma das filhas é doferente da outra. Isso é Polimorfismo.
//no modII vai aprofundar mais os conceitos de orientacao a objeto

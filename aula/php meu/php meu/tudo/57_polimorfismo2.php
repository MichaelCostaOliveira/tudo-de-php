<?php
abstract class Cliente
{
    public $nome;
    
    public function imprimeDados ()
    {
        echo $this->nome . '<br>';
    }
    
}
//o bnaco tem dois tipos de cliente: pj e pf
//no cliente temos a função imprime dados
//só que no cliente pf estamos redeclarando (mudando) a função imprimedados
//note que o inicio foi mudado
//e para reaproveitamento de codigo, usamos o parent
//e na juridica ainda adicionamos o cnpj
class Fisico extends Cliente
{
    // Reescrevendo imprimedados
    public function imprimeDados ()
    {
        echo 'Cliente pessoa fisica:<br>';
        // Reaproveitamos a ação da classe
        // pai Cliente
        parent::imprimeDados();
    }
}

class Juridico extends Cliente
{
    public $cnpj;
    // Reescrevendo imprimedados
    public function imprimeDados ()
    {
        // Adicionando ação antes
        echo 'Cliente pessoa Jurica:<br>';
        // Reaproveitamos a ação da classe
        // pai Cliente
        parent::imprimeDados();
        // Adicionando ação depois
        echo 'Cnpj: ' . $this->cnpj;
    }
}

$cliente1 = new Fisico;
$empresa1 = new Juridico;
var_dump($cliente1,$empresa1);
$cliente1->nome = "Léo";
$empresa1->nome = "MacroExcel";
$empresa1->cnpj = "222";
var_dump($cliente1,$empresa1);
$cliente1->imprimedados();
$empresa1->imprimedados();
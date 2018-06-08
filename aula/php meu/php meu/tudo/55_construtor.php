<?php
class Cliente
{
    public $nome;
    public $email;
    public $telefone;

    // Os parametros serão obrigatórios ao instanciarmos
    // a classe Cliente
    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }
}

// Instanciando já informando os dados
$cliente1 = new Cliente('Antonio', 'mail@teste.com');

var_dump($cliente1);



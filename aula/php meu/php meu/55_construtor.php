<?php
class Cliente
{
    public $nome;
    public $email;
    public $telefone;

    // Os parametros serão obrigatórios ao instanciarmos
    // a classe Cliente
    public function __construct($nome, $email, $telefone)
    {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
}

// Instanciando já informando os dados
$cliente1 = new Cliente('Antonio', 'mail@teste.com', '11 5555-5555');

var_dump($cliente1);



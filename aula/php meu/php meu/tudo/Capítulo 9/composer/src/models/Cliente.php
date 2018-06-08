<?php
// Namespace para o Autoload do Composer
// encontra-lo
namespace MeuProjeto\Models;

// Usamos um alias para chamar a classe Validator como um
// simples "v"
use Respect\Validation\Validator as v;

class Cliente 
{
    protected $nome;
    protected $email;
    protected $telefone;
    
    public function __construct($nome, $email, $telefone)
    {
        $this->nome = $nome;
        // Chama o método internamente
        // que valida o email
        $this->setEmail($email);
        $this->telefone = $telefone;
    }
    
    public function setEmail($email) 
    {
        // Usando a classe Validator com o apelido "v"
        $val = v::email()->validate($email);
        if ($val) {
            $this->email = $email;
            return true;
        }
        echo 'Email invalido <br>';
    }
}

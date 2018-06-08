<?php
namespace Impacta;

class Cliente
{
    protected $nome;
    
    protected $email;
    
    protected $senha;

    protected $endereco;

    protected $cidade;

    protected $estado;

    public function __construct(array $post)
    {
        $this->nome = $post['nome'];
        $this->email = $post['email'];
        $this->senha = password_hash($post['senha'], PASSWORD_BCRYPT);
        $this->endereco = $post['endereco'];
        $this->cidade = $post['cidade'];
        $this->estado = $post['estado'];
    }

    public function cadastrar()
    {
        $db = new Database;
        $insert = "INSERT INTO cadastro VALUES 
                    (NULL, '$this->nome', '$this->email', '$this->senha', '$this->endereco', '$this->cidade', '$this->estado')";

        return $db->query($insert);
    }
}
<?php
class Database
{
    public function __construct()
    {
        // Abre a conexão
        $this->con = mysqli_connect('localhost', 'root', '123456', 'Impacta');
    }

    public function __destruct()
    {
        // Fecha a conexão
        mysqli_close($this->con);
    }
}

// Abre conexão
// () são opcionais quando não temos parametros obrigatórios
$db = new Database;

// Encerra a conexão ao destruir o objeto
unset($db); 

// ...





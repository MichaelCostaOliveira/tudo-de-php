<?php
namespace Impacta;

class Produtos
{
    static public function getAll()
    {
        $db = new Database;
        $res = $db->query('SELECT * FROM produtos');
        return mysqli_fetch_all($res, MYSQLI_ASSOC);
    }
}
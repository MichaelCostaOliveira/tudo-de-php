<?php
namespace Impacta;

class Carrinho
{
    static public function getProdutos()
    {
        $db = new Database;

        session_start();
 
        $carrinho = $_SESSION['carrinho'] ?? [];

        $items = [];
        foreach($carrinho as $item) {
            $items[] = $db->getById('produtos', $item, 'nome, preco');
        }
        return $items;
    }
}
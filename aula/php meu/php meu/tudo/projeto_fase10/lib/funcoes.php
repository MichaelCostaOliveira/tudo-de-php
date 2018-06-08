<?php

function float_to_reais(float $valor) : string 
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

function limpa_post(array $post) : array {
    $post_limpo = [];
    foreach ($post as $chave => $valor) {
        $valor_trim = trim($valor);
        // Anti SQL-Injection
        $post_limpo[$chave] = filter_var($valor_trim, FILTER_SANITIZE_MAGIC_QUOTES);

        // Anti XSS
        $post_limpo[$chave] = strip_tags($post_limpo[$chave]);
    }
    return $post_limpo;
}

function add_carrinho($id) {
    session_start();
    $_SESSION[carrinho][] = $id;
}
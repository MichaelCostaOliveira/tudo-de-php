<?php

function float_to_reais(float $valor) : string 
{
    return 'R$ ' . number_format($valor, 2, ',', '.');
}

function limpa_post(array $post) : array{
    $post_limpo = [];
    foreach($post as $chave => $valor ) {//$chave É igual a variavel que recebra a chave do array e $VALOR é a variavel que recebera o valor do array
    $valor_trim = trim($valor);
    //ant SQL-Injection
    $post_limpo[$chave]=filter_var($valor_trim, FILTER_SANITIZE_MAGIC_QUOTES);
    //ANTI xss
    $post_limpo[$chave]=strip_tags($post_limpo[$chave]);
    }
    return $post_limpo;
}
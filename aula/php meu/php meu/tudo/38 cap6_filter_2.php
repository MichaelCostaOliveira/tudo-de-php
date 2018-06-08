<?php
// Get pela URL ?id=aaaawqw 5 asdsadasd

// filter_input pode filtrar os dados diretamente em GET ou POST
// pelas constantes INPUT_GET e/ou INPUT_POST, o segundo parâmetro
// é a chave da array $_GET ou $_POST
$_GET['id'] = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//aqui dentro de id vai virar só 5,
//invés de aaaawqw 5 asdsadasd




// Imprime 5 retirando qualquer char especial ou letras
echo $_GET['id'];

// função que limpa tudo diferente de a-zA-Z
function limpaStr($valor) {
    // preg_replace troca a operação Expressão Regular por ''
    // retirando tudo diferente de a até z e A até Z
    return preg_replace("/[^a-zA-Z]/", '', $valor);
}
//a mesma coisa sendo que exoressoe regulares



//colaca isso na URL
// Get pela URL ?nome=12333Marcela123&&**@#$@%11""
// colocar na url para teste

// filter_input filtrando $_GET['nome'] retirando
// qualquer char diferente de a-zA-Z, colocamos no terceiro parametro
// a função que é chamada para limpar o campo limpaStr
$_GET['nome'] = filter_input(INPUT_GET, 'nome', FILTER_CALLBACK, ['options' => 'limpaStr']);

// Imprime Marcela
echo $_GET['nome'];
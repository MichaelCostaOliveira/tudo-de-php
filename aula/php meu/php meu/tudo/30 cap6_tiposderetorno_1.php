<?php
// Modo restrito, lançará erro em caso de tipo inesperado
declare(strict_types=1);



// Obrigando um parâmetro de função anônima
function func_exec(callable $anon_func) {
    $anon_func();
}

// Podemos criar a closure direto no parâmetro
// ex:
func_exec(function(){ echo 'Ola mundo'; });
//na hora de chamar a funçã, tem q passar uma função anonima como argumento


echo '<hr>';


// Indução de tipo

// Declaramos uma função
// Ao adicionarmos array na frente do parâmetro
// obrigamos que ele seja sempre um array
function imprimeDados (array $dados) {
    echo $dados['codigo'] . '<br>';
    echo $dados['desc'];
}
//obrigar o tipo de dados que será passado no parametro


// Exibirá um erro no PHP informando que o
// parâmetro 1 é uma string e que deve ser um array
// imprimeDados('Uma string qualquer');

$prod = array('codigo'=>13, 'desc'=>'Carrinho de mão');
$p1 = "Produto";
// Irá exibir:
// 13
// Carrinho de mão
imprimeDados($prod);


echo '<hr>';



// O tipo de retorno deve ser float
function addPorcentagem(float $valor, float $porcento) : float {
    //return 'string para forçar o erro';
     return $valor * (1 + $porcento/100); // correta
}

// Parâmetros corretos retorno errado
echo addPorcentagem(222.22, 5.0);



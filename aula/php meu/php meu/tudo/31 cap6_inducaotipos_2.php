<?php

// Declaramos uma classe vazia
// somente para teste
class MinhaClasse {
    
}

class Colaborador{
    public $nome;
    public $idade;
    public $cargo;
    public $renda;
}

$func1 = new Colaborador;
function var_dump_class(Colaborador $teste){
    var_dump($teste);
}
var_dump_class($func1);

// Após a classe existir
// na função obrigamos o parâmetro a 
// ser uma instância da classe MinhaClasse
function debug_class(MinhaClasse $miclass) {
    var_dump($miclass);
}
//só vai entrar o objeto dessa classe
//vc induz a classe 



//função que obriga passar um argumento classe para dentro da função
//para fazer alguma ação (usar essa classe)
//modII produto é uma classe q será adcionada ao carrinho de compras

$obj = new MinhaClasse;


// Devemos obrigatoriamente passar
// um objeto do tipo MinhaClasse
// Imprime object(MinhaClasse)#1 (0) { } 
debug_class($obj);
//tá passando um objeto q foi instanciado nessa classe
<?php

/*
Todo OBJETO é a Instância de uma Classe.
A partir de uma Classe, (com a plavra chave NEW) podemos instanciar (gerar/construir) quantos objetos forem necessários.

O 'NEW' é o Construtor de Objetos.

Os Objetos podem ter Propriedades (Caracteristicas ou Descrições) e Métodos (Ações/Functions).

4 pilares da Orientação Objeto:
Herança, Encapsulamento, Abstração e Polimorfismo.

As Propriedades e Métodos podem ter escopos:
Public, Private, Protected.

Public pode ser acessada por qualquer Objeto;
Private e Protected não pode ser acessada pelos objetos; esta diferença é notada na Herança.
*/

class Pessoa
{
    public $nome;
    protected $idade;
    function setIdade(int $valor){
        if ($valor<=50){
            $this->idade=$valor;
        }else{
            $this->idade=0;
        }
    }
    function getIdade() : int{
        return $this->idade;
    }
}

$aluno1 = new Pessoa;
var_dump($aluno1);
$aluno1->nome = "Marcelo Obara";
//$aluno1->idade = 33;
$aluno1->setIdade(99);
var_dump($aluno1);

if ($aluno1->getIdade()>0){

echo 'O Primeiro Aluno é o(a) '.$aluno1->nome.' e sua idade é: '.$aluno1->getIdade();

}else{

echo 'Sua idade não foi definida ou aceita!!!';    

}
/*
$aluno2 = new Pessoa;
var_dump($aluno2);
$aluno2->nome = "Paola";
$aluno2->idade = 19;
var_dump($aluno2);
echo 'O Primeiro Aluno é o(a) '.$aluno2->nome.' e sua idade é: '.$aluno2->idade;
*/




















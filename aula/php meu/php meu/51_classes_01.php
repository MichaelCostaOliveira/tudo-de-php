<?php

/*todo OBJETO é a instância de uma Classe.
A partir de uma Classe (com a palavra chave NEW), podemos instanciar (gerar/construir)
quantos objetos forem necessários.
O 'NEW' é o Construtor de Objetos.

Os Objetos podem ter Propriedades (Caracteristicas ou Descrições) e
Metodos (Ações/Functions).

4 Pilares de Orientação Obejtos;
Herança, Emcapsulamento, Abstração e Polimorfismo.

As Propriedades e Metodos podem ter escopos:
Public, Private, Protected.

PUBLIC pode ser acessada por qualquer Objeto;
PRIVATE E PROTECTED não pode ser acessada pelos objetos;
Esta diferança é notada na Herança.*/
//THIS-> É  o objeto que representa  a prorpiedade da classe

class Pessoa
{
    public $nome;
    protected $idade;
    function setIdade(int $valor)   {
        if($valor<=50){
            $this->idade=$valor;
        }else{
            //exit('Idade não permitida');
            $this->$valor=0;
        }
        
    }
    function getIdade() : int{
       // echo $$this->idade;
       return $this->idade;
    }
}

$aluno1 = new Pessoa;
var_dump($aluno1);

$aluno1->nome = "Marcelo Obara";
//$aluno1->idade = 22;
$aluno1->setIdade(22);

var_dump($aluno1);
echo 'O primeiro aluno é o' . $aluno1->nome .'. E sua idade é: ' . $aluno1->getIdade();
var_dump($aluno1);

if($aluno1->getIdade()>0){
    echo 'O primeiro Aluno é o (a)' . $aluno1->nome.'e sua idade é: ' .$aluno1->getIdade();
}else{
    echo 'a Sua idade foi deifinida';   
}

$aluno2 = new Pessoa;
$aluno2->nome = "Paola";
$aluno2->setIdade(27);

var_dump($aluno2);
echo 'O primeiro aluno é o' . $aluno2->nome .'. E sua idade é: ' . $aluno2->getIdade();



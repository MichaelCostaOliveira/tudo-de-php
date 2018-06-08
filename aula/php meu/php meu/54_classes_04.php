<?php

/*
Private só pode ser acessado pela própria classe
Protected pode ser acessado pela própria classe e pelas filhas
*/
abstract class Conta{
	protected $agencia;
	protected $conta;
	protected $titular;
	protected $saldo=1000;
	
	function depositar($valor){
		$this->saldo = $this->saldo +
		$valor;
	}
	function sacar($valor){
		$this->saldo = $this->saldo -
		$valor;
	}
	function ver_saldo(){
		return $this->saldo;
	}
}

final Class CC extends Conta{
	protected $limite;
	//override - sobrescrever
	//o metodo da mae
	function sacar($valor){
		if(($this->saldo+$this->limite)>$valor){
			$this->saldo=$this->saldo-$valor;
		}
	}
}
final Class CP extends Conta{
	protected $aniversario;
}
$joao = new CC;
var_dump($joao);

$joao->sacar(100);
var_dump($joao);
$joao->sacar(10000);
var_dump($joao);


$maria = new CP;
var_dump($maria);
$maria->sacar(200);
var_dump($maria);
$maria->sacar(10000);
var_dump($maria);


$eduardo = new conta;
var_dump($eduardo);
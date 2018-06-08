<?php
include_once("conexao.php");

extract($_POST);

if(strlen($nome)>0 && strlen($dataNascimento)>0 && strlen($cpf)>0 && strlen($rg)>0 && strlen($telefone)>0 && strlen($email)>0){
	$usuario = "INSERT INTO clientes (nome, dataNascimento, cpf, rg, telefone, email) VALUES ('$nome', '$dataNascimento', '$cpf', '$rg','$telefone', '$email')";
$resultado_usuario = mysqli_query($conn, $usuario);
	header("Location: index.html");
}else{
	header("Location: adicionar.html");
}



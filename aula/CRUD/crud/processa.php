<?php
session_start();
include_once("conexao.php");

extract($_POST);

$select= "SELECT * FROM crud_inserir WHERE nome = '$nome' AND email ='$email'";
$resultado_select = mysqli_query($conn, $select);
$retorn= mysqli_num_rows($resultado_select);


if($retorn==0){
if(strlen($nome)>0 && strlen($email)>0 && strlen($senha)>0){
	$result_usuario = "INSERT INTO crud_inserir (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);
		$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso!</p>";
	header("Location: inserir.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Preencha todos os campos!</p>";
	header("Location: inserir.php");
}
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário ja existente!</p>";
	header("Location: inserir.php");
}




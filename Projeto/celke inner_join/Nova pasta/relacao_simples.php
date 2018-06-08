<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "funildevendas";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$result_cursos = "SELECT * FROM cursos";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while ($rows_cursos = mysqli_fetch_array($resultado_cursos)) { 
		echo $rows_cursos['nome']."<br>";
		echo $rows_cursos['categoria_id']."<br>";
		$categoria_id = $rows_cursos['categoria_id'];
	 
		$result_categorias = "SELECT * FROM categorias WHERE id = '$categoria_id'";
		$resultado_categorias = mysqli_query($conn, $result_categorias);
		while ($rows_categorias = mysqli_fetch_array($resultado_categorias)) { 
			echo $rows_categorias['nome']."<br><hr>";
		}
	}
	
	
?>
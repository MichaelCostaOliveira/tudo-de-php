<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "funildevendas";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$result_cursos = "SELECT c.*, t. `nome` AS categoria FROM `cursos` AS c
		INNER JOIN `categorias` AS t ON c.`categoria_id` = t.`id`
		ORDER BY c.`nome` ASC";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	while($rows_cursos = mysqli_fetch_assoc($resultado_cursos)){
		echo "Nome do curso: " . $rows_cursos['nome'] . "<br>";
		echo "Categoria do curso: " . $rows_cursos['categoria'] . "<br><hr>";
	}

?>
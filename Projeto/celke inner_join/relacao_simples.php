<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "funildevendas";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	$result_curso = "SELECT * FROM cursos";
	$resultado_curso = mysqli_query($conn, $result_curso);

	while ($rows_curso = mysqli_fetch_array($resultado_curso)){
		echo $rows_curso ['nome'] . "<br>";
		echo $rows_curso ['categoria_id']. "<br>";
		$categoria_id = $rows_curso ['categoria_id'];

	$result_categorias = "SELECT * FROM categorias WHERE id = '$categoria_id'";
	$resultado_categorias = mysqli_query($conn, $result_categorias);
		while($rows_categorias = mysqli_fetch_array($resultado_categorias)) {
			echo $rows_categorias ['nome']. "<br><hr>";
		}
	}


        $m1 = 6;
        for($c=0;$c<=10;$c++){
                if($c=10){
            	$m1 ++;
            }
            echo '<hr> $c x $m1 = ' . ($c*$m1); 

        }
?>


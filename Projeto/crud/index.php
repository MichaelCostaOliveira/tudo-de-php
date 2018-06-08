<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>CRUD - Cadastrar</title>
	</head>
	<body>
		<h1>Cadastrar</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
			<form method="POST" action="processa.php">
				<label>Nome: </label>
				<input type="text" name="nome" placeholder="Digite seu nome"><br><br>

				<label>E-mail: </label>
				<input type="email" name="email" placeholder="Digite seu E-mail"><br><br>

				<input type="submit" name="Cadastrar">
			</form>	
	</body>
</html>
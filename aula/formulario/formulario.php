<?php

#formulario
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title> formulario</title>
	</head>
	<body>
		<form action="metodo-post.php" method="POST">
			<fieldset>
				<legend>Formulario html</legend>
					<p>
						<label for="nome">Nome:</label>
						<input type="text" name="nome" id="nome">
					</p>
					<p>
						<label for="email">E-mail:</label>
						<input type="email" name="email" id="email">
					</p>
			</fieldset>
				<p>
					<input type="submit" value="enviar" id="enviar">
				</p>
		</form>
	</body>
</html>	

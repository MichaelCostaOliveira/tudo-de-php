<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php		
		// Função anonima
		
		$func = function($nome){
			echo"o nome eviado como parametro é: $nome";
		};
		
		function teste($f){
			$f("Maicon");
		}
		
		teste($func);
		//$func("Michael");
		?>
	</body>
</html>	
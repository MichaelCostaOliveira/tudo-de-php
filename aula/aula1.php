<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php


			function &func(){
				$a = [1,2,3];
				print_r($a);
				return $a;
			}
			$valor = &func();
			print_r($valor);

		?>
	</body>
</html>	
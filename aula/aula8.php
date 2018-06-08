<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php		
		// Função anonima
		
		$num = 100;
		$num2 = 100;
		
		$func = function() use (&$num, $num2) {
			//echo "anonima: ". $num;
			$num = 1500;
		};
		
		$func();
		echo $num;
		?>
	</body>
</html>	
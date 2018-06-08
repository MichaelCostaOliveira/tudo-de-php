<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
			class Classe{
				public $a = 1;
				public $b = 2;
				public $c = 3;
			}
			
			$objetoA = new Classe();
			$objetoB = new Classe();
			$objetoC = new Classe();
			
			var_dump($objetoA);
			var_dump($objetoB);
			var_dump($objetoC);
			
			unset($objetoA);
			var_dump($objetoA);
		?>
	</body>
</html>	
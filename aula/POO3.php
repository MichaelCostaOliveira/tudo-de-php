<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
			class Pessoa{
				public $idade = 0;
			}
			
			$p2 = new Pessoa();
			$p1 = new Pessoa();
			
			$p1 -> idade = 21;
			$p2 -> idade = 15;
			
			echo $p1 -> idade . "</br>" . $p2 -> idade;

		?>
	</body>
</html>	
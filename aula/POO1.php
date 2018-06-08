<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
			class Pessoa{
				public $idade = 0;
			}
			
			$p1 = new Pessoa();
			$p2 = new Pessoa();
			
			$p1 -> idade = 21;
			$p2 -> idade = 25;

			echo $p1 -> idade . "<br/>";
			echo $p2 -> idade;

		?>
	</body>
</html>	
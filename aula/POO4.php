<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
			class Pessoa{
				public $idade = 0;
				public function get_idade(){

					return 	$this -> idade;
				}
			}
			$p1 = new Pessoa();
			$p1 -> get_idade();

		?>
	</body>
</html>	
<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
			class Pessoa{
				public $idade = 0;
				public function get_idade(){
					if($this -> idade >=0){
					return 	$this -> idade;
					}else{
						echo "Idade invalida: <br>";
					}
				}

				public function set_idade($idade){
					if($idade > 0){
						$this -> idade =  $idade;
					}else{
						echo "A idade informada é invalida";
					}
				}
			}
			$p1 = new Pessoa();
			$p1 -> set_idade(0);
			echo "<br/>A idade é: {$p1 -> get_idade()}";

		?>
	</body>
</html>	
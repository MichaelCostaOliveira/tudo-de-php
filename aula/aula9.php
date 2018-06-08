<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php		
		// Função anonima
		$quadrado = function($item){
			return $item * $item;
		};
		$cubo = function ($item) use ($quadrado){
			return $quadrado($item) * $item;
		};
		$soma = function ($item){
			return $item + $item;
		};
		
		
		function processa_lista($lista, $fun){
			foreach($lista as &$item){
				$item = $fun($item);
			}
			return $lista;
		}
			echo "Quadrado<br/>";
			print_r(processa_lista(range(1,10), $quadrado));
			
			echo "<br/>Cubo<br/>";
			print_r(processa_lista(range(1,10), $cubo));
			
			echo "<br/>Soma<br/>";
			print_r(processa_lista(range(1,10), $soma));
			
		/*	print_r (processa_lista(range(1,10), 
			function($item){
					return $item -10;
				}
			));*/
			
		?>
	</body>
</html>	
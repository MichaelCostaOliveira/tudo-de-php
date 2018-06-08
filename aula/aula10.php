<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php		
		#função anonima e array
		#array_map(<função.anonima>,<array>)
		
		$lista = [1,2,3,4,5];
		
		$f = function($x){
			return $x * $x;
		};
		
		$lista_proc = array_map($f, $lista);
		print_r($lista_proc);	
			
			
		#array_filter(<array>, <função.anonima>)
		
		$filtro = function($x){
			return $x<3;
		};
		
		$lista_filtro = array_filter($lista, $filtro);
		print_r($lista_filtro);
		?>
	</body>
</html>	
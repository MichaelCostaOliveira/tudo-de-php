<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
			#string double-quoted
			
			#concatenar a+b
			#interpolar
			
			$num = 55;
			
			echo "O valor da variavel nym é:" , $num . "<br/>";
			echo "<br/>O valor da variavel nym é: $num<br/>";
			
			$arr = ["preto", "azul", "amarelo"];
			echo "<br/>A cor da bola é: $arr[1]<br/>";
			
			$a = 10;
			$$a = 50;
			
			echo "O valor de a é: $a e o valor de aa é: ${$a}";
			
			//não pode $$arr[2] = 'Marrom';
			${$arr[2]} = 'Marrom';
			
			echo "<br/>var: $arr[2] , ${$arr[2]}<br/>";
		?>
	</body>
</html>	
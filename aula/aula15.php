<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
			#função strlen() que retorna quantidade de caracteres
			
			$len = strlen('123456abc');
			echo "quantidade de caracteres : $len<br/>";
			
			#função  substr(<string> , <indice>, <len>) que retorna parte de uma string
			#aaabbbccc substr (str,3,3)
			
			$str = 'aaabbbccc';
			$sub = substr($str, 3, 3);
			echo "a parte retornada é: $sub <br/> ";
			
			$sub = substr($str, 3);
			echo "a parte retornada sem <len>: $sub <br/>";
			#função  strtoupper(<string>) converte para letras maiusculas
			$str = 'Michael';
			$up = strtoupper($str);
			echo $up . " maiusculas<br>";
			
			$low = strtolower($str);
			echo $low . " minusculo<br><br>";
			
			#função  str_replace(<conjunto de caracteres>,<nova string>, <os que vao substituir>) substitui uma parte das string por outra
			
			$str = 'aaabbbccc';
			$nova = str_replace('bbb', '---', $str);
			
			echo $str . "<br>";
			echo $nova;
		?>
	</body>
</html>	
=<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php			
			foreach (range(0,9) as $v){
				
				$x = rand(0,9);
				$rel = $v <=>  $x;
				
				echo "v=$v <=> x=$x é $rel <br/>";
			}
		?>
	</body>
</html>	
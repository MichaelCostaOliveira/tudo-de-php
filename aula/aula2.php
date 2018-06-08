<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php			
			function getArea(int $x, int $y ){
				return $x*$y;
			}
			function getSum(...$valores){
				return array_sum($valores);
			}
			echo getArea(10,5)."<br>";
			echo getSum(1,2,3,4,5,6);
		?>
	</body>
</html>	
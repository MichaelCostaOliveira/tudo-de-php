<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php		
			$str = "abc";
			
			
			echo $str . "123";
			
			//echo $str[1];
			//echo $str{0};
			
			$len = strlen($str);
			for($i = 0; $i< $len; $i++){
				echo "<br/>" . $str[$i];
			}
		?>
	</body>
</html>	
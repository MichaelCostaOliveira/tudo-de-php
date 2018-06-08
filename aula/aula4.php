<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php			
		$ddd = $_GET['ddd'] ?? "00";
		$telefone = $_GET['telefone'] ?? $_GET['celular'] ?? "0000-0000";
		
		echo "Tel: ($ddd) $telefone";
		?>
	</body>
</html>	
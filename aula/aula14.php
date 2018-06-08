<html>
	<head>
	<title></title>
	</head>
	<body>
		<?php
		#heredoc e nowdoc
		
		#heredoc = ""
		#nowdoc = ''
		$x= 50;
			$heredoc = <<<TESTE
					<div> O valor da variavel $x é: <div/>
TESTE;
			echo $heredoc;
			
			$nowdoc = <<<'EOT'
			class NowDoc{
				function__construct(){
					
				}
			}
EOT;
		echo $nowdoc;
		?>
	</body>
</html>	
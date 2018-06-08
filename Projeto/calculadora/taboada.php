<?php


$var = 6;
$a = -1;
	while ($a<=10 && $var<=9) {
		$a ++ ; 
		if ($a ==11) {
			$var ++;
			$a = 0;
		}

		$mult = $var * $a;

		echo " valor  $a  x $var = ".$mult . "<br>";
	}

?>
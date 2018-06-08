<?php


echo date('l d/m/Y H:i:s');
echo '<hr>';
echo mktime(10,32,40,11,25,1990);
echo '<hr>';
echo date('l d/m/Y H:i:s',mktime(10,32,40,11,25,1990));
echo '<hr>';
echo date('w');
echo '<hr>';
echo date('H:i',time());
echo '<hr>';
echo strtotime('1990-11-25 10:32:40');
echo '<hr>';
echo date('l d/m/Y H:i:s',strtotime('1990-11-25 10:32:40'));
$s= strtotime('1990-11-25 10:32:40');
echo '<hr>';
echo date('l d/m/Y H:i:s',$s);
<?php

echo rand(0,60);
echo '<hr>';
$n = array(5,26,6,8,32);
echo max($n);
echo '<hr>';
echo min($n);
echo '<hr>';
$r = rand(0,sizeof($n)-1);
echo $n[$r];
echo '<hr>';
echo sizeof($n);    
echo '<hr>';
echo count($n);
echo '<hr>';
//echo rang('a','m');
echo ord('a');
echo '<hr>';
echo ord('f');
echo '<hr>';
echo chr(rand(ord('a'),ord('n')));
echo '<hr>';
echo round(2.3567,2);
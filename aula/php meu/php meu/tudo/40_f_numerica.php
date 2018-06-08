<?php

echo rand(0,60);
echo '<hr>';
$n = array(5,9,22,56,32);
echo max($n);
echo '<hr>';
echo min($n);
$r = rand(0,sizeof($n)-1);
echo '<hr>';
echo $n[$r];
echo '<hr>';
echo sizeof($n);
echo '<hr>';
echo count($n);
echo '<hr>';
//echo rand('a','f');
echo ord('a');
echo '<hr>';
echo ord('f');
echo '<hr>';
echo chr(rand(ord('a'),ord('f')));
echo '<hr>';
echo round(2.3456,2);
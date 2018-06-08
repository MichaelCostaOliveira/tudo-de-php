<?php

for ($a=1;$a<=10;$a++){

echo '<hr>'.$a;

if ($a==7){break;}

}

for ($a=1;$a<=10;$a++){

    if ($a==7){continue;}    

    echo '<hr>'.$a;
     
    }
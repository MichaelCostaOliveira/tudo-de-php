<?php

function precovenda($custo, $margem){
    
    return $custo * (1+$margem/100);
}

//echo precovenda(100,10);
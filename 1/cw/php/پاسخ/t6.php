<?php

$num= (int)strrev(readline('enter number '));
$strlennum  = strlen($num);
for ($i = 0 ; $i < $strlennum ; $i++ ){


    

    $val = $num % 10;
    $num = $num / 10;
    echo "$val : " ; 

    for ($j = 0 ; $j < $val ; $j++)
        echo "$val ";
    
    echo "\n";

}
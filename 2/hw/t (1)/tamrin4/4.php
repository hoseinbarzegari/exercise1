<?php

$str = strtolower(readline("str? "));

$my_arr = [];

for($x = 0; $x < strlen($str) ; $x++){
    $my_array[$str[$x]] ?? $my_array[$str[$x]]=0 ;
    $my_array[$str[$x]]++;
}

$second_string = implode(array_keys($my_array));  

$str3 = "";

foreach($my_array as $key => $value){
    $str3 .= "$key$value";
}

echo "$second_string $str3";

<?php
$X=13;
$N=14;
$FN=0;
if ($N==0){
    $FN=20;
echo "$FN";
}
elseif($N==7)
echo $X;
else{
    $FN=$X-$N;
    if($X<$N){
        $FN=0;
    };
    echo "$FN" ;
}
?>

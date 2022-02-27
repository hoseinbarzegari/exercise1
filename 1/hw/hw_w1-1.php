<?php
$t = (int)readline('Inter Temperature: ');
if($t>=-273 &&  $t<0 ){
echo "Ice";
}
elseif(0<=$t && $t<=100){
    echo "Water";
}
elseif($t>100 && $t<=6000)
    echo "Steam"; 
else 
echo "Invalid";
?>

<?php
$n1=10;
$n2=100;
$o1='*';
$ans=0;

if($o1 == '+')
{
    $ans=$n1+$n2;
    echo "$ans";
}
elseif($o1 == '*')
{  $ans=$n1*$n2;
    echo "$ans";
}
else {
    echo "invalid";
}

?>
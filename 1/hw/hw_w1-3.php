<?php
$k = (int)readline('Inter Number: ');
$sum =0;
for($i=1;$i<=$k;$i++){
    $sum=$sum+$i;
}
echo "$sum\n";
//بدون استفاده از فور از این فرمول هم میتوان استفاده کرد
//echo ($k*($k+1))/2;
?>
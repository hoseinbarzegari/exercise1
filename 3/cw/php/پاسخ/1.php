<?php
$number1 = 4;
$number2 = 20;

function modo($number)
{
    $arr = [];
    for ($i = 1; $i <= $number; $i++) {
        if ($number % $i == 0) {
            $arr[] = $i;

        }
    }
    return $arr;
}
for ($j = $number1; $j <= $number2; $j++) {
    echo $j . ' => ';
    var_dump(modo($j));
    echo '<br>';
}
?>

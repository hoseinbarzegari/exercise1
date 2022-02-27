<?php

function point($c_x, $c_y, $r, $x, $y)
{
    if (($x - $c_x) * ($x - $c_x) + ($y - $c_y) * ($y - $c_y) <= $r * $r)
        return true;
    else
        return false;
}
$x = 1;
$y = 1;

$c_x1 = 0;
$c_y1 = 0;
$r1 = 0.5;

$c_x2 = 1;
$c_y2 = 1;
$r2 = 2;

$c_x3 = 0;
$c_y3 = 1;
$r3 = 2;

$arr = [];

if (point($c_x1, $c_y1, $r1, $x, $y)) {
    $arr[] = 1;
}
else {
    $arr[] = 0;
}
if (point($c_x2, $c_y2, $r2, $x, $y)) {
    $arr[] = 1;
}
else {
    $arr[] = 0;
}
if (point($c_x3, $c_y3, $r3, $x, $y)) {
    $arr[] = 1;
}
else {
    $arr[] = 0;
}
var_dump($arr);
$w = 0;
foreach ($arr as $key => $row) {
    $w += pow(2, $key) * $row;
}
echo $w + 1;
?>
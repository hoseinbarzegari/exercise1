<?php
$arr = array("abcd", "abc", "de", "hjjj", "g", "wer");
$min = PHP_INT_MAX;
$max = 0;
foreach ($arr as $str) {
    $len = strlen($str);

    $max = max($max, $len);

    $min = min($min, $len);
}

$lengths = array_map('strlen', $arr);

$min = min($lengths);
$max = max($lengths);
echo "The shortest array length is $min. The longest array length is $max.";

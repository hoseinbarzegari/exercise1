<?php

$arr = ['a', 'b', 'c'];

function add($key, $value)
{
    global $arr;
    $arr = array_merge($arr, [$key => $value]);
}

function get($key)
{
    global $arr;
    return $arr[$key] ?? null;
}

function remove($key)
{
    global $arr;
    unset($arr[$key]);
}
add('aa', 'bb');
var_dump($arr);
echo '<br>';
echo '<br>';
echo get('aa');
echo '<br>';
echo '<br>';
remove('aa');
var_dump($arr);
?>
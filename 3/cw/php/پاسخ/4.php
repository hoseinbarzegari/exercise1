<?php

function aval($number)
{
    for ($j = 2; $j < $number; $j++) {
        if ($number % $j == 0)
            return '0';
    }
    return '1';
}

function dou_adad_aval($even_namber)
{
    for ($i = 2; $i < $even_namber / 2; $i++) {
        if (aval($i) && aval($even_namber - $i)) {
            echo $i . '  ';
            echo $even_namber - $i . '<br>';
        }
    }
}
dou_adad_aval(100);

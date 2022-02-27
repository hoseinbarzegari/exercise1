<?php
$string1 = 'abcdegdedcba';

function rev($str)
{
    if ($str == strrev($str)) {
        echo 'true';
    }
    echo 'false';
}
rev($string1);
?>
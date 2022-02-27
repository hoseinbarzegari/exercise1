<?php
$string='abcde$ddfd @abcd )der]';
$string2 = preg_replace("/[^a-zA-Z0-9\s]/", "", $string);
echo $string2;
?>
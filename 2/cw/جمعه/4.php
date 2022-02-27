<?php
$date = "2020-01-01 00:00:00";
$pattern = "/[-\s:]/";
$components = preg_split($pattern, $date);
echo "<pre>";
print_r($components);
echo "</pre>";
?>
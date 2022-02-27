<?php
$str ='The quick brown fox';
$words = explode( " ", $str );
array_splice( $words, -1 );

echo implode( " ", $words );
?>
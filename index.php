<?php
require ('vendor/autoload.php');

use HighlightLib\CodeHighlight;
$path = require __DIR__ . '/Config/config.php';
$obj = new CodeHighlight($path);
print_r($obj->highlight('function bubble_Sort ( $my_array ) { do { $swapped = false ; for ( $i = 0 , $c = count ( $my_array ) - 1 ; $i < $c ; $i ++ ) { if ( $my_array [ $i ] > $my_array [ $i + 1 ] ) { list ( $my_array [ $i + 1 ] , $my_array [ $i ] ) = array ( $my_array [ $i ] , $my_array [ $i + 1 ] ) ; $swapped = true ; } } } while ( $swapped ) ; return $my_array ; }'));
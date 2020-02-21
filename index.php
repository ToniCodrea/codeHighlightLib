<?php
require ('vendor/autoload.php');

use HighlightLib\CodeHighlight;
$path = require __DIR__ . '/Config/config.php';
$obj = new CodeHighlight($path);
print_r($obj->highlight('$abc . / ( ) ] ] [ 12354 { } func_num_args abstract true false null '));
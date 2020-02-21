<?php
require ('vendor/autoload.php');

use HighlightLib\CodeHighlight;
$path = require __DIR__ . '/Config/config.php';
$obj = new CodeHighlight($path);
print_r($obj->highlight('( $x ) n 21342'));
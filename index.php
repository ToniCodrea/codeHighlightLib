<?php
require ('vendor/autoload.php');

use HighlightLib\CodeHighlight;

$path = require __DIR__ . '/src/Config/config.php';
$obj = new CodeHighlight($path);
print_r($obj->highlight('$abc $abc abc         false true       __DIR__'));

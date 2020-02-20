<?php
require ('vendor/autoload.php');

use HighlightLib\CodeHighlight;

$path = require __DIR__ . '/src/Config/config.php';
$obj = new CodeHighlight($path);
$obj->highlight('$abc true false . , [ ]');

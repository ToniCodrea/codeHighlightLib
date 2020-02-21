<?php
require ('vendor/autoload.php');

use HighlightLib\CodeHighlight;
$path = require __DIR__ . '/Config/config.php';
$obj = new CodeHighlight($path);
print_r($obj->highlight('function    false    =  abc    de efg       $abv'));
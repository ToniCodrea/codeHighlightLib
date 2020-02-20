<?php
require ('vendor/autoload.php');
use HighlightLib\CodeHighlight;
$obj = new CodeHighlight();
print_r($obj->highlight("asv asasd asd"));
?>

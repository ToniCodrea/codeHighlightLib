<?php
require ('vendor/autoload.php');

use HighlightLib\CodeHighlight;
use HighlightLib\Classes\Classifier\Classifier;

$obj = new CodeHighlight();
$arr = $obj->highlight('1 $abc }}}}} true false');
print_r($arr);
echo "<br />";
$test = new Classifier();
foreach ($arr as $stringToken) {
    $x = $test->classify($stringToken);
    echo $x->getCSSType();
    echo " ";
}


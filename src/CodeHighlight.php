<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Classes\Assembler\Assembler;
use HighlightLib\Classes\Tokenizer\TokenizerClass;
use HighlightLib\Classes\Classifier\Classifier;

class CodeHighlight {
    private $tokenizer;
    private $assembler;
    private $classifier;

    public function __construct($path)  {
        $this->classifier = new Classifier($path);
    }

    public function highlight(string $string): string {
        $this->tokenizer = new TokenizerClass();
        $arr = $this->tokenizer->tokenize($string);
        $assembler = new Assembler();
        $arr2 = array();
        foreach ($arr as $stringToken) {
            $arr2[] = array($stringToken, $this->classifier->classify($stringToken));
        }
        $final = "";
        foreach ($arr2 as $arrToken) {
            $final .= $assembler->assemble($arrToken);
        }
        return $final;
    }
}



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
        $arr2 = array();
        foreach ($arr as $stringToken) {
            $x = $this->classifier->classify($stringToken);
            $arr2[$stringToken] = $x->getCSSType();
        }
        print_r($arr2);
        $assembler = new Assembler();
    }
}



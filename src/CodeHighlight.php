<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Assembler\Assembler;
use HighlightLib\Tokenizer\Tokenizer;
use HighlightLib\Classifier\Classifier;

class CodeHighlight {
    private $tokenizer;
    private $assembler;
    private $classifier;

    public function __construct($path)  {
        $this->classifier = new Classifier($path);
        $this->tokenizer = new Tokenizer();
        $this->assembler = new Assembler();

    }

    public function highlight(string $string): string {
        $arr = array();
        foreach ($this->tokenizer->tokenize($string) as $stringToken) {
            $arr[] = $this->classifier->classify($stringToken);
        }
        //print_r($arr);
        return $this->assembler->assemble($arr);
    }
}



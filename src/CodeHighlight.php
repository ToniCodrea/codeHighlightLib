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
        $this->assembler = new Assembler();
        $final = "";
        foreach ($this->tokenizer->tokenize($string) as $stringToken) {
            $final .= $this->assembler->assemble(array($stringToken, $this->classifier->classify($stringToken)));
        }
        return $final;
    }
}



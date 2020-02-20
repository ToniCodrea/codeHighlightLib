<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Classes\Tokenizer\TokenizerClass;

class CodeHighlight {
    //private $tokenizer;
    //private $assembler;
    //private $classifier;

    /* public function __construct()  {
        $this->tokenizer =
    } */

    public function highlight(string $string): array {
        //var_dump($string);
        $outArray = new TokenizerClass();

        return $outArray->tokenize($string);
    }
}



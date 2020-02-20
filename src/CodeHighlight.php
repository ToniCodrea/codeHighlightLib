<?php

declare(strict_types=1);

namespace HighlightLib;

use HighlightLib\Contracts\Tokenizer\TokenizerClass;

class CodeHighlight {
    //private $tokenizer;
    //private $assembler;
    //private $clasifier;

    //public function __construct(TokenInterface $tokenizer, $assembler, $clasifier )  {
    //}

    public function highlight(string $string): array
    {
        $outArray = new TokenizerClass();

        return $outArray->tokenize($string);
    }
}



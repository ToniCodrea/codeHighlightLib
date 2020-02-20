<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class PunctuationToken implements TokenInterface {

    public function getCSSType(): string {
        return "punctuation";
    }
}
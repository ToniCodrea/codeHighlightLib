<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class PunctuationToken implements TokenInterface {

    public function getCSSType(): string {
        return "punctuation";
    }
}
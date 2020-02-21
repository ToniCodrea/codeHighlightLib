<?php

namespace HighlightLib\Token;

class PunctuationToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "punctuation";
    }
}
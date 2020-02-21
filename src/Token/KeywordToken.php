<?php

namespace HighlightLib\Token;

class KeywordToken extends AbstractToken {

    public function getCSSType(): string
    {
        return "keyword";
    }
}
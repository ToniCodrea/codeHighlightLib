<?php

namespace HighlightLib\Token;
use HighlightLib\Contracts\TokenInterface;

class KeywordToken implements TokenInterface {

    public function getCSSType(): string {
        return "keyword";
    }
}
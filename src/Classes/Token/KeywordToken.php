<?php

namespace HighlightLib\Classes\Token;
use HighlightLib\Contracts\Token\TokenInterface;

class KeywordToken implements TokenInterface {

    public function getCSSType(): string {
        return "keyword";
    }
}